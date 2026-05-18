<?php 
/* Template Name: Portfolio */
get_header(); 
?>

<section class="container-fluid jl-section-offset-top">
    <div class=row>
        <div class="col-sm-10 offset-sm-1">
            <ul class=jl-portfolio-list>

            <?php 
                $args = array(
                    'post_type' => 'project'
                );

                $portfolio_query = new WP_Query($args);

                if ( $portfolio_query->have_posts() ) : while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); 
            ?> 

                <li class=jl-portfolio-item data-slide=1>
                    <div class=row>
                        <div class="col-sm-12 order-2 order-lg-1 col-lg-5">
                            <div class="jl-text-light jl-portfolio-item-info" data-aos=fade-right data-aos-delay=200>
                                <h1 class="jl-mar-bottom-15 jl-title jl-title-large"><?php the_title();?></h1>
                                <p class=jl-mar-bottom-30><?php the_excerpt();?></p>
                                <a href="<?php the_permalink();?>" class="jl-btn jl-btn-green jl-btn-large mt-5">ver projeto</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 order-1 order-lg-2 offset-lg-1">
                            <div class=jl-portfolio-item-thumb>
                                <div class="d-lg-block d-none jl-portfolio-item-box" data-aos=zoom-in></div>
                                <img src="<?php the_post_thumbnail_url('portfolio-thumb');?>" alt="Startup Rocketz" data-aos=flip-left data-aos-delay=300 data-aos-offset=300 title="Startup Rocketz"> 
                                <a href="<?php the_permalink();?>" class="jl-btn jl-btn-dark jl-btn-medium">
                                    visitar site
                                    <ion-icon name=share-alt></ion-icon>
                                </a>
                                </div>
                            </div>
                        </div>
                </li>

            <?php endwhile; endif;?>
                
            </ul>
        </div>
    </div>
</section>

<?php get_template_part('parts/footer', 'portfolio'); ?>