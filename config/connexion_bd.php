
<?php

// on definie les constante pour mieux identifier les parametre de la classe PDO
//la fonction define permet de creer une constante
define("NomDb", "stockmanager");
define("NomHost", "localhost");
define("NomAdmin", "root");
define("Motdepasse", "root");
try {
    $bd = new PDO("mysql:host=" . NomHost . ";dbname=" . NomDb, NomAdmin, Motdepasse);

    // Cette instruction nous permet de detecter facilement les erreur... en debogage.
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion a la base des données: " . $e->getMessage());
}


// CONNEXION BD TEZZOU
define("NomDbTezzou", "tezzou");
define("NomHostTezzou", "localhost");
define("NomAdminTezzou", "root");
define("MotdepasseTezzou", "root");
try {
    $bd_tezzou = new PDO("mysql:host=" . NomHostTezzou . ";dbname=" . NomDbTezzou, NomAdminTezzou, MotdepasseTezzou);

    // Cette instruction nous permet de detecter facilement les erreur... en debogage.
    $bd_tezzou->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ee) {
    die("Erreur de connexion a la base des données:" . $ee->getMessage());
}


