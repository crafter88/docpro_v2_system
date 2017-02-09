angular.module('myApp')
		.directive('addEmployeeBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-employee-btn-function type='button' class='btn btn-dark btn-sm btn-raised ripple-effect btn-input-add'>Add</button>"
			}
		})
		.directive('addEmployeeBtnFunction', function($compile){
			return{
				restrict: 'A',
				controller: function($scope){ 
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('employee-data')).append($compile(
							"<tr>"+
								"<td><button ng-click='delete_row($event)' type='button' class='btn btn-danger btn-xs' style='padding: 1px 8px !important; margin: 8px 0 !important;'>x</button></td>"+
								"<td><input class='form-control' type='text' name='fname[]' required></td>"+
								"<td><input class='form-control' type='text' name='mname[]' required></td>"+
								"<td><input class='form-control' type='text' name='lname[]' required></td>"+
								"<td><input class='form-control' type='text' name='address[]' placeholder='Ex: #187 Mabini Street, Baguio City' required></td>"+
								"<td><input class='form-control number' type='text' name='cnumber[]' placeholder='09xxxxxxxxx' required></td>"+
								"<td><input class='form-control email' type='text' name='email[]' placeholder='Ex: company@docpro.com' required></td>"+
							"</tr>"
						)(scope));
						table_input_required();
					})
				}
			}
		})
		.directive('addBranchBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-branch-btn-function type='button' class='btn btn-dark btn-sm btn-raised ripple-effect btn-input-add'>Add</button>"
			}
		})
		.directive('addBranchBtnFunction', function($compile){
			return{
				restrict: 'A',
				controller: function($scope){ 
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}

					var init_branches = function(){
						$.get(window_location+'/setup/setup1/get_branches', function(response){
							angular.element(document.getElementById('branch-data')).html('');
							$.each(JSON.parse(response), function(index, data){
								angular.element(document.getElementById('branch-data')).append($compile(
									"<tr>"+
										"<td><button ng-click='delete_row($event)' type='button' class='btn btn-danger btn-xs' style='padding: 1px 8px !important; margin: 8px 0 !important;'>x</button></td>"+
										"<td><input class='form-control table_input_required' type='text' name='branch_name[]' value='"+data.name+"' required /></td>"+
										"<td><input class='form-control table_input_required' type='text' name='branch_address[]' placeholder='Ex: #187 Mabini Street, Baguio City' value='"+data.cb_address+"' required /></td>"+
										"<td><input class='form-control tin-number table_input_required' type='text' name='branch_tin[]' placeholder='Ex: 999-999-999-9999' value='"+data.cb_tin+"' required /></td>"+
										"<td><input class='form-control number table_input_required' type='text' name='branch_mobile[]' placeholder='09xxxxxxxxx' value='"+data.cb_cno+"' required /></td>"+
										"<td><input class='form-control table_input_required' type='text' name='branch_email[]' placeholder='Ex: company@docpro.com' value='"+data.cb_email+"' required /></td>"+
									"</tr>"
								)($scope));
							});
						});
					}
					init_branches();
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('branch-data')).append($compile(
							"<tr>"+
								"<td><button ng-click='delete_row($event)' type='button' class='btn btn-danger btn-xs' style='padding: 1px 8px !important; margin: 8px 0 !important;'>x</button></td>"+
								"<td><input class='form-control table_input_required' type='text' name='branch_name[]' required /></td>"+
								"<td><input class='form-control table_input_required' type='text' name='branch_address[]' placeholder='Ex: #187 Mabini Street, Baguio City' required /></td>"+
								"<td><input class='form-control tin-number table_input_required' type='text' name='branch_tin[]' placeholder='Ex: 999-999-999-9999' required /></td>"+
								"<td><input class='form-control number table_input_required' type='text' name='branch_mobile[]' placeholder='09xxxxxxxxx' required /></td>"+
								"<td><input class='form-control table_input_required' type='text' name='branch_email[]' placeholder='Ex: company@docpro.com' required /></td>"+
							"</tr>"
						)(scope));
						table_input_required();
					})
				}
			}
		})
		.directive('addDepartmentBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-department-btn-function type='button' class='btn btn-info btn-sm btn-raised ripple-effect btn-input-add'>Add</button>"
			}
		})
		.directive('addDepartmentBtnFunction', function($compile){
			return{
				restrict: 'A',
				controller: function($scope){
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('department-data')).append($compile(
							"<tr>"+
								"<td><button ng-click='delete_row($event)' type='button' class='btn btn-danger btn-xs' style='padding: 1px 8px !important; margin: 8px 0 !important;'>x</button></td>"+
								"<td><input class='form-control' type='text' name='dept_name[]' required ></td>"+
								"<td><input class='form-control' type='text' name='dept_shortname[]' required ></td>"+
							"</tr>"
						)(scope))
						table_input_required();
					})
				}
			}
		})
		.directive('addProfitCostCenterBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-profit-cost-center-btn-function type='button' class='btn btn-info btn-sm btn-raised ripple-effect btn-input-add'>Add</button>"
			}
		})
		.directive('addProfitCostCenterBtnFunction', function($compile){
			return{
				restrict: 'A',
				controller: function($scope){
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('profit-cost-center-data')).append($compile(
							"<tr>"+
								"<td><button ng-click='delete_row($event)' type='button' class='btn btn-danger btn-xs' style='padding: 1px 8px !important; margin: 8px 0 !important;'>x</button></td>"+
								"<td><input class='form-control' type='text' name='pcc_name[]' required ></td>"+
								"<td><input class='form-control' type='text' name='pcc_shortname[]' required ></td>"+
								"<td>"+
									"<select class='form-control' name='pcc_dept[]' required ></select>"+
								"</td>"+
							"</tr>"
						)(scope));

						$.each(all_departments, function(index, value){
							$('#profit-cost-center-data').find('select[name*=pcc_dept]:last').append("<option value='"+value+"'>"+value+"</option>");
						});
						table_input_required();
					})
				}
			}
		})
		.directive('addProductBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-product-btn-function type='button' class='btn btn-info btn-sm btn-raised ripple-effect btn-input-add'>Add</button>"
			}
		})
		.directive('addProductBtnFunction', function($compile){
			return{
				restrict: 'A',
				controller: function($scope){ 
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('product-data')).append($compile(
							"<tr>"+
								"<td><button ng-click='delete_row($event)' type='button' class='btn btn-danger btn-xs' style='padding: 1px 8px !important; margin: 8px 0 !important;'>x</button></td>"+
								"<td><input class='form-control' type='text' name='product_name[]' required ></td>"+
								"<td><input class='form-control' type='text' name='product_shortname[]' required ></td>"+
								"<td><select class='form-control' name='product_pcc[]' required ></select></td>"+
								"<td><select class='form-control' name='product_department[]' required ></select></td>"+
							"</tr>"
						)(scope));

						$.each(all_departments, function(index, value){
							$('#product-data').find('select[name*=product_department]:last').append("<option value='"+value+"'>"+value+"</option>");
						});
						$.each(all_pcc, function(index, value){
							$('#product-data').find('select[name*=product_pcc]:last').append("<option value='"+value+"'>"+value+"</option>");
						});
						table_input_required();
					})
				}
			}
		})
		.directive('addServiceBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-service-btn-function type='button' class='btn btn-info btn-sm btn-raised ripple-effect btn-input-add'>Add</button>"
			}
		})
		.directive('addServiceBtnFunction', function($compile){
			return{
				restrict: 'A',
				controller: function($scope){ 
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('service-data')).append($compile(
							"<tr>"+
								"<td><button ng-click='delete_row($event)' type='button' class='btn btn-danger btn-xs' style='padding: 1px 8px !important; margin: 8px 0 !important;'>x</button></td>"+
								"<td><input class='form-control' type='text' name='service_name[]'></td>"+
								"<td><input class='form-control' type='text' name='service_shortname[]'></td>"+
								"<td><select class='form-control' name='service_pcc[]' required ></select></td>"+
								"<td><select class='form-control' name='service_department[]' required ></select></td>"+
							"</tr>"
						)(scope));

						$.each(all_departments, function(index, value){
							$('#service-data').find('select[name*=service_department]').append("<option value='"+value+"'>"+value+"</option>");
						});
						$.each(all_pcc, function(index, value){
							$('#service-data').find('select[name*=service_pcc]').append("<option value='"+value+"'>"+value+"</option>");
						});
						table_input_required();
					})
				}
			}
		})
		.directive('addBpBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-bp-btn-function type='button' class='btn btn-info btn-sm btn-raised ripple-effect btn-input-add'>Add</button>"
			}
		})
		.directive('addBpBtnFunction', function($compile, $timeout){
			return{
				restrict: 'A',
				controller: function($scope){ 
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						$timeout(function(){
							angular.element(document.getElementById('bp-data')).append($compile(
								"<tr>"+
									"<td><button ng-click='delete_row($event)' type='button' class='btn btn-danger btn-xs' style='padding: 1px 8px !important; margin: 8px 0 !important;'>x</button></td>"+
									"<td>"+
										"<select name='bp_type[]' class='form-control bp_type_select'>"+
											"<option value='2'>Company</option>"+
											"<option value='1'>Individual</option>"+
											"<option value='3'>Government</option>"+
										"</select>"+
									"</td>"+
									"<td><input class='form-control' type='text' name='bp_name[]' placeholder='Company name' required /></td>"+
									"<td><input class='form-control' type='text' name='bp_shortname' required ></td>"+
									"<td><input class='form-control' type='text' name='bp_address[]' placeholder='Ex: #187 Mabini Street, Baguio City' required /></td>"+
									"<td>"+
										"<select name='bp_class[]' class='form-control bp_class' style='width: 450px; text-align: center;'>"+
											"<option ng-repeat='item in bp_type_class_list track by $index' value='{{item.bpc_class}}'>{{item.bpc_class}}</option>"+
										"</select>"+
										"<input class='form-control' type='text' style='display: none; border-top: 1px solid #CCC;' required disabled>"+
									"</td>"+
									"<td><input class='form-control tin-number' type='text' name='bp_tin[]' placeholder='Ex: 123456789 - 000' required /></td>"+
									"<td>"+
										"<select name='bp_tax_type[]' class='form-control'>"+
											"<option value='2'>VAT</option>"+
											"<option value='8'>Non-vat</option>"+
										"</select>"+
									"</td>"+
									"<td>"+
										"<input class='form-control' type='text' name='bp_style[]' required >"+
									"</td>"+
									"<td>"+
										"<input class='form-control' type='text' name='bp_particulars[]' required >"+
									"</td>"+
								"</tr>"
							)(scope))
							table_input_required();
						});
					})
				}
			}
		})
		.directive('addUsersBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-users-btn-function type='button' class='btn btn-info btn-sm btn-raised ripple-effect btn-input-add'>Add</button>"
			}
		})
		.directive('addUsersBtnFunction', function($compile){
			return{
				restrict: 'A',
				controller: function($scope){ 
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('users-data')).append($compile(
							"<tr>"+
								"<td><button ng-click='delete_row($event)' type='button' class='btn btn-danger btn-xs' style='padding: 1px 8px !important; margin: 8px 0 !important;'>x</button></td>"+
								"<td><input class='form-control table_input_required' type='text' name='u_username[]' required /></td>"+
								"<td><input class='form-control table_input_required' type='text' name='u_firstname[]' required /></td>"+
								"<td><input class='form-control table_input_required' type='text' name='u_middlename[]' required /></td>"+
								"<td><input class='form-control table_input_required' type='text' name='u_lastname[]' required /></td>"+
								"<td><input class='form-control table_input_required' type='text' name='u_address[]' placeholder='Ex: #187 Mabini Street, Baguio City' required /></td>"+
								"<td><input class='form-control number table_input_required' type='text' name='u_mobile_no[]' placeholder='Ex: 09123456789' required /></td>"+
								"<td><input class='form-control table_input_required' type='text' name='u_email_address[]' placeholder='Ex: company@docpro.com' required /></td>"+
							"</tr>"
						)(scope))
						table_input_required();
					})
				}
			}
		})
		.directive('addTypesOfPaymentBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-types-of-payment-btn-function type='button' class='btn btn-info btn-sm btn-raised ripple-effect btn-input-add'>Add</button>"
			}
		})
		.directive('addBankBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-bank-btn-function type='button' class='btn btn-info btn-sm btn-raised ripple-effect btn-input-add'>Add</button>"
			}
		})
		.directive('addBankBtnFunction', function($compile, $timeout){
			return{
				restrict: 'A',
				controller: function($scope){ 
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						$timeout(function(){
							angular.element(document.getElementById('bank-data')).append($compile(
								"<tr>"+
									"<td><button ng-click='delete_row($event)' type='button' class='btn btn-danger btn-xs' style='padding: 1px 8px !important; margin: 8px 0 !important;'>x</button></td>"+
									"<td>"+
										"<select class='form-control' name='bank_id[]'>"+
											"<option ng-repeat='item in bank_list track by $index' value='{{item.b_id}}'>{{item.b_name}}</option>"+
										"</select>"+
									"</td>"+
									"<td><input class='form-control' type='text' name='bank_acc_number[]' /></td>"+
									"<td><input class='form-control' type='text' name='bank_class[]' placeholder='ex: savings / checking' /></td>"+
								"</tr>"
							)(scope))
							table_input_required();
						});
					})
				}
			}
		})
		.directive('addTaxBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-tax-btn-function type='button' class='btn btn-info btn-sm btn-raised ripple-effect btn-input-add'>Add</button>"
			}
		})
		.directive('addTaxBtnFunction', function($compile, $timeout){
			return{
				restrict: 'A',
				controller: function($scope){ 
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						$timeout(function(){
							angular.element(document.getElementById('tax-data')).append($compile(
								"<tr>"+
									"<td><button ng-click='delete_row($event)' type='button' class='btn btn-danger btn-xs' style='padding: 1px 8px !important; margin: 6px 0 !important;'>x</button></td>"+
									"<td>"+
										"<select name='tax[]' class='form-control tax_select' type='text' style='width: 450px; text-align: center;' required>"+
											"<option ng-repeat='item in tax_list track by $index' short-name='{{item.t_shortname}}' rate='{{item.t_rate}}%' base='{{item.t_base}}' value='{{item.t_id}}' >{{item.t_name}}</option>"+
										"</select>"+
									"</td>"+
									"<td><input class='form-control' type='text' name='tax_short_name[]' value='{{tax_list[0].t_shortname}}' disabled /></td>"+
									"<td><input class='form-control number' type='text' name='tax_rate[]' value='{{tax_list[0].t_rate}}' disabled /></td>"+
									"<td><input class='form-control number' type='text' name='tax_base[]' value='{{tax_list[0].t_base}}' disabled /></td>"+
								"</tr>"
							)(scope));
							table_input_required();
						});
						
					})
				}
			}
		})
		.directive('addTradeDiscountBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-trade-discount-btn-function type='button' class='btn btn-info btn-sm btn-raised ripple-effect btn-input-add'>Add</button>"
			}
		})
		.directive('addTradeDiscountBtnFunction', function($compile){
			return{
				restrict: 'A',
				controller: function($scope){ 
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('trade-discount-data')).append($compile(
							"<tr>"+
								"<td><button ng-click='delete_row($event)' type='button' class='btn btn-danger btn-xs' style='padding: 1px 8px !important; margin: 8px 0 !important;'>x</button></td>"+
								"<td><input class='form-control' type='text' name='td_name[]' required /></td>"+
								"<td><input class='form-control' type='text' name='td_shortname[]' required /></td>"+
								"<td><input class='form-control' type='text' name='td_rate[]' required /></td>"+
							"</tr>"
						)(scope));
						table_input_required();
					})
				}
			}
		})
		.directive('addJournalBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-journal-btn-function type='button' class='btn btn-info btn-sm btn-raised ripple-effect btn-input-add'>Add</button>"
			}
		})
		.directive('addJournalBtnFunction', function($compile){
			return{
				restrict: 'A',
				controller: function($scope){ 
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('journal-data')).append($compile(
							"<tr>"+
								"<td><button ng-click='delete_row($event)' type='button' class='btn btn-danger btn-xs' style='padding: 1px 8px !important; margin: 8px 0 !important;'>x</button></td>"+
								"<td><input class='form-control' type='text' name='journal_name[]' required /></td>"+
								"<td><input class='form-control' type='text' name='journal_shortname[]'required /></td>"+
							"</tr>"
						)(scope));
						table_input_required();
					})
				}
			}
		})
		.directive('repeatCompanyClass', function($timeout){
			return function(scope, element, attrs){
				if(scope.$last){
					$timeout(function(){
						$('#company_classification').selectize({
						create: true,
						sortField: 'text',
					});
					var company_class = $('#company_classification')[0].selectize;
					company_class.on('change', function(){
						var value = company_class.getItem(company_class.getValue()).text();
						if(value === 'Others (Pls. Specify)'){
							$('#other_classification').removeAttr('style');
							$('#other_classification input').attr('required', true);
							$('#other_classification input').val('');
							$('#other_classification input').focus();
						}else{
							$('#other_classification').attr('style', 'display: none');
							$('#other_classification input').removeAttr('required');
						}
					});
					});
					
				}
			}
		});