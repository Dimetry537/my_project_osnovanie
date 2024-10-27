<?php
session_start(); // Начинаем сессию

// Проверка, был ли отправлен POST-запрос
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем данные из формы и защищаем от XSS
    $name = htmlspecialchars($_POST['name']);
    $review = htmlspecialchars($_POST['review']);
    $rating = (int)$_POST['rating'];

    // Инициализируем массив отзывов в сессии, если он не существует
    if (!isset($_SESSION['reviews'])) {
        $_SESSION['reviews'] = [];
    }

    // Добавляем новый отзыв в массив
    $_SESSION['reviews'][] = [
        'name' => $name,
        'review' => $review,
        'rating' => $rating
    ];

    // Перенаправляем обратно на страницу с формой
    header('Location: index.html');
    exit();
}
