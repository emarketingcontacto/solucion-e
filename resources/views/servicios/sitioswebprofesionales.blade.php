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
    <meta property="og:image" content="{{ asset('images/header2.webp') }}">

    {{-- Schema --}}
        @verbatim
            <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": "Service",
                        "@id": "https://solucion-e.com.mx/sitios-web-profesionales/#service",
                        "name": "Sitios Web Profesionales en León",
                        "url": "https://solucion-e.com.mx/sitios-web-profesionales/",
                        "serviceType": "Diseño y desarrollo de sitios web profesionales",
                        "description": "Diseño y desarrollo de sitios web profesionales para negocios y PyMEs en León, orientados a mejorar su presencia en Internet, generar oportunidades de negocio y medir resultados.",
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
    {{-- Schema end --}}

@endsection

@section('content')

    {{-- Hero Section --}}
        <section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden">

            {{-- Imagen de Fondo --}}
            <div class="absolute inset-0 z-0">
                <img
                    src="{{ asset('images/header2.webp') }}"
                    class="w-full h-full object-cover opacity-80 grayscale"
                    alt="Páginas web profesionales en León - Solucion-e"
                    fetchpriority="high"
                >

                <div class="absolute inset-0 bg-gradient-to-b from-gray-950 via-gray-950/60 to-gray-950"></div>
                <div class="absolute inset-0 bg-brand/5 mix-blend-color"></div>
            </div>

            {{-- Brillo decorativo --}}
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
                        w-[600px] h-[400px] bg-brand/10 blur-[120px] rounded-full z-10">
            </div>

            <div class="max-w-7xl mx-auto px-6 relative z-20 text-center">

                {{-- Badge --}}
                <span class="inline-block py-1 px-4 border border-brand/30 text-brand
                            text-[10px] font-bold tracking-[0.4em] uppercase rounded-full mb-8">
                    SITIOS WEB PARA NEGOCIOS
                </span>

                {{-- H1 --}}
                <h1 class="text-5xl md:text-7xl font-black mb-8 italic tracking-tighter
                        leading-none text-white uppercase">

                    <span class="text-brand">
                        Páginas Web Profesionales en León
                    </span>

                    <br>

                    <span class="text-3xl md:text-4xl">
                        que ayudan a tu negocio a crecer
                    </span>

                </h1>

                {{-- Descripción --}}
                <div class="max-w-3xl mx-auto space-y-6">

                    <p class="text-gray-400 text-lg md:text-xl font-light leading-relaxed">
                        Creamos sitios web profesionales para que tu negocio tenga una
                        <span class="text-white font-semibold">presencia propia en Internet</span>,
                        pueda ser encontrado, genere
                        <span class="text-brand font-semibold">oportunidades de negocio</span>
                        y mida cómo interactúan sus visitantes.
                    </p>

                    {{-- CTAs --}}
                    <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">

                        {{-- CTA Principal --}}
                        <a
                            href="#contacto"
                            class="group relative inline-flex items-center justify-center gap-3
                                overflow-hidden rounded-xl bg-brand px-8 py-4 text-sm font-bold
                                uppercase tracking-widest text-gray-950 transition-all duration-300
                                hover:scale-[1.03] hover:shadow-lg hover:shadow-brand/20 active:scale-95"
                            aria-label="Solicitar información sobre una página web profesional"
                        >
                            <span class="relative z-10">
                                Quiero una página web
                            </span>

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2.5"
                                stroke="currentColor"
                                class="relative z-10 h-4 w-4 transition-transform duration-300
                                    group-hover:translate-x-1"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                                />
                            </svg>
                        </a>

                        {{-- CTA Secundario --}}
                        <a
                            href="#como-funciona"
                            class="group relative inline-flex items-center justify-center gap-3
                                overflow-hidden rounded-xl border border-white/15 bg-white/5
                                px-8 py-4 text-sm font-bold uppercase tracking-widest text-white
                                backdrop-blur-sm transition-all duration-300
                                hover:border-brand/50 hover:bg-brand/10 hover:text-brand active:scale-95"
                            aria-label="Ver cómo funciona un sitio web profesional de Solucion-e"
                        >
                            <span class="relative z-10">
                                Ver cómo funciona
                            </span>

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                class="relative z-10 h-4 w-4 transition-transform duration-300 group-hover:translate-y-1"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19 9l-7 7-7-7"
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

    {{-- Cómo funciona un Sitio Web Profesional --}}
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
                            Tu sitio web debe hacer más que
                            <span class="text-brand">tener presencia en Internet</span>
                        </h2>

                        <div class="space-y-6 text-gray-400 font-light">

                            <p class="text-lg">
                                Un sitio web profesional debe ayudar a tus clientes a entender
                                qué hace tu negocio, encontrar la información que necesitan y
                                facilitar una acción como llamar, enviar un mensaje o solicitar información.
                            </p>

                            <div class="flex gap-4">
                                <div class="flex-none w-1 h-auto bg-brand/50"></div>

                                <p>
                                    <strong class="text-white uppercase text-xs block mb-1">
                                        Presencia
                                    </strong>

                                    Construimos una presencia propia y profesional que representa
                                    claramente tu negocio, sus servicios y la forma en que puede ayudar
                                    a sus clientes.
                                </p>
                            </div>

                            <div class="flex gap-4">
                                <div class="flex-none w-1 h-auto bg-white/30"></div>

                                <p>
                                    <strong class="text-white uppercase text-xs block mb-1">
                                        Generación de oportunidades
                                    </strong>

                                    Organizamos el contenido y los llamados a la acción para facilitar
                                    que los visitantes se conviertan en contactos y oportunidades de negocio.
                                </p>
                            </div>

                            <div class="flex gap-4">
                                <div class="flex-none w-1 h-auto bg-brand/30"></div>

                                <p>
                                    <strong class="text-white uppercase text-xs block mb-1">
                                        Medición
                                    </strong>

                                    Integramos herramientas que permiten conocer cómo llegan los usuarios,
                                    qué páginas visitan y qué acciones realizan dentro del sitio.
                                </p>
                            </div>

                            <p class="pt-4 border-t border-gray-800 text-sm">
                                El objetivo no es solamente publicar una página web, sino
                                <span class="text-brand">
                                    construir una herramienta que pueda apoyar los objetivos del negocio.
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
                                    Entender el negocio
                                </h3>
                            </div>

                            <p class="text-gray-500 text-[11px] leading-relaxed">
                                Identificamos qué ofrece el negocio, a quién se dirige y qué acciones
                                queremos que realicen los visitantes.
                            </p>

                        </div>

                        {{-- Card 2 --}}
                        <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">

                            <div class="flex items-center gap-3 mb-4">
                                <span class="text-brand font-bold text-xl">02</span>

                                <h3 class="text-white font-bold uppercase text-[10px] tracking-widest">
                                    Organizar la información
                                </h3>
                            </div>

                            <p class="text-gray-500 text-[11px] leading-relaxed">
                                Diseñamos una estructura clara para que los usuarios encuentren
                                fácilmente servicios, información y formas de contacto.
                            </p>

                        </div>

                        {{-- Card 3 --}}
                        <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">

                            <div class="flex items-center gap-3 mb-4">
                                <span class="text-brand font-bold text-xl">03</span>

                                <h3 class="text-white font-bold uppercase text-[10px] tracking-widest">
                                    Facilitar la conversión
                                </h3>
                            </div>

                            <p class="text-gray-500 text-[11px] leading-relaxed">
                                Incorporamos llamadas a la acción y recorridos que facilitan
                                que el visitante contacte al negocio o solicite información.
                            </p>

                        </div>

                        {{-- Card 4 --}}
                        <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">

                            <div class="flex items-center gap-3 mb-4">
                                <span class="text-brand font-bold text-xl">04</span>

                                <h3 class="text-white font-bold uppercase text-[10px] tracking-widest">
                                    Medir resultados
                                </h3>
                            </div>

                            <p class="text-gray-500 text-[11px] leading-relaxed">
                                Configuramos herramientas de medición para conocer el comportamiento
                                de los visitantes y evaluar cómo funciona el sitio.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>
    {{-- Cómo funciona un Sitio Web Profesional end --}}

    {{-- Qué incluye Sitios Web Profesionales --}}
        <section id="que-incluye" class="py-24 bg-gray-900/40 relative overflow-hidden">

            {{-- Decoración --}}
            <div class="absolute -left-20 top-1/2 -translate-y-1/2 w-96 h-96 bg-brand/5 blur-[120px] rounded-full"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">

                {{-- Encabezado --}}
                <div class="max-w-3xl mb-16">

                    <span class="text-brand font-mono text-sm mb-4 block">
                        // SITIOS WEB SOLUCION-E
                    </span>

                    <h2 class="text-4xl md:text-5xl font-black text-white italic uppercase tracking-tighter leading-none mb-6">
                        ¿Qué incluye un
                        <span class="text-brand">Sitio Web Profesional?</span>
                    </h2>
                    <p class="text-gray-400 text-lg font-light leading-relaxed">
                        Desarrollamos sitios web que <span class="text-brand">representan</span> profesionalmente tu negocio,
                        <span class="text-brand">facilitan</span> que tus clientes
                        <span class="text-brand">encuentren</span> lo que necesitan y
                        <span class="text-brand">contacten</span> contigo, y a ti te permiten
                        <span class="text-brand">administrar</span> información y
                        <span class="text-brand">medir</span> cómo interactúan los visitantes con tu sitio.
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
                                Estrategia
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Estructura orientada al negocio
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Organizamos el contenido del sitio de acuerdo con los servicios,
                            productos, objetivos y necesidades reales de tu negocio.
                        </p>

                    </article>

                    {{-- 02 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                02
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Diseño
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Diseño responsive y mobile-first
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Diseñamos una experiencia clara y profesional para que el sitio funcione
                            correctamente en teléfonos, tablets y computadoras.
                        </p>

                    </article>

                    {{-- 03 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                03
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                SEO
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            SEO básico integrado
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Construimos el sitio con una estructura técnica preparada para buscadores,
                            incluyendo títulos, descripciones, jerarquía de contenido, indexabilidad
                            y otros elementos esenciales.
                        </p>

                    </article>

                    {{-- 04 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                04
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Conversión
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Llamadas a la acción
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Incorporamos botones, formularios y accesos de contacto para facilitar
                            que los visitantes realicen una acción útil para tu negocio.
                        </p>

                    </article>

                    {{-- 05 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                05
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Medición
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                             Medición de resultados
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Configuramos el seguimiento de acciones relevantes como visitas, clics en
                            WhatsApp, formularios y otros eventos que nos ayudan a conocer cómo interactúan
                            los usuarios con el sitio.
                        </p>

                    </article>

                    {{-- 06 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                06
                            </span>
                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Control
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">
                            Panel de administración
                        </h3>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Incluimos un panel para que puedas actualizar la información de tu negocio,
                            administrar servicios o productos y consultar datos sobre las acciones
                            que realizan los visitantes dentro del sitio.
                        </p>
                    </article>

                </div>

                {{-- Nota final --}}
                <div class="mt-12 border-l-2 border-brand/40 pl-6 max-w-3xl">
                    <p class="text-gray-400 leading-relaxed">
                        Cada sitio lo desarrollamos de acuerdo con las
                        <span class="text-brand">necesidades y objetivos de cada negocio.</span>
                    </p>
                </div>

            </div>

        </section>
    {{-- Qué incluye Sitios Web Profesionales end --}}


    {{-- Casos de éxito --}}
        <div class="max-w-7xl mx-auto px-6 py-20">

            <span class="text-brand font-mono text-sm mb-4 block">
                // RESULTADOS REALES
            </span>

            <h2 class="text-4xl md:text-5xl font-black text-white italic uppercase tracking-tighter leading-none mb-6">
                Casos de éxito en
                <span class="text-brand">Sitios Web Profesionales</span>
            </h2>

            <p class="text-gray-400 text-lg font-light max-w-3xl mb-12">
                Conoce algunos negocios para los que hemos desarrollado sitios web
                orientados a fortalecer su presencia en Internet, generar oportunidades
                y facilitar la administración de su información.
            </p>

            <div class="space-y-16">

                @forelse($proyectos as $proyecto)

                    <div class="bg-gray-900/30 border border-gray-800 p-8 md:p-12 rounded-[40px] hover:border-brand/30 transition-colors duration-500">

                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                            {{-- Información --}}
                            <div class="lg:col-span-7 order-2 lg:order-1">

                                <h3 class="text-4xl font-black mb-8 text-white italic tracking-tighter uppercase">
                                    {{ $proyecto->cliente_nombre }}
                                </h3>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8 text-gray-400 italic">

                                    {{-- Desafío --}}
                                    <div class="md:col-span-2 border-b border-gray-800 pb-6">

                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">
                                            El Desafío
                                        </p>

                                        <div class="text-sm leading-relaxed">
                                            {!! $proyecto->problema !!}
                                        </div>

                                    </div>

                                    {{-- Estrategia --}}
                                    <div class="pt-2">

                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">
                                            Estrategia
                                        </p>

                                        <div class="text-xs font-light leading-relaxed">
                                            {!! $proyecto->solucion !!}
                                        </div>

                                    </div>

                                    {{-- Impacto --}}
                                    <div class="pt-2">

                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">
                                            Impacto
                                        </p>

                                        <div class="text-xs font-light leading-relaxed">
                                            {!! $proyecto->resultado !!}
                                        </div>

                                    </div>

                                </div>

                                {{-- Sitio del proyecto --}}
                                @if($proyecto->url)
                                    <div class="mt-10">

                                        <a href="{{ $proyecto->url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex items-center gap-2 text-[10px] font-bold tracking-widest text-brand group/link">

                                            <span>
                                                VISITAR SITIO WEB
                                            </span>

                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="2.5"
                                                stroke="currentColor"
                                                class="w-4 h-4 transform group-hover/link:translate-x-1 transition-transform">

                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                                                />

                                            </svg>

                                        </a>

                                    </div>
                                @endif

                            </div>

                            {{-- Imagen --}}
                            <div class="lg:col-span-5 order-1 lg:order-2">

                                <div class="relative group/img">

                                    <div class="absolute -inset-2 bg-brand/20 blur-2xl opacity-0 group-hover/img:opacity-100 transition duration-700 rounded-full"></div>

                                    <div class="relative overflow-hidden rounded-3xl border border-gray-800 shadow-2xl">

                                        @if($proyecto->imagen_proyecto)

                                            <a href="{{ route('proyectos', $proyecto->slug) }}">

                                                <img
                                                    src="{{ asset('storage/' . $proyecto->imagen_proyecto) }}"
                                                    alt="Sitio web profesional desarrollado para {{ $proyecto->cliente_nombre }} por Solucion-e"
                                                    class="w-full h-[350px] object-cover filter grayscale hover:grayscale-0 transition duration-700 scale-105 hover:scale-100"
                                                >

                                            </a>

                                        @else

                                            <div class="w-full h-[350px] flex items-center justify-center bg-gray-950 text-gray-800 italic text-xs">
                                                SOLUCION-E / PROYECTO_IMG
                                            </div>

                                        @endif

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="py-20 text-center border border-dashed border-gray-800 rounded-[40px]">

                        <p class="text-gray-600 italic font-light font-mono text-xs uppercase tracking-widest">
                            // Próximamente nuevos casos de éxito
                        </p>

                    </div>

                @endforelse

            </div>

        </div>
    {{-- Casos de éxito end --}}

    {{-- FAQs Sitios Web Profesionales --}}
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
                        <span class="text-brand">Sitios Web Profesionales</span>
                    </h2>

                    <p class="text-gray-400 text-lg font-light leading-relaxed">
                        Resolvemos algunas de las dudas más comunes sobre nuestros sitios web,
                        su administración, funcionamiento y posibilidades de crecimiento.
                    </p>

                </div>

                {{-- Acordeón --}}
                <div class="space-y-4">

                    {{-- FAQ 01 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Qué incluye un Sitio Web Profesional de Solucion-e?
                            </h3>

                            <span class="text-brand transition group-open:rotate-180 flex-none">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>

                        </summary>

                        <p class="mt-4 text-gray-400 leading-relaxed">
                            Desarrollamos el sitio de acuerdo con las necesidades y objetivos de tu negocio.
                            Incluye diseño responsive, estructura optimizada para buscadores, llamadas a la
                            acción, herramientas de medición y un panel de administración desde el que puedes
                            actualizar información y consultar datos relevantes del sitio.
                        </p>

                    </details>

                    {{-- FAQ 02 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Podré actualizar la información de mi sitio web?
                            </h3>

                            <span class="text-brand transition group-open:rotate-180 flex-none">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>

                        </summary>

                        <p class="mt-4 text-gray-400 leading-relaxed">
                            Sí. Todos nuestros sitios incluyen un panel de administración que te permite
                            modificar información importante de tu negocio sin depender de nosotros para
                            cada cambio. Dependiendo del proyecto también podrás administrar servicios,
                            productos u otros contenidos del sitio.
                        </p>

                    </details>

                    {{-- FAQ 03 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Cómo puedo saber si mi página web está generando resultados?
                            </h3>

                            <span class="text-brand transition group-open:rotate-180 flex-none">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>

                        </summary>

                        <p class="mt-4 text-gray-400 leading-relaxed">
                            Configuramos herramientas de medición y seguimiento de acciones relevantes
                            dentro del sitio. Podemos registrar visitas, clics en WhatsApp, formularios
                            y otras interacciones para que puedas conocer cómo utilizan los visitantes
                            tu página y evaluar su funcionamiento.
                        </p>

                    </details>

                    {{-- FAQ 04 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Mi página web podrá aparecer en Google?
                            </h3>

                            <span class="text-brand transition group-open:rotate-180 flex-none">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>

                        </summary>

                        <p class="mt-4 text-gray-400 leading-relaxed">
                            Desarrollamos el sitio con una base técnica preparada para buscadores,
                            incluyendo estructura de contenido, títulos, descripciones, indexabilidad
                            y otros elementos de SEO básico. Sin embargo, aparecer en determinadas
                            posiciones depende también de la competencia, las búsquedas y la estrategia
                            SEO que requiera cada negocio.
                        </p>

                    </details>

                    {{-- FAQ 05 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿El sitio funcionará correctamente en celulares?
                            </h3>

                            <span class="text-brand transition group-open:rotate-180 flex-none">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>

                        </summary>

                        <p class="mt-4 text-gray-400 leading-relaxed">
                            Sí. Desarrollamos los sitios con un enfoque responsive y mobile-first
                            para que el contenido, la navegación y las llamadas a la acción funcionen
                            correctamente en teléfonos, tablets y computadoras.
                        </p>

                    </details>

                    {{-- FAQ 06 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Qué pasa si después necesito agregar nuevas funciones?
                            </h3>

                            <span class="text-brand transition group-open:rotate-180 flex-none">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>

                        </summary>

                        <p class="mt-4 text-gray-400 leading-relaxed">
                            El sitio puede evolucionar conforme cambien las necesidades de tu negocio.
                            Podemos incorporar nuevas funcionalidades cuando tengan sentido para tu
                            operación y, si el proyecto requiere herramientas más especializadas,
                            evaluar su evolución hacia una Plataforma Web Personalizada.
                        </p>

                    </details>

                </div>

            </div>

        </section>
    {{-- FAQs Sitios Web Profesionales end --}}

    {{-- Contact --}}
        <x-components-web.shared.contact-form />
    {{-- Contact end --}}

@endsection

