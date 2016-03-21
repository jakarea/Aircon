$(function(){
	new BloodhoundTypeahead({
		selector: "#category_name",
		selectMode: false,
		endpoint: App.baseUrl +"/api/ac/inv-item-brand/%QUERY",
		value: "category_name",
		onSelect: function(el, obj){
			$("#category_id").val(obj.category_id);
		}
	})
})