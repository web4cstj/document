<?php
namespace Web4cstj\Document;
class Select extends Element {
    public $choices = [];
    public $current = null;
    public function __construct($name, $choices = [], $current = null)
    {
        parent::__construct('select');
        $this->choices = $choices;
        $this->current = $current;
        $this->setAttribute('name', $name);
        $this->setAttribute('id', $name);
    }
    public function __toString()
    {
        $content = [];
        foreach ($this->choices as $value => $label) {
            $option = new Option($value, $label, $this->current == $value);
            $content[] = $option;
        }
        $this->append($content);
        return parent::__toString();
    }
}