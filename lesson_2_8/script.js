// Поиск заголовка и изменение его текста
let heading = document.querySelector('h1');
heading.innerText = "Измененный заголовок";

// Поиск всех элементов списка
let listItems = document.querySelectorAll('ul li');

// Добавление порядкового номера к каждому элементу списка
listItems.forEach((item, index) => {
    item.innerText = `Элемент списка ${index + 1}`;
});

// Поиск изображения и изменение его атрибута src
let image = document.querySelector('#image');
image.setAttribute('src', 'https://picsum.photos/200');
image.setAttribute('alt', 'Новое изображение');

// Поиск ссылки и изменение ее атрибута href и текста
let link = document.querySelector('#my-link');
link.setAttribute('href', 'https://picsum.photos/id/237/200/300');
link.innerHTML = "Новая ссылка на другой сайт";

// Поиск списка <ul>
let ul = document.querySelector('#item-list');

// Поиск кнопки для добавления нового элемента
let addButton = document.querySelector('#add-item');

// Поиск кнопки для удаления последнего элемента
let removeButton = document.querySelector('#remove-item');

// Добавление нового элемента в список
addButton.addEventListener('click', () => {
    // Создаем новый элемент <li>
    let newItem = document.createElement('li');
    // Добавляем текст в новый элемент
    newItem.innerText = `Новый элемент списка ${ul.children.length + 1}`;
    // Добавляем новый элемент в конец списка
    ul.appendChild(newItem);
});

// Удаление последнего элемента из списка
removeButton.addEventListener('click', () => {
    // Проверяем, что список не пустой
    if (ul.children.length > 0) {
        // Удаляем последний элемент списка
        ul.removeChild(ul.lastElementChild);
    } else {
        alert("В списке нет элементов для удаления!");
    }
});

// Поиск абзаца
const paragraph = document.getElementById('paragraph');

// Поиск кнопки для изменения цвета текста
const colorButton = document.getElementById('change-color');

// Поиск кнопки для показа/скрытия абзаца
const toggleButton = document.getElementById('toggle-paragraph');

// Изменение цвета текста абзаца
colorButton.addEventListener('click', () => {
    // Меняем цвет текста на синий
    paragraph.style.color = paragraph.style.color === 'blue' ? 'black' : 'blue';
});

// Показать/скрыть абзац
toggleButton.addEventListener('click', () => {
    // Если элемент виден, скрываем его. Если скрыт — показываем.
    paragraph.style.display = paragraph.style.display === 'none' ? 'block' : 'none';
});

// Поиск элемента, размеры которого будем определять
const sizeElement = document.getElementById('size-element');

// Поиск кнопки для получения размеров
const sizeButton = document.getElementById('get-size');

// Поиск места для вывода результатов
const sizeOutput = document.getElementById('size-output');

// Обработчик нажатия на кнопку
sizeButton.addEventListener('click', () => {
    // Получаем размеры и координаты элемента
    const rect = sizeElement.getBoundingClientRect();

    // Выводим размеры и координаты в консоль (для отладки)
    console.log('Ширина:', rect.width);
    console.log('Высота:', rect.height);
    console.log('Координаты сверху:', rect.top);
    console.log('Координаты слева:', rect.left);

    // Выводим информацию на страницу
    sizeOutput.innerHTML = `
      <p>Ширина: ${rect.width}px</p>
      <p>Высота: ${rect.height}px</p>
      <p>Координаты сверху: ${rect.top}px</p>
      <p>Координаты слева: ${rect.left}px</p>
    `;
});

