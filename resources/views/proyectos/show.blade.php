@extends('layouts-web.main')

@section('seo')
    <title>{{ $proyecto->nombre }} | Caso de Éxito Solucion-e</title>
    <meta name="description" content="Descubre cómo resolvimos: {{ Str::limit($proyecto->problema, 100) }}">

    @verbatim
        <script type="application/ld+json">
            {
                "@context": "https://schema.org/",
                "@type": "CreativeWork",
                "name": "{{ $proyecto->nombre }}",
                "description": "{{ $proyecto->solucion }}",
                "author": {
                    "@type": "Organization",
                    "name": "Solucion-e"
                }
            }
        </script>
    @endverbatim
@endsection

@section('content')
    <main class="bg-black text-white py-20">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-8">{{ $proyecto->cliente_nombre }}</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="flex flex-col w-100 h-80 align-middle justify-center">
                    <div>
                        <img src="{{ asset('storage/' . $proyecto->imagen_proyecto) }}" alt="{{ $proyecto->cliente_nombre }}" class="rounded-lg shadow-lg border border-cyan-500/30">
                    </div>
                    <div class="mt-4">
                        <a href="{{$proyecto->url}}" class="text-white underline hover:text-brand text-md">
                            Visitar sitio
                        </a>
                    </div>
                </div>

                <div class="space-y-6">
                    <div>
                        <h2 class="text-brand text-xl font-semibold">El Problema</h2>
                        <div class="text-gray-300">{!! $proyecto->problema !!}</div>
                    </div>
                    <div>
                        <h2 class="text-brand text-xl font-semibold">Nuestra <span class="text-red-500">Solución</span> </h2>
                        <div class="text-gray-300">{!! $proyecto->solucion !!}</div>
                    </div>
                    <div>
                        <h2 class="text-brand text-xl font-semibold">El Resultado</h2>
                        <div class="text-gray-300">{!! $proyecto->resultado !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
