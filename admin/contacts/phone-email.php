<?php
$user = "root";
$password = "pass";
$host = "amvera-daq-x-electrobus-run-zab-eco";
$db = "zab-eco";
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
$pdo = new PDO($dbh, $user, $password);
$port="3306";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST["phone"]; 
    $email = $_POST["email"]; 
    $id = $_POST["id"]; 

    $row = "UPDATE contacts SET phone=:phone, email=:email WHERE id=:id"; 
    $query = $pdo->prepare($row); 

    try {
        $query->execute([ 
            "phone" => $phone, 
            "email" => $email, 
            "id" => $id
        ]); 
        echo "<p>Данные успешно обновлены!</p>";
    } catch (PDOException $e) {
        echo 'Ошибка: ' . $e->getMessage();
    }
}
echo '<meta HTTP-EQUIV="Refresh" Contect="0; URL=/admin/phone-email/contacts/phone-email.php">';

?>
