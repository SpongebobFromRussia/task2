<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" conent="IE=edge">
    <meta name="wiewport" content="width=device-width, initial-scale=1.0">
    <title>Панель авторизации</title>
</head>
<body>
<header>
        <h4>Для входа введите логин и пароль</h4>
    </header>


<form action="login.php" method="post">
        <input type="text" placeholder="login" name="login">
        <input type="text" placeholder="password" name="pass">
        <button type="submit">Войти</button>
    </form>