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
            <div class="wd-45 content-xy-center">
                <div class="content-relative">
                    <img class="img-one-column" src="/assets/dos-personas.jpg" />
                    <div class="block-contact">
                        <a href="" class="content-xy-center gap-10">
                            <div class="box-phone">                            
                                <img class="icon-phone" src="/assets/iconos/phone-white.png" alt="">
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
    <div class="content-body-dark">
        <div class="content-card-absolute">
            <div class="content-cards">
                <div class="card-white">
                    <div class="aling-start">
                        <div class="card-badge-yellow">
                            <i class="fa fa-certificate card-icon-white" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="card-title">Calidad de servicio</h3>
                        <p class="tc-secondary">Diseñamos estrategias personalizadas con altos estándares de ejecución para garantizar el máximo rendimiento de tu inversión digital.</p>
                    </div>
                </div>
                <div class="card-yellow">
                    <div class="aling-start">
                        <div class="card-badge-white">
                            <img class="icon-menu-mns" src="/assets/iconos/atencion-a-mensajes.png" alt="Atencion a mensajes para obtener consultoria" />
                        </div>
                    </div>
                    <div>
                        <h3 class="card-title tc-white">Consultoria</h3>
                        <p class="tc-white">Analizamos el estado de tu marca, identificamos oportunidades clave de mercado y trazamos la ruta estratégica para acelerar tu crecimiento.</p>
                    </div>
                </div>
                <div class="card-dark">
                    <div class="aling-start">
                        <div class="card-badge-yellow">
                            <i class="fa fa-user-circle-o card-icon-white" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="card-title tc-white">Atención Profesional</h3>
                        <p class="tc-secondary tc-secondary">Un equipo especializado te acompañará de cerca en cada etapa de tu proyecto, asegurando comunicación fluida y resultados constantes.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-space-aroud h-100">
            <div>
                <div class="content-xy-center">
                    <i class="fa fa-user-circle-o icon-count" aria-hidden="true"></i>
                </div>
                <div class="number-count">120 <span class="symbol-count">+</span></div>
                <div class="tc-secondary t-center">Clientes Felices</div>
            </div>
            <div>
                <div class="content-xy-center">
                    <i class="fa fa-user-circle-o icon-count" aria-hidden="true"></i>
                </div>
                <div class="number-count">350 <span class="symbol-count">+</span></div>
                <div class="tc-secondary t-center">Proyectos Completos</div>
            </div>
            <div>
                <div class="content-xy-center">
                    <i class="fa fa-user-circle-o icon-count" aria-hidden="true"></i>
                </div>
                <div class="number-count">14 <span class="symbol-count">+</span></div>
                <div class="tc-secondary t-center">Años de experiencia</div>
            </div>
            <div>
                <div class="content-xy-center">
                    <i class="fa fa-user-circle-o icon-count" aria-hidden="true"></i>
                </div>
                <div class="number-count">12 <span class="symbol-count">+</span></div>
                <div class="tc-secondary t-center">Equipo profesional</div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="content-space-between">
            <div class="content-relative col-4">
                <div class="circle-blob circle-blob-content"></div>
                <div class="tf-bold-600 mb-2 fs-11">Nuestros <span class="tc-main-color">servicios</span></div>
                <h2 class="subtitle">Servicios de Marketing Digital</h2>
            </div>
            <div class="col-4 content-xy-center">
                <p class="tc-secondary">
                    Impulsamos la presencia digital de tu marca mediante estrategias integrales orientadas a la captación de prospectos y conversión de ventas.
                </p>
            </div>
            <div class="content-xy-center col-2">
                <button class="btn-contact" type="button">Contacto</button>
            </div>
        </div>
        <div class="content-grid-three">
            <div class="card-services">
                <img class="icon-card" src="/assets/branding.png" alt="">
                <h3 class="title-card">Marketing Digital</h3>
                <p class="tc-secondary mb-2">
                    Construimos comunidades sólidas y creamos contenido estratégico de alto impacto para conectar emocionalmente con tu audiencia.
                </p>
                <a class="link-card" href="/marketing-digital">Leer más</a>
            </div>
            <div class="card-services">
                <img class="icon-card" src="/assets/branding.png" alt="">
                <h3 class="title-card">Redes Sociales</h3>
                <p class="tc-secondary mb-2">
                    Construimos comunidades sólidas y creamos contenido estratégico de alto impacto para conectar emocionalmente con tu audiencia.
                </p>
                <a class="link-card" href="/redes-sociales">Leer más</a>
            </div>
            <div class="card-services">
                <img class="icon-card" src="/assets/branding.png" alt="">
                <h3 class="title-card">Publicidad Digital</h3>
                <p class="tc-secondary mb-2">
                    Diseñamos e implementamos campañas segmentadas de alto rendimiento para maximizar tu alcance e incrementar tu retorno de inversión.
                </p>
                <a class="link-card" href="/publicidad-digital">Leer más</a>
            </div>
            <div class="card-services">
                <img class="icon-card" src="/assets/branding.png" alt="">
                <h3 class="title-card">Posicionamiento SEO</h3>
                <p class="tc-secondary mb-2">
                    Optimizamos tu estructura web y contenidos para escalar posiciones orgánicas en los principales motores de búsqueda.
                </p>
                <a class="link-card" href="/posicionamiento-seo">Leer más</a>
            </div>
            <div></div>
            <div class="card-services">
                <img class="icon-card" src="/assets/branding.png" alt="">
                <h3 class="title-card">Diseño y Desarrollo de Páginas Web</h3>
                <p class="tc-secondary mb-2">
                    Desarrollamos sitios web funcionales, atractivos y optimizados para ofrecer la mejor experiencia de usuario e impulsar conversiones.
                </p>
                <a class="link-card" href="/diseño-y-desarrollo-de-paginas-web">Leer más</a>
            </div>
        </div>
    </div>
</div>

@endsection