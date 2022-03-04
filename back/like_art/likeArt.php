<?php
////////////////////////////////////////////////////////////
//
//  CRUD LIKEART (PDO) - Modifié : 4 Juillet 2021
//
//  Script  : likeArt.php  -  (ETUD)  BLOGART22
//
////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';

// controle des saisies du formulaire
require_once __DIR__ . '/../../util/ctrlSaisies.php';

// Insertion classe Likeart
require_once __DIR__ . '/../../class_crud/likeArt.class.php';

// Instanciation de la classe Likeart
$monLikeArt = new LIKEART();

// Insertion classe Membre
require_once __DIR__ . '/../../class_crud/membre.class.php';

// Instanciation de la classe Membre
$monMembre = new MEMBRE();

// Insertion classe Article
require_once __DIR__ . '/../../class_crud/article.class.php';

// Instanciation de la classe Article
$monArticle = new ARTICLE();

?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8" />
    <title>Admin - CRUD Like sur Article</title>
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
        .OK {
            padding: 2px;
            border: solid 0px black;
            color: deeppink;
            font-style: italic;
            border-radius: 5px;
        }
        .KO {
            padding: 2px;
            border: solid 0px black;
            color: darkgoldenrod;
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
    <h1>mon espace admiistrateur</h1>
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
    <h2>Nouveau like sur article :&nbsp;<a href="./createLikeArt.php"><i>Créer un like</i></a></h2>
    <hr />
    <h2>Tous les likes par membre et par article</h2>

    <table border="3" bgcolor="aliceblue">
    <thead>
        <tr>
            <th>&nbsp;Membre&nbsp;</th>
            <th>&nbsp;Article&nbsp;</th>
            <th>&nbsp;Statut&nbsp;</th>
            <th colspan="2">&nbsp;Action&nbsp;</th>
        </tr>
    </thead>
    <tbody>
<?php
    // Appel des méthodes : Get tous les users en BDD
    $allLikesArt = $monLikeArt->get_AllLikesArt();
    foreach($allLikesArt as $row) {
    // Boucle pour afficher
?>
        <tr>
        <td><h4>&nbsp; <?php echo $row["pseudoMemb"]; ?> &nbsp;</h4></td>

        <td>&nbsp; <?php echo $row["libTitrArt"]; ?> &nbsp;</td>

        <td>&nbsp;<span class="OK">&nbsp; <?php echo ($row["likeA"] == 1) ? "Like" : "Unlike" ?> &nbsp;</span></td>

        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="./updateLikeArt.php?id1=<?php echo $row["numMemb"]; ?>&id2=<?php echo $row['numArt']?>"><i><img src="./../../img/valider-png.png" width="20" height="20" alt="Modifier like article" title="Modifier like article" /></i></a><br>&nbsp;&nbsp;<span class="error">(Un)like</span>&nbsp;
        <br /></td>

        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="./deleteLikeArt.php?id1=<?php echo $row["numMemb"]; ?>&id2=<?php echo $row['numArt']?>"><i><img src="./../../img/supprimer-png.png" width="20" height="20" alt="Supprimer like article" title="Supprimer like article" /></i></a><br>&nbsp;&nbsp;<span class="error">(S/Admin)</span>&nbsp;
        <br /></td>
        </tr>
<?php
     }   // End of foreach
?>
    </tbody>
    </table>

    <p>&nbsp;</p>
    </div>
    </div>
<?php
require_once ROOT . '/front/includes/commons/___footerFront.php';
?>
</body>
</html>
