<?php
namespace Web4cstj\Document;

class FormField extends Element {
    public $_label = null;
    public function __construct($name, $fieldName, $label = null)
    {
        parent::__construct($name);
        $this->setAttribute('name', $fieldName);
        $this->setAttribute('id', $fieldName);
        if (!is_null($label)) {
            $this->_label = $label;
        }
    }
    public function getLabel() {
        return $this->_label;
    }
    public function setLabel($value) {
        $this->_label = $value;
        return $this;
    }
    public function label()
    {
        $resultat = new Label($this->getAttribute('name'), $this->_label);
        return $resultat;
    }
    public function div()
    {
        $div = new Div();
        if (!is_null($this->_label)) {
            $div->append($this->label());
        }
        $clone = $this->clone(true);
        $clone->_label = null;
        $div->append($clone);
        return $div;
    }
    public function clone($deep = false) {
        $clone = parent::clone($deep);
        $clone->_label = $this->_label;
        return $clone;
    }
}