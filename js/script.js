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
});