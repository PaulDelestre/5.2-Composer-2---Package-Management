<?php

require __DIR__ . '/vendor/autoload.php';

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');

echo src\Wcs\Hello::hello();


use HelloWorld\SayHello;

echo HelloWorld\SayHello::world();
?>
