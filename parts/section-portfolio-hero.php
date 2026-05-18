<section class="container-fluid jl-hero" style="background-image: url('<?php the_field("banner");?>') ">
    <div class=container>
        <div class="row align-items-center jl-hero-inner jl-text-light">
            <div class="col-sm-12 p-0 pl-sm-3 pr-sm-3">
                <div class=jl-hero-inner-content>
                    <div class=row>
                        <div class=col-sm-12>
                            <h1 class="jl-title jl-title-medium"><?php the_title();?></h1>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class=jl-project-stats>
                                <p><span class=jl-text-green>Projeto: </span><?php the_field('projeto');?></p>
                                    <p><span class=jl-text-green>Cliente: </span><?php the_field('cliente');?></p>
                                    <p><span class=jl-text-green>Serviços: </span> <?php
                                    
                                    $servicos = get_field('servicos');
                                    
                                    // echo '<pre>', var_dump($servicos), '</pre>'
                                    foreach ($servicos as $servico) {
                                        echo $servico->name.', ';
                                    }
                                    ?> </p>
                                
                                    <a href="<?php the_field('link_externo');?>" class="jl-mar-top-15 jl-btn jl-btn-green jl-btn-medium">visitar site<ion-icon name=share-alt></ion-icon>
                                    </a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-9">
                            <div class=jl-project-description>
                                <?php the_field('descricao');?>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>