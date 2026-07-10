<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<section class="mx-auto max-w-7xl px-6 py-12 lg:px-10 lg:py-16">
    <div class="mb-8">
        <a href="<?= esc(site_url('productos')) ?>" class="text-sm font-semibold text-karelia-deep transition hover:text-slate-900">
            Volver al catalogo
        </a>
    </div>

    <div class="grid gap-8 lg:grid-cols-[0.95fr_1.05fr] lg:items-start">
        <div class="rounded-[32px] border border-slate-100 bg-white p-6 shadow-card lg:p-8">
            <div class="overflow-hidden rounded-[28px] border border-slate-100 bg-slate-50">
                <img src="<?= esc($product['image']) ?>" alt="<?= esc($product['name']) ?>" class="h-full w-full object-cover">
            </div>
            <div class="mt-6 rounded-[28px] border border-slate-100 bg-slate-50 p-6">
                <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Ficha base</p>
                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Esta pagina toma como base la ficha visual original de modo_uso y la traduce a una experiencia web mas clara y navegable.
                </p>
            </div>
        </div>

        <div class="rounded-[32px] border border-slate-100 bg-white p-8 shadow-card lg:p-10">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-karelia-deep"><?= esc($product['category']) ?></p>
            <h1 class="mt-4 max-w-3xl font-serif text-4xl leading-tight text-slate-900 lg:text-6xl">
                <?= esc($product['name']) ?>
            </h1>
            <p class="mt-4 text-sm uppercase tracking-[0.24em] text-slate-400"><?= esc($product['line']) ?></p>
            <p class="mt-5 max-w-2xl text-base leading-8 text-slate-600 lg:text-lg">
                <?= esc($product['description']) ?>
            </p>

            <div class="mt-8 flex flex-wrap gap-4">
                <span class="rounded-full border border-slate-200 px-4 py-2 text-sm text-slate-600"><?= esc($product['size']) ?></span>
                <span class="rounded-full border border-slate-200 px-4 py-2 text-sm text-slate-600"><?= esc($product['price']) ?></span>
                <span class="rounded-full bg-karelia-nude px-4 py-2 text-sm font-medium text-karelia-deep"><?= esc($product['claim']) ?></span>
            </div>

            <div class="mt-8 flex flex-wrap gap-4">
                <a
                    href="<?= esc($contact['whatsappUrl']) ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center justify-center rounded-full bg-karelia-deep px-6 py-3 text-sm font-semibold text-white transition hover:bg-[#347983]"
                >
                    Comprar por WhatsApp
                </a>
                <a
                    href="#modo-de-uso"
                    class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-white px-6 py-3 text-sm font-semibold text-slate-700 transition hover:border-karelia-mint hover:text-karelia-deep"
                >
                    Ver modo de uso
                </a>
                <a
                    href="<?= esc(site_url('modo-uso/' . $product['slug'])) ?>"
                    class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-slate-50 px-6 py-3 text-sm font-semibold text-slate-700 transition hover:border-karelia-mint hover:bg-white hover:text-karelia-deep"
                >
                    Abrir ficha fullscreen
                </a>
            </div>
        </div>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 pb-12 lg:px-10 lg:pb-16">
    <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
        <?php foreach ($product['benefits'] as $benefit): ?>
            <article class="rounded-[28px] border border-slate-100 bg-white p-6 shadow-card">
                <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Beneficio</p>
                <p class="mt-3 text-sm leading-7 text-slate-600"><?= esc($benefit) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 pb-12 lg:px-10 lg:pb-16">
    <div class="grid gap-8 lg:grid-cols-[1fr_1fr]">
        <article class="rounded-[32px] border border-slate-100 bg-white p-8 shadow-card lg:p-10" id="ingredientes">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-karelia-deep">Ingredientes principales</p>
            <h2 class="mt-3 font-serif text-3xl text-slate-900 lg:text-4xl">Activos y soporte cosmetico</h2>
            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                <?php foreach ($product['ingredients'] as $ingredient): ?>
                    <div class="rounded-2xl border border-slate-100 bg-slate-50 px-5 py-4 text-sm leading-7 text-slate-600">
                        <?= esc($ingredient) ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </article>

        <article class="rounded-[32px] border border-slate-100 bg-white p-8 shadow-card lg:p-10">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-karelia-deep">Ideal para</p>
            <h2 class="mt-3 font-serif text-3xl text-slate-900 lg:text-4xl">Usuarios, zonas o necesidades</h2>
            <ul class="mt-8 space-y-4 text-sm leading-7 text-slate-600">
                <?php foreach ($product['ideal_for'] as $item): ?>
                    <li class="flex gap-3">
                        <span class="mt-2 h-2 w-2 rounded-full bg-karelia-deep"></span>
                        <span><?= esc($item) ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </article>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 pb-12 lg:px-10 lg:pb-16" id="modo-de-uso">
    <div class="rounded-[32px] border border-slate-100 bg-karelia-deep p-8 text-white shadow-card lg:p-10">
        <p class="text-xs font-semibold uppercase tracking-[0.3em] text-white/70">Modo de uso</p>
        <h2 class="mt-3 font-serif text-3xl lg:text-4xl">Aplicacion sugerida para una experiencia clara y consistente.</h2>
        <ol class="mt-8 grid gap-4 md:grid-cols-2">
            <?php foreach ($product['usage'] as $index => $step): ?>
                <li class="rounded-2xl border border-white/10 bg-white/10 p-5 text-sm leading-7 text-white/90">
                    <span class="mb-3 inline-flex h-8 w-8 items-center justify-center rounded-full border border-white/20 bg-white/10 text-xs font-semibold">
                        <?= esc((string) ($index + 1)) ?>
                    </span>
                    <p><?= esc($step) ?></p>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 pb-16 lg:px-10 lg:pb-24">
    <div class="mb-8 flex items-end justify-between gap-6">
        <div>
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-karelia-deep">Relacionados</p>
            <h2 class="mt-3 font-serif text-3xl text-slate-900 lg:text-4xl">Otros productos que podrian interesarte.</h2>
        </div>
        <a href="<?= esc(site_url('productos')) ?>" class="hidden text-sm font-semibold text-karelia-deep transition hover:text-slate-900 md:inline-flex">
            Ver catalogo completo
        </a>
    </div>

    <div class="grid gap-4 md:grid-cols-3">
        <?php foreach ($relatedProducts as $item): ?>
            <article class="overflow-hidden rounded-[28px] border border-slate-100 bg-white shadow-card">
                <a href="<?= esc(site_url('productos/' . $item['slug'])) ?>" class="block">
                    <div class="aspect-[4/3] overflow-hidden bg-slate-50">
                        <img src="<?= esc($item['image']) ?>" alt="<?= esc($item['name']) ?>" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <p class="text-xs uppercase tracking-[0.24em] text-slate-400"><?= esc($item['line']) ?></p>
                        <h3 class="mt-3 font-serif text-2xl text-slate-900"><?= esc($item['name']) ?></h3>
                        <p class="mt-4 text-sm leading-7 text-slate-600"><?= esc($item['summary']) ?></p>
                    </div>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?= $this->endSection() ?>
