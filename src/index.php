<?php
$phpVersion = PHP_VERSION;
$sapi = PHP_SAPI;
$time = (new DateTimeImmutable('now'))->format('d.m.Y H:i');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Первый контейнер на PHP</title>
    <link rel="stylesheet" href="/site.css">
</head>
<body>
    <main>
        <nav>
            <a class="active" href="/">Главная</a>
            <a href="/about.php">Внутри</a>
        </nav>
        <p class="eyebrow">Docker · Apache · PHP <?= htmlspecialchars($phpVersion, ENT_QUOTES, 'UTF-8') ?></p>
        <h1>Первый контейнер<span>на PHP</span></h1>
        <p class="lead">Страница отдаётся из контейнера. Apache принял запрос, PHP собрал этот экран и вернул его браузеру.</p>
        <dl>
            <div class="stat">
                <dt>PHP</dt>
                <dd><?= htmlspecialchars($phpVersion, ENT_QUOTES, 'UTF-8') ?></dd>
            </div>
            <div class="stat">
                <dt>SAPI</dt>
                <dd><?= htmlspecialchars($sapi, ENT_QUOTES, 'UTF-8') ?></dd>
            </div>
            <div class="stat">
                <dt>Время</dt>
                <dd><?= htmlspecialchars($time, ENT_QUOTES, 'UTF-8') ?></dd>
            </div>
        </dl>
        <footer>Если видите версию и время — контейнер живой. Вторая страница лежит <a href="/about.php">внутри</a>.</footer>
    </main>
</body>
</html>
