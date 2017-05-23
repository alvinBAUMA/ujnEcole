<?php

if (!empty($_COOKIE['token_id']) && !empty($_COOKIE['token_hash'])) {
    global $bd;

    $id = (substr($_COOKIE['token_id'], 8)) - 111;

    $req = $bd->prepare('SELECT * FROM membres '
            . 'WHERE id=:id AND motdepasse=:motdepasse AND active="1"');
    $req->execute([
        'id' => echapper($id),
        'motdepasse' => echapper($_COOKIE['token_hash'])
    ]);
    $utilisateurtrouve = $req->rowCount();
    if ($utilisateurtrouve) {
        $user = $req->fetch(PDO::FETCH_OBJ);
        $_SESSION['id'] = $user->id;
        $_SESSION['prenom'] = $user->prenom;
        $_SESSION['nom'] = $user->nom;
        $_SESSION['email'] = $user->email;
    }
}