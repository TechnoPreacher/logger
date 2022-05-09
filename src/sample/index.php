<?php

use donkeylogger\FileFormatter;
use donkeylogger\FileWriter;
use donkeylogger\Logger;

require_once "vendor/autoload.php";




$formatter = new FileFormatter();//форматтер создаётся один раз.
$writer = new FileWriter($formatter);//один раз создайтся врайтер, но он использует уже созданный форматтер
$logger  = new Logger($writer);//ну и создаётся логер, подхватывающий ранее созданный врайтер

$logger->log("CUSTOM LEVEL","kk" ,['key' => 'value']);
$logger->debug("Some another message",['ky' => 'v']);
$logger->emergency("Some third message","kdscfvk" );


