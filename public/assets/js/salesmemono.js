$(function(){
	new BloodhoundTypeahead({
		selector: "#memo_no",
		selectMode: false,
		endpoint: App.baseUrl +"/api/ac/inv-sales/%QUERY",
		value: "memo_no",
		onSelect: function(){			
		}
	})
})