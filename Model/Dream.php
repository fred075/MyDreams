<?
include_once "./db.php";

class Dream {
	
	public function __construct(){
		global $db;
		$db = new DB();
	}

	public function getAllDreams(){
		global $db;

		$allDreams = $db->execute ('select * from mydreams_dream WHERE status = "1" ORDER BY done ASC');
		foreach ($allDreams as $key => $dream) {
			$allDreams[$key]['current'] = $this->getTotalByDreamId($dream['id']);
			$allDreams[$key]['percentage'] = $allDreams[$key]['current'] / $dream['total'] * 100;
		}
		return $allDreams;
	}

	public function getDreamById($id){
		global $db;
		$dream = $db->execute ('select * from mydreams_dream WHERE id="'.$id.'" AND status = "1"');
		$dream[0]['current'] = $this->getTotalByDreamId($id);
		$dream[0]['percentage'] = $dream[0]['current'] / $dream[0]['total'] * 100;

		return $dream[0];
	}

	public function getTotalByDreamId($id){
		global $db;
		$total = $db->execute('select sum(amount) as sum from mydreams_saving where dream_fk="'.$id.'"');
		return $total[0]['sum'];
	}

	public function getCompletedDreams(){
		global $db;
		//liste dreams where sum savings >= total
		$dreams = $db->execute('select * from mydreams_dream');
		foreach ($dreams as $key => $dream) {
			$total = $this->getTotalByDreamId($dream['id']);
			if($total >= $dream['total']) {
				$dreams[$key]['readyToWithdraw'] = 1;
			}

		}
		return $dreams;
	}

	public function add($params){
		global $db;
		$db->execute('INSERT INTO mydreams_dream (name, total, creation_date, status) VALUES ("'.ucfirst($params['name']).'", "'.$params['total'].'", NOW(), "1")');
	}

	public function remove($id){
		global $db;
		$db->execute('UPDATE mydreams_dream SET status ="0" WHERE id="'.$id.'"');
	}

	public function restore($id){
		global $db;
		$db->execute('UPDATE mydreams_dream SET status ="1" WHERE id="'.$id.'"');
	}

	public function done($id){
		global $db;
		$db->execute('UPDATE mydreams_dream SET done ="1" WHERE id="'.$id.'"');
	}

	public function undone($id){
		global $db;
		$db->execute('UPDATE mydreams_dream SET done ="0" WHERE id="'.$id.'"');
	}


	public function getWithdrawnSumByDreamId($dream_id) {
		global $db;
		$withdrawnSum = $db->execute('select sum(amount) as withdrawnSum from mydreams_withdraw WHERE dream_fk = "'.$dream_id.'"');
		
		return $withdrawnSum[0]['withdrawnSum'];
	}

	public function setAsMainSavingDream($params){
		global $db;
		$db->execute('UPDATE mydreams_dream SET default_goal ="0"');
		$db->execute('UPDATE mydreams_dream SET default_goal ="1" WHERE id="'.$params['id'].'"');

	}

}