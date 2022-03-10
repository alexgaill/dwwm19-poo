<?php
namespace src\Controller;

use src\Model\CategorieModel;

class CategorieController {

    public function accueil ()
    {
        $model = new CategorieModel;
        $listCategories = $model->findAll();
        
        require ROOT. "/View/categorie/accueil.php";
    }
}