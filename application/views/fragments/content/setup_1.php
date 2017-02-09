<div class="side-body padding-top" ng-app="myApp" ng-controller="myCtrl">
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Setup</div>
			</div>
		</div>
		<div class='card-body' style="padding-top: 10px;">
			<div>
				<div id='setup-tab-1' class='setup-tab active'>
					<button onclick='seq_goto(1)' type='button' class='btn-circle btn btn-success btn-xs btn-raised edit ripple-effect setup-btn-circle'>
						<span>1</span>
					</button>
					<p class='title'>Company</p>
				</div>
				<div id='setup-tab-2' class='setup-tab'>
					<button onclick='seq_goto(2)' type='button' class='btn-circle btn btn-success btn-xs btn-raised edit ripple-effect setup-btn-circle'>
						<span>2</span>
					</button>
					<p class='title'>Administration</p>
				</div>
				<div id='setup-tab-3' class='setup-tab'>
					<button onclick='seq_goto(3)' type='button' class='btn-circle btn btn-success btn-xs btn-raised edit ripple-effect setup-btn-circle'>
						<span>3</span>
					</button>
					<p class='title'>Taxes</p>
				</div>
				<div id='setup-tab-4' class='setup-tab'>
					<button onclick='seq_goto(4)' type='button' class='btn-circle btn btn-success btn-xs btn-raised edit ripple-effect setup-btn-circle'>
						<span>4</span>
					</button>
					<p class='title'>COA</p>
				</div>
				<div id='setup-tab-5' class='setup-tab'>
					<button onclick='seq_goto(5)' type='button' class='btn-circle btn btn-success btn-xs btn-raised edit ripple-effect setup-btn-circle'>
						<span>5</span>
					</button>
					<p class='title'>Journals</p>
				</div>
				<div id='setup-tab-6' class='setup-tab'>
					<button onclick='seq_goto(6)' type='button' class='btn-circle btn btn-success btn-xs btn-raised edit ripple-effect setup-btn-circle'>
						<span>6</span>
					</button>
					<p class='title'>Business Partners</p>
				</div>
				<div id='setup-tab-7' class='setup-tab'>
					<button onclick='seq_goto(7)' type='button' class='btn-circle btn btn-success btn-xs btn-raised edit ripple-effect setup-btn-circle'>
						<span>7</span>
					</button>
					<p class='title'>Departments</p>
				</div>
				<div id='setup-tab-8' class='setup-tab'>
					<button onclick='seq_goto(8)' type='button' class='btn-circle btn btn-success btn-xs btn-raised edit ripple-effect setup-btn-circle'>
						<span>8</span>
					</button>
					<p class='title'>PCC</p>
				</div>
				<div id='setup-tab-9' class='setup-tab' style="">
					<button onclick='seq_goto(9)' type='button' class='btn-circle btn btn-success btn-xs btn-raised edit ripple-effect setup-btn-circle'>
						<span>9</span>
					</button>
					<p class='title'>P &amp; S</p>
				</div>
				<div id='setup-tab-10' class='setup-tab'>
					<button onclick='seq_goto(10)' type='button' class='btn-circle btn btn-success btn-xs btn-raised edit ripple-effect setup-btn-circle'>
						<span>10</span>
					</button>
					<p class='title'>Discounts</p>
				</div>
				<div id='setup-tab-11' class='setup-tab'>
					<button onclick='seq_goto(11)' type='button' class='btn-circle btn btn-success btn-xs btn-raised edit ripple-effect setup-btn-circle'>
						<span>11</span>
					</button>
					<p class='title'>Banks</p>
				</div>
				<div id='setup-tab-12' class='setup-tab'>
					<button onclick='seq_goto(12)' type='button' class='btn-circle btn btn-success btn-xs btn-raised edit ripple-effect setup-btn-circle'>
						<span>12</span>
					</button>
					<p class='title'>Transactions</p>
				</div>
				<div id='setup-tab-13' class='setup-tab'>
					<button onclick='seq_goto(13)' type='button' class='btn-circle btn btn-success btn-xs btn-raised edit ripple-effect setup-btn-circle'>
						<span>13</span>
					</button>
					<p class='title'>Documents</p>
				</div>
				<div id='setup-tab-14' class='setup-tab'>
					<button onclick='seq_goto(14)' type='button' class='btn-circle btn btn-success btn-xs btn-raised edit ripple-effect setup-btn-circle'>
						<span>14</span>
					</button>
					<p class='title'>MOP</p>
				</div>
				<div id='setup-tab-15' class='setup-tab'>
					<button onclick='seq_goto(15)' type='button' class='btn-circle btn btn-success btn-xs btn-raised edit ripple-effect setup-btn-circle'>
						<span>15</span>
					</button>
					<p class='title'>Journal Entries</p>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-12' style="margin-top: 35px;">
					<!-- <div class='panel-nameplate'>
						<h4 class='panel-label'>Company Profile</h4>
					</div> -->
					<div id="sequence1">
						<ul class='seq-canvas'>
							<li id='setup-1' setup-title='Company Profile' class='setup-1'>
								<div class='content'> 
									<div class="row">
										<div class='col-xs-12'>
											<div class='col-xs-12' id='profile-1'>
												<h3 id='company-name'><?php echo $this->session->userdata('user')->name; ?></h3>
												<label>CEO: <?php echo $this->session->userdata('user')->cb_ind_name; ?></label>
												<p id='company-address'><?php  echo $this->session->userdata('user')->cb_address; ?></p>
											</div>
											<div class='col-xs-4'>
												<div id='profile-2'>
													<label id='contact-details'>Contact Details</label>
													<p><b>Mobile No:</b> <?php echo $this->session->userdata('user')->cb_cno; ?></p>
													<p><b>Email Address:</b> <?php echo $this->session->userdata('user')->cb_email; ?></p>
												</div>
											</div>
											<div class='col-xs-4'>
												<div id='profile-3'>
													<label id='registrant-details'>Registrant Details</label>
													<p><b>Name:</b> <?php echo $this->session->userdata('user')->cor_name; ?></p>
													<p><b>Mobile No:</b> <?php echo $this->session->userdata('user')->cor_no; ?></p>
													<p><b>Email Address:</b> <?php echo $this->session->userdata('user')->cor_email; ?></p>
												</div>
											</div>
											<div class='col-xs-4'>
												<div class='form-group'>
													<table style="margin: 15px auto 0 auto;">
														<tr>
															<td style='padding-top: 10px; text-align: left; padding-right: 20px;'>
																<label>TIN #</label>
															</td>
														</tr>
														<tr>
															<td>
																<input name='tin_no' class='form-control tin-number tin-limit required no_space' type='text' placeholder='ex: 999-999-999-999V' style='width: 100%; text-align: center;'>
															</td>
														</tr>
														<tr>
															<td style='padding-top: 15px; text-align: left; padding-right: 20px;'>
																<label>Tax type</label>
															</td>
														</tr>
														<tr>
															<td>
																<select name='tax_type' class='form-control' style='width: 100%; text-align: center;'>
																	<option value='vat'>VAT</option>
																	<option value='non-vat'>Non-VAT</option>
																</select>
															</td>
														</tr>
													</table>
												</div>
											</div>
										</div>
										<div class='col-xs-12' style="border-top: 1px solid #E8E8E8; margin-top: 20px; padding: 20px;">
											<h3>Employees</h3>
											<div class='col-md-12'>
												<table class='table table-bordered table-hover'>
													<thead>
														<th>First Name</th>
														<th>Middle Name</th>
														<th>Last Name</th>
														<th>Address</th>
														<th>Contact Number</th>
														<th>Email Address</th>
													</thead>
												</table>
											</div>
										</div>
										<div class='col-xs-12' style="border-top: 1px solid #E8E8E8; margin-top: 20px; padding: 20px;">
											<h3>Branches</h3>
											<div class='col-md-12'>
												<table class='table table-bordered table-hover'>
													<thead>
														<th>Branch Name</th>
														<th>Address</th>
														<th>TIN Number</th>
														<th>Contact Number</th>
														<th>Email Address</th>
													</thead>
												</table>
											</div>
										</div>
									</div>
									<!-- <div class='row'>
										<div class='col-md-6' style="padding: 0;">
										</div>
										<div class='col-md-6' style="padding: 0;">
											<button type="button" onclick="next_setup(event)" class="setup-next btn btn-default btn-raised ripple-effect" aria-label="Next">
												Next
											</button>
										</div>
									</div> -->
								</div>
							</li>															
							<li id='setup-2' setup-title='Administration' class='setup-1'>
								<div class='content'> 
									<div class="row">
										<div class='col-md-12'>
											<div class='table-wrapper' style="margin-bottom: 30px;">
												<div class='row'>
													<div class='col-md-6' style="padding: 0;">
														<add-users-btn class='add-dynamic' style='float: left; margin-top: 10px;'></add-users-btn>
													</div>
													<div class='col-md-6' style="padding: 0;">
														<label class='table-label'>Users</label>
														<p class='n_a'>Click here! if not applicable</p>
													</div>
												</div>
												<div class='scrollable-div'>
													<table class='table table-bordered table-stripped table-input table-small table-responsive business-partner'>
														<thead>
															<th style='width: 1%;'></th>
															<th style='width: 5%;'>Username</th>
															<th style='width: 5%;'>First Name</th>
															<th style='width: 5%;'>Middle Name</th>
															<th style='width: 5%;'>Last Name</th>
															<th style='width: 8%;'>Address</th>
															<th style='width: 3%;'>Mobile No</th>
															<th style='width: 5%;'>Email Address</th>
														</thead>
														<tbody id='users-data'>
															<tr>
																<td></td>
																<td><input class='form-control table_input_required no_space' type='text' name='u_username[]' required /></td>
																<td><input class='form-control table_input_required' type='text' name='u_firstname[]' required /></td>
																<td><input class='form-control table_input_required no_space' type='text' name='u_middlename[]' required /></td>
																<td><input class='form-control table_input_required no_space' type='text' name='u_lastname[]' required /></td>
																<td><input class='form-control table_input_required no_space' type='text' name='u_address[]' placeholder='Ex: #187 Mabini Street, Baguio City' required /></td>
																<td><input class='form-control number table_input_required no_space' type='text' name='u_mobile_no[]' placeholder='Ex: 09123456789' required /></td>
																<td><input class='form-control table_input_required no_space' type='text' name='u_email_address[]' placeholder='Ex: company@docpro.com' required /></td>
															</tr>
														</tbody>
													</table>
												</div>
												<p class='error-notice'></p>
											</div>
											
											<div class='table-wrapper'>
												<div class='row'>
													<div class='col-md-6' style="margin-bottom: 0; padding: 0;">
														<add-branch-btn class='add-dynamic' style='float: left; margin-top: 10px;'></add-branch-btn>
													</div>
													<div class='col-md-6' style="padding: 0;">
														<label class='table-label'>Branch</label>
														<p class='n_a'>Click here! if not applicable</p>
													</div>
												</div>
												<div class='scrollable-div'>
													<table class='table table-bordered table-stripped table-input table-small table-responsive' style='width: 1500px;'>
														<thead>
															<th style='width: 1%;'></th>
															<th style='width: 8%;'>Branch Name</th>
															<th style='width: 8%;'>Address</th>
															<th style='width: 5%;'>TIN</th>
															<th style='width: 5%;'>Mobile No</th>
															<th style='width: 8%;'>Email Address</th>
														</thead>
														<tbody id='branch-data'>
															<tr>
																<td></td>
																<td><input class='form-control table_input_required' type='text' name='branch_name[]' required /></td>
																<td><input class='form-control table_input_required' type='text' name='branch_address[]' placeholder='Ex: #187 Mabini Street, Baguio City' required /></td>
																<td><input class='form-control tin-number table_input_required' type='text' name='branch_tin[]' placeholder='Ex: 123456789 - 001' required /></td>
																<td><input class='form-control number table_input_required' type='text' name='branch_mobile[]' placeholder='Ex: 09123456789' required /></td>
																<td><input class='form-control table_input_required' type='text' name='branch_email[]' placeholder='Ex: company@docpro.com' required /></td>
															</tr>
														</tbody>
													</table>
												</div>
												<p class='error-notice'></p>
											</div>
										</div>
									</div>		
									<div class='row'>
										<div class='col-md-6' style="padding: 0;">
											<button type="button" class="seq-prev btn btn-default btn-raised ripple-effect" aria-label="Previous">Prev</button>	  
										</div>
										<div class='col-md-6' style="padding: 0;">
											<button type="button" onclick="next_setup(event)" class="btn setup-next btn-default btn-raised ripple-effect" aria-label="Next">Next</button>
										</div>
									</div>						
								</div>
							</li>

							<li id='setup-3' setup-title='Taxes' class='setup-2'>
								<div class='content'> 
									<div class="row">
										<div class='col-md-12'>
											<div class='row' style='margin: 0; padding: 0;'>
												<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>
													<div style='padding-top: 25px;' class='form-group'>
														<add-tax-btn style='float: left; margin-top: 10px;'></add-tax-btn>
														<div class='scrollable-div'>
															<table class='table table-bordered table-stripped table-input table-small table-responsive' style='min-width: 800px;'>
																<thead>
																	<th style='width: 1%;'></th>
																	<th style='width: 15%;'>Name</th>
																	<th style="width: 3%;">Short Name</th>
																	<th style="width: 3%;">Rate</th>
																	<th style="width: 3%;">Base</th>
																</thead>
																<tbody id='tax-data'>
																	<tr>
																		<td></td>
																		<td>
																			<select name='tax[]' class='form-control tax_select' type='text' style='width: 450px; text-align: center;'>
																				<option ng-repeat="item in tax_list track by $index" short-name='{{item.t_shortname}}' rate='{{item.t_rate}}%' base='{{item.t_base}}' value='{{item.t_id}}' >{{item.t_name}}</option>
																			</select>
																		</td>
																		<td><input class='form-control' type='text' name='tax_short_name[]' value='{{tax_list[0].t_shortname}}' disabled /></td>
																		<td><input class='form-control number' type='text' name='tax_rate[]' value='{{tax_list[0].t_rate}}' disabled /></td>
																		<td><input class='form-control number' type='text' name='tax_base[]' value='{{tax_list[0].t_base}}' disabled /></td>
																	</tr>
																</tbody>
															</table>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>	
									<div class='row'>
										<div class='col-md-6'>  
											<button type="button" class="seq-prev btn btn-default setup_1 btn-raised ripple-effect" aria-label='Previous'>Prev</button>
										</div>
										<div class='col-md-6'>
											<button type="button" class="seq-next btn btn-default btn-raised ripple-effect" aria-label='Next'>
												Next
											</button>
										</div>
									</div>							
								</div>
							</li>		
							<li id='setup-4' setup-title='Chart of Accounts' class='setup-2'>
								<div class='content'> 
									<div class="row">
										<div class='col-md-12'>
											<div class='row' style='margin: 0; padding: 0;'>
												<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>
													<div class='scrollable-div'>
														<div id='coa-seq'>
															<ul class='seq-canvas'>
																<li></li>
																<li></li>
																<li></li>
																<li></li>
																<li></li>
																<li></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class='row'>
										<div class='col-md-6'>
											<button type="button" class="seq-prev btn btn-default btn-raised riplle-effect" aria-label='Previous'>
												Previous
											</button>	  
										</div>
										<div class='col-md-6'>
											<button type="button" class="seq-next btn btn-default btn-raised ripple-effect" aria-label='Next'>
												Next
											</button>
										</div>
									</div>
								</div>
							</li>		
							<li id='setup-5' setup-title='Journals' class='setup-2'>
								<div class='content'> 
									<div class="row">
										<div class='col-md-12'>
											<div class='row' style='margin: 0; padding: 0;'>
												<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>
													<div class='scrollable-div'>
														<table width="80%" style='margin: 0 auto;'>
															<tr>
																<td style="text-align: left">
																	<input id='sj' class='css-checkbox sme' type="checkbox" name="journals[]" value='sj' checked disabled>
																	<label class='' for='sj'>Sales Journal</label>
																</td>
																<td style="text-align: left">
																	<input id='rj' class='css-checkbox sme' type="checkbox" name="journals[]" value='rj' checked disabled>
																	<label class='' for='rj'>Receipts Journal</label>
																</td>
																<td style="text-align: left">
																	<input id='pj' class='css-checkbox sme' type="checkbox" name="journals[]" value='pj' checked disabled>
																	<label class='' for='pj'>Purchases Journal</label>
																</td>
															</tr>
															<tr>
																<td style="text-align: left">
																	<input id='cj' class='css-checkbox sme' type="checkbox" name="journals[]" value='cj' checked disabled>
																	<label class='' for='cj'>Collections Journal</label>
																</td>
																<td style="text-align: left">
																	<input id='dj' class='css-checkbox sme' type="checkbox" name="journals[]" value='dj' checked disabled>
																	<label class='' for='dj'>Disbursments Journal</label>
																</td>
																<td style="text-align: left">
																	<input id='gj' class='css-checkbox sme' type="checkbox" name="journals[]" value='gj' checked disabled>
																	<label class='' for='gj'>General Journal</label>
																</td>
															</tr>
														</table>
													</div>

													<div class='col-md-12' style="margin-top: 20px;">
														<div style='padding: 5px; background-color: #F3F3F3;'>
															<h4 class='panel-label'>Other Journals</h4>
														</div>
														<add-journal-btn style='float: left; margin-top: 10px;'></add-journal-btn>
														<div class='scrollable-div'>
															<table class='table table-bordered table-stripped table-input table-small table-responsive' style='min-width: 800px;'>
																<thead>
																	<th style="width: 5%;"></th>
																	<th>Name</th>
																	<th>Short Name</th>
																</thead>
																<tbody id='journal-data'>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class='row'>
										<div class='col-md-6'>
											<button type="button" class="seq-prev btn btn-default" aria-label='Previous'>
												Previous
											</button>	  
										</div>
										<div class='col-md-6'>
											<button type="button" class="btn btn-info setup_3">
												Go to <b>SETUP 3</b>
											</button>
										</div>
									</div>
								</div>
							</li>	

							<li id='setup-6' setup-title='Businesss Partners' class='setup-3'>
								<div class='content'> 
									<div class="row">
										<div class='col-md-12'>
											<div class='row' style='margin: 0; padding: 0;'>
												<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>

													<add-bp-btn style='float: left; margin-top: 10px;'></add-bp-btn>
													<div class='scrollable-div'>
														<table class='table table-bordered table-stripped table-input table-small table-responsive business-partner'>
															<thead>
																<th style='width: 2%;'></th>
																<th style='width: 5%;'>Type</th>
																<th style='width: 10%;'>Name</th>
																<th style='width: 10%;'>Short Name</th>
																<th style='width: 10%;'>Address</th>
																<th style='width: 10%;'>Classification</th>
																<th style='width: 5%;'>TIN</th>
																<th style='width: 5%;'>Tax Type</th>
																<th style='width: 5%;'>Business Style</th>
																<th style='width: 10%;'>Particulars</th>
															</thead>
															<tbody id='bp-data'>
																<tr>
																	<td></td>
																	<td>
																		<select name='bp_type[]' class='form-control bp_type_select' >
																			<option value='2'>Company</option>
																			<option value='1'>Individual</option>
																			<option value='3'>Government</option>
																		</select>
																	</td>
																	<td><input class='form-control' type='text' name='bp_name[]' placeholder='Company name' required /></td>
																	<td><input class='form-control' type='text' name='bp_shortname' required ></td>
																	<td><input class='form-control' type='text' name='bp_address[]' placeholder='Ex: #187 Mabini Street, Baguio City' required /></td>
																	<td>
																		<select name='bp_class[]' class='form-control bp_class' style='width: 450px; text-align: center;'>
																			<option ng-repeat="item in bp_type_class_list track by $index" value='{{item.bpc_class}}'>{{item.bpc_class}}</option>
																		</select>
																		<input name='bp_class[]' class='form-control' type="text" style='display: none; border-top: 1px solid #CCC;' required disabled>
																	</td>
																	
																	<td>
																		<input class='form-control tin-number' type='text' name='bp_tin[]' placeholder='Ex: 123456789 - 000' required />
																	</td>
																	<td>
																		<select name='bp_tax_type[]' class='form-control'>
																			<option value='2'>VAT</option>
																			<option value='8'>Non-vat</option>
																		</select>
																	</td>
																	<td>
																		<input class='form-control' type='text' name='bp_style[]' required />
																	</td>
																	<td>
																		<input class='form-control' type='text' name='bp_particulars[]' required />
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class='row'>
										<div class='col-md-6'>
											<button type="button" class="seq-prev btn btn-info setup_2" aria-label="Previous">
												Go back to <b>SETUP 2</b>
											</button>
										</div>
										<div class='col-md-6'>
											<button type="button" class="btn btn-default required ">
												Next
											</button>
										</div>
									</div>
								</div>
							</li>							
							<li id='setup-7' setup-title='Departments' class='setup-3'>
								<div class='content'> 
									<div class="row">
										<div class='col-md-12'>
											<div class='row' style='margin: 0; padding: 0;'>
												<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>
													<add-department-btn style='float: left; margin-top: 10px;'></add-department-btn>
													<div class='scrollable-div'>
														<table class='table table-bordered table-stripped table-input table-small table-responsive' style='width: 1065px;'>
															<thead>
																<th style='width: 5%;'></th>
																<th>Name</th>
																<th>Short Name</th>
															</thead>
															<tbody id='department-data'>
																<tr>
																	<td></td>
																	<td><input class='form-control' type='text' name='dept_name[]' required ></td>
																	<td><input class='form-control' type='text' name='dept_shortname[]' required ></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class='row'>
										<div class='col-md-6'>
											<button type="button" class="seq-prev btn btn-default" aria-label="Previous">
												Previous
											</button>	  
										</div>
										<div class='col-md-6'>
											<button type="button" class="seq-next btn btn-warning dept_skip_btn skip_btn" aria-label="Next" style='float: right; margin-left: 10px;'>
												Skip
											</button>
											<button type="button" class="btn btn-default dept_next_btn required">
												Next
											</button>
										</div>
									</div>
								</div>
							</li>
							<li id='setup-8' setup-title='Profit Cost Centers' class='setup-3'>
								<div class='content'> 
									<div class="row">
										<div class='col-md-12'>
											<div class='row' style='margin: 0; padding: 0;'>
												<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>
													<add-profit-cost-center-btn style='float: left; margin-top: 10px;'></add-profit-cost-center-btn>
													<div class='scrollable-div'>
														<table class='table table-bordered table-stripped table-input table-small table-responsive' style='width: 1065px;'>
															<thead>
																<th style='width: 5%;'></th>
																<th>Name</th>
																<th>Short Name</th>
																<th>Department</th>
															</thead>
															<tbody id='profit-cost-center-data'>
																<tr>
																	<td></td>
																	<td><input class='form-control' type='text' name='pcc_name[]' required ></td>
																	<td><input class='form-control' type='text' name='pcc_shortname[]' required ></td>
																	<td>
																		<select class='form-control' name='pcc_dept[]' required ></select>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class='row'>
										<div class='col-md-6'>
											<button type="button" class="seq-prev btn btn-default skip_prev_btn" aria-label="Previous">
												Previous
											</button>	  
										</div>
										<div class='col-md-6'>
											<button type="button" class="seq-next btn btn-warning pcc_skip_btn skip_btn" aria-label="Next" style='float: right; margin-left: 10px;'>
												Skip
											</button>
											<button type="button" class="btn btn-default pcc_next_btn required">
												Next
											</button>
										</div>
									</div>
								</div>
							</li>
							<li id='setup-9' setup-title='Products' class='setup-3'>
								<div class='content'> 
									<div class="row">
										<div class='col-md-12'>
											<div class='row' style='margin: 0; padding: 0;'>
												<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>
													<add-product-btn style='float: left; margin-top: 10px;'></add-product-btn>
													<div class='scrollable-div' style='margin-bottom: 20px;'>
														<table class='table table-bordered table-stripped table-input table-small table-responsive' style='width: 1300px;'>
															<thead>
																<th style='width: 4%;'></th>
																<th>Name</th>
																<th>Short Name</th>
																<th>Profit Cost Center</th>
																<th>Department</th>
															</thead>
															<tbody id='product-data'>
																<tr>
																	<td></td>
																	<td><input class='form-control' type='text' name='product_name[]' required ></td>
																	<td><input class='form-control' type='text' name='product_shortname[]' required ></td>
																	<td>
																		<select name='product_pcc[]' class='form-control' required ></select>
																	</td>
																	<td>
																		<select name='product_department[]' class='form-control' required ></select>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>

													<div style='padding: 5px; background-color: #F3F3F3;'>
														<h4 class='panel-label'>Services</h4>
													</div>

													<add-service-btn style='float: left; margin-top: 10px;'></add-service-btn>
													<div class='scrollable-div'>
														<table class='table table-bordered table-stripped table-input table-small table-responsive' style='width: 1300px;'>
															<thead>
																<th style='width: 4%;'></th>
																<th>Name</th>
																<th>Short Name</th>
																<th>Profit Cost Center</th>
																<th>Department</th>
															</thead>
															<tbody id='service-data'>
																<tr>
																	<td></td>
																	<td><input class='form-control' type='text' name='service_name[]' required ></td>
																	<td><input class='form-control' type='text' name='service_shortname[]' required ></td>
																	<td>
																		<select name='service_pcc[]' class='form-control' required ></select>
																	</td>
																	<td>
																		<select name='service_department[]' class='form-control' required ></select>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class='row'>
										<div class='col-md-6'>
											<button type="button" class="seq-prev btn btn-default skip_prev_btn" aria-label="Previous">
												Previous
											</button>	  
										</div>
										<div class='col-md-6'>
											<button type="button" class="seq-next btn btn-warning skip_btn" aria-label="Next" style='float: right; margin-left: 10px;'>
												Skip
											</button>
											<button type="button" class="btn btn-default required">
												Next
											</button>
										</div>
									</div>
								</div>
							</li>	
							<li id='setup-10' setup-title='Trade Discounts' class='setup-3'>
								<div class='content'> 
									<div class="row">
										<div class='col-md-12'>
											<div class='row' style='margin: 0; padding: 0;'>
												<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>
													<add-trade-discount-btn style='float: left; margin-top: 10px;'></add-trade-discount-btn>
													<div class='scrollable-div'>
														<table class='table table-bordered table-stripped table-input table-small table-responsive' style='width: 1065px;'>
															<thead>
																<th style='width: 5%'></th>
																<th>Name</th>
																<th>Short Name</th>
																<th>Rate</th>
															</thead>
															<tbody id='trade-discount-data'>
																<tr>
																	<td></td>
																	<td><input class='form-control' type='text' name='td_name[]' required /></td>
																	<td><input class='form-control' type='text' name='td_shortname[]' required /></td>
																	<td><input class='form-control' type='text' name='td_rate[]' required /></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class='row'>
										<div class='col-md-6'>
											<button type="button" class="seq-prev btn btn-default skip_prev_btn" aria-label="Previous">
												Previous
											</button>	  
										</div>
										<div class='col-md-6'>
											<button type="button" class="seq-next btn btn-warning skip_btn" aria-label="Next" style='float: right; margin-left: 10px;'>
												Skip
											</button>
											<button type="button" class="btn btn-default required">
												Next
											</button>
										</div>
									</div>
								</div>
							</li>
							<li id='setup-11' setup-title='Banks' class='setup-3'>
								<div class='content'> 
									<div class="row">
										<div class='col-md-12'>
											<div class='row' style='margin: 0; padding: 0;'>
												<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>
													<add-bank-btn style='float: left; margin-top: 10px;'></add-bank-btn>
													<div class='scrollable-div'>
														<table class='table table-bordered table-stripped table-input table-small table-responsive' style='width: 1300px;'>
															<thead>
																<th style='width: 4%;'></th>
																<th style='width: 40%;'>Name</th>
																<th>Account Number</th>
																<th>Classification</th>
															</thead>
															<tbody id='bank-data'>
																<tr>
																	<td></td>
																	<td>
																		<select class='form-control' name='bank_id[]'>
																			<option ng-repeat='item in bank_list track by $index' value='{{item.b_id}}'>{{item.b_name}}</option>
																		</select>
																	</td>
																	<td><input class='form-control' type='text' name='bank_acc_number[]' /></td>
																	<td><input class='form-control' type='text' name='bank_class[]' placeholder='ex: savings / checking'/></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class='row'>
										<div class='col-md-6'>
											<button type="button" class="seq-prev btn btn-default skip_prev_btn" aria-label="Previous">
												Previous
											</button>	  
										</div>
										<div class='col-md-6'>
											<button type='submit' class="btn btn-primary submit-setup">
												Save
											</button>
										</div>
									</div>
								</div>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>