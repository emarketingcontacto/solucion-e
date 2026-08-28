@extends('layouts-web.main')

@section('seo')
   <title>{{ $titulo }}</title>
    <meta name="description" content="{{ $meta_desc }}">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph / Redes Sociales --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $titulo }}">
    <meta property="og:description" content="{{ $meta_desc}}">
    <meta property="og:image" content="{{ asset('images/header5.webp') }}">

    {{-- Schema --}}
        @verbatim
            <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": "Service",
                        "@id": "https://solucion-e.com.mx/soluciones-web-restaurantes/#service",
                        "name": "Soluciones Web para Restaurantes en León",
                        "url": "https://solucion-e.com.mx/soluciones-web-restaurantes/",
                        "serviceType": "Soluciones web para restaurantes",
                        "description": "Desarrollo de soluciones web para restaurantes en León con menú digital administrable, códigos QR, presencia web y herramientas de medición.",
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
                    src="{{ asset('images/header5.webp') }}"
                    class="w-full h-full object-cover opacity-80 grayscale"
                    alt="Soluciones web para restaurantes en León - Solucion-e"
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
                    SOLUCIONES WEB PARA RESTAURANTES
                </span>

                {{-- H1 --}}
                <h1 class="text-5xl md:text-7xl font-black mb-8 italic tracking-tighter
                        leading-none text-white uppercase">

                    <span class="text-brand">
                        Soluciones Web para Restaurantes en León
                    </span>

                    <br>

                    <span class="text-2xl md:text-3xl">
                        presencia, menú digital e información siempre actualizada
                    </span>

                </h1>

                {{-- Descripción --}}
                <div class="max-w-3xl mx-auto space-y-6">

                    <p class="text-gray-400 text-lg md:text-xl font-light leading-relaxed">
                        Creamos soluciones web para que tu restaurante tenga una
                        <span class="text-white font-semibold">presencia profesional en Internet</span>,
                        un <span class="text-brand font-semibold">menú digital administrable</span>
                        y herramientas para actualizar información y medir cómo interactúan tus clientes.
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
                            aria-label="Solicitar información sobre una solución web para restaurante"
                        >
                            <span class="relative z-10">
                                Quiero mejorar la presencia de mi restaurante
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
                            aria-label="Ver cómo funciona una solución web para restaurantes de Solucion-e"
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
                                class="relative z-10 h-4 w-4 transition-transform duration-300
                                    group-hover:translate-y-1"
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
    {{-- Hero Section end --}}

    {{-- Cómo funciona --}}
        <section id="como-funciona" class="py-24 bg-gray-950 border-y border-white/5">

            <div class="max-w-7xl mx-auto px-6">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                    {{-- Columna Izquierda --}}
                    <div>

                        <span class="text-brand font-mono text-sm mb-4 block">
                            // CÓMO FUNCIONA
                        </span>

                        <h2 class="text-4xl md:text-5xl font-black text-white italic uppercase tracking-tighter mb-8 leading-none">
                            Tu restaurante siempre
                            <span class="text-brand">actualizado y fácil de consultar</span>
                        </h2>

                        <div class="space-y-6 text-gray-400 font-light">

                            <p class="text-lg">
                                La información de tu restaurante cambia constantemente:
                                horarios, fotografías, platillos, precios o disponibilidad.
                                Creamos una solución web para que puedas mantenerla actualizada
                                y tus clientes encuentren fácilmente lo que necesitan.
                            </p>

                            {{-- Visibilidad --}}
                            <div class="flex gap-4">

                                <div class="flex-none w-1 h-auto bg-brand/50"></div>

                                <p>
                                    <strong class="text-white uppercase text-xs block mb-1">
                                        Te encuentran
                                    </strong>

                                    Optimizamos la presencia de tu restaurante en Google Business Profile
                                    y desarrollamos un sitio web con una estructura preparada para
                                    buscadores.
                                </p>

                            </div>

                            {{-- Consulta --}}
                            <div class="flex gap-4">

                                <div class="flex-none w-1 h-auto bg-white/30"></div>

                                <p>
                                    <strong class="text-white uppercase text-xs block mb-1">
                                        Consultan tu menú
                                    </strong>

                                    Tus clientes pueden conocer el restaurante y consultar un menú
                                    digital diseñado para celulares, ya sea desde tu sitio web o
                                    escaneando el código QR desde su mesa.
                                </p>

                            </div>

                            {{-- Administración --}}
                            <div class="flex gap-4">

                                <div class="flex-none w-1 h-auto bg-brand/30"></div>

                                <p>
                                    <strong class="text-white uppercase text-xs block mb-1">
                                        Tú mantienes la información actualizada
                                    </strong>

                                    Desde tu panel de administración puedes gestionar categorías,
                                    platillos, precios, imágenes y disponibilidad sin depender de
                                    nosotros para cada cambio.
                                </p>

                            </div>

                            <p class="pt-4 border-t border-gray-800 text-sm">
                                Si un platillo deja de estar disponible, puedes
                                <span class="text-brand">
                                    desactivarlo temporalmente y dejar de mostrarlo en el menú
                                </span>
                                hasta que vuelva a estar disponible.
                            </p>

                        </div>

                    </div>

                    {{-- Columna Derecha --}}
                    <div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                            {{-- Card 01 --}}
                            <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">

                                <div class="flex items-center gap-3 mb-4">

                                    <span class="text-brand font-bold text-xl">
                                        01
                                    </span>

                                    <h3 class="text-white font-bold uppercase text-[10px] tracking-widest">
                                        Google Business Profile
                                    </h3>

                                </div>

                                <p class="text-gray-500 text-[11px] leading-relaxed">
                                    Optimizamos la información principal de tu restaurante
                                    para fortalecer su presencia en búsquedas locales.
                                </p>

                            </div>

                            {{-- Card 02 --}}
                            <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">

                                <div class="flex items-center gap-3 mb-4">

                                    <span class="text-brand font-bold text-xl">
                                        02
                                    </span>

                                    <h3 class="text-white font-bold uppercase text-[10px] tracking-widest">
                                        Sitio Web + SEO
                                    </h3>

                                </div>

                                <p class="text-gray-500 text-[11px] leading-relaxed">
                                    Desarrollamos el sitio web del restaurante con información
                                    clara, llamadas a la acción y una base técnica preparada
                                    para buscadores.
                                </p>

                            </div>

                            {{-- Card 03 --}}
                            <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">

                                <div class="flex items-center gap-3 mb-4">

                                    <span class="text-brand font-bold text-xl">
                                        03
                                    </span>

                                    <h3 class="text-white font-bold uppercase text-[10px] tracking-widest">
                                        Menú Digital
                                    </h3>

                                </div>

                                <p class="text-gray-500 text-[11px] leading-relaxed">
                                    Tus clientes consultan categorías, platillos, precios
                                    e imágenes desde una interfaz diseñada para dispositivos móviles.
                                </p>

                            </div>

                            {{-- Card 04 --}}
                            <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">

                                <div class="flex items-center gap-3 mb-4">

                                    <span class="text-brand font-bold text-xl">
                                        04
                                    </span>

                                    <h3 class="text-white font-bold uppercase text-[10px] tracking-widest">
                                        Código QR
                                    </h3>

                                </div>

                                <p class="text-gray-500 text-[11px] leading-relaxed">
                                    Generamos el acceso QR al menú para que puedas colocarlo
                                    en mesas, mostradores u otros puntos dentro del restaurante.
                                </p>

                            </div>

                        </div>

                        {{-- Flujo --}}
                        <div class="mt-6 p-6 bg-gray-900/50 border border-white/5 rounded-3xl">

                            <p class="text-[10px] font-mono text-gray-500 uppercase tracking-widest mb-5">
                                Experiencia del cliente
                            </p>

                            <div class="flex flex-wrap items-center gap-3 text-xs">

                                <span class="px-3 py-2 rounded-lg bg-brand/5 border border-brand/10 text-brand">
                                    Encuentra
                                </span>

                                <span class="text-gray-700">
                                    →
                                </span>

                                <span class="px-3 py-2 rounded-lg bg-brand/5 border border-brand/10 text-brand">
                                    Conoce
                                </span>

                                <span class="text-gray-700">
                                    →
                                </span>

                                <span class="px-3 py-2 rounded-lg bg-brand/5 border border-brand/10 text-brand">
                                    Consulta
                                </span>

                                <span class="text-gray-700">
                                    →
                                </span>

                                <span class="px-3 py-2 rounded-lg bg-brand/5 border border-brand/10 text-brand">
                                    Contacta
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
    {{-- Cómo funciona end --}}

    {{-- Qué incluye Soluciones Web para Restaurantes --}}
        <section id="que-incluye" class="py-24 bg-gray-900/40 relative overflow-hidden">

            {{-- Decoración --}}
            <div class="absolute -left-20 top-1/2 -translate-y-1/2 w-96 h-96 bg-brand/5 blur-[120px] rounded-full"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">

                {{-- Encabezado --}}
                    <div class="max-w-3xl mb-16">
                        <span class="text-brand font-mono text-sm mb-4 block">
                            // UNA SOLUCIÓN SIMPLE PARA TU RESTAURANTE
                        </span>
                        <h2 class="text-4xl md:text-5xl font-black text-white italic uppercase tracking-tighter leading-none mb-6">
                            ¿Qué incluye nuestra
                            <span class="text-brand">Solución Web para Restaurantes?</span>
                        </h2>
                        <p class="text-gray-400 text-lg font-light leading-relaxed">
                            Integramos en una misma solución la <span class="text-brand">presencia web</span> de tu restaurante,
                            la optimización de <span class="text-brand">su presencia en Google</span> y un
                            <span class="text-brand">menú digital</span> que tú mismo puedes mantener actualizado.
                        </p>
                    </div>
                {{-- Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                    {{-- 01 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                01
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Presencia
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Google Business Profile
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Revisamos y optimizamos la información principal de tu restaurante
                            en Google para fortalecer su presencia en búsquedas locales.
                        </p>

                    </article>

                    {{-- 02 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                02
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Website
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Sitio web profesional
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Desarrollamos un sitio responsive donde tus clientes pueden conocer
                            el restaurante, consultar información importante y acceder fácilmente
                            al menú o ponerse en contacto.
                        </p>

                    </article>

                    {{-- 03 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                03
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Visibilidad
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Base SEO
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Construimos el sitio con estructura, contenido y elementos técnicos
                            preparados para que los buscadores puedan comprender e indexar
                            correctamente la información del restaurante.
                        </p>

                    </article>

                    {{-- 04 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                04
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Menú
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Menú digital
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Presentamos categorías, platillos, descripciones, precios e imágenes
                            en un menú diseñado para consultarse fácilmente desde dispositivos móviles.
                        </p>

                    </article>

                    {{-- 05 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                05
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Administración
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Panel de administración
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Desde tu panel puedes administrar categorías, platillos, precios,
                            imágenes y otra información del menú sin depender de nosotros
                            para realizar cada actualización.
                        </p>

                    </article>

                    {{-- 06 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                06
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Disponibilidad
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Activar o desactivar platillos
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Si un platillo deja de estar disponible puedes desactivarlo
                            temporalmente para que no aparezca en el menú y volver a activarlo
                            cuando puedas ofrecerlo nuevamente.
                        </p>

                    </article>

                    {{-- 07 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                07
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Acceso
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Código QR
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Generamos el acceso QR a tu menú digital para que puedas colocarlo
                            en las mesas, mostradores u otros puntos del restaurante y tus
                            clientes accedan desde su celular.
                        </p>

                    </article>

                    {{-- 08 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                08
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Medición
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Medición de resultados
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Medimos acciones relevantes como visitas al sitio, consultas al menú
                            y clics en los medios de contacto para conocer cómo interactúan
                            los clientes con la presencia web del restaurante.
                        </p>

                    </article>

                </div>

                {{-- Nota final --}}
                <div class="mt-12 border-l-2 border-brand/40 pl-6 max-w-3xl">

                    <p class="text-gray-400 leading-relaxed">
                        Cada restaurante funciona de manera diferente, por eso
                        <span class="text-brand">
                            adaptamos la solución a la información y necesidades de cada negocio.
                        </span>
                    </p>

                </div>

            </div>

        </section>
    {{-- Qué incluye Soluciones Web para Restaurantes end --}}

    {{-- Casos de éxito --}}
        <section class="py-20 bg-gray-950">

            <div class="max-w-7xl mx-auto px-6">

                {{-- Encabezado --}}
                <span class="text-brand font-mono text-sm mb-4 block">
                    // SOLUCIONES EN FUNCIONAMIENTO
                </span>

                <h2 class="text-4xl md:text-5xl font-black text-white italic uppercase tracking-tighter leading-none mb-6">
                    De Google a la mesa:
                    <span class="text-brand">soluciones para restaurantes reales</span>
                </h2>

                <p class="text-gray-400 text-lg font-light max-w-3xl mb-12">
                    Conoce algunos restaurantes para los que hemos desarrollado soluciones
                    web que integran presencia en Internet, información del negocio y
                    menús digitales que pueden mantenerse actualizados desde su propio
                    panel de administración.
                </p>

                {{-- Proyectos --}}
                <div class="space-y-16">

                    @forelse($proyectos as $proyecto)

                        <article class="bg-gray-900/30 border border-gray-800 p-8 md:p-12
                                        rounded-[40px] hover:border-brand/30
                                        transition-colors duration-500">

                            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                                {{-- Información --}}
                                <div class="lg:col-span-7 order-2 lg:order-1">

                                    <h3 class="text-4xl font-black mb-8 text-white italic
                                            tracking-tighter uppercase">
                                        {{ $proyecto->cliente_nombre }}
                                    </h3>

                                    <div class="grid grid-cols-1 md:grid-cols-2
                                                gap-x-12 gap-y-8 text-gray-400 italic">

                                        {{-- Desafío --}}
                                        <div class="md:col-span-2 border-b border-gray-800 pb-6">

                                            <p class="text-brand font-mono text-[10px] uppercase
                                                    tracking-[0.2em] mb-3 not-italic">
                                                El Desafío
                                            </p>

                                            <div class="text-sm leading-relaxed">
                                                {!! $proyecto->problema !!}
                                            </div>

                                        </div>

                                        {{-- Solución --}}
                                        <div class="pt-2">

                                            <p class="text-brand font-mono text-[10px] uppercase
                                                    tracking-[0.2em] mb-3 not-italic">
                                                La Solución
                                            </p>

                                            <div class="text-xs font-light leading-relaxed">
                                                {!! $proyecto->solucion !!}
                                            </div>

                                        </div>

                                        {{-- Resultado --}}
                                        <div class="pt-2">

                                            <p class="text-brand font-mono text-[10px] uppercase
                                                    tracking-[0.2em] mb-3 not-italic">
                                                El Resultado
                                            </p>

                                            <div class="text-xs font-light leading-relaxed">
                                                {!! $proyecto->resultado !!}
                                            </div>

                                        </div>

                                    </div>

                                    {{-- Enlace al proyecto --}}
                                    <div class="mt-10">

                                        <a
                                            href="{{ route('proyectos', $proyecto->slug) }}"
                                            class="inline-flex items-center gap-2 text-[10px]
                                                font-bold tracking-widest text-brand group/link"
                                        >
                                            <span>
                                                CONOCER EL PROYECTO
                                            </span>

                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="2.5"
                                                stroke="currentColor"
                                                class="w-4 h-4 transform
                                                    group-hover/link:translate-x-1
                                                    transition-transform"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                                                />
                                            </svg>

                                        </a>

                                    </div>

                                </div>

                                {{-- Imagen --}}
                                <div class="lg:col-span-5 order-1 lg:order-2">

                                    <div class="relative group/img">

                                        {{-- Resplandor --}}
                                        <div class="absolute -inset-2 bg-brand/20 blur-2xl
                                                    opacity-0 group-hover/img:opacity-100
                                                    transition duration-700 rounded-full">
                                        </div>

                                        <div class="relative overflow-hidden rounded-3xl
                                                    border border-gray-800 shadow-2xl">

                                            @if($proyecto->imagen_proyecto)

                                                <a href="{{ route('proyectos', $proyecto->slug) }}">

                                                    <img
                                                        src="{{ asset('storage/' . $proyecto->imagen_proyecto) }}"
                                                        alt="Solución web para {{ $proyecto->cliente_nombre }} desarrollada por Solucion-e"
                                                        class="w-full h-[350px] object-cover
                                                            filter grayscale hover:grayscale-0
                                                            transition duration-700 scale-105
                                                            hover:scale-100"
                                                    >

                                                </a>

                                            @else

                                                <div class="w-full h-[350px] flex items-center
                                                            justify-center bg-gray-950 text-gray-800
                                                            italic text-xs uppercase tracking-tighter">
                                                    {{ $proyecto->cliente_nombre }} / PROYECTO
                                                </div>

                                            @endif

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </article>

                    @empty

                        <div class="py-20 text-center border border-dashed
                                    border-gray-800 rounded-[40px]">

                            <p class="text-gray-600 italic font-light font-mono
                                    text-xs uppercase tracking-widest">
                                // Próximamente nuevos casos de éxito
                            </p>

                        </div>

                    @endforelse

                </div>

            </div>

        </section>
    {{-- Casos de éxito end --}}

    {{-- FAQs Restaurantes --}}
        <section id="preguntas-frecuentes" class="py-24 bg-gray-950 relative overflow-hidden">

            <div class="absolute bottom-0 right-0 w-96 h-96 bg-brand/5 blur-[120px] rounded-full"></div>

            <div class="max-w-5xl mx-auto px-6 relative z-10">

                <div class="max-w-3xl mb-16">

                    <span class="text-brand font-mono text-sm mb-4 block">
                        // PREGUNTAS FRECUENTES
                    </span>

                    <h2 class="text-4xl md:text-5xl font-black text-white italic uppercase tracking-tighter leading-none mb-6">
                        Preguntas sobre
                        <span class="text-brand">Soluciones Web para Restaurantes</span>
                    </h2>

                    <p class="text-gray-400 text-lg font-light leading-relaxed">
                        Resolvemos algunas de las dudas más comunes sobre el menú digital,
                        su administración, el código QR y la presencia web de tu restaurante.
                    </p>

                </div>

                <div class="space-y-4">

                    {{-- FAQ 01 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Puedo actualizar los platillos y precios sin depender de Solucion-e?
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
                            Sí. El menú incluye un panel de administración desde el que puedes
                            modificar categorías, platillos, precios, imágenes y otra información
                            del menú cuando lo necesites.
                        </p>

                    </details>

                    {{-- FAQ 02 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Qué pasa si un platillo se termina o deja de estar disponible?
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
                            Puedes desactivarlo temporalmente desde el panel para que deje de
                            aparecer en el menú. Cuando vuelva a estar disponible, simplemente
                            lo activas nuevamente.
                        </p>

                    </details>

                    {{-- FAQ 03 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Cómo funciona el código QR del menú?
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
                            El QR dirige directamente al menú digital del restaurante. Puedes
                            colocarlo en mesas, mostradores u otros puntos para que los clientes
                            lo consulten desde su celular sin instalar ninguna aplicación.
                        </p>

                    </details>

                    {{-- FAQ 04 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿La solución también ayuda a que mi restaurante aparezca en Google?
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
                            Incluye la revisión y optimización de la información principal de tu
                            Google Business Profile y un sitio web con una base técnica preparada
                            para buscadores. Sin embargo, dependen de factores como la competencia,
                            la ubicación, la relevancia y el comportamiento de búsqueda.
                        </p>

                    </details>

                    {{-- FAQ 05 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Necesito instalar algún programa para administrar el menú?
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
                            No. El panel funciona mediante tecnología web, por lo que puedes acceder
                            desde un navegador en computadora, tablet o teléfono con tus credenciales.
                        </p>

                    </details>

                    {{-- FAQ 06 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Esta solución incluye pedidos, delivery, inventario o punto de venta?
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
                            No. Esta solución está enfocada en mejorar la presencia web del restaurante,
                            mantener su información actualizada y ofrecer un menú digital autoadministrable.
                            Si tu negocio necesita funciones como delivery, inventario o punto de venta,
                            conviene utilizar una solución especializada para ese tipo de operación.
                        </p>

                    </details>

                </div>

            </div>

        </section>
    {{-- FAQs Restaurantes end --}}

    {{-- Contact Form --}}
        <x-components-web.shared.contact-form />
    {{-- end Contact Form --}}

@endsection
