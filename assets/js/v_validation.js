var v_restriction = {
	number: function(){
		$('input.v-number').keypress(function(event){
			var e = event || window.event;
			var key = e.keyCode || e.which;
			key = String.fromCharCode(key);
			var regex = /[0-9\b]/;
			if (!regex.test(key)){
				e.preventDefault();
			}
		});
	},
	required: function(){
		$('input.v-required').focusout(function(){
			if($(this).val().trim() === ''){
				$(this).addClass('v-invalid');
				$('.v-invalid').focusin(function(){
					$(this).removeClass('v-invalid');
				});
			}
		});
	},
	format: function(){
		$('input.v-format').focusout(function(){
			var format = new RegExp($(this).attr('f'));
			var value = $(this).val();
			if(!format.test(value) && value.length > 0){
				$(this).addClass('v-invalid-format');
				$(this).focusin(function(){
					$(this).removeClass('v-invalid-format');
				});
			}
		});
	},
	no_space: function(){
		$('input').on('keydown', function(e){
			if(e.which === 32 && $(this).val().length === 0){
				return false;
			}
		});
	},
	tin: function(){
		$('input.v-tin').keypress(function(){
			if($(this).val().length === 3 || $(this).val().length === 7 || $(this).val().length === 11){
				$(this).val($(this).val() + '-');
			}
			var regex = new RegExp("[0-9]+\b*");
			var hypen = new RegExp("\-?\b*");
			var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
			var length = $(this).val().length;
			if(length < 3 & regex.test(key)){
				return key;
			}else if(length === 3 & hypen.test(key)){
				return key;
			}else if(length < 7 & length > 3 & regex.test(key)){
				return key;
			}else if(length === 7 & hypen.test(key)){
				return key;
			}else if(length < 11 & length > 7 & regex.test(key)){
				return key;
			}else if(length === 11 & hypen.test(key)){
				return key;
			}else if(length <= 15 & length > 11 & regex.test(key)){
				return key;
			}else{
				event.preventDefault();
				return false;
			}
		});
	},
	select_required: function(){
		$('.v-select-required input').focusout(function(){
			if($(this).parent().parent().parent().find('select.v-select-required').val() === ''){
				$(this).parent().parent().parent().find('.selectize-control').addClass('v-invalid');
				$(this).parent().parent().parent().find('.selectize-input').addClass('v-invalid');
			}else{
				$(this).parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
				$(this).parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
			}

			$(this).focusin(function(){
				$(this).parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
				$(this).parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
			});
		});
	},
	select_required_trans: function(){
		// $('.form-group').on('focusout', '.v-select-required-trans input', function(){
		// 	if($(this).parent().parent().parent().find('span.ng-binding.ng-scope').text() === ''){
		// 		$(this).parent().parent().parent().addClass('v-invalid');
		// 		$(this).parent().parent().parent().addClass('v-invalid');
		// 	}else{
		// 		$(this).parent().parent().parent().removeClass('v-invalid');
		// 		$(this).parent().parent().parent().removeClass('v-invalid');
		// 	}

		// 	$(this).focusin(function(){
		// 		$(this).parent().parent().parent().removeClass('v-invalid');
		// 		$(this).parent().parent().parent().removeClass('v-invalid');
		// 	});
		// });
	},
	min_date: function(){
		var date = new Date();
		$('input[type=date]').attr('min', date.toString('yyyy-MM-dd'));
		$('input[type=date]').val(date.toString('yyyy-MM-dd'));
	},
	unique: function(){
		var inputs = $('input.v-unique');
		$.each(inputs, function(index, input){
			$(input).focusout(function(){
				var _this = $(this);
				var url = window_location+$(input).attr('u');
				var value = $(input).val();
				$.get(url, {data: value}, function(response){
					if(parseFloat(response) > 0){
						_this.addClass('v-invalid-format');
						_this.attr('title', 'Username is already taken');
					}
				});
			});
			$(input).focusin(function(){
				$(this).removeClass('v-invalid-format');
				$(this).attr('title', $(this).attr('o_title'));
			});
		});
	},
	unique_edit: function(){
		var inputs = $('input.v-unique');
		$.each(inputs, function(index, input){
			$(input).focusout(function(){
				var _this = $(this);
				var url = window_location+$(input).attr('u');
				var value = $(input).val();
				var o_v = $(input).attr('o_v');
				if(value !== o_v){
					$.get(url, {data: value}, function(response){
						if(parseFloat(response) > 0){
							_this.addClass('v-invalid-format');
							_this.attr('title', 'Username is already taken');
						}
					});
				}
			});
			$(input).focusin(function(){
				$(this).removeClass('v-invalid-format');
				$(this).attr('title', $(this).attr('o_title'));
			});
		});
	},
	decimal: function(){
		$('input.v-decimal').keypress(function(event){
			var e = event || window.event;
			var key = e.keyCode || e.which;
			key = String.fromCharCode(key);
			var regex = /[0-9\b]|\./;
			if (!regex.test(key)){
				e.preventDefault();
			}
			if(/\./.test(key)){
				if($(this).val().indexOf('.') != -1 | $(this).val().length === 0){
					e.preventDefault();
				}
			}
		});
	}
}

var v_validation = {
	required_input: function(v_form){
		var count = 0;
		var v_inputs = v_form.find('input.v-required');
		$.each(v_inputs, function(index, value){
			if($(value).val().length === 0){
				$(value).addClass('v-invalid');
				$('.v-invalid').focusin(function(){
					$(this).removeClass('v-invalid');
				});
				count += 1;
			}
		});
		return count;
	},
	required_select: function(v_form){
		var count = 0;
		var v_select = v_form.find('.v-select-required input');
		$.each(v_select, function(index, value){
			if($(this).parent().parent().parent().find('select.v-select-required').val() === ''){
				$(this).parent().parent().parent().find('.selectize-control').addClass('v-invalid');
				$(this).parent().parent().parent().find('.selectize-input').addClass('v-invalid');

				$(this).focusin(function(){
					$(this).parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
					$(this).parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
				});

				count += 1;
			}
		});
		return count;
	},
	required_select_trans: function(v_form){
		var count = 0;
		var v_select = v_form.find('.v-select-required-trans span.ng-binding.ng-scope');
		$.each(v_select, function(index, value){
			if($(value).text() === ''){
				$(this).parent().parent().parent().addClass('v-invalid');
				$(this).parent().parent().parent().addClass('v-invalid');

				$(this).focusin(function(){
					$(this).parent().parent().parent().removeClass('v-invalid');
					$(this).parent().parent().parent().removeClass('v-invalid');
				});

				count += 1;
			}
		});
		return count;
	},
	format_input: function(v_form){
		var result = false;
		var v_inputs = v_form.find('input.v-format');
		$.each(v_inputs, function(index, value){
			var format = new RegExp($(value).attr('f'));
			var value = $(value).val();
			if(!format.test(value) && value.length > 0){
				$(this).addClass('v-invalid-format');
				$(this).focusin(function(){
					$(this).removeClass('v-invalid-format');
				});
				result = true;

			}
		});
		return result;
	},
	unique_input: function(v_form, callback){
		var result = false;
		var inputs = v_form.find('input.v-unique');
		$.each(inputs, function(index, input){
			var _this = $(this);
			var url = window_location+$(input).attr('u');
			var value = $(input).val();
			$.get(url, {data: value}, function(response){
				if(parseFloat(response) > 0){
					_this.addClass('v-invalid-format');
					_this.attr('title', 'Username is already taken');
					result = true;
				}
			});
			$(input).focusin(function(){
				$(this).removeClass('v-invalid-format');
				$(this).attr('title', $(this).attr('o_title'));
			});
		});
		$(document).ajaxStop(function(){
			callback(result);
			$(this).unbind("ajaxStop");
		});
	},
	unique_input_edit: function(v_form, callback){
		var result = false;
		var inputs = v_form.find('input.v-unique');
		var ajax_flag = false;
		$.each(inputs, function(index, input){
			var _this = $(this);
			var url = window_location+$(input).attr('u');
			var value = $(input).val();
			var o_v = $(input).attr('o_v');
			if(value !== o_v){
				ajax_flag = true;
				$.get(url, {data: value}, function(response){
					if(parseFloat(response) > 0){
						_this.addClass('v-invalid-format');
						_this.attr('title', 'Username is already taken');
						result = true;
					}
				});
			}
			$(input).focusin(function(){
				$(this).removeClass('v-invalid-format');
				$(this).attr('title', $(this).attr('o_title'));
			});
		});
		if(ajax_flag){
			$(document).ajaxStop(function(){
				callback(result);
				$(this).unbind("ajaxStop");
			});
		}else{
			callback(result);
		}
		
	},
	decimal_input: function(v_form){
		var result = false;
		var v_inputs = v_form.find('input.v-decimal');
		$.each(v_inputs, function(index, value){
			var format = new RegExp($(value).attr('f'));
			var value = $(value).val();
			if(!format.test(value) && value.length > 0){
				$(this).addClass('v-invalid-format');
				$(this).focusin(function(){
					$(this).removeClass('v-invalid-format');
				});
				result = true;

			}
		});
		return result;
	}
}