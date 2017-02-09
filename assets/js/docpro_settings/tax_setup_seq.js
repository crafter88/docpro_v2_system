$(document).ready(function(){
	if(document.getElementById('tax-seq') !== null){
		var tax = document.getElementById('tax-seq');
		var option = {
						keyNavigation: false,
						fadeStepWhenSkipped: false,
						swipeNavigation: false,
						startingStepId: $('#seq-active').val(),
					};

		var tax_seq = sequence(tax, option);

	 	$('#setup-tab-1 button').click(function(){
	 		$('.popover').popover('hide');
		 	$('.btn-seq').removeClass('seq-selected');
		 	$(this).addClass('seq-selected');
	        tax_seq.goTo(1);
	 	});

	 	$('#setup-tab-2 button').click(function(){
	 		$('.popover').popover('hide');
		 	$('.btn-seq').removeClass('seq-selected');
		 	$(this).addClass('seq-selected');
	        tax_seq.goTo(2);
	 	});

	 	$('.next-seq-btn').click(function(){
	 		$('.popover').popover('hide');
	 		$('#setup-tab-1 button').removeClass('seq-selected');
	 		$('#setup-tab-2 button').addClass('seq-selected');
	      	tax_seq.next();
	 	});
	 	$('.prev-seq-btn').click(function(){
	 		$('.popover').popover('hide');
	 		$('#setup-tab-2 button').removeClass('seq-selected');
	 		$('#setup-tab-1 button').addClass('seq-selected');
	      	tax_seq.prev();
	 	});
	}
	
});