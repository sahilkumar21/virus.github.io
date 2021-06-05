$(function () {

	function $_GET(key) {
		var p = window.location.search;
		p = p.match(new RegExp(key + '=([^&=]+)'));
		return p ? p[1] : false;
	}

	//only number
	$('[data-type-input="pin"], input[type="number"]').keypress(function (e) {
		if (e.which != 8 && e.which != 0 && e.which != 46 && (e.which < 48 || e.which > 57)) {
			return false;
		}
		// if ( $(this).is('[data-type-input="pin"]') && $(this).val().length >= 4 ) {
		//     return false;
		// }
	});

	$.validator.setDefaults({
		ignore: []
	});

	$(".form-signup").validate({
		rules: {
			name: {
				required: true
			},
			login: {
				required: true,
			},
			email: {
				required: true
			},
			"repeat-email": {
				required: true,
				equalTo: $(this).find("input[name=email]")
			},
			password: {
				required: true
			},
			"repeat-password": {
				required: true,
				equalTo: $(this).find("input[name=password]")
			},
			question: {
				required: true,
			},
			answer: {
				required: true,
			},
			agree: {
				required: true
			}
		},
		submitHandler: function (form) {
			var options = {
				url: 'process',
				data: {action: 'registration'},
				dataType: 'json',
				beforeSend: function () {
					$(form).find('.form_answer_error').html('').hide();
				},
				success: function (data) {
					if (data.status == 'ok') {
						$('.signup').hide();
						$('.signup-finish').show();
						setTimeout(function () {
							window.location.href = data.redirect;
						}, 5000);
					}
					else {
						$(form).find('.form_answer_error').html(data.errors.join('<br/>')).show();
					}
				}
			};
			$(form).ajaxSubmit(options);
		}
	});

	$(".form-login").validate({
		rules: {
			login: {
				required: true
			},
			password: {
				required: true
			},
			remember: {
				required: false
			}
		},
		submitHandler: function (form) {
			var options = {
				url: "/process",
				data: {action: 'login'},
				dataType: 'json',
				beforeSend: function () {
					$(form).find('.form_answer_error').html('');
				},
				success: function (data) {
					if (data.status == 'ok') {
						$('.modal-login').hide();
						document.location = data.redirect;
					}
					else {
						$(form).find('.form_answer_error').html(data.errors.join('<br/>'));
					}

				}
			};
			$(form).ajaxSubmit(options);
		}
	});

	$(".forgot-pass__form").validate({
		rules: {
			email: {
				required: true
			}
		},
		submitHandler: function (form) {
			var options = {
				url: "/process",
				data: {action: 'forgot'},
				dataType: 'json',
				beforeSend: function () {
					$(form).find('.form_answer_error').html('');
				},
				success: function (data) {
					if (data.status == 'ok') {
						$('.forgot-pass').hide();
						$('.js-forgot-link').show();
					}
					else {
						$(form).find('.form_answer_error').html(data.answer);
					}
				}
			};
			$(form).ajaxSubmit(options);
		}
	});

	if ($("table.acc-af-ref__table").length) {
		loadReferrals({page: 1});
	}

	if ($(".restore-form").length) {
		var options = {
			url: 'process',
			data: {action: 'restore'},
			dataType: 'json',
			beforeSubmit: function () {
				$('.form_answer_error').html('');
				$('.forgot-pass').hide();
			},
			success: function (data) {
				if (data.status == 'ok') {
					$('.js-forgot-done').show();
				}
				else {
					$('.form_answer_error').html(data.answer);
					$('.forgot-pass').show();
				}
			}
		};
		if ($_GET('action') == 'restore') {
			var uid = $_GET('uid');
			var code = $_GET('code');
			if (!uid || !code) {
				$('.form_answer_error').html('Bad restore URL').show();
			}
			else {
				$('input[name=uid]').val(uid);
				$('input[name=code]').val(code);
				$(".restore-form").ajaxForm(options);
				$(".restore-form").submit();
			}
		}
	}
	$(".form-contact-mes").validate({
		rules: {
			name: {
				required: true
			},
			email: {
				required: true
			},
			message: {
				required: true
			}
		},
		submitHandler: function (form) {
			var options = {
				url: "/process",
				data: {action: 'contact'},
				dataType: 'json',
				success: function (data) {
					if (data.status == 'ok') {
						$('#form_answer_error').html(data.answer).removeClass('error');
						$('.form-contact-mes').hide();
					}
					else {
						$('#form_answer_error').html(data.errors.join('<br/>'));
					}

				}
			};
			$(form).ajaxSubmit(options);
		}
	});

	//my-acc edit
	$(".acc-edit__form").validate({
		rules: {
			"repeat-password": {
				equalTo: $(this).find("input[name=password]"),
			}
		},
		submitHandler: function (form) {
			var options = {
				url: "/process",
				data: {action: 'profile'},
				dataType: 'json',
				beforeSend: function () {
					$(form).find('.form_answer_error').html('');
				},
				success: function (data) {
					if (data.status == 'ok') {
						$('.js-step-1').hide();
						$('.js-step-2').show();
					}
					else {
						$(form).find('.form_answer_error').html(data.errors.join('<br/>')).show();
					}
				}
			};
			$(form).ajaxSubmit(options);
		}
	});
	if ($(".confirm-code").length) {
		var options = {
			url: 'process',
			data: {action: 'profile_confirm'},
			dataType: 'json',
			beforeSubmit: function () {
				$('.form_answer_error').html('');
				$('.js-step-1').hide();
			},
			success: function (data) {
				if (data.status == 'ok') {
					$('.js-step-3').show();
				}
				else {
					$('.form_answer_error').html(data.answer);
					$('.js-step-1').show();
				}
			}
		};
		if ($_GET('action') == 'confirm') {
			var code = $_GET('code');
			if (!code) {
				$('.form_answer_error').html('Bad restore URL').show();
			}
			else {
				$('.confirm-code input[name=code]').val(code);
				$(".confirm-code").ajaxForm(options);
				$(".confirm-code").submit();
			}
		}
	}

	//invest
	$('form.invest').validate({
		rules: {
			"invest-amount": {
				required: true,
				number: true,
			}
		},
		submitHandler: function (form) {
			var selectedPlan = $(form).find('.invest-plan.is-active').data('plan-name');
			var selectedSource = $(form).find('.invest-tab-nav .invest-tab-nav__link.is-active').data('source');
			var options = {
				url: "/process",
				data: {action: 'deposit', 'invest-plan': selectedPlan, 'source': selectedSource},
				dataType: 'json',
				beforeSend: function () {
					$(form).find('.form_answer_error').html('');
				},
				success: function (data) {
					if (data.status == 'ok') {
						$('.invest-title-step-1, .invest-title-step-2').addClass('is-ok');
						$('.invest-title-step').addClass('is-active');
						form.reset();

						$('.invest-step').removeClass('is-active');
						if (data.action == 'success') {
							$('.invest-step-3').addClass('is-active');
						}
						if (data.action == 'ps') {
							$('.js-copy-address').data('address', data.address);
							if (data.tag != null)
								data.address += ' destination tag ' + data.tag;
							$('.invest-completed .js-qr').find('img').attr('src', data.qr);
							$('.invest-completed .js-amount').text(data.amount);
							$('.invest-completed .js-ticker').text(data.ticker);
							$('.invest-completed .js-ps').text(data.pslong);
							$('.invest-completed .js-address').text(data.address);
							//$('invest-completed .js-ps-img').attr('src', 'en/images/logos/ps'+data.ps+'.svg');
							$('.invest-step-4').addClass('is-active');
						}
					}
					else {
						$(form).find('.form_answer_error').html(data.errors.join('<br/>')).show();
					}
				}
			};
			$(form).ajaxSubmit(options);
		}
	});
	$(document).on('click', '.invest-to-step-1', function () {
		$('.invest-step, .invest-title-step').removeClass('is-active is-ok');
		$('.invest-step-1, .invest-title-step-1').addClass('is-active');
		$('.form_answer_error').html('');
	});
	$(document).on('click', '.invest-to-step-2', function () {
		$('input[name="invest-amount"]').valid();
		if ($('input[name="invest-amount"]').valid()) {
			var selectedSource = $('.invest-tab-nav .invest-tab-nav__link.is-active').data('source')
			var planBlock = $('.invest-plan.is-active'),
				planLogo = planBlock.find('.invest-plan__logo').text(),
				planName = planBlock.find('.invest-plan__name').text(),
				planDescr = planBlock.find('.invest-plan__descr').text(),
				input = selectedSource == 'acc' ? $('input[name="invest-currency-acc"]:checked') : $('input[name="invest-currency"]:checked'),
				inputText = input.siblings('.default-radio__text').text(),
				inputImg = input.siblings('.default-radio__text').find('img').clone(),
				amount = $('input[name="invest-amount"]').val();
			var step2 = $('.invest-step-2');
			step2.find('.isi-item__plan-logo').text(planLogo);
			step2.find('.isi-item__plan-name').text(planName);
			step2.find('.isi-item__plan-descr').text(planDescr);
			step2.find('.isi-item__pay-method').text(inputText).append(inputImg);
			step2.find('.isi-item__amount').text((+amount).toFixed(4));

			$('.invest-step').removeClass('is-active');
			step2.addClass('is-active');
			$('.invest-title-step-1').addClass('is-ok');
			$('.invest-title-step-2').addClass('is-active');

			window.scrollTo({
				top: 600,
				behavior: "smooth"
			});
		}
	});

	//withdraw
	$('form.withdraw').validate({
		rules: {
			"withdraw-amount": {
				required: true,
				number: true,
				max: function () {
					return +$('input[name="withdraw-currency"]:checked').data('balance');
				}
			}
		},
		submitHandler: function (form) {
			var options = {
				url: '/process',
				data: {action: 'withdraw'},
				beforeSend: function () {
					$(form).find('.form_answer_error').html('');
				},
				dataType: 'json',
				success: function (data, status, xhr, form) {
					if (data.status == 'ok') {
						$('.withdraw-step').removeClass('is-active');
						$('.withdraw-step-3').addClass('is-active');
						$('.withdraw-title-step-1, .withdraw-title-step-2').addClass('is-ok');
						$('.withdraw-title-step').addClass('is-active');
						form.reset();
					}
					else {
						$(form).find('.form_answer_error').html(data.errors.join('<br/>')).show();
					}
				}
			};
			$(form).ajaxSubmit(options);
		}
	});
	$(document).on('click', '.withdraw-to-step-1', function () {
		$('.withdraw-step, .withdraw-title-step').removeClass('is-active is-ok');
		$('.withdraw-step-1, .withdraw-title-step-1').addClass('is-active');
		$('form.withdraw').find('.form_answer_error').html('');
	});
	$(document).on('click', '.withdraw-to-step-2', function () {
		$('input[name="withdraw-amount"]').valid();
		if ($('input[name="withdraw-amount"]').valid()) {
			var input = $('input[name="withdraw-currency"]:checked'),
				inputText = input.siblings('.default-radio__text').text(),
				inputImg = input.siblings('.default-radio__text').find('img').clone(),
				amount = $('input[name="withdraw-amount"]').val();
			var step2 = $('.withdraw-step-2');
			step2.find('.wsi-item__pay-method').text(inputText).append(inputImg);
			step2.find('.wsi-item__amount').text((+amount).toFixed(6));

			$('.withdraw-step').removeClass('is-active');
			step2.addClass('is-active');
			$('.withdraw-title-step-1').addClass('is-ok');
			$('.withdraw-title-step-2').addClass('is-active');
			/*            window.scrollTo({
							top: 200,
							behavior: "smooth"
						});
			*/
		}
	});

	//History
	$(".filter__show-item").click(function () {
		if ($(this).hasClass("active")) {
			return false;
		} else {
			$(".filter__show-item").removeClass("active");
			$(this).addClass("active");
		}
	});

	$('.js-history-form').on('submit', function (form) {
		loadHistory(getHistorySettings());
		return false;
	});
	if ($("section.acc-history").length) {
		resetHistoryForm();
		loadHistory(getHistorySettings());
	}
});

function loadReferrals(settings) {
	var options = {
		url: "/process",
		method: 'POST',
		data: {
			action: 'referrals',
			settings: settings
		},
		dataType: 'json',
		success: function (response) {
			if (response.status == 'ok') {
				$('table.acc-af-ref__table tbody tr:not(.js-clone)').detach();
				$('div.pagination a').detach();
				if (response.data.detailed.length > 0)
					for (i in response.data.detailed) {
						var row = response.data.detailed[i];
						var tr = $('table.acc-af-ref__table tbody tr.js-clone').clone();
						tr.find('.js-login').text(row.login);
						tr.find('.js-level').text('Level ' + row.level);
						tr.find('.js-regdate').text(row.regdate);
						tr.find('.js-email').text(row.email);
						tr.find('.js-status').text(row.status);
						tr.removeClass('js-clone');
						$('table.acc-af-ref__table tbody').append(tr);
					}
				if (response.data.pages > 1) {
					if (response.data.pages >= 3) {
						var before = false;
						var after = false;
						for (i = 1; i <= response.data.pages; i++) {
							if (i <= 2 || i > response.data.pages - 2 || (i >= response.data.curpage - 1 && i <= response.data.curpage + 1)) {
								var a = '<a class="pagination__item' + (i == response.data.curpage ? ' pagination--active' : '') + '" href="#">' + i + '</a>';
								$('div.pagination').append(a);
							}
							else {
								var a = '<a class="pagination__item js-no-control">&#8230;</a>';
								if (i < response.data.curpage && !before) {
									before = true;
									$('div.pagination').append(a);
								}
								if (i > response.data.curpage && !after) {
									after = true;
									$('div.pagination').append(a);
								}
							}
						}
					}
					else
						for (i = 1; i <= response.data.pages; i++) {
							var a = '<a class="pagination__item' + (i == response.data.curpage ? ' pagination--active' : '') + '" href="#">' + i + '</a>';
							$('div.pagination').append(a);
						}
				}
				$('div.pagination a').click(function (ev) {
					ev.preventDefault();
					if (!$(this).hasClass('js-no-control')) {
						var settings = {
							page: this.text
						}
						loadReferrals(settings);
					}
				});
			}
		}
	};
	$.ajax(options);
}

function resetHistoryForm() {
	var date2 = new Date();
	var to_day = date2.getDate().toString();
	var to_month = (date2.getMonth() + 1).toString();
	var to_year = (date2.getYear() - 100 + 2000).toString();
	var date1 = new Date((date2.getTime() / 1000 - 86400 * 14) * 1000);
	var from_day = date1.getDate().toString();
	var from_month = (date1.getMonth() + 1).toString();
	var from_year = (date1.getYear() - 100 + 2000).toString();

	$('input[name=ps]').val('all').change();
	$('input[name=from-day]').val(from_day).change();
	$('input[name=from-month]').val(from_month).change();
	$('input[name=from-year]').val(from_year).change();
	$('input[name=to-day]').val(to_day).change();
	$('input[name=to-month]').val(to_month).change();
	$('input[name=to-year]').val(to_year).change();
}

function getHistorySettings() {
	var settings = {
		ps: $('input[name=ps]').val(),
		from_day: $('input[name=from-day]').val(),
		from_month: $('input[name=from-month]').val(),
		from_year: $('input[name=from-year]').val(),
		to_day: $('input[name=to-day]').val(),
		to_month: $('input[name=to-month]').val(),
		to_year: $('input[name=to-year]').val(),
		page: 1
	}
	return settings;
}

function loadHistory(settings) {
	var options = {
		url: '/process',
		method: 'POST',
		data: {
			action: 'historyload',
			settings: settings
		},
		dataType: 'json',
		success: function (response) {
			if (response.status == 'ok') {
				for (type in response.data) {
					$('.js-tabtype-' + type + ' table tbody tr:not(.js-clone)').detach();
					$('.js-tabtype-' + type + ' div.pagination a').detach();
					if (response.data[type].status == 'ok') {
						for (i in response.data[type].rows) {
							var row = response.data[type].rows[i];
							var img = 'en/images/logos/ps' + row.ps + '.svg';

							var tr = $('.js-tabtype-' + type + ' table tbody tr.js-clone').clone();
							tr.find('td.js-type').text(row.action);
							tr.find('td.js-date').text(row.date);
							tr.find('td.js-ps img').attr('src', img);
							tr.find('td.js-desc').html(row.desc);
							tr.find('td.js-amount').html(row.amount + '&nbsp;' + row.ticker);
							tr.find('td.js-status').text(row.status);
							tr.removeClass('js-clone');
							$('.js-tabtype-' + type + ' table tbody').append(tr);
						}
						$('.js-tabtype-' + type + ' span.js-from').text(response.data[type].from);
						$('.js-tabtype-' + type + ' span.js-to').text(response.data[type].to);
						$('.js-tabtype-' + type + ' span.js-of').text(response.data[type].total);

						if (response.data[type].pages > 1) {
							if (response.data[type].pages >= 3) {
								var before = false;
								var after = false;
								for (i = 1; i <= response.data[type].pages; i++) {
									if (i <= 2 || i > response.data[type].pages - 2 || (i >= response.data[type].curpage - 1 && i <= response.data[type].curpage + 1)) {
										var a = '<a class="pagination__item' + (i == response.data[type].curpage ? ' pagination--active' : '') + '" href="#">' + i + '</a>';
										$('.js-tabtype-' + type + ' div.pagination').append(a);
									}
									else {
										var a = '<a class="pagination__item js-no-control">&#8230;</a>';
										if (i < response.data[type].curpage && !before) {
											before = true;
											$('.js-tabtype-' + type + ' div.pagination').append(a);
										}
										if (i > response.data[type].curpage && !after) {
											after = true;
											$('.js-tabtype-' + type + ' div.pagination').append(a);
										}
									}
								}
							}
							else
								for (i = 1; i <= response.data[type].pages; i++) {
									var a = '<a class="pagination__item' + (i == response.data[type].curpage ? ' pagination--active' : '') + '" href="#">' + i + '</a>';
									$('.js-tabtype-' + type + ' div.pagination').append(a);
								}

							$('.js-tabtype-' + type + ' div.pagination a').click(function (ev) {
								ev.preventDefault();
								if (!$(this).hasClass('js-no-control')) {
									var arr = $('.acc-history__tabs .acc-history__tab.active').attr('class').split(' ');
									arr.splice(arr.indexOf('acc-history__tab'), 1);
									arr.splice(arr.indexOf('active'), 1);
									var t = arr[0];
									var settings = {
										type: t,
										ps: $('input[name=ps]').val(),
										from_day: $('input[name=from-day]').val(),
										from_month: $('input[name=from-month]').val(),
										from_year: $('input[name=from-year]').val(),
										to_day: $('input[name=to-day]').val(),
										to_month: $('input[name=to-month]').val(),
										to_year: $('input[name=to-year]').val(),
										page: this.text
									}
									loadHistory(settings);
								}
							});
						}
					}
					else {
						$('.js-tabtype-' + type + ' table tbody').append('<tr><td colspan=' + response.data[type].cols + '>' + response.data[type].answer + '</td></tr>');
						$('.js-tabtype-' + type + ' span.js-from').text(0);
						$('.js-tabtype-' + type + ' span.js-to').text(0);
						$('.js-tabtype-' + type + ' span.js-of').text(0);
					}
				}
			}
		}
	};
	$.ajax(options);
}
