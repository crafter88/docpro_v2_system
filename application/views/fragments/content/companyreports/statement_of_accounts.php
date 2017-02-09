<div class="side-body padding-top" id='journal-navs'>
	<div id='animated-container' class='row' style='-webkit-animation-duration: 0.5s;'>
						
		<div class='col-md-12'>
			<div role="tabpanel">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a class='text-black' href="#soa" aria-controls="soa" role="tab" data-toggle="tab">Statement of Accounts</a></li>
					<li role="presentation"><a class='text-black' href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Summary</a></li>
				</ul>
				
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="soa" style="padding: 0;">
						<div class='row invoice'>
							<div class='col-md-12' style='margin-bottom: 10px; border: 0 !important;'>
								<div class='card' style='padding-bottom: 10px;'>
									<div class='card-body' style='padding: 25px; padding-top: 20px; padding-bottom: 0; border: 0;'>
										<div class='col-md-12' style='padding-left: 26.5% !important; background-color: #404040; color: #FFF; width: 100.38%; margin-left: -0.23%;'>
											<table class='docu_top' width='100%'>
												<tr>
													<td style='width: 82px;'><label style='margin: 0;'>Transaction ID:</label></td>
													<td style='width: 122px;'><input type='text' id='input-transaction-id' class='form-control' name='input-transaction-id' style='width: 50px; border: none; background-color: #404040; color: #FFF;'  /></td>
													<td style='width: 94px;'><label style='margin: 0;'>Transaction Date:</label></td>
													<td style='width: 155px;'><input type='text' id='input-transaction-date' class='form-control' name='input-transaction-date' style='width: 150px; border: none; background-color: #404040; color: #FFF;'  /></td>
													<td style='width: 125px;'><label style='margin: 0;'>Transaction Journal:</label></td>
													<td><input type='text' id='input-transaction-date' class='form-control' name='input-transaction-date' style='width: 100px; border: none; background-color: #404040; color: #FFF;'  /></td>
												</tr>
											</table>
										</div>
										
										<div class='row' style='padding-left: 1%; padding-right: 1%;'>
											<table width='100%'>
												<tr>
													<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Company</label></td>
													<td style='padding-left: 5px;'><input class='form-control' type='text' value="<?php echo $this->session->userdata('user')->ch_name; ?>" style='border: none; background-color: #FFF' readonly /></td>
													<td>&nbsp;</td>
													<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' /></td>
													<td style='padding-left: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Document</label></td>
												</tr>
												<tr>
													<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Company Address</label></td>
													<td style='padding-left: 5px;'><input class='form-control' type='text' value="<?php echo $this->session->userdata('user')->ch_cb_address; ?>" style='border: none; background-color: #FFF' readonly /></td>
													<td>&nbsp;</td>
													<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' /></td>
													<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>SOA Number</label></td>
												</tr>
												<tr>
													<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Company TIN</label></td>
													<td style='padding-left: 5px;'><input class='form-control' type='text' value="<?php echo $this->session->userdata('user')->ch_cb_tin; ?>" style='border: none; background-color: #FFF' readonly /></td>
													<td>&nbsp;</td>
													<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' /></td>
													<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Billing Date</label></td>
												</tr>
												<tr>
													<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Name</label></td>
													<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
													<td>&nbsp;</td>
													<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
													<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Account Number</label></td>
												</tr>
												<tr>
													<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Address</label></td>
													<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
													<td>&nbsp;</td>
													<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
													<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Billing Period</label></td>
												</tr>
												<tr>
													<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>TIN</label></td>
													<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' /></td>
													<td>&nbsp;</td>
													<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' /></td>
													<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Terms</label></td>
												</tr>
												<tr>
													<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Business type</label></td>
													<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' /></td>
													<td>&nbsp;</td>
													<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;' /></td>
													<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Due Date</label></td>
												</tr>
												<tr>
													<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; padding-bottom: 40px;'><label>Particulars</label></td>
													<td colspan='3' style='padding-left: 5px; padding-bottom: 40px;'><input class='form-control' type='text' style='border: none; background-color: #FFF;'  /></td>
													<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'>&nbsp;</td>
												</tr>
											</table>
										</div>
									
										<div class='row' style='padding-left: 1%; padding-right: 1%;'>
											<table class='table table-hover table-bordered table-responsive' style='width: 100%; margin: 0; border-top: none; border-color: #BBBBBB;'>
												<thead style='text-align: center; border-bottom: none;'>
													<th style='background-color: #BBBBBB; border-bottom: none; color: #000; text-align: right;'>Details</th>
													<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Invoice Number</th>
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
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
													</tr>
													<tr ng-repeat='item in product_services_array track by $index'>
														<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
														<td style="border: none;"></td>
														<td style="border: none;"></td>
														<td style="border: none;"></td>
														<td style="border: none;"></td>
														<td style="border: none;"></td>
														<td></td>
														<td style='width: 200px; background-color: #BBBBBB; border: none;'><label>Total</label></td>
													</tr>
													<tr ng-repeat='item in product_services_array track by $index'>
														<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
														<td style="border: none;"></td>
														<td style="border: none;"></td>
														<td style="border: none;"></td>
														<td style="border: none;"></td>
														<td style="border: none;"></td>
														<td></td>
														<td style='width: 200px; background-color: #BBBBBB; border: none;'><label>Trade Discount</label></td>
													</tr>
													<tr ng-repeat='item in product_services_array track by $index'>
														<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
														<td style="border: none;"></td>
														<td style="border: none;"></td>
														<td style="border: none;"></td>
														<td style="border: none;"></td>
														<td style="border: none;"></td>
														<td></td>
														<td style='width: 200px; background-color: #BBBBBB; border: none;'><label>Net of Trade Discount</label></td>
													</tr>
												</tbody>
											</table>
										</div>
									
										<div class='row' style='padding-left: 1%; padding-right: 1%;'>
											<table width='100%'>
												<tr>
													<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; width: 200px;'></td>
													<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
													<td>&nbsp;</td>
													<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
													<td style='padding-left: 10px; background-color: #BBBBBB; color: #000; width: 200px;'></td>
												</tr>
												<tr>
													<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>VAT</label></td>
													<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
													<td>&nbsp;</td>
													<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
													<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Prepared By</label></td>
												</tr>
												<tr>
													<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>VAT Sales</label></td>
													<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
													<td>&nbsp;</td>
													<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
													<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Date</label></td>
												</tr>
												<tr>
													<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Zero rated sales</label></td>
													<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
													<td>&nbsp;</td>
													<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
													<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Approved By</label></td>
												</tr>
												<tr>
													<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Exempt sales</label></td>
													<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' value="<?php echo $this->session->userdata('user')->ch_name; ?>" readonly /></td>
													<td>&nbsp;</td>
													<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
													<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Date</label></td>
												</tr>
												<tr>
													<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Non-VAT sales</label></td>
													<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
													<td>&nbsp;</td>
													<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
													<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Received by</label></td>
												</tr>
												<tr>
													<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Total</label></td>
													<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF'  /></td>
													<td>&nbsp;</td>
													<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right;'  /></td>
													<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Date</label></td>
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

