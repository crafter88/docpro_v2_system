<script>
	$('.number').bind('keypress', function(event){
		var regex = new RegExp("^[0-9]+$");
		var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
		if(!regex.test(key)){
			event.preventDefault();
			return false;
		}
	});
</script>

<script>
	$('input').on('keydown', function(e){
		if(e.which === 32 && e.target.selectionStart === 0){
			return false;
		}
	});
	$('textarea').on('keydown', function(e){
		if(e.which === 32 && e.target.selectionStart === 0){
			return false;
		}
	});
</script>

<script>
	var password = document.getElementById("password")
		var confirm_password = document.getElementById("confirm_password");

	function validatePassword(){
	  if(password.value != confirm_password.value) {
	    confirm_password.setCustomValidity("Passwords Don't Match");
	  } else {
	    confirm_password.setCustomValidity('');
	  }
	}

	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
</script>

<script>
	$('button.n_a').click(function(){
		var input = $(this).closest('div').find('input');

		if($(this).attr('token') === 'n_a'){
			if(!(input.hasClass('number'))){
				input.val('_BLANK_');
			}else{
				input.val(0);
			}
			input.attr('disabled', true);
			$(this).text('A');
			$(this).attr('token', 'a');
		}else{
			input.val('');
			input.removeAttr('disabled');
			$(this).text('N/A');
			$(this).attr('token', 'n_a');
		}
		
	});
</script>