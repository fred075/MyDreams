{$menuElements = ['Savings','Dreams','Withdraws']}

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
    <!--<link rel="stylesheet" href="./css/gumby.css">-->

    <link rel="stylesheet" href="./css/css/style.css" />

    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="myscript.js"></script>
</head>

<body>
     
        <!--/. NAV TOP  -->
{include file="./menu.tpl"}
        <!-- /. NAV SIDE  -->
{include file="./content.tpl"}
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
     
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    
    
{foreach from=$scripts item=script}
    <script src="{$script}"></script>
{/foreach}
    
    
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>