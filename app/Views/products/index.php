<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<section class="mx-auto max-w-7xl px-6 py-12 lg:px-10 lg:py-16">
    <div class="overflow-hidden rounded-[32px] border border-slate-100 bg-white shadow-card">
        <div class="grid gap-0 border-b border-slate-100 sm:grid-cols-4 lg:grid-cols-6">
            <?php foreach (array_slice($products, 0, 6) as $bannerProduct): ?>
                <div class="relative h-28 overflow-hidden border-b border-slate-100 sm:h-36 lg:h-44 lg:border-b-0 lg:border-r lg:last:border-r-0">
                    <img
                        src="<?= esc($bannerProduct['image']) ?>"
                        alt="<?= esc($bannerProduct['name']) ?>"
                        class="h-full w-full object-cover object-top"
                    >
                    <div class="absolute inset-0 bg-gradient-to-b from-white/10 via-transparent to-slate-950/10"></div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="p-8 lg:p-10">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-karelia-deep">Catalogo completo</p>
            <h1 class="mt-4 max-w-4xl font-serif text-4xl leading-tight text-slate-900 lg:text-6xl">
                Todas las fichas individuales construidas desde el material de modo_uso.
            </h1>
            <p class="mt-5 max-w-3xl text-base leading-8 text-slate-600 lg:text-lg">
                El banner toma fragmentos reales de tus productos para que el catalogo se sienta mas editorial, mas vivo y conectado con la identidad visual de cada linea.
            </p>
        </div>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 pb-16 lg:px-10 lg:pb-24">
    <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
        <?php foreach ($products as $product): ?>
            <article class="overflow-hidden rounded-[28px] border border-slate-100 bg-white shadow-card">
                <a href="<?= esc(site_url('productos/' . $product['slug'])) ?>" class="block">
                    <div class="aspect-[4/3] overflow-hidden bg-slate-50">
                        <img src="<?= esc($product['image']) ?>" alt="<?= esc($product['name']) ?>" class="h-full w-full object-cover transition duration-500 hover:scale-[1.02]">
                    </div>
                    <div class="p-6">
                        <p class="text-xs uppercase tracking-[0.24em] text-slate-400"><?= esc($product['line']) ?></p>
                        <h2 class="mt-3 font-serif text-2xl text-slate-900"><?= esc($product['name']) ?></h2>
                        <p class="mt-4 text-sm leading-7 text-slate-600"><?= esc($product['summary']) ?></p>
                        <div class="mt-6 flex items-center justify-between">
                            <span class="text-sm font-semibold text-karelia-deep">Ver ficha</span>
                            <span class="rounded-full bg-slate-50 px-3 py-1 text-xs uppercase tracking-[0.2em] text-slate-500"><?= esc($product['size']) ?></span>
                        </div>
                    </div>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?= $this->endSection() ?>
