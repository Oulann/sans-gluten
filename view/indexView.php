

<?php ob_start();?>
<!--Carousel Wrapper-->
<div id="carousel" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="view">
            <img class="d-block w-100" src="public/images/pizza.jpg" alt="First slide">
            <div class="mask rgba-black-light"></div>
          </div>
          <div class="carousel-caption">
            <h3 class="h3-responsive">La Pizza Sans Gluten</h3>
            <p>Dernières recettes</p>
          </div>
        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img class="d-block w-100" src="public/images/farine-sans-gluten.jpg" alt="Second slide">
            <div class="mask rgba-black-strong"></div>
          </div>
          <div class="carousel-caption">
            <h3 class="h3-responsive">Les farines</h3>
            <p>Tout est possible!</p>
          </div>
        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img class="d-block w-100" src="public/images/adn-gluten.jpg" alt="Third slide">
            <div class="mask rgba-black-slight"></div>
          </div>
          <div class="carousel-caption">
            <h3 class="h3-responsive">Etude INRA</h3>
            <p>La sensibilité au gluten et proposer des produits adaptés à base de blé!</p>
          </div>
        </div>
      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

  </div>
<div class="content">



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