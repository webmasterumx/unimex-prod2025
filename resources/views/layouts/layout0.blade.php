<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora de Becas | UNIMEX</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <meta name="description"
        content="Con la calculadora de becas obtén el valor de tu beca para licenciatura, especialidad o maestría. Ingresa y obtén la promoción especial">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta property="og:site_name" content="Universidad Mexicana">
    <meta property="og:locale" content="es_MX">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Calculadora de Becas | UNIMEX">
    <meta property="og:description"
        content="Con la calculadora de becas obtén el valor de tu beca para licenciatura, especialidad o maestría. Ingresa y obtén la promoción especial">
    <meta property="og:url" content="https://unimex.edu.mx/calcula-tu-cuota/">
    <meta property="og:image" content="https://unimex.edu.mx/img/about/message/principal.png">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@soyunimex">
    <meta name="twitter:title" content="Universidad Mexicana">
    <meta name="twitter:description"
        content="En UNIMEX contamos con 15 Licenciaturas, 6 Posgrados y 3 Licenciaturas Abiertas. Inscribite ya">
    <meta name="twitter:image" content="https://unimexver.edu.mx/img/about/message/principal.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#004A92">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <link rel="canonical" href="https://unimex.edu.mx/calcula-tu-cuota/">
    <link rel="alternate" href="https://unimex.edu.mx/calcula-tu-cuota/" hreflang="x-default">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Metro-->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TDWNMQ');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1415089369336607');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1415089369336607&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!--Tiktok Pixel Code-->
    <script>
        ! function(w, d, t) {
            w.TiktokAnalyticsObject = t;
            var ttq = w[t] = w[t] || [];
            ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias",
                "group", "enableCookie", "disableCookie"
            ], ttq.setAndDefer = function(t, e) {
                t[e] = function() {
                    t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
                }
            };
            for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]);
            ttq.instance = function(t) {
                for (var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[n]);
                return e
            }, ttq.load = function(e, n) {
                var i = "https://analytics.tiktok.com/i18n/pixel/events.js";
                ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = i, ttq._t = ttq._t || {}, ttq._t[e] = +new Date,
                    ttq._o = ttq._o || {}, ttq._o[e] = n || {};
                var o = document.createElement("script");
                o.type = "text/javascript", o.async = !0, o.src = i + "?sdkid=" + e + "&lib=" + t;
                var a = document.getElementsByTagName("script")[0];
                a.parentNode.insertBefore(o, a)
            };

            ttq.load('CHT3MJJC77U0O25ESA0G');
            ttq.page();
        }(window, document, 'ttq');
    </script>
    <!--Tiktok Pixel Code-->
    <!--LinkedIn Pixel Code-->
    <script type="text/javascript">
        _linkedin_partner_id = "4929644";
        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
    </script>
    <script type="text/javascript">
        (function(l) {
            if (!l) {
                window.lintrk = function(a, b) {
                    window.lintrk.q.push([a, b])
                };
                window.lintrk.q = []
            }
            var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript";
            b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);
        })(window.lintrk);
    </script>
    <noscript>
        <img height="1" width="1" style="display:none;" alt=""
            src="https://px.ads.linkedin.com/collect/?pid=4929644&fmt=gif" />
    </noscript>
    <!--End LinkedIn Pixel Code-->

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Calculadora de Becas | UNIMEX",
            "url": "https://unimex.edu.mx/calcula-tu-cuota/",
            "alternateName": "Calculadora Becas",
            "keywords": "calculadora de becas, becas licenciatura, becas maestria, becas posgrado, becas especialidad",
            "image": "https://unimex.edu.mx/img/about/message/principal.png",
            "about": {
                "@type": "Thing",
                "name": "Con la calculadora de becas obtén el valor de tu beca para licenciatura, especialidad o maestría. Ingresa y obtén la promoción especial"
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Universidad Mexicana",
            "url": "https://unimex.edu.mx/",
            "logo": "https://unimex.edu.mx/img/about/message/principal.png",
            "sameAs": [
                "https://www.facebook.com/unimex/",
                "https://twitter.com/soyunimex",
                "https://www.instagram.com/universidadmexicana",
                "https://mx.linkedin.com/school/universidad-mexicana",
                "https://www.youtube.com/user/SoyUNIMEX"
            ]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "CollegeOrUniversity",
            "name": "Universidad Mexicana",
            "url": "https://unimex.edu.mx/",
            "alternateName": "UNIMEX",
            "description": "En UNIMEX contamos con 17 Licenciaturas, 9 Posgrados y Licenciaturas Abiertas. Inscribete ya en cualquiera de nuestros planteles ubicados en Cuautitlán Izcalli, Satélite, Polanco y Veracruz",
            "telephone": "+52 5511020250",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Emilio Castelar No. 63, esq. Eugenio Sue",
                "addressLocality": "CDMX",
                "addressRegion": "CDMX",
                "postalCode": "11560",
                "addressCountry": "México"
            },
            "hasMap": "https://www.google.com/maps/d/embed?mid=1DEonwKOkwsq1_zCMM-Nd6HFjXU9Gk3E7&ehbc=2E312F",
            "logo": "https://unimex.edu.mx/img/about/message/principal.png",
            "sameAs": [
                "https://www.facebook.com/unimex/",
                "https://twitter.com/soyunimex",
                "https://www.instagram.com/universidadmexicana",
                "https://mx.linkedin.com/school/universidad-mexicana",
                "https://www.youtube.com/user/SoyUNIMEX"
            ]
        }
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    @php
        $complemento = filemtime('assets/css/app.css');
        $rutaCss = 'assets/css/app.css?' . $complemento;

        $complemento1 = filemtime('assets/css/mediaQuery.css');
        $rutaCss1 = 'assets/css/mediaQuery.css?' . $complemento1;
    @endphp

    <link rel="stylesheet" href="{{ asset($rutaCss) }}">
    <link rel="stylesheet" href="{{ asset($rutaCss1) }}">
    <style>
        .style_prevu_kit {
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1);
            transition: all 200ms ease-in;
            transform: scale(1);
        }

        .style_prevu_kit:hover {
            box-shadow: 0px 0px 150px #000000;
            z-index: 2;
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1.2);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1.2);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1.2);
            transition: all 200ms ease-in;
            transform: scale(1.2);
        }
    </style>

    <style media="print">
        #printButton,
        #correoButton {
            display: none;
        }

        .col-md-4 {
            flex: 0 0 auto !important;
            width: 33.33333333% !important;
        }

        .col-md-3 {
            flex: 0 0 auto !important;
            width: 25% !important;
        }

        .btn.active {
            color: #ffffff !important;
            background: #000000 !important;
        }

        .accordion-button:not(.collapsed) {
            color: #000000 !important;
            background-color: #ffffff !important;
            box-shadow: none;
        }
    </style>
</head>

<body>

    @if (isset($dataUTM))
        @if (
            $dataUTM['utm_medium'] == 'organico' ||
                $dataUTM['utm_medium'] == 'ORGANICO' ||
                $dataUTM['utm_medium'] == 'Organico' ||
                $dataUTM['utm_medium'] == null)
            @php
                $utmOrganico = true;
                $complemento = '';
            @endphp
        @else
            @php
                $utmOrganico = false;
                $complemento =
                    '?utm_source=' .
                    $dataUTM['utm_source'] .
                    '&utm_medium=' .
                    $dataUTM['utm_medium'] .
                    '&utm_campaign=' .
                    $dataUTM['utm_campaign'] .
                    '&utm_term=' .
                    $dataUTM['utm_term'] .
                    '&utm_content=' .
                    $dataUTM['utm_content'];
            @endphp
        @endif
    @else
        @php
            $dataUTM['utm_source'] = session('utm_source');
            $dataUTM['utm_medium'] = session('utm_medium');
            $dataUTM['utm_campaign'] = session('utm_campaign');
            $dataUTM['utm_term'] = session('utm_term');
            $dataUTM['utm_content'] = session('utm_content');

            if (
                $dataUTM['utm_medium'] == 'organico' ||
                $dataUTM['utm_medium'] == 'ORGANICO' ||
                $dataUTM['utm_medium'] == 'Organico' ||
                $dataUTM['utm_medium'] == null
            ) {
                $utmOrganico = true;
            } else {
                $utmOrganico = false;
            }

            $complemento =
                '?utm_source=' .
                $dataUTM['utm_source'] .
                '&utm_medium=' .
                $dataUTM['utm_medium'] .
                '&utm_campaign=' .
                $dataUTM['utm_campaign'] .
                '&utm_term=' .
                $dataUTM['utm_term'] .
                '&utm_content=' .
                $dataUTM['utm_content'];

        @endphp
    @endif
    <div class="container-fluid bg-unimex">
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-12 col-md-12 col-lg-3 col-xl-3 pt-1 text-center text-md-start text-xl-start">
                    <a href="{{ env('APP_URL') . $complemento }}"><img class="ms-4"
                            src="{{ asset('assets/img/header/logo-2020.webp') }}" alt=""
                            style="width: 200px;"></a>
                </div>
                <div class="col-12 col-md-12 col-lg-9 col-xl-9 text-center">
                    <a class="blog-header-logo text-decoration-none" href="#">
                        <h1 class="text-white fw-normal d-none d-md-block d-lg-block">
                            Calculadora de Becas
                        </h1>
                    </a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                </div>
            </div>
        </header>
    </div>

    @yield('content')

    <div class="container-fluid mt-3" style="background-color: #004b93;">
        <footer class="d-flex flex-wrap">
            <p class="col-md-4 mb-0 text-center text-white w-100">
                Universidad Mexicana. Derechos Reservados {{ date('Y') }}.
            </p>
        </footer>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    @php
        $complementoJSCal = filemtime('assets/js/JQuery.print.js');
        $rutaJSCal = 'assets/js/JQuery.print.js?' . $complementoJSCal;
    @endphp

    <script src="{{ asset($rutaJSCal) }}"></script>
    <script>
        function setUrlBase() {
            let urlBase = "{{ env('APP_URL') }}";
            return urlBase;
        }
    </script>

    @yield('scripts')
</body>

</html>
