<?php
use Workerman\Worker;
use Workerman\WebServer;
use Workerman\Autoloader;
use PHPSocketIO\SocketIO;

// composer autoload
require_once join(DIRECTORY_SEPARATOR, array(__DIR__, "..", "..", "vendor", "autoload.php"));

$web = new WebServer('http://apitcc-env.ig6d9uf3gk.sa-east-1.elasticbeanstalk.com:2022');
$web->addRoot('apitcc-env.ig6d9uf3gk.sa-east-1.elasticbeanstalk.com/', __DIR__ . '/public');

if (!defined('GLOBAL_START')) {
    Worker::runAll();
}
