				<div class="side-body padding-top" ng-app='journal_app' ng-controller='summary_controller'  id='journal-navs'>
					<div class='row'>
						<div class='col-md-12' style='background-color: #FFF; margin-bottom: 10px;'>
							<a class='btn btn-default hvr-sweep-to-top' id='btn-sales' ng-click="select_sales()" style='background-color: #000; color: #FFF;'>Sales Journal</a>
							<a class='btn btn-default hvr-sweep-to-top' id='btn-purchases' ng-click="select_purchases()">Purchases Journal</a>
							<a class='btn btn-default hvr-sweep-to-top' id='btn-receipts' ng-click="select_receipts()">Receipts Journal</a>
							<a class='btn btn-default hvr-sweep-to-top' id='btn-collections' ng-click="select_collections()">Collections Journal</a>
							<a class='btn btn-default hvr-sweep-to-top' id='btn-disbursements' ng-click="select_disbursements()">Disbursements Journal</a>
							<a class='btn btn-default hvr-sweep-to-top' id='btn-general' ng-click="select_general()">General Journal</a>
						</div>
					</div>
					
					<div id='animated-container' class='row' style='-webkit-animation-duration: 0.5s;'>
						<div class='col-md-12'>
							<div role="tabpanel">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Summary</a></li>
									<li role="presentation"><a href="#business-partners" aria-controls="business-partners" role="tab" data-toggle="tab">Business Partners</a></li>
									<li role="presentation"><a href="#new-transactions" aria-controls="new-transactions" role="tab" data-toggle="tab">New Transactions</a></li>
									<li role="presentation"><a href="#documents" aria-controls="documents" role="tab" data-toggle="tab">Documents</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="summary">
										<div class='card'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>{{journal.type}} Summary</div>
												</div>
											</div>
											<div class='card-body'>
												<table class='table table-hover table-bordered' id='summary-table' cellspacing="0" width="100%">
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
														<th>Gross Ammount</th>
														<th>Net Ammount</th>
													</thead>
													<tbody>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td> &nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Document Details</div>
												</div>
											</div>
											<div class='card-body'>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Journal Entries</div>
												</div>
											</div>
											<div class='card-body'>
												<table id='journal-entries-table' class='table table-hovered table-bordered'>
													<thead>
														<th>BP Code</th>
														<th>BP Name</th>
														<th>Transaction</th>
														<th>Transaction ID</th>
														<th>Document</th>
														<th>Document Number</th>
														<th>Document Date</th>
														<th>Document Gross Ammount</th>
														<th>Document Net Ammount</th>
													</thead>
													<tbody>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Document</div>
												</div>
											</div>
											<div class='card-body'>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="business-partners">
										<div class='card'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Business Partners</div>
												</div>
											</div>
											<div class='card-body'>
												<table class='table table-hover table-bordered table-responsive' id='summary-table' cellspacing="0" width="100%">
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
													<tbody>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td> &nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Transaction Details</div>
												</div>
											</div>
											<div class='card-body'>
												<table class='table table-bordered table-hovered'>
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
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Document Details</div>
												</div>
											</div>
											<div class='card-body'>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Journal Entries</div>
												</div>
											</div>
											<div class='card-body'>
												<table id='journal-entries-table' class='table table-hovered table-bordered'>
													<thead>
														<th>BP Code</th>
														<th>BP Name</th>
														<th>Transaction</th>
														<th>Transaction ID</th>
														<th>Document</th>
														<th>Document Number</th>
														<th>Document Date</th>
														<th>Document Gross Ammount</th>
														<th>Document Net Ammount</th>
													</thead>
													<tbody>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Document</div>
												</div>
											</div>
											<div class='card-body'>
											</div>
										</div>
										
									</div>
									<div role="tabpanel" class="tab-pane" id="new-transactions">
										<div class='card' style='padding-bottom: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>New Transactions</div>
												</div>
											</div>
											<div class='card-body'>
												<div class='col-md-12'>
													<form class='form-inline' >	
														<div class='col-md-4'>
															<div class='form-group'>
																<label for='input-transaction-id'>Transaction ID</label>
																<input type='text' id='input-transaction-id' class='form-control' name='input-transaction-id'/>
															</div>
														</div>
														<div class='col-md-4'>
															<div class='form-group'>
																<label for='input-transaction-date'>Transaction Date</label>
																<input type='text' id='input-transaction-date' class='form-control' name='input-transaction-date'/>
															</div>
														</div>
														<div class='col-md-4'>
															<div class='form-group'>
																<label for='input-transaction-date'>Journal Transaction ID</label>
																<input type='text' id='input-transaction-date' class='form-control' name='input-transaction-date'/>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
										<div class='card' style='margin-top: 20px; padding-bottom: 20px;'>
											<div class='card-header'>
												<div class='card-title' style='width: 100%;'>
													<div class='title'>
														<label>Document Details</label>
														<span style='float: right;'>
															<button class='btn btn-primary'>Cash</button>
															<button class='btn btn-success'>Charge</button>
														</span>
													</div>
												</div>
											</div>
											<div class='card-body' id='card-2-form'>
												<div class='col-md-12'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label>Document</label>
													</div>
													<div class='col-md-4'>
														<label>Name</label>
														<input class='form-control' type='text' />
													</div>
													<div class='col-md-3'>
														<label>Transaction Date</label>
														<input class='form-control' type='date' />
													</div>
													<div class='col-md-3'>
														<label>Date</label>
														<input class='form-control' type='date' />
													</div>
												</div>
												<div class='col-md-12' style='margin-top: 5px;'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label>Business Partner</label>
													</div>
													<div class='col-md-4'>
														<label>Name</label>
														<input class='form-control' type='text' />
													</div>
													<div class='col-md-3'>
														<label>Address</label>
														<input class='form-control' type='text' />
													</div>
													<div class='col-md-3'>
														<label style='width: 100%'>TIN</label>
														<input class='form-control' type='text' style='width: 18%; display: inline;' /> &ndash; <input class='form-control' type='text' style='width: 18%; display: inline;' /> &ndash; <input class='form-control' type='text' style='width: 18%; display: inline;' /> &ndash; <input class='form-control' type='text' style='width: 29.8%; display: inline;' />
													</div>
												</div>
												<div class='col-md-12' style='margin-top: 10px;'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label>Particulars</label>
													</div>
													<div class='col-md-3'>
														<label>Particulars</label>
														<input type='text' class='form-control' />
													</div>
													<div class='col-md-3'>
														<label>Period</label>
														<input type='text' class='form-control' />
													</div>
													<div class='col-md-4'>
														<label>Remarks</label>
														<input type='text' class='form-control' />
													</div>
												</div>
												
												
												<div class='col-md-12' style='margin-top: 10px;'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label>Payment</label>
													</div>
													<div class='col-md-3'>
														<label>Type of Payment</label>
														<input type='text' class='form-control' />
													</div>
													<div class='col-md-3'>
														<label>Terms</label>
														<input type='text' class='form-control' />
													</div>
													<div class='col-md-4'>
														<label>Due Date</label>
														<input type='text' class='form-control' />
													</div>
												</div>
												
												
												<div class='col-md-12' style='margin-top: 10px;'>
													<div class='col-md-1 col-custom'>
														<label></label>
													</div>
													<div class='col-md-2'>
														<label>Mode of Payment</label>
														<input type='text' class='form-control' />
													</div>
													<div class='col-md-2'>
														<label>Ammount Paid</label>
														<input type='text' class='form-control' />
													</div>
													<div class='col-md-2'>
														<label>Check Number</label>
														<input type='text' class='form-control' />
													</div>
													<div class='col-md-2'>
														<label>Bank</label>
														<input type='text' class='form-control' />
													</div>
													<div class='col-md-2'>
														<label>Bank Account Number</label>
														<input type='text' class='form-control' />
													</div>
												</div>
												
												
												<div class='col-md-12' style='margin-top: 10px;'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label>Ammounts</label>
													</div>
													<div class='col-md-2'>
														<label>Gross Ammount</label>
														<input type='text' class='form-control' />
													</div>
													<div class='col-md-2'>
														<label>VAT</label>
														<input type='text' class='form-control' />
													</div>
													<div class='col-md-2'>
														<label>TAX Withheld</label>
														<input type='text' class='form-control' />
													</div>
													<div class='col-md-2'>
														<label>Deductions</label>
														<input type='text' class='form-control' />
													</div>
													<div class='col-md-2'>
														<label>Net Ammount</label>
														<input type='text' class='form-control' />
													</div>
												</div>
												
												
												<div class='col-md-12' style='margin-top: 10px;'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label>Variance</label>
													</div>
													<div class='col-md-2'>
														<label>Gross Ammount</label>
														<input type='text' class='form-control' />
													</div>
													<div class='col-md-2'>
														<label>VAT</label>
														<input type='text' class='form-control' />
													</div>
													<div class='col-md-2'>
														<label>TAX Withheld</label>
														<input type='text' class='form-control' />
													</div>
													<div class='col-md-2'>
														<label>Deductions</label>
														<input type='text' class='form-control' />
													</div>
													<div class='col-md-2'>
														<label>Net Ammount</label>
														<input type='text' class='form-control' />
													</div>
												</div>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Document Details</div>
												</div>
											</div>
											<div class='card-body'>
												<div class="step tabs-left card-no-padding">
													<ul class="nav nav-tabs" id='tablist-2' role="tablist">
														<li role="step" class="active">
															<a href="#stepv1" id="step1-vtab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
																<div class="step-title">
																	<div class="title">Products/Services</div>
																</div>
															</a>
														</li>
														<li role="step">
															<a href="#stepv2" id="step1-vtab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
																<div class="step-title">
																	<div class="title">VAT</div>
																</div>
															</a>
														</li>
														<li role="step">
															<a href="#stepv3" id="step1-vtab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
																<div class="step-title">
																	<div class="title">Discounts</div>
																</div>
															</a>
														</li>
														<li role="step">
															<a href="#stepv4" id="step1-vtab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
																<div class="step-title">
																	<div class="title">Expanded Withholding Tax</div>
																</div>
															</a>
														</li>
														<li role="step">
															<a href="#stepv5" id="step1-vtab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
																<div class="step-title">
																	<div class="title">Final Withholding Tax</div>
																</div>
															</a>
														</li>
														<li role="step">
															<a href="#stepv6" id="step1-vtab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
																<div class="step-title">
																	<div class="title">Document Reference</div>
																</div>
															</a>
														</li>
														<li role="step">
															<a href="#stepv7" id="step1-vtab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
																<div class="step-title">
																	<div class="title">Bank Details</div>
																</div>
															</a>
														</li>
														<li role="step">
															<a href="#stepv8" id="step1-vtab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
																<div class="step-title">
																	<div class="title">Other Details</div>
																</div>
															</a>
														</li>
													</ul>
													<div class="tab-content" style='width: 100%;'>
														<div role="tabpanel" class="tab-pane fade in active" id="stepv1" aria-labelledby="home-tab">
															<table class='table table-hover table-bordered table-striped'>
																<thead>
																	<th>Product Service Code</th>
																	<th>Product Description</th>
																	<th>Quantity</th>
																	<th>Unit</th>
																	<th>Unit Price</th>
																	<th>Gross Ammount</th>
																</thead>
																<tbody>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div role="tabpanel" class="tab-pane fade" id="stepv2" aria-labelledby="profile-tab">
															 <table class='table table-hover table-bordered table-striped'>
																<thead>
																	<th>Tax Code 1</th>
																	<th>Nature</th>
																	<th>Rate</th>
																	<th>VAT</th>
																	<th>Net VAT Ammount</th>
																	<th>Gross Ammount</th>
																</thead>
																<tbody>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div role="tabpanel" class="tab-pane fade" id="stepv3" aria-labelledby="dropdown1-tab">
															<table class='table table-hover table-bordered table-striped'>
																<thead>
																	<th>Deduction Code</th>
																	<th>Nature</th>
																	<th>Rate</th>
																	<th>Deduction</th>
																	<th>SC ID</th>
																</thead>
																<tbody>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div role="tabpanel" class="tab-pane fade" id="stepv4" aria-labelledby="dropdown2-tab">
															<table class='table table-hover table-bordered table-striped'>
																<thead>
																	<th>Tax Code 2</th>
																	<th>Nature</th>
																	<th>Rate</th>
																	<th>Tax Base</th>
																	<th>Tax Withheld</th>
																</thead>
																<tbody>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div role="tabpanel" class="tab-pane fade" id="stepv5" aria-labelledby="dropdown2-tab">
															<table class='table table-hover table-bordered table-striped'>
																<thead>
																	<th>Tax Code 2</th>
																	<th>Nature</th>
																	<th>Rate</th>
																	<th>Tax Base</th>
																	<th>Tax Withheld</th>
																</thead>
																<tbody>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div role="tabpanel" class="tab-pane fade" id="stepv6" aria-labelledby="dropdown2-tab">
															<table class='table table-hover table-bordered table-striped'>
																<thead>
																	<th>Document Code and Document Name</th>
																	<th>Document Number</th>
																	<th>Document Date</th>
																	<th>Document Gross Ammount</th>
																	<th>Document Net Ammount</th>
																</thead>
																<tbody>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div role="tabpanel" class="tab-pane fade" id="stepv7" aria-labelledby="dropdown2-tab">
															<table class='table table-hover table-bordered table-striped'>
																<thead>
																	<th>Bank Code and Bank Name</th>
																	<th>Bank Account Number</th>
																	<th>Bank Document</th>
																	<th>Bank Ammount</th>
																	<th>Bank Date</th>
																</thead>
																<tbody>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div role="tabpanel" class="tab-pane fade" id="stepv8" aria-labelledby="dropdown2-tab">
															<table class='table table-hover table-bordered table-striped'>
																<thead>
																	<th>Prepared By</th>
																	<th>Verified By</th>
																	<th>Approved By</th>
																	<th>Received By</th>
																</thead>
																<tbody>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
							
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Journal Entries</div>
												</div>
											</div>
											<div class='card-body'>
												<table class='table table-hover table-bordered table-strip'>
													<thead>
														<th>JE Number</th>
														<th>Transaction Code</th>
														<th>JE Sequence Number</th>
														<th>Account Code</th>
														<th>Account Name</th>
														<th>Debit(Credit)</th>
														<th>Debit Ammount</th>
														<th>Credit Ammount</th>
														<th>Profit Center Code</th>
														<th>Department Code Name</th>
													</thead>
													<tbody>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
									</div>
									<div role="tabpanel" class="tab-pane" id="documents">
										<div class='row'>
											<div class='col-md-12'>
												<div class='card' style='padding-bottom: 20px;'>
													<div class='card-header'>
														<div class='card-title'>
															<div class='title'>Document</div>
														</div>
													</div>
													<div class='card-body'>
														<div class='col-md-12'>
															<form class='form-inline'>
																<div class='col-md-3 col-md-offset-1'>
																	<div class='form-group'>
																		<label for='input-transaction-id'>Transaction ID</label>
																		<input type='text' id='input-transaction-id' class='form-control' name='input-transaction-id'/>
																	</div>
																</div>
																<div class='col-md-3'>
																	<div class='form-group'>
																		<label for='input-transaction-date'>Transaction Date</label>
																		<input type='date' id='input-transaction-date' class='form-control' name='input-transaction-date'/>
																	</div>
																</div>
																<div class='col-md-4'>
																	<div class='form-group'>
																		<label for='input-transaction-date'>Journal Transaction ID</label>
																		<input type='text' id='input-transaction-date' class='form-control' name='input-transaction-date'/>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class='row'>
											<div class='col-md-12'>
												<div class='card' style='padding-bottom: 20px;'>
													<div class='card-body' id='card-2'>
														<div class='col-md-12'>
															<div class='col-md-2'>
																<label>Company</label>
															</div>
															<div class='col-md-3'>
																<input class='form-control' type='text' />
															</div>
															<div class='col-md-3 col-md-offset-2 '>
																<input class='form-control' type='text' />
															</div>
															<div class='col-md-2'>
																<label>Document</label>
															</div>
														</div>
														<div class='col-md-12' style='margin-top: 10px;'>
															<div class='col-md-2'>
																<label>Company Address</label>
															</div>
															<div class='col-md-3'>
																<input class='form-control' type='text' />
															</div>
															<div class='col-md-3 col-md-offset-2'>
																<input class='form-control' type='text' />
															</div>
															<div class='col-md-2'>
																<label>Document Number</label>
															</div>
														</div>
														<div class='col-md-12' style='margin-top: 10px;'>
															<div class='col-md-2'>
																<label>Company TIN</label>
															</div>
															<div class='col-md-3'>
																<input class='form-control' type='text' style='width: 18%; display: inline;' /> &ndash; <input class='form-control' type='text' style='width: 18%; display: inline;' /> &ndash; <input class='form-control' type='text' style='width: 18%; display: inline;' /> &ndash; <input class='form-control' type='text' style='width: 30%; display: inline;' />
															</div>
															<div class='col-md-3 col-md-offset-2'>
																<input class='form-control' type='date' />
															</div>
															<div class='col-md-2'>
																<label>Document Date</label>
															</div>
														</div>
														<div class='col-md-12' style='margin-top: 10px;'>
															<div class='col-md-2'>
																<label>Name</label>
															</div>
															<div class='col-md-3'>
																<input class='form-control' type='text' />
															</div>
															<div class='col-md-3 col-md-offset-2'>
																<input class='form-control' type='text' />
															</div>
															<div class='col-md-2'>
																<label>Payment</label>
															</div>
														</div>
														<div class='col-md-12' style='margin-top: 10px;'>
															<div class='col-md-2'>
																<label>Address</label>
															</div>
															<div class='col-md-3'>
																<input class='form-control' type='text' />
															</div>
															<div class='col-md-3 col-md-offset-2'>
																<input class='form-control' type='text' />
															</div>
															<div class='col-md-2'>
																<label>Terms</label>
															</div>
														</div>
														<div class='col-md-12' style='margin-top: 10px;'>
															<div class='col-md-2'>
																<label>TIN</label>
															</div>
															<div class='col-md-3'>
																<input class='form-control' type='text' style='width: 18%; display: inline;' /> &ndash; <input class='form-control' type='text' style='width: 18%; display: inline;' /> &ndash; <input class='form-control' type='text' style='width: 18%; display: inline;' /> &ndash; <input class='form-control' type='text' style='width: 30%; display: inline;' />
															</div>
															<div class='col-md-3 col-md-offset-2'>
																<input class='form-control' type='date' />
															</div>
															<div class='col-md-2'>
																<label>Due Date</label>
															</div>
														</div>
														<div class='col-md-12' style='margin-top: 10px;'>
															<div class='col-md-2'>
																<label>Business type</label>
															</div>
															<div class='col-md-3'>
																<input class='form-control' type='text' />
															</div>
														</div>
														<div class='col-md-12' style='margin-top: 10px;'>
															<div class='col-md-2'>
																<label>Particulars</label>
															</div>
															<div class='col-md-3'>
																<input class='form-control' type='text' />
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									
										<div class='row'>
											<div class='col-md-12'>
												<div class='card'>
													<div class='card-header'>
														<div class='card-title'>
															<div class='title' style='padding-left: 30px;'>Details</div>
														</div>
													</div>
													<div class='card-body'>
														<div class='col-md-10 col-md-offset-1'>
															<button class='btn btn-info'><i class='fa fa-plus'></i> Add</button>
															<table class='table table-hovered table-bordered table-responsive' style='width: 99%'>
																<thead style='text-aling: center;'>
																	<th>Product Service Description</th>
																	<th>Quantity</th>
																	<th>Unit</th>
																	<th>Unit Price</th>
																	<th>Ammount</th>
																</thead>
																<tbody>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>&nbsp; </td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
															
															<div class='col-md-4 col-md-offset-8'>
																<table class='table' style='width: 99%'>
																	<tr>
																		<td style='padding: 5px 5px 0 0; border-top: none;'><label>Total</label></td>
																		<td style='padding: 5px 5px 0 0; border-top: none;'><input class='form-control' type='text' /></td>
																	</tr>
																	<tr>
																		<td style='padding: 5px 5px 0 0; border-top: none;'><label>Trade Discount</label></td>	
																		<td style='padding: 5px 5px 0 0; border-top: none;'><input class='form-control' type='text' /></td>
																	</tr>
																	<tr>
																		<td style='padding: 5px 5px 0 0; border-top: none;'><label>Net of Trade Discount</label></td>
																		<td style='padding: 5px 5px 0 0; border-top: none;'><input class='form-control' type='text' /></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									
										<div class='row'>
											<div class='col-md-12'>
												<div class='card' style='padding-bottom: 20px;'>
													<div class='card-body' id='card-4'>
														<div class='col-md-12'>
															<div class='col-md-2'>
																<label>Mode of Payement<label>
															</div>
															<div class='col-md-3'>
																<input class='form-control' type='text'/>
															</div>
															<div class='col-md-3 col-md-offset-2'>
																<input class='form-control' type='text'/>
															</div>
															<div class='col-md-2'>
																<label>VAT</label>
															</div>
														</div>
														<div class='col-md-12' style='margin-top: 20px;'>
															<div class='col-md-2'>
																<label>Payment Ammount<label><label>
															</div>
															<div class='col-md-3'>
																<input class='form-control' type='text'/>
															</div>
															<div class='col-md-3 col-md-offset-2'>
																<input class='form-control' type='text'/>
															</div>
															<div class='col-md-2'>
																<label>VAT Sales</label>
															</div>
														</div>
														<div class='col-md-12' style='margin-top: 20px;'>
															<div class='col-md-2'>
																<label>Check Number<label><label>
															</div>
															<div class='col-md-3'>
																<input class='form-control' type='text'/>
															</div>
															<div class='col-md-3 col-md-offset-2'>
																<input class='form-control' type='text'/>
															</div>
															<div class='col-md-2'>
																<label>Zero rated sales</label>
															</div>
														</div>
														<div class='col-md-12' style='margin-top: 20px;'>
															<div class='col-md-2'>
																<label>Check Date<label><label>
															</div>
															<div class='col-md-3'>
																<input class='form-control' type='date'/>
															</div>
															<div class='col-md-3 col-md-offset-2'>
																<input class='form-control' type='text'/>
															</div>
															<div class='col-md-2'>
																<label>Exempt Sales</label>
															</div>
														</div>
														<div class='col-md-12' style='margin-top: 20px;'>
															<div class='col-md-2'>
																<label>Check Payee<label><label>
															</div>
															<div class='col-md-3'>
																<input class='form-control' type='text'/>
															</div>
															<div class='col-md-3 col-md-offset-2'>
																<input class='form-control' type='text'/>
															</div>
															<div class='col-md-2'>
																<label>Non-VAT Sales</label>
															</div>
														</div>
														<div class='col-md-12' style='margin-top: 20px;'>
															<div class='col-md-2'>
																<label>Bank<label><label>
															</div>
															<div class='col-md-3'>
																<input class='form-control' type='text'/>
															</div>
															<div class='col-md-3 col-md-offset-2'>
																<input class='form-control' type='text'/>
															</div>
															<div class='col-md-2'>
																<label>Total</label>
															</div>
														</div>
														<div class='col-md-12' style='margin-top: 20px;'>
															<div class='col-md-2'>
																<label>Account Number<label><label>
															</div>
															<div class='col-md-3'>
																<input class='form-control' type='text'/>
															</div>
															<div class='col-md-3 col-md-offset-2'>
																<input class='form-control' type='text'/>
															</div>
															<div class='col-md-2'>
																<label>Withholding Tax</label>
															</div>
														</div>
														<div class='col-md-12' style='margin-top: 20px;'>
															<div class='col-md-2'></div>
															<div class='col-md-3'></div>
															<div class='col-md-3 col-md-offset-2'>
																<input class='form-control' type='text'/>
															</div>
															<div class='col-md-2'>
																<label>Final Tax Withheld</label>
															</div>
														</div>
														
														<div class='col-md-12' id='custom-col' style='margin-top: 20px;'>
															<div class='col-md-2'>
																<label>Document Reference</label>
															</div>
															<div class='col-md-3'>
																<table class='table table-bordered table-hovered'>
																	<thead>
																		<th><label>Document Number</label></th>
																		<th><label>Ammount</label></th>
																	</thead>
																	<tbody>
																		<tr>
																			<td>&nbsp; </td>
																			<td></td>
																		</tr>
																		<tr>
																			<td>&nbsp; </td>
																			<td></td>
																		</tr>
																		<tr>
																			<td>&nbsp; </td>
																			<td></td>
																		</tr>
																		<tr>
																			<td>&nbsp; </td>
																			<td></td>
																		</tr>
																		<tr>
																			<td>&nbsp; </td>
																			<td></td>
																		</tr>
																		<tr>
																			<td>&nbsp; </td>
																			<td></td>
																		</tr>
																		<tr>
																			<td>&nbsp; </td>
																			<td></td>
																		</tr>
																		<tr>
																			<td>&nbsp; </td>
																			<td></td>
																		</tr>
																		<tr>
																			<td><label>Total</label></td>
																			<td></td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<div class='col-md-5 col-md-offset-2'>
																<div class='col-md-12'>
																	<div class='col-md-8' style='padding-left: 0;'>
																		<input class='form-control' type='text' />
																	</div>
																	<div class='col-md-4 sc-discount-col'>
																		<label>SC Discount</label>
																	</div>
																</div>
																<div class='col-md-12' style='margin-top: 20px;'>
																	<div class='col-md-8' style='padding-left: 0;'>
																		<input class='form-control' type='text' />
																	</div>
																	<div class='col-md-4'>
																		<label>SC ID</label>
																	</div>
																</div>
																<div class='col-md-12' style='margin-top: 20px;'>
																	<div class='col-md-8' style='padding-left: 0;'>
																		<input class='form-control' type='text' />
																	</div>
																	<div class='col-md-4'>
																		<label>Cash Discount</label>
																	</div>
																</div>
																<div class='col-md-12' style='margin-top: 20px;'>
																	<div class='col-md-8' style='padding-left: 0;'>
																		<input class='form-control' type='text' />
																	</div>
																	<div class='col-md-4'>
																		<label>Net Ammount</label>
																	</div>
																</div>
																<div class='col-md-12' style='margin-top: 20px;'>
																	<div class='col-md-8' style='padding-left: 0;'>
																		<input class='form-control' type='text' />
																	</div>
																	<div class='col-md-4'>
																		<label>Prepared By</label>
																	</div>
																</div>
																<div class='col-md-12' style='margin-top: 20px;'>
																	<div class='col-md-8' style='padding-left: 0;'>
																		<input class='form-control' type='date' />
																	</div>
																	<div class='col-md-4'>
																		<label>Date</label>
																	</div>
																</div>
																<div class='col-md-12' style='margin-top: 20px;'>
																	<div class='col-md-8' style='padding-left: 0;'>
																		<input class='form-control' type='text' />
																	</div>
																	<div class='col-md-4'>
																		<label>Received By</label>
																	</div>
																</div>
																<div class='col-md-12' style='margin-top: 20px;'>
																	<div class='col-md-8' style='padding-left: 0;'>
																		<input class='form-control' type='date' />
																	</div>
																	<div class='col-md-4'>
																		<label>Date</label>
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

						</div>
					</div>
				</div>