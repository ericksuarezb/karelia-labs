<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Karelia Labs Clinical') ?></title>
    <meta
        name="description"
        content="<?= esc($metaDescription ?? 'Skincare clinico y productos dermatologicos premium.') ?>"
    >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet"
    >
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        karelia: {
                            mint: '#63C7C6',
                            deep: '#3F8E96',
                            gray: '#A8A8AD',
                            nude: '#F4EFE8',
                            white: '#FFFFFF',
                        },
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                    boxShadow: {
                        card: '0 16px 40px rgba(63, 142, 150, 0.08)',
                    },
                },
            },
        };
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>
<body class="bg-stone-50 font-sans text-slate-800 antialiased">
    <div class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(99,199,198,0.10),_transparent_34%),linear-gradient(to_bottom,_#ffffff,_#f8f8f7)]">
        <header class="border-b border-slate-100 bg-white/90 backdrop-blur">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-10">
                <div class="flex items-center gap-4">
                    <img
                        src="<?= esc(base_url('assets/images/logo.jpeg')) ?>"
                        alt="Karelia Labs"
                        class="h-14 w-14 rounded-2xl border border-slate-100 object-cover"
                    >
                    <div>
                        <p class="font-serif text-2xl tracking-wide text-karelia-deep">Karelia Labs</p>
                        <p class="mt-1 text-xs uppercase tracking-[0.28em] text-slate-400">Clinical Skincare</p>
                    </div>
                </div>
                <nav class="hidden items-center gap-8 text-sm text-slate-500 md:flex">
                    <a href="<?= esc(base_url('/#necesidades')) ?>" class="transition hover:text-karelia-deep">Necesidades</a>
                    <a href="<?= esc(site_url('productos')) ?>" class="transition hover:text-karelia-deep">Productos</a>
                    <a href="<?= esc(base_url('/#ingredientes')) ?>" class="transition hover:text-karelia-deep">Activos</a>
                    <a href="<?= esc(base_url('/#compromisos')) ?>" class="transition hover:text-karelia-deep">Compromisos</a>
                    <a href="<?= esc(base_url('/#contacto')) ?>" class="transition hover:text-karelia-deep">Contacto</a>
                </nav>
            </div>
        </header>

        <main>
            <?= $this->renderSection('content') ?>
        </main>

        <?php if (isset($contact['whatsappUrl'])): ?>
            <a
                href="<?= esc($contact['whatsappUrl']) ?>"
                target="_blank"
                rel="noopener noreferrer"
                class="fixed bottom-5 right-5 inline-flex items-center gap-3 rounded-full border border-emerald-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 shadow-card transition hover:-translate-y-0.5 hover:border-emerald-300 hover:text-karelia-deep"
                aria-label="<?= esc($contact['whatsappLabel']) ?>"
            >
                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-500 text-white">
                    W
                </span>
                <span class="hidden sm:inline"><?= esc($contact['whatsappLabel']) ?></span>
            </a>
        <?php endif; ?>
    </div>
</body>
</html>
