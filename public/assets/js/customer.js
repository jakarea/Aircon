$(function(){
	new BloodhoundTypeahead({
		selector: "#customer_name",
		selectMode: false,
		endpoint: App.baseUrl +"/api/ac/inv-customer/%QUERY",
		value: "customer_name",
		onSelect: function(el, obj){
			$("#customer_id").val(obj.customer_id);
		}
	})
})