$(function(){
	new BloodhoundTypeahead({
		selector: "#item_name",
		selectMode: false,
		endpoint: App.baseUrl +"/api/ac/inv-item/%QUERY",
		value: "item_name",
		onSelect: function(el, obj){
			$("#item_id").val(obj.item_id);
		}
	})
})