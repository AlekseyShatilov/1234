<?php
session_start();
require_once 'connected.php';
$Full_name = $_POST['Full_name'];
$Login = $_POST['Login'];
$Email = $_POST['Email'];
$Password = md5($_POST['Password']);
$verf_pass = md5($_POST['verf_pass']);
if ($Password === $verf_pass) {
    $path = 'uploads/' . time() . $_FILES['Avatar']['name'];
    if (!move_uploaded_file($_FILES['Avatar']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = 'Ошибка при загрузке изображения';
        header('location: ../registr.php');
    }
        mysqli_query($connect, "INSERT INTO `users` (`id`, `Full_name`, `Login`, `Email`, `Password`, `Avatar`) VALUES (NULL, '$Full_name', '$Login', '$Email', '$Password', '$path')");
    $_SESSION['message'] = "Регистрация прошла успешно";
    header('location: ../index.php');
} else {
    $_SESSION['message'] = "пароли не совпадают";
    header('location: ../registr.php');
}
