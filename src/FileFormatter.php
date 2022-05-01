<?php

namespace donkeylogger;

use donkeylogger\interfaces\FormatterInterface;

class FileFormatter implements FormatterInterface
{

    public function format($level, $message, $context): string
    {

        $inputData = serialize($context);//cериализация контекста

        $inputData = date('d-m-Y h:i:s ') .
            " *** " .
            $level .
            " *** " .
            $message .
            " *** " .
            $inputData .
            PHP_EOL;

        return $inputData;//возврат строки
    }
}