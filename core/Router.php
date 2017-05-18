<?php

/**
 * Description of Router
 *
 * @author ALVIN
 * @classe Router -> permet de parse les url venant de l'obje Request
 * @commentaire -> cette classe est global pour toute l'application et ne sera pas donc instancie
 * on utilisera donc cette facon d'appler ces methodes Router::NomDeLamethode(Param).. les variables sont donc en static
 */
class Router {
    /*
     * permet de parser les url
     * @param $url -> url a parser
     * @return un tableau contenant les paramtre des l'url
     */
    static function parse($url, $request) {
        $url = trim($url, '/');
        $params = explode('/', $url);
        $request->controller = $params[1];
        $request->action = isset($params[2]) ? $params[2] : "index";
        $request->params = array_slice($params, 3);
        
        return TRUE;
    }

}
