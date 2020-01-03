<?php

use alibaba\nacos\Nacos;

require_once __DIR__ . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR . 'autoload.php';

const NACO_SERVER = "192.168.5.14";

$host = NACO_SERVER . ":8848/";
$env = "public";
$dataid = "devops.yml";
$group = "DEFAULT_GROUP";


Nacos::init(
    $host,
    $env,
    $dataid,
    $group,
    ""
)->runOnce();


// long loop
Nacos::init(
    $host,
    $env,
    $dataid,
    $group,
    ""
)->listener();


