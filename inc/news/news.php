<?php include './inc/00-default-nav.php'; ?>
<section class="section  wow fadeInUp" data-parallax="scroll" data-naturalWidth="1000px" data-image-src="./img/farm4.png" data-iosFix="false" data-androidFix="false" data-speed="0.0" style="height: 200px;">
<div class="container"> 
	</div>
 
</section>

<section class="section" style="padding-top: 20px;">
	<div class="container"> 
		<ol class="breadcrumb">
		  <li><a href="./">Home</a></li>
		  <li><a href="./?news_list">News List</a></li>
		  <li class="active">December 18, 2016</li>
		</ol>
		<div class="row"> 
			<div class="col-md-5">
				<img src="./img/bg/pexels-photo.jpg" alt="ranch" class="img-responsive">
				<br>
				<div class="row hidden">	
					<div class="col-xs-4">
						<img src="https://authoritynutrition.com/wp-content/uploads/2016/06/dragon-fruit.jpg" alt="ranch" class="img-responsive" style="height: 100px;">
					</div>
					<div class="col-xs-4">
						<img src="http://cdn3.volusion.com/kceqm.mleru/v/vspfiles/photos/68-3.jpg?1453377829" alt="ranch" class="img-responsive" style="height: 100px;">
					</div>
					<div class="col-xs-4">
						<img src="http://www.stayonthehealthypath.com/wp-content/uploads/2015/07/P220610_07.13_01.jpg" alt="ranch" class="img-responsive" style="height: 100px;">
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<h1 class="text-info no-mtop"><b>Our new ranch is now open!</b>
					<br>
					<small>December 13, 2016</small>
				</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto expedita sequi nisi a excepturi error provident, repellendus quisquam unde aut non odit et debitis quia pariatur voluptate magni voluptas accusantium.
					<br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus repudiandae architecto nostrum, eaque nam, aliquid explicabo nihil nisi omnis iusto, facere cupiditate repellendus quasi voluptate laborum debitis quaerat adipisci suscipit.
				</p>

				<div class="row">
					<div class="col-xs-12 col-md-12">
						<small>Share</small><br>
						 <button class="btn btn-primary btn-sm btn-rounded"><i class="fa fa-twitter"></i></button>
						 <button class="btn btn-primary btn-sm btn-rounded"><i class="fa fa-facebook"></i></button>
						 <button class="btn btn-primary btn-sm btn-rounded"><i class="fa fa-google-plus"></i></button>
						 <button class="btn btn-primary btn-sm btn-rounded"><i class="fa fa-pinterest"></i></button>
						 
					</div>
					
					 
					 
				</div>

				<hr>

			 

	            

			</div>
		</div> 
		<br><br><br><br>
	</div> 
	<img src="./img/icons/mill.svg" class="icon wow visible-lg fadeInDown" alt="freepik flaticon" data-wow-delay="0.4s" style="position:absolute; bottom: -3px; left: 10.5%;"> 
	<img src="./img/icons/wheat.svg" class="icon wow visible-lg fadeInUp" alt="freepik flaticon" data-wow-delay="0.4s" style="position:absolute; bottom: -3px; left: 6%;width: 70px;">
	<img src="./img/icons/wheat.svg" class="icon wow visible-lg fadeInUp" alt="freepik flaticon" data-wow-delay="0.8s" style="position:absolute; bottom: -3px; left: 19%;width: 70px;">
	<img src="./img/icons/wheat.svg" class="icon wow visible-lg fadeInUp" alt="freepik flaticon" data-wow-delay="0.6s" style="position:absolute; bottom: -3px; left: 24.5%;width: 70px;">
	<img src="./img/icons/wheat.svg" class="icon wow visible-lg fadeInUp" alt="freepik flaticon" data-wow-delay="0.9s" style="position:absolute; bottom: -3px; left: 30%;width: 70px;">
</section>













<?php include './inc/09-contact-section.php' ?>

<script>
	function limitText(field, maxChar){
    var ref = $(field),
        val = ref.val();
    if ( val.length >= maxChar ){
        ref.val(function() {
            console.log(val.substr(0, maxChar))
            return val.substr(0, maxChar);       
        });
    }
}
$(function(){
	$("#quantity").bind('keyup mouseup', function () {
	   	var price = $('.price').text();
	   	var quantity = $(this).val();
	   	 limitText(this, 10)
	   	$('.quantity').html(quantity);
	   	var total = quantity*price;
	   	$('.total').html(parseFloat(Math.round(total * 100) / 100).toFixed(2));
	   	$('.total').attr('title', parseFloat(Math.round(total * 100) / 100).toFixed(2) + ' USD');

	});
});
</script>