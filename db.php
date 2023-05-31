<?php
$host = "localhost"; // адрес сервера базы данных
$dbname = "register"; // название базы данных
$username = "root"; // имя пользователя базы данных
$password = ""; // пароль пользователя базы данных

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
  // Установка режима выброса исключений PDO
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Ошибка подключения к базе данных: " . $e->getMessage();
}
?>