<?php
namespace Web4cstj\Document;

class Label extends Element {
    public function __construct($for = null, $content = [])
    {
        parent::__construct("label", $content);
        if (!is_null($for)) {
            $this->setAttribute("for", $for);
        }
    }
}