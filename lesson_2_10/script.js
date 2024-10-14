// Функция для отображения сообщений об ошибках
function displayError(message) {
    const errorDiv = document.getElementById('error-message');
    errorDiv.textContent = message;
    errorDiv.style.display = 'block'; // Показываем сообщение об ошибке
}

// Функция для получения данных пользователей
async function fetchUsers() {
    try {
        const response = await fetch('http://localhost:3000/users'); // URL вашего локального сервера
        if (!response.ok) {
            throw new Error('Ошибка при получении пользователей: ' + response.statusText);
        }
        const users = await response.json();
        displayUsers(users);
    } catch (error) {
        console.error('Ошибка при получении данных:', error);
        displayError('Не удалось загрузить пользователей. Пожалуйста, попробуйте позже.');
    }
}

// Функция для отображения пользователей в таблице
function displayUsers(users) {
    const tbody = document.getElementById('users-table').querySelector('tbody');
    tbody.innerHTML = ''; // Очищаем таблицу перед добавлением данных

    users.forEach(user => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <input type="text" value="${user.name}" data-id="${user.id}" disabled>
            </td>
            <td>
                <input type="email" value="${user.email}" data-id="${user.id}" disabled>
            </td>
            <td>
                <img src="${user.avatar || ''}" alt="Аватар" style="width: 50px; height: 50px;">
            </td>
            <td>
                <button onclick="editUser(${user.id})">Редактировать</button>
                <button onclick="updateUser(${user.id})" style="display:none;">Сохранить</button>
                <button onclick="deleteUser(${user.id})">Удалить</button>
            </td>
        `;
        tbody.appendChild(row);
    });
}

async function addUser(event) {
    event.preventDefault(); // Отменяем стандартное поведение формы

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;

    const newUser = { name, email };

    try {
        const response = await fetch('http://localhost:3000/users', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(newUser), // Преобразуем объект в JSON
        });

        if (!response.ok) {
            throw new Error('Ошибка при добавлении пользователя.');
        }

        // Обновляем список пользователей после добавления нового
        fetchUsers();

        // Очищаем поля ввода
        document.getElementById('user-form').reset();
    } catch (error) {
        console.error('Ошибка при добавлении пользователя:', error);
    }
}


// Функция для редактирования пользователя
function editUser(userId) {
    const row = document.querySelector(`input[data-id='${userId}']`).closest('tr');
    const inputs = row.querySelectorAll('input');
    inputs.forEach(input => {
        input.disabled = false; // Разрешаем редактирование
    });

    // Показываем кнопку "Сохранить" и скрываем "Редактировать"
    row.querySelector('button[onclick^="editUser"]').style.display = 'none';
    row.querySelector('button[onclick^="updateUser"]').style.display = 'inline';
}

// Функция для обновления пользователя
async function updateUser(userId) {
    const row = document.querySelector(`input[data-id='${userId}']`).closest('tr');
    const inputs = row.querySelectorAll('input');
    const updatedUser = {
        name: inputs[0].value,
        email: inputs[1].value,
    };

    try {
        const response = await fetch(`http://localhost:3000/users/${userId}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(updatedUser),
        });

        if (!response.ok) {
            throw new Error('Ошибка при обновлении пользователя: ' + response.statusText);
        }

        // Обновляем список пользователей после изменения
        fetchUsers();
    } catch (error) {
        console.error('Ошибка при обновлении пользователя:', error);
        displayError('Не удалось обновить пользователя. Пожалуйста, попробуйте позже.');
    }
}

// Функция для удаления пользователя
async function deleteUser(userId) {
    if (confirm('Вы уверены, что хотите удалить этого пользователя?')) {
        try {
            const response = await fetch(`http://localhost:3000/users/${userId}`, {
                method: 'DELETE',
            });

            if (!response.ok) {
                throw new Error('Ошибка при удалении пользователя: ' + response.statusText);
            }

            // Обновляем список пользователей после удаления
            fetchUsers();
        } catch (error) {
            console.error('Ошибка при удалении пользователя:', error);
            displayError('Не удалось удалить пользователя. Пожалуйста, попробуйте позже.');
        }
    }
};

// Обработчик отправки формы
document.getElementById('user-form').addEventListener('submit', addUser);

// Вызов функции для получения данных при загрузке страницы
window.onload = fetchUsers;
