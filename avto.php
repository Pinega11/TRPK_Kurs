<!DOCTYPE html>
<html>

<head>
  <title>Вывод изображений и описаний</title>
</head>

<body>
  <h1>Автопарк</h1>

  <?php
  $host = "localhost"; // адрес сервера базы данных
  $dbname = "register"; // название базы данных
  $username = "root"; // имя пользователя базы данных
  $password = ""; // пароль пользователя базы данных
  
  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Установка режима выброса исключений PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Выполнение запроса для извлечения данных
    $query = "SELECT image_path, description, info FROM avtopark";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    // Обработка результатов запроса
    echo '<div class="image-row">';
    $counter = 1;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $imagePath = $row['image_path'];
      $description = $row['description'];
      $info = $row['info'];

      // Вывод изображения и описания
      echo '<div class="image-info">';
      echo '<p>' . $description . '</p>';
      echo '<img src="' . $imagePath . '" alt="Изображение">';
      echo '<a href="#modal-' . $counter . '"><button class="image-button">Подробнее</button></a>';
      echo '</div>';

      // Вывод модального окна
      echo '<div class="modal" id="modal-' . $counter . '">';
      echo '<div class="cmt">';
      echo '<h2>Информация</h2>';
      echo '<br>';
      echo '<form action="log" method="post">';
      echo '' . $info . '';
      echo '</form>';
      echo '</div>';
      echo '<a href="#close" class="modal-close"></a>';
      echo '</div>';

      $counter++;
    }
    echo '</div>';
  } catch (PDOException $e) {
    echo "Ошибка подключения к базе данных: " . $e->getMessage();
  }
  ?>

</body>

<style>
  .modal {
    display: none;
  }

  .modal:target {
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 4;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    animation: bg 0.5s ease;
    background: rgba(14, 11, 11, 0.7);
  }

  /* Модальное окно */
  .modal .cmt {
    font-family: Verdana, sans-serif;
    color: white;
    font-size: 16px;
    padding: 20px;
    width: 100%;
    z-index: 8;
    max-width: 600px;
    max-height: 70%;
    transition: 0.5s;
    border: 6px solid #030303;
    border-radius: 12px;
    background: rgb(32, 32, 30)
  }

  /* Кнопка с крестиком закрывающая окно */
  .modal-close {
    position: relative;
    display: block;
  }

  .modal-close:after {
    content: "";
    width: 20px;
    height: 20px;
    border-radius: 12px;
    position: fixed;
    z-index: 10;
    top: 20px;
    right: 20px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2), 0 16px 20px rgba(0, 0, 0, 0.2);
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23337AB7' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3e%3cline x1='18' y1='6' x2='6' y2='18'%3e%3c/line%3e%3cline x1='6' y1='6' x2='18' y2='18'%3e%3c/line%3e%3c/svg%3e");
    background-color: #FFF;
    background-size: cover;
    animation: move 0.5s ease;
  }

  .modal-close:before {
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    position: fixed;
    content: "";
    cursor: default;
  }

  h1 {
    text-align: center;
  }

  .image-button {
    width: auto;
    font-size: 100%;
    margin: 5px;
    font-size: 110%;
    color: black;
    text-shadow: white 0 1px 2px;
    text-decoration: none;
    text-align: center;
    line-height: 1.1;
    white-space: nowrap;
    padding: .5em .3em;
    border: 1px solid black;
    border-radius: 10px;
    outline: none;
  }

  .image-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    align-items: flex-start;
  }

  .image-row img {
    width: 400px;
    height: 200px;
    margin-bottom: 10px;
    border: 5px solid black;
  }

  .image-row .image-info {
    text-align: center;
    margin-bottom: 10px;
    flex-basis: 25%;
    /* Определяет ширину каждого элемента в 25% от родительского контейнера */
    box-sizing: border-box;
    /* Учитывает отступы и границы внутри ширины элемента */
    padding: 10px;
  }
</style>

</html>