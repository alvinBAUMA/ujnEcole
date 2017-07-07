<style>
    .list-group-item{
        padding: 5px;
    }
    .list-group-item:hover{
        background-color: #d0d0cf;
        cursor: pointer
    }
    .fa-detail{
        width: 40px;
        text-align: center;
        color: #f62504;
        background-color: #90baf5;
        height: 40px;
        padding-top: 8px;
        border-radius: 5px;
        font-size: 25px
    }
    .badge{
        background-color: #f62504
    }
    .list-group a{
        text-decoration: none;
        color: #4d4e4d
    }
</style>
<div class="container-fluid" style="background-color: #ffffff; padding-top: 50px; padding: 50px 10px 10px 10px">
    <legend class="bleu">Gestion des inscriptions</legend>
    <ul class="list-group taille-15" style="border-color: #fff; padding: 0px">
        <a href="gInscription?ref=historique">
            <li class="list-group-item" style="border-top-color: #fff; border-left-color: #fff; border-right-color: #fff">
                <i class="fa fa-history fa-detail" style="background-color: #e1be05; color: #fff"></i> Historiques des inscriptions

            </li>
        </a>

        <a data-toggle="modal" href="#add-inscription">
            <li class="list-group-item" style="border-top-color: #fff; border-left-color: #fff; border-right-color: #fff">
                <i class="fa fa-plus fa-detail" style="background-color: #019284; color: #fff"></i> Nouvelle Inscription

            </li>
        </a>

        <a href="gInscription?ref=all_eleve">
            <li class="list-group-item" style="border-top-color: #fff; border-left-color: #fff; border-right-color: #fff">
                <i class="fa fa-users fa-detail" style="background-color: #0ba2de; color: #fff"></i> Tous les élèves

            </li>
        </a>
        <a href="gInscription?ref=all_eleve">
            <li class="list-group-item" style="border-left-color: #fff; border-right-color: #fff">
                <i class="fa fa-search fa-detail" style="background-color: #2c9714; color: #fff"></i> Recherche

            </li>
        </a>


    </ul>

    <legend style="color: #0c8bcd">Mon compte</legend>
    <ul class="list-group taille-15" style="border-color: #fff; padding: 0px">
        <li class="list-group-item" style="border-top-color: #fff; border-left-color: #fff; border-right-color: #fff">
            <i class="fa fa-edit fa-detail" style="background-color: #424241; color: #fff"></i> Modifier mes coordonnées

        </li>
        <a href="deconnexion.php">
            <li class="list-group-item" style="border-left-color: #fff; border-right-color: #fff">
                <i class="fa fa-power-off fa-detail" style="background-color: #e6220a; color: #fff"></i> Déconnexion
            </li>
        </a>
    </ul>
</div>