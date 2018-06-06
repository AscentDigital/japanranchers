<?php include './inc/00-default-nav.php'; ?>
<section class="section  wow fadeInUp" data-parallax="scroll" data-naturalWidth="1000px" data-image-src="./img/farm4.png" data-iosFix="false" data-androidFix="false" data-speed="0.0" style="height: 200px;">
<div class="container"> 
	</div>

	<img src="./img/product-banner.png" class="animated flipInX" alt="" style="position: absolute; bottom: 0px; right: 100px; width: 180px;">
</section>

<section class="section" style="padding-top: 20px;">
	<div class="container"> 
		<ol class="breadcrumb">
		  <li><a href="./">Home</a></li>
		  <li><a href="./?catalog_list">Catalog</a></li>
		  <li class="active">Dragonfruit</li>
		</ol>
		<div class="row"> 
			<div class="col-md-5">
				<img src="./img/catalog/dragon-fruit-carlos-blanco.jpg" alt="ranch" class="img-responsive">
				<br>
				<div class="row">	
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
				<h1 class="text-info no-mtop"><b>Dragonfruit</b>
					<br>
					<small>$ 1.50 each</small>
				</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto expedita sequi nisi a excepturi error provident, repellendus quisquam unde aut non odit et debitis quia pariatur voluptate magni voluptas accusantium.
					<br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus repudiandae architecto nostrum, eaque nam, aliquid explicabo nihil nisi omnis iusto, facere cupiditate repellendus quasi voluptate laborum debitis quaerat adipisci suscipit.
				</p>

				<div class="row">
					<div class="col-xs-6 col-md-4">
						<small>Quantity</small>
						<input type="number" id="quantity" class="form-control input-lg text-primary" value="1" style="font-size: 28px;" min="1">
					</div>
					
					<div class="col-xs-6 col-md-4">
						<small>Subtotal<br></small>
						<p style="margin-bottom: 5px;">$ <span class="price">1.50</span> x <span class="quantity text-primary">1</span> </p> 
						<h3 class="no-mtop">$ <abbr title="30.00 USD" class="total">1.50</abbr></h3>
					</div>
					<div class="col-xs-12 col-md-4"><small>&nbsp;<br></small>
						 <button class="btn btn-primary btn-lg btn-rounded"><i class="fa fa-shopping-basket"></i> ORDER NOW</button>
					</div>
				</div>

				<hr>

				<h3 class="text-info no-mtop"><b>Details</b></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam officia delectus debitis ea alias, eius ipsa. </p>
				<ul class="list-unstyled text-left">
	              <li><i class="fa fa-check-circle text-primary"></i> Grown naturally</li>
	              <li><i class="fa fa-check-circle text-primary"></i> No pesticides</li>
	              <li><i class="fa fa-check-circle text-primary"></i> Guidebook</li>
	            </ul>

	            

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