@extends('layouts-web.main')

@section('seo')
    <title>Términos del Servicio | Solucion-e</title>
    <meta name="description" content="Términos y condiciones de uso de los servicios tecnológicos de Solucion-e.">
@endsection

@section('content')
    <section class="relative pt-32 pb-20 overflow-hidden">
        {{-- Decoración de fondo --}}
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-brand/5 via-transparent to-transparent z-0"></div>

        <div class="max-w-4xl mx-auto px-6 relative z-10">
            {{-- Encabezado --}}
            <div class="text-center mb-16">
                <span class="text-brand font-mono text-[10px] tracking-[0.4em] uppercase">Acuerdo Legal</span>
                <h1 class="text-4xl md:text-5xl font-black text-white mt-4 italic uppercase tracking-tighter">
                    Términos del <span class="text-brand">Servicio</span>
                </h1>
                <p class="text-gray-500 mt-4 font-light italic">Vigente a partir de: {{ date('Y') }}</p>
            </div>

            <div class="prose prose-invert prose-brand max-w-none text-gray-400 font-light leading-relaxed">
                <div class="bg-gray-900/30 border border-gray-800 p-8 md:p-12 rounded-[40px] backdrop-blur-sm">

                    <h2 class="text-white text-xl font-bold mb-4 uppercase tracking-tight italic">1. Aceptación de los Términos</h2>
                    <p class="mb-8">
                        Al acceder y utilizar los servicios de **Solucion-e High-End Technology**, usted acepta quedar vinculado por estos términos y condiciones. Si no está de acuerdo con alguna parte de estos términos, no podrá utilizar nuestros servicios de desarrollo o consultoría.
                    </p>

                    <h2 class="text-white text-xl font-bold mb-4 uppercase tracking-tight italic">2. Servicios y Propiedad Intelectual</h2>
                    <p class="mb-4">
                        Solucion-e se especializa en el desarrollo de software a medida, e-commerce y SEO local. Todo el código base, diseños y metodologías propias utilizadas en el proceso de desarrollo siguen siendo propiedad de Solucion-e, otorgando al cliente una licencia de uso conforme a lo estipulado en su contrato individual.
                    </p>

                    <h2 class="text-white text-xl font-bold mb-4 uppercase tracking-tight italic">3. Responsabilidades del Cliente</h2>
                    <p class="mb-8">
                        El cliente es responsable de proporcionar la información y activos necesarios (logos, textos, accesos) de manera oportuna para el correcto desarrollo de los proyectos tecnológicos.
                    </p>

                    <h2 class="text-white text-xl font-bold mb-4 uppercase tracking-tight italic">4. Modificaciones del Servicio</h2>
                    <p class="mb-8">
                        Nos reservamos el derecho de modificar o interrumpir el servicio (o cualquier parte de este) en cualquier momento. No seremos responsables ante usted o terceros por cualquier modificación, cambio de precio o suspensión del servicio.
                    </p>

                    <div class="mt-12 p-6 border-t border-gray-800 text-center">
                        <p class="text-xs text-gray-500 italic uppercase tracking-widest">
                            Contacto Legal: {{ $negocio->email }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="{{ url('/') }}" class="text-brand font-mono text-[10px] tracking-widest hover:underline uppercase">
                    ← Volver al inicio
                </a>
            </div>
        </div>
    </section>
@endsection
