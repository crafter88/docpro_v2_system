<div role="tabpanel" class="tab-pane" id="documents">
	<div class='row invoice'>
		<div class='col-md-12' style='margin-bottom: 10px;'>
			<div class='card' style='padding-bottom: 10px;'>
				<div class='card-body' style='padding: 25px; padding-top: 20px; padding-bottom: 0;'>
					<div class='col-md-12' style='padding-left: 26.5% !important; background-color: #404040; color: #FFF; width: 100.38%; margin-left: -0.23%;'>
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
								<td style='padding-left: 5px;'><input class='form-control' type='text' value="<?php echo $this->session->userdata('user')->ch_name; ?>" style='border: none; background-color: #FFF' readonly /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input ng-model='document_name' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' readonly /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Document</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Company Address</label></td>
								<td style='padding-left: 5px;'><input class='form-control' type='text' value="<?php echo $this->session->userdata('user')->ch_cb_address; ?>" style='border: none; background-color: #FFF' readonly /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input ng-model='document_number' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Document Number</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Company TIN</label></td>
								<td style='padding-left: 5px;'><input class='form-control' type='text' value="<?php echo $this->session->userdata('user')->ch_cb_tin; ?>" style='border: none; background-color: #FFF' readonly /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input value='{{document_date | formatDate}}' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Document Date</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Name</label></td>
								<td style='padding-left: 5px;'><input ng-model='selected_bp.bp.bp_name' class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input ng-model='payment_type' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Payment</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Address</label></td>
								<td style='padding-left: 5px;'><input ng-model='selected_bp.bp.co_bp_address' class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input ng-model='payment_terms' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Terms</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>TIN</label></td>
								<td style='padding-left: 5px;'><input ng-model='selected_bp.bp.co_bp_tin' class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input value='{{ payment_terms | computeDueDate:this }}' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Due Date</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Business type</label></td>
								<td style='padding-left: 5px;'><input ng-model='selected_bp.bp.bpt_type' class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'>&nbsp;</td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'>&nbsp;</td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; padding-bottom: 40px;'><label>Particulars</label></td>
								<td colspan='3' style='padding-left: 5px; padding-bottom: 40px;'><input ng-model='selected_bp.bp.co_bp_particulars' class='form-control' type='text' style='border: none; background-color: #FFF;'  /></td>
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
							<tbody class='invoice_prod_serv'>
								<tr ng-repeat='item in product_services_array track by $index'>
									<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
									<td>{{ item.code.description }}</td>
									<td>{{ item.qty }}</td>
									<td>{{ item.unit }}</td>
									<td>{{ item.unit_price }}</td>
									<td ng-if='!isNaN(item.gross_amount)'>{{ item.gross_amount }}</td>
									<td ng-if='isNaN(item.gross_amount)'></td>
									<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
								</tr>
							</tbody>
						</table>
					</div>
				
					<div class='row' style='padding-left: 1%; padding-right: 1%;'>
						<table width='100%'>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Mode of Payment<label></td>
								<td style='padding-left: 5px;'><input ng-model='selected_mop.mop.mop_name' class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>VAT</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Payment Amount</label></td>
								<td style='padding-left: 5px;'><input ng-model='payment_amount_paid' class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>VAT Sales</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Number</label></td>
								<td style='padding-left: 5px;'><input ng-model='payment_check_number' class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Zero rated sales</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Date</label></td>
								<td style='padding-left: 5px;'><input ng-model='transaction_date' class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Exempt Sales</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Payee</label></td>
								<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' value="<?php echo $this->session->userdata('user')->ch_name; ?>" readonly /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Non-VAT Sales</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Bank</label></td>
								<td style='padding-left: 5px;'><input ng-model='selected_bank.bank.b_name' class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Total</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Account Number</label></td>
								<td style='padding-left: 5px;'><input ng-model='selected_bank.bank.co_b_no' class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
								<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Withholding Tax</label></td>
							</tr>
							<tr>
								<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'></td>
								<td style='padding-left: 5px;'></td>
								<td>&nbsp;</td>
								<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
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
											<td style='padding-top: 20px; padding-right: 5px;'><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' ></td>
											<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000; padding-top: 20px;'><label>SC Discount</label></td>
										</tr>
										<tr>
											<td style="padding-right: 5px;"><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' ></td>
											<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>SC ID</label></td>
										</tr>
										<tr>
											<td style="padding-right: 5px;"><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' ></td>
											<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Cash Discount</label></td>
										</tr>
										<tr>
											<td style="padding-right: 5px;"><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' ></td>
											<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Net Amount</label></td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'>&nbsp;</td>
										</tr>
										<tr>
											<td style="padding-right: 5px;"><input  value="<?php echo $this->session->userdata('user')->p_fname.' '.$this->session->userdata('user')->p_mname.' '.$this->session->userdata('user')->p_lname; ?>" type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' ></td>
											<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Prepared by</label></td>
										</tr>
										<tr>
											<td style="padding-right: 5px;"><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' ></td>
											<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Date</label></td>
										</tr>
										<tr>
											<td style="padding-right: 5px;"><input name='received_by' ng-model="received_by" type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' ></td>
											<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Received by</label></td>
										</tr>
										<tr>
											<td style="padding-right: 5px;"><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' ></td>
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