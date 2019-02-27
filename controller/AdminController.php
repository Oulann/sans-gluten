<?php
namespace My\controller;

use \My\model\AdminManager;
use \My\model\CommentManager;
use \My\model\ListManager;

class AdminController
{
    private $adminManager;
    private $listManager;
    private $commentManager;

    public function __construct()
    {
        $this->adminManager = new AdminManager();
        $this->listManager = new ListManager();
        $this->commentManager = new CommentManager();
    }

    public function listRecipes()
    { //on demande à la ddb l'ensemble des posts "10"
        // Création d'un objet
        $reponse = $this->listManager->getRecipes(); // Appel d'une fonction de cet objet

        // pour recuperer l'info (les données)on appelle la page html concernée (require)
        require 'view/indexView.php';
    }
    public function oneRecipe($id)
    {
        $one = $this->listManager->getRecipe($id);
        $ingredients = $this->listManager->getIngredients($id);

        $comments = $this->commentManager->getComments($id);

        require 'view/recipeView.php';
    }
    public function putComment($id_recipe, $id_member, $content)
    {
        $newComment = $this->commentManager->addComment($id_recipe, $id_member, $content);
        header('Location: index.php?action=recipe&id=' . $id_recipe);
    }
}
