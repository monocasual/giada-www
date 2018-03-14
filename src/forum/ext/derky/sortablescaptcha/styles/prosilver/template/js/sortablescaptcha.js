var sortablescaptcha = {
	
	init: function() {
		
		// JavaScript is enabled, so show the normal version
		$('#enable_js').css('display', 'block');

		// Make divs sortable
		$("#sortable1, #sortable2").sortable({
			connectWith: '.sortables_captcha_list',
			items: 'li',
			forcePlaceholderSize: true,
			placeholder: 'bg3',
			tolerance: 'pointer',
		}).disableSelection();

		$("#sortable1, #sortable2").bind('sortreceive', function(event, ui) {
			
			// If the left or right column receive an item, put the child nodes in an array
			var arrSortableListItemsLeft = $("#sortable1").children();
			var arrSortableListItemsRight = $("#sortable2").children();

			// And create hidden input fields
			sortablescaptcha.createData(arrSortableListItemsLeft, 'sortables_options_left', '#sortables_options_left');
			sortablescaptcha.createData(arrSortableListItemsRight, 'sortables_options_right', '#sortables_options_right');
		});
		
		// Init the minimal height of the columns
		this.refreshColumnsHeight();
	},
	
	createData: function(listnameobject, column, resultid)
	{
		// Let's delete all the current input type="hidden" fields, this is easier to find out which were changed
		var data = document.getElementById(column);

		if ( data.hasChildNodes() )	{
			while ( data.childNodes.length >= 1 ) {
				data.removeChild( data.firstChild );       
			}
		}
		
		// Make sure there's enough room in every column to drag more answers
		this.refreshColumnsHeight();

		// Run through all childs
		$.each(listnameobject, function(){

			// We only want the ID of the answer
			var answer = $(this).attr("id");
			answer = answer.replace(/answer_/g, '');

			// And add a hidden input field
			inputbox = document.createElement("input"); 
			inputbox.type = 'hidden';
			inputbox.name = column + '[]';
			inputbox.value = answer;
			data.appendChild(inputbox);
		});
	},
	
	// Make sorting intensions clearer
	// This function changes the height of the boxes to amount of answers + 1. This is done to indicate the list is not "full".
	refreshColumnsHeight: function() {
		
		// Get the height and margin of an answer
		var answer_inner_height = $(".ui-sortable-handle").outerHeight();
		var answer_vertical_margin = (($(".ui-sortable-handle").outerHeight(true) - $(".ui-sortable-handle").outerHeight(false)) / 2);
		
		// Add the margin to the inner_height to get the total height
		var answer_total_height = (parseInt(answer_inner_height) + parseInt(answer_vertical_margin));
		
		// Update the min-height of each column based on the current amount of answers in there
		$.each(["#sortable1", "#sortable2"], function(index, column_id) {
		
			// Count the total amount of answers in this column
			var answer_count = $(column_id + " .ui-sortable-handle").length;
	
			// Add room for 1 extra answer and calculate the new min-height
			var min_height = (parseInt(answer_count) + 1) * (parseInt(answer_total_height));
			
			// The absolute minimum of the droppable area should not be under 100px
			if (!min_height || min_height < 100) {
				min_height = 100;
			}
			
			// Update the min-height of the column
			$(column_id).css('min-height', min_height + 'px');
		});
	}
}

$(function() {
	sortablescaptcha.init();
});