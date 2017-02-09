$(document).ready(function(){
	var documents = document.getElementById('documents-seq');
	var options = {
					keyNavigation: false,
					fadeStepWhenSkipped: false,
					swipeNavigation: false,
					// startingStepId: $('#documents-active').val(),
				};

	var documents_seq = sequence(documents, options);

	$('#setup-tab-1 button').click(function(){
	 	$('.popover').popover('hide');
	 	$('.btn-seq').removeClass('seq-selected');
	 	$(this).addClass('seq-selected');
        documents_seq.goTo(1);
 	});
 	$('#setup-tab-2 button').click(function(){
	 	$('.popover').popover('hide');
	 	$('.btn-seq').removeClass('seq-selected');
	 	$(this).addClass('seq-selected');
        documents_seq.goTo(2);
 	});

 	$('.next-seq-btn').click(function(){
 		$('.popover').popover('hide');
 		$('#setup-tab-1 button').removeClass('seq-selected');
 		$('#setup-tab-2 button').addClass('seq-selected');
      	documents_seq.next();
 	});
 	$('.prev-seq-btn').click(function(){
 		$('.popover').popover('hide');
 		$('#setup-tab-2 button').removeClass('seq-selected');
 		$('#setup-tab-1 button').addClass('seq-selected');
     	documents_seq.prev();
 	});
});