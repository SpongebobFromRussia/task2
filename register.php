<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" conent="IE=edge">
    <meta name="wiewport" content="width=device-width, initial-scale=1.0">
    <title>Панель авторизации</title>
</head>
<body>

<form action="index.php" method="post">
        <button type="submit">Вернуться на главную страницу</button>
    </form>

<?php
require_once('db.php');    
$login = $_POST['login'];
$pass = $_POST['pass'];
$reppass = $_POST['reppass'];




if(empty($login) || empty($pass) || empty($reppass)){
    echo "заполните все поля";
} else
{
    if($pass != $reppass){
        echo "пароли не совпадают";
    } else {
        $sql = "INSERT INTO `users` (login,pass) VALUES ('$login', '$pass')";
        if ($conn -> query($sql) === TRUE){
            echo "Успешная регистрация";
    }
      else{
          echo "Ошибка" . $conn->error;
      }  
}
}
    