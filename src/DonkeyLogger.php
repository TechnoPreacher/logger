<?php

namespace donkeylogger;

use Psr\Log\LoggerInterface;

class DonkeyLogger implements LoggerInterface
{

    private string $fileForLog = "";

    public function __construct()
    {
        $this->fileForLog = $_SERVER['DOCUMENT_ROOT'] . "/log/logs.txt";
        echo $this->fileForLog;
    }

    //ДАТА***УРОВЕНЬ***СООБЩЕНИЕ***КОНТЕКСТ
    public function format($level, $message, $context): string
    {
        $inputData = serialize($context);//cериализация контекста

        $inputData = date('d-m-Y h:m:s ') .
            " *** " .
            $level .
            " *** " .
            $message .
            " *** " .
            $inputData .
            PHP_EOL;

        return $inputData;//возврат строки
    }

    public function write($level, $message, $context): void
    {
        $data = $this->format($level, $message, $context);//форматирую данные
        $file = fopen($this->fileForLog, "a");//открыл файл с указателем в конце
        fwrite($file, $data);//пишу
        fclose($file);//закрываю
        unset($file);//чищу память (нужно ли?)
    }

    public function log($level, \Stringable|string $message, array $context = []): void
    {
        $this->write($level, $message, $context);
    }


    public function emergency(\Stringable|string $message, array $context = []): void
    {
        // TODO: Implement emergency() method.
    }

    public function alert(\Stringable|string $message, array $context = []): void
    {
        // TODO: Implement alert() method.
    }

    public function critical(\Stringable|string $message, array $context = []): void
    {
        // TODO: Implement critical() method.
    }

    public function error(\Stringable|string $message, array $context = []): void
    {
        // TODO: Implement error() method.
    }

    public function warning(\Stringable|string $message, array $context = []): void
    {
        // TODO: Implement warning() method.
    }

    public function notice(\Stringable|string $message, array $context = []): void
    {
        // TODO: Implement notice() method.
    }

    public function info(\Stringable|string $message, array $context = []): void
    {
        // TODO: Implement info() method.
    }

    public function debug(\Stringable|string $message, array $context = []): void
    {
        // TODO: Implement debug() method.
    }


}