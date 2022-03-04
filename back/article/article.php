<?php
////////////////////////////////////////////////////////////
//
//  CRUD ARTICLE (PDO) - Modifié : 4 Juillet 2021
//
//  Script  : article.php  -  (ETUD)  BLOGART22
//
////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';

// controle des saisies du formulaire
require_once __DIR__ . '/../../util/ctrlSaisies.php';

// Mise en forme date
require_once __DIR__ . '/../../util/dateChangeFormat.php';

// Insertion classe Article
require_once __DIR__ . '/../../class_crud/article.class.php';
// Instanciation de la classe Article
$monArticle = new ARTICLE();

?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<title>Admin - CRUD Article</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <style type="text/css">
        .error {
            padding: 2px;
            border: solid 0px black;
            color: red;
            font-style: italic;
            border-radius: 5px;
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

	<h2>Nouvel article :&nbsp;<a href="./createArticle.php"><i>Créer un article</i></a></h2>
    <hr />
	<h2>Tous les articles</h2>

	<table border="3" bgcolor="aliceblue">
    <thead>
        <tr>
            <th>&nbsp;N°&nbsp;</th>
            <th>&nbsp;Date&nbsp;</th>
            <th>&nbsp;Titre&nbsp;</th>
            <th>&nbsp;Chapeau&nbsp;</th>
            <th>&nbsp;Accroche&nbsp;</th>
            <th>&nbsp;Angle&nbsp;</th>
            <th>&nbsp;Thématique&nbsp;</th>
            <th colspan="2">&nbsp;Action&nbsp;</th>
        </tr>
    </thead>
    <tbody>
<?php
    // Appel méthode : Get tous les articles en BDD
    $allArticles=$monArticle->get_AllArticles();
    // Boucle pour afficher
    foreach($allArticles as $row) {
?>
        <tr>
		<td><h4>&nbsp; <?php echo $row['numArt']; ?> &nbsp;</h4></td>

        <td>&nbsp; <?php echo $row['dtCreArt']; ?> &nbsp;</td>

        <td>&nbsp; <?php echo $row['libTitrArt']; ?> &nbsp;</td>

        <td>&nbsp; <?php echo $row['libChapoArt']; ?> &nbsp;</td>

        <td>&nbsp; <?php echo $row['libAccrochArt']; ?> &nbsp;</td>

        <td>&nbsp; <?php echo $row['numAngl']; ?> &nbsp;</td>

        <td>&nbsp; <?php echo $row['numThem']; ?> &nbsp;</td>

		<td>&nbsp;&nbsp;<a href="./updateArticle.php?id=<?php echo $row['numArt']; ?>"><i><img src="./../../img/valider-png.png" width="20" height="20" alt="Modifier article" title="Modifier article" /></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<br /></td>
		<td>&nbsp;&nbsp;<a href="./deleteArticle.php?id=<?php echo $row ['numArt']; ?>"><i><img src="./../../img/supprimer-png.png" width="20" height="20" alt="Supprimer article" title="Supprimer article" /></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<br /></td>
        </tr>
<?php
	}	// End of foreach
?>
    </tbody>
    </table>
    <br/>
    </div>
    </div>
<?php
require_once ROOT . '/front/includes/commons/___footerFront.php';
?>
</body>
</html>
