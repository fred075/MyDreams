<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-01 15:51:17
         compiled from "/Users/fred/Sites/Projects/money-saver/templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:219478029551beff8a8cd01-51124412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0d74cbf3ac919d97625e3c223bd2e7f944d9c18' => 
    array (
      0 => '/Users/fred/Sites/Projects/money-saver/templates/menu.tpl',
      1 => 1427896276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219478029551beff8a8cd01-51124412',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551beff8a934f3_32594532',
  'variables' => 
  array (
    'menuElements' => 0,
    'pageInfos' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551beff8a934f3_32594532')) {function content_551beff8a934f3_32594532($_smarty_tpl) {?>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuElements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

    <li>
        <a class="<?php ob_start();?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['pageInfos']->value['title'], 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php if (mb_strtolower($_tmp1, 'UTF-8')==mb_strtolower($_smarty_tpl->tpl_vars['item']->value, 'UTF-8')) {?>active-menu<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
.php"><i class="fa fa-dashboard"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
    </li>
  
<?php } ?>

                </ul>

            </div>

        </nav><?php }} ?>
