FancyUI.autocomplete = function(){

	/**Sales Order Form**/
	new BloodhoundTypeahead({
		selector: '#customer', 
		endpoint: App.baseUrl+'/api/ac/inv-customer/%QUERY', 
		value: 'customer_name',
		selectMode: true,
		onSelect: function($el, obj){
			$("#customer_id").val(obj.customer_id);

			var url = App.baseUrl+'/api/ac/customer-balance/'+obj.customer_id;
			console.log(url);

			$.get(url, function(sales){
				var template = _.template("<option data-customer-id='<%=customer_id%>' value='<%=memo_no%>'><%=memo_no%></option>");
				var options = [];
				options.push("<option>Select</option>");
				for(i=0; i<sales.length; i++){
					options.push(template(sales[i]));
				}

				$("#sales_memo_no").html(options.concat(""));
			});
		},
		emptySelector: "#customer_id"
	});

	new BloodhoundTypeahead({
		selector: '.bill-receive #service_provider', 
		endpoint: App.baseUrl+'/api/ac/service-provider/%QUERY', 
		value: 'service_provider_name',
		selectMode: true,
		onSelect: function($el, obj){
			$("#service_provider_id").val(obj.service_provider_id);

			var url = App.baseUrl+'/api/ac/service-provider-balance/'+obj.service_provider_id;
			$.get(url, function(balance){
				$("#dues_amount").val(balance[0].previous_payable_amount);
			});
		},
		emptySelector: "#service_provider_id"
	});
	new BloodhoundTypeahead({
		selector: '.sales-order #service_provider', 
		endpoint: App.baseUrl+'/api/ac/service-provider/%QUERY', 
		value: 'service_provider_name',
		selectMode: true,
		onSelect: function($el, obj){
			$("#service_provider_id").val(obj.service_provider_id);
		},
		emptySelector: "#service_provider_id"
	});

	new BloodhoundTypeahead({
		selector: '.payment-info #service_provider', 
		endpoint: App.baseUrl+'/api/ac/service-provider/%QUERY', 
		value: 'service_provider_name',
		selectMode: true,
		onSelect: function($el, obj){
			$("#service_provider_id").val(obj.service_provider_id);

			var url = App.baseUrl+'/api/ac/service-provider-invoices/'+obj.service_provider_id;
			$.get(url, function(invoices){
				var template = _.template("<option value='<%=invoice_no%>'><%=invoice_no%></option>");
				var options = [];
				options.push("<option>Select</option>");
				for(i=0; i<invoices.length; i++){
					options.push(template(invoices[i]));
				}

				$("#service_invoice_no").attr('data-service-provider-id', obj.service_provider_id);
				$("#service_invoice_no").html(options.join(""));
			});
		},
		emptySelector: "#service_provider_id"
	});

	new BloodhoundTypeahead({
		selector: '#forwarding_provider', 
		endpoint: App.baseUrl+'/api/ac/service-provider/%QUERY', 
		value: 'service_provider_name',
		selectMode: true,
		onSelect: function($el, obj){
			$("#forwarding_service_provider_id").val(obj.service_provider_id);
		},
		emptySelector: "#forwarding_service_provider_id"
	});

	new BloodhoundTypeahead({
		selector: '#country', 
		endpoint: App.baseUrl+'/api/ac/country/%QUERY', 
		value: 'country_name',
		selectMode: true,
		onSelect: function($el, obj){
			$("#country_id").val(obj.country_id);
		},
		emptySelector: "#country_id"
	});

	new BloodhoundTypeahead({
		selector: '#bank', 
		endpoint: App.baseUrl+'/api/ac/bank/%QUERY', 
		value: 'bank_name',
		selectMode: true,
		onSelect: function($el, obj){
			$("#bank_id").val(obj.bank_id);
		},
		emptySelector: "#bank_id"
	});

	new BloodhoundTypeahead({
		selector: 'input[name=supplier]', 
		endpoint: App.baseUrl+'/api/ac/inv-supplier/%QUERY', 
		value: 'supplier_name',
		selectMode: true,
		onSelect: function($el, obj){
			$("#supplier_id").val(obj.supplier_id);
		},
		emptySelector: "#supplier_id"
	});

	new BloodhoundTypeahead({
		selector: '#received_by_name', 
		endpoint: App.baseUrl+'/api/ac/hr-employee/%QUERY', 
		value: 'employee_name',
		selectMode: true,
		onSelect: function($el, obj){
			$("#received_by").val(obj.employee_id);
		},
		emptySelector: "#received_by"
	});


	new BloodhoundTypeahead({
		selector: '#marketing_employee', 
		endpoint: App.baseUrl+'/api/ac/hr-employee/%QUERY', 
		value: 'employee_name',
		selectMode: true,
		onSelect: function($el, obj){
			$("#marketing_employee_id").val(obj.employee_id);
		},
		emptySelector: "#marketing_employee_id"
	});

	$("#service_invoice_no").on('change', function(){
		invoiceChanged();
	});



	/*search*/

	new BloodhoundTypeahead({
		selector: '.box-tools #service_provider', 
		endpoint: App.baseUrl+'/api/ac/service-provider/%QUERY', 
		value: 'service_provider_name',
		selectMode: true,
		onSelect: function($el, obj){
			$("#service_provider_id").val(obj.service_provider_id);
		},
		emptySelector: "#service_provider_id"
	});

}

function invoiceChanged(){
		var invoice_no = $("#service_invoice_no").val()
			service_provider_id = $("#service_invoice_no").attr('data-service-provider-id');

		var url = App.baseUrl+'/api/ac/service-provider-balance-by-invoice/'+service_provider_id+"/"+invoice_no;
		
		$.get(url, function(obj){
			console.log(obj);
			
			$("#service_invoice_amount").val(obj[0].invoice_amount);
			$("#already_paid").val(obj[0].already_paid);
			$("#payable_amount").val(obj[0].payable_amount);

			calculatePaymentInvoicePayable();
		});
}

function salesMemoChanged(){
	var memo_no = $("#sales_memo_no").val(),
		customer_id = $("#sales_memo_no option:selected").attr("data-customer-id");
	var url = App.baseUrl + '/api/ac/sales-balance-by-memo-no/'+customer_id+"/"+memo_no;
	console.log(url);
	
	$.get(url, function(res){
		$("#balance_amount").val(res[0].balance_amount);
		$("#collected_amount").val(res[0].collected_amount);
		$("#sales_amount").val(res[0].sales_amount);
	});
}

$(document).on('change', '#sales_memo_no', salesMemoChanged);