<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-08 08:31:25
         compiled from "/srv/www/htdocs/web278/html/my_dreams/templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:307772922552271a4ae8015-12132860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ded2039444f5fd1dd8668933b794e861e885a4b' => 
    array (
      0 => '/srv/www/htdocs/web278/html/my_dreams/templates/menu.tpl',
      1 => 1428474616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307772922552271a4ae8015-12132860',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552271a4b0d1c4_98573705',
  'variables' => 
  array (
    'pageInfos' => 0,
    'menuElements' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552271a4b0d1c4_98573705')) {function content_552271a4b0d1c4_98573705($_smarty_tpl) {?><div class="navbar navbar-default top-navbar">
<ul class="nav navbar-top-links navbar-right">
                <li class="dropdownf">
                    <a class="dropdown-toggle" id="menuDreams" href="dreams.php" aria-expanded="false">
                        <i class="fa fa-check-square-o fa-2x"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" id="menuSavings" href="savings.php" aria-expanded="false">
                        <i class="fa fa-money fa-2x"></i>
                    </a>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" id="menuWithdraws" href="withdraws.php" aria-expanded="false">
                        <i class="fa fa-sign-out fa-2x"></i>
                    </a>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
            </ul>

        </div>
<?php echo '<script'; ?>
>
$(function(){
    $('#menu<?php echo ucfirst($_smarty_tpl->tpl_vars['pageInfos']->value["title"]);?>
').parent('li').addClass("current");
})
<?php echo '</script'; ?>
>


<!--
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
<?php $_tmp1=ob_get_clean();?><?php if (mb_strtolower($_tmp1, 'UTF-8')==mb_strtolower($_smarty_tpl->tpl_vars['item']->value, 'UTF-8')) {?>active-menu<?php }?>" href="<?php echo mb_strtolower($_smarty_tpl->tpl_vars['item']->value, 'UTF-8');?>
.php"><i class="fa fa-dashboard"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
    </li>
  
<?php } ?>

                </ul>

            </div>

        </nav>

--><?php }} ?>
