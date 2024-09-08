<?php
// Проверяем, передан ли параметр 'file'
if (isset($_GET['file'])) {
    $file = basename($_GET['file']); // Получаем имя файла
    $filepath = 'doc/' . $file; // Указываем путь к файлу

    // Проверяем, существует ли файл
    if (file_exists($filepath)) {
        // Устанавливаем заголовки для скачивания
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));

        // Читаем файл и отправляем его пользователю
        readfile($filepath);
        exit;
    } else {
        echo "Файл не найден.";
    }
} else {
    echo "Не указан файл для скачивания.";
}
?>