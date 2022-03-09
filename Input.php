<?php

namespace Web4cstj\Document;

class Input extends FormField
{
    public function __construct($name, $type = "text", $value = "", $label = null)
    {
        parent::__construct('input', $name, $label);
        $this->noContent = true;
        $this->setAttribute('type', $type);
        $this->setAttribute('value', $value);
    }
    public function __toString()
    {
        if (is_null($this->_label)) return parent::__toString();
        return $this->div()->__toString();
    }
}
