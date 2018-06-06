<?php
/**
 * Product Loop End
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-end.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */
?>
</div>
	<?php if(is_front_page()){ ?>
  </div>
      <div class="row explore">
        <div class="col-md-12 text-center"><br>
          <a href="<?php echo get_site_url() . '/category/farm/'; ?>" class="btn btn-lg btn-primary wow fadeInUp front">Explore our entire catalog <i class="tab-left fa fa-angle-right"></i></a>
        </div>
      </div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/icons/barn.svg" class="icon wow fadeInLeft barn" alt="freepik flaticon" ata-wow-delay="0.4s" style="position:absolute; bottom: -3px; left: 40px;">
<img src="<?php echo get_template_directory_uri(); ?>/img/icons/tractor.svg" class="icon wow fadeInLeft tractor" alt="freepik flaticon" ata-wow-delay="0.8s" style="position:absolute; bottom: -10px; left: 190px;width: 90px;">    
  </section>

  <?php }else{ ?>
    <br><br><br><br>

  </div> 

  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/mill.svg" class="icon wow visible-lg fadeInDown" alt="freepik flaticon" data-wow-delay="0.4s" style="position:absolute; bottom: -3px; left: 10.5%;"> 

  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wheat.svg" class="icon wow visible-lg fadeInUp" alt="freepik flaticon" data-wow-delay="0.4s" style="position:absolute; bottom: -3px; left: 6%;width: 70px;">

  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wheat.svg" class="icon wow visible-lg fadeInUp" alt="freepik flaticon" data-wow-delay="0.8s" style="position:absolute; bottom: -3px; left: 19%;width: 70px;">

  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wheat.svg" class="icon wow visible-lg fadeInUp" alt="freepik flaticon" data-wow-delay="0.6s" style="position:absolute; bottom: -3px; left: 24.5%;width: 70px;">

  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wheat.svg" class="icon wow visible-lg fadeInUp" alt="freepik flaticon" data-wow-delay="0.9s" style="position:absolute; bottom: -3px; left: 30%;width: 70px;">

</section>
  <?php } ?>
