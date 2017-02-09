<script>
	$(document).ready(function(){
		$('#company-table').DataTable({
			columnDefs: [{targets: [0,1,2,5,6], width: '1px'}],
		});
		
		$('#add').click(function(){
			$('#add-modal').modal('show');
		});
	
	
		$('#company-table').on('click', '.edit', function(){
			$('#edit-modal').modal('show');
		});
		
		$('#company-table').on('click', '.update', function(){
			$('#update-modal').modal('show');
		});
	
	
		//Codes Here!
		
		
		$('div').on('click', '.select-option', function(){
			$("input[name='classification']").val($(this)[0].textContent);
		});
		
		$('.classification-btn').click(function(){
			var options = {
						animation: true,
						placement: 'right',
						html: true,
						content: function(){
								return $('#co-class-select').html();
						}
			}
			$(this).popover(options);
		});
		
		$("input:not(input[name='classification']), select").focus(function(){
			$('.popover').hide();
		});
		
		initButtonPrevention();
	});
	
	var initButtonPrevention = function(){
		jQuery.fn.preventDoubleSubmission = function() {
			if($(this)[0].checkValidity()){
				$(this).on('submit',function(e){
					var $form = $(this);
					if ($form.data('submitted') === true) {
						e.preventDefault();
					} else {
						$form.data('submitted', true);
					}
				});
				return this;
			}
		};
		
		$('form').preventDoubleSubmission();
	}
</script>
