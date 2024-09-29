<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satyaev Daniil Igorevich</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Login</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form method="POST" action="login.php">
                <div class="row form__reg">
                    <input class="form" type="text" name="login" placeholder="Login" required>
                </div>
                <div class="row form__reg">
                    <input class="form" type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn_red btn__reg" name="submit">Continue</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<?php
require_once('db.php');

if (isset($_COOKIE['User'])) {
    header("Location: profile.php");
}

$link = mysqli_connect('10.10.0.2','root','1','first');

if (isset($_POST['submit'])){
    $username = $_POST['login'];
    $pass = $_POST['password'];

    if (!$username || !$pass) die("Please enter all fields");

    $sql = "SELECT * FROM users WHERE username='$username' AND pass='$pass'";

    $result = mysqli_query($link,$sql);

    if (mysqli_num_rows($result) == 1){
        setcookie("User",$username, time()+7200);
        header("Location: profile.php");
    }else{
        echo "Invalid username or password";
    }
}
?>
