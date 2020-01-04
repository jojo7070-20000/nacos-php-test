<?php

use Nacos\Models\Config;
use Nacos\NacosClient;
use Nacos\NacosNaming;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

const NACOS_SERVER = "192.168.5.14";

$port = 8848;
$env = "public";
$dataId = "devops.yml";
$group = "DEFAULT_GROUP";


$client = new NacosClient(NACOS_SERVER, $port);
//$client->setNamespace()

$value = $client->getConfig($dataId, $group);

\var_dump($value);

// 查看内容变更
$config = new Config();
$config->namespace = "public";
$config->dataId = "devops.yml";
$config->group = "DEFAULT_GROUP";
$config->contentMd5 = "e80cb224-cf7d-4f57-a253-b05d382beeca"; // $contentMd5 = md5($content);


$value = $client->listenConfig([
    $config
]);


\var_dump($value);



$naming = new NacosNaming($client);
$instance = $naming->selectOneHealthyInstance('xd-devops-server');

\var_dump($instance);
$instance = $naming->selectOneHealthyInstance('xd-devops-server');

\var_dump($instance);
$instance = $naming->selectOneHealthyInstance('xd-devops-server');

\var_dump($instance);





