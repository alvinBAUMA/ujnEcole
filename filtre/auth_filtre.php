<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(!isset($_SESSION['id'])){
    
    //msg_flash('vous devez vous connecter pour acceder à cette page','info');
    header('location: bienvenue');
    msg_flash("Vous devez vous connecter pour accéder à cette page");
    
    exit();
}

