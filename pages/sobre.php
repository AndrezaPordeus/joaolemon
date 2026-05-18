<?php 
/* Template Name: Sobre */
get_header(); 
?>
    <section class="jl-section-offset-top jl-section-sobre">
        <div class=container-fluid>
            <div class=row>
                <div class="col-sm-12 col-lg-4 jl-avatar-sobre order-2 order-lg-1">
                    <div class=jl-box-img><img src="<?php the_field('foto');?>" alt="Joao Lemon Designer" class=jl-img-responsive title="Joao Lemon Designer"></div>
                </div>
                <div class="col-sm-12 col-lg-8 order-1 order-lg-2">
                    <div class="jl-mar-bottom-30 jl-titulo-sobre">
                        <h1 class="jl-text-light jl-title jl-title-xlarge"><?php the_field('nome');?><span class=jl-text-green> <?php the_field('sobrenome');?></span></h1>
                    </div>
                    <div class="jl-text-light jl-info-sobre">
                        <h4 class="jl-text-green jl-mar-bottom-15 jl-subtitle"><?php the_field('subtitulo_1');?></h4>
                            <<?php the_field('texto_1');?>
                            <div class="jl-contact-info-inner jl-mar-top-30">
                                <div class="jl-mar-bottom-30 jl-social-links-circle">
                                    <a href=# class="jl-social jl-bg-green jl-mar-right-30 jl-text-black">
                                        <ion-icon name=logo-instagram></ion-icon>
                                    </a>
                                    <a href=# class="jl-social jl-bg-green jl-mar-right-30 jl-text-black">
                                        <ion-icon name=logo-twitter></ion-icon>
                                    </a>
                                    <a href=# class="jl-social jl-bg-green jl-mar-right-30 jl-text-black">
                                        <ion-icon name=logo-dribbble></ion-icon>
                                    </a>
                                </div>
                                <p>hello@<span class=jl-text-green>joaolemon</span>.com</p><br>
                                <p>+55 (00) 9 9999 8888</div>
                    </div>
                    <div class=jl-premios-sobre>
                        <h4 class="jl-text-green jl-mar-bottom-15 jl-subtitle">Prêmios e Reconhecimentos</h4>
                        <ul class="jl-text-light jl-page-list">
                            <li>Awwwards Site of the day
                                <li>CSS Mania
                                    <li>FWA Site of the day</ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_template_part('parts/footer', 'sobre'); ?>