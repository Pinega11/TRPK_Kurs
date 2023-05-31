<!DOCTYPE html>
<html>
<head>
  <title>Оплата билета</title>
  <style>
    form {
      width: 300px;
      margin: 0 auto;
    }

    label, input {
      display: block;
      margin-bottom: 10px;
    }

    button {
      padding: 10px;
    }
    .oplat {
        border: solid black 1px;
        padding: 5px;
        width: 300px;
        margin: 58px;

        text-decoration: none;
    }
  </style>
</head>
<body>
  <form>
    <h2>Форма оплаты</h2>
    <label for="fullname">ФИО:</label>
    <input type="text" id="fullname" name="fullname" required>
    <label for="cardnumber">Номер карты:</label>
    <input type="text" id="cardnumber" name="cardnumber" required>
    <a href="/orders" class="oplat" id="oplat-link">Оплатить</a>
  </form>

  <script>
    document.getElementById('oplat-link').addEventListener('click', function(event) {
      event.preventDefault(); // Предотвращает переход по ссылке

      // Генерация случайного 8-значного числа
      var randomNumber = Math.floor(10000000 + Math.random() * 90000000);

      // Отображение алерта с сгенерированным числом
      alert('Номер Вашего электронного билета: ' + randomNumber);

      // Переход по ссылке
      window.location.href = event.target.href;
    });
  </script>
</body>
</html>
