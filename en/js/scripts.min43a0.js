$(function () {

	$(document).on('click', '.g-tab-nav__item', function (e) {
		// e.preventDefault();
		$(this).closest('.g-tab-nav').find('.g-tab-nav__item').removeClass('is-active');
		$(this).addClass('is-active');
	});

});

// var radioValue = number_format($(this).val(), 0, ',', ' ');
function number_format(number, decimals, dec_point, thousands_sep) {
	number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
	var n = !isFinite(+number) ? 0 : +number,
		prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
		sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
		dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
		s = '',
		toFixedFix = function (n, prec) {
			var k = Math.pow(10, prec);
			return '' + (Math.round(n * k) / k)
				.toFixed(prec);
		};
	// Fix for IE parseFloat(0.55).toFixed(0) = 0;
	s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
		.split('.');
	if (s[0].length > 3) {
		s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
	}
	if ((s[1] || '')
		.length < prec) {
		s[1] = s[1] || '';
		s[1] += new Array(prec - s[1].length + 1)
			.join('0');
	}
	return s.join(dec);
}

//find index
if (!Array.prototype.findIndex) {
	Array.prototype.findIndex = function (predicate) {
		if (this == null) {
			throw new TypeError('Array.prototype.findIndex called on null or undefined');
		}
		if (typeof predicate !== 'function') {
			throw new TypeError('predicate must be a function');
		}
		var list = Object(this);
		var length = list.length >>> 0;
		var thisArg = arguments[1];
		var value;

		for (var i = 0; i < length; i++) {
			value = list[i];
			if (predicate.call(thisArg, value, i, list)) {
				return i;
			}
		}
		return -1;
	};
}

$(function () {

	$(document).on('click', '.faq-item__header', function (e) {
		$(this).closest('.faq-item').toggleClass('is-open');
		$(this).siblings('.faq-item__body').slideToggle();
	});

});

$(function () {

	if ($(".contacts-map-block").length) {

		function initMap() {
			var marker,
				map;
			var mapObjects = [
				{
					lat: 1.2834648,
					lng: 103.8519326
				}
			];
			map = new google.maps.Map(document.getElementById('map'),
				{
					zoom: 17,
					center: {lat: 1.2834648, lng: 103.8519326},
					styles: [
						{
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#f5f5f5"
								}
							]
						},
						{
							"elementType": "labels.icon",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						},
						{
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#616161"
								}
							]
						},
						{
							"elementType": "labels.text.stroke",
							"stylers": [
								{
									"color": "#f5f5f5"
								}
							]
						},
						{
							"featureType": "administrative.land_parcel",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#bdbdbd"
								}
							]
						},
						{
							"featureType": "administrative.locality",
							"elementType": "labels",
							"stylers": [
								{
									"visibility": "on"
								}
							]
						},
						{
							"featureType": "administrative.province",
							"elementType": "geometry.stroke",
							"stylers": [
								{
									"color": "#bdbdbd"
								},
								{
									"visibility": "on"
								},
								{
									"weight": 1
								}
							]
						},
						{
							"featureType": "landscape.man_made",
							"elementType": "geometry.stroke",
							"stylers": [
								{
									"color": "#bdbdbd"
								}
							]
						},
						{
							"featureType": "poi",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#eeeeee"
								}
							]
						},
						{
							"featureType": "poi",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#757575"
								}
							]
						},
						{
							"featureType": "poi.park",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#e5e5e5"
								}
							]
						},
						{
							"featureType": "poi.park",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#9e9e9e"
								}
							]
						},
						{
							"featureType": "road",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#ffffff"
								}
							]
						},
						{
							"featureType": "road.arterial",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#757575"
								}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#dadada"
								}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#616161"
								}
							]
						},
						{
							"featureType": "road.local",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#9e9e9e"
								}
							]
						},
						{
							"featureType": "transit.line",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#e5e5e5"
								}
							]
						},
						{
							"featureType": "transit.station",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#eeeeee"
								}
							]
						},
						{
							"featureType": "water",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#778cae"
								}
							]
						},
						{
							"featureType": "water",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#9e9e9e"
								}
							]
						}
					]
				}
			);
			for (var i = 0; i < mapObjects.length; i++) {
				marker = new google.maps.Marker(
					{
						position: mapObjects[i],
						map: map,
			                        icon: "//finastone.com/en/images/icons/ic_marker.png"
					}
				);
			}
		}

		initMap();
	}

});

$(function () {

	$(".what-tabs__item").click(function () {
		var block = $(this).closest(".what-tabs-wrap");
		var dataTab = $(this).data("tab");
		block.find(".what-tabs__item").removeClass("active");
		$(this).addClass("active");
		block.find(".what-tabs-content").removeClass("active");
		block.find(".what-tabs-content").eq(dataTab - 1).addClass("active");
	})

});

$(function () {
	$('.ct-cell__flag').each(function () {
		var thisFlag = $(this);
		var thisFlagW = thisFlag.find('span').outerWidth();
		$(this).closest('.ct-cell').each(function () {
			var containerW = $(this).closest('.ct-row').outerWidth();
			var posL = $(this).position().left;
			console.log('w - ' + thisFlagW, posL + thisFlagW, containerW);
			if (posL + thisFlagW > containerW) {
				thisFlag.addClass('ct-cell__flag--right');
			} else {
				thisFlag.removeClass('ct-cell__flag--right');
			}
		});
	});
});

function findWithAttr(array, attr, value) {
	for (var i = 0; i < array.length; i += 1) {
		if (array[i][attr] === value) {
			return i;
		}
	}
	return -1;
}

function returnIndex(arr, value) {
	return arr.findIndex(function (el) {
		return el === value
	})
}

function onlyUnique(value, index, self) {
	return self.indexOf(value) === index;
}

function getDates(startDate, endDate, localization) {
	var dates = [],
		currentDate = startDate,
		addDays = function (days) {
			var date = new Date(this.valueOf());
			date.setDate(date.getDate() + days);
			return date;
		};
	var curDay = new Date();
	while (currentDate <= endDate) {
		var gDIndex = currentDate.getDay();
		var gMIndex = currentDate.getMonth();
		var today = [currentDate.getDate(), currentDate.getMonth(), currentDate.getFullYear()].toString() === [curDay.getDate(), curDay.getMonth(), curDay.getFullYear()].toString();
		dates.push({
			"dayIndex": gDIndex,
			"monthIndex": gMIndex,
			"date": currentDate.getDate(),
			"dayNameMin": localization.dayNamesMin[gDIndex],
			"monthName": localization.monthNames[gMIndex],
			"dayOff": localization.dayOff.indexOf(gDIndex) > -1,
			"year": currentDate.getFullYear(),
			"getTime": currentDate.getTime(),
			"today": today
		});
		currentDate = addDays.call(currentDate, 1);
	}
	return dates;
}


$(function () {

	$(".acc-history__tab").click(function () {
		$(".acc-history__tab").removeClass("active");
		$(this).addClass("active");
		var tableItems = $(".acc-history__table-item");
		tableItems.hide();
		tableItems.eq($(this).index()).show();
	});

	$(".filter__clear").click(function () {
		var form = $(this).closest("form");
		resetHistoryForm();
		form.submit();
	});

});
$(function () {
	$(document).on('click', '.invest-plan', function () {
		$(this).closest('.invest').find('.invest-plan').removeClass('is-active');
		$(this).addClass('is-active');
	});

	$(document).on('focus', '.invest-plan', function () {
		$(this).on('keyup', function (e) {
			if (e.keyCode === 13) {
				$(this).closest('.invest').find('.invest-plan').removeClass('is-active').attr('aria-checked', 'false');
				$(this).addClass('is-active').attr('aria-checked', 'true');
			}
		});
	});

	$(document).on('click', '.invest-tab-nav__link', function (e) {
		e.preventDefault();
		$('.invest-tab-nav__link').removeClass('is-active');
		$(this).addClass('is-active');
		var nameTab = $(this).data('tab-nav');
		$('.invest-tab-content').find('[data-tab-content]').removeClass('is-active');
		$('.invest-tab-content').find('[data-tab-content="' + nameTab + '"]').addClass('is-active');
	});

});
$(function () {

	$(document).on('click', '.js-tab-link-nob', function () {
		$(this).closest('.nob').find('.nob__body').attr('data-show', $(this).data('show'));
	});

});
$(function () {

	$(document).on('click', '.js-tab-link-oib', function () {
		$(this).closest('.oib').find('.oib__body').attr('data-show', $(this).data('show'));
	});

});

$(function () {

	$(".inv-p-calc__input-value").on("change keyup input click", function (event) {
		if (this.value.match(/[^0-9]/g)) {
			this.value = this.value.replace(/[^0-9]/g, '');
		}
		var str = $(this).val();
		var num = parseFloat(str.replace(' ', ''));
		var daily = $(".inv-p-calc__daily");
		var dailyData = daily.data("calc");
		var totalProfit = $(".inv-p-calc__total-profit");
		var totalProfitData = totalProfit.data("calc");
		var totalReturn = $(".inv-p-calc__total-return");
		var totalReturnData = totalReturn.data("calc");
		if (!str || !num) {
			daily.text("0");
			totalProfit.text("0");
			totalReturn.text("0");
		} else {
			var dailyNew = (num / 100 * dailyData).toFixed(2);
			daily.text(dailyNew);
			var totalProfitNew = (num / 100 * totalProfitData).toFixed(2);
			totalProfit.text(totalProfitNew);
			var totalReturnNew = (num / 100 * totalReturnData).toFixed(2);
			totalReturn.text(totalReturnNew);
		}
	});

});
$(function () {

	$('.inv-p-plans__daily-circle').each(function () {
		var dataCircle = $(this).data("circle") / 100;
		$(this).circleProgress({
			value: dataCircle,
			size: 100,
			thickness: 5,
			startAngle: Math.PI + Math.PI / 2,
			fill: "#ffcd1f",
			emptyFill: "rgba(0,0,0,0)"
		});
	});

});
$(function () {

	var mNewsSlider = $(".m-news__list");

	var backButton = "<div class='prev-button'><svg width=\"20\" height=\"11\" viewBox=\"0 0 20 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n" +
		"<path d=\"M10.0005 1.42544L19.0328 10.8266C19.255 11.0578 19.6113 11.0578 19.8334 10.8266C20.0555 10.5954 20.0555 10.2246 19.8334 9.99336L10.3987 0.173409C10.1766 -0.0578028 9.8203 -0.0578028 9.59816 0.173409L0.167654 9.99336C0.0586778 10.1068 1.22343e-07 10.2595 1.24112e-07 10.4078C1.2588e-07 10.5561 0.0544874 10.7088 0.167654 10.8222C0.389794 11.0534 0.746056 11.0534 0.968197 10.8222L10.0005 1.42544Z\" fill=\"#1342BD\"/>\n" +
		"</svg>\n</div>",
		nextButton = "<div class='next-button'><svg width=\"20\" height=\"11\" viewBox=\"0 0 20 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n" +
			"<path d=\"M9.99948 9.57456L0.96715 0.17341C0.745009 -0.0578013 0.388746 -0.0578013 0.166605 0.17341C-0.0555356 0.404622 -0.0555356 0.775432 0.166605 1.00664L9.6013 10.8266C9.82344 11.0578 10.1797 11.0578 10.4018 10.8266L19.8323 1.00664C19.9413 0.893218 20 0.740531 20 0.592207C20 0.443882 19.9455 0.291195 19.8323 0.177771C19.6102 -0.053441 19.2539 -0.0534409 19.0318 0.177771L9.99948 9.57456Z\" fill=\"#1342BD\"/>\n" +
			"</svg>\n</div>";

	mNewsSlider.slick({
		arrows: true,
		dots: false,
		slidesToShow: 3,
		touchThreshold: 50,
		prevArrow: backButton,
		nextArrow: nextButton,
		cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
	});

	$('.m-news__text').each(function () {
		if ($(this).text().length > 120) {
			$(this).text($(this).text().slice(0, 120) + "...");
		}
	});

});
$(function () {

	function recalcMain(plan, val) {
		if (val.match(/[^0-9]/g)) {
			val = val.replace(/[^0-9.\s]/g, '');
			$(".m-plans__inv-input").val(val);
		}
		var profit = $(".m-plans__profit-num");
		var total = $(".m-plans__return-num");
		var num = parseFloat(val.replace(' ', ''));
		switch (plan) {
			case 0:
				if (!num) {
					profit.text("0.0000");
					total.text("0.0000");
				} else {
					var perDay = (num / 100 * 5).toFixed(4);
					profit.text(perDay);
					perDayTotal = perDay * 30;
					var balanceTemp = perDayTotal.toFixed(4).toString().split(".");
					if (balanceTemp.length > 1) {
						total.text(number_format(balanceTemp[0], 0, ',', ' ') + "." + balanceTemp[1]);
					} else {
						total.text(number_format(balanceTemp[0], 0, ',', ' ') + ".0000");
					}
				}
				break;
			case 1:
				if (!num) {
					profit.text("N/A");
					total.text("0.0000");
				} else {
					profit.text('N/A');
					perDayTotal = num / 100 * 110;
					var balanceTemp = perDayTotal.toFixed(4).toString().split(".");
					if (balanceTemp.length > 1) {
						total.text(number_format(balanceTemp[0], 0, ',', ' ') + "." + balanceTemp[1]);
					} else {
						total.text(number_format(balanceTemp[0], 0, ',', ' ') + ".0000");
					}
				}
				break;
		}
	}

	$(".m-plans-tabs__name").click(function () {
		var items = $(".m-plans-tabs__item");
		$(".m-plans-tabs__name").removeClass("active");
		$(this).addClass("active");
		items.removeClass("active");
		items.eq($(this).index()).addClass("active");
		recalcMain($(this).index(), $(".m-plans__inv-input").val());
	});

	$(".m-plans__inv-input").on("change keyup input click", function (event) {
		recalcMain($('.m-plans-tabs__name.active').index(), this.value);
	});

});
$(function () {

	$('.m-says__list').slick({
		centerMode: true,
		arrows: true,
		touchThreshold: 50,
		slidesToShow: 2,
		vertical: true,
		verticalSwiping: true,
	});

});

$(function () {

	$("[data-modal]").click(function () {
		showModal($(this).data("modal"));
	});

	function showModal(e) {
		$("body").addClass("modal-open");
		var modal = $("." + e + "");
		$('html').addClass('no-scroll');
		if (hasScrollbar()) {
			var scrollWidth = getScrollbarWidth();
			$("html").css({
				"margin-right": scrollWidth
			});
			modal.addClass("active");
			if ($(window).width() <= 1199) {
				$(".header-fp .header__wrap").css("padding-right", scrollWidth);
			}
		} else {
			modal.addClass("active");
		}

		var isIE = /*@cc_on!@*/false || !!document.documentMode;
		if (isIE === true) {
			// console.log(modal.find(".default-modal__content").outerHeight(), $(window).height());
			// var blockPosTop = modal.find(".default-modal__content").position().top;
			// if ( blockPosTop < 0 ) {
			//     console.log(blockPosTop)
			//     modal.css("display", "block");
			// }else {
			//     modal.removeAttr("style");
			// }
			if (modal.find(".default-modal__content").outerHeight() > $(window).height()) {
				// console.log(blockPosTop)
				modal.css("display", "block");
			} else {
				modal.removeAttr("style");
			}
		}
	}

	$(".default-modal__close").click(function () {
		$("body").removeClass("modal-open");
		$(".default-modal").removeClass("active");
		$(".header-fp .header__wrap").removeAttr("style");
		setTimeout(function () {
			var scrollTop = parseInt($('html').css('top'));
			$('html').removeClass('no-scroll');
			$("html").css({
				"margin-right": ""
			});
			$("html").removeAttr("style");
		}, 300);
	});

	$(".default-modal").click(function (e) {
		if (!$(e.target).closest(".default-modal__content").length) {
			$("body").removeClass("modal-open");
			$(".default-modal").removeClass("active");
			$(".header-fp .header__wrap").removeAttr("style");
			setTimeout(function () {
				var scrollTop = parseInt($('html').css('top'));
				$('html').removeClass('no-scroll');
				// $('html,body').scrollTop(-scrollTop);
				$("html").css({
					"margin-right": ""
				});
				$("html").removeAttr("style");
			}, 300);
			e.stopPropagation();//?
		} else {
			// console.log("modal-content click");
		}

	});

	function getScrollbarWidth() {
		var outer = document.createElement("div");
		outer.style.visibility = "hidden";
		outer.style.width = "100px";
		outer.style.msOverflowStyle = "scrollbar";

		document.body.appendChild(outer);

		var widthNoScroll = outer.offsetWidth;
		// force scrollbars
		outer.style.overflow = "scroll";

		// add innerdiv
		var inner = document.createElement("div");
		inner.style.width = "100%";
		outer.appendChild(inner);

		var widthWithScroll = inner.offsetWidth;

		// remove divs
		outer.parentNode.removeChild(outer);
		return widthNoScroll - widthWithScroll;
	}

	function hasScrollbar() {
		// console.log(document.body.scrollHeight, document.body.clientHeight);
		// return document.body.scrollHeight > document.body.clientHeight;
		// console.log($(document).height() > $(window).height());
		return $(document).height() > $(window).height();
	}

});
$(function () {

	$(".default-tabs__list-item").click(function () {
		var tabs = $(this).closest(".default-tabs");
		tabs.find(".default-tabs__list-item").removeClass("active");
		$(this).addClass("active");
		tabs.find(".default-tabs__content").removeClass("active");
		tabs.find(".default-tabs__content").eq($(this).index()).addClass("active");
		var data = tabs.find(".default-tabs__content").eq($(this).index()).data();
		console.log(data);
		$('.inv-p-calc__calc-block .inv-p-calc__daily').data('calc', data.daily);
		$('.inv-p-calc__calc-block .inv-p-calc__total-profit').data('calc', data.profit);
		$('.inv-p-calc__calc-block .inv-p-calc__total-return').data('calc', data.return);
		$('.inv-p-calc__input-value').change();
	});

});
$(function () {

	$(".selectmenu__main").click(function () {
		var allMenu = $(".selectmenu__main").closest(".selectmenu");
		var currentMenu = $(this).closest(".selectmenu");
		if (currentMenu.hasClass("active")) {
			allMenu.removeClass("active");
		} else {
			allMenu.removeClass("active");
			currentMenu.addClass("active");
		}
	});
	$(".selectmenu-js__main").click(function () {
		var allMenu = $(".selectmenu-js__main").closest(".selectmenu-js");
		var currentMenu = $(this).closest(".selectmenu-js");
		if (currentMenu.hasClass("active")) {
			allMenu.removeClass("active");
		} else {
			allMenu.removeClass("active");
			currentMenu.addClass("active");
		}
	});
	$(".selectmenu-js__item").click(function () {
		var mainBlock = $(this).closest(".selectmenu-js");
		mainBlock.find("input").val($(this).find(".selectmenu-js__item-name").data('value'));
		mainBlock.removeClass("active");
		mainBlock.find("input").change();
	});
	$('.selectmenu-js input').on('change', function (event) {
		var mainBlock = $(this).closest(".selectmenu-js");
		var text = mainBlock.find(".selectmenu-js__item-name[data-value=" + $(this).val() + "]").text();
		mainBlock.find(".selectmenu-js__text").text(text);
	});

	if ($(".selectmenu").length) {
		$(document).on('mousedown touchstart', function (e) {
			var div = $(".selectmenu");
			if (!div.is(e.target) && div.has(e.target).length === 0) { // и не по его дочерним элементам
				div.removeClass("active");
			}
		});
	}
	if ($(".selectmenu-js").length) {
		$(document).on('mousedown touchstart', function (e) {
			var div = $(".selectmenu-js");
			if (!div.is(e.target) && div.has(e.target).length === 0) { // и не по его дочерним элементам
				div.removeClass("active");
			}
		});
		$(".selectmenu-js").each(function () {
			if ($(this).find(".selectmenu-js__item").length < 9) {
				$(this).find(".selectmenu-js__dropdown").addClass("no-shadow");
			} else {
				$(this).find(".selectmenu-js__dropdown").removeClass("no-shadow");
			}
		});
	}

	$(".selectmenu-js__dropdown").mCustomScrollbar({
		// callbacks:{
		//     onCreate: function(){
		//         console.log($(this));
		//     }
		// }
	});


});
$(function () {

	$(".acc-af-banner__tab").click(function () {
		var content = $(this).closest(".acc-af-banner").find(".acc-af-banner__content");
		content.find(".acc-af-banner__item").hide();
		content.find(".acc-af-banner__item").eq($(this).index()).show();
	});

});
$(function () {

	$(".acc-af-header__tabs .g-tab-nav__item").click(function () {
		var tabBlock = $(this).closest(".acc-af-header__tab-block");
		tabBlock.find(".acc-af-header__cur").hide();
		tabBlock.find(".acc-af-header__cur").eq($(this).index()).show();
	});

});
$(function () {

	$(".btn.hero__signup").click(function () {
		document.location = 'signup';
	});


});
$(function () {
	$('.js-copy-address').on('click', function(e) {
		navigator.clipboard.writeText($(this).data('address'))
		.then(() => {
			$(this).removeClass('btn-trans').addClass('btn');
		})
		.catch(err => {
			console.log('Something went wrong', err);
		});
	});
});
