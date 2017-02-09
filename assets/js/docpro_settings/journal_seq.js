$(document).ready(function(){
	var journal = document.getElementById('journal-seq');
	var options = {
					keyNavigation: false,
					fadeStepWhenSkipped: false,
					swipeNavigation: false,
					startingStepId: $('#seq-active').val(),
				};

	var journal_seq = sequence(journal, options);

	$('#setup-tab-1 button').click(function(){
	 	$('.popover').popover('hide');
	 	$('.btn-seq').removeClass('seq-selected');
	 	$(this).addClass('seq-selected');
        journal_seq.goTo(1);
 	});
 	$('#setup-tab-2 button').click(function(){
	 	$('.popover').popover('hide');
	 	$('.btn-seq').removeClass('seq-selected');
	 	$(this).addClass('seq-selected');
        journal_seq.goTo(2);
 	});

 	$('.next-seq-btn').click(function(){
 		$('.popover').popover('hide');
 		$('#setup-tab-1 button').removeClass('seq-selected');
 		$('#setup-tab-2 button').addClass('seq-selected');
      	journal_seq.next();
 	});
 	$('.prev-seq-btn').click(function(){
 		$('.popover').popover('hide');
 		$('#setup-tab-2 button').removeClass('seq-selected');
 		$('#setup-tab-1 button').addClass('seq-selected');
      	journal_seq.prev();
 	});
});