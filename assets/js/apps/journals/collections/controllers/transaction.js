angular.module('journals')
		.controller('transaction', ['$scope', '$http', function($scope, $http){
		//Document
			//var today = new Date();
			//$scope.transaction_date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
			
			// GROSS AMOUNT
			// $scope.$watchGroup(['amounts_gross_amount', 'vat_total_gross'], function(){
			// 	$scope.variance_gross_amount = ($scope.vat_total_gross === 0 | $scope.amounts_gross_amount === 0) ? 0 : $scope.vat_total_gross - $scope.amounts_gross_amount;
			// });

			// TAX WITHHELD
			// $scope.$watchGroup(['amounts_tax_withheld', 'ewt_total_withheld', 'fwt_total_withheld'], function(){
			// 	$scope.variance_tax_withheld = ($scope.ewt_total_withheld === 0 | $scope.fwt_total === 0 | $scope.fwt_total_withheld === 0) ? 0 : (($scope.ewt_total_withheld + $scope.fwt_total_withheld) - $scope.amounts_tax_withheld);
			// });

			$scope.$watchGroup(['amounts_gross_amount', 'prod_serv_total_gross'], function(){
				$scope.variance_gross_amount = $scope.prod_serv_total_gross - $scope.amounts_gross_amount;
			});
			$scope.$watchGroup(['amounts_vat', 'vat_total_vat'], function(newVal, oldVal){
				$scope.variance_vat = $scope.vat_total_vat - $scope.amounts_vat;
			});
			$scope.$watchGroup(['amounts_tax_withheld', 'ewt_total_withheld', 'fwt_total_withheld'], function(){
				$scope.variance_tax_withheld = ($scope.ewt_total_withheld + $scope.fwt_total_withheld) - $scope.amounts_tax_withheld;
			});
			$scope.$watchGroup(['amounts_deductions', 'discount_total_deduction'], function(){
				$scope.variance_deductions = $scope.discount_total_deduction - $scope.amounts_deductions;
			});
			$scope.$watchGroup(['amounts_net_amount', 'vat_total_net_vat'], function(){
				$scope.variance_net_amount = $scope.vat_total_net_vat - $scope.amounts_net_amount;
			});
			$scope.selected_bp_id = 0;
			$scope.$watchGroup(['selected_bp.bp'], function(){
				if($scope.selected_bp.bp !== undefined){
					$scope.selected_bp_id = $scope.selected_bp.bp.co_bp_id;
					// VAT
					$scope.vat_array = [];
					$scope.vat_array.push({code: '', nature: '', rate: '', vat: '', net_vat: '', gross_amount: '', delete_btn: false});
					$scope.vat_delete_row = function(event, index){
						$scope.vat_array.splice(index, 1);
					}
					$scope.vat_code = [];
					$scope.vat_code.push({co_t_id: '', t_id: '', cb_id: '', flag: '', t_code: '', t_name: '', t_shortname: '', t_rate: '', t_base: '', tt_id: '', t_validity_date: '', tt_code: '', tt_name: '', tt_shortname: ''});
					$http.get(window_location+'/journals/collections/transaction/vat/get', {params: {id: $scope.selected_bp_id}}).then(function success(response){
						$.each(response.data, function(index, data){
							$scope.vat_code.push(data);
						});
					}, function error(response){});

					// EWT
					$scope.ewt_array = [];
					$scope.ewt_array.push({code: '', rate: '', base: '', withheld: '', delete_btn: false});
					$scope.ewt_delete_row = function(event, index){
						$scope.ewt_array.splice(index, 1);
					}
					$scope.ewt_code = [];
					$scope.ewt_code.push({co_t_id: '', t_id: '', cb_id: '', flag: '', t_code: '', t_name: '', t_shortname: '', t_rate: '', t_base: '', tt_id: '', t_validity_date: '', tt_code: '', tt_name: '', tt_shortname: ''});
					$http.get(window_location+'/journals/collections/transaction/ewt/get', {params: {id: $scope.selected_bp_id}}).then(function success(response){
						$.each(response.data, function(index, data){
							$scope.ewt_code.push(data);
						});
					}, function error(response){});

					// FWT
					$scope.fwt_array = [];
					$scope.fwt_array.push({code: '', rate: '', base: '', withheld: '', delete_btn: false});
					$scope.fwt_delete_row = function(event, index){
						$scope.fwt_array.splice(index, 1);
					}
					$scope.fwt_code = [];
					$scope.fwt_code.push({co_t_id: '', t_id: '', cb_id: '', flag: '', t_code: '', t_name: '', t_shortname: '', t_rate: '', t_base: '', tt_id: '', t_validity_date: '', tt_code: '', tt_name: '', tt_shortname: ''});
					$http.get(window_location+'/journals/collections/transaction/fwt/get', {params: {id: $scope.selected_bp_id}}).then(function success(response){
						$.each(response.data, function(index, data){
							$scope.fwt_code.push(data);
						});
					}, function error(response){});
				}
			});

			$scope.particulars_period = '';
			$scope.payment_terms = '';
			$scope.payment_amount_paid = '';
			$scope.payment_check_number = '';

			$scope.document_date = new Date();
			$scope.amounts_gross_amount = 0;
			$scope.amounts_vat = 0;
			$scope.amounts_tax_withheld = 0;
			$scope.amounts_deductions = 0;
			$scope.amounts_net_amount = isNaN(parseFloat($scope.amounts_gross_amount) - (parseFloat($scope.amounts_tax_withheld) - parseFloat($scope.amounts_deductions))) ? 0 : (parseFloat($scope.amounts_gross_amount) - (parseFloat($scope.amounts_tax_withheld) - parseFloat($scope.amounts_vat) - parseFloat($scope.amounts_deductions)));			
			$scope.$watchGroup(['amounts_gross_amount', 'amounts_vat', 'amounts_tax_withheld', 'amounts_deductions'], function(newVal, oldVal){
				$scope.amounts_net_amount = isNaN(parseFloat($scope.amounts_gross_amount) - (parseFloat($scope.amounts_tax_withheld) - parseFloat($scope.amounts_deductions))) ? 0 : (parseFloat($scope.amounts_gross_amount) - parseFloat($scope.amounts_tax_withheld) - parseFloat($scope.amounts_deductions));
			});

			$scope.isNaN = isNaN;
			$scope.transaction_date = new Date().toString('MMM d, yyyy');
			$scope.transaction_id = 1;
			$http.get(window_location+'/journals/collections/transaction/last_trans_id').then(function success(response){
				$scope.transaction_id = parseFloat(response.data) + 1;
			}, function error(response){
				console.log(response);
			});
			
			$scope.journal_transaction_id = 4;
			$scope.journal_transaction_count = 1;
			$http.get(window_location+'/journals/collections/transaction/last_journ_trans_id', {params: {id: $scope.journal_transaction_id}}).then(function success(response){
				$scope.journal_transaction_count = parseFloat(response.data) + 1;
			}, function error(response){
				console.log(response);
			});
			
			$scope.document_name = 'Collection Receipt';
			
		//Business Partner
			$scope.selected_bp = {};
			$scope.business_partner_array = [];
			$http.get(window_location+'/journals/collections/transaction/bp/get').then(function success(response){
				$.each(response.data, function(index, data){
					$scope.business_partner_array.push(data);
				});
			}, function error(response){});
			
			$('body').on('click', '.add-bp', function(){
				var popover = $('#bp-modal');
                var bp_class = popover.find('select[name*=add-class]').selectize({
                    create: false,
                    sortField: {
                        field: 'text',
                        sort: 'asc'
                    },
                    onChange: function(value){
                        var popover = $('.popover.add-modal-body');
                        var select = $('#add-class').selectize()[0].selectize;
                        var code = select.options[value].code;
                        if(code === '61'){
                            popover.find('input[name=new-class]').removeAttr('readonly');
                        }else{
                            popover.find('input[name=new-class]').val('');
                            popover.find('input[name=new-class]').attr('readonly', true);
                        }
                        popover.find('input[name=bpc_code]').val(code);
                    }
                });
                var bp_class_select = bp_class[0].selectize;
                bp_class_select.clear();
                bp_class_select.clearOptions();
                $.get(window_location+'/company_settings/business_partners/get_bp_class', function(response){
                    var json_data = JSON.parse(response);
                    var selectOptions = [];
                    $.each(json_data, function(index, data){
                        selectOptions.push({
                            text: data.bpc_class,
                            value: data.bpc_id,
                            code: data.bpc_code
                        });
                    });
                    bp_class_select.clear();
                    bp_class_select.clearOptions();
                    bp_class_select.cacheRender = {};
                    bp_class_select.load(function(callback){
                        callback(selectOptions);
                    });
                });
                var bp_type = popover.find('select[name*=add-type]').selectize({
                    create: false,
                    sortField: {
                        field: 'text',
                        sort: 'asc'
                    }
                });
                var bp_type_select = bp_type[0].selectize;
                bp_type_select.clear();
                bp_type_select.clearOptions();
                $.get(window_location+'/company_settings/business_partners/get_bp_type', function(response){
                    var json_data = JSON.parse(response);
                    var selectOptions = [];
                    $.each(json_data, function(index, data){
                        selectOptions.push({
                            text: data.bpt_type,
                            value: data.bpt_id,
                            code: data.bpt_code
                        });
                    });
                    bp_type_select.clear();
                    bp_type_select.clearOptions();
                    bp_type_select.cacheRender = {};
                    bp_type_select.load(function(callback){
                        callback(selectOptions);
                    });
                });
                var tax1 = popover.find('select[name*=add-tax-1]').selectize({
                    create: false,
                    sortField: {
                        field: 'text',
                        sort: 'asc'
                    }
                });
                var tax1_select = tax1[0].selectize;
                tax1_select.clear();
                tax1_select.clearOptions();
                $.get(window_location+'/company_settings/business_partners/get_tax_1', function(response){
                    var json_data = JSON.parse(response);
                    var selectOptions = [];
                    $.each(json_data, function(index, data){
                        selectOptions.push({
                            text: data.t_name,
                            value: data.t_id,
                            code: data.t_code
                        });
                    });
                    tax1_select.clear();
                    tax1_select.clearOptions();
                    tax1_select.cacheRender = {};
                    tax1_select.load(function(callback){
                        callback(selectOptions);
                    });
                });
                var tax2 = popover.find('select[name*=add-tax-2]').selectize({
                    create: false,
                    sortField: {
                        field: 'text',
                        sort: 'asc'
                    }
                });
                var tax2_select = tax2[0].selectize;
                tax2_select.clear();
                tax2_select.clearOptions();
                $.get(window_location+'/company_settings/business_partners/get_tax_2', function(response){
                    var json_data = JSON.parse(response);
                    var selectOptions = [];
                    $.each(json_data, function(index, data){
                        selectOptions.push({
                            text: data.t_atc,
                            value: data.t_id,
                            code: data.t_code
                        });
                    });
                    tax2_select.clear();
                    tax2_select.clearOptions();
                    tax2_select.cacheRender = {};
                    tax2_select.load(function(callback){
                        callback(selectOptions);
                    });
                });
                var tax3 = popover.find('select[name*=add-tax-3]').selectize({
                    create: false,
                    sortField: {
                        field: 'text',
                        sort: 'asc'
                    }
                });
                var tax3_select = tax3[0].selectize;
                tax3_select.clear();
                tax3_select.clearOptions();
                $.get(window_location+'/company_settings/business_partners/get_tax_3', function(response){
                    var json_data = JSON.parse(response);
                    var selectOptions = [];
                    $.each(json_data, function(index, data){
                        selectOptions.push({
                            text: data.t_atc,
                            value: data.t_id,
                            code: data.t_code
                        });
                    });
                    tax3_select.clear();
                    tax3_select.clearOptions();
                    tax3_select.cacheRender = {};
                    tax3_select.load(function(callback){
                        callback(selectOptions);
                    });
                });

                var restriction = Object.create(v_restriction);
                restriction.required();
                restriction.no_space();
                restriction.format();
                restriction.select_required();
                restriction.tin();
                popover.find('button.v-submit').unbind('click');
                popover.find('button.v-submit').click(function(){
                    var _this = $(this);
                    var validation = Object.create(v_validation);
                    var required_input = validation.required_input(popover);
                    var format_input = validation.format_input(popover);
                    var required_select = validation.required_select(popover);
                    if(!required_input && !format_input && !required_select){
                		$.ajax({
                			type: 'POST',
                			url: _this.closest('form').attr('action'),
                    		data: _this.closest('form').serialize(),
                    		success: function(res){
                    			_this.removeAttr('disabled');
                				_this.html("Ok");
                				$scope.$apply(function(){
                					$scope.selected_bp = {};
									$scope.business_partner_array = [];
									$http.get(window_location+'/journals/collections/transaction/bp/get').then(function success(response){
										var t_index = 0;
										$.each(response.data, function(i, data){
											$scope.business_partner_array.push(data);
											if(parseFloat(data.co_bp_id) === parseFloat(JSON.parse(res))){
												t_index = i;
											} 
										});
										$scope.selected_bp.bp = $scope.business_partner_array[t_index];
									}, function error(response){});
									$('#bp-modal').modal('hide');
                        		});
                    		},
                    		error: function(res){
                    			console.log(res);
                    		}
                		});
                        _this.attr('disabled', true);
                        _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
                    }
                });

                $('#bp-modal').modal({
					backdrop: 'static',
					keyboard: false,
					show: true
				});
			});
			
			$('body').on('click', '#add-vat-row', function(){
	            var popover = $(this).closest('.modal');
	            var vat_table = popover.find('.add-vat-row-plate');
	            var row = "<tr class='vat'>"+
	                        "<td style='width: 150px; text-align: right; padding-right: 20px;' title='Value Added Tax'></td>"+
	                        "<td>"+
	                            "<select id='add-tax-1-1' name='add-tax-1[]' placeholder='Select...'></select>"+
	                        "</td>"+
	                        "<td style='width: 50px;'>"+
	                            "<button class='btn btn-xs btn-default remove-vat-row' title='remove row' type='button' style='background-color: transparent; margin-top: 10px; text-align: left;'><i class='fa fa-minus'></i></button>"+
	                        "</td>"+
	                    "</tr>";
	            vat_table.append(row);
	            var select = vat_table.find('select:last-child');
	            var tax1 = select.selectize({
	                        create: false,
	                        sortField: {
	                            field: 'text',
	                            sort: 'asc'
	                        }
	                    });
	            var tax1_select = tax1[0].selectize;
	            tax1_select.clear();
	            tax1_select.clearOptions();
	            $.get(window_location+'/company_settings/business_partners/get_tax_1', function(response){
	                var json_data = JSON.parse(response);
	                var selectOptions = [];
	                $.each(json_data, function(index, data){
	                    selectOptions.push({
	                        text: data.t_name,
	                        value: data.t_id,
	                        code: data.t_code
	                    });
	                });
	                tax1_select.clear();
	                tax1_select.clearOptions();
	                tax1_select.cacheRender = {};
	                tax1_select.load(function(callback){
	                    callback(selectOptions);
	                });
	            });     
	        });
			$('body').on('click', '#add-ewt-row', function(){
	            var popover = $(this).closest('.modal');
	            var ewt_table = popover.find('.add-ewt-row-plate');
	            var row = "<tr>"+
	                        "<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Expanded Withholding Tax'></td>"+
	                        "<td style='padding-top: 5px;'>"+
	                            "<select id='add-tax-1-1' name='add-tax-2[]' placeholder='Select...'></select>"+
	                        "</td>"+
	                        "<td style='width: 50px;'>"+
	                            "<button class='btn btn-xs btn-default remove-ewt-row' title='remove row' type='button' style='background-color: transparent; margin-top: 10px; text-align: left;'><i class='fa fa-minus'></i></button>"+
	                        "</td>"+
	                    "</tr>";
	            ewt_table.append(row);
	            var select = ewt_table.find('select:last-child');
	            var tax2 = select.selectize({
	                        create: false,
	                        sortField: {
	                            field: 'text',
	                            sort: 'asc'
	                        }
	                    });
	            var tax2_select = tax2[0].selectize;
	            tax2_select.clear();
	            tax2_select.clearOptions();
	            $.get(window_location+'/company_settings/business_partners/get_tax_2', function(response){
	                var json_data = JSON.parse(response);
	                var selectOptions = [];
	                $.each(json_data, function(index, data){
	                    selectOptions.push({
	                        text: data.t_atc,
	                        value: data.t_id,
	                        code: data.t_code
	                    });
	                });
	                tax2_select.clear();
	                tax2_select.clearOptions();
	                tax2_select.cacheRender = {};
	                tax2_select.load(function(callback){
	                    callback(selectOptions);
	                });
	            });     
	        });
	        $('body').on('click', '#add-fwt-row', function(){
	            var popover = $(this).closest('.modal');
	            var fwt_table = popover.find('.add-fwt-row-plate');
	            var row = "<tr>"+
	                        "<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Final Withholding Tax'></td>"+
	                        "<td style='padding-top: 5px;'>"+
	                            "<select id='add-tax-1-1' name='add-tax-3[]' placeholder='Select...'></select>"+
	                        "</td>"+
	                        "<td style='width: 50px;'>"+
	                            "<button class='btn btn-xs btn-default remove-fwt-row' title='remove row' type='button' style='background-color: transparent; margin-top: 10px; text-align: left;'><i class='fa fa-minus'></i></button>"+
	                        "</td>"+
	                    "</tr>";
	            fwt_table.append(row);
	            var select = fwt_table.find('select:last-child');
	            var tax3 = select.selectize({
	                        create: false,
	                        sortField: {
	                            field: 'text',
	                            sort: 'asc'
	                        }
	                    });
	            var tax3_select = tax3[0].selectize;
	            tax3_select.clear();
	            tax3_select.clearOptions();
	            $.get(window_location+'/company_settings/business_partners/get_tax_3', function(response){
	                var json_data = JSON.parse(response);
	                var selectOptions = [];
	                $.each(json_data, function(index, data){
	                    selectOptions.push({
	                        text: data.t_atc,
	                        value: data.t_id,
	                        code: data.t_code
	                    });
	                });
	                tax3_select.clear();
	                tax3_select.clearOptions();
	                tax3_select.cacheRender = {};
	                tax3_select.load(function(callback){
	                    callback(selectOptions);
	                });
	            });     
	        });
	        $('body').on('click', '.remove-vat-row', function(){
	            $(this).closest('tr').remove();
	        });
	        $('body').on('click', '.remove-ewt-row', function(){
	            $(this).closest('tr').remove();
	        });
	        $('body').on('click', '.remove-fwt-row', function(){
	            $(this).closest('tr').remove();
	        });
		//BANKS
			$scope.selected_bank = {};
			$scope.banks_array = [];
			$http.get(window_location+'/journals/collections/transaction/bank/get').then(function success(response){
				$.each(response.data, function(index, data){
					$scope.banks_array.push(data);
				});
			}, function error(response){});

			$('body').on('click', '.add-bank', function(){
				var popover = $('#bank-acc-modal');
                var restriction = Object.create(v_restriction);
                restriction.required();
                restriction.no_space();
                restriction.format();
                restriction.number();
                popover.find('button.v-submit').unbind('click');
                popover.find('button.v-submit').click(function(){
                    var _this = $(this);
                    var validation = Object.create(v_validation);
                    var required_input = validation.required_input(popover);
                    var format_input = validation.format_input(popover);
                    if(!required_input && !format_input){
                    	$.ajax({
                    		type: 'POST',
                    		url: _this.closest('form').attr('action'),
                    		data: _this.closest('form').serialize(),
                    		success: function(res){
                    			_this.removeAttr('disabled');
                        		_this.html("Ok");
                        		$scope.$apply(function(){
                        			$scope.selected_bank = {};
									$scope.banks_array = [];
									$http.get(window_location+'/journals/collections/transaction/bank/get').then(function success(response){
										var t_index = 0;
										$.each(response.data, function(i, data){
											$scope.banks_array.push(data);
											if(parseFloat(data.co_b_id) === parseFloat(JSON.parse(res))){
												t_index = i;
											} 
										});
										$scope.selected_bank.bank = $scope.banks_array[t_index];
									}, function error(response){});
									$('#bank-acc-modal').modal('hide');
                        		});
                    		},
                    		error: function(res){
                    			console.log(res);
                    		}
                    	});
                        _this.attr('disabled', true);
                        _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
                    }
                });
                $('#bank-acc-modal').modal({
					backdrop: 'static',
					keyboard: false,
					show: true
				});
			});

		//MODE OF PAYMENT
			$scope.selected_mop = {};
			$scope.mode_of_payment = [];
			$scope.mode_of_payment.push({co_mop_id: '', co_mop_code: '', co_mop_name: '', co_mop_shortname: '', co_top_id: '', cb_id: ''});
			$http.get(window_location+'/journals/collections/transaction/mop/get').then(function success(response){
				$.each(response.data, function(index, data){
					$scope.mode_of_payment.push(data);
				});
			}, function error(response){});
			
			$('body').on('click', '.add-mop', function(){
				var popover = $('#mop-modal');
                var type = popover.find('select[name=add-type]').selectize({
                    create: false,
                    sortField: {
                        field: 'text',
                        sort: 'asc'
                    },
                    dropdownParent: null
                });
                var type_selectize = type[0].selectize;
                type_selectize.clear();
                type_selectize.clearOptions();
                $.get(window_location+'/company_settings/modes_of_payment/get_types_of_payment', function(response){
                    var json_data = JSON.parse(response);
                    var selectOptions = [];
                    $.each(json_data, function(index, data){
                        selectOptions.push({
                            text: data.top_type,
                            value: data.top_id,
                            code: data.top_code
                        });
                    });
                    type_selectize.clear();
                    type_selectize.clearOptions();
                    type_selectize.renderCache = {};
                    type_selectize.load(function(callback){
                        callback(selectOptions);
                    });
                });
                var restriction = Object.create(v_restriction);
                restriction.required();
                restriction.no_space();
                restriction.select_required();
                restriction.number();
                popover.find('button.v-submit').unbind('click');
                popover.find('button.v-submit').click(function(){
                    var _this = $(this);
                    var validation = Object.create(v_validation);
                    var required_input = validation.required_input(popover);
                    var required_select = validation.required_select(popover);
                    if(!required_input && !required_select){
                    	$.ajax({
                    		type: 'POST',
                    		url: _this.closest('form').attr('action'),
                    		data: _this.closest('form').serialize(),
                    		success: function(res){
                    			_this.removeAttr('disabled');
                        		_this.html("Ok");
                        		$scope.$apply(function(){
                        			$scope.selected_mop = {};
									$scope.mode_of_payment = [];
									$scope.mode_of_payment.push({co_mop_id: '', co_mop_code: '', co_mop_name: '', co_mop_shortname: '', co_top_id: '', cb_id: ''});
									$http.get(window_location+'/journals/collections/transaction/mop/get').then(function success(response){
										var t_index = 0;
										$.each(response.data, function(i, data){
											$scope.mode_of_payment.push(data);
											if(parseFloat(data.co_mop_id) === parseFloat(JSON.parse(res))){
												t_index = i + 1;
											}
										});
										$scope.selected_mop.mop = $scope.mode_of_payment[t_index];
									}, function error(response){});
									$('#mop-modal').modal('hide');
                        		});
                    		},
                    		error: function(res){
                    			console.log(res);
                    		}
                    	});
                        _this.attr('disabled', true);
                        _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
                    }
                });
                $('#mop-modal').modal({
					backdrop: 'static',
					keyboard: false,
					show: true
				});
			});
			
		//Document Details
			$scope.product_services = [];
		
		}])
		.filter('formatDate', function(){
			return function(date){
				if(date !== undefined){
					return date.toString('MMM d, yyyy');
				}
				return '';
			}
		})
		.filter('computeDueDate', function(){
			return function(terms, scope){
				if(terms !== undefined && scope.document_date !== undefined && terms.length !== 0){
					var dueDate = new Date(scope.document_date);
					dueDate.setDate(dueDate.getDate() + parseFloat(terms));
					return dueDate.toString('MMM d, yyyy');
				}
				return '';
			}
		})