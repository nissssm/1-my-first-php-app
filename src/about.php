<?php
$software = $_SERVER['SERVER_SOFTWARE'] ?? 'Apache';
$file = basename(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Внутри контейнера</title>
    <link rel="stylesheet" href="/site.css">
</head>
<body>
    <main>
        <nav>
            <a href="/">Главная</a>
            <a class="active" href="/about.php">Внутри</a>
        </nav>
        <p class="eyebrow"><?= htmlspecialchars($software, ENT_QUOTES, 'UTF-8') ?></p>
        <h1>Эта страница<span>тоже из образа</span></h1>
        <p class="lead">Она лежит рядом с индексом. В браузере её адрес — /about.php, потому что при сборке оба файла копируются в папку сайта.</p>
        <ol class="steps">
            <li><span>01</span> Файлы уехали на GitHub.</li>
            <li><span>02</span> На сервере git pull забрал их в папку проекта.</li>
            <li><span>03</span> docker build упаковал папку в образ my-app.</li>
            <li><span>04</span> docker run запустил контейнер, и Apache открыл эту страницу.</li>
        </ol>
        <footer>Сейчас открыт файл <?= htmlspecialchars($file, ENT_QUOTES, 'UTF-8') ?>.</footer>
    </main>
</body>
</html>
