<?
include_once "./db.php";

class Withdraw {
	
	public function __construct(){
		global $db;
		$db = new DB();
	}


	public function addWithdraw($params){
		
		global $db;
		$db->execute('INSERT INTO mydreams_withdraw (dream_fk, amount, creation_date) VALUES ("'.$params['id'].'", "'.$_POST['amount'].'", NOW()) ');
	}



}