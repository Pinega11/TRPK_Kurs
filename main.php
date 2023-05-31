<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <h1>Маршруты</h1>
    <div class="container1">
        <div class="box">
            <div class="header" onclick="Sibirsk()">
                <h4>Иркутск - Усолье Сибирское</h4>
            </div>
            <div class="content">
                <p>Стоимость проезда:<br>
                    Автобус - 300 рублей <br>
                    Маршрутное такси - 250 рублей</p>
                Автобус - <a href="#times-bus"><button class="">Забронировать</button></a> <br> <br>
                Маршрутное такси - <a href="#times-marik"><button class="">Забронировать</button></a>
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="box">
            <div class="header" onclick="Sluda()">
                <h4>Иркутск - Слюдянка</h4>
            </div>
            <div class="content1">
                <p>Стоимость проезда:<br>
                    Автобус - 350 рублей <br>
                    Маршрутное такси - 300 рублей</p>
                Автобус - <a href="#times-bus"><button class="">Забронировать</button></a> <br> <br>
                Маршрутное такси - <a href="#times-marik"><button class="">Забронировать</button></a>
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="box">
            <div class="header" onclick="Zima()">
                <h4>Иркутск - Зима</h4>
            </div>
            <div class="content2">
                <p>Стоимость проезда:<br>
                    Автобус - 600 рублей <br> <br>
                    Автобус - <a href="#times-bus"><button class="">Забронировать</button></a>
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="box">
            <div class="header" onclick="Brat()">
                <h4>Иркутск - Братск</h4>
            </div>
            <div class="content3">
                <p>Стоимость проезда:<br>
                    Автобус - 1200 рублей <br> <br>
                    Автобус - <a href="#times-bus"><button class="">Забронировать</button></a>
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="box">
            <div class="header" onclick="Kras()">
                <h4>Иркутск - Красноярск</h4>
            </div>
            <div class="content4">
                <p>Стоимость проезда:<br>
                    Автобус - 3000 рублей <br> <br>
                    Автобус - <a href="#times-bus"><button class="">Забронировать</button></a>
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="box">
            <div class="header" onclick="Ylan()">
                <h4>Иркутск - Улан-Удэ</h4>
            </div>
            <div class="content5">
                <p>Стоимость проезда:<br>
                    Автобус - 800 рублей <br>
                    Маршрутное такси - 750 рублей</p>
                Автобус - <a href="#times-bus"><button class="">Забронировать</button></a> <br> <br>
                Маршрутное такси - <a href="#times-marik"><button class="">Забронировать</button></a>
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="box">
            <div class="header" onclick="Nsk()">
                <h4>Иркутск - Новосибирск</h4>
            </div>
            <div class="content6">
                <p>Стоимость проезда:<br>
                    Автобус - 6000 рублей <br> <br>
                    Автобус - <a href="#times-bus"><button class="">Забронировать</button></a>
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="box">
            <div class="header" onclick="MPC()">
                <h4>Иркутск - МРС</h4>
            </div>
            <div class="content7">
                <p>Стоимость проезда:<br>
                    Автобус - 900 рублей <br>
                    Маршрутное такси - 850 рублей</p>
                Автобус - <a href="#times-bus"><button class="">Забронировать</button></a> <br> <br>
                Маршрутное такси - <a href="#times-marik"><button class="">Забронировать</button></a>
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="box">
            <div class="header" onclick="Listv()">
                <h4>Иркутск - Листвянка</h4>
            </div>
            <div class="content8">
                <p>Стоимость проезда:<br>
                    Маршрутное такси - 400 рублей</p>
                Маршрутное такси - <a href="#bron-listv-marik"><button class="">Забронировать</button></a>
            </div>
        </div>
    </div>

    <script src="../js/main.js"></script>
</body>


<div class="times-bus" id="times-bus">
    <div class="mt">
        <h2>Время</h2>
        <br>
        <form action="times-bus" method="post">
            <div class="button-container">
                <a href="#bron-sibirsk" class="time-btn">9:30</a>
                <a href="#bron-sibirsk"class="time-btn">11:30</a>
                <a href="#bron-sibirsk"class="time-btn">13:30</a>
                <a href="#bron-sibirsk"class="time-btn">15:30</a>
                <a href="#bron-sibirsk"class="time-btn">17:30</a>
                <a href="#bron-sibirsk"class="time-btn">19:30</a>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="times-bus-close"></a>
</div>

<div class="times-marik" id="times-marik">
    <div class="mt">
        <h2>Время</h2>
        <br>
        <form action="times-marik" method="post">
            <div class="button-container">
                <a href="#bron-sibirsk-marik" class="time-btn">8:00</a>
                <a href="#bron-sibirsk-marik"class="time-btn">10:00</a>
                <a href="#bron-sibirsk-marik"class="time-btn">12:00</a>
                <a href="#bron-sibirsk-marik"class="time-btn">14:00</a>
                <a href="#bron-sibirsk-marik"class="time-btn">16:00</a>
                <a href="#bron-sibirsk-marik"class="time-btn">18:00</a>
                <a href="#bron-sibirsk-marik"class="time-btn">20:00</a>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="times-marik-close"></a>
</div>

<div class="bron-sibirsk" id="bron-sibirsk">
    <div class="mt">
        <h2>Бронь</h2>
        <br>
        <form action="bron-sibirsk" method="post">
            <div class="seat-panel">
                <div class="screen">Перед</div>
                <div class="seats-container">
                    <div class="row">
                        <div class="seat">1</div>
                        <div class="seat">2</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">3</div>
                        <div class="seat">4</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">5</div>
                        <div class="seat">6</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">7</div>
                        <div class="seat">8</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">9</div>
                        <div class="seat">10</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">11</div>
                        <div class="seat">12</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">13</div>
                        <div class="seat">14</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">15</div>
                        <div class="seat">16</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">17</div>
                        <div class="seat">18</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">19</div>
                        <div class="seat">20</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">21</div>
                        <div class="seat">22</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">23</div>
                        <div class="seat">24</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">25</div>
                        <div class="seat">26</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">27</div>
                        <div class="seat">28</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">29</div>
                        <div class="seat">30</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">31</div>
                        <div class="seat">32</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">33</div>
                        <div class="seat">34</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">35</div>
                        <div class="seat">36</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">37</div>
                        <div class="seat">38</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">39</div>
                        <div class="seat">40</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">41</div>
                        <div class="seat">42</div>
                        <div class="seat">43</div>
                        <div class="seat">44</div>
                        <div class="seat">45</div>
                        <div class="seat">46</div>
                    </div>
                </div>
                <div class="row">
                    <a href="/oplata" class="btn-book">Оплатить</a>
                </div>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="bron-sibirsk-close"></a>
</div>


<div class="bron-sibirsk-marik" id="bron-sibirsk-marik">
    <div class="mt">
        <h2>Бронь</h2>
        <br>
        <form action="bron-sibirsk-marik" method="post">
            <div class="seat-panel">
                <div class="screen">Перед</div>
                <div class="seats-container">
                    <div class="row">
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">1</div>
                        <div class="seat">2</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">3</div>
                        <div class="seat">4</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">5</div>
                        <div class="seat">6</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">7</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">8</div>
                        <div class="seat">9</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">10</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">11</div>
                        <div class="seat">12</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">13</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">14</div>
                        <div class="seat">15</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">16</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">17</div>
                        <div class="seat">18</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">19</div>
                        <div class="seat">20</div>
                    </div>
                </div>
                <div class="row">
                <a href="/oplata" class="btn-book">Оплатить</a>
                </div>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="bron-sibirsk-marik-close"></a>
</div>



<div class="times-bus" id="times-bus">
    <div class="mt">
        <h2>Время</h2>
        <br>
        <form action="times-bus" method="post">
            <div class="button-container">
                <a href="#bron-sluda" class="time-btn">9:30</a>
                <a href="#bron-sluda"class="time-btn">11:30</a>
                <a href="#bron-sluda"class="time-btn">13:30</a>
                <a href="#bron-sluda"class="time-btn">15:30</a>
                <a href="#bron-sluda"class="time-btn">17:30</a>
                <a href="#bron-sluda"class="time-btn">19:30</a>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="times-bus-close"></a>
</div>

<div class="times-marik" id="times-marik">
    <div class="mt">
        <h2>Время</h2>
        <br>
        <form action="times-marik" method="post">
            <div class="button-container">
                <a href="#bron-sluda-marik" class="time-btn">8:00</a>
                <a href="#bron-sluda-marik"class="time-btn">10:00</a>
                <a href="#bron-sluda-marik"class="time-btn">12:00</a>
                <a href="#bron-sluda-marik"class="time-btn">14:00</a>
                <a href="#bron-sluda-marik"class="time-btn">16:00</a>
                <a href="#bron-sluda-marik"class="time-btn">18:00</a>
                <a href="#bron-sluda-marik"class="time-btn">20:00</a>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="times-marik-close"></a>
</div>

<div class="bron-sluda" id="bron-sluda">
    <div class="mt">
        <h2>Бронь</h2>
        <br>
        <form action="bron-sluda" method="post">
            <div class="seat-panel">
                <div class="screen">Перед</div>
                <div class="seats-container">
                    <div class="row">
                        <div class="seat">1</div>
                        <div class="seat">2</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">3</div>
                        <div class="seat">4</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">5</div>
                        <div class="seat">6</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">7</div>
                        <div class="seat">8</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">9</div>
                        <div class="seat">10</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">11</div>
                        <div class="seat">12</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">13</div>
                        <div class="seat">14</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">15</div>
                        <div class="seat">16</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">17</div>
                        <div class="seat">18</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">19</div>
                        <div class="seat">20</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">21</div>
                        <div class="seat">22</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">23</div>
                        <div class="seat">24</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">25</div>
                        <div class="seat">26</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">27</div>
                        <div class="seat">28</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">29</div>
                        <div class="seat">30</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">31</div>
                        <div class="seat">32</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">33</div>
                        <div class="seat">34</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">35</div>
                        <div class="seat">36</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">37</div>
                        <div class="seat">38</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">39</div>
                        <div class="seat">40</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">41</div>
                        <div class="seat">42</div>
                        <div class="seat">43</div>
                        <div class="seat">44</div>
                        <div class="seat">45</div>
                        <div class="seat">46</div>
                    </div>
                </div>
                <div class="row">
                    <a href="/oplata" class="btn-book">Оплатить</a>
                </div>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="bron-sluda-close"></a>
</div>


<div class="bron-sluda-marik" id="bron-sluda-marik">
    <div class="mt">
        <h2>Бронь</h2>
        <br>
        <form action="bron-sluda-marik" method="post">
            <div class="seat-panel">
                <div class="screen">Перед</div>
                <div class="seats-container">
                    <div class="row">
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">1</div>
                        <div class="seat">2</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">3</div>
                        <div class="seat">4</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">5</div>
                        <div class="seat">6</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">7</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">8</div>
                        <div class="seat">9</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">10</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">11</div>
                        <div class="seat">12</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">13</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">14</div>
                        <div class="seat">15</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">16</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">17</div>
                        <div class="seat">18</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">19</div>
                        <div class="seat">20</div>
                    </div>
                </div>
                <div class="row">
                    <a href="/oplata" class="btn-book">Оплатить</a>
                </div>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="bron-sluda-marik-close"></a>
</div>



<div class="times-bus" id="times-bus">
    <div class="mt">
        <h2>Время</h2>
        <br>
        <form action="times-bus" method="post">
            <div class="button-container">
                <a href="#bron-zima" class="time-btn">9:30</a>
                <a href="#bron-zima"class="time-btn">11:30</a>
                <a href="#bron-zima"class="time-btn">13:30</a>
                <a href="#bron-zima"class="time-btn">15:30</a>
                <a href="#bron-zima"class="time-btn">17:30</a>
                <a href="#bron-zima"class="time-btn">19:30</a>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="times-bus-close"></a>
</div>

<div class="bron-zima" id="bron-zima">
    <div class="mt">
        <h2>Бронь</h2>
        <br>
        <form action="bron-zima" method="post">
            <div class="seat-panel">
                <div class="screen">Перед</div>
                <div class="seats-container">
                    <div class="row">
                        <div class="seat">1</div>
                        <div class="seat">2</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">3</div>
                        <div class="seat">4</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">5</div>
                        <div class="seat">6</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">7</div>
                        <div class="seat">8</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">9</div>
                        <div class="seat">10</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">11</div>
                        <div class="seat">12</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">13</div>
                        <div class="seat">14</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">15</div>
                        <div class="seat">16</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">17</div>
                        <div class="seat">18</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">19</div>
                        <div class="seat">20</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">21</div>
                        <div class="seat">22</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">23</div>
                        <div class="seat">24</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">25</div>
                        <div class="seat">26</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">27</div>
                        <div class="seat">28</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">29</div>
                        <div class="seat">30</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">31</div>
                        <div class="seat">32</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">33</div>
                        <div class="seat">34</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">35</div>
                        <div class="seat">36</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">37</div>
                        <div class="seat">38</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">39</div>
                        <div class="seat">40</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">41</div>
                        <div class="seat">42</div>
                        <div class="seat">43</div>
                        <div class="seat">44</div>
                        <div class="seat">45</div>
                        <div class="seat">46</div>
                    </div>
                </div>
                <div class="row">
                    <a href="/oplata" class="btn-book">Оплатить</a>
                </div>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="bron-zima-close"></a>
</div>




<div class="times-bus" id="times-bus">
    <div class="mt">
        <h2>Время</h2>
        <br>
        <form action="times-bus" method="post">
            <div class="button-container">
                <a href="#bron-brat" class="time-btn">9:30</a>
                <a href="#bron-brat"class="time-btn">11:30</a>
                <a href="#bron-brat"class="time-btn">13:30</a>
                <a href="#bron-brat"class="time-btn">15:30</a>
                <a href="#bron-brat"class="time-btn">17:30</a>
                <a href="#bron-brat"class="time-btn">19:30</a>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="times-bus-close"></a>
</div>

<div class="bron-brat" id="bron-brat">
    <div class="mt">
        <h2>Бронь</h2>
        <br>
        <form action="bron-brat" method="post">
            <div class="seat-panel">
                <div class="screen">Перед</div>
                <div class="seats-container">
                    <div class="row">
                        <div class="seat">1</div>
                        <div class="seat">2</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">3</div>
                        <div class="seat">4</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">5</div>
                        <div class="seat">6</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">7</div>
                        <div class="seat">8</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">9</div>
                        <div class="seat">10</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">11</div>
                        <div class="seat">12</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">13</div>
                        <div class="seat">14</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">15</div>
                        <div class="seat">16</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">17</div>
                        <div class="seat">18</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">19</div>
                        <div class="seat">20</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">21</div>
                        <div class="seat">22</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">23</div>
                        <div class="seat">24</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">25</div>
                        <div class="seat">26</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">27</div>
                        <div class="seat">28</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">29</div>
                        <div class="seat">30</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">31</div>
                        <div class="seat">32</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">33</div>
                        <div class="seat">34</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">35</div>
                        <div class="seat">36</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">37</div>
                        <div class="seat">38</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">39</div>
                        <div class="seat">40</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">41</div>
                        <div class="seat">42</div>
                        <div class="seat">43</div>
                        <div class="seat">44</div>
                        <div class="seat">45</div>
                        <div class="seat">46</div>
                    </div>
                </div>
                <div class="row">
                    <a href="/oplata" class="btn-book">Оплатить</a>
                </div>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="bron-brat-close"></a>
</div>





<div class="times-bus" id="times-bus">
    <div class="mt">
        <h2>Время</h2>
        <br>
        <form action="times-bus" method="post">
            <div class="button-container">
                <a href="#bron-kras" class="time-btn">9:30</a>
                <a href="#bron-kras"class="time-btn">11:30</a>
                <a href="#bron-kras"class="time-btn">13:30</a>
                <a href="#bron-kras"class="time-btn">15:30</a>
                <a href="#bron-kras"class="time-btn">17:30</a>
                <a href="#bron-kras"class="time-btn">19:30</a>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="times-bus-close"></a>
</div>

<div class="bron-kras" id="bron-kras">
    <div class="mt">
        <h2>Бронь</h2>
        <br>
        <form action="bron-kras" method="post">
            <div class="seat-panel">
                <div class="screen">Перед</div>
                <div class="seats-container">
                    <div class="row">
                        <div class="seat">1</div>
                        <div class="seat">2</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">3</div>
                        <div class="seat">4</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">5</div>
                        <div class="seat">6</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">7</div>
                        <div class="seat">8</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">9</div>
                        <div class="seat">10</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">11</div>
                        <div class="seat">12</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">13</div>
                        <div class="seat">14</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">15</div>
                        <div class="seat">16</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">17</div>
                        <div class="seat">18</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">19</div>
                        <div class="seat">20</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">21</div>
                        <div class="seat">22</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">23</div>
                        <div class="seat">24</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">25</div>
                        <div class="seat">26</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">27</div>
                        <div class="seat">28</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">29</div>
                        <div class="seat">30</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">31</div>
                        <div class="seat">32</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">33</div>
                        <div class="seat">34</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">35</div>
                        <div class="seat">36</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">37</div>
                        <div class="seat">38</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">39</div>
                        <div class="seat">40</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">41</div>
                        <div class="seat">42</div>
                        <div class="seat">43</div>
                        <div class="seat">44</div>
                        <div class="seat">45</div>
                        <div class="seat">46</div>
                    </div>
                </div>
                <div class="row">
                    <a href="/oplata" class="btn-book">Оплатить</a>
                </div>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="bron-kras-close"></a>
</div>




<div class="times-bus" id="times-bus">
    <div class="mt">
        <h2>Время</h2>
        <br>
        <form action="times-bus" method="post">
            <div class="button-container">
                <a href="#bron-ylan" class="time-btn">9:30</a>
                <a href="#bron-ylan"class="time-btn">11:30</a>
                <a href="#bron-ylan"class="time-btn">13:30</a>
                <a href="#bron-ylan"class="time-btn">15:30</a>
                <a href="#bron-ylan"class="time-btn">17:30</a>
                <a href="#bron-ylan"class="time-btn">19:30</a>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="times-bus-close"></a>
</div>

<div class="times-marik" id="times-marik">
    <div class="mt">
        <h2>Время</h2>
        <br>
        <form action="times-marik" method="post">
            <div class="button-container">
                <a href="#bron-ylan-marik" class="time-btn">8:00</a>
                <a href="#bron-ylan-marik"class="time-btn">10:00</a>
                <a href="#bron-ylan-marik"class="time-btn">12:00</a>
                <a href="#bron-ylan-marik"class="time-btn">14:00</a>
                <a href="#bron-ylan-marik"class="time-btn">16:00</a>
                <a href="#bron-ylan-marik"class="time-btn">18:00</a>
                <a href="#bron-ylan-marik"class="time-btn">20:00</a>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="times-marik-close"></a>
</div>

<div class="bron-ylan" id="bron-ylan">
    <div class="mt">
        <h2>Бронь</h2>
        <br>
        <form action="bron-ylan" method="post">
            <div class="seat-panel">
                <div class="screen">Перед</div>
                <div class="seats-container">
                    <div class="row">
                        <div class="seat">1</div>
                        <div class="seat">2</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">3</div>
                        <div class="seat">4</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">5</div>
                        <div class="seat">6</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">7</div>
                        <div class="seat">8</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">9</div>
                        <div class="seat">10</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">11</div>
                        <div class="seat">12</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">13</div>
                        <div class="seat">14</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">15</div>
                        <div class="seat">16</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">17</div>
                        <div class="seat">18</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">19</div>
                        <div class="seat">20</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">21</div>
                        <div class="seat">22</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">23</div>
                        <div class="seat">24</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">25</div>
                        <div class="seat">26</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">27</div>
                        <div class="seat">28</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">29</div>
                        <div class="seat">30</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">31</div>
                        <div class="seat">32</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">33</div>
                        <div class="seat">34</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">35</div>
                        <div class="seat">36</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">37</div>
                        <div class="seat">38</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">39</div>
                        <div class="seat">40</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">41</div>
                        <div class="seat">42</div>
                        <div class="seat">43</div>
                        <div class="seat">44</div>
                        <div class="seat">45</div>
                        <div class="seat">46</div>
                    </div>
                </div>
                <div class="row">
                    <a href="/oplata" class="btn-book">Оплатить</a>
                </div>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="bron-ylan-close"></a>
</div>


<div class="bron-ylan-marik" id="bron-ylan-marik">
    <div class="mt">
        <h2>Бронь</h2>
        <br>
        <form action="bron-ylan-marik" method="post">
            <div class="seat-panel">
                <div class="screen">Перед</div>
                <div class="seats-container">
                    <div class="row">
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">1</div>
                        <div class="seat">2</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">3</div>
                        <div class="seat">4</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">5</div>
                        <div class="seat">6</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">7</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">8</div>
                        <div class="seat">9</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">10</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">11</div>
                        <div class="seat">12</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">13</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">14</div>
                        <div class="seat">15</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">16</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">17</div>
                        <div class="seat">18</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">19</div>
                        <div class="seat">20</div>
                    </div>
                </div>
                <div class="row">
                    <a href="/oplata" class="btn-book">Оплатить</a>
                </div>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="bron-ylan-marik-close"></a>
</div>




<div class="times-bus" id="times-bus">
    <div class="mt">
        <h2>Время</h2>
        <br>
        <form action="times-bus" method="post">
            <div class="button-container">
                <a href="#bron-nsk" class="time-btn">9:30</a>
                <a href="#bron-nsk"class="time-btn">11:30</a>
                <a href="#bron-nsk"class="time-btn">13:30</a>
                <a href="#bron-nsk"class="time-btn">15:30</a>
                <a href="#bron-nsk"class="time-btn">17:30</a>
                <a href="#bron-nsk"class="time-btn">19:30</a>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="times-bus-close"></a>
</div>

<div class="bron-nsk" id="bron-nsk">
    <div class="mt">
        <h2>Бронь</h2>
        <br>
        <form action="bron-nsk" method="post">
            <div class="seat-panel">
                <div class="screen">Перед</div>
                <div class="seats-container">
                    <div class="row">
                        <div class="seat">1</div>
                        <div class="seat">2</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">3</div>
                        <div class="seat">4</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">5</div>
                        <div class="seat">6</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">7</div>
                        <div class="seat">8</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">9</div>
                        <div class="seat">10</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">11</div>
                        <div class="seat">12</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">13</div>
                        <div class="seat">14</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">15</div>
                        <div class="seat">16</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">17</div>
                        <div class="seat">18</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">19</div>
                        <div class="seat">20</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">21</div>
                        <div class="seat">22</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">23</div>
                        <div class="seat">24</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">25</div>
                        <div class="seat">26</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">27</div>
                        <div class="seat">28</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">29</div>
                        <div class="seat">30</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">31</div>
                        <div class="seat">32</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">33</div>
                        <div class="seat">34</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">35</div>
                        <div class="seat">36</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">37</div>
                        <div class="seat">38</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">39</div>
                        <div class="seat">40</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">41</div>
                        <div class="seat">42</div>
                        <div class="seat">43</div>
                        <div class="seat">44</div>
                        <div class="seat">45</div>
                        <div class="seat">46</div>
                    </div>
                </div>
                <div class="row">
                    <a href="/oplata" class="btn-book">Оплатить</a>
                </div>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="bron-nsk-close"></a>
</div>




<div class="times-bus" id="times-bus">
    <div class="mt">
        <h2>Время</h2>
        <br>
        <form action="times-bus" method="post">
            <div class="button-container">
                <a href="#bron-mpc" class="time-btn">9:30</a>
                <a href="#bron-mpc"class="time-btn">11:30</a>
                <a href="#bron-mpc"class="time-btn">13:30</a>
                <a href="#bron-mpc"class="time-btn">15:30</a>
                <a href="#bron-mpc"class="time-btn">17:30</a>
                <a href="#bron-mpc"class="time-btn">19:30</a>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="times-bus-close"></a>
</div>

<div class="times-marik" id="times-marik">
    <div class="mt">
        <h2>Время</h2>
        <br>
        <form action="times-marik" method="post">
            <div class="button-container">
                <a href="#bron-mpc-marik" class="time-btn">8:00</a>
                <a href="#bron-mpc-marik"class="time-btn">10:00</a>
                <a href="#bron-mpc-marik"class="time-btn">12:00</a>
                <a href="#bron-mpc-marik"class="time-btn">14:00</a>
                <a href="#bron-mpc-marik"class="time-btn">16:00</a>
                <a href="#bron-mpc-marik"class="time-btn">18:00</a>
                <a href="#bron-mpc-marik"class="time-btn">20:00</a>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="times-marik-close"></a>
</div>

<div class="bron-mpc" id="bron-mpc">
    <div class="mt">
        <h2>Бронь</h2>
        <br>
        <form action="bron-mpc" method="post">
            <div class="seat-panel">
                <div class="screen">Перед</div>
                <div class="seats-container">
                    <div class="row">
                        <div class="seat">1</div>
                        <div class="seat">2</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">3</div>
                        <div class="seat">4</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">5</div>
                        <div class="seat">6</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">7</div>
                        <div class="seat">8</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">9</div>
                        <div class="seat">10</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">11</div>
                        <div class="seat">12</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">13</div>
                        <div class="seat">14</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">15</div>
                        <div class="seat">16</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">17</div>
                        <div class="seat">18</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">19</div>
                        <div class="seat">20</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">21</div>
                        <div class="seat">22</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">23</div>
                        <div class="seat">24</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">25</div>
                        <div class="seat">26</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">27</div>
                        <div class="seat">28</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">29</div>
                        <div class="seat">30</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">31</div>
                        <div class="seat">32</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">33</div>
                        <div class="seat">34</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">35</div>
                        <div class="seat">36</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">37</div>
                        <div class="seat">38</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">39</div>
                        <div class="seat">40</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">41</div>
                        <div class="seat">42</div>
                        <div class="seat">43</div>
                        <div class="seat">44</div>
                        <div class="seat">45</div>
                        <div class="seat">46</div>
                    </div>
                </div>
                <div class="row">
                    <a href="/oplata" class="btn-book">Оплатить</a>
                </div>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="bron-mpc-close"></a>
</div>


<div class="bron-mpc-marik" id="bron-mpc-marik">
    <div class="mt">
        <h2>Бронь</h2>
        <br>
        <form action="bron-mpc-marik" method="post">
            <div class="seat-panel">
                <div class="screen">Перед</div>
                <div class="seats-container">
                    <div class="row">
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">1</div>
                        <div class="seat">2</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">3</div>
                        <div class="seat">4</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">5</div>
                        <div class="seat">6</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">7</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">8</div>
                        <div class="seat">9</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">10</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">11</div>
                        <div class="seat">12</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">13</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">14</div>
                        <div class="seat">15</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">16</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">17</div>
                        <div class="seat">18</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">19</div>
                        <div class="seat">20</div>
                    </div>
                </div>
                <div class="row">
                    <a href="/oplata" class="btn-book">Оплатить</a>
                </div>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="bron-mpc-marik-close"></a>
</div>




<div class="times-marik" id="times-marik">
    <div class="mt">
        <h2>Время</h2>
        <br>
        <form action="times-marik" method="post">
            <div class="button-container">
                <a href="#bron-listv-marik" class="time-btn">8:00</a>
                <a href="#bron-listv-marik"class="time-btn">10:00</a>
                <a href="#bron-listv-marik"class="time-btn">12:00</a>
                <a href="#bron-listv-marik"class="time-btn">14:00</a>
                <a href="#bron-listv-marik"class="time-btn">16:00</a>
                <a href="#bron-listv-marik"class="time-btn">18:00</a>
                <a href="#bron-listv-marik"class="time-btn">20:00</a>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="times-marik-close"></a>
</div>

<div class="bron-listv-marik" id="bron-listv-marik">
    <div class="mt">
        <h2>Бронь</h2>
        <br>
        <form action="bron-listv-marik" method="post">
            <div class="seat-panel">
                <div class="screen">Перед</div>
                <div class="seats-container">
                    <div class="row">
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">1</div>
                        <div class="seat">2</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">3</div>
                        <div class="seat">4</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">5</div>
                        <div class="seat">6</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">7</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">8</div>
                        <div class="seat">9</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">10</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">11</div>
                        <div class="seat">12</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">13</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">14</div>
                        <div class="seat">15</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">16</div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <div class="seat">17</div>
                        <div class="seat">18</div>
                        <div class="null"></div>
                        <div class="null"></div>
                        <div class="seat">19</div>
                        <div class="seat">20</div>
                    </div>
                </div>
                <div class="row">
                    <a href="/oplata" class="btn-book">Оплатить</a>
                </div>
            </div>
        </form>
        <br>
        <p>Вернуться <a href="/">назад</a>.</p>
    </div>
    <a href="#close" class="bron-listv-marik-close"></a>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var seats = document.querySelectorAll('.seat');

        seats.forEach(function (seat) {
            seat.addEventListener('click', function () {
                this.classList.toggle('selected');
            });
        });

        var btnBook = document.querySelector('.btn-book');
        btnBook.addEventListener('click', function () {
            var selectedSeats = document.querySelectorAll('.seat.selected');
            var seatNumbers = Array.from(selectedSeats).map(function (selectedSeat) {
                return selectedSeat.textContent;
            });
            alert('Вы выбрали места: ' + seatNumbers.join(', '));
        });
    });

</script>

<style>
    .times-bus {
    display: none;
}

.times-bus:target {
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
.times-bus .mt {
    font-family: Verdana, sans-serif;
    font-size: 16px;
    padding: 20px;
    width: 100%;
    z-index: 8;
    max-width: 600px;
    max-height: 90%;
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


.times-bus-close {
    position: relative;
    display: block;
}

.times-bus-close:after {
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

.times-bus-close:before {
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    position: fixed;
    content: "";
    cursor: default;
}


.times-marik {
    display: none;
}

.times-marik:target {
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
.times-marik .mt {
    font-family: Verdana, sans-serif;
    font-size: 16px;
    padding: 20px;
    width: 100%;
    z-index: 8;
    max-width: 800px;
    max-height: 90%;
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


.times-marik-close {
    position: relative;
    display: block;
}

.times-marik-close:after {
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

.times-marik-close:before {
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    position: fixed;
    content: "";
    cursor: default;
}

.time-btn {
    margin: 20px;
}
</style>

</html>