FancyUI.formsInitialize = function (){

	$("#payment_mode").on('change', function(){
		var mode = parseInt($(this).val());
		console.log(mode);
		
		if(mode === 5) {
			$(".show_on_bank").removeClass('conceal');
		} else {
			$(".show_on_bank").addClass('conceal');
			cleanInputs('.show_on_bank');
		}
	});

	$("#collection_type").on('change', function(){
		var collectionType = parseInt($(this).val());
		console.log(collectionType);
		
		if(collectionType === 6) {
			$(".cash-party").removeClass('conceal');
			$(".order").addClass('conceal');

			cleanInputs('.order');
		} else {
			$(".cash-party").addClass('conceal');
			$(".order").removeClass('conceal');

			cleanInputs('.cash-party');
		}
	});

	$("#payment_against_lv_id").on("change", function(){
		var payment_against = parseInt($(this).val());

		if(payment_against === 1){
			$(".payment-type").addClass('conceal');
			$(".work-order").removeClass('conceal');
			
			cleanInputs('.payment-type');
		} else if(payment_against === 2) {
			$(".payment-type").addClass('conceal');
			$(".invoice-order").removeClass('conceal');

			cleanInputs('.payment-type');
		} else if(payment_against === 3){
			$(".payment-type").addClass('conceal');
			$(".purchase-memo").removeClass('conceal');

			cleanInputs('.payment-type');
		} else {
			$(".payment-type").addClass('conceal');
			$(".service-provider-bill").removeClass('conceal');

			cleanInputs('.payment-type');
		}

	});

	$("select[data-conceal]").change('on', function(){
		var conceal = parseInt($(this).val()),
			concealId = $(this).attr('data-conceal');

		if(conceal) {
			$(concealId).removeClass('conceal');
		} else {
			$(concealId).addClass('conceal');
		}
	});


	$("#collection_amount, #balance_amount").on("keyup", function(){
		var balanceAmount = Num.int($("#balance_amount").val()),
			collectionAmount = Num.int($("#collection_amount").val()),
			duesAmount;

		duesAmount = balanceAmount - collectionAmount;

		$("#dues_amount").val(duesAmount);
	});

	$(".bill-receive #invoice_amount").on("keyup", function(){
		var invoice_amount = parseDecimal($("#invoice_amount").val()), 
			dues_amount = parseDecimal($("#dues_amount").val());
		$("#dues_amount").val(dues_amount);
		$("#payable_amount").val(invoice_amount + dues_amount);
	});


	$(".payment-info #payable_amount, .payment-info #paid_amount").on("change, keyup", function(){
		calculatePaymentInvoicePayable();
	});

}

function calculatePaymentInvoicePayable(){
	var payable_amount = parseDecimal($("#payable_amount").val()), 
		paid_amount = parseDecimal($("#paid_amount").val());

	$("#dues_amount").val(payable_amount - paid_amount);
}