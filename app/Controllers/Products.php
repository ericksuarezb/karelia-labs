<?php

namespace App\Controllers;

use App\Libraries\ProductCatalog;
use CodeIgniter\Exceptions\PageNotFoundException;

class Products extends BaseController
{
    public function index(): string
    {
        return view('products/index', [
            'title' => 'Catalogo Karelia Labs',
            'metaDescription' => 'Catalogo completo de productos dermocosmeticos y skincare clinico Karelia Labs.',
            'products' => ProductCatalog::all(),
            'contact' => $this->contactData(),
        ]);
    }

    public function show(string $slug): string
    {
        $product = ProductCatalog::find($slug);

        if ($product === null) {
            throw PageNotFoundException::forPageNotFound();
        }

        $relatedProducts = array_values(array_filter(
            ProductCatalog::all(),
            static fn (array $item): bool => $item['slug'] !== $slug
        ));

        return view('products/show', [
            'title' => $product['name'] . ' | Karelia Labs',
            'metaDescription' => $product['summary'],
            'product' => $product,
            'relatedProducts' => array_slice($relatedProducts, 0, 3),
            'contact' => $this->contactData(),
        ]);
    }

    public function usage(string $slug): string
    {
        $product = ProductCatalog::find($slug);

        if ($product === null) {
            throw PageNotFoundException::forPageNotFound();
        }

        return view('products/usage', [
            'title' => $product['name'] . ' | Modo de uso',
            'metaDescription' => 'Ficha visual fullscreen de ' . $product['name'] . ' para acceso directo por QR.',
            'product' => $product,
        ]);
    }

    /**
     * @return array<string, string>
     */
    private function contactData(): array
    {
        $whatsAppPhone = '5215512009769';
        $whatsAppMessage = 'Hola, me interesa recibir asesoria sobre sus productos dermatologicos y skincare clinico.';

        return [
            'email' => 'contacto@karelialabs.com',
            'phone' => '+52 1 55 1200 9769',
            'hours' => 'Lunes a Viernes · 9:00 a 18:00',
            'city' => 'Ciudad de Mexico, MX',
            'whatsappLabel' => 'Escribenos por WhatsApp',
            'whatsappUrl' => 'https://wa.me/' . $whatsAppPhone . '?text=' . rawurlencode($whatsAppMessage),
        ];
    }
}
