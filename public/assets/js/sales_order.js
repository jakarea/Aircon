FancyUI.sales = function(){


	function calculateWeight(){
		var $h = $("#volumetric_height"),
			$w = $("#volumetric_width"),
			$l = $("#volumetric_length");

		return (
			parseDecimal($h.val()) * 
			parseDecimal($w.val()) * 
			parseDecimal($l.val()) / 
			5000
		) . toPrecision(3);
	}

	function billingWeight(){
		var actual_weight = $("#actual_weight").val(),
			volumetric_weight = $("#volumetric_weight").val();

		return Math.max(parseDecimal(actual_weight), parseDecimal(volumetric_weight));
	}

	$('#billing_weight').on('keydown tab', function(e) {
		$("#receivers-tab").click();

		//nasty hack
		//for some reason it does not work on the go
		setTimeout(function(){
			$("#company").focus();
		}, 200);
	});

	$("#volumetric_height, #volumetric_width, #volumetric_length").on('keydown', function(){
		$("#volumetric_weight").val(calculateWeight());
	});

	$("#volumetric_weight, #actual_weight").on('change, keydown', function(){
		$("#billing_weight").val(billingWeight());
	});

	// $("#party").focus();
	// 
	$(document).on("change", ".sales-order #customer_awb", function(){
		$("#forwarding_awb").val($("#customer_awb").val());
	});
	$(document).on("change", ".sales-order #company", function(){
		$("#attention").val($("#company").val());
	});

}