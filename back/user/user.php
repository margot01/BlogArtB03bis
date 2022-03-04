<?php
////////////////////////////////////////////////////////////
//
//  CRUD USER (PDO) - Modifié : 4 juillet 2021
//
//  Script  : user.php  -  (ETUD)  BLOGART22
//
////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';

// controle des saisies du formulaire
require_once __DIR__ . '/../../util/ctrlSaisies.php';

// Mise en forme date
require_once __DIR__ . '/../../util/dateChangeFormat.php';

// Insertion classe User
require_once __DIR__ . '/../../class_crud/user.class.php';
// Instanciation de la classe User
$monUser = NEW USER;

?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<title>Admin - CRUD User</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .error {
            padding: 2px;
            border: solid 0px black;
            color: red;
            font-style: italic;
            border-radius: 5px;
        }
        .superAdmin {
            text-decoration: none;
            color: #797979;
        }
    </style>
</head>

<!-- section pour ajouter le header sans qu'il gene avec le location-->
<section> 
<?php require_once ROOT . '/front/includes/commons/___headerFront.php'; ?>
</section>

<body>
    <h1>mon espace administrateur</h1>
    <div class=parentback>
        <div class=menu-back>
            <nav>
                <ul class="menuback-liens">
                    <li class="menu-back-gererArticles">
                        <a href="../article/article.php" class=articles>Gérer mes articles</a>
                    </li>
                    <li class="menu-back-gererLangues">
                        <a href="../langue/langue.php" class=langues>Gérer mes langues</a>
                    </li>
                    <li class="menu-back-angles">
                        <a href="../angle/angle.php" class=angles>Gérer mes angles</a>
                    </li>
                    <li class="menu-back-membres">
                        <a href="../membre/membre.php" class=membres>Gérer mes membres</a>
                    </li>
                    <li class="menu-back-utilisateurs">
                        <a href="../user/user.php" class=users>Gérer mes users</a>
                    </li>
                    <li class="menu-back-com">
                        <a href="../comment/comment.php" class=comment>Gérer mes commentaires</a>
                    </li>
                    <li class="menu-back-likeart">
                        <a href="../like_art/likeArt.php" class=likeart>Gérer mes like</a>
                    </li>
                    <li class="menu-back-likecom">
                        <a href="../like_com/likeCom.php" class=likecom>Gérer mes like sur commentaires</a>
                    </li>
                    <li class="menu-back-statut">
                        <a href="../statut/statut.php" class=stat>Gérer mes statuts</a>
                    </li>
                    <li class="menu-back-MotsCles">
                        <a href="../mot_cle/motCle.php" class=Mc>Gérer mes mots clés</a>
                    </li>
                    <li class="menu-back-MotsCles">
                        <a href="../thematique/thematique.php" class=them>Gérer mes thématiques</a>
                    </li>
                </ul>
            </nav>
        </div>

	<hr />
    <div class=formulaire>

	<h2>Nouveau User :&nbsp;<a href="#" class="superAdmin" title="User déjà créé"><i>Créer un User</i></a></h2>
    <hr />
	<h2>Tous les Users</h2>

	<table border="3" bgcolor="aliceblue">
    <thead>
        <tr>
            <th>&nbsp;Pseudo&nbsp;</th>
            <th>&nbsp;Identité&nbsp;</th>
            <th>&nbsp;eMail&nbsp;</th>
            <th>&nbsp;Statut&nbsp;</th>
            <th colspan="2">&nbsp;Action&nbsp;</th>
        </tr>
    </thead>
    <tbody>
<?php
    // Appel méthode : Get tous les users en BDD

    // Boucle pour afficher
    //foreach($all as $row) {

?>
            <tr>

            <td><h4>&nbsp; <?= "ici pseudoUser"; ?> &nbsp;</h4></td>

            <td>&nbsp; <?= "ici prenomUser" . " " . "ici nomUser"; ?> &nbsp;</td>

            <td>&nbsp; <?= "ici eMailUser"; ?> &nbsp;</td>

            <td>&nbsp; <?= "ici libStat"; ?> &nbsp;</td>

            <td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./updateUser.php?id1=<?=1; ?>"><i><img src="./../../img/valider-png.png" width="20" height="20" alt="Modifier user" title="Modifier user" /></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <br /></td>

            <td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="superAdmin"><i><img src="./../../img/supprimer-png.png" width="20" height="20" alt="Suppression user impossible" title="Suppression user impossible" /></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <br /></td>
        </tr>
<?php

	// }	// End of foreach
?>
    </tbody>
    </table>
    <br />
    <!-- <div class="error"><i><br>&nbsp;&nbsp;=>&nbsp;Attention, le statut <b>SUPER ADMINISTRATEUR</b> ne peut être supprimé !</i></div> -->
    <br />
    </div>
    </div>
<?php
require_once ROOT . '/front/includes/commons/___footerFront.php';
?>
</body>
</html>
