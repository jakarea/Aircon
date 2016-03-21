FancyUI.employeeFormInitialize = function(){
	//probationary period automation
	$('#probationary_period, #joining_date').on('keyup', function(){
		var joiningDate = $("#joining_date").val();
		var probationaryPeriod = $("#probationary_period").val();
		var confirmationDate = moment(joiningDate).add(probationaryPeriod, "month").format("DD-MM-YYYY");

		console.log("joiningDate: "+joiningDate);
		console.log("probationaryPeriod: "+probationaryPeriod);
		console.log("confirmationDate: "+confirmationDate);
		
		$("#confirmation_date").val(confirmationDate);
	});


	$("#present_status").on('change', function(){
		var active = parseInt($(this).val());
		
		if(active) {
			$(".hide-on-present-status").removeClass('inactive');
		} else {
			$(".hide-on-present-status").addClass('inactive');
		}
	});
}