<?php
namespace My\controller;

use \My\model\MemberManager;
use \My\model\CommentManager;
use \My\model\ListManager;

class MemberController{
    private $memberManager;
    private $listManager;

    public function __construct(){
        $this->adminManager = new MemberManager();
        $this->listManager = new ListManager();
    }

    public function listRecipes()
    { //on demande à la ddb l'ensemble des posts "10"
        // Création d'un objet
        $reponse = $this->listManager->getRecipes(); // Appel d'une fonction de cet objet

        // pour recuperer l'info (les données)on appelle la page html concernée (require)
        require 'view/indexView.php';
    }
}