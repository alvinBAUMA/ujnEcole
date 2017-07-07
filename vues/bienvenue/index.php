<?php include 'includes/head.php'; ?>
</head>
<style>
    body{
        background-color: #ebebeb;
        background-image: url(img/imgApp/bc-home.jpg);
        padding-top: 40px;
        background-size: 100%
    }

    #form-login .input-text:focus{
        border: 2px solid #ec491c;
        background-color: #fff
    }
    #form-login .input-text:hover{
        border: 2px solid #ec491c;
        background-color: #fff
    }

    #form-login .input-text{
        background-color: #e7e7e7;
        font-size: 25px
    }





</style>

<body>
    <?php include('includes/includes_flash.php'); ?>
    <div class="text-center">
        <label style="font-size: 30px; color: #f63d19; text-shadow: 1px 4px 2px #fff">GESTION ECOLE UJN</label><br/>
        <img width="200px" class="img-rounded" src="img/imgApp/logoUjn.png"/><br/>
        <div id="block-login" class="col-lg-4 col-md-4 col-sm-8 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-2 block-login" style="position: absolute; top: 200px; z-index: 2">
            <div class="panel panel-default"  style="border-radius: 10px; box-shadow: 0px 0px 200px #fff; border: 2px solid #fafafa">
                <div class="panel-body" style="background-color: #000000; border-radius: 10px">
                    <div id="block1" class="text-center">
                        <br/>
                        <strong class="text-center" style="color: #ec491c; font-size: 20px">Connectez-vous avec votre compte</strong>

                    </div>
                    <div>
                        <form method="post" style="padding: 0px" autocomplete="off" id="form-login">
                            <div class="form-group well-lg form-group-lg" style="padding: 5px">
                                <div class="form-horizontal">
                                    <input type="text" name='login' id="login" class='form-control text-center input-text' value="" required="requireds" style="margin-bottom: 15px; width: 100%" placeholder="N° télephone ou Email"/>    
                                    <input type="password" style="margin-bottom: 15px; width: 100%" name='motdepasse' id='motdepasse' class='form-control input-text text-center' required="requireds" placeholder="Mot de passe"/>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-6 col-md-offset-6" style="padding: 0px">
                                        <input type="submit" class="btn btn-primary taille-18 btn-block" name="connexion" value="Se connecter">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blanc" style="padding: 0px; margin-top: 10px">
                                        <?php include ('includes/message_erreur.php'); ?>
                                    </div>


                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blanc" style="padding: 0px">
                                        <br/>
                                        En cas de problème? Contactez l'administateur
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>
