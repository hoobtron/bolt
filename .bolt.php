<?php

# hinzugefügt, damit die Klasse Bolt\Configuration\Composer (Aufruf in .bolt.php) autoloadet wird
require_once __DIR__ . '/vendor/autoload.php';

$configuration = new Bolt\Configuration\Composer(__DIR__);
# $configuration = new Bolt\Configuration\Composer('/www/htdocs/w00c0a5e/bolt/public');
$configuration->setPath('web', 'public');

$app = new Bolt\Application(array('resources'=>$configuration));

$app->initialize();
$config = [
    'application' => $app,
    'resources' => null,
];

return $config;
