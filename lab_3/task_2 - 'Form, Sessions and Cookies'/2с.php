<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Расскажи о себе</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['end'])) {
            session_destroy();
        } else {
            $_SESSION["data"] = array(
                "Имя" => $_POST["name"],
                "Возраст" => $_POST["age"],
                "Место работы/учёбы" => $_POST["workplace"],
                "Зарплата" => $_POST["salary"],
                "Дополнительно" => $_POST["extra"]
            );
        }
    }

    if (isset($_SESSION["data"])) {
        echo "<ul>";
        foreach ($_SESSION["data"] as $key => $value) {
            echo "<li>" . $key . ": " . $value . "</li>";
        }
        echo "</ul>";
        echo '<form method="post">
            <input type="submit" name="end" value="Закончить сессию">
        </form>';
    } else {
        echo '<form method="post">
                Имя: <input type="text" name="name"><br>
                Возраст: <input type="text" name="age"><br>
                Место работы/учёбы: <input type="text" name="workplace"><br>
                Зарплата (если есть): <input type="text" name="salary"><br>
                Дополнительно: <input type="text" name="extra"><br>
                <input type="submit" value="Отправить">
            </form>';
    }
    ?>
</body>
</html>
