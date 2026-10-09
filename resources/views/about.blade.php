@extends('layouts.layout')
@section('content')
    <div>
        <div class="banner-about">
            <div class="shadow-content-banner">
                <div class="wd-60">
                    <h1 class="title-banner-section t-center"><span class="tc-main-color">It's Marketing:</span> El Departamento de Marketing Digital que tu empresa necesita</h1>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="content-space-between">
                <div class="content-xy-center wd-45">
                    <div class="content-relative mb-5-mob">
                        <div class="circle-blob circle-blob-content"></div>
                        <p class="tf-bold-600 mb-2">Nosotros</p>
                        <h2 class="subtitle">Construyendo historias digitales de impacto. Somos It's Marketing, tu agencia de Marketing Digital en México.</h2>
                        <p class="tc-secondary mb-1">
                            It's Marketing es una agencia de Marketing Digital en México que diseña e implementa estrategias de Inbound Marketing orientadas a incrementar las ventas y mejorar el posicionamiento online de nuestros clientes.
                        </p>
                        <p class="tc-secondary mb-1">
                            Nos especializamos en la gestión de redes sociales corporativas, optimización SEO para Google y otros motores de búsqueda, diseño y desarrollo web, comercio electrónico, captación de leads cualificados, publicidad online y estrategias integrales de Marketing Digital. Todo esto respaldado por la creatividad, la innovación y el compromiso que tu marca merece.
                        </p>
                        <p class="tc-secondary">
                            Funcionamos como un departamento externo de mercadotecnia digital: nos integramos a tu equipo, entendemos tu negocio y actuamos con la agilidad y el enfoque estratégico de una agencia especializada. No importa si eres una startup, una pyme o una empresa consolidada: en It's Marketing tenemos la solución digital adecuada para ti.
                        </p>
                        <div class="mt-4">
                            <a rel="nofollow" href="https://wa.me/9981539626" target="_blank" class="btn-contact-lg ho-dark">Contáctanos</a>
                        </div>
                    </div>
                </div>
                <div class="wd-45 content-xy-center">
                    <div class="content-relative">
                        <img class="img-one-column" src="/assets/dos-personas.jpg" alt="Construyendo historias digitales de impacto. Somos It's Marketing, tu agencia de Marketing Digital en México." />
                        <div class="block-contact">
                            <a rel="nofollow" href="https://wa.me/9981539626" target="_blank" class="content-xy-center gap-10">
                                <div class="box-phone">
                                    <img class="icon-phone" src="/assets/iconos/phone-white.png" alt="Contacto telefónico de It's Marketing para consultoría" />
                                </div>
                                <div>
                                    <p class="fs-12">Obten Consultoría</p>
                                    <p class="tc-secondary">(+52) 998 153 9626</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex-desk mb-5 content-relative">
            <div class="background-about">
            </div>
            <div class="col-dark">
                <div class="content-relative">
                    <div class="circle-blob circle-blob-content"></div>
                </div>
                <p class="tf-bold tc-white mb-2 psr-2">¿Por qué Elegirnos?</p>
                <h2 class="subtitle tc-white psr-2">Proveemos Soluciones Creativas Para Tus Ideas Creativas</h2>
                <p class="tc-secondary">
                    En It's Marketing combinamos creatividad, tecnología y análisis de datos para diseñar soluciones digitales que superen tus expectativas. Nos enfocamos en entender a fondo los objetivos de tu negocio para construir estrategias sólidas que potencien tu presencia digital y generen un crecimiento real y sostenible.
                </p>
                <div class="content-space-between mt-40">
                    <div>
                        <div class="circular-progress box-count" style="--percentage: 0;">
                            <span class="progress-value number-count" data-target="92">0</span>%
                        </div>
                        <h3 class="tc-white subtitle-h3 mb-1">Soluciones Creativas</h3>
                        <p class="tc-secondary">Desarrollamos conceptos visuales e innovadores alineados a la personalidad e identidad de tu marca para destacar en el entorno digital.</p>
                    </div>
                    <div>
                        <div class="circular-progress box-count" style="--percentage: 0;">
                            <span class="progress-value number-count" data-target="94">0</span>%
                        </div>
                        <h3 class="tc-white subtitle-h3 mb-1">Estrategia Digital</h3>
                        <p class="tc-secondary">Ejecutamos planes de acción basados en análisis métricos para garantizar resultados optimizados y orientados a la conversión.</p>
                    </div>
                </div>
                <div class="mt-4">
                    <a rel="nofollow" href="https://wa.me/9981539626" target="_blank" class="btn-contact-lg ho-white">Obten Consultoría</a>
                </div>
            </div>
        </div>
        <div class="space-100"></div>
    </div>
    @push('scripts')
        <script src="/js/main.js"></script>        
    @endpush
@endsection