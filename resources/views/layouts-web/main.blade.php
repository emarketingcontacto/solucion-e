<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- styles local --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preload" href="{{ asset('fonts/jura/jura-v34-latin-regular.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/styleweb.css') }}">
    {{-- end styles local  --}}

    <!-- Google Tag Manager -->
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <script>
        {{-- 2. Usamos una función para que se ejecute solo después de que la página empiece a cargar --}}
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
        j.async=true; {{-- Esto ya ayuda, pero el navegador igual lo prioriza si está muy arriba --}}
        j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
        f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5Z338VPF');
    </script>
    <!-- End Google Tag Manager -->

    {{-- seo --}}
        @if (!View::hasSection('seo'))
            <title>Solucion-e</title>
            <meta name='description' content="Soluciones digitales a medida">
        @else
            @yield('seo')
        @endif
    {{-- seo end --}}

    {{-- Favicon Pack --}}
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('site.webmanifest') }}">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    {{-- Favicon Pack end--}}


    {{-- CSS extra --}}
    @stack('styles')
    {{-- CSS extra end --}}
</head>

<body class="bg-gray-950 text-white antialiased selection:bg-brand selection:text-black">

    {{-- navigation --}}
        <x-components-web.navigation></x-components-web.navigation>
    {{-- navigation end--}}

    <main>
        @yield('content')
    </main>

   {{-- footer --}}
    <x-components-web.footer></x-components-web.footer>
   {{-- footer end --}}

    {{-- JS extra --}}
    @stack('scripts')
    {{-- JS extra end --}}

    <x-components-web.back-to-top-button></x-components-web.back-to-top-button>

     <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5Z338VPF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>
</html>
