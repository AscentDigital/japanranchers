<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
$terms = get_the_terms( $post->ID, 'product_cat' );
$counter = 0;
foreach ($terms as $key) {
  if($key->taxonomy == 'product_cat' AND $key->slug == 'seminars'){
    $counter++;
  }
}
if($counter == 0){
$published = the_date('Y-m-d h:i:s', '', '', false);
$date = date('Y-m-d h:i:s');
$date1 = new DateTime($published);
$date2 = new DateTime($date);
$interval = $date1->diff($date2);
?>
  
	<div class="col-md-<?php if($interval->d <= 30){ echo 6; }else{ echo 3; }  ?> col-sm-6 <?php echo join( ' ', get_post_class() ); ?>">
          <div class="panel card-default card-3 wow fadeInLeft">  
            <?php 
              if($interval->d <= 30){
             ?>
            <button class="btn btn-xs btn-danger top-deal"> 
              NEW
            </button>
            <?php } ?>
            <div class="image-header" style="min-height: 150px;background: url('<?php do_action('getThumbnailUrl'); ?>'); background-position: center;"> 
            </div>
            <div class="row"> 
              <div class="col-lg-12">
                <div class="panel-body catalog">  
                  <b><?php do_action( 'getProductTitle' ); ?></b> - <span class=""><?php echo $product->get_price_html(); ?></span>
                   <p>
                   <?php 
                   do_action('productExcerpt'); ?></p>
                </div>
              </div>
            </div>  
            <a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary text-right corner-button"></a>
            <i class="fa fa-shopping-basket text-white absolute" style="right: 15px; bottom: 15px; pointer-events: none;"></i>
          </div>  
        </div>
<?php }else{ ?>
<div class="col-md-4 col-sm-6">
          <div class="panel seminar-default card-3 card-1 wow fadeInLeft" style="background:#4B6551;">
            <div class="row"> 
              <div class="col-lg-12">
                <div class="panel-body text-center"> 
                   <img src="<?php do_action('getThumbnailUrl'); ?>" class="icon wow rotateIn fadeIn" alt="pixel buddha flaticon">
                   <h1><?php do_action( 'getProductTitle' ); ?> <br><strong><?php echo $product->get_price_html(); ?></strong></h1>   
                   <?php echo '<p>' . apply_filters( 'woocommerce_short_description', $post->post_excerpt ) . '</p>'; ?>
                   <div class="text-center">
                     <a  href="<?php echo get_the_permalink(); ?>" class="btn btn-primary btn-hollow text-white btn-rounded">BOOK NOW</a>
                   </div>
                </div>
              </div>
            </div>  
             
          </div>  
        </div>
<?php } ?>