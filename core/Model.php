<?php
/**
 * Description of Model
 *
 * @author Alvin
 */
class Model {
    
    
    /**
     * Cette fonction permet de modifier un champs dans une table donnée
     * 
     * 
     * @param type $id_table -> l'identifiant de la table (la cle primaire)
     * @param type $nom_champs -> no deu chamos a modifier
     * @param type $valeur -> la valeur a donné au champs a modifier
     * @param type $table -> nom de la table a modifier
     * @return boolean returne true si tout est bien
     */
    static function updateTable($id_table, $nom_champs, $valeur, $table){
        global $bd;
        
        $q = $bd->prepare("UPDATE $table SET $nom_champs=:nom_champ WHERE $id_table=:id");
        $q->execute([
            "nom_champ" => echapper($valeur),
            "id" => echapper($id_table)
        ]);
        
        return TRUE;
    }
    
    
    /**
     * Cette methode recupere les infos d'une entré de la table par Id
     * 
     * @param type $id -> l'ientifaint de l'entrée a recuperer
     * @param type $nom_identifiant -> nom de l'identifiant de la table
     * @param type $nom_table -> nom de la table
     * @return type $objet ->  returne iun objet contenant toutes les info de l'entrée recuperer.
     */
    static function selectOneObjetById($id, $nom_identifiant, $nom_table){
        global $bd;
        $req = $bd->prepare("SELECT * FROM $nom_table WHERE $nom_identifiant=:identifiant");
        $req->execute([
            'identifiant' => echapper($id)
        ]);
        
        return $objet = $req->fetch(PDO::FETCH_OBJ);
    }
    
}
