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
					<th>JE Sequence No.</th>
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
			<div class='row invoice'>
				<div class='col-md-12' style='margin-bottom: 0; border: none !important'>
					<div class='card' style='padding-bottom: 10px;'>
						<div class='card-body' style='padding: 25px; padding-top: 20px; padding-bottom: 0;'>
							<div class='col-md-12' style='padding-left: 26.5% !important; background-color: #404040; color: #FFF; width: 100.5%; margin-left: -0.29%;'>
								<table class='docu_top' width='100%'>
									<tr>
										<td style='width: 84px;'><label style='margin: 0;'>Transaction ID:</label></td>
										<td style='width: 107px;'><input name='transaction_id' type='text' class='form-control' style='width: 50px; border: none; background-color: #404040; color: #FFF;' readonly /></td>
										<td style='width: 99px;'><label style='margin: 0;'>Transaction Date:</label></td>
										<td style='width: 100px;'><input name='transaction_date' type='text' class='form-control' style='width: 155px; border: none; background-color: #404040; color: #FFF;' readonly /></td>
										<td style='width: 129px;'><label style='margin: 0;'>Journal Transaction ID:</label></td>
										<td><input name='journal_trans_id' type='text' class='form-control' style='width: 50px; border: none; background-color: #404040; color: #FFF;' readonly /></td>
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
										<th style='background-color: #BBBBBB; border-bottom: none; color: #000; text-align: right; width: 16.1%;'>Details</th>
										<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Product / Service Description</th>
										<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Quantity</th>
										<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Unit</th>
										<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Unit Price</th>
										<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Amount</th>
										<th style='background-color: #BBBBBB; border-bottom: none; width: 16.1%;'></th>
									</thead>
									<tbody class='product_services invoice_prod_serv'>
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
										<td style='padding-right: 5px;'><input name='vat_sales' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
										<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>VAT Sales</label></td>
									</tr>
									<tr>
										<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Number</label></td>
										<td style='padding-left: 5px;'><input name='check_number' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
										<td>&nbsp;</td>
										<td style='padding-right: 5px;'><input name='zero_rated_sales' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
										<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Zero rated sales</label></td>
									</tr>
									<tr>
										<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Date</label></td>
										<td style='padding-left: 5px;'><input name='check_date' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
										<td>&nbsp;</td>
										<td style='padding-right: 5px;'><input name='exempt_sales' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
										<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Exempt Sales</label></td>
									</tr>
									<tr>
										<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Payee</label></td>
										<td style='padding-left: 5px;'><input name='check_payee' class='form-control' type='text' style='border: none; background-color: #FFF'  readonly /></td>
										<td>&nbsp;</td>
										<td style='padding-right: 5px;'><input name='non_vat_sales' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
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
										<td style='vertical-align: top; width: 32.2%;'>
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