<?php 

function CheckLogin($login){

    require_once('db.php');

    $query = "SELECT * FROM users WHERE login = '".$login."'";
    $checklogin = $pdo->prepare($query);
    $checklogin->execute();

    $row = $checklogin->rowCount();
    return $row;

}   

function Register($login, $password){

    include('db.php');

    $secure_pass = md5($password);

    $data = [
        'login' => $login,
        'password' => $secure_pass,
    ];

    $query = "INSERT into users (login, password) VALUES (:login, :password)";
    $register = $pdo->prepare($query);
    $register->execute($data);

}