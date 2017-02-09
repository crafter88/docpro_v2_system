<div role="tabpanel" class="tab-pane" id="documents" ng-controller='document'>
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
								<td style='padding-right: 5px; float: right;'><input value='{{document_date | formatDate}}' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Document Date</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; padding-top: 20px;'><label>&nbsp;</label></td>
								<td style='padding-left: 5px;'></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'></td>
							</tr>
							
						</table>
					</div>
					
					
					<div class='row' style='padding-left: 1%; padding-right: 1%; margin-top: -1px'>
						<table width='100%'>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Mode of Payement</label></td>
								<td style='padding-left: 5px;'><input ng-model='selected_mop.mop.co_mop_name' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input ng-model='payment_check_number' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Check Number</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Payment Amount</label></td>
								<td style='padding-left: 5px;'><input ng-model='payment_amount_paid' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Check Date</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Amount in Words</label></td>
								<td style='padding-left: 5px; width: 50%;'><input ng-model='amount_in_words' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Check Payee</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'></td>
								<td colspan='3' style='padding-right: 5px;'><input ng-model='selected_bank.bank.b_name' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Bank</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Particulars</label></td>
								<td style='padding-left: 5px;'><input ng-model='selected_bp.bp.co_bp_particulars' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input ng-model='selected_bank.bank.co_b_no' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Account Number</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Period</label></td>
								<td style='padding-left: 5px;'><input ng-model='particulars_period' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'></td>
								<td colspan='3' style='padding-right: 5px;'><input value="<?php echo $this->session->userdata('user')->p_fname.' '.$this->session->userdata('user')->p_mname.' '.$this->session->userdata('user')->p_lname; ?>" class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Prepared By</label></td>
							</tr>
						</table>
					</div>
					
					<div class='row' style='padding-left: 1%; padding-right: 1%; margin-top: -1px'>
						<table width='100%'>
							<tr>
								<td style='vertical-align: top;'>
									<table style='margin-top: -10px;'>
										<tr>
											<td style='text-align: right; vertical-align: top; background-color: #BBBBBB; color: #000; width: 200px; padding-top: 10px; padding-right: 10px;'><label>Document Reference</label></td>
											<td style='padding-left: 10px;'>
												<table class='table table-hover table-bordered table-striped' style='margin-bottom: 0;'>
													<thead>
														<th style='background-color: #D4D4D4; color: #000; width: 150px;'>Document Number</th>
														<th style='background-color: #D4D4D4; color: #000; width: 100px;'>Amount</th>
													</thead>
													<tbody>
														<tr>
															<td>&nbsp;</td>
															<td></td>
														</tr>
													</tbody>
												</table>	
											</td>
										</tr>
										<tr>
											<td style='text-align: right; vertical-align: top; background-color: #BBBBBB; color: #000; width: 200px; padding-right: 10px; padding-top: 10px;'><label>Withholding Tax</label>
											</td>
											<td style='padding-left: 10px;'>
												<table class='table table-hover table-bordered table-striped' style='margin: 0;'>
													<tbody>
														<tr>
															<td style='width: 150px;'>&nbsp;</td>
															<td style='width: 100px;'></td>
														</tr>
													</tbody>
												</table>	
											</td>
										</tr>
										<tr>
											<td style='text-align: right; vertical-align: top; background-color: #BBBBBB; color: #000; width: 200px; padding-right: 10px; padding-top: 10px;'><label>VAT Withheld</label>
											</td>
											<td style='padding-left: 10px;'>
												<table class='table table-hover table-bordered table-striped' style='margin: 0;'>
													<tbody>
														<tr>
															<td style='width: 150px;'>&nbsp;</td>
															<td style='width: 100px;'></td>
														</tr>
													</tbody>
												</table>	
											</td>
										</tr>
										<tr>
											<td style='text-align: right; vertical-align: top; background-color: #BBBBBB; color: #000; width: 200px; padding-right: 10px; padding-top: 10px;'><label>Cash Discount</label>
											</td>
											<td style='padding-left: 10px;'>
												<table class='table table-hover table-bordered table-striped' style='margin: 0;'>
													<tbody>
														<tr>
															<td style='width: 150px;'>&nbsp;</td>
															<td style='width: 100px;'></td>
														</tr>
													</tbody>
												</table>	
											</td>
										</tr>
										<tr>
											<td style='text-align: right; vertical-align: top; background-color: #BBBBBB; color: #000; width: 200px; padding-right: 10px; padding-top: 10px;'><label>Net Amount</label>
											</td>
											<td style='padding-left: 10px;'>
												<table class='table table-hover table-bordered table-striped' style='margin: 0;'>
													<tbody>
														<tr>
															<td style='width: 150px;'>&nbsp;</td>
															<td style='width: 100px;'></td>
														</tr>
													</tbody>
												</table>	
											</td>
										</tr>
										<tr>
											<td style='text-align: right; vertical-align: top; background-color: #BBBBBB; color: #000; width: 200px; padding-right: 10px; padding-top: 10px;'>&nbsp;</td>
											<td style='padding-left: 10px;'></td>
										</tr>
										<tr>
											<td style='text-align: right; vertical-align: top; background-color: #BBBBBB; color: #000; width: 200px; padding-right: 10px; padding-top: 10px;'>&nbsp;</td>
											<td style='padding-left: 10px;'></td>
										</tr>
										<tr>
											<td style='text-align: right; vertical-align: top; background-color: #BBBBBB; color: #000; width: 200px; padding-right: 10px; padding-top: 10px;'>&nbsp;</td>
											<td style='padding-left: 10px;'></td>
										</tr>
										<tr>
											<td style='text-align: right; vertical-align: top; background-color: #BBBBBB; color: #000; width: 200px; padding-right: 10px; padding-top: 10px;'>&nbsp;</td>
											<td style='padding-left: 10px;'></td>
										</tr>
										<tr>
											<td style='text-align: right; vertical-align: top; background-color: #BBBBBB; color: #000; width: 200px; padding-right: 10px; padding-top: 10px; padding-bottom: 59px;'>&nbsp;</td>
											<td style='padding-left: 10px;'></td>
										</tr>
										<!--TO ADD -->
									</table>
								</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td style='vertical-align: top; width: 32.1%;'>
									<table width='100%'>
										<tr>
											<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
											<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Date Prepared</label></td>
										</tr>
										<tr>
											<td><input ng-model='verified_by' type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
											<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Verified By</label></td>
										</tr>
										<tr>
											<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
											<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Date Verified</label></td>
										</tr>
										<tr>
											<td><input ng-model='approved_by' type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
											<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Approved By</label></td>
										</tr>
										<tr>
											<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
											<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Date Approved</label></td>
										</tr>
										<tr>
											<td><input ng-model='received_by' type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
											<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Recieved By</label></td>
										</tr>
										<tr>
											<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
											<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Date Received</label></td>
										</tr>
										<tr>
											<td style='padding-top: 10px;'></td>
											<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'>&nbsp;</td>
										</tr>
										<!--TO ADD -->
									</table>
								</td>
							</tr>

						</table>
					</div>
					
					<div class='row' style='padding-left: 1%; padding-right: 1%; margin-top: -182px'>
						<table width='100%'>
							<tr>
								<td style='text-align: right; vertical-align: top; background-color: #BBBBBB; color: #000; width: 200px; padding-top: 10px; padding-right: 10px;'><label>Journal Entry</label></td>	
								<td style='vertical-align: top; padding-right: 8px;'>
									<table style='margin-top: -10px; width: 100%;'>
										<tr>
											<td style='padding-left: 10px;'>
												<table class='table table-hover table-bordered table-striped' style='margin-bottom: 0;'>
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
										</tr>
										
									</table>
								</td>
								<td style='vertical-align: top; background-color: #BBBBBB; color: #000; width: 16.1%'>&nbsp;</td>
							</tr>

						</table>
					</div>
					
				</div>
			</div>	
		</div>
	</div>
		
</div>