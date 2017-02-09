<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/setup.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/company_setup/datatables_default.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/company_setup/nav_tabs.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		initRipple();
		$(document).ajaxStop(function(){
		  	$('#loader').removeClass('show');
		  	$(this).unbind("ajaxStop");
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
	$('body').on('click', '#edit-profile-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
						'company_name': popover.find('input[name=company_name]').val(),
						'trade_name': popover.find('input[name=trade_name]').val(),
						'co_ba_number': popover.find('input[name=co_ba_number]').val(),
						'co_ba_street': popover.find('input[name=co_ba_street]').val(),
						'co_ba_brangay': popover.find('input[name=co_ba_brangay]').val(),
						'co_ba_city': popover.find('input[name=co_ba_city]').val(),
						'co_ba_province': popover.find('input[name=co_ba_province]').val(),
						'co_ba_zip': popover.find('input[name=co_ba_zip]').val(),
						'tax_type': popover.find('select[name=tax_type]').val(),
						'tin': popover.find('input[name=tin]').val(),
						'contact_number': popover.find('input[name=contact_number]').val(),
						'email': popover.find('input[name=email]').val()
					}

		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		var format_input = validation.format_input(popover);
		if(!required_input && !format_input){
			_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
			_this.attr('disabled', true);
			$.get(window_location+'/setup/setup1/edit_profile', data, function(){
				profile_table.ajax.reload(function(){}, false);
				_this.html("Ok");
				_this.removeAttr('disabled');
				$('.popover').removeClass('animate');
				$('.popover').popover('hide');
		        $('.card-body button').removeAttr('disabled');
			});
		}
	});
	$('#profile-table').on('click', '.edit', function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = profile_table.row(this.closest('tr')).data();
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('edit-profile-modal');
				return 'right';
			},
			content: function(){
				return $('#edit-profile-popover').html();
			},
			callback: function(){
				$('.edit-profile-modal').addClass('animate');
				var popover = $('.popover.edit-profile-modal');
				popover.find('input[name=company_name]').val(data.ch_name);
				popover.find('input[name=trade_name]').val(data.ch_cb_trade_name);
				var address = data.ch_cb_address.toString();
				console.log(address);
				var co_ba_number = address.split(";")[0];
				var co_ba_street = address.split(";")[1];
				var co_ba_brangay = address.split(";")[2];
				var co_ba_city = address.split(";")[3];
				var co_ba_province = address.split(";")[4];
				var co_ba_zip = address.split(";")[5];
				popover.find('input[name=co_ba_number]').val(co_ba_number);
				popover.find('input[name=co_ba_street]').val(co_ba_street);
				popover.find('input[name=co_ba_brangay]').val(co_ba_brangay);
				popover.find('input[name=co_ba_city]').val(co_ba_city);
				popover.find('input[name=co_ba_province]').val(co_ba_province);
				popover.find('input[name=co_ba_zip]').val(co_ba_zip);
				popover.find('select#edit-profile-tax-type').selectize();
				popover.find('input[name=address]').val(data.ch_cb_address);
				popover.find('input[name=tax_type]').val(data.ch_cb_tax_type);
				popover.find('input[name=tin]').val(data.ch_cb_tin);
				popover.find('input[name=contact_number]').val(data.ch_cb_cno);
				popover.find('input[name=email]').val(data.ch_cb_email);
				initRipple();
				var restriction = Object.create(v_restriction);
				restriction.number();
				restriction.required();
				restriction.format();
				restriction.no_space();
				restriction.tin();
            },
            container: 'body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
	});
</script>

<!-- SETUP 2 FUNCTION -->
<script>
	$('body').on('click', '#add-user-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
					'add-fname': popover.find('input[name=add-fname]').val(),
					'add-mname': popover.find('input[name=add-mname]').val(),
					'add-lname': popover.find('input[name=add-lname]').val(),
					'add-user-address': popover.find('input[name=add-user-address]').val(),
					'add-user-cno': popover.find('input[name=add-user-cno]').val(),
					'add-user-email': popover.find('input[name=add-user-email]').val(),
					'add-user-branch': popover.find('select[name=add-user-branch]').val(),
					'add-user-access-level': popover.find('select[name=add-user-access-level]').val(),
					'add-user-username': popover.find('input[name=add-user-username]').val(),
					'add-user-password': popover.find('input[name=add-user-password]').val(),
					'add-user-validity-date': popover.find('input[name=add-user-validity-date]').val(),
				}
		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		var required_select = validation.required_select(popover);
		var format_input = validation.format_input(popover, function(){});
		var unique_input = validation.unique_input(popover, function(is_unique){
			if(!required_input && !format_input && !required_select && !is_unique){
				_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
				_this.attr('disabled', true);
				$.get(window_location+'/setup/setup2/add_user', data, function(response){
					users_table.ajax.reload(function(){}, false);
					_this.html("Ok");
					_this.removeAttr('disabled');
					$('.popover').popover('hide');
		       		$('.card-body button').removeAttr('disabled');
				});
			}
		});
		
	});
	$('body').on('click', '#edit-user-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
					'edit-fname' : popover.find('input[name=edit-fname]').val(),
					'edit-mname': popover.find('input[name=edit-mname]').val(),
					'edit-lname': popover.find('input[name=edit-lname]').val(),
					'edit-user-address': popover.find('input[name=edit-user-address]').val(),
					'edit-user-cno': popover.find('input[name=edit-user-cno]').val(),
					'edit-user-email': popover.find('input[name=edit-user-email]').val(),
					'edit-user-branch': popover.find('select[name=edit-user-branch]').val(),
					'edit-user-access-level': popover.find('select[name=edit-user-access-level]').val(),
					'edit-user-username': popover.find('input[name=edit-user-username]').val(),
					'edit-user-password': popover.find('input[name=edit-user-password]').val(),
					'edit-user-validity-date': popover.find('input[name=edit-user-validity-date]').val(),
					'edit-profile-id': popover.find('input[name=edit-profile-id]').val(),
					'edit-user-id': popover.find('input[name=edit-user-id]').val(),
				}
		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		var required_select = validation.required_select(popover);
		var format_input = validation.format_input(popover, function(){});
		var unique_input = validation.unique_input_edit(popover, function(is_unique){
			if(!required_input && !format_input && !required_select && !is_unique){
				_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
				_this.attr('disabled', true);
				$.get(window_location+'/setup/setup2/edit_user', data, function(response){
					users_table.ajax.reload(function(){}, false);
					_this.html("Ok");
					_this.removeAttr('disabled');
					$('.popover').popover('hide');
		       		$('.card-body button').removeAttr('disabled');
				});
			}
		});
	});

	$('#add-user-btn').click(function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('add-user-modal');
				return 'right';
			},
			content: function(){
				return $('#add-user-popover').html();
			},
			callback: function(){
				var popover = $('.popover.add-user-modal');
				var access_level = popover.find('select[name=add-user-access-level]').selectize();
				var branches = popover.find('select[name=add-user-branch]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					onChange: function(value){
						var selectize = access_level[0].selectize;
						var c_id = $('input#c_id').val();
						selectize.clear();
						selectize.clearOptions();
						selectize.cacheOptions = {};
						if(c_id === value){
							selectize.load(function(callback){
								callback([
											{text: 'Super Admin', value: 'Super Admin'},
											{text: 'Admin', value: 'Admin'},
											{text: 'User', value: 'User'}
										]);
							});
						}else{
							selectize.load(function(callback){
								callback([
											{text: 'Admin', value: 'Admin'},
											{text: 'User', value: 'User'}
										]);
							});
						}
					},
					dropdownParent: null
				});
				var selectize = branches[0].selectize;
				selectize.clear();
				selectize.clearOptions();
				$.get(window_location+'/setup/setup2/get_branch_list', function(response){
					var data = JSON.parse(response);
					var selectOptions = [];
					$.each(data, function(index, data){
						selectOptions.push({
				            text: data.ch_cb_trade_name,
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

				popover.find('input[name=add-user-username]').keyup(function(){
					popover.find('input[name=add-user-password]').val($(this).val());
				});
				popover.addClass('animate');
				initRipple();
		        no_space();
		        initNumberValidation();
		        initSingleSubmit();
		        var restriction = Object.create(v_restriction);
				restriction.number();
				restriction.required();
				restriction.format();
				restriction.no_space();
				restriction.tin();
				restriction.select_required();
				restriction.min_date();
				restriction.unique();
            },
            container: 'body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
	});
	$('#users-table').on('click', '.edit', function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = users_table.row(this.closest('tr')).data();
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('edit-user-modal');
				return 'right';
			},
			content: function(){
				return $('#edit-user-popover').html();
			},
			callback: function(){
				var popover = $('.popover.edit-user-modal');
				var access_level = popover.find('select[name=edit-user-access-level]').selectize();
				var branches = popover.find('select[name=edit-user-branch]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null
				});
				var selectize = branches[0].selectize;
				selectize.clear();
				selectize.clearOptions();
				$.get(window_location+'/setup/setup2/get_branch_list', function(response){
					var branch_data = JSON.parse(response);
					var selectOptions = [];
					$.each(branch_data, function(index, data){
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
					selectize.setValue(data.cbbr_id);
				});

				popover.find('input[name=edit-user-username]').keyup(function(){
					popover.find('input[name=edit-user-password]').val($(this).val());
				});

				popover.find('input[name=edit-seq]').val(data.u_seq);
				popover.find('input[name=edit-fname]').val(data.p_fname);
				popover.find('input[name=edit-mname]').val(data.p_mname);
				popover.find('input[name=edit-lname]').val(data.p_lname);
				popover.find('input[name=edit-user-address]').val(data.p_address);
				popover.find('input[name=edit-user-cno]').val(data.p_cno);
				popover.find('input[name=edit-user-email]').val(data.p_email);
				popover.find('input[name=edit-user-access-level]').val(data.u_type);
				popover.find('input[name=edit-user-username]').val(data.u_name);
				popover.find('input[name=edit-user-username]').attr('o_v', data.u_name);
				popover.find('input[name=edit-user-password]').val(data.u_name);
				if(data.u_validity_date && data.u_validity_date !== '0000-00-00 00:00:00'){
					var date = Date.parse(data.u_validity_date);
					popover.find('input[name=edit-user-validity-date]').val(date.toString('yyyy-MM-dd'));
				}
				popover.find('input[name=edit-profile-id]').val(data.p_id);
				popover.find('input[name=edit-user-id]').val(data.u_id);
				popover.addClass('animate');
				initRipple();
		        no_space();
		        initNumberValidation();
		        initSingleSubmit();
		        var restriction = Object.create(v_restriction);
				restriction.number();
				restriction.required();
				restriction.format();
				restriction.no_space();
				restriction.tin();
				restriction.select_required();
				restriction.min_date();
				restriction.unique_edit();
            },
            container: 'body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
	});
	$('#users-table').on('click', '.delete', function(){
		var table_data = users_table.row(this.closest('tr')).data();
		var data = {
					'p_id': table_data.p_id,
					'u_id': table_data.u_id
				};
		$.get(window_location+'/setup/setup2/delete_user', data, function(response){
			users_table.ajax.reload(function(){}, false);
			$('.popover').popover('hide');
       		$('.card-body button').removeAttr('disabled');
		});
	});
</script>

<!-- COA -->
<script>
	$('body').on('click', '#add-lvl-1-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
					'add-lvl-1-name': popover.find('input[name=add-lvl-1-name]').val()
				}

		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		if(!required_input){
			_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
			_this.attr('disabled', true);
			$.get(window_location+'/setup/setup3/add_coa_lvl1', data, function(){
				lvl1.ajax.reload(function(){}, false);
				_this.html("Ok");
				_this.removeAttr('disabled');
				$('.popover').removeClass('animate');
				$('.popover').popover('hide');
		        $('.card-body button').removeAttr('disabled');
			});
		}
	});
	$('body').on('click', '#edit-lvl-1-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
					'edit-lvl-1-code': popover.find('input[name=edit-lvl-1-code]').val(),
					'edit-lvl-1-name': popover.find('input[name=edit-lvl-1-name]').val(),
					'edit-id': popover.find('input[name=edit-id]').val()
				}

		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		if(!required_input){
			_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
			_this.attr('disabled', true);
			$.get(window_location+'/setup/setup3/edit_coa_lvl1', data, function(){
				lvl1.ajax.reload(function(){}, false);
				_this.html("Ok");
				_this.removeAttr('disabled');
				$('.popover').removeClass('animate');
				$('.popover').popover('hide');
		        $('.card-body button').removeAttr('disabled');
			});
		}
	});
	$('#add-lvl-1-btn').click(function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        $(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('add-lvl-1-modal');
				return 'right';
			},
			content: function(){
				return $('#add-lvl1-popover').html();
			},
			callback: function(){
				var popover = $('.popover.add-lvl-1-modal');
				popover.addClass('animate');
				var restriction = Object.create(v_restriction);
				restriction.required();
				restriction.number();
				restriction.decimal();
				restriction.no_space();

				initRipple();
		        no_space();
		        initNumberValidation();
		        initSingleSubmit();
            },
            container: 'body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
	});
	$('#coa-lvl1').on('click', '.edit', function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = lvl1.row(this.closest('tr')).data();
        $(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('edit-lvl-1-modal');
				return 'right';
			},
			content: function(){
				return $('#edit-lvl1-popover').html();
			},
			callback: function(){
				$('.popover.edit-lvl-1-modal').addClass('animate');
				var popover = $('.popover.edit-lvl-1-modal');
				popover.find('input[name=edit-lvl-1-code]').val(data.lvl_1_code);
				popover.find('input[name=edit-lvl-1-name]').val(data.lvl_1_name);
				popover.find('input[name=edit-id]').val(data.lvl_1_id);

				var restriction = Object.create(v_restriction);
				restriction.required();
				restriction.number();
				restriction.decimal();
				restriction.no_space();


				initRipple();
		        no_space();
		        initNumberValidation();
		        initSingleSubmit();
            },
            container: 'body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
	});
	$('#coa-lvl1').on('click', '.delete', function(){
        var data = lvl1.row(this.closest('tr')).data();
        $.get(window_location+'/setup/setup3/delete_coa_lvl1', {id: data.lvl_1_id}, function(){
        	lvl1.ajax.reload(function(){}, false);
        });
	});

	$('body').on('click', '#add-lvl-2-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
				'lvl-1-id': lvl_1_id,
				'add-lvl-2-name': popover.find('input[name=add-lvl-2-name]').val() 
		}

		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		if(!required_input){
			_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
			_this.attr('disabled', true);
			$.get(window_location+'/setup/setup3/add_coa_lvl2', data, function(){
				lvl2.ajax.reload(function(){}, false);
				_this.html("Ok");
				_this.removeAttr('disabled');
				$('.popover').removeClass('animate');
				$('.popover').popover('hide');
		        $('.card-body button').removeAttr('disabled');
			});
		}
	});
	$('body').on('click', '#edit-lvl-2-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
					'edit-id': popover.find('input[name=edit-id]').val(),
					'lvl-1-id': lvl_1_id,
					'edit-lvl-2-code': popover.find('input[name=edit-lvl-2-code]').val(),
					'edit-lvl-2-name': popover.find('input[name=edit-lvl-2-name]').val()
				}

		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		if(!required_input){
			_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
			_this.attr('disabled', true);
			$.get(window_location+'/setup/setup3/edit_coa_lvl2', data, function(){
				lvl2.ajax.reload(function(){}, false);
				_this.html("Ok");
				_this.removeAttr('disabled');
				$('.popover').removeClass('animate');
				$('.popover').popover('hide');
		        $('.card-body button').removeAttr('disabled');
			});
		}
	});
	$('#add-lvl-2-btn').click(function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        $(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('add-lvl-2-modal');
				return 'right';
			},
			content: function(){
				return $('#add-lvl2-popover').html();
			},
			callback: function(){
				var popover = $('.popover.add-lvl-2-modal');
				popover.find('select[name=add-coa2-lvl-1]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.add-lvl-2-modal').find('input[name=lvl1_code]').val($(this)[0].options[value].code);
						}else{
							$('.add-lvl-2-modal').find('input[name=lvl1_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize = $('#add-coa2-lvl-1.selectized').selectize()[0].selectize;
				selectize.clear();
				selectize.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_1',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_1_name,
				            value: lvl.lvl_1_id,
				            code: lvl.lvl_1_code
			          	});
					});

					selectize.clear();
					selectize.clearOptions();
					selectize.renderCache = {};
					selectize.load(function(callback) {
					    callback(selectOptions);
					});
					selectize.setValue(lvl_1_id);
				});
				$('.popover.add-lvl-2-modal').addClass('animate');

				var restriction = Object.create(v_restriction);
				restriction.required();
				restriction.number();
				restriction.decimal();
				restriction.no_space();

				initRipple();
		        no_space();
		        initNumberValidation();
		        initSingleSubmit();
            },
            container: 'body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
	});
	$('#coa-lvl2').on('click', '.edit', function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = lvl2.row(this.closest('tr')).data();
        $(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('edit-lvl-2-modal');
				return 'right';
			},
			content: function(){
				return $('#edit-lvl2-popover').html();
			},
			callback: function(){
				var popover = $('.popover.edit-lvl-2-modal');
				popover.find('select[name=edit-coa2-lvl-1]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.edit-lvl-2-modal').find('input[name=lvl1_code]').val($(this)[0].options[value].code);
						}else{
							$('.edit-lvl-2-modal').find('input[name=lvl1_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize = $('#edit-coa2-lvl-1.selectized').selectize()[0].selectize;
				selectize.clear();
				selectize.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_1',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_1_name,
				            value: lvl.lvl_1_id,
				            code: lvl.lvl_1_code
			          	});
					});

					selectize.clear();
					selectize.clearOptions();
					selectize.renderCache = {};
					selectize.load(function(callback) {
					    callback(selectOptions);
					});
					selectize.setValue(data.lvl_1_id);
				});
				popover.find('input[name=edit-id]').val(data.lvl_2_id);
				popover.find('input[name=edit-lvl-2-code]').val(data.lvl_2_code);
				popover.find('input[name=edit-lvl-2-name]').val(data.lvl_2_name);
				$('.popover.edit-lvl-2-modal').addClass('animate');

				var restriction = Object.create(v_restriction);
				restriction.required();
				restriction.number();
				restriction.decimal();
				restriction.no_space();

				initRipple();
		        no_space();
		        initNumberValidation();
		        initSingleSubmit();
            },
            container: 'body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
	});
	$('#coa-lvl2').on('click', '.delete', function(){
		var data = lvl2.row(this.closest('tr')).data();
		$.get(window_location+'/setup/setup3/delete_coa_lvl2', {id: data.lvl_2_id}, function(){
			lvl2.ajax.reload(function(){}, false);
		});
	});
	
	$('body').on('click', '#add-lvl-3-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
					'lvl-2-id': lvl_2_id,
					'add-lvl-3-name': popover.find('input[name=add-lvl-3-name]').val()
				}

		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		if(!required_input){
			_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
			_this.attr('disabled', true);
			$.get(window_location+'/setup/setup3/add_coa_lvl3', data, function(){
				lvl3.ajax.reload(function(){}, false);
				_this.html("Ok");
				_this.removeAttr('disabled');
				$('.popover').removeClass('animate');
				$('.popover').popover('hide');
		        $('.card-body button').removeAttr('disabled');
			});
		}
	});
	$('body').on('click', '#edit-lvl-3-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
					'edit-id': popover.find('input[name=edit-id]').val(),
					'lvl-2-id': lvl_2_id,
					'edit-lvl-3-code': popover.find('input[name=edit-lvl-3-code]').val(),
					'edit-lvl-3-name': popover.find('input[name=edit-lvl-3-name]').val()
				}

		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		if(!required_input){
			_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
			_this.attr('disabled', true);
			$.get(window_location+'/setup/setup3/edit_coa_lvl3', data, function(){
				lvl3.ajax.reload(function(){}, false);
				_this.html("Ok");
				_this.removeAttr('disabled');
				$('.popover').removeClass('animate');
				$('.popover').popover('hide');
		        $('.card-body button').removeAttr('disabled');
			});
		}
	});
	$('#add-lvl-3-btn').click(function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        $(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('add-lvl-3-modal');
				return 'right';
			},
			content: function(){
				return $('#add-lvl3-popover').html();
			},
			callback: function(){
				var popover = $('.popover.add-lvl-3-modal');
				popover.find('select[name=add-coa2-lvl-1]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.add-lvl-3-modal').find('input[name=lvl1_code]').val($(this)[0].options[value].code);
						}else{
							$('.add-lvl-3-modal').find('input[name=lvl1_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize1 = $('#add-coa2-lvl-1.selectized').selectize()[0].selectize;
				selectize1.clear();
				selectize1.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_1',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_1_name,
				            value: lvl.lvl_1_id,
				            code: lvl.lvl_1_code
			          	});
					});

					selectize1.clear();
					selectize1.clearOptions();
					selectize1.renderCache = {};
					selectize1.load(function(callback) {
					    callback(selectOptions);
					});
					selectize1.setValue(lvl_1_id);
				});
				popover.find('select[name=add-coa3-lvl-2]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.add-lvl-3-modal').find('input[name=lvl2_code]').val($(this)[0].options[value].code);
						}else{
							$('.add-lvl-3-modal').find('input[name=lvl2_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize2 = $('#add-coa3-lvl-2.selectized').selectize()[0].selectize;
				selectize2.clear();
				selectize2.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_2',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_2_name,
				            value: lvl.lvl_2_id,
				            code: lvl.lvl_2_code
			          	});
					});

					selectize2.clear();
					selectize2.clearOptions();
					selectize2.renderCache = {};
					selectize2.load(function(callback) {
					    callback(selectOptions);
					});
					selectize2.setValue(lvl_2_id);
				});
				$('.popover.add-lvl-3-modal').addClass('animate');

				var restriction = Object.create(v_restriction);
				restriction.required();
				restriction.number();
				restriction.decimal();
				restriction.no_space();

				initRipple();
		        no_space();
		        initNumberValidation();
		        initSingleSubmit();
            },
            container: 'body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
	});
	$('#coa-lvl3').on('click', '.edit', function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = lvl3.row(this.closest('tr')).data();
        $(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('edit-lvl-3-modal');
				return 'right';
			},
			content: function(){
				return $('#edit-lvl3-popover').html();
			},
			callback: function(){
				var popover = $('.popover.edit-lvl-3-modal');
				popover.find('select[name=edit-coa2-lvl-1]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.edit-lvl-3-modal').find('input[name=lvl1_code]').val($(this)[0].options[value].code);
						}else{
							$('.edit-lvl-3-modal').find('input[name=lvl1_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize1 = $('#edit-coa2-lvl-1.selectized').selectize()[0].selectize;
				selectize1.clear();
				selectize1.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_1',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_1_name,
				            value: lvl.lvl_1_id,
				            code: lvl.lvl_1_code
			          	});
					});

					selectize1.clear();
					selectize1.clearOptions();
					selectize1.renderCache = {};
					selectize1.load(function(callback) {
					    callback(selectOptions);
					});
					selectize1.setValue(lvl_1_id);
				});
				popover.find('select[name=edit-coa3-lvl-2]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.edit-lvl-3-modal').find('input[name=lvl2_code]').val($(this)[0].options[value].code);
						}else{
							$('.edit-lvl-3-modal').find('input[name=lvl2_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize2 = $('#edit-coa3-lvl-2.selectized').selectize()[0].selectize;
				selectize2.clear();
				selectize2.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_2',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_2_name,
				            value: lvl.lvl_2_id,
				            code: lvl.lvl_2_code
			          	});
					});

					selectize2.clear();
					selectize2.clearOptions();
					selectize2.renderCache = {};
					selectize2.load(function(callback) {
					    callback(selectOptions);
					});
					selectize2.setValue(lvl_2_id);
				});
				popover.find('input[name=edit-id]').val(data.lvl_3_id);
				popover.find('input[name=edit-lvl-3-code]').val(data.lvl_3_code);
				popover.find('input[name=edit-lvl-3-name]').val(data.lvl_3_name)
				$('.popover.edit-lvl-3-modal').addClass('animate');

				var restriction = Object.create(v_restriction);
				restriction.required();
				restriction.number();
				restriction.decimal();
				restriction.no_space();

				initRipple();
		        no_space();
		        initNumberValidation();
		        initSingleSubmit();
            },
            container: 'body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
	});
	$('#coa-lvl3').on('click', '.delete', function(){
		var data = lvl3.row(this.closest('tr')).data();
		$.get(window_location+'/setup/setup3/delete_coa_lvl3', {id: data.lvl_3_id}, function(){
			lvl3.ajax.reload(function(){}, false);
		});
	});

	$('body').on('click', '#add-lvl-4-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
					'lvl-3-id': lvl_3_id,
					'add-lvl-4-name': popover.find('input[name=add-lvl-4-name]').val(),
					'bir': popover.find('input[name=bir]').val()
				}

		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		if(!required_input){
			_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
			_this.attr('disabled', true);
			$.get(window_location+'/setup/setup3/add_level_4', data, function(){
				lvl4.ajax.reload(function(){}, false);
				_this.html("Ok");
				_this.removeAttr('disabled');
				$('.popover').removeClass('animate');
				$('.popover').popover('hide');
		        $('.card-body button').removeAttr('disabled');
			});
		}
	});
	$('body').on('click', '#edit-lvl-4-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
					'lvl-3-id': lvl_3_id,
					'edit-lvl-4-code': popover.find('input[name=edit-lvl-4-code]').val(),
					'edit-lvl-4-name': popover.find('input[name=edit-lvl-4-name]').val(),
					'bir': popover.find('input[name=bir]').val(),
					'edit-id': popover.find('input[name=edit-id]').val()
				}

		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		if(!required_input){
			_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
			_this.attr('disabled', true);
			$.get(window_location+'/setup/setup3/edit_level_4', data, function(){
				lvl4.ajax.reload(function(){}, false);
				_this.html("Ok");
				_this.removeAttr('disabled');
				$('.popover').removeClass('animate');
				$('.popover').popover('hide');
		        $('.card-body button').removeAttr('disabled');
			});
		}
	});
	$('#add-lvl-4-btn').click(function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        $(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('add-lvl-4-modal');
				return 'right';
			},
			content: function(){
				return $('#add-lvl4-popover').html();
			},
			callback: function(){
				var popover = $('.popover.add-lvl-4-modal');
				popover.find('select[name=add-coa2-lvl-1]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.add-lvl-4-modal').find('input[name=lvl1_code]').val($(this)[0].options[value].code);
						}else{
							$('.add-lvl-4-modal').find('input[name=lvl1_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize1 = $('#add-coa2-lvl-1.selectized').selectize()[0].selectize;
				selectize1.clear();
				selectize1.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_1',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_1_name,
				            value: lvl.lvl_1_id,
				            code: lvl.lvl_1_code
			          	});
					});

					selectize1.clear();
					selectize1.clearOptions();
					selectize1.renderCache = {};
					selectize1.load(function(callback) {
					    callback(selectOptions);
					});
					selectize1.setValue(lvl_1_id);
				});
				popover.find('select[name=add-coa3-lvl-2]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.add-lvl-4-modal').find('input[name=lvl2_code]').val($(this)[0].options[value].code);
						}else{
							$('.add-lvl-4-modal').find('input[name=lvl2_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize2 = $('#add-coa3-lvl-2.selectized').selectize()[0].selectize;
				selectize2.clear();
				selectize2.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_2',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_2_name,
				            value: lvl.lvl_2_id,
				            code: lvl.lvl_2_code
			          	});
					});

					selectize2.clear();
					selectize2.clearOptions();
					selectize2.renderCache = {};
					selectize2.load(function(callback) {
					    callback(selectOptions);
					});
					selectize2.setValue(lvl_2_id);
				});
				popover.find('select[name=add-coa4-lvl-3]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.add-lvl-4-modal').find('input[name=lvl3_code]').val($(this)[0].options[value].code);
						}else{
							$('.add-lvl-4-modal').find('input[name=lvl3_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize3 = $('#add-coa4-lvl-3.selectized').selectize()[0].selectize;
				selectize3.clear();
				selectize3.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_3',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_3_name,
				            value: lvl.lvl_3_id,
				            code: lvl.lvl_3_code
			          	});
					});

					selectize3.clear();
					selectize3.clearOptions();
					selectize3.renderCache = {};
					selectize3.load(function(callback) {
					    callback(selectOptions);
					});
					selectize3.setValue(lvl_3_id);
				});
				$('.popover.add-lvl-4-modal').addClass('animate');

				var restriction = Object.create(v_restriction);
				restriction.required();
				restriction.number();
				restriction.decimal();
				restriction.no_space();

				initRipple();
		        no_space();
		        initNumberValidation();
		        initSingleSubmit();
            },
            container: 'body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
	});
	$('#coa-lvl4').on('click', '.edit', function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = lvl4.row(this.closest('tr')).data();
        $(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('edit-lvl-4-modal');
				return 'right';
			},
			content: function(){
				return $('#edit-lvl4-popover').html();
			},
			callback: function(){
				var popover = $('.popover.edit-lvl-4-modal');
				popover.find('select[name=edit-coa2-lvl-1]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.edit-lvl-4-modal').find('input[name=lvl1_code]').val($(this)[0].options[value].code);
						}else{
							$('.edit-lvl-4-modal').find('input[name=lvl1_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize1 = $('#edit-coa2-lvl-1.selectized').selectize()[0].selectize;
				selectize1.clear();
				selectize1.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_1',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_1_name,
				            value: lvl.lvl_1_id,
				            code: lvl.lvl_1_code
			          	});
					});

					selectize1.clear();
					selectize1.clearOptions();
					selectize1.renderCache = {};
					selectize1.load(function(callback) {
					    callback(selectOptions);
					});
					selectize1.setValue(lvl_1_id);
				});
				popover.find('select[name=edit-coa3-lvl-2]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.edit-lvl-4-modal').find('input[name=lvl2_code]').val($(this)[0].options[value].code);
						}else{
							$('.edit-lvl-4-modal').find('input[name=lvl2_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize2 = $('#edit-coa3-lvl-2.selectized').selectize()[0].selectize;
				selectize2.clear();
				selectize2.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_2',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_2_name,
				            value: lvl.lvl_2_id,
				            code: lvl.lvl_2_code
			          	});
					});

					selectize2.clear();
					selectize2.clearOptions();
					selectize2.renderCache = {};
					selectize2.load(function(callback) {
					    callback(selectOptions);
					});
					selectize2.setValue(lvl_2_id);
				});
				popover.find('select[name=edit-coa4-lvl-3]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.edit-lvl-4-modal').find('input[name=lvl3_code]').val($(this)[0].options[value].code);
						}else{
							$('.edit-lvl-4-modal').find('input[name=lvl3_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize3 = $('#edit-coa4-lvl-3.selectized').selectize()[0].selectize;
				selectize3.clear();
				selectize3.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_3',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_3_name,
				            value: lvl.lvl_3_id,
				            code: lvl.lvl_3_code
			          	});
					});

					selectize3.clear();
					selectize3.clearOptions();
					selectize3.renderCache = {};
					selectize3.load(function(callback) {
					    callback(selectOptions);
					});
					selectize3.setValue(lvl_3_id);
				});
				$('.popover.edit-lvl-4-modal').find('input[name=edit-lvl-4-code]').val(data.lvl_4_code);
				$('.popover.edit-lvl-4-modal').find('input[name=edit-lvl-4-name]').val(data.lvl_4_name);
				$('.popover.edit-lvl-4-modal').find('input[name=bir]').val(data.bir);
				$('.popover.edit-lvl-4-modal').find('input[name=edit-id]').val(data.lvl_4_id);
				$('.popover.edit-lvl-4-modal').addClass('animate');

				var restriction = Object.create(v_restriction);
				restriction.required();
				restriction.number();
				restriction.decimal();
				restriction.no_space();

				initRipple();
		        no_space();
		        initNumberValidation();
		        initSingleSubmit();
            },
            container: 'body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
	});
	$('#coa-lvl4').on('click', '.delete', function(){
		var data = lvl4.row(this.closest('tr')).data();
		$.get(window_location+'/setup/setup3/delete_level_4', {id: data.lvl_4_id}, function(){
			lvl4.ajax.reload(function(){}, false);
			$('.popover').removeClass('animate');
			$('.popover').popover('hide');
	        $('.card-body button').removeAttr('disabled');
		});
	});

	$('body').on('click', '#add-lvl-5-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
					'lvl-4-id': lvl_4_id,
					'lvl-5-name': popover.find('input[name=add-lvl-5-name]').val()
				}

		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		if(!required_input){
			_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
			_this.attr('disabled', true);
			$.get(window_location+'/setup/setup3/add_level_5', data, function(){
				lvl5.ajax.reload(function(){}, false);
				_this.html("Ok");
				_this.removeAttr('disabled');
				$('.popover').removeClass('animate');
				$('.popover').popover('hide');
		        $('.card-body button').removeAttr('disabled');
			});
		}
	});
	$('body').on('click', '#edit-lvl-5-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
					'edit-lvl-5-code': popover.find('input[name=edit-lvl-5-code]').val(),
					'edit-lvl-5-name': popover.find('input[name=edit-lvl-5-name]').val(),
					'edit-id': popover.find('input[name=edit-id]').val(),
					'lvl-4-id': lvl_4_id
				}

		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		if(!required_input){
			_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
			_this.attr('disabled', true);
			$.get(window_location+'/setup/setup3/edit_level_5', data, function(){
				lvl5.ajax.reload(function(){}, false);
				_this.html("Ok");
				_this.removeAttr('disabled');
				$('.popover').removeClass('animate');
				$('.popover').popover('hide');
		        $('.card-body button').removeAttr('disabled');
			});
		}
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
				var popover = $('.popover.add-lvl-5-modal');
				popover.find('select[name=add-coa2-lvl-1]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.add-lvl-5-modal').find('input[name=lvl1_code]').val($(this)[0].options[value].code);
						}else{
							$('.add-lvl-5-modal').find('input[name=lvl1_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize1 = $('#add-coa2-lvl-1.selectized').selectize()[0].selectize;
				selectize1.clear();
				selectize1.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_1',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_1_name,
				            value: lvl.lvl_1_id,
				            code: lvl.lvl_1_code
			          	});
					});

					selectize1.clear();
					selectize1.clearOptions();
					selectize1.renderCache = {};
					selectize1.load(function(callback) {
					    callback(selectOptions);
					});
					selectize1.setValue(lvl_1_id);
				});
				popover.find('select[name=add-coa3-lvl-2]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.add-lvl-5-modal').find('input[name=lvl2_code]').val($(this)[0].options[value].code);
						}else{
							$('.add-lvl-5-modal').find('input[name=lvl2_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize2 = $('#add-coa3-lvl-2.selectized').selectize()[0].selectize;
				selectize2.clear();
				selectize2.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_2',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_2_name,
				            value: lvl.lvl_2_id,
				            code: lvl.lvl_2_code
			          	});
					});

					selectize2.clear();
					selectize2.clearOptions();
					selectize2.renderCache = {};
					selectize2.load(function(callback) {
					    callback(selectOptions);
					});
					selectize2.setValue(lvl_2_id);
				});
				popover.find('select[name=add-coa4-lvl-3]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.add-lvl-5-modal').find('input[name=lvl3_code]').val($(this)[0].options[value].code);
						}else{
							$('.add-lvl-5-modal').find('input[name=lvl3_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize3 = $('#add-coa4-lvl-3.selectized').selectize()[0].selectize;
				selectize3.clear();
				selectize3.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_3',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_3_name,
				            value: lvl.lvl_3_id,
				            code: lvl.lvl_3_code
			          	});
					});

					selectize3.clear();
					selectize3.clearOptions();
					selectize3.renderCache = {};
					selectize3.load(function(callback) {
					    callback(selectOptions);
					});
					selectize3.setValue(lvl_3_id);
				});
				popover.find('select[name=add-coa5-lvl-4]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.add-lvl-5-modal').find('input[name=lvl4_code]').val($(this)[0].options[value].code);
						}else{
							$('.add-lvl-5-modal').find('input[name=lvl4_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize4 = $('#add-coa5-lvl-4.selectized').selectize()[0].selectize;
				selectize4.clear();
				selectize4.clearOptions();
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

					selectize4.clear();
					selectize4.clearOptions();
					selectize4.renderCache = {};
					selectize4.load(function(callback) {
					    callback(selectOptions);
					});
					selectize4.setValue(lvl_4_id);
				});
				$('.popover.add-lvl-5-modal').addClass('animate');

				var restriction = Object.create(v_restriction);
				restriction.required();
				restriction.number();
				restriction.decimal();
				restriction.no_space();

				initRipple();
		        no_space();
		        initNumberValidation();
		        initSingleSubmit();
            },
            container: 'body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
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
				var popover = $('.popover.edit-lvl-5-modal');
				popover.find('select[name=edit-coa2-lvl-1]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.edit-lvl-5-modal').find('input[name=lvl1_code]').val($(this)[0].options[value].code);
						}else{
							$('.edit-lvl-5-modal').find('input[name=lvl1_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize1 = $('#edit-coa2-lvl-1.selectized').selectize()[0].selectize;
				selectize1.clear();
				selectize1.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_1',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_1_name,
				            value: lvl.lvl_1_id,
				            code: lvl.lvl_1_code
			          	});
					});

					selectize1.clear();
					selectize1.clearOptions();
					selectize1.renderCache = {};
					selectize1.load(function(callback) {
					    callback(selectOptions);
					});
					selectize1.setValue(lvl_1_id);
				});
				popover.find('select[name=edit-coa3-lvl-2]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.edit-lvl-5-modal').find('input[name=lvl2_code]').val($(this)[0].options[value].code);
						}else{
							$('.edit-lvl-5-modal').find('input[name=lvl2_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize2 = $('#edit-coa3-lvl-2.selectized').selectize()[0].selectize;
				selectize2.clear();
				selectize2.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_2',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_2_name,
				            value: lvl.lvl_2_id,
				            code: lvl.lvl_2_code
			          	});
					});

					selectize2.clear();
					selectize2.clearOptions();
					selectize2.renderCache = {};
					selectize2.load(function(callback) {
					    callback(selectOptions);
					});
					selectize2.setValue(lvl_2_id);
				});
				popover.find('select[name=edit-coa4-lvl-3]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.edit-lvl-5-modal').find('input[name=lvl3_code]').val($(this)[0].options[value].code);
						}else{
							$('.edit-lvl-5-modal').find('input[name=lvl3_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize3 = $('#edit-coa4-lvl-3.selectized').selectize()[0].selectize;
				selectize3.clear();
				selectize3.clearOptions();
				$.get(window_location+'/setup/setup3/get_level_3',function(response){
					var json_data = JSON.parse(response);
					var selectOptions = [];
					$.each(json_data, function(index, lvl){
						selectOptions.push({
				            text: lvl.lvl_3_name,
				            value: lvl.lvl_3_id,
				            code: lvl.lvl_3_code
			          	});
					});

					selectize3.clear();
					selectize3.clearOptions();
					selectize3.renderCache = {};
					selectize3.load(function(callback) {
					    callback(selectOptions);
					});
					selectize3.setValue(lvl_3_id);
				});
				popover.find('select[name=edit-coa5-lvl-4]').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						if($(this)[0].options[value]){
							$('.edit-lvl-5-modal').find('input[name=lvl4_code]').val($(this)[0].options[value].code);
						}else{
							$('.edit-lvl-5-modal').find('input[name=lvl4_code]').val('');
						}
					},
			      	onDropdownClose: function(dropdown){
			      		$('.selectize-dropdown [data-selectable] .highlight').removeClass('highlight');
			      	}
				});
				var selectize4 = $('#edit-coa5-lvl-4.selectized').selectize()[0].selectize;
				selectize4.clear();
				selectize4.clearOptions();
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

					selectize4.clear();
					selectize4.clearOptions();
					selectize4.renderCache = {};
					selectize4.load(function(callback) {
					    callback(selectOptions);
					});
					selectize4.setValue(lvl_4_id);
				});
				$('.popover.edit-lvl-5-modal').find('input[name=edit-id]').val(data.lvl_5_id);
				$('.popover.edit-lvl-5-modal').find('input[name=edit-lvl-5-code]').val(data.lvl_5_code);
				$('.popover.edit-lvl-5-modal').find('input[name=edit-lvl-5-name]').val(data.lvl_5_name);
				$('.popover.edit-lvl-5-modal').addClass('animate');

				var restriction = Object.create(v_restriction);
				restriction.required();
				restriction.number();
				restriction.decimal();
				restriction.no_space();

				initRipple();
		        no_space();
		        initNumberValidation();
		        initSingleSubmit();
            },
            container: 'body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
	});
	$('#coa-lvl5').on('click', '.delete', function(){
		var data = lvl5.row(this.closest('tr')).data();
		$.get(window_location+'/setup/setup3/delete_level_5', {id: data.lvl_5_id}, function(){
			lvl5.ajax.reload(function(){}, false);
			$('.popover').removeClass('animate');
			$('.popover').popover('hide');
	        $('.card-body button').removeAttr('disabled');
		});
	});
</script>

<!-- TAX TYPES -->
<script>
	$('body').on('click', '#add-tax-types-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
		 	'add-name': popover.find('input[name=add-name]').val(),
		 	'add-shortname': popover.find('input[name=add-shortname]').val(),
		}

		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		if(!required_input){
			_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
			_this.attr('disabled', true);
			$.get(window_location+'/setup/setup4/add_tax_types', data, function(response){
				tax_types.ajax.reload(function(){}, false);
				_this.html("Ok");
				_this.removeAttr('disabled');
				$('.popover').removeClass('animate');
				$('.popover').popover('hide');
		        $('.card-body button').removeAttr('disabled');
			});
		}
	});
	$('body').on('click', '#edit-tax-types-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
		 	'edit-code': popover.find('input[name=edit-code]').val(),
		 	'edit-name': popover.find('input[name=edit-name]').val(),
		 	'edit-shortname': popover.find('input[name=edit-shortname]').val(),
		 	'edit-tt-id': popover.find('input[name=edit-tt-id]').val()
		}

		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		if(!required_input){
			_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
			_this.attr('disabled', true);
			$.get(window_location+'/setup/setup4/edit_tax_types', data, function(response){
				tax_types.ajax.reload(function(){}, false);
				_this.html("Ok");
				_this.removeAttr('disabled');
				$('.popover').removeClass('animate');
				$('.popover').popover('hide');
		        $('.card-body button').removeAttr('disabled');
			});
		}
	});
	$('#add-tax-types-btn').click(function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('add-tax-types-modal');
				return 'right';
			},
			content: function(){
				return $('#add-tax-types-popover').html();
			},
			callback: function(){
				$('.add-tax-types-modal').addClass('animate');

				var restriction = Object.create(v_restriction);
				restriction.required();
				restriction.number();
				restriction.decimal();
				restriction.no_space();

				initRipple();
		        no_space();
		        initNumberValidation();
		        initDecimalValidation();
		        initSingleSubmit();
            },
            container: 'body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
	});
	$('#tax-types').on('click', '.edit', function(){
		$('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = tax_types.row(this.closest('tr')).data();
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('edit-tax-types-modal');
				return 'right';
			},
			content: function(){
				return $('#edit-tax-types-popover').html();
			},
			callback: function(){
				$('.popover.edit-tax-types-modal').find('input[name=edit-code]').val(data.tt_code);
				$('.popover.edit-tax-types-modal').find('input[name=edit-name]').val(data.tt_name);
				$('.popover.edit-tax-types-modal').find('input[name=edit-shortname]').val(data.tt_shortname);
				$('.popover.edit-tax-types-modal').find('input[name=edit-tt-id]').val(data.tt_id);
				$('.edit-tax-types-modal').addClass('animate');

				var restriction = Object.create(v_restriction);
				restriction.required();
				restriction.number();
				restriction.decimal();
				restriction.no_space();

				initRipple();
		        no_space();
		        initNumberValidation();
		        initDecimalValidation();
		        initSingleSubmit();
            },
            container: 'body'
		}).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
		$(this).popover('toggle');
	});
	$('#tax-types').on('click', '.delete', function(){
		var data = tax_types.row(this.closest('tr')).data();
		$.get(window_location+'/setup/setup4/delete_tax_types', {id: data.tt_id}, function(response){
			$('.popover').removeClass('animate');
			$('.popover').popover('hide');
	        $('.card-body button').removeAttr('disabled');
	        tax_types.ajax.reload(function(){}, false);
		});
	});
</script>

<!-- TAX -->
<script>
	$('body').on('click', '#add-tax-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
		 	'add-type': tt_id,
		 	'add-name': popover.find('input[name=add-name]').val(),
		 	'add-shortname': popover.find('input[name=add-shortname]').val(),
		 	'add-rate': popover.find('input[name=add-rate]').val(),
		 	'add-base': popover.find('input[name=add-base]').val()
		}

		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		if(!required_input){
			_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
			_this.attr('disabled', true);
			$.get(window_location+'/setup/setup4/add_tax', data, function(response){
				tax.ajax.reload(function(){}, false);
				_this.html("Ok");
				_this.removeAttr('disabled');
				$('.popover').removeClass('animate');
				$('.popover').popover('hide');
		        $('.card-body button').removeAttr('disabled');
			});
		}
	});
	$('body').on('click', '#edit-tax-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
		 	'edit-type': tt_id,
		 	'edit-code': popover.find('input[name=edit-code]').val(),
		 	'edit-name': popover.find('input[name=edit-name]').val(),
		 	'edit-shortname': popover.find('input[name=edit-shortname]').val(),
		 	'edit-rate': popover.find('input[name=edit-rate]').val(),
		 	'edit-base': popover.find('input[name=edit-base]').val(),
		 	'edit-t-id': popover.find('input[name=edit-t-id]').val()
		}

		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		if(!required_input){
			_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
			_this.attr('disabled', true);
			$.get(window_location+'/setup/setup4/edit_tax', data, function(response){
				tax.ajax.reload(function(){}, false);
				_this.html("Ok");
				_this.removeAttr('disabled');
				$('.popover').removeClass('animate');
				$('.popover').popover('hide');
		        $('.card-body button').removeAttr('disabled');
			});
		}
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
				var popover = $('.popover.add-tax-modal');
				$('.add-tax-modal').find('select[name=add-type]').selectize({
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
				$.get(window_location+'/setup/setup4/get_tax_types_list',function(response){
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
					selectize.setValue(tt_id);
				});
				$('.add-tax-modal').addClass('animate');

				if(tt_code === '5'){
					popover.find('input[name=add-shortname]').attr('readonly', true);
				}

				var restriction = Object.create(v_restriction);
				restriction.required();
				restriction.number();
				restriction.decimal();
				restriction.no_space();

				initRipple();
		        no_space();
		        initNumberValidation();
		        initDecimalValidation();
		        initSingleSubmit();
            },
            container: 'body'
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
				var popover = $('.popover.edit-tax-modal');
				$('.edit-tax-modal').find('select[name=edit-type]').selectize({
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
				$.get(window_location+'/setup/setup4/get_tax_types_list',function(response){
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

				if(tt_code === '5'){
					popover.find('input[name=edit-shortname]').attr('readonly', true);
				}

				var restriction = Object.create(v_restriction);
				restriction.required();
				restriction.number();
				restriction.decimal();
				restriction.no_space();

				initRipple();
		        no_space();
		        initNumberValidation();
		        initDecimalValidation();
		        initSingleSubmit();
            },
            container: 'body'
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
	        tax.ajax.reload(function(){}, false);
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

<!-- BRANCH -->
<script>
	$('body').on('click', '#add-branch-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
					'branch_name': popover.find('input[name=branch_name]').val(),
					'br_ba_number': popover.find('input[name=br_ba_number]').val(),
					'br_ba_street': popover.find('input[name=br_ba_street]').val(),
					'br_ba_barangay': popover.find('input[name=br_ba_barangay]').val(),
					'br_ba_city': popover.find('input[name=br_ba_city]').val(),
					'br_ba_province': popover.find('input[name=br_ba_province]').val(),
					'br_ba_zip': popover.find('input[name=br_ba_zip]').val(),
					'branch_tin': popover.find('input[name=branch_tin]').val(),
					'branch_cno': popover.find('input[name=branch_cno]').val(),
					'branch_email': popover.find('input[name=branch_email]').val(),
					'branch_tax_type': popover.find('select[name=branch_tax_type]').val(),
				}
		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		var format_input = validation.format_input(popover);
		if(!required_input && !format_input){
			_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
			_this.attr('disabled', true);
			$.get(window_location+'/setup/setup1/add_branch', data, function(response){
				branch_table.ajax.reload(function(){}, false);
				_this.html("Ok");
				_this.removeAttr('disabled');
				$('.popover').popover('hide');
	       		$('.card-body button').removeAttr('disabled');
			});
		}
	});
	$('body').on('click', '#edit-branch-submit', function(){
		var _this = $(this);
		var popover = $(this).closest('.popover');
		var data = {
					'edit-id': popover.find('input[name=edit-id]').val(),
					'branch_name': popover.find('input[name=branch_name]').val(),
					'br_ba_number': popover.find('input[name=br_ba_number]').val(),
					'br_ba_street': popover.find('input[name=br_ba_street]').val(),
					'br_ba_barangay': popover.find('input[name=br_ba_barangay]').val(),
					'br_ba_city': popover.find('input[name=br_ba_city]').val(),
					'br_ba_province': popover.find('input[name=br_ba_province]').val(),
					'br_ba_zip': popover.find('input[name=br_ba_zip]').val(),
					'branch_tin': popover.find('input[name=branch_tin]').val(),
					'branch_cno': popover.find('input[name=branch_cno]').val(),
					'branch_email': popover.find('input[name=branch_email]').val(),
					'branch_tax_type': popover.find('select[name=branch_tax_type]').val(),
				}
		var validation = Object.create(v_validation);
		var required_input = validation.required_input(popover);
		var format_input = validation.format_input(popover);
		if(!required_input && !format_input){
			_this.html("<i class='fa fa-refresh fa-spin'></i>&nbsp; Saving");
			_this.attr('disabled', true);
			$.get(window_location+'/setup/setup1/edit_branch', data, function(response){
				branch_table.ajax.reload(function(){}, false);
				_this.html("Ok");
				_this.removeAttr('disabled');
				$('.popover').popover('hide');
		   		$('.card-body button').removeAttr('disabled');
			});
		}
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
				var popover = $('.popover.add-branch-modal');
				popover.find('select#add-branch-tax-type').selectize();
				var restriction = Object.create(v_restriction);
				restriction.number();
				restriction.required();
				restriction.format();
				restriction.no_space();
				restriction.tin();
            },
            container: 'body'
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
				var popover = $('.popover.edit-branch-modal');
				$(popover).find('input[name=branch_name]').val(data.ch_cb_name);
				var address = data.ch_cb_address.split(";");
				var br_ba_number = address[0];
				var br_ba_street = address[1];
				var br_ba_barangay = address[2];
				var br_ba_city = address[3];
				var br_ba_province = address[4];
				var br_ba_zip = address[5];
				popover.find('input[name=br_ba_number]').val(br_ba_number);
				popover.find('input[name=br_ba_street]').val(br_ba_street);
				popover.find('input[name=br_ba_barangay]').val(br_ba_barangay);
				popover.find('input[name=br_ba_city]').val(br_ba_city);
				popover.find('input[name=br_ba_province]').val(br_ba_province);
				popover.find('input[name=br_ba_zip]').val(br_ba_zip);
				popover.find('select[name=branch_tax_type]').val(data.ch_cb_tax_type);
				popover.find('input[name=branch_tin]').val(data.ch_cb_tin);
				popover.find('input[name=branch_cno]').val(data.ch_cb_cno);
				popover.find('input[name=branch_email]').val(data.ch_cb_email);
				popover.find('input[name=edit-id]').val(data.ch_cb_id);
				popover.addClass('animate');
				popover.find('select#edit-branch-tax-type').selectize();
				var restriction = Object.create(v_restriction);
				restriction.number();
				restriction.required();
				restriction.format();
				restriction.no_space();
				restriction.tin();
            },
            container: 'body'
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
			branch_table.ajax.reload(function(){}, false);
			$('.popover').popover('hide');
       		$('.card-body button').removeAttr('disabled');
		});
	});
</script>

<!-- POPOVER FUNCTION -->
<script>
	$('body').on('click', '.close-popover', function(){
		$('.popover').removeClass('animate');
		$('.popover').popover('hide');
        $('#content-div button').removeAttr('disabled');
        $('.card-body button').removeAttr('disabled');
    });
    $('body').on('click', '#close-btn', function(){
    	$('.popover').removeClass('animate');
        $('.popover').popover('hide');
       	$('#content-div button').removeAttr('disabled');
       	$('.card-body button').removeAttr('disabled');
    });
</script>

<script>
	$('#btn-fin').click(function(){
		$.get(window_location+'/setup/setup4/verify_setup', function(response){
			var json_data = JSON.parse(response);
			if(json_data.tax_type !== '' && json_data.tin !== '' && parseFloat(json_data.super_admin) > 0){
				window.location = window_location+'/setup/setup4/finish_setup';
			}else{
				if(json_data.tax_type === ''){
					$.notify({
						icon: "fa fa-warning",
						message: "Please provide value for company TAX TYPE",
					},{
						type: 'danger',
						timer: 3000,
						placement: {
							from: 'top',
							align: 'right'
						},
						animate: {
							enter: 'animated fadeInDown',
							exit: 'animated fadeOutUp'
						},
						template: '<div id="notify-1" data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
									'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
									'<span data-notify="icon"></span> ' +
									'<span data-notify="message">{2}</span>' +
								'</div>',
					});
				}
				if(json_data.tin === ''){
					$.notify({
						icon: "fa fa-warning",
						message: "Please provide value for company TIN"
					},{
						type: 'danger',
						timer: 3000,
						placement: {
							from: 'top',
							align: 'right'
						},
						animate: {
							enter: 'animated fadeInDown',
							exit: 'animated fadeOutUp'
						},
						template: '<div id="notify-2" data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
									'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
									'<span data-notify="icon"></span> ' +
									'<span data-notify="message">{2}</span>' +
								'</div>',
					});
				}
				if(parseFloat(json_data.super_admin) === 0){
					$.notify({
						icon: "fa fa-warning",
						message: 'Please create super admin user for the company',
					},{
						type: 'danger',
						timer: 3000,
						placement: {
							from: 'top',
							align: 'right'
						},
						animate: {
							enter: 'animated fadeInDown',
							exit: 'animated fadeOutUp'
						},
						template: '<div id="notify-3" data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
									'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
									'<span data-notify="icon"></span> ' +
									'<span data-notify="message">{2}</span>' +
								'</div>',
					});
				}
			}
		});
	});

	$('body').on('click', '#notify-1', function(){
		currentStepId = 1;
		let width = 25 * currentStepId;
		$('#progress-bar .progress-bar').css('width', width+'%');
		mySequence1.goTo(currentStepId);
		eval();
		window.scrollTo(0, 0);
	});
	$('body').on('click', '#notify-2', function(){
		currentStepId = 1;
		let width = 25 * currentStepId;
		$('#progress-bar .progress-bar').css('width', width+'%');
		mySequence1.goTo(currentStepId);
		eval();
		window.scrollTo(0, 0);
	});
	$('body').on('click', '#notify-3', function(){
		currentStepId = 2;
		let width = 25 * currentStepId;
		$('#progress-bar .progress-bar').css('width', width+'%');
		mySequence1.goTo(currentStepId);
		eval();
		window.scrollTo(0, 0);
	});
</script>
<script>
	$('#b_setup_btn').click(function(){
		$('#b_setup').find('input[name=setup_type]').val('customize');
		$('#b_setup').modal({
			backdrop: 'static',
   			keyboard: false,
   			show: true
		});
	});
	$('#b_setup #confirm-back').click(function(){
		$('#b_setup #warning').css('display', 'none');
		$('#b_setup #w-loading').css('display', 'block');
		$(this).closest('form').submit();
	});
</script>

