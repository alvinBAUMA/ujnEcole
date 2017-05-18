<?php

/**
 * Description of Request
 *
 * @author ALVIN
 * @Objet Request -> permet de trouver l'url taper par l'utilisateur
 */
class Request {

    public $url; //URL appelé par l'utilisateur

    function __construct() {
        $this->url = $_SERVER['REQUEST_URI']; //on initialise l'url tape par l'utilisateur
    }

}
