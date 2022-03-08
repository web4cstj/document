<?php
namespace Web4cstj\Document;
class A extends Element {
    public function __construct($href, $content = [])
    {
        parent::__construct("a");
        $this->setAttribute('href', $href);
        $this->append($content);
    }
}