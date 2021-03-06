<?php
////////////////////////////////////////////////////////////
//
//  CRUD STATUT (PDO) - Modifié : 4 Juillet 2021
//
//  Script  : statut.php  -  (ETUD)  BLOGART22
//
////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';

// controle des saisies du formulaire
require_once __DIR__ . '/../../util/ctrlSaisies.php';

// Insertion classe Statut
require_once __DIR__ . '/../../class_crud/statut.class.php';
// Instanciation de la classe Statut
$monStatut = new STATUT();

// Gestion des CIR => affichage erreur sinon
$errCIR = 0;

?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<title>Gestion du Statut</title>
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
        .superAdmin {
            text-decoration: none;  /* del sourligné */
            color: #797979;     /* Acier */
/*            color: #919191;      Etain */
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
    <h2>Nouveau statut :&nbsp;<a href="./createStatut.php"><i>Créer un statut</i></a></h2>
	<hr />
	<h2>Gérer les statuts</h2>

	<table border="3" bgcolor="aliceblue">
    <thead>
        <tr>
            <th>&nbsp;Numéro&nbsp;</th>
            <th>&nbsp;Nom&nbsp;</th>
            <th colspan="2">&nbsp;Action&nbsp;</th>
        </tr>
    </thead>
    <tbody>
<?php
    // Appel méthode : Get tous les statuts en BDD
    $allStatuts = $monStatut->get_AllStatuts();

    // Boucle pour afficher
    foreach($allStatuts as $row) {

?>
        <tr>
		<td><h4>&nbsp; <?= $row['idStat']; ?> &nbsp;</h4></td>

        <td>&nbsp; <?= $row['libStat']; ?> &nbsp;</td>

<?php
        if ($row['idStat'] != 1) {  // superAdmin
?>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./updateStatut.php?id=<?=$row['idStat']; ?>"><i><img src="./../../img/valider-png.png" width="20" height="20" alt="Modifier statut" title="Modifier statut" /></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<br /></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./deleteStatut.php?id=<?=$row['idStat']; ?>"><i><img src="./../../img/supprimer-png.png" width="20" height="20" alt="Supprimer statut" title="Supprimer statut" /></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<br /></td>
<?php
        } else {
?>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./updateStatut.php?id=<?=$row['idStat']; ?>"><i><img src="./../../img/valider-png.png" width="20" height="20" alt="Modifier statut" title="Modifier statut" /></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<br /></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="superAdmin"><i><img src="./../../img/supprimer-png.png" width="20" height="20" alt="Supprimer statut" title="Supprimer statut" /></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<br /></td>
<?php
        }   // End of else if
?>
        </tr>
<?php
	}	// End of foreach
?>
    </tbody>
    </table>
<?php
    // Si erreur sur retour del => aff msg "CIR KO"
    if ($errCIR == 1) {
?>
        <i><div class="error"><br>=>&nbsp;Suppression impossible, existence de user(s) associé(s) à ce statut. Vous devez d'abord supprimer le(s) user(s) concerné(s).</div></i>
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