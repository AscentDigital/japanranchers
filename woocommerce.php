<?php 
	get_header();
	if(woocommerce_page_title(false) == 'Seminars'){
		$img = '/img/meadow.png';
	}else{
		$img = '/img/farm4.png';
	}
?>
<section class="section  wow fadeInUp" style="height: 200px; background-image:url(<?php echo get_template_directory_uri() . $img; ?>);background-position: center center; background-size: cover;">
<div class="container"> 
	</div>

	<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/product-banner.png" class="animated flipInX" alt="" style="position: absolute; bottom: 0px; right: 100px; width: 180px;"> -->
</section>
	<section class="section" style="padding-top: 20px;">
	<div class="container"> 
		<ol class="breadcrumb">
		  <li><a href="<?php echo get_site_url(); ?>">Home</a></li> 
		  <li><a href="<?php echo get_site_url() . '/category/farm'; ?>">
		  	<?php 
		  		if(woocommerce_page_title(false) == 'Farm'){
		  			echo 'Catalog List';
		  		}else if(woocommerce_page_title(false) == 'Seminars'){
		  			woocommerce_page_title();
		  		} else{
		  			echo 'Catalog List';
		  		}
		  	?>
		  </a>
		  </li>
		  <?php if(woocommerce_page_title(false) != 'Farm' AND woocommerce_page_title(false) != 'Seminars'){ ?>
			  <li class="active">
			  	<?php woocommerce_page_title(); ?>
			  </li>
		  <?php } ?>
		</ol>
<?php
	woocommerce_content();
	get_footer(); 
?>