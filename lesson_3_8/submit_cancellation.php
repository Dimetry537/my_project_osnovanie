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
        $order_id = htmlspecialchars($_POST['order_id']);
        $reason = htmlspecialchars($_POST['reason']);

        // SQL-запрос для вставки данных
        $sql = "INSERT INTO cancellations (order_id, reason) VALUES (:order_id, :reason)";
        $stmt = $pdo->prepare($sql);
        
        // Выполнение запроса
        $stmt->execute(['order_id' => $order_id, 'reason' => $reason]);

        echo "Заказ #$order_id успешно отменен!";
    }
} catch (PDOException $e) {
    echo 'Ошибка подключения: ' . $e->getMessage();
}
?>
