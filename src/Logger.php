<?php

namespace donkeylogger;

use donkeylogger\interfaces\WriterInterface;
use Psr\Log\LoggerInterface;


class Logger implements LoggerInterface
{
    protected $writer;

    public function __construct(WriterInterface $writer)
    {
        $this->writer=$writer;
    }



    public function emergency(\Stringable|string $message, array $context = []): void
    {
        $this->writer->write("EMERGENCY",$message,$context);
    }

    public function alert(\Stringable|string $message, array $context = []): void
    {
        $this->writer->write("ALERT",$message,$context);
    }

    public function critical(\Stringable|string $message, array $context = []): void
    {
        $this->writer->write("CRITIC",$message,$context);
    }

    public function error(\Stringable|string $message, array $context = []): void
    {
        $this->writer->write("ERROR",$message,$context);
    }

    public function warning(\Stringable|string $message, array $context = []): void
    {
        $this->writer->write("WARNING",$message,$context);
    }

    public function notice(\Stringable|string $message, array $context = []): void
    {
        $this->writer->write("NOTICE",$message,$context);
    }

    public function info(\Stringable|string $message, array $context = []): void
    {
        $this->writer->write("INFO",$message,$context);
    }

    public function debug(\Stringable|string $message, array $context = []): void
    {
        $this->writer->write("DEBUG",$message,$context);
    }

    public function log($level, \Stringable|string $message, array $context = []): void
    {
        $this->writer->write($level,$message,$context);
    }
}