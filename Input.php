<?php
namespace Web4cstj\Document;

class Input extends Element {
    public $label = null;
    public function __construct($name, $type="text", $value="")
    {
        parent::__construct('input');
        $this->noContent = true;
        $this->setAttribute('type', $type);
        $this->setAttribute('name', $name);
        $this->setAttribute('id', $name);
        $this->setAttribute('value', $value);
    }
    public function __toString()
    {
        if (is_null($this->label)) return parent::__toString();
        $resultat = new Div();
        $label = $resultat->append(new Element('label'));
        $label->setAttribute('for', $this->getAttribute('name'));
        $label->append($this->label);
        $resultat->append(parent::__toString());
        return $resultat->__toString();
    }
}