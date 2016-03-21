$(function(){
	$("#purchase_type").on("change", function(){
		var $container, url, template;
			supplier_id = $("#supplier_id").val(), 
			purchase_type = $(this).val(),
			payload = {'supplier_id': supplier_id, 'purchase_type': purchase_type };
		
		cleanInputs(".clean-inputs");
		
		var generateHTML = function(memo_nos, $container,template){
			memo_nos.unshift({Memo_no:"Select One"});
			
			var options = _.map(memo_nos, function(memo_no){
				return template(memo_no);
			});

			var html = options.join("");

			$container.html(html);
		}

		if(purchase_type === "LOCAL" ){
			// memo_nos = [{memo_no: 12}, {memo_no: 13}];
			$container = $("#purchase_memo_no");
			//TODO: create api url
			url = App.baseUrl + "/api/ac/supplier-memo-no/"+supplier_id+"/"+"LOCAL";
			template = _.template("<option value=<%=Memo_no%>><%=Memo_no%></option>");
		}

		if(purchase_type === "LC" ){
			template = _.template("<option value=<%=Memo_no%>><%=Memo_no%></option>");
			// memo_nos = [{memo_no: 112}, {memo_no: 113}];
			$container = $("#lc_no");
			//TODO: create api url
			url = App.baseUrl + "/api/ac/supplier-memo-no/"+supplier_id+"/"+"LC";
		}

		$.ajax({
			url: url,
			method: "get",
			data: payload,
			success: function(res){
				generateHTML(res, $container, template);
			}
		});

	});


	$("#purchase_memo_no").on("change", function(){
		var supplier_id = $("#supplier_id").val(); 
		 var memo_no = $(this).val();
		console.log(memo_no);
		 var memo_no = $(this).val();
		 $.ajax({
		 	url:App.baseUrl + "/api/ac/supplier-payment-info/"+supplier_id+"/"+memo_no,
		 	method: "get",
		 	//data:{'supplier_id':supplier_id,'memo_no':memo_no},
		 	success: function(res){

		 		console.log(res[0]);
		 		$('#total_balance').val(res[0].Total_Bill);
		 		$('#already_paid').val(res[0].Paid_amount);
		 		$('#payable_amount').val(res[0].Dues_amount);

		 	}

		 });		 		
	});

	$("#lc_no").on("change", function(){
		var supplier_id = $("#supplier_id").val(); 
		 var memo_no = $(this).val();
		console.log(memo_no);
		 var memo_no = $(this).val();
		 $.ajax({
		 	url:App.baseUrl + "/api/ac/supplier-payment-info/"+supplier_id+"/"+memo_no,
		 	method: "get",
		 	//data:{'supplier_id':supplier_id,'memo_no':memo_no},
		 	success: function(res){

		 		console.log(res[0]);
		 		$('#total_balance').val(res[0].Total_Bill);
		 		$('#already_paid').val(res[0].Paid_amount);
		 		$('#payable_amount').val(res[0].Dues_amount);

		 	}

		 });		 	
	});
});