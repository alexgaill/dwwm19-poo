<?php

use src\Controller\CategorieController;
use src\Personnes\PersonneMorale;
use src\Revisions\Revision;

// const TEST = "test";

// require "Revision.php";
// require "Revision2.php";
// // include "Revisio.php";

// // Pour utiliser la constante d'une class, on n'a pas besoin d'instancier la class
// // On utilise l'opérateur de résolution de portée "::" puis le nom de la constante
// echo Revision::CLASSNAME;
// echo Revision::$propStatic = "Coucou";
// echo Revision::class;

// echo "<br>";
// // echo "Le code continue";
// // On instancie la class révision pour créer un objet
// // On lui passe entre () les paramètres attendus par le constructeur
// $rev = new Revision("John", "Doe");
// // Affiche la valeur de la propriété de Revision
// echo $rev->prop1;
// echo "<br>";
// // Affiche le résultat d'une méthode de Revision
// echo $rev->helloYou("Alex");
// echo "<br>";
// var_dump($rev);
// echo "<br>";
// echo "<br>";
// $rev2 = new Revision2("Alex", "Alex");
// echo $rev2->prop1;
// echo "<br>";

// __DIR__ est une constante magique qui récupère le nom du dossier qui contient index.php donc public
// dirname() récupère le chemin du dossier parent de la valeur qu'il a entre parenthèse.
// dirname(__DIR__) correspond donc à dirname("public") donc le chemin du parent du dossier public soit "POO"
define("ROOT", dirname(__DIR__));
require ROOT . "/core/Autoloader/Autoload.php";
Autoload::register();

// $personne = new PersonneMorale;
// var_dump($personne);

// $revision = new Revision("Alex", 'Alex');
// var_dump($revision);

$controller = new CategorieController;
$controller->accueil();
