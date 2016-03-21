$(function(){
	new BloodhoundTypeahead({
		selector: "#supplier_receive_name",
		selectMode: false,
		endpoint: App.baseUrl +"/api/ac/inv-supplier/%QUERY",
		value: "supplier_name",
		onSelect: function($el, obj){
			$("#supplier_id").val(obj.supplier_id);
		}
	})
})