<?php
namespace atk4\atk4tests;

class Controller extends \Controller_Addon {

    public $addon_name='atk4/atk4-tests';

    function init() {
        parent::init();

        if($this->api instanceof \api_Admin) {
            $this->api->routePages('atk4tests');
        }

        $this->addLocation(array(
            'test'=>'collections'
        ));


    }
}
