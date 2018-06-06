<?php  
	/*
	Template Name: Home
	*/

	get_header();
	get_template_part('./inc/03-getstarted-section');
?>
<section class="section" id="catalog" >
    	<div class="container">
    		<div class="row">
        		<div class="col-md-12">
<?php
	echo do_shortcode('[product_category per_page="8" category="farm" orderby="date" order="desc"]');
?>
<section class="section product-section " id="seminar" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/meadow.png);background-position: center center; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
<?php
	echo do_shortcode('[product_category per_page="3" category="seminars" orderby="date" order="asc"]');
	get_footer();
?>