<?php
/**
 * Description of UserModel
 * cette classe est celle qui permet de manipuler les données 
 * de la table user de la BD
 * @author Alvin
 */
class UserModel extends Model{
    
    static function selectUserByLogin($login, $password){
        global $bd_tezzou;
        $req = $bd_tezzou->prepare('SELECT * FROM membres '
                . 'WHERE (telephone=:identifiant OR email=:identifiant) '
                . 'AND motdepasse=:motdepasse AND active="1"');
        $req->execute([
            'identifiant' => echapper($login),
            'motdepasse' => echapper(sha1($password))
        ]);
        
        return $user = $req->fetch(PDO::FETCH_OBJ);;
    }
    
}
