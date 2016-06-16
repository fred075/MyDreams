<?
require './smarty/Smarty.class.php';
require './Model/Dream.php';
require './Model/Saving.php';

$smarty = new Smarty;

$Dream = new Dream();
$Saving = new Saving();
global $Dream, $Saving;

$smarty->assign("pageInfos", array(
  'title' =>  'Savings',
  'subtitle' =>  'How far are you',
  'url' =>  'savings.php',
  'icon' =>  'fa-money',
));




if($_GET['add']) { //action add
  $smarty->assign("addModal", array(
  'title' =>  'Savings',
  'content' =>  'How far are you',
  'warning' =>  'Attention',
  'action' => 'add' 
  ));

  $addContent = '
  <div>
    <label for="name">Name : </label><input type="text" name="name" id="name">
  </div>
  <div>
    <label for="amount">Amount : </label><input type="text" name="amount" id="amount">
  </div>
  ';
  add();

} else { //action index
  index();  
}

function add(){
    global $content, $Saving;    
    $Saving->addSaving($_POST);
}


function index() {
    global $Dream, $content;
    $allDreams = $Dream->getAllDreams();
    $content = '
<form action="?add=1" method="post" id="formAddSaving">
    <div class="row" id="div_money_amount">
    <!-- row -->
    		<div class="col-sm-6 div_amount">


    <a class="btn btn-default btn-circle" id="bigDecrease"><i class="fa fa-angle-double-down"></i></a>
    <a class="btn btn-default btn-circle" id="decrease"><i class="fa fa-angle-down"></i></a>
    <input type="text" id="amount" class="form-control btn-circle" value="5" name="amount")/>
    <a class="btn btn-default btn-circle" id="increase"><i class="fa fa-angle-up"></i></a>
    <a class="btn btn-default btn-circle" id="bigIncrease"><i class="fa fa-angle-double-up"></i></a>
    
    
<input type="submit" class="hidden-xs">
    		</div>
    <!-- /row -->

    <!-- row -->
    		<div class="col-sm-6">
        <div class="space visible-xs">&nbsp;</div>
        <select class="form-control" name="dream">
    ';    	
    foreach ($allDreams as $key => $dream) {
      $content .= '
              <option value="'.$dream['id'].'" '.($dream['default_goal']?'selected':'').'>'.$dream['name'].'</option>
      ';
    }
    $content .= '	
          </select>
    		</div>
    
    <div class="col-sm-6">
      <div class="space visible-xs">&nbsp;</div>
    <input type="submit" class="visible-xs btn btn-primary btn-sm" style="position:relative;left:35%"/>
    </div>
    <!-- /row -->
    </div>

    </form>




     
    <script type="text/javascript">


          $(document).ready(function(){

      

            $("#increase").click(function() {

              $("#amount").val( parseInt($("#amount").val()) + 1 );
            });

            $("#bigIncrease").click(function() {
              $("#amount").val( parseInt($("#amount").val()) + 10 );
            });

            $("#decrease").click(function() {
              $("#amount").val( parseInt($("#amount").val()) - 1 );
            });

            $("#bigDecrease").click(function() {
              $("#amount").val( parseInt($("#amount").val()) - 10 );
            });

            $("#undo").click(function() {
               if (confirm("Undo?")) { // Clic sur OK
                   window.location.href="?undo=1"
               }
            });
          });

    </script>';


}



$smarty->assign("content", $content);



$smarty->display('layout.tpl');
?>