<!DOCTYPE html>
<html>
<head>
    <title>Считаем слова и символы</title>
</head>
<body>
    <form method="post">
    <textarea name="text"><?php if(isset($_POST["text"])) { echo $_POST["text"]; } ?></textarea>
    <input type="submit" value="Отправить">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $text = $_POST["text"];
        $words = preg_match_all('/\S+/u', $text);
        $chars = preg_match_all('/./us', $text);

        echo "Количество слов: $words<br>";
        echo "Количество символов: $chars";
    }
    ?>
</body>
</html>
