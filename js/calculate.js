jQuery(function( $ ){
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
		   	var price =+ $('.price').text();
		   	var quantity =+ $(this).val();
		   	 limitText(this, 10)
		   	$('.quantity').html(quantity);
		   	var total = quantity*price;
		   	$('.total').html(parseFloat(Math.round(total * 100) / 100).toFixed(2));
		   	$('.total').attr('title', parseFloat(Math.round(total * 100) / 100).toFixed(2) + ' USD');

		});
		$('#quantity').trigger('keyup');
	});
});