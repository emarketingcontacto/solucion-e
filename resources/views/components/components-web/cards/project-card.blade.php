<div class="group relative overflow-hidden rounded-2xl bg-gray-900/50 border border-white/10 hover:border-brand/50 transition-all">

    <div class="p-8">

        {{-- Servicio --}}
        <span class="text-brand text-xs font-mono uppercase tracking-widest">
            [ {{ $proyecto->servicio->nombre }} ]
        </span>

        {{-- Cliente --}}
        <h3 class="text-2xl font-bold mt-4 mb-2 italic">
            {{ $proyecto->cliente_nombre }}
        </h3>

        {{-- Reto --}}
        <h4 class="text-brand text-lg mt-4 mb-1 uppercase tracking-tight font-semibold">
            El reto
        </h4>

        <div class="text-gray-200 font-light leading-relaxed line-clamp-3">
            {{ $proyecto->sinopsis_reto }}
        </div>

        {{-- Solución --}}
        <h4 class="text-brand text-lg mt-4 mb-1 uppercase tracking-tight font-semibold">
            La solución
        </h4>

        <div class="text-gray-400 text-sm font-light leading-snug italic border-l border-brand/30 pl-3 text-pretty line-clamp-4">
            {{ $proyecto->sinopsis_solucion}}
        </div>

        {{-- Resultado --}}
        <h4 class="text-brand text-lg mt-4 mb-1 uppercase tracking-tight font-semibold">
            El resultado
        </h4>

        <div class="text-gray-200 font-light leading-relaxed line-clamp-3">
            {{ $proyecto->sinopsis_resultado }}
        </div>

        {{-- CTA --}}
        <a href="{{ route('proyectos', $proyecto->slug) }}"
            aria-label="Ver resultados del proyecto {{ $proyecto->cliente_nombre }}"
            class="inline-flex items-center mt-10 text-brand font-bold text-sm gap-2 group-hover:gap-4 transition-all">
            VER RESULTADOS
            <span class="text-xl">→</span>
        </a>

    </div>

    {{-- Imagen --}}
    <div class="h-64 bg-gradient-to-br from-brand/20 to-transparent relative">

        @if($proyecto->imagen_proyecto)
            <img
                src="{{ asset('storage/' . $proyecto->imagen_proyecto) }}"
                alt="Caso de éxito: {{ $proyecto->cliente_nombre }} - Solucion-e"
                width="800"
                height="450"
                loading="lazy"
                decoding="async"
                class="absolute inset-0 w-full h-full object-cover opacity-50 group-hover:scale-110 transition-transform duration-500">
        @endif

    </div>

</div>
