<?php
// File is in src/TaxFromMenuExtension.php
namespace Bolt\Extension\Esanum\TaxFromMenu;

use Bolt\Extension\SimpleExtension;

/**
 * An extension for catching koalas.
 *
 * @author Esanum <hubert.horlamus@esanum.de>
 */
class TaxFromMenuExtension extends SimpleExtension
{
    /** @var Application */
    protected $app;

    /**
    * {@inheritdoc}
    */
    public function connect(Application $app)
    {
       $this->app = $app;


        ##### Menu-Einträge auslesen und als Tax. Kategorie-Optionen bereitstellen
        $menu = [];
        $sites = $app['config']->get('menu');
        #$cats  =$app['config']->get('taxonomy/categories/options');
        foreach ($sites as $site) {
            $sitenames = [];
            $sitenames = $site;

            #dump($sitenames);
            foreach ($sitenames as $sitename) {

                $key = rtrim($sitename['path'], "/");
                $path = explode('/', $key);
                $key = $path[count($path)-1];

                #Key-Array-Eintrag erzeugen (Beispiel: "alle-artikel" => "Alle Artikel")
                $menu[$key] = $sitename['label'];
            }
        }

        #dump($cats);
        $app['config']->set('taxonomy/categories/options', $menu);
        #$cats  =$app['config']->get('taxonomy/categories/options');
        #dump($cats);
    }
}
