@extends('layouts-web.main')

@section('seo')
    <title>{{ $titulo }}</title>
    <meta name="description" content="{{ $meta_desc }}">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph / Redes Sociales --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $titulo }}">
    <meta property="og:description" content="{{ $meta_desc }}">
    <meta property="og:image" content="{{ asset('images/header4.webp') }}">

    {{-- Schema --}}
        @verbatim
            <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": "Service",
                        "@id": "https://solucion-e.com.mx/plataformas-web-personalizadas/#service",
                        "name": "Plataformas Web Personalizadas en León",
                        "url": "https://solucion-e.com.mx/plataformas-web-personalizadas/",
                        "serviceType": "Desarrollo de plataformas web personalizadas",
                        "description": "Desarrollo de plataformas web personalizadas para negocios y PyMEs en León, orientadas a organizar información, digitalizar procesos específicos y mejorar el control de su operación.",
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
                    src="{{ asset('images/header4.webp') }}"
                    class="w-full h-full object-cover opacity-80 grayscale"
                    alt="Plataformas web personalizadas en León - Solucion-e"
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
                    PLATAFORMAS WEB PARA NEGOCIOS
                </span>

                {{-- H1 --}}
                <h1 class="text-5xl md:text-7xl font-black mb-8 italic tracking-tighter
                        leading-none text-white uppercase">

                    <span class="text-brand">
                        Plataformas Web Personalizadas en León
                    </span>

                    <br>

                    <span class="text-3xl md:text-4xl">
                        adaptadas a la forma en que funciona tu negocio
                    </span>

                </h1>

                {{-- Descripción --}}
                <div class="max-w-3xl mx-auto space-y-6">

                    <p class="text-gray-400 text-lg md:text-xl font-light leading-relaxed">
                        Desarrollamos plataformas web para
                        <span class="text-white font-semibold">organizar información</span>,
                        digitalizar procesos específicos y mejorar el
                        <span class="text-brand font-semibold">control de tu operación</span>
                        desde cualquier dispositivo.
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
                            aria-label="Solicitar información sobre una plataforma web personalizada"
                        >
                            <span class="relative z-10">
                                Cuéntanos qué necesitas organizar
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
                            aria-label="Ver cómo funciona una plataforma web personalizada de Solucion-e"
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

    {{-- Cómo funciona una Plataforma Web Personalizada --}}
        <section id="como-funciona" class="py-24 bg-gray-950 border-y border-white/5">

            <div class="max-w-7xl mx-auto px-6">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                    {{-- Columna Izquierda --}}
                    <div class="order-2 lg:order-1">

                        <span class="text-brand font-mono text-sm mb-4 block">
                            // CÓMO FUNCIONA
                        </span>

                        <h2 class="text-4xl md:text-5xl font-black text-white italic uppercase tracking-tighter mb-8 leading-none">
                            La tecnología se adapta
                            <span class="text-brand">a la forma en que trabaja tu negocio</span>
                        </h2>

                        <div class="space-y-6 text-gray-400 font-light">

                            <p class="text-lg">
                                Cuando una hoja de cálculo, mensajes, documentos o tareas manuales
                                empiezan a dificultar el trabajo diario, una plataforma web puede
                                concentrar esa información y facilitar parte de la operación.
                            </p>

                            <div class="flex gap-4">
                                <div class="flex-none w-1 h-auto bg-brand/50"></div>

                                <p>
                                    <strong class="text-white uppercase text-xs block mb-1">
                                        Entendemos el proceso
                                    </strong>

                                    Primero analizamos cómo realiza actualmente el negocio una tarea,
                                    qué información utiliza, quién participa y dónde aparecen los
                                    principales problemas.
                                </p>
                            </div>

                            <div class="flex gap-4">
                                <div class="flex-none w-1 h-auto bg-white/30"></div>

                                <p>
                                    <strong class="text-white uppercase text-xs block mb-1">
                                        Digitalizamos lo necesario
                                    </strong>

                                    Convertimos las partes del proceso que realmente aportan valor
                                    en herramientas web fáciles de utilizar desde distintos dispositivos.
                                </p>
                            </div>

                            <div class="flex gap-4">
                                <div class="flex-none w-1 h-auto bg-brand/30"></div>

                                <p>
                                    <strong class="text-white uppercase text-xs block mb-1">
                                        Centralizamos la información
                                    </strong>

                                    Clientes, citas, servicios, expedientes, seguimiento u otros datos
                                    pueden quedar organizados dentro de una misma plataforma según
                                    las necesidades del negocio.
                                </p>
                            </div>

                            <p class="pt-4 border-t border-gray-800 text-sm">
                                El objetivo no es digitalizar todo por digitalizar, sino
                                <span class="text-brand">
                                    resolver procesos específicos que hoy dificultan la operación.
                                </span>
                            </p>

                        </div>

                    </div>

                    {{-- Columna Derecha --}}
                    <div class="order-1 lg:order-2">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                            {{-- Card 01 --}}
                            <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="text-brand font-bold text-xl">01</span>

                                    <h3 class="text-white font-bold uppercase text-[10px] tracking-widest">
                                        Diagnóstico
                                    </h3>
                                </div>

                                <p class="text-gray-500 text-[11px] leading-relaxed">
                                    Revisamos cómo funciona actualmente el proceso y qué problema
                                    necesita resolver el negocio.
                                </p>

                            </div>

                            {{-- Card 02 --}}
                            <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="text-brand font-bold text-xl">02</span>

                                    <h3 class="text-white font-bold uppercase text-[10px] tracking-widest">
                                        Diseño
                                    </h3>
                                </div>

                                <p class="text-gray-500 text-[11px] leading-relaxed">
                                    Definimos información, funcionalidades, usuarios y flujo de trabajo
                                    antes de comenzar el desarrollo.
                                </p>

                            </div>

                            {{-- Card 03 --}}
                            <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="text-brand font-bold text-xl">03</span>

                                    <h3 class="text-white font-bold uppercase text-[10px] tracking-widest">
                                        Desarrollo
                                    </h3>
                                </div>

                                <p class="text-gray-500 text-[11px] leading-relaxed">
                                    Construimos la plataforma alrededor del proceso real del negocio,
                                    incorporando solamente las funciones necesarias.
                                </p>

                            </div>

                            {{-- Card 04 --}}
                            <div class="p-6 bg-white/5 border border-white/10 rounded-3xl hover:border-brand/40 transition-colors">

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="text-brand font-bold text-xl">04</span>

                                    <h3 class="text-white font-bold uppercase text-[10px] tracking-widest">
                                        Evolución
                                    </h3>
                                </div>

                                <p class="text-gray-500 text-[11px] leading-relaxed">
                                    La plataforma puede incorporar nuevas funciones conforme aparecen
                                    nuevas necesidades en la operación del negocio.
                                </p>

                            </div>

                        </div>

                        {{-- Elemento visual --}}
                        <div class="mt-6 p-6 bg-gray-900/50 border border-white/5 rounded-3xl">

                            <p class="text-[10px] font-mono text-gray-500 uppercase tracking-widest mb-4">
                                Ejemplos de procesos
                            </p>

                            <div class="flex flex-wrap gap-2">

                                @foreach([
                                    'Clientes',
                                    'Citas',
                                    'Expedientes',
                                    'Servicios',
                                    'Inventario',
                                    'Seguimiento',
                                    'Pagos',
                                    'Información'
                                ] as $proceso)

                                    <span class="px-3 py-2 rounded-lg bg-brand/5 border border-brand/10 text-brand text-xs">
                                        {{ $proceso }}
                                    </span>

                                @endforeach

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
    {{-- Cómo funciona una Plataforma Web Personalizada end --}}

    {{-- Qué incluye Plataformas Web Personalizadas --}}
        <section id="que-incluye" class="py-24 bg-gray-900/40 relative overflow-hidden">

            {{-- Decoración --}}
            <div class="absolute -left-20 top-1/2 -translate-y-1/2 w-96 h-96 bg-brand/5 blur-[120px] rounded-full"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">

                {{-- Encabezado --}}
                <div class="max-w-3xl mb-16">

                    <span class="text-brand font-mono text-sm mb-4 block">
                        // PLATAFORMAS WEB SOLUCION-E
                    </span>

                    <h2 class="text-4xl md:text-5xl font-black text-white italic uppercase tracking-tighter leading-none mb-6">
                        ¿Qué incluye una
                        <span class="text-brand">Plataforma Web Personalizada?</span>
                    </h2>

                    <p class="text-gray-400 text-lg font-light leading-relaxed">
                        Desarrollamos cada plataforma alrededor de los
                        <span class="text-brand">procesos, información y necesidades</span>
                        de tu negocio, incorporando las herramientas necesarias para
                        organizar su operación y tener mayor control.
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
                                Procesos
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Funcionalidades a la medida
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Desarrollamos las funciones necesarias para resolver procesos
                            específicos del negocio, evitando incorporar herramientas que
                            no aporten valor a su operación.
                        </p>

                    </article>

                    {{-- 02 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                02
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Información
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Información centralizada
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Organizamos la información relevante en un mismo lugar para
                            facilitar su consulta, actualización y seguimiento durante
                            la operación diaria.
                        </p>

                    </article>

                    {{-- 03 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                03
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Control
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Panel de administración
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Creamos un panel desde el que puedes administrar la información,
                            consultar registros y controlar las funciones que forman parte
                            de la plataforma.
                        </p>

                    </article>

                    {{-- 04 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                04
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Usuarios
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Accesos y permisos
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Cuando el proceso lo requiere, podemos definir diferentes
                            usuarios y permisos para controlar quién puede consultar,
                            registrar o modificar determinada información.
                        </p>

                    </article>

                    {{-- 05 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                05
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Acceso
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Disponible desde cualquier dispositivo
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            Al utilizar tecnología web puedes acceder a la plataforma
                            desde computadora, tablet o teléfono mediante un navegador,
                            sin depender de un equipo específico.
                        </p>

                    </article>

                    {{-- 06 --}}
                    <article class="group p-8 rounded-3xl bg-gray-950/60 border border-white/5 hover:border-brand/30 transition-colors">

                        <div class="flex items-center justify-between mb-6">
                            <span class="text-brand font-mono text-3xl font-bold opacity-40 group-hover:opacity-100 transition-opacity">
                                06
                            </span>

                            <span class="text-[10px] font-mono uppercase tracking-widest text-gray-600">
                                Evolución
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">
                            Capacidad de crecimiento
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed">
                            La plataforma puede incorporar nuevas funciones conforme
                            cambian los procesos y aparecen nuevas necesidades dentro
                            del negocio.
                        </p>

                    </article>

                </div>

                {{-- Nota final --}}
                <div class="mt-12 border-l-2 border-brand/40 pl-6 max-w-3xl">

                    <p class="text-gray-400 leading-relaxed">
                        Cada plataforma la desarrollamos de acuerdo con los
                        <span class="text-brand">
                            procesos, necesidades y objetivos de cada negocio.
                        </span>
                    </p>

                </div>

            </div>

        </section>
    {{-- Qué incluye Plataformas Web Personalizadas end --}}

    {{-- Casos de éxito --}}
        <div class="max-w-7xl mx-auto px-6 py-20">

            {{-- Encabezado --}}
            <span class="text-brand font-mono text-sm mb-4 block">
                // SOLUCIONES EN OPERACIÓN
            </span>

            <h2 class="text-4xl md:text-5xl font-black text-white italic uppercase tracking-tighter leading-none mb-6">
                Plataformas creadas para
                <span class="text-brand">resolver problemas reales</span>
            </h2>

            <p class="text-gray-400 text-lg font-light max-w-3xl mb-12">
                Cada negocio funciona de manera diferente. Conoce algunos proyectos
                donde <span class="text-brand">transformamos</span> necesidades y procesos específicos en <span class="text-brand">plataformas
                web</span> diseñadas para <span class="text-brand">organizar</span> información y mejorar el <span class="text-brand">control</span> de la operación.
            </p>

            {{-- Proyectos --}}
            <div class="space-y-16">

                @forelse($proyectos as $proyecto)

                    <article class="bg-gray-900/30 border border-gray-800 p-8 md:p-12 rounded-[40px] hover:border-brand/30 transition-colors duration-500">

                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                            {{-- Información del proyecto --}}
                            <div class="lg:col-span-7 order-2 lg:order-1">

                                <h3 class="text-4xl font-black mb-8 text-white italic tracking-tighter uppercase">
                                    {{ $proyecto->cliente_nombre }}
                                </h3>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8 text-gray-400 italic">

                                    {{-- Necesidad --}}
                                    <div class="md:col-span-2 border-b border-gray-800 pb-6">

                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">
                                            La Necesidad
                                        </p>

                                        <div class="text-sm leading-relaxed">
                                            {!! $proyecto->problema !!}
                                        </div>

                                    </div>

                                    {{-- Solución --}}
                                    <div class="pt-2">

                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">
                                            La Solución
                                        </p>

                                        <div class="text-xs font-light leading-relaxed">
                                            {!! $proyecto->solucion !!}
                                        </div>

                                    </div>

                                    {{-- Resultado --}}
                                    <div class="pt-2">

                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">
                                            El Resultado
                                        </p>

                                        <div class="text-xs font-light leading-relaxed">
                                            {!! $proyecto->resultado !!}
                                        </div>

                                    </div>

                                </div>

                                {{-- Enlace al caso de éxito --}}
                                <div class="mt-10">

                                    <a
                                        href="{{ route('proyectos', $proyecto->slug) }}"
                                        class="inline-flex items-center gap-2 text-[10px] font-bold tracking-widest text-brand group/link"
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
                                            class="w-4 h-4 transform group-hover/link:translate-x-1 transition-transform"
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

                            {{-- Imagen del proyecto --}}
                            <div class="lg:col-span-5 order-1 lg:order-2">

                                <div class="relative group/img">

                                    {{-- Resplandor --}}
                                    <div class="absolute -inset-2 bg-brand/20 blur-2xl opacity-0 group-hover/img:opacity-100 transition duration-700 rounded-full"></div>

                                    <div class="relative overflow-hidden rounded-3xl border border-gray-800 shadow-2xl">

                                        @if($proyecto->imagen_proyecto)

                                            <a href="{{ route('proyectos', $proyecto->slug) }}">

                                                <img
                                                    src="{{ asset('storage/' . $proyecto->imagen_proyecto) }}"
                                                    alt="Plataforma web personalizada desarrollada para {{ $proyecto->cliente_nombre }} por Solucion-e"
                                                    class="w-full h-[350px] object-cover filter grayscale hover:grayscale-0 transition duration-700 scale-105 hover:scale-100"
                                                >

                                            </a>

                                        @else

                                            <div class="w-full h-[350px] flex items-center justify-center bg-gray-950 text-gray-800 italic text-xs uppercase tracking-tighter">
                                                {{ $proyecto->cliente_nombre }}
                                            </div>

                                        @endif

                                    </div>

                                </div>

                            </div>

                        </div>

                    </article>

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

    {{-- FAQs Plataformas Web Personalizadas --}}
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
                        <span class="text-brand">Plataformas Web Personalizadas</span>
                    </h2>

                    <p class="text-gray-400 text-lg font-light leading-relaxed">
                        Resolvemos algunas de las dudas más comunes sobre cómo una plataforma
                        web personalizada puede ayudar a organizar información, digitalizar
                        procesos y mejorar el control de tu negocio.
                    </p>

                </div>

                {{-- Acordeón --}}
                <div class="space-y-4">

                    {{-- FAQ 01 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Cómo sé si mi negocio necesita una plataforma web personalizada?
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
                            Puede ser una buena opción cuando la información de tu negocio está
                            dispersa entre hojas de cálculo, documentos o mensajes, cuando realizas
                            tareas repetitivas de forma manual o cuando resulta difícil consultar
                            y dar seguimiento a la información necesaria para la operación.
                            Analizamos primero el problema para determinar si una plataforma web
                            realmente es la solución adecuada.
                        </p>

                    </details>

                    {{-- FAQ 02 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Qué tipo de procesos se pueden digitalizar?
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
                            Depende de la forma en que funciona cada negocio. Podemos desarrollar
                            herramientas para administrar clientes, citas, servicios, expedientes,
                            inventario, seguimiento, pagos u otros procesos específicos.
                            El objetivo no es digitalizar todo, sino identificar qué partes de la
                            operación pueden beneficiarse realmente de una solución web.
                        </p>

                    </details>

                    {{-- FAQ 03 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Cómo determinan qué funcionalidades necesita mi plataforma?
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
                            Primero entendemos cómo realizas actualmente el proceso, qué información
                            utilizas, quién participa y qué problemas necesitas resolver. A partir
                            de ese análisis definimos las funcionalidades necesarias y diseñamos
                            la plataforma alrededor de la operación real de tu negocio.
                        </p>

                    </details>

                    {{-- FAQ 04 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Tengo que cambiar la forma en que trabaja mi negocio para utilizarla?
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
                            No partimos de un sistema predeterminado al que tengas que adaptar tu
                            negocio. Primero observamos cómo funciona tu operación y desarrollamos
                            la plataforma alrededor de los procesos que necesitas resolver.
                            Si detectamos oportunidades para simplificar o mejorar alguna parte
                            del proceso, las evaluamos contigo antes de incorporarlas.
                        </p>

                    </details>

                    {{-- FAQ 05 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Qué pasa si después necesito nuevas funcionalidades?
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
                            La plataforma puede evolucionar conforme cambian los procesos y aparecen
                            nuevas necesidades en tu negocio. Podemos analizar nuevas funcionalidades
                            e incorporarlas cuando aporten valor a la operación, sin necesidad de
                            desarrollar desde el inicio herramientas que todavía no necesitas.
                        </p>

                    </details>

                    {{-- FAQ 06 --}}
                    <details name="faq"
                        class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">

                        <summary class="flex items-center justify-between cursor-pointer gap-6">

                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Cuánto cuesta desarrollar una plataforma web personalizada?
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
                            El costo depende del problema que necesitamos resolver, los procesos
                            involucrados y las funcionalidades que requiera la plataforma.
                            Primero analizamos las necesidades del negocio y definimos el alcance
                            del proyecto; con esa información podemos determinar el desarrollo
                            necesario y preparar una cotización.
                        </p>

                    </details>

                </div>

            </div>

        </section>
    {{-- FAQs Plataformas Web Personalizadas end --}}

    {{-- Contact Form --}}
        <x-components-web.shared.contact-form />
    {{-- end Contact Form --}}


@endsection
