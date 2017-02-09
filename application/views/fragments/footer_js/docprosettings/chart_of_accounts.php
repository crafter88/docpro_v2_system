<script type="text/javascript" src="<?php echo base_url(); ?>libs/selectize_2/js/standalone/selectize.min.js"></script>
<script>
	var create = $('#create-table').DataTable({
		ajax : window_location+'/docpro_settings/chart_of_accounts/coa_get',
		columns : [
					{
						bSortable: false, bSearchable: false,
						mRender: function(row, setting, full){
							return "<button type='button' class='btn btn-primary btn-xs btn-raised title view' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                    <button type='button' class='btn btn-success btn-xs btn-raised title edit' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                        <button type=button class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete'><i class='fa fa-times'></i></button>";
						}
					},
					{data: 'lvl_1_name'},
					{data: 'lvl_2_name'},
					{data: 'lvl_3_name'},
					{data: 'lvl_4_name'},
					{data: 'lvl_5_name'},
					{data: 'coa_code'},
					{data: 'coa_name'},
					{data: 'bir'}
				],
		columnDefs: [{targets: 0, width: '100px'}],
		order: [['1', 'asc']],
		scrollX: true
	});

	var coa_setup_1 = function(){
		window.location = window_location+'/docpro_settings/chart_of_accounts/redirect_coa_setup/1';
	}
	var coa_setup_2 = function(){
		window.location = window_location+'/docpro_settings/chart_of_accounts/redirect_coa_setup/2';
	}
	var coa_setup_3 = function(){
		window.location = window_location+'/docpro_settings/chart_of_accounts/redirect_coa_setup/3';
	}
	var coa_setup_4 = function(){
		window.location = window_location+'/docpro_settings/chart_of_accounts/redirect_coa_setup/4';
	}

	$('#add-coa').click(function(){
		$('body').on('hidden.bs.popover', function (e) {
		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
		});
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('coa-add');
				return 'right';
			},
			content: function(){
				return $('#add-coa-popover').html();
			},
			callback: function(){
				var popover = $('.popover.coa-add');
				var lvl4_name = '';
				var lvl4_id = 0;

				popover.find('input[name=add-name]').keyup(function(){
					var value = $(this).val();
					if(lvl4_id > 0){
						if(value === lvl4_name){
							popover.find('input[name=add-lvl-5-code]').val('0');
						}else{	
							$.get(window_location+'/docpro_settings/chart_of_accounts/coa_get_lvl5/'+lvl4_id, function(response){
								var json_data = JSON.parse(response);
								var code = json_data.length > 0 ? json_data[0].lvl_5_name === value ? parseFloat(json_data[0].lvl_5_code) : parseFloat(json_data[0].lvl_5_code) + 1 : 0;
								popover.find('input[name=add-lvl-5-code]').val(code);

								var lvl_1_code = popover.find('input[name=add-element-code]').val();
								var lvl_2_code = popover.find('input[name=add-classification-code]').val();
								var lvl_3_code = popover.find('input[name=add-line-item-code]').val();
								var lvl_4_code = popover.find('input[name=add-subclassification-code]').val();
								var lvl_5_code = popover.find('input[name=add-lvl-5-code]').val();
								var final_code = lvl_1_code+''+lvl_2_code+''+lvl_3_code+''+lvl_4_code+''+lvl_5_code;
								popover.find('input[name=add-code]').val(final_code);
								
							});
						}
					}else{
						popover.find('input[name=add-code]').val('');
						popover.find('input[name=add-lvl-6-code]').val('');
					}
					popover.find('input[name=add-name-display]').val(value);
				});
				var subclass = $('#add-subclassification').selectize({
					create: false,
					sortField: {
						field: 'text',
						sort: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						var value = value ? value : 0;
						var selectize = $('#add-subclassification').selectize()[0].selectize;
						var selected = selectize.options[value] ? selectize.options[value] : '';
						var code = selected !== '' ? selected.code : '';
						var text = selected !== '' ? selected.text : '';
						var lvl_5_code = selected !== '' ? '0' : '';
						var bir = selected !== '' ? selected.bir : '';
						popover.find('input[name=add-bir]').val(bir);
						popover.find('input[name=add-subclassification-code]').val(code);
						popover.find('input[name=add-lvl-5-code]').val(lvl_5_code);
						popover.find('input[name=add-name]').val(text);
						popover.find('input[name=add-name-display]').val(text);
						lvl4_name = text;
						lvl4_id = value;

						var lvl_1_code = popover.find('input[name=add-element-code]').val();
						var lvl_2_code = popover.find('input[name=add-classification-code]').val();
						var lvl_3_code = popover.find('input[name=add-line-item-code]').val();
						var lvl_4_code = popover.find('input[name=add-subclassification-code]').val();
						var lvl_5_code = popover.find('input[name=add-lvl-5-code]').val();
						var final_code = lvl_1_code+''+lvl_2_code+''+lvl_3_code+''+lvl_4_code+''+lvl_5_code;
						popover.find('input[name=add-code]').val(final_code);

						$('#add-subclassification').parent().parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
						$('#add-subclassification').parent().parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
						popover.find('input[name=add-name]').removeClass('v-invalid');
					}
				});
				subclass_select = subclass[0].selectize;
				var lineitem = $('#add-line-item').selectize({
					create: false,
					sortField: {
						field: 'text',
						sort: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						var value = value ? value : 0;
						var selectize = $('#add-line-item').selectize()[0].selectize;
						var selected = selectize.options[value] ? selectize.options[value] : '';
						var code = selected !== '' ? selected.code : '';
						popover.find('input[name=add-line-item-code]').val(code);
						subclass_select.clear();
						subclass_select.clearOptions();
						$.get(window_location+'/docpro_settings/chart_of_accounts/filter_lvl4/'+value, function(response){
							var json_data = JSON.parse(response);
							var options = [];
							$.each(json_data, function(index, data){
								options.push({
									text: data.lvl_4_name,
									value: data.lvl_4_id,
									code: data.lvl_4_code,
									bir: data.bir
								});
								subclass_select.load(function(callback){
									callback(options);
								});
							});
						});

						$('#add-line-item').parent().parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
						$('#add-line-item').parent().parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
					}
				});
				lineitem_select = lineitem[0].selectize;
				var classification = $('#add-classification').selectize({
					create: false,
					sortField: {
						field: 'text',
						sort: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						var value = value ? value : 0;
						var selectize = $('#add-classification').selectize()[0].selectize;
						var selected = selectize.options[value] ? selectize.options[value] : '';
						var code = selected !== '' ? selected.code : '';
						popover.find('input[name=add-classification-code]').val(code);
						lineitem_select.clear();
						lineitem_select.clearOptions();
						$.get(window_location+'/docpro_settings/chart_of_accounts/filter_lvl3/'+value, function(response){
							var json_data = JSON.parse(response);
							var options = [];
							$.each(json_data, function(index, data){
								options.push({
									text: data.lvl_3_name,
									value: data.lvl_3_id,
									code: data.lvl_3_code
								});
								lineitem_select.load(function(callback){
									callback(options);
								});
							});
						});

						$('#add-classification').parent().parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
						$('#add-classification').parent().parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
					}
				});
				classification_select = classification[0].selectize;
				var element = $('#add-element').selectize({
					create: false,
					sortField: {
						field: 'text',
						sort: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						var value = value ? value : 0;
						var selectize = $('#add-element').selectize()[0].selectize;
						var selected = selectize.options[value] ? selectize.options[value] : '';
						var code = selected !== '' ? selected.code : '';
						popover.find('input[name=add-element-code]').val(code);
						classification_select.clear();
						classification_select.clearOptions();
						$.get(window_location+'/docpro_settings/chart_of_accounts/filter_lvl2/'+value, function(response){
							var json_data = JSON.parse(response);
							var options = [];
							$.each(json_data, function(index, data){
								options.push({
									text: data.lvl_2_name,
									value: data.lvl_2_id,
									code: data.lvl_2_code
								});
								classification_select.load(function(callback){
									callback(options);
								});
							});
						});

						$('#add-element').parent().parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
						$('#add-element').parent().parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
					}
				});
				element_select = element[0].selectize;
				element_select.clear();
				element_select.clearOptions();
				$.get(window_location+'/docpro_settings/chart_of_accounts/filter_lvl1', function(response){
					var json_data = JSON.parse(response);
					var options = [];
					$.each(json_data, function(index, data){
						options.push({
							text: data.lvl_1_name,
							value: data.lvl_1_id,
							code: data.lvl_1_code
						});
					});
					element_select.load(function(callback){
						callback(options);
					});
				});

				var restriction = Object.create(v_restriction);
                restriction.required();
                restriction.no_space();
                restriction.select_required();
                popover.find('button.v-submit').unbind('click');
                popover.find('button.v-submit').click(function(){
                    var _this = $(this);
                    var validation = Object.create(v_validation);
                    var required_input = validation.required_input(popover);
                    var required_select = validation.required_select(popover);
                    if(!required_input && !required_select){
                        _this.closest('form').submit();
                        _this.attr('disabled', true);
                        _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
                    }
                });
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
	$('#create-table').on('click', '.view', function(){
		$('body').on('hidden.bs.popover', function (e) {
			    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
			});
			var data = create.row($(this).closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('coa-view');
					return 'right';
				},
				content: function(){
					return $('#view-coa-popover').html();
				},
				callback: function(){
					var popover = $('.popover.coa-view');
					popover.find('input[name=view-element-code]').val(data.lvl_1_code);
					popover.find('input[name=view-element]').val(data.lvl_1_name);
					popover.find('input[name=view-classification-code]').val(data.lvl_2_code);
					popover.find('input[name=view-classification]').val(data.lvl_2_name);
					popover.find('input[name=view-line-item-code]').val(data.lvl_3_code);
					popover.find('input[name=view-line-item]').val(data.lvl_3_name);
					popover.find('input[name=view-subclassification-code]').val(data.lvl_4_code);
					popover.find('input[name=view-subclassification]').val(data.lvl_4_name);
					popover.find('input[name=view-lvl-5-code]').val(data.lvl_5_code);
					popover.find('input[name=view-coa-lvl-5]').val(data.lvl_5_name);
					popover.find('input[name=view-lvl-6-code]').val(data.lvl_6_code);
					popover.find('input[name=view-name]').val(data.coa_name);
					popover.find('input[name=view-code]').val(data.coa_code);
					popover.find('input[name=view-name-display]').val(data.coa_name);
					popover.find('input[name=view-bir]').val(data.bir);
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
	$('#create-table').on('click', '.edit', function(){
		$('body').on('hidden.bs.popover', function (e) {
		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
		});
		var data = create.row($(this).closest('tr')).data();
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('coa-edit');
				return 'right';
			},
			content: function(){
				return $('#edit-coa-popover').html();
			},
			callback: function(){
				var popover = $('.popover.coa-edit');
				var lvl4_name = '';
				var lvl4_id = 0;

				popover.find('input[name=o_lvl5_id]').val(data.lvl_5_id);

				popover.find('input[name=edit-name]').keyup(function(){
					var value = $(this).val();
					if(lvl4_id > 0){
						if(value === lvl4_name){
							popover.find('input[name=edit-lvl-5-code]').val('0');
						}else{	
							$.get(window_location+'/docpro_settings/chart_of_accounts/coa_get_lvl5/'+lvl4_id, function(response){
								var json_data = JSON.parse(response);
								var code = json_data.length > 0 ? json_data[0].lvl_5_name === value ? parseFloat(json_data[0].lvl_5_code) : parseFloat(json_data[0].lvl_5_code) + 1 : 0;
								popover.find('input[name=edit-lvl-5-code]').val(code);

								var lvl_1_code = popover.find('input[name=edit-element-code]').val();
								var lvl_2_code = popover.find('input[name=edit-classification-code]').val();
								var lvl_3_code = popover.find('input[name=edit-line-item-code]').val();
								var lvl_4_code = popover.find('input[name=edit-subclassification-code]').val();
								var lvl_5_code = popover.find('input[name=edit-lvl-5-code]').val();

								var final_code = lvl_1_code+''+lvl_2_code+''+lvl_3_code+''+lvl_4_code+''+lvl_5_code;
								popover.find('input[name=edit-code]').val(final_code);
								
							});
						}
					}else{
						popover.find('input[name=edit-code]').val('');
						popover.find('input[name=edit-lvl-5-code]').val('');
					}
					popover.find('input[name=edit-name-display]').val(value);
				});
				var subclass = $('#edit-subclassification').selectize({
					create: false,
					sortField: {
						field: 'text',
						sort: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						var value = value ? value : 0;
						var selectize = $('#edit-subclassification').selectize()[0].selectize;
						var selected = selectize.options[value] ? selectize.options[value] : '';
						var code = selected !== '' ? selected.code : '';
						var text = selected !== '' ? selected.text : '';
						var lvl_5_code = selected !== '' ? '0' : '';
						var bir = selected !== '' ? selected.bir : '';
						popover.find('input[name=edit-bir]').val(bir);
						popover.find('input[name=edit-subclassification-code]').val(code);
						popover.find('input[name=edit-lvl-5-code]').val(lvl_5_code);
						popover.find('input[name=edit-name]').val(text);
						popover.find('input[name=edit-name-display]').val(text);
						lvl4_name = text;
						lvl4_id = value;

						if(lvl4_id === data.lvl_4_id){
							popover.find('input[name=edit-lvl-5-code]').val(data.lvl_5_code);
							popover.find('input[name=edit-name]').val(data.coa_name);
							popover.find('input[name=edit-name-display]').val(data.coa_name);
						}

						var lvl_1_code = popover.find('input[name=edit-element-code]').val();
						var lvl_2_code = popover.find('input[name=edit-classification-code]').val();
						var lvl_3_code = popover.find('input[name=edit-line-item-code]').val();
						var lvl_4_code = popover.find('input[name=edit-subclassification-code]').val();
						var lvl_5_code = popover.find('input[name=edit-lvl-5-code]').val();

						var final_code = lvl_1_code+''+lvl_2_code+''+lvl_3_code+''+lvl_4_code+''+lvl_5_code;
						popover.find('input[name=edit-code]').val(final_code);

						$('#edit-subclassification').parent().parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
						$('#edit-subclassification').parent().parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
						popover.find('input[name=edit-name]').removeClass('v-invalid');
					}
				});
				subclass_select = subclass[0].selectize;
				var lineitem = $('#edit-line-item').selectize({
					create: false,
					sortField: {
						field: 'text',
						sort: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						var value = value ? value : 0;
						var selectize = $('#edit-line-item').selectize()[0].selectize;
						var selected = selectize.options[value] ? selectize.options[value] : '';
						var code = selected !== '' ? selected.code : '';
						popover.find('input[name=edit-line-item-code]').val(code);
						subclass_select.clear();
						subclass_select.clearOptions();
						$.get(window_location+'/docpro_settings/chart_of_accounts/filter_lvl4/'+value, function(response){
							var json_data = JSON.parse(response);
							var options = [];
							$.each(json_data, function(index, data){
								options.push({
									text: data.lvl_4_name,
									value: data.lvl_4_id,
									code: data.lvl_4_code,
									bir: data.bir
								});
								subclass_select.load(function(callback){
									callback(options);
								});
							});
							subclass_select.setValue(data.lvl_4_id);
						});

						$('#edit-line-item').parent().parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
						$('#edit-line-item').parent().parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
					}
				});
				lineitem_select = lineitem[0].selectize;
				var classification = $('#edit-classification').selectize({
					create: false,
					sortField: {
						field: 'text',
						sort: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						var value = value ? value : 0;
						var selectize = $('#edit-classification').selectize()[0].selectize;
						var selected = selectize.options[value] ? selectize.options[value] : '';
						var code = selected !== '' ? selected.code : '';
						popover.find('input[name=edit-classification-code]').val(code);
						lineitem_select.clear();
						lineitem_select.clearOptions();
						$.get(window_location+'/docpro_settings/chart_of_accounts/filter_lvl3/'+value, function(response){
							var json_data = JSON.parse(response);
							var options = [];
							$.each(json_data, function(index, data){
								options.push({
									text: data.lvl_3_name,
									value: data.lvl_3_id,
									code: data.lvl_3_code
								});
								lineitem_select.load(function(callback){
									callback(options);
								});
							});
							lineitem_select.setValue(data.lvl_3_id);
						});

						$('#edit-classification').parent().parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
						$('#edit-classification').parent().parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
					}
				});
				classification_select = classification[0].selectize;
				var element = $('#edit-element').selectize({
					create: false,
					sortField: {
						field: 'text',
						sort: 'asc'
					},
					dropdownParent: null,
					onChange: function(value){
						var value = value ? value : 0;
						var selectize = $('#edit-element').selectize()[0].selectize;
						var selected = selectize.options[value] ? selectize.options[value] : '';
						var code = selected !== '' ? selected.code : '';
						popover.find('input[name=edit-element-code]').val(code);
						classification_select.clear();
						classification_select.clearOptions();
						$.get(window_location+'/docpro_settings/chart_of_accounts/filter_lvl2/'+value, function(response){
							var json_data = JSON.parse(response);
							var options = [];
							$.each(json_data, function(index, data){
								options.push({
									text: data.lvl_2_name,
									value: data.lvl_2_id,
									code: data.lvl_2_code
								});
								classification_select.load(function(callback){
									callback(options);
								});
							});
							classification_select.setValue(data.lvl_2_id);
						});

						$('#edit-element').parent().parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
						$('#edit-element').parent().parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
					}
				});
				element_select = element[0].selectize;
				element_select.clear();
				element_select.clearOptions();
				$.get(window_location+'/docpro_settings/chart_of_accounts/filter_lvl1', function(response){
					var json_data = JSON.parse(response);
					var options = [];
					$.each(json_data, function(index, data){
						options.push({
							text: data.lvl_1_name,
							value: data.lvl_1_id,
							code: data.lvl_1_code
						});
					});
					element_select.load(function(callback){
						callback(options);
					});
					element_select.setValue(data.lvl_1_id);
				});

				popover.find('input[name=edit-coa-lvl-5]').val(data.lvl_5_id);
				popover.find('input[name=o_lvl4_id]').val(data.lvl_4_id);
				popover.find('input[name=o_coa_name]').val(data.coa_name);
				popover.find('input[name=edit-id]').val(data.coa_id);

				var restriction = Object.create(v_restriction);
                restriction.required();
                restriction.no_space();
                restriction.select_required();
                popover.find('button.v-submit').unbind('click');
                popover.find('button.v-submit').click(function(){
                    var _this = $(this);
                    var validation = Object.create(v_validation);
                    var required_input = validation.required_input(popover);
                    var required_select = validation.required_select(popover);
                    if(!required_input && !required_select){
                        _this.closest('form').submit();
                        _this.attr('disabled', true);
                        _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
                    }
                });
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
	$('#create-table').on('click', '.delete', function(){
		$('body').on('hidden.bs.popover', function (e) {
		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
		});
		var data = create.row($(this).closest('tr')).data();
		$(this).popover({
			animation: true,
			html: true,
			placement: function(context, src){
				$(context).addClass('coa-delete');
				return 'right';
			},
			content: function(){
				return $('#delete-coa-popover').html();
			},
			callback: function(){
				var popover = $('.popover.coa-delete');
				popover.find('input[name=delete-element-code]').val(data.lvl_1_code);
				popover.find('input[name=delete-element]').val(data.lvl_1_name);
				popover.find('input[name=delete-classification-code]').val(data.lvl_2_code);
				popover.find('input[name=delete-classification]').val(data.lvl_2_name);
				popover.find('input[name=delete-line-item-code]').val(data.lvl_3_code);
				popover.find('input[name=delete-line-item]').val(data.lvl_3_name);
				popover.find('input[name=delete-subclassification-code]').val(data.lvl_4_code);
				popover.find('input[name=delete-subclassification]').val(data.lvl_4_name);
				popover.find('input[name=delete-lvl-5-code]').val(data.lvl_5_code);
				popover.find('input[name=delete-coa-lvl-5]').val(data.lvl_5_name);
				popover.find('input[name=delete-lvl-6-code]').val(data.lvl_6_code);
				popover.find('input[name=delete-name]').val(data.coa_name);
				popover.find('input[name=delete-code]').val(data.coa_code);
				popover.find('input[name=delete-name-display]').val(data.coa_name);
				popover.find('input[name=delete-bir]').val(data.bir);
				popover.find('input[name=delete-id]').val(data.coa_id);
				popover.find('input[name=o_lvl5_id]').val(data.lvl_5_id);
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

	$('div').on('click', '.close-popover', function(){
        $('.popover').popover('hide');
        $('.card-body button').removeAttr('disabled');
    });

	$('#switch-state').bootstrapSwitch();
    init_table_option(create, $(this).closest('side-body'));
</script>
