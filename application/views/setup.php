<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.ico" />
		<title>DocPro: signup</title>
		
		<link href="<?php echo base_url(); ?>libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/animatecss/animate.css">
		
		<link href="<?php echo base_url(); ?>libs/wizard-master/css/prettify.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>libs/selectize/css/selectize.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>libs/selectize/css/selectize.default.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>libs/selectize/css/selectize.legacy.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>libs/flat/bower_components/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/css/dataTables.bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/checkbox/style.css">

		<link href='<?php echo base_url(); ?>/assets/css/setup.css' rel='stylesheet' type='text/css'>

	</head>
	<body style="background: url('<?php echo base_url(); ?>assets/img/setup.png') no-repeat;" ng-app="myApp" ng-controller="myCtrl">
		<div class='main-content'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-12'>
						<div>
							<img src='<?php echo base_url(); ?>assets/img/250x250.png'/>
							<label id='setup-label' class='alert alert-info'><p>SETUP I</p><p>Company</p></label>
							<div class="progress progress-danger progress-striped active">
								<div class="progress-bar" role="progressbar" aria-valuenow="9.091" aria-valuemin="0" aria-valuemax="100" style="width: 9.091%;"></div>
							</div>

							<div id='banner-nameplate' class='col-md-12'>
								<h4 style='text-align: center;'>
									<?php echo $user->name ?>
								</h4>
								<p style='font-style: italic; text-align: center;'><?php echo $user->cb_address; ?></p>
							</div>

							<form action="<?php echo base_url(); ?>setup/save_setup" method='post'>
								<div id='sequence1'>
									<ul class='seq-canvas'>
										<li class='setup-1'>
											<div class='content'> 
												<div class="row">
													<div class="col-xs-12">
														<div class='panel-nameplate'>
															<h4 class='panel-label'>Profile</h4>
														</div>
														<div class='form-group'>
															<table style="margin: 0 auto;">
																<tr>
																	<td style='padding-top: 10px; text-align: left; padding-right: 20px;'>
																		<label>Classification</label>
																	</td>
																</tr>
																<tr>
																	<td>
																		<select id='company_classification' name='company_classification' class='form-control' type='text' style='width: 450px; text-align: center;' required>
																			<option ng-repeat="item in class_list track by $index" value='{{item.bpc_class}}' style='padding: 10px; text-indent: 10px;' repeat-company-class>{{item.bpc_class}}</option>
																		</select>
																	</td>
																</tr>
																<tr id='other_classification' style='display: none;'>
																	<td>
																		<input class='form-control' type='text' name='other_classification' style='text-align: center;'>
																	</td>
																</tr>
																<tr>
																	<td style='padding-top: 10px; text-align: left; padding-right: 20px;'>
																		<label>Company Type</label>
																	</td>
																</tr>
																<tr>
																	<td>
																		<input name='company_type' class='form-control' type='text' value="<?php echo $user->bpt_type; ?>" style='width: 450px; text-align: center;' disabled>
																	</td>
																</tr>
																<tr>
																	<td style='padding-top: 10px; text-align: left; padding-right: 20px;'>
																		<label>Tax type</label>
																	</td>
																</tr>
																<tr>
																	<td>
																		<input name='tax_type' class='form-control' type='text' value="<?php echo $user->tt_name; ?>" style='width: 450px; text-align: center;' disabled>
																	</td>
																</tr>
																<tr>
																	<td style='padding-top: 10px; text-align: left; padding-right: 20px;'>
																		<label>TIN</label>
																	</td>
																</tr>
																<tr>
																	<td>
																		<input id='companyaddress' name='companyaddress-company' class='form-control' type='text' value="<?php echo $user->cb_tin; ?>" style='width: 450px; text-align: center;' disabled>
																	</td>
																</tr>
															</table>
														</div>
													</div>
												</div>
												<div class='row'>
													<div class='col-md-6'>
													</div>
													<div class='col-md-6'>
														<button type="button" class="seq-next btn btn-default" aria-label="Next">
															Next
														</button>
													</div>
												</div>
											</div>
										</li>															
										<li class='setup-1'>
											<div class='content'> 
												<div class="row">
													<div class='col-md-12'>
														<div class='panel-nameplate'>
															<h4 class='panel-label'>Administration</h4>
														</div>

														<div class='row'>
															<div class='col-md-6'>
																<add-users-btn style='float: left; margin-top: 10px;'></add-users-btn>
															</div>
															<div class='col-md-6' style="padding: 0;">
																<label class='table-label'>Users</label>
																<p class='n_a'>Click here! if not applicable</p>
															</div>
														</div>
														<div class='scrollable-div' style="margin-bottom: 50px;">
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
																		<td><input class='form-control' type='text' name='u_username[]' required /></td>
																		<td><input class='form-control' type='text' name='u_firstname[]' required /></td>
																		<td><input class='form-control' type='text' name='u_middlename[]' required /></td>
																		<td><input class='form-control' type='text' name='u_lastname[]' required /></td>
																		<td><input class='form-control' type='text' name='u_address[]' placeholder='Ex: #187 Mabini Street, Baguio City' required /></td>
																		<td><input class='form-control number' type='text' name='u_mobile_no[]' placeholder='Ex: 09123456789' required /></td>
																		<td><input class='form-control' type='text' name='u_email_address[]' placeholder='Ex: company@docpro.com' required /></td>
																	</tr>
																</tbody>
															</table>
														</div>

														<div class='row'>
															<div class='col-md-6'>
																<add-branch-btn style='float: left; margin-top: 10px;'></add-branch-btn>
															</div>
															<div class='col-md-6'>
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
																		<td><input class='form-control' type='text' name='branch_name[]' required /></td>
																		<td><input class='form-control' type='text' name='branch_address[]' placeholder='Ex: #187 Mabini Street, Baguio City' required /></td>
																		<td><input class='form-control tin-number' type='text' name='branch_tin[]' placeholder='Ex: 123456789 - 001' required /></td>
																		<td><input class='form-control number' type='text' name='branch_mobile[]' placeholder='Ex: 09123456789' required /></td>
																		<td><input class='form-control' type='text' name='branch_email[]' placeholder='Ex: company@docpro.com' required /></td>
																	</tr>
																</tbody>
															</table>
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
														<button type="button" class="btn btn-info setup_2">
															Go to <b>SETUP 2</b>
														</button>
													</div>
												</div>						
											</div>
										</li>

										<li class='setup-2'>
											<div class='content'> 
												<div class="row">
													<div class='col-md-12'>
														<div class='row' style='margin: 0; padding: 0;'>
															<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>
																<div style='padding: 5px; background-color: #F3F3F3;'>
																	<h4 class='panel-label'>Taxes</h4>
																</div>
																<div style='padding-top: 25px;' class='form-group'>
																	<add-tax-btn style='float: left; margin-top: 10px;'></add-tax-btn>
																	<div class='scrollable-div'>
																		<table class='table table-bordered table-stripped table-input table-small table-responsive' style='min-width: 800px;'>
																			<thead>
																				<th style='width: 1%;'></th>
																				<th style='width: 5%;'>Name</th>
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
														<button type="button" class="seq-prev btn btn-info setup_1" aria-label='Previous'>
															Go back to <b>SETUP 1</b>
														</button>
													</div>
													<div class='col-md-6'>
														<button type="button" class="seq-next btn btn-default" aria-label='Next'>
															Next
														</button>
													</div>
												</div>							
											</div>
										</li>		
										<li class='setup-2'>
											<div class='content'> 
												<div class="row">
													<div class='col-md-12'>
														<div class='row' style='margin: 0; padding: 0;'>
															<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>
																<div style='padding: 5px; background-color: #F3F3F3;'>
																	<h4 class='panel-label'>Chart of Accounts</h4>
																</div>

																<div class='scrollable-div'>
																	
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
														<button type="button" class="seq-next btn btn-default" aria-label='Next'>
															Next
														</button>
													</div>
												</div>
											</div>
										</li>		
										<li class='setup-2'>
											<div class='content'> 
												<div class="row">
													<div class='col-md-12'>
														<div class='row' style='margin: 0; padding: 0;'>
															<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>
																<div style='padding: 5px; background-color: #F3F3F3;'>
																	<h4 class='panel-label'>Journals</h4>
																</div>

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

										<li class='setup-3'>
											<div class='content'> 
												<div class="row">
													<div class='col-md-12'>
														<div class='row' style='margin: 0; padding: 0;'>
															<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>
																<div style='padding: 5px; background-color: #F3F3F3;'>
																	<h4 class='panel-label'>Business Partner</h4>
																</div>

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
										<li class='setup-3'>
											<div class='content'> 
												<div class="row">
													<div class='col-md-12'>
														<div class='row' style='margin: 0; padding: 0;'>
															<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>
																<div style='padding: 5px; background-color: #F3F3F3;'>
																	<h4 class='panel-label'>Departments</h4>
																</div>

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
										<li class='setup-3'>
											<div class='content'> 
												<div class="row">
													<div class='col-md-12'>
														<div class='row' style='margin: 0; padding: 0;'>
															<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>
																<div style='padding: 5px; background-color: #F3F3F3;'>
																	<h4 class='panel-label'>Profit Cost Centers</h4>
																</div>

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
										<li class='setup-3'>
											<div class='content'> 
												<div class="row">
													<div class='col-md-12'>
														<div class='row' style='margin: 0; padding: 0;'>
															<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>
																<div style='padding: 5px; background-color: #F3F3F3;'>
																	<h4 class='panel-label'>Products</h4>
																</div>

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
										<li class='setup-3'>
											<div class='content'> 
												<div class="row">
													<div class='col-md-12'>
														<div class='row' style='margin: 0; padding: 0;'>
															<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>
																<div style='padding: 5px; background-color: #F3F3F3;'>
																	<h4 class='panel-label'>Trade Discounts</h4>
																</div>

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
										<li class='setup-3'>
											<div class='content'> 
												<div class="row">
													<div class='col-md-12'>
														<div class='row' style='margin: 0; padding: 0;'>
															<div class='col-md-12' style='min-height: 300px; margin-bottom: 10px;'>
																<div style='padding: 5px; background-color: #F3F3F3;'>
																	<h4 class='panel-label'>Banks</h4>
																</div>

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
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>

		<script src="<?php echo base_url(); ?>/libs/metro/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>/libs/metro/js/metro.js"></script>
		<script src="<?php echo base_url(); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>/libs/wizard-master/js/jquery.bootstrap.wizard.js"></script>
		<script src="<?php echo base_url(); ?>/libs/wizard-master/js/prettify.js"></script>
		<script src="<?php echo base_url(); ?>/libs/selectize/js/standalone/selectize.min.js"></script>
		<script src="<?php echo base_url(); ?>/libs/notify/bootstrap-notify.min.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/js/dataTables.bootstrap.min.js"></script>

		<script src="<?php echo base_url(); ?>/libs/sequence/scripts/imagesloaded.pkgd.min.js"></script>
		<script src="<?php echo base_url(); ?>/libs/sequence/scripts/hammer.min.js"></script>
		<script src="<?php echo base_url(); ?>/libs/sequence/scripts/sequence.min.js"></script>
		<script src="<?php echo base_url(); ?>/libs/sequence/scripts/sequence-theme.basic.js"></script>

		<script type="text/javascript" src="<?php echo base_url(); ?>libs/angular/angular.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/apps/setup/app.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/apps/setup/controllers/controller.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/apps/setup/directives/directive.js"></script>
  		
  		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/setup.js"></script>
  	</body>
</html>
