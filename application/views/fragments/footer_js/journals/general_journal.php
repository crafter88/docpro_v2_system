<script src="<?php echo base_url(); ?>/assets/js/apps/journals/general/app.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/general/controllers/transaction.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/general/controllers/document.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/general/directives/transaction.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/general/directives/document.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/parts/summary_general.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/parts/business_partners_general.js"></script>
<script>
	$('.title').on('click', '.cash-credit', function(){
		$('#card-2-form').slideDown('fast', function(){});
		$('.cash-credit').removeClass('btn-primary');
		$(this).addClass('btn-primary');
		
	});
	$('body').on('click', '.dataTables_wrapper table tr', function(){
		var table = $(this).closest('table');
		table.find('tr').removeClass('selected');
		$(this).addClass('selected');
	});

	var restriction = Object.create(v_restriction);
    restriction.required();
    restriction.no_space();
    restriction.format();
    restriction.select_required_trans();
    restriction.tin();
    restriction.decimal();
    restriction.number();
	$('body').on('click', '.v-submit-transaction', function(){
		var _this = $(this);
		let form = $(this).closest('form');

        var validation = Object.create(v_validation);
        var required_input = validation.required_input(form);
        var format_input = validation.format_input(form);
        var required_select = validation.required_select_trans(form);
        var decimal = validation.decimal_input(form);

        if(!required_input && !format_input && !required_select && !decimal){
        	_this.attr('disabled', true);
            _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
            form.submit();
        }else{
        	$.notify({
				icon: 'fa fa-exclamation',
				message: 'Please fill out all necessary fields',
			},{
				element: 'body',
				position: null,
				type: "danger",
				placement: {
					from: "top",
					align: "right"
				},
				offset: 20,
				spacing: 10,
				z_index: 99999999,
				delay: 5000,
				timer: 1000,
				animate: {
					enter: 'animated fadeInDown',
					exit: 'animated fadeOutUp'
				},
				template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
					'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
					'<span data-notify="icon"></span> ' +
					'<span data-notify="title">{1}</span> ' +
					'<span data-notify="message">{2}</span>' +
				'</div>' 
			});
        }
	});
</script>