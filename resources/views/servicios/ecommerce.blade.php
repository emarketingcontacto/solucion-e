@extends('layouts-web.main')

@section('seo')
   <title>{{ $titulo }} | E-commerce de Alto Rendimiento</title>
    <meta name="description" content="{{ $meta_desc }}">
    <meta name="keywords" content="laravel lunar, ecommerce headless, tiendas online de alto rendimiento, desarrollo ecommerce mexico, plataformas de venta escalables">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph / Redes Sociales --}}
    <meta property="og:type" content="article"> {{-- Usamos article porque es un servicio específico --}}
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="E-commerce de Alto Rendimiento | Solucion-e">
    <meta property="og:description" content="No creamos simples carritos; desarrollamos ecosistemas de venta masiva con infraestructura Headless y Laravel Lunar.">
    <meta property="og:image" content="{{ asset('images/og-welcome.webp') }}">

    @verbatim
        <script type="application/ld+json">
            {
                "@context": "https://schema.org/",
                "@type": "Service",
                "serviceType": "Desarrollo de E-commerce Headless y de Alto Rendimiento",
                "provider": {
                    "@type": "LocalBusiness",
                    "name": "Solucion-e",
                    "image": "https://solucion-e.com.mx/images/og-welcome.webp",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "León",
                        "addressRegion": "Guanajuato",
                        "addressCountry": "MX"
                    }
                },
                "description": "Ingeniería de ecosistemas de venta masiva. Especialistas en Laravel Lunar, arquitecturas Headless y sincronización de stock en tiempo real.",
                "areaServed": {
                    "@type": "Country",
                    "name": "Mexico"
                },
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "Soluciones E-commerce Premium",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Desarrollo Laravel Lunar Headless",
                                "description": "Arquitecturas desacopladas para velocidad ultra rápida y escalabilidad infinita."
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Integración de Pasarelas y ERP",
                                "description": "Conexión fluida con sistemas de pago masivo y control de inventarios avanzados."
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Optimización de Tasa de Conversión (CRO)",
                                "description": "Diseño de interfaces orientadas a la venta y flujos de checkout optimizados."
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
            {{-- Imagen de Fondo: Sugiero una imagen de un almacén tech o código limpio --}}
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/header2.webp') }}"
                    class="w-full h-full object-cover opacity-80 grayscale"
                    alt="E-commerce Solucion-e"
                    fetchpriority="high">
                <div class="absolute inset-0 bg-gradient-to-b from-gray-950 via-gray-950/60 to-gray-950"></div>
                <div class="absolute inset-0 bg-brand/5 mix-blend-color"></div>
            </div>

            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[400px] bg-brand/10 blur-[120px] rounded-full z-10"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-20 text-center">
                {{-- Badge --}}
                <span class="inline-block py-1 px-4 border border-brand/30 text-brand text-[10px] font-bold tracking-[0.4em] uppercase rounded-full mb-8 animate-pulse">
                    Infraestructura Headless
                </span>

                <h1 class="text-5xl md:text-7xl font-black mb-8 italic tracking-tighter leading-none text-white uppercase">
                    E-COMMERCE DE <br> <span class="text-brand">ALTO RENDIMIENTO</span>
                </h1>

                <div class="max-w-3xl mx-auto space-y-6">
                    <p class="text-gray-400 text-lg md:text-xl font-light leading-relaxed">
                        No creamos simples carritos de compra; desarrollamos <span class="text-white font-bold italic">Ecosistemas de Venta</span>.
                        Implementamos la potencia de <span class="text-white">Laravel Lunar</span> para ofrecer arquitecturas escalables,
                        seguras y optimizadas para <span class="text-brand font-semibold">Conversión Masiva</span>.
                    </p>

                    {{-- Los 3 Pilares de E-commerce --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-8 text-left">
                        <div class="bg-white/5 border border-white/10 p-4 rounded-2xl backdrop-blur-sm">
                            <p class="text-brand font-mono text-[10px] mb-1">// VELOCIDAD</p>
                            <p class="text-white text-xs font-bold uppercase">Lunar Headless Engine</p>
                        </div>
                        <div class="bg-white/5 border border-white/10 p-4 rounded-2xl backdrop-blur-sm">
                            <p class="text-brand font-mono text-[10px] mb-1">// ESCALABILIDAD</p>
                            <p class="text-white text-xs font-bold uppercase">Gestión de Stock Avanzada</p>
                        </div>
                        <div class="bg-white/5 border border-white/10 p-4 rounded-2xl backdrop-blur-sm">
                            <p class="text-brand font-mono text-[10px] mb-1">// PAGOS</p>
                            <p class="text-white text-xs font-bold uppercase">Checkout Multi-Pasarela</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{-- Hero Section End --}}

    {{-- Sección Explicativa: ¿Qué es Headless? --}}
        <section class="py-24 bg-gray-950/50 relative overflow-hidden">
            {{-- Decoración de fondo --}}
            <div class="absolute top-0 right-0 w-96 h-96 bg-brand/5 blur-[120px] rounded-full"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                    {{-- Columna Izquierda: La Analogía --}}
                    <div>
                        <h2 class="text-brand font-mono text-sm mb-4">// LA ARQUITECTURA DEL FUTURO</h2>
                        <h3 class="text-4xl font-black text-white italic uppercase tracking-tighter mb-8 leading-none">
                            EL PODER DE UNA ESTRATEGIA <br> <span class="text-brand">HEADLESS</span>
                        </h3>

                        <div class="space-y-6 text-gray-400 font-light">
                            <p class="text-lg">
                                Imagina que tu tienda online es un <span class="text-white font-bold italic">cuerpo humano</span>:
                            </p>

                            <div class="flex gap-4">
                                <div class="flex-none w-1 h-auto bg-brand/50"></div>
                                <p>
                                    <strong class="text-white uppercase text-xs block mb-1">El Cuerpo (Backend)</strong>
                                    Es el cerebro donde vive la lógica, el inventario y tus datos de venta.
                                </p>
                            </div>

                            <div class="flex gap-4">
                                <div class="flex-none w-1 h-auto bg-white/30"></div>
                                <p>
                                    <strong class="text-white uppercase text-xs block mb-1">La Cabeza (Frontend)</strong>
                                    Es la cara que ve tu cliente: el diseño, la velocidad y la experiencia visual.
                                </p>
                            </div>

                            <p class="pt-4 italic border-t border-gray-800">
                                En plataformas como Shopify o WordPress, el cuerpo y la cabeza están pegados. Si el sitio recibe miles de visitas, el cerebro se agota cargando todo al mismo tiempo.
                                <span class="text-brand">En Solucion-e, los separamos para un rendimiento sin límites.</span>
                            </p>
                        </div>
                    </div>

                    {{-- Columna Derecha: Beneficios de Élite --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        {{-- Card 1 --}}
                        <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">
                            <span class="text-brand font-bold text-xl mb-4 block">01</span>
                            <h4 class="text-white font-bold uppercase text-xs mb-2">Velocidad Rayo</h4>
                            <p class="text-gray-500 text-[11px] leading-relaxed">Navegación instantánea mediante APIs, eliminando tiempos de carga tradicionales.</p>
                        </div>
                        {{-- Card 2 --}}
                        <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">
                            <span class="text-brand font-bold text-xl mb-4 block">02</span>
                            <h4 class="text-white font-bold uppercase text-xs mb-2">Omnicanalidad</h4>
                            <p class="text-gray-500 text-[11px] leading-relaxed">Un solo "cerebro" para alimentar tu web, tu App móvil y puntos de venta físicos.</p>
                        </div>
                        {{-- Card 3 --}}
                        <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">
                            <span class="text-brand font-bold text-xl mb-4 block">03</span>
                            <h4 class="text-white font-bold uppercase text-xs mb-2">Seguridad Total</h4>
                            <p class="text-gray-500 text-[11px] leading-relaxed">Arquitectura desacoplada que blinda el motor de tu negocio contra ataques externos.</p>
                        </div>
                        {{-- Card 4 --}}
                        <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">
                            <span class="text-brand font-bold text-xl mb-4 block">04</span>
                            <h4 class="text-white font-bold uppercase text-xs mb-2">Diseño Infinito</h4>
                            <p class="text-gray-500 text-[11px] leading-relaxed">Sin plantillas. Construimos la interfaz exacta que tu marca necesita para destacar.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    {{-- Sección Explicativa: ¿Qué es Headless? end--}}

    {{-- Casos de Éxito E-commerce --}}
        <div class="max-w-7xl mx-auto px-6 py-20">
            <h2 class="text-brand font-mono text-sm mb-12">// 02. PLATAFORMAS EN PRODUCCIÓN</h2>

            <div class="space-y-16">
                @forelse($proyectos as $proyecto)
                    <div class="bg-gray-900/30 border border-gray-800 p-8 md:p-12 rounded-[40px] hover:border-brand/30 transition-colors duration-500">
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                            {{-- Info del Proyecto --}}
                            <div class="lg:col-span-7 order-2 lg:order-1">
                                <h3 class="text-4xl font-black mb-8 text-white italic tracking-tighter uppercase">
                                    {{ $proyecto->cliente_nombre }}
                                </h3>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8 text-gray-400 italic">
                                    <div class="md:col-span-2 border-b border-gray-800 pb-6">
                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">Necesidad del Negocio</p>
                                        <div class="text-sm leading-relaxed">
                                            {!! $proyecto->problema !!}
                                        </div>
                                    </div>

                                    <div class="pt-2">
                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">Tecnología Lunar</p>
                                        <div class="text-xs font-light leading-relaxed">
                                            {!! $proyecto->solucion !!}
                                        </div>
                                    </div>

                                    <div class="pt-2">
                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">Resultado en Ventas</p>
                                        <div class="text-xs font-light leading-relaxed">
                                            {!! $proyecto->resultado !!}
                                        </div>
                                    </div>
                                </div>

                                @if($proyecto->url)
                                    <div class="mt-10">
                                        <a href="{{ $proyecto->url }}" target="_blank"
                                        class="inline-flex items-center gap-2 text-[10px] font-bold tracking-widest text-brand group/link">
                                            <span>EXPLORAR TIENDA ONLINE</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 transform group-hover/link:translate-x-1 transition-transform">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                            </svg>
                                        </a>
                                    </div>
                                @endif
                            </div>

                            {{-- Imagen del Proyecto --}}
                            <div class="lg:col-span-5 order-1 lg:order-2">
                                <div class="relative group/img">
                                    <div class="absolute -inset-2 bg-brand/20 blur-2xl opacity-0 group-hover/img:opacity-100 transition duration-700 rounded-full"></div>
                                    <div class="relative overflow-hidden rounded-3xl border border-gray-800 shadow-2xl">
                                        @if($proyecto->imagen_proyecto)
                                            <a href="{{$proyecto->url}}" target="_blank">
                                                <img src="{{ asset('storage/' . $proyecto->imagen_proyecto) }}"
                                                alt="Plataforma E-commerce para {{ $proyecto->cliente_nombre }} desarrollada por Solucion-e"
                                                class="w-full h-[350px] object-cover filter grayscale hover:grayscale-0 transition duration-700 scale-105 hover:scale-100">
                                            </a>
                                        @else
                                            <div class="w-full h-[350px] flex items-center justify-center bg-gray-950 text-gray-800 italic text-xs">
                                                SOLUCION-E / ECOM_UI_SNAPSHOT
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="py-20 text-center border border-dashed border-gray-800 rounded-[40px]">
                        <p class="text-gray-600 italic font-light font-mono text-xs uppercase tracking-widest">// Implementando nuevos motores de venta...</p>
                    </div>
                @endforelse
            </div>
        </div>
    {{-- Casos de Éxito End --}}

@endsection
