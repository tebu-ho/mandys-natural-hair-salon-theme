    </div><!-- /.container -->
    <div id="footer" class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <p>&copy; <?php echo date( 'Y' ); ?> <?php echo get_theme_mod( 'copyright', 'default_value' ); ?></p>   
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div>
              <ul>
                <li><a href="<?php echo get_permalink(); ?>"><?php echo get_theme_mod( 'social_media_three', 'default_value' ); ?></a></li>
                <li><a href="<?php echo get_permalink(); ?>"><?php echo get_theme_mod( 'social_media_two', 'default_value' ); ?></a></li>
                <li><a href="<?php echo get_permalink(); ?>"><?php echo get_theme_mod( 'social_media_one', 'default_value' ); ?></a></li>
              </ul>
            </div>
          </div>
        </div>  
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>