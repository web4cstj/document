<?php
namespace Web4cstj\Document;

class Form extends Element {
    public function __construct($action = "", $method = "get", $content = [])
    {
        parent::__construct("form", $content);
        $this->setAttribute("action", $action);
        $this->setAttribute("method", $method);
    }
}