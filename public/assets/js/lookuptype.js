$(function(){
	new BloodhoundTypeahead({
		selector: "#lookup_type",
		selectMode: false,
		endpoint: App.baseUrl +"/api/ac/look-up-type/%QUERY",
		value: "lookup_type",
		onSelect: function(el, obj){
			$("#lookup_type_id").val(obj.lookup_type_id);
		}
	})
})