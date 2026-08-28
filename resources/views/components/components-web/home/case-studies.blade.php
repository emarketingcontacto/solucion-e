<section id="casos-de-exito" class="max-w-7xl mx-auto px-6 py-20 border-t border-white/5">
    <div class="mb-16">
        <span class="text-brand font-mono text-sm mb-2">
            // 02. CASOS DE ÉXITO
        </span>
        <h2 class="text-4xl font-bold">
            Soluciones que hemos desarrollado para negocios reales
        </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
        {{-- Proyectos --}}
        @forelse ($proyectos as $proyecto)
            <x-components-web.cards.project-card :proyecto=$proyecto />
        @empty
            <p class="text-brand">No hay proyectos para mostrar</p>
        @endforelse
    </div>
</section>
