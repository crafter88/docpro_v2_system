$(document).ready(function(){

	var banks = document.getElementById('banks-seq');
	var option = {
					keyNavigation: false,
					fadeStepWhenSkipped: false,
					swipeNavigation: false,
					startingStepId: $('#seq-active').val(),
				};

	var banks_seq = sequence(banks, option);

 	$('#setup-tab-1 button').click(function(){
 		$('.popover').popover('hide');
	 	$('.btn-seq').removeClass('seq-selected');
	 	$(this).addClass('seq-selected');
        banks_seq.goTo(1);
 	});

 	$('#setup-tab-2 button').click(function(){
 		$('.popover').popover('hide');
	 	$('.btn-seq').removeClass('seq-selected');
	 	$(this).addClass('seq-selected');
        banks_seq.goTo(2);
 	});

 	$('.next-seq-btn').click(function(){
 		$('.popover').popover('hide');
 		$('#setup-tab-1 button').removeClass('seq-selected');
 		$('#setup-tab-2 button').addClass('seq-selected');
      	banks_seq.next();
 	});
 	$('.prev-seq-btn').click(function(){
 		$('.popover').popover('hide');
 		$('#setup-tab-2 button').removeClass('seq-selected');
 		$('#setup-tab-1 button').addClass('seq-selected');
      	banks_seq.prev();
 	});
});