<?php 
    get_header();
    get_template_part('parts/section', 'portfolio-hero');
    get_template_part('parts/section', 'portfolio-body');  
    $pre_gallery = get_field('pre_gallery');
    if($pre_gallery):
        get_template_part('parts/section', 'pre-gallery');
    endif;
    get_template_part('parts/section', 'gallery'); 
    get_template_part('parts/footer', 'single');  
?>