$(document).ready(function(){
	$.post("/updateDisplay/0/1/", function(res) {
			$('#viewingProducts').html(res);
	});

	$('.categorySearch').click(function(e){
		e.preventDefault();
		$.post("/updateDisplay/"+$(this).attr('category-id')+"/1", function(res) {
			$('#viewingProducts').html(res);
		});
	});

	$('#adminCategorySelect').select2({
				templateResult: function (data) {    
    // We only really care if there is an element to pull classes from
	    if (!data.element) {
	    	return data.text;
	    }

	    var $element = $(data.element);

	    var $wrapper = $('<span></span>');
	    $wrapper.addClass($element[0].className);

	    $wrapper.text(data.text);

	    return $wrapper;
  	}
	});
})

// the view needs to hold onto the array, and that should never change

// 
	