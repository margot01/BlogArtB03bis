<?php
////////////////////////////////////////////////////////////
//
//  CRUD THEMATIQUE (PDO) - Modifié : 4 Juillet 2021
//
//  Script  : thematique.php  -  (ETUD)  BLOGART22
//
////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';

// controle des saisies du formulaire
require_once __DIR__ . '/../../util/ctrlSaisies.php';
// Del accents sur string
require_once __DIR__ . '/../../util/delAccents.php';

// Insertion classe Thematique
require_once __DIR__ . '/../../class_crud/Thematique.class.php';

// Instanciation de la classe Thematique
$maThematique = new THEMATIQUE ();

// Insertion classe Langue
require_once __DIR__ . '/../../class_crud/langue.class.php';

// Instanciation de la classe Langue
$maLangue = new LANGUE();

// BBCode


// Ctrl CIR
$errCIR = 0;
$errDel = 0;


?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<title>Admin - CRUD Thematique</title>
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

	<h2>Nouvelle thematique :&nbsp;<a href="./createThematique.php"><i>Créer une thematique</i></a></h2>
<?php
    if ($errDel == 99) {
?>
	    <br />
        <i><div class="error"><br>=>&nbsp;Erreur delete THEMATIQUE : la suppression s'est mal passée !</div></i>
<?php
    }   // End of if ($errDel == 99)
?>
    <hr />
	<h2>Toutes les Thematiques</h2>

	<table border="3" bgcolor="aliceblue">
    <thead>
        <tr>
            <th>&nbsp;Numéro&nbsp;</th>
            <th>&nbsp;Description&nbsp;</th>
            <th>&nbsp;Langue&nbsp;</th>
            <th colspan="2">&nbsp;Action&nbsp;</th>
        </tr>
    </thead>
    <tbody>
<?php
    // Appel méthode : Get toutes les Thematiques en BDD

    // Boucle pour afficher
    foreach($maThematique -> get_AllThematiquesByLang() as $row) {
?> 
        <tr>
		<td><h4>&nbsp; <?php echo($row['numThem']); ?> &nbsp;</h4></td>
        <td>&nbsp; <?php echo($row['libThem']); ?> &nbsp;</td>
        <td>&nbsp; <?php echo($row['lib1Lang']); ?> &nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./updateThematique.php?id=<?php echo($row['numThem']); ?>"><i><img src="./../../img/valider-png.png" width="20" height="20" alt="Modifier thématique" title="Modifier thématique" /></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<br /></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./deleteThematique.php?id=<?php echo($row['numThem']); ?>"><i><img src="./../../img/supprimer-png.png" width="20" height="20" alt="Supprimer thématique" title="Supprimer thématique" /></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
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
        <i><div class="error"><br>=>&nbsp;Suppression impossible, existence d'article(s) associé(s) à cette thématique. Vous devez d'abord supprimer le(s) thématique(s) concernée(s).</div></i>
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
