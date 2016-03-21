$(function(){
	new BloodhoundTypeahead({
		selector: "#group_name",
		selectMode: false,
		endpoint: App.baseUrl +"/api/ac/inv-item-group/%QUERY",
		value: "group_name",
		onSelect: function(el, obj){
			$("#group_id").val(obj.item_group_id);
		}
	})
})