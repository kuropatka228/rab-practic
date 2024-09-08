<?php  
$user = "root";  
$password = "";  
$host = "amvera-daq-x-electrobus-run-zab-eco";  
$db = "zab-eco";  
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';  
$pdo = new PDO($dbh, $user, $password);  

if (isset($_POST["save"])) {  

    // Получаем ID и Title 
    $id = isset($_POST['id']) ? $_POST['id'] : null; // ID теперь будет получен из формы
    $title = isset($_POST['title']) ? $_POST['title'] : null;  

    // Проверка на наличие загруженного файла 
    if ($_FILES['im']['error'] === UPLOAD_ERR_NO_FILE) {  
        // Если файл не загружен, продолжаем с существующими данными 
        echo "Файл не выбран, продолжим с существующими данными.<br>";  
        $filename = $_POST['existing_filename']; // Сохраняем имя существующего файла 
    } 
    else { 
        // Проверка других полей (ID и Title) 
        $filename = $_FILES['im']['name']; // Сохраняем имя загруженного файла 
        echo "Файл загружен ID: $id<br>";  
        echo "Title: $title<br>";  

        // Проверка расширения файла
        $list = ['.php', '.zip', '.js', '.html'];   
        foreach ($list as $item) {   
            if (preg_match("/$item$/", $_FILES['im']['name'])) {  
                exit("Расширение файла не подходит");   
            }   
        }   

        // Проверка типа файла только если файл был загружен 
        if ($_FILES['im']['error'] === UPLOAD_ERR_OK) { 
            $type = getimagesize($_FILES['im']['tmp_name']);   
            if ($type === false || !in_array($type['mime'], ['image/png', 'image/jpg', 'image/jpeg'])) {   
                exit("Тип файла не подходит");   
            }  

            // Проверка размера файла  
            if ($_FILES['im']['size'] < 1024 * 1000) {   
                $upload = '../img/' . basename($_FILES['im']['name']);   

                // Перемещение загруженного файла  
                if (move_uploaded_file($_FILES['im']['tmp_name'], $upload)) {  
                    echo "Файл загружен<br>";   
                    $filename = $_FILES['im']['name']; // Сохраняем имя загруженного файла 
                } else {  
                    exit("Ошибка при загрузке файла");
                }   
            } else {  
                exit("Размер файла превышен");   
            } 
        } 
    } 

    // Получаем ID из URL 
    $url = $_SERVER['REQUEST_URI'];     
    $urlParts = explode('/', $url);     
    $str = isset($urlParts[6]) ? $urlParts[6] : null;  

    // Отладочный вывод  
    echo "ID: " . htmlspecialchars($str) . "<br>";  
    echo "Title: " . htmlspecialchars($title) . "<br>";  
    echo "Filename: " . htmlspecialchars($filename) . "<br>";  

    // Проверка наличия необходимых данных  
    if (empty($title) || empty($filename) || empty($id)) { 
        die("Ошибка: Необходимо заполнить все поля."); 
    } 

    // Используем именованные параметры  
    $sql = "UPDATE partners SET title = ?, filename = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $filename, $id]);   

    // Выполнение запроса 
    if ($stmt->rowCount() > 0) {
        echo "Данные успешно обновлены.";
    } else {
        echo "Ошибка: Данные не обновлены.";
    }
}
?>