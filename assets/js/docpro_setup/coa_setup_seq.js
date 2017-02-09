$(document).ready(function(){
	var coa = document.getElementById('coa-seq');
	var options = {
					keyNavigation: false,
					fadeStepWhenSkipped: false,
					swipeNavigation: false,
					startingStepId: $('#seq-active').val(),
				};

	var coa_seq = sequence(coa, options);

	var disable_add = function(){
		if(lvl_1_id === 0){
			$('#add-acc-classification').attr('disabled', true);
		}
		if(lvl_2_id === 0){
			$('#add-line-items').attr('disabled', true);
		}
		if(lvl_3_id === 0){
			$('#add-acc-sub').attr('disabled', true);
		}
	}

	$('.set-1').click(function(){
		coa_seq.goTo(1);
		$('.btn-seq-wrapper').removeClass('active');
		$('#setup-tab-1').addClass('active');
		$('.popover').popover('hide');
		$('button').removeAttr('disabled');
		disable_add();
	});
	$('.set-2').click(function(){
		coa_seq.goTo(2);
		$('.btn-seq-wrapper').removeClass('active');
		$('#setup-tab-2').addClass('active');
		$('.popover').popover('hide');
		$('button').removeAttr('disabled');
		disable_add();
	});
	$('.set-3').click(function(){
		coa_seq.goTo(3);
		$('.btn-seq-wrapper').removeClass('active');
		$('#setup-tab-3').addClass('active');
		$('.popover').popover('hide');
		$('button').removeAttr('disabled');
		disable_add();
	});
	$('.set-4').click(function(){
		coa_seq.goTo(4);
		$('.btn-seq-wrapper').removeClass('active');
		$('#setup-tab-4').addClass('active');
		$('.popover').popover('hide');
		$('button').removeAttr('disabled');
		disable_add();
	});
	$('.set-5').click(function(){
		coa_seq.goTo(5);
		$('.btn-seq-wrapper').removeClass('active');
		$('#setup-tab-5').addClass('active');
		$('.popover').popover('hide');
		$('button').removeAttr('disabled');
		disable_add();
	});
	$('.set-6').click(function(){
		coa_seq.goTo(6);
		$('.btn-seq-wrapper').removeClass('active');
		$('#setup-tab-6').addClass('active');
		$('.popover').popover('hide');
		$('button').removeAttr('disabled');
		disable_add();
	});

	$('body').on('click', '.show-lvl-1', function(){
		coa_seq.goTo(1);
		$('.btn-seq-wrapper').removeClass('active');
		$('#setup-tab-1').addClass('active');
		$('.popover').popover('hide');
		$('button').removeAttr('disabled');
		disable_add();
	});
	$('body').on('click', '.show-lvl-2', function(){
		coa_seq.goTo(2);
		$('.btn-seq-wrapper').removeClass('active');
		$('#setup-tab-2').addClass('active');
		$('.popover').popover('hide');
		$('button').removeAttr('disabled');
		disable_add();
	});
	$('body').on('click', '.show-lvl-3', function(){
		coa_seq.goTo(3);
		$('.btn-seq-wrapper').removeClass('active');
		$('#setup-tab-3').addClass('active');
		$('.popover').popover('hide');
		$('button').removeAttr('disabled');
		disable_add();
	});
	$('body').on('click', '.show-lvl-4', function(){
		coa_seq.goTo(4);
		$('.btn-seq-wrapper').removeClass('active');
		$('#setup-tab-4').addClass('active');
		$('.popover').popover('hide');
		$('button').removeAttr('disabled');
		disable_add();
	});

});