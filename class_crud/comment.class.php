<?php
// CRUD COMMENT
// ETUD
require_once __DIR__ . '../../connect/database.php';

class COMMENT{

	function get_NbAllCommentsBynumMemb($numMemb){
		global $db;

		// select
		$query = 'SELECT * FROM comment WHERE numMemb = ?';
		// prepare
		$allNbAllCommentsBynumMemb = $db->prepare($query);
		// execute
		$allNbAllCommentsBynumMemb->execute([$numMemb]);

		$count = $allNbAllCommentsBynumMemb->rowCount(); 

		return($count);
	}

}
