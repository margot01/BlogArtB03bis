<?php
// CRUD LIKEART
// ETUD
require_once __DIR__ . '../../connect/database.php';

class LIKEART{
	function get_1LikeArt($numMemb, $numArt){
		global $db;

		// select
		$query = 'SELECT * FROM likeart WHERE numMemb = ? AND numArt = ?';
		// prepare
		$result = $db->prepare($query);
		// execute
		$result->execute([$numMemb, $numArt]);
		return($result->fetch());
	}

	function get_AllLikesArt(){
		global $db;
	
		// select
		$query = "SELECT * FROM likeart lka , article art , membre me WHERE lka.numMemb = me.numMemb AND lka.numArt = art.numArt";
		// prepare
		$result=$db->query($query);
		// execute
		$allLikesArt = $result->fetchAll();
		return($allLikesArt);
	}

	function get_AllLikesArtByNumArt(){
		global $db;

		$query = 'SELECT * FROM LIKEART LKA INNER JOIN article art ON lka.numArt = art.numArt';
		$result = $db->query($query);
		$allLikesArtByNumArt = $result->fetchAll();
		return($allLikesArtByNumArt);
	}

	function get_AllLikesArtByNumMemb(){
		global $db;

		$query = 'SELECT * FROM likeart lka INNER JOIN membre me ON me.numMemb = lka.numMemb';
		$result = $db->query($query);
		$allLikesArtByNumMemb = $result->fetchAll();
		return($allLikesArtByNumMemb);
	}

	function get_nbLikesArtByArticle($numArt){
		global $db;

		// select
		$query = 'SELECT * FROM likeart WHERE numArt = ?';
		// prepare
		$allNbLikesArtByArticle = $db->prepare($query);
		// execute
		$allNbLikesArtByArticle->execute([$numArt]);
		return($allNbLikesArtByArticle->fetchAll());
	}

	function get_nbLikesArtByMembre($numMemb){
		global $db;

		// select
		$query = 'SELECT * FROM likeart WHERE numMemb = ?';
		// prepare
		$allNbLikesArtByMembre = $db->prepare($query);
		// execute
		$allNbLikesArtByMembre->execute([$numMemb]);
		return($allNbLikesArtByMembre->fetchAll());
	}

	function create($numMemb, $numArt, $likeA){
		global $db;

		try {
			$db->beginTransaction();

			// insert
			$query='INSERT INTO likeart (numMemb, numArt, likeA) VALUES (?, ?, ?)';
			// prepare
			$request = $db->prepare($query);
			// execute
			$request->execute([$numMemb, $numArt, $likeA]);

			$db->commit();
			$request->closeCursor();
		}
		catch (PDOException $e) {
			$db->rollBack();
			$request->closeCursor();
			die('Erreur insert likeart : ' . $e->getMessage());
		}
	}

	function update($numMemb, $numArt, $likeA){
		global $db;

		try {
			$db->beginTransaction();

			// update
			$query = "UPDATE likeart SET likeA = ? WHERE numMemb = ? AND numArt = ?";
			// prepare
			$request = $db->prepare($query);
			// execute
			$request->execute([$numMemb, $numArt, $likeA]);
			$db->commit();
			$request->closeCursor();
		}
		catch (PDOException $e) {
			$db->rollBack();
			$request->closeCursor();
			die('Erreur update likeart : ' . $e->getMessage());
		}
	}

	// Create et Update en même temps
	function createOrUpdate($numMemb, $numArt){
		global $db;

		try {
			$db->beginTransaction();

			// insert / update
			$query = "INSERT INTO likeart (numMemb, numArt, likeA) VALUES (?, ?, 1) ON DUPLICATE KEY UPDATE likeA = !likeA";
			// prepare
			$request = $db->prepare($query);
			// execute
			$request->execute([$numMemb, $numArt]);
			$db->commit();
			$request->closeCursor();
		}
		catch (PDOException $e) {
			$db->rollBack();
			$request->closeCursor();
			die('Erreur insert Or Update LIKEART : ' . $e->getMessage());
		}
	}

	// AUTORISE UNIQUEMENT POUR le super-admin / admin => En mode DEV (avant la mise en prod)
	function delete($numMemb, $numArt){
		global $db;
		
		try {
			$db->beginTransaction();

			// delete
			$query="DELETE FROM likeart WHERE numMemb = ? AND numArt= ?";
			//prepare
			$request=$db->prepare($query);
			// execute
			$request->execute([$numMemb, $numArt]);
			$count = $request->rowCount();
			$db->commit();
			$request->closeCursor();
			return($count);
		}
		catch (PDOException $e) {
			$db->rollBack();
			$request->closeCursor();
			die('Erreur delete likeart : ' . $e->getMessage());
		}
	}
}	// End of class
