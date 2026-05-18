<!doctype html>
<html lang=pt-br>

<head>
    <meta charset=UTF-8>
    <meta content="width=device-width,initial-scale=1" name=viewport>
    <meta content="ie=edge" http-equiv=X-UA-Compatible>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans:400,400i,700,700i,800,800i&display=swap" rel=stylesheet>
    <link href="<?php bloginfo('template_url');?>/css/bootstrap-grid.min.css" rel=stylesheet>
    <link href="<?php bloginfo('template_url');?>/css/main.min.css" rel=stylesheet>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src=https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js type=module></script>
    <script src=https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js nomodule=""></script>
    <title>João Lemon - UX/UI Designer</title>
</head>

<body>
    <div class=jl-trigger-topbar></div>
    <div class=border-top-left></div>
    <div class=border-bottom-right></div>
    <div class=jl-preloader>
        <div class=jl-preloader-inner><img src="<?php bloginfo('template_url');?>/images/lemon-loader.svg" class=jl-mar-bottom-15>
            <p class="jl-text-light jl-mar-top-15">Aguarde um pouquinho … Estou preparando a limonada
        </div>
    </div>
    <div class="jl-toggle-modal jl-overlay"></div>
    <div class="jl-toggle-menu jl-menu-overlay"></div>
    <div class="jl-bg-black jl-modal" id=jl-modal-orcamento>
        <div class=jl-modal-header>
            <h1 class="jl-title jl-mar-bottom-15 jl-text-green">Solicite um orçamento</h1><button class="jl-toggle-modal jl-close-modal">X</button>
        </div>
        <div class=jl-modal-body>
            <div class=row>
                <div class=col-sm-12>
                    <p class=jl-text-light>Por favor informe os dados abaixo e eu entrarei em contato com você o mais breve possível.
                </div>
            </div>
            <div class="row jl-mar-top-15">
                <div class=col-sm-12>
                    <form class=jl-form>
                        <div class=row>
                            <div class="col-sm-12 col-md-6"><label class=jl-text-light for=Nome>Nome</label> <input class=jl-field id=jl-nome name=Nome></div>
                            <div class="col-sm-12 col-md-6"><label class=jl-text-light for=Email>Email</label> <input class=jl-field id=jl-email name=Email type=email></div>
                            <div class="col-sm-12 col-md-6"><label class=jl-text-light for=Telefone>Telefone</label> <input class=jl-field id=jl-telefone name=Telefone type=tel></div>
                            <div class="col-sm-12 col-md-6"><label class=jl-text-light for=Site>Site</label> <input class=jl-field id=jl-site name=Site></div>
                            <div class="col-sm-12 col-md-12 jl-mar-top-15"><label class=jl-text-light for=Mensagem>Descreva abaixo o projeto na qual você precisa de orçamento:</label> <textarea class=jl-textarea id=jl-mensagem name=Mensagem rows=8></textarea></div>
                        </div>
                        <div class="row jl-mar-top-15 justify-content-end">
                            <div class="col-sm-12 col-md-6"><button class="jl-btn jl-btn-green jl-btn-large jl-btn-block">Enviar</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <header class=jl-topbar>
        <div class="jl-logo jl-logo-big"><img src="<?php bloginfo('template_url');?>/images/logo.svg" alt="Logo João Lemon UX/UI Designer"></div>
        <nav class=jl-menu><a href=<?php echo home_url();?>>Home</a> <a href=<?php echo home_url();?>/portfolio>Portfolio</a> <a href=<?php echo home_url();?>/sobre>Sobre</a></nav>
    </header><button class="jl-toggle-menu jl-btn-menu-mob"><ion-icon name=menu></ion-icon></button>
    <nav class="jl-menu-is-closed jl-menu-mob"><a href=<?php echo home_url();?>>Home</a> <a href=<?php echo home_url();?>/portfolio>Portfolio</a> <a href=<?php echo home_url();?>/sobre>Sobre</a></nav>
    <div class="jl-text-light jl-bg-black jl-contact-info">
        <div class=jl-contact-info-inner>
            <h2 class="jl-title jl-text-green">Contato</h2>
            <p>hello@joaolemon.com
            <p>+55 (00) 9 9999 8888
            <div class=jl-social-links><a href=# class=jl-social><img src="<?php bloginfo('template_url');?>/images/icon-instagram.svg" alt=Instagram> </a><a href=# class=jl-social><img src="<?php bloginfo('template_url');?>/images/icon-twitter.svg" alt=Twitter> </a><a href=# class=jl-social><img src="<?php bloginfo('template_url');?>/images/icon-dribbble.svg" alt=Dribbble></a></div>
        </div>
        <div class=jl-corner></div>
    </div><button class=jl-btn-contact></button>
    <div class=jl-page-wrapper>