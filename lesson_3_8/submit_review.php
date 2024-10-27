<?php
// Настройки подключения к базе данных
$dsn = 'mysql:host=localhost;dbname=your_database_name'; // замените your_database_name на ваше имя базы данных
$username = 'root'; // имя пользователя MySQL
$password = ''; // пароль (оставьте пустым, если у root нет пароля)

try {
    // Подключение к базе данных
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Проверка метода запроса
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Получение данных из формы
        $name = htmlspecialchars($_POST['name']);
        $review = htmlspecialchars($_POST['review']);
        $rating = (int)$_POST['rating'];

        // SQL-запрос для вставки данных
        $sql = "INSERT INTO reviews (name, review, rating) VALUES (:name, :review, :rating)";
        $stmt = $pdo->prepare($sql);
        
        // Выполнение запроса
        $stmt->execute(['name' => $name, 'review' => $review, 'rating' => $rating]);

        echo "Отзыв успешно добавлен!";
        // Перенаправление обратно на страницу с формой
        header("Location: add_review.html");
        exit;
    }
} catch (PDOException $e) {
    echo 'Ошибка подключения: ' . $e->getMessage();
}
?>
