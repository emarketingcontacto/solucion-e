{{-- Navegación --}}
<header class="sticky top-0 z-[60] w-full bg-gray-950/80 backdrop-blur-md border-b border-white/5">
    <nav x-data="{ open: false }" class="p-6 max-w-7xl mx-auto flex justify-between items-center relative z-[60]">
        {{-- Logo --}}
        <a href="/" class="text-2xl font-black text-brand uppercase tracking-tighter italic">
            Solucion-<span class="text-red-500">e</span>
        </a>

        {{-- Links Escritorio (Ocultos en móvil) --}}
        <div class="hidden md:flex space-x-8 font-bold text-[12px] uppercase tracking-[0.2em] items-center">
            @php $links = [
                'servicios.seo' => 'SEO Local',
                'servicios.ecommerce' => 'Tiendas Online',
                'servicios.herramientas' => 'Sistemas SaaS',
                'servicios.restaurantes' => 'Restaurantes'
            ]; @endphp

            @foreach($links as $route => $label)
                <a href="{{ route($route) }}"
                class="{{ request()->routeIs($route) ? 'text-brand' : 'text-gray-400 hover:text-brand' }} transition-colors duration-300">
                {{ $label }}
                </a>
            @endforeach

            <div class="h-4 w-[1px] bg-gray-800 mx-2"></div>

            {{-- Link de Contacto Destacado --}}
                <a href="{{ route('contacto') }}"
                class="relative inline-flex items-center justify-center px-6 py-2 group">
                    {{-- Efecto de fondo neón al hacer hover --}}
                    <span class="absolute inset-0 w-full h-full transition duration-300 ease-out transform translate-x-1 translate-y-1 bg-brand group-hover:-translate-x-0 group-hover:-translate-y-0 opacity-10"></span>
                    <span class="absolute inset-0 w-full h-full border border-brand/50"></span>

                    <span class="relative text-[10px] font-black uppercase tracking-[0.2em] text-brand group-hover:text-brand-dark transition-colors">
                        INICIAR PROYECTO //
                    </span>
                </a>
            {{-- Link de Contacto Destacado end --}}

            {{-- <a href="{{ route('login') }}" class="border border-gray-800 px-5 py-2 rounded-full text-gray-400 hover:bg-brand hover:border-brand hover:text-black transition-all duration-500 scale-90 hover:scale-100 uppercase text-[10px]">
                ADMIN
            </a> --}}
        </div>

        {{-- Botón Hamburguesa (Solo móvil) --}}
        <div class="md:hidden flex items-center">
            <button @click="open = !open" class="text-brand hover:text-gray-400 focus:outline-none transition-colors">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                </svg>
                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Menú Móvil Desplegable --}}
        <div x-show="open"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="absolute top-20 left-6 right-6 bg-gray-950/95 border border-gray-800 backdrop-blur-xl p-8 rounded-[30px] shadow-2xl md:hidden z-[70]"
            style="display: none;">

            <div class="flex flex-col space-y-6 text-center">
                @foreach($links as $route => $label)
                    <a href="{{ route($route) }}"
                    @click="open = false"
                    class="text-sm font-bold uppercase tracking-widest {{ request()->routeIs($route) ? 'text-brand' : 'text-gray-400' }}">
                    {{ $label }}
                    </a>
                @endforeach

                <div class="h-[1px] w-full bg-gray-900 my-2"></div>
                <a href="{{ route('contacto') }}" class="block text-xs font-mono text-brand uppercase tracking-widest font-bold">Iniciar Proyecto //</a>
                {{--
                <a href="{{ route('login') }}" class="text-brand font-bold uppercase tracking-widest text-sm">
                    Acceso Admin
                </a> --}}
            </div>
        </div>
    </nav>
</header>
{{-- Navegación end --}}
