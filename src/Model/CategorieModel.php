<?php
namespace src\Model;

use PDO;

class CategorieModel {

    public function findAll()
    {
        // Connexion avec MAMP
        $pdo = new \PDO("mysql:host=localhost:8889;dbname=blog", "root", "root");
        //Connexion Xampp
        // $pdo = new PDO("mysql:host=localhost;dbname=blog", 'root', '');
        //Connexion WAMP
        // $pdo = new PDO("mysql:host=localhost:3306;dbname=blog", 'root', '');

        // On passe à PDO la requête SQL que l'on souhaite exécuter
        $query = $pdo->query("SELECT * FROM categorie");
        // On récupère le résultat de notre requête
        $categories = $query->fetchAll();
        return $categories;
    }
}