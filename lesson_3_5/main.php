<?php
// Создаем массив с именами друзей
$friends = ["Иван", "Мария", "Алексей", "Анна"];

// Выводим каждое имя на новой строке с помощью цикла foreach
foreach ($friends as $friend) {
    echo $friend . "\n";
}
?>

<?php
// Создаем массив из 5 произвольных чисел
$numbers = [10, 25, 37, 42, 58];

// Получаем элемент с индексом 2
$valueAtIndex2 = $numbers[2];

// Выводим значение элемента на экран
echo "Элемент с индексом 2: " . $valueAtIndex2 . "\n";
?>

<?php
// Создаем ассоциативный массив с информацией о друге
$friend = [
    "name" => "Иван",
    "age" => 25,
    "city" => "Москва"
];

// Выводим имя и возраст друга
echo "Имя друга: " . $friend["name"] . "\n";
echo "Возраст друга: " . $friend["age"] . "\n";
?>

<?php
// Создаем массив из 5 чисел
$numbers = [5, 12, 3, 18, 7];

// Выводим только те числа, которые больше 10
foreach ($numbers as $number) {
    if ($number > 10) {
        echo $number . "\n";
    }
}
?>

<?php
// Создаем массив из 5 чисел
$numbers = [5, 10, 15, 20, 25];

// Используем функцию array_sum() для нахождения суммы всех чисел
$sum = array_sum($numbers);

// Выводим результат
echo "Сумма всех чисел: " . $sum . "\n"; // Ожидаемый результат: 75
?>

<?php
// Шаг 1: Создание массива товаров
$products = [
    [
        'name' => 'Ноутбук',
        'price' => 1000,
        'quantity' => 5,
    ],
    [
        'name' => 'Смартфон',
        'price' => 500,
        'quantity' => 10,
    ],
    [
        'name' => 'Планшет',
        'price' => 300,
        'quantity' => 7,
    ],
    [
        'name' => 'Наушники',
        'price' => 150,
        'quantity' => 20,
    ],
    [
        'name' => 'Клавиатура',
        'price' => 50,
        'quantity' => 15,
    ],
];

// Шаг 2: Функция для вывода списка всех товаров
function displayProducts($products) {
    echo "Список товаров:\n";
    foreach ($products as $product) {
        echo "Название: " . $product['name'] . ", Цена: " . $product['price'] . " USD\n";
    }
}

// Шаг 3: Функция для добавления нового товара
function addProduct(&$products, $name, $price, $quantity) {
    $products[] = [
        'name' => $name,
        'price' => $price,
        'quantity' => $quantity,
    ];
    echo "Товар '$name' добавлен.\n";
}

// Шаг 4: Функция для обновления количества товара на складе
function updateQuantity(&$products, $name, $newQuantity) {
    foreach ($products as &$product) {
        if ($product['name'] === $name) {
            $product['quantity'] = $newQuantity;
            echo "Количество товара '$name' обновлено до $newQuantity.\n";
            return;
        }
    }
    echo "Товар '$name' не найден.\n";
}

// Вызовы функций
displayProducts($products); // Выводим список товаров

addProduct($products, 'Мышь', 25, 30); // Добавляем новый товар

updateQuantity($products, 'Смартфон', 12); // Обновляем количество товара

displayProducts($products); // Выводим обновленный список товаров
?>


