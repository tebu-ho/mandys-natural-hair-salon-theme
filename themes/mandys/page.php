<?php get_header(); ?>
<!-- Meet the Team Section -->
<div id="team" class="section dark">
  <div class="parallax"></div>
  <div class="container">
    <div class="content shade">
      <?php 
        if (have_posts()):
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
      <div class="row">
        <?php
          $query = new WP_Query(
            array(
              'post_type'      => 'team',
              'order'          => 'ASC',
              'posts_per_page' => 4
            )
          );
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post(); 
        ?>
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="wrapper">
            <a href="#" class="portrait-wrapper">
              <img class="portrait" src="<?php echo get_the_post_thumbnail_url(); ?>">
              <span class="overlay"><span class="valign"></span><i class="fa fa-envelope"></i></span>              
            </a>
            <div class="text-center">
              <h3><?php the_title(); ?>, <small><?php the_field( 'job_position' ); ?></small></h3>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
        <?php
            }
          } 
          wp_reset_postdata();
        ?>
        </div>
      </div><!-- /.content -->
    </div>
  </div>

<?php get_footer(); ?>