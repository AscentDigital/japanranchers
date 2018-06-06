<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<section class="section  wow fadeInUp" style="height: 200px; background-image:url(<?php echo get_template_directory_uri() . '/img/farm4.png'; ?>);background-position: center center; background-size: cover;">
<div class="container"> 
	</div>

	<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/product-banner.png" class="animated flipInX" alt="" style="position: absolute; bottom: 0px; right: 100px; width: 180px;"> -->
</section>
<section class="section" style="padding-top: 20px;">
	<div class="container"> 
		<ol class="breadcrumb">
		  <li><a href="<?php echo get_site_url(); ?>">Home</a></li> 
		  <li class="active">Checkout</li>
		</ol>

<?php

wc_print_notices();

?>

<span class="text-muted">
	<h2><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?php _e( 'Your cart is currently empty.', 'woocommerce' ) ?></h2>
</span>

<?php do_action( 'woocommerce_cart_is_empty' ); ?>

<?php if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
	<p class="return-to-shop">
		<a class="button wc-backward" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
			<?php _e( 'Return To Shop', 'woocommerce' ) ?>
		</a>
	</p>
<?php endif; ?>
</div>
<br>
<br>
<br>
<br>
<img src="<?php echo get_template_directory_uri(); ?>/img/icons/mill.svg" class="icon wow visible-lg fadeInDown" alt="freepik flaticon" data-wow-delay="0.4s" style="position:absolute; bottom: -3px; left: 10.5%;"> 

  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wheat.svg" class="icon wow visible-lg fadeInUp" alt="freepik flaticon" data-wow-delay="0.4s" style="position:absolute; bottom: -3px; left: 6%;width: 70px;">

  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wheat.svg" class="icon wow visible-lg fadeInUp" alt="freepik flaticon" data-wow-delay="0.8s" style="position:absolute; bottom: -3px; left: 19%;width: 70px;">

  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wheat.svg" class="icon wow visible-lg fadeInUp" alt="freepik flaticon" data-wow-delay="0.6s" style="position:absolute; bottom: -3px; left: 24.5%;width: 70px;">

  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wheat.svg" class="icon wow visible-lg fadeInUp" alt="freepik flaticon" data-wow-delay="0.9s" style="position:absolute; bottom: -3px; left: 30%;width: 70px;">
</section>
