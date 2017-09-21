
$(function (e) {
	$(document).ready(function(){
		$('.tours-box .about-callery').magnificPopup({
			delegate: 'a',
		 	type:'image',
		 	gallery:{
				enabled:true
			}
		});

		// .magnificPopup({delegate: 'a', type: 'image' });
	});

	$(window).scroll(function(e) {
		if (window.innerWidth < 500) {
			if ($('.daterangepicker').css('display') == 'block') {
				$('.filter-value-date').trigger('click');
			}
		}

		if ($(this).scrollTop() >= 235) {
			if (!$('.filters-panel-wrapper').hasClass('fixed-header-filters')) {
				$('.inner-page-wrapper').css('margin-bottom', $('.filters-panel-wrapper').height() + 'px');
				$('.filters-panel-wrapper').addClass('fixed-header-filters');
			}
		} else {
			$('.filters-panel-wrapper').removeClass('fixed-header-filters');
			$('.inner-page-wrapper').css('margin-bottom', '0px');
		}
	});

	function numStep() {
		var e = this;
		e.el = null;
		e.up = function() {
			e.set(e.get(this),true);
		};
		e.down = function() {
			e.set(e.get(this));
		}
		e.get = function(_this) {
			e.el = $(_this).closest('.num-step').find('input');
			return +e.el.val()||0;
		}
		e.set = function(num,up) {
			if (!e.el) return;
			if (up) num++;
			else num--;
			if (num<1) num=1;
			if (num>11) num=11;
			e.el.val(num);
		}
		$('.num-step .num-up').on('click', e.up);
		$('.num-step .num-down').on('click', e.down);
	}
	numStep();

	$('.tours-table .mobile-short-view').on('click', function() {
		$(this).parents('.tr').find('.mobile-detailed-view').fadeIn();
	});

	$('.tours-table .mobile-detailed-view .close-it').on('click', function() {
		$(this).parents('.mobile-detailed-view').fadeOut();
	});

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

	        $(data.slider).parents('.filter-value').find('.age-change-panel .numeric').val('');

	        if (val == 0) {
	        	$(data.input).parents('.filter-value').find('.val .word').html(' детей');
	        	$(data.input).parents('.filter-value').find('.val .child-ages').css('visibility', 'hidden');
	        } else if (val == 1) {
	        	$(data.input).parents('.filter-value').find('.val .word').html(' ребенок');
	        	$(data.input).parents('.filter-value').find('.val .child-ages').css('visibility', 'visible');
	        } else {
	        	$(data.input).parents('.filter-value').find('.val .word').html(' ребенка');
	        	$(data.input).parents('.filter-value').find('.val .child-ages').css('visibility', 'visible');
	        }

	        hideSliderActiveLabel(val, grid);

	        var label = $(data.slider).parents('.slider-wrapper').find('.irs-slider');
	        var agePanel = $(data.slider).parents('.slider-wrapper').find('.age-change-panel');
	        $(agePanel).css('left', ($(label).position().left - 137) + 'px');
	        $(agePanel).data('current', val);

	        if (val) {
		        $(agePanel).fadeIn();
	        } else {
	        	$(agePanel).fadeOut();
	        }

	        var count = 1;

	        $.each($(agePanel).find('.input'), function(i, elem) {
	        	if (count <= val) {
	        		$(elem).css('display', 'block');
	        	} else {
	        		$(elem).css('display', 'none');
	        	}

	        	count++;
	        });

	        $(data.slider).parents('.filter-value').find('.child-ages').css('display', 'none');

	        // $(data.slider).parents('.filter-value').find('.child-ages').css('visibility', 'hidden');
	    }
	});

	function manageFilteValueChildAges(elem) {
		// Change ages
        if ($(elem).parents('.filter-value').length != 0) {
			var ages = $(elem).parents('.filter-value').find('.age-change-panel .numeric');
			var agesSrt = '';

			$.each(ages, function(i, age) {
				if ($(age).val()) {
					agesSrt += $(age).val() + ', ';
				}
			});


			agesSrt = agesSrt.substr(0, (agesSrt.length - 2));

			if (agesSrt == '1') {
				agesSrt += ' год';
			} else if (agesSrt == '2' || agesSrt == '3' ||agesSrt == '4') {
				agesSrt += ' года';
			} else {
				agesSrt += ' лет';
			}

			var replaceAt = function(index, replacement, str) {
			    return str.substr(0, index) + replacement + str.substr(index + replacement.length - 2);
			}

			if ((agesSrt.match(/,/g) || []).length < 2) {
				if (agesSrt.indexOf(',') != -1) {
					console.log(agesSrt.indexOf(','));
					agesSrt = replaceAt(agesSrt.indexOf(','), ' и ', agesSrt);
				}
			}

			if (agesSrt != ' лет') {
				$(elem).parents('.filter-value').find('.child-ages').html('(' + agesSrt + ')');
			}

			$(elem).parents('.filter-value').find('.child-ages').css('display', 'inline-block');
		}
	}

	$(".numeric").numeric();

	$(".age-change-panel input").change(function (e) {
		if ($(this).val() > 11 || $(this).val() < 0) {
			$(this).val(0);
		}
	});
 //    $('body').on('click', function(e) {
 //    	if (!$(e.target).parents('.children-slider-wrapper').length) {
 //    		return;
 //    	}
 //    	// console.log($(e.target).parents('.slider-wrapper').length);
 //    	if (!$(e.target).hasClass('irs-single')) {
 //    		// console.log('HERERE');
 //    		if ($(e.target).parents('.age-change-panel').length == 0) {
	// 			$(this).find('.age-change-panel').fadeOut();
 //    		}
 //    	}
	// });
	$(window).on("orientationchange", function(event) {
		$('.age-change-panel').fadeOut();
	});

	$(window).resize(function(){
		$('.age-change-panel').css('display', 'none');
	});

	$('.age-change-panel .save').on('click', function() {
		$(this).parents('.age-change-panel').fadeOut();
		manageFilteValueChildAges(this);
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

	$('.check-group').on('click', function(e) {
		if ($(this).hasClass('open-collapse-list')) {
			if (!$(e.target).hasClass('custom-caret')) {
				$($(this).data('list')).find('input[type="checkbox"]').iCheck('toggle');;
			} 
		}
	});

	$('.hotel-horisontal-table .scrollable-table tr').on('click', function() {
		// console.log($(this).find('input[type="checkbox"]'));
		$(this).find('input[type="checkbox"]').iCheck('toggle');
	});

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
	$('.calendar-buttons .buttons, .filters-panel-wrapper .filter-value-date').daterangepicker(
	{
		// "startDate": '-3y'
		"showDropdowns": true,

		"locale": {
	        "format": "DD.MM.YY",
	        "separator": " - ",
	        "applyLabel": "Применить",
	        "cancelLabel": "Отмена",
	        "fromLabel": "От",
	        "toLabel": "До",
	        "customRangeLabel": "",
	        "daysOfWeek": [
	            "Вс",
	            "Пн",
	            "Вт",
	            "Ср",
	            "Чт",
	            "Пт",
	            "Сб",
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
	}).on('show.daterangepicker', function() {
		// var startMonth = $('.daterangepicker .calendar.left .month').html();
		// var endMonth = $('.daterangepicker .calendar.right .month').html();
		// $('.daterangepicker .calendar.left thead').append('<tr><th colspan="7" class="cusom-month">' + startMonth + '<th></tr>');
		// $('.daterangepicker .calendar.right thead').append('<tr><th colspan="7" class="cusom-month">' + endMonth + '<th></tr>');
		$.each($('.daterangepicker .calendar tr'), function(i, elem) {
			if ($(elem).find('.off').length == 7) {
				$(elem).remove();
			}
		});

		if ($('.daterangepicker .title').length) {
			return;
		}

		$('.daterangepicker').bind("DOMSubtreeModified",function(){
			$.each($('.daterangepicker .calendar tr'), function(i, elem) {
				if ($(elem).find('.off').length == 7) {
					$(elem).remove();
				}
			});
		});

		$('.daterangepicker').prepend('<div class="title">Выберите диапазон дат вылета</div>');
		$('.daterangepicker').prepend('<div class="months"><div class="months-list scroll2">'
			+ '<div data-year="2017" class="mounth-group"><div data-start="9">Сентябрь</div>'
			+ '<div data-end="10">Октябрь</div></div>'

			+ '<div data-year="2017" class="mounth-group"><div data-start="11">Ноябрь</div>'
			+ '<div data-end="12">Декабрь</div></div>'

			+ '<div data-year="2018" class="mounth-group"><div data-start="1">Январь</div>'
			+ '<div data-end="2">Февраль</div></div>'

			+ '<div data-year="2018" class="mounth-group"><div data-start="3">Март</div>'
			+ '<div data-end="4">Апрель</div></div>'

			+ '<div data-year="2018" class="mounth-group"><div data-start="5">Май</div>'
			+ '<div data-end="6">Июнь</div></div>'

			+ '<div data-year="2018" class="mounth-group"><div data-start="7">Июль</div>'
			+ '<div data-end="8">Август</div></div>'

			+ '</div></div>');

		$('.daterangepicker .mounth-group').on('click', function() {
			// console.log('start:', $(this).find('[data-start]').data('start'), $(this).data('year'));
			// console.log('end:', $(this).find('[data-end]').data('end'), $(this).data('year'));

			var start = $(this).find('[data-start]').data('start') - 1;
			var end = $(this).find('[data-end]').data('end') - 1;

			start = start == -1 ? 0 : start;
			end = end == -1 ? 0 : end;

			$('.daterangepicker .yearselect').val($(this).data('year')).change();
			console.log(start , end);

			$('.daterangepicker .left .monthselect').val(start).change();
			$('.daterangepicker .right .monthselect').val(end).change();


		});


	});


	$('.result-type-card .slider').slick({
	  dots: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	  responsive: [
		    {
		      breakpoint: 650,
		      settings: {
		        slidesToShow: 2,
		      }
	    	},
	    	{
		      breakpoint: 600,
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

	$('.btn-show-tours[data-t-box], .open-about, .open-map').on('click', function() {

		$($(this).data('t-box')).fadeToggle('slow');
		// $($(this).data('t-box')).slideToggle('slow');

		var th = this;

		// console.log($(th).data('t-box'));
		$.each($(this).parents('div[class^="col-"]').find('[data-t-box]'), function(i, elem) {
			if ($(elem).data('t-box') == $(th).data('t-box')) {
				return;
			}

			$($(elem).data('t-box')).css('display', 'none');
			$(elem).removeClass('open');
			// console.log($(elem).data('t-box'));
		});
		// $(this).parents('div[class^="col-"]').find('.tours-box').css('display', 'none');
		
		if ($($(this).data('t-box')).hasClass('for-cards-view') || window.innerWidth <= 1000) {
			$('.tours-table-overlay').fadeToggle();
		}

		if (window.innerWidth <= 1000) {
			$('body').toggleClass('hide-overflow');
			// $($(this).data('t-box')).css('height', window.innerHeight + 'px');
		}

		// $(this).parents('div[class^="col-"]').find('[data-t-box]').removeClass('open');

		$(this).toggleClass('open');

		// $.each($(this).parents('div[class^="col-"]').find('[data-t-box]'), function(i, e) {
		// 	console.log($(this));
		// 	if ($(this).is(e)) {
		// 		return;
		// 	}

		// 	$(e).removeClass('open');
		// });
	});

	// $(window).on("orientationchange", function(event) {
	// 	if (window.innerWidth <= 1000) {
	// 		$('.tours-box').css('height', window.innerHeight + 'px');
	// 	}
	// });

	$('.tours-table-overlay').on('click', function() {
		$('.tours-box').fadeOut();
		$('.tours-table-overlay').fadeToggle();
		$('.btn-show-tours').removeClass('open');

		if (window.innerWidth <= 1000) {
			$('body').toggleClass('hide-overflow');
		}
	});

	$('.tours-box-content .close-me').on('click', function() {
		$('.tours-box').fadeOut();
		$('.tours-table-overlay').fadeOut();
		$('.btn-show-tours').removeClass('open');

		if (window.innerWidth <= 1000) {
			$('body').removeClass('hide-overflow');
		}
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
		$(this).parents('.item').find('.select-items-wrapper').toggleClass('editable');
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

		if ($(this).find('.date-block').length) {
			return;
		}

		$(this).find('.hidden-change').fadeIn();

		$(this).toggleClass('open');
	});/*
	$(document).on("click", function(e) {
		if (!$(e.target).closest(".filter-value").length) {
			$(".filter-value.open").removeClass("open");
		}
	});*/

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