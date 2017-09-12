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

	        $(data.input).parents('.filter-value').find('.val .adults').html(val);

	        hideSliderActiveLabel(val, grid);
	    }
	});

	hideSliderActiveLabel($("#adultSlider").val(), $("#adultSlider").parents('.slider-wrapper').find('.irs').find('.irs-grid-text'));

	$("#childrenSlider, #childrenShortSlider").ionRangeSlider({
	    grid: true,
	    from: 2,
	    hide_min_max: true,
	    values: [
			"0", "1", "2", "3"
	    ],
	    onChange: function (data, e) {
	        var val = data.from_value;
	        var grid = $(data.slider).find('.irs-grid-text');

	        $(data.input).parents('.filter-value').find('.val .children').html(val);

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
	    from: 5,
	    to: 14,
	    onChange: function (data, e) {
	    	// console.log($(data.slider).parents('.nights-wrapper').find('.bottom-labels'));
	        $(data.slider).parents('.nights-wrapper').find('.top-labels .from span').html(data.from);
	        $(data.slider).parents('.nights-wrapper').find('.top-labels .to span').html(data.to);

	        $(data.slider).parents('.nights-wrapper').find('.bottom-labels .min-label span').html(data.from + 1);
	        $(data.slider).parents('.nights-wrapper').find('.bottom-labels .max-label span').html(data.to + 1);

	        $(data.slider).parents('.filter-value').find('.val .from').html(data.from);
	        $(data.slider).parents('.filter-value').find('.val .to').html(data.to);
	    }
	});

	$('#nightsShortSlider').ionRangeSlider({
	    type: "double",
	    min: 1,
	    max: 20,
	    from: 5,
	    to: 14,
	    onChange: function (data, e) {
	    	// console.log($(data.slider).parents('.range-slider-wrapper'));
	        $(data.slider).parents('.nights-wrapper').find('.top-labels .from span').html(data.from);
	        $(data.slider).parents('.nights-wrapper').find('.top-labels .to span').html(data.to);

	        $(data.slider).parents('.nights-wrapper').find('.bottom-labels .min-label span').html(data.from + 1);
	        $(data.slider).parents('.nights-wrapper').find('.bottom-labels .max-label span').html(data.to + 1);
	    }
	});

	/* Checkboxes and radio btns */
	$.each($('.icheck-input'), function(i, elem) {
		if ($(elem).attr('checked')) {
			$(elem).parents('.check-group').addClass('checked');
			$(elem).parents('tr').addClass('checked');	
		}
	});
	
	$('.icheck-input').iCheck({
	    checkboxClass: 'icheckbox_futurico',
	    radioClass: 'iradio_futurico'
	});

	// $('.check-group').on('click', function(e) {
	// 	console.log('HERER');

	// 	if ($(this).find('input[type="checkbox"]').length) {
	// 		return;
	// 	} else {
	// 		var control = $(this).find('input[type="radio"]');
	// 		var radios = $(this).parents('.radio-select-wrapper').find('input[type=radio]');
	// 		$.each(radios, function(i, elem) {
	// 			$(elem).parents('.check-group').removeClass('checked');
	// 			// if ($(elem).attr('checked')) {
	// 			// 	$(elem).parents('.check-group').addClass('checked');
	// 			// }
	// 		});
	// 		$(this).addClass('checked');
	// 	}

	// 	if ($(this).hasClass('open-collapse-list')) {
	// 		if (!$(e.target).hasClass('custom-caret')) {
	// 			$($(this).data('list')).find('.check-group').trigger('click');
	// 		} 
	// 	}
	// });

	$('input[type="checkbox"]').on('ifChanged', function(event) {
		var control = $(this);
		var group = $(this).parents('.check-group');
		if ($(control).is(':checked')) {
			$(group).parents('.scrollable-table tr').addClass('checked');
			$(group).addClass('checked');
		} else {
			$(group).removeClass('checked');
			$(group).parents('.scrollable-table tr').removeClass('checked');
		}

		if ($(group).hasClass('open-collapse-list')) {
			if (!$(e.target).hasClass('custom-caret')) {
				$($(group).data('list')).find('.check-group').trigger('click');
			} 
		}
	});

	$('input[type="radio"]').on('ifChanged', function(event) {
		var control = $(this);
		var radios = $(this).parents('.radio-select-wrapper').find('input[type=radio]');
		$.each(radios, function(i, elem) {
			$(elem).parents('.check-group').removeClass('checked');
			// if ($(elem).attr('checked')) {
			// 	$(elem).parents('.check-group').addClass('checked');
			// }
		});
		$(this).parents('.check-group').addClass('checked');
	});

	// $('.radio-select-wrapper .check-group').on('click', function() {
	// 	var radios = $(this).parents('.radio-select-wrapper').find('input[type=radio]');

	// 	$.each(radios, function(i, elem) {
	// 		$(elem).parents('.check-group').removeClass('checked');
	// 		// if ($(elem).attr('checked')) {
	// 		// 	$(elem).parents('.check-group').addClass('checked');
	// 		// }
	// 	});

	// 	$.each(radios, function(i, elem) {
	// 		$(elem).parents('.check-group').removeClass('checked');
	// 		if ($(elem).attr('checked')) {
	// 			$(elem).parents('.check-group').addClass('checked');
	// 		}
	// 	});
	// });

	// $('.radio-select-wrapper .check-group input[type=radio]').change(function() {
	// 	console.log('HERER');
	// 	if ($(this).is(':checked')) {
	// 		$(elem).parents('.check-group').addClass('checked');
	// 	}
	// });

	/* Open Tables */
	$('.button-open-table').on('click', function() {
		$(this).parents('.scrollable-table-box').toggleClass('open').find('.scrollable-table-wrapper').toggleClass('open');
		$(this).toggleClass('open');
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
	        "format": "DD.MM.YY",
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
		$(this.element).parents('.date-block').find('.from').html(start.format('DD.MM.YYYY'));
		$(this.element).parents('.date-block').find('.to').html(end.format('DD.MM.YYYY'));
		$(this.element).parents('.filter-value').find('.val .from').html(start.format('DD.MM.YYYY'));
		$(this.element).parents('.filter-value').find('.val .to').html(end.format('DD.MM.YYYY'));
		$(this.element).parents('.filter-value').removeClass('open');
		// console.log(this.element);
	    // alert("A new date range was chosen: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
	});

	$('.result-type-card .slider').slick({
	  dots: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	  responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 2,
		      }
	    	},
	    	{
		      breakpoint: 640,
		      settings: {
		        slidesToShow: 1,
		      }
	    	}
	    ]
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

		if ($(this).hasClass('active')) {
			$(this).parents('.group-by').find('.no-group-by').removeClass('active');
			$(this).parents('.group-by').find('.group-by-type').addClass('active');

			$(this).parents('.tours-box-content').find('.body').css('display', 'none');
			$(this).parents('.tours-box-content').find('.grouped').css('display', 'block');
		} else {
			$(this).parents('.group-by').find('.no-group-by').addClass('active');
			$(this).parents('.group-by').find('.group-by-type').removeClass('active');

			$(this).parents('.tours-box-content').find('.body').css('display', 'block');
			$(this).parents('.tours-box-content').find('.grouped').css('display', 'none');
		}
	});

	$('.btn-show-tours').on('click', function() {
		$($(this).data('t-box')).fadeToggle();
		
		if ($($(this).data('t-box')).hasClass('for-cards-view') || window.innerWidth <= 1000) {
			$('.tours-table-overlay').fadeToggle();
		}

		$(this).toggleClass('open');
	});

	$('.tours-table-overlay').on('click', function() {
		$('.tours-box').fadeToggle();
		$('.tours-table-overlay').fadeToggle();
		$('.btn-show-tours').removeClass('open');
	});

	$('.tours-box-content .close-me').on('click', function() {
		$('.tours-box').fadeToggle();
		$('.tours-table-overlay').fadeOut();
		$('.btn-show-tours').removeClass('open');
	});

	$('.hide-last-column').on('click', function() {
		$(this).parents('.tours-table').find('.last-column').css('display', 'none');
		$(this).parents('.tours-table').addClass('no-last-column');
	});

	$('.open-last-column').on('click', function() {
		$(this).parents('.tours-table').find('.last-column').css('display', 'table-cell');
		$(this).parents('.tours-table').removeClass('no-last-column');
	});

	$('.filter-additional-params .open-additional-params').on('click', function() {
		$(this).parents('.filter-additional-params').find('.hidden-menu').fadeToggle();
		$(this).toggleClass('open');

		if ($(this).hasClass('open')) {
			$(this).html('Свернуть');
		} else {
			$(this).html('Развернуть');
		}
	});

	$('.filter-additional-params .edit-btn').on('click', function() {
		$(this).parents('.item').find('.select-items-wrapper').fadeToggle();
		$(this).toggleClass('open');
	});


	/* Tours cards manager */
	function manageTourCards() {
		if (window.innerWidth <= 1000) {
			$.each($('[data-type="panel"]'), function(i, elem) {
				$(elem).removeClass('result-type-panel');
			});
			$.each($('[data-type="short-panel"]'), function(i, elem) {
				$(elem).removeClass('result-type-panel').removeClass('short-panel');
			});
		} else {
			$.each($('[data-type="panel"]'), function(i, elem) {
				$(elem).addClass('result-type-panel');
			});
			$.each($('[data-type="short-panel"]'), function(i, elem) {
				$(elem).addClass('result-type-panel').addClass('short-panel');
			});
		}
	}

	manageTourCards();

	$(window).resize(function() {
		manageTourCards();
	});

	$('.search-box input').on('focus', function() {
		$(this).parents('.search-box').addClass('focused');
		$(this).attr('placeholder', '');
	});

	$('.search-box input').on('focusout', function() {
		$(this).parents('.search-box').removeClass('focused');
		$(this).attr('placeholder', 'Быстрый поиск по отелям');
	});

	$('.filter-value').on('click', function(e) {
		if ($(e.target).parents('.choice-block').length || 
			$(e.target).hasClass('choice-block')) {
			return;
		}

		$(this).find('.hidden-change').fadeIn();
		$(this).toggleClass('open');
	});

	setTimeout(function() {
		$('.main-loader').fadeOut();
	}, 1000);
});


// $(document).ready(function() {
// 	$.each($('.open-collapse-list'), function(i, elem) {
// 		if ($(elem).hasClass('open')) {
// 			console.log($($(this).data('list')).slideToggle());
// 		}
// 	});
// });