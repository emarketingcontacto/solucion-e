@extends('layouts-web.main')

@section('seo')
    <title>{{ $titulo }}</title>
    <meta name="description" content="{{ $meta_desc }}">
    <link rel="canonical" href="{{ url()->current() }}">
    {{-- Open Graph / Redes Sociales --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{$titulo}}">
    <meta property="og:description" content="{{$meta_desc}}">
    <meta property="og:image" content="{{ asset('images/og-seo.webp') }}">

    {{-- Schema --}}
        @verbatim
            <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": "Service",
                        "@id": "https://solucion-e.com.mx/seo-local/#service",
                        "name": "SEO Local en León",
                        "url": "https://solucion-e.com.mx/seo-local/",
                        "serviceType": "SEO Local",
                        "description": "Optimización de la presencia de negocios en Google Business Profile y búsquedas locales para mejorar su visibilidad cuando clientes de su zona buscan los productos o servicios que ofrecen.",
                        "provider": {
                            "@id": "https://solucion-e.com.mx/#organization"
                        },
                        "areaServed": {
                            "@type": "City",
                            "name": "León",
                            "containedInPlace": {
                                "@type": "AdministrativeArea",
                                "name": "Guanajuato"
                            }
                        }
                    },
                    {
                        "@type": [
                            "Organization",
                            "LocalBusiness"
                        ],
                        "@id": "https://solucion-e.com.mx/#organization",
                        "name": "Solucion-e",
                        "url": "https://solucion-e.com.mx/",
                        "logo": "https://solucion-e.com.mx/images/logo.png",
                        "areaServed": {
                            "@type": "City",
                            "name": "León"
                        },
                        "address": {
                            "@type": "PostalAddress",
                            "addressLocality": "León",
                            "addressRegion": "Guanajuato",
                            "addressCountry": "MX"
                        }
                    }
                ]
            }
            </script>
        @endverbatim
    {{-- Schema --}}
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
                    SEO LOCAL PARA NEGOCIOS
                </span>

                <h1 class="text-5xl md:text-7xl font-black mb-8 italic tracking-tighter leading-none text-white uppercase">
                   <span class="text-brand"> seo local en león</span><br>
                    <span class="text-4xl">para que tu negocio sea más fácil de encontrar</span>
                </h1>

                <div class="max-w-3xl mx-auto space-y-6">
                    <p class="text-gray-400 text-lg md:text-xl font-light leading-relaxed">
                        Optimizamos la presencia de tu negocio en <span class="text-white font-bold italic"> Google Business Profile</span>
                        y búsquedas locales para <span class="text-brand font-semibold"> aumentar su visibilidad</span> cuando clientes de tu zona buscan lo que ofreces.
                    </p>

                    {{-- CTAs --}}
                        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                            {{-- CTA Principal --}}
                            <a
                                href="#contacto"
                                class="group relative inline-flex items-center justify-center gap-3 overflow-hidden rounded-xl bg-brand px-8 py-4 text-sm font-bold uppercase tracking-widest text-gray-950 transition-all duration-300 hover:scale-[1.03] hover:shadow-lg hover:shadow-brand/20 active:scale-95"

                                aria-label="Mejorar la presencia de mi negocio en Google"
                            >
                                <span>
                                    Mejorar mi presencia en Google
                                </span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="2"
                                    stroke="currentColor"
                                    class="h-4 w-4"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M19 9l-7 7-7-7"
                                    />
                                </svg>
                            </a>
                            {{-- CTA Secundario --}}
                            <a
                                href="#como-funciona"
                                class="group overflow-hidden inline-flex items-center justify-center gap-3 rounded-xl border border-white/15 bg-white/5 px-8 py-4 text-sm font-bold uppercase tracking-widest text-white backdrop-blur-sm transition-all duration-300 hover:border-brand/50 hover:bg-brand/10 hover:text-brand active:scale-95"
                                aria-label="Ver cómo funciona el SEO Local"
                            >
                                <span class="relative z-10">
                                    Ver cómo funciona
                                </span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="2.5"
                                    stroke="currentColor"
                                    class="relative z-10 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                                    />
                                </svg>
                                {{-- Shimmer --}}
                                <div class="absolute inset-0 flex h-full w-full justify-center [transform:skew(-20deg)]">
                                    <div class="relative h-full w-10 bg-white/30 blur-md animate-[shimmer_2.5s_infinite]"></div>
                                </div>
                            </a>
                        </div>
                    {{-- CTAs end --}}
                </div>
            </div>
        </section>
    {{-- Hero Section End --}}

    {{-- Cómo funciona SEO Local --}}
        <section id="como-funciona" class="py-24 bg-gray-950/50 relative overflow-hidden">

            {{-- Decoración de fondo --}}
            <div class="absolute top-0 right-0 w-96 h-96 bg-brand/5 blur-[120px] rounded-full"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                    {{-- Columna Izquierda --}}
                    <div>

                        <span class="text-brand font-mono text-sm mb-4 block">
                            // CÓMO FUNCIONA
                        </span>

                        <h2 class="text-4xl font-black text-white italic uppercase tracking-tighter mb-8 leading-none">
                            Ayudamos a Google a entender
                            <span class="text-brand">qué hace tu negocio y dónde lo ofrece</span>
                        </h2>

                        <div class="space-y-6 text-gray-400 font-light">

                            <p class="text-lg">
                                Cuando una persona busca un producto o servicio cerca de su ubicación,
                                Google intenta mostrar negocios que sean relevantes para esa búsqueda
                                y para esa zona.
                            </p>

                            <p>
                                El SEO Local consiste en mejorar la información y presencia de tu negocio
                                para aumentar sus posibilidades de aparecer en búsquedas locales relacionadas
                                con lo que ofreces.
                            </p>

                            <div class="flex gap-4">
                                <div class="flex-none w-1 h-auto bg-brand/50"></div>

                                <p>
                                    <strong class="text-white uppercase text-xs block mb-1">
                                        Google Business Profile
                                    </strong>

                                    Revisamos y optimizamos la información principal de tu ficha para que
                                    Google y tus clientes entiendan claramente qué ofrece tu negocio,
                                    dónde se encuentra y cómo pueden contactarlo.
                                </p>
                            </div>

                            <div class="flex gap-4">
                                <div class="flex-none w-1 h-auto bg-white/30"></div>

                                <p>
                                    <strong class="text-white uppercase text-xs block mb-1">
                                        Relevancia local
                                    </strong>

                                    Trabajamos categorías, servicios, información comercial y otros elementos
                                    que ayudan a relacionar tu negocio con las búsquedas que realizan
                                    clientes potenciales en tu zona.
                                </p>
                            </div>

                            <p class="pt-4 border-t border-gray-800 text-sm">
                                El objetivo no es prometer una posición específica, sino
                                <span class="text-brand">
                                    mejorar la visibilidad de tu negocio en búsquedas locales relevantes.
                                </span>
                            </p>

                        </div>
                    </div>

                    {{-- Columna Derecha --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        {{-- Card 1 --}}
                        <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">

                            <div class="flex items-center gap-3 mb-4">
                                <span class="text-brand font-bold text-xl">01</span>

                                <h3 class="text-white font-bold uppercase text-[10px] tracking-widest">
                                    Diagnóstico
                                </h3>
                            </div>

                            <p class="text-gray-500 text-[11px] leading-relaxed">
                                Revisamos cómo aparece actualmente tu negocio en Google,
                                qué información tiene publicada y qué oportunidades de mejora existen.
                            </p>

                        </div>

                        {{-- Card 2 --}}
                        <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">

                            <div class="flex items-center gap-3 mb-4">
                                <span class="text-brand font-bold text-xl">02</span>

                                <h3 class="text-white font-bold uppercase text-[10px] tracking-widest">
                                    Optimización del perfil
                                </h3>
                            </div>

                            <p class="text-gray-500 text-[11px] leading-relaxed">
                                Ajustamos categorías, servicios, descripción, información de contacto
                                y otros elementos importantes de Google Business Profile.
                            </p>

                        </div>

                        {{-- Card 3 --}}
                        <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">

                            <div class="flex items-center gap-3 mb-4">
                                <span class="text-brand font-bold text-xl">03</span>

                                <h3 class="text-white font-bold uppercase text-[10px] tracking-widest">
                                    Presencia local
                                </h3>
                            </div>

                            <p class="text-gray-500 text-[11px] leading-relaxed">
                                Mejoramos la relación entre tu negocio, los servicios que ofrece
                                y las búsquedas locales relevantes para tus clientes.
                            </p>

                        </div>

                        {{-- Card 4 --}}
                        <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">

                            <div class="flex items-center gap-3 mb-4">
                                <span class="text-brand font-bold text-xl">04</span>

                                <h3 class="text-white font-bold uppercase text-[10px] tracking-widest">
                                    Medición
                                </h3>
                            </div>

                            <p class="text-gray-500 text-[11px] leading-relaxed">
                                Revisamos cómo evoluciona la visibilidad del negocio y las acciones
                                que realizan los usuarios desde su presencia en Google.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>
    {{-- Cómo funciona SEO Local end --}}

    {{-- Qué incluye SEO Local --}}
        <section id="que-incluye" class="py-24 bg-gray-900/40 relative overflow-hidden">

            {{-- Decoración --}}
            <div class="absolute -left-20 top-1/2 -translate-y-1/2 w-96 h-96 bg-brand/5 blur-[120px] rounded-full"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">

                {{-- Encabezado --}}
                <div class="max-w-3xl mb-16">

                    <span class="text-brand font-mono text-sm mb-4 block">
                        // SEO LOCAL SOLUCION-E
                    </span>

                    <h2 class="text-4xl md:text-5xl font-black text-white italic uppercase tracking-tighter leading-none mb-6">
                        ¿Qué hacemos para mejorar
                        <span class="text-brand">tu presencia local?</span>
                    </h2>

                    <p class="text-gray-400 text-lg font-light leading-relaxed">
                        Trabajamos los elementos que ayudan a Google y a tus clientes
                        a entender mejor qué ofrece tu negocio, dónde se encuentra y
                        cómo pueden contactarlo.
                    </p>

                </div>

                {{-- Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    {{-- 01 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                01
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Diagnóstico
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Auditoría de presencia local
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Revisamos cómo aparece actualmente tu negocio en Google,
                            la información publicada, su configuración y las principales
                            oportunidades de mejora.
                        </p>

                    </article>

                    {{-- 02 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                02
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Google
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Optimización de Google Business Profile
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Trabajamos categorías, servicios, descripción, datos comerciales,
                            enlaces, información de contacto y otros elementos relevantes
                            de tu perfil.
                        </p>

                    </article>

                    {{-- 03 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                03
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Búsquedas
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Análisis de búsquedas locales
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Identificamos cómo buscan los clientes productos o servicios
                            como los tuyos para entender qué términos y necesidades
                            son relevantes en tu zona.
                        </p>

                    </article>

                    {{-- 04 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                04
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Relevancia
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Optimización de relevancia local
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Alineamos la información del negocio con los servicios,
                            productos y búsquedas locales que queremos trabajar para
                            mejorar su relación con consultas relevantes.
                        </p>

                    </article>

                    {{-- 05 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                05
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Confianza
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Reputación y señales de confianza
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Revisamos reseñas, información pública y elementos de confianza
                            que pueden fortalecer la presencia del negocio frente a clientes
                            potenciales.
                        </p>

                    </article>

                    {{-- 06 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                06
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Medición
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Seguimiento de resultados
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Revisamos cómo evoluciona la visibilidad del negocio y las
                            acciones que realizan los usuarios para evaluar el desempeño
                            de su presencia local.
                        </p>

                    </article>

                </div>

                {{-- Nota final --}}
                <div class="mt-12 border-l-2 border-brand/40 pl-6 max-w-3xl">

                    <p class="text-gray-400 leading-relaxed">
                        <span class="text-brand">La estrategia se adapta a la situación actual de cada negocio.</span></br>
                        No todos necesitan las mismas acciones ni el mismo nivel de optimización.
                    </p>

                </div>

            </div>

        </section>
    {{-- Qué incluye SEO Local end --}}

    {{-- Casos de exito --}}
        <div class="max-w-7xl mx-auto px-6 py-20">
            <span class="text-brand font-mono text-sm mb-4 block">
                // RESULTADOS REALES
            </span>

            <h2 class="text-4xl md:text-5xl font-black text-white italic uppercase tracking-tighter leading-none mb-6">
                Casos de éxito en
                <span class="text-brand">SEO Local</span>
            </h2>

            <p class="text-gray-400 text-lg font-light max-w-3xl mb-12">
                Conoce algunos negocios en los que hemos trabajado para mejorar
                su presencia en Google y generar nuevas oportunidades a través
                de búsquedas locales.
            </p>

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
                                            <span>VER NEGOCIO EN GOOGLE MAPS</span>
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
                                            {{-- <a href="{{$proyecto->url}}" target="_blank"> --}}
                                            <a href="{{route('proyectos', $proyecto->slug)}}">
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
                        <p class="text-gray-600 italic font-light font-mono text-xs uppercase tracking-widest">// Próximamente nuevos casos de éxito...</p>
                    </div>
                @endforelse
            </div>
        </div>
    {{-- Casos de exito end --}}

    {{-- FAQs SEO Local --}}
        <section id="preguntas-frecuentes" class="py-24 bg-gray-950 relative overflow-hidden">
            {{-- Decoración --}}
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-brand/5 blur-[120px] rounded-full"></div>
            <div class="max-w-5xl mx-auto px-6 relative z-10">

                {{-- Encabezado --}}
                <div class="max-w-3xl mb-16">

                    <span class="text-brand font-mono text-sm mb-4 block">
                        // PREGUNTAS FRECUENTES
                    </span>

                    <h2 class="text-4xl md:text-5xl font-black text-white italic uppercase tracking-tighter leading-none mb-6">
                        Preguntas sobre
                        <span class="text-brand">SEO Local</span>
                    </h2>

                    <p class="text-gray-400 text-lg font-light leading-relaxed">
                        Resolvemos algunas de las dudas más comunes sobre cómo funciona
                        el SEO Local y qué puedes esperar al trabajar la presencia de
                        tu negocio en Google.
                    </p>

                </div>

                {{-- Acordeón --}}
                <div class="space-y-4">

                    {{-- FAQ 01 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Qué es el SEO Local y cómo puede ayudar a mi negocio?
                            </h3>

                            <span class="text-brand transition group-open:rotate-180 flex-none">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>

                        </summary>

                        <p class="mt-4 text-gray-400 leading-relaxed">
                            El SEO Local busca mejorar la visibilidad de un negocio cuando las
                            personas realizan búsquedas relacionadas con sus productos o servicios
                            en una zona determinada. Una mejor presencia en Google puede facilitar
                            que clientes potenciales encuentren tu negocio, conozcan lo que ofrece
                            y realicen acciones como llamar, solicitar indicaciones o visitar tu
                            sitio web.
                        </p>

                    </details>

                    {{-- FAQ 02 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Necesito tener una página web para hacer SEO Local?
                            </h3>

                            <span class="text-brand transition group-open:rotate-180 flex-none">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>

                        </summary>

                        <p class="mt-4 text-gray-400 leading-relaxed">
                            No necesariamente. Google Business Profile puede trabajarse aunque el
                            negocio no tenga sitio web. Sin embargo, dependiendo de la competencia
                            y de los objetivos del negocio, contar con un sitio web optimizado puede
                            complementar la estrategia y ampliar las posibilidades de aparecer en
                            diferentes tipos de búsquedas.
                        </p>

                    </details>

                    {{-- FAQ 03 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Pueden garantizar que mi negocio aparecerá en primer lugar en Google?
                            </h3>

                            <span class="text-brand transition group-open:rotate-180 flex-none">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>

                        </summary>

                        <p class="mt-4 text-gray-400 leading-relaxed">
                            No. Ningún proveedor puede garantizar una posición específica en los
                            resultados de Google. El posicionamiento depende de distintos factores,
                            como la relevancia del negocio para la búsqueda, su ubicación, competencia
                            y señales de confianza. Nuestro trabajo consiste en mejorar los elementos
                            que podemos optimizar para aumentar su visibilidad en búsquedas locales
                            relevantes.
                        </p>

                    </details>

                    {{-- FAQ 04 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Cuánto tiempo tarda el SEO Local en dar resultados?
                            </h3>

                            <span class="text-brand transition group-open:rotate-180 flex-none">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>

                        </summary>

                        <p class="mt-4 text-gray-400 leading-relaxed">
                            El SEO Local no tiene un plazo idéntico para todos los negocios. Los
                            resultados dependen de la situación inicial del perfil, la competencia,
                            la ubicación, el sector y las búsquedas que se quieran trabajar. Por eso
                            primero analizamos la situación actual y después medimos cómo evoluciona
                            la visibilidad del negocio.
                        </p>

                    </details>

                    {{-- FAQ 05 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Qué pasa si mi negocio ya tiene Google Business Profile?
                            </h3>

                            <span class="text-brand transition group-open:rotate-180 flex-none">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>

                        </summary>

                        <p class="mt-4 text-gray-400 leading-relaxed">
                            No es necesario comenzar de cero. Revisamos cómo está configurado
                            actualmente, qué información tiene publicada, las categorías y servicios
                            utilizados, sus reseñas y otros elementos relevantes para identificar
                            qué puede mejorarse.
                        </p>

                    </details>

                    {{-- FAQ 06 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Cómo sabré si el SEO Local está funcionando?
                            </h3>

                            <span class="text-brand transition group-open:rotate-180 flex-none">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>

                        </summary>

                        <p class="mt-4 text-gray-400 leading-relaxed">
                            Medimos la evolución de la presencia del negocio utilizando los datos
                            disponibles en Google y otras herramientas de seguimiento cuando sean
                            necesarias. Dependiendo del proyecto podemos analizar visibilidad,
                            búsquedas, llamadas, visitas al sitio web, solicitudes de indicaciones
                            y otras acciones relevantes realizadas por los usuarios.
                        </p>

                    </details>

                </div>

            </div>
        </section>
    {{-- FAQs SEO Local end --}}

    {{-- Contact Form --}}
        <x-components-web.shared.contact-form />
    {{-- end Contact Form --}}

@endsection
