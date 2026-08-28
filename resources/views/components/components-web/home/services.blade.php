<section id="problemas" class="max-w-7xl mx-auto px-6 py-20">
    <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-4">
        <div>
            <span class="text-brand font-mono text-sm mb-2">
                // 01. SOLUCIONES PARA TU NEGOCIO
            </span>

            <h2 class="text-3xl font-bold">
                ¿Qué problema quieres resolver?
            </h2>
        </div>

        <p class="text-gray-500 text-sm max-w-sm">
            Desde atraer nuevos clientes hasta optimizar la operación de tu negocio, desarrollamos soluciones web pensadas para resolver necesidades concretas.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
        @foreach($servicios as $servicio)
            <x-components-web.cards.service-card :servicio="$servicio" />
        @endforeach
    </div>
</section>
