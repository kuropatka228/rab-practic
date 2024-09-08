<?php session_start(); ?> 
<?php require_once '../functions/connect.php'; ?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../css/admin.css" /> 
    <link rel="stylesheet" href="../css/main.css" /> 
    <title>Админка header</title> 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 90%;
            max-width: 600px;
            text-align: center;
        }
        h1 {
            color: #3498db;
        }
        h2 {
            color: #3498db;
        }
        h3 {
            margin-top: 20px;
        }
        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #2980b9;
        }
        a {
            text-decoration: none;
            color: #3498db;
        }
    </style>
</head> 
<body> 
<div style="text-align:center"> 
    <h1>Редактирование Шапки</h1> 
<?php if(!empty($_SESSION["login"])) :?> 
 
<div class="h1_wrapper"> 
<h2><?php echo "Добрый день! ".$_SESSION['login']; ?></h2> 
<a href="/logout.php"><button class="button">Выйти</button></a> 
</div> 
<h3>Редактирование шапки:</h3> 
 
<?php 
$sql = $pdo->prepare("SELECT * FROM header"); 
$sql->execute(); 
$res = $sql->fetch(PDO::FETCH_OBJ); 
?> 
 
<form action="/admin/header/header.php" method="POST"> 
    <input type="hidden" name="id" value="<?php echo $res->id ?>">
    <input type="text" name="about" value="<?php echo $res->about ?>"> 
    <input type="text" name="services" value="<?php echo $res->services ?>"> 
    <input type="text" name="faq" value="<?php echo $res->faq ?>"> 
    <input type="text" name="contact" value="<?php echo $res->contact ?>"> 
    <input type="text" name="documents" value="<?php echo $res->documents ?>"> 
    <br><br> 
    <input type="submit" value="Сохранить" class="button"> 
</form>



<?php else: ?>
    <h2>Вам сюда нельзя!</h2> 
    <a href="/main.html">На главную</a> 
<?php endif; ?> 
</div> 
</body> 
</html>
