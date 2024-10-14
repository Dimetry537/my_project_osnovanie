let count = 0;

const button = document.getElementById('click-button'); // Находим кнопку
const counterDisplay = document.getElementById('counter'); // Находим элемент для отображения счетчика

// Добавляем обработчик события 'click' на кнопку
button.addEventListener('click', function() {
    count++; // Увеличиваем значение счетчика
    counterDisplay.textContent = count; // Обновляем текст на странице
});

const emailInput = document.getElementById('email'); // Находим поле для ввода email
const errorMessage = document.getElementById('error-message'); // Находим элемент для сообщения об ошибке
const submitBtn = document.getElementById('submit-btn'); // Находим кнопку отправки

// Добавляем обработчик события 'input' для поля email
emailInput.addEventListener('input', function() {
    const emailValue = emailInput.value; // Получаем текущее значение email

    // Пример простого регулярного выражения для проверки email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(emailValue)) {
        // Если email некорректный, отображаем сообщение об ошибке и блокируем кнопку
        errorMessage.style.display = 'inline'; // Показываем сообщение об ошибке
        submitBtn.disabled = true; // Блокируем кнопку
    } else {
        // Если email корректный, скрываем сообщение об ошибке и разблокируем кнопку
        errorMessage.style.display = 'none'; // Скрываем сообщение об ошибке
        submitBtn.disabled = false; // Разблокируем кнопку
    }
});

let seconds = 0; // Переменная для хранения количества секунд
const timerDisplay = document.getElementById('timer'); // Находим элемент для отображения таймера

// Функция для обновления таймера
function updateTimer() {
    seconds++; // Увеличиваем счетчик секунд
    timerDisplay.textContent = seconds; // Обновляем текст на странице
}

// Запускаем таймер, который обновляет каждую секунду
setInterval(updateTimer, 1000);

