<?php
class Form extends Element {
    public $action = "";
    public $method = "get";
    public function __construct($action = "", $method = "get")
    {
        parent::__construct("form");
        $this->setAttribute("action", $action);
        $this->setAttribute("method", $method);
    }
}