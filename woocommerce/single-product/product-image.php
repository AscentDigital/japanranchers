<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
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
 * @version     2.6.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post, $product;
$thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'thumbnail-size', false);
$terms = get_the_terms( $post->ID, 'product_cat' );
$counter = 0;
foreach ($terms as $key) {
  if($key->taxonomy == 'product_cat' AND $key->slug == 'seminars'){
    $counter++;
  }
}
if($counter == 0){
?>
<div class="col-md-5">
	<?php
		if ( has_post_thumbnail() ) {
			echo '<a rel="lightbox" href="'.$thumb_url[0].'"><img src="'.$thumb_url[0].'" alt="ranch" class="img-responsive"></a>
			<br>
			';
			// <div style="width: 100%; height: 400px; background-size:cover; background-image: url('.$thumb_url[0].'); background-position: center center;">
			// </div>
			// $attachment_count = count( $product->get_gallery_attachment_ids() );
			// $gallery          = $attachment_count > 0 ? '[product-gallery]' : '';
			// $props            = wc_get_product_attachment_props( get_post_thumbnail_id(), $post );
			// $image            = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
			// 	'title'	 => $props['title'],
			// 	'alt'    => $props['alt'],
			// ) );
			// echo apply_filters(
			// 	'woocommerce_single_product_image_html',
			// 	sprintf(
			// 		'<a href="%s" itemprop="image" class="woocommerce-main-image zoom" title="%s" data-rel="prettyPhoto%s">%s</a>',
			// 		esc_url( $props['url'] ),
			// 		esc_attr( $props['caption'] ),
			// 		$gallery,
			// 		$image
			// 	),
			// 	$post->ID
			// );
		} else {
			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), __( 'Placeholder', 'woocommerce' ) ), $post->ID );
		}

		do_action( 'woocommerce_product_thumbnails' );
	}else{
	?>
		<div class="col-md-4">
				<div class="panel seminar-default card-3 card-1 wow fadeInLeft" style="background:#435a48;" data-wow-delay="0.2s">
		            <div class="row"> 
		              <div class="col-lg-12">
		                <div class="panel-body text-center"> 
		                   <img src="<?php echo $thumb_url[0]; ?>" class="icon wow fadeIn rotateIn" alt="popcorns arts flaticon" data-wow-delay="0.2s">
		                   <h1><?php the_title(); ?> <br><strong><?php $product->get_price_html(); ?></strong></h1>   
		                   <?php echo '<p>' . apply_filters( 'woocommerce_short_description', $post->post_excerpt ) . '</p>'; ?>
		                   <div class="text-center">
		                      
		                   </div>
		                </div>
		              </div>
		            </div>  
		             
		          </div> 
	<?php
	}
	?>
</div>
