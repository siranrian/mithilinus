<?php
namespace Mithilinus;


class MithApp {
/**
 * Constructor for the app. Loads in necessary libraries
 *
 * @param string $id
 * @param string $title
 * @param array $opts
 */
    function __construct($id = 'mithApp', $title = 'Mithilinus App', $opts = array()) {
        $this->init();
    }

    private function init(): void {
        $this->loadAppLibraries();
    }

    private function loadAppLibraries(): void {
        
    }

    public function getNav(NavObj $nav ): string {
        return "";
    }

}