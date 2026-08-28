    @props(['isPage'=>false])
    <section id="contacto" class="relative min-h-screen flex items-center pt-24 pb-12 overflow-hidden">
        {{-- Fondo con Grid Tecnológico --}}
        <div class="absolute inset-0 z-0 opacity-20"
            style="background-image: radial-gradient(circle at 2px 2px, rgba(var(--brand-rgb), 0.15) 1px, transparent 0); background-size: 40px 40px;">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

                {{-- Columna Info --}}
                <div>
                    {{-- Aqui hariamos el if is page entonces carga el h1  --}}

                    @if ($isPage)
                        <h1 class="text-6xl font-black text-white italic uppercase tracking-tighter leading-none mb-8">
                            Hablemos sobre <span class="text-brand">tu negocio</span>
                        </h1>
                    @else
                        <h2 class="text-5xl md:text-6xl font-black text-white italic uppercase tracking-tighter leading-none mb-8">
                            Hablemos sobre <span class="text-brand">tu negocio</span>
                        </h2>
                    @endif

                    {{-- end if --}}
                    <p class="text-gray-400 text-lg font-light mb-12 max-w-md">
                        No todos los negocios necesitan la misma solución.
                        Cuéntanos qué quieres mejorar y podemos ayudarte a identificar
                        cuál puede ser la opción adecuada.
                    </p>

                    <div class="space-y-8">

                        <div class="flex items-center gap-6 group">
                            <div class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-brand group-hover:border-brand/50 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[10px] font-mono text-gray-500 uppercase tracking-widest">Contacto Directo</p>
                                <a href="https://wa.me/52{{$negocio->whatsapp}}?text={{ urlencode('Hola Solucion-e, me gustaría recibir informes de sus servicios,')}}"
                                    target="_blank"
                                    class="flex items-center gap-4 text-white hover:text-brand transition-colors">
                                     <p class="text-white font-bold">WhatsApp</p>
                                </a>
                            </div>
                        </div>


                        <div class="flex items-center gap-6 group">
                            <div class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-brand group-hover:border-brand/50 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[10px] font-mono text-gray-500 uppercase tracking-widest">Email Directo</p>
                                <p class="text-white font-bold">contacto@solucion-e.com.mx</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-6 group">
                            <div class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-brand group-hover:border-brand/50 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[10px] font-mono text-gray-500 uppercase tracking-widest">Base de Operaciones</p>
                                <p class="text-white font-bold">León, Guanajuato, México</p>
                            </div>
                        </div>
                    </div>
                </div>

            {{-- Formulario Estilo Terminal --}}
                <div class="bg-gray-900/50 border border-white/10 p-8 md:p-12 rounded-[40px] backdrop-blur-xl relative">
                    <div class="absolute top-0 right-12 w-20 h-1 bg-brand shadow-[0_0_20px_rgba(var(--brand-rgb),0.8)]"></div>

                    <form action="{{route('contacto.enviar')}}" method="POST" class="space-y-6">
                        @csrf
                        @method('POST')

                        <div class="gap-6">
                            <div class="space-y-2">
                                <label class="text-[10px] font-mono text-brand uppercase tracking-widest ml-2">Nombre</label>
                                <input
                                    type="text"
                                    name="nombre"
                                    required
                                    placeholder="Ej. John Doe"
                                    class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white placeholder:text-gray-700 focus:outline-none focus:border-brand/50 transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-mono text-brand uppercase tracking-widest ml-2">Email</label>
                                <input
                                    type="email"
                                    name="email"
                                    required
                                    placeholder="john@empresa.com"
                                    class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white placeholder:text-gray-700 focus:outline-none focus:border-brand/50 transition-all">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-mono text-brand uppercase tracking-widest ml-2">¿Qué necesitas?</label>
                            <select
                                name="proyecto"
                                required
                                class="w-full bg-gray-900 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-brand mb-4">
                                    <option value="" selected disabled>Selecciona una opción</option>
                                    <option value="SEO Local">Mejorar mi presencia en Google</option>
                                    <option value="Sitio Web Profesional">Desarrollar o mejorar mi sitio web</option>
                                    <option value="Plataforma Web Personalizada">Digitalizar un proceso de mi negocio</option>
                                    <option value="Solución Web para Restaurantes">Mejorar la presencia de mi restaurante</option>
                                    <option value="Otro">No estoy seguro / Otra necesidad</option>
                            </select>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-mono text-brand uppercase tracking-widest ml-2">Cuéntanos brevemente qué deseas mejorar</label>
                            <textarea
                                name="mensaje"
                                required
                                rows="4"
                                placeholder="Cuéntanos qué quieres mejorar o resolver en tu negocio..."
                                class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white placeholder:text-gray-700 focus:outline-none focus:border-brand/50 transition-all"></textarea>
                        </div>

                        {{-- <button type="submit" class="w-full py-5 bg-brand text-gray-950 font-black uppercase italic tracking-widest rounded-2xl hover:bg-white transition-all duration-300 shadow-[0_10px_40px_rgba(var(--brand-rgb),0.3)] hover:shadow-white/20"> --}}
                        <button type="submit" class="relative w-full group overflow-hidden rounded-xl bg-brand px-8 py-4 text-gray-900 font-bold uppercase tracking-widest transition-all hover:scale-[1.02] active:scale-95">

                            ENVIAR MENSAJE //
                        </button>
                    </form>
                </div>
            {{-- Formulario Estilo Terminal end--}}
            </div>
        </div>
    </section>


    @once
    <style>
        @keyframes shimmer {
            0% { transform: translateX(-500%) skew(-20deg); }
            100% { transform: translateX(500%) skew(-20deg); }
        }

        @keyframes bounce-short {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-4px); }
        }
        .animate-bounce-short {
            animation: bounce-short 2s ease-in-out infinite;
        }
    </style>
    @endonce
