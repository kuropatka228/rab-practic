<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        h2 {
            color: #e74c3c;
        }
        a {
            display: inline-block;
            margin: 10px 0;
            text-decoration: none;
            color: #3498db;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        a:hover {
            background-color: #3498db;
            color: white;
        }
        .welcome {
            font-size: 18px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div style="text-align:center">
    <?php if(!empty($_SESSION["login"])) :?>
    <?php echo "Добрый день, ".$_SESSION['login'];?>
        <br>
    <a href="./logout.php">Выйти</a>
    <br>
    <a href="./admin/header.php">Хедер</a>
    <a href="./admin/phone-email.php">Контакты</a>
    <a href="./admin/partners.php">Партнеры</a>
    <?php else:
        echo '<h2>Вы что хакер?</h2>';
        echo '<a href="/">На главную</a>';
    ?>
    <?php endif ?>
</div>
</body>
</html>