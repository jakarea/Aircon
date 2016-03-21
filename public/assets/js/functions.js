var cleanInputs = function($id){
  $($id+" select, "+$id+" input").each(function(){
    $(this).val('');      
  });
};

function parseDecimal(val){
	return Num.decimal(val);
}


var Num = {
	decimal:function (val){
		var input = parseFloat(val);
		return isNaN(input) ? 0 : input; 
	},
	int:function (val){
		var input = parseInt(val);
		return isNaN(input) ? 0 : input; 
	}
}