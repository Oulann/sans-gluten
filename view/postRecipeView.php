<?php ob_start();?>

<div class="content">
Retour à <a href="index.php">l'accueil</a>
<br />
<br/>

<!-- Liste deroulante des Ingredients -->
<div id="ajouting">
<table>

<form method="post" action="prepareRecipe">
<label for="ingredients">Choisissez vos ingrédients :</label>
<select id="liste_ingredients" name="liste_ingredients">
        <?php
//SCRIPT DE RETOUR DES ENREGISTREMENTS EN BDD
while ($result = $newRecipe->fetch()) {
    echo '<option value="' . $result["ingredients"] . '">' . $result["ingredients"] . '</option>';

}
?>
</form>

    <input type="button" id="ajouter" disabled="disabled" class="push" name="submit" value="ajouter" data-action="save">
            <input type="button" id="supprimer" disabled="disabled" value="Supprimer">
        <td>Ingédients de ma recette :<br />
            <select id="recette" size="10" style="width:200px;">
            
            </select>
            <a href="index.php?action=createRecipe"><input type="submit" id="valider" ></a>
        
        </td>
</select>


        
</table>

    
</div>



<?php
$newRecipe->closeCursor();
?>

<?php $content = ob_get_clean();?>
<?php require 'view/template.php';?>