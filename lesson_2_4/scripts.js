let age = 25;

if (age < 18) {
    console.log("Вы слишком молоды.");
} else if (age >= 18 && age <= 65) {
    console.log("Добро пожаловать!");
} else if (age > 65) {
    console.log("Вам пора на пенсию.");
}

let day = 3;

switch (day) {
    case 1:
        console.log("Понедельник");
        break;
    case 2:
        console.log("Вторник");
        break;
    case 3:
        console.log("Среда");
        break;
    case 4:
        console.log("Четверг");
        break;
    case 5:
        console.log("Пятница");
        break;
    case 6:
        console.log("Суббота");
        break;
    case 7:
        console.log("Воскресенье");
        break;
    default:
        console.log("Некорректный день");
}

let n = 10;
let sum = 0;

for (let i = 0; i <= n; i += 2) {
    sum += i;
}

console.log(`Сумма всех четных чисел от 0 до ${n} равна ${sum}`);

let str = "Hello, how are you? Hello again!";
let subStr = "Hello";
let count = 0;

for (let i = 0; i <= str.length - subStr.length; i++) {
    if (str.substring(i, i + subStr.length) === subStr) {
        count++;
    }
}

console.log(`Количество вхождений подстроки "${subStr}" в строке: ${count}`);

for (let i = 1; i <= 100; i++) {
    if (i % 15 === 0) {
        console.log("FizzBuzz");
    }
    else if (i % 3 === 0) {
        console.log("Fizz");
    }
    else if (i % 5 === 0) {
        console.log("Buzz");
    }
    else {
        console.log(i);
    }
}

let season = 'summer';

// Версия с if-else if
if (season === 'winter') {
    console.log("Это зима.");
} else if (season === 'spring') {
    console.log("Это весна.");
} else if (season === 'summer') {
    console.log("Это лето.");
} else if (season === 'autumn') {
    console.log("Это осень.");
} else {
    console.log("Некорректное значение сезона.");
}

// Версия с switch
switch (season) {
    case 'winter':
        console.log("Это зима.");
        break;
    case 'spring':
        console.log("Это весна.");
        break;
    case 'summer':
        console.log("Это лето.");
        break;
    case 'autumn':
        console.log("Это осень.");
        break;
    default:
        console.log("Некорректное значение сезона.");
}

let number = 0;

while (number <= 10) {
    number = prompt("Введите число (больше 10 для выхода):");
    number = Number(number);
}

console.log("Число больше 10 введено!");


// Цикл do-while для запроса ввода числа
do {
    number = prompt("Введите число (больше 10 для выхода):");
    number = Number(number);
} while (number <= 10);

console.log("Число больше 10 введено!");

