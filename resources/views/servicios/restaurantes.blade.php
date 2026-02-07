@extends('layouts-web.main')

@section('seo')
   <title>{{ $titulo }} | Digitalización para Restaurantes y Gastronomía</title>
    <meta name="description" content="{{ $meta_desc }}">
    <meta name="keywords" content="seo local para restaurantes, menús digitales qr, marketing gastronómico, digitalización de restaurantes, google maps para negocios de comida">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph / Redes Sociales --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Experiencias Comerciales 360° para tu Restaurante | Solucion-e">
    <meta property="og:description" content="Dominamos el algoritmo local para llenar tus mesas. Menús QR dinámicos y estrategias de Google Maps Pro para el sector gastronómico.">
    <meta property="og:image" content="{{ asset('images/header4.webp') }}">

    @verbatim
        <script type="application/ld+json">
            {
                "@context": "https://schema.org/",
                "@type": "Service",
                "serviceType": "Digitalización Gastronómica y SEO Local",
                "description": "Estrategias de visibilidad para restaurantes. Menús QR dinámicos, optimización de Google Maps y sistemas de captación de comensales.",
                "provider": {
                    "@type": "LocalBusiness",
                    "name": "Solucion-e",
                    "image": "https://solucion-e.com.mx/images/header4.webp",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "León",
                        "addressRegion": "Guanajuato",
                        "addressCountry": "MX"
                    }
                },
                "areaServed": {
                    "@type": "Country",
                    "name": "Mexico"
                },
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "Soluciones Gastronómicas Digitales",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Menús Digitales QR Inteligentes",
                                "description": "Menús dinámicos auto-gestionables que mejoran la experiencia del comensal."
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Estrategia Google Maps Pro",
                                "description": "Posicionamiento en el 'Map Pack' para búsquedas de comida y restaurantes cercanos."
                            }
                        }
                    ]
                }
            }
        </script>
    @endverbatim

@endsection

@section('content')
    {{-- Hero Section --}}
        <section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 z-0">
                {{-- Sugerencia: Imagen de un restaurante elegante con iluminación tenue --}}
                <img src="{{ asset('images/header5.webp') }}"
                    class="w-full h-full object-cover opacity-80 grayscale"
                    alt="Marketing Gastronómico Solucion-e"
                    fetchpriority="high">
                <div class="absolute inset-0 bg-gradient-to-b from-gray-950 via-gray-950/60 to-gray-950"></div>
                <div class="absolute inset-0 bg-brand/5 mix-blend-color"></div>
            </div>

            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[400px] bg-brand/10 blur-[120px] rounded-full z-10"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-20 text-center">
                {{-- Badge --}}
                <span class="inline-block py-1 px-4 border border-brand/30 text-brand text-[10px] font-bold tracking-[0.4em] uppercase rounded-full mb-8 animate-pulse">
                    Digitalización Gastronómica
                </span>

                <h1 class="text-5xl md:text-7xl font-black mb-8 italic tracking-tighter leading-none text-white uppercase">
                    EXPERIENCIAS <br> <span class="text-brand">COMERCIALES 360°</span>
                </h1>

                <div class="max-w-3xl mx-auto space-y-6">
                    <p class="text-gray-400 text-lg md:text-xl font-light leading-relaxed">
                        Dominamos el <span class="text-white font-bold italic">Algoritmo Local</span> para llenar tus mesas.
                        Fusionamos el posicionamiento en <span class="text-white">Google Maps</span> con Menús Digitales inteligentes mediante <span class="text-brand font-semibold">Códigos QR Dinámicos</span>,
                        elevando la presencia de tu restaurante al siguiente nivel.
                    </p>

                    {{-- Los 3 Pilares Gastronómicos --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-8 text-left">
                        <div class="bg-white/5 border border-white/10 p-4 rounded-2xl backdrop-blur-sm">
                            <p class="text-brand font-mono text-[10px] mb-1">// ATRACCIÓN</p>
                            <p class="text-white text-xs font-bold uppercase">SEO Local & GMB Pro</p>
                        </div>
                        <div class="bg-white/5 border border-white/10 p-4 rounded-2xl backdrop-blur-sm">
                            <p class="text-brand font-mono text-[10px] mb-1">// EXPERIENCIA</p>
                            <p class="text-white text-xs font-bold uppercase">Menú QR Contactless</p>
                        </div>
                        <div class="bg-white/5 border border-white/10 p-4 rounded-2xl backdrop-blur-sm">
                            <p class="text-brand font-mono text-[10px] mb-1">// FIDELIDAD</p>
                            <p class="text-white text-xs font-bold uppercase">Reseñas e Interacción</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{-- Hero Section end --}}


    {{-- Sección: Estático vs Headless Inteligente --}}
        <section class="py-24 bg-gray-950 relative">
            <div class="max-w-7xl mx-auto px-6">

                <div class="mb-16 text-center lg:text-left">
                    <h2 class="text-brand font-mono text-sm mb-4">// EL FIN DE LAS PÁGINAS FIJAS</h2>
                    <h3 class="text-4xl md:text-5xl font-black text-white italic uppercase tracking-tighter leading-none">
                        TU MENÚ DEBE SER UN <br> <span class="text-brand">ORGANISMO VIVO</span>
                    </h3>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                    {{-- Columna: El Menú Estático (Páginas fijas/PDF) --}}
                    <div class="group p-10 bg-white/[0.02] border border-white/10 rounded-[40px] hover:bg-red-500/[0.02] hover:border-red-500/20 transition-all duration-500">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-12 h-12 rounded-full bg-red-500/10 flex items-center justify-center text-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636" />
                                </svg>
                            </div>
                            <h4 class="text-white font-bold uppercase tracking-widest">El Menú Estático</h4>
                        </div>

                        <ul class="space-y-6 text-gray-500 text-sm font-light">
                            <li class="flex gap-4">
                                <span class="text-red-500/50 font-mono">01</span>
                                <span><strong>Contenido Obsoleto:</strong> Si se agota un ingrediente o cambia un precio, tu página miente al cliente hasta que el programador "tenga tiempo" de actualizarla.</span>
                            </li>
                            <li class="flex gap-4">
                                <span class="text-red-500/50 font-mono">02</span>
                                <span><strong>Carga Pesada:</strong> Las páginas fijas suelen cargar imágenes sin optimizar, haciendo que el cliente pierda el hambre esperando.</span>
                            </li>
                            <li class="flex gap-4">
                                <span class="text-red-500/50 font-mono">03</span>
                                <span><strong>Invisibilidad Local:</strong> Un menú que no se actualiza pierde relevancia para el algoritmo de Google Maps.</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Columna: La Propuesta Solucion-e (Headless Inteligente) --}}
                    <div class="group p-10 bg-brand/5 border border-brand/20 rounded-[40px] hover:bg-brand/10 transition-all duration-500">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center text-brand">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                </svg>
                            </div>
                            <h4 class="text-brand font-bold uppercase tracking-widest">Solución Headless por Solucion-<span class="text-red-500">e</span></h4>
                        </div>

                        <ul class="space-y-6 text-gray-300 text-sm font-light">
                            <li class="flex gap-4">
                                <span class="text-brand font-mono">01</span>
                                <span><strong>Control Total (Live):</strong> Modifica platillos, activa "Sold Out" o cambia temporadas desde tu celular. El cliente lo ve reflejado al instante.</span>
                            </li>
                            <li class="flex gap-4">
                                <span class="text-brand font-mono">02</span>
                                <span><strong>Arquitectura Desacoplada:</strong> Separamos los datos del diseño. Esto significa velocidad ultra-rápida y una interfaz que luce perfecta en cualquier móvil.</span>
                            </li>
                            <li class="flex gap-4">
                                <span class="text-brand font-mono">03</span>
                                <span><strong>SEO Dinámico:</strong> Cada vez que actualizas tu menú, le envías una señal a Google de que tu negocio está activo, escalando posiciones en búsquedas locales.</span>
                            </li>
                        </ul>
                    </div>

                </div>

                {{-- Beneficio Extra: El "Modo Horario" --}}
                <div class="mt-8 p-6 border border-white/5 bg-white/[0.01] rounded-3xl text-center">
                    <p class="text-[11px] text-gray-500 uppercase tracking-[0.3em]">
                        Exclusivo: <span class="text-white">Automatización por Horarios.</span> Muestra desayunos por la mañana y coctelería por la noche de forma automática.
                    </p>
                </div>
            </div>
        </section>
    {{-- Sección: Estático vs Headless Inteligente end--}}

    {{-- Casos de Éxito / Restaurantes --}}
        <div class="max-w-7xl mx-auto px-6 py-20">
            <h2 class="text-brand font-mono text-sm mb-12">// 02. PROYECTOS GASTRONÓMICOS RECIENTES</h2>

            <div class="space-y-16">
                @forelse($proyectos as $proyecto)
                    <div class="bg-gray-900/30 border border-gray-800 p-8 md:p-12 rounded-[40px] hover:border-brand/30 transition-colors duration-500">
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                            <div class="lg:col-span-7 order-2 lg:order-1">
                                <h3 class="text-4xl font-black mb-8 text-white italic tracking-tighter uppercase">
                                    {{ $proyecto->cliente_nombre }}
                                </h3>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8 text-gray-400 italic">
                                    <div class="md:col-span-2 border-b border-gray-800 pb-6">
                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">Desafío Comercial</p>
                                        <div class="text-sm leading-relaxed">
                                            {!! $proyecto->problema !!}
                                        </div>
                                    </div>

                                    <div class="pt-2">
                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">Estrategia Digital</p>
                                        <div class="text-xs font-light leading-relaxed">
                                            {!! $proyecto->solucion !!}
                                        </div>
                                    </div>

                                    <div class="pt-2">
                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">Incremento de Flujo</p>
                                        <div class="text-xs font-light leading-relaxed">
                                            {!! $proyecto->resultado !!}
                                        </div>
                                    </div>
                                </div>

                                @if($proyecto->url)
                                    <div class="mt-10">
                                        <a href="{{ $proyecto->url }}" target="_blank"
                                        class="inline-flex items-center gap-2 text-[10px] font-bold tracking-widest text-brand group/link">
                                            <span>VER MENÚ DIGITAL QR</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 transform group-hover/link:translate-x-1 transition-transform">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                            </svg>
                                        </a>
                                    </div>
                                @endif
                            </div>

                            <div class="lg:col-span-5 order-1 lg:order-2">
                                <div class="relative group/img">
                                    <div class="absolute -inset-2 bg-brand/20 blur-2xl opacity-0 group-hover/img:opacity-100 transition duration-700 rounded-full"></div>
                                    <div class="relative overflow-hidden rounded-3xl border border-gray-800 shadow-2xl">
                                        @if($proyecto->imagen_proyecto)
                                            <img src="{{ asset('storage/' . $proyecto->imagen_proyecto) }}"
                                            alt="Digitalización de Restaurante: {{ $proyecto->cliente_nombre }} por Solucion-e"
                                            class="w-full h-[350px] object-cover filter grayscale hover:grayscale-0 transition duration-700 scale-105 hover:scale-100">
                                        @else
                                            <div class="w-full h-[350px] flex items-center justify-center bg-gray-950 text-gray-800 italic text-xs uppercase tracking-tighter">
                                                GASTRO_TECH / UI_MENU
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="py-20 text-center border border-dashed border-gray-800 rounded-[40px]">
                        <p class="text-gray-600 italic font-light font-mono text-xs uppercase tracking-widest">// Preparando la mesa digital...</p>
                    </div>
                @endforelse
            </div>
        </div>
    {{-- Casos de Éxito / Restaurantes end--}}

@endsection
