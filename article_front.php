<?php
////////////////////////////////////////////////////////////
//
//  Gestion des CRUD (PDO) - Modifié : 14 Juillet 2021
//
//  Script  : index1.php  -  (ETUD)  BLOGART22
//
////////////////////////////////////////////////////////////


require_once __DIR__ . './connect/config.php';
require_once __DIR__ . './util/utilErrOn.php';

require_once __DIR__ . './util/preparerTags.php';

// controle des saisies du formulaire
require_once __DIR__ . './util/ctrlSaisies.php';
// Mise en forme date
require_once __DIR__ . './util/dateChangeFormat.php';


// Insertion classe Langue 
require_once ROOT . '/class_crud/article.class.php';
// Instanciation de la classe angle
$monArticle = new ARTICLE();

$ArticleChoisi=$monArticle->get_1Article($_GET['id']);
if ($ArticleChoisi){
    $numéro = $_GET['id'];
    $date = $ArticleChoisi['dtCreArt'];
    $Titre = $ArticleChoisi['libTitrArt'];
    $Chapeau = $ArticleChoisi['libChapoArt'];
    $Accroche = $ArticleChoisi['libAccrochArt'];
    $Paragraphe1 = $ArticleChoisi['parag1Art'];
    $Soustitre1= $ArticleChoisi['libSsTitr1Art'];
    $Paragraphe2 = $ArticleChoisi['parag2Art'];
    $Soustitre2 = $ArticleChoisi['libSsTitr2Art'];
    $Paragraphe3 = $ArticleChoisi['parag3Art'];
    $Conclusion = $ArticleChoisi['libConclArt'];
    $Photo = $ArticleChoisi['urlPhotArt'];
}

?>

<link rel="stylesheet" href="<?php echo(ROOTFRONT . '/back/css/style.css');?>">

<?php
require_once ROOT . '/front/includes/commons/___headerFront.php';
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <title>Gestion des CRUD</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
</head>

<body>
<section class="jesaispasencore">
    <h1><?php echo $Titre; ?></h1>
    <p><?php echo $date; ?></p>
    <img src="<?php echo(ROOTFRONT . '/back/article/uploads/' . $Photo);?>" alt="image de l'article"/>
    <h2><?php echo $Chapeau; ?></h2>
    <p><?php echo $Paragraphe1; ?></p>
    <h3><?php echo $Soustitre1; ?></h3>
    <p><?php echo $Paragraphe2; ?></p>
    <h3><?php echo $Soustitre2; ?></h3>
    <p><?php echo $Paragraphe3; ?></p>
    <p><?php echo $Conclusion; ?></p>

</section>
</body>
<section>
<?php
require_once ROOT . '/front/includes/commons/___footerFront.php';
?>
</section>
</html>
