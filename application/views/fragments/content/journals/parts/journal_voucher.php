<div role="tabpanel" class="tab-pane" id="documents">
	<div class='row invoice'>
		<div class='col-md-12' style='margin-bottom: 10px;'>
			<div class='card' style='padding-bottom: 10px;'>
				<div class='card-body' style='padding: 25px; padding-top: 20px; padding-bottom: 0;'>
					<div class='col-md-12' style='padding-left: 24% !important; background-color: #404040; color: #FFF; width: 100.38%; margin-left: -0.19%;'>
						<table class='docu_top' width='100%'>
							<tr>
								<td style='width: 84px;'><label style='margin: 0;'>Transaction ID:</label></td>
								<td style='width: 107px;'><input ng-model='transaction_id' type='text' id='input-transaction-id' class='form-control' name='input-transaction-id' style='width: 50px; border: none; background-color: #404040; color: #FFF;'  /></td>
								<td style='width: 99px;'><label style='margin: 0;'>Transaction Date:</label></td>
								<td style='width: 155px;'><input ng-model='transaction_date' type='text' id='input-transaction-date' class='form-control' name='input-transaction-date' style='width: 150px; border: none; background-color: #404040; color: #FFF;'  /></td>
								<td style='width: 129px;'><label style='margin: 0;'>Journal Transaction ID:</label></td>
								<td><input ng-model='journal_transaction_id' type='text' id='input-transaction-date' class='form-control' name='input-transaction-date' style='width: 50px; border: none; background-color: #404040; color: #FFF;'  /></td>
							</tr>
						</table>
					</div>
					
					<div class='row' style='padding-left: 1%; padding-right: 1%;'>
						<table width='100%'>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Company</label></td>
								<td style='padding-left: 5px;'><input value="<?php echo $this->session->userdata('user')->ch_name; ?>" class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' ng-model='document_name' readonly /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Document</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Company Address</label></td>
								<td style='padding-left: 5px;'><input value="<?php echo $this->session->userdata('user')->ch_cb_address; ?>" class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input ng-model='document_number' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Document Number</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Company TIN</label></td>
								<td style='padding-left: 5px;'><input value="<?php echo $this->session->userdata('user')->ch_cb_tin; ?>" class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input value='{{document_date | formatDate}}' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Document Date</label></td>
							</tr>
							<!--<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; padding-top: 20px;'><label>&nbsp;</label></td>
								<td style='padding-left: 5px; padding-top: 20px;'></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px; padding-top: 20px;'></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000; padding-top: 20px;'></td>
							</tr>-->
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Particulars</label></td>
								<td colspan='3' style='padding-left: 5px;'><input ng-model='selected_bp.bp.co_bp_particulars' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; vertical-align: top;'><label>Journal Entry</label></td>
								<td colspan='3' style='padding-left: 5px; padding-right: 5px;'>
									<table class='table table-hover table-bordered table-striped'>
										<thead>
											<th style='background-color: #D4D4D4; color: #000;'>Account Code</th>
											<th style='background-color: #D4D4D4; color: #000;'>Account Name</th>
											<th style='background-color: #D4D4D4; color: #000;'>Debit(Credit)</th>
											<th style='background-color: #D4D4D4; color: #000;'>Debit Amount</th>
											<th style='background-color: #D4D4D4; color: #000;'>Credit Amount</th>
										</thead>
										<tbody>
											<tr>
												<td>&nbsp;</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
										</tbody>
									</table>
								</td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Prepared By</label></td>
								<td style='padding-left: 5px;'><input value="<?php echo $this->session->userdata('user')->p_fname.' '.$this->session->userdata('user')->p_mname.' '.$this->session->userdata('user')->p_lname; ?>" class='form-control' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input ng-model='approved_by' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Approved By</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Date Prepared</label></td>
								<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Date Approved</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Verified By</label></td>
								<td style='padding-left: 5px;'><input ng-model='verified_by' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Date Verified</label></td>
								<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'></td>
							</tr>
						</table>
					</div>
					
					
				</div>
			</div>	
		</div>
	</div>

</div>