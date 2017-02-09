angular.module('transactions')
		.controller('transaction', ['$scope', '$http', function($scope, $http){
		//Document
			//var today = new Date();
			//$scope.transaction_date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
			$scope.journal_array = [
									{journal_id: '1', journal_name: 'Sales Journal'},
									{journal_id: '2', journal_name: 'Purchases Journal'},
									{journal_id: '3', journal_name: 'Receipts Journal'},
									{journal_id: '4', journal_name: 'Collections Journal'},
									{journal_id: '5', journal_name: 'Disbursements Journal'},
									{journal_id: '7', journal_name: 'Adjustments Journal'},
									{journal_id: '8', journal_name: 'Specials Journal'},
									];
			$scope.selected_journal = {};
			$scope.$watch('selected_journal.journal.journal_id', function(){
				if($scope.selected_journal.journal){
						$('#documents .document_temp').removeClass('hide');
						$('#documents .document_1').removeClass('hide');
						$('#documents .document_2').removeClass('hide');
						$('#documents .document_3').removeClass('hide');
					if($scope.selected_journal.journal.journal_id === '5'){
						$('#documents .document_temp').addClass('hide');
						$('#documents .document_1').addClass('hide');
						$('#documents .document_3').addClass('hide');
					}else if($scope.selected_journal.journal.journal_id === '7'){
						$('#documents .document_temp').addClass('hide');
						$('#documents .document_1').addClass('hide');
						$('#documents .document_2').addClass('hide');
					}else{
						$('#documents .document_temp').addClass('hide');
						$('#documents .document_2').addClass('hide');
						$('#documents .document_3').addClass('hide');
					}
				}else{
					$('#documents .document_1').addClass('hide');
					$('#documents .document_2').addClass('hide');
					$('#documents .document_3').addClass('hide');
				}
			});

			$scope.$watchGroup(['amounts_gross_amount', 'vat_total_gross'], function(){
				$scope.variance_gross_amount = ($scope.vat_total_gross === 0 | $scope.amounts_gross_amount === 0) ? 0 : $scope.vat_total_gross - $scope.amounts_gross_amount;
			});
			$scope.$watchGroup(['amounts_vat', 'vat_total_vat'], function(newVal, oldVal){
				$scope.variance_vat = ($scope.vat_total_vat === 0 | $scope.amounts_vat === 0) ? 0 : $scope.vat_total_vat - $scope.amounts_vat;
			});
			$scope.$watchGroup(['amounts_tax_withheld', 'ewt_total_withheld', 'fwt_total_withheld'], function(){
				$scope.variance_tax_withheld = ($scope.ewt_total_withheld === 0 | $scope.fwt_total === 0 | $scope.fwt_total_withheld === 0) ? 0 : (($scope.ewt_total_withheld + $scope.fwt_total_withheld) - $scope.amounts_tax_withheld);
			});
			$scope.$watchGroup(['amounts_deductions', 'discount_total_deduction'], function(){
				$scope.variance_deductions = ($scope.discount_total_deduction === 0 | $scope.amounts_deductions === 0) ? 0 : $scope.discount_total_deduction - $scope.amounts_deductions;
			});
			$scope.$watchGroup(['amounts_net_amount', 'vat_total_net_vat'], function(){
				$scope.variance_net_amount = ($scope.vat_total_net_vat === 0 | $scope.amounts_net_amount === 0) ? 0 : $scope.vat_total_net_vat - $scope.amounts_net_amount;
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
			$scope.amounts_net_amount = isNaN(parseFloat($scope.amounts_gross_amount) - ((parseFloat($scope.amounts_tax_withheld) / parseFloat($scope.amounts_vat)) + parseFloat($scope.amounts_deductions))) ? 0 : (parseFloat($scope.amounts_gross_amount) - ((parseFloat($scope.amounts_tax_withheld) / parseFloat($scope.amounts_vat)) + parseFloat($scope.amounts_deductions)));			
			$scope.$watchGroup(['amounts_gross_amount', 'amounts_vat', 'amounts_tax_withheld', 'amounts_deductions'], function(newVal, oldVal){
				$scope.amounts_net_amount = isNaN(parseFloat($scope.amounts_gross_amount) - ((parseFloat($scope.amounts_tax_withheld) / parseFloat($scope.amounts_vat)) + parseFloat($scope.amounts_deductions))) ? 0 : (parseFloat($scope.amounts_gross_amount) - ((parseFloat($scope.amounts_tax_withheld) / parseFloat($scope.amounts_vat)) + parseFloat($scope.amounts_deductions)));
			});

			$scope.isNaN = isNaN;
			$scope.transaction_date = new Date().toString('MMM d, yyyy');
			$scope.transaction_id = 1;
			$scope.journal_transaction_id = 1;
			
			$scope.document_name = '';
			
		//Business Partner
			$scope.selected_bp = {};
			$scope.business_partner_array = [];
			$http.get(window_location+'/journals/sales/transaction/bp/get').then(function success(response){
				$.each(response.data, function(index, data){
					$scope.business_partner_array.push(data);
				});
			}, function error(response){});
			

		//BANKS
			$scope.selected_bank = {};
			$scope.banks_array = [];
			$http.get(window_location+'/journals/sales/transaction/bank/get').then(function success(response){
				$.each(response.data, function(index, data){
					$scope.banks_array.push(data);
				});
			}, function error(response){});

		//MODE OF PAYMENT
			$scope.selected_mop = {};
			$scope.mode_of_payment = [];
			$scope.mode_of_payment.push({co_mop_id: '', co_mop_code: '', co_mop_name: '', co_mop_shortname: '', co_top_id: '', cb_id: ''});
			$http.get(window_location+'/journals/sales/transaction/mop/get').then(function success(response){
				$.each(response.data, function(index, data){
					$scope.mode_of_payment.push(data);
				});
			}, function error(response){});
			
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