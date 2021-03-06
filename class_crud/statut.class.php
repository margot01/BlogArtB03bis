<?php
// CRUD STATUT
// ETUD
require_once __DIR__ . '../../connect/database.php';

class STATUT{
	function get_1Statut($idStat){
		global $db;

		// select
		$query = 'SELECT * FROM statut WHERE idStat = ?';
		// prepare
		$result = $db->prepare($query);
		// execute
		$result->execute([$idStat]);

		return($result->fetch());
	}

	function get_AllStatuts(){
		global $db;

		// select
		$query = 'SELECT * FROM statut;';
		// prepare
		$result = $db->query($query);
		// execute
		$allStatuts = $result->fetchAll();

		return($allStatuts);
	}

	function create($libStat){
		global $db;

		try {
			$db->beginTransaction();

			// insert
			$query='INSERT INTO statut (libStat) VALUES (?)';
			// prepare
			$request = $db->prepare($query);
			// execute
			$request->execute([$libStat]);

			$db->commit();
			$request->closeCursor();
		}
		catch (PDOException $e) {
			$db->rollBack();
			$request->closeCursor();
			die('Erreur insert statut : ' . $e->getMessage());
		}
	}

	function update($idStat, $libStat){
		global $db;

		try {
			$db->beginTransaction();

			// update
			$query = "UPDATE statut SET libStat=? WHERE idStat=?";
			// prepare
			$request = $db->prepare($query);
			// execute
			$request->execute([$libStat, $idStat]);

			$db->commit();
			$request->closeCursor();
		}
		catch (PDOException $e) {
			$db->rollBack();
			$request->closeCursor();
			die('Erreur update statut : ' . $e->getMessage());
		}
	}

	function delete($idStat){
		global $db;
		try {
			$db->beginTransaction();

			// delete
			$query="DELETE FROM statut WHERE idStat = ?";
			// prepare
			$request=$db->prepare($query);
			// execute
			$request->execute([$idStat]);
			
			$count = $request->rowCount(); 
			$db->commit();
			$request->closeCursor();
			return($count);
		}
		catch (PDOException $e) {
			$db->rollBack();
			$request->closeCursor();
			die('Erreur delete statut : ' . $e->getMessage());
		}
	}
}
