<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Форма ФИВ</title>
</head>
<body>
    <?php
    // Если форма отправлена
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // и запрос - 'end'
        if (isset($_POST['end'])) {
            session_destroy();
        } else {
            $_SESSION["surname"] = $_POST["surname"];
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["age"] = $_POST["age"];
        }
    }

    if (isset($_SESSION["surname"]) && isset($_SESSION["name"]) && isset($_SESSION["age"])) {
        echo "Ваша фамилия: " . $_SESSION["surname"] . "<br>";
        echo "Ваше имя: " . $_SESSION["name"] . "<br>";
        echo "Ваш возраст: " . $_SESSION["age"] . "<br>";
        // Кнопка для закрытия сессии
        echo '<form method="post">
            <input type="submit" name="end" value="Закончить сессию">
        </form>';

    } else {
        // Форма для данных
        echo '<form method="post">
            Фамилия: <input type="text" name="surname"><br>
            Имя: <input type="text" name="name"><br>
            Возраст: <input type="text" name="age"><br>
            <input type="submit">
        </form>';
    }
    ?>
</body>
</html>
