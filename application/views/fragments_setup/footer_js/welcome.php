<script>
	$(document).ready(function(){
		$('.setup_type').click(function(){
			$('.setup_type').prop('checked', false);
			$(this).prop('checked', true);
		});

		$('#continue-setup-btn').click(function(){
			var c = $('.setup_type:checked').val();
			if(c){
				$("#alert-setup").css('display', 'none');

				var form = $("<form action='"+window_location+"/setup/account' method='GET'>"+
						"<input type='hidden' name='setup_type' value='"+c+"'>"+		
						"</form>");
				$('body').append(form);
				form.submit();
			}else{
				$('#alert-setup').css('display', 'block');
			}
		});
	});
</script>