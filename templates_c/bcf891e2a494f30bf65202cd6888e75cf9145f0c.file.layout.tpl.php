<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-02 16:12:59
         compiled from "layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:583159302551bef790325d6-28291931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcf891e2a494f30bf65202cd6888e75cf9145f0c' => 
    array (
      0 => 'layout.tpl',
      1 => 1427983872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '583159302551bef790325d6-28291931',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551bef790a0916_25341816',
  'variables' => 
  array (
    'scripts' => 0,
    'script' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551bef790a0916_25341816')) {function content_551bef790a0916_25341816($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['menuElements'] = new Smarty_variable(array('Savings','Goals','to withdraw'), null, 0);?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insight Free Bootstrap Admin Template</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="./css/gumby.css">

    <link rel="stylesheet" href="./css/style.css" />

    <!-- jQuery Js -->
    <?php echo '<script'; ?>
 src="assets/js/jquery-1.10.2.js"><?php echo '</script'; ?>
>
</head>

<body>
     
        <!--/. NAV TOP  -->
<?php echo $_smarty_tpl->getSubTemplate ("./templates/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- /. NAV SIDE  -->
<?php echo $_smarty_tpl->getSubTemplate ("./templates/content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    
    <!-- Bootstrap Js -->
    <?php echo '<script'; ?>
 src="assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	 
    <!-- Metis Menu Js -->
    <?php echo '<script'; ?>
 src="assets/js/jquery.metisMenu.js"><?php echo '</script'; ?>
>
    <!-- Morris Chart Js -->
    <?php echo '<script'; ?>
 src="assets/js/morris/raphael-2.1.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/morris/morris.js"><?php echo '</script'; ?>
>
	
	
<?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['script']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value) {
$_smarty_tpl->tpl_vars['script']->_loop = true;
?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
"><?php echo '</script'; ?>
>
<?php } ?>
	
	
    <!-- Custom Js -->
    <?php echo '<script'; ?>
 src="assets/js/custom-scripts.js"><?php echo '</script'; ?>
>


</body>

</html><?php }} ?>
