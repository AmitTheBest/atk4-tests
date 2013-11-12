<?php
namespace atk4\atk4tests;

class Controller extends \Controller_Addon {
    function init() {
        parent::init();

        if($this->api instanceof \api_Admin) {

            $this->api->routePages('atk4tests');
        }

    }
}
