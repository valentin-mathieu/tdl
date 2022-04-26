<?php 

session_start();

if(isset($_SESSION['login'])){
    header('Location: todolist.php');
}

?>

<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
    </main>
</body>
</html>