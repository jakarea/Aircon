
$(function(){
	var calculateTotalPayable = function(){
		$("#total_payable_amount").val(Num.int($("#invoice_amount").val()) + Num.int($("#previous_dues").val()));
	}

	$(document).on('keyup', ".inv-invoice #invoice_amount", function(e){
		calculateTotalPayable();
	});

	$(document).on('change', ".inv-invoice #customer", function(e){
		calculateTotalPayable();
	});
})