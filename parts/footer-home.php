</div> <!--jl-page-wrapper-->
    <?php wp_footer();?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/inview.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/anime.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/slider.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/main.min.js"></script>
    <script>
        var myScrollDown = document.querySelector(".jl-scroll-down"),
            waypoint = new Waypoint({
                element: myScrollDown,
                handler: function() {
                    myScrollDown.classList.toggle("jl-fade-out")
                },
                offset: "80%"
            })
    </script>

</body>
</html>