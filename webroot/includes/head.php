<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- desactiver le zoom sur les peripheriques mobiles -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="la plate forme de gestion de l'ecole UJN">
        <meta name="author" content="AfriNTIC">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link rel="icon" type="image/ico" href="img/imgApp/logoUjn.png"/>

        <title>
            <?php
            // le titre de la page varie avec la pagequi charge le head
            echo isset($title) ? $title : "Gestion Ecole UJN";
            ?>

        </title>
        <link href="librairies/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/ujnEcole.css" rel="stylesheet" type="text/css"/>
        <link href="librairies/font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="librairies/swetyalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="librairies/dropdown/style.css" rel="stylesheet" type="text/css"/>

        <script src="librairies/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="librairies/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="librairies/dropdown/hoverIntent.js" type="text/javascript"></script>
        <script src="librairies/dropdown/jquery.dropdown.js" type="text/javascript"></script>
        <script src="js/ujnEcole.js" type="text/javascript"></script>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
