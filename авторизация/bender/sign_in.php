<?php
session_start();
require_once 'connected.php';
$Login = $_POST['Login'];
$Password = md5($_POST['Password']);
$check_user = mysqli_query($connect, "SELECT * FROM `users` where `Login`='$Login'and `Password`='$Password'");
if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] =[
        "id" =>$user["id"],
        "Full_name"=>$user["Full_name"],
        "Avatar"=>$user["Avatar"],
        "Email"=>$user["Email"]
    ];
    header('location: ../profil.php');
} else {
    $_SESSION['message'] = 'неверные данные';
    header('location: ../index.php');
}