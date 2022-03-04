<?php
////////////////////////////////////////////////////////////
//
//  CRUD LANGUE (PDO) - Modifié : 4 Juillet 2021
//
//  Script  : langue.php  -  (ETUD)  BLOGART22
//
////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';

// controle des saisies du formulaire
require_once __DIR__ . '/../../util/ctrlSaisies.php';

// Insertion classe Langue
require_once __DIR__ . '/../../class_crud/langue.class.php';
// Instanciation de la classe langue
$maLangue = new LANGUE();
$monPays = new PAYS();

// Ctrl CIR
$errCIR = 0;
$errDel = 0;

?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<title>Admin - CRUD Langue</title>
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

	<h2>Nouvelle langue :&nbsp;<a href="./createLangue.php"><i>Créer une langue</i></a></h2>
<?php
    if ($errDel == 99) {
?>
	    <br />
        <i><div class="error">
            <br/>
            <?php echo "&nbsp; Erreur delete LANGUE : la suppression sest mal passée !"?>
        </div></i>
<?php
    }   // End of if ($errDel == 99)
?>
    <hr />
	<h2>Toutes les langues</h2>

	<table border="3" bgcolor="aliceblue">
    <thead>
        <tr>
            <th>&nbsp;Numéro&nbsp;</th>
            <th>&nbsp;Nom court&nbsp;</th>
            <th>&nbsp;Nom long&nbsp;</th>
            <th>&nbsp;Pays&nbsp;</th>
            <th colspan="2">&nbsp;Action&nbsp;</th>
        </tr>
    </thead>
    <tbody>
<?php
    // Appel méthode : Get toutes les langues en BDD
    $allLangues = $maLangue->get_AllLanguesByPays();
    $pays = $monPays->get_AllPays();
    // Boucle pour afficher

	foreach($allLangues as $row) {
?>
        <tr>
		<td><h4>&nbsp; <?php echo $row['numLang']; ?> &nbsp;</h4></td>

        <td>&nbsp; <?php echo $row['lib1Lang']; ?> &nbsp;</td>

        <td>&nbsp; <?php echo $row['lib2Lang']; ?> &nbsp;</td>

        <td>&nbsp; <?php echo $row["frPays"]; ?> &nbsp;</td>

		<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./updateLangue.php?id=<?=$row['numLang']; ?>"><i><img src="./../../img/valider-png.png" width="20" height="20" alt="Modifier langue" title="Modifier langue" /></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<br /></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./deleteLangue.php?id=<?=$row['numLang']; ?>"><i><img src="./../../img/supprimer-png.png" width="20" height="20" alt="Supprimer langue" title="Supprimer langue" /></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<br /></td>

        </tr>
<?php
	}	// End of foreach
?>
    </tbody>
    </table>
<?php
    if ($errCIR == 1) {
?>
        <i><div class="error"><br>=>&nbsp;Suppression impossible, existence de thématique(s), angle(s) et/ou mot(s) clé(s) associé(s) à cette langue. Vous devez d'abord supprimer le(s) thématique(s), le(s) angle(s) ou le(s) mots clés concerné(s).</div></i>
<?php
    }   // End of if ($errCIR == 1)
?>
    <p>&nbsp;</p>
    </div>
    </div>
<?php
require_once ROOT . '/front/includes/commons/___footerFront.php';
?>
</body>
</html>
