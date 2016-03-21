$(function(){
	new BloodhoundTypeahead({
		selector: "#payment_supplier_name",
		selectMode: false,
		endpoint: App.baseUrl +"/api/ac/inv-supplier/%QUERY",
		value: "supplier_name",
		onSelect: function($el, obj){
				$("#payment_supplier_id").val(obj.supplier_id);		
		}
	})
})