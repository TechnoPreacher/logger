<?php

namespace donkeylogger;

use donkeylogger\interfaces\FormatterInterface;
use donkeylogger\interfaces\WriterInterface;

class FileWriter implements WriterInterface
{
    private string $fileForLog = "";
    protected $formatter;

    public function __construct(FormatterInterface $formatter)
    {
        $this->formatter = $formatter;
        $this->fileForLog = "logs.txt";
    }


    public function write($level, string|\Stringable $message, array $context = []): void//сюда приходят отформатированные данные
    {
        $data = $this->formatter->format($level, $message, $context);//форматирую данные

        $file = fopen($this->fileForLog, "a");//открыл файл с указателем в конце
        fwrite($file, $data);//пишу
        fclose($file);//закрываю
        unset($file);//чищу память (нужно ли?)
    }
}