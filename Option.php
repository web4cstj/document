<?php
namespace Web4cstj\Document;

class Option extends Element {
    public function __construct($value, $label, $selected=false)
    {
        parent::__construct('option');
        $this->setAttribute('value', $value);
        $this->append($label);
        if ($selected === true) {
            $this->setAttribute('selected', 'selected');
        }
    }
}