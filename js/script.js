
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

		$('.filter-select .selected').on('click', function() {
			$(this).parent().next('.block-select').toggleClass('show');
		});
		$('.block-select').on('click', function() {
			$(this).removeClass('show');
		});
		$(document).on('click', function(e) {
			if (!$(e.target).closest('.filter-select-wrapper').length) {
				var a = $('.block-select.show');
				if (a.length) a.removeClass('show');
			}
		});
	});

	$(window).scroll(function(e) {
		/*if (window.innerWidth < 500) {
			if ($('.daterangepicker').css('display') == 'block') {
				$('.filter-value-date').trigger('click');
			}
		}*/
		var dateBtn = $(".filter-value-date"),
			dropPicker = $(".daterangepicker");
		var _p = $('.tur-tur');

		if(_p.length > 0){
			var initH = _p.outerHeight();
			if ($(this).scrollTop() >= 235 + initH ) {
				if (!$('.filters-panel-wrapper').hasClass('fixed-header-filters')) {
					//$('.inner-page-wrapper').css('margin-bottom', $('.filters-panel-wrapper').height() + 'px');
					_p.css('height', _p.outerHeight() + 'px' );
					console.log( _p.outerHeight() );
					$('.filters-panel-wrapper').addClass('fixed-header-filters');
				}
			} else {
				$('.filters-panel-wrapper').removeClass('fixed-header-filters');
				$('.inner-page-wrapper').css('margin-bottom', '0px');
				_p.css('height', 'auto' );
				if (dropPicker.length&&dateBtn.length) {
					dropPicker.css({
						top: dateBtn.offset().top+dateBtn.innerHeight()
					});
				}
			}

		}else{

			if ($(this).scrollTop() >= 235) {
				if (!$('.filters-panel-wrapper').hasClass('fixed-header-filters')) {
					$('.inner-page-wrapper').css('margin-bottom', $('.filters-panel-wrapper').height() + 'px');
					$('.filters-panel-wrapper').addClass('fixed-header-filters');
				}
			} else {
				$('.filters-panel-wrapper').removeClass('fixed-header-filters');
				$('.inner-page-wrapper').css('margin-bottom', '0px');
				if (dropPicker.length&&dateBtn.length) {
					dropPicker.css({
						top: dateBtn.offset().top+dateBtn.innerHeight()
					});
				}
			}

		}


		


		if (dropPicker.length&&dateBtn.length) {
			if (dateBtn.closest(".fixed-header-filters").length) {
				if (dropPicker.is(":visible")) {
					dropPicker.addClass("fixed-picker");
					return;
				}
			}
		}
		dropPicker.removeClass("fixed-picker");
	});

	//Подсказки
	$('.indicator[data-toggle="tooltip"]').tooltip();

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
	        $(data.slider).parents('.range-slider-wrapper').find('.left-label').val(data.from);
	        $(data.slider).parents('.range-slider-wrapper').find('.right-label').val(data.to);
	    }
	});

	function formatInt($str){
		return $str.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
	};

	$('#pricesSlider2').ionRangeSlider({
	    type: "double",
	    min: 0,
	    max: 500000,
	    from: 30000,
	    to: 40000,
	    onChange: function (data, e) {
	        $(data.slider).parents('.range-slider-wrapper').find('.left-label').val(data.from);
	        $(data.slider).parents('.range-slider-wrapper').find('.right-label').val(data.to);
	        
	        $(data.slider).closest('.item').find('.e-cont').text( formatInt(data.from) + " - " + formatInt(data.to) + " р.");
	    }
	});

	$('.range-slider-wrapper .left-label').on('change', function() {
		if ($(this).val() < 0) {
    		$(this).val(0);
    	}

    	if ($(this).val() > 500000) {
    		$(this).val(500000);
    	}

		$('#pricesSlider').data("ionRangeSlider").update({
            from: $(this).val()
        });
	});

	$('.range-slider-wrapper .right-label').on('change', function() {
		if ($(this).val() < 0) {
	    		$(this).val(0);
    	}

		if ($(this).val() > 500000) {
    		$(this).val(500000);
    	}
    	
		$('#pricesSlider').data("ionRangeSlider").update({
            to: $(this).val()
        });
	});



	$('#nightsSlider').ionRangeSlider({
	    type: "double",
	    min: 1,
	    max: 20,
	    from: 5,
	    to: 14,
	    onChange: function (data, e) {
	    	// console.log($(data.slider).parents('.nights-wrapper').find('.bottom-labels'));

	    	function declOfNum(number, titles) {  
				cases = [2, 0, 1, 1, 1, 2]; 
				
				return titles[(number % 100 > 4 && number % 100 < 20) ? 2 : cases[(number % 10 < 5) ? number % 10 : 5]]; 
			}

			var nightsLabelsRu = ['ночь', 'ночи', 'ночей'];
			var daysLabelsRu = ['день', 'дня', 'дней'];

	        $(data.slider).parents('.nights-wrapper').find('.top-labels .from span')
	        .html(data.from + ' ' + declOfNum(data.from, nightsLabelsRu));
	        
	        $(data.slider).parents('.nights-wrapper').find('.top-labels .to span')
	        .html(data.to + ' ' + declOfNum(data.to, nightsLabelsRu));

	        $(data.slider).parents('.nights-wrapper').find('.bottom-labels .min-label span')
	        .html((data.from + 1) + ' ' + declOfNum((data.from + 1), daysLabelsRu));
	        
	        $(data.slider).parents('.nights-wrapper').find('.bottom-labels .max-label span')
	        .html((data.to + 1) + ' ' + declOfNum((data.to + 1), daysLabelsRu));

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
	    	// console.log($(data.slider).parents('.nights-wrapper').find('.bottom-labels'));

	    	function declOfNum(number, titles) {  
				cases = [2, 0, 1, 1, 1, 2]; 
				
				return titles[(number % 100 > 4 && number % 100 < 20) ? 2 : cases[(number % 10 < 5) ? number % 10 : 5]]; 
			}

			var nightsLabelsRu = ['ночь', 'ночи', 'ночей'];
			var daysLabelsRu = ['день', 'дня', 'дней'];

	        $(data.slider).parents('.nights-wrapper').find('.top-labels .from span')
	        .html(data.from + ' ' + declOfNum(data.from, nightsLabelsRu));
	        
	        $(data.slider).parents('.nights-wrapper').find('.top-labels .to span')
	        .html(data.to + ' ' + declOfNum(data.to, nightsLabelsRu));

	        $(data.slider).parents('.nights-wrapper').find('.bottom-labels .min-label span')
	        .html((data.from + 1) + ' ' + declOfNum((data.from + 1), daysLabelsRu));
	        
	        $(data.slider).parents('.nights-wrapper').find('.bottom-labels .max-label span')
	        .html((data.to + 1) + ' ' + declOfNum((data.to + 1), daysLabelsRu));

	        $(data.slider).parents('.filter-value').find('.val .from').html(data.from);
	        $(data.slider).parents('.filter-value').find('.val .to').html(data.to);
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
			// if (!$(e.target).hasClass('custom-caret')) {
				// $($(this).data('list')).find('input[type="checkbox"]').iCheck('toggle');;
			// } 
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
		var radios = $(this).parents('.radio-select-wrapper, .select-items-wrapper').find('input[type=radio]');
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
		if ($(this).hasClass('open')) $(this).text('Свернуть таблицу');
		else $(this).text('Развернуть таблицу');
	});

	$('.open-collapse-list').on('click', function() {
		$($(this).data('list')).slideToggle();
		$(this).toggleClass('open');
	});

	
	/* Hide/Show Detailed version */

	function switchDetailedState()
	{
		$('.main-loader').css('display', 'block');
		$('.hide-detailed-version').addClass('open-btn');
		$('.first-choise-row').fadeIn();
		$('.states-panel').fadeIn();
		$('.hide-detailed-version').html('Свернуть расширенную версию');
		$('.hide-detailed-version').addClass('open-btn');
		$('.destination-box').css('background-image', 'url(img/destination-bg.png)');
		$('.for-short-version').fadeOut();
		$('.for-detailed-version').fadeIn();
		$('body').removeClass('short-version');

		setTimeout(function() {
			$('.main-loader').fadeOut();
		}, 400);	
	}

	function switchShortState()
	{
		$('.main-loader').css('display', 'block');
		$('.first-choise-row').fadeOut();
		$('.states-panel').fadeOut();
		$('.hide-detailed-version').html('Открыть расширенную версию');
		$('.hide-detailed-version').removeClass('open-btn');
		$('.destination-box').css('background-image', 'url(img/destination-short-bg.png)');
		$('.for-short-version').fadeIn();
		$('.for-detailed-version').fadeOut();
		$('body').addClass('short-version');	

		setTimeout(function() {
			$('.main-loader').fadeOut();
		}, 400);		
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

	$('.calendar-buttons .buttons').on('click', function() {
		$(this).toggleClass('active');
	});

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

		$('.filter-value-date').find('.val .from').html(start.format('DD.MM.YYYY'));
		$('.filter-value-date').find('.val .to').html(end.format('DD.MM.YYYY'));
		$('.filter-value-date').removeClass('open');
		
		// console.log(this.element);
	    // alert("A new date range was chosen: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
	}).on('show.daterangepicker', function(ev,picker) {
		// var startMonth = $('.daterangepicker .calendar.left .month').html();
		// var endMonth = $('.daterangepicker .calendar.right .month').html();
		// $('.daterangepicker .calendar.left thead').append('<tr><th colspan="7" class="cusom-month">' + startMonth + '<th></tr>');
		// $('.daterangepicker .calendar.right thead').append('<tr><th colspan="7" class="cusom-month">' + endMonth + '<th></tr>');
		$('body').addClass('daterange-visible');
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

		$('.daterangepicker').prepend('<button class="btn btn-default back-from-calendar">&larr; Назад</button>');

		var count_month = 24,
			tmpl_month = "", tmpl_year = "",
			dt = new Date,
			dt_year = dt.getFullYear(),
			dt_month = dt.getMonth();
		for (var i=0; i < count_month; i++) {
			dt_month++;
			if (dt_month>12) {
				dt_year++;
				dt_month = 1;
			
			}
			tmpl_year = "";
			if (!tmpl_month||dt_month===1) tmpl_year = "<span class='new-year'>"+dt_year+"</span>";
			tmpl_month += '<div data-year="'+dt_year+'" class="mounth-group">'+tmpl_year+'<div data-start="'+dt_month+'">'+picker.locale.monthNames[dt_month-1]+'</div></div>';
		}

		$('.daterangepicker').prepend('<div class="title">Выберите диапазон дат вылета</div>');
		$('.daterangepicker').prepend('<div class="months"><div class="months-list scroll2">'
			+ tmpl_month
			+ '</div></div>');

		$('.back-from-calendar').on('click', function() {
			$(this).parents('.daterangepicker').find('.cancelBtn').trigger('click');
		});

		$('.daterangepicker .mounth-group').on('click', function() {
			// console.log('start:', $(this).find('[data-start]').data('start'), $(this).data('year'));
			// console.log('end:', $(this).find('[data-end]').data('end'), $(this).data('year'));

			$.each($(this).parents('.months').find('.mounth-group'), function(i, elem) {
				$(elem).removeClass('active');
			});

			$(this).addClass('active');

			var start = $(this).find('[data-start]').data('start') - 1;
			//var end = $(this).find('[data-end]').data('end') - 1;

			start = start == -1 ? 0 : start;
			end = start+1;

			$('.daterangepicker .yearselect').val($(this).data('year')).change();
			//console.log(start , end);

			$('.daterangepicker .left .monthselect').val(start).change();
			$('.daterangepicker .right .monthselect').val(end).change();


		});


	}).on('hide.daterangepicker', function() {
		$('body').removeClass('daterange-visible');
		$('.calendar-buttons .buttons').removeClass('active');
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

		if (window.innerWidth <= 1000 || $($(this).data('t-box')).hasClass('for-cards-view') ) {
			$('body').toggleClass('hide-overflow');
			// $($(this).data('t-box')).css('height', window.innerHeight + 'px');
		}

		// $(this).parents('div[class^="col-"]').find('[data-t-box]').removeClass('open');

		$(this).toggleClass('open');

		if( $(this).hasClass('open') ){
			goToThis( $(this).closest('.tour-itself') );
		}
		
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

	$('.filter-additional-params').on('click', function (e) {
		if ($(e.target).closest('.hidden-menu').length) return;
		if ($(e.target).closest('.open-additional-params').length) return;
		$('.filter-additional-params .open-additional-params').click();
	});

	$('.filter-additional-params .open-additional-params').on('click', function() {
		$(this).parents('.filter-additional-params').find('.hidden-menu').fadeToggle();
		$(this).toggleClass('open');

		if ($(this).hasClass('open')) {
			$(this).closest('.row-filters-panel').find('.filter-value.open').removeClass('open');
			$(this).html('Свернуть');
		} else {
			$(this).html('Развернуть');
		}
	});

	$('.filter-additional-params .edit-btn').on('click', function() {

		var flag = false;
		if( !$(this).hasClass('open') ){
			flag = true;
		}
		$(this).closest('.hidden-menu').find('.item .select-items-wrapper.editable').fadeToggle().removeClass('editable');
		$(this).closest('.hidden-menu').find('.item .edit-btn.open').removeClass('open');

		if(flag){
			$(this).parents('.item').find('.select-items-wrapper').fadeToggle();
			$(this).parents('.item').find('.select-items-wrapper').toggleClass('editable');
			$(this).toggleClass('open');
		}

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
		
		//if( $(this).hasClass('open') ){
		//console.log(e,$( e.target ), $( e.target ).hasClass('.filter-value'));
		if( $( e.target ).hasClass('filter-value') ){
				$(this).closest('.row-filters-panel').find('.filter-value.open').removeClass('open');
				$(this).closest('.row-filters-panel').find('.open-additional-params.open').trigger('click');
			//}

			if ($(e.target).parents('.choice-block').length || 
				$(e.target).hasClass('choice-block')) {
				return;
			}

			if ($(this).find('.date-block').length) {
				return;
			}

			$(this).find('.hidden-change').fadeIn();

			$(this).toggleClass('open');
		}
	});/*
	$(document).on("click", function(e) {
		if (!$(e.target).closest(".filter-value").length) {
			$(".filter-value.open").removeClass("open");
		}
	});*/

	setTimeout(function() {
		$('.main-loader').fadeOut();
	}, 1000);

	/* START Sergej works here*/

	//Счетчики выбранных на главной

	var sCountersArray = [
		{
			counter : ".hotel-horisontal-table-content .indicator",
			checkboxes : ".hotel-horisontal-table-content .scrollable-table .icheck-input",
			notAjaxElement : ".choice-block.hotels-block"
		},
		{
			counter : ".indicator",
			checkboxes : ".scrollable-lists .icheck-input",
			notAjaxElement : ".choice-block.resort-block"
		},
		{
			counter : ".indicator",
			checkboxes : ".scrollable-lists .icheck-input",
			notAjaxElement : "choice-block.operators-block"
		},

	];

	sCountersArray.forEach(function(i){
		$(i.notAjaxElement).on('ifChanged ifUnchecked', i.checkboxes, function(e){
			$(i.notAjaxElement).find(i.counter).text( $(i.notAjaxElement).find(i.checkboxes+":checked").length );
			return true;
		});
	}
	);

	function goToThis( elem, offset ){
		$('html, body').animate({
        	scrollTop: elem.offset().top - ( offset ? offset : $('.inner-page-wrapper .filters-panel-wrapper').eq(0).outerHeight() ) 
    	}, 500);
    }


    function cIsMobile(){

	  	var myWidth = 0, myHeight = 0;
		var int1=0;
	  	if( typeof( window.innerWidth ) == 'number' ) {
	    //Non-IE
	    	myWidth = window.innerWidth;
	    	myHeight = window.innerHeight;
	    	int1=1;
	  	} else if( document.documentElement && ( document.documentElement.clientWidth || 

		document.documentElement.clientHeight ) ) {
	    	//IE 6+ in 'standards compliant mode'
	   		myWidth = document.documentElement.clientWidth;
	    	myHeight = document.documentElement.clientHeight;
	    	int1=2;
	  	} else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
	    	//IE 4 compatible
	    	myWidth = document.body.clientWidth;
	    	myHeight = document.body.clientHeight;
	    	int1=3;
	  	}

	  	return myWidth < 768;

	}

    $('.from-city .filter-select, .destination-country-select .filter-select ').on('click', function(e){
    	if( cIsMobile() ){
    		goToThis( $(this), 200 );
    	}
    });

    $('.destination-country-select, .from-city .filter-select').on('ifChecked ifUnchecked','input', function(e){

    	var _select = $(this).closest('.from-city').find('.selected');
    	var _elems = $(this).closest('.from-city').find('.filter-select input:checked').closest('label');
    	var _length = _elems.length;
    	var _str = "";

    	if( _length == 0 ){
			_str = "Не выбран";
		}else{
			if( _length==1 ){
				_str = $(_elems[0]).text();
			}
			if( _length > 1){
				_str = $(_elems[0]).text() + ", " + $(_elems[1]).text();
			}
			if( _length >= 3){
				_str += " и еще "+(_length - 2);
			}

		}

    	_select.text( _str );
    	
    });

    $('.destination-country-select, .from-city .filter-select').on('ifChecked ifUnchecked','input', function(e){
    	$(this).closest('.destination-country-select').find('.selected').text( $(this).val() ? $(this).val() : $(this).closest('.destination-country-select').find('.fix-input').val() );
    });

    /*$('.input-group.input-group-fix .fix-input').on('click', function(e){
		var _this = $(this);
		_this.closest('.input-group-fix').find('.iradio_futurico input').iCheck('check');   

		//console.log( _this.closest('.input-group-fix').find('.iradio_futurico input') ); 	
    });*/

    $('.input-group.input-group-fix .fix-input').on('change keyup', function(e){
    	var _this = $(this);
    	var _val = _this.val();
    	var _rexp = new RegExp( _val, 'i' );
    	var _filtered = _this.closest('.scrollable-lists-wrapper').find('ul li');
    	_filtered.hide();
    	_filtered.filter(function(i){
    		if( _val != '' ){
    			return _rexp.test( $(this).text() );
    		}
    		return true;
    	}).show();
    });

    $('.city.add').on('click',function(e){
    	e.preventDefault();
    	var _this = $(this);
    	var _parent = _this.closest('.city-add-wrapper');

    	_parent.toggleClass('open');
    });

    $('.city-add-wrapper').on('ifChecked','.icheckbox_futurico input',function(e){
    	var _this = $(this);
    	var _parent = _this.closest('.city-add-wrapper');
    	var _container = _this.closest('.cities');
    	var _cities = _container.find('> .city');

    	if(_cities.length < 3){
    		//console.log('less then', _this.val());


	    	_parent.before('<div class="city" data-id="'+_this.val()+'">'+_this.closest('label').text()+'<br>от <b>27 311 <span class="thin">Р</span></b><div class="closer"></div>');

    		_container.find('> .city:nth-last-child(2)').trigger('click');


    	}else{
    		
    		return false;
    	}

    	/*if( _cities.length < 3){
    		_parent.before('<div class="city">'+_this.closest('label').text()+'<br>от <b>27 311 <span class="thin">Р</span></b><div class="closer"></div>');

    		_container.find('> .city:nth-last-child(2)').trigger('click');

    	}*/
    });

    $('.city-add-wrapper').on('ifUnchecked','.icheckbox_futurico input',function(e){
    	var _this = $(this);
    	var _parent = _this.closest('.city-add-wrapper');
    	var _container = _this.closest('.cities');
    	var _cities = _container.find('> .city');

    	//console.log( _cities );

    	_container.find('[data-id = '+_this.val()+']').find('.closer').trigger('click');

    });

    $('.tours-box-content .cities').on('click','.city .closer',function(e){
    	e.preventDefault();

    	var _this = $(this);
    	//console.log(_this);
    	var _city = _this.closest('.city');
    	
    	var _container = _this.closest('.cities');
    	var _id = _city.data('id');
    	_city.remove();

    	var _input = _container.find(".city-add-wrapper input:checked[value = '"+_id+"']");
    	
    	_input.iCheck('uncheck');
    	//console.log(_input, _container, _city);

    	return false;
    });

    $('.tours-box-content .cities').on('click','.city:not(.add)',function(e){
    	e.preventDefault();

    	var _this = $(this);
    	
    	if( !_this.hasClass('selected')){

    		var _parent = _this.closest('.cities');
    		var _e_container = _this.closest('.tours-box-content').find('.body');

    		_parent.find('> .selected').removeClass('selected');
    		_this.addClass('selected');
    		var timer = null;
    		if( !_e_container.hasClass('loading') ){
    			_e_container.addClass('loading');
    			timer = setTimeout(function(){
    				_e_container.removeClass('loading');
    			}, 1000)

    		}
    		
    	}

    	return false;
    });

    $('.filter-additional-params .select-items-wrapper').on('ifChecked ifUnchecked','input', function() {

		var _this = $(this);
		var _elems = _this.closest('.select-items-wrapper').find('input:checked').closest('label');

		var _str = "";
		var _length = _elems.length;
		if( _length == 0 ){
			_str = "Не важно";
		}else{
			if( _length==1 ){
				_str = $(_elems[0]).text();
			}
			if( _length > 1){
				_str = $(_elems[0]).text() + ", " + $(_elems[1]).text();
			}
			if( _length >= 3){
				_str += " и <a href=#>еще "+(_length - 2)+"</a>";
			}

		}

		//console.log( _str );

		_this.closest('.item').find('.e-cont').html( _str);
	});

    var timer;

	$('.showmore-btn a.show-more-tours').on('click',function(e){
		e.preventDefault();
		var _this = $(this);
		var _toggler = _this.closest('.showmore');
		_toggler.toggleClass('open');

		if( !_toggler.hasClass('open')){
			_toggler.find('.table-content').slideUp(300);
			_this.find('span').text( _this.data('text') );
			_toggler.removeClass('opened');
		}else{
			_toggler.find('.table-content').slideDown(300);
			_this.find('span').text('Свернуть');
			timer = setTimeout(function(){
				_toggler.addClass('opened');
			}, 300);
		}



		return false;
	});

	var _aviavariable = '<div class="text-block"><!--Forward--><div class="title"><span class="route-text font-weight-initial">ТУДА:</span> ASTRAKHAN AIRPORT,Россия — SOCHI AIRPORT , РОССИЯ</div><table class="table"><tbody><tr class="no-border-td"><td width="25%"><span class="dashed-text">ASTRAKHAN AIRPORT, РОССИЯ </span><br><b>11:45</b>, 28.09.2017 </td><td width="35%"><span class="dashed-text">SHEREMETYEVO MOSCOW AIRPORT </span><br>Прилет в <b>13:00</b>, 28.09.2017 </td><td width="15%" class="flight-number">Рейс: <b class="no-word-wrap">SU1643</b></td></tr><tr class="no-border-top-td"><td colspan="5"><div class="hr"><span><i class="glyphicon glyphicon-time"></i>Длительность пересадки: 4 ч. 45 мин.</span></div></td></tr><tr class="no-border-td"><td width="25%"><span class="dashed-text">SHEREMETYEVO MOSCOW AIRPORT, РОССИЯ </span><br><b>17:45</b>, 28.09.2017 </td><td width="35%"><span class="dashed-text">SOCHI AIRPORT </span><br>Прилет в <b>20:10</b>, 28.09.2017 </td><td width="15%" class="flight-number">Рейс: <b class="no-word-wrap">SU1130</b></td></tr></tbody></table><!--Backward--><div class="title bordered"><span class="route-text font-weight-initial">ОБРАТНО:</span> SOCHI AIRPORT , РОССИЯ — ASTRAKHAN AIRPORT, Россия</div><table class="table"><tbody><tr class="no-border-td"><td width="25%"><span class="dashed-text">SOCHI AIRPORT, РОССИЯ </span><br><b>16:15</b>, 05.10.2017 </td><td width="35%"><span class="dashed-text">SHEREMETYEVO MOSCOW AIRPORT </span><br>Прилет в <b>18:40</b>, 05.10.2017 </td><td width="15%" class="flight-number">Рейс: <b class="no-word-wrap">SU1123</b></td></tr><tr class="no-border-top-td"><td colspan="5"><div class="hr"><span><i class="glyphicon glyphicon-time"></i>Длительность пересадки: 2 ч. 55 мин.</span></div></td></tr><tr class="no-border-td"><td width="25%"><span class="dashed-text">SHEREMETYEVO MOSCOW AIRPORT, РОССИЯ </span><br><b>21:35</b>, 05.10.2017 </td><td width="35%"><span class="dashed-text">ASTRAKHAN AIRPORT </span><br>Прилет в <b>00:50</b>, 06.10.2017 </td><td width="15%" class="flight-number">Рейс: <b class="no-word-wrap">SU1172</b></td></tr></tbody></table></div>';

	$('a.flies').on('click', function(e){
		e.preventDefault();
		
		var _container = $(this).closest('.tr').find('.avia-placeholder');
		var _other_conts = $(".avia-placeholder.open");
		if(_container.hasClass('open')){
			_container.find('.avia-content').html('');
			_container.removeClass('open');
			_other_conts.removeClass('open');
			_other_conts.slideUp();
			_container.slideUp();
		}else{
			_container.find('.avia-content').html( _aviavariable );	
			_other_conts.removeClass('open');
			_other_conts.slideUp();
			_container.addClass('open');
			_container.slideDown();
		}
		
		return false;
	});

	$('.avia-placeholder').on('click','.closer',function(e){
		e.preventDefault();
		$(this).closest('.tr').find('.flies').eq(0).trigger('click');
		console.log( $(this).closest('.td').find('.flies') );
		return false;
	})

	/* END Sergej works here*/

});


// $(document).ready(function() {
// 	$.each($('.open-collapse-list'), function(i, elem) {
// 		if ($(elem).hasClass('open')) {
// 			console.log($($(this).data('list')).slideToggle());
// 		}
// 	});
// });