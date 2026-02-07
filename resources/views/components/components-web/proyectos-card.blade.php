<div class="group relative overflow-hidden rounded-2xl bg-gray-900/50 border border-white/10 hover:border-brand/50 transition-all">
    <div class="p-8">
        <span class="text-brand text-xs font-mono uppercase tracking-widest">[ {{$proyecto->servicio->nombre}} ]</span>
        <h3 class="text-2xl font-bold mt-4 mb-2 italic">{{$proyecto->cliente_nombre}}</h3>
        {{-- problem --}}
        <h4 class="text-brand text-lg mt-4 mb-1 uppercase tracking-tight font-semibold">Problema</h4>
        <div class="text-gray-200 font-light leading-relaxed line-clamp-4">{!! Str::limit(strip_tags($proyecto->problema), 400) !!}</div>
        {{-- solucion --}}
        <h4 class="text-brand text-lg mt-4 mb-1 uppercase tracking-tight font-semibold">Solución</h4>
        <div class="text-gray-400 text-sm font-light leading-snug italic border-l border-brand/30 pl-3 text-pretty line-clamp-6">
            {!! $proyecto->solucion !!}
        </div>
        {{-- resultado --}}
        <h4 class="text-brand text-lg mt-4 mb-1 uppercase tracking-tight font-semibold">Resultado</h4>
        <div class="text-gray-200 font-light leading-relaxed line-clamp-4">{!! $proyecto->resultado !!}</div>
        <a href="{{$proyecto->url}}" target="_blank" class="inline-flex items-center text-brand font-bold text-sm gap-2 group-hover:gap-4 transition-all">
            VER RESULTADOS <span class="text-xl">→</span>
        </a>
    </div>
    {{-- image --}}
    <div class="h-64 bg-gradient-to-br from-brand/20 to-transparent">
        <img src="{{asset('storage/'.$proyecto->imagen_proyecto)}}" alt="{{$proyecto->cliente_nombre}}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
    </div>
</div>
