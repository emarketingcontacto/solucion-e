@extends('layouts-web.main')

@section('seo')
    <title>Iniciar Proyecto | Solucion-e: Consultoría Tecnológica</title>
    <meta name="description" content="¿Listo para escalar? Cuéntanos tu desafío y diseñemos juntos la herramienta que transformará tu negocio.">
@endsection

@section('content')
    <section class="relative min-h-screen flex items-center pt-24 pb-12 overflow-hidden">
        {{-- Fondo con Grid Tecnológico --}}
        <div class="absolute inset-0 z-0 opacity-20"
            style="background-image: radial-gradient(circle at 2px 2px, rgba(var(--brand-rgb), 0.15) 1px, transparent 0); background-size: 40px 40px;">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

                {{-- Columna Info --}}
                <div>
                    <h1 class="text-6xl font-black text-white italic uppercase tracking-tighter leading-none mb-8">
                        ¿LISTO PARA <br> EL <span class="text-brand">SIGUIENTE NIVEL?</span>
                    </h1>
                    <p class="text-gray-400 text-lg font-light mb-12 max-w-md">
                        No hacemos presupuestos al aire. Diseñamos <span class="text-white font-bold italic">estrategias de ingeniería</span> adaptadas a tu ROI. Cuéntanos tu desafío.
                    </p>

                    <div class="space-y-8">
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

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[10px] font-mono text-brand uppercase tracking-widest ml-2">Nombre_Alias</label>
                                <input type="text" placeholder="Ej. John Doe" class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white placeholder:text-gray-700 focus:outline-none focus:border-brand/50 transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-mono text-brand uppercase tracking-widest ml-2">Email_Contacto</label>
                                <input type="email" placeholder="john@empresa.com" class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white placeholder:text-gray-700 focus:outline-none focus:border-brand/50 transition-all">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-mono text-brand uppercase tracking-widest ml-2">Tipo_de_Proyecto</label>
                            <select class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-gray-400 focus:outline-none focus:border-brand/50 transition-all appearance-none">
                                <option>E-commerce Headless</option>
                                <option>Digitalización Gastronómica</option>
                                <option>Software a Medida / SaaS</option>
                                <option>Consultoría SEO Local</option>
                            </select>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-mono text-brand uppercase tracking-widest ml-2">Brief_del_Desafío</label>
                            <textarea rows="4" placeholder="Cuéntanos brevemente qué proceso quieres optimizar..." class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white placeholder:text-gray-700 focus:outline-none focus:border-brand/50 transition-all"></textarea>
                        </div>

                        <button type="submit" class="w-full py-5 bg-brand text-gray-950 font-black uppercase italic tracking-widest rounded-2xl hover:bg-white transition-all duration-300 shadow-[0_10px_40px_rgba(var(--brand-rgb),0.3)] hover:shadow-white/20">
                            ENVIAR REQUERIMIENTO //
                        </button>
                    </form>
                </div>
            {{-- Formulario Estilo Terminal end--}}
            </div>
        </div>
    </section>
@endsection
