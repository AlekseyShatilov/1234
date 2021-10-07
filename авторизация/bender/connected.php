<?php
$connect = mysqli_connect("localhost", "root", "", 'avtoriz');
if (!$connect) {
    die('Ошибка подключение к базе данных');
}