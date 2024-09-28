<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satyaev Daniil Igorevich</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Satyaev Daniil Igorevich</h1>
    <div class="row">
        <div class="col text-center">
            <p class="about-text">Обо мне</p>
            <p>Миллиардер, плейбой, филантроп, фембойчик, любитель веб-пентеста, Active Directory enjoyer, CTF/standoff365 enjoyer</p>
        </div>
        <div class="col text-center">
            <img class="image_size" src="https://i.pinimg.com/originals/b6/ed/ef/b6edefad084cbb1cffdf099ac3a82c7e.jpg" alt="kotik">
            <p>Манульчик Satyaev Daniil Igorevich</p>
        </div>
    </div>
    <div class="contact">
        <h2>Контакты:</h2>
        <p>Email: danielsatyaev@yandex.ru</p>
        <p>Телефон: 8-800-55-35-35</p>
        <p>Социальные сети: <a href="https://github.com/NopiumE" target="_blank">GitHub</a></p>
    </div>
    <div class="text-center mt-4">
        <button id="knopka" class="btn" style="background-color: #2196F3; color: white; width: 200px; height: 50px;">Показать картинку</button>
        <img id="kartinka" src="https://i.pinimg.com/originals/b6/ed/ef/b6edefad084cbb1cffdf099ac3a82c7e.jpg" alt="Satyaev Daniil Igorevich" style="display: none; width: 300px; height: auto; margin-top: 20px;">
    </div>
</div>
<div class="footer text-center mt-4">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Vanamo_Logo.svg/1200px-Vanamo_Logo.svg.png" alt="Logo" class="logo">
    <p>&copy; 2024 Satyaev Daniil Igorevich. Все права защищены.</p>
</div>
<script src="js/button.js"></script>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="hello">
                Hello, <?php echo $_COOKIE['User'];?>
</h1>
</div>
<div class="col-12">
    <form method="POST" action="profile.php">
        <input type="text" class="form" type="text" name="title" placeholder="Title">
        <textarea name="text" cols="30" rows="10" placeholder="Enter the text for post"></textarea>
        <button type="submit" class="btn_red" name="submit">Save</button>
</form>
</div>
</div>
</div>
</body>
</html>
<?php
require_once("db.php");

$link = mysqli_connect("127.0.0.1","root","1","first");

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $main_text = $_POST['text'];

    if (!$title || !$main_text) die ("Заполните все поля");

    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";

    if (!mysqli_query($link, $sql)) die ("Не удалось добавить пост");
}
?>
