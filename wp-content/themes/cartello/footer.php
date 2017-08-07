<!-- footer -->
<footer class="footer full-width nospace container-fluid" role="contentinfo">
  
</footer>
<!-- /footer -->
</div>
<!-- /wrapper -->
<!-- JAVASCRIPT -->
<?php
// wp_enqueue_script( 'slick', get_bloginfo( 'template_directory' ) . '/libs/slick-carousel/slick/slick.min.js', array( 'jquery' ), '', true );
// wp_enqueue_script( 'fancybox', get_bloginfo( 'template_directory' ) . '/libs/fancybox/dist/jquery.fancybox.min.js', array(), '', true );
// wp_enqueue_script( 'map', get_bloginfo( 'template_directory' ) . '/js/map.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'bootstrap', get_bloginfo( 'template_directory' ) . '/libs/bootstrap-sass/assets/javascripts/bootstrap.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'main', get_bloginfo( 'template_directory' ) . '/js/main.js', array( 'jquery' ), '', true );
?>

<?php wp_footer(); ?>

<!-- analytics -->
<script>
  (function (f, i, r, e, s, h, l) {
    i['GoogleAnalyticsObject'] = s;
    f[s] = f[s] || function () {
        (f[s].q = f[s].q || []).push(arguments)
      }, f[s].l = 1 * new Date();
    h = i.createElement(r),
      l = i.getElementsByTagName(r)[0];
    h.async = 1;
    h.src = e;
    l.parentNode.insertBefore(h, l)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
  ga('send', 'pageview');
</script>

</body>
</html>
