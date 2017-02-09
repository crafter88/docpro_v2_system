<script src="<?php echo base_url(); ?>/libs/sequence/scripts/sequence-theme.basic.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/apps/setup/app.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/apps/setup/controllers/controller.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/apps/setup/directives/directive.js"></script>
	
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/setup.js"></script>



<script type="text/javascript">
	$(document).ready(function(){
		initRipple();
	});	
</script>

<script type="text/javascript">
	var seq_goto = function(id){
		if(mySequence1.currentStepId > id){
			mySequence1.goTo(id);
		}
	}	

	var next_setup = function(event){
		$(event.target).closest('li').find('input.required:empty').focusout();
		$(event.target).closest('li').find('input.table_input_required:empty').focusout();
		var invalid_input = $(event.target).closest('li').find('.invalid-input');
		var invalid_tin_input = $(event.target).closest('li').find('.invalid-tin-input');

		if(!(invalid_input.length + invalid_tin_input.length)){
			$(event.target).closest('li').find('.error-notice').text('');
			mySequence1.next();
		}else{
			$.notify({
			message: "<i class='fa fa-warning'></i> Please fill all necessary information" 
			},{
				type: 'danger',
				placement: {
					from: "top",
					align: "right"
				},
				animate: {
					enter: 'animated fadeInDown',
					exit: 'animated fadeOutUp'
				},
				delay: 1000,
			});
		}
	}

	$('.table-input').on('keydown', '.no_space', function(event){
		if (event.which === 32 && $(this).val().length === 0){
	      return false;
		}
	});

	mySequence1.currentPhaseStarted = function(){
		$('#setup-'+(mySequence1.currentStepId+1)).find('input').removeClass('invalid-input');
		$('#setup-'+(mySequence1.currentStepId+1)).find('input').removeClass('invalid-tin-input');
		$('#setup-'+(mySequence1.currentStepId+1)).find('.invalid-notice').remove();
		$('#setup-'+(mySequence1.currentStepId+1)).find('.invalid-tin-notice').remove();
	}

</script>