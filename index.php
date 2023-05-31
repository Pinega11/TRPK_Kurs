<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/modals.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/"><i class="fas fa-house"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Маршруты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/avto">Автопарк</a>
                    </li>
                </ul>
            </div>
            <?php
            session_start();
            if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
                ?>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn"> <i class="fa-solid fa-angles-down"></i> <?php echo $_SESSION['login']; ?> </button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="/orders">Мои заказы</a>
                        <a href="/logout">Выйти</a>
                    </div>
                </div>

            <?php } else { ?>
                <div class="headering__buttons">
                    <a href="#css-modal-target"><button class="header__button1">Вoйти</button></a>
                </div>
            <?php } ?>
        </div>
        </div>
    </nav>

    <script>
// Открыть или закрыть раскрывающийся список при наведении
function myFunction() {
  var dropdown = document.getElementById("myDropdown");
  dropdown.classList.toggle("show");
}

// Закрыть раскрывающийся список при клике за его пределами
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

    <div class="main-conteiner">

        <?php
        $url = $_SERVER["REQUEST_URI"];

        if ($url == "/") {
            require "../views/main.php";
        } elseif ($url == "/avto") {
            require "../views/avto.php";
        } elseif ($url == "/orders") {
            require "../views/orders.php";
        } elseif ($url == "/log") {
            require "../sign/log.php";
        } elseif ($url == "/reg") {
            require "../sign/reg.php";
        } elseif ($url == "/logout") {
            require "../sign/logout.php";
        } elseif ($url == "/oplata") {
            require "../views/oplata.php";
        }

        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

<!-- Модальное окно -->
<div class="css-modal-target" id="css-modal-target">
    <div class="cmt">
        <h2>Вход</h2>
        <br>
        <form action="log" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Логин" required><br>
            <input type="password" class="form-control" name="password" id="pass" placeholder="Пароль" required><br>
            <button class="btn btn2" name="do_login" type="submit">Войти</button>
        </form>
        <br>
        <p>Нет аккаунта? <a href="#css-modal-target2">Зарегистрируйтесь</a>.</p>
        <p>Вернуться на <a href="/">главную</a>.</p>
    </div>
    <a href="#close" class="css-modal-close"></a>
</div>

<div class="css-modal-target" id="css-modal-target2">
    <div class="cmt">
        <h2>Регистрация</h2>
        <br>
        <form action="reg" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Логин"><br>
            <input type="text" class="form-control" name="fio" id="fio" placeholder="ФИО"><br>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email"><br>
            <input type="password" class="form-control" name="password" id="password" placeholder="Пароль"><br>
            <button class="btn btn2" name="do_signup" type="submit">Зарегистрироваться</button>
        </form>
        <br>
        <p>Есть аккаунт? <a href="#css-modal-target">Войдите</a>.</p>
        <p>Вернуться на <a href="/">главную</a>.</p>
    </div>
    <a href="#close" class="css-modal-close"></a>
</div>

<style>


.dropbtn {
background-color: #212529;
  color: white;
  padding: 8px;
  font-size: 20px;
  border: none;
  cursor: pointer; 
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}



    .container {
        padding: 5px 50px 5px 40px;
        text-align: center;
    }

    .navbar {
        padding: 5px;
        margin-bottom: 15px;
    }

    .nav-item {
        color: white;
        font-size: 20px;
        list-style: none;
        margin: 10px 20px 10px 20px;

    }

    .navbar-nav {
        font-size: 20px;
    }

    .navbar-brand {
        font-size: 30px;
    }

    @media only screen and (max-width : 480px) {
        nav {
            border-bottom: 0;
        }

        nav ul {
            display: none;
            height: auto;
        }

        nav a#pull {
            display: block;
            background-color: #283744;
            width: 100%;
            position: relative;
        }

        nav a#pull:after {
            content: "";
            background: url('nav-icon.png') no-repeat;
            width: 30px;
            height: 30px;
            display: inline-block;
            position: absolute;
            right: 15px;
            top: 10px;
        }
    }

    a {
        text-decoration: none;
        /* убирать подчёркивание у ссылок */
        color: #ff7675;
    }

    .header__button1 {
        width: 5em;
        font-size: 100%;
        margin: 10px;
        font-size: 110%;
        color: black;
        text-shadow: #2e7ebd 0 1px 2px;
        text-decoration: none;
        text-align: center;
        line-height: 1.1;
        white-space: nowrap;
        padding: .5em .3em;
        border: 1px solid #9203c6;
        border-radius: 10px;
        outline: none;
        background: #6a01b9 linear-gradient(#8103ae, #9c03d3 50%, #b902fc);
        box-shadow: inset rgba(255, 255, 255, .5) 1px 1px;
        -webkit-animation: pulsate 2.2s linear infinite;
        animation: pulsate 2.2s linear infinite;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
    }

    .header__button1:hover {
        color: rgb(9, 245, 83);
        background-image: linear-gradient(#bb00ff, #9203c6 50%, #7c03a8);
    }

    @-webkit-keyframes pulsate {
        50% {
            color: rgb(245, 9, 13);
            background-image: linear-gradient(#bb00ff, #9203c6 50%, #7c03a8);
        }
    }

    @keyframes pulsate {
        50% {
            color: #fff;
            text-shadow: 0 -1px rgba(0, 0, 0, .3), 0 0 5px #ffd, 0 0 8px #fff;
        }
    }

    .btn {
        position: relative;
        color: white;
        font-size: 14px;
        font-family: "montserrat";
        text-decoration: none;
        margin: 10px;
        border: 2px solid #ff7675;
        padding: 10px 60px;
        text-transform: uppercase;
        overflow: hidden;
        transition: 1s all ease;
    }

    .btn::before {
        background: #ff7675;
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: -1;
        transition: all 0.6s ease;
    }

    .btn2::before {
        width: 100%;
        height: 0%;
    }

    .btn2:hover::before {
        height: 100%;
    }

    /* Контейнер, который затемняет страницу */
    .css-modal-target {
        display: none;
    }

    .css-modal-target:target {
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
    .css-modal-target .cmt {
        font-family: Verdana, sans-serif;
        font-size: 16px;
        padding: 20px;
        width: 100%;
        z-index: 8;
        max-width: 600px;
        max-height: 70%;
        transition: 0.5s;
        border: 6px solid #030303;
        border-radius: 12px;
        background: rgb(32, 32, 32);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2), 0 16px 20px rgba(0, 0, 0, 0.2);
        text-align: center;
        overflow: auto;
        animation: scale 0.5s ease;
        color: white;

    }

    /* Кнопка с крестиком закрывающая окно */
    .css-modal-close {
        position: relative;
        display: block;
    }

    .css-modal-close:after {
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

    .css-modal-close:before {
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        position: fixed;
        content: "";
        cursor: default;
    }

    /* Анимации */
    @keyframes scale {
        0% {
            transform: scale(0);
        }

        100% {
            transform: scale(1);
        }
    }

    @keyframes move {
        0% {
            right: -80px;
        }

        100% {
            right: 20px;
        }
    }

    @keyframes bg {
        0% {
            background: rgba(51, 122, 183, 0);
        }

        100% {
            background: rgba(12, 3, 3, 0);
        }
    }
</style>

</html>