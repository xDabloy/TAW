<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user'] == 'admin') {
    header("location: panel.php");
    exit();
} else {
    echo "Błędne hasło i login";
}


?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="login" id="login"></input>
        <label for="login">Login</label>
        <input type="password" name="password" id="password"></input>
        <label for="password">Password</label>
        <button type="submit">Zaloguj</button>
    </form>


    <?php
    $login = $_POST['login'];
    $password = $_POST['password'];

    if (isset($login) || isset($password)) {
        if ($login == "admin" && $password == "tajne123") {
            echo "Zalogowano pomyślnie";
            $_SESSION["user"] = $login;
            header("location: panel.php");
        }
    } 
    // else if ($login == "" || $password == "") {
    //     echo "Uzupełnij pola";
    // }




    ?>
</body>

</html>