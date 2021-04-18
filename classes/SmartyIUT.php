<?php
require_once( __DIR__ . '/../lib/Smarty/Smarty.class.php');

class SmartyIUT extends Smarty {

    public function __construct() {
        parent::__construct(); 

        $this->template_dir = __DIR__ . '/config/templates';
        $this->compile_dir = __DIR__. '/config/templates_c';
        $this->cache_dir = __DIR__ . '/config/cache';
        $this->config_dir =__DIR__ . '/config/config';
    }
}
