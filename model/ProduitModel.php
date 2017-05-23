<?php
/**
 * Description of ProduitModel
 *cette classe est celle qui permet de manipuler les données 
 * de la table produit de la BD
 * @author Alvin
 */
class ProduitModel extends Model{
    
    
    /**
     * Cette methode permet d'ajouter un produit au stock
     * Avec comme parametre les caracteristique du produit
     * @global type $bd-> permet la connexion a la base de données
     * @param type $nom -> nom du produit
     * @param type $model -> le type ou modele du produit
     * @param type $quantite -> quantité du produit
     * @param type $codeBare -> le code barre du produit
     * @param type $couleur -> la couleur du produit
     * @param type $mesure -> la taille ou mesure du produit
     * @param type $description -> description du produit
     * @param type $etat -> etat du produit
     * @param type $catedirieId -> l'identifiant de la categorie du produit
     * @param type $boutiqueId -> l'identifiant de la boutique que le produit appartient.
     * @param type $photo ->L'url de la photo du produit
     */
    static function addProduit($nom, $model, $quantite, $codeBare, $couleur, $mesure, $description, $etat, $catedirieId, $boutiqueId, $photo){
        global $bd;
        
        $req = "INSERT INTO produits (nom, model, quantite, code_bare, couleur, mesure, description, etat, categorie_id, boutique_id, photo)"
                . "VALUES (:nom, :model, :quantite, :code_bare, :couleur, :mesure, :description, :etat, :categorie_id, :boutique_id, :photo)";
        $q = $bd->prepare($req);
        $q->execute([
            "nom" => echapper($nom),
            "modele" => echapper($model),
            "quantite" =>  echapper($quantite),
            "code_bare" => echapper($codeBare),
            "couleur" => echapper($couleur),
            "mesure" => echapper($mesure),
            "description" => echapper($description),
            "etat" => echapper($etat),
            "categorie_id" => echapper($catedirieId),
            "boutique_id" => echapper($boutiqueId),
            "photo" => echapper($photo)
        ]);
        
    }
    
}
