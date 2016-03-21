$(function(){
	new BloodhoundTypeahead({
		selector: "#supplier_name",
		selectMode: false,
		endpoint: App.baseUrl +"/api/ac/inv-supplier/%QUERY",
		value: "supplier_name",
		onSelect: function(){
			
		}
	})
})