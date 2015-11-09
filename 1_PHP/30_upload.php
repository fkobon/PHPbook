<?php
header('Content-Type: text/html; charset=utf-8');
//$uploadfile = './upload/'.basename($_FILES['uploadfile']['name']);
$uploadfile = basename($_FILES['uploadfile']['name']);
echo $uploadfile;
// Копируем файл из каталога для временного хранения файлов:
if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
{
echo "<h3>Файл успешно загружен на сервер</h3>";
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit;
}
?>
