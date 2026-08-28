<section id="tecnologia" class="py-20 bg-gray-950 border-t border-white/5">

    <div class="max-w-7xl mx-auto px-6">

        {{-- Encabezado --}}
        <div class="max-w-3xl mb-14">

            <span class="text-brand text-xs font-mono uppercase tracking-widest block mb-4">
                [ Tecnología ]
            </span>

            <h2 class="text-3xl md:text-4xl font-bold text-white mb-5">
                Herramientas para construir
                <span class="text-brand italic">
                    soluciones web confiables y medibles
                </span>
            </h2>

            <p class="text-gray-400 text-lg font-light leading-relaxed">
                Utilizamos tecnologías y plataformas que nos permiten desarrollar
                soluciones web rápidas, seguras, administrables y preparadas para
                medir resultados.
            </p>

        </div>

        {{-- Tecnologías --}}
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">

            @php
                $tecnologias = [
                    ['nombre' => 'Laravel', 'area' => 'Desarrollo'],
                    ['nombre' => 'PHP', 'area' => 'Desarrollo'],
                    ['nombre' => 'JavaScript', 'area' => 'Desarrollo'],
                    ['nombre' => 'HTML5', 'area' => 'Interfaz'],
                    ['nombre' => 'Tailwind CSS', 'area' => 'Interfaz'],
                    ['nombre' => 'MySQL', 'area' => 'Datos'],
                    ['nombre' => 'Filament', 'area' => 'Administración'],
                    ['nombre' => 'Google Analytics', 'area' => 'Medición'],
                    ['nombre' => 'Search Console', 'area' => 'Medición'],
                    ['nombre' => 'Google Business Profile', 'area' => 'Presencia local'],
                    ['nombre' => 'Stripe', 'area' => 'Pagos'],
                    ['nombre' => 'Cloudflare', 'area' => 'Infraestructura'],
                    ['nombre' => 'Git', 'area' => 'Desarrollo'],
                ];
            @endphp

            @foreach($tecnologias as $tecnologia)

                <div class="group p-5 rounded-2xl bg-gray-900/50 border border-white/5
                            hover:border-brand/30 transition-colors">

                    <p class="text-white font-semibold group-hover:text-brand transition-colors">
                        {{ $tecnologia['nombre'] }}
                    </p>

                    <p class="text-gray-500 text-xs font-mono uppercase tracking-wider mt-2">
                        {{ $tecnologia['area'] }}
                    </p>

                </div>

            @endforeach

        </div>

        {{-- Cierre --}}
        <div class="mt-12 max-w-3xl border-l-2 border-brand/40 pl-6">

            <p class="text-gray-400 leading-relaxed">
                La tecnología se selecciona según las necesidades de cada proyecto.
                El objetivo no es adaptar el negocio a una herramienta, sino utilizar
                las herramientas adecuadas para resolver su necesidad.
            </p>

        </div>

    </div>

</section>
