<?php
// Объявление переменных с разными типами данных
$siteName = "Мой сайт"; // строка
$viewsCount = 100;      // число
$isPublished = true;    // булево значение

// Определение константы для имени сайта
define("SITE_NAME", "MyWebsite");

// Вывод значений переменных
echo "Название сайта: " . $siteName . "<br>";
echo "Количество просмотров: " . $viewsCount . "<br>";
echo "Опубликован: " . ($isPublished ? "Да" : "Нет") . "<br>";

// Вывод значения константы
print "Константа SITE_NAME: " . SITE_NAME;
?>

<?php
// Создаём строковую переменную, содержащую число
$stringNumber = "123.45";

// Преобразуем строку в число
$convertedNumber = (float)$stringNumber; // можно использовать (int) для целого числа

// Выводим результат преобразования
echo "Преобразованное число: " . $convertedNumber . "\n";

// Выводим тип переменной
echo "Тип переменной: " . gettype($convertedNumber) . "\n";
?>

<?php
// Создаём несколько переменных с числами
$num1 = 10;
$num2 = 5;
$num3 = 20;

// Выполняем арифметические операции
$sum = $num1 + $num2;         // Сложение
$difference = $num1 - $num2;  // Вычитание
$product = $num1 * $num2;     // Умножение
$quotient = $num1 / $num2;    // Деление

// Выводим результаты арифметических операций
echo "Сложение: $num1 + $num2 = $sum\n";
echo "Вычитание: $num1 - $num2 = $difference\n";
echo "Умножение: $num1 * $num2 = $product\n";
echo "Деление: $num1 / $num2 = $quotient\n\n";

// Используем операторы сравнения
$isEqual = ($num1 == $num2);          // Сравнение на равенство
$isNotEqual = ($num1 != $num2);       // Сравнение на неравенство
$isGreater = ($num1 > $num3);         // Проверка на больше
$isLessOrEqual = ($num2 <= $num1);    // Проверка на меньше или равно

// Выводим результаты сравнений
echo "Сравнения:\n";
echo "$num1 равно $num2: " . ($isEqual ? 'Да' : 'Нет') . "\n";
echo "$num1 не равно $num2: " . ($isNotEqual ? 'Да' : 'Нет') . "\n";
echo "$num1 больше $num3: " . ($isGreater ? 'Да' : 'Нет') . "\n";
echo "$num2 меньше или равно $num1: " . ($isLessOrEqual ? 'Да' : 'Нет') . "\n\n";

// Логические операторы
$logicalAnd = ($num1 > 0 && $num2 < 10); // Логическое "И"
$logicalOr = ($num1 < 5 || $num2 > 1);    // Логическое "ИЛИ"

// Выводим результаты логических выражений
echo "Логические выражения:\n";
echo "num1 больше 0 И num2 меньше 10: " . ($logicalAnd ? 'Да' : 'Нет') . "\n";
echo "num1 меньше 5 ИЛИ num2 больше 1: " . ($logicalOr ? 'Да' : 'Нет') . "\n";
?>

<?php
// Выводим информацию о сервере и среде исполнения
echo "<h1>Информация о сервере и среде исполнения</h1>";
echo "<ul>";
echo "<li><strong>IP-адрес пользователя:</strong> " . $_SERVER['REMOTE_ADDR'] . "</li>";
echo "<li><strong>Имя хоста:</strong> " . $_SERVER['SERVER_NAME'] . "</li>";
echo "<li><strong>Порт сервера:</strong> " . $_SERVER['SERVER_PORT'] . "</li>";
echo "<li><strong>Метод запроса:</strong> " . $_SERVER['REQUEST_METHOD'] . "</li>";
echo "<li><strong>URL запроса:</strong> " . $_SERVER['REQUEST_URI'] . "</li>";
echo "<li><strong>Пользовательский агент:</strong> " . $_SERVER['HTTP_USER_AGENT'] . "</li>";
echo "<li><strong>Версия протокола:</strong> " . $_SERVER['SERVER_PROTOCOL'] . "</li>";
echo "<li><strong>IP-адрес сервера:</strong> " . $_SERVER['SERVER_ADDR'] . "</li>";
echo "</ul>";
?>

