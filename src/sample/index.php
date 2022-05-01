<?php

use donkeylogger\FileFormatter;
use donkeylogger\FileWriter;
use donkeylogger\Logger;

require_once "vendor/autoload.php";




$formatter = new FileFormatter();//форматтер создаётся один раз.
$writer = new FileWriter($formatter);//один раз создайтся врайтер, но он использует уже созданный форматтер
$logger  = new Logger($writer);//ну и создаётся логер, подхватывающий ранее созданный врайтер

$logger->universalWrite("Some message","kk" ,['key' => 'value']);
$logger->universalWrite("Some another message","kk" ,['ky' => 'v']);
$logger->universalWrite("Some third message","kdscfvk" );


