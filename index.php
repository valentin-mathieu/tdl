<?php 

session_start();
require('registration-treatment.php');

if(isset($_SESSION['login'])){
    header('Location: todolist.php');
}

?>

<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Accueil</title>
    <script src="index.js"></script>
</head>
<body>
    <header>
        <h1>To-do List</h1>
    </header>

    <main>
        <h3>Accueil</h3>

        <button id="register">Inscrivez-vous</button>

        <button id="connect">Connectez-vous</button>

        <div id="div_register">

            <h4>Inscription</h4>

            <h5>Conditions :</h5>

                <ul>
                    <li>Login : entre 8 et 25 caractères, lettres minuscules et chiffres uniquement.</li>
                    <li>Mot de passe : 8 caractères minimum, avec au moins 1 lettre majuscule et 1 chiffre.</li>
                </ul>

                <form id="registration_form" method="post">
                    <label for="login">Login :</label>
                    <input type="text" name="login" placeholder="Entrez un login">
                    <label for="password">Mot de passe :</label>
                    <input type="password" name="password" placeholder="Entrez un mot de passe">
                    <label for="passwordConf">Confirmation du mot de passe :</label>
                    <input type="password" name="passwordConf" placeholder="Confirmez votre mot de passe">
                    <button type="submit">Inscription</button>
                </form>

        </div>

        <div id="div_connect">

            <h4>Connexion</h4>

                <form action="connexion_treatment.php" method="post">
                    <input type="text" name="login" placeholder="Entrez votre login">
                    <input type="password" name="password" placeholder="Entrez votre mot de passe">
                    <input type="submit" value="Connexion">
                </form>

        </div>
    </main>
</body>
</html>