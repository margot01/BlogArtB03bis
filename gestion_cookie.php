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
    <title>Brrrdeaux - Gestion des cookies</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
</head>

<body class="conditionsDutilisations">
    <h1>Gestions des cookies</h1>
    <h2>En vigueur à partir du 04/03/2022.</h2>

    <p>L’utilisateur est informé que lors de ses visites sur le blog, un cookie peut s’installer automatiquement sur son logiciel 
    de navigation.  </p>

    <p>Les cookies sont de petits fichiers stockés temporairement sur le disque dur de l’ordinateur de l’utilisateur par votre 
    navigateur et qui sont nécessaires à l’utilisation du blog Brrrdeaux - Bordeaux au travers le paranormal. Les cookies ne 
    contiennent pas d’information personnelle et ne peuvent pas être utilisés pour identifier quelqu’un. Un cookie contient un 
    identifiant unique, généré aléatoirement et donc anonyme. Certains cookies expirent à la fin de la visite de l’utilisateur, 
    d’autres restent. </p>

    <p>L’information contenue dans les cookies est utilisée pour améliorer le blog, par exemple en : 
    •	permettant à un service de reconnaître l’appareil de l’utilisateur, pour qu’il n’ait pas à donner les mêmes informations à 
    plusieurs reprises, par exemple remplir un formulaire ou une enquête. </br>
    •	mémorisant que vous l’utilisateur a déjà donné ses identifiant et mot de passe, pour ne pas avoir à le refaire à chaque nouvelle page. </br>
    •	surveillant comment les utilisateurs se servent des services, pour les rendre plus simples d’utilisation et allouer suffisamment 
    de puissance pour s’assurer de leur réactivité. </br>
    •	analysant des données « anonymisées » pour aider à comprendre comment les utilisateurs interagissent avec les différents 
    aspects des services en ligne et donc permettre de les améliorer. </br> </p>

    <p>En naviguant sur le blog,  Il n’y a pas de pop-up pour l’acceptation des cookies parce-que le blog utilise uniquement des 
    cookies de session nécessaire à la navigation et non pas des cookies ayant pour but de récupérer des cookies personnelles. </p>

    <p> 
        </br>
        </br>
        </br>
    </p>

</body>

<?php
require_once ROOT . '/front/includes/commons/___footerFront.php';
?>

</html>