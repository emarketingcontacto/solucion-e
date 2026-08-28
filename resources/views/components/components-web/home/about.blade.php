<section id="about" class="py-24 bg-gray-900/30 relative overflow-hidden">
    {{-- Decoración sutil de fondo --}}
    <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/4 w-96 h-96 bg-brand/5 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-6 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Lado Izquierdo: Texto --}}
            <div>
                <span class="text-brand text-xs font-mono uppercase tracking-widest block mb-4">
                    [ ¿Por qué Solucion-e ]
                </span>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                    <span class="italic text-brand">Soluciones</span> que comienzan por entender tu negocio.
                </h2>

                <div class="space-y-6 text-gray-400 text-lg font-light leading-relaxed">
                    <p>
                        En <strong class="text-white font-semibold italic">Solucion-e</strong>, no comenzamos por una tecnología o un paquete predeterminado. Primero entendemos qué necesita resolver el negocio.
                    </p>
                    <p>
                        Integramos la tecnología web adecuada a sus necesidades actuales para mejorar su presencia, generar oportunidades o facilitar parte de su operación.
                    </p>
                    <p class="text-gray-300">
                        Conforme el negocio evoluciona, la solución puede evolucionar con él, incorporando  nuevas herramientas <span class="text-brand font-medium">cuando realmente las necesita.</span>
                    </p>
                </div>

                {{-- Pequeño Badge de Ubicación --}}
                <div class="mt-10 flex items-center gap-3 text-sm font-mono text-gray-500 uppercase">
                    <svg class="w-5 h-5 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Desde León, Guanajuato.</span>
                </div>
            </div>

            {{-- Lado Derecho: Imagen --}}
            <div class="relative group">
                {{-- Resplandor de fondo --}}
                <div class="absolute inset-0 bg-brand/20 blur-[100px] rounded-full opacity-50 group-hover:opacity-100 transition-opacity"></div>

                {{-- Cambio de z-1 a z-10 --}}
                <img src="{{ asset('images/about-us.webp') }}"
                    alt="Soluciones Web de Solucion-e"
                    width="600"
                    height="500"
                    loading="lazy"
                    decoding="async"
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
