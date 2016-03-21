FancyUI.billReceiveFormInitialize = function(){
	/**Bill Receive**/
	$("#invoice_against_lv_id").on('change', function(){
		var lookup = parseInt($(this).val());
		cleanInputs('.payment_against_lv');


		if(lookup==33){
			$('.invoice_against_lv').hide();
			$('.work-order-invoice, .supplier').show();
		} else if(lookup == 34){
			$('.invoice_against_lv, .work-order-invoice').hide();
			$('.supplier').show();
		} else if(lookup == 35){
			$('.invoice_against_lv, .work-order-invoice').hide();
			$('.service-provider-invoice').show();
		}
	});	
}