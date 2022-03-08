<?php
namespace Web4cstj\Document;

class Node {
    public $previousSibling = null;
    public $nextSibling = null;
    public $parentNode = null;
    public function __construct()
    {
        
    }
    public function remove() {
        if ($this->parentNode === null) {
            return $this;
        }
        if ($this->previousSibling === null) {
            $this->parentNode->firstChild = $this->nextSibling;
        } else {
            $this->previousSibling->nextSibling = $this->nextSibling;
        }
        if ($this->nextSibling === null) {
            $this->parentNode->lastChild = $this->previousSibling;
        } else {
            $this->previousSibling->nextSibling = $this->nextSibling;
        }
        $this->parentNode = null;
        $this->nextSibling = null;
        $this->previousSibling = null;
        return $this;
    }
    static public function slug($text) {
        return \URLify::slug($text);
    }
}