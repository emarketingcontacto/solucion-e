{{-- @props(['servicio']) --}}

<div class="group relative bg-gray-900/50 border border-gray-800 rounded-3xl p-1 overflow-hidden hover:border-brand/50 transition-all duration-500">
    {{-- Efecto de resplandor de fondo --}}
    <div class="absolute -inset-px bg-gradient-to-r from-brand/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>

    <div class="relative bg-gray-950 rounded-[22px] overflow-hidden">
        {{-- Imagen con Zoom --}}
        <div class="h-64 overflow-hidden">
            @if($servicio->imagen)
                <img src="{{ asset('storage/' . $servicio->imagen) }}"
                    alt="{{ $servicio->nombre }}"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            @endif
        </div>

        <div class="p-8">
            <div class="flex justify-between items-start mb-4">
                <h3 class="text-2xl font-bold text-white group-hover:text-brand transition-colors">
                    {{ $servicio->nombre }}
                </h3>
                <span class="text-brand font-mono font-bold">${{ number_format($servicio->precio, 0) }}</span>
            </div>

            <div class="text-gray-400 text-sm mb-6 line-clamp-5 italic">
                {!! $servicio->descripcion !!}
            </div>
            @php
                $url= match ($servicio->slug) {
                    'seo-local' => 'servicios.seo',
                    'tiendas-online' => 'servicios.ecommerce',
                    'sistemas-a-medida'=>'servicios.herramientas',
                    'menu-digital' => 'servicios.restaurantes',
                    default => 'home',
                };
            @endphp
        {{-- @php
            switch($servicio->slug){
                case'seo-local':
                    $url='servicios.seo';
                    break;
                case'tiendas-online':
                    $url='servicios.ecommerce';
                    break;
                case'sistemas-a-medida':
                    $url='servicios.herramientas';
                    break;
                case'menu-digital':
                    $url='servicios.restaurantes';
                    break;
                default:
                $url='home';
            }
        @endphp --}}

            <a href="{{route($url)}}" class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-white hover:text-brand transition">
                Saber más
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
</div>

