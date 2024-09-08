<?php
$user = "root";
$password = "";
$host = "localhost";
$db = "zab-eco";
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
$pdo = new PDO($dbh, $user, $password);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $about = $_POST["about"]; 
    $services = $_POST["services"]; 
    $faq = $_POST["faq"]; 
    $contact = $_POST["contact"]; 
    $documents = $_POST["documents"]; 
    $id = $_POST["id"]; 

    $row = "UPDATE header SET about=:about, services=:services, faq=:faq, contact=:contact, documents=:documents WHERE id=:id"; 
    $query = $pdo->prepare($row); 

    try {
        $query->execute([ 
            "about" => $about, 
            "services" => $services, 
            "faq" => $faq, 
            "contact" => $contact,
            "documents" => $documents,
            "id" => $id
        ]); 
        echo "<p>Данные успешно обновлены!</p>";
    } catch (PDOException $e) {
        echo 'Ошибка: ' . $e->getMessage();
    }
}
echo '<meta HTTP-EQUIV="Refresh" Contect="0; URL=/admin/header/header.php">';

?>
