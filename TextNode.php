<?php
namespace Web4cstj\Document;

class TextNode extends Node {
    public $value = "";
    public function __construct($value = "") {
        $this->value = $value;
    }
    public function __toString()
    {
        return $this->value;
    }
    public function clone() {
        $resultat = new self($this->value);
        return $resultat;
    }
}