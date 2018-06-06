<?php include './inc/00-default-nav.php'; ?>
<section class="section  wow fadeInUp" data-parallax="scroll" data-naturalWidth="1000px" data-image-src="./img/meadow.png" data-iosFix="false" data-androidFix="false" data-speed="0.0" style="height: 200px;">
<div class="container"> 
	</div>
 
</section>

<section class="section" style="padding-top: 20px;">
	<div class="container"> 
		<ol class="breadcrumb">
		  <li><a href="./">Home</a></li> 
		  <li><a href="./?seminar_list">Seminar List</a></li> 
		  <li class="active">Book a Seminar</li>
		</ol>
		<div class="row"> 
			<div class="col-md-4">
				<div class="panel seminar-default card-3 card-1 wow fadeInLeft" style="background:#435a48;" data-wow-delay="0.2s">
		            <div class="row"> 
		              <div class="col-lg-12">
		                <div class="panel-body text-center"> 
		                   <img src="./img/icons/student.svg" class="icon wow fadeIn rotateIn" alt="popcorns arts flaticon" data-wow-delay="0.2s">
		                   <h1>Advanced <br><strong>$250</strong></h1>   
		                   <p>For 3 (three) days and 2 (two) nights.
		                    <ul class="list-unstyled text-left">
		                      <li><i class="fa fa-check-circle text-primary"></i> Meals and Accomodation</li>
		                      <li><i class="fa fa-check-circle text-primary"></i> Training</li>
		                      <li><i class="fa fa-check-circle text-primary"></i> Guidebook</li>
		                      <li><i class="fa fa-check-circle text-primary"></i> Course Walkthrough</li>
		                      <li><i class="fa fa-check-circle text-primary"></i> Etc</li>
		                      <li><br></li>
		                    </ul>
		                   </p>
		                   <div class="text-center">
		                      
		                   </div>
		                </div>
		              </div>
		            </div>  
		             
		          </div> 
			</div>
			<div class="col-md-7">
				<h1 class="text-info no-mtop"><b>Advanced Seminar</b>
					<br>
					<small>$ 250.00 / Person</small>
				</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto expedita sequi nisi a excepturi error provident, repellendus quisquam unde aut non odit et debitis quia pariatur voluptate magni voluptas accusantium.
					<br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus repudiandae architecto nostrum, eaque nam, aliquid explicabo nihil nisi omnis iusto, facere cupiditate repellendus quasi voluptate laborum debitis quaerat adipisci suscipit.
				</p>

				<div class="row">
					<div class="col-xs-12 col-md-4"><small>&nbsp;<br></small>
						 <button class="btn btn-primary btn-hollow btn-block  btn-lg btn-rounded" data-toggle="modal" data-target="#message"><i class="fa fa-info-circle"></i> Inquire</button>
					</div> 
					<div class="col-xs-12 col-md-4"><small>&nbsp;<br></small>
						 <button class="btn btn-primary btn-lg  btn-block btn-rounded"><i class="fa fa-plus"></i> Book Now</button>
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