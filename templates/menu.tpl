<div class="navbar navbar-default top-navbar">
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
<script>
$(function(){
    $('#menu{$pageInfos["title"]|ucfirst}').parent('li').addClass("current");
})
</script>


<!--
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

{foreach from=$menuElements item=item}

    <li>
        <a class="{if {$pageInfos['title']|lower}|lower == $item|lower}active-menu{/if}" href="{$item|lower}.php"><i class="fa fa-dashboard"></i> {$item}</a>
    </li>
  
{/foreach}

                </ul>

            </div>

        </nav>

-->