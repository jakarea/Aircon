FancyUI.datepicker = function(){
	options = {
      format: 'dd-mm-yyyy',
      autoclose: true
    };

    //date picker initialization
    $('input[data-date]').datepicker(options);
    $(document).on('click', '.datepicker-days .day', function(e){
    	// console.log(e);
    	//TODO: fix this
    	// $("#billing_month").focus()
    })
    //initialize datepicker with default date
    // $('.create-form input[data-date]').datepicker('update', moment().format('DD-MM-YYYY'));
}