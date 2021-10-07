<?php
session_start();
if(!$_SESSION['user']){
header('Location: index.php');}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <form>
        <img src="<?php echo($_SESSION['user']['Avatar']);?>">
        <p><?php echo($_SESSION['user']['Full_name'])?></p>
        <a href="" ><?php echo($_SESSION['user']['Email'])?></a>
        <a href="bender/logout.php"  class="logout">Выход</a>
    </form>
</body>
</html>
