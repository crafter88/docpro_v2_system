angular.module('journals')
		.directive('addProductServicesBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-product-services-btn-function class='btn btn-raised btn-info btn-xs' type='button'>add row</button>"
			}
		})
		.directive('addProductServicesBtnFunction', function($compile){
			return{
				restrict: 'A',
				controller: function($scope, $http){
					$scope.product_services_array = [];
					$scope.product_services_array.push({code: '', qty: '', unit: '', unit_price: '', gross_amount: '', delete_btn: false});
					$scope.product_services_delete_row = function(event, index){
						$scope.product_services_array.splice(index, 1);
					}
					
					//Product Services Code List
					$scope.product_services_code = [];
					$scope.product_services_code.push({id: '', code: '', name: '', shortname: '', description: '', pcc_id: '', de_id: '', cb_id: '', type: ''});
					$http.get(window_location+'/journals/disbursements/transaction/product_service/get').then(function success(response){
						$.each(response.data, function(index, data){
							$scope.product_services_code.push({id: data.id, code: data.code, name: data.name, shortname: data.shortname, description: data.description, pcc_id: data.pcc_id, de_id: data.de_id, cb_id: data.cb_id, type: data.type, d_code: data.code+' ('+data.type+')'});
						});
					}, function error(response){});

					$scope.prod_serv_total_qty = 0;
					$scope.prod_serv_total_unit = 0;
					$scope.prod_serv_total_unit_price = 0;
					$scope.prod_serv_total_gross = 0;
					$scope.$watch('product_services_array', function (newVal, oldVal){
						$scope.prod_serv_total_qty = $scope.product_services_array.reduce((a, b) => parseFloat(a) + parseFloat(b['qty'] ? b['qty'] : 0), 0);
						$scope.prod_serv_total_unit = $scope.product_services_array.reduce((a, b) => parseFloat(a) + parseFloat(b['unit'] ? b['unit'] : 0), 0);
						$scope.prod_serv_total_unit_price = $scope.product_services_array.reduce((a, b) => parseFloat(a) + parseFloat(b['unit_price'] ? b['unit_price'] : 0), 0);
						$scope.prod_serv_total_gross = $scope.product_services_array.reduce((a, b) => parseFloat(a) + parseFloat(b['gross_amount'] ? b['gross_amount'] : 0), 0);
					}, true);

					$scope.$watch('product_services_array', function (newVal, oldVal){

						$scope.prod_serv_total_gross = 0;
						$.each($scope.product_services_array, function(index, value){
							if($scope.product_services_array[index].code.id == ""){
								$scope.product_services_array[index].qty = '';
								$scope.product_services_array[index].unit = '';
								$scope.product_services_array[index].unit_price = '';
								$scope.product_services_array[index].gross_amount = '';
							}
							if($scope.product_services_array[index].code.type == 'product'){
								$scope.product_services_array[index].gross_amount = parseFloat($scope.product_services_array[index].qty) * parseFloat($scope.product_services_array[index].unit_price);
							}
						});
						$scope.prod_serv_total_gross = $scope.product_services_array.reduce((a, b) => parseFloat(a) + parseFloat(b['gross_amount'] ? b['gross_amount'] : 0), 0);
					}, true);

					$('body').on('click', '.add-prod-serv', function(){
						let index = $(this).attr('index');
						var popover = $('#prod-serv-modal');
						var type = popover.find('input[name*=type]').val();
						var s_type = popover.find('select[name=add-type]').selectize({
	                        create: false,
	                        sortField: {
	                            field: 'text',
	                            sort: 'asc'
	                        },
	                        dropdownParent: null
	                    });
	                    var type_selectize = s_type[0].selectize;
	                    type_selectize.clear();
	                    type_selectize.clearOptions();
	                    var selectOptions = [];
                        selectOptions.push({text: 'product', value: 'product'});
                        selectOptions.push({text: 'service', value: 'service'});
                        type_selectize.clear();
                        type_selectize.clearOptions();
                        type_selectize.renderCache = {};
                        type_selectize.load(function(callback){
                            callback(selectOptions);
                        });

	                    var dept = popover.find('select[name=add-department]').selectize({
	                        create: false,
	                        sortField: {
	                            field: 'text',
	                            sort: 'asc'
	                        },
	                        dropdownParent: null
	                    });
	                    var dept_selectize = dept[0].selectize;
	                    dept_selectize.clear();
	                    dept_selectize.clearOptions();
	                    $.get(window_location+'/company_settings/products/get_departments', function(response){
	                        var json_data = JSON.parse(response);
	                        var selectOptions = [];
	                        $.each(json_data, function(index, data){
	                            selectOptions.push({
	                                text: data.co_de_name,
	                                value: data.co_de_id,
	                                code: data.co_de_code
	                            });
	                        });
	                        dept_selectize.clear();
	                        dept_selectize.clearOptions();
	                        dept_selectize.renderCache = {};
	                        dept_selectize.load(function(callback){
	                            callback(selectOptions);
	                        });
	                    });
	                    var pcc = popover.find('select[name=add-pcc]').selectize({
	                        create: false,
	                        sortField: {
	                            field: 'text',
	                            sort: 'asc'
	                        },
	                        dropdownParent: null
	                    });
	                    var pcc_selectize = pcc[0].selectize;
	                    pcc_selectize.clear();
	                    pcc_selectize.clearOptions();
	                    $.get(window_location+'/company_settings/products/get_profit_cost_center', function(response){
	                        var json_data = JSON.parse(response);
	                        var selectOptions = [];
	                        $.each(json_data, function(index, data){
	                            selectOptions.push({
	                                text: data.co_pcc_name,
	                                value: data.co_pcc_id,
	                                code: data.co_pcc_code
	                            });
	                        });
	                        pcc_selectize.clear();
	                        pcc_selectize.clearOptions();
	                        pcc_selectize.renderCache = {};
	                        pcc_selectize.load(function(callback){
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
	                            			$scope.product_services_code = [];
											$scope.product_services_code.push({id: '', code: '', name: '', shortname: '', description: '', pcc_id: '', de_id: '', cb_id: '', type: ''});
											$http.get(window_location+'/journals/disbursements/transaction/product_service/get').then(function success(response){
												var t_index = 0;
												$.each(response.data, function(i, data){
													$scope.product_services_code.push({id: data.id, code: data.code, name: data.name, shortname: data.shortname, description: data.description, pcc_id: data.pcc_id, de_id: data.de_id, cb_id: data.cb_id, type: data.type, d_code: data.code+' ('+data.type+')'});
													if(parseFloat(data.id) === parseFloat(JSON.parse(res).id) && data.type === JSON.parse(res).type){
														t_index = i+1;
													}
												});
												$scope.product_services_array[index].code = $scope.product_services_code[t_index];
											}, function error(response){});

	                            		});
	                            		$('#prod-serv-modal').modal('hide');
	                            		
	                        		},
	                        		error: function(res){
	                        			console.log(res);
	                        		}
	                        	});
	                            _this.attr('disabled', true);
	                            _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
	                        }
	                    });
						$('#prod-serv-modal').modal({
							backdrop: 'static',
							keyboard: false,
							show: true
						});
					});
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						scope.$apply(function(){
							scope.product_services_array.push({code: '', qty: '', unit: '', unit_price: '', gross_amount: '', delete_btn: true});
						});
					})
				}
			}
		})
		.directive('addVatBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-vat-btn-function class='btn btn-raised btn-info btn-xs' type='button'>add row</button>"
			}
		})
		.directive('addVatBtnFunction', function($compile){
			return{
				restrict: 'E,A',
				controller: function($scope,$http){
					$scope.vat_array = [];
					$scope.vat_array.push({code: '', nature: '', rate: '', base: '', vat: '', net_vat: '', gross_amount: '', delete_btn: false});
					$scope.vat_delete_row = function(event, index){
						$scope.vat_array.splice(index, 1);
					}
					
					//VAT Code List
					$scope.vat_code = [];
					$scope.vat_code.push({co_t_id: '', t_id: '', cb_id: '', flag: '', t_code: '', t_name: '', t_shortname: '', t_rate: '', t_base: '', tt_id: '', t_validity_date: '', tt_code: '', tt_name: '', tt_shortname: ''});
					$http.get(window_location+'/journals/disbursements/transaction/vat/get', {params: {id: $scope.selected_bp_id}}).then(function success(response){
						$.each(response.data, function(index, data){
							$scope.vat_code.push(data);
						});
					}, function error(response){});

					$scope.$watch('vat_array', function(newVal, oldVal){
						$scope.vat_total_vat = $scope.vat_array.reduce((a, b) => parseFloat(a) + parseFloat(b['vat'] ? b['vat'] : 0), 0);
						$scope.vat_total_net_vat = $scope.vat_array.reduce((a, b) => parseFloat(a) + parseFloat(b['net_vat'] ? b['net_vat'] : 0), 0);
						$scope.vat_total_gross = $scope.vat_array.reduce((a, b) => parseFloat(a) + parseFloat(b['gross_amount'] ? b['gross_amount'] : 0), 0);
						$scope.vat_total_rate = $scope.vat_array.reduce((a, b) => parseFloat(a) + parseFloat((b['code']['t_rate']) ? b['code']['t_rate'] : 0), 0);
						$scope.vat_total_base = $scope.vat_array.reduce((a, b) => parseFloat(a) + parseFloat((b['code']['t_base']) ? b['code']['t_base'] : 0), 0);
					}, true);

					$scope.$watch('vat_array', function(newVal, oldVal){
						$.each($scope.vat_array, function(index, value){
							if($scope.vat_array[index].code.t_id == ""){
								$scope.vat_array[index].gross_amount = '';
								$scope.vat_array[index].nature = '';
								$scope.vat_array[index].net_vat = '';
								$scope.vat_array[index].rate = '';
								$scope.vat_array[index].vat = '';
							}
							$scope.vat_array[index]['net_vat'] = parseFloat($scope.vat_array[index]['gross_amount']) / parseFloat(1.12);
							$scope.vat_array[index]['vat'] = parseFloat($scope.vat_array[index]['net_vat']) * (parseFloat($scope.vat_array[index]['code']['t_rate']) / 100);
						});
					}, true);

					$('body').on('click', '.add-vat', function(){
						let index = $(this).attr('index');
						var popover = $('#vat-modal');
						$scope.$apply(function(){
							popover.find('input[name*=add-name]').val($scope.selected_bp.bp ? $scope.selected_bp.bp.bp_name : '');
							popover.find('input[name*=co_bp_id]').val($scope.selected_bp.bp ? $scope.selected_bp.bp.co_bp_id : '');
						});
	                    var tax1 = popover.find('select[name*=t_id]').selectize({
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
	                            			$scope.vat_code = [];
											$scope.vat_code.push({co_t_id: '', t_id: '', cb_id: '', flag: '', t_code: '', t_name: '', t_shortname: '', t_rate: '', t_base: '', tt_id: '', t_validity_date: '', tt_code: '', tt_name: '', tt_shortname: ''});
											$http.get(window_location+'/journals/sales/transaction/vat/get', {params: {id: $scope.selected_bp_id}}).then(function success(response){
												var t_index = 0;
												$.each(response.data, function(i, data){
													$scope.vat_code.push(data);
													if(parseFloat(data.t_id) === parseFloat(JSON.parse(res))){
														t_index = i + 1;
													}
												});
												$scope.vat_array[index].code = $scope.vat_code[t_index];
											}, function error(response){});
	                            		});
	                            		$('#vat-modal').modal('hide');
	                            	},
	                            	error: function(res){
	                            		console.log(res);
	                            	}
	                            });
	                            _this.attr('disabled', true);
	                            _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
	                        }
	                    });
						$('#vat-modal').modal({
							backdrop: 'static',
							keyboard: false,
							show: true
						});
					});

				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						scope.$apply(function(){
							scope.vat_array.push({code: '', nature: '', rate: '', vat: '', net_vat: '', gross_amount: '', delete_btn: true});
						});
					})
				}
			}
		})
		.directive('addDiscountsBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-discounts-btn-function class='btn btn-raised btn-info btn-xs' type='button'>add row</button>"
			}
		})
		.directive('addDiscountsBtnFunction', function($compile){
			return{
				restrict: 'E,A',
				controller: function($scope, $http){
					$scope.discount_array = [];
					$scope.discount_array.push({code: '', rate: '', deduction: '', nature: '', sc_id: '', delete_btn: false});
					$scope.discount_delete_row = function(event, index){
						$scope.discount_array.splice(index, 1);
					}
					
					//Discount Code List
					$scope.discount_code = [];
					$scope.discount_code.push({co_d_id: '', co_d_code: '', co_d_name: '', co_d_shortname: '', co_d_rate: '', cb_id: ''});
					$http.get(window_location+'/journals/disbursements/transaction/discount/get').then(function success(response){
						$.each(response.data, function(index, data){
							$scope.discount_code.push(data);
						});
					}, function error(response){});

					$scope.discount_total_rate = 0;
					$scope.discount_total_deduction = 0;
					$scope.$watch('discount_array', function(newVal, oldVal){
						$scope.discount_total_deduction = $scope.discount_array.reduce((a, b) => a + parseFloat(b['deduction'] ? b['deduction'] : 0), 0);
						$scope.discount_total_rate = $scope.discount_array.reduce((a, b) => a + parseFloat(b['code']['co_d_rate'] ? b['code']['co_d_rate'] : 0), 0);
					}, true);

					$scope.$watch('discount_array', function(newVal, oldVal){
						$.each($scope.discount_array, function(index, value){
							if($scope.discount_array[index].code.co_d_id == ""){
								$scope.discount_array[index].rate = '';
								$scope.discount_array[index].deduction = '';
								$scope.discount_array[index].nature = '';
								$scope.discount_array[index].sc_id = '';
							}
						});
					}, true);

					$('body').on('click', '.add-discount', function(){
						let index = $(this).attr('index');
						var popover = $('#discount-modal');
	                    var restriction = Object.create(v_restriction);
	                    restriction.required();
	                    restriction.no_space();
	                    restriction.decimal();
	                    restriction.number();
	                    popover.find('button.v-submit').unbind('click');
	                    popover.find('button.v-submit').click(function(){
	                        var _this = $(this);
	                        var validation = Object.create(v_validation);
	                        var required_input = validation.required_input(popover);
	                        var decimal_input = validation.decimal_input(popover);
	                        if(!required_input && !decimal_input){
	                        	$.ajax({
	                        		type: 'POST',
	                        		url: _this.closest('form').attr('action'),
	                        		data: _this.closest('form').serialize(),
	                        		success: function(res){
	                        			_this.removeAttr('disabled');
	                            		_this.html("Ok");
	                            		$scope.$apply(function(){
	                            			$scope.discount_code = [];
											$scope.discount_code.push({co_d_id: '', co_d_code: '', co_d_name: '', co_d_shortname: '', co_d_rate: '', cb_id: ''});
											$http.get(window_location+'/journals/sales/transaction/discount/get').then(function success(response){
												var t_index = 0;
												$.each(response.data, function(i, data){
													$scope.discount_code.push(data);
													if(parseFloat(data.co_d_id) === JSON.parse(res)){
														t_index = i + 1;
													}
												});
												$scope.discount_array[index].code = $scope.discount_code[t_index];
											}, function error(response){});
	                            		});
	                            		$('#discount-modal').modal('hide');
	                        		},
	                        		error: function(res){
	                        			console.log(res);
	                        		}
	                        	});
	                            _this.attr('disabled', true);
	                            _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
	                        }
	                    });
						$('#discount-modal').modal({
							backdrop: 'static',
							keyboard: false,
							show: true
						});
					});
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						scope.$apply(function(){
							scope.discount_array.push({code: '', rate: '', deduction: '', delete_btn: true});
						});
					})
				}
			}
		})
		.directive('addExpandedTaxBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-expanded-tax-btn-function class='btn btn-raised btn-info btn-xs' type='button' disabled>add row</button>"
			}
		})
		.directive('addExpandedTaxBtnFunction', ['$compile', function($compile){
			return{
				retstrict: 'A',
				controller: function($scope, $http){
					$scope.ewt_array = [];
					$scope.ewt_array.push({code: '', rate: '', base: '', withheld: '', nature: '', delete_btn: false});
					$scope.ewt_delete_row = function(event, index){
						$scope.ewt_array.splice(index, 1);
					}
					
					//EWT Code List
					$scope.ewt_code = [];
					$scope.ewt_code.push({co_t_id: '', t_id: '', cb_id: '', flag: '', t_code: '', t_name: '', t_shortname: '', t_rate: '', t_base: '', tt_id: '', t_validity_date: '', tt_code: '', tt_name: '', tt_shortname: ''});
					$http.get(window_location+'/journals/disbursements/transaction/ewt/get', {params: {id: $scope.selected_bp_id}}).then(function success(response){
						$.each(response.data, function(index, data){
							$scope.ewt_code.push(data);
						});
					}, function error(response){});

					$scope.ewt_total_rate = 0;
					$scope.ewt_total_base = 0;
					$scope.ewt_total_withheld = 0;
					$scope.$watch('ewt_array', function(newVal, oldVal){
						$scope.ewt_total_withheld = $scope.ewt_array.reduce((a, b) => a + parseFloat(b['withheld'] ? b['withheld'] : 0), 0);
						$scope.ewt_total_rate = $scope.ewt_array.reduce((a, b) => a + parseFloat(b['code']['t_rate'] ? b['code']['t_rate'] : 0), 0);
						$scope.ewt_total_base = $scope.ewt_array.reduce((a, b) => a + parseFloat(b['code']['t_base'] ? b['code']['t_rate'] : 0), 0);

					}, true);

					$scope.$watch('ewt_array', function(newVal, oldVal){
						$.each($scope.ewt_array, function(index, value){
							if($scope.ewt_array[index].code.t_id == ""){
								$scope.ewt_array[index].rate = '';
								$scope.ewt_array[index].base = '';
								$scope.ewt_array[index].withheld = '';
								$scope.ewt_array[index].nature = '';
							}
						});
					}, true);

					$('body').on('click', '.add-ewt', function(){
						let index = $(this).attr('index');
						var popover = $('#ewt-modal');
						$scope.$apply(function(){
							popover.find('input[name*=add-name]').val($scope.selected_bp.bp ? $scope.selected_bp.bp.bp_name : '');
							popover.find('input[name*=co_bp_id]').val($scope.selected_bp.bp ? $scope.selected_bp.bp.co_bp_id : '');
						});
	                    var tax2 = popover.find('select[name*=t_id]').selectize({
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
	                            			$scope.ewt_code = [];
											$scope.ewt_code.push({co_t_id: '', t_id: '', cb_id: '', flag: '', t_code: '', t_name: '', t_shortname: '', t_rate: '', t_base: '', tt_id: '', t_validity_date: '', tt_code: '', tt_name: '', tt_shortname: ''});
											$http.get(window_location+'/journals/sales/transaction/ewt/get', {params: {id: $scope.selected_bp_id}}).then(function success(response){
												var t_index = 0;
												$.each(response.data, function(i, data){
													$scope.ewt_code.push(data);
													if(parseFloat(data.t_id) === parseFloat(JSON.parse(res))){
														t_index = i + 1;
													}
												});
												$scope.ewt_array[index].code = $scope.ewt_code[t_index];
											}, function error(response){});
	                            		});
	                            		$('#ewt-modal').modal('hide');
	                            	},
	                            	error: function(res){
	                            		console.log(res);
	                            	}
	                            });
	                            _this.attr('disabled', true);
	                            _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
	                        }
	                    });
						$('#ewt-modal').modal({
							backdrop: 'static',
							keyboard: false,
							show: true
						});
					});
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						scope.$apply(function(){
							scope.ewt_array.push({code: '', rate: '', base: '', withheld: '', delete_btn: true});
						});
					})
				}
			}
		}])
		.directive('addFinalWithholdingTaxBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-final-withholding-tax-btn-function class='btn btn-raised btn-info btn-xs' type='button' disabled>add row</button>"
			}
		})
		.directive('addFinalWithholdingTaxBtnFunction', function($compile){
			return{
				restrict: 'A',
				controller: function($scope, $http){
					$scope.fwt_array = [];
					$scope.fwt_array.push({code: '', rate: '', base: '', withheld: '', nature: '', delete_btn: false});
					$scope.fwt_delete_row = function(event, index){
						$scope.fwt_array.splice(index, 1);
					}
					
					//EWT Code List
					$scope.fwt_code = [];
					$scope.fwt_code.push({co_t_id: '', t_id: '', cb_id: '', flag: '', t_code: '', t_name: '', t_shortname: '', t_rate: '', t_base: '', tt_id: '', t_validity_date: '', tt_code: '', tt_name: '', tt_shortname: ''});
					$http.get(window_location+'/journals/disbursements/transaction/fwt/get', {params: {id: $scope.selected_bp_id}}).then(function success(response){
						$.each(response.data, function(index, data){
							$scope.fwt_code.push(data);
						});
					}, function error(response){});

					$scope.fwt_total_rate = 0;
					$scope.fwt_total_base = 0;
					$scope.fwt_total_withheld = 0;
					$scope.$watch('fwt_array', function(newVal, oldVal){
						$scope.fwt_total_withheld = $scope.fwt_array.reduce((a, b) => a + parseFloat(b['withheld'] ? b['withheld'] : 0), 0);
						$scope.fwt_total_rate = $scope.fwt_array.reduce((a, b) => a + parseFloat(b['code']['t_rate'] ? b['code']['t_rate'] : 0), 0);
						$scope.fwt_total_base = $scope.fwt_array.reduce((a, b) => a + parseFloat(b['code']['t_base'] ? b['code']['t_base'] : 0), 0);
					}, true);

					$scope.$watch('fwt_array', function(newVal, oldVal){
						$.each($scope.fwt_array, function(index, value){
							if($scope.fwt_array[index].code.t_id == ""){
								$scope.fwt_array[index].rate = '';
								$scope.fwt_array[index].base = '';
								$scope.fwt_array[index].withheld = '';
								$scope.fwt_array[index].nature = '';
							}
						});
					}, true);

					$('body').on('click', '.add-fwt', function(){
						let index = $(this).attr('index');
						var popover = $('#fwt-modal');
						$scope.$apply(function(){
							popover.find('input[name*=add-name]').val($scope.selected_bp.bp ? $scope.selected_bp.bp.bp_name : '');
							popover.find('input[name*=co_bp_id]').val($scope.selected_bp.bp ? $scope.selected_bp.bp.co_bp_id : '');
						});
	                    var tax3 = popover.find('select[name*=t_id]').selectize({
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
	                            			$scope.fwt_code = [];
											$scope.fwt_code.push({co_t_id: '', t_id: '', cb_id: '', flag: '', t_code: '', t_name: '', t_shortname: '', t_rate: '', t_base: '', tt_id: '', t_validity_date: '', tt_code: '', tt_name: '', tt_shortname: ''});
											$http.get(window_location+'/journals/sales/transaction/fwt/get', {params: {id: $scope.selected_bp_id}}).then(function success(response){
												var t_index = 0;
												$.each(response.data, function(i, data){
													$scope.fwt_code.push(data);
													if(parseFloat(data.t_id) === parseFloat(JSON.parse(res))){
														t_index = i + 1;
													}
												});
												$scope.fwt_array[index].code = $scope.fwt_code[t_index];
											}, function error(response){});
	                            		});
	                            		$('#fwt-modal').modal('hide');
	                            	},
	                            	error: function(res){
	                            		console.log(res);
	                            	}
	                            });
	                            _this.attr('disabled', true);
	                            _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
	                        }
	                    });
						$('#fwt-modal').modal({
							backdrop: 'static',
							keyboard: false,
							show: true
						});
					});

				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						scope.$apply(function(){
							scope.fwt_array.push({code: '', rate: '', base: '', withheld: '', delete_btn: true});
						});
					})
				}
			}
		})
		.directive('addDocumentReferenceBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-document-reference-btn-function class='btn btn-raised btn-info btn-xs' type='button'>add row</button>"
			}
		})
		.directive('addDocumentReferenceBtnFunction', function($compile){
			return{
				restrict: 'A',
				controller: function($scope, $http){
					$scope.document_array = [];
					$scope.document_array.push({code: '', delete_btn: false});
					$scope.document_delete_row = function(event, index){
						$scope.document_array.splice(index, 1);
					}
					
					//EWT Code List
					$scope.document_code = [];
					$scope.document_code.push({co_doc_id: '', co_doc_code: '', co_doc_seq: '', co_doc_class: '', co_doc_name: '', co_doc_shortname: '', co_j_id: '', cb_id: '', co_j_code: '', co_j_name: '', co_j_shortname: ''});
					$http.get(window_location+'/journals/disbursements/transaction/doc_ref/get').then(function success(response){
						$.each(response.data, function(index, data){
							$scope.document_code.push(data);
						});
					}, function error(response){});

				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						scope.$apply(function(){
							scope.document_array.push({code: '', delete_btn: true});
						});
					})
				}
			}
		})
		.directive('addBankDetailsBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-bank-details-btn-function class='btn btn-raised btn-info btn-xs' type='button'>add row</button>"
			}
		})
		.directive('addBankDetailsBtnFunction', function($compile){
			return{
				restrict: 'A',
				controller: function($scope, $http){
					$scope.bank_array = [];
					$scope.bank_array.push({code: '', name: '', account_number: '', document: '', amount: '', date: '', delete_btn: false});
					
					$scope.bank_delete_row = function(element, index){
						$scope.bank_array.splice(index, 1);
					}
					
					$scope.account_code = [];
					$scope.account_code.push({co_b_id: '', co_b_no: '', co_b_class: '', b_id: '', cb_id: '', co_b_code: '', b_code: '', b_name: '', b_shortname: ''});
					$http.get(window_location+'/journals/disbursements/transaction/bank/get').then(function success(response){
						$.each(response.data, function(index, data){
							$scope.account_code.push(data);
						});
					}, function error(response){});

					$scope.banks_total_amount = 0;
					$scope.$watch('bank_array', function(newVal, oldVal){
						$scope.banks_total_amount = $scope.bank_array.reduce((a, b) => a + parseFloat(b['amount'] ? b['amount'] : 0), 0);
					}, true);

					$scope.$watch('bank_array', function(newVal, oldVal){
						$.each($scope.bank_array, function(index, value){
							if($scope.bank_array[index].code.b_id == ""){
								$scope.bank_array[index].name = '';
								$scope.bank_array[index].account_number = '';
								$scope.bank_array[index].document = '';
								$scope.bank_array[index].amount = '';
								$scope.bank_array[index].date = '';
							}
						});
					}, true);

					$('body').on('click', '.add-bank-details', function(){
						let index = $(this).attr('index');
						var popover = $('#bank-modal');
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
	                            		$scope.account_code = [];
										$scope.account_code.push({co_b_id: '', co_b_no: '', co_b_class: '', b_id: '', cb_id: '', co_b_code: '', b_code: '', b_name: '', b_shortname: ''});
										$http.get(window_location+'/journals/sales/transaction/bank/get').then(function success(response){
											var t_index = 0;
											$.each(response.data, function(i, data){
												$scope.account_code.push(data);
												if(parseFloat(data.co_b_id) === parseFloat(JSON.parse(res))){
													t_index = i + 1;
												} 
											});
											$scope.bank_array[index].code = $scope.account_code[t_index];
										}, function error(response){});
										$('#bank-modal').modal('hide');
	                        		},
	                        		error: function(res){
	                        			console.log(res);
	                        		}
	                        	});
	                            _this.attr('disabled', true);
	                            _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
	                        }
	                    });
	                    $('#bank-modal').modal({
							backdrop: 'static',
							keyboard: false,
							show: true
						});
					});
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						scope.$apply(function(){
							scope.bank_array.push({code: '', name: '', account_number: '', document: '', amount: '', date: '', delete_btn: true});
						});
					})
				}
			}
		})
		.directive('addJournalEntryBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-journal-entry-btn-function class='btn btn-raised btn-info btn-xs' type='button'>add row</button>"
			}
		})
		.directive('addJournalEntryBtnFunction', function($compile){
			return{
				restrict: 'A',
				controller: function($scope, $http){
					$scope.je_array = [];
					$scope.je_array.push({je_number: '', trans_code: '', je_sequence: '', acc_code: '', acc_name: '', debit_credit: '', debit_amount: '', credit_amount: '', pcc_code: '', dept_code_name: '', je_pcc_code: '', je_dept_code: '', delete_btn: false});
					
					$scope.$watch('je_array', function(newVal, oldVal){
						$.each($scope.je_array, function(index, val){
							let dc_val = parseFloat($scope.je_array[index].debit_credit);
							if(dc_val < 0){
								$scope.je_array[index].credit_amount = dc_val;
								$scope.je_array[index].debit_amount = '';
							}else if(dc_val >= 0){
								$scope.je_array[index].credit_amount = '';
								$scope.je_array[index].debit_amount = dc_val;
							}else{
								$scope.je_array[index].credit_amount = '';
								$scope.je_array[index].debit_amount = '';
							}

							if($scope.je_array[0].je_pcc_code){
								$scope.je_array[index].je_pcc_code = $scope.je_array[0].je_pcc_code;
							}else{
								$scope.je_array[0].je_pcc_code = $scope.je_array[index].je_pcc_code;
							}
							if($scope.je_array[0].je_dept_code){
								$scope.je_array[index].je_dept_code = $scope.je_array[0].je_dept_code;
							}else{
								$scope.je_array[0].je_dept_code = $scope.je_array[index].je_dept_code;
							}
						});
					}, true);
					$scope.je_delete_row = function(element, index){
						$scope.je_array.splice(index, 1);
					}

					//Account Code
					$scope.je_account_code = [];
					$scope.je_account_code.push({co_coa_id: '', coa_id: '', coa_code: '', coa_name: ''});
					$http.get(window_location+'/journals/disbursements/transaction/je_account/get').then(function success(response){
						$.each(response.data, function(index, data){
							$scope.je_account_code.push({co_coa_id: data.co_coa_id, coa_id: data.coa_id, coa_code: data.coa_code, coa_name: data.coa_name});
						});
					}, function error(response){});

					//PCC Code
					$scope.je_pcc_code = [];
					$scope.je_pcc_code.push({co_pcc_id: '', co_pcc_seq: '', co_pcc_code: '', co_pcc_name: '', co_pcc_shortname: '', co_de_id: ''});
					$http.get(window_location+'/journals/disbursements/transaction/je_pcc/get').then(function success(response){
						$.each(response.data, function(index, data){
							$scope.je_pcc_code.push({co_pcc_id: data.co_pcc_id, co_pcc_seq: data.co_pcc_seq, co_pcc_code: data.co_pcc_code, co_pcc_name: data.co_pcc_name, co_pcc_shortname: data.co_pcc_shortname, co_de_id: data.co_de_id});
						});
					}, function error(response){});

					//Department Code
					$scope.je_dept_code = [];
					$scope.je_dept_code.push({co_de_id: '', co_de_seq: '', co_de_code: '', co_de_name: '', co_de_shortname: ''});
					$http.get(window_location+'/journals/disbursements/transaction/je_dept/get').then(function success(response){
						$.each(response.data, function(index, data){
							$scope.je_dept_code.push({co_de_id: data.co_de_id, co_de_seq: data.co_de_seq, co_de_code: data.co_de_code, co_de_name: data.co_de_name, co_de_shortname: data.co_de_shortname});
						});
					}, function error(response){});
					
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						scope.$apply(function(){
							scope.je_array.push({je_number: '', trans_code: '', je_sequence: '', acc_code: '', acc_name: '', debit_credit: '', debit_amount: '', credit_amount: '', pcc_code: '', dept_code_name: '', delete_btn: true});
						});
					})
				}
			}
		})
//Document
		.directive('cashCreditBtn', function($compile){
			return{
				restrict: 'E',
				controller: function($scope){
					$scope.set_type_of_payment = function(event){
						var type = event.target.attributes.payment_type.value;
						$scope.payment_type = type;
						$('#payment_term').removeAttr('readonly');
						$('#payment_term').closest('.form-group').removeClass('disabled-form-group');
						if(type === 'Cash'){
							$('#payment_term').attr('readonly', true);
							$('#payment_term').closest('.form-group').addClass('disabled-form-group');
						}
					}
				},
				template: function(){
					return "<button payment_type='Cash' ng-click='set_type_of_payment($event)' class='btn cash-credit' type='button' style='margin-right: 5px; border: 1px solid #CCC;'>Cash</button>"+
							"<button payment_type='Credit' ng-click='set_type_of_payment($event)' class='btn cash-credit' type='button' style='border: 1px solid #CCC;'>Charge</button>";
				}
			}
		})