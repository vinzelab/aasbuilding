<footer>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo-footer img-responsive" src="wp-content/uploads/2016/12/logo_footer.svg" alt="logo"></a>
  <div class="footer-nav">
    <?php wp_nav_menu(array('theme_location'=>'footer')) ?>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>
