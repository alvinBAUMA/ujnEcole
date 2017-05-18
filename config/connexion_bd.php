
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
    die("Erreur: " . $e->getMessage());
}





