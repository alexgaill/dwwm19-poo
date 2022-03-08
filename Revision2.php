<?php

/**
 * Une class peut étendre (extends) d'une autre class.
 * Dans ce cas, cette class est la class enfant de l'autre class
 * 
 * Une class enfant peut utiliser les propriétés et les méthodes public et protected de la class parent.
 */
class Revision2 extends Revision {

    /**
     * Le constructeur d'une class enfant écrase le cosntructeur du parent.
     * 
     */
    public function __construct($prenom, $nom)
    {
        // Permet de charger le constructeur du parent
        parent::__construct($prenom, $nom);
    }

    public function getProtectedProp()
    {
        // On peut utiliser les propriétés et méthodes protégées de la class parent dans les class enfant
        return $this->protectedProp;
    }
}