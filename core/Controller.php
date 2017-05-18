<?php

/**
 * Description of ControlleurGeneral
 *
 * @author ALVIN
 */
class Controller {

    public $request;
    private $vueIsLoaded = false;
    public $vars = array(); //variables conteant les variables a renvoyer au vue avec la methodes setvars

    function __construct($request) {
        $this->request = $request;
    }

    /* fonction qui charge une vue selon l'action demande par le controlluer
     * @params $view -> le nom de la vue a charge, qui correspond a l'action (Ex delete, update, insert(CRUD));
     * @param $controller -> le nom du controleur qui doit contenir cette vue
     */

    public function loadView($view, $controller) {
        extract($this->vars);
        
        if ($this->vueIsLoaded) {
            return FALSE;
        }  

        // on teste si vues commence par un slash pour rendres les pages correspondances
        if (strpos($view, "/")) {
            $view = "../vues/" . $view . ".php";
        } else {
            $view = "../vues/" . strtolower($controller) . "/" . $view . ".php";
        }

        require $view;
        $this->vueIsLoaded = TRUE;
    }

    /* Permet de charger un model
     * @pamar $nomModel -> est l'arguemnt quei prend le nom du model a charge
     */

    function loadModel($nomModel) {
        $file = "modeles/" . $nomModel . ".php";
        require_once $file;
        if (!isset($this->$nomModel)) {
            $this->$nomModel = new $nomModel();
        }
    }

    /** Methodes qui renvoie les variables dans les vues 
     * 
     * @param type $key -> prend la cle de la variable
     * @param type $value ->prend la valeur de la variable
     */
    public function setVars($key, $value = null) {
        if (is_array($key)) {
            $this->vars += $key;
        } else {
            $this->vars[$key] = $value;
        }
    }
    /** permet de gerer les erruer 404
     * 
     * @param type $message
     */
    function e404($message){
        header("HTTP/0.1 404 Not found");
        $this->setVars("message",$message);
        $this->loadView("errors/404");
        die();
    }
    
    /**Fonction qui redirige vers une page cible
     * @param $page -> page ciblee
     */
    static function rediriger($page) {
        header('location:' . $page);
        exit();
    }
    

}
