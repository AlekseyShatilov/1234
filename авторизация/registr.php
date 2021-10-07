<?php
session_start();
if($_SESSION['user']) {
    header('Location: profil.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<form action="bender/sign_up.php" method="post" enctype="multipart/form-data">
    <label>Ф.И.О</label>
    <input type="text" name="Full_name" placeholder="Введите свое полное имя">
    <label>Введите логин</label>
    <input type="text" name="Login" placeholder="Введите логин">
    <label>Изображение профиля</label>
    <input type="File" name="Avatar" placeholder="Загрузите изображение">
    <label>Введите свою почту</label>
    <input type="email" name="Email" placeholder="Введите Email">
    <label>Введите пароль</label>
    <input type="Password" name="Password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="Password" name="verf_pass" placeholder="Подтвердите пароль">
    <button>Отправить</button>
    <p>
        У вас уже есть аккаунт? - <a href="index.php">Войти</a>
    </p>
        <?php

        if($_SESSION['message'])
        {
            echo '<p class="msg">'.$_SESSION['message'].'</p> ';
        }
        unset($_SESSION['message']);
        ?>

</form>

</body>
</html>
