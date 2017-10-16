<?php

$sql = "SELECT * FROM user WHERE login=? AND mdp=PASSWORD(?)";

// Etape 1  : preparation

// Etape 2 : execution : 2 paramètres dans la requêtes !!
if(null !== ($_POST['login'] && $_POST['password'])) {           
        $login = $_POST['login'];
        $passw = $_POST['password'];
    }

// Etape 3 : ici le login est unique, donc on sait que l'on peut avoir zero ou une  seule ligne.



// un seul fetch

$sql = "SELECT * FROM user";
$query = $pdo->prepare($sql);
$query->execute(); 

while($line = $query->fetch()) {
    if ($line["login"] == $login && $line["mdp"] == $passw) {
        $_SESSION['id'] = "";
        $_SESSION['login'] = $login;
        header('Location: index.php');
        exit();
    }
    
    //$line = ??;

    // Si $line est faux le couple login mdp est mauvais, on retourne au formulaire
    // sinon on crée les variables de session $_SESSION['id'] et $_SESSION['login'] et on va à la page d'accueil
    
    else {
        echo "Mot de passe ou Identifiant incorrects";
    }
}



