$(function (e) {
	$('.filter-select .select-items div').on('click', function() {
		var select = $(this).parents('.filter-select');
		select.find('.selected').html($(this).html());
	});

	function hideSliderActiveLabel(val, grid) {
		$.each(grid, function(i, elem) {
	    	if ($(elem).html() == val) {
	    		$(elem).css('visibility', 'hidden');
	    	} else {
	    		$(elem).css('visibility', 'visible');
	    	}
	    });
	}

	$("#raitingSlider").ionRangeSlider({
	    grid: true,
	    from: 1,
	    hide_min_max: true,
	    values: [
			"1", "2", "3", "4", "5"	    	
	    ],
	    onChange: function (data, e) {
	        var val = data.from_value;
	        var grid = $(data.slider).find('.irs-grid-text');

	        hideSliderActiveLabel(val, grid);
	    }
	});

	hideSliderActiveLabel($("#raitingSlider").val(), $("#raitingSlider").parents('.slider-wrapper').find('.irs').find('.irs-grid-text'));

	$("#classSlider").ionRangeSlider({
	    grid: true,
	    from: 1,
	    hide_min_max: true,
	    values: [
			"0", "2", "3.5", "4", "4.5"	    	
	    ],
	    onChange: function (data, e) {
	        var val = data.from_value;
	        var grid = $(data.slider).find('.irs-grid-text');

	        hideSliderActiveLabel(val, grid);
	    }
	});

	hideSliderActiveLabel($("#classSlider").val(), $("#classSlider").parents('.slider-wrapper').find('.irs').find('.irs-grid-text'));

	$("#adultSlider, #adultShortSlider").ionRangeSlider({
	    grid: true,
	    from: 1,
	    hide_min_max: true,
	    values: [
			"1", "2", "3", "4"
	    ],
	    onChange: function (data, e) {
	        var val = data.from_value;
	        var grid = $(data.slider).find('.irs-grid-text');

	        hideSliderActiveLabel(val, grid);
	    }
	});

	hideSliderActiveLabel($("#adultSlider").val(), $("#adultSlider").parents('.slider-wrapper').find('.irs').find('.irs-grid-text'));

	$("#childrenSlider, #childrenShortSlider").ionRangeSlider({
	    grid: true,
	    from: 1,
	    hide_min_max: true,
	    values: [
			"0", "1", "2", "3"
	    ],
	    onChange: function (data, e) {
	        var val = data.from_value;
	        var grid = $(data.slider).find('.irs-grid-text');

	        hideSliderActiveLabel(val, grid);
	    }
	});

	hideSliderActiveLabel($("#childrenSlider").val(), $("#childrenSlider").parents('.slider-wrapper').find('.irs').find('.irs-grid-text'));
	
	$('#pricesSlider').ionRangeSlider({
	    type: "double",
	    min: 0,
	    max: 500000,
	    from: 30000,
	    to: 400000,
	    onChange: function (data, e) {
	        $(data.slider).parents('.range-slider-wrapper').find('.left-label').html(data.from);
	        $(data.slider).parents('.range-slider-wrapper').find('.right-label').html(data.to);
	    }
	});

	$('#nightsSlider').ionRangeSlider({
	    type: "double",
	    min: 1,
	    max: 20,
	    from: 1,
	    to: 20,
	    onChange: function (data, e) {
	    	console.log($(data.slider).parents('.range-slider-wrapper'));
	        $(data.slider).parents('.nights-wrapper').find('.top-labels .from span').html(data.from);
	        $(data.slider).parents('.nights-wrapper').find('.top-labels .to span').html(data.to);
	    }
	});

	$('#nightsShortSlider').ionRangeSlider({
	    type: "double",
	    min: 1,
	    max: 20,
	    from: 1,
	    to: 20,
	    onChange: function (data, e) {
	    	console.log($(data.slider).parents('.range-slider-wrapper'));
	        $(data.slider).parents('.nights-wrapper').find('.top-labels .from span').html(data.from);
	        $(data.slider).parents('.nights-wrapper').find('.top-labels .to span').html(data.to);
	    }
	});

	/* Checkboxes and radio btns */
	$.each($('.icheck-input'), function(i, elem) {
		if ($(elem).attr('checked')) {
			$(elem).parents('.check-group').addClass('checked');
			$(elem).parents('tr').addClass('checked');	
		}
	});
	$('.check-group').on('click', function() {
		$(this).toggleClass('checked');
		$(this).parents('tr').toggleClass('checked');
	});

	$('.icheck-input').iCheck({
	    checkboxClass: 'icheckbox_futurico',
	    radioClass: 'iradio_futurico'
	});

	$('.radio-select-wrapper .check-group').on('click', function() {
		var radios = $(this).parents('.radio-select-wrapper').find('input[type=radio]');

		$.each(radios, function(i, elem) {
			// $(elem).parents('.check-group').removeClass('checked');
			if ($(elem).attr('checked')) {
				$(elem).parents('.check-group').addClass('checked');
			}
		});
	});

	/* Open Tables */
	$('.button-open-table').on('click', function() {
		$(this).parents('.scrollable-table-box').toggleClass('open').find('.scrollable-table-wrapper').toggleClass('open');
	});

	$('.open-collapse-list').on('click', function() {
		$($(this).data('list')).slideToggle();
		$(this).toggleClass('open');
	});

	/* Hide/Show Detailed version */

	function switchDetailedState()
	{
		$('.hide-detailed-version').addClass('open-btn');
		$('.first-choise-row').fadeIn();
		$('.states-panel').fadeIn();
		$('.hide-detailed-version').html('Свернуть расширенную версию');
		$('.hide-detailed-version').addClass('open-btn');
		$('.destination-box').css('background-image', 'url(img/destination-bg.png)');
		$('.for-short-version').fadeOut();
		$('.for-detailed-version').fadeIn();
		$('body').removeClass('short-version');		
	}

	function switchShortState()
	{
		$('.first-choise-row').fadeOut();
		$('.states-panel').fadeOut();
		$('.hide-detailed-version').html('Открыть расширенную версию');
		$('.hide-detailed-version').removeClass('open-btn');
		$('.destination-box').css('background-image', 'url(img/destination-short-bg.png)');
		$('.for-short-version').fadeIn();
		$('.for-detailed-version').fadeOut();
		$('body').addClass('short-version');		
	}

	switchDetailedState();
	// switchShortState();

	$('.hide-detailed-version').on('click', function() {
		if ($(this).hasClass('open-btn')) {
			switchShortState();		
		} else {
			switchDetailedState();		
		}
	});

	/* Calendar */
	$('.calendar-buttons .buttons').daterangepicker(
	{
		"locale": {
	        "format": "MM/DD/YYYY",
	        "separator": " - ",
	        "applyLabel": "Применить",
	        "cancelLabel": "Отмена",
	        "fromLabel": "От",
	        "toLabel": "До",
	        "customRangeLabel": "",
	        "daysOfWeek": [
	            "Пн",
	            "Вт",
	            "Ср",
	            "Чт",
	            "Пт",
	            "Сб",
	            "Вс"
	        ],
	        "monthNames": [
	            "Январь",
	            "Февраль",
	            "Март",
	            "Апрель",
	            "Май",
	            "Июнь",
	            "Июль",
	            "Август",
	            "Сентябрь",
	            "Октябрь",
	            "Ноябрь",
	            "Декабрь"
	        ],
	        "firstDay": 1
	    }
	}, 
	function(start, end, label) {
	    alert("A new date range was chosen: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
	});

	$('.result-type-card .slider').slick({
	  dots: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	});

	$('.result-item .toggle-hidden-menu').on('click', function() {
		$(this).parents('.result-item').find('.hidden-menu').fadeToggle();
		$(this).toggleClass('menu-open');
	});

	$('.result-item .slider a').magnificPopup({
	 	type:'image',
	 	gallery:{
			enabled:true
		}
	});

	$('.group-by .control').on('click', function() {
		$(this).toggleClass('active');
	});

	$('.btn-show-tours').on('click', function() {
		$($(this).data('t-box')).fadeToggle();
		
		if ($($(this).data('t-box')).hasClass('for-cards-view')) {
			$('.tours-table-overlay').fadeToggle();
		}

		$(this).toggleClass('open');
	});

	$('.tours-table-overlay').on('click', function() {
		$('.tours-box').fadeToggle();
		$('.tours-table-overlay').fadeToggle();
		$('.btn-show-tours').removeClass('open');
	});

	$('.hide-last-column').on('click', function() {
		$(this).parents('.tours-table').find('.last-column').fadeOut();
		$(this).parents('.tours-table').addClass('no-last-column')
	});

	$('.filter-additional-params .open-additional-params').on('click', function() {
		$(this).parents('.filter-additional-params').find('.hidden-menu').fadeToggle();
		$(this).toggleClass('open');
	});
});