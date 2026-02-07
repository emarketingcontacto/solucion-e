<section id="contacto" class="py-24 bg-gray-900">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                    {{-- Columna Info --}}
                    <div class="space-y-8">
                        <div>
                            <h2 class="text-4xl font-bold text-white mb-4">¿Listo para dar el <span class="text-brand italic">salto digital</span>?</h2>
                            <p class="text-gray-400 text-lg">Estamos en León, Gto. listos para platicar sobre tu próximo sistema o página web.</p>
                        </div>

                        <div class="space-y-4">
                            <a href="https://wa.me/52{{$negocio->whatsapp}}?text={{ urlencode('Hola Solucion-e, me gustaría recibir informes de sus servicios,')}}"
                                target="_blank"
                                class="flex items-center gap-4 text-white hover:text-brand transition-colors">
                                <div class="w-12 h-12 rounded-full bg-brand/10 flex items-center justify-center text-brand">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <span class="font-mono text-brand bg-brand/10 rounded-md px-2 ">WhatsApp</span>
                            </a>
                        </div>
                    </div>
                    {{-- Formulario --}}
                    <div class="bg-gray-800/50 p-8 rounded-3xl border border-white/5 relative">
                        {{-- Mensaje de Exito --}}
                        @if(session('success'))
                            <div class="mb-6 p-4 rounded-xl bg-brand/10 border border-brand/20 flex items-center gap-3 animate-bounce-short">
                                <svg class="w-6 h-6 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="text-brand font-medium text-sm">{{ session('success') }}</p>
                            </div>
                        @endif
                        {{-- Mensaje de Exito end--}}
                        <form action="{{route('contacto.enviar')}}" method="POST" class="space-y-6">
                            @csrf
                            @method('POST')
                            <div>
                                <label class="block text-gray-400 text-sm mb-2 font-mono uppercase">Nombre</label>
                                <input
                                    type="text"
                                    name="nombre"
                                    class="w-full bg-gray-900 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-brand transition-colors"
                                    placeholder="Tu nombre"
                                    required
                                    >
                            </div>
                            {{-- Options --}}
                            <div>
                                <label class="block text-gray-400 text-sm mb-2 font-mono uppercase">¿Qué tienes en mente?</label>
                                <select
                                name="proyecto"
                                class="w-full bg-gray-900 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-brand mb-4">
                                    <option value="SEO Local">SEO Local </option>
                                    <option value="Tienda en Línea">Tienda en Línea</option>
                                    <option value="Sistema a Medida">Sistema a Medida</option>
                                    <option value="Menú Digital">Menú Digital</option>
                                    <option value="Otro">Otro proyecto tecnológico...</option>
                                </select>
                            {{-- Message --}}
                                <textarea
                                    name="mensaje"
                                    rows="4"
                                    class="w-full bg-gray-900 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-brand transition-colors"
                                    placeholder="Cuéntanos brevemente qué necesitas optimizar en tu negocio..."
                                    required
                                    >
                                </textarea>
                            </div>
                            {{-- Boton --}}
                            <button type="submit" class="relative w-full group overflow-hidden rounded-xl bg-brand px-8 py-4 text-gray-900 font-bold uppercase tracking-widest transition-all hover:scale-[1.02] active:scale-95">
                                <span class="relative z-10">Enviar Proyecto</span>
                                {{-- Efecto Shimmer (Brillo) --}}
                                <div class="absolute inset-0 flex h-full w-full justify-center [transform:skew(-20deg)]">
                                    <div class="relative h-full w-10 bg-white/30 blur-md animate-[shimmer_2.5s_infinite] transition-all"></div>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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
