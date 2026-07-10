<?php

namespace App\Controllers;

use App\Libraries\ProductCatalog;

class Home extends BaseController
{
    public function index(): string
    {
        $heroProduct = ProductCatalog::find('serum-antiacne');
        $products = ProductCatalog::all();

        $concerns = [
            [
                'name' => 'Acne y sebo',
                'description' => 'Soluciones para piel mixta a grasa con enfoque dermocosmetico y textura ligera.',
                'cta' => 'Descubrir rutina',
            ],
            [
                'name' => 'Antiedad',
                'description' => 'Activos como retinol, peptidos e hidratantes de soporte para una piel mas firme.',
                'cta' => 'Ver productos',
            ],
            [
                'name' => 'Manchas y luminosidad',
                'description' => 'Formulas aclarantes y unificadoras para una apariencia mas pareja y radiante.',
                'cta' => 'Explorar linea',
            ],
            [
                'name' => 'Cuidado capilar',
                'description' => 'Propuestas funcionales para cuero cabelludo, densidad y fortalecimiento visual.',
                'cta' => 'Conocer mas',
            ],
        ];

        $commitments = [
            [
                'title' => 'Solo lo esencial',
                'description' => 'Formulas con una seleccion enfocada de ingredientes y una narrativa clara de beneficio.',
            ],
            [
                'title' => 'Pensado para piel sensible',
                'description' => 'La comunicacion de producto prioriza tolerancia, claridad de uso y confort de rutina.',
            ],
            [
                'title' => 'Belleza respaldada por ciencia',
                'description' => 'Cada linea conecta con ciencia aplicada, profesionalismo y bienestar visible.',
            ],
        ];

        $articles = [
            [
                'title' => 'Como construir una rutina para piel con tendencia acneica',
                'tag' => 'Guia facial',
            ],
            [
                'title' => 'Retinol, niacinamida y peptidos: como conviven en una rutina premium',
                'tag' => 'Activos clinicos',
            ],
            [
                'title' => 'Cuidado capilar cosmetico: textura, constancia y resultados visuales',
                'tag' => 'Hair care',
            ],
        ];

        return view('home/index', [
            'title' => 'Karelia Labs Clinical',
            'metaDescription' => 'Skincare clinico y productos dermatologicos premium con una experiencia e-commerce minimalista.',
            'heroProduct' => $heroProduct,
            'products' => $products,
            'concerns' => $concerns,
            'commitments' => $commitments,
            'articles' => $articles,
            'contact' => $this->contactData(),
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
