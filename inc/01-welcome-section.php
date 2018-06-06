<nav class="navbar navbar-inverse navbar-fixed-top " role="navigation" style="border-bottom: 5px solid #4d783a; display:none;">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./" style="font-weight: 300;">
        <!-- Japan Ranchers | 日本牧場  -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/jr-new-logo.png" alt="" class="animated flipInX img-responsive hidden-xs hidden-sm" style="width: 300px;
    margin-top: -40px;
    margin-left: -29px;">
    <img src="<?php echo get_template_directory_uri(); ?>/img/jr-inline-logo.png" alt="" class="animated flipInX img-responsive visible-xs visible-sm" style="margin-top: -10px;">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
      <?php 
    $args = array(
      'menu_class' => 'nav navbar-nav navbar-right',
      'theme_location' => 'primary'
    );
    wp_nav_menu($args); 
    ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 
 
<!-- 
<section class="section welcome-section" data-parallax="scroll" data-naturalWidth="1000px" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bg/pexels-photo-106206.jpeg" data-iosFix="false" data-androidFix="false" data-speed="0.0">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
         <img src="<?php echo get_template_directory_uri(); ?>/img/jr-logo.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-9 hidden-xs hidden-sm text-right">
          <a href="#" class="btn btn-primary btn-hollow wow fadeInDown" data-wow-delay="0.2s">Home</a>
          <a href="#" class="btn btn-primary btn-hollow-nav wow fadeInDown" data-wow-delay="0.4s">Catalog</a>
          <a href="#" class="btn btn-primary btn-hollow-nav wow fadeInDown" data-wow-delay="0.6s">Seminars</a>
          <a href="#" class="btn btn-primary btn-hollow-nav wow fadeInDown" data-wow-delay="0.8s">About</a>
          <a href="#" class="btn btn-primary btn-hollow-nav wow fadeInDown" data-wow-delay="1s">Events</a>
          <a href="#" class="btn btn-primary btn-hollow-nav wow fadeInDown" data-wow-delay="1.2s">Contact</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center wow fadeInDown"><br><br>
          <h1 class="text-white">Welcome to our website!</h1>
          <a href="#" class="btn btn-primary btn-hollow">
            Discover the ranch! <i class="fa fa-angle-right tab-left"></i>
          </a>
        </div>
      </div>
 
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/img/fence.png" class="fence wow fadeInUp" alt=""  data-wow-delay="0.4s" >
  </section>


   -->
<section class="section welcome-section" id="home" style="position: relative; width:100%; height: 70vh;background: #a7e5fd;">
<div style="position: absolute;
    bottom: -134px;
    left: 0px;
    width: 100%;
    background: url(<?php echo get_template_directory_uri(); ?>/img/farm2.png);
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;">
  
</div>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
         <img src="<?php echo get_template_directory_uri(); ?>/img/jr-new-logo.png" alt="" class="img-responsive wow animated flipInX" style="margin-top: -30px;" data-wow-delay="1.2s">
        </div>
        <div class="col-md-8 hidden-xs hidden-sm text-right">
          <?php  
            $menu_name = 'primary';
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menuitems = wp_get_nav_menu_items( $menu->term_id );
            $counter = 1;
            foreach ($menuitems as $item) {
              $delay = 0.2;
              $wow = $delay * $counter;
          ?>
          <a href="<?php echo $item->url; ?>" class="btn btn-primary btn-rounded btn-hollow wow fadeInDown" data-wow-delay="<?php echo $wow; ?>s"><?php echo $item->title; ?></a>
          <?php $counter++; } ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center wow fadeInDown"><br> 
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/farm2.png" alt="" class="img-responsive">  -->
          <h1 class="text-info"><b>Welcome to Japan Ranchers!</b></h1>
          <a href="#" class="btn btn-primary btn-hollow btn-rounded">
            Discover the ranch! <i class="fa fa-angle-right tab-left"></i>
          </a>
        </div>
      </div>
 
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/img/fence.png" class="fence wow fadeInUp" alt=""  data-wow-delay="0.4s" >
  </section>