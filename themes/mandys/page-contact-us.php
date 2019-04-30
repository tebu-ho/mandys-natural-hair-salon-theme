<?php get_header(); ?>

<div id="primary" class="site-content">
  <div id="content" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
    <div id="contact" class="section footer-padding">
      <div class="container no-bottom">
        <div class="content shade">
          <div class="text-center">
            <h2 class="title"><?php the_title(); ?></h2>
          </div>
          <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-12"></div>
            <div id="description" class="col-md-8 col-sm-8 col-xs-12">
              <?php the_content(); ?>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12"></div>
          </div>
        </div>
      </div>
      <div id="map-canvas">
        <div class="container" style="padding:0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26477.299177925066!2d18.46681189671761!3d-33.949810260553804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc5cdd17b14887%3A0x80e558db9e48e659!2sMowbray%2C+Cape+Town!5e0!3m2!1sen!2sza!4v1552943437375" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="container no-pad">
        <div class="content">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <p class="icon-description">
                <span class="icon-wrapper">
                  <span class="circle"><i class="fa fa-map-marker"></i></span>
                </span>
                <?php echo get_theme_mod( 'physical_address', 'default_value' ); ?>
              </p>
              <p class="icon-description">
                <span class="icon-wrapper">
                  <span class="circle"><i class="fa fa-phone"></i></span>
                </span>
                <?php echo get_theme_mod( 'phone_number', 'default_value' ); ?>
              </p>
              <p class="icon-description">
                <span class="icon-wrapper">
                  <span class="circle"><i class="fa fa-envelope"></i></span>
                </span>
                <?php echo get_theme_mod( 'email_address', 'default_value' ); ?>
              </p>
            </div>
            <div id="description" class="col-md-6 col-sm-6 col-xs-12">
              <p class="description"><?php the_field( 'message' ); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <h2>Send Us a Message</h2>
        <div id="respond" class="content">
          <?php echo $response; ?>
          <form role="form" action="<?php the_permalink(); ?>" method="post">
          <div class="form-group">
            <label for="message_name"><i class="icon-tag"></i></label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="message_name" required>
            <div class="clearfix"></div>
          </div>
          <div class="form-group">
            <label for="message_email"><i class="icon-inbox"></i></label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="message_email" required>
            <div class="clearfix"></div>
          </div>
          <div class="form-group textarea">
            <label for="message_text"><i class="icon-pencil"></i></label>
            <textarea rows="6" class="form-control" id="message" placeholder="Message" name="message_text" value="<?php echo esc_attr( $_POST[ 'message_text' ] ); ?>" required></textarea>
            <div class="clearfix"></div>
          </div>
          <button type="submit" class="btn color">SEND MESSAGE</button>
        </form> 
      </div>
    </div>
  </div><!-- /.container -->
</div><!-- .entry-content -->
</article><!-- #post -->
<?php endwhile; // end of the loop. ?>
</div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>