<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="content">
    <div id="header">
        <a href="index.html">Главная</a>
        <span>/</span>

        <a href="puzzle.php">Загадки</a>
        <span>/</span>

        <a href="guess.html">Угадайка</a>
        <span>/</span>

        <a href="guess-2.html">Угадайка мультиплеер</a>
    </div>
    <div id="center">
        <h1>Игра в загадки</h1>
        <div id="box">

            <form action="" method="GET">
                <p>Зимой и летом одним цветом</p>
                <input type="text" name="question1" id="firstQuestion">
                <p>Сто одежек и все без застежек</p>
                <input type="text" name="question2" id="secondQuestion"><br>
                <input type="submit" value="Ответить">
            </form>
            <?php
                if (isset($_GET['question1']) && isset($_GET['question2'])) {
                    $quest1 = $_GET["question1"];
                    $score = 0;

                    if ($quest1 == "ель" || $quest1 == "елка" || $quest1 == "ёлка") {
                        echo '1 - Правильно';
                        $score++;
                    } else {
                        echo '1 - Не правильно';
                    }

                    echo '<br>';

                    $quest2 = $_GET["question2"];
                    if ($quest2 == "капуста" || $quest2 == "капустка") {
                        echo '2 - Правильно';
                        $score++;
                    } else {
                        echo '2 - Не правильно';
                    }

                    echo '<br><br>';

                    echo 'Вы угадали ' . $score . ' загадок';
                }
            ?>
        </div>
    </div>
</div>
<div id="footer">
    Copyright © 2016 <a href="https://geekbrains.ru/">GeekBrains</a>
</div>
</body>
</html>