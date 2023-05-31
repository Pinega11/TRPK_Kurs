<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Купленные билеты</title>
    <style>
        h3 {
            text-align: center;
            margin-bottom: 10px;
        }
        table {
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h3>Купленные билеты</h3>

    <?php
    $host = "localhost"; // адрес сервера базы данных
    $dbname = "register"; // название базы данных
    $username = "root"; // имя пользователя базы данных
    $password = ""; // пароль пользователя базы данных

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        // Установка режима выброса исключений PDO
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Запрос для выборки данных из базы данных
        $query = "SELECT user, number, time, route, price, mesto FROM orders";
        $statement = $pdo->query($query);

        // Получение результатов запроса
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        if (count($result) > 0) {
            echo '<table>';
            echo '<tr><th>Пользователь</th><th>Номер билета</th><th>Маршрут</th><th>Время</th><th>Место</th><th>Стоимость</th></tr>';
            foreach ($result as $row) {
                echo '<tr>';
                echo '<td>' . $row['user'] . '</td>';
                echo '<td>' . $row['number'] . '</td>';
                echo '<td>' . $row['route'] . '</td>';
                echo '<td>' . $row['time'] . '</td>';
                echo '<td>' . $row['mesto'] . '</td>';
                echo '<td>' . $row['price'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo 'Нет данных для отображения.';
        }

    } catch(PDOException $e) {
        echo "Ошибка подключения к базе данных: " . $e->getMessage();
    }
    ?>
</body>
</html>
