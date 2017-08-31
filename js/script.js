$(function (e) {
	$('.filter-select .select-items div').on('click', function() {
		var select = $(this).parents('.filter-select');
		select.find('.selected').html($(this).html());
	});

	$('.icheck-input').iCheck({
	    checkboxClass: 'icheckbox_futurico',
	    radioClass: 'iradio_futurico'
	});

	$("#raitingSlider").ionRangeSlider({
	    grid: true,
	    from: 1,
	    hide_min_max: true,
	    values: [
			"1", "2", "3", "4", "5"	    	
	    ]
	});

	$("#classSlider").ionRangeSlider({
	    grid: true,
	    from: 1,
	    hide_min_max: true,
	    values: [
			"0", "2", "3.5", "4", "4.5"	    	
	    ]
	});

	$("#adultSlider").ionRangeSlider({
	    grid: true,
	    from: 1,
	    hide_min_max: true,
	    values: [
			"1", "2", "3", "4"
	    ]
	});

	$("#childrenSlider").ionRangeSlider({
	    grid: true,
	    from: 1,
	    hide_min_max: true,
	    values: [
			"0", "1", "2", "3"
	    ]
	});
	
	$('#pricesSlider').ionRangeSlider({
	    type: "double",
	    min: 0,
	    max: 500000,
	    from: 30000,
	    to: 400000,
	});

	$('#nightsSlider').ionRangeSlider({
	    type: "double",
	    min: 1,
	    max: 20,
	    from: 2,
	    to: 16,
	});

	
});