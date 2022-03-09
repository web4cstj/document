<?php
namespace Web4cstj\Document;

class Element extends Node
{
    public $name;
    public $firstChild = null;
    public $lastChild = null;
    public $attributes;
    public $noContent = false;
    public function __construct($name = "div", $content = [])
    {
        $this->name = $name;
        $this->attributes = [];
        $this->append($content);
    }
    public function __toString()
    {
        $resultat = '';
        $resultat .= '<' . $this->name;
        if (count($this->attributes) > 0) {
            $resultat .= ' ' . implode(' ', $this->attributes);
        }
        if ($this->noContent) {
            $resultat .= '/>';
            return $resultat;
        }
        $resultat .= '>';
        $node = $this->firstChild;
        while ($node !== null) {
            $resultat .= $node;
            $node = $node->nextSibling;
        }
        $resultat .= '</' . $this->name . '>';
        return $resultat;
    }
    public function setAttribute($name, $value = '') {
        $attribute = new Attribute($name, $value);
        $attribute->ownerElement = $this;
        $this->attributes[$name] = $attribute;
        return $attribute;
    }
    public function getAttribute($name) {
        if (!isset($this->attributes[$name])) {
            return "";
        }
        return $this->attributes[$name]->value;
    }
    public function append($element) {
        if (is_null($element)) {
            return;
        }
        if (is_array($element)) {
            foreach($element as $e) {
                $this->append($e);
            }
            return $element;
        }
        if ($element instanceof Attribute) {
            $element->ownerElement = $this;
            $this->attributes[$element->name] = $element;
            return $element;    
        }
        if ($element instanceof Node) {
            $element->remove();
            if ($this->lastChild === null) {
                $this->firstChild = $element;
            } else {
                $this->lastChild->nextSibling = $element;
            }
            $this->lastChild = $element;
            $element->parentNode = $this;
            return $element;
        }
        return $this->append(new TextNode("$element"));
    }
    static public function create($name = "div")
    {
        return new self($name);
    }
    public function children()
    {
        $resultat = [];
        $child = $this->firstChild;
        while ($child) {
            $resultat[] = $child;
        }
        return $resultat;
    }
    public function clone($deep = true) {
        $clone = new static($this->name);
        $clone->append($this->attributes);
        $clone->noContent = $this->noContent;
        if ($deep) {
            foreach($this->children() as $child) {
                $clone->append($child->clone(true));
            }
        }
        return $clone;
    }
}
