@extends('layouts-web.main')

@section('seo')
    <title>Aviso de Privacidad | Solucion-e</title>
    <meta name="description" content="Aviso de privacidad y protección de datos personales de Solucion-e High-End Technology.">
@endsection

@section('content')
    <section class="relative pt-32 pb-20 overflow-hidden">
        {{-- Decoración de fondo sutil --}}
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-brand/5 via-transparent to-transparent z-0"></div>

        <div class="max-w-4xl mx-auto px-6 relative z-10">
            {{-- Encabezado --}}
            <div class="text-center mb-16">
                <span class="text-brand font-mono text-[10px] tracking-[0.4em] uppercase">Marco Legal</span>
                <h1 class="text-4xl md:text-5xl font-black text-white mt-4 italic uppercase tracking-tighter">
                    Aviso de <span class="text-brand">Privacidad</span>
                </h1>
                <p class="text-gray-500 mt-4 font-light italic">Última actualización: {{ date('d F, Y') }}</p>
            </div>

            {{-- Cuerpo del texto legal --}}
            <div class="prose prose-invert prose-brand max-w-none text-gray-400 font-light leading-relaxed">
                <div class="bg-gray-900/30 border border-gray-800 p-8 md:p-12 rounded-[40px] backdrop-blur-sm">

                    <h2 class="text-white text-xl font-bold mb-4 uppercase tracking-tight italic">1. Identidad y Domicilio del Responsable</h2>
                    <p class="mb-8">
                        Solucion-e High-End Technology, con domicilio en <span class="text-gray-200">{{ $negocio->direccion }}</span>, es responsable del uso y protección de sus datos personales.
                    </p>

                    <h2 class="text-white text-xl font-bold mb-4 uppercase tracking-tight italic">2. Finalidades del Tratamiento</h2>
                    <p class="mb-4">Los datos personales que recabamos de usted, los utilizaremos para las siguientes finalidades que son necesarias para el servicio que solicita:</p>
                    <ul class="list-disc pl-6 mb-8 space-y-2">
                        <li>Proveer los servicios de desarrollo tecnológico y consultoría solicitados.</li>
                        <li>Responder a sus solicitudes de información a través de WhatsApp y formularios.</li>
                        <li>Dar cumplimiento a obligaciones contraídas con nuestros clientes.</li>
                    </ul>

                    <h2 class="text-white text-xl font-bold mb-4 uppercase tracking-tight italic">3. Datos Personales Recabados</h2>
                    <p class="mb-8">
                        Para las finalidades antes mencionadas, recabamos los siguientes datos: Nombre, Teléfono, Correo Electrónico y, en su caso, datos fiscales para facturación.
                    </p>

                    <h2 class="text-white text-xl font-bold mb-4 uppercase tracking-tight italic">4. Derechos ARCO</h2>
                    <p class="mb-8">
                        Usted tiene derecho a conocer qué datos personales tenemos de usted (Acceso), para qué los utilizamos (Rectificación), solicitar su eliminación (Cancelación) u oponerse al uso de los mismos (Oposición). Para ejercer estos derechos, puede enviar un correo a: <span class="text-brand font-bold">{{ $negocio->email }}</span>.
                    </p>

                    <div class="mt-12 p-6 border-t border-gray-800 text-center">
                        <p class="text-xs text-gray-500 italic">
                            Este documento cumple con las disposiciones de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.
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
