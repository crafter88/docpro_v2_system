<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/apps/setup/app.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/apps/setup/controllers/controller.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/apps/setup/directives/directive.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/setup.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/company_setup/datatables.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/company_setup/nav_tabs.js"></script>

<script type="text/javascript">
	var flag1 = 0;
	var flag2 = 0;

	$(document).ready(function(){
		initRipple();
		$.get(window_location+'/setup/setup1/get_tin_tax_type', function(response){
			var tin_no = JSON.parse(response)[0].cb_tin;
			var tax_type = JSON.parse(response)[0].cb_tax_type;
			$('#tin_no').val(tin_no);
			$('#tax_type').val(tax_type);
			$('#tax_type').selectize({create: false});

			if(tin_no !== ''){flag1 = 1;}
			if(tax_type !== ''){flag2 = 1;}
		});
		$(document).ajaxStop(function(){
		  	$('#loader').removeClass('show');
		});
	});	
</script>

<!-- VALIDATION -->
<script>
	$('.table-input').on('keydown', '.no_space', function(event){
		if (event.which === 32 && $(this).val().length === 0){
	      return false;
		}
	});
</script>

<!-- SETUP 1 FUNCTION -->
<script>
	$('#tin_no').focusout(function(){
		var _this = $(this);
		setTimeout(function(){
			if(!(_this.hasClass('invalid-input')) && !(_this).hasClass('invalid-tin-input')){
				var tin_no = $(_this).val();
				if(tin_no !== ''){
					$.get(window_location+'/setup/setup1/add_tin_no', {tin_no: tin_no}, function(response){
						flag1 = 1;
					});		
				}
			}
		}, 300);
	});

	$('#tax_type').change(function(){
		var tax_type = $(this).val();
		if(tax_type !== ''){
			$.get(window_location+'/setup/setup1/add_tax_type', {tax_type: tax_type}, function(response){
				flag2 = 1;
			});
		}
	});

	$('.navbar-body').on('click', '#add-employee-submit', function(){
		var popover = $(this).closest('.popover');
		var data = {
					'add-fname': popover.find('input[name=add-fname]').val(),
					'add-mname': popover.find('input[name=add-mname]').val(),
					'add-lname': popover.find('input[name=add-lname]').val(),
					'add-emp-address': popover.find('input[name=add-emp-address]').val(),
					'add-emp-cno': popover.find('input[name=add-emp-cno]').val(),
					'add-emp-email': popover.find('input[name=add-emp-email]').val(),
				}
		$.get(window_location+'/setup/setup1/add_employee', data, function(response){
			employee_table.ajax.reload();
			admin_users.ajax.reload();
			admin_branches.ajax.reload();
			$('.popover').popover('hide');
       		$('.card-body button').removeAttr('disabled');
		});
	});
	$('.navbar-body').on('click', '#edit-employee-submit', function(){
		var popover = $(this).closest('.popover');
		var data = {
					'edit-id' : popover.find('input[name=edit-id]').val(),
					'edit-fname': popover.find('input[name=edit-fname]').val(),
					'edit-mname': popover.find('input[name=edit-mname]').val(),
					'edit-lname': popover.find('input[name=edit-lname]').val(),
					'edit-emp-address': popover.find('input[name=edit-emp-address]').val(),
					'edit-emp-cno': popover.find('input[name=edit-emp-cno]').val(),
					'edit-emp-email': popover.find('input[name=edit-emp-email]').val(),
				}
		$.get(window_location+'/setup/setup1/edit_employee', data, function(response){
			employee_table.ajax.reload();
			admin_users.ajax.reload();
			admin_branches.ajax.reload();
			$('.popover').popover('hide');
       		$('.card-body button').removeAttr('disabled');
		});
	});
	$('.navbar-body').on('click', '#add-branch-submit', function(){
		var popover = $(this).closest('.popover');
		var data = {
					'add-branch-name': popover.find('input[name=add-branch-name]').val(),
					'add-branch-address': popover.find('input[name=add-branch-address]').val(),
					'add-branch-tin': popover.find('input[name=add-branch-tin]').val(),
					'add-branch-cno': popover.find('input[name=add-branch-cno]').val(),
					'add-branch-email': popover.find('input[name=add-branch-email]').val()
				}
		$.get(window_location+'/setup/setup1/add_branch', data, function(response){
			branch_table.ajax.reload();
			$('.popover').popover('hide');
       		$('.card-body button').removeAttr('disabled');
		});
	});
	$('.navbar-body').on('click', '#edit-branch-submit', function(){
		var popover = $(this).closest('.popover');
		var data = {
					'edit-id': popover.find('input[name=edit-id]').val(),
					'edit-branch-name': popover.find('input[name=edit-branch-name]').val(),
					'edit-branch-address': popover.find('input[name=edit-branch-address]').val(),
					'edit-branch-tin': popover.find('input[name=edit-branch-tin]').val(),
					'edit-branch-cno': popover.find('input[name=edit-branch-cno]').val(),
					'edit-branch-email': popover.find('input[name=edit-branch-email]').val()
				}
		$.get(window_location+'/setup/setup1/edit_branch', data, function(response){
			branch_table.ajax.reload();
			$('.popover').popover('hide');
       		$('.card-body button').removeAttr('disabled');
		});
	});

	$('#add-employee-btn').click(function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('add-employee-modal');
				return 'right';
			},
			content: function(){
				return $('#add-employee-popover').html();
			},
			callback: function(){
				$('.add-employee-modal').addClass('animate');
            },
            container: '.navbar-body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
        initRipple();
        no_space();
        initNumberValidation();
        initSingleSubmit();
	});
	$('#employee-table').on('click', '.edit', function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = employee_table.row(this.closest('tr')).data();
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('edit-employee-modal');
				return 'right';
			},
			content: function(){
				return $('#edit-employee-popover').html();
			},
			callback: function(){
				$('.edit-employee-modal').find('input[name=edit-fname]').val(data.p_fname);
				$('.edit-employee-modal').find('input[name=edit-mname]').val(data.p_mname);
				$('.edit-employee-modal').find('input[name=edit-lname]').val(data.p_lname);
				$('.edit-employee-modal').find('input[name=edit-emp-address]').val(data.p_address);
				$('.edit-employee-modal').find('input[name=edit-emp-cno]').val(data.p_cno);
				$('.edit-employee-modal').find('input[name=edit-emp-email]').val(data.p_email);
				$('.edit-employee-modal').find('input[name=edit-id]').val(data.p_id);
				$('.edit-employee-modal').addClass('animate');
            },
            container: '.navbar-body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
        initRipple();
        no_space();
        initNumberValidation();
        initSingleSubmit();
	});
	$('#employee-table').on('click', '.delete', function(){
		var p_id = employee_table.row(this.closest('tr')).data().p_id;
		$.get(window_location+'/setup/setup1/delete_employee', {p_id: p_id}, function(response){
			employee_table.ajax.reload();
			$('.popover').popover('hide');
       		$('.card-body button').removeAttr('disabled');
		});
	});

	$('#add-branch-btn').click(function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('add-branch-modal');
				return 'right';
			},
			content: function(){
				return $('#add-branch-popover').html();
			},
			callback: function(){
				$('.add-branch-modal').addClass('animate');
            },
            container: '.navbar-body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
        initRipple();
        no_space();
        initNumberValidation();
        initSingleSubmit();
	});
	$('#branch-table').on('click', '.edit', function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = branch_table.row(this.closest('tr')).data();
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('edit-branch-modal');
				return 'right';
			},
			content: function(){
				return $('#edit-branch-popover').html();
			},
			callback: function(){
				$('.edit-branch-modal').find('input[name=edit-branch-name]').val(data.cb_name);
				$('.edit-branch-modal').find('input[name=edit-branch-address]').val(data.cb_address);
				$('.edit-branch-modal').find('input[name=edit-branch-tin]').val(data.cb_tin);
				$('.edit-branch-modal').find('input[name=edit-branch-cno]').val(data.cb_cno);
				$('.edit-branch-modal').find('input[name=edit-branch-email]').val(data.cb_email);
				$('.edit-branch-modal').find('input[name=edit-id]').val(data.cb_id);
				$('.edit-branch-modal').addClass('animate');
            },
            container: '.navbar-body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
        initRipple();
        no_space();
        initNumberValidation();
        initSingleSubmit();
	});
	$('#branch-table').on('click', '.delete', function(){
		var cb_id = branch_table.row(this.closest('tr')).data().cb_id;
		var cbbr_id = branch_table.row(this.closest('tr')).data().cbbr_id;
		$.get(window_location+'/setup/setup1/delete_branch', {cb_id: cb_id, cbbr_id: cbbr_id}, function(response){
			branch_table.ajax.reload();
			$('.popover').popover('hide');
       		$('.card-body button').removeAttr('disabled');
		});
	});
</script>

<!-- SETUP 2 FUNCTION -->
<script>
	var p_id = 0;
	$('#admin-users').on('click', '.branch-btn', function(){
		var data = admin_users.row(this.closest('tr')).data();
		admin_branches.ajax.url(window_location+'/setup/setup2/table_get_branches/'+data.p_id);
	    admin_branches.ajax.reload();
		mySequence1.goTo(5);
		p_id = data.p_id;
	});

	$('.navbar-body').on('click', '#add-user-account-submit', function(){
		var popover = $(this).closest('.popover');
		var data = {
			'add-username': popover.find('input[name=add-username]').val(),
			'add-password': popover.find('input[name=add-password]').val(),
			'add-confirm-password': popover.find('input[name=add-confirm-password]').val(),
			'add-branch': popover.find('select[name=add-branch]').val(),
			'add-type': popover.find('select[name=add-type]').val(),
			'add-p-id': popover.find('input[name=add-p-id]').val()
		}
		$.get(window_location+'/setup/setup2/add_user_branch', data, function(response){
			employee_table.ajax.reload();
			admin_branches.ajax.reload();
			branch_table.ajax.reload();
			admin_users.ajax.reload();
			$('.popover').removeClass('animate');
			$('.popover').popover('hide');
	        $('.card-body button').removeAttr('disabled');
		});
	});
	$('.navbar-body').on('click', '#edit-user-account-submit', function(){
		var popover = $(this).closest('.popover');
		var data = {
			'edit-username': popover.find('input[name=edit-username]').val(),
			'edit-password': popover.find('input[name=edit-password]').val(),
			'edit-confirm-password': popover.find('input[name=edit-confirm-password]').val(),
			'edit-branch': popover.find('select[name=edit-branch]').val(),
			'edit-type': popover.find('select[name=edit-type]').val(),
			'edit-u-id': popover.find('input[name=edit-u-id]').val()
		}
		$.get(window_location+'/setup/setup2/edit_user_branch', data, function(response){
			employee_table.ajax.reload();
			admin_branches.ajax.reload();
			branch_table.ajax.reload();
			admin_users.ajax.reload();
			$('.popover').removeClass('animate');
			$('.popover').popover('hide');
	        $('.card-body button').removeAttr('disabled');
		});
	});
	$('#add-user-account').click(function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });

		var initBranch = function(){
			var selectize_lvl1 = $('#add-user-branch').selectize({
				create: false,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: null
			});
			var selectize = $('#add-user-branch.selectized').selectize()[0].selectize;
			selectize.clear();
			selectize.clearOptions();
			$.get(window_location+'/setup/setup2/get_user_available_branch', {p_id: p_id}, function(response){
				var data = JSON.parse(response);
				var selectOptions = [];
				$.each(data, function(index, data){
					selectOptions.push({
			            text: data.name,
			            value: data.cbbr_id
		          	});
				});

				selectize.clear();
				selectize.clearOptions();
				selectize.renderCache = {};
				selectize.load(function(callback) {
				    callback(selectOptions);
				});
			});
		}

		var initPasswordValidation = function(){
			var pass1 = $('.popover').find('#password1');
			var pass2 = $('.popover').find('#password2');
			var alert = $('.popover').find('#password_not_match');
			pass1.keyup(function(){
				if($(this).val() !== pass2.val()){
					$(this).css('border', '1px solid red');
					pass2.css('border', '1px solid red');
					alert.css('display', 'block');
					$('#add-user-branch-submit').attr('disabled', true);
				}else{
					$(this).css('border', '1px solid #CCC');
					pass2.css('border', '1px solid #CCC');
					alert.css('display', 'none');
					$('#add-user-branch-submit').removeAttr('disabled');
				}
			});
			pass2.keyup(function(){
				if($(this).val() !== pass1.val()){
					$(this).css('border', '1px solid red');
					pass1.css('border', '1px solid red');
					alert.css('display', 'block');
					$('#add-user-branch-submit').attr('disabled', true);
				}else{
					$(this).css('border', '1px solid #CCC');
					pass1.css('border', '1px solid #CCC');
					alert.css('display', 'none');
					$('#add-user-branch-submit').removeAttr('disabled');
				}
			});
		}
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('add-user-account-modal');
				return 'right';
			},
			content: function(){
				return $('#add-user-account-popover').html();
			},
			callback: function(){
				$('.add-user-account-modal').addClass('animate');
				$('#add_p_id').val(p_id);
				initBranch();
				initPasswordValidation();
				$('#add-user-type').selectize();
            },
            container: '.navbar-body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
        initRipple();
        no_space();
        initNumberValidation();
        initSingleSubmit();
	});
	$('#admin-branches').on('click', '.edit', function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
		var data = admin_branches.row(this.closest('tr')).data();
		var initBranch = function(){
			var b_selectize = $('#edit-user-branch').selectize({
				create: false,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: null
			});
			var branch_selectize = b_selectize[0].selectize;
			branch_selectize.clear();
			branch_selectize.clearOptions();
			$.get(window_location+'/setup/setup2/get_user_available_branch_edit', {p_id: p_id, br_id: data.cb_id}, function(response){
				var json_data = JSON.parse(response);
				var selectOptions = [];
				$.each(json_data, function(index, data){
					selectOptions.push({
			            text: data.name,
			            value: data.cbbr_id
		          	});
				});

				branch_selectize.clear();
				branch_selectize.clearOptions();
				branch_selectize.renderCache = {};
				branch_selectize.load(function(callback) {
				    callback(selectOptions);
				});
				branch_selectize.setValue(data.cb_id);
			});
		}

		var initPasswordValidation = function(){
			var pass1 = $('.popover').find('#password1');
			var pass2 = $('.popover').find('#password2');
			var alert = $('.popover').find('#password_not_match');
			pass1.keyup(function(){
				if($(this).val() !== pass2.val()){
					$(this).css('border', '1px solid red');
					pass2.css('border', '1px solid red');
					alert.css('display', 'block');
					$('#edit-user-branch-submit').attr('disabled', true);
				}else{
					$(this).css('border', '1px solid #CCC');
					pass2.css('border', '1px solid #CCC');
					alert.css('display', 'none');
					$('#edit-user-branch-submit').removeAttr('disabled');
				}
			});
			pass2.keyup(function(){
				if($(this).val() !== pass1.val()){
					$(this).css('border', '1px solid red');
					pass1.css('border', '1px solid red');
					alert.css('display', 'block');
					$('#edit-user-branch-submit').attr('disabled', true);
				}else{
					$(this).css('border', '1px solid #CCC');
					pass1.css('border', '1px solid #CCC');
					alert.css('display', 'none');
					$('#edit-user-branch-submit').removeAttr('disabled');
				}
			});
		}
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('edit-user-account-modal');
				return 'right';
			},
			content: function(){
				return $('#edit-user-account-popover').html();
			},
			callback: function(){
				$('.edit-user-account-modal').addClass('animate');
				$('#edit_p_id').val(p_id);
				initBranch();
				initPasswordValidation();
				var user_type = $('#edit-user-type').selectize();
				user_type[0].selectize.setValue(data.u_type);
				$('.popover.edit-user-account-modal').find('input[name=edit-username]').val(data.u_name);
				$('.popover.edit-user-account-modal').find('input[name=edit-u-id]').val(data.u_id);
            },
            container: '.navbar-body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
        initRipple();
        no_space();
        initNumberValidation();
        initSingleSubmit();
	});
	$('#admin-branches').on('click', '.delete', function(){
		var data = admin_branches.row(this.closest('tr')).data();
		$.get(window_location+'/setup/setup2/delete_user_branch', {u_id: data.u_id}, function(response){
			admin_branches.ajax.reload();
			employee_table.ajax.reload();
			branch_table.ajax.reload();
			admin_users.ajax.reload();
		});
	});
</script>

<!-- COA -->
<script>
	$('.navbar-body').on('click', '#add-lvl-5-submit', function(){
		var popover = $(this).closest('.popover');
		var data = {
			'add-lvl-5-name': popover.find('input[name=add-lvl-5-name]').val(),
			'add-lvl-4': popover.find('select[name=add-lvl-4]').val()
		}
		$.get(window_location+'/setup/setup3/add_coa_lvl5', data, function(response){
			$('.popover').removeClass('animate');
			$('.popover').popover('hide');
	        $('.card-body button').removeAttr('disabled');
	        lvl5.ajax.reload();
		});
	});
	$('.navbar-body').on('click', '#edit-lvl-5-submit', function(){
		var popover = $(this).closest('.popover');
		var data = {
			'edit-lvl-5-code': popover.find('input[name=edit-lvl-5-code]').val(),
			'edit-lvl-5-name': popover.find('input[name=edit-lvl-5-name]').val(),
			'edit-lvl-5-id': popover.find('input[name=edit-lvl-5-id]').val(),
			'edit-lvl-4': popover.find('select[name=edit-lvl-4]').val()
		}
		$.get(window_location+'/setup/setup3/edit_coa_lvl5', data, function(response){
			$('.popover').removeClass('animate');
			$('.popover').popover('hide');
	        $('.card-body button').removeAttr('disabled');
	        lvl5.ajax.reload();
		});
	});
	$('.navbar-body').on('click', '#add-lvl-6-submit', function(){
		var popover = $(this).closest('.popover');
		var data = {
			'add-lvl-6-name': popover.find('input[name=add-lvl-6-name]').val(),
			'add-lvl-5': popover.find('select[name=add-lvl-5]').val()
		}
		$.get(window_location+'/setup/setup3/add_coa_lvl6', data, function(response){
			$('.popover').removeClass('animate');
			$('.popover').popover('hide');
	        $('.card-body button').removeAttr('disabled');
	        lvl6.ajax.reload();
		});
	});
	$('.navbar-body').on('click', '#edit-lvl-6-submit', function(){
		var popover = $(this).closest('.popover');
		var data = {
			'edit-lvl-6-code': popover.find('input[name=edit-lvl-6-code]').val(),
			'edit-lvl-6-name': popover.find('input[name=edit-lvl-6-name]').val(),
			'edit-lvl-6-id': popover.find('input[name=edit-lvl-6-id]').val(),
			'edit-lvl-5': popover.find('select[name=edit-lvl-5]').val()
		}
		$.get(window_location+'/setup/setup3/edit_coa_lvl6', data, function(response){
			$('.popover').removeClass('animate');
			$('.popover').popover('hide');
	        $('.card-body button').removeAttr('disabled');
	        lvl6.ajax.reload();
		});
	});
	$('#add-lvl-5-btn').click(function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('add-lvl-5-modal');
				return 'right';
			},
			content: function(){
				return $('#add-lvl5-popover').html();
			},
			callback: function(){
				$('#add-lvl-4-selectize').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.add-lvl-5-modal').find('input[name=lvl-4-code]').val($(this)[0].options[value].code);
						}else{
							$('.add-lvl-5-modal').find('input[name=lvl-4-code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize = $('#add-lvl-4-selectize.selectized').selectize()[0].selectize;
				selectize.clear();
				selectize.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_4',function(response){
					var data = JSON.parse(response);
					var selectOptions = [];
					$.each(data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_4_name,
				            value: lvl.lvl_4_id,
				            code: lvl.lvl_4_code
			          	});
					});

					selectize.clear();
					selectize.clearOptions();
					selectize.renderCache = {};
					selectize.load(function(callback) {
					    callback(selectOptions);
					});
				});
				$('.add-lvl-5-modal').addClass('animate');
            },
            container: '.navbar-body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
        initRipple();
        no_space();
        initNumberValidation();
        initSingleSubmit();
	});
	$('#coa-lvl5').on('click', '.edit', function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = lvl5.row(this.closest('tr')).data();
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('edit-lvl-5-modal');
				return 'right';
			},
			content: function(){
				return $('#edit-lvl5-popover').html();
			},
			callback: function(){
				$('#edit-lvl-4-selectize').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.edit-lvl-5-modal').find('input[name=lvl-4-code]').val($(this)[0].options[value].code);
						}else{
							$('.edit-lvl-5-modal').find('input[name=lvl-4-code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize = $('#edit-lvl-4-selectize.selectized').selectize()[0].selectize;
				selectize.clear();
				selectize.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_4',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_4_name,
				            value: lvl.lvl_4_id,
				            code: lvl.lvl_4_code
			          	});
					});

					selectize.clear();
					selectize.clearOptions();
					selectize.renderCache = {};
					selectize.load(function(callback) {
					    callback(selectOptions);
					});
					selectize.setValue(data.lvl_4_id);
				});
				$('.popover.edit-lvl-5-modal').find('input[name=edit-lvl-5-code]').val(data.lvl_5_code);
				$('.popover.edit-lvl-5-modal').find('input[name=edit-lvl-5-name]').val(data.lvl_5_name);
				$('.popover.edit-lvl-5-modal').find('input[name=edit-lvl-5-id]').val(data.lvl_5_id);
				$('.edit-lvl-5-modal').addClass('animate');
            },
            container: '.navbar-body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
        initRipple();
        no_space();
        initNumberValidation();
        initSingleSubmit();
	});
	$('#coa-lvl5').on('click', '.delete', function(){
		var data = lvl5.row(this.closest('tr')).data();
		var keys = {
			lvl_5_id: data.lvl_5_id,
			coalvl45_id: data.coalvl45_id
		}
		$.get(window_location+'/setup/setup3/delete_coa_lvl5', keys, function(response){
			$('.popover').removeClass('animate');
			$('.popover').popover('hide');
	        $('.card-body button').removeAttr('disabled');
	        lvl5.ajax.reload();
		});
	});
	$('#add-lvl-6-btn').click(function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('add-lvl-6-modal');
				return 'right';
			},
			content: function(){
				return $('#add-lvl6-popover').html();
			},
			callback: function(){
				$('#add-lvl-5-selectize').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.add-lvl-6-modal').find('input[name=lvl-5-code]').val($(this)[0].options[value].code);
						}else{
							$('.add-lvl-6-modal').find('input[name=lvl-5-code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize = $('#add-lvl-5-selectize.selectized').selectize()[0].selectize;
				selectize.clear();
				selectize.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_5',function(response){
					var data = JSON.parse(response);
					var selectOptions = [];
					$.each(data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_5_name,
				            value: lvl.lvl_5_id,
				            code: lvl.lvl_5_code
			          	});
					});

					selectize.clear();
					selectize.clearOptions();
					selectize.renderCache = {};
					selectize.load(function(callback) {
					    callback(selectOptions);
					});
				});
				$('.add-lvl-6-modal').addClass('animate');
            },
            container: '.navbar-body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
        initRipple();
        no_space();
        initNumberValidation();
        initSingleSubmit();
	});
	$('#coa-lvl6').on('click', '.edit', function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = lvl6.row(this.closest('tr')).data();
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('edit-lvl-6-modal');
				return 'right';
			},
			content: function(){
				return $('#edit-lvl6-popover').html();
			},
			callback: function(){
				$('#edit-lvl-5-selectize').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.edit-lvl-6-modal').find('input[name=lvl-5-code]').val($(this)[0].options[value].code);
						}else{
							$('.edit-lvl-6-modal').find('input[name=lvl-5-code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize = $('#edit-lvl-5-selectize.selectized').selectize()[0].selectize;
				selectize.clear();
				selectize.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_5',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_5_name,
				            value: lvl.lvl_5_id,
				            code: lvl.lvl_5_code
			          	});
					});

					selectize.clear();
					selectize.clearOptions();
					selectize.renderCache = {};
					selectize.load(function(callback) {
					    callback(selectOptions);
					});
					selectize.setValue(data.lvl_5_id);
				});
				$('.popover.edit-lvl-6-modal').find('input[name=edit-lvl-6-code]').val(data.lvl_6_code);
				$('.popover.edit-lvl-6-modal').find('input[name=edit-lvl-6-name]').val(data.lvl_6_name);
				$('.popover.edit-lvl-6-modal').find('input[name=edit-lvl-6-id]').val(data.lvl_6_id);
				$('.edit-lvl-6-modal').addClass('animate');
            },
            container: '.navbar-body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
        initRipple();
        no_space();
        initNumberValidation();
        initSingleSubmit();
	});
	$('#coa-lvl6').on('click', '.delete', function(){
		var data = lvl6.row(this.closest('tr')).data();
		var keys = {
			'lvl_6_id': data.lvl_6_id,
			'coalvl56_id': data.coalvl56_id
		}
		$.get(window_location+'/setup/setup3/delete_coa_lvl6', keys, function(response){
			$('.popover').removeClass('animate');
			$('.popover').popover('hide');
	        $('.card-body button').removeAttr('disabled');
	        lvl6.ajax.reload();
		});
	});
</script>

<!-- TAX -->
<script>
	$('.navbar-body').on('click', '#add-tax-submit', function(){
		var popover = $(this).closest('.popover');
		var data = {
		 	'add-type': popover.find('select[name=add-type]').val(),
		 	'add-name': popover.find('input[name=add-name]').val(),
		 	'add-shortname': popover.find('input[name=add-shortname]').val(),
		 	'add-rate': popover.find('input[name=add-rate]').val(),
		 	'add-base': popover.find('input[name=add-base]').val()
		}
		$.get(window_location+'/setup/setup4/add_tax', data, function(response){
			$('.popover').removeClass('animate');
			$('.popover').popover('hide');
	        $('.card-body button').removeAttr('disabled');
	        tax.ajax.reload();
		});
	});
	$('.navbar-body').on('click', '#edit-tax-submit', function(){
		var popover = $(this).closest('.popover');
		var data = {
		 	'edit-type': popover.find('select[name=edit-type]').val(),
		 	'edit-code': popover.find('input[name=edit-code]').val(),
		 	'edit-name': popover.find('input[name=edit-name]').val(),
		 	'edit-shortname': popover.find('input[name=edit-shortname]').val(),
		 	'edit-rate': popover.find('input[name=edit-rate]').val(),
		 	'edit-base': popover.find('input[name=edit-base]').val(),
		 	'edit-t-id': popover.find('input[name=edit-t-id]').val()
		}
		$.get(window_location+'/setup/setup4/edit_tax', data, function(response){
			$('.popover').removeClass('animate');
			$('.popover').popover('hide');
	        $('.card-body button').removeAttr('disabled');
	        tax.ajax.reload();
		});
	});
	$('#add-tax-btn').click(function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('add-tax-modal');
				return 'right';
			},
			content: function(){
				return $('#add-tax-popover').html();
			},
			callback: function(){
				$('#add-select-tax-type').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize = $('#add-select-tax-type.selectized').selectize()[0].selectize;
				selectize.clear();
				selectize.clearOptions();
				$.get(window_location+'/setup/setup4/get_tax_types',function(response){
					var data = JSON.parse(response);
					var selectOptions = [];
					$.each(data, function(index, lvl){
						selectOptions.push({
				            text: lvl.tt_name,
				            value: lvl.tt_id
			          	});
					});

					selectize.clear();
					selectize.clearOptions();
					selectize.renderCache = {};
					selectize.load(function(callback) {
					    callback(selectOptions);
					});
				});
				$('.add-tax-modal').addClass('animate');
				initRipple();
		        no_space();
		        initNumberValidation();
		        initDecimalValidation();
		        initSingleSubmit();
            },
            container: '.navbar-body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
	});
	$('#tax').on('click', '.edit', function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = tax.row(this.closest('tr')).data();
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('edit-tax-modal');
				return 'right';
			},
			content: function(){
				return $('#edit-tax-popover').html();
			},
			callback: function(){
				$('#edit-select-tax-type').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize = $('#edit-select-tax-type.selectized').selectize()[0].selectize;
				selectize.clear();
				selectize.clearOptions();
				$.get(window_location+'/setup/setup4/get_tax_types',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, tt){
						selectOptions.push({
				            text: tt.tt_name,
				            value: tt.tt_id
			          	});
					});

					selectize.clear();
					selectize.clearOptions();
					selectize.renderCache = {};
					selectize.load(function(callback) {
					    callback(selectOptions);
					});
					selectize.setValue(data.tt_id);
				});
				$('.popover.edit-tax-modal').find('input[name=edit-code]').val(data.t_code);
				$('.popover.edit-tax-modal').find('input[name=edit-name]').val(data.t_name);
				$('.popover.edit-tax-modal').find('input[name=edit-shortname]').val(data.t_shortname);
				$('.popover.edit-tax-modal').find('input[name=edit-rate]').val(data.t_rate);
				$('.popover.edit-tax-modal').find('input[name=edit-base]').val(data.t_base);
				$('.popover.edit-tax-modal').find('input[name=edit-t-id]').val(data.t_id);
				$('.edit-tax-modal').addClass('animate');
				initRipple();
		        no_space();
		        initNumberValidation();
		        initDecimalValidation();
		        initSingleSubmit();
            },
            container: '.navbar-body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
	});
	$('#tax').on('click', '.delete', function(){
		var data = tax.row(this.closest('tr')).data();
		var keys = {
			t_id: data.t_id,
			co_t_id: data.co_t_id
		}
		$.get(window_location+'/setup/setup4/delete_tax', keys, function(response){
			$('.popover').removeClass('animate');
			$('.popover').popover('hide');
	        $('.card-body button').removeAttr('disabled');
	        tax.ajax.reload();
		});
	});

	$('#finish-btn').click(function(){
		$('#finish-modal').modal({
			backdrop: 'static',
			keyboard: false,
			show: true,
		});
	});
</script>

<!-- POPOVER FUNCTION -->
<script>
	$('div').on('click', '.close-popover', function(){
		$('.popover').removeClass('animate');
		$('.popover').popover('hide');
        $('.card-body button').removeAttr('disabled');
    });
    $('div').on('click', '#close-btn', function(){
    	$('.popover').removeClass('animate');
        $('.popover').popover('hide');
       	$('.card-body button').removeAttr('disabled');
    });
</script>


<script>
	// var next_setup = function(event){
	// 		$.notify({
	// 		message: "<i class='fa fa-warning'></i> Please fill all necessary information" 
	// 		},{
	// 			type: 'danger',
	// 			placement: {
	// 				from: "top",
	// 				align: "right"
	// 			},
	// 			animate: {
	// 				enter: 'animated fadeInDown',
	// 				exit: 'animated fadeOutUp'
	// 			},
	// 			delay: 1000,
	// 		});
	// 	}
	// }
</script>
