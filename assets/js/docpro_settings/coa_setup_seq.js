$(document).ready(function(){
	if(document.getElementById('coa-seq') !== null){
		var coa = document.getElementById('coa-seq');
		var options = {
						keyNavigation: false,
						fadeStepWhenSkipped: false,
						swipeNavigation: false,
						startingStepId: $('#seq-active').val(),
					};

		var coa_seq = sequence(coa, options);

		$('.set-1').click(function(){
			coa_seq.goTo(1);
			$('.btn-seq-wrapper').removeClass('active');
			$('#setup-tab-1').addClass('active');
			$('.popover').popover('hide');
		});
		$('.set-2').click(function(){
			coa_seq.goTo(2);
			$('.btn-seq-wrapper').removeClass('active');
			$('#setup-tab-2').addClass('active');
			$('.popover').popover('hide');
		});
		$('.set-3').click(function(){
			coa_seq.goTo(3);
			$('.btn-seq-wrapper').removeClass('active');
			$('#setup-tab-3').addClass('active');
			$('.popover').popover('hide');
		});
		$('.set-4').click(function(){
			coa_seq.goTo(4);
			$('.btn-seq-wrapper').removeClass('active');
			$('#setup-tab-4').addClass('active');
			$('.popover').popover('hide');
		});
		$('.set-5').click(function(){
			coa_seq.goTo(5);
			$('.btn-seq-wrapper').removeClass('active');
			$('#setup-tab-5').addClass('active');
			$('.popover').popover('hide');
		});
		$('.set-6').click(function(){
			coa_seq.goTo(6);
			$('.btn-seq-wrapper').removeClass('active');
			$('#setup-tab-6').addClass('active');
			$('.popover').popover('hide');
		});
	}
});