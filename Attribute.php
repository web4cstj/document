<?php
namespace Web4cstj\Document;
class Attribute {
    public function __construct($nom, $valeur = "")
    {
        $this->nom = $nom;
        $this->valeur = $valeur;
    }
    public function __toString()
    {
        $resultat = '';
        $resultat .= $this->nom;
        $resultat .= '=';
        $resultat .= '"'.$this->valeur.'"';
        return $resultat;
    }
}