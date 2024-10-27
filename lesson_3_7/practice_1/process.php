<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ваш отзыв</title>
</head>
<body>
    <h1>Ваш отзыв</h1>

    <?php
    // Обработка данных формы
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $review = htmlspecialchars($_POST['review']);
        $rating = intval($_POST['rating']);

        // Вывод результата
        echo "<p><strong>Имя:</strong> $name</p>";
        echo "<p><strong>Отзыв:</strong> $review</p>";
        echo "<p><strong>Рейтинг:</strong> $rating</p>";
    } else {
        echo "<p>Данные не были отправлены.</p>";
    }
    ?>
    
    <a href="index.html">Назад к форме</a>
</body>
</html>
