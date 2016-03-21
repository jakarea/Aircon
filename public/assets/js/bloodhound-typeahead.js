var BloodhoundTypeahead	= function(options){
	var selector = options.selector, 
		endpoint = options.endpoint, 
		keyToBeDisplayed = options.value, 
		onSelectedCallBack = options.onSelect  || function(){}, 
		onCloseCallBack = options.onClose || function(){}, 
		emptySelector = options.emptySelector, 
		selectMode = options.selectMode,
		$el, 
		engine, 
		template, 
		selectModeRemoveValue, 
		lastVal;
	
	template = '<p><strong>{{'+keyToBeDisplayed+'}}</strong></p>';
	$el = $(selector);

	//if el not found return
	if(!$el.length) return;
	$el.addClass('first-load');

	engine = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace(keyToBeDisplayed),
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		remote: endpoint,
	});

	engine.initialize();



	$el.typeahead({
		hint: true,
		highlight: true,
	}, {
		name: 'uid',
		displayKey: keyToBeDisplayed,
		source: engine.ttAdapter(),
		// templates: {
		// 	empty: [
		// 		'<div class="empty-message">',
		// 		'no records found',
		// 		'</div>'
		// 	].join('\n'),
		// 	suggestion: Handlebars.compile(template)
		// }
	});


	/**
	THIS IS LITTLE CRITICAL TO EXPLAIN
	**/
	var lastVal = '';
	var selectModeRemoveValue = function(){
		var currentVal = $el.typeahead('val');

		if(lastVal !== currentVal){
			$el.typeahead('val', '');
		}
	}

	//after its changed
	$el.on("typeahead:selected", function(event, suggestion, dataset){
		$el.removeClass('first-load');

		lastVal = $el.typeahead('val');
		onSelectedCallBack($el, suggestion, event);
	});

	//after its closed
	$el.on("typeahead:closed", function(){
		if(selectMode && !$el.hasClass('first-load')) {
			selectModeRemoveValue();
		}

		if(!$el.val() && emptySelector) $(emptySelector).val("");

		onCloseCallBack();
	});
};

/** USAGE **/

// new BloodhoundTypeahead({
// 	selector: '#one', 
// 	endpoint: 'http://localhost:8888/states.json?%QUERY', 
// 	value: 'name',
// 	selectMode: true,
// 	onSelect: function($el, obj){

// 	},
// });