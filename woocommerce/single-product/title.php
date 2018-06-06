<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author     WooThemes
 * @package    WooCommerce/Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
global $post, $product;
//the_title( '<h1 itemprop="name" class="product_title entry-title">', '</h1>' );
$thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'thumbnail-size', false);
$terms = get_the_terms( $post->ID, 'product_cat' );
$counter = 0;
foreach ($terms as $key) {
  if($key->taxonomy == 'product_cat' AND $key->slug == 'seminars'){
    $counter++;
  }
}
?>
<div class="col-md-7">
	<h1 class="text-info no-mtop"><b><?php the_title(); if($counter != 0){ echo ' Seminar'; } ?></b> <sup><?php if ( $product->is_on_sale() ) : ?>

	<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="label label-danger">' . __( 'On Sale!', 'woocommerce' ) . '</span>', $post, $product ); ?>

<?php endif; ?></sup></h1>