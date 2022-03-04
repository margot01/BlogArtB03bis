<?php
////////////////////////////////////////////////////////////
//
//  CRUD MEMBRE (PDO) - Modifié : 4 Juillet 2021
//
//  Script  : membre.php  -  (ETUD)  BLOGART22
//
////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';

// controle des saisies du formulaire
require_once __DIR__ . '/../../util/ctrlSaisies.php';

// Mise en forme date
require_once __DIR__ . '/../../util/dateChangeFormat.php';

// Insertion classe Membre
require_once __DIR__ . '/../../class_crud/membre.class.php';
// Instanciation de la classe Membre
$monMembre = new MEMBRE();

//  Ctrl CIR
$errCIR = 0;
$errDel = 0;

?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<title>Admin - CRUD Membre</title>
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

	<h2>Nouveau Membre :&nbsp;<a href="./createMembre.php"><i>Créer un Membre</i></a></h2>
<?php
    if ($errDel == 99) {
?>
	    <br />
        <i><div class="error"><br>=>&nbsp;Erreur delete MEMBRE : la suppression s'est mal passée !</div></i>
<?php
    }   // End of if ($errDel == 99)
?>    
    <hr />
	<h2>Tous les Membres</h2>

	<table border="3" bgcolor="aliceblue">
    <thead>
        <tr>
            <th>&nbsp;Numéro&nbsp;</th>
            <th>&nbsp;Identité&nbsp;</th>
            <th>&nbsp;Pseudo&nbsp;</th>
            <th>&nbsp;eMail&nbsp;</th>
            <th>&nbsp;Date création&nbsp;</th>
            <th>&nbsp;Accord&nbsp;<br />&nbsp;RGPD&nbsp;</th>
            <th>&nbsp;Statut&nbsp;</th>
            <th colspan="2">&nbsp;Action&nbsp;</th>
        </tr>
    </thead>
    <tbody>

<?php
    // Format date en FR
    $from = 'Y-m-d H:i:s';
    $to = 'd/m/Y H:i:s';

    // Appel méthode : Get toutes les membres en BDD
    $allMemb = $monMembre->get_AllMembersByStat();

    // Boucle pour afficher
    
    foreach($allMemb as $row) {

        // date dtCreaMemb => FR
        $dtCreaMemb=$row['dtCreaMemb'];
        $dtCreaMemb = dateChangeFormat($dtCreaMemb, $from, $to);
?>
            <tr>
            <td><h4>&nbsp; <?php echo $row['numMemb']; ?> &nbsp;</h4></td>

            <td>&nbsp; <?php echo $row['prenomMemb'] . " " . $row['nomMemb']; ?> &nbsp;</td>

            <td>&nbsp; <?php echo $row['pseudoMemb']; ?> &nbsp;</td>

            <td>&nbsp; <?php echo $row['eMailMemb']; ?> &nbsp;</td>

            <td>&nbsp; <?php echo $dtCreaMemb; ?> &nbsp;</td>

            <td>&nbsp; <?php echo $row['accordMemb'] == 1 ? 'Oui' : 'Non' ; ?> &nbsp;</td>

            <td>&nbsp; <?php echo $row['libStat']; ?> &nbsp;</td>

            <td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./updateMembre.php?id=<?=$row['numMemb']; ?>"><i><img src="./../../img/valider-png.png" width="20" height="20" alt="Modifier membre" title="Modifier membre" /></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <br /></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./deleteMembre.php?id=<?=$row['numMemb']; ?>"><i><img src="./../../img/supprimer-png.png" width="20" height="20" alt="Supprimer membre" title="Supprimer membre" /></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
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
        <i><div class="error"><br>=>&nbsp;Suppression impossible, existence de commentaire(s) associé(s) à ce membre. La suppression des commentaires n'étant pas permise, vous ne pourrez pas supprimer ce membre.</div></i>
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
