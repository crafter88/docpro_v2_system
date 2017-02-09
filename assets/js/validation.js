var initNumberValidation = function(){
	$('input.number').keypress(function(event){
		var e = event || window.event;
		var key = e.keyCode || e.which;
		key = String.fromCharCode(key);
		var regex = /[0-9\b]/;
		if (!regex.test(key)){
			e.preventDefault();
		}
	});
}
var initDecimalValidation = function(){
	$('input.decimal').keypress(function(event){
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
var initTinValidation = function(){
	$('input.tin-number').keypress(function(){
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
}
// var initTinValidation = function(){
// 	$('input.tin-number').keypress(function(){
// 		var regex = new RegExp("[a-zA-Z0-9]+");
// 		var hypen = new RegExp("\-");
// 		var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
// 		var length = $(this).val().length;
// 		if(length < 3 & regex.test(key)){
// 			return key;
// 		}else if(length === 3 & hypen.test(key)){
// 			return key;
// 		}else if(length < 7 & length > 3 & regex.test(key)){
// 			return key;
// 		}else if(length === 7 & hypen.test(key)){
// 			return key;
// 		}else if(length < 11 & length > 7 & regex.test(key)){
// 			return key;
// 		}else if(length === 11 & hypen.test(key)){
// 			return key;
// 		}else if(length <= 15 & length > 11 & regex.test(key)){
// 			return key;
// 		}else{
// 			event.preventDefault();
// 			return false;
// 		}
// 	});
// }

var initTinLimit = function(){
	$('input.tin-limit').focusout(function(){
		$(this).removeClass('invalid-tin-input');
		$(this).closest('div').find('.invalid-tin-notice').remove();
		if($(this).val().length < 16 && $(this).val().length > 0){
			$(this).addClass('invalid-tin-input');
			$("<p class='invalid-tin-notice'>*Invalid TIN number</p>").insertAfter($(this));
		}
	});
}

var decimalValidation = function(event){
	var e = event || window.event;
	var key = e.keyCode || e.which;
	key = String.fromCharCode(key);
	var regex = /[0-9\b]|\./;
	if (!regex.test(key)){
		e.preventDefault();
	}
	if(/\./.test(key)){
		if($(event.target).val().indexOf('.') != -1 | $(event.target).val().length === 0){
			e.preventDefault();
		}
	}
}
var numberValidation = function(event){
	var e = event || window.event;
	var key = e.keyCode || e.which;
	key = String.fromCharCode(key);
	var regex = /[0-9\b]/;
	if (!regex.test(key)){
		e.preventDefault();
	}
}

var no_space = function(){
	$(".no-space").on({
	  keydown: function(e) {
	    if (e.which === 32 && $(this).val().length === 0)
	      return false;
	  },
	  // change: function() {
	  //   this.value = this.value.replace(/\s/g, "");
	  // }
	});
}

var email = function(){
	$('input.email').focusout(function(){
		$(this).closest('div').find('.invalid-notice').remove();
		$(this).removeClass('invalid-input');
		if(!(/^([a-zA-Z0-9]+)(@)([a-zA-Z0-9]+)(\.)([a-zA-Z0-9]+)$/.test($(this).val()))){
			$(this).addClass('invalid-input');
			$("<p class='invalid-notice'>*Required Field</p>").insertAfter($(this));
		}
	});
}

var person_name = function(){
	$('input.person-name').focusout(function(){
		$(this).closest('div').find('.invalid-notice').remove();
		$(this).removeClass('invalid-input');
		if(!(/^([a-zA-Z]+)(\s)([a-zA-Z]{1})(\.)(\s)([a-zA-Z]+)$/.test($(this).val()))) {
			$(this).addClass('invalid-input');
			$("<p class='invalid-notice'>*Required Field</p>").insertAfter($(this));
		}
	});
}

var required = function(){
	$('.required').focusout(function(){
		$(this).closest('div').find('.invalid-notice').remove();
		$(this).removeClass('invalid-input');
		if ($(this).val().length === 0) {
			$(this).addClass('invalid-input');
			$("<p class='invalid-notice'>*Required Field</p>").insertAfter($(this));
		}
	});
}

var table_input_required = function(){
	$('.table_input_required').focusout(function(){
		$(this).removeClass('invalid-input');
		if ($(this).val().length === 0) {
			$(this).addClass('invalid-input');
			$(this).closest('div.table-wrapper').find('.error-notice').text('*Required Field');
		}
		if($(this).closest('div.table-wrapper').find('.invalid-input').length === 0){
			$(this).closest('div.table-wrapper').find('.error-notice').text('');
		}
	});
}

var count_valid_input = function(){
	$('.input-count').focusout(function(){
		var input = $(this).closest('form').find('.input-count');
		var invalid = 0;
		$.each(input, function(index, data){
			if($(data).hasClass('invalid-input') | $(data).val().length === 0){
				invalid++;
			}
		});

		$(this).closest('form').find('button[type=submit]').removeAttr('disabled');
		$(this).closest('form').find('button[type=submit]').closest('div').find('.submit-notice').remove();
		if(invalid > 0){
			$(this).closest('form').find('button[type=submit]').attr('disabled', true);
			$(this).closest('form').find('button[type=submit]').closest('div').append("<p class='submit-notice'>*Please fill all required fields</p>");
		}

	});
}

var required_readonly = function(){
	$('.required-readonly').on({
		keydown: function(e){
			return false;
		},
		focus: function(){
			$(this).blur();
		}
	});
}

$(document).ready(function(){
	initNumberValidation();
	initDecimalValidation();
	initTinValidation();
	initTinLimit();

	no_space();
	required();
	table_input_required();
	count_valid_input();
	email();
	person_name();
});

var initValidation = function(){
	initNumberValidation();
	initDecimalValidation();
	initTinValidation();
	initTinLimit();

	no_space();
	required();
	table_input_required();
	count_valid_input();
	email();
	person_name();
}