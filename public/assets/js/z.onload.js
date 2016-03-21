$(function(){
	var spinner = new Spinner().spin();
	$("#loader").html(spinner.el);

	jQuery.ajaxSetup({
	  beforeSend: function() {
	     $('#loader').show();
	  },
	  complete: function(){
	     $('#loader').hide();
	  },
	  success: function() {}
	});
	
	FancyUI.refresh();
})