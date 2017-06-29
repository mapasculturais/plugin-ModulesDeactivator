<?php

namespace ModulesDeactivator;

use MapasCulturais\App;

class Plugin extends \MapasCulturais\Plugin {

    public function __construct(array $config = array()) {
        $app = App::i();

        $app->hook('app.modules.init:before', function(&$modules) use($config) {
            foreach ($config as $module_name) {
                if (($key = array_search($module_name, $modules)) !== false) {
                    unset($modules[$key]);
                }
            }
        });

        parent::__construct($config);
    }

    public function _init() {

    }

    public function register() {
        
    }

}
