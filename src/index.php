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
    <style>
        :root {
            color-scheme: dark;
            --bg: #0c1222;
            --card: rgba(18, 28, 48, 0.82);
            --line: rgba(148, 180, 255, 0.18);
            --text: #e8eefc;
            --muted: #9aabc8;
            --accent: #7aa2ff;
            --accent-2: #5eead4;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 32px 20px;
            font-family: "Iowan Old Style", "Palatino Linotype", Palatino, Georgia, serif;
            color: var(--text);
            background:
                radial-gradient(900px 480px at 15% -10%, rgba(94, 234, 212, 0.18), transparent 60%),
                radial-gradient(800px 420px at 100% 0%, rgba(122, 162, 255, 0.22), transparent 55%),
                var(--bg);
        }

        main {
            width: min(640px, 100%);
            padding: 40px 36px 32px;
            border: 1px solid var(--line);
            border-radius: 28px;
            background: var(--card);
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.35);
            backdrop-filter: blur(16px);
        }

        .eyebrow {
            margin: 0 0 14px;
            font-family: ui-sans-serif, system-ui, sans-serif;
            font-size: 12px;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--accent-2);
        }

        h1 {
            margin: 0;
            font-size: clamp(36px, 6vw, 56px);
            font-weight: 500;
            line-height: 1.05;
            letter-spacing: -0.03em;
        }

        h1 span {
            display: block;
            background: linear-gradient(120deg, var(--accent), var(--accent-2));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        p.lead {
            margin: 18px 0 0;
            max-width: 34em;
            font-family: ui-sans-serif, system-ui, sans-serif;
            font-size: 17px;
            line-height: 1.55;
            color: var(--muted);
        }

        dl {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin: 32px 0 0;
        }

        div.stat {
            padding: 14px 14px 12px;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        dt {
            font-family: ui-sans-serif, system-ui, sans-serif;
            font-size: 11px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--muted);
        }

        dd {
            margin: 6px 0 0;
            font-family: ui-sans-serif, system-ui, sans-serif;
            font-size: 15px;
        }

        footer {
            margin-top: 28px;
            font-family: ui-sans-serif, system-ui, sans-serif;
            font-size: 13px;
            color: var(--muted);
        }

        @media (max-width: 640px) {
            main { padding: 28px 22px 24px; }
            dl { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <main>
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
        <footer>Если видите версию и время — контейнер живой.</footer>
    </main>
</body>
</html>
