$(function(){
	new BloodhoundTypeahead({
		selector: "#bank_name",
		selectMode: false,
		endpoint: App.baseUrl +"/api/ac/fm-bank/%QUERY",
		value: "bank_name",
		onSelect: function(el, obj){
			$("#bank_id").val(obj.bank_id);
		}
	})
})