<?php
namespace My\model;

use \My\model\Manager;

class ListManager extends Manager
{

    public function getRecipes()
    {

        $bdd = $this->dbConnect();
        $reponse = $bdd->query('SELECT recipe.id, title, time, level, content, creation_date, pseudo, DATE_FORMAT(creation_date,\' fait le %d/%m/%Y \') AS creation_date FROM recipe INNER JOIN member ON recipe.id_member=member.id');
        return $reponse;
    }
    public function getRecipe($id)
    {
        $bdd = $this->dbConnect();
        $one = $bdd->prepare('SELECT recipe.id, title, time, level, content, creation_date, pseudo, DATE_FORMAT(creation_date,\' fait le %d/%m/%Y \') AS creation_date FROM recipe INNER JOIN member ON recipe.id_member=member.id WHERE recipe.id = ?');
        $one->execute(array($id));
        return $one;
        
    }
    public function getIngredients($recipe)
    {
        $bdd = $this->dbConnect();
        $one = $bdd->prepare('SELECT ingredients,qt, mesure FROM ingredients INNER JOIN content ON ingredients.id=content.id
        INNER JOIN recipe ON recipe.id = content.id_recipe WHERE recipe.id=?');
        $one->execute(array($recipe));
        return $one;

    }
}
