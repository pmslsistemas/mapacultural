<?php

namespace MetadataKeyword;

use MapasCulturais\App;

class Plugin extends \MapasCulturais\Plugin
{

    function __construct(array $config = [])
    {
        $config += [];

        parent::__construct($config);
    }

    function _init()
    {
        $app = App::i();
        $plugin = $this;

        $this->buildKeywords();
    }

    function register()
    {
    }


    /**
     * @return void
     */
    public function buildKeywords(): void
    {
        /** @var App $app */
        $app = App::i();

        $kw_config = $this->config;
        $count = 0;
        foreach ($kw_config as $slug => $values) {

            foreach ($values as $value) {
                $slo = $slug . "_" . $count;

                $app->hook('repo(<<*>>).getIdsByKeywordDQL.join', function (&$joins, $keyword) use ($value, $slo, $app) {
                    $class_name = $this->getClassName();
                    $metadata = $app->getRegisteredMetadata($class_name);
                    if(!isset($metadata[$value])){
                        return;
                    }
                    

                    $joins .= "
                    LEFT JOIN 
                        e.__metadata " . $slo . "
                    WITH 
                        e.id = " . $slo . ".owner AND " . $slo . ".key = '{$value}' ";
                });

                $app->hook('repo(<<*>>).getIdsByKeywordDQL.where', function (&$where, $keyword) use ($slo, $app, $value) {
                    $class_name = $this->getClassName();
                    $metadata = $app->getRegisteredMetadata($class_name);
                    if(!isset($metadata[$value])){
                        return;
                    }
                   
                    if(trim($where)){
                        $where .= " OR (unaccent(lower(" . $slo . ".value)) LIKE unaccent(lower(:keyword)))";
                    }else{
                        $where .= " (unaccent(lower(" . $slo . ".value)) LIKE unaccent(lower(:keyword)))";
                    }
                });
                $count++;
            }
        }
    }
}
