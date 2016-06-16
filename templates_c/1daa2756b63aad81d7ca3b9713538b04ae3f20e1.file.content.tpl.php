<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-08 08:31:25
         compiled from "/srv/www/htdocs/web278/html/my_dreams/templates/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74470949552271a4b11d80-88747201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1daa2756b63aad81d7ca3b9713538b04ae3f20e1' => 
    array (
      0 => '/srv/www/htdocs/web278/html/my_dreams/templates/content.tpl',
      1 => 1428474615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74470949552271a4b11d80-88747201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552271a4b49c13_07949563',
  'variables' => 
  array (
    'pageInfos' => 0,
    'addModal' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552271a4b49c13_07949563')) {function content_552271a4b49c13_07949563($_smarty_tpl) {?>

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
