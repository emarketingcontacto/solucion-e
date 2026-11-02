@extends('layouts-web.main')

@section('seo')
    <title>Soluciones Web para Negocios en León | Solucion-e </title>
    <meta name="description" content="Soluciones web para negocios en León: SEO Local, sitios web profesionales y plataformas personalizadas para generar oportunidades y mejorar tu operación">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Soluciones Web para Negocios en León | Solucion-e">
    <meta property="og:description" content="Creamos soluciones web que ayudan a los negocios a tener presencia, generar oportunidades, medir resultados y, cuando lo necesitan, mejorar su operación.">
    <meta property="og:image" content="https://solucion-e.com.mx/images/og-welcome.webp">

    @verbatim
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": [
                        "Organization",
                        "LocalBusiness"
                    ],
                    "@id": "https://solucion-e.com.mx/#organization",
                    "name": "Solucion-e",
                    "url": "https://solucion-e.com.mx/",
                    "logo": "https://solucion-e.com.mx/images/logo.png",
                    "image": "https://solucion-e.com.mx/images/og-welcome.webp",
                    "description": "Solucion-e desarrolla soluciones web para negocios y PyMEs, integrando presencia digital, SEO, generación de oportunidades y herramientas para mejorar su operación.",
                    "areaServed": {
                        "@type": "City",
                        "name": "León"
                    },
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "León",
                        "addressRegion": "Guanajuato",
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
                                    "url": "https://solucion-e.com.mx/seo-local/"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Sitios Web Profesionales",
                                    "url": "https://solucion-e.com.mx/sitios-web-profesionales/"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Plataformas Web Personalizadas",
                                    "url": "https://solucion-e.com.mx/plataformas-web-personalizadas/"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Soluciones Web para Restaurantes",
                                    "url": "https://solucion-e.com.mx/soluciones-web-restaurantes/"
                                }
                            }
                        ]
                    }
                },
                {
                    "@type": "WebSite",
                    "@id": "https://solucion-e.com.mx/#website",
                    "url": "https://solucion-e.com.mx/",
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
