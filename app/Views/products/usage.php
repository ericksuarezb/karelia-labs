<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#f4efe8">
    <title><?= esc($title ?? ($product['name'] . ' | Modo de uso')) ?></title>
    <meta name="description" content="<?= esc($metaDescription ?? ('Ficha visual de ' . $product['name'])) ?>">
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            min-height: 100%;
            background: #f4efe8;
        }

        body {
            font-family: Inter, sans-serif;
        }

        .page {
            min-height: 100vh;
            display: grid;
            place-items: center;
            background:
                radial-gradient(circle at top, rgba(99, 199, 198, 0.10), transparent 28%),
                linear-gradient(180deg, #fbfaf7 0%, #f4efe8 100%);
        }

        .design {
            display: block;
            width: 100%;
            height: auto;
            max-width: min(100vw, 980px);
            object-fit: contain;
            box-shadow: 0 24px 60px rgba(24, 50, 55, 0.12);
        }

        @media (max-width: 768px) {
            .design {
                max-width: 100vw;
                box-shadow: none;
            }
        }
    </style>
</head>
<body>
    <main class="page" aria-label="Ficha visual de modo de uso de <?= esc($product['name']) ?>">
        <img
            class="design"
            src="<?= esc($product['image']) ?>"
            alt="Ficha visual de <?= esc($product['name']) ?> de Karelia Labs"
            decoding="async"
            fetchpriority="high"
        >
    </main>
</body>
</html>
