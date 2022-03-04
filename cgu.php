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
    <title>Brrrdeaux - Conditions d'utilisation</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
</head>

<body class="conditionsDutilisations">
    <h1>Conditions générales d'utilisation du blog</h1>
    <h2>En vigueur à partir du 04/03/2022.</h2>

    <p>Les présentes conditions générales d'utilisation (dites CGU ) ont pour objet l'encadrement 
        juridique des modalités de mise à disposition du blog et des services par Brrrdeaux - 
        Bordeaux au travers le paranormal et de définir les conditions d’accès et d’utilisation 
        des services par « l'utilisateur ». 
    </p>

    <p>Les présentes CGU sont accessibles sur le blog à la rubrique «CGU». </p>

    <p>Les CGU doivent être acceptées par tout utilisateur souhaitant accéder au blog. Elles 
    constituent le contrat entre le blog et l'utilisateur. L’accès au blog par l’utilisateur 
    signifie son acceptation des présentes CGU. Il s’engage désormais à respecter les présentes conditions.  </p>

    <p>Concernant l’espace membre :   </p>
    <p>Toute inscription ou utilisation du blog implique l'acceptation sans aucune réserve ni restriction des 
    présentes CGU par l’utilisateur. Lors de l'inscription sur le blog via le formulaire d’inscription, 
    chaque utilisateur accepte expressément les présentes CGU en cochant la case précédant le texte suivant : 
    « Je reconnais avoir lu et compris les CGU et je les accepte ».  </p>

    <p>En cas de non-acceptation des CGU stipulées dans le présent contrat, l'utilisateur se doit de renoncer 
    à l'accès des services proposés par le blog.  </p>

    <p>Brrrdeaux - Bordeaux au travers le paranormal se réserve le droit de modifier unilatéralement et à tout 
    moment le contenu des présentes CGU.  </p>

    <h3>ARTICLE 1 : Accès au blog</h3>

    <p>Le blog Brrrdeaux - Bordeaux au travers le paranormal permet un accès gratuit aux services suivants pour : </br>
    • l'utilisateur:</br>
    &nbsp &nbsp &nbsp &nbsp &nbsp -	Accès à la lecture des articles </br>
    &nbsp &nbsp &nbsp &nbsp &nbsp -	Accès à la lecture des commentaires sous les articles </br>
    • l’utilisateur membre: </br>
    &nbsp &nbsp &nbsp &nbsp &nbsp -	Accès à la lecture des articles </br>
    &nbsp &nbsp &nbsp &nbsp &nbsp -	Accès à la lecture des commentaires sous les articles </br>
    &nbsp &nbsp &nbsp &nbsp &nbsp -	Permission de liker/unliker des articles </br>
    &nbsp &nbsp &nbsp &nbsp &nbsp -	Permission de commenter des articles</p>

    <p>Le blog est accessible gratuitement en tout lieu à tout utilisateur ayant un accès à Internet. Tous les frais 
    supportés par l'utilisateur pour accéder au service (matériel informatique, logiciels, connexion Internet, etc.) 
    sont à sa charge. </p>

    <p>L’utilisateur non membre n'a pas accès aux services réservés. Pour cela, il doit s’inscrire en remplissant le 
    formulaire d’inscription. En acceptant de s’inscrire aux services réservés, l’utilisateur membre s’engage à fournir 
    des informations sincères et exactes concernant son état civil et ses coordonnées, notamment son adresse email.  </p>

    <p>Pour accéder aux services, l’utilisateur devra s'identifier à l'aide de son nom d’utilisateur et de son mot de 
    passe qui lui seront communiqués lors de son inscription et qui sont strictement personnels. A ce titre, il s’en 
    interdit toute divulgation. Dans le cas contraire, il restera seul responsable de l’usage qui en sera fait.  </p>
    
    <p>En cas de non-respect des conditions générales d’utilisation, le blog Brrrdeaux - Bordeaux au travers le paranormal
    aura la possibilité de suspendre voire de fermer le compte d’un utilisateur après mise en demeure adressée par voie 
    électronique et restée sans effet. </p>

    <p>Toute suppression de compte, quel qu’en soit le motif, engendre la suppression pure et simple de toutes informations 
    personnelles de l’utilisateur.  </p>

    <p>Tout événement dû à un cas de force majeure ayant pour conséquence un dysfonctionnement du blog ou serveur et sous réserve 
    de toute interruption ou modification en cas de maintenance, n'engage pas la responsabilité de Brrrdeaux - Bordeaux au travers 
    le paranormal. Dans ces cas, l’utilisateur accepte ainsi ne pas tenir rigueur à l’éditeur de toute interruption ou suspension de 
    service, même sans préavis.  </p>
    <p>L'utilisateur a la possibilité de contacter le blog par messagerie électronique à l’adresse email de l’éditeur communiqué à l’ARTICLE 1.  </p>


    <h3>ARTICLE 2 : Données personnelles </h3>

    <p>Le blog assure à l'utilisateur une collecte et un traitement d'informations personnelles dans le respect de la vie privée 
    conformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés. </br>
    En vertu de la loi Informatique et Libertés, en date du 6 janvier 1978, l'utilisateur dispose d'un droit d'accès, de 
    rectification, de suppression et d'opposition de ses données personnelles. L'utilisateur exerce ce droit : </br>
    •	par mail à margot.gougeon@mmibordeaux.com </br>
    •	via un formulaire de contact ; </br> </p>

    <h3>ARTICLE 3 : Propriété intellectuelle </h3>

    <p>Les icônes, logos, signes ainsi que tous les contenus du blog (textes, images, son…) font l'objet d'une protection par le 
    Code de la propriété intellectuelle et plus particulièrement par le droit d'auteur. </p>

    <p>L'utilisateur doit solliciter l'autorisation préalable du blog pour toute reproduction, publication, copie des différents 
    contenus. Il s'engage à une utilisation des contenus du blog dans un cadre strictement privé, toute utilisation à des fins 
    commerciales et publicitaires est strictement interdite. </p>

    <p>Toute représentation totale ou partielle de ce blog par quelque procédé que ce soit, sans l’autorisation expresse de 
    l’exploitant du blog constituerait une contrefaçon sanctionnée par l’article L 335-2 et suivants du Code de la propriété 
    intellectuelle. </p>

    <p>Il est rappelé conformément à l’article L122-5 du Code de propriété intellectuelle que l’utilisateur qui reproduit, 
    copie ou publie le contenu protégé doit citer l’auteur et sa source.  </p>


    <h3>ARTICLE 6 : Responsabilité </h3>

    <p>Les sources des informations diffusées sur le blog Brrrdeaux - Bordeaux au travers le paranormal sont réputées fiables 
    mais le blog ne garantit pas qu’il soit exempt de défauts, d’erreurs ou d’omissions.  <br/>
    Les informations communiquées sont présentées à titre indicatif et général sans valeur contractuelle. Malgré des mises à 
    jour régulières, le blog Brrrdeaux - Bordeaux au travers le paranormal ne peut être tenu responsable de la modification des 
    dispositions administratives et juridiques survenant après la publication. De même, le blog ne peut être tenu responsable de 
    l’utilisation et de l’interprétation de l’information contenue dans ce blog. </p>

    <p>L'utilisateur s'assure de garder son mot de passe secret. Toute divulgation du mot de passe, quelle que soit sa forme, 
    est interdite. Il assume les risques liés à l'utilisation de son identifiant et mot de passe. Le blog décline toute responsabilité. </p>

    <p>Le blog Brrrdeaux - Bordeaux au travers le paranormal ne peut être tenu pour responsable d’éventuels virus qui pourraient 
    infecter l’ordinateur ou tout matériel informatique de l’Internaute, suite à une utilisation, à l’accès, ou au téléchargement 
    provenant de ce blog. </p>

    <p>La responsabilité du blog ne peut être engagée en cas de force majeure ou du fait imprévisible et insurmontable d'un tiers. </p>

    <h3>ARTICLE 7 : Liens hypertextes </h3>

    <p>Des liens hypertextes peuvent être présents sur le blog. Lorsque l’utilisateur clique sur ces liens, il sortira du blog 
    Brrrdeaux - Bordeaux au travers le paranormal. Ce dernier n’a pas de contrôle sur les pages web sur lesquelles aboutissent ces 
    liens et ne saurait, en aucun cas, être responsable de leur contenu. </p>

    <h3>ARTICLE 8 : Publication par l’utilisateur </h3>

    <p>Le blog permet aux membres de publier des commentaires sous les articles.</br>
    Dans ses publications, le membre s’engage à respecter les règles de la Netiquette (règles de bonne conduite de l’internet) et les 
    règles de droit en vigueur. </br>
    Le blog peut exercer une modération sur les publications et se réserve le droit de refuser leur mise en ligne, sans avoir à s’en 
    justifier auprès du membre. </br>
    Le membre reste titulaire de l’intégralité de ses droits de propriété intellectuelle. Mais en publiant une publication sur le blog, 
    il cède à l’agence éditrice le droit non exclusif et gratuit de représenter, reproduire, adapter, modifier, diffuser et distribuer 
    sa publication, directement ou par un tiers autorisé, dans le monde entier, sur tout support (numérique ou physique), pour la durée 
    de la propriété intellectuelle. Le membre cède notamment le droit d'utiliser sa publication sur internet et sur les réseaux de 
    téléphonie mobile. </br>
    L’agence éditrice s'engage à faire figurer le nom du membre à proximité de chaque utilisation de sa publication. </p>

    <p>Tout contenu mis en ligne par l'utilisateur est de sa seule responsabilité. L'utilisateur s'engage à ne pas mettre en ligne de 
    contenus pouvant porter atteinte aux intérêts de tierces personnes. Tout recours en justice engagé par un tiers lésé contre le blog 
    sera pris en charge par l'utilisateur. </br>
    Le contenu de l'utilisateur peut être à tout moment et pour n'importe quelle raison supprimé ou modifié par le blog, sans préavis. </p>

    <h3>ARTICLE 8 : Droit applicable et juridiction compétente </h3>

    <p>La législation française s'applique au présent contrat. En cas d'absence de résolution amiable d'un litige né entre les parties, 
    les tribunaux français seront seuls compétents pour en connaître. </p>

    <p>Pour toute question relative à l’application des présentes CGU, vous pouvez joindre l’éditeur aux coordonnées 
    inscrites à l’ARTICLE 1. </p>

    <p>Source : Ce modèle a été créé par le cabinet ISACC Avocats (3 quai Vauban, 25000 Besançon). Il s’agit d’un modèle générique, 
    modifié par l’agence Avemis. </p>

    <p>https://www.doubs.cci.fr/sites/default/files/doubs/Dev_votre_entrep/commerce/numerique/cles-num-2016/07-Modele-CGU.pdf</p>

</body>

<?php
require_once ROOT . '/front/includes/commons/___footerFront.php';
?>

</html>