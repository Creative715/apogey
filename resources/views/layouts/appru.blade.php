<!doctype html>
<html class="wide wow-animation" lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? '' }}</title>
    <meta name="description" content="{{ $description ?? '' }}">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="{{ asset('js/core.min.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

        <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-210359089-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-210359089-1');
</script>
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
                  <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-inner-outer">
                      <div class="rd-navbar-inner">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                          <!-- RD Navbar Toggle-->
                          <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                          <!-- RD Navbar Brand-->
                          <div class="rd-navbar-brand"><a class="brand" href="{{ route('ru') }}"><img class="brand-logo-dark" src="/images/logo-ru.jpg" alt="" width="198" height="66"/></a></div>
                        </div>
                        <div class="rd-navbar-right rd-navbar-nav-wrap">
                          <div class="rd-navbar-aside">
                            <ul class="rd-navbar-contacts-2">
                              <li>
                                <div class="unit unit-spacing-xs">
                                  <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                  <div class="unit-body"><a class="phone" href="tel:0442963188">+38 044-296-31-88</a></div>
                                </div>
                              </li>
                              <li>
                                <div class="unit unit-spacing-xs">
                                  <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                  <div class="unit-body"><a class="address" href="#">ООО "Апогей", 02094, г. Киев, ул. Юрия Поправки, 6</a></div>
                                </div>
                              </li>
                            </ul>
                            <ul class="list-inline">
                              <div class="dropdown">
                              <a style="font-size: 18px;color: #000;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">| RU |</a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ ('/') }}">UA</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('en') }}">EN</a>
                              </div>
                            </div>
                            </ul>
                          </div>
                          <div class="rd-navbar-main">
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                              @include('layouts._menuru')
                            </ul>
                          </div>
                        </div>

                        <div class="rd-navbar-project">
                          <div class="rd-navbar-project-header">
                            <h5 class="rd-navbar-project-title">Связатся с нами</h5>
                            <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-close" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                              <div class="project-close"><span></span><span></span></div>
                            </div>
                          </div>
                          <div class="rd-navbar-project-content rd-navbar-content">
                            <div>
                              <div class="row gutters-20" data-lightgallery="group">
                                <div class="col-12 col-md-12">
                                  <!-- Thumbnail Creative-->
                                  <article class="thumbnail">
                                    <ul class="rd-navbar-contacts-2"><li><div class="unit unit-spacing-xs"><div class="unit-left"> <img src="/images/phone-call.png" alt="телефон"> </div>  <div class="unit-body"><a class="phone" href="tel:0442963188">044-296-31-88</a></div></div></li><br>
                                        <li><div class="unit unit-spacing-xs">  <div class="unit-left"> <img src="/images/viber.png" alt="Viber"> </div>  <div class="unit-body"><a class="phone" href="viber://chat?number=+380972836324">044-296-31-88</a></div></div></li><br>
                                        <li><div class="unit unit-spacing-xs">  <div class="unit-left"> <img src="/images/facebook.png" alt="facebook"></div>  <div class="unit-body"><a class="phone" href="https://www.facebook.com/2078665905548899/posts/2097629356985887/">Facebook</a></div></div></li><br>
                                        <li><div class="unit unit-spacing-xs">  <div class="unit-left"> <img src="/images/mail.png" alt="E-mail"></div>  <div class="unit-body"><a class="phone" href="mailto:apogeyfood@gmail.com">apogeyfood@gmail.com</a></div></div></li>
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
        <main>
          <section class="section section-lg bg-default text-left">
            @yield('content')
          </section>
        </main>
                      <!-- Page Footer-->
                      <footer id="contact" class="section footer-modern context-dark footer-modern-2">
                        <div class="footer-modern-line">
                          <div class="container">
                            <div class="row row-50">
                              <div class="col-md-7 col-lg-7 col-xl-7" style="padding-left:55px;">
                                  <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Офис</span></h5>
                                  <ul class="wow fadeInUp">
                                    <li> ООО "Апогей"</li>
                                      <li>02094,  г. Киев</li>
                                      <li>ул. Юрия Поправки, 6</li>
                                      <li>+38044-296-31-88, +38044-296-46-08, +38044-573-35-42</li>
                                      <li>apogeyfood@gmail.com</li>
                                      <li>www.apogey.com.ua</li>
                                  </ul>
                                </div>
                                <div class="col-lg-5 col-xl-5">
                                  <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Производство</span></h5>
                                  <p class="wow fadeInRight">
                                    <ul class="wow fadeInUp">
                                        <li>ООО "Апогей"</li>
                                        <li>Киевская обл.</li>
                                        <li>Броварской р-н.</li>
                                        <li>с. Русанов</li>
                                        <li>ул. Киевская, 4</li>
                                    </ul>
                                  </p>

                                </div>

                                           </div>
                          </div>
                        </div>

                        <div class="footer-modern-line-3">
                          <div class="container">
                            <div class="row row-10 justify-content-between">
                              <div class="col-md-6"><a class="brand" href="/"><img src="/images/logo-inverse-198x66.png" alt="" width="198" height="66"/></a></div>
                              <div class="col-md-auto">
                                <!-- Rights-->
                                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span></span><span>.&nbsp;</span><span>All Rights Reserved.</span><span> Design&nbsp;by&nbsp;<a href="mailto:web415@gmail.com">Creative STUDIO</a></span></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- hit.ua -->
                <a href='https://hit.ua/?x=38334' rel="nofollow" target='_blank'>
                  <script><!--
                  Cd=document;Cr="&"+Math.random();Cp="&s=1";
                  Cd.cookie="b=b";if(Cd.cookie)Cp+="&c=1";
                  Cp+="&t="+(new Date()).getTimezoneOffset();
                  if(self!=top)Cp+="&f=1";
                  //--></script>
                  <script><!--
                  if(navigator.javaEnabled())Cp+="&j=1";
                  //--></script>
                  <script><!--
                  if(typeof(screen)!='undefined')Cp+="&w="+screen.width+"&h="+
                  screen.height+"&d="+(screen.colorDepth?screen.colorDepth:screen.pixelDepth);
                  //--></script>
                  <script><!--
                  Cd.write("<img src='//c.hit.ua/hit?i=38334&g=0&x=2"+Cp+Cr+
                  "&r="+escape(Cd.referrer)+"&u="+escape(window.location.href)+
                  "' border='0' wi"+"dth='1' he"+"ight='1'/>");
                  //--></script>
                  <noscript>
                  <img alt='stat apogey' src='//c.hit.ua/hit?i=38334&amp;g=0&amp;x=2'/>
                  </noscript></a>
                  <!-- / hit.ua -->


                      </footer>
                          <!-- Global Mailform Output-->
                    <div class="snackbars" id="form-output-global"></div>
  </div>
</body>
</html>
