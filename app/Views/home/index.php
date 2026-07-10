<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<section class="mx-auto max-w-7xl px-6 py-12 lg:px-10 lg:py-16">
    <div class="grid gap-8 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
        <div class="rounded-[32px] border border-slate-100 bg-white p-8 shadow-card lg:p-10">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">
                Skincare clinico con experiencia premium
            </p>
            <h1 class="mt-4 max-w-3xl font-serif text-4xl leading-tight text-slate-900 lg:text-6xl">
                Una tienda pensada para encontrar rutina, tratamiento cosmetico y confianza visual.
            </h1>
            <p class="mt-5 max-w-2xl text-base leading-8 text-slate-600 lg:text-lg">
                Inspirada en la fluidez de las grandes marcas dermocosmeticas, Karelia Labs organiza sus productos por necesidad real, lineas de tratamiento y asesoramiento directo.
            </p>

            <div class="mt-8 flex flex-wrap gap-4">
                <a
                    href="#productos"
                    class="inline-flex items-center justify-center rounded-full bg-karelia-deep px-6 py-3 text-sm font-semibold text-white transition hover:bg-[#347983]"
                >
                    Explorar productos
                </a>
                <a
                    href="<?= esc($contact['whatsappUrl']) ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-white px-6 py-3 text-sm font-semibold text-slate-700 transition hover:border-karelia-mint hover:text-karelia-deep"
                >
                    Quiero asesoria
                </a>
            </div>

            <div class="mt-10 grid gap-4 sm:grid-cols-3">
                <div class="rounded-2xl border border-slate-100 bg-slate-50 px-5 py-4">
                    <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Diagnostico de compra</p>
                    <p class="mt-2 text-sm leading-7 text-slate-600">Entradas por preocupacion, no solo por tipo de producto.</p>
                </div>
                <div class="rounded-2xl border border-slate-100 bg-slate-50 px-5 py-4">
                    <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Activos protagonistas</p>
                    <p class="mt-2 text-sm leading-7 text-slate-600">Rutinas explicadas con lenguaje claro y enfoque clinico.</p>
                </div>
                <div class="rounded-2xl border border-slate-100 bg-slate-50 px-5 py-4">
                    <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Asesoria directa</p>
                    <p class="mt-2 text-sm leading-7 text-slate-600">WhatsApp y contacto visibles para resolver dudas rapido.</p>
                </div>
            </div>
        </div>

        <aside class="grid gap-4">
            <div class="rounded-[32px] border border-slate-100 bg-white p-8 shadow-card lg:p-10" id="producto" x-data="{ selectedTab: 'benefits' }">
                <div class="overflow-hidden rounded-[28px] border border-slate-100 bg-slate-50">
                    <img src="<?= esc($heroProduct['image']) ?>" alt="<?= esc($heroProduct['name']) ?>" class="h-full w-full object-cover">
                </div>

                <div class="mt-8 flex items-start justify-between gap-4">
                    <div>
                        <p class="text-sm text-slate-500">Producto protagonista</p>
                        <p class="mt-2 font-serif text-3xl text-slate-900"><?= esc($heroProduct['name']) ?></p>
                    </div>
                    <div class="rounded-2xl border border-karelia-mint/40 bg-karelia-mint/10 px-4 py-3 text-right">
                        <p class="text-xs uppercase tracking-[0.22em] text-karelia-deep"><?= esc($heroProduct['size']) ?></p>
                        <p class="mt-1 text-sm font-medium text-slate-700"><?= esc($heroProduct['price']) ?></p>
                    </div>
                </div>

                <p class="mt-6 text-base leading-8 text-slate-600">
                    <?= esc($heroProduct['summary']) ?>
                </p>

                <div class="mt-8 flex gap-3 border-b border-slate-100 pb-4 text-sm">
                    <button
                        type="button"
                        class="rounded-full px-4 py-2 transition"
                        :class="selectedTab === 'benefits' ? 'bg-karelia-deep text-white' : 'bg-slate-50 text-slate-500'"
                        @click="selectedTab = 'benefits'"
                    >
                        Beneficios
                    </button>
                    <button
                        type="button"
                        class="rounded-full px-4 py-2 transition"
                        :class="selectedTab === 'skin' ? 'bg-karelia-deep text-white' : 'bg-slate-50 text-slate-500'"
                        @click="selectedTab = 'skin'"
                    >
                        Tipo de piel
                    </button>
                </div>

                <div class="mt-6" x-show="selectedTab === 'benefits'" x-cloak>
                    <ul class="space-y-4 text-sm leading-7 text-slate-600">
                        <li class="flex gap-3">
                            <span class="mt-2 h-2 w-2 rounded-full bg-karelia-mint"></span>
                            <?= esc($heroProduct['benefits'][0]) ?>
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-2 h-2 w-2 rounded-full bg-karelia-mint"></span>
                            <?= esc($heroProduct['benefits'][1]) ?>
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-2 h-2 w-2 rounded-full bg-karelia-mint"></span>
                            <?= esc($heroProduct['benefits'][2]) ?>
                        </li>
                    </ul>
                </div>

                <div class="mt-6" x-show="selectedTab === 'skin'" x-cloak>
                    <ul class="space-y-4 text-sm leading-7 text-slate-600">
                        <?php foreach ($heroProduct['ideal_for'] as $item): ?>
                            <li class="flex gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-karelia-deep"></span>
                                <?= esc($item) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <a
                    href="<?= esc(site_url('productos/' . $heroProduct['slug'])) ?>"
                    class="mt-8 inline-flex items-center justify-center rounded-full bg-karelia-deep px-6 py-3 text-sm font-semibold text-white transition hover:bg-[#347983]"
                >
                    Ver ficha completa
                </a>
            </div>
        </aside>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 pb-12 lg:px-10 lg:pb-16" id="necesidades">
    <div class="mb-8 flex flex-col gap-3 lg:flex-row lg:items-end lg:justify-between">
        <div>
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-karelia-deep">Entrada por necesidad</p>
            <h2 class="mt-3 max-w-3xl font-serif text-3xl text-slate-900 lg:text-5xl">
                Encuentra la linea correcta segun lo que quieres mejorar en tu piel o cabello.
            </h2>
        </div>
        <p class="max-w-xl text-sm leading-7 text-slate-500">
            La experiencia se organiza como una asesoria de compra: primero la preocupacion, luego los productos y finalmente el activo clave.
        </p>
    </div>

    <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
        <?php foreach ($concerns as $concern): ?>
            <article class="rounded-[28px] border border-slate-100 bg-white p-6 shadow-card">
                <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Necesidad</p>
                <h3 class="mt-3 font-serif text-2xl text-slate-900"><?= esc($concern['name']) ?></h3>
                <p class="mt-4 text-sm leading-7 text-slate-600"><?= esc($concern['description']) ?></p>
                <a href="#productos" class="mt-6 inline-flex text-sm font-semibold text-karelia-deep transition hover:text-slate-900">
                    <?= esc($concern['cta']) ?>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 pb-12 lg:px-10 lg:pb-16" id="productos">
    <div class="mb-8 flex flex-col gap-3 lg:flex-row lg:items-end lg:justify-between">
        <div>
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-karelia-deep">Productos destacados</p>
            <h2 class="mt-3 max-w-3xl font-serif text-3xl text-slate-900 lg:text-5xl">
                Un portafolio organizado por lineas, beneficios y sensaciones de uso.
            </h2>
        </div>
        <a href="<?= esc(site_url('productos')) ?>" class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-karelia-mint hover:text-karelia-deep">
            Ver catalogo completo
        </a>
    </div>

    <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
        <?php foreach ($products as $item): ?>
            <article class="overflow-hidden rounded-[28px] border border-slate-100 bg-white shadow-card">
                <a href="<?= esc(site_url('productos/' . $item['slug'])) ?>" class="block">
                    <div class="aspect-[4/3] overflow-hidden bg-slate-50">
                        <img src="<?= esc($item['image']) ?>" alt="<?= esc($item['name']) ?>" class="h-full w-full object-cover transition duration-500 hover:scale-[1.02]">
                    </div>
                    <div class="p-6">
                        <p class="text-xs uppercase tracking-[0.24em] text-slate-400"><?= esc($item['line']) ?></p>
                        <h3 class="mt-3 font-serif text-2xl text-slate-900"><?= esc($item['name']) ?></h3>
                        <p class="mt-4 text-sm leading-7 text-slate-600"><?= esc($item['summary']) ?></p>
                        <div class="mt-6 flex items-center justify-between">
                            <span class="text-sm font-semibold text-karelia-deep transition hover:text-slate-900">Ver ficha individual</span>
                            <span class="rounded-full bg-slate-50 px-3 py-1 text-xs uppercase tracking-[0.2em] text-slate-500"><?= esc($item['size']) ?></span>
                        </div>
                    </div>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 pb-12 lg:px-10 lg:pb-16">
    <div class="rounded-[32px] border border-slate-100 bg-karelia-deep p-8 text-white shadow-card lg:p-10">
        <div class="grid gap-8 lg:grid-cols-[1.2fr_0.8fr] lg:items-center">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-white/70">Rutina guiada</p>
                <h2 class="mt-3 max-w-2xl font-serif text-3xl lg:text-5xl">
                    No necesitas adivinar tu rutina: podemos orientarte segun preocupacion, textura y objetivo visual.
                </h2>
            </div>
            <div class="flex flex-wrap gap-4 lg:justify-end">
                <a
                    href="<?= esc($contact['whatsappUrl']) ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center justify-center rounded-full bg-white px-6 py-3 text-sm font-semibold text-karelia-deep transition hover:bg-slate-100"
                >
                    Quiero mi rutina
                </a>
                <a
                    href="#ingredientes"
                    class="inline-flex items-center justify-center rounded-full border border-white/20 bg-white/10 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/15"
                >
                    Ver activos
                </a>
            </div>
        </div>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 pb-12 lg:px-10 lg:pb-16" id="ingredientes">
    <div class="grid gap-8 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
        <div class="rounded-[32px] border border-slate-100 bg-white p-8 shadow-card lg:p-10">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-karelia-deep">
                <?= esc($heroProduct['category']) ?>
            </p>
            <h2 class="mt-4 max-w-xl font-serif text-3xl leading-tight text-slate-900 lg:text-5xl">
                Activos clinicos explicados con una lectura simple y visual.
            </h2>
            <p class="mt-4 max-w-2xl text-base leading-8 text-slate-600 lg:text-lg">
                Inspirado en la claridad editorial de las marcas dermocosmeticas, pero adaptado a Karelia Labs: menos ruido, mas jerarquia y una relacion directa entre activo, beneficio y uso.
            </p>

            <div class="mt-10 grid gap-4 sm:grid-cols-2">
                <?php foreach (array_slice($heroProduct['benefits'], 0, 4) as $highlight): ?>
                    <div class="rounded-2xl border border-slate-100 bg-slate-50 px-5 py-4 text-sm leading-7 text-slate-600">
                        <?= esc($highlight) ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="grid gap-4 lg:grid-cols-12 lg:grid-rows-2">
        <article class="rounded-[28px] border border-slate-100 bg-white p-7 shadow-card lg:col-span-5 lg:row-span-2">
            <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Formula protagonista</p>
            <h3 class="mt-3 font-serif text-3xl text-slate-900">Retinol + Niacinamida</h3>
            <p class="mt-4 text-sm leading-7 text-slate-600">
                Una combinacion pensada para estimular renovacion visible mientras acompana a la barrera cutanea con soporte calmante y uniformidad del tono.
            </p>
            <div class="mt-8 grid gap-3">
                <div class="rounded-2xl border border-slate-100 bg-slate-50 p-4">
                    <p class="text-xs uppercase tracking-[0.24em] text-karelia-deep">Objetivo</p>
                    <p class="mt-2 text-sm leading-7 text-slate-600">Reducir apariencia de lineas finas, textura desigual y opacidad.</p>
                </div>
                <div class="rounded-2xl border border-slate-100 bg-karelia-nude/60 p-4">
                    <p class="text-xs uppercase tracking-[0.24em] text-karelia-deep">Sensacion</p>
                    <p class="mt-2 text-sm leading-7 text-slate-600">Acabado limpio, ligero y apropiado para una rutina de noche sofisticada.</p>
                </div>
            </div>
        </article>

        <?php foreach ($heroProduct['ingredients'] as $ingredient): ?>
            <article class="rounded-[28px] border border-slate-100 bg-white p-6 shadow-card lg:col-span-3">
                <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Activo</p>
                <h3 class="mt-3 font-serif text-2xl text-slate-900"><?= esc($ingredient) ?></h3>
                <p class="mt-4 text-sm leading-7 text-slate-600">Activo destacado dentro de la ficha tecnica original de este producto.</p>
            </article>
        <?php endforeach; ?>

        <article class="rounded-[28px] border border-slate-100 bg-karelia-deep p-7 text-white shadow-card lg:col-span-4" id="uso">
            <p class="text-xs uppercase tracking-[0.24em] text-white/70">Modo de uso</p>
            <h3 class="mt-3 font-serif text-3xl">Aplicacion progresiva y precisa.</h3>
            <ol class="mt-6 space-y-4 text-sm leading-7 text-white/90">
                <?php foreach ($heroProduct['usage'] as $index => $step): ?>
                    <li class="flex gap-4">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-white/20 bg-white/10 text-xs font-semibold">
                            <?= esc((string) ($index + 1)) ?>
                        </span>
                        <span><?= esc($step) ?></span>
                    </li>
                <?php endforeach; ?>
            </ol>
        </article>
        </div>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 pb-12 lg:px-10 lg:pb-16" id="compromisos">
    <div class="mb-8 flex flex-col gap-3 lg:flex-row lg:items-end lg:justify-between">
        <div>
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-karelia-deep">Compromisos</p>
            <h2 class="mt-3 max-w-3xl font-serif text-3xl text-slate-900 lg:text-5xl">
                Una pagina mas confiable cuando la ciencia y la claridad pesan tanto como la estetica.
            </h2>
        </div>
        <p class="max-w-xl text-sm leading-7 text-slate-500">
            Esta seccion toma la idea de “confianza medica” y la adapta a tus lineas: menos promesa vacia, mas lenguaje de formulacion, uso y bienestar.
        </p>
    </div>

    <div class="grid gap-4 md:grid-cols-3">
        <?php foreach ($commitments as $commitment): ?>
            <article class="rounded-[28px] border border-slate-100 bg-white p-7 shadow-card">
                <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Compromiso</p>
                <h3 class="mt-3 font-serif text-2xl text-slate-900"><?= esc($commitment['title']) ?></h3>
                <p class="mt-4 text-sm leading-7 text-slate-600"><?= esc($commitment['description']) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 pb-16 lg:px-10 lg:pb-24">
    <div class="mb-8 flex flex-col gap-3 lg:flex-row lg:items-end lg:justify-between">
        <div>
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-karelia-deep">Contenido y educacion</p>
            <h2 class="mt-3 max-w-3xl font-serif text-3xl text-slate-900 lg:text-5xl">
                Articulos, guias y contenido que acompañan la venta en lugar de interrumpirla.
            </h2>
        </div>
        <p class="max-w-xl text-sm leading-7 text-slate-500">
            Otro gesto tomado de la referencia: la tienda no solo vende, tambien educa y orienta.
        </p>
    </div>

    <div class="grid gap-4 md:grid-cols-3">
        <?php foreach ($articles as $article): ?>
            <article class="rounded-[28px] border border-slate-100 bg-white p-7 shadow-card">
                <p class="text-xs uppercase tracking-[0.24em] text-slate-400"><?= esc($article['tag']) ?></p>
                <h3 class="mt-3 font-serif text-2xl leading-tight text-slate-900"><?= esc($article['title']) ?></h3>
                <a href="#contacto" class="mt-6 inline-flex text-sm font-semibold text-karelia-deep transition hover:text-slate-900">
                    Solicitar recomendacion relacionada
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="mx-auto max-w-7xl px-6 pb-16 lg:px-10 lg:pb-24" id="contacto">
    <div class="grid gap-6 lg:grid-cols-[0.95fr_1.05fr]">
        <article class="rounded-[32px] border border-slate-100 bg-white p-8 shadow-card lg:p-10">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-karelia-deep">Contacto</p>
            <h2 class="mt-3 max-w-md font-serif text-3xl text-slate-900 lg:text-5xl">
                Acompañamos cada compra con una asesoria mas humana y precisa.
            </h2>
            <p class="mt-5 max-w-xl text-sm leading-8 text-slate-600 lg:text-base">
                Si quieres ayuda para elegir una rutina, resolver dudas sobre activos o solicitar atencion personalizada, puedes escribirnos directamente.
            </p>

            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                <div class="rounded-2xl border border-slate-100 bg-slate-50 p-5">
                    <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Correo</p>
                    <p class="mt-3 text-sm font-medium text-slate-700"><?= esc($contact['email']) ?></p>
                </div>
                <div class="rounded-2xl border border-slate-100 bg-slate-50 p-5">
                    <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Telefono</p>
                    <p class="mt-3 text-sm font-medium text-slate-700"><?= esc($contact['phone']) ?></p>
                </div>
                <div class="rounded-2xl border border-slate-100 bg-slate-50 p-5">
                    <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Horario</p>
                    <p class="mt-3 text-sm font-medium text-slate-700"><?= esc($contact['hours']) ?></p>
                </div>
                <div class="rounded-2xl border border-slate-100 bg-slate-50 p-5">
                    <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Ubicacion</p>
                    <p class="mt-3 text-sm font-medium text-slate-700"><?= esc($contact['city']) ?></p>
                </div>
            </div>
        </article>

        <article class="rounded-[32px] border border-slate-100 bg-karelia-nude/60 p-8 shadow-card lg:p-10">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-karelia-deep">Canal preferente</p>
            <h3 class="mt-3 font-serif text-3xl text-slate-900 lg:text-4xl">
                Respuesta agil por WhatsApp para consulta y venta.
            </h3>
            <p class="mt-5 text-sm leading-8 text-slate-600 lg:text-base">
                El boton abre un mensaje precargado para iniciar la conversacion de forma rapida, ideal para pedidos, recomendaciones o seguimiento.
            </p>

            <div class="mt-8 rounded-[28px] border border-white/70 bg-white p-6">
                <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Mensaje precargado</p>
                <p class="mt-4 text-sm leading-8 text-slate-600">
                    Hola, me interesa recibir asesoria sobre sus productos dermatologicos y skincare clinico.
                </p>
            </div>

            <div class="mt-8 flex flex-wrap gap-4">
                <a
                    href="<?= esc($contact['whatsappUrl']) ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center justify-center rounded-full bg-karelia-deep px-6 py-3 text-sm font-semibold text-white transition hover:bg-[#347983]"
                >
                    <?= esc($contact['whatsappLabel']) ?>
                </a>
                <a
                    href="mailto:<?= esc($contact['email']) ?>"
                    class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-white px-6 py-3 text-sm font-semibold text-slate-700 transition hover:border-karelia-mint hover:text-karelia-deep"
                >
                    Enviar correo
                </a>
            </div>
        </article>
    </div>
</section>
<?= $this->endSection() ?>
