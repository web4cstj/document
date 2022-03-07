<?php
class InputCheckbox extends Input
{
    public function __construct($name, $value = null)
    {
        parent::__construct($name, 'checkbox');
        $this->setAttribute('type', 'checkbox');
        if (!is_null($value)) {
            $this->setAttribute('name', $name . '[' . self::slug($value) . ']');
            $this->setAttribute('value', $value);
            $this->setAttribute('id', $name . '_' . self::slug($value));
        }
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
