				<div class="side-body padding-top" id='journal-navs' ng-app='journals' ng-controller='transaction'>
					<div id='animated-container' class='row' style='-webkit-animation-duration: 0.5s; margin-top: 20px;'>
						<div class='col-md-12'>
							<div role="tabpanel">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a class='text-black' href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Summary</a></li>
									<li role="presentation"><a class='text-black' class='text-black' href="#business-partners" aria-controls="business-partners" role="tab" data-toggle="tab">Business Partners</a></li>
									<li role="presentation"><a class='text-black' href="#new-transactions" aria-controls="new-transactions" role="tab" data-toggle="tab">New Transactions</a></li>
									<li role="presentation"><a class='text-black' href="#documents" aria-controls="documents" role="tab" data-toggle="tab">Purchase Invoice</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="summary">
										<div class='card'>
											<div class='card-body' style='padding-top: 10px;'>
												<table id='purchases-journal-summary-table' class='table table-hover table-bordered' cellspacing="0" style='min-width: 1400px;'>
													<thead>
														<th>Trans ID</th>
														<th>Trans Date</th>
														<th>Journal</th>
														<th>Journal ID</th>
														<th>Document</th>
														<th>Doc No</th>
														<th>Doc Date</th>
														<th>BP Name</th>
														<th>Particulars</th>
														<th>Payment Type</th>
														<th>Gross Amount</th>
														<th>Net Amount</th>
													</thead>
												</table>
											</div>
										</div>
										
										<div id='summary-document-details-card' class='card box box-primary' style='margin: 0;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title box-title'>Document Details</div>
												</div>
												<div class="box-tools pull-right">
													<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
												</div>
											</div>
											<div class='card-body box-body' style="padding-top: 0;">
												<div class="box box-primary collapsed-box" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Products/Services</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Product Service Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Product Description</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Quantity</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Unit</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Unit Price</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Gross Amount</th>
															</thead>
															<tbody id='summary-prod-serv'>
																<tr>
																	<td colspan='6' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover no-padding' style='width: 76.3%; margin-left: 23.75%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 7.71%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label>
																	</td>
																	<td style="width: 15.1%">
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_prod_serv_qty' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td style="width: 15.1%">
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_prod_serv_unit' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td style='width: 15.1%;'>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_prod_serv_unit_price' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td style='width: 15%;'>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_prod_serv_gross' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary collapsed-box" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>VAT</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Tax Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 194px;'>Nature</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>VAT Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Net VAT Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Gross Amount</th>
															</thead>
															<tbody id='summary-vat'>
																<tr>
																	<td colspan='6' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover no-padding' style='width: 75.25%; margin-left: 24.79%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 9.5%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_vat_rate' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_vat_amount' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_vat_net' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_vat_gross' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary collapsed-box" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Discounts</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Deduction Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 220px;'>Nature</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Deduction</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>SC ID</th>
															</thead>
															<tbody id='summary-discount'>
																<tr>
																	<td colspan='5' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover table-striped no-padding' style='width: 49.7%; margin-left: 28.4%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 11.5%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_discount_rate' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_discount_deduction' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary collapsed-box" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Expanded Withholding Tax</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Tax Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 238px;'>Nature</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Base</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Withheld</th>
															</thead>
															<tbody id='summary-ewt'>
																<tr>
																	<td colspan='5' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover table-striped no-padding' style='width: 71%; margin-left: 29.05%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 9.2%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_ewt_rate' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_ewt_tax_base' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																		
																	</td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_ewt_tax_withheld' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary collapsed-box" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Final Withholding Tax</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Tax Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 238px;'>Nature</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Base</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Withheld</th>
															</thead>
															<tbody id='summary-fwt'>
																<tr>
																	<td colspan='5' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover table-striped no-padding' style='width: 70.9%; margin-left: 29.1%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 9.2%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_fwt_rate' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_fwt_tax_base' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_fwt_tax_withheld' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary collapsed-box" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Document Reference</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Document Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Number</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Date</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Gross Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Net Amount</th>
															</thead>
															<tbody id='summary-doc-ref'>
																<tr>
																	<td colspan='5' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover table-striped no-padding' style='width: 55%; margin-top: 0; border: none; margin-left: 45%;'>
															<tbody id='document-reference-table'>
																<tr>
																	<td style='width: 7.2%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
																	<td style='width: 17%'>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_doc_ref_gross' class='form-control' type='text' style='text-align: center;' readonly >
																		</div>
																	</td>
																	<td style="width: 15.3%;">
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_doc_ref_net_amount' class='form-control' type='text' style='text-align: center;' readonly >
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary collapsed-box" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Bank Details</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Bank Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Name</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Bank Account Number</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Bank Document</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Date</th>
															</thead>
															<tbody id='summary-bank'>
																<tr>
																	<td colspan='6' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover no-padding' style='width: 21.2%; margin-left: 61.1%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 9.3%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_bank_amount' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary collapsed-box" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Other Details</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered no-margin'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Prepared By</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Verified By</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Approved By</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Received By</th>
															</thead>
															<tbody id='summary-other'>
																<tr>
																	<td colspan='4' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										
										<div id='summary-journal-entries-card' class='card box box-primary collapsed-box' style='margin: 0;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title box-title'>Journal Entries</div>
												</div>
												<div class="box-tools pull-right">
													<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
												</div>
											</div>
											<div class='card-body box-body' style="padding-top: 10px;">
												<table class='table table-bordered no-margin'>
													<thead class='journal-entry-th'>
														<th>JE Number</th>
														<th>Transaction Code</th>
														<th>JE Sequence Number</th>
														<th>Account Code</th>
														<th>Account Name</th>
														<th>Debit(Credit)</th>
														<th>Debit Amount</th>
														<th>Credit Amount</th>
														<th>Profit Center Code</th>
														<th>Department Code Name</th>
													</thead>
													<tbody class='journal-entry'>
														<tr>
															<td colspan='10' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
														</tr>
													</tbody>
												</table>	
											</div>
										</div>
										
										<div id='summary-document' class='card box box-primary collapsed-box' style='margin: 0;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title box-title'>Document</div>
												</div>
												<div class="box-tools pull-right">
													<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
												</div>
											</div>
											<div class='card-body box-body' style="padding: 0;">
												<div class='row'>
													<div class='col-md-12' style='margin-bottom: 0; border: none !important'>
														<div class='card' style='padding-bottom: 10px;'>
															<div class='card-body' style='padding: 25px; padding-top: 20px; padding-bottom: 0;'>
																<div class='col-md-12' style='padding-left: 24% !important; background-color: #404040; color: #FFF; width: 100.4%; margin-left: -0.2%;'>
																	<table class='docu_top' width='100%'>
																		<tr>
																			<td style='width: 100px;'><label style='margin: 0;'>Transaction ID:</label></td>
																			<td style='width: 122px;'><input name='transaction_id' type='text' class='form-control' style='width: 50px; border: none; background-color: #404040; color: #FFF; text-decoration: underline;' readonly /></td>
																			<td style='width: 120px;'><label style='margin: 0;'>Transaction Date:</label></td>
																			<td style='width: 100px;'><input name='transaction_date' type='text' class='form-control' style='width: 150px; border: none; background-color: #404040; color: #FFF; text-decoration: underline;' readonly /></td>
																			<td style='width: 150px;'><label style='margin: 0;'>Journal Transaction ID</label></td>
																			<td><input name='journal_trans_id' type='text' class='form-control' style='width: 50px; border: none; background-color: #404040; color: #FFF; text-decoration: underline;' readonly /></td>
																		</tr>
																	</table>
																</div>
																
																<div class='row' style='padding-left: 1%; padding-right: 1%;'>
																	<table width='100%'>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Company</label></td>
																			<td style='padding-left: 5px;'><input name='company_name' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='document_name' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Document</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Company Address</label></td>
																			<td style='padding-left: 5px;'><input name='company_address' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='document_number' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Document Number</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Company TIN</label></td>
																			<td style='padding-left: 5px;'><input name='company_tin' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='document_date' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Document Date</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Name</label></td>
																			<td style='padding-left: 5px;'><input name='bp_name' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='payment_type' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Payment</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Address</label></td>
																			<td style='padding-left: 5px;'><input name='bp_address' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='terms' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Terms</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>TIN</label></td>
																			<td style='padding-left: 5px;'><input name='tin' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='due_date' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Due Date</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Business type</label></td>
																			<td style='padding-left: 5px;'><input name='bp_type' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'>&nbsp;</td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'>&nbsp;</td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; padding-bottom: 40px;'><label>Particulars</label></td>
																			<td colspan='3' style='padding-left: 5px; padding-bottom: 40px;'><input name='particulars' class='form-control' type='text' style='border: none; background-color: #FFF;' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'>&nbsp;</td>
																		</tr>
																	</table>
																</div>
															
																<div class='row' style='padding-left: 1%; padding-right: 1%;'>
																	<table class='table table-hover table-bordered table-responsive' style='width: 100%; margin: 0; border-top: none; border-color: #BBBBBB;'>
																		<thead style='text-align: center; border-bottom: none;'>
																			<th style='background-color: #BBBBBB; border-bottom: none; color: #000; text-align: right;'>Details</th>
																			<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Product Service Description</th>
																			<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Quantity</th>
																			<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Unit</th>
																			<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Unit Price</th>
																			<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Amount</th>
																			<th style='background-color: #BBBBBB; border-bottom: none;'></th>
																		</thead>
																		<tbody class='product_services'>
																			<tr>
																				<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															
																<div class='row' style='padding-left: 1%; padding-right: 1%;'>
																	<table width='100%'>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Mode of Payment<label></td>
																			<td style='padding-left: 5px;'><input name='payment_mode' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='vat' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>VAT</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Payment Amount</label></td>
																			<td style='padding-left: 5px;'><input name='payment_amount' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='vat_purchases' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>VAT Sales</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Number</label></td>
																			<td style='padding-left: 5px;'><input name='check_number' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='zero_rated_purchases' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Zero rated purchases</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Date</label></td>
																			<td style='padding-left: 5px;'><input name='check_date' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='exempt_purchases' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Exempt Sales</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Payee</label></td>
																			<td style='padding-left: 5px;'><input name='check_payee' class='form-control' type='text' style='border: none; background-color: #FFF'  readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='non_vat_purchases' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Non-VAT Sales</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Bank</label></td>
																			<td style='padding-left: 5px;'><input name='bank' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='total' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Total</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Account Number</label></td>
																			<td style='padding-left: 5px;'><input name='account_number' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='withholding_tax' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Withholding Tax</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'></td>
																			<td style='padding-left: 5px;'></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='final_tax_withheld' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Final Tax Withheld</label></td>
																		</tr>
																	</table>
																</div>
																
																<div class='row' style='padding-left: 1%; padding-right: 1%; margin-top: -1px'>
																	<table width='100%'>
																		<tr>
																			<td>
																				<table style='margin-top: -15px;'>
																					<tr>
																						<td style='text-align: right; vertical-align: top; background-color: #BBBBBB; color: #000; width: 200px; padding-top: 10px; padding-right: 10px;'><label>Document Reference</label></td>
																						<td style='padding-left: 10px;'>
																							<table class='table table-hover table-bordered table-striped'>
																								<thead>
																									<th style='background-color: #D4D4D4; color: #000;'>Document Number</th>
																									<th style='background-color: #D4D4D4; color: #000;'>Amount</th>
																								</thead>
																								<tbody>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									
																								</tbody>
																							</table>	
																						</td>
																					</tr>
																				</table>
																			</td>
																			<td>&nbsp;</td>
																			<td>&nbsp;</td>
																			<td>&nbsp;</td>
																			<td style='vertical-align: top; width: 31.3%;'>
																				<table width='100%'>
																					<tr>
																						<td style='padding-top: 20px;'><input type='text' name='sc_discount' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000; padding-top: 20px;'><label>SC Discount</label></td>
																					</tr>
																					<tr>
																						<td><input name='sc_id' type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>SC ID</label></td>
																					</tr>
																					<tr>
																						<td><input name='cash_discount' type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Cash Discount</label></td>
																					</tr>
																					<tr>
																						<td><input name='net_amount' type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Net Amount</label></td>
																					</tr>
																					<tr>
																						<td>&nbsp;</td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'>&nbsp;</td>
																					</tr>
																					<tr>
																						<td><input name='prepared_by' type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Prepared by</label></td>
																					</tr>
																					<tr>
																						<td><input name='prepared_date' type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Date</label></td>
																					</tr>
																					<tr>
																						<td><input name='received_by' type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Received by</label></td>
																					</tr>
																					<tr>
																						<td><input name='received_date' type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Date</label></td>
																					</tr>
																				</table>
																			</td>
																		</tr>

																	</table>
																</div>
																
															</div>
														</div>
																
													</div>
												</div>
											
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="business-partners">
										<div class='card'>
											<div class='card-body' style='padding-top: 10px;'>
												<table id='purchases-bp-table' class='table table-hover table-bordered table-striped table-responsive' cellspacing="0" style="min-width: 1200px">
													<thead>
														<th>BP Class</th>
														<th>BP Code</th>
														<th>BP Name</th>
														<th>BP Address</th>
														<th>BP TIN</th>
														<th>Tax Code 1</th>
														<th>Tax Code 2</th>
														<th>Tax Code 3</th>
													</thead>
												</table>
											</div>
										</div>
										
										<div id='bp-transaction-details' class='card box box-primary collapsed-box' style='margin: 0;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title box-title'>Transaction Details</div>
												</div>
												<div class="box-tools pull-right">
													<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
												</div>
											</div>
											<div class='card-body box-body' style="padding-top: 10px;">
												<table id='purchases-transaction-details-table' class='table table-bordered table-hovered table-striped' style='min-width: 1400px;'>
													<thead>
														<th>Trans ID</th>
														<th>Trans Date</th>
														<th>Journal</th>
														<th>Journal ID</th>
														<th>Document</th>
														<th>Doc No</th>
														<th>Doc Date</th>
														<th>Particulars</th>
														<th>Payment Type</th>
														<th>Gross Ammount</th>
														<th>Net Ammount</th>
													</thead>
													<tbody>
													</tbody>
												</table>
											</div>
										</div>
										
										<div id='bp-document-details' class='card box box-primary collapsed-box' style='margin: 0;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title box-title'>Document Details</div>
												</div>
												<div class="box-tools pull-right">
													<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
												</div>
											</div>
											<div class='card-body box-body' style="padding-top: 0;">
												<div class="box box-primary collapsed-box" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Products/Services</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Product Service Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Product Description</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Quantity</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Unit</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Unit Price</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Gross Amount</th>
															</thead>
															<tbody id='bp-trans-prod-serv'>
																<tr>
																	<td colspan='6' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover no-padding' style='width: 76.3%; margin-left: 23.75%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 7.71%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label>
																	</td>
																	<td style="width: 15.1%">
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_prod_serv_qty' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td style="width: 15.1%">
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_prod_serv_unit' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td style='width: 15.1%;'>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_prod_serv_unit_price' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td style='width: 15%;'>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_prod_serv_gross' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary collapsed-box" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>VAT</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Tax Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 194px;'>Nature</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>VAT Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Net VAT Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Gross Amount</th>
															</thead>
															<tbody id='bp-trans-vat'>
																<tr>
																	<td colspan='6' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover no-padding' style='width: 75.25%; margin-left: 24.79%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 9.5%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_vat_rate' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_vat_amount' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_vat_net' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_vat_gross' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary collapsed-box" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Discounts</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Deduction Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 220px;'>Nature</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Deduction</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>SC ID</th>
															</thead>
															<tbody id='bp-trans-discount'>
																<tr>
																	<td colspan='5' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover table-striped no-padding' style='width: 49.7%; margin-left: 28.4%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 11.5%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_discount_rate' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_discount_deduction' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary collapsed-box" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Expanded Withholding Tax</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Tax Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 238px;'>Nature</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Base</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Withheld</th>
															</thead>
															<tbody id='bp-trans-ewt'>
																<tr>
																	<td colspan='5' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover table-striped no-padding' style='width: 71%; margin-left: 29.05%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 9.2%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_ewt_rate' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_ewt_tax_base' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																		
																	</td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_ewt_tax_withheld' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary collapsed-box" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Final Withholding Tax</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Tax Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 238px;'>Nature</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Base</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Withheld</th>
															</thead>
															<tbody id='bp-trans-fwt'>
																<tr>
																	<td colspan='5' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover table-striped no-padding' style='width: 70.9%; margin-left: 29.1%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 9.2%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_fwt_rate' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_fwt_tax_base' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_fwt_tax_withheld' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary collapsed-box" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Document Reference</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Document Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Number</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Date</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Gross Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Net Amount</th>
															</thead>
															<tbody id='bp-trans-doc-ref'>
																<tr>
																	<td colspan='5' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover table-striped no-padding' style='width: 55%; margin-top: 0; border: none; margin-left: 45%;'>
															<tbody id='document-reference-table'>
																<tr>
																	<td style='width: 7.2%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
																	<td style='width: 17%'>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_doc_ref_gross' class='form-control' type='text' style='text-align: center;' readonly >
																		</div>
																	</td>
																	<td style="width: 15.3%;">
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_doc_ref_net_amount' class='form-control' type='text' style='text-align: center;' readonly >
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary collapsed-box" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Bank Details</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered no-margin' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Bank Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Name</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Bank Account Number</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Bank Document</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Date</th>
															</thead>
															<tbody id='bp-trans-bank'>
																<tr>
																	<td colspan='6' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover no-padding' style='width: 21.2%; margin-left: 61.1%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 9.3%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
																	<td>
																		<div class='form-group no-margin disabled-form-group'>
																			<input name='t_bank_amount' class='form-control' type='text' style='text-align: center;' readonly>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary collapsed-box" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Other Details</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool btn-sm" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered no-margin'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Prepared By</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Verified By</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Approved By</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Received By</th>
															</thead>
															<tbody id='bp-trans-other'>
																<tr>
																	<td colspan='4' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										
										<div id='bp-journal-entries' class='card box box-primary collapsed-box' style='margin: 0;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title box-title'>Journal Entries</div>
												</div>
												<div class="box-tools pull-right">
													<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
												</div>
											</div>
											<div class='card-body box-body' style="padding-top: 10px;">
												<table class='table table-bordered no-margin'>
													<thead class='journal-entry-th'>
														<th>JE Number</th>
														<th>Transaction Code</th>
														<th>JE Sequence Number</th>
														<th>Account Code</th>
														<th>Account Name</th>
														<th>Debit(Credit)</th>
														<th>Debit Amount</th>
														<th>Credit Amount</th>
														<th>Profit Center Code</th>
														<th>Department Code Name</th>
													</thead>
													<tbody class='journal-entry'>
														<tr>
															<td colspan='10' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
														</tr>
													</tbody>
												</table>	
											</div>
										</div>
										
										<div id='bp-document' class='card box box-primary collapsed-box' style='margin: 0;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title box-title'>Document</div>
												</div>
												<div class="box-tools pull-right">
													<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
												</div>
											</div>
											<div class='card-body box-body' style="padding: 0;">
												<div class='row'>
													<div class='col-md-12' style='margin-bottom: 0; border: none !important'>
														<div class='card' style='padding-bottom: 10px;'>
															<div class='card-body' style='padding: 25px; padding-top: 20px; padding-bottom: 0;'>
																<div class='col-md-12' style='padding-left: 24% !important; background-color: #404040; color: #FFF; width: 100.4%; margin-left: -0.2%;'>
																	<table class='docu_top' width='100%'>
																		<tr>
																			<td style='width: 100px;'><label style='margin: 0;'>Transaction ID:</label></td>
																			<td style='width: 122px;'><input name='transaction_id' type='text' class='form-control' style='width: 50px; border: none; background-color: #404040; color: #FFF; text-decoration: underline;' readonly /></td>
																			<td style='width: 120px;'><label style='margin: 0;'>Transaction Date:</label></td>
																			<td style='width: 100px;'><input name='transaction_date' type='text' class='form-control' style='width: 150px; border: none; background-color: #404040; color: #FFF; text-decoration: underline;' readonly /></td>
																			<td style='width: 150px;'><label style='margin: 0;'>Journal Transaction ID</label></td>
																			<td><input name='journal_trans_id' type='text' class='form-control' style='width: 50px; border: none; background-color: #404040; color: #FFF; text-decoration: underline;' readonly /></td>
																		</tr>
																	</table>
																</div>
																
																<div class='row' style='padding-left: 1%; padding-right: 1%;'>
																	<table width='100%'>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Company</label></td>
																			<td style='padding-left: 5px;'><input name='company_name' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='document_name' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Document</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Company Address</label></td>
																			<td style='padding-left: 5px;'><input name='company_address' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='document_number' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Document Number</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Company TIN</label></td>
																			<td style='padding-left: 5px;'><input name='company_tin' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='document_date' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Document Date</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Name</label></td>
																			<td style='padding-left: 5px;'><input name='bp_name' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='payment_type' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Payment</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Address</label></td>
																			<td style='padding-left: 5px;'><input name='bp_address' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='terms' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Terms</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>TIN</label></td>
																			<td style='padding-left: 5px;'><input name='tin' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='due_date' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Due Date</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Business type</label></td>
																			<td style='padding-left: 5px;'><input name='bp_type' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'>&nbsp;</td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'>&nbsp;</td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; padding-bottom: 40px;'><label>Particulars</label></td>
																			<td colspan='3' style='padding-left: 5px; padding-bottom: 40px;'><input name='particulars' class='form-control' type='text' style='border: none; background-color: #FFF;' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'>&nbsp;</td>
																		</tr>
																	</table>
																</div>
															
																<div class='row' style='padding-left: 1%; padding-right: 1%;'>
																	<table class='table table-hover table-bordered table-responsive' style='width: 100%; margin: 0; border-top: none; border-color: #BBBBBB;'>
																		<thead style='text-align: center; border-bottom: none;'>
																			<th style='background-color: #BBBBBB; border-bottom: none; color: #000; text-align: right;'>Details</th>
																			<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Product Service Description</th>
																			<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Quantity</th>
																			<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Unit</th>
																			<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Unit Price</th>
																			<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Amount</th>
																			<th style='background-color: #BBBBBB; border-bottom: none;'></th>
																		</thead>
																		<tbody class='product_services'>
																			<tr>
																				<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															
																<div class='row' style='padding-left: 1%; padding-right: 1%;'>
																	<table width='100%'>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Mode of Payment<label></td>
																			<td style='padding-left: 5px;'><input name='payment_mode' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='vat' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>VAT</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Payment Amount</label></td>
																			<td style='padding-left: 5px;'><input name='payment_amount' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='vat_purchases' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>VAT Sales</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Number</label></td>
																			<td style='padding-left: 5px;'><input name='check_number' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='zero_rated_purchases' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Zero rated purchases</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Date</label></td>
																			<td style='padding-left: 5px;'><input name='check_date' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='exempt_purchases' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Exempt Sales</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Payee</label></td>
																			<td style='padding-left: 5px;'><input name='check_payee' class='form-control' type='text' style='border: none; background-color: #FFF'  readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='non_vat_purchases' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Non-VAT Sales</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Bank</label></td>
																			<td style='padding-left: 5px;'><input name='bank' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='total' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Total</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Account Number</label></td>
																			<td style='padding-left: 5px;'><input name='account_number' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='withholding_tax' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Withholding Tax</label></td>
																		</tr>
																		<tr>
																			<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'></td>
																			<td style='padding-left: 5px;'></td>
																			<td>&nbsp;</td>
																			<td style='padding-right: 5px;'><input name='final_tax_withheld' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																			<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Final Tax Withheld</label></td>
																		</tr>
																	</table>
																</div>
																
																<div class='row' style='padding-left: 1%; padding-right: 1%; margin-top: -1px'>
																	<table width='100%'>
																		<tr>
																			<td>
																				<table style='margin-top: -15px;'>
																					<tr>
																						<td style='text-align: right; vertical-align: top; background-color: #BBBBBB; color: #000; width: 200px; padding-top: 10px; padding-right: 10px;'><label>Document Reference</label></td>
																						<td style='padding-left: 10px;'>
																							<table class='table table-hover table-bordered table-striped'>
																								<thead>
																									<th style='background-color: #D4D4D4; color: #000;'>Document Number</th>
																									<th style='background-color: #D4D4D4; color: #000;'>Amount</th>
																								</thead>
																								<tbody>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									<tr>
																										<td>&nbsp;</td>
																										<td></td>
																									</tr>
																									
																								</tbody>
																							</table>	
																						</td>
																					</tr>
																				</table>
																			</td>
																			<td>&nbsp;</td>
																			<td>&nbsp;</td>
																			<td>&nbsp;</td>
																			<td style='vertical-align: top; width: 31.3%;'>
																				<table width='100%'>
																					<tr>
																						<td style='padding-top: 20px;'><input type='text' name='sc_discount' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000; padding-top: 20px;'><label>SC Discount</label></td>
																					</tr>
																					<tr>
																						<td><input name='sc_id' type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>SC ID</label></td>
																					</tr>
																					<tr>
																						<td><input name='cash_discount' type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Cash Discount</label></td>
																					</tr>
																					<tr>
																						<td><input name='net_amount' type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Net Amount</label></td>
																					</tr>
																					<tr>
																						<td>&nbsp;</td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'>&nbsp;</td>
																					</tr>
																					<tr>
																						<td><input name='prepared_by' type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Prepared by</label></td>
																					</tr>
																					<tr>
																						<td><input name='prepared_date' type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Date</label></td>
																					</tr>
																					<tr>
																						<td><input name='received_by' type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Received by</label></td>
																					</tr>
																					<tr>
																						<td><input name='received_date' type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																						<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Date</label></td>
																					</tr>
																				</table>
																			</td>
																		</tr>

																	</table>
																</div>
																
															</div>
														</div>
																
													</div>
												</div>
											
											</div>
										</div>
										
									</div>
									<div role="tabpanel" class="tab-pane" id="new-transactions">
										<form action="<?php echo base_url(); ?>journals/save_purchase_trans" method='post'>
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
																<input name='journal_transaction_id' ng-model='journal_transaction_id' type='text' id='input-transaction-date' class='form-control' name='input-transaction-date' style='color: #000C98; text-align: center;' readonly />
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
															<input name='doc_name' id='doc_name' ng-model='document_name' class='form-control' type='text' style='text-align: center; color: #000C98;' readonly />
														</div>
														<div class='col-md-3 col-input-custom form-group label-floating has-primary'>
															<label class='control-label' for='doc_number'>Number</label>
															<input name='doc_number' id='doc_number' ng-model='document_number' class='form-control number' type='text' style='color: #000C98; text-align: center;'/>
														</div>
														<div class='col-md-3 col-input-custom form-group label-floating has-primary'>
															<label class='control-label' for='doc_date'>Date</label>
															<input name='doc_date' id='doc_date' ng-model='document_date' class='form-control' style='color: #000C98; text-align: center;' type='date' />
														</div>
													</div>
													<div class='col-md-12 transaction-input-row-gutter' style='margin-top: 5px;'>
														<div class='col-md-1 col-custom' style='text-align: right;'>
															<label style='font-size: 12px; color: #000; text-align: right;'>Business Partner</label>
														</div>
														<div class='col-md-3 col-input-custom form-group label-floating has-primary trans-select'>
															<label class='control-label' for='bp_name'>Name</label>
															<ui-select id='bp_name' ng-model="selected_bp.bp" theme="selectize" class="form-control">
																<ui-select-match>{{$select.selected.bp_name}}</ui-select-match>
																<ui-select-choices repeat="bp in business_partner_array | filter: $select.search">
																  <div ng-bind-html="bp.bp_name | highlight: $select.search"></div>
																</ui-select-choices>
															</ui-select>
															<input name='bp_id' type="hidden" value='{{selected_bp.bp.co_bp_id}}'>
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
															<input name='particulars_period' id='particular_period' ng-model='particulars_period' type='text' class='form-control number' style='color: #000C98; text-align: center;' />
														</div>
														<div class='col-md-3 col-input-custom form-group label-floating has-primary'>
															<label class='control-label' for='particular_remark'>Remarks</label>
															<input name='particulars_remark' id='particular_remark' ng-model='particulars_remarks' type='text' class='form-control' style='color: #000C98; text-align: center;' />
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
															<ui-select ng-model="selected_mop.mop" theme="selectize" class="form-control">
																<ui-select-match>{{$select.selected.mop_name}}</ui-select-match>
																<ui-select-choices repeat="item in mode_of_payment | filter: $select.search">
																  <div ng-bind-html="item.mop_name | highlight: $select.search"></div>
																</ui-select-choices>
															</ui-select>
															<input name="payment_mode_id" type="hidden" value="{{ selected_mop.mop.co_mop_id }}">
														</div>
														<div class='col-md-2 col-input-custom form-group label-floating has-primary'>
															<label class='control-label'>Amount Paid</label>
															<input name='payment_amount_paid' ng-model='payment_amount_paid' type='text' class='form-control decimal' style='color: #000C98; text-align: center;' />
														</div>
														<div class='col-md-2 col-input-custom form-group label-floating has-primary'>
															<label class='control-label'>Check Number</label>
															<input name='payment_check_number' ng-model='payment_check_number' type='text' class='form-control number' style='color: #000C98; text-align: center;' />
														</div>
														<div class='col-md-2 col-input-custom form-group label-floating has-primary trans-select'>
															<label class='control-label'>Bank</label>
															<ui-select ng-model="selected_bank.bank" theme="selectize" class="form-control">
																<ui-select-match>{{$select.selected.b_shortname}}</ui-select-match>
																<ui-select-choices repeat="bank in banks_array | filter: $select.search">
																  <div ng-bind-html="bank.b_shortname | highlight: $select.search"></div>
																</ui-select-choices>
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
															<input name='amounts_gross_amount' ng-model='amounts_gross_amount'type='text' class='form-control decimal' style='color: #000C98; text-align: center;' />
														</div>
														<div class='col-md-2 col-input-custom form-group label-floating has-primary'>
															<label class='control-label'>VAT</label>
															<input name='amounts_vat' ng-model='amounts_vat' type='text' class='form-control decimal' style='color: #000C98; text-align: center;' />
														</div>
														<div class='col-md-2 col-input-custom form-group label-floating has-primary'>
															<label class='control-label'>TAX Withheld</label>
															<input name='amounts_tax_withheld' ng-model='amounts_tax_withheld' type='text' class='form-control decimal' style='color: #000C98; text-align: center;' />
														</div>
														<div class='col-md-2 col-input-custom form-group label-floating has-primary'>
															<label class='control-label'>Deductions</label>
															<input name='amounts_deductions' ng-model='amounts_deductions' type='text' class='form-control decimal' style='color: #000C98; text-align: center;' />
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
															<input name='variance_gross_amount' ng-model='variance_gross_amount' type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
														</div>
														<div class='col-md-2 col-input-custom form-group label-floating has-primary disabled-form-group'>
															<label class='control-label'>VAT</label>
															<input name='variance_vat' ng-model='variance_vat' type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
														</div>
														<div class='col-md-2 col-input-custom form-group label-floating has-primary disabled-form-group'>
															<label class='control-label'>TAX Withheld</label>
															<input name='variance_tax_withheld' ng-model='variance_tax_withheld' type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
														</div>
														<div class='col-md-2 col-input-custom form-group label-floating has-primary disabled-form-group'>
															<label class='control-label'>Deductions</label>
															<input name='variance_deductions' ng-model='variance_deductions' type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
														</div>
														<div class='col-md-2 col-input-custom form-group label-floating has-primary disabled-form-group'>
															<label class='control-label'>Net Amount</label>
															<input name='variance_net_amount' ng-model='variance_net_amount' type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
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
													<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
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
																	<th style='text-align: center; background-color: #D4D4D4; color: #000; width: 184px;'>Product Service Code</th>
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
																					<ui-select-match>{{$select.selected.d_code}}</ui-select-match>
																					<ui-select-choices repeat="item in product_services_code | filter: $select.search">
																					  <div ng-bind-html="item.d_code | highlight: $select.search"></div>
																					</ui-select-choices>
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
																			<div class='form-group no-margin'>
																				<input name='product_services_qty[]' ng-model='product_services.qty' class='form-control' type='text' onkeypress="numberValidation(event)" style='text-align: center;'>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin'>
																				<input name='product_services_unit[]' ng-model='product_services.unit' class='form-control' type='text'
																				onkeypress="numberValidation(event)" style='text-align: center;'>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin'>
																				<input name='product_services_unit_price[]' ng-model='product_services.unit_price' class='form-control' type='text' 
																				onkeypress="decimalValidation(event)" style='text-align: center;'>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin'>
																				<input name='product_services_gross_amount[]' ng-model='product_services.gross_amount' class='form-control' type='text' onkeypress="decimalValidation(event)" style='text-align: center;'>
																			</div>
																		</td>
																		<td ng-if='product_services.delete_btn === false'></td>
																		<td ng-if='product_services.delete_btn === true'><button class='btn btn-raised btn-danger btn-xs' ng-click='product_services_delete_row($event, $index)' type='button' style='margin-left: 25%; margin-bottom: 0;'><i class='fa fa-times'></i></button></td>
																	</tr>
																</tbody>
															</table>
															<table class='table table-bordered table-hover no-padding' style='width: 69%; margin-left: 24.75%; margin-top: 0; border: none;'>
																<tbody>
																	<tr>
																		<td style='width: 9.3%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='prod_serv_total_qty' class='form-control' type='text' name='total_qty' style='text-align: center;' readonly>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='prod_serv_total_unit' class='form-control' type='text' name='total_unit' style='text-align: center;' readonly>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='prod_serv_total_unit_price' class='form-control' type='text' name='total_unit_price' style='text-align: center;' readonly>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='prod_serv_total_gross' class='form-control' type='text' name='total_gross_amount[]' style='text-align: center;' readonly>
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
																	<th style='text-align: center; background-color: #D4D4D4; color: #000;'>VAT Amount</th>
																	<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Net VAT Amount</th>
																	<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Gross Amount</th>
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
																				</ui-select>
																				<input name="vat_id[]" value="{{ vat.code.co_t_id }}" type="hidden">
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin trans-select'>
																				<input name="vat_nature[]" type="text" class='form-control' style='text-align: center;' />
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='vat.code.t_rate' ng-init='vat.code.t_rate = 0' class='form-control' type='text' style='text-align: center;' readonly />
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin'>
																				<input name='vat_amount[]'  ng-model='vat.vat' class='form-control' type='text' onkeypress="decimalValidation(event)" style='text-align: center;' />
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin'>
																				<input name='vat_net_vat_amount[]' ng-model='vat.net_vat' class='form-control' type='text' onkeypress="decimalValidation(event)" style='text-align: center;'>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin'>
																				<input name='vat_gross_amount[]' ng-model='vat.gross_amount' class='form-control' type='text' onkeypress="decimalValidation(event)" style='text-align: center;'>
																			</div>
																		</td>
																		<td ng-if='vat.delete_btn === false'></td>
																		<td ng-if='vat.delete_btn === true'><button class='btn btn-raised btn-danger btn-xs' ng-click='vat_delete_row($event, $index)' type='button' style='margin-left: 25%; margin-bottom: 0;'><i class='fa fa-times'></i></button></td>
																	</tr>
																</tbody>
															</table>
															<table class='table table-bordered table-hover no-padding' style='width: 68.25%; margin-left: 25.5%; margin-top: 0; border: none;'>
																<tbody>
																	<tr>
																		<td style='width: 9.3%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='vat_total_rate' class='form-control' type='text' name='total_rate' style='text-align: center;' readonly>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='vat_total_vat' class='form-control' type='text' name='total_vat' style='text-align: center;' readonly>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='vat_total_net_vat' class='form-control' type='text' name='total_net_vat' style='text-align: center;' readonly>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='vat_total_gross' class='form-control' type='text' name='total_gross_amount' style='text-align: center;' readonly>
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
																				</ui-select>
																				<input name="discount_id[]" value="{{ discount.code.co_d_id }}" type="hidden">
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin trans-select'>
																				<input name="discount_nature[]" type="text" class='form-control' style='text-align: center;' />
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='discount.code.co_d_rate' ng-init='discount.code.co_d_rate = 0' class='form-control' type='text' style='text-align: center;' readonly>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin'>
																				<input ng-model='discount.deduction' name='discount_deduction[]' class='form-control' type='text' onkeypress="decimalValidation(event)" style='text-align: center;'>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin'>
																				<input name='discount_sc_id[]' class='form-control' type='text' style='text-align: center;'>
																			</div>
																		</td>
																		<td ng-if='discount.delete_btn === false'></td>
																		<td ng-if='discount.delete_btn === true'><button class='btn btn-raised btn-danger btn-xs' ng-click='discount_delete_row($event, $index)' type='button' style='margin-left: 25%; margin-bottom: 0;'><i class='fa fa-times'></i></button></td>
																	</tr>
																</tbody>
															</table>
															<table class='table table-bordered table-hover table-striped no-padding' style='width: 43.39%; margin-left: 29.5%; margin-top: 0; border: none;'>
																<tbody>
																	<tr>
																		<td style='width: 11%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='discount_total_rate' class='form-control' type='text' name='total_rate' style='text-align: center;' readonly>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='discount_total_deduction' class='form-control' type='text' name='total_deduction' style='text-align: center;' readonly>
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
																				</ui-select>
																				<input name="ewt_id[]" type="hidden" value="{{ ewt.code.co_t_id }}">
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin trans-select'>
																				<input name="ewt_nature[]" type="text" class='form-control' style='text-align: center;' />
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='ewt.code.t_rate' ng-init='ewt.code.t_rate = 0' class='form-control' type='text' style='text-align: center;' readonly>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='ewt.code.t_base' ng-init='ewt.code.t_base = 0' class='form-control' type='text' style='text-align: center;' readonly>
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
															<table class='table table-bordered table-hover table-striped no-padding' style='width: 62.4%; margin-left: 29.99%; margin-top: 0; border: none;'>
																<tbody>
																	<tr>
																		<td style='width: 9.2%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='ewt_total_rate' class='form-control' type='text' name='total_rate' style='text-align: center;' readonly>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='ewt_total_base' class='form-control' type='text' name='total_tax_base' style='text-align: center;' readonly>
																			</div>
																			
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='ewt_total_withheld' class='form-control' type='text' name='total_widthheld' style='text-align: center;' readonly>
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
																				</ui-select>
																				<input name="fwt_id[]" value="{{ fwt.code.co_t_id }}" type="hidden">
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin'>
																				<input name="fwt_nature[]" type="text" class='form-control' style='text-align: center;' />
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='fwt.code.t_rate' ng-init='fwt.code.t_rate = 0' class='form-control' type='text' style='text-align: center;' readonly>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='fwt.code.t_base' ng-init='fwt.code.t_base = 0' class='form-control' type='text' style='text-align: center;' readonly>
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
															<table class='table table-bordered table-hover table-striped no-padding' style='width: 62.4%; margin-left: 29.99%; margin-top: 0; border: none;'>
																<tbody>
																	<tr>
																		<td style='width: 9.2%; border: none; background-color: transparent; text-align: right; vertical-align: middle; padding-right: 10px !important;'><label>Total</label></td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='fwt_total_rate' class='form-control' type='text' name='total_rate' style='text-align: center;' readonly>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='fwt_total_base' class='form-control' type='text' name='total_tax_base' style='text-align: center;' readonly>
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input ng-model='fwt_total_withheld' class='form-control' type='text' name='total_tax_withheld' style='text-align: center;' readonly>
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
																				<input value="{{ amounts_gross_amount }}" class='form-control' type='text' name='gross_amount[]' style='text-align: center;' readonly >
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin disabled-form-group'>
																				<input value="{{ amounts_net_amount }}" class='form-control' type='text' name='net_amount[]' style='text-align: center;' readonly >
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
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
																				<input name="bank_document[]" type="text" class='form-control' style='text-align: center;' />
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
																				<input ng-model='banks_total_amount' class='form-control' type='text' name='total_bank_amount' style='text-align: center;' readonly>
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
																				<input name='verified_by' class='form-control' type='text' style='text-align: center;' >
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin'>
																				<input name='approved_by' class='form-control' type='text' style='text-align: center;' >
																			</div>
																		</td>
																		<td>
																			<div class='form-group no-margin'>
																				<input name='received_by' class='form-control' type='text' style='text-align: center;' >
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
												<div class='card-body box-body' style='display: none; padding: 0 10px 20px 10px;'>
													<add-journal-entry-btn></add-journal-entry-btn>
													<table class='table table-bordered no-margin'>
														<thead style="font-size: 11px;">
															<th>JE Number</th>
															<th>Transaction Code</th>
															<th>JE Sequence Number</th>
															<th>Account Code</th>
															<th>Account Name</th>
															<th>Debit(Credit)</th>
															<th>Debit Amount</th>
															<th>Credit Amount</th>
															<th>Profit Center Code</th>
															<th>Department Code Name</th>
															<th>Option</th>
														</thead>
														<tbody>
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
																	<div class='form-group no-margin'>
																		<input name='je_seq_num[]' type='text' class='form-control' onkeypress="numberValidation(event)" style="text-align: center;">
																	</div>
																</td>
																<td>
																	<div class='form-group no-margin'>
																		<input name='je_acc_code[]' type='text' class='form-control' onkeypress="numberValidation(event)" style="text-align: center;">
																	</div>
																</td>
																<td>
																	<div class='form-group no-margin'>
																		<input name='je_acc_name[]' type='text' class='form-control' style="text-align: center;">
																	</div>
																</td>
																<td>
																	<div class='form-group no-margin'>
																		<input name='je_debit_credit[]' type='text' class='form-control' style="text-align: center;">
																	</div>
																</td>
																<td>
																	<div class='form-group no-margin'>
																		<input name='je_debit_amount[]' type='text' class='form-control' onkeypress="decimalValidation(event)" style="text-align: center;">
																	</div>
																</td>
																<td>
																	<div class='form-group no-margin'>
																		<input name='je_credit_amount[]' type='text' class='form-control' onkeypress="decimalValidation(event)" style="text-align: center;">
																	</div>
																</td>
																<td>
																	<div class='form-group no-margin'>
																		<input name='je_pcc_code[]' type='text' class='form-control' onkeypress="numberValidation(event)" style="text-align: center;">
																	</div>
																</td>
																<td>
																	<div class='form-group no-margin'>
																		<input name='je_dept_code[]' type='text' class='form-control' style="text-align: center;">
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
												<button class='btn btn-raised btn-info' type='submit' style="float: right; margin-right: 10px;">SAVE</button>
											</div>
										</form>
									</div>
									<div role="tabpanel" class="tab-pane" id="documents">
										<div class='row'>
											<div class='col-md-12' style='margin-bottom: 10px;'>
												<div class='card' style='padding-bottom: 10px;'>
													<div class='card-body' style='padding: 25px; padding-top: 20px; padding-bottom: 0;'>
														<div class='col-md-12' style='padding-left: 24% !important; background-color: #404040; color: #FFF;'>
															<table class='docu_top' width='100%'>
																<tr>
																	<td style='width: 100px;'><label style='margin: 0;'>Transaction ID:</label></td>
																	<td style='width: 122px;'><input ng-model='transaction_id' type='text' id='input-transaction-id' class='form-control' name='input-transaction-id' style='width: 50px; border: none; background-color: #404040; color: #FFF; text-decoration: underline;' readonly /></td>
																	<td style='width: 120px;'><label style='margin: 0;'>Transaction Date:</label></td>
																	<td style='width: 155px;'><input ng-model='transaction_date' type='text' id='input-transaction-date' class='form-control' name='input-transaction-date' style='width: 150px; border: none; background-color: #404040; color: #FFF; text-decoration: underline;' readonly /></td>
																	<td style='width: 150px;'><label style='margin: 0;'>Journal Transaction ID</label></td>
																	<td><input ng-model='journal_transaction_id' type='text' id='input-transaction-date' class='form-control' name='input-transaction-date' style='width: 50px; border: none; background-color: #404040; color: #FFF; text-decoration: underline;' readonly /></td>
																</tr>
															</table>
														</div>
														
														<div class='row' style='padding-left: 1%; padding-right: 1%;'>
															<table width='100%'>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Company</label></td>
																	<td style='padding-left: 5px;'><input class='form-control' type='text' value="<?php echo $this->session->userdata('user')->name; ?>" style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input ng-model='document_name' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Document</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Company Address</label></td>
																	<td style='padding-left: 5px;'><input class='form-control' type='text' value="<?php echo $this->session->userdata('user')->cb_address; ?>" style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input ng-model='document_number' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Document Number</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Company TIN</label></td>
																	<td style='padding-left: 5px;'><input class='form-control' type='text' value="<?php echo $this->session->userdata('user')->cb_tin; ?>" style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input value='{{document_date | formatDate}}' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Document Date</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Name</label></td>
																	<td style='padding-left: 5px;'><input ng-model='selected_bp.bp.bp_name' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input ng-model='payment_type' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Payment</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Address</label></td>
																	<td style='padding-left: 5px;'><input ng-model='selected_bp.bp.co_bp_address' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input ng-model='payment_terms' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Terms</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>TIN</label></td>
																	<td style='padding-left: 5px;'><input ng-model='selected_bp.bp.co_bp_tin' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input value='{{ payment_terms | computeDueDate:this }}' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Due Date</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Business type</label></td>
																	<td style='padding-left: 5px;'><input ng-model='selected_bp.bp.bpt_type' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'>&nbsp;</td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'>&nbsp;</td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; padding-bottom: 40px;'><label>Particulars</label></td>
																	<td colspan='3' style='padding-left: 5px; padding-bottom: 40px;'><input ng-model='selected_bp.bp.co_bp_particulars' class='form-control' type='text' style='border: none; background-color: #FFF;' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'>&nbsp;</td>
																</tr>
															</table>
														</div>
													
														<div class='row' style='padding-left: 1%; padding-right: 1%;'>
															<table class='table table-hover table-bordered table-responsive' style='width: 100%; margin: 0; border-top: none; border-color: #BBBBBB;'>
																<thead style='text-align: center; border-bottom: none;'>
																	<th style='background-color: #BBBBBB; border-bottom: none; color: #000; text-align: right;'>Details</th>
																	<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Product Service Description</th>
																	<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Quantity</th>
																	<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Unit</th>
																	<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Unit Price</th>
																	<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Amount</th>
																	<th style='background-color: #BBBBBB; border-bottom: none;'></th>
																</thead>
																<tbody>
																	<tr ng-repeat='item in product_services_array track by $index'>
																		<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
																		<td>{{ item.code.description }}</td>
																		<td>{{ item.qty }}</td>
																		<td>{{ item.unit }}</td>
																		<td>{{ item.unit_price }}</td>
																		<td>{{ item.gross_amount }}</td>
																		<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
																	</tr>
																</tbody>
															</table>
														</div>
													
														<div class='row' style='padding-left: 1%; padding-right: 1%;'>
															<table width='100%'>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Mode of Payment<label></td>
																	<td style='padding-left: 5px;'><input ng-model='selected_mop.mop.co_mop_name' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>VAT</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Payment Amount</label></td>
																	<td style='padding-left: 5px;'><input ng-model='payment_amount_paid' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>VAT Sales</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Number</label></td>
																	<td style='padding-left: 5px;'><input ng-model='payment_check_number' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Zero rated purchases</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Date</label></td>
																	<td style='padding-left: 5px;'><input ng-model='transaction_date' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Exempt Sales</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Payee</label></td>
																	<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' value="<?php echo $this->session->userdata('user')->name; ?>" readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Non-VAT Sales</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Bank</label></td>
																	<td style='padding-left: 5px;'><input ng-model='selected_bank.bank.b_name' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Total</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Account Number</label></td>
																	<td style='padding-left: 5px;'><input ng-model='selected_bank.bank.co_b_no' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Withholding Tax</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'></td>
																	<td style='padding-left: 5px;'></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Final Tax Withheld</label></td>
																</tr>
															</table>
														</div>
														
														<div class='row' style='padding-left: 1%; padding-right: 1%; margin-top: -1px'>
															<table width='100%'>
																<tr>
																	<td>
																		<table style='margin-top: -15px;'>
																			<tr>
																				<td style='text-align: right; vertical-align: top; background-color: #BBBBBB; color: #000; width: 200px; padding-top: 10px; padding-right: 10px;'><label>Document Reference</label></td>
																				<td style='padding-left: 10px;'>
																					<table class='table table-hover table-bordered table-striped'>
																						<thead>
																							<th style='background-color: #D4D4D4; color: #000;'>Document Number</th>
																							<th style='background-color: #D4D4D4; color: #000;'>Amount</th>
																						</thead>
																						<tbody>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							
																						</tbody>
																					</table>	
																				</td>
																			</tr>
																		</table>
																	</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																	<td style='vertical-align: top; width: 31.3%;'>
																		<table width='100%'>
																			<tr>
																				<td style='padding-top: 20px;'><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000; padding-top: 20px;'><label>SC Discount</label></td>
																			</tr>
																			<tr>
																				<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>SC ID</label></td>
																			</tr>
																			<tr>
																				<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Cash Discount</label></td>
																			</tr>
																			<tr>
																				<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Net Amount</label></td>
																			</tr>
																			<tr>
																				<td>&nbsp;</td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'>&nbsp;</td>
																			</tr>
																			<tr>
																				<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Prepared by</label></td>
																			</tr>
																			<tr>
																				<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Date</label></td>
																			</tr>
																			<tr>
																				<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Received by</label></td>
																			</tr>
																			<tr>
																				<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Date</label></td>
																			</tr>
																		</table>
																	</td>
																</tr>

															</table>
														</div>
														
													</div>
												</div>
														
											</div>
										</div>
											
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>