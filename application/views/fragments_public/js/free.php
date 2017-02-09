<script src="<?php echo base_url(); ?>libs/moderna/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var restriction = Object.create(v_restriction);
		restriction.number();
		restriction.required();
		restriction.format();
		restriction.no_space();

		var validation = Object.create(v_validation);
		$('.v-submit').click(function(){
			$(this).css('color', '#FFF');
			$(this).attr('disabled', true);
			$(this).html("<i class='fa fa-spinner fa-spin'></i> Loading");
			var form = $(this).closest('form');
			var required_input = validation.required_input(form);
			var format_input = validation.format_input(form);
			if(required_input || format_input){
				$('.v-notice').css('display', 'block');
				$(this).removeAttr('disabled');
				$(this).html("Submit");
			}else{
				form.submit();
			}
		});
	});
</script>