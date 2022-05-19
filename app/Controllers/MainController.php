<?php

namespace sonic\Controllers;

use sonic\Models\Character;
use sonic\Models\Type;

class MainController extends CoreController
{
    // Une page = une méthode

    public function home()
    {
          
        // gérer l'affichage de la page d'accueil

        // récupérer tous les perso et leurs propriétés
        $characterModel = new Character();
        $characters = $characterModel->findAllOrderByName();


        //récupérer le nom des types (méchants/gentils)
        $typeModel = new Type();
        $types = $typeModel->findAll();

        $data = [
            'page_title' => "Accueil",
            'characters' => $characters,
            'types' => $types,
        ];
        // on déléègue l'affichage de nos vues à la méthode show
        $this->show('home', $data);
    }
}