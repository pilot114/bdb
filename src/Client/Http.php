<?php

namespace Bdb\Client;

use Bdb\Source;
use \GuzzleHttp\Client as GuzzleClient;

class Http
{
    const TIMEOUT_MILISEC = 10;

    private $transport;

    function __construct()
    {
        $this->transport = new GuzzleClient();
    }

    public function downloadData(string $urlPattern): array
    {
        $urls = $this->extractUrls($urlPattern);

        $batch = [];
        foreach ($urls as $url) {
            try {
                $res = $this->transport->request('GET', $url);
            } catch (\Exception $e) {
                // echo $e->getMessage();
            }


            $batch[] = mb_convert_encoding((string)$res->getBody(), "UTF-8");

            usleep(self::TIMEOUT_MILISEC * 1000);
        }
        return $batch;
    }

    /*
     * возвращает массив реальных URL
     * Больше одного, если исходный URL содержит:
     * range: {startNumber:endNumber}
     * ref: {#SOURCE.FIELD}
     */
    private function extractUrls(string $urlPattern): array
    {
        if (!preg_match('#{(.*)}#', $urlPattern, $matches)) {
            return [$urlPattern];
        };
        $diap = end($matches);

        if (strpos($diap, '#') === 0) {
            // ссылка на датасет
            $ref = substr($diap, 1);
            list($sourceName, $field) = explode('.', $ref);
            $source = Source::getInstanse($sourceName);
            $dataset = $source->get([$field])[$field];

            $urls = [];
            foreach ($dataset as $item) {
                $urls[] = preg_replace('#{(.*)}#', $item, $urlPattern);
            }
            return $urls;
        }

        list($start, $end) = explode(':', $diap);

        $urls = [];
        for ($i = $start; $i <= $end; $i++) {
            $urls[] = preg_replace('#{(.*)}#', $i, $urlPattern);
        }
        return $urls;
    }
}
