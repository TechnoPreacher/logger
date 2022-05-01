<?php

namespace donkeylogger\interfaces;



Interface WriterInterface
{
    public function write($level, string|\Stringable $message, array $context = []): void;
}