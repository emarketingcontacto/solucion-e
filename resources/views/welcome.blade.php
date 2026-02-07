@extends('layouts-web.main')

@section('seo')
    <title>Solucion-e | Consultoría Digital y Desarrollo de Software</title>
    <meta name="description" content="Transformamos tu negocio con soluciones digitales a medida. Expertos en E-commerce, desarrollo de software y estrategias digitales para impulsar tu crecimiento.">
    <meta name="keywords" content="desarrollo web, e-commerce, soluciones digitales, consultoría IT, software a medida">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Solucion-e | Soluciones Digitales que Impulsan tu Negocio">
    <meta property="og:description" content="Desarrollo de software y consultoría digital experta. Creamos herramientas tecnológicas diseñadas para escalar tu empresa.">
    <meta property="og:image" content="{{ asset('images/og-welcome.webp') }}">

    @verbatim
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": "Organization",
                        "@id": "https://solucion-e.com.mx/#organization",
                        "name": "Solucion-e",
                        "url": "https://solucion-e.com.mx",
                        "logo": "https://solucion-e.com.mx/images/logo.png",
                        "image": "https://solucion-e.com.mx/images/og-welcome.webp",
                        "description": "Agencia de desarrollo tecnológico en León, Guanajuato, especializada en sistemas de captación, SEO local y software de élite.",
                        "address": {
                            "@type": "PostalAddress",
                            "addressLocality": "León",
                            "addressRegion": "Guanajuato",
                            "addressCountry": "MX"
                        },
                        "sameAs": [
                            "https://facebook.com/DesarrolloWebyMktDigital",
                            "https://linkedin.com/in/marketo-contact/"
                        ],
                        "hasOfferCatalog": {
                            "@type": "OfferCatalog",
                            "name": "Servicios de Solucion-e",
                            "itemListElement": [
                                {
                                    "@type": "Offer",
                                    "itemOffered": {
                                        "@type": "Service",
                                        "name": "Dominio Local Inteligente (SEO)",
                                        "url": "https://solucion-e.com.mx/seo-local"
                                    }
                                },
                                {
                                    "@type": "Offer",
                                    "itemOffered": {
                                        "@type": "Service",
                                        "name": "Ecosistemas Digitales para Restaurantes",
                                        "url": "https://solucion-e.com.mx/soluciones-web-restaurantes"
                                    }
                                },
                                {
                                    "@type": "Offer",
                                    "itemOffered": {
                                        "@type": "Service",
                                        "name": "E-commerce de Élite",
                                        "url": "https://solucion-e.com.mx/tiendas-web-ecommerce"
                                    }
                                },
                                {
                                    "@type": "Offer",
                                    "itemOffered": {
                                        "@type": "Service",
                                        "name": "Ingeniería de Software a Medida",
                                        "url": "https://solucion-e.com.mx/herramientas-digitales-especializadas"
                                    }
                                }
                            ]
                        }
                    },
                    {
                        "@type": "WebSite",
                        "@id": "https://solucion-e.com.mx/#website",
                        "url": "https://solucion-e.com.mx",
                        "name": "Solucion-e",
                        "publisher": {
                            "@id": "https://solucion-e.com.mx/#organization"
                        }
                    },
                    {
                        "@type": "FAQPage",
                        "mainEntity": [
                            {
                                "@type": "Question",
                                "name": "¿El sistema o página web me pertenece al finalizar?",
                                "acceptedAnswer": {
                                    "@type": "Answer",
                                    "text": "Totalmente. Una vez liquidado el proyecto, te entregamos el código fuente y las credenciales de tus cuentas. Sin rentas ocultas."
                                }
                            },
                            {
                                "@type": "Question",
                                "name": "¿Es difícil administrar mi propio catálogo?",
                                "acceptedAnswer": {
                                    "@type": "Answer",
                                    "text": "Para nada. Utilizamos Filament, el panel administrativo más intuitivo del mercado para gestionar productos y clientes."
                                }
                            }
                        ]
                    }
                ]
            }
            </script>
        @endverbatim


@endsection

@section('content')

    {{-- Hero Section --}}
        <section class="relative pt-32 pb-20 px-6 overflow-hidden bg-gray-950">
            {{-- Imagen de fondo --}}
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/header1.jpg') }}"
                    class="w-full h-full object-cover opacity-60 scale-105 blur-[2px]"
                    alt="Background">
                {{-- Gradiente sutil para suavizar la transición inferior --}}
                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-gray-950/20 to-gray-950"></div>
            </div>
            {{-- Círculos de luz decorativos --}}
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-brand/25 blur-[130px] rounded-full animate-pulse-slow"></div>
            <div class="max-w-7xl mx-auto text-center relative z-10">
                <span class="inline-block py-1 px-3 border border-brand/30 text-brand text-[10px] font-bold tracking-[0.3em] uppercase rounded-full mb-8">
                    Innovación & Rendimiento
                </span>
                <h1 class="text-6xl md:text-8xl font-black mb-8 italic tracking-tighter leading-none text-white">
                    SOFTWARE <br> <span class="text-brand">SIN LÍMITES</span>
                </h1>
                {{-- Subimos un poco el contraste del texto para que brille sobre el fondo --}}
                <p class="text-white/90 max-w-2xl mx-auto text-lg md:text-xl font-light drop-shadow-md">
                    En <span class="text-brand font-semibold">Solucion-<span class="text-red-500">e</span></span>, transformamos la complejidad técnica en una ventaja competitiva para tu negocio.
                </p>
            </div>
        </section>
    {{-- Hero Section end --}}

    {{-- Grid de Servicios --}}
        <section class="max-w-7xl mx-auto px-6 py-20">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-4">
                <div>
                    <h2 class="text-brand font-mono text-sm mb-2">// 01. SERVICIOS DISPONIBLES</h2>
                    <p class="text-4xl font-bold">Catálogo Especializado</p>
                </div>
                <p class="text-gray-500 text-sm max-w-xs">
                    Seleccionados meticulosamente para garantizar la estabilidad de tu infraestructura digital.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                @foreach($servicios as $servicio)
                     <x-components-web.servicios-card :servicio=$servicio></x-components-web.servicios-card>                                                                                                                                                                                                                                                                                                                                                                                                        {{-- <x-components-web.servicio-card :servicio="$servicio"/> --}}
                @endforeach
            </div>
        </section>
    {{-- Grid de Servicios end --}}

    {{-- Sección Case Studies --}}
        <section class="max-w-7xl mx-auto px-6 py-20 border-t border-white/5">
            <div class="mb-16">
                <h2 class="text-brand font-mono text-sm mb-2">// 02. CASOS DE ÉXITO</h2>
                <p class="text-4xl font-bold italic text-white uppercase tracking-tight">PROYECTOS QUE IMPULSAN</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                {{-- Proyectos --}}
                @forelse ($proyectos as $proyecto)
                    <x-components-web.proyectos-card :proyecto=$proyecto></x-components-web.proyectos-card>
                @empty
                    <p class="text-brand">No items to show</p>
                @endforelse


                {{-- Aquí puedes poner el placeholder de "Próximamente: Veterinarios" --}}
            </div>
        </section>
    {{-- Sección Case Studies end --}}

    {{-- About us --}}
        <section id="about" class="py-24 bg-gray-900/30 relative overflow-hidden">
            {{-- Decoración sutil de fondo --}}
            <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/4 w-96 h-96 bg-brand/5 rounded-full blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-6 relative">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                    {{-- Lado Izquierdo: Texto --}}
                    <div>
                        <span class="text-brand text-xs font-mono uppercase tracking-widest block mb-4">
                            [ Nuestra Esencia ]
                        </span>
                        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                            Más que código, <span class="italic text-brand">soluciones</span> que impulsan negocios.
                        </h2>

                        <div class="space-y-6 text-gray-400 text-lg font-light leading-relaxed">
                            <p>
                                En <strong class="text-white font-semibold italic">Solucion-e</strong>, nacimos en León, Guanajuato, con una misión clara: democratizar la tecnología de alto nivel para las empresas locales.
                            </p>
                            <p>
                                Creemos que una veterinaria, una rentadora de inflables o una inmobiliaria merecen herramientas tan potentes como las de una transnacional. No importa el tamaño de tu negocio, la eficiencia debe ser tu estándar.
                            </p>
                            <p class="text-gray-300">
                                No somos solo programadores; somos tus <span class="text-brand font-medium">aliados tecnológicos</span>. Nos apasiona ver cómo un sistema bien hecho devuelve tiempo y tranquilidad a los dueños de negocios.
                            </p>
                        </div>

                        {{-- Pequeño Badge de Ubicación --}}
                        <div class="mt-10 flex items-center gap-3 text-sm font-mono text-gray-500 uppercase">
                            <svg class="w-5 h-5 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>Orgullosamente desde León, Guanajuato.</span>
                        </div>
                    </div>

                    {{-- Lado Derecho: Imagen --}}
                    <div class="relative group">
                        {{-- Resplandor de fondo --}}
                        <div class="absolute inset-0 bg-brand/20 blur-[100px] rounded-full opacity-50 group-hover:opacity-100 transition-opacity"></div>

                        {{-- Cambio de z-1 a z-10 --}}
                        <img src="{{ asset('images/about-us.webp') }}"
                            alt="Soluciones tecnológicas Solucion-e"
                            class="relative z-10 w-full h-auto drop-shadow-2xl transform group-hover:-translate-y-2 transition-transform duration-500">

                        {{-- Elemento flotante --}}
                        <div class="absolute -bottom-6 -left-6 bg-gray-800 border border-brand/50 p-4 rounded-xl shadow-2xl hidden md:block z-20">
                            <p class="text-brand font-mono text-2xl font-bold">100%</p>
                            <p class="text-white text-xs uppercase tracking-tighter">Compromiso local</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    {{-- About us end --}}

    {{-- Process --}}
        <section id="proceso" class="py-24 bg-gray-900">
            <div class="max-w-7xl mx-auto px-6">

                {{-- Encabezado de sección --}}
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                        ¿Cómo llevamos tu negocio al <span class="text-brand italic">siguiente nivel</span>?
                    </h2>
                    <p class="text-gray-400 max-w-2xl mx-auto">
                        No lanzamos código al azar. Seguimos un método probado para asegurar que cada línea de desarrollo se traduzca en resultados para ti.
                    </p>
                </div>

                {{-- Grid de pasos --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">

                    {{-- Paso 01 --}}
                    <div class="p-8 rounded-2xl bg-gray-800/50 border border-white/5 relative group hover:border-brand/30 transition-colors">
                        <div class="text-brand font-mono text-5xl font-bold opacity-20 mb-4 group-hover:opacity-100 transition-opacity">01</div>
                        <h3 class="text-xl font-bold text-white mb-3 tracking-tight">Diagnóstico y Estrategia</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Analizamos tu modelo de negocio y tus puntos de dolor. No te vendemos una web, te proponemos la herramienta que realmente necesitas para optimizar tus tiempos.
                        </p>
                    </div>

                    {{-- Paso 02 --}}
                    <div class="p-8 rounded-2xl bg-gray-800/50 border border-white/5 relative group hover:border-brand/30 transition-colors">
                        <div class="text-brand font-mono text-5xl font-bold opacity-20 mb-4 group-hover:opacity-100 transition-opacity">02</div>
                        <h3 class="text-xl font-bold text-white mb-3 tracking-tight">Desarrollo Ágil</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Construimos usando el stack más moderno (Laravel + Filament). Tendrás acceso a un entorno de pruebas para validar avances y asegurar que todo marche según lo planeado.
                        </p>
                    </div>

                    {{-- Paso 03 --}}
                    <div class="p-8 rounded-2xl bg-gray-800/50 border border-white/5 relative group hover:border-brand/30 transition-colors">
                        <div class="text-brand font-mono text-5xl font-bold opacity-20 mb-4 group-hover:opacity-100 transition-opacity">03</div>
                        <h3 class="text-xl font-bold text-white mb-3 tracking-tight">Lanzamiento y Evolución</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Desplegamos tu solución en servidores optimizados. Te capacitamos para que domines tu panel y te acompañamos con soporte técnico para que nunca dejes de operar.
                        </p>
                    </div>

                </div>
            </div>
        </section>
    {{-- Process end --}}

    {{-- FAQs --}}
        <section id="faq" class="py-24 bg-gray-900/50">
            <div class="max-w-4xl mx-auto px-6">

                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                        Preguntas <span class="text-brand italic">Frecuentes</span>
                    </h2>
                    <p class="text-gray-400">
                        Resolvemos tus dudas para que inicies tu proyecto con total confianza.
                    </p>
                </div>

                <div class="space-y-4">
                    {{-- Pregunta 1 --}}
                    <details class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden" open>
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿El sistema o página web me pertenece al finalizar?
                            </h3>
                            <span class="text-brand transition group-open:rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </summary>
                        <p class="mt-4 text-gray-400 leading-relaxed">
                            Totalmente. En Solucion- <span class="text-red-500">e</span>  creemos en la libertad de nuestros clientes. Una vez liquidado el proyecto, te entregamos el código fuente y las credenciales de tus cuentas. Sin rentas ocultas ni "letras chiquitas".
                        </p>
                    </details>

                    {{-- Pregunta 2 --}}
                    <details class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Es difícil administrar mi propio catálogo o inventario?
                            </h3>
                            <span class="text-brand transition group-open:rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </summary>
                        <p class="mt-4 text-gray-400 leading-relaxed">
                            Para nada. Utilizamos **Filament**, el panel administrativo más intuitivo del mercado. Si sabes usar una red social, sabrás subir productos, cambiar precios y gestionar tus clientes desde cualquier dispositivo.
                        </p>
                    </details>

                    {{-- Pregunta 3 --}}
                    <details class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Cuánto tiempo toma tener listo mi proyecto?
                            </h3>
                            <span class="text-brand transition group-open:rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </summary>
                        <p class="mt-4 text-gray-400 leading-relaxed">
                            Depende de la complejidad, pero una solución estándar suele estar lista entre **2 a 4 semanas**. Trabajamos con metodologías ágiles para que tengas avances funcionales desde la primera semana.
                        </p>
                    </details>

                    {{-- Pregunta 4 --}}
                    <details class="group bg-gray-800/30 border border-white/5 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-lg font-medium text-white group-hover:text-brand transition-colors">
                                ¿Qué pasa si necesito funciones nuevas después?
                            </h3>
                            <span class="text-brand transition group-open:rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </summary>
                        <p class="mt-4 text-gray-400 leading-relaxed">
                            Nuestros sistemas son **escalables**. Al usar tecnologías robustas como Laravel, podemos agregar módulos de pagos, facturación o automatizaciones en el futuro sin tener que empezar desde cero.
                        </p>
                    </details>
                </div>
            </div>
        </section>
        <script src="{{asset('/scripts/scripts.js')}}"></script>
    {{-- FAQs end --}}

    {{-- Contact --}}
        <x-components-web.contacto-home></x-components-web.contacto-home>
    {{-- Contact --}}

@endsection {{-- main content end--}}
