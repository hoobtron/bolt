<?php

/*
 * `dirname(__FILE__)` is intentional to support PHP 5.2 until legacy.php can be shown.
 */
/** @var Silex\Application|false $app */

// default path:
$app = require dirname(__FILE__) . '/../vendor/bolt/bolt/app/web.php';
/* replaced with a link to your own bootstrap file
(by convention it is best to name this .bolt.php since that filename is looked for automatically by other Bolt components) */
#$app = require __DIR__ . '/../.bolt.php';

// If web.php returns false, meaning the path is a file, pass it along.
if ($app === false) {
    return false;
}#


###########
# TODO: auslagern nach: Bolt\Extension\Esanum\TaxFromMenu

##### Menu-Einträge auslesen und als Tax. Kategorie-Optionen bereitstellen
$menu = [];
$sites = $app['config']->get('menu');
foreach ($sites as $site) {
    $sitenames = [];
    $sitenames = $site;

    foreach ($sitenames as $sitename) {

        $key = rtrim($sitename['path'], "/");
        $path = explode('/', $key);
        $key = $path[count($path)-1];

        #Key-Array-Eintrag erzeugen (Beispiel: "alle-artikel" => "Alle Artikel")
        $menu[$key] = $sitename['label'];
    }
}

$app['config']->set('taxonomy/categories/options', $menu);
###########


$app->run();
