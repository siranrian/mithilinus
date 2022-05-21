<?php
namespace Mithilinus;

abstract class NavObj {
    var $items = Array(); 
    
    function __construct() {
        $this->init();
    }

    private function init(): void {

    }

    private function addNavItem(string $id, string $displayName, string $href) {

    }
}

?>