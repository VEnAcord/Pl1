<?php
// НЕБЕЗПЕЧНЕ З'ЄДНАННЯ — спрощене, без захисту
$pdo = new PDO("sqlite:database.db");

// Створюємо таблицю, якщо немає
$pdo->exec("
    CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT,
        password TEXT
    );
");

// Додаємо користувача admin:admin
$pdo->exec("
    INSERT INTO users (username, password)
    SELECT 'admin', 'admin'
    WHERE NOT EXISTS (SELECT 1 FROM users WHERE username='admin');
");
?>

