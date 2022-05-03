<?php 

require_once('sqlqueries.php');

$login = htmlspecialchars(trim($_POST['login']));
$password = htmlspecialchars(trim($_POST['password']));
$passwordConfirm = htmlspecialchars(trim($_POST['passwordConf']));

$check = true;

if(empty($login)){
    $check = false;
    $error_login = "Renseignez un login.";
    $login = "";
}

elseif(strlen($login) < 8 || strlen($login)>25) {
    $check = false;
    $error_login = "La longueur de votre login doit être comprise entre 8 et 25 caractères.";
    $login = '';
}

elseif (!preg_match("#^[a-z0-9]+$#" ,$login)) {   
    $check = false;                            // LOGIN : SANS MAJ, SANS SPEC, MIN ET CHIFFRES OK
    $error_login = "Le login doit être renseigné uniquement en lettres miniscules ou chiffres, sans caractères spéciaux." ;
    $login = "";
}

else {
    $row = CheckLogin($login);

    if($row >= 1){
        $check = false;
        $error_login = "Ce login est déjà utilisé.";
        $login = "";
    }

    else {
        $check = true;
    }

}

if(empty($password)){
    $check = false;
    $error_password = "Renseignez un mot de passe.";
    $password = "";
}

elseif(!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$password)) {
    $err_password = "Le mot de passe ne respecte pas les conditions.";
    $check = false;
    $password="";
}

elseif($password != $passwordConfirm){
    $check = false;
    $err_password = "Les mots de passe saisis sont différents.";
}

if($check == true){
    Register($login, $password);
}