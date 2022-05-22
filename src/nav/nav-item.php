<?php
namespace MithApp\Nav;

class NavItem {
    public string $id;
    public string $displayName;
    public string $href;
    public array $args;

    /**
     * Constructs a menu item to be added to the navigation 
     *
     * @param string $id
     * @param string $displayName
     * @param string $href
     * @param array $args
     */
    function __construct(string $id, string $displayName, string $href, array $args = []) {
        $this->id = $id;
        $this->displayName = $displayName;
        $this->href = $href;
        $this->args = $args;
        $this->init();
    }

    private function init(): void {

    }
}

?>