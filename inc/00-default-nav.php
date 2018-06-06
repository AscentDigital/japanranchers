<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="border-bottom: 5px solid #4d783a;margin-bottom:0px;">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo get_site_url(); ?>" style="font-weight: 300;">
        <img src="<?php echo get_template_directory_uri(); ?>/img/jr-new-logo.png" alt="" class="animated flipInX img-responsive hidden-xs hidden-sm" style="width: 300px;
    margin-top: -30px;
    margin-left: -40px;">
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