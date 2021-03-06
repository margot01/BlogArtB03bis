<?php
// CRUD THEMATIQUE
// ETUD
require_once __DIR__ . '../../connect/database.php';

class THEMATIQUE{
	function get_1Thematique($numThem){
		global $db;

	// select
	$query = 'SELECT * FROM thematique WHERE numThem = ?';
	// prepare
	$result = $db->prepare($query);
	// execute
	$result->execute([$numThem]);
			return($result->fetch());
		}

	function get_1ThematiqueByLang($numThem){
		global $db;

		// select
		$query = 'SELECT * FROM thematique the INNER JOIN langue la ON the.numLang = la.numLang WHERE numThem = ?;';
		// prepare
		$result = $db->prepare($query);
		// execute
		$result->execute([$numThem]);
		return($result->fetch());
	}

	function get_AllThematiques(){
		global $db;

		// select
		$query = 'SELECT * FROM thematique';
		// prepare
		$result = $db->query($query);
		// execute
		$allThematiques = $result->fetchAll();

		return($allThematiques);
	}

	function get_AllThematiquesByLang(){
		global $db;

		// select
        $query = 'SELECT * FROM thematique th INNER JOIN langue la ON th.numLang = la.numLang';
		// prepare
        $result = $db->query($query);
		// execute
		$allThematiquesByLang = $result->fetchAll();
		return($allThematiquesByLang);
	}

	function get_AllThematiquesByLibThem(){
		global $db;

		// select
		$query = 'SELECT * FROM thematique ORDER BY libThem;';
		// prepare
		$result = $db->query($query);
		// execute
		$allThematiquesByLibThem = $result->fetchAll();

		return($allThematiquesByLibThem);
	}
	function get_AllLanguesOrderByLibLang(){
        global $db;

        $query = 'SELECT * FROM langue ORDER BY lib1Lang;';
        $result = $db->query($query);
        $allLanguesOrderByLibLang = $result->fetchAll();
        return($allLanguesOrderByLibLang);
    }
	function get_NbAllThematiquesBynumLang($numLang){
		global $db;

		// select
		$query = 'SELECT * FROM thematique WHERE numLang = ?';
		// prepare
		$allNbThematiqueBynumLang = $db->prepare($query);
		// execute
		$allNbThematiqueBynumLang->execute([$numLang]);
		$count = $allNbThematiqueBynumLang->rowCount();
		return($count);
	}

	// R??cup derni??re PK NumThem
	function get_NextNumThem($numLang) {
		global $db;
	
		// D??coupage FK LANGUE
		$libLangSelect = substr($numLang, 0, 4);
		$parmNumLang = $libLangSelect . '%';
	
		$requete = "SELECT MAX(numLang) AS numLang FROM thematique WHERE numLang LIKE '$parmNumLang';";
		$result = $db->query($requete);
	
		if ($result) {
			$tuple = $result->fetch();
			$numLang = $tuple["numLang"];
			if (is_null($numLang)) {    // New lang dans THEMATIQUE
				// R??cup derni??re PK utilis??e
				$requete = "SELECT MAX(numThem) AS numThem FROM thematique;";
				$result = $db->query($requete);
				$tuple = $result->fetch();
				$numThem = $tuple["numThem"];
	
				$numThemSelect = (int)substr($numThem, 4, 2);
				// No s??quence suivant LANGUE
				$numSeq1Them = $numThemSelect + 1;
				// Init no s??quence THEMATIQUE pour nouvelle lang
				$numSeq2Them = 1;
			} else {
				// R??cup derni??re PK pour FK s??lectionn??e
				$requete = "SELECT MAX(numThem) AS numThem FROM thematique WHERE numLang LIKE '$parmNumLang' ;";
				$result = $db->query($requete);
				$tuple = $result->fetch();
				$numThem = $tuple["numThem"];
	
				// No s??quence actuel LANGUE
				$numSeq1Them = (int)substr($numThem, 4, 2);
				// No s??quence actuel LANGUE
				$numSeq2Them = (int)substr($numThem, 6, 2);
				// No s??quence suivant THEMATIQUE
				$numSeq2Them++;
			}
	
			$libThemSelect = "them";
			// PK reconstitu??e : THE + no seq langue
			if ($numSeq1Them < 10) {
				$numThem = $libThemSelect . "0" . $numSeq1Them;
			} else {
				$numThem = $libThemSelect . $numSeq1Them;
			}
			// PK reconstitu??e : THE + no seq langue + no seq th??matique
			if ($numSeq2Them < 10) {
				$numThem = $numThem . "0" . $numSeq2Them;
			} else {
				$numThem = $numThem . $numSeq2Them;
			}
		}   // End of if ($result) / no seq LANGUE
		return $numThem;
	} // End of function

	function create($numThem, $libThem, $numLang){
		global $db;

		try {
			$db->beginTransaction();

			// insert
			$query = 'INSERT INTO thematique (numThem, libThem, numLang) VALUES (?, ?, ?)';
			// prepare
			$request = $db->prepare($query);
			// execute
			$request->execute([$numThem, $libThem, $numLang]);

			$db->commit();
			$request->closeCursor();
		}
		catch (PDOException $e) {
			$db->rollBack();
			$request->closeCursor();
			die('Erreur insert thematique : ' . $e->getMessage());
		}
	}

	function update($numThem, $libThem, $numLang){
		global $db;

		try {
			$db->beginTransaction();

			// update
			$query = "UPDATE thematique SET libThem = ?, numLang = ? WHERE numThem = ?;"; //se r??f??rencer ?? la photo de toutes les tables (cl?? primaire, ??trang??res,...)
			// prepare
			$request = $db->prepare($query);
			// execute
			$request->execute([$libThem, $numLang, $numThem]); // ordre de $query obligatoire mais pas de function update

			$db->commit();
			$request->closeCursor();
		}
		catch (PDOException $e) {
			$db->rollBack();
			$request->closeCursor();
			die('Erreur update thematique : ' . $e->getMessage());
		}
	}

	// Ctrl FK sur THEMATIQUE, ANGLE, MOTCLE avec del
	function delete($numThem){
		global $db;
		
		try {
			$db->beginTransaction();

			// delete
			$query="DELETE FROM thematique WHERE numThem = ?";
			// prepare
			$request=$db->prepare($query);
			// execute
			$request->execute([$numThem]);

			$count = $request->rowCount();
			$db->commit();
			$request->closeCursor();
			return($count);
		}
		catch (PDOException $e) {
			$db->rollBack();
			$request->closeCursor();
			die('Erreur delete thematique : ' . $e->getMessage());
		}
	}
}		// End of class
