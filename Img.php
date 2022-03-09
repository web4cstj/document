<?php

namespace Web4cstj\Document;

class Img extends Element
{
    public $figure = false;
    public $figcaption = true;
    public function __construct($src, $alt = '')
    {
        parent::__construct('img');
        $this->noContent = true;
        $this->setAttribute('src', $src);
        $this->setAttribute('alt', $alt);
    }
    public function __toString()
    {
        if ($this->figure !== true) {
            return parent::__toString();
        }
        $figure = new Element('figure');
        $figure->append(parent::__toString());
        if ($this->figcaption === true) {
            $figcaption = new Element('figcaption');
            $figcaption->append($this->getAttribute('alt'));
            $figure->content .= $figcaption;
        }
        return $figure->__toString();
    }
    public function clone($deep = false)
    {
        $clone = parent::clone($deep);
        $clone->figure = $this->figure;
        $clone->figcaption = $this->figcaption;
        return $clone;
    }
}
