<?
require './smarty/Smarty.class.php';
require './Model/Dream.php';

$Dream = new Dream();
global $Dream;
$smarty = new Smarty;




//{$menuElements = ['Savings','Dreams','to withdraw']}

$smarty->assign("pageInfos", array(
	'title' =>  'dreams',
	'subtitle' =>  'Define your dreams',
	'url' =>  'dreams.php',
	'icon' =>  'fa-check-square-o',
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


if($_GET['add']) { //action add
	$Dream->add($_POST);
	index();
}
elseif($_GET['restore']) { //action add
	$Dream->restore($_GET['id']);
	index();
}
elseif($_GET['removed_id']) { //action add
	index();
	$content .= '<script>alertRestore('.$_GET['removed_id'].');</script>';
}
elseif($_POST['action'] == 'setAsMainSavingDream') {
	$Dream->setAsMainSavingDream($_POST);
}
elseif($_POST['action'] == 'remove') {
	$Dream->remove($_POST['id']);
}
elseif($_POST['action'] == 'done') {
	$Dream->done($_POST['id']);
}
elseif($_POST['action'] == 'undone') {
	$Dream->undone($_POST['id']);
}

elseif($_GET['id']) {
	showDetails($_GET['id']);
}
 else {
	index(); //to replace with htaccess implicit call / redirection
}

function index() {
	global $Dream, $content;
	$allDreams = $Dream->getAllDreams();
	foreach ($allDreams as $key => $dream) {
		$complete =($dream['percentage']>=100?true:false);
		if($complete) {
			$class = 'green complete';
		} else {
			$class = 'blue';
		}
		$pending = $dream['current'] - $Dream->getWithdrawnSumByDreamId($dream['id']);
		$content .= '
			<div class="col-xs-12 col-md-3 ">
				<div class="panel panel-default list_dreams '.($dream['done']==1?'done':'').'">
					<div class="panel-heading">
						<input type="checkbox" value="'.$dream["id"].'"><a href="?id='.$dream["id"].'">'.$dream["name"].' <i class="fa fa-arrow-circle-right"></i></a>
						'.($pending>0?'<span class="label label-info pendingWithdraw" data-value="'.$pending.'">'.$pending.' €</span>':'').'
					</div>
				</div>
			</div>
			';
/*
		$content .= '
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel '.($complete?'complete':'').'">
						<h4>'.$dream['name'].'</h4>
						<div class="easypiechart easypiechart-'.$class.'" id="easypiechart-'.$key.'" data-percent="'.$dream['percentage'].'" ><span class="percent">'.$dream['percentage'].'</span>
						</div>
					</div>
				</div>
			</div>
			';
*/
	}

	$content = '
	<div class="row">
		'.$content.'
	</div><!--/.row-->';

}



function showDetails($id) {
	global $Dream, $content;
	$dream = $Dream->getDreamById($id);
	$withdrawnSum =  $Dream->getWithdrawnSumByDreamId($id);
	if ($dream['percentage'] > 50 ) {
		$color = "green";
	} elseif ($dream['percentage'] > 20 ) {
		$color = "blue";
	} else {
		$color = "red";
	}

	$content .= '
	<div class="col-xs-12">
		<div class="panel panel-info dream_detail">
			<div class="panel-heading">
				<h4>'.$dream["name"].'</h4>
			</div>
			<div class="panel-body">
					<div class="row">
					<div class="col-xs-6" style="text-align:left">
					'.($dream['done']==0?'
					<button id="goalDone" type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button></div>
					':'
					<button id="goalUndone" type="button" class="btn btn-default btn-circle"><i class="fa fa-remove"></i></button></div>
					').'
						<div class="col-xs-6" style="text-align:right"><i class="fa fa-trash" id="removeDream">remove</i></div>
						
						
					</div>
				<div class="col-sm-12">
					<div class="easypiechart-panel '.($complete?'complete':'').'">
						<h4>'.$dream['name'].'</h4>
						<div class="easypiechart easypiechart-'.$color.'" id="easypiechart-'.$key.'" data-percent="'.$dream['percentage'].'" >
							<span class="percent">'.$dream['percentage'].'</span>
						</div>
					</div>
<div id="wrap">
   <div id="content">
					<span id="current" data-value="'.$dream['current'].'">Current : '.$dream['current'].'</span>
					<span>Total : '.$dream['total'].'</span>
</div></div>

				</div>

			</div>
			<div class="panel-footer">
				<div  class="col-xs-12 col-sm-6">
				'.(($dream['current']-$withdrawnSum)>0?'<span class="label label-info pendingWithdraw" data-value="'.($dream['current']-$withdrawnSum).'">'.($dream['current']-$withdrawnSum) .'€ pending</span>':'').'
					<div class="btn-group">
						<button id="'.$dream['id'].'" data-value="'.($dream['current']-$withdrawnSum).'" class="withdrawNow btn btn-default '.(($dream['current']-$withdrawnSum)<=0?'disabled':'').'" data-toggle="modal" data-target="#confirmationModal"><i class=" fa fa-money "></i> Withdraw now</button>
					      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					        <span class="caret"></span>
					        <span class="sr-only">Toggle Dropdown</span>
					      </button>
					      <ul class="dropdown-menu" role="menu">
					        <li><a href="#" data-toggle="modal" data-target="#withdrawModal" class="open_modal">Set amount</a></li>
					      </ul>
					</div>

				</div>
				<div class="spacing visible-xs">&nbsp;</div>
				<div class="col-xs-12 col-sm-6">
					<button id="'.$dream['id'].'" class="setAsMainSavingDream btn btn-default '.($dream['default_goal']==1?'disabled':'').'"><i class=" fa fa-check "></i> Set as saving goal</button>
				</div>

			</div>
	</div>

<!-- modal -->
                            <div id="withdrawModal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Withdraw</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>How much do you want to withdraw ?</p>
                                            <input type="number" name="amount" class="amount">
                                            <p></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" value="Save changes"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!-- /modal -->



	<div class="row">
		
	</div><!--/.row-->

	<script>
	$(function(){
		$(".setAsMainSavingDream").click(function(){
			$.ajax({
				url: "?",
				method: "POST",
				data: { id: $(this).attr("id"), action: "setAsMainSavingDream"}
			}).done(function() {
			  $( ".setAsMainSavingDream" ).attr( "disabled" ,"disabled");
			});

		})

		$("#confirmationModal #yesButton").click(function(){
			$.ajax({
				url: "./withdraws.php",
				method: "POST",
				data: { action: "withdrawNow", id: $(".setAsMainSavingDream").attr("id"), amount: $(".withdrawNow").data("value")}
			}).done(function() {
			  location.reload();
			});

		})

		$("#removeDream").click(function(){
	
			$.ajax({
				url: "./dreams.php",
				method: "POST",
				data: { action: "remove", id: $(".setAsMainSavingDream").attr("id")}
			}).done(function() {
				location.href="dreams.php?removed_id="+$(".setAsMainSavingDream").attr("id")
			});
		})

		$("#goalDone").click(function(){
			$.ajax({
				url: "./dreams.php",
				method: "POST",
				data: { action: "done", id: $(".setAsMainSavingDream").attr("id")}
			}).done(function() {
				location.href="dreams.php"
			});

		});

		$("#goalUndone").click(function(){
			$.ajax({
				url: "./dreams.php",
				method: "POST",
				data: { action: "undone", id: $(".setAsMainSavingDream").attr("id")}
			}).done(function() {
				location.href="dreams.php"
			});

		});

		$("#withdrawModal input[type=submit]").click(function(){
			$.ajax({
				url: "./withdraws.php",
				method: "POST",
				data: { action: "withdrawNow", id: $(".setAsMainSavingDream").attr("id"), amount: $("#withdrawModal input.amount").val()}
			}).done(function() {
			  location.reload();
			});
		})

		$(".open_modal").click(function(){

			
			
		})



	})
	</script>

	';



}


 






$smarty->assign("content", $content);
$smarty->display('layout.tpl');



?>