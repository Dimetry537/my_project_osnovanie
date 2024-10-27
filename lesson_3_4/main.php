<?php
// Определяем функцию multiply
function multiply($a, $b) {
    return $a * $b; // Умножаем и возвращаем результат
}

// Пример вызова функции
echo multiply(3, 4); // Ожидаемый результат: 12
?>

<?php
// Создаем глобальную переменную
$globalVar = 50;

function sumGlobal() {
    global $globalVar; // Объявляем глобальную переменную

    $localVar = 100; // Создаем локальную переменную
    return $globalVar + $localVar; // Складываем и возвращаем результат
}

// Пример вызова функции
echo sumGlobal(); // Ожидаемый результат: 150
?>

<?php
// Определяем рекурсивную функцию factorial
function factorial($n) {
    if ($n <= 1) {
        return 1; // Условие остановки рекурсии
    }
    return $n * factorial($n - 1); // Рекурсивный вызов функции
}

// Пример вызова функции
echo factorial(5); // Ожидаемый результат: 120
?>

<?php
// Исходный массив строк
$array = ["apple", "banana", "cherry"];

// Используем array_map с анонимной функцией
$result = array_map(function($str) {
    return strtoupper($str); // Преобразуем строку в верхний регистр
}, $array);

// Выводим результат
print_r($result); // Ожидаемый результат: ["APPLE", "BANANA", "CHERRY"]
?>

<?php
// Определяем стрелочную функцию для суммы двух чисел
$sum = fn($a, $b) => $a + $b;

// Выводим результат
echo $sum(3, 4); // Ожидаемый результат: 7
?>

<?php
function counter() {
    $count = 0; // Инициализация счётчика

    // Возвращаем замыкание
    return function() use (&$count) { // Используем $count по ссылке
        $count++; // Увеличиваем счётчик
        return $count; // Возвращаем текущее значение счётчика
    };
}

$myCounter = counter(); // Получаем замыкание

echo $myCounter() . "\n"; // Ожидаемый результат: 1
echo $myCounter() . "\n"; // Ожидаемый результат: 2
?>

<?php
function generateNumbers() {
    for ($i = 1; $i <= 5; $i++) { // Увеличиваем $i на 1 до 5
        yield $i; // Возвращаем текущее значение $i
    }
}

$generator = generateNumbers(); // Получаем генератор

foreach ($generator as $number) { // Итерируем по генератору
    echo $number . " "; // Ожидаемый результат: 1 2 3 4 5
}
?>

<?php
$array = [3, 7, 2, 8, 4, 10, 1]; // Исходный массив

$minValue = min($array); // Находим минимальное значение
$maxValue = max($array); // Находим максимальное значение

echo "Минимум: " . $minValue . "\n"; // Ожидаемый результат: Минимум: 1
echo "Максимум: " . $maxValue . "\n"; // Ожидаемый результат: Максимум: 10
?>

