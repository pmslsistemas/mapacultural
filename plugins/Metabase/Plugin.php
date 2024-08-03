<?php

namespace Metabase;

use MapasCulturais\App;

class Plugin extends \MapasCulturais\Plugin
{
    function __construct($config = [])
    {
        $config += [
            'links' => [],
            'cards' => [],
        ];

        parent::__construct($config);
    }

    public function _init()
    {
        $app = App::i();
        //load css
        $app->hook('<<GET|POST>>(<<metabase|site>>.<<*>>)', function() use ($app) {
            $app->view->enqueueStyle('app-v2', 'metabase', 'css/plugin-metabase.css');
        });
        $app->hook("component(home-feature):after", function() {
            /** @var \MapasCulturais\Theme $this */
            $this->part('home-metabase');
        });

        $self= $this;
        $app->hook("app.init:after", function() use ($self){
            $this->view->metabasePlugin = $self;
        });

    }

    public function register()
    {
        $app = App::i();

        $app->registerController('metabase', 'Metabase\Controllers\Metabase');
    }
}
