<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {{-- Páginas Principales --}}
    <url>
        <loc>{{ url('/') }}</loc>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ url('/seo-local') }}</loc>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/tiendas-web-ecommerce') }}</loc>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/herramientas-digitales-especializadas') }}</loc>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/soluciones-web-restaurantes') }}</loc>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/contacto') }}</loc>
        <priority>0.9</priority>
    </url>

    {{-- Proyectos Dinámicos (Si tienen página individual) --}}
    @foreach($proyectos as $proyecto)
        <url>
            <loc>{{ url('/proyectos/' . $proyecto->slug) }}</loc>
            <lastmod>{{ $proyecto->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <priority>0.6</priority>
        </url>
    @endforeach
</urlset>
