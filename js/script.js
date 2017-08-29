$(function (e) {
	$('.filter-select .select-items div').on('click', function() {
		var select = $(this).parents('.filter-select');
		select.find('.selected').html($(this).html());
	});

	$('.icheck-input').iCheck({
	    checkboxClass: 'icheckbox_futurico',
	    radioClass: 'iradio_futurico'
	});

	$('.slider-input').jRange({
	    from: 1,
	    to: 5,
	    step: 1,
	    scale: [1, 2, 3, 4, 5],
	    format: '%s',
	    width: 125,
	    showLabels: true,
	    snap: true
	});
});