<?php
class InputRadio extends Input {
    public function __construct($name, $value)
    {
        parent::__construct($name, 'radio', $value);
        $this->setAttribute('id', $name . '_' . self::slug($value));
    }
    public function __toString()
    {
        if (is_null($this->label)) {
            return parent::__toString();
        }
        $resultat = new Element('label');
        // $resultat->setAttribute('for', $this->getAttribute('name'));
        $resultat->append(Element::__toString());
        $resultat->append(' ' . $this->label);
        return $resultat->__toString();
    }
}