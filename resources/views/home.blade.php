@extends('layouts.layout')
@section('content')

<div>
    <div class="main-banner">
        <div class="banner-content">
            <div class="col-banner">
                <img class="img-main-banner" src="/assets/main-banner.jpg" alt="Main Banner" />
            </div>
            <div class="col-banner content-xy-center">
                <div class="content-text-banner">
                    <div class="circle-blob circle-blob-banner"></div>
                    <p class="tc-white tf-bold-600">Bienvenido a <span class="tc-main-color">IT'S Marketing</span></p>
                    <h1 class="title-banner">Agencia de Marketing Digital en México | It's Marketing</h1>
                    <p class="subtitle-banner">Impulsa la visibilidad de tu negocio en el entorno digital y lleva tu marca al siguiente nivel con el respaldo de It's Marketing, tu aliado estratégico en México.</p>
                    <div class="mt-4">
                        <a href="#" class="btn-contact-lg ho-white">Contáctanos</a>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="content-space-between">
            <div class="content-xy-center wd-45">
                <div class="content-relative">
                    <div class="circle-blob circle-blob-content"></div>
                    <p class="tf-bold-600 mb-2">Acerca de <span class="tc-main-color">IT'S Marketing</span></p>
                    <h2 class="subtitle">Proveemos Las Mejoras Soluciones Para Que Tu Negocio Crezca En El Entorno Digital</h2>
                    <p class="tc-secondary">
                        Contamos con un equipo especializado en marketing digital, gestión de redes sociales, posicionamiento SEO, diseño web profesional y publicidad digital de alto rendimiento. Todo lo que tu empresa necesita para crecer en internet, en un solo lugar.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="btn-contact-lg ho-dark">Contáctanos</a>
                    </div>
                </div>
            </div>
            <div class="wd-45 content-relative">
                <img class="img-one-column" src="/assets/dos-personas.jpg" />
                <div class="block-contact">
                    <a href="" class="content-xy-center gap-10">
                        <div class="box-phone">
                            <i class="fa fa-phone tc-white fa-2x" aria-hidden="true"></i>
                        </div>
                        <div>
                            <p class="fs-12">Obten Consultoria</p>
                            <p class="tc-secondary">(+52) 998 153 9626</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection