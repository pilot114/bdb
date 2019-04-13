<?php

namespace Bdb\Client;

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
     * Больше одного, если исходный URL содержит паттерн вида {startNumber:endNumber}
     */
    private function extractUrls(string $urlPattern): array
    {
        if (!preg_match('#{(.*)}#', $urlPattern, $matches)) {
            return [$urlPattern];
        };
        list($start, $end) = explode(':', end($matches));

        $urls = [];
        for ($i = $start; $i <= $end; $i++) {
            $urls[] = preg_replace('#{(.*)}#', $i, $urlPattern);
        }
        return $urls;
    }
}
