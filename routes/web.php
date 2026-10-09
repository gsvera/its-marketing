<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     $title = "Agencia de Marketing Digital en México – It's Marketing ®";
    $description = "Agencia de marketing digital en México, especializados en Ventas y Publicidad: Google, Redes Sociales y Posicionamiento SEO";
    $keywords = "agencia de marketing digital en México, posicionamiento web en México, agencia de redes sociales en México, agencian de publicidad en México, agencia de mercadotecnia digital en México, agencia de publicidad digital en México, agencia de marketing en México";
    return view('home')->with("title", $title)->with("description", $description)->with("keywords", $keywords);
});

Route::get('/nosotros', function() {
    return view('about');
});
Route::get('/agencia-de-marketing-digital-cancun', function() {
    $title = "Agencia de Marketing Digital en Cancún – It's Marketing ®";
    $description = "Con 14 años de experiencia, hemos ayudado a empresa de Cancún a convertir seguidores en clientes ¡Conoce nuestra metodología!";
    $keywords = "agencia de marketing digital en Cancún, posicionamiento web en Cancún, agencia de redes sociales en Cancún, publicidad en internet, agencia de mercadotecnia digital en Cancún, agencia de publicidad digital en Cancún, agencia de marketing en Cancún";
    return view('digital-marketing')->with("title", $title)->with("description", $description)->with("keywords", $keywords);
});
Route::get('/agencia-de-redes-sociales-cancun', function() {
    $title = "Agencia de Redes Sociales en Cancún – It's Marketing ® ";
    $description = "Consigue clientes con contenido atractivo en tus redes sociales. Servicio de Community manager y publicidad digital ¡Contáctanos!";
    $keywords = "agencia de redes sociales en Cancún, publicidad en redes sociales, Community manager cancun, administración de redes sociales en Cancún, cursos de redes sociales  en cancún";
    return view('rrss')->with("title", $title)->with("description", $description)->with("keywords", $keywords);
});
Route::get('/agencia-de-publicidad-digital-cancun', function() {
    $title = "Agencia de Publicidad Digital en Cancún – It's Marketing ®";
    $description = "Desarrollamos anuncios en Facebook, Google, TikTok y más para conectar con tu audiencia en Cancún. Potencia tu marca. ¡Contáctanos ahora!";
    $keywords = "agencia de publicidad en Cancún, publicidad en redes sociales, agencia de publicidad digital en Cancún, publicidad digital en Cancún, SEM Cancún";
    return view('digital-advertising')->with("title", $title)->with("description", $description)->with("keywords", $keywords);
});
Route::get('/agencia-seo-posicionamiento-web-cancun', function() {
    $title = "Agencia de posicionamiento web, SEO en Cancún – It's Marketing ®";
    $description = "Posicionaremos tu página web en los primeros lugares. Servicio de contenidos, analítica web y conversiones ¡Conócenos!";
    $keywords = "agencia de posicionamiento web en Cancún, agencia SEO en Cancún, SEO Cancún, especialista SEO Cancún, posicionamiento web en Cancún, SEO en Cancún";
    return view('seo-position')->with("title", $title)->with("description", $description)->with("keywords", $keywords);
});
Route::get('/agencia-de-diseño-y-desarrollo-de-paginas-web-cancun', function() {
    $title = "Diseño de páginas web en Cancún – It's Marketing ®";
    $description = "Desarollo de sitios web profesionales y tiendas en línea. Diseño adaptado a celular ¡Mejora  tu presencia digital ahora!";
    $keywords = "Desarrollo de páginas web, páginas web en Cancún, diseño de páginas web en Cancún, desarrollo de sitios web en Cancún, comercio electrónico en Cancún";
    return view('web-desing')->with("title", $title)->with("description", $description)->with("keywords", $keywords);
});
Route::get('/casos-de-exito-de-marketing-digital-cancun', function() {
    $title = "Casos de Éxito – It's Marketing ®";
    $description = "Conoce los casos de éxito de nuestros clientes y descubre cómo hemos ayudado a empresas de Cancún y México a alcanzar sus objetivos de marketing digital. ¡Inspírate con nuestras historias de éxito y contáctanos para llevar tu negocio al siguiente nivel!";
    $keywords = "casos de éxito de marketing digital, historias de éxito de clientes, resultados de campañas de marketing, testimonios de clientes satisfechos, estrategias de marketing efectivas, agencia de marketing digital en Cancún, agencia de marketing digital en México";
    return view('success-case')->with("title", $title)->with("description", $description)->with("keywords", $keywords);
});;