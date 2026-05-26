</div>
<?php wp_footer();?>
<script src=https://unpkg.com/aos@2.3.1/dist/aos.js></script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/rellax/1.10.0/rellax.min.js></script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js></script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/inview.min.js></script>
<script src="<?php bloginfo('template_url');?>/js/gallery.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/main.min.js"></script>
<script>
    AOS.init();
    for (var galleryItem = document.querySelectorAll(".jl-post-gallery img"), i = 0; i < galleryItem.length; i++) new Waypoint.Inview({
        element: galleryItem[i],
        entered: function() {
            var e = this.element.getAttribute("data-src");
            this.element.setAttribute("src", e)
        }
    })
</script>