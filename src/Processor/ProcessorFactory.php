<?php

namespace Bdb\Processor;

class ProcessorFactory
{
    public static function build(string $format)
    {
        if ($format == 'html') {
            return new Html();
        }
        throw new Exception("Unknown proccessor type: " . print_r($type, true), 1);
    }
}
