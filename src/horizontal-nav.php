<?php
namespace Mithilinus;

class HorizontalNav extends NavObj {
    public $items = [];
    public $title = "";

    function __construct($title, $items = [] ) {
        $this->init();

    }

    private function init(): void {
        $this->addNavItems($this->items);
    }
    private function addNavItems() {
        foreach($this->items as $item) {
            $this->addNavItem($item);
        };

    }
    private function addNavItem(NavItem $item) {
        array_push($this->items, $item);
    }

    public function getNav(): string {
        $html = "<nav>";
        $html .= $this->buildNav();
        $html .= "</nav>";
        return "";
    }

    private function buildNav(): string{
        $navHTML = "<ul>";
        foreach($this->items as $item) {
            $navHTML .= "<div>";
            $navHTML .= ``;
            $navHTML .= "<div>";
        };
        $navHTML .= "</ul>";
        return $navHTML;
    }
}

?>