<?php
namespace My\controller;

use \My\controller\AdminController;
use \My\controller\MemberController;

class Router
{
    private $controller;
    private $controllerMember;
    public function __construct()
    {
        $this->controller = new AdminController();
        $this->controllerMember = new MemberController();
    }

    public function run()
    {
        try {

            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'listRecipes') {
                    $this->controllerMember->listRecipes();

                } elseif ($_GET['action'] == 'recipe') {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $this->controllerMember->oneRecipe($_GET['id']);

                    } else {
                        echo 'Erreur : aucun identifiant de la recette envoyé';
                    }
                } elseif ($_GET['action'] == 'prepareRecipe') {
                    $this->controllerMember->prepareRecipe();
                    if (isset($_POST['valider'])) {
                        echo 'Vous avez selectionné la ligne ' . $_POST['liste_ingredients'];
                    }
                } elseif ($_GET['action'] == 'putComment') {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {

                        if (!empty($_POST['content'])) {

                            $this->controllerMember->putComment($_GET['id'], $_POST['id_member'], $_POST['content']);
                        } else {
                            throw new Exception('Impossible d\'ajouter le commentaire !');
                        }
                    } else {
                        throw new Exception('aucun identifiant de commentaire envoyé');
                    }
                } else {
                    $this->controllerMember->listRecipes();
                }

            } else {
                $this->controllerMember->listRecipes();
            }

        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
