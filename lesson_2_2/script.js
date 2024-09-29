let firstName = 'Sergey';
let age = 42;
let lastName = 'Filimonov';
let city = 'Saint-Petersbourg';

console.log(typeof firstName);
console.log(typeof age);
console.log(typeof city);

let fullName = firstName + " " + lastName;

console.log(fullName);

let numberString = "123";

let number = Number(numberString);

let isInteger = Number.isInteger(number);

console.log(number);
console.log(isInteger);

let text = "JavaScript is fun!";

let substring = text.slice(13, 17);

let uppercaseSubstring = substring.toUpperCase();

console.log(uppercaseSubstring);

let product = "Ноутбук";
let price = 50000;

let message = `Цена на ${product} составляет ${price} рублей.`;

console.log(message);

let floatNumber = 7.56;

let roundedNumber = Math.round(floatNumber);

console.log(roundedNumber);

let num1 = 10;
let num2 = 15;

let isNum1Greater = num1 > num2;

console.log(isNum1Greater); 

let person = {
    name: "Алексей",
    age: 30,
    favoriteColor: "синий"
};

console.log(person);

let число = 3.14159265359;
let округленное = число.toFixed(2);

console.log(округленное);

let fruits = "apple, orange, banana";
let fruitArray = fruits.split(", ");

console.log(fruitArray);

let result = "hello" / 5;
let isResultNaN = Number.isNaN(result);

console.log("Result:", result);
console.log("Is result NaN?", isResultNaN);

let multilineText = `This is the first line.
This is the second line.
And this is the third line.
    This line is indented.
Here's a final line.`;

console.log(multilineText);

let booleanValue = true;
let stringValue = String(booleanValue);
let resultType = typeof stringValue;

console.log("Original boolean value:", booleanValue);
console.log("Converted to string:", stringValue);
console.log("Type of the result:", resultType);

let idSymbol = Symbol("id");

let object = {
  [idSymbol]: 1234,
  name: "Example Object"
};

console.log("Object:", object);
console.log("Symbol property:", object[idSymbol]);
console.log("String property:", object.name);

console.log("\nKeys in the object:");
for (let key in object) {
  console.log(key);
}

console.log("\nSymbol keys:");
console.log(Object.getOwnPropertySymbols(object));

let numbers = [5, 2, 8, 1, 9, 3, 7];

let arrayLength = numbers.length;

console.log("Исходный массив:", numbers);
console.log("Количество элементов в массиве:", arrayLength);

console.log("\nПеребор элементов массива:");
for (let i = 0; i < arrayLength; i++) {
    console.log(`Элемент ${i + 1}: ${numbers[i]}`);
}
