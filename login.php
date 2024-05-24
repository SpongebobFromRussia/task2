<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" conent="IE=edge">
    <meta name="wiewport" content="width=device-width, initial-scale=1.0">
    <title>Панель авторизации</title>
</head>
<body>

<form action="index1.php" method="post">
        <button type="submit">Вернуться на главную страницу</button>
    </form>


<?php
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if(empty($login) || empty($pass))
{
    echo "Заполните все поля";
} else {
    $sql = "SELECT * FROM `users` WHERE 'login' = 'login' AND pass = '$pass'";
    $result = $conn->query($sql);
    
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()){
            echo "Добро пожаловать " . $row['login'];
        }
    } else {
        echo "такого пользователя не существует";
    }
}