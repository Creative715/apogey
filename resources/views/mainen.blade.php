<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-210359089-1">
</script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-210359089-1');
</script>
<!-- Modal3 -->
<div class="modal fade" id="call-back" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="rd-navbar-contacts-2">
                    <li>
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left"><img src="{{ asset('/images/phone-call.png') }}" alt="phone"></div>
                            <div class="unit-body"><a class="phone" href="tel:0442963188">044-296-31-88</a></div>
                        </div>
                    </li>
                    <br><br>
                    <li><br>
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left"><img src="{{ asset('/images/facebook.png') }}" alt="facebook"></div>
                            <div class="unit-body"><a class="phone"
                                                      href="https://www.facebook.com/2078665905548899/posts/2097629356985887/">Facebook</a>
                            </div>
                        </div>
                    </li>
                    <li><br>
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left"><img src="{{ asset('/images/mail.png') }}" alt="phone"></div>
                            <div class="unit-body"><a class="phone" href="mailto:apogeyfood@gmail.com">apogeyfood@gmail.com</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="top"></div>
<div class="preloader">
    <div class="wrapper-triangle">
        <div class="pen">
            <div class="line-triangle">
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
            </div>
            <div class="line-triangle">
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
            </div>
            <div class="line-triangle">
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
                <div class="triangle"></div>
            </div>
        </div>
    </div>
</div>
<div class="page">
    <!-- Page Header-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                 data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                 data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                 data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                 data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                 data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px"
                 data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-inner-outer">
                    <div class="rd-navbar-inner">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span>
                            </button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand" href="{{ ('/en') }}"><img
                                        class="brand-logo-dark" src="{{ asset('/images/logo-en.jpg') }}" alt="" width="198"
                                        height="66"/></a></div>
                            <div class="apogey-mobile">
                                <div class="dropdown" style="position:absolute;top:10px;right:15px;">
                                    <a style="font-size: 18px;color: #000;" href="#" role="button" id="dropdownMenuLink"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">| EN |</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{ ('/') }}">UA</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('ru') }}">RU</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rd-navbar-right rd-navbar-nav-wrap">
                            <div class="rd-navbar-aside">
                                <ul class="rd-navbar-contacts-2">
                                    <li>
                                        <div class="unit unit-spacing-xs">
                                            <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                            <div class="unit-body"><a class="phone" href="tel:0442963188">+38
                                                    044-296-31-88</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-spacing-xs">
                                            <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                            <div class="unit-body"><a class="address" href="#">Apogey ltd, Ukraine,
                                                    02094, Ukaine, Kyiv, Jury Popravka str. 6</a></div>
                                        </div>
                                    </li>
                                </ul>

                                <ul class="list-inline">
                                    <div class="dropdown d-none d-sm-block">
                                        <a style="font-size: 18px;color: #000;" href="#" role="button"
                                           id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">| EN |</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="{{ ('/') }}">UA</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ route('ru') }}">RU</a>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                            <div class="rd-navbar-Home">
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link"
                                                                      href="{{ route('en') }}">Home</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#product">Our products
                                            range</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#about">About us</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#destribution">Distribution</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#contact">Contact details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="rd-navbar-project">
                            <div class="rd-navbar-project-header">
                                <h5 class="rd-navbar-project-title">Distribution</h5>
                                <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-close"
                                     data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap"
                                     data-multitoggle-isolate="data-multitoggle-isolate">
                                    <div class="project-close"><span></span><span></span></div>
                                </div>
                            </div>
                            <div class="rd-navbar-project-content rd-navbar-content">
                                <div>
                                    <div class="row gutters-20" data-lightgallery="group">
                                        <div class="col-12 col-md-12">
                                            <!-- Thumbnail Creative-->
                                            <article class="thumbnail">
                                                <ul class="rd-navbar-contacts-2">
                                                    <li>
                                                        <div class="unit unit-spacing-xs">
                                                            <div class="unit-left"><img src="{{ asset('/images/phone-call.png') }}"
                                                                                        alt="phone"></div>
                                                            <div class="unit-body"><a class="phone"
                                                                                      href="tel:0442963188">044-296-31-88</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <br><br>
                                                    <li><br>
                                                        <div class="unit unit-spacing-xs">
                                                            <div class="unit-left"><img src="{{ asset('/images/facebook.png') }}"
                                                                                        alt="facebook"></div>
                                                            <div class="unit-body"><a class="phone"
                                                                                      href="https://www.facebook.com/2078665905548899/posts/2097629356985887/">Facebook</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li><br>
                                                        <div class="unit unit-spacing-xs">
                                                            <div class="unit-left"><img src="{{ asset('/images/mail.png') }}"
                                                                                        alt="phone"></div>
                                                            <div class="unit-body"><a class="phone"
                                                                                      href="mailto:apogeyfood@gmail.com">apogeyfood@gmail.com</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <hr>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true"
             data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
            <div class="swiper-slide context-dark" data-slide-bg="images/slide-2-1920x753.jpg">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0">
                                <h2 class="oh swiper-title">PRODUCTION AND DISTRIBUTION OF FOOD INGREDIENTS</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row row-50 pt-5">
            <br>
            <div class="col-lg-12 col-xl-12">
                <h2>Apogey LTD</h2>
                <!-- Quote Classic-->
                <article class="quote-classic">
                    <div class="quote-classic-text">
                        <p class="q">APOGEY LTD Manufacturer of a wide range of food ingredients. Have been operating
                            since 1993, we have extensive experience and client base in the field of B2B sales.</p>
                    </div>
                    <p class="quote-classic-author">
                    <div class="line"></div>
                    </p>
                </article>
            </div>
        </div>
    </div>
    <!-- What We Offer-->
    <section id="product" class="section section-md bg-default">
        <div class="container">
            <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp"></span></h3>
            <p></p>
            <div class="row row-md row-30 wow slideInUp">
                <div class="col-12 col-md-2 offset-md-2">
                    <ul>
                        <li class="animate__animated animate__fadeInRight"
                            style="min-height:305px;min-width:170px;padding:20px 5px;border:solid 2px #930f1f;"><a
                                href="{{ 'en/product/seasonings.html' }}"><h3 class="heading-6">SEASONINGS</h3></a>
                            <p></p></li>
                        <hr>
                    </ul>
                </div>
                <div class="col-12 col-md-2">
                    <ul>
                        <li class="animate__animated animate__fadeInRight"
                            style="min-height:305px;min-width:170px;padding:20px 5px;border:solid 2px #930f1f;"><a
                                href="{{ 'en/product/flavours.html' }}"><h3 class="heading-6">FLAVOURS</h3></a>
                            <p>Liquid and powder food flavors and fragrances.</p></li>
                        <hr>
                    </ul>
                </div>
                <div class="col-12 col-md-2">
                    <ul>
                        <li class="animate__animated animate__fadeInRight"
                            style="min-height:305px;min-width:170px;padding:20px 5px;border:solid 2px #930f1f;"><a
                                href="{{ 'en/product/functional-blends.html' }}"><h3 class="heading-6">FUNCTIONAL<br>BLENDS
                                </h3></a>
                            <p>Stabilizers, emulsifiers, blends for the yield increase, complex functional
                                additives.</p></li>
                        <hr>
                    </ul>
                </div>
                <div class="col-12 col-md-2">
                    <ul>
                        <li class="animate__animated animate__fadeInRight"
                            style="min-height:305px;min-width:170px;padding:20px 5px;border:solid 2px #930f1f;"><a
                                href="{{ 'en/product/marinades.html' }}"><h3 class="heading-6">MARINADES</h3></a>
                            <p>Dry and liquid marinades with a balanced composition of spices for fish and meat.</p>
                        </li>
                        <hr>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="destribution" class="section section-md bg-default">
        <div class="container">
            <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Distribution</span></h3>
            <p>Company Apogey LTD is expanding its distribution network and is therefore looking for agents and
                distributors in Europe and Asia.</p>
            <div class="row row-md row-30 wow slideInUp">
                <div class="col-12 col-md-2 offset-md-1">
                    <ul>
                        <li class="animate__animated animate__fadeInRight"
                            style="min-height:305px;min-width:170px;padding:20px 5px;border:solid 2px #930f1f;"><a
                                href="{{'/en/product/food-colours.html'}}"><h3 class="heading-6">FOOD COLOURS</h3></a>
                        </li>
                        <hr>
                    </ul>
                </div>
                <div class="col-12 col-md-2">
                    <ul>
                        <li class="animate__animated animate__fadeInRight"
                            style="min-height:305px;min-width:170px;padding:20px 5px;border:solid 2px #930f1f;"><a
                                href="{{'en/product/antioxidants.html'}}"><h3 class="heading-6">ANTI<br>OXIDANTS</h3>
                            </a>
                            <p></p></li>
                        <hr>
                    </ul>
                </div>
                <div class="col-12 col-md-2">
                    <ul>
                        <li class="animate__animated animate__fadeInRight"
                            style="min-height:305px;min-width:170px;padding:20px 5px;border:solid 2px #930f1f;"><a
                                href="{{'en/product/fibers.html'}}"><h3 class="heading-6">FIBERS</h3></a>
                            <p></p></li>
                        <hr>
                    </ul>
                </div>
                <div class="col-12 col-md-2">
                    <ul>
                        <li class="animate__animated animate__fadeInRight"
                            style="min-height:305px;min-width:170px;padding:20px 5px;border:solid 2px #930f1f;"><a
                                href="{{ 'en/product/ingredients-for-the-beverage-industry.html' }}"><h3
                                    class="heading-6">DOUGH MODIFIERS</h3></a>
                            <p></p></li>
                        <hr>
                    </ul>
                </div>
                <div class="col-12 col-md-2">
                    <ul>
                        <li class="animate__animated animate__fadeInRight"
                            style="min-height:305px;min-width:170px;padding:20px 5px;border:solid 2px #930f1f;"><a
                                href="{{ 'en/product/food-multimineral-complex.html' }}"><h3 class="heading-6">
                                    AQUAMIN</h3></a></li>
                        <hr>
                    </ul>
                </div>
            </div>
            <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Areas of application</span></h3>
            <p>Modern equipment, qualified staff and high-quality materials allow us to produce goods in large volumes
                without loss of individual qualities of each product.</p>
            <div class="row row-md row-30">
                @foreach($encategories as $encategory)
                    <div class="col-sm-6 col-lg-4">
                        <div class="oh-desktop">
                            <!-- Services Terri-->
                            <article class="services-terri wow slideInUp">
                                <div class="services-terri-figure"><a
                                        href="{{ route('encategory', $encategory->slug)}}"><img
                                            data-src="{{ $encategory->img ?? ''}}" src="{{ asset('/images/200.gif') }}"
                                            title="{{ $encategory->title ?? ''}}" alt="{{ $encategory->title ?? ''}}"
                                            width="370" height="278"/></a>
                                </div>
                                <div class="services-terri-caption"><span class="{{ $encategory->icon ?? ''}}"></span>
                                    <h5 class="services-terri-title"><a
                                            href="{{ route('encategory', $encategory->slug)}}">{{ $encategory->title ?? ''}}</a>
                                    </h5>
                                </div>
                            </article>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section CTA-->
    <section id="about" class="primary-overlay section parallax-container" data-parallax-img="images/bg-3.jpg">
        <div class="parallax-content section-xl context-dark text-md-left">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-8 col-md-7 col-lg-5">
                        <div class="cta-modern">
                            <h3 class="cta-modern-title wow fadeInRight">About Company</h3>
                            <p class="lead">More than 26 years in the food market makes us a favorite in this kind of
                                industry. Working with us, customers receive high-quality goods, timely delivery and
                                profitable partnership agreements. That is why 87% of customers - partners with
                                long-term contracts.</p>
                            <p class="cta-modern-text oh-desktop" data-wow-delay=".1s"><span
                                    class="cta-modern-decor wow slideInLeft"></span><span
                                    class="d-inline-block wow slideInDown">Apogey LTD</span></p><a
                                class="button button-md button-primary button-winona wow fadeInUp"
                                href="{{ route('enpages') }}" data-wow-delay=".2s">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-lg bg-default">
        <div class="container">
            <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Certificates</span></h3>
            <div class="row row-lg row-30">
                <div class="col-sm-6 col-lg-6 col-xl-6">

                    <article class="wow fadeInLeft" data-wow-delay=".15s">
                        <!-- Modal1 -->
                        <div class="modal fade" id="cert-en" tabindex="-1" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img class="img-thumbnail" src="{{ asset('/images/certificate01.jpg') }}"
                                             alt="certificate eng">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" data-toggle="modal" data-target="#cert-en"><img class="img-thumbnail"
                                                                                    src="{{ asset('/images/certificate01.jpg') }}"
                                                                                    alt="certificate eng"></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-6 col-xl-6">
                    <!-- Product-->
                    <article class="wow fadeInLeft" data-wow-delay=".15s">
                        <!-- Modal2 -->
                        <div class="modal fade" id="cert-ua" tabindex="-1" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img class="img-thumbnail" src="{{ asset('/images/certificate02.jpg') }}"
                                             alt="сертифікат якості українською">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Закрити
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" data-toggle="modal" data-target="#cert-ua"><img class="img-thumbnail"
                                                                                    src="{{ asset('/images/certificate02.jpg') }}"
                                                                                    alt="сертифікат якості українською"></a>
                    </article>
                </div>
            </div>

    </section>

    <section class="primary-overlay section parallax-container" data-parallax-img="{{ asset('images/bg-4.jpg') }}">
        <div class="parallax-content section-xxl context-dark text-md-left">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-9 col-md-7 col-lg-5">
                        <div class="cta-modern">
                            <h3 class="cta-modern-title cta-modern-title-2 oh-desktop"><span
                                    class="d-inline-block wow fadeInLeft">Invite to cooperate</span></h3>
                            <p class="cta-modern-text cta-modern-text-2 oh-desktop" data-wow-delay=".1s"><span
                                    class="cta-modern-decor cta-modern-decor-2 wow slideInLeft"></span><span
                                    class="d-inline-block wow slideInUp">Apogey LTD is open to cooperation and will be glad to work with new partners.</span>
                            </p><a class="button button-lg button-secondary button-winona wow fadeInRight"
                                   data-toggle="modal" data-target="#call-back" href="#">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-default">

    </section>
    <!-- Page Footer-->
    <footer id="contact" class="section footer-modern context-dark footer-modern-2">
        <div class="footer-modern-line">
            <div class="container">
                <div class="row row-50">
                    <div class="col-md-7 col-lg-7 col-xl-7" style="padding-left:55px;">
                        <h5 class="footer-modern-title oh-desktop"><span
                                class="d-inline-block wow slideInLeft">Office</span></h5>
                        <ul class="wow fadeInUp">
                            <li>Apogey ltd</li>
                            <li>6, Yuriy Popravka str.</li>
                            <li>02094, Ukaine, Kyiv</li>
                            <li>+38044-296-31-88, +38044-296-46-08, +38044-573-35-42</li>
                            <li>apogeyfood@gmail.com</li>
                            <li>www.apogey.com.ua</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-xl-5">
                        <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Manufacturing facility</span>
                        </h5>
                        <p class="wow fadeInRight">
                        <ul class="wow fadeInUp">
                            <li>Apogey ltd</li>
                            <li>Rusaniv village</li>
                            <li>Brovarsky distrikt</li>
                            <li>Kyiv region</li>
                            <li>Kyivska 4 str.</li>
                        </ul>
                        </p>

                    </div>

                </div>
            </div>
        </div>
        <div class="footer-modern-line-3">
            <div class="container">
                <div class="row row-10 justify-content-between">
                    <div class="col-md-6"><a class="brand" href="/"><img src="/images/logo-inverse-198x66.png" alt=""
                                                                         width="198" height="66"/></a></div>
                    <div class="col-md-auto">
                        <!-- Rights-->
                        <p class="rights"><span>&copy;&nbsp;</span><span
                                class="copyright-year"></span><span></span><span>.&nbsp;</span><span>All Rights Reserved.</span><span> Design&nbsp;by&nbsp;<a
                                    href="mailto:web415@gmail.com">Creative STUDIO</a></span></p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const lazyImages = document.querySelectorAll('img[data-src]');
            const windowHeight = document.documentElement.clientHeight;
            const loadMoreBlock = document.querySelectorAll('_load-more');

            let lazyImagesPositions = [];
            if (lazyImages.length > 0) {
                lazyImages.forEach(img => {
                    if (img.dataset.src) {
                        lazyImagesPositions.push(img.getBoundingClientRect().top + pageYOffset);
                    }
                });

            }

            window.addEventListener('scroll', lazyScroll);

            function lazyScroll() {
                if (document.querySelectorAll('img[data-src]').length > 0) {
                    lazyScroLTDhek();
                }
            }


            function lazyScroLTDhek() {
                let imgIndex = lazyImagesPositions.findIndex(
                    item => pageYOffset > item - windowHeight
                );
                if (imgIndex >= 0) {
                    if (lazyImages[imgIndex].dataset.src) {
                        lazyImages[imgIndex].src = lazyImages[imgIndex].dataset.src;
                        lazyImages[imgIndex].removeAttribute('data-src');
                    }

                    delete lazyImagesPositions[imgIndex];

                }
            }


            function loadMore() {
                loadMoreBlockPos = loadMoreBlock.getBoundingClientRect().top + pageYOffset;
                loadMoreBlockHeight = loadMoreBlock.offsetHeight;

                if (pageYOffset > (loadMoreBlockPos + loadMoreBlockHeight) - windowHeight) {
                    getContent();
                }
            }

            async function getContent() {

            }
        </script>
        <!-- hit.ua -->
        <a href='https://hit.ua/?x=38334' rel="nofollow" target='_blank'>
            <script><!--
                Cd = document;
                Cr = "&" + Math.random();
                Cp = "&s=1";
                Cd.cookie = "b=b";
                if (Cd.cookie) Cp += "&c=1";
                Cp += "&t=" + (new Date()).getTimezoneOffset();
                if (self != top) Cp += "&f=1";
                //--></script>
            <script><!--
                if (navigator.javaEnabled()) Cp += "&j=1";
                //--></script>
            <script><!--
                if (typeof (screen) != 'undefined') Cp += "&w=" + screen.width + "&h=" +
                    screen.height + "&d=" + (screen.colorDepth ? screen.colorDepth : screen.pixelDepth);
                //--></script>
            <script><!--
                Cd.write("<img src='//c.hit.ua/hit?i=38334&g=0&x=2" + Cp + Cr +
                    "&r=" + escape(Cd.referrer) + "&u=" + escape(window.location.href) +
                    "' border='0' wi" + "dth='1' he" + "ight='1'/>");
                //--></script>
            <noscript>
                <img alt='stat apogey' src='//c.hit.ua/hit?i=38334&amp;g=0&amp;x=2'/>
            </noscript>
        </a>
        <!-- / hit.ua -->


    </footer>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
</div>
<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
