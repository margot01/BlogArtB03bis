<?php
// CRUD ARTICLE
// ETUD
require_once __DIR__ . '/../connect/database.php';

class ARTICLE{
	function get_1Article($numArt){
		global $db;
		
		// select
		$query = 'SELECT * FROM article WHERE numArt = ?';
		// prepare
		$result = $db->prepare($query);
		// execute
		$result->execute([$numArt]);
		
		return($result->fetch());
	}

	function get_1ArticleAnd3FK($numArt){
		global $db;

		// select
		$query = 'SELECT * FROM article WHERE numArt = ?';
		// prepare
		$result = $db->prepare($query);
		// execute
		$result->execute([$numArt]);
		return($result->fetch());
	}

	function get_AllArticles(){
		global $db;

		// select
		$query = 'SELECT * FROM article';
		// prepare
		$result = $db->query($query);
		// execute
		$allArticles = $result->fetchAll();
		
		return($allArticles);
	}

	function get_AllArticlesByNumAnglNumThem(){
		global $db;

		// select
		$query = 'SELECT * FROM article WHERE numArt=?;';
		// prepare
		$result = $db->query($query);
		// execute
		$allArticlesByNumAnglNumThem = $result->fetchAll();
		return($allArticlesByNumAnglNumThem);
	}

	function get_NbAllArticlesByNumAngl($numAngl){
		global $db;

		// select
		$query = 'SELECT * FROM article WHERE numAngl = ?';
		// prepare
		$allNbArticlesBynumAngl = $db->prepare($query);
		// execute
		$allNbArticlesBynumAngl->execute([$numAngl]);
		$count = $allNbArticlesBynumAngl->rowCount();
		return($count);
	}
	

	function get_NbAllArticlesByNumThem($numThem){
		global $db;

		// select
		$query = 'SELECT * FROM article WHERE numThem = ?';
		// prepare
		$allNbArticlesBynumThem = $db->prepare($query);
		// execute
		$allNbArticlesBynumThem->execute([$numThem]);
		$count = $allNbArticlesBynumThem->rowCount(); 

		return($count);
	}

	function get_4DerniersArticles(){
		global $db;

		// Recherche plusieurs mots clés (CONCAT)
		$textQuery = 'SELECT * FROM article ORDER BY dtCreArt DESC LIMIT 4';
		$result = $db->query($textQuery);
		$all4LastArticlesByDates = $result->fetchAll();
		return($all4LastArticlesByDates);
	}

	function get_allArticlesByDate(){
		global $db;

		// Recherche plusieurs mots clés (CONCAT)
		$textQuery = 'SELECT * FROM ARTICLE ORDER BY dtCreArt DESC';
		$result = $db->query($textQuery);
		$allArticlesByDates = $result->fetchAll();
		return($allArticlesByDates);
	}

	function get_LastArticlebyDate(){
		global $db;

		// Recherche plusieurs mots clés (CONCAT)
		$textQuery = 'SELECT * FROM article ORDER BY dtCreArt DESC LIMIT 1';
		$result = $db->query($textQuery);
		$lastArticlesByDates = $result->fetchAll();
		return($lastArticlesByDates);
	} // End of function
	
	// Barre de recherche CONCAT : mots clés dans ARTICLE & THEMATIQUE
	function get_ArticlesByMotsCles($motcle){
		global $db;

		// Recherche plusieurs mots clés (CONCAT)
		$textQuery = 'SELECT * FROM article ar INNER JOIN themtique th ON ar.numThem = th.numThem WHERE CONCAT(libTitrArt, libChapoArt, libAccrochArt, parag1Art, libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, libThem) LIKE "%'.$motcle.'%" ORDER BY numArt DESC';
		$result = $db->query($textQuery);
		$allArticlesByMotsCles = $result->fetchAll();
		return($allArticlesByMotsCles);
	}


	// Barre de recherche JOIN : mots clés par MOTCLE (TJ) dans ARTICLE
	function get_MotsClesByArticles($listMotcles){
		global $db;

		/*
		Requete avec IN :
		SELECT * FROM MOTCLE WHERE libMotCle IN ('Bordeaux', 'bleu');
		*/
		// Recherche mot clé (INNER JOIN) dans tables MOTCLE & (ARTICLE)
		$textQuery = 'SELECT ar.numArt, libTitrArt, libChapoArt, libAccrochArt, parag1Art, libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt FROM motcle mc INNER JOIN motclearticle mca ON mc.numMotCle = mca.numMotCle INNER JOIN article ar ON mca.numArt = ar.numArt WHERE libMotCle IN (' . $listMotcles . ');';
		$result = $db->prepare($textQuery);
		$result->execute([$listMotcles]);
		$allArticlesByNumAnglNumThem = $result->fetchAll();
		return($allArticlesByNumAnglNumThem);
	}

	// Fonction pour recupérer la prochaine PK de la table ARTICLE
	function getNextNumArt() {
		global $db;

		$requete = "SELECT MAX(numArt) AS numArt FROM article;";
		$result = $db->query($requete);

		if ($result) {
			$tuple = $result->fetch();
			$numArt = $tuple["numArt"];
			// No PK suivante ARTICLE
			$numArt++;
		}   // End of if ($result)
		return $numArt;
	} // End of function

	// Fonction pour recupérer la dernière PK de ARTICLE
	
	// avant insert des n occurr dans TJ MOTCLEARTICLE
	function get_LastNumArt(){
		global $db;

		$requete = "SELECT MAX(numArt) AS numArt FROM article;";
		$result = $db->query($requete);

		if ($result) {
			$tuple = $result->fetch();
			$lastNumArt = $tuple["numArt"];

		}   // End of if ($result)
		return $lastNumArt;
	} // End of function

	function create($dtCreArt, $libTitrArt, $libChapoArt, $libAccrochArt, $parag1Art, $libSsTitr1Art, $parag2Art, $libSsTitr2Art, $parag3Art, $libConclArt, $urlPhotArt, $numAngl, $numThem){
		global $db;

		try {
			$db->beginTransaction();

			// insert
			$query = 'INSERT INTO article (dtCreArt, libTitrArt, libChapoArt, libAccrochArt, parag1Art, libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt, numAngl, numThem) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?,?)';
			// prepare
			$request = $db->prepare($query);
			// execute
			$request->execute([$dtCreArt, $libTitrArt, $libChapoArt, $libAccrochArt, $parag1Art, $libSsTitr1Art, $parag2Art, $libSsTitr2Art, $parag3Art, $libConclArt, $urlPhotArt, $numAngl, $numThem]);
			$db->commit();
			$request->closeCursor();
		}
		catch (PDOException $e) {
			$db->rollBack();
			$request->closeCursor();
			die('Erreur insert article : ' . $e->getMessage());
		}
	}

	function update($numArt, $libTitrArt, $libChapoArt, $libAccrochArt, $parag1Art, $libSsTitr1Art, $parag2Art, $libSsTitr2Art, $parag3Art, $libConclArt, $urlPhotArt, $numAngl, $numThem){
		global $db;

		try {
			$db->beginTransaction();

			if ($urlPhotArt = -1) {

				// update
				$query = "UPDATE artcile SET dtCreArt = ? , libTitrArt = ? , libChapoArt = ?, libAccrochArt = ?, parag1Art = ?, libSsTitr1Art = ? , parag2Art = ?, libSsTitr2Art = ?, parag3Art = ?, libConclArt = ?, numAngl = ?, numThem = ? WHERE numArt = ?";
				// prepare
				$request = $db->prepare($query);
				// execute
				$request->execute([$numArt, $libTitrArt, $libChapoArt, $libAccrochArt, $parag1Art, $libSsTitr1Art, $parag2Art, $libSsTitr2Art, $parag3Art, $libConclArt, $numAngl, $numThem]);
				$db->commit();
				$request->closeCursor();
			} else {

				// update
				$query = "UPDATE artcile SET dtCreArt = ? , libTitrArt = ? , libChapoArt = ?, libAccrochArt = ?, parag1Art = ?, libSsTitr1Art = ? , parag2Art = ?, libSsTitr2Art = ?, parag3Art = ?, libConclArt = ?, urlPhotArt = ? numAngl = ?, numThem = ? WHERE numArt = ?";
				// prepare
				$request = $db->prepare($query);
				// execute
				$request->execute([$numArt, $libTitrArt, $libChapoArt, $libAccrochArt, $parag1Art, $libSsTitr1Art, $parag2Art, $libSsTitr2Art, $parag3Art, $libConclArt, $urlPhotArt, $numAngl, $numThem]);
				$db->commit();
				$request->closeCursor();
			} // fin else
		} catch (PDOException $e) {
			$db->rollBack();
			$request->closeCursor();
			die('Erreur update article : ' . $e->getMessage());
		} // fin du try
	} // fin du function


	function delete($numArt){
		global $db;

		try {
			$db->beginTransaction();

			// delete
			$query="DELETE FROM article WHERE numArt = ?";
			// prepare
			$request=$db->prepare($query);
			// execute
			$request->execute([$numArt]);
			$count = $request->rowCount();
			$db->commit();
			$request->closeCursor();
			return($count);
		}
		catch (PDOException $e) {
			$db->rollBack();
			$request->closeCursor();
			die('Erreur delete article : ' . $e->getMessage());
		}
	}
}	// End of class
