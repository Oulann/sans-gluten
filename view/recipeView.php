

<?php ob_start();?>

<div class="content">
Retour à <a href="index.php">l'accueil</a>
<br />
<br/>


<?php
$recipeId = "";
while ($don = $one->fetch()) {
    $recipeId = $don['id'];

    ?>


    <div id="titre_recette"><h1>  La Recette : <strong> <?=$don['title']?> </strong></h1></div><div id="info_nom">Posté par <strong><?=$don['pseudo']?></strong> <?=$don['creation_date']?></div> <br>
    <div id="préparation"><?=$don['content']?></div> <br>

    <div id="niveau">Niveau :  <?=$don['level']?></div> <br>
    

<h2> Liste des ingrédients </h2>
    


    <?php
}

$one->closeCursor();
while ($i = $ingredients->fetch()){
    ?>
    
    <div id="noms_ingredients"> <strong> <?=$i['ingredients']?> </strong></div>
    <div id="contenu"><?=$i['qt']?> <?=$i['mesure']?></div> <br>
    

<?php
}
 $ingredients->closeCursor();
?>

<div class="news">

        <h3>Commentaires</h3>
        <form action="index.php?action=putComment&id=<?=$recipeId?>" method="post">
        <div>
            <label for="nom">Pseudo</label><br/>
            <input type="text" id="nom" name="id_member">
        </div>
        <div>
            <label for="comment">Message</label><br/>
            <textarea id="comment" name="content"></textarea>

        </div>
        <div>
            <input type="submit" />
</div>
</form>

        <?php
while ($comment = $comments->fetch()) {
    ?>
            <p><strong><?=htmlspecialchars($comment['pseudo'])?></strong> le <?=htmlspecialchars($comment['date'])?></p>
            <p><?=nl2br(htmlspecialchars($comment['content']))?></p>
<?php
}
?>

<?php $content = ob_get_clean();?>
<?php require 'view/template.php';?>