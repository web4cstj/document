<?php
namespace Web4cstj\Document;

class Div extends Element {
    public function __construct($content = [])
    {
        parent::__construct("div", $content);
    }
}