<div role="tabpanel" class="tab-pane" id="new-transactions">
	<form action="<?php echo base_url(); ?>journals/save_collection_trans" method='post' novalidate>
		<div class='card'>
			<div class='card-body' style='padding-top: 25px;'>
				<div class='col-md-12' style='margin-left: 12%;'>
					<div class='col-md-4' style='width: 23%'>
						<div class='form-group disabled-form-group'>
							<label class='text-green text-sm' for='input-transaction-id'>Transaction ID</label>
							<input ng-model='transaction_id' type='text' id='input-transaction-id' class='form-control' name='input-transaction-id' style='color: #000C98; text-align: center;' readonly />
						</div>
					</div>
					<div class='col-md-4' style='width: 24%'>
						<div class='form-group disabled-form-group'>
							<label class='text-green text-sm' for='input-transaction-date'>Transaction Date</label>
							<input name='trans_date' ng-model='transaction_date' type='text' id='input-transaction-date' class='form-control' style='color: #000C98; text-align: center;' readonly />
						</div>
					</div>
					<div class='col-md-4' style='width: 27%'>
						<div class='form-group disabled-form-group'>
							<label class='text-green text-sm' for='input-transaction-date'>Journal Transaction ID</label>
							<input name='journal_transaction_count' ng-model='journal_transaction_count' type='text' id='input-transaction-count' class='form-control' name='input-transaction-count' style='color: #000C98; text-align: center;' readonly />
							<input name='journal_transaction_id' value='{{journal_transaction_id}}' type='hidden' id='input-transaction-id' class='form-control' style='color: #000C98; text-align: center;' readonly />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id='transaction-document' class='card' style='margin: 0; padding-bottom: 20px;'>
			<div class='card-header'>
				<div class='card-title' style='width: 100%; padding-bottom: 0; padding-top: 0;'>
					<div class='title'>
						<label style='font-weight: normal; padding-top: 8px; color: #000; font-size: 20px;'>Document</label>
						<span style='float: right;'>
							<cash-credit-btn></cash-credit-btn>
						</span>
					</div>
				</div>
			</div>
			<div class='card-body' id='card-2-form' style='padding: 0; padding-top: 15px; display: none;'>
				<div class='col-md-12 transaction-input-row-gutter'>
					<div class='col-md-1 col-custom' style='text-align: right;'>
						<label style='font-size: 12px; color: #000;'>Document</label>
					</div>
					<div class='col-md-3 col-input-custom form-group label-floating has-primary disabled-form-group'>
						<label class='control-label' for='doc_name'>Name</label>
						<input name='doc_name' id='doc_name' ng-model='document_name' class='form-control v-required' type='text' style='text-align: center; color: #000C98;' readonly />
					</div>
					<div class='col-md-3 col-input-custom form-group label-floating has-primary'>
						<label class='control-label' for='doc_number'>Number</label>
						<input name='doc_number' id='doc_number' ng-model='document_number' class='form-control number v-required v-number' type='text' style='color: #000C98; text-align: center;' />
					</div>
					<div class='col-md-3 col-input-custom form-group label-floating has-primary'>
						<label class='control-label' for='doc_date'>Date</label>
						<input name='doc_date' id='doc_date' ng-model='document_date' class='form-control v-required' style='color: #000C98; text-align: center;' type='date' />
					</div>
				</div>
				<div class='col-md-12 transaction-input-row-gutter' style='margin-top: 5px;'>
					<div class='col-md-1 col-custom' style='text-align: right;'>
						<label style='font-size: 12px; color: #000; text-align: right;'>Business Partner</label>
					</div>
					<div class='col-md-3 col-input-custom form-group label-floating has-primary trans-select'>
						<label class='control-label' for='bp_name'>Name</label>
						<!-- <a class='control-label' href='#' style="float: right;">add</a> -->
						<ui-select id='bp_name' ng-model="selected_bp.bp" theme="selectize" class="form-control v-select-required-trans" ng-required='true'>
							<ui-select-match>{{$select.selected.bp_name}}</ui-select-match>
							<ui-select-choices repeat="bp in business_partner_array | filter: {co_bp_name: $select.search}">
							  <div ng-bind-html="bp.bp_name | highlight: $select.search"></div>
							</ui-select-choices>
							<ui-select-no-choice>
							    <span class='add-bp'>No results found!<br>Click here to add</span>
							</ui-select-no-choice>
						</ui-select>
						<input name='bp_id' type="hidden" value='{{selected_bp.bp.co_bp_id}}' >
					</div>
					<div class='col-md-3 col-input-custom form-group label-floating has-primary disabled-form-group'>
						<label class='control-label' for='bp_address'>Address</label>
						<input id='bp_address' ng-model='selected_bp.bp.co_bp_address' class='form-control' type='text' style='color: #000C98; text-align: center;' readonly />
					</div>
					<div class='col-md-3 col-input-custom form-group label-floating has-primary disabled-form-group'>
						<label class='control-label' for='bp_tin' style='width: 100%'>TIN</label>
						<input id='bp_tin' ng-model='selected_bp.bp.co_bp_tin' class='form-control' type='text' style='color: #000C98; text-align: center;' readonly />
					</div>
				</div>
				<div class='col-md-12 transaction-input-row-gutter' style='margin-top: 10px;'>
					<div class='col-md-1 col-custom' style='text-align: right;'>
						<label style='font-size: 12px; color: #000;'>Particulars</label>
					</div>
					<div class='col-md-3 col-input-custom form-group label-floating has-primary disabled-form-group'>
						<label class='control-label' for='particular_particular'>Particulars</label>
						<input id='particular_particular' ng-model='selected_bp.bp.co_bp_particulars' type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
					</div>
					<div class='col-md-3 col-input-custom form-group label-floating has-primary'>
						<label class='control-label' for='particular_period'>Period</label>
						<input name='particulars_period' id='particular_period' ng-model='particulars_period' type='text' class='form-control v-required' style='color: #000C98; text-align: center;' />
					</div>
					<div class='col-md-3 col-input-custom form-group label-floating has-primary'>
						<label class='control-label' for='particular_remark'>Remarks</label>
						<input name='particulars_remark' id='particular_remark' ng-model='particulars_remarks' type='text' class='form-control v-required' style='color: #000C98; text-align: center;' />
					</div>
				</div>
				
				
				<div class='col-md-12 transaction-input-row-gutter' style='margin-top: 10px;'>
					<div class='col-md-1 col-custom' style='text-align: right;'>
						<label style='font-size: 12px; color: #000;'>Payment</label>
					</div>
					<div class='col-md-3 col-input-custom form-group has-primary label-floating disabled-form-group'>
						<label class='control-label' for='payment_type'>Type of Payment</label>
						<input name='payment_type' id='payment_type' ng-model='payment_type' type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
					</div>
					<div class='col-md-3 col-input-custom form-group has-primary label-floating'>
						<label class='control-label' for='payment_term'>Terms</label>
						<input name='payment_term' id='payment_term' ng-model='payment_terms' type='text' class='form-control number' style='color: #000C98; text-align: center;' />
					</div>
					<div class='col-md-3 col-input-custom form-group has-primary label-floating disabled-form-group'>
						<label class='control-label' for='payment_due_date'>Due Date</label>
						<input name='payment_due_date' id='payment_due_date' value='{{ payment_terms | computeDueDate:this }}' type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
					</div>
				</div>
				
				
				<div class='col-md-12 transaction-input-row-gutter' style='margin-top: 10px;'>
					<div class='col-md-1 col-custom'>
						<label></label>
					</div>
					<div class='col-md-2 col-input-custom form-group label-floating has-primary trans-select'>
						<label class='control-label'>Mode of Payment</label>
						<ui-select ng-model="selected_mop.mop" theme="selectize" class="form-control v-select-required-trans">
							<ui-select-match>{{$select.selected.mop_name}}</ui-select-match>
							<ui-select-choices repeat="item in mode_of_payment | filter: {mop_name: $select.search}">
							  <div ng-bind-html="item.mop_name | highlight: $select.search"></div>
							</ui-select-choices>
							<ui-select-no-choice>
							    <span class='add-mop'>No results found!<br>Click here to add</span>
							</ui-select-no-choice>
						</ui-select>
						<input name="payment_mode_id" type="hidden" value="{{ selected_mop.mop.co_mop_id }}">
					</div>
					<div class='col-md-2 col-input-custom form-group label-floating has-primary'>
						<label class='control-label'>Amount Paid</label>
						<input name='payment_amount_paid' ng-model='payment_amount_paid' type='text' class='form-control v-required v-decimal' style='color: #000C98; text-align: center;' />
					</div>
					<div class='col-md-2 col-input-custom form-group label-floating has-primary'>
						<label class='control-label'>Check Number</label>
						<input name='payment_check_number' ng-model='payment_check_number' type='text' class='form-control number v-number' style='color: #000C98; text-align: center;' />
					</div>
					<div class='col-md-2 col-input-custom form-group label-floating has-primary trans-select'>
						<label class='control-label'>Bank</label>
						<ui-select ng-model="selected_bank.bank" theme="selectize" class="form-control">
							<ui-select-match>{{$select.selected.b_shortname}}</ui-select-match>
							<ui-select-choices repeat="bank in banks_array | filter: {b_name: $select.search}">
							  <div ng-bind-html="bank.b_shortname | highlight: $select.search"></div>
							</ui-select-choices>
							<ui-select-no-choice>
							    <span class='add-bank'>No results found!<br>Click here to add</span>
							</ui-select-no-choice>
						</ui-select>
						<input name="payment_bank_id" type="hidden" value="{{ selected_bank.bank.co_b_id}} ">
					</div>
					<div class='col-md-2 col-input-custom form-group label-floating has-primary disabled-form-group'>
						<label class='control-label'>Bank Account Number</label>
						<input ng-model='selected_bank.bank.co_b_no' type='text' class='form-control number' style='color: #000C98; text-align: center;' readonly />
					</div>
				</div>
				
				
				<div class='col-md-12 transaction-input-row-gutter' style='margin-top: 10px;'>
					<div class='col-md-1 col-custom' style='text-align: right;'>
						<label style='font-size: 12px; color: #000;'>Amounts</label>
					</div>
					<div class='col-md-2 col-input-custom form-group label-floating has-primary'>
						<label class='control-label'>Gross Amount</label>
						<input name='amounts_gross_amount' ng-model='amounts_gross_amount'type='text' class='form-control v-required v-decimal' style='color: #000C98; text-align: center;' />
					</div>
					<div class='col-md-2 col-input-custom form-group label-floating has-primary'>
						<label class='control-label'>VAT</label>
						<input name='amounts_vat' ng-model='amounts_vat' type='text' class='form-control v-required v-decimal' style='color: #000C98; text-align: center;' />
					</div>
					<div class='col-md-2 col-input-custom form-group label-floating has-primary'>
						<label class='control-label'>TAX Withheld</label>
						<input name='amounts_tax_withheld' ng-model='amounts_tax_withheld' type='text' class='form-control v-required v-decimal' style='color: #000C98; text-align: center;' />
					</div>
					<div class='col-md-2 col-input-custom form-group label-floating has-primary'>
						<label class='control-label'>Deductions</label>
						<input name='amounts_deductions' ng-model='amounts_deductions' type='text' class='form-control v-required v-decimal' style='color: #000C98; text-align: center;' />
					</div>
					<div class='col-md-2 col-input-custom form-group label-floating has-primary disabled-form-group'>
						<label class='control-label'>Net Amount</label>
						<input name='amounts_net_amount' value="{{ amounts_net_amount }}" type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
					</div>
				</div>
				
				
				<div class='col-md-12' style='margin-top: 10px;'>
					<div class='col-md-1 col-custom' style='text-align: right;'>
						<label style='font-size: 12px; color: #000;'>Variance</label>
					</div>
					<div class='col-md-2 col-input-custom form-group label-floating has-primary disabled-form-group'>
						<label class='control-label'>Gross Amount</label>
						<input name='variance_gross_amount' ng-model='variance_gross_amount' type='text' class='form-control' style='color: red; text-align: center;' readonly />
					</div>
					<div class='col-md-2 col-input-custom form-group label-floating has-primary disabled-form-group'>
						<label class='control-label'>VAT</label>
						<input name='variance_vat' ng-model='variance_vat' type='text' class='form-control' style='color: red; text-align: center;' readonly />
					</div>
					<div class='col-md-2 col-input-custom form-group label-floating has-primary disabled-form-group'>
						<label class='control-label'>TAX Withheld</label>
						<input name='variance_tax_withheld' ng-model='variance_tax_withheld' type='text' class='form-control' style='color: red; text-align: center;' readonly />
					</div>
					<div class='col-md-2 col-input-custom form-group label-floating has-primary disabled-form-group'>
						<label class='control-label'>Deductions</label>
						<input name='variance_deductions' ng-model='variance_deductions' type='text' class='form-control' style='color: red; text-align: center;' readonly />
					</div>
					<div class='col-md-2 col-input-custom form-group label-floating has-primary disabled-form-group'>
						<label class='control-label'>Net Amount</label>
						<input name='variance_net_amount' ng-model='variance_net_amount' type='text' class='form-control' style='color: red; text-align: center;' readonly />
					</div>
				</div>
			</div>
		</div>
		
		<div class='card box box-primary collapsed-box' style='margin: 0; background-color: #FFF;'>
			<div class='card-header' style='background-color: #FFF;'>
				<div class='card-title box-title'>
					<div class='title'>Document Details</div>
				</div>
				<div class="box-tools pull-right">
					<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
				</div>
			</div>
			<div class='card-body box-body' style='padding-top: 0; background-color: #FFF; display: none;'>
				<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7; display: none;'>
					<div class="box-header with-border">
						<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Products/Services</h4>
						<div class="box-tools pull-right">
							<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body" style='background-color: #FBFBFB;'>
						<add-product-services-btn></add-product-services-btn>
						<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
							<thead>
								<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Product / Service Code</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Product Description</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Quantity</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Unit</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Unit Price</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Gross Amount</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
							</thead>
							<tbody id='product-services-table'>
								<tr ng-repeat='product_services in product_services_array track by $index'>
									<td>
										<div class='form-group no-margin trans-select'>
											<ui-select ng-model="product_services.code" theme="selectize" class="form-control">
												<ui-select-match>{{$select.selected.code}}</ui-select-match>
												<ui-select-choices repeat="item in product_services_code | filter: $select.search">
												  <div ng-bind-html="item.code | highlight: $select.search"></div>
												</ui-select-choices>
												<ui-select-no-choice>
												    <span class='add-prod-serv' index='{{$index}}'>No results found!<br>Click here to add</span>
												</ui-select-no-choice>
											</ui-select>
											<input type="hidden" name="product_service_id[]" value="{{product_services.code.id}}">
											<input type="hidden" name="product_service_type[]" value="{{product_services.code.type}}">

										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='product_services.code.description' class='form-control' type='text' style='text-align: center;' readonly >
										</div>
									</td>
									<td>
										<div class='form-group no-margin' ng-class="product_services.code.type == 'service' ? 'disabled-form-group' : '' ">
											<input name='product_services_qty[]' ng-model='product_services.qty' class='form-control' type='text' onkeypress="numberValidation(event)" style='text-align: center;' ng-readonly="product_services.code.type == 'service'">
										</div>
									</td>
									<td>
										<div class='form-group no-margin' ng-class="product_services.code.type == 'service' ? 'disabled-form-group' : '' ">
											<input name='product_services_unit[]' ng-model='product_services.unit' class='form-control' type='text'
											onkeypress="numberValidation(event)" style='text-align: center;' ng-readonly="product_services.code.type == 'service'">
										</div>
									</td>
									<td>
										<div class='form-group no-margin' ng-class="product_services.code.type == 'service' ? 'disabled-form-group' : '' ">
											<input name='product_services_unit_price[]' ng-model='product_services.unit_price' class='form-control' type='text' 
											onkeypress="decimalValidation(event)" style='text-align: center;' ng-readonly="product_services.code.type == 'service'">
										</div>
									</td>
									<td>
										<div class='form-group no-margin' ng-class="product_services.code.type != 'service' ? 'disabled-form-group' : '' ">
											<input name='product_services_gross_amount[]' ng-model='product_services.gross_amount' class='form-control' type='text' onkeypress="decimalValidation(event)" style='text-align: center;' ng-readonly="product_services.code.type != 'service'">
										</div>
									</td>
									<td ng-if='product_services.delete_btn === false'></td>
									<td ng-if='product_services.delete_btn === true'><button class='btn btn-raised btn-danger btn-xs' ng-click='product_services_delete_row($event, $index)' type='button' style='margin-left: 25%; margin-bottom: 0;'><i class='fa fa-times'></i></button></td>
								</tr>
							</tbody>
						</table>
						<table class='table table-bordered table-hover no-padding' style='width: 69.5%; margin-left: 24.75%; margin-top: 0; border: none;'>
							<tbody>
								<tr>
									<td style='width: 9.3%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='prod_serv_total_qty' class='form-control total' type='text' name='total_qty' style='text-align: center;' readonly>
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='prod_serv_total_unit' class='form-control total' type='text' name='total_unit' style='text-align: center;' readonly>
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='prod_serv_total_unit_price' class='form-control total' type='text' name='total_unit_price' style='text-align: center;' readonly>
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='prod_serv_total_gross' class='form-control total' type='text' name='total_gross_amount[]' style='text-align: center;' readonly>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
					<div class="box-header with-border">
						<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>VAT</h4>
						<div class="box-tools pull-right">
							<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body" style='background-color: #FBFBFB;'>
						<add-vat-btn></add-vat-btn>
						<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
							<thead>
								<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Tax Code</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 194px;'>Nature</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Base</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Gross Amount</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Net VAT Amount</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>VAT Amount</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
							</thead>
							<tbody id='vat-table'>
								<tr ng-repeat='vat in vat_array track by $index'>
									<td>
										<div class='form-group no-margin trans-select'>
											<ui-select ng-model="vat.code" theme="selectize" class="form-control">
												<ui-select-match>{{$select.selected.t_code}}</ui-select-match>
												<ui-select-choices repeat="item in vat_code | filter: $select.search">
												  <div ng-bind-html="item.t_code | highlight: $select.search"></div>
												</ui-select-choices>
												<ui-select-no-choice>
												    <span class='add-vat' index='{{$index}}'>No results found!<br>Click here to add</span>
												</ui-select-no-choice>
											</ui-select>
											<input name="vat_id[]" value="{{ vat.code.t_id }}" type="hidden">
										</div>
									</td>
									<td>
										<div class='form-group no-margin trans-select'>
											<input ng-model='vat.nature' name="vat_nature[]" type="text" class='form-control' style='text-align: center;' />
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='vat.code.t_rate' class='form-control' type='text' style='text-align: center;' readonly />
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='vat.code.t_base' class='form-control' type='text' style='text-align: center;' readonly />
										</div>
									</td>
									<td>
										<div class='form-group no-margin'>
											<input name='vat_gross_amount[]' ng-model='vat.gross_amount' class='form-control' type='text' onkeypress="decimalValidation(event)" style='text-align: center;'>
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input name='vat_net_vat_amount[]' ng-model='vat.net_vat' class='form-control' type='text' onkeypress="decimalValidation(event)" style='text-align: center;' readonly />
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input name='vat_amount[]'  ng-model='vat.vat' ng-init='vat.vat = 0' class='form-control' type='text' onkeypress="decimalValidation(event)" style='text-align: center;' readonly />
										</div>
									</td>
									
									<td ng-if='vat.delete_btn === false'></td>
									<td ng-if='vat.delete_btn === true'><button class='btn btn-raised btn-danger btn-xs' ng-click='vat_delete_row($event, $index)' type='button' style='margin-left: 25%; margin-bottom: 0;'><i class='fa fa-times'></i></button></td>
								</tr>
							</tbody>
						</table>
						<table class='table table-bordered table-hover no-padding' style='width: 69.8%; margin-left: 25.5%; margin-top: 0; border: none;'>
							<tbody>
								<tr>
									<td style='width: 9.3%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='vat_total_rate' ng-init='vat_total_rate = 0' class='form-control total' type='text' name='total_rate' style='text-align: center;' readonly>
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='vat_total_base' ng-init='vat_total_base = 0' class='form-control total' type='text' name='total_base' style='text-align: center;' readonly>
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='vat_total_gross' class='form-control total' type='text' name='total_gross_amount' style='text-align: center;' readonly>
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='vat_total_net_vat' class='form-control total' type='text' name='total_net_vat' style='text-align: center;' readonly>
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='vat_total_vat' class='form-control total' type='text' name='total_vat' style='text-align: center;' readonly>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
					<div class="box-header with-border">
						<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Discounts</h4>
						<div class="box-tools pull-right">
							<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body" style='background-color: #FBFBFB;'>
						<add-discounts-btn></add-discounts-btn>
						<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
							<thead>
								<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Deduction Code</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 220px;'>Nature</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Deduction</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>SC ID</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
							</thead>
							<tbody id='discounts-table'>
								<tr ng-repeat='discount in discount_array track by $index'>
									<td>
										<div class='form-group no-margin trans-select'>
											<ui-select ng-model="discount.code" theme="selectize" class="form-control">
												<ui-select-match>{{$select.selected.co_d_code}}</ui-select-match>
												<ui-select-choices repeat="item in discount_code | filter: $select.search">
												  <div ng-bind-html="item.co_d_code | highlight: $select.search"></div>
												</ui-select-choices>
												<ui-select-no-choice>
												    <span class='add-discount' index='{{$index}}'>No results found!<br>Click here to add</span>
												</ui-select-no-choice>
											</ui-select>
											<input name="discount_id[]" value="{{ discount.code.co_d_id }}" type="hidden">
										</div>
									</td>
									<td>
										<div class='form-group no-margin trans-select'>
											<input ng-model='discount.nature' name="discount_nature[]" type="text" class='form-control' style='text-align: center;' />
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='discount.code.co_d_rate' class='form-control' type='text' style='text-align: center;' readonly>
										</div>
									</td>
									<td>
										<div class='form-group no-margin'>
											<input ng-model='discount.deduction' name='discount_deduction[]' class='form-control' type='text' onkeypress="decimalValidation(event)" style='text-align: center;'>
										</div>
									</td>
									<td>
										<div class='form-group no-margin'>
											<input ng-model='discount.sc_id' name='discount_sc_id[]' class='form-control' type='text' style='text-align: center;'>
										</div>
									</td>
									<td ng-if='discount.delete_btn === false'></td>
									<td ng-if='discount.delete_btn === true'><button class='btn btn-raised btn-danger btn-xs' ng-click='discount_delete_row($event, $index)' type='button' style='margin-left: 25%; margin-bottom: 0;'><i class='fa fa-times'></i></button></td>
								</tr>
							</tbody>
						</table>
						<table class='table table-bordered table-hover table-striped no-padding' style='width: 43.8%; margin-left: 29.5%; margin-top: 0; border: none;'>
							<tbody>
								<tr>
									<td style='width: 11%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='discount_total_rate' class='form-control total' type='text' name='total_rate' style='text-align: center;' readonly>
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='discount_total_deduction' class='form-control total' type='text' name='total_deduction' style='text-align: center;' readonly>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
					<div class="box-header with-border">
						<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Expanded Withholding Tax</h4>
						<div class="box-tools pull-right">
							<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body" style='background-color: #FBFBFB;'>
						<add-expanded-tax-btn></add-expanded-tax-btn>
						<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
							<thead>
								<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Tax Code</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 238px;'>Nature</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Base</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Withheld</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
							</thead>
							<tbody id='expanded-tax-table'>
								<tr ng-repeat='ewt in ewt_array track by $index'>
									<td>
										<div class='form-group no-margin trans-select'>
											<ui-select ng-model="ewt.code" theme="selectize" class="form-control">
												<ui-select-match>{{$select.selected.t_code}}</ui-select-match>
												<ui-select-choices repeat="item in ewt_code | filter: $select.search">
												  <div ng-bind-html="item.t_code | highlight: $select.search"></div>
												</ui-select-choices>
												<ui-select-no-choice>
												    <span class='add-ewt' index='{{$index}}'>No results found!<br>Click here to add</span>
												</ui-select-no-choice>
											</ui-select>
											<input name="ewt_id[]" type="hidden" value="{{ ewt.code.t_id }}">
										</div>
									</td>
									<td>
										<div class='form-group no-margin trans-select'>
											<input ng-model='ewt.nature' name="ewt_nature[]" type="text" class='form-control' style='text-align: center;' />
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='ewt.code.t_rate' class='form-control' type='text' style='text-align: center;' readonly>
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='ewt.code.t_base' class='form-control' type='text' style='text-align: center;' readonly>
										</div>
									</td>
									<td>
										<div class='form-group no-margin'>
											<input ng-model='ewt.withheld' name='ewt_tax_withheld[]' class='form-control' type='text' onkeypress="decimalValidation(event)" style='text-align: center;'>
										</div>
									</td>
									<td ng-if='ewt.delete_btn === false'></td>
									<td ng-if='ewt.delete_btn === true'><button class='btn btn-raised btn-danger btn-xs' ng-click='ewt_delete_row($event, $index)' type='button' style="margin-left: 25%; margin-bottom: 0;"><i class='fa fa-times'></i></button></td>
								</tr>
							</tbody>
						</table>
						<table class='table table-bordered table-hover table-striped no-padding' style='width: 62.4%; margin-left: 30.6%; margin-top: 0; border: none;'>
							<tbody>
								<tr>
									<td style='width: 8.2%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='ewt_total_rate' class='form-control total' type='text' name='total_rate' style='text-align: center;' readonly>
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='ewt_total_base' class='form-control total' type='text' name='total_tax_base' style='text-align: center;' readonly>
										</div>
										
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='ewt_total_withheld' class='form-control total' type='text' name='total_widthheld' style='text-align: center;' readonly>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
					<div class="box-header with-border">
						<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Final Withholding Tax</h4>
						<div class="box-tools pull-right">
							<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body" style='background-color: #FBFBFB;'>
						<add-final-withholding-tax-btn></add-final-withholding-tax-btn>
						<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
							<thead>
								<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Tax Code</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 238px;'>Nature</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Base</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Withheld</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
							</thead>
							<tbody id='final-withholding-tax-table'>
								<tr ng-repeat='fwt in fwt_array track by $index'>
									<td>
										<div class='form-group no-margin trans-select'>
											<ui-select ng-model="fwt.code" theme="selectize" class="form-control">
												<ui-select-match>{{$select.selected.t_code}}</ui-select-match>
												<ui-select-choices repeat="item in fwt_code | filter: $select.search">
												  <div ng-bind-html="item.t_code | highlight: $select.search"></div>
												</ui-select-choices>
												<ui-select-no-choice>
												    <span class='add-fwt' index='{{$index}}'>No results found!<br>Click here to add</span>
												</ui-select-no-choice>
											</ui-select>
											<input name="fwt_id[]" value="{{ fwt.code.t_id }}" type="hidden">
										</div>
									</td>
									<td>
										<div class='form-group no-margin'>
											<input ng-model='fwt.nature' name="fwt_nature[]" type="text" class='form-control' style='text-align: center;' />
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='fwt.code.t_rate' class='form-control' type='text' style='text-align: center;' readonly>
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='fwt.code.t_base' class='form-control' type='text' style='text-align: center;' readonly>
										</div>
									</td>
									<td>
										<div class='form-group no-margin'>
											<input ng-model='fwt.withheld' name='fwt_tax_withheld[]' class='form-control' type='text' onkeypress="decimalValidation(event)" style='text-align: center;'>
										</div>
									</td>
									<td ng-if='fwt.delete_btn === false'></td>
									<td ng-if='fwt.delete_btn === true'><button class='btn btn-raised btn-danger btn-xs' ng-click='fwt_delete_row($event, $index)' type='button' style="margin-left: 25%; margin-bottom: 0;"><i class='fa fa-times'></i></button></td>
								</tr>
							</tbody>
						</table>
						<table class='table table-bordered table-hover table-striped no-padding' style='width: 63%; margin-left: 29.99%; margin-top: 0; border: none;'>
							<tbody>
								<tr>
									<td style='width: 9.1%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='fwt_total_rate' class='form-control total' type='text' name='total_rate' style='text-align: center;' readonly>
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='fwt_total_base' class='form-control total' type='text' name='total_tax_base' style='text-align: center;' readonly>
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='fwt_total_withheld' class='form-control total' type='text' name='total_tax_withheld' style='text-align: center;' readonly>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
					<div class="box-header with-border">
						<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Document Reference</h4>
						<div class="box-tools pull-right">
							<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body" style='background-color: #FBFBFB;'>
						<add-document-reference-btn></add-document-reference-btn>
						<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
							<thead>
								<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Document Code</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Number</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Date</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Gross Amount</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Net Amount</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
							</thead>
							<tbody id='document-reference-table'>
								<tr ng-repeat='doc in document_array track by $index'>
									<td>
										<div class='form-group no-margin trans-select'>
											<ui-select ng-model="doc.code" theme="selectize" class="form-control">
												<ui-select-match>{{$select.selected.co_doc_id}}</ui-select-match>
												<ui-select-choices repeat="item in document_code | filter: $select.search">
												  <div ng-bind-html="item.co_doc_id | highlight: $select.search"></div>
												</ui-select-choices>
												<ui-select-no-choice>
												    <span class='add-doc-ref'>No results found!<br>Click here to add</span>
												</ui-select-no-choice>
											</ui-select>
											<input name="doc_ref_doc_id[]" value="{{ doc.code.co_doc_id }}" type="hidden">
										</div>
									</td>
									<td>
										<div class='form-group no-margin'>
											<input name='doc_ref_doc_number[]' class='form-control' type='text' onkeypress="numberValidation(event)" style='text-align: center;'>
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input name='doc_ref_doc_date[]' value='{{document_date | formatDate}}' class='form-control' type='text' style='text-align: center;' readonly >
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input name='doc_ref_doc_gross_amount[]' value="{{ amounts_gross_amount }}" class='form-control' type='text' style='text-align: center;' readonly >
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input name='doc_ref_doc_net_amount[]'  value="{{ amounts_net_amount }}" class='form-control' type='text' style='text-align: center;' readonly >
										</div>
									</td>
									<td ng-if='doc.delete_btn === false'></td>
									<td ng-if='doc.delete_btn === true'><button class='btn btn-raised btn-danger btn-xs' ng-click='document_delete_row($event, $index)' type='button' style="margin-left: 25%; margin-bottom: 0;"><i class='fa fa-times'></i></button></td>
								</tr>
							</tbody>
						</table>
						<table class='table table-bordered table-hover table-striped no-padding' style='width: 47%; margin-left: 45.6%; margin-top: 0; border: none;'>
							<tbody id='document-reference-table'>
								<tr>
									<td style='width: 12.8%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
									<td style='width: 46.2%'>
										<div class='form-group no-margin disabled-form-group'>
											<input value="{{ amounts_gross_amount }}" class='form-control total' type='text' name='gross_amount[]' style='text-align: center;' readonly >
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input value="{{ amounts_net_amount }}" class='form-control total' type='text' name='net_amount[]' style='text-align: center;' readonly >
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7; display: none;'>
					<div class="box-header with-border">
						<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Bank Details</h4>
						<div class="box-tools pull-right">
							<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body" style='background-color: #FBFBFB;'>
						<add-bank-details-btn></add-bank-details-btn>
						<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
							<thead>
								<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Bank Code</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Name</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Bank Account Number</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Bank Document</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Amount</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Date</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
							</thead>
							<tbody id='bank-details-table'>
								<tr ng-repeat='bank in bank_array track by $index'>
									<td>
										<div class='form-group no-margin trans-select'>
											<ui-select ng-model="bank.code" theme="selectize" class="form-control">
												<ui-select-match>{{$select.selected.b_code}}</ui-select-match>
												<ui-select-choices repeat="item in account_code | filter: $select.search">
												  <div ng-bind-html="item.b_code | highlight: $select.search"></div>
												</ui-select-choices>
												<ui-select-no-choice>
												    <span class='add-bank-details' index='{{$index}}'>No results found!<br>Click here to add</span>
												</ui-select-no-choice>
											</ui-select>
											<input name="bank_id[]" value="{{ bank.code.co_b_id }}" type="hidden">
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='bank.code.b_shortname' class='form-control' type='text' style='text-align: center;' readonly >
										</div>
									</td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='bank.code.co_b_no' class='form-control' type='text' style='text-align: center;' readonly>
										</div>
									</td>
									<td>
										<div class='form-group no-margin trans-select'>
											<input ng-model='bank.document' name="bank_document[]" type="text" class='form-control' style='text-align: center;' />
										</div>
									</td>
									<td>
										<div class='form-group no-margin'>
											<input ng-model='bank.amount' name='bank_amount[]' class='form-control' type='text' onkeypress="decimalValidation(event)" style='text-align: center;'>
										</div>
									</td>
									<td>
										<div class='form-group no-margin'>
											<input name='bank_date[]' ng-model='bank.date' class='form-control' type='date' style='text-align: center;'>
										</div>
									</td>
									<td ng-if='bank.delete_btn === false'></td>
									<td ng-if='bank.delete_btn === true'><button class='btn btn-raised btn-danger btn-xs' ng-click='bank_delete_row($event, $index)' type='button' style='margin-left: 25%; margin-bottom: 0;'><i class='fa fa-times'></i></button></td>
								</tr>
							</tbody>
						</table>
						<table class='table table-bordered table-hover no-padding' style='width: 20.2%; margin-left: 59.2%; margin-top: 0; border: none;'>
							<tbody>
								<tr>
									<td style='width: 9.3%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input ng-model='banks_total_amount' class='form-control total' type='text' name='total_bank_amount' style='text-align: center;' readonly>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
					<div class="box-header with-border">
						<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Other Details</h4>
						<div class="box-tools pull-right">
							<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body" style='background-color: #FBFBFB;'>
						<table class='table table-hover table-bordered no-margin'>
							<thead>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Prepared By</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Verified By</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Approved By</th>
								<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Received By</th>
							</thead>
							<tbody id='other-details-table'>
								<tr>
									<td>
										<div class='form-group no-margin disabled-form-group'>
											<input  value="<?php echo $this->session->userdata('user')->p_fname.' '.$this->session->userdata('user')->p_mname.' '.$this->session->userdata('user')->p_lname; ?>" class='form-control' type='text' style='text-align: center;' readonly >
											<input name="other_preparedby_id" value="<?php echo $this->session->userdata('user')->p_id; ?>" type="hidden">
										</div>
									</td>
									<td>
										<div class='form-group no-margin'>
											<input name='verified_by' ng-model="verified_by" class='form-control' type='text' style='text-align: center;' >
										</div>
									</td>
									<td>
										<div class='form-group no-margin'>
											<input name='approved_by' ng-model="approved_by" class='form-control' type='text' style='text-align: center;' >
										</div>
									</td>
									<td>
										<div class='form-group no-margin'>
											<input name='received_by' ng-model="received_by" class='form-control' type='text' style='text-align: center;' >
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
			</div>
		</div>

		<div class='card box box-primary collapsed-box' style='margin: 0;'>
			<div class='card-header'>
				<div class='card-title'>
					<div class='title'>Journal Entries</div>
				</div>
				<div class="box-tools pull-right">
					<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
				</div>
			</div>
			<div class='card-body box-body' style='display: none; padding: 0 10px 20px 10px; min-height: 300px;'>
				<add-journal-entry-btn></add-journal-entry-btn>
				<table class='table table-bordered no-margin'>
					<thead style="font-size: 11px;">
						<th>JE Number</th>
						<th>Transaction Code</th>
						<th>JE Sequence Number</th>
						<th>Account Code</th>
						<th style="width: 200px;">Account Name</th>
						<th>Debit(Credit)</th>
						<th>Debit Amount</th>
						<th>Credit Amount</th>
						<th>Profit Cost Center</th>
						<th>Department</th>
						<th>Option</th>
					</thead>
					<tbody id='journal-entry-table'>
						<tr ng-repeat='item in je_array track by $index'>
							<td>
								<div class='form-group no-margin'>
									<input name='je_number[]' type='text' class='form-control' onkeypress="numberValidation(event)" style="text-align: center;">
								</div>
							</td>
							<td>
								<div class='form-group no-margin'>
									<input name='je_trans_code[]' type='text' class='form-control' onkeypress="numberValidation(event)" style="text-align: center;">
								</div>
							</td>
							<td>
								<div class='form-group no-margin disabled-form-group'>
									<input name='je_seq_num[]' type='text' class='form-control' onkeypress="numberValidation(event)" style="text-align: center;" value="{{ $index + 1 }}" readonly>
								</div>
							</td>
							<td style="min-width: 135px;">
								<div class='form-group no-margin'>
									<ui-select ng-model="item.je_account_code.code" theme="selectize" class="form-control">
										<ui-select-match>{{$select.selected.coa_code}}</ui-select-match>
										<ui-select-choices repeat="item in je_account_code | filter: $select.search">
										  <div ng-bind-html="item.coa_code | highlight: $select.search"></div>
										</ui-select-choices>
									</ui-select>
									<input name='je_acc_code[]' type='hidden' class='form-control' value='{{item.je_account_code.code.coa_id}}'>
								</div>
							</td>
							<td>
								<div class='form-group no-margin'>
									<ui-select ng-model="item.je_account_code.code" theme="selectize" class="form-control">
										<ui-select-match>{{$select.selected.coa_name}}</ui-select-match>
										<ui-select-choices repeat="item in je_account_code | filter: $select.search">
										  <div ng-bind-html="item.coa_name | highlight: $select.search"></div>
										</ui-select-choices>
									</ui-select>
									<input name='je_acc_name[]' type='hidden' class='form-control' value='{{item.je_account_code.code.coa_name}}'>
								</div>
							</td>
							<td>
								<div class='form-group no-margin'>
									<input name='je_debit_credit[]' ng-model="item.debit_credit" type='text' class='form-control' style="text-align: center;">
								</div>
							</td>
							<td>
								<div class='form-group no-margin disabled-form-group'>
									<input name='je_debit_amount[]' value="{{item.debit_amount}}" type='text' class='form-control' onkeypress="decimalValidation(event)" style="text-align: center;" readonly>
								</div>
							</td>
							<td>
								<div class='form-group no-margin disabled-form-group'>
									<input name='je_credit_amount[]' value="{{item.credit_amount}}" type='text' class='form-control' onkeypress="decimalValidation(event)" style="text-align: center;" readonly>
								</div>
							</td>
							<td style="min-width: 135px;">
								<div class='form-group no-margin'>
									<ui-select ng-model="item.je_pcc_code.code" theme="selectize" class="form-control">
										<ui-select-match>{{$select.selected.co_pcc_name}}</ui-select-match>
										<ui-select-choices repeat="item in je_pcc_code | filter: $select.search">
										  <div ng-bind-html="item.co_pcc_name | highlight: $select.search"></div>
										</ui-select-choices>
									</ui-select>
									<input name='je_pcc_code[]' type='hidden' class='form-control' value='{{item.je_pcc_code.code.co_pcc_id}}'>
								</div>
							</td>
							<td style="min-width: 135px;">
								<div class='form-group no-margin'>
									<ui-select ng-model="item.je_dept_code.code" theme="selectize" class="form-control">
										<ui-select-match>{{$select.selected.co_de_name}}</ui-select-match>
										<ui-select-choices repeat="item in je_dept_code | filter: $select.search">
										  <div ng-bind-html="item.co_de_name | highlight: $select.search"></div>
										</ui-select-choices>
									</ui-select>
									<input name='je_dept_code[]' type='hidden' class='form-control' value='{{item.je_dept_code.code.co_de_id}}'>
								</div>
							</td>
							<td ng-if='item.delete_btn === false'></td>
								<td ng-if='item.delete_btn === true'><button class='btn btn-raised btn-danger btn-xs' ng-click='je_delete_row($event, $index)' type='button' style='margin-left: 10%; margin-bottom: 0;'><i class='fa fa-times'></i></button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div style='margin: 0; position: fixed; bottom: 0; width: 96%; background-color: #FFF;'>
			<button class='btn btn-raised btn-info v-submit-transaction' type='button' style="float: right; margin-right: 10px;">SAVE</button>
		</div>
	</form>
</div>

<div id='prod-serv-modal' class='modal fade-scale' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button type="button" class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4>Add Product</h4>
			</div>
			<form action='<?php echo base_url(); ?>journals/add_product' method='post' class='body'>
				<div class='modal-body'>
					<table width='90%'>
						<tr  class='add-department'>
							<td style='width: 150px; text-align: right; padding-right: 20px;'><label>Department</label></td>
							<td colspan='3'>
								<select name='add-department' class='v-select-required' title="Please fill out this field" placeholder='Select...'></select>
							</td>
						</tr>
						<tr class='add-profit-cost-center'>
							<td style='width: 150px; text-align: right; padding-right: 20px;'><label>Profit Cost Center</label></td>
							<td colspan='3'>
								<select name='add-pcc' class='v-select-required' title="Please fill out this field" placeholder='Select...'></select>
							</td>
						</tr>
						<tr>
							<td style='width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
							<td colspan='3'><input class='form-control v-required' title="Please fill out this field" type='text' name='add-name'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
							<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='add-shortname'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Description</label></td>
							<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='add-description'></td>
						</tr>
					</table>
				</div>
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div id='vat-modal' class='modal fade-scale' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button type="button" class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4>Add Business Partner VAT</h4>
			</div>
			<form action='<?php echo base_url(); ?>journals/add_bp_vat' method='post' class='body'>
				<div class='modal-body'>
					<table width='90%'>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Business Partner</label></td>
							<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" placeholder='Please select business partner first' type='text' name='add-name' readonly>
							<input name='co_bp_id' type="hidden"></td>
						</tr>
					</table>
					<table width='90%'>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Value Added Tax'><label>VAT</label></td>
							<td style='padding-top: 5px;'>
								<select class='v-select-required' id='add-tax-1' name='t_id' placeholder='Select...'></select>
							</td>
						</tr>
					</table>
					<table class='add-vat-row-plate' width='100%'>
					</table>
				</div>
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div id='discount-modal' class='modal fade-scale' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button type="button" class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4>Add Discount</h4>
			</div>
			<form action='<?php echo base_url(); ?>journals/add_discount' method='post' class='body'>
				<div class='modal-body'>
					<table width='90%'>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
							<td colspan='3' style='padding-top: 5px;'><input name='add-name' class='form-control v-required' title="Please fill out this field" type='text'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
							<td colspan='3' style='padding-top: 5px;'><input name='add-shortname' class='form-control' type='text'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Rate</label></td>
							<td colspan='3' style='padding-top: 5px;'><input name='add-rate' class='form-control v-required v-decimal' title="Please fill out this field" type='text'></td>
						</tr>
					</table>
				</div>
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div id='ewt-modal' class='modal fade-scale' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button type="button" class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4>Add Business Partner EWT</h4>
			</div>
			<form action='<?php echo base_url(); ?>journals/add_bp_ewt' method='post' class='body'>
				<div class='modal-body'>
					<table width='90%'>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Business Partner</label></td>
							<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" placeholder='Please select business partner first' type='text' name='add-name' readonly></td>
							<input name='co_bp_id' type="hidden"></td>
						</tr>
					</table>
					<table width='90%'>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Expanded Withholding Tax'><label>EWT</label></td>
							<td style='padding-top: 5px;'>
								<select class='v-select-required' name='t_id' placeholder='Select...'></select>
							</td>
						</tr>
					</table>
				</div>
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div id='fwt-modal' class='modal fade-scale' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button type="button" class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4>Add Business Partner FWT</h4>
			</div>
			<form action='<?php echo base_url(); ?>journals/add_bp_fwt' method='post' class='body'>
				<div class='modal-body'>
					<table width='90%'>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Business Partner</label></td>
							<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" placeholder='Please select business partner first' type='text' name='add-name' readonly></td>
							<input name='co_bp_id' type="hidden"></td>
						</tr>
					</table>
					<table width="90%">
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Final Withholding Tax'><label>FWT</label></td>
							<td style='padding-top: 5px;'>
								<select class='v-select-required' name='t_id' placeholder='Select...'></select>
							</td>
						</tr>
					</table>
				</div>
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div id='bank-modal' class='modal fade-scale' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button type="button" class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4>Add Bank</h4>
			</div>
			<form action='<?php echo base_url(); ?>journals/add_bank' method='post' class='body'>
				<div class='modal-body'>
					<table width='90%'>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
							<td colspan='3' style='padding-top: 5px;'><input name='add-name' class='form-control v-required' title="Please fill out this field" type='text'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
							<td colspan='3' style='padding-top: 5px;'><input name='add-shortname' class='form-control v-required' title="Please fill out this field" type='text'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Account No.</label></td>
							<td colspan='3' style='padding-top: 5px;'><input name='add-acc-no' class='form-control v-required v-number v-format' f='^[0-9]{12}$' title='12 digit account number' type='text'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
							<td colspan='3' style='padding-top: 5px;'><input name='add-classification' class='form-control v-required' type='text'></td>
						</tr>
					</table>
				</div>
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div id='bank-acc-modal' class='modal fade-scale' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button type="button" class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4>Add Bank</h4>
			</div>
			<form action='<?php echo base_url(); ?>journals/add_bank' method='post' class='body'>
				<div class='modal-body'>
					<table width='90%'>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
							<td colspan='3' style='padding-top: 5px;'><input name='add-name' class='form-control v-required' title="Please fill out this field" type='text'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
							<td colspan='3' style='padding-top: 5px;'><input name='add-shortname' class='form-control v-required' title="Please fill out this field" type='text'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Account No.</label></td>
							<td colspan='3' style='padding-top: 5px;'><input name='add-acc-no' class='form-control v-required v-number v-format' f='^[0-9]{12}$' title='12 digit account number' type='text'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
							<td colspan='3' style='padding-top: 5px;'><input name='add-classification' class='form-control v-required' type='text'></td>
						</tr>
					</table>
				</div>
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div id='mop-modal' class='modal fade-scale' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button type="button" class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4>Add Mode of Payment</h4>
			</div>
			<form action='<?php echo base_url(); ?>journals/add_mop' method='post' class='body'>
				<div class='modal-body'>
					<table width='90%'>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
							<td colspan='3' style='padding-top: 5px;'>
								<select name='add-type' class='v-select-required' title="Please fill out this field" placeholder='Select...'></select>
							</td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
							<td colspan='3' style='padding-top: 5px;'><input name='add-name' class='form-control v-required' title="Please fill out this field" type='text'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
							<td colspan='3' style='padding-top: 5px;'><input name='add-shortname' class='form-control' type='text'></td>
						</tr>
					</table>
				</div>
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div id='bp-modal' class='modal fade-scale' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button type="button" class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4>Add Business Partner</h4>
			</div>
			<form action='<?php echo base_url(); ?>journals/add_bp' method='post' class='body'>
				<div class='modal-body' style="overflow-y: auto;">
					<table width='90%'>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Corporate or Individual Name</label></td>
							<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='add-name'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Trade Name</label></td>
							<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='add-trade-name'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
							<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='add-shortname'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Style</label></td>
							<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='add-style'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
							<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='add-address'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
							<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required v-format v-tin' f='^([0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4})$' title='TIN Format: xxx-xxx-xxx-xxxx' type='text' name='add-tin'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Particulars</label></td>
							<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='add-particulars'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
							<td colspan='3' style='padding-top: 5px;'>
								<select id='add-class' name='add-class' class='v-select-required' title="Please fill out this field" placeholder='Select...'></select>
							</td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'></td>
							<td colspan='3' style='padding-top: 5px;'>
								<input class='form-control' name='new-class' readonly></select>
							</td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
							<td colspan='3' style='padding-top: 5px;'>
								<select id='add-type' name='add-type' class='v-select-required' title="Please fill out this field" placeholder='Select...'></select>
							</td>
						</tr>
					</table>
					<table width='99.2%'>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Value Added Tax'><label>VAT</label></td>
							<td style='padding-top: 5px;'>
								<select id='add-tax-1' name='add-tax-1[]' placeholder='Select...'></select>
							</td>
							<td style="width: 50px;">
								<button id='add-vat-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
							</td>
						</tr>
					</table>
					<table class='add-vat-row-plate' width='99.2%'>
					</table>
					<table width='99.2%'>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Expanded Withholding Tax'><label>EWT</label></td>
							<td style='padding-top: 5px;'>
								<select id='add-tax-2' name='add-tax-2[]' placeholder='Select...'></select>
							</td>
							<td style="width: 50px;">
								<button id='add-ewt-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
							</td>
						</tr>
					</table>
					<table class='add-ewt-row-plate' width='99.2%'>
					</table>
					<table width="99.2%">
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Final Withholding Tax'><label>FWT</label></td>
							<td style='padding-top: 5px;'>
								<select id='add-tax-3' name='add-tax-3[]' placeholder='Select...'></select>
							</td>
							<td style="width: 50px;">
								<button id='add-fwt-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
							</td>
						</tr>
					</table>
					<table class='add-fwt-row-plate' width='99.2%'>
					</table>
				</div>
				<input type="hidden" name="bpc_code">
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
				</div>
			</form>
		</div>
	</div>
</div>