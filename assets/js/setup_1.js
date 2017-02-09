$('.options').selectize({
	create: true,
	sortField: 'text'

});

$('#check-individual').change(function(){
	if($(this).is(':checked')){
			$('.individual').css('display', 'block');
			$('.non-individual').css('display', 'none');
			$('input[name=company_type]').removeAttr('disabled');
			$(this).attr('disabled', true);
			$('input[name=company_type]').not($(this)).css('display', 'none');
			$('input[name=company_type]').not($(this)).prop('checked', false);
		}else{
			
		}
});
$('#check-nonindividual').change(function(){
		if($(this).is(':checked')){
			$('.non-individual').css('display', 'block');
			$('.individual').css('display', 'none');
			$('input[name=company_type]').removeAttr('disabled');
			$(this).attr('disabled', true);
			$('input[name=company_type]').not($(this)).css('display', 'none');
			$('input[name=company_type]').not($(this)).prop('checked', false);
		}
});

$('#rbtn-products').change(function(){

	if($(this).is(':checked')){
			$('.products').css('display', 'block');
		}else{
			$('.products').css('display', 'none');
		}
});

$('#rbtn-services').change(function(){
	if($(this).is(':checked')){
			$('.services').css('display', 'block');
		}else{
			$('.services').css('display', 'none');
		}
});


$('.table-input').on('change', '.bp_class', function(){
	if($(this).val() === '9'){
		$(this).removeAttr('name');
		$(this).closest('td').find('input').css('display', 'block');
		$(this).closest('td').find('input').attr('name', 'bp_class[]');
		$(this).closest('td').find('input').removeAttr('disabled');
		$(this).closest('td').find('input').focus();
	}else{
		$(this).attr('name', 'bp_class[]');
		$(this).closest('td').find('input').val('');
		$(this).closest('td').find('input').removeAttr('name');
		$(this).closest('td').find('input').css('display', 'none');
		$(this).closest('td').find('input').attr('disabled', true);
	}
});

$('.table-input').on('keypress', '.number', function(event){
	var regex = new RegExp("^[0-9]+$");
	var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	if(!regex.test(key)){
		event.preventDefault();
		return false;
	}
});

$('.table-input').on('keypress', '.tin-number', function(event){
	var regex = new RegExp("[a-zA-Z0-9]+");
	var hypen = new RegExp("\-");
	var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	var length = $(this).val().length;
	if(length < 3 & regex.test(key)){
		return key;
	}else if(length === 3 & hypen.test(key)){
		return key;
	}else if(length < 7 & length > 3 & regex.test(key)){
		return key;
	}else if(length === 7 & hypen.test(key)){
		return key;
	}else if(length < 11 & length > 7 & regex.test(key)){
		return key;
	}else if(length === 11 & hypen.test(key)){
		return key;
	}else if(length <= 15 & length > 11 & regex.test(key)){
		return key;
	}else{
		event.preventDefault();
		return false;
	}
});

var all_departments = [];
var all_pcc = [];
var capture_dept_pcc = function(){
	all_departments = [];
	all_pcc = [];
	var departments = $('#department-data').find('input[name*=dept_name]');
	var pcc = $('#profit-cost-center-data').find('input[name*=pcc_name]');
	$.each(departments, function(index, value){
		all_departments.push($(value).val());
	});
	$.each(pcc, function(index, value){
		all_pcc.push($(value).val());
	});
	
};
var append_pcc = function(){
	capture_dept_pcc();
	$('#profit-cost-center-data').find('select[name*=pcc_dept]').html('');

	$.each(all_departments, function(index, value){
		$('#profit-cost-center-data').find('select[name*=pcc_dept]').append("<option value='"+value+"'>"+value+"</option>");
	});
	
};
var append_pcc_department = function(){
	capture_dept_pcc();
	$('#product-data').find('select[name*=product_department]').html('');
	$('#product-data').find('select[name*=product_pcc]').html('');
	$('#service-data').find('select[name*=service_department]').html('');
	$('#service-data').find('select[name*=service_pcc]').html('');

	$.each(all_departments, function(index, value){
		$('#product-data').find('select[name*=product_department]').append("<option value='"+value+"'>"+value+"</option>");
		$('#service-data').find('select[name*=service_department]').append("<option value='"+value+"'>"+value+"</option>");
	});

	$.each(all_pcc, function(index, value){
		$('#product-data').find('select[name*=product_pcc]').append("<option value='"+value+"'>"+value+"</option>");
		$('#service-data').find('select[name*=service_pcc]').append("<option value='"+value+"'>"+value+"</option>");
	});
};

$('.dept_next_btn').click(append_pcc);
$('.pcc_next_btn').click(append_pcc_department);

$('li button[aria-label=Next]').click(function(){
	var progress_bar = $(this).closest('.container').find('.progress-bar');
	var percent = ((parseFloat($(this).closest('ul').find('li').index($(this).closest('ul').find('li.seq-in'))) + 2) * (100 / ($(this).closest('ul').find('li').length)));
	progress_bar.attr('aria-valuenow', percent);
	progress_bar.attr('style', 'width: '+percent+'%;');
});
$('li button[aria-label=Previous]').click(function(){
	var progress_bar = $(this).closest('.container').find('.progress-bar');
	var percent = (parseFloat($(this).closest('ul').find('li').index($(this).closest('ul').find('li.seq-in'))) * (100 / ($(this).closest('ul').find('li').length)));
	progress_bar.attr('aria-valuenow', percent);
	progress_bar.attr('style', 'width: '+percent+'%;');
});

$('button.setup_1').click(function(){
	$('#setup-label').removeClass('alert-success');
	$('#setup-label').addClass('alert-info');
	$('#setup-label').html("<p style='padding-right: 108px;'>SETUP I</p><p style='font-size: 18px; padding-right: 108px;'>Company</p>");
});
$('button.setup_2').click(function(){
	if(!($(this).hasClass('seq-prev'))){
		var inputs = $('.setup-1 input');
		$.each(inputs, function(index, value){
			if($(value).is(':invalid')){
				$(value).css('border', '1px solid red');
			}else{
				$(value).css('border-color', '#CCC');
			}
		});

		var invalid_inputs = $('.setup-1 input:invalid').length;
		if(invalid_inputs === 0){
			$('#setup-label').removeClass('alert-info');
			$('#setup-label').removeClass('alert-warning');
			$('#setup-label').addClass('alert-success');
			$('#setup-label').html("<p style='padding-right: 108px;'>SETUP II</p></p>");

			var progress_bar = $(this).closest('.container').find('.progress-bar');
			var percent = ((parseFloat($(this).closest('ul').find('li').index($(this).closest('ul').find('li.seq-in'))) + 2) * (100 / ($(this).closest('ul').find('li').length)));
			progress_bar.attr('aria-valuenow', percent);
			progress_bar.attr('style', 'width: '+percent+'%;');
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
	}else{
		$('#setup-label').removeClass('alert-info');
		$('#setup-label').removeClass('alert-warning');
		$('#setup-label').addClass('alert-success');
		$('#setup-label').html("<p style='padding-right: 108px;'>SETUP II</p></p>");
	}
	
});
$('button.setup_3').click(function(){
	var inputs = $('.setup-2 input');
	$.each(inputs, function(index, value){
		if($(value).is(':invalid')){
			$(value).css('border', '1px solid red');
		}else{
			$(value).css('border', 'none');
		}
	});

	var invalid_inputs = $('.setup-2 input:invalid').length;
	if(invalid_inputs === 0){
		var journals = $(this).closest('li').find('input[type=checkbox]:checked').length;
		if(journals === 0){
			$.notify({
				message: "<i class='fa fa-warning'></i> Please Select atleast 1 journal" 
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
		}else{
			$('#setup-label').removeClass('alert-success');
			$('#setup-label').addClass('alert-warning');
			$('#setup-label').html("<p style='padding-right: 108px;'>SETUP III</p></p>");

			var progress_bar = $(this).closest('.container').find('.progress-bar');
			var percent = ((parseFloat($(this).closest('ul').find('li').index($(this).closest('ul').find('li.seq-in'))) + 2) * (100 / ($(this).closest('ul').find('li').length)));
			progress_bar.attr('aria-valuenow', percent);
			progress_bar.attr('style', 'width: '+percent+'%;');
			mySequence1.next();
		}
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
});

$('button.required').click(function(){
	if(!($(this).hasClass('seq-prev'))){
		var inputs = $(this).closest('li').find('input');
		var selects = $(this).closest('li').find('select');
		$.each(inputs, function(index, value){
			if($(value).is(':invalid')){
				$(value).css('border', '1px solid red');
			}else{
				$(value).css('border', 'none');
			}
		});
		$.each(selects, function(index, value){
			if($(value).is(':invalid')){
				$(value).attr('style', 'border: 1px solid red !important; border-radius: 0;');
			}else{
				$(value).attr('style', 'border: none !important');
			}
		});

		var invalid_inputs = $(this).closest('li').find('input:invalid').length;
		invalid_inputs += $(this).closest('li').find('select:invalid').length;
		if(invalid_inputs === 0){
			var progress_bar = $(this).closest('.container').find('.progress-bar');
			var percent = ((parseFloat($(this).closest('ul').find('li').index($(this).closest('ul').find('li.seq-in'))) + 2) * (100 / ($(this).closest('ul').find('li').length)));
			progress_bar.attr('aria-valuenow', percent);
			progress_bar.attr('style', 'width: '+percent+'%;');
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
});

$('button.submit-setup').click(function(){
	if(!($(this).hasClass('seq-prev'))){
		var inputs = $('.setup-3 input');
		$.each(inputs, function(index, value){
			if($(value).is(':invalid')){
				$(value).css('border', '1px solid red');
			}else{
				$(value).css('border', 'none');
			}
		});

		var invalid_inputs = $('.setup-3 input:invalid').length;
		if(invalid_inputs > 0){
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
});

$('.col-md-6').on('click', '.n_a', function(){
	$(this).closest('.row').next('div').find('input').removeClass('invalid-input');
	$(this).closest('.row').next('div').find('input').removeClass('invalid-tin-input');
	$(this).closest('.row').find('button').attr('disabled', true);
	$(this).closest('.row').next('div').find('input').val('_BLANK_');
	$(this).closest('.row').next('div').find('input.number').val('0');
	$(this).closest('.row').next('div').find('input').removeAttr('required');
	$(this).closest('.row').next('div').find('input').attr('disabled', true);
	$(this).closest('.row').next('div').find('select').removeAttr('required');
	$(this).closest('.row').next('div').find('select').attr('disabled', true);
	$(this).closest('.row').next('div').find('select').css('border', 'none');
	$(this).closest('.row').next('div').find('input').css('border', 'none');
	$(this).replaceWith("<p class='applicable'>Click here! if applicable</p>")
});
$('.col-md-6').on('click', '.applicable', function(){
	$(this).closest('.row').find('button').removeAttr('disabled');
	$(this).closest('.row').next('div').find('input').val('');
	$(this).closest('.row').next('div').find('input').attr('required', true);
	$(this).closest('.row').next('div').find('input').removeAttr('disabled');
	$(this).closest('.row').next('div').find('select').attr('required', true);
	$(this).closest('.row').next('div').find('select').removeAttr('disabled');
	$(this).replaceWith("<p class='n_a'>Click here! if not applicable</p>")
});

$('.dept_skip_btn').click(function(){
	$('#profit-cost-center-data').find('select[name*=pcc_dept]').html('');
});

$('.pcc_skip_btn').click(function(){
	$('#profit-cost-center-data').find('select[name*=pcc_dept]').html('');
	$('#product-data').find('select[name*=product_department]').html('');
	$('#product-data').find('select[name*=product_pcc]').html('');
	$('#service-data').find('select[name*=service_department]').html('');
	$('#service-data').find('select[name*=service_pcc]').html('');
});

$('.skip_btn').click(function(){
	$(this).closest('li').find('.col-md-12:nth-child(1) button').attr('disabled', true);
	$(this).closest('li').find('.table-input').find('input').val('');
	$(this).closest('li').find('.table-input').find('input').css('border', 'none');
	$(this).closest('li').find('.table-input').find('select').css('border', 'none');
	$(this).closest('li').find('.table-input').find('textarea').css('border', 'none');
	$(this).closest('li').find('.table-input').find('input').removeAttr('required');
	$(this).closest('li').find('.table-input').find('input.number').val('0');
	$(this).closest('li').find('.table-input').find('input').attr('disabled', true);
	$(this).closest('li').find('.table-input').find('select').attr('disabled', true);
});

$('.skip_prev_btn').click(function(){
	$(this).closest('li').prev().find('.col-md-12:nth-child(1) button').removeAttr('disabled');
	$(this).closest('li').prev().find('.table-input').find('input').attr('required', true);
	$(this).closest('li').prev().find('.table-input').find('input').removeAttr('disabled');
	$(this).closest('li').prev().find('.table-input').find('select').removeAttr('disabled');
});

$('.table-input').on('change', '.tax_select', function(){
	var value = $(this).val();
	$(this).closest('tr').find('input[name*=tax_short_name]').val($(this).find('option[value='+value+']').attr('short-name'));
	$(this).closest('tr').find('input[name*=tax_rate]').val($(this).find('option[value='+value+']').attr('rate'));
	$(this).closest('tr').find('input[name*=tax_base]').val($(this).find('option[value='+value+']').attr('base'));
});

$('.table-input').on('change', '.bp_type_select', function(){
	var value = $(this).val();
	if(value === '2'){
		$(this).closest('tr').find('td:eq(2)').find('input').attr('placeholder', 'Company name');
	}
	if(value === '1'){
		$(this).closest('tr').find('td:eq(2)').find('input').attr('placeholder', 'Last name, First name, Middle name');
	}
	if(value === '3'){
		$(this).closest('tr').find('td:eq(2)').find('input').attr('placeholder', 'Government agency name');
	}
});

// SEQUENCE JS CallBack
mySequence1.nextPhaseStarted = function(id, sequence){
	$('.panel-nameplate .panel-label').text($('#setup-'+id).attr('setup-title'));
	$('#setup-tab-'+id).addClass('active');
	for(var i=0; i<id; i++){
		$('#setup-tab-'+i).removeClass('active');
		$('#setup-tab-'+i).addClass('done');
	}
	for(var i=15; i>id; i--){
		$('#setup-tab-'+i).removeClass('active');
		$('#setup-tab-'+i).removeClass('done');
	}
};