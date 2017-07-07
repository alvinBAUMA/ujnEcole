<?php

if(isset($_SESSION['id'])){
    
    header('location: accueil.php');
   
    exit();
}

