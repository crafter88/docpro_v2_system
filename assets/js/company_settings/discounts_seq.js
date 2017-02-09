$(document).ready(function(){
	var discounts = document.getElementById('discounts-seq');
	var options = {
					keyNavigation: false,
					fadeStepWhenSkipped: false,
					swipeNavigation: false,
					// startingStepId: $('#discounts-active').val(),
				};

	var discounts_seq = sequence(discounts, options);

	$('#setup-tab-1 button').click(function(){
	 	$('.popover').popover('hide');
	 	$('.btn-seq').removeClass('seq-selected');
	 	$(this).addClass('seq-selected');
        discounts_seq.goTo(1);
 	});
 	$('#setup-tab-2 button').click(function(){
	 	$('.popover').popover('hide');
	 	$('.btn-seq').removeClass('seq-selected');
	 	$(this).addClass('seq-selected');
        discounts_seq.goTo(2);
 	});

 	$('.next-seq-btn').click(function(){
 		$('.popover').popover('hide');
 		$('#setup-tab-1 button').removeClass('seq-selected');
 		$('#setup-tab-2 button').addClass('seq-selected');
      	discounts_seq.next();
 	});
 	$('.prev-seq-btn').click(function(){
 		$('.popover').popover('hide');
 		$('#setup-tab-2 button').removeClass('seq-selected');
 		$('#setup-tab-1 button').addClass('seq-selected');
     	discounts_seq.prev();
 	});
});