<?php
// Подключение к серверу MySQL
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

// Обработка формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $mysqli->real_escape_string($_POST['email']);
    $title = $mysqli->real_escape_string($_POST['title']);
    $category = $mysqli->real_escape_string($_POST['categories']);
    $description = $mysqli->real_escape_string($_POST['description']);

    $query = "INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')";
    $mysqli->query($query);
}

// Получение всех объявлений
$advertisements = [];
if ($result = $mysqli->query('SELECT * FROM ad ORDER BY created DESC')) {
    while ($row = $result->fetch_assoc()) {
        $advertisements[] = $row;
    }
    $result->close();
}

// Закрытие соединения
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Объявления</title>
</head>

<body>
<form action="lab_5.php" method="post">
    <label for="email">Email</label>
    <input type="email" name="email" required> <br>

    <label for="title">Title</label>
    <input type="text" name="title" required> <br>

    <label for="category">Category</label>
    <select name="categories" required>
        <option value="clothes">Clothes</option>
        <option value="electronics">Electronics</option>
        <option value="services">Services</option>
    </select><br>

    <label for="description">Description</label>
    <textarea rows="3" name="description" required></textarea> <br>

    <button type="submit">Post</button>
</form>
<div id="table">
    <table>
        <thead>
        <tr>
            <th>Email</th>
            <th>Title</th>
            <th>Description</th>
            <th>Category</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($advertisements as $advertisement):
            echo "<tr>";
            echo "<td>" . ($advertisement['email']) . "</td>";
            echo "<td>" . ($advertisement['title']) . "</td>";
            echo "<td>" . ($advertisement['description']) . "</td>";
            echo "<td>" . ($advertisement['category']) . "</td>";
            echo "</tr>";
        endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
