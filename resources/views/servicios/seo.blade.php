@extends('layouts-web.main')

@section('seo')
    <title>{{ $titulo }} | Estrategias de Posicionamiento e IA Search</title>
    <meta name="description" content="{{ $meta_desc }}">
    <meta name="keywords" content="seo local méxico, posicionamiento google maps, google my business pro, optimización para inteligencia artificial, captación de clientes digital">
    <link rel="canonical" href="{{ url()->current() }}">
    {{-- Open Graph / Redes Sociales --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Dominio Local Inteligente: Haz que te encuentren | Solucion-e">
    <meta property="og:description" content="No solo hacemos webs; diseñamos sistemas de captación. SEO de élite, Google My Business y optimización para búsquedas con IA.">
    <meta property="og:image" content="{{ asset('images/og-seo.webp') }}">
    @verbatim
        <script type="application/ld+json">
            {
                "@context": "https://schema.org/",
                "@type": "Service",
                "serviceType": "SEO Local y Optimización para IA",
                "description": "Sistemas de captación inteligente: Fusión de Google Business Profile con arquitecturas web optimizadas para SEO y motores de búsqueda de nueva generación.",
                "provider": {
                    "@type": "LocalBusiness",
                    "name": "Solucion-e",
                    "image": "https://solucion-e.com.mx/images/og-seo.webp",
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
                    "name": "Catálogo de SEO & Visibilidad",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Gestión de Google My Business Pro",
                                "description": "Optimización avanzada de perfiles locales para dominar el 'Map Pack' de Google."
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Optimización para IA Search",
                                "description": "Estrategias para que tu negocio sea la respuesta principal en ChatGPT, Perplexity y Gemini."
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Arquitectura Web SEO Premium",
                                "description": "Desarrollo de landing pages de alta conversión con carga ultra rápida."
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
            {{-- Imagen de Fondo con Filtro --}}
            <div class="absolute inset-0 z-0">

                <img src="{{ asset('images/header3.webp') }}"
                    class="w-full h-full object-cover opacity-80 grayscale"
                    alt="SEO Local Solucion-e"
                    fetchpriority="high">
                {{-- Overlay Gradiente con tu color Brand --}}
                <div class="absolute inset-0 bg-gradient-to-b from-gray-950 via-gray-950/60 to-gray-950"></div>
                <div class="absolute inset-0 bg-brand/5 mix-blend-color"></div>
            </div>

            {{-- Decoración: Brillo Neón --}}
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[400px] bg-brand/10 blur-[120px] rounded-full z-10"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-20 text-center">
                {{-- Badge --}}
                <span class="inline-block py-1 px-4 border border-brand/30 text-brand text-[10px] font-bold tracking-[0.4em] uppercase rounded-full mb-8 animate-pulse">
                    Ecosistema de Élite
                </span>

                <h1 class="text-5xl md:text-7xl font-black mb-8 italic tracking-tighter leading-none text-white uppercase">
                    DOMINIO LOCAL <br> <span class="text-brand">INTELIGENTE</span>
                </h1>

                <div class="max-w-3xl mx-auto space-y-6">
                    <p class="text-gray-400 text-lg md:text-xl font-light leading-relaxed">
                        No construimos simples sitios web; diseñamos <span class="text-white font-bold italic">Sistemas de Captación</span>.
                        Fusionamos la potencia de <span class="text-white">Google My Business</span> con arquitecturas optimizadas para
                        <span class="text-brand font-semibold">IA y SEO Directo</span>.
                    </p>

                    {{-- Los 3 Pilares --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-8 text-left">
                        <div class="bg-white/5 border border-white/10 p-4 rounded-2xl backdrop-blur-sm">
                            <p class="text-brand font-mono text-[10px] mb-1">// VISIBILIDAD</p>
                            <p class="text-white text-xs font-bold uppercase">GMB & IA Search</p>
                        </div>
                        <div class="bg-white/5 border border-white/10 p-4 rounded-2xl backdrop-blur-sm">
                            <p class="text-brand font-mono text-[10px] mb-1">// CONVERSIÓN</p>
                            <p class="text-white text-xs font-bold uppercase">Web SEO Premium</p>
                        </div>
                        <div class="bg-white/5 border border-white/10 p-4 rounded-2xl backdrop-blur-sm">
                            <p class="text-brand font-mono text-[10px] mb-1">// CONTROL</p>
                            <p class="text-white text-xs font-bold uppercase">Dashboard Filament</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{-- Hero Section End --}}

    {{-- SEO Local Inteligente --}}
        <section class="py-24 bg-gray-950/50 relative overflow-hidden">
            {{-- Decoración de fondo --}}
            <div class="absolute top-0 right-0 w-96 h-96 bg-brand/5 blur-[120px] rounded-full"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                    {{-- Columna Izquierda: El Concepto de Faro --}}
                    <div>
                        <h2 class="text-brand font-mono text-sm mb-4">// DOMINIO GEOGRÁFICO</h2>
                        <h3 class="text-4xl font-black text-white italic uppercase tracking-tighter mb-8 leading-none">
                            NO SOLO APARECES, <br> <span class="text-brand">DOMINAS TU ZONA</span>
                        </h3>

                        <div class="space-y-6 text-gray-400 font-light">
                            <p class="text-lg">
                                Tener un negocio sin SEO Local es como tener una tienda de lujo en un <span class="text-white font-bold italic">callejón sin salida</span>:
                            </p>

                            <div class="flex gap-4">
                                <div class="flex-none w-1 h-auto bg-brand/50"></div>
                                <p>
                                    <strong class="text-white uppercase text-xs block mb-1">El Faro (Google Business Profile)</strong>
                                    Es tu señal de auxilio. Reclamamos, optimizamos y blindamos tu ficha para que Google te considere la opción #1 en tu ciudad.
                                </p>
                            </div>

                            <div class="flex gap-4">
                                <div class="flex-none w-1 h-auto bg-white/30"></div>
                                <p>
                                    <strong class="text-white uppercase text-xs block mb-1">El Destino (Landing Page SEO)</strong>
                                    No los mandamos a una red social. Los llevamos a una página de aterrizaje rápida y persuasiva diseñada para convertir clics en llamadas.
                                </p>
                            </div>

                            <p class="pt-4 italic border-t border-gray-800 text-sm">
                                La mayoría solo rellena el nombre y teléfono. <span class="text-brand">En Solucion-<span class="text-red-600">e</span>, inyectamos ingeniería de datos</span> para que tu negocio aparezca justo cuando el cliente tiene la tarjeta en la mano.
                            </p>
                        </div>
                    </div>

                    {{-- Columna Derecha: El Check-list de Autoridad --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        {{-- Card 1: GMB Pro --}}
                        <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="text-brand font-bold text-xl">01</span>
                                <h4 class="text-white font-bold uppercase text-[10px] tracking-widest">Optimización GMB</h4>
                            </div>
                            <p class="text-gray-500 text-[11px] leading-relaxed">
                                Categorización profunda, horarios inteligentes y carga de imágenes geolocalizadas para engañar al algoritmo a tu favor.
                            </p>
                        </div>

                        {{-- Card 2: Contenido Estratégico --}}
                        <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="text-brand font-bold text-xl">02</span>
                                <h4 class="text-white font-bold uppercase text-[10px] tracking-widest">Posteo Local</h4>
                            </div>
                            <p class="text-gray-500 text-[11px] leading-relaxed">
                                Publicaciones periódicas de productos y ofertas que mantienen tu ficha "viva" y relevante para los ojos de Google.
                            </p>
                        </div>

                        {{-- Card 3: Ingeniería Web --}}
                        <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="text-brand font-bold text-xl">03</span>
                                <h4 class="text-white font-bold uppercase text-[10px] tracking-widest">SEO On-Page</h4>
                            </div>
                            <p class="text-gray-500 text-[11px] leading-relaxed">
                                Desarrollamos una Landing Page auto-gestionable ultrarrápida con micro-datos (Schema) para el Local Pack de Google.
                            </p>
                        </div>

                        {{-- Card 4: Gestión de Reputación --}}
                        <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="text-brand font-bold text-xl">04</span>
                                <h4 class="text-white font-bold uppercase text-[10px] tracking-widest">Autoridad Local</h4>
                            </div>
                            <p class="text-gray-500 text-[11px] leading-relaxed">
                                Estrategia para reclamar el negocio y gestión de reseñas que elevan tu "Social Proof" por encima de tu competencia directa.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    {{-- SEO Local Inteligente end --}}

    {{-- Casos de exito --}}
        <div class="max-w-7xl mx-auto px-6 py-20">
            <h2 class="text-brand font-mono text-sm mb-12">// 02. CASOS DE ÉXITO RECIENTES</h2>

            <div class="space-y-16"> {{-- Espaciado entre Cards --}}
                @forelse($proyectos as $proyecto)
                    {{-- La Card con el fondo que te gusta --}}
                    <div class="bg-gray-900/30 border border-gray-800 p-8 md:p-12 rounded-[40px] hover:border-brand/30 transition-colors duration-500">

                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                            {{-- Columna de Información (7 de 12 espacios) --}}
                            <div class="lg:col-span-7 order-2 lg:order-1">
                                <h3 class="text-4xl font-black mb-8 text-white italic tracking-tighter uppercase">
                                    {{ $proyecto->cliente_nombre }}
                                </h3>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8 text-gray-400 italic">
                                    <div class="md:col-span-2 border-b border-gray-800 pb-6">
                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">El Desafío</p>
                                        <div class="text-sm leading-relaxed">
                                            {!! $proyecto->problema !!}
                                        </div>
                                    </div>

                                    <div class="pt-2">
                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">Estrategia</p>
                                        <div class="text-xs font-light leading-relaxed">
                                            {!! $proyecto->solucion !!}
                                        </div>
                                    </div>

                                    <div class="pt-2">
                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">Impacto</p>
                                        <div class="text-xs font-light leading-relaxed">
                                            {!! $proyecto->resultado !!}
                                        </div>
                                    </div>
                                </div>

                                @if($proyecto->url_gmb)
                                    <div class="mt-10">
                                        <a href="{{ $proyecto->url_gmb }}" target="_blank"
                                        class="inline-flex items-center gap-2 text-[10px] font-bold tracking-widest text-brand group/link">
                                            <span>VERIFICAR RESEÑA EN GOOGLE MAPS</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 transform group-hover/link:translate-x-1 transition-transform">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                            </svg>
                                        </a>
                                    </div>
                                @endif
                            </div>

                            {{-- Columna de la Imagen (5 de 12 espacios) --}}
                            <div class="lg:col-span-5 order-1 lg:order-2">
                                <div class="relative group/img">
                                    {{-- Resplandor sutil detrás de la foto --}}
                                    <div class="absolute -inset-2 bg-brand/20 blur-2xl opacity-0 group-hover/img:opacity-100 transition duration-700 rounded-full"></div>

                                    <div class="relative overflow-hidden rounded-3xl border border-gray-800 shadow-2xl">
                                        @if($proyecto->imagen_proyecto)
                                            <a href="{{$proyecto->url}}" target="_blank">
                                                <img src="{{ asset('storage/' . $proyecto->imagen_proyecto) }}"
                                                alt="Proyecto SEO Local para {{ $proyecto->cliente_nombre }} por Solucion-e"
                                                class="w-full h-[350px] object-cover filter grayscale hover:grayscale-0 transition duration-700 scale-105 hover:scale-100">
                                            </a>
                                        @else
                                            <div class="w-full h-[350px] flex items-center justify-center bg-gray-950 text-gray-800 italic text-xs">
                                                SOLUCION-E / PROYECTO_IMG
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div> {{-- Fin Grid --}}
                    </div> {{-- Fin Card --}}

                @empty
                    <div class="py-20 text-center border border-dashed border-gray-800 rounded-[40px]">
                        <p class="text-gray-600 italic font-light font-mono text-xs uppercase tracking-widest">// Cargando nuevos hitos tecnológicos...</p>
                    </div>
                @endforelse
            </div>
        </div>
    {{-- Casos de exito end --}}

@endsection
