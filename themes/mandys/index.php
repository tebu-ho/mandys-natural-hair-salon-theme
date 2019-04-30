<?php get_header(); ?>

    <section id="hero" class="sec--hero">
      <div class="hero__overlay">
        <div class="container">
          <div class="row">
              <div class="col-md-2"></div>
            <div class="col-md-8 hero__content">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mandy_web.png" alt="Mandy's Hair Logo">
              <h1><?php bloginfo('description'); ?></h1>
              <p class="col-md-10">Strike a pose with a look that matches your attitude expertly styled at Mandy's.</p>
            </div>
              <div class="col-md-2"></div>
          </div>
        </div>
      </div>
    </section>

      <div class="container">
        <div class="content">
            <div class="col-md-3 col-sm-2 col-xs-12"></div>
          <div class="row">
            <div class="services-p col-md-7 col-sm-8 col-xs-12">
              <p class="description">Mandy's is probably the most trusted salon in Cape Town for treating and styling natural hair. We style gorgeous women who appreciate the beauty of natural black hair. From your hair texture, we help you choose a hairstyle that suits your lifestyle.</p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12"></div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service">
                  <span class="circle"><img src="img/braids3.png" alt="Stylish Braids" class=""> </span>
                <h3>Stylish Braids</h3>
                <p>Perfect for saving you precious time and can last up to 3 months</p>                
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service">
                  <span class="circle"><img src="img/dreadlocks.jpg" alt="Stylish Braids" class=""> </span>
                <h3>Beautiful Dreadlocks</h3>
                <p>Requires low maintenance and grows your hair strong with no damage</p>   
                </div>             
              </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service">
                  <span class="circle"><img src="img/afro1.jpg" alt="Stylish Braids" class=""> </span>
                <h3>Afro Puffs</h3>
                <p>Great for enhancing your facial features like your eyes and cheekbones</p>                
              </div>
            </div>
            </div>
          </div>


</div><!-- /.content -->
</div>
</div>
<div class="section dark">
<div class="parallax"></div>
<div class="container">
<div class="content shade">
  <div class="text-center">
    <h2 class="title">Organic Hair Products</h2>            
  </div>
  <div class="row">
    <div class="col-md-2 col-sm-2 col-xs-12"></div>
    <div class="col-md-8 col-sm-8 col-xs-12">
      <p class="description">To grow healthy and longer, your natural hair needs organic moisture and water. Alcohol-free ingredients like shea butter, coconut oil and rosemary are key for a healthy grow.
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
        <li class="col-md-3 col-sm-6 col-xs-12">
          <a href="#" class="thumbnail">
            <img src="img/product.jpg" alt="">
          </a>
        </li>
        <li class="col-md-3 col-sm-6 col-xs-12">
          <a href="#" class="thumbnail">
            <img src="img/product13.jpg" alt="">
          </a>
        </li>
        <li class="col-md-3 col-sm-6 col-xs-12">
          <a href="#" class="thumbnail">
            <img src="img/product10.jpg" alt="">
          </a>
        </li>
        <li class="col-md-3 col-sm-6 col-xs-12">
          <a href="#" class="thumbnail">
            <img src="img/product5.jpg" alt="">
          </a>
        </li>
      </ul>
    </div>
    <div class="col-md-12 col-sm-6 item">
      <ul class="row">
        <li class="col-md-3 col-sm-6 col-xs-12">
          <a href="#" class="thumbnail">
            <img src="img/product9.png" alt="">
          </a>
        </li>
        <li class="col-md-3 col-sm-6 col-xs-12">
          <a href="#" class="thumbnail">
            <img src="img/product7.png" alt="">
          </a>
        </li>
        <li class="col-md-3 col-sm-6 col-xs-12">
          <a href="#" class="thumbnail">
            <img src="img/product1.png" alt="">
          </a>
        </li>
        <li class="col-md-3 col-sm-6 col-xs-12">
          <a href="#" class="thumbnail">
            <img src="img/product2.jpg" alt="">
          </a>
        </li>
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
</div>
</div>
</div>

<div id="subscribe" class="section gray footer-padding">
<div class="container no-bottom">
<div class="content shade content-cta">
  <div class="row">
    <div class="col-md-8 col-sm-8 col-xs-12">
      <p class="description">View our gallery for a picture of our creative natural hairstyles.
        </p>
    </div>
      <div class="col-md-2 col-sm-2 col-xs-12">
        <a href="gallery.html" type="submit" class="btn color">View Gallery Here</a>
      </div>
  </div>
</div>
</div>

<?php get_footer(); ?>