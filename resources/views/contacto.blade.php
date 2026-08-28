@extends('layouts-web.main')

@section('seo')
    <title>Iniciar Proyecto | Solucion-e: Consultoría Tecnológica</title>
    <meta name="description" content="¿Listo para escalar? Cuéntanos tu desafío y diseñemos juntos la herramienta que transformará tu negocio.">
@endsection

@section('content')

<x-components-web.shared.contact-form :is-page="true" />

@endsection
