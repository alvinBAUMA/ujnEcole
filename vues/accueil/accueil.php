<?php include 'includes/head.php'; ?>
</head>
<style>
    body{
        font-family: Verdana, "Verdana CE",  Arial, "Arial CE", "Lucida Grande CE", lucida, "Helvetica CE", sans-serif;
        margin-top: 80px;
        background-color: #e5e4e4
    }

    #div_gauche{
        position: fixed;
        top: 60px;
        padding: 0px;
        left: 0px;
        bottom: 0px;
        background-color: #fff;
        overflow: auto
    }

    #div-centre{
        padding: 0px
    }
</style>

<body>
    <?php require 'includes/menu.php'; ?>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3 col-lg-3 col-sm-3" id='div_gauche'>
                <?php include 'includes/div_menu_gauche.php'; ?>
            </div>


            <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4" id="div-centre">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        ssjlsjflfsj
                    </div>

                    <div class="panel-body">
                        body
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
