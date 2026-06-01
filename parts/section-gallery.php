<?php 
$galeria_projeto = get_field('galeria'); 
?>
<section class="jl-post-section jl-post-gallery">
    <div class="container">
        <div class="row">
 
            <?php 
            if($galeria_projeto):
                $contador = 0;
                foreach( $galeria_projeto as $post_id ): 
                    $url_thumb = wp_get_attachment_image_src($post_id, 'portfolio-thumb');
                    $url_full  = wp_get_attachment_image_src($post_id, 'full');
                    $alt_text  = get_post_meta($post_id, '_wp_attachment_image_alt', true);
            ?>
 
                <div class="col-lg-3 col-6 col-md-4 col-sm-6 jl-mar-bottom-30">
                    <div class="jl-thumb-box">
                        <img 
                            src="<?php echo esc_url($url_thumb[0]); ?>" 
                            alt="<?php echo esc_attr($alt_text); ?>" 
                            class="jl-img-responsive jl-thumb-img" 
                            data-item="<?php echo $contador; ?>" 
                            data-src="<?php echo esc_url($url_full[0]); ?>"
                        >
                    </div>
                </div>
 
                <?php 
                    $contador++;
                endforeach; 
            endif;
            ?>
 
        </div>
    </div>
</section>
</main>
