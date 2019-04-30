<?php get_header(); ?>

<div class="modals">
  <?php 
    $query = new WP_Query(
      array(
        'post_type'      => 'gallery',
        'order'          => 'ASC',
        'posts_per_page' => -1,
      )
    );
    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post();
        $thumb_id = get_post_thumbnail_id( get_the_ID() );
        $alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true );
        $postid = get_the_ID(); 
  ?>
  <div class="modal fade" id="modal-<?php echo $postid; ?>" tabindex="-1" role="dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
              <div class="divider"></div>
              <div class="img-bkg">
                <img class="img-responsive img-centered" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
                <h2><?php the_title(); ?></h2>
              </div>
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <p class="description"><?php the_field( 'description' ); ?></p>
              </div>
              <a href="<?php echo site_url( '/contact-us' ); ?>" type="submit" class="btn color"><?php the_field( 'call_to_action' ); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.modal -->
  <?php 
      } 
    }
    wp_reset_postdata(); 
  ?>
</div>

<div class="container">
  <div class="content shade">
    <?php 
      if ( have_posts() ):
        while(have_posts()):
          the_post()
    ?>
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
    <?php
      endwhile;
        endif; 
    ?>
  </div><!-- /.content -->  
  <div id="grid" class="row masonry-grid effect-2">
    <?php 
      $query = new WP_Query(
        array(
          'post_type' => 'gallery',
          'order'     => 'ASC'
        )
      );
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post();
          $thumb_id = get_post_thumbnail_id( $post->id );
          $alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true );
          $postid = get_the_ID(); 
    ?>
    <li class="col-md-4 col-sm-6 col-xs-12 item large">
      <a data-toggle="modal" href="#modal-<?php echo $postid; ?>" class="image">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
        <span class="overlay"><span class="valign"></span><i class="fa fa-search"></i></span>              
      </a>
      <div class="description">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <div class="clearfix"></div>
      </div>
    </li>
    <?php 
        } 
      } 
      wp_reset_postdata(); 
    ?>
  </div>  
</div>
<hr>
</div><!-- /.container -->  
  <div id="subscribe" class="section gray footer-padding">
    <div class="container no-bottom">
      <div class="content shade">
        <div class="row">
          <div class="col-md-8 col-sm-8 col-xs-12">
            <p class="description"><?php the_field( 'call_to_action' ); ?></p>
          </div>
          <div class="col-md-2 col-sm-2 col-xs-12">
            <a href="<?php echo site_url( '/contact-us' ); ?>" type="submit" class="btn color"><?php the_field( 'button' ); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.container -->

  <div id="footer" class="section">
<?php get_footer(); ?>