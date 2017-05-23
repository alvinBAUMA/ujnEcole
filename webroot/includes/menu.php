<style>
    /**
    STYLE MENU
    **/
    .fa-menu{
        width: 20px;
        text-align: center;
        font-size: 15px;

    }
    .li-menu{
        color: #fff
    }
    .li-menu:hover{
        background-color: #fff;
        padding: 0px;
        cursor: pointer;
        color: #000
    }
</style>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="menu_accueil" style="box-shadow: 0px 0px 5px #0a79c9; height: 70px; padding: 0px; background-color: #0a79c9">
    <div class="container">
        <div class="navbar-header">
            <button style="margin-top: 10px" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="margin-top: -10px" href="#">
                <img src="img/imgApp/stockmanagerLogo.png" width="50px" height="50px" class="img-rounded" alt="icon logo"/>
            </a>
            <a class="navbar-brand" style="color: #fff; font-size: 20px; margin-top: -10px">
                <span class="taille-25">Stock</span><hr style="margin-top: 5px; margin-bottom: 5px"/>
                <span class="taille-20" style="font-family: calibri">Manager</span>
            </a>

        </div>

        <div id="navbar" style="background-color: #0a79c9; padding: 0px; color: #fff" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left" id="menu1">   
                <li class="li-menu"><a href="index.php"><label><span class="fa fa-home fa-menu"></span> Accueil</label></a></li>
                <li class="li-menu"><a href="index.php"><label><span class="fa fa-paper-plane fa-menu"></span> A la une</label></a></li>
                <li class="li-menu"><a href="index.php"><label><span class="fa fa-navicon fa-menu"></span> Numéros</label></a></li>
                <li class="dropdown li-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <strong class="taille-14">User <span class="caret"></span></strong> 
                    </a>
                    <ul class="dropdown-menu" style="font-size: 13px">
                        <li><a href=""><strong>ASTUCES</strong></a></li>
                        <li><a href=""><strong class="">HIGH-TECH</strong></a></li>
                        <li><a href=""> <strong>AU COEUR DE FAITS</strong></a></li>
                        <li><a href=""><i class="fa fa-book"></i> <strong>LE&Ccedil;ONS TRADITIONNELLES</strong></a></li>
                        <li><a href=""><i class="fa fa-adjust"></i> <strong>PORTRAITS</strong></a></li>
                    </ul>
                </li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


