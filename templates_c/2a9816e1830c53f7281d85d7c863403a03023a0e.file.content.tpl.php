<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-07 14:06:49
         compiled from "/Users/fred/Sites/Projects/my_dreams/templates/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43144804355227011565685-05928554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a9816e1830c53f7281d85d7c863403a03023a0e' => 
    array (
      0 => '/Users/fred/Sites/Projects/my_dreams/templates/content.tpl',
      1 => 1428408404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43144804355227011565685-05928554',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5522701166f4d1_78715722',
  'variables' => 
  array (
    'pageInfos' => 0,
    'addModal' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5522701166f4d1_78715722')) {function content_5522701166f4d1_78715722($_smarty_tpl) {?>

<div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <?php echo ucfirst($_smarty_tpl->tpl_vars['pageInfos']->value['title']);?>
 <small><?php echo ucfirst($_smarty_tpl->tpl_vars['pageInfos']->value['subtitle']);?>
</small>
                        </h1>
                            <?php if ($_smarty_tpl->tpl_vars['addModal']->value) {?> 
                            <div style="padding: 20px 0px 0px 10px;display:inline-block">
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#<?php echo $_smarty_tpl->tpl_vars['pageInfos']->value['title'];?>
">
                                  <i class="fa fa-plus xs"></i>
                                </button>
                            </div>
                            <form action="dreams.php?add=1" method="post">
                            <div id="<?php echo $_smarty_tpl->tpl_vars['pageInfos']->value['title'];?>
" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['addModal']->value['title'];?>
</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p><?php echo $_smarty_tpl->tpl_vars['addModal']->value['content'];?>
</p>
                                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['addModal']->value['warning'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2) {?><p class="text-warning"><small><?php echo $_smarty_tpl->tpl_vars['addModal']->value['warning'];?>
</small></p> <?php }?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" value="Save changes"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <?php }?>

<div id="history_back" class="col-xs-12">
<a href="javascript:history.back()"><i class="fa fa-arrow-left"></i> Back</a>
</div>


                        
                    </div>
                </div>
				
				

	   <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

				
				
            
                <!-- /. ROW  -->
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->


<!-- Modal confirmation -->
<div id="confirmationModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <input type="submit" id="yesButton" class="btn btn-primary" value="Yes"/>
            </div>
        </div>
    </div>
</div>

<?php }} ?>
