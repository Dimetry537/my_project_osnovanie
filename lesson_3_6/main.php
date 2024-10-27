<?php
// 1. Конкатенация строк
$string1 = "Привет";
$string2 = "мир!";
$concatenated = $string1 . " " . $string2;
echo "Конкатенация: $concatenated\n"; // Привет мир!

// 2. Изменение регистра
$lowercase = strtolower($concatenated);
$uppercase = strtoupper($concatenated);
echo "Нижний регистр: $lowercase\n"; // нижний регистр: привет мир!
echo "Верхний регистр: $uppercase\n"; // верхний регистр: ПРИВЕТ МИР!

// 3. Сравнение строк
$stringA = "Hello";
$stringB = "hello";
echo "Сравнение с учетом регистра: " . ($stringA === $stringB ? 'Равны' : 'Не равны') . "\n"; // Не равны
echo "Сравнение без учета регистра: " . (strcasecmp($stringA, $stringB) === 0 ? 'Равны' : 'Не равны') . "\n"; // Равны

// 4. Поиск подстроки
$haystack = "Я люблю PHP!";
$needle = "люблю";
$position = strpos($haystack, $needle);
if ($position !== false) {
    echo "Подстрока '$needle' найдена на позиции: $position\n"; // Подстрока 'люблю' найдена на позиции: 2
} else {
    echo "Подстрока '$needle' не найдена.\n";
}

// 5. Замена подстроки
$originalString = "Я люблю PHP!";
$replacedString = str_replace("PHP", "Python", $originalString);
echo "Замена подстрока: $replacedString\n"; // Я люблю Python!

// 6. Форматирование строки
$name = "Алексей";
$age = 25;
$formattedString = sprintf("Меня зовут %s, мне %d лет.", $name, $age);
echo "Отформатированная строка: $formattedString\n"; // Меня зовут Алексей, мне 25 лет.

// 7. Разделение строки
$csv = "яблоко,банан,груша,апельсин";
$array = explode(",", $csv);
echo "Разделённый массив: ";
print_r($array); // Разделённый массив: Array ( [0] => яблоко [1] => банан [2] => груша [3] => апельсин )
$joinedString = implode(", ", $array);
echo "Объединённая строка: $joinedString\n"; // Объединённая строка: яблоко, банан, груша, апельсин

// 8. Работа с многострочным текстом
$multilineText = "Это первая строка.\nЭто вторая строка.\nЭто третья строка.";
$htmlText = nl2br($multilineText);
echo "HTML-разметка:\n$htmlText"; 
/*
HTML-разметка:
Это первая строка.<br>
Это вторая строка.<br>
Это третья строка.
*/
?>

<?php
// 1. Сложная конкатенация строк
$name = "Алексей";
$hobby = "программирование";
$concatenatedString = "Меня зовут " . $name . " и я увлекаюсь " . $hobby . ".";
echo "Сложная конкатенация: $concatenatedString\n";

// 2. Изменение регистра с условиями
$sentence = "я люблю изучать php и javascript.";
$capitalizedSentence = ucwords(strtolower($sentence));
echo "Преобразованная строка: $capitalizedSentence\n"; // Я Люблю Изучать Php И Javascript.

// 3. Сравнение строк с учётом регистра и без
$string1 = "Hello World";
$string2 = "hello world";
$isSameStrict = $string1 === $string2;
$isSameLoose = $string1 == $string2;
$isSameIgnoreCase = strcasecmp($string1, $string2) === 0;

echo "Сравнение с учётом регистра: " . ($isSameStrict ? 'Равны' : 'Не равны') . "\n"; // Не равны
echo "Сравнение без учёта регистра: " . ($isSameIgnoreCase ? 'Равны' : 'Не равны') . "\n"; // Равны

// 4. Замена подстроки с использованием массива
$text = "Я люблю PHP и JavaScript.";
$search = ["PHP", "JavaScript"];
$replace = ["Python", "Ruby"];
$replacedText = str_replace($search, $replace, $text);
echo "Замена подстрок: $replacedText\n"; // Я люблю Python и Ruby.

// 5. Форматирование строки с числом
$productName = "Книга";
$price = 25;
$formattedString = sprintf("Цена %s составляет %d рублей.", $productName, $price);
echo "Отформатированная строка: $formattedString\n"; // Цена Книга составляет 25 рублей.

// 6. Разделение и объединение сложной строки
$numbersString = "10,20,30,40,50";
$numbersArray = explode(",", $numbersString);
$sum = array_sum($numbersArray);
echo "Сумма чисел: $sum\n"; // Сумма чисел: 150

// 7. Создание случайной строки
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

echo "Случайная строка: " . generateRandomString(8) . "\n"; // Пример вывода: Случайная строка: A1b2C3d4

// 8. Проверка строки на палиндром
function isPalindrome($string) {
    $cleanString = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $string)); // Удаляем все не буквенно-цифровые символы
    return $cleanString === strrev($cleanString);
}

$palindromeTest = "A man, a plan, a canal: Panama";
echo "Строка '$palindromeTest' " . (isPalindrome($palindromeTest) ? 'является' : 'не является') . " палиндромом.\n"; // является палиндромом.
?>

