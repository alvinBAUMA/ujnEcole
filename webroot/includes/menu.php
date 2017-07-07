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
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="menu_accueil" style="height: 70px; padding: 0px;">
    <div class="container">
        <div class="navbar-header">
            <button style="margin-top: 10px" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="margin-top: -7px" href="#">
                <img src="img/imgApp/logoUjn.png" width="50px" height="50px" class="img-rounded" alt="icon logo"/>
            </a>
            <a class="navbar-brand" style="color: #ec491c; font-size: 20px; margin-top: -7px">
                <span class="taille-25">Gestion</span><hr style="margin-top: 5px; margin-bottom: 5px"/>
                <span style="font-family: calibri; font-size: 24px">Ecole UJN</span>
            </a>

        </div>

        <div id="navbar" style="padding: 0px; color: #fff" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right" id="menu1">   
                <li class="dropdown li-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <strong class="taille-14">User <span class="caret"></span></strong> 
                    </a>
                    <ul class="dropdown-menu" style="font-size: 13px">
                        <li><a href=""><strong><i class="fa fa-user"></i> Mon compte</strong></a></li>
                        <li><a href=""><i class="fa fa-power-off"></i> DECONNEXION</a></li>
                    </ul>
                </li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


