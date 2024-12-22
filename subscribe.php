<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    // Здесь можно добавить код для сохранения email в базу данных или отправки письма
    $message = "Спасибо за подписку!";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подписка - Кодерская Компания</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li><a href="about.php">О нас</a></li>
                <li><a href="contact.php">Контакты</a></li>
                <li><a href="subscribe.php">Подписка</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Подписка на рассылку</h1>
        <form method="post" action="subscribe.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Подписаться</button>
        </form>
        <?php
        if (isset($message)) {
            echo "<p>$message</p>";
        }
        ?>
    </main>
</body>
</html>
