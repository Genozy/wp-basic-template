

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
          <p class="copyright text-muted"><?php dynamic_sidebar( 'footer-1' ); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </footer>


<?php wp_footer(); ?>


</body>
</html>
