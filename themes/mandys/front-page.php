<?php 
  get_header();
  if ( have_posts() ):
  while( have_posts() ):
    the_post() 
?>
<section id="hero" class="sec--hero" style="background-image:url(<?php header_image(); ?>)">
  <div class="hero__overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 hero__content">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mandy_web.png" alt="Mandy's Hair Logo">
          <h1><?php bloginfo( 'description' ); ?></h1>
          <?php the_content(); ?>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </div>
</section>
<?php 
  endwhile;
  endif; 
?>
<div class="container">
  <div class="content">
    <div class="col-md-3 col-sm-2 col-xs-12"></div>
    <div class="row">
      <div class="services-p col-md-7 col-sm-8 col-xs-12">
        <p class="description"><?php the_field( 'intro_text' ); ?></p>
      </div>
      <div class="col-md-2 col-sm-2 col-xs-12"></div>
    </div>
    <div class="row">
      <?php
        $query = new WP_Query(
          array(
          'post_type' => 'feature',
          )
        );
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post(); 
      ?>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="service">
          <span class="circle">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Stylish Braids" class="">
          </span>
          <h3><?php the_title(); ?></h3>
          <?php the_content(); ?>
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
<div class="section dark">
  <div class="parallax"></div>
  <div class="container">
    <div class="content shade">
      <div class="text-center">
        <h2 class="title"><?php the_field( 'products_heading' ); ?></h2>
      </div>
      <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-12"></div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <p class="description">
            <?php the_field( 'products_paragraph' ); ?>
          </p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12"></div>
      </div>
    </div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="col-md-12 col-sm-6 item active">
          <ul class="row">
            <?php
            //The first 4 product slide
              $query = new WP_Query(
                array(
                  'post_type'      => 'product',
                  'post__in'       => array(50, 51, 52, 53),
                  'posts_per_page' => 4
                )
              );
              if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                  $query->the_post();
            ?>
            <li class="col-md-3 col-sm-6 col-xs-12">
              <a href="#" class="thumbnail">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              </a>
            </li>
            <?php
                }
              }
              wp_reset_postdata();
            ?>
          </ul>
        </div>
        <div class="col-md-12 col-sm-6 item">
          <ul class="row">
            <?php
            //The second 4 product slide
              $query = new WP_Query(
                array(
                  'post_type'      => 'product',
                  'post__in'       => array(54, 55, 56, 57),
                  'posts_per_page' => 4
                )
              );
              if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                  $query->the_post();
            ?>
            <li class="col-md-3 col-sm-6 col-xs-12">
              <a href="#" class="thumbnail">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              </a>
            </li>
            <?php
                }
              }
              wp_reset_postdata();
            ?>
          </ul>
        </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <i class="fa fa-angle-left"></i>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <i class="fa fa-angle-right"></i>
      </a>
      <!-- End Controls -->
    </div>
  </div>
</div>
<!-- Call to Action -->
<div id="subscribe" class="section gray footer-padding">
  <div class="container no-bottom">
    <div class="content shade content-cta">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12">
          <p class="description">
            <?php the_field( 'call_to_action' ); ?>
          </p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <a href="<?php echo site_url( '/gallery' ); ?>" type="submit" class="btn color">
            <?php the_field( 'button' ); ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Call to Action -->
<?php get_footer(); ?>