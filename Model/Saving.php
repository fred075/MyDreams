<?
include_once "./db.php";

class Saving {
	
	public function __construct(){
		global $db;
		$db = new DB();
	}

	public function getAllSavings(){
		global $db;

		$allSavings = $db->execute ('select * from mydreams_saving');
		foreach ($allSavings as $key => $saving) {
		}
		return $allSavings;
	}

	public function addSaving($params){
		global $db;

		$db->execute('INSERT INTO mydreams_saving (dream_fk, amount, creation_date) VALUES ("'.$_POST['dream'].'", "'.$_POST['amount'].'", NOW()) ');
	}

}