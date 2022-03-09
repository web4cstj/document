<?php
namespace Web4cstj\Document;
class Attribute {
    public function __construct($name, $value = "")
    {
        $this->name = $name;
        $this->value = $value;
    }
    public function __toString()
    {
        $resultat = '';
        $resultat .= $this->name;
        $resultat .= '=';
        $resultat .= '"'.$this->value.'"';
        return $resultat;
    }
    public function clone() {
        return new self($this->name, $this->value);
    }
}