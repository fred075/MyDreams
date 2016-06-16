<?
require './smarty/Smarty.class.php';
require './Model/Dream.php';
require './Model/Withdraw.php';

$Dream = new Dream();
$Withdraw = new Withdraw();
global $Dream, $Withdraw;
$smarty = new Smarty;




//{$menuElements = ['Savings','Withdraws','to withdraw']}

$smarty->assign("pageInfos", array(
	'title' =>  'Withdraws',
	'subtitle' =>  "Don't forget to withdraw",
	'url' =>  'withdraws.php',
	'icon' =>  'fa-sign-out',
));

  $addContent = '
  <div>
    <label for="name">Name : </label><input type="text" name="name" id="name">
  </div>
  <div>
    <label for="total">Total : </label><input type="text" name="total" id="total">
  </div>
  ';

$smarty->assign("addModal", array(
  'title' =>  'Savings',
  'content' =>  $addContent,
  'warning' =>  '',
  'action' => 'add'
));



$smarty->assign("scripts", array(
	'assets/js/easypiechart.js',
	'assets/js/easypiechart-data.js',
));

switch ($_POST['action']) {
	case 'withdrawNow':
		withdrawNow($_POST['id'], $_POST['amount']);
		break;
	
	default:
		# code...
		break;
}


function index() {
	global $Dream, $content;
	$dreamsReadyToWithdraw = $Dream->getCompletedDreams();

	foreach ($dreamsReadyToWithdraw as $key => $dream) {	
		if($dream['readyToWithdraw'] != 1) continue;
		$content .= '
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>'.$dream['name'].'</h4> 
						<button type="button" class="check_withdrew btn btn-default btn-circle" id="'.$dream['id'].'"><i class="fa fa-check"></i>
                            </button>
						<div class="easypiechart easypiechart-'.$class.'" id="easypiechart-'.$key.'" data-percent="'.$dream['percentage'].'" ><span class="percent">'.$dream['percentage'].'</span>
						</div>
					</div>
				</div>
			</div>

			<script>
			$(".check_withdrew").click(function(){
				$box = $(this).parent().parent();
				$box_content = $box.html();

				console.log($box_content);
				$box.addClass("complete").fadeOut();
				$("#history").append($box_content);
				$(this).remove();
                $.ajax({
                       type: "POST",
                       url: "?withdrew=1",
                       data : "id="+$(this).attr("id"),
                       success: function( data ){
                    }
                });
			})
			</script>
			';
	}

	$content .= "
	<div class='clr' id='history'>
	<h2>
	History
	</h2>
	</div>
	";

}
 
index(); //to replace with htaccess implicit call / redirection




function withdrawNow($dream_id, $amount) {
	global $Withdraw, $content;
	$params = array('id' =>$dream_id, 'amount' => $amount);
	$Withdraw->addWithdraw($params);

}

$smarty->assign("content", $content);
$smarty->display('layout.tpl');



?>