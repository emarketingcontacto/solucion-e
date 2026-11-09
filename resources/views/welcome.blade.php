@extends('layouts-web.main')

@section('seo')
    <title>Soluciones Web para Negocios en León | Solucion-e</title>
    <meta name="description" content="Desarrollamos soluciones web para negocios en León: sitios web profesionales, SEO local y plataformas a medida para atraer clientes y mejorar tu operación.">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Soluciones Web para Negocios en León | Solucion-e">
    <meta property="og:description" content="Desarrollamos soluciones web para negocios en León: sitios web profesionales, SEO local y plataformas a medida para atraer clientes y mejorar tu operación.">
    {{-- <meta property="og:image" content="https://solucion-e.com.mx/images/og-welcome.webp"> --}}
    <meta property="og:image" content="{{ url()->current() & '/images/og-welcome.webp' }}">
    <meta property="og:locale" content="es_MX">
    <meta property="og:site_name" content="Solucion-e">

    @verbatim
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type":"LocalBusiness",
                    "@id": "https://solucion-e.com.mx/#organization",
                    "name": "Solucion-e",
                    "url": "https://solucion-e.com.mx",
                    "telephone": "+524771598183",
                    "logo": "https://solucion-e.com.mx/images/logo.png",
                    "image": "https://solucion-e.com.mx/images/og-welcome.webp",
                    "description": "Solucion-e desarrolla soluciones web para negocios en León, incluyendo SEO Local, sitios web profesionales, plataformas web personalizadas y soluciones para restaurantes.",
                    "areaServed": {
                        "@type": "City",
                        "name": "León de los Aldama"
                    },
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "Circuito Hoja de Nogal 157, Brisas del Campestre",
                        "addressLocality": "León de los Aldama",
                        "addressRegion": "Guanajuato",
                        "postalCode": "37140",
                        "addressCountry": "MX"
                    },
                    "sameAs": [
                        "https://facebook.com/DesarrolloWebyMktDigital"
                    ],
                    "hasOfferCatalog": {
                        "@type": "OfferCatalog",
                        "name": "Soluciones Web de Solucion-e",
                        "itemListElement": [
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "SEO Local",
                                    "url": "https://solucion-e.com.mx/seo-local"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Sitios Web Profesionales",
                                    "url": "https://solucion-e.com.mx/sitios-web-profesionales"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Plataformas Web Personalizadas",
                                    "url": "https://solucion-e.com.mx/plataformas-web-especializadas"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Soluciones Web para Restaurantes",
                                    "url": "https://solucion-e.com.mx/soluciones-web-restaurantes"
                                }
                            }
                        ]
                    }
                },
                {
                    "@type": "WebSite",
                    "@id": "https://solucion-e.com.mx/#website",
                    "url": "https://solucion-e.com.mx",
                    "name": "Solucion-e",
                    "publisher": {
                        "@id": "https://solucion-e.com.mx/#organization"
                    }
                }
            ]
        }
        </script>
    @endverbatim

@endsection

@section('content')

    {{-- Hero Section --}}
        <x-components-web.home.hero/>
    {{-- Hero Section end --}}

    {{-- Grid de Servicios --}}
        <x-components-web.home.services :servicios="$servicios"/>
    {{-- Grid de Servicios end --}}

    {{-- Case Studies --}}
        <x-components-web.home.case-studies :proyectos="$proyectos"/>
    {{-- Case Studies end --}}

    {{-- Testimonials --}}
        <x-components-web.home.testimonials />
    {{-- end Testimonials --}}


    {{-- About us --}}
        <x-components-web.home.about />
    {{-- About us end --}}

    {{-- Process --}}
        <x-components-web.home.process />
    {{-- Process end --}}

    {{-- Technologies --}}
        <x-components-web.home.technologies/>
    {{-- Technologies end--}}


    {{-- FAQs --}}
       <x-components-web.home.faqs />
    {{-- FAQs end --}}

    {{-- Contact --}}
        {{-- <x-components-web.shared.contact-form /> --}}
    {{-- Contact --}}

@endsection {{-- main content end--}}
