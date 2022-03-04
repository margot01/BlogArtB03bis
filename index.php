<?php
////////////////////////////////////////////////////////////
//
//  Gestion des CRUD (PDO) - Modifié : 14 Juillet 2021
//
//  Script  : index1.php  -  (ETUD)  BLOGART22
//
////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/connect/config.php';
require_once __DIR__ . '/util/utilErrOn.php';

// Insertion classe Langue 
require_once ROOT . '/class_crud/article.class.php';
// Instanciation de la classe angle
$monArticle = new ARTICLE();
?>

<link rel="stylesheet" href="<?php echo(ROOTFRONT . '/back/css/style.css');?>">

<?php
require_once ROOT . '/front/includes/commons/___headerFront.php';
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <title>Brrrdeaux - Paranormal à Bordeaux</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
</head>

<section class="top-page-index" style="background-image: url('<?php echo(ROOTFRONT . '/front/assets/images/topage.png');?>')">
    <div class="top-page-index_content" >
        <h1>Paranormal à Bordeaux</h1>
    </div>
</section>

<section class="presentation">
    <p>
        Postremo ad id indignitatis est ventum, ut cum peregrini ob formidatam haut ita dudum alimentorum 
        inopiam pellerentur ab urbe praecipites, sectatoribus disciplinarum liberalium inpendio paucis sine 
        respiratione ulla extrusis, tenerentur minimarum adseclae veri, quique id simularun
    </p>
</section>

<section class="lastArticles">
    <h2>Les derniers articles</h2>
    <?php
        $allArticles=$monArticle->get_4DerniersArticles();
        $dernierArticle=$monArticle->get_LastArticlebyDate();
        $i=1;
    ?>

    <?php foreach($dernierArticle as $row) {
        $id=$row['numArt'];?>
        <a href="article_front.php?id=<?php echo $id?>" class="grosArticle">
        <div class="image" style="background-image:url(<?php echo(ROOTFRONT . '/back/article/uploads/' . $row["urlPhotArt"]);?>)"></div>
        <h3> <?php echo $row["libTitrArt"] ?> </h3>
        <p> <?php echo $row["dtCreArt"] ?> </br> </br> </br>
        <?php echo $row["libChapoArt"] ?> </p>
        <?php } ?>
    </a>
    
    <div class="troisPetitsArticles">
    <?php foreach($allArticles as $ligne) {
        $idSelectArt=$ligne['numArt'];
        ?> <a href="article_front.php?id=<?php echo $idSelectArt?>"> <?php
        $titre= $ligne['libTitrArt'];
        $date=$ligne['dtCreArt'];
        $chapeau=$ligne['libChapoArt'];
        $image=$ligne['urlPhotArt'];

        if ($i == 1){ ?> 
            <div class="onveutpastevoir">
            <h3> <?php echo $titre; ?> </h3>
            <p> <?php echo $date ; ?> </p>
            <div class="image-petite" style="background-image:url(<?php echo(ROOTFRONT . '/back/article/uploads/' . $image);?>)"></div> <br/>
            
            <p> <?php echo $chapeau . "<br>"; ?> </p>
            </div> 
        <?php } else { ?>
        
            <div>
            <h3> <?php echo $titre; ?> </h3>
            <p> <?php echo $date ; ?> </p>
            <div class="image-petite" style="background-image:url(<?php echo(ROOTFRONT . '/back/article/uploads/' . $image);?>)"></div> <br/>
            
            <p> <?php echo $chapeau . "<br>"; ?> </p>
            </div>
        <?php } 
        $i = $i+1;
        ?> </a> <?php
    } 
    ?>
    </div>

</section>

<?php
require_once ROOT . '/front/includes/commons/___footerFront.php';
?>

</html>