$(function(){
	new BloodhoundTypeahead({
		selector: "#lookup_value",
		selectMode: false,
		endpoint: App.baseUrl +"/api/ac/look-up-value/%QUERY",
		value: "lookup_value",
		onSelect: function(el, obj){
			$("#lookup_value_id").val(obj.lookup_value_id);
		}
	})
})