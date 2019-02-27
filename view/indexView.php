

<?php ob_start();?>

<div class="content">
<h1>Bonjour,<br />
Bienvenue sur mon site de recettes.</h1><br />
<br/>


<?php
while ($donnees = $reponse->fetch()) {

    ?>


    <div id="titre_article"><h2> <strong> <?=$donnees['title']?> </strong></h2></div> <br>
    
    <div id="contenu_article">Niveau :  <?=$donnees['level']?></div> <br>

    <div id="info_article">Posté par <strong><?=$donnees['pseudo']?></strong> <?=$donnees['creation_date']?></div>
    Vous pouvez <a href="index.php?action=recipe&id=<?=$donnees['id']?>">voir la recette</a>.<br /><br />
    <br>



    <?php
}


$reponse->closeCursor();
?>



<?php $content = ob_get_clean();?>
<?php require 'view/template.php';?>