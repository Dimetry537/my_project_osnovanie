<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ваш запрос на отмену заказа</title>
</head>
<body>
    <h1>Ваш запрос на отмену заказа</h1>

    <?php
    // Обработка данных формы
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $order_id = htmlspecialchars($_POST['order_id']);
        $reason = htmlspecialchars($_POST['reason']);

        // Вывод результата
        echo "<p><strong>Номер заказа:</strong> $order_id</p>";
        echo "<p><strong>Причина отмены:</strong> $reason</p>";
    } else {
        echo "<p>Данные не были отправлены.</p>";
    }
    ?>
    
    <a href="index.html">Назад к форме</a>
</body>
</html>
