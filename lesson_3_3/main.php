<?php
// Создаём массив из 5 чисел
$numbers = [12, 7, 4, 15, 8];

// Используем цикл foreach для проверки четности каждого числа
foreach ($numbers as $number) {
    if ($number % 2 === 0) {
        echo "$number — четное число.\n";
    } else {
        echo "$number — нечетное число.\n";
    }
}
?>

<?php
// Создаём массив из 7 чисел
$numbers = [10, -3, 5, -8, 12, -1, 4];

// Инициализируем счетчики
$positiveCount = 0;
$negativeCount = 0;

// Используем цикл foreach для подсчета положительных и отрицательных чисел
foreach ($numbers as $number) {
    if ($number > 0) {
        $positiveCount++; // Увеличиваем счетчик положительных чисел
    } else {
        $negativeCount++; // Увеличиваем счетчик отрицательных чисел
    }
}

// Выводим результаты
echo "Положительных чисел: $positiveCount\n";
echo "Отрицательных чисел: $negativeCount\n";
?>

<?php
// Число для таблицы умножения
$number = 5;

// Используем цикл for для генерации таблицы умножения
for ($i = 1; $i <= 10; $i++) {
    echo "$number * $i = " . ($number * $i) . "<br>";
}
?>

<?php
// Создаем массив с именами студентов и их оценками
$students = [
    "Иван" => 85,
    "Мария" => 74,
    "Алексей" => 40
];

// Используем цикл foreach для проверки результатов экзаменов
foreach ($students as $name => $score) {
    if ($score >= 50) {
        echo "$name сдал экзамен!<br>";
    } else {
        echo "$name не сдал экзамен!<br>";
    }
}
?>

<?php
// Создаем массив из 8 случайных чисел от 1 до 100
$numbers = [];
for ($i = 0; $i < 8; $i++) {
    $numbers[] = rand(1, 100); // Генерируем случайные числа
}

// Инициализируем переменные min и max
$min = $numbers[0];
$max = $numbers[0];

// Используем цикл foreach для поиска минимального и максимального значений
foreach ($numbers as $number) {
    if ($number < $min) {
        $min = $number; // Обновляем минимальное значение
    }
    if ($number > $max) {
        $max = $number; // Обновляем максимальное значение
    }
}

// Выводим результаты
echo "Минимальное число: $min<br>";
echo "Максимальное число: $max<br>";
?>

