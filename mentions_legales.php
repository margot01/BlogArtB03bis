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
    <title>Brrrdeaux - Mentions légales</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
</head>

<body class="conditionsDutilisations">
    <h1>Mentions légales</h1>
    <h2>En vigueur à partir du 04/03/2022.</h2>
 
    <p>L'édition du blog Brrrdeaux - Bordeaux au travers le paranormal est assurée par l’agence Avemis Unity, 
    présente à l’IUT Bordeaux Montaigne située à 1 rue Jacques Ellul 33800 Bordeaux, et est joignable à l’adresse 
    mail margot.gougeon@mmibordeaux.com, au 05 57 12 20 44. </p>

    <p>La Directrice de la publication est Alexandra Mallard.</p>

    <p>L’édition et la direction de la publication du blog Brrrdeaux - Bordeaux au travers le paranormal est 
    assurée par Madame Alexandra Mallard, domicilié 33300 Bordeaux, XX XX XX XX XX, alexandra.mallard@mmibordeaux.com.</p>

    <p>L'hébergeur du blog Brrrdeaux - Bordeaux au travers le paranormal  est la Société Université Bordeaux Montaigne 
    Bordeaux III, immatriculée au RCS de Bordeaux sous le numéro SIREN 193 317 666, dont le siège social est situé au 
    Domaine Universitaire 33600 Pessac, accueil @u-bordeaux-montaigne.fr, +33 (0)5 57 12 44 44. </p>

</body>

<?php
require_once ROOT . '/front/includes/commons/___footerFront.php';
?>

</html>