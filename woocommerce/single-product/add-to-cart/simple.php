<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
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
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}
$thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'thumbnail-size', false);
$terms = get_the_terms( $post->ID, 'product_cat' );
$counter = 0;
foreach ($terms as $key) {
  if($key->taxonomy == 'product_cat' AND $key->slug == 'seminars'){
    $counter++;
  }
}
?>

<?php
	// Availability
	$availability      = $product->get_availability();
	$availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';

	echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
?>

<?php if ( $product->is_in_stock() ) : ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

	<form class="cart" method="post" enctype='multipart/form-data'>
	 	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
	 	<div class="row">
					<div class="col-xs-6 col-md-4">
						<?php if($counter == 0){ ?>
						<small>Quantity</small>
						<?php } ?>
	 	<?php
	 		// if ( ! $product->is_sold_individually() ) {
	 		// 	woocommerce_quantity_input( array(
	 		// 		'min_value'   => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),
	 		// 		'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product ),
	 		// 		'input_value' => ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 )
	 		// 	) );
	 		// }
	 	?>
	 	<input type="number" step="1" min="<?php echo apply_filters( 'woocommerce_quantity_input_min', 1, $product ); ?>" max="<?php echo apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product ); ?>" name="quantity" value="<?php echo ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 ); ?>" title="Qty" class="input-text qty text form-control input-lg text-primary <?php if($counter != 0){ echo 'hidden'; } ?>" size="4" pattern="[0-9]*" inputmode="numeric" style="font-size: 28px;" id="quantity">
	 	</div>
		<?php if($counter == 0){ ?>
		<div class="col-xs-6 col-md-4">
			<small>Subtotal<br></small>
			<p style="margin-bottom: 5px;">$ <span class="price"><?php echo $product->get_price(); ?></span> x <span class="quantity text-primary"><?php echo ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 ); ?></span> </p> 
			<h3 class="no-mtop">$ <abbr title="30.00 USD" class="total"></abbr></h3>
		</div>
		<?php } ?>
		<?php if($counter != 0){ ?>
		<div class="col-xs-12 col-md-4"><small>&nbsp;<br></small>
		 <a href="javascript:void(0)" role="button" class="btn btn-primary btn-hollow btn-block  btn-lg btn-rounded" data-toggle="modal" data-target="#message"><i class="fa fa-info-circle"></i> Inquire</a>
	</div>
	<?php } ?>
		<div class="col-xs-12 col-md-4"><small>&nbsp;<br></small>
	 	<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />

	 	<button type="submit" class="single_add_to_cart_button button alt btn btn-primary btn-lg btn-rounded btn-block"><?php if($counter == 0){ echo esc_html( $product->single_add_to_cart_text() ); }else{ echo '<i class="fa fa-plus"></i> Book Now'; } ?></button>
	 	</div>
				
		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	</form>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
<hr>
