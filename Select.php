<?php
namespace Web4cstj\Document;
class Select extends FormField {
    public $choices = [];
    public $current = null;
    public function __construct($name, $choices = [], $current = null)
    {
        parent::__construct('select', $name);
        $this->choices = $choices;
        $this->current = $current;
        $this->setAttribute('name', $name);
        $this->setAttribute('id', $name);
    }
    public function __toString()
    {
        if (is_null($this->_label)) {
            $content = [];
            foreach ($this->choices as $value => $label) {
                $option = new Option($value, $label, $this->current == $value);
                $content[] = $option;
            }
            $this->append($content);
            return parent::__toString();
        }
        return $this->div()->__toString();
    }
    public function clone($deep = false) {
        $clone = parent::clone($deep);
        $clone->choices = array_merge_recursive([], $this->choices);
        $clone->current = $this->current;
        return $clone;
    }
}