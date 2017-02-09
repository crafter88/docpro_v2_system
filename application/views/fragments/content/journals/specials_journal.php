				<div class="side-body padding-top" id='journal-navs' ng-app='journals' ng-controller='transaction'>
					<div id='animated-container' class='row' style='-webkit-animation-duration: 0.5s; margin-top: 20px;'>
						<div class='col-md-12'>
							<div role="tabpanel">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a class='text-black' href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Summary</a></li>
									<li role="presentation"><a class='text-black' href="#business-partners" aria-controls="business-partners" role="tab" data-toggle="tab">Business Partners</a></li>
									<li role="presentation"><a class='text-black' href="#new-transactions" aria-controls="new-transactions" role="tab" data-toggle="tab">New Transactions</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<input id='journal_type' type="hidden" name="journal_type" value="<?php if(isset($journal_type)){ echo $journal_type; } ?>">
									<div role="tabpanel" class="tab-pane active" id="summary">
										<div class='card'>
											<div class='card-body' style='padding-top: 10px;'>
												<table id='journal-summary-table' class='table table-hover table-bordered' cellspacing="0" style='min-width: 1400px;'>
													<thead>
														<th>General Trans ID</th>
														<th>Trans Date</th>
														<th>Journal</th>
														<th>Journal Trans ID</th>
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
														<th>Profit Cost Center</th>
														<th>Department</th>
													</thead>
													<tbody class='journal-entry'>
														<tr>
															<td colspan='10' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
														</tr>
													</tbody>
												</table>	
											</div>
										</div>

									</div>
									<div role="tabpanel" class="tab-pane" id="business-partners">
										<div class='card'>
											<div class='card-body' style='padding-top: 10px;'>
												<table id='bp-table' class='table table-hover table-bordered table-striped table-responsive' cellspacing="0" style="min-width: 1200px">
													<thead>
														<th>BP Class</th>
														<th>BP Code</th>
														<th>BP Name</th>
														<th>BP Address</th>
														<th>BP TIN</th>
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
												<table id='transaction-details-table' class='table table-bordered table-hovered table-striped' style='min-width: 1400px;'>
													<thead>
														<th>General Trans ID</th>
														<th>Trans Date</th>
														<th>Journal</th>
														<th>Journal Trans ID</th>
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

									</div>
									<?php if(isset($transaction)){ $this->load->view($transaction); } ?>
								</div>

							</div>

						</div>
					</div>
				</div>