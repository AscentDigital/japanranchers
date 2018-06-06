<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
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
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
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

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-2">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

	<h3 id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h3>

	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
</div>
<img src="<?php echo get_template_directory_uri(); ?>/img/icons/mill.svg" class="icon wow visible-lg fadeInDown" alt="freepik flaticon" data-wow-delay="0.4s" style="position:absolute; bottom: -3px; left: 10.5%;"> 

  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wheat.svg" class="icon wow visible-lg fadeInUp" alt="freepik flaticon" data-wow-delay="0.4s" style="position:absolute; bottom: -3px; left: 6%;width: 70px;">

  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wheat.svg" class="icon wow visible-lg fadeInUp" alt="freepik flaticon" data-wow-delay="0.8s" style="position:absolute; bottom: -3px; left: 19%;width: 70px;">

  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wheat.svg" class="icon wow visible-lg fadeInUp" alt="freepik flaticon" data-wow-delay="0.6s" style="position:absolute; bottom: -3px; left: 24.5%;width: 70px;">

  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wheat.svg" class="icon wow visible-lg fadeInUp" alt="freepik flaticon" data-wow-delay="0.9s" style="position:absolute; bottom: -3px; left: 30%;width: 70px;">
</section>
