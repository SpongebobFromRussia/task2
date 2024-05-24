<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" conent="IE=edge">
    <meta name="wiewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>
<body>
    <header>
        <h1>Разработка веб-приложений</h1>
    </header>
    <nav>
        <ul>
            <li>
                <a href="index1.php">Главная</a>
            </li>
            <li>
                <a href="index2.php">Подать объявление</a>
            </li>
            <li>
                <a href="index.php">Выйти</a>
            </li>
        </ul>
    </nav>
    <main>
        <h2>Объявления</h2>
    </main>
    <footer>
        <h6>Вирясов Данил, ПРОГ-С-21</h6>
    </footer>   
    
<?php
    
require_once('dbtext.php');
$name = $_POST['name'];
    
         $sql = "INSERT INTO `text1` (name) VALUES ('$name')";
        if ($conn1 -> query($sql) === TRUE)
     $sql1 = "SELECT * FROM `text1` WHERE 'name' = 'name'";
    $result = $conn1->query($sql1);
    
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()){
            echo "<br>" . $row['name'];
        }
    }

        

        

       
      