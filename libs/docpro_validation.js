$.fn.extend({
	validate: function(element, rules){
		if(rules.required && rules.required === true){
			$(element).closest('.form-group').find('.error-msg').remove();
			if(!($(element).val())){
				$(element).addClass('invalid-input');
				$(element).closest('.form-group').append("<label class='error-msg'>* This field is required</label>");
			}else{
				$(element).removeClass('invalid-input');
			}
		}
	}
});