<?php
// Настройки подключения к базе данных
$dsn = 'mysql:host=localhost;dbname=your_database_name';
$username = 'root';
$password = '';

try {
    // Подключаемся к базе данных
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Проверяем, был ли отправлен POST-запрос
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Получаем данные из формы
        $name = htmlspecialchars($_POST['name']);
        $review = htmlspecialchars($_POST['review']);
        $rating = (int)$_POST['rating'];

        // Подготовка SQL-запроса для вставки данных
        $sql = "INSERT INTO reviews (name, review, rating) VALUES (:name, :review, :rating)";
        $stmt = $pdo->prepare($sql);

        // Выполнение запроса
        $stmt->execute([
            'name' => $name,
            'review' => $review,
            'rating' => $rating
        ]);

        echo "Отзыв успешно добавлен!";
    }
} catch (PDOException $e) {
    echo 'Ошибка подключения: ' . $e->getMessage();
}
