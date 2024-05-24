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
        <h1>Панель регистрации</h1>
    </header>
    <main>
        <h2>Для регистрации введите логин, пароль и повтор пароля</h2>
    </main>
    
    <form action="register.php" method="post">
        <input type="text" placeholder="login" name="login">
        <input type="text" placeholder="password" name="pass">
        <input type="text" placeholder="repeat password" name="reppass">
        <button type="submit">Зарегистрироваться</button>
    </form>
    </body>
</html>        