<?php
namespace Web4cstj\Document;
class Textarea extends Element {
    public function __construct($name, $content = [], $cols = 40, $rows = 3)
    {
        parent::__construct('textarea');
        $this->append($content);
        $this->setAttribute('name', $name);
        $this->setAttribute('id', $name);
        $this->setAttribute('cols', $cols);
        $this->setAttribute('rows', $rows);
    }
}