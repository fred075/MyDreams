<?


include_once "functions.php";

class DB {



	public function __construct() {
	global $db;
	$serveur = "localhost";
	$base = "money_saver";

	$user_db = "root";
	$pass_db = "root";



	$db = mysql_connect($serveur,$user_db,$pass_db); // On se connecte avec comme paramËtre les variables prÈcÈdemment renseignÈes

	mysql_select_db($base,$db); // On sÈlectionne la base de donnÈes


	}

	function execute ($sql) {
		$req = mysql_query($sql) or die ('Une erreur est survenue'.mysql_error());
		while ( $res = mysql_fetch_assoc( $req ) ) { 	
			$return[] = $res;
		}
	
		return $return;
	}


	function executeQueryByParams($table, $where, $select='*',$return='') {
		connexion_db();
		$sql = "SELECT $select FROM $table WHERE $where ";
		mysql_query("SET NAMES UTF8");
		$query = mysql_query($sql) or die ('Une erreur est survenue'.mysql_error());

		$res = mysql_num_rows($query); 
		if ( $res==0 ) {   
			return 'Fehler';
		} else {   
			while ( $res = mysql_fetch_array( $query ) ) { 
				mysql_close();
				return $res[$return]; 
		} //END IF  
    }
} //END FUNCTION

}
?>