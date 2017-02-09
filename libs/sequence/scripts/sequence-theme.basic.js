// Get the Sequence element
			  var sequenceElement1 = document.getElementById("sequence1");

			  var options1 = {
				// Place your Sequence options here to override defaults
				// See: http://sequencejs.com/documentation/#options
				keyNavigation: true,
				fadeStepWhenSkipped: false,
				swipeNavigation: false,
				keyEvents: {
				  left: function(sequence) {
				  								$('input').blur();
				  								$('#sequence1 li.seq-in  button[aria-label=Previous]:eq(0)').trigger('click');
				  							},
				  right: function(sequence) {
				  								// $('input').blur();
				  								var invalid_input = $('#sequence1 li.seq-in').find('.invalid-input');
				  								var invalid_tin_input = $('#sequence1 li.seq-in').find('.invalid-tin-input');

				  								if(!(invalid_input.length + invalid_tin_input.length)){
				  									$('#sequence1 li.seq-in button[aria-label=Next]:eq(0)').trigger('click');
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
				}
			  }

			  // Launch Sequence on the element, and with the options we specified above
			  var mySequence1 = sequence(sequenceElement1, options1);