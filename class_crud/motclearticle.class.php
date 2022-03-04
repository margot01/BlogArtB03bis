<?php
// CRUD MOTCLEARTICLE
// ETUD
require_once __DIR__ . '../../connect/database.php';

class MOTCLEARTICLE{

	function get_NbAllArtsByNumMotCle($numMotCle){
		global $db;

		// select
		$query = 'SELECT * FROM motclearticle WHERE numMotCle = ?';
		// prepare
		$result = $db->prepare($query);
		// execute
		$result->execute([$numMotCle]);
		$count = $result->rowCount();
		return($count);
	}

	
}	// End of class
