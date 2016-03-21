$(function(){
	new BloodhoundTypeahead({
		selector: "#account_no",
		selectMode: false,
		endpoint: App.baseUrl +"/api/ac/fm-bank-account/%QUERY",
		value: "account_no",
		onSelect: function(){
			
		}
	})
})