
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    
    // setTimeout(function(){
    // 	swal('Estamos realizando uma manutenção emergencial no nosso serviço de telefonia, em caso de óbito favor ligar para 08000241150', '', 'warning');
    // }, 1000)

    function getPlatform() {
        var userAgent = navigator.userAgent || navigator.vendor || window.opera;
        var link_apple = "https://apple.co/2BAeeE5";
        var link_android = "https://bit.ly/2BskduN";
        var anchors = document.querySelectorAll('a.link-loja');

        // Huawei Phone must come first because its UA also contains "Android"
        if (userAgent.includes("HUAWEI")) {
            Array.prototype.forEach.call(anchors, function(element, index) {
                element.href = link_android;
            });
        } else if (userAgent.includes("Android")) {
            Array.prototype.forEach.call(anchors, function(element, index) {
                element.href = link_android;
            });
        } else if (userAgent.includes("iPhone")) {
            Array.prototype.forEach.call(anchors, function(element, index) {
                element.href = link_apple;
                //element.href = link_android;
            });
        } else if (userAgent.includes("Mac")) {
            Array.prototype.forEach.call(anchors, function(element, index) {
                element.href = link_apple;
                //element.href = link_android;
            });
        } else {
            Array.prototype.forEach.call(anchors, function(element, index) {
                element.href = link_android;
            });
        }
    }

    window.onload = function() {
        getPlatform();
    };
</script>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function() {
        new Glider(document.querySelector('.glider'), {
            // Mobile-first defaults
            slidesToShow: 1,
            //slidesToScroll: 1,
            //scrollLock: true,
            draggable: true,

            dots: '.dots',
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            },
            responsive: [{
                // screens greater than >= 1024px
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    itemWidth: 150,
                    duration: 0.25
                }
            }]
        });
    })
</script>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    
        <title>Amar Assist | Carinho, Vida e Benefícios Sociais</title>
        <meta charset="UTF-8">
        <meta property="og:locale" content="pt_BR">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Primeira e maior insurtech especializada em ”pós-saúde” do Brasil. Inovação em Benefícios
    Sociais: Pensão por Morte, Auxílio Doença, Auxílio Acidente, Aposentadoria e outros.">
        <meta name="csrf-token" content="WTs90nBnFtw5mdzgxtXBsufG05DEJnNt1ZRU54Zq">
        <meta property="og:title" content="Amar Assist | Carinho, Vida e Benefícios Sociais">
        <meta property="og:description" content="Primeira e maior insurtech especializada em ”pós-saúde” do Brasil. Inovação em Benefícios
    Sociais: Pensão por Morte, Auxílio Doença, Auxílio Acidente, Aposentadoria e outros.">
        <meta property="og:url" content="https://amarassist.com.br">
        <meta property="og:site_name" content="Amar Assist">
        <meta property="og:image" content="https://amarassist.com.br/img/img_facebook.png">
        <meta name="twitter:card" content="summary_large_image">


        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
        <link rel="canonical" href="https://amarassist.com.br">
        <link href="https://amarassist.com.br/img/favicon-amar.png" rel="shortcut icon">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>


            <script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "Organization",
		"url": "https://amarassist.com.br",
		"name": "Amar Assist",
		"logo": "https://amarassist.com.br/img/logo-amar.png",
		"description": "Primeira e maior insurtech especializada em ”pós-saúde” do Brasil. Inovação em Benefícios
    Sociais: Pensão por Morte, Auxílio Doença, Auxílio Acidente, Aposentadoria e outros.",
		"contactPoint": {
		"@type": "ContactPoint",
		"telephone": "0800 024 1150",
		"contactType": "Sales"
		}
	}
	</script>

        <script src="/js/libs.js?id=c08675f7da5c543b7d01"></script>
        <script src="/js/site.js?id=132462cb4b552b8f2cdb"></script>



        <script src="https://amarassist.com.br/js/ajax.class.js"></script>
        <script src="https://amarassist.com.br/js/new_api.min.js?v=1323800398"></script>
        <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>

        
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
            })(window, document, 'script', 'dataLayer', 'GTM-TNQXRCK');
            dataLayer.push({
                "TipoPagina": '/'
            });
        </script>

        <link href="/css/old-site.css?id=22f602f07b1390153cfc" rel="stylesheet">
        <link href="/css/site.css?id=337475cf9120a7084834" rel="stylesheet">

    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106385985-1"></script>




    </head>

<body class="body body__">

    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TNQXRCK" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>

    <div class="loading-page"></div>
                <div class="header-painel" style="width: 100%;background:#8751d6;height:auto;">


            <li class="lista-header "style="list-style: none;">
                <a class="" href="https://cliente.amarassist.com.br" target="_blank"
                    style="background: #8751d6; border-radius:40px; padding:12px; padding-top:5px;padding-bottom:5px;padding-left:15px;padding-right: 15px;">
                    <span class="fa fa-user-circle-o color-pink" style="color: white;"></span>
                    <span style="color: white; font-size:20px;" class="cliente">área do cliente</span>
                    
                </a>
            </li>
        </div>
        <header class="site-header">
            <div class="container">
                <div class="row">
                    <div class="header-mobile">
    <div class="col-xs-3">
        <nav class="navbar navbar-custom">
            <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarNav"
					aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
					<!--
    <li class="nav-item active">
        <a class="nav-link" href="https://amarassist.com.br">home</a>-->
    </li>

    <li class="nav-item dropdown ">
            <a class="nav-link" target="_blank" href="https://amarassist.com.br/planofunerariofamiliar">planos funerários</a>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="https://amarassist.com.br/artigos">blog</a>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="https://amarassist.com.br/sobre-a-empresa">sobre a Amar</a>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="https://amarassist.com.br/contato">contato</a>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="https://amarassist.com.br/canalcorretor">seja um parceiro</a>
    </li>


    <li class="nav-item dropdown ">
		<a class="nav-link fundo-link" href="https://cliente.amarassist.com.br" target="_blank" style="background: rgb(236,116,108); border-radius:40px; padding:12px; padding-top:5px;padding-bottom:5px;padding-left:15px;padding-right: 15px;">
            <span class="fa fa-user-circle-o color-pink" style="color: white;"></span>
            <span style="color: white;" class="cliente">área do cliente</span>
        </a>
    </li>

                </ul>
            </div>
        </nav>
    </div>
    <div class="col-xs-9 box-logo">
        <a class="site-link" href="/">
			<img src="https://amarassist.com.br/img/logo-amar-10anos.svg" class="img-responsive" alt="Amar" title="Amar" width="260" height="41"
			>
        </a>
    </div>
</div>
<div class="header-desktop">
    <div id="logo-amar" class="col-sm-2 col-md-2 col-lg-4">
        <a class="site-link" href="/">
			<img src="https://amarassist.com.br/img/logo-amar-10anos.svg" class="img-responsive" alt="Amar"
			title="Amar" height="41" width="261" >
        </a>
    </div>
    <div class="col-sm-10 col-md-10 col-lg-8">
        <nav class="navbar navbar-custom">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav navbar-right">
					<!--
    <li class="nav-item active">
        <a class="nav-link" href="https://amarassist.com.br">home</a>-->
    </li>

    <li class="nav-item dropdown ">
            <a class="nav-link" target="_blank" href="https://amarassist.com.br/planofunerariofamiliar">planos funerários</a>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="https://amarassist.com.br/artigos">blog</a>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="https://amarassist.com.br/sobre-a-empresa">sobre a Amar</a>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="https://amarassist.com.br/contato">contato</a>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="https://amarassist.com.br/canalcorretor">seja um parceiro</a>
    </li>


    <li class="nav-item dropdown ">
		<a class="nav-link fundo-link" href="https://cliente.amarassist.com.br" target="_blank" style="background: rgb(236,116,108); border-radius:40px; padding:12px; padding-top:5px;padding-bottom:5px;padding-left:15px;padding-right: 15px;">
            <span class="fa fa-user-circle-o color-pink" style="color: white;"></span>
            <span style="color: white;" class="cliente">área do cliente</span>
        </a>
    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
                </div>
            </div>
        </header>
        

    

        <style>
        .dia_do_idoso {
            font-family: Poppins;
            font-size: 42px;
            font-weight: 900;
            font-stretch: normal;
            line-height: 0.8;
            letter-spacing: -2.67px;
            text-align: left;
            color: #f8f3dd;
        }

        @media(min-width: 991px) {
            .dia_do_idoso {
                font-size: 50px;
            }
        }

        .dia_idoso {
            width: 399px;
            height: 127px;
            object-fit: contain;
            font-family: Poppins;
            font-size: 40px;
            font-weight: 900;
            font-stretch: normal;
            font-style: normal;
            line-height: 0.91;
            letter-spacing: -3.71px;
            text-align: left;
            color: #1f2717;
        }

        @media(min-width: 991px) {
            .dia_idoso {
                font-size: 46px;
            }
        }

        .margim-row {
            margin-top: 9px
        }

        .Apoie-respeite-valorize {
            width: 359px;
            height: 105px;
            object-fit: contain;
            font-family: Poppins;
            font-size: 32px;
            font-weight: bold;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.23;
            letter-spacing: -1.24px;
            text-align: center;
            color: #1f2717;
        }

        .Apoie-respeite-valorize .text-style-1 {
            color: #f8f3dd;
        }

        .Cuide-de-quem-sempre-cuidou-de-voc {
            width: 414px;
            height: 91px;
            margin: 76px 0 6px;
            object-fit: contain;
            font-family: Poppins;
            font-size: 27px;
            font-weight: bold;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.2;
            letter-spacing: -2.21px;
            text-align: center;
            color: #1f2717;
        }

        @media(min-width: 991px) {
            .Cuide-de-quem-sempre-cuidou-de-voc {
                font-size: 35px;
            }
        }

        .polaroid-desktop {
            width: 35%;
            height: 30%;
            margin: 0 3rem;
            /* margin: 5rem; */
        }
        .polaroid-mobile {
            display: none;
            margin: 3em 2em;
        }
    </style>

    <div class="header-wrapper">
        <div class="banner__container">
            <img class="polaroid-desktop" src=https://amarassist.com.br/img/polaroid-amar-site-1-desktop.webp alt="polaroid-desktop-1">
            <div class="banner__content">

                <p class="banner__title">AMAR é cuidar <br>de quem você ama</p>
                <a href="https://www.youtube.com/embed/SxHYyqaGcsQ?autoplay=1" target="_blank" class="banner__link">
                    <img src="https://amarassist.com.br/img/bnt-home-amar-assist-bs.png" alt="Botão Play Vídeo" class="banner__image" height="150">
                </a><br>
                <p class="banner__text" style="font-size:20px;width:365px; margin:0 auto;">Escolha o bem-estar da sua família.<br>
                    Conheça a nossa empresa e nossas soluções de proteção, incluindo <span style="background: #F39665;border-radius:5px; padding: 3px">benefícios sociais gratuitos</span> para você
                    e sua família!
                </p>
                <img class="polaroid-mobile" src=https://amarassist.com.br/img/polaroid-amar-site-mobile.webp alt="family-polaroid">
            </div>
            <img class="polaroid-desktop" src=https://amarassist.com.br/img/polaroid-amar-site-2-desktop.webp alt="polaroid-desktop-2">
        </div>
    </div>

    <section class="section services" id="services" style="background: white;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-lg-offset-1">
                    <img src="https://amarassist.com.br/img/heart_amar.svg" class="img-responsive align-right logo__amarassist-logo"
                        alt="Amar" title="Amar" style="width: 225px; margin: 0 auto">
                </div>
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 px-3 texto-principal" style="padding-right: 1rem;">
                    <h2 class="purple logo__title" style="color: #ff766f">
                        Primeira e maior insurtech especializada em ”pós-saúde” do Brasil.
                    </h2>

                    <div class="company-text logo__text" style="font-size: 20px; text-align: justify">
                        <p>
                            A Amar Assist é uma empresa 100% digital que oferece soluções direcionadas ao bem estar e saúde
                            financeira familiar em todo Brasil, incluindo assistências de Benefícios Sociais.

                        </p>
                        <p>
                            Com tecnologia embarcada em todos os processos, nossa reconhecida prestação de serviço nos levou
                            à posição de liderança no setor de <i>death care </i>nacional.
                        </p>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 class="section-name">SOLUÇÕES</h2>
                        <p class="section-description">
                            Do norte a sul do país, estamos preparados
                            para atender em todo o Brasil.
                        </p>
                        <p class="section-description">
                            Conheça nosso portfolio completo de soluções funerárias.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <style>
    .serviceImage {
        margin-bottom: 16px;
    }
    .service .service-description {
        line-height: 24px;
    }
    .services_box .service .service-name {
        color: #646464;
        font-size: 22px;
        margin-top: 0;
        font-weight: 600;
    }
</style>

<div class="row" >
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="services_box">
            <a class="service-link" href="https://amarassist.com.br/planofunerariofamiliar" target="_blank" style="padding:30px;">
                <div class="service text-center">
                    <img src="img/orange/plano_funerario_orange.svg" class="serviceImage" data-white-src="img/white/plano_funerario_white.svg" alt="Planos Funerários" title="Planos Funerários" style="height: 65px;">
                    <h3 class="service-name">Planos Funerários</h3>
                    <p class="service-description">É hora de planejar um futuro tranquilo para você e sua família.</p>
                    <span class="service-link"><i class="fa fa-chevron-right"></i> Saiba mais</span>
                </div>
            </a>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="services_box">
            <a class="service-link" href="https://segurodevidagratuito.com.br/" target="_blank">
                <div class="service text-center">
                    <img src="img/orange/seguro_vida_orange.svg" class="serviceImage" data-white-src="img/white/seguro_vida_white.svg" alt="Seguro de Vida Gratuito" title="Seguro de Vida Gratuito" style="height:65px;margin-top:10px">
                    <h3 class="service-name">Seguro de Vida Gratuito</h3>
                    <p class="service-description">
                        R$20 mil de indenização, com 
                        validade em todo Brasil.</p>
                    <span class="service-link"><i class="fa fa-chevron-right"></i> Saiba mais</span>
                </div>
            </a>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="services_box service__tombstone">
            <a class="service-link" href="https://segurojazigo.com.br" target="_blank">
                <div class="service text-center">
                    <img src="img/orange/jazigo_garantido_orange_1.svg" class="serviceImage" data-white-src="img/white/jazigo_garantido_white_1.svg" alt="Jazigo Garantido" title="Jazigo Garantido" style="height: 65px; margin-top:-12px;">
                    <h3 class="service-name">Jazigo Garantido</h3>
                    <p class="service-description">O jazigo que desejar em qualquer cemitério do Brasil, público ou privado, até R$25 mil.</p>
                    <span class="service-link"><i class="fa fa-chevron-right"></i> Saiba mais</span>
                </div>
            </a>
        </div>
    </div>
</div>




<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 service-cremacao" style="margin-bottom: 0;">
    <div class="services_box service__tombstone">
        <a class="service-link" href="https://cremacaogarantida.com.br/" target="_blank">
            <div class="service text-center">
                <img src="img/orange/cremacao_garantida_orange.svg" class="serviceImage" data-white-src="img/white/cremacao_garantida_white.svg" alt="Cremação Garantida" title="Cremação Garantida" style="height: 65px;">
                <h3 class="service-name">Cremação Garantida</h3>
                <p class="service-description">
                    Cremação completa em qualquer 
                    crematório do Brasil, publico ou 
                    privado. 
                </p>
                <span class="service-link"><i class="fa fa-chevron-right"></i> Saiba mais</span>
            </div>
        </a>
    </div>
</div>


<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <div class="services_box">
        <a class="service-link" href="https://amarassist.com.br/beneficios-sociais" target="_blank">
            <div class="service text-center" style="margin-top:30px">
                <img src="img/orange/beneficios_sociais_orange.svg" class="serviceImage" data-white-src="img/white/beneficios_sociais_white.svg" alt="Benefícios Sociais" title="Benefícios Sociais" style="height: 65px;">
                <h3 class="service-name">Benefícios Sociais</h3>
                <p class="service-description">Consultas gratuitas: Pensão por Morte, DPVAT, Revisional e Plano de Aposentadoria.</p>
                <span class="service-link"><i class="fa fa-chevron-right"></i> Saiba mais</span>
            </div>
        </a>
    </div>
</div>

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="margin-top:17px;">
    <div class="services_box">
        <a class="service-link" href="https://www.segurointernacao.com.br" target="_blank">
            <div class="service text-center">
                <img src="img/orange/renda_internacao_orange.svg" class="serviceImage" data-white-src="img/white/renda_internacao_white.svg" alt="Seguro Renda / Internação" title="Seguro Renda / Internação" style="height: 65px;">
                <h3 class="service-name">Seguro Renda / Internação</h3>
                <p class="service-description">Receba indenização de até R$10.000 por diárias de internação hospitalar</p>
                <span class="service-link"><i class="fa fa-chevron-right"></i> Saiba mais</span>
            </div>
        </a>
    </div>
</div>

<script>
    
    const links = document.querySelectorAll('.service-link');

    for (let i = 0; i < links.length; i++) {
    const img = links[i].querySelector('.serviceImage');

    links[i].addEventListener('mouseenter', function() {
        img.src = img.dataset.whiteSrc;
    });

    links[i].addEventListener('mouseleave', function() {
        img.src = img.src.replace('/white/', '/orange/');
        img.src = img.src.replace('_white', '_orange');
    });
    }


</script>                </div>

            </div>
    </section>

    <div class="container-fluid"
        style="display:flex;flex-direction:column;padding-top:7rem;padding-bottom:7rem;margin-bottom:10rem; background: #f1f1f1;">
        <h1 class="text-center text-purple" style="font-weight: 600; font-size:40px;">Amar Assist na mídia</h1>
        <div class="container" style="display: flex; justify-content:center;">
            <div class="container textomidia" style="padding-top:5rem;max-width:980px;">
                <p class="textomidia" style="text-align:center;font-size:24.6px">Somos uma insurtech e nascemos para inovar.
                    Para saber mais sobre nós, nossos produtos e serviços e as nossas tecnologias disruptivas, confira o que
                    a mídia diz sobre nós!</p>
            </div>

        </div>


        <div class="wrapperForDemo">
            <div class="glider-contain" style="align-items: center;">
                <div class="glider" style="display:flex;gap:1.5rem;">
                    <div style="display:flex;flex-direction:column;align-items:center;">
                        <a href="https://www.istoedinheiro.com.br/seguro-de-vida-gratis/" target="_blank" rel="noreferrer">
                            <div>
                                <img src="https://amarassist.com.br/img/istodinheiro.png" alt="Logo Isto é Dinheiro" width="auto"
                                    height="auto">
                            </div>
                        </a>
                    </div>

                    <div style="display:flex;flex-direction:column;align-items:center;">
                        <a href="https://revistapegn.globo.com/Startups/noticia/2022/04/startup-lanca-seguro-de-vida-gratuito-para-cidadaos-brasileiros-com-ate-65-anos.html"
                            target="_blank" rel="noreferrer">
                            <div>
                                <img src="https://amarassist.com.br/img/pequenasempresas.png"
                                    alt="Logo Pequenas Empresas Grandes Negócios" width="auto" height="auto">
                            </div>
                        </a>
                    </div>

                    <div style="display:flex;flex-direction:column;align-items:center;">
                        <a href="https://expnew.net/insurtech-aposta-na-digitalizacao-do-setor-funerario/" target="_blank"
                            rel="noreferrer">
                            <div>
                                <img src="https://amarassist.com.br/img/expreportagem.png" alt="Logo EXP" width="auto"
                                    height="auto">
                            </div>
                        </a>
                    </div>

                    <div style="display:flex;flex-direction:column;align-items:center;">
                        <a href="https://www.insurtalks.com.br/posts/insurtech-lider-no-pos-saude-cresce-de-olho-em-novos-meios-de-pagamentos-experiencia-dos-clientes-e-canais-estrategicos"
                            target="_blank" rel="noreferrer">
                            <div>
                                <img src="https://amarassist.com.br/img/insurtalks.png" alt="Logo Insurtalks">
                            </div>
                        </a>
                    </div>

                    <div style="display:flex;flex-direction:column;align-items:center;">
                        <a href="https://valor.globo.com/financas/noticia/2022/05/16/amar-assist-busca-parcerias-para-avancar-em-seguro-de-vida-gratuito.ghtml"
                            target="_blank" rel="noreferrer">
                            <div>
                                <img src="https://amarassist.com.br/img/valoreconomico.png" alt="Logo Valor Econômico">
                            </div>
                        </a>
                    </div>

                    <div
                        style="display:flex;flex-direction:column;align-items:center;margin-left:1rem;margin-right:1.5rem;">
                        <a href="https://www.sonhoseguro.com.br/2022/05/a-moda-do-seguro-de-graca/" target="_blank"
                            rel="noreferrer">
                            <div>
                                <img src="https://amarassist.com.br/img/sonhoseguro.png" alt="Logo Sonho Seguro">
                            </div>
                        </a>
                    </div>

                    <div style="display:flex;flex-direction:column;align-items:center;">
                        <a href="https://www.terra.com.br/economia/para-aumentar-a-cobertura-de-seguros-no-brasil-vale-tudo-ate-oferecer-apolices-de-graca,7a22528353498144f55128a819317221h2e0dpfg.html"
                            target="_blank" rel="noreferrer">
                            <div>
                                <img src="https://amarassist.com.br/img/terra.png" alt="Logo Terra">
                            </div>
                        </a>
                    </div>

                    <div style="display:flex;flex-direction:column;align-items:center;">
                        <a href="https://economia.estadao.com.br/noticias/negocios,para-aumentar-a-cobertura-de-seguros-no-brasil-vale-tudo-ate-oferecer-apolices-de-graca,70004081157"
                            target="_blank" rel="noreferrer">
                            <div>
                                <img src="https://amarassist.com.br/img/estadao.png" alt="Logo Estadão">
                            </div>
                        </a>
                    </div>

                    <div style="display:flex;flex-direction:column;align-items:center;">
                        <a href="https://www.msn.com/pt-br/dinheiro/other/para-aumentar-a-cobertura-de-seguros-no-brasil-vale-tudo-at%C3%A9-oferecer-ap%C3%B3lices-de-gra%C3%A7a/ar-AAXVpKb"
                            target="_blank" rel="noreferrer">
                            <div>
                                <img src="https://amarassist.com.br/img/msn.png" alt="Logo Msn">
                            </div>
                        </a>
                    </div>

                    <div style="display:flex;flex-direction:column;align-items:center;">
                        <a href="https://startups.com.br/noticias/amar-assist-quer-popularizar-conceito-de-pos-saude-e-mira-serie-a/"
                            target="_blank" rel="noreferrer">
                            <div>
                                <img src="https://amarassist.com.br/img/startups.png" alt="Logo Startups">
                            </div>
                        </a>
                    </div>
                </div>

                <button role="button" aria-label="Previous" class="glider-prev">«</button>
                <button role="button" aria-label="Next" class="glider-next">»</button>
                <div role="tablist" class="dots"></div>
            </div>
        </div>






    </div>
    <div class="container">
        <div class="row" id="este-tem-que-mudar">
            <div class="col-5 col-sm-6 col-lg-6 txt1">
                <h2 class="purple logo__title">
                    Leve a #AmarAssist com você!
                </h2>
                <br>
                <p><strong>
                        Todas as informações do seu plano a um toque de distância. Visualize a carteirinha digital, consulte
                        benefícios sociais, emite 2ª via de boletos, edite informações de contato e dependentes, inclua
                        cartão de crédito, consulte o status de pagamento e muito mais!
                    </strong>
                </p>
                <p><strong>Disponivel nas lojas do seu celular</strong></p>

                <a href="#" target="_blank" rel="noreferrer" class="link-loja">
                    <div class="btn-app"
                        style="margin-bottom:20px;border-radius:20px;padding:0.5rem; max-width: 180px;background:#8751d6; display: flex;align-items:center;justify-content:center;">
                        <div>
                            <i class="fa fa-download" style="color: white"></i>
                        </div>
                        <div style="color:white;margin-left:1rem;">
                            Baixe agora!
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-5 col-sm-6 col-lg-6">
                <img src="https://amarassist.com.br/img/arte-celular-app.png" class="img-celular" alt="Amar" title="Amar"
                    style="">
            </div>
        </div>
    </div>



    <section class="section bg-purple" id="testimonials">
        <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2 class="section-name">DEPOIMENTOS</h2>
            <p class="section-description">Nossos clientes falam por nós: somos reconhecidos pela excelência no atendimento e prestação de serviços de forma humanizada.</p>
        </div>
    </div>
    <div class="row">
        <div class="owl-carousel owl-theme testimonials">

			
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"Só acho que não houve um bom esclarecimento de como seria cobrada as taxas do velorio e sepultamento..."</p>
							<p class="testimonial-author"><strong>Maria Aparecida</strong></p>
							<p class="testimonial-city">Brasília</p>
						</div>
					</div>
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"Quero deixar minha satisfação a todos do Amar Assist. Eu fui muito bem atendida por todos. nota 1000..."</p>
							<p class="testimonial-author"><strong>Andréa Aguillera</strong></p>
							<p class="testimonial-city">São Paulo</p>
						</div>
					</div>
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"Fiquei decepcionada com a coroa de flores. A atendente me pediu, com antecedência, para escolher as..."</p>
							<p class="testimonial-author"><strong>Marivan de Oliveira</strong></p>
							<p class="testimonial-city">São Paulo</p>
						</div>
					</div>
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"Todos da Amar estão de parabéns! Infelizmente chegou a minha hora de utilizar o plano, e nesse momen..."</p>
							<p class="testimonial-author"><strong>Janiffer Cruz</strong></p>
							<p class="testimonial-city">São Paulo</p>
						</div>
					</div>
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"Fui bem atendida, só senti um encomodo em relação a demora de confirmação de dados e divergências de..."</p>
							<p class="testimonial-author"><strong>Juliana Menossi</strong></p>
							<p class="testimonial-city">Carapicuíba</p>
						</div>
					</div>
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"Quero de registrar meu relato, que em resumo, fala sobre o importante atendimento e prestação de ser..."</p>
							<p class="testimonial-author"><strong>Valdenice Dourado</strong></p>
							<p class="testimonial-city">São Paulo</p>
						</div>
					</div>
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"O atendimento foi imediato, amável e respeitoso. Cuidaram de tudo e respeitaram nossos desejos. Apes..."</p>
							<p class="testimonial-author"><strong>Rejane Harder</strong></p>
							<p class="testimonial-city">Aracaju</p>
						</div>
					</div>
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"Fui muito bem assessorado nesse momento tão difícil. Só tenho a agradecer a todos da AMAR."</p>
							<p class="testimonial-author"><strong>Luiz Ricardo</strong></p>
							<p class="testimonial-city">Santo André</p>
						</div>
					</div>
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"O serviço de vocês foram ótimos, mas poderia melhorar um pouco a qualidade da urna funerária.<br />
Fora..."</p>
							<p class="testimonial-author"><strong>Francisco Blanes</strong></p>
							<p class="testimonial-city">São Paulo</p>
						</div>
					</div>
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"Atendimento bom."</p>
							<p class="testimonial-author"><strong>Rafaela Canal</strong></p>
							<p class="testimonial-city">Cariacica</p>
						</div>
					</div>
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"Estou muito satisfeito e grato também pelo carinho, educação, respeito, atenção de todos vocês realm..."</p>
							<p class="testimonial-author"><strong>Marcos Marques</strong></p>
							<p class="testimonial-city">Guarulhos</p>
						</div>
					</div>
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"Fiquei satisfeita com o atendimento.  Só poderia melhorar pouca coisa exemplo o vel muito pequeno"</p>
							<p class="testimonial-author"><strong>Adelia Duarte</strong></p>
							<p class="testimonial-city">São Paulo</p>
						</div>
					</div>
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"Só temos a agradecer pelo apoio, carinho e paciência conosco nesse momento tão difícil. Gratidão é a..."</p>
							<p class="testimonial-author"><strong>Keila Santos</strong></p>
							<p class="testimonial-city">Santo André</p>
						</div>
					</div>
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"Por ser um momento nas difícil de nossas vidas , fui muito bem atendida , não mim deixou em nenhum m..."</p>
							<p class="testimonial-author"><strong>Jozelma Rodrigues</strong></p>
							<p class="testimonial-city">São Paulo</p>
						</div>
					</div>
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"Gostaria de agradecer a toda a equipe que neste momento tão difíceis  vcs foram atenciosos e cuidado..."</p>
							<p class="testimonial-author"><strong>Mônica Mendes</strong></p>
							<p class="testimonial-city">Ibiúna</p>
						</div>
					</div>
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"Super bem atendido no momento que mais precisei a AMAR me surpreendeu com sua rapidez e atenção muit..."</p>
							<p class="testimonial-author"><strong>Reginaldo Martins</strong></p>
							<p class="testimonial-city">São João De Meriti</p>
						</div>
					</div>
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"Agradeço ao proficionalismo e capacidade de todos envolvidos  nessa hora difícil. Muito obrigado a t..."</p>
							<p class="testimonial-author"><strong>Carlos Alberto</strong></p>
							<p class="testimonial-city">Rio De Janeiro</p>
						</div>
					</div>
									<div class="item">
						<div class="testimonial text-center">
                            <img src="img/depoimento.svg" alt="Depoimentos" style="height:65px;">
							<p class="testimonial-content">"Vcs tornaram um dia mto triste pra mim, em um dia menos doloroso.Cuidaram de tudo para que eu pudess..."</p>
							<p class="testimonial-author"><strong>Dulcenéa Alves</strong></p>
							<p class="testimonial-city">Guarulhos</p>
						</div>
					</div>
				
			
        </div>
        
            <p class="text-center" style="margin-top: 35px;" >
                <a class="text-dark" style="font-weight:600;background:white;border-radius:20px; color:purple;padding:10px;padding-right:2rem;padding-left:2rem;" href="https://amarassist.com.br/depoimentos">
                    <i class="fa fa-angle-right"></i> Ver todos os depoimentos
                </a>
            </p>
    </div>
</div>
    </section>

    

    <section class="section" id="contact">
        <h2 class="section-name title-blog">Artigos</h2>
	<p class="text-center subtitle-blog">Acompanhe os últimos artigos publicados no site</p>
	<p class="text-center link-blog">
		<a class="text-pink" href="https://amarassist.com.br/artigos">
			<i class="fa fa-angle-right"></i> Ver todas os artigos
		</a>
	</p>

	<div class="news">
		<div id="news-bg-orange"></div>
		<div class="container">
			<!-- Desktop -->
			<div id="carousel-news" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="row">
							
							
																	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
										<a href="/artigos/voce-sabia-que-pode-antecipar-o-fgts" class="post-link">
												<article class="post">
													<figure>
													<div class="image-big" style="background-image: url('//kheper.amarassist.com.br/storage/posts/FGTS.png')"></div>
														<!--
															<img src="//kheper.amarassist.com.br/storage/posts/FGTS.png" class="img-responsive big-image" alt="//Calculaora, mãos femininas.">
														-->
													</figure>
													<h3 class="post-title">Você sabia que pode antecipar o FGTS?</h3>
													<div class="hover" style="cursor:pointer" onclick="window.location='artigos/voce-sabia-que-pode-antecipar-o-fgts'">
														<div class="post-content">
																<span class="title">Você sabia que pode antecipar o FGTS?</span>
																<p class="intro">Confira como você pode solicitar</p>
																<a class="lear-more" href="artigos/voce-sabia-que-pode-antecipar-o-fgts">Leia Mais</a>
														</div>
													</div>
												</article>
											</a>
										</div>
									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
									
							
							
							
							
							
							
																	<a href="artigos/por-que-devo-contribuir-para-inss" class="post-link">
											<article class="post">
												<figure>
												<div class="image-small" style="background-image: url('//kheper.amarassist.com.br/storage/posts/Por que devo contribuir com o INSS .png')"></div>
													<!-- 
														<img src="//kheper.amarassist.com.br/storage/posts/Por que devo contribuir com o INSS .png" class="img-responsive small-image" alt="//Mulher negra, pensando.">
												-->
												</figure>
												<h3 class="post-title">Por que devo contribuir para INSS?</h3>
												<div class="hover">
													<div class="post-content">
														<span class="title">Por que devo contribuir para INSS?</span>
													</div>
												</div>
											</article>
										</a>
																		
							
							
							
							
							
							
																	<a href="artigos/revisao-da-vida-toda-aprovada-entenda-se-voce-pode-rever-o-seu-beneficio" class="post-link">
											<article class="post">
												<figure>
												<div class="image-small" style="background-image: url('//kheper.amarassist.com.br/storage/posts/_ Revisão da vida toda, aprovada! (1).png')"></div>
													<!-- 
														<img src="//kheper.amarassist.com.br/storage/posts/_ Revisão da vida toda, aprovada! (1).png" class="img-responsive small-image" alt="//Idosos felizes.">
												-->
												</figure>
												<h3 class="post-title">Revisão da vida toda, aprovada! Entenda se você pode rever o seu benefício!</h3>
												<div class="hover">
													<div class="post-content">
														<span class="title">Revisão da vida toda, aprovada! Entenda se você pode rever o seu benefício!</span>
													</div>
												</div>
											</article>
										</a>
																				</div>
																		
							
							
							
							
							
							
																				</div>
						<div class="row">
																					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						
												<a href="/artigos/aposentados-podem-voltar-a-trabalhar" class="post-link">
								<article class="post">
									<figure>
									<div class="image-small" style="background-image: url('//kheper.amarassist.com.br/storage/posts/Aposentado pode voltar a trabalhar.png')"></div>
										<!-- 
											<img src="//kheper.amarassist.com.br/storage/posts/Aposentado pode voltar a trabalhar.png" class="img-responsive small-image" alt="//Senhor idoso, notebook, trabalhando.">
										-->
									</figure>
									<h3 class="post-title">Aposentados podem voltar a trabalhar?</h3>
									<div class="hover">
										<div class="post-content">
											<span class="title">Aposentados podem voltar a trabalhar?</span>
										</div>
									</div>
								</article>
							</a>

						
						
						
							
							
							
							
							
																					
												<a href="/artigos/quais-sao-as-doencas-que-geram-o-direito-ao-recebimento-do-loas" class="post-link">
								<article class="post">
									<figure>
									<div class="image-small" style="background-image: url('//kheper.amarassist.com.br/storage/posts/Quais são as doenças que geram o direito ao recebimento do LOAS.png')"></div>
										<!-- 
											<img src="//kheper.amarassist.com.br/storage/posts/Quais são as doenças que geram o direito ao recebimento do LOAS.png" class="img-responsive small-image" alt="//enfermeiro medindo a pressão de paciente">
										-->
									</figure>
									<h3 class="post-title">Quais são as doenças que geram o direito ao recebimento do LOAS?</h3>
									<div class="hover">
										<div class="post-content">
											<span class="title">Quais são as doenças que geram o direito ao recebimento do LOAS?</span>
										</div>
									</div>
								</article>
							</a>

						
													</div>
						
						
							
							
							
							
							
																					
						
						
													<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
									<a href="/artigos/sou-aposentado-por-invalidez-posso-perder-minha-aposentadoria" class="post-link">
											<article class="post">
												<figure>
												<div class="image-big" style="background-image: url('//kheper.amarassist.com.br/storage/posts/Capa Blog Amar AssistSou aposentado por invalidez, posso perder minha aposentadoria.png')"></div>
													<!-- <img src="//kheper.amarassist.com.br/storage/posts/Capa Blog Amar AssistSou aposentado por invalidez, posso perder minha aposentadoria.png" class="img-responsive big-image" alt="//Idosa, cadeira de rodas.">
												-->
												</figure>
												<h3 class="post-title">Sou aposentado por invalidez, posso perder minha aposentadoria?</h3>
												<div class="hover" style="cursor:pointer" onclick="window.location='/artigos/sou-aposentado-por-invalidez-posso-perder-minha-aposentadoria'">
													<div class="post-content">
															<span class="title">Sou aposentado por invalidez, posso perder minha aposentadoria?</span>
															<p class="intro">Leia e descubra!</p>
															<a class="lear-more" href="/artigos/sou-aposentado-por-invalidez-posso-perder-minha-aposentadoria">Leia Mais</a>
													</div>
												</div>
											</article>
										</a>

							</div>
						
							
							
							
							
							
							
																				</div>
					</div>
					<div class="item">
						<div class="row">
							
								<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<a href="/artigos/aposentadoria-por-invalidez-aposentadoria-por-incapacidade-permanente" class="post-link">
					<article class="post">
						<figure>
						<div class="image-big" style="background-image: url('//kheper.amarassist.com.br/storage/posts/Capa Blog Amar Assist Aposentadoria Invalidez.png')"></div>
							<!-- <img src="//kheper.amarassist.com.br/storage/posts/Capa Blog Amar Assist Aposentadoria Invalidez.png" class="img-responsive big-image" alt="//Enfermeira segurando a pão de uma mulher cadeirante.">
						-->
						</figure>
						<h3 class="post-title">Aposentadoria Por Invalidez = Aposentadoria por Incapacidade Permanente</h3>
						<div class="hover" style="cursor:pointer" onclick="window.location='/artigos/aposentadoria-por-invalidez-aposentadoria-por-incapacidade-permanente'">
							<div class="post-content">
									<span class="title">Aposentadoria Por Invalidez = Aposentadoria por Incapacidade Permanente</span>
									<p class="intro">A Aposentadoria por Invalidez é um benefício devido ao trabalhador permanentemente incapaz de exercer qualquer atividade laborativa. Saiba mais!</p>
									<a class="lear-more" href="/artigos/aposentadoria-por-invalidez-aposentadoria-por-incapacidade-permanente">Leia Mais</a>
							</div>
						</div>
					</article>
				</a>

	</div>
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
	
							
							
							
							
							
														
								<a href="/artigos/voce-conhece-o-auxilio-inclusao" class="post-link">
			<article class="post">
				<figure>
				<div class="image-small" style="background-image: url('//kheper.amarassist.com.br/storage/posts/Capa Blog Amar Assist Auxilio inclusão.png')"></div>
					<!--
					<img src="//kheper.amarassist.com.br/storage/posts/Capa Blog Amar Assist Auxilio inclusão.png" class="img-responsive small-image" alt="//Mulher de cabelo curto cadeirante, segurando um notebook.">
				-->

				</figure>
				<h3 class="post-title">Você conhece o auxílio-inclusão?</h3>
				<div class="hover">
					<div class="post-content">
						<span class="title">Você conhece o auxílio-inclusão?</span>
					</div>
				</div>
			</article>
		</a>

			
							
							
							
							
							
														
								<a href="/artigos/longevidade-o-que-e-e-como-se-preparar-para-ela" class="post-link">
			<article class="post">
				<figure>
				<div class="image-small" style="background-image: url('//kheper.amarassist.com.br/storage/posts/Capa Blog Amar Assist Longevidade .png')"></div>
					<!--
					<img src="//kheper.amarassist.com.br/storage/posts/Capa Blog Amar Assist Longevidade .png" class="img-responsive small-image" alt="//Casal de idosos com a testa apoiada um no outro.">
				-->

				</figure>
				<h3 class="post-title">Longevidade: o que é e como se preparar para ela?</h3>
				<div class="hover">
					<div class="post-content">
						<span class="title">Longevidade: o que é e como se preparar para ela?</span>
					</div>
				</div>
			</article>
		</a>

				</div>
			
							
							
							
							
							
							
																				</div>
						<div class="row">
																<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
	
		<a href="/artigos/alimentacao-saudavel-e-saude-mental-como-estao-relacionados" class="post-link">
			<article class="post">
				<figure>
				<div class="image-small" style="background-image: url('//kheper.amarassist.com.br/storage/posts/Alimentacao saudavel e saude mental Amar  Assist .png')"></div>
					<!--

					<img src="//kheper.amarassist.com.br/storage/posts/Alimentacao saudavel e saude mental Amar  Assist .png" class="img-responsive small-image" alt="//Halters azuis, prato com salada colorida: alaface, tomate e queijo.">
				-->
				</figure>
				<h3 class="post-title">Alimentação saudável e saúde mental: como estão relacionados?</h3>
				<div class="hover">
					<div class="post-content">
						<span class="title">Alimentação saudável e saúde mental: como estão relacionados?</span>
					</div>
				</div>
			</article>
		</a>

	
	
	
							
							
							
							
							
																					
		<a href="/artigos/espiritualidade-o-que-e-e-qual-a-importancia" class="post-link">
			<article class="post">
				<figure>
				<div class="image-small" style="background-image: url('//kheper.amarassist.com.br/storage/posts/Amar Assist espiritualidade.png')"></div>
					<!--

					<img src="//kheper.amarassist.com.br/storage/posts/Amar Assist espiritualidade.png" class="img-responsive small-image" alt="//Por do sol e pessoa meditando.">
				-->
				</figure>
				<h3 class="post-title">Espiritualidade: o que é e qual a importância?</h3>
				<div class="hover">
					<div class="post-content">
						<span class="title">Espiritualidade: o que é e qual a importância?</span>
					</div>
				</div>
			</article>
		</a>

	
			</div>
	
	
							
							
							
							
							
																					
	
	
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<a href="/artigos/gratidao-e-familia-saiba-como-melhorar-as-relacoes-familiares" class="post-link">
						<article class="post">
							<figure>
							<div class="image-big" style="background-image: url('//kheper.amarassist.com.br/storage/posts/14.png')"></div>
								<!--
									<img src="//kheper.amarassist.com.br/storage/posts/14.png" class="img-responsive big-image" alt="//Família reuniada na mesa.">
							-->
							</figure>
							<h3 class="post-title">Gratidão e família: saiba como melhorar as relações familiares</h3>
							<div class="hover" style="cursor:pointer" onclick="window.location='/artigos/gratidao-e-familia-saiba-como-melhorar-as-relacoes-familiares'">
								<div class="post-content">
										<span class="title">Gratidão e família: saiba como melhorar as relações familiares</span>
										<p class="intro">Entenda como a prática pode melhorar o convívio</p>
										<a class="lear-more" href="/artigos/gratidao-e-familia-saiba-como-melhorar-as-relacoes-familiares">Leia Mais</a>
								</div>
							</div>
						</article>
					</a>

		</div>
	
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
													</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="text-center">
							<a class="left carousel-control" href="#carousel-news" role="button" data-slide="prev">
								<i class="fa fa-angle-left" aria-hidden="true"></i>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-news" role="button" data-slide="next">
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
    </section>
    


    <footer class="footer">
                        <div class="container container-footer">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="widget-footer">
                            
                            <img src="https://amarassist.com.br/img/logo-amar-10anos.svg" class="img-responsive logo-footer" alt="Amar"
                                title="Amar" style="max-width:262px;" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 col-footer ">
                        <div class="widget-footer">
                            <h4 class="widget-title" style="font-size:20px;">Amar Assist</h4>
                            <ul class="footer-list">
                                <li class="item">
                                    <a href="https://amarassist.com.br/sobre-a-empresa" class="item-link">Conheça a Empresa</a>
                                </li>
                                <li class="item">
                                    <a href="https://amarassist.com.br/planofunerariofamiliar" class="item-link" target="_blank">Planos
                                        Funerários</a>
                                </li>
                                <li class="item">
                                    <a href="https://segurointernacao.com.br" class="item-link" target="_blank">Seguro
                                        Internação</a>
                                </li>
                                <li class="item">
                                    <a href="https://segurodevidagratuito.com.br" class="item-link" target="_blank">Seguro
                                        de Vida Gratuito</a>
                                </li>
                                <li class="item">
                                    <a href="/artigos" class="item-link">Artigos</a>
                                </li>
                                <li class="item">
                                    <a href="/canalcorretor" class="item-link">Seja um parceiro</a>
                                </li>
                                <li class="item">
                                    <a href="/materiais-gratuitos" class="item-link">Materiais Gratuitos</a>
                                </li>
                                <li class="item">
                                    <a href="/politica-de-privacidade" class="item-link">Política de Privacidade</a>
                                </li>
                                <li class="item">
                                    <a href="https://jobs.kenoby.com/amar-assist" target="_blank" rel="noreferrer"
                                        class="item-link">Trabalhe conosco</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 col-footer">
                        <div class="widget-footer">
                            <h4 class="widget-title" style="font-size:20px;">Fale Conosco</h4>
                            <ul class="footer-list">
                                <li class="item">
                                    Central nacional de vendas <a href="tel:40203852" class="item-link">4020 3852</a>
                                </li>
                                <li class="item">
                                    <span style="color: #8751d6">
                                        <p><strong>Em caso de Óbito</strong></p> <a href="tel:40202358"
                                            class="item-link"><strong>4020 2358</strong></a>
                                    </span>
                                </li>
                                
                                <li class="item col-12">
                                    <p>Central de atendimento ao conveniado </p> <a href="tel:08000241150"
                                        class="item-link">0800 024 1150</a>
                                </li>
                                <li class="item">
                                    <a href="mailto:contato@amarassist.com.br"
                                        class="item-link mailto">contato@amarassist.com.br</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    
                    <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 col-footer">
                        <div class="widget-footer">
                            <h4 class="widget-title" style="font-size: 20px;">Siga a Amar Assist nas redes sociais</h4>
                            <ul class="social-media">
                                <li class="item">
                                    <a href="//www.facebook.com/amarassistoficial/" class="social-media-link"
                                        target="_blank"><i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="//pt.linkedin.com/company/amar-assist" class="social-media-link"
                                        target="_blank"><i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://www.instagram.com/amarassist/" class="social-media-link"
                                        target="_blank"><i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <h4 class="widget-title"><strong>Ativar</strong> o Seguro de Vida Gratuito!</h4>
                            <a href="https://apple.co/2BAeeE5" style="text-decoration: none;" target="blank"
                                rel="noreferrer">
                                <img src="https://amarassist.com.br/img/apple-app.png" alt="Imagem Download"
                                    style="margin-bottom: 10px;">
                            </a><br>
                            <a href="https://play.google.com/store/apps/details?id=br.com.amarassist"
                                style="text-decoration: none;" target="blank" rel="noreferrer">
                                <img class="" src="https://amarassist.com.br/img/play-app.png" alt="Imagem Download">
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        

    </footer>

    <footer class="cnpj">
        A Amar Assist é uma empresa especializada em assistência em seguros, inscrita no CNPJ nº 17.414.457/0001-45.
        Escritório central localizado em Avenida Nove de Julho, 5109 - 11° andar, São Paulo / SP
    </footer>



    <script>
        setTimeout(function() {
            $(".js-modal-cover").animatedModal();
            $('#animatedModal').removeClass('hidden');
        }, 1000);
        $('select[multiple]').multiselect();
        $(".js-modal-cover").animatedModal({
            modalTarget: 'animatedFinados'
        });
    </script>

    

    <script>
        function onSubmit(token) {
            $('lead_form').submit();
        }

        function onSubmitHorizontal(token) {
            $('.lead_form_horizontal').submit();
        }
    </script>
    
    <a href="https://segurodevidagratuito.com.br/?utm_source=site&utm_medium=organico&utm_campaign=organico-svg-ctasdownload"
        target="_blank" rel="noreferrer">
        <div
            style="z-index:99999;cursor:pointer; border-radius:10px 0 0 10px;right:0;bottom:0 !important;position:fixed; float:right;padding:10px;display:flex; background:rgb(236,116,108); align-items:center; max-width:230px; ">

            <div style="display: flex; align-items:center">
                <div style="color: white;font-size:20px; ">Saiba mais sobre o Seguro de Vida Gratuito</div>
                <i class="fa fa-download" style="color: white; padding-left: 0.9rem;cursor:pointer;"></i>
            </div>

        </div>
    </a>

</body>

</html>
