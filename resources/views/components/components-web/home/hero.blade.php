<section class="relative pt-32 pb-20 px-6 overflow-hidden bg-gray-950">
    {{-- Imagen de fondo --}}
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/header1.webp') }}"
            width="1920"
            height="1080"
            fetchpriority="high"
            loading="eager"
            class="w-full h-full object-cover opacity-60 scale-105 blur-[2px]"
            alt="Soluciones Web - Solucion-e">
        {{-- Gradiente sutil para suavizar la transición inferior --}}
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-gray-950/20 to-gray-950"></div>
    </div>
    {{-- Círculos de luz decorativos --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-brand/25 blur-[130px] rounded-full animate-pulse-slow"></div>
    <div class="max-w-7xl mx-auto text-center relative z-10">
        <span class="inline-block py-1 px-3 border border-brand/30 text-brand text-[10px] font-bold tracking-[0.3em] uppercase rounded-full mb-8">
            Soluciones web para negocios
        </span>
        <h1 class="text-6xl md:text-8xl font-black mb-8 italic tracking-tighter leading-none text-white uppercase">
           <span class="text-brand"> soluciones web </span> <br> para hacer crecer tu negocio.
        </h1>

        <p class="text-white/90 max-w-2xl mx-auto text-lg md:text-xl font-light drop-shadow-md">
            Creamos <span class="text-brand font-semibold">soluciones web</span>
            que ayudan a los <span class="text-brand font-semibold">negocios</span> a tener
            <span class="text-brand font-semibold">presencia</span>, generar
            <span class="text-brand font-semibold">oportunidades</span>, medir
            <span class="text-brand font-semibold">resultados</span> y, cuando lo necesitan,
            mejorar su <span class="text-brand font-semibold">operación</span>.
        </p>

        {{-- CTAs --}}
        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">

            {{-- CTA Principal --}}

            <a
                href="#problemas"
                class="inline-flex items-center justify-center gap-3 rounded-xl border border-white/15 bg-white/5 px-8 py-4 text-sm font-bold uppercase tracking-widest text-white backdrop-blur-sm transition-all duration-300 hover:border-brand/50 hover:bg-brand/10 hover:text-brand active:scale-95"
                aria-label="Conocer las soluciones web de Solucion-e"
            >
                <span>
                    Conoce nuestras soluciones
                </span>

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"
                    />
                </svg>
            </a>

            {{-- CTA Secundario --}}

            <a
                href="#contacto"
                class="group relative inline-flex items-center justify-center gap-3 overflow-hidden rounded-xl bg-brand px-8 py-4 text-sm font-bold uppercase tracking-widest text-gray-950 transition-all duration-300 hover:scale-[1.03] hover:shadow-lg hover:shadow-brand/20 active:scale-95"
                aria-label="Cuéntanos qué necesitas para tu proyecto web"
            >
                <span class="relative z-10">
                    Cuéntanos qué necesitas
                </span>

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2.5"
                    stroke="currentColor"
                    class="relative z-10 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                    />
                </svg>

                {{-- Shimmer --}}
                <div class="absolute inset-0 flex h-full w-full justify-center [transform:skew(-20deg)]">
                    <div class="relative h-full w-10 bg-white/30 blur-md animate-[shimmer_2.5s_infinite]"></div>
                </div>
            </a>

        </div>
{{-- CTAs end --}}

    </div>
</section>
