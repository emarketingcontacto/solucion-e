@extends('layouts-web.main')

@section('seo')
    <title>{{ $titulo }} | Software a Medida y Automatización</title>
    <meta name="description" content="{{ $meta_desc }}">
    <meta name="keywords" content="desarrollo de software a medida, sistemas de gestión cloud, saas development, automatización de procesos, aplicaciones empresariales laravel">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph / Redes Sociales --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Software a Medida: Convertimos Procesos en Potencia | Solucion-e">
    <meta property="og:description" content="Desarrollamos herramientas digitales que se adaptan a tu flujo de trabajo. Especialistas en SaaS, sistemas de gestión y automatización operativa.">
    <meta property="og:image" content="{{ asset('images/og-welcome.webp') }}">

    @verbatim
        <script type="application/ld+json">
            {
                "@context": "https://schema.org/",
                "@type": "Service",
                "serviceType": "Desarrollo de Software a Medida y Plataformas SaaS",
                "provider": {
                    "@type": "LocalBusiness",
                    "name": "Solucion-e",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "León",
                        "addressRegion": "Guanajuato",
                        "addressCountry": "MX"
                    }
                },
                "description": "Ingeniería de software empresarial. Creación de sistemas de gestión (ERP/CRM), plataformas SaaS escalables y automatización de procesos operativos.",
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "Software Engineering Services",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Desarrollo SaaS Escalable",
                                "description": "Arquitecturas multi-inquilino preparadas para el crecimiento masivo."
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Sistemas de Gestión Cloud",
                                "description": "Software administrativo diseñado específicamente para el flujo de trabajo de tu empresa."
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
                {{-- Sugerencia: Una imagen de interfaz de software o dashboard --}}
                <img src="{{ asset('images/header4.webp') }}"
                    class="w-full h-full object-cover opacity-80 grayscale"
                    alt="Software a medida Solucion-e"
                    fetchpriority="high">
                <div class="absolute inset-0 bg-gradient-to-b from-gray-950 via-gray-950/60 to-gray-950"></div>
                <div class="absolute inset-0 bg-brand/5 mix-blend-color"></div>
            </div>

            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[400px] bg-brand/10 blur-[120px] rounded-full z-10"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-20 text-center">
                {{-- Badge --}}
                <span class="inline-block py-1 px-4 border border-brand/30 text-brand text-[10px] font-bold tracking-[0.4em] uppercase rounded-full mb-8 animate-pulse">
                    Desarrollo a Medida
                </span>

                <h1 class="text-5xl md:text-7xl font-black mb-8 italic tracking-tighter leading-none text-white uppercase">
                    HERRAMIENTAS <br> <span class="text-brand">DIGITALES PROPIAS</span>
                </h1>

                <div class="max-w-3xl mx-auto space-y-6">
                    <p class="text-gray-400 text-lg md:text-xl font-light leading-relaxed">
                        Convertimos procesos complejos en interfaces <span class="text-white font-bold italic">Intuitivas y Potentes</span>.
                        Desde sistemas de gestión para <span class="text-white">Clínicas Veterinarias</span> hasta plataformas SaaS escalables,
                        creamos software que se adapta a tu flujo de trabajo, no al revés.
                    </p>

                    {{-- Los 3 Pilares de Apps --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-8 text-left">
                        <div class="bg-white/5 border border-white/10 p-4 rounded-2xl backdrop-blur-sm">
                            <p class="text-brand font-mono text-[10px] mb-1">// AUTOMATIZACIÓN</p>
                            <p class="text-white text-xs font-bold uppercase">Reducción de carga operativa</p>
                        </div>
                        <div class="bg-white/5 border border-white/10 p-4 rounded-2xl backdrop-blur-sm">
                            <p class="text-brand font-mono text-[10px] mb-1">// ACCESIBILIDAD</p>
                            <p class="text-white text-xs font-bold uppercase">Cloud Multi-dispositivo</p>
                        </div>
                        <div class="bg-white/5 border border-white/10 p-4 rounded-2xl backdrop-blur-sm">
                            <p class="text-brand font-mono text-[10px] mb-1">// DATOS</p>
                            <p class="text-white text-xs font-bold uppercase">Reportes e Insight en Tiempo Real</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{-- Hero Section --}}

    {{-- Sección: El valor de lo Propio --}}
        <section class="py-24 bg-gray-950 border-y border-white/5">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                    <div class="order-2 lg:order-1">
                        <div class="inline-block px-3 py-1 bg-brand/10 border border-brand/20 rounded-lg mb-6">
                            <p class="text-brand font-mono text-[10px] uppercase tracking-widest">SaaS vs Software Rentado</p>
                        </div>
                        <h3 class="text-3xl md:text-4xl font-black text-white italic uppercase tracking-tighter mb-8">
                            NO ADAPTES TU NEGOCIO <br> <span class="text-brand">AL SOFTWARE</span>.
                        </h3>

                        <div class="space-y-8">
                            <div class="relative pl-8">
                                <div class="absolute left-0 top-0 w-[2px] h-full bg-gradient-to-b from-brand to-transparent"></div>
                                <h4 class="text-white font-bold text-sm uppercase mb-2">Propiedad Intelectual</h4>
                                <p class="text-gray-400 text-sm font-light">A diferencia de las suscripciones mensuales que nunca terminas de pagar, un sistema a medida es un activo de tu empresa. El código trabaja para ti, bajo tus reglas.</p>
                            </div>

                            <div class="relative pl-8">
                                <div class="absolute left-0 top-0 w-[2px] h-full bg-gradient-to-b from-brand to-transparent"></div>
                                <h4 class="text-white font-bold text-sm uppercase mb-2">Escalabilidad Sin Límites</h4>
                                <p class="text-gray-400 text-sm font-light">¿Necesitas una nueva función mañana? Lo construimos. Tu software crece al mismo ritmo que tus necesidades operativas.</p>
                            </div>

                            <div class="relative pl-8">
                                <div class="absolute left-0 top-0 w-[2px] h-full bg-gradient-to-b from-brand to-transparent"></div>
                                <h4 class="text-white font-bold text-sm uppercase mb-2">Seguridad y Privacidad</h4>
                                <p class="text-gray-400 text-sm font-light">Tus datos no están en una "nube compartida" con miles de empresas más. Diseñamos entornos aislados y seguros.</p>
                            </div>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        {{-- Elemento Visual: Un "Code Snippet" o Gráfico Tech --}}
                        <div class="relative p-1 bg-gradient-to-br from-gray-800 to-gray-900 rounded-[40px] shadow-2xl overflow-hidden">
                            <div class="bg-gray-950 rounded-[38px] p-8 md:p-12">
                                <div class="flex gap-2 mb-6">
                                    <div class="w-3 h-3 rounded-full bg-red-500/20"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500/20"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500/20"></div>
                                </div>
                                <div class="space-y-4 font-mono text-xs md:text-sm">
                                    <p class="text-brand">class <span class="text-white">TuSistemaEmpresarial</span> {</p>
                                    <p class="text-gray-500 ml-4">// Automatización de procesos</p>
                                    <p class="text-gray-400 ml-4 italic text-[10px]">"Convertimos semanas de trabajo en segundos de ejecución"</p>
                                    <p class="text-white ml-4">public function <span class="text-brand">optimizarOperacion</span>() {</p>
                                    <p class="text-gray-400 ml-8">return $this->data-><span class="text-brand">scale()</span>;</p>
                                    <p class="text-white ml-4">}</p>
                                    <p class="text-brand">}</p>
                                </div>

                                <div class="mt-8 pt-8 border-t border-white/5 flex items-center justify-between">
                                    <span class="text-[10px] text-gray-500 uppercase tracking-widest">Stack: Laravel + Filament</span>
                                    <span class="text-[10px] text-brand font-bold uppercase tracking-widest">Estado: Online</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    {{-- Sección: El valor de lo Propio end--}}

    {{-- Casos de Éxito / Aplicaciones --}}
        <div class="max-w-7xl mx-auto px-6 py-20">
            <h2 class="text-brand font-mono text-sm mb-12">// 02. SOLUCIONES DE SOFTWARE DESPLEGADAS</h2>

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
                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">El Problema Operativo</p>
                                        <div class="text-sm leading-relaxed">
                                            {!! $proyecto->problema !!}
                                        </div>
                                    </div>

                                    <div class="pt-2">
                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">Arquitectura de Software</p>
                                        <div class="text-xs font-light leading-relaxed">
                                            {!! $proyecto->solucion !!}
                                        </div>
                                    </div>

                                    <div class="pt-2">
                                        <p class="text-brand font-mono text-[10px] uppercase tracking-[0.2em] mb-3 not-italic">Optimización Lograda</p>
                                        <div class="text-xs font-light leading-relaxed">
                                            {!! $proyecto->resultado !!}
                                        </div>
                                    </div>
                                </div>

                                @if($proyecto->url)
                                    <div class="mt-10">
                                        <a href="{{ $proyecto->url }}" target="_blank"
                                        class="inline-flex items-center gap-2 text-[10px] font-bold tracking-widest text-brand group/link">
                                            <span>ACCEDER A LA PLATAFORMA</span>
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
                                            alt="{{ $proyecto->cliente_nombre }}"
                                            class="w-full h-[350px] object-cover filter grayscale hover:grayscale-0 transition duration-700 scale-105 hover:scale-100">
                                        @else
                                            <div class="w-full h-[350px] flex items-center justify-center bg-gray-950 text-gray-800 italic text-xs uppercase tracking-tighter">
                                                {{ $proyecto->cliente_nombre }} / SYSTEM_DASHBOARD
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="py-20 text-center border border-dashed border-gray-800 rounded-[40px]">
                        <p class="text-gray-600 italic font-light font-mono text-xs uppercase tracking-widest">// Forjando nuevas herramientas de gestión...</p>
                    </div>
                @endforelse
            </div>
        </div>
    {{-- Casos de Éxito / Aplicaciones end --}}
@endsection
