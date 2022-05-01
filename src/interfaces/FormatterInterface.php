<?php

namespace donkeylogger\interfaces;

interface FormatterInterface
{

    public function format($level, $message, $context): string;

}