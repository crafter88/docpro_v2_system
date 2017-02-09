<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.ico" />
		<title>DocPro: signup</title>
		
		<link href="<?php echo base_url(); ?>libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		
		<link href="<?php echo base_url(); ?>libs/wizard-master/css/prettify.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>libs/selectize/css/selectize.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>libs/selectize/css/selectize.default.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>libs/selectize/css/selectize.legacy.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>libs/flat/bower_components/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/css/dataTables.bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/checkbox/style.css">
		<style>
			.nav-pills > li > a{
				border-radius: 0;
			}
			.nav-pills > li:first-child > a{
				border-top-left-radius: 2px;
				border-bottom-left-radius: 2px;
			}
			.nav-pills > li:last-child > a{
				border-top-right-radius: 2px;
				border-bottom-right-radius: 2px;
			}
			#pills > ul{
				margin-bottom: 20px;
			}
			#pills > ul li{
				background-color: #FFF;
				margin: 0;
				width: 20%;
			}
		</style>

		<style>
			.custom-input{
			    padding: 25px 15px;
			    border: 1px solid #ccc;
			    border-radius: 3px;
			    margin-bottom: 10px;
			    width: 100%;
			    box-sizing: border-box;
			    font-family: montserrat;
			    color: #2C3E50;
			    font-size: 13px;
			}
		</style>

		<style>
			.table-input input[type=text]{
				border: none;
				background-color: transparent;
				box-shadow: none;
				text-align: center;
			}
			.table-input td{
				padding: 0 !important;
			}
			.table-input th{
				background-color: #EFEFEF;
				border-bottom: 0 !important;
				border-top: 0 !important;
				text-align: center;
			}
			.table-input th:first-child{
				border-left: 0 !important;
			}
			.table-input th:last-child{
				border-right: 0 !important;
			}
			.table-input td button{
				border-radius: 50%;
				/*background-color: red;*/
				margin: 18% 0% 0% 27%;
			}	
			.btn-input-add{
				border-radius: 0;
/*				background-color: blue;*/
				margin-bottom: 10px;
			}

			.table-small{
				font-size: 11px;
			}
			.table-medium{
				font-size: 13px;
			}
		</style>

		<style>
			.table-scrollable .header-fixed {
			    width: 100% 
			}

			.table-scrollable .header-fixed > thead,
			.table-scrollable .header-fixed > tbody,
			.table-scrollable .header-fixed > thead > tr,
			.table-scrollable .header-fixed > tbody > tr,
			.table-scrollable .header-fixed > thead > tr > th,
			.table-scrollable .header-fixed > tbody > tr > td {
			    display: block;
			}

			.table-scrollable .header-fixed > tbody > tr:after,
			.table-scrollable .header-fixed > thead > tr:after {
			    content: ' ';
			    display: block;
			    visibility: hidden;
			    clear: both;
			}

			.table-scrollable .header-fixed > tbody {
			    overflow-y: auto;
			    height: 150px;
			}

			.table-scrollable .header-fixed > tbody > tr > td,
			.table-scrollable .header-fixed > thead > tr > th {
			    width: 20%;
			    float: left;
			}
		</style>

		<style>
			.scrollable-div{
				overflow: auto;
				width: 100%;
			}
			.business-partner{
				min-width: 2000px;
			}
			.business-partner th:nth-child(2){
				width: 9%;
			}
			.business-partner th:nth-child(3){
				width: 11%;
			}
			.business-partner th:nth-child(4), 
			.business-partner th:nth-child(5), 
			.business-partner th:nth-child(6), 
			.business-partner th:nth-child(7){
				width: 7%;
			}
			.business-partner th:nth-child(8), .business-partner th:nth-child(9){
				width: 12%;
			}
			.business-partner th:nth-child(10){
				width: 20%;
			}
			.business-partner th:nth-child(11){
				width: 8%;
			}
			.business-partner th:nth-child(1){
				width: 2%;
			}
		</style>
	</head>
	<body style="background: url('<?php echo base_url(); ?>assets/img/setup.png') no-repeat;" ng-app="myApp" ng-controller="myCtrl">
		<div style='background-color: rgba(0, 0, 0, 0.58); min-height: 100vh;'>
			<div class='container'>
				<form action='signup/add' method='post'>
				<div class='row' style='margin: 50px 0;'>
					<div class='col-md-12'>
						<div style='border: 1px solid #D5D5D5; background-color: #FFF; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3); padding: 10px;'>
							<section id="wizard">
							<div id="pills">
									<img src='<?php echo base_url(); ?>assets/img/250x250.png' style='display: table; height: 100px; float: left;'/>
									<label class='alert alert-info' style='width: 90.81%; text-align: center; margin-bottom: 0; border-bottom-left-radius: 0; border-bottom-right-radius: 0;'>Please setup your account</label>
									<div id="bar" class="progress progress-danger progress-striped active" style='border-radius: 0;'>
										<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
									</div>
								
									<ul style="font-family: 'Roboto Condensed', sans-serif; font-size: 11px; margin-bottom: 0;">
										<li><a href="#pills-tab1" data-toggle="tab" style="font-size: 16px; display: none;">1. Company Profile</a></li>
										<li><a href="#pills-tab2" data-toggle="tab" style="font-size: 16px; display: none;">2. Charts of Accounts</a></li>
										<li><a href="#pills-tab3" data-toggle="tab" style="font-size: 16px; display: none;">3. Type of Tax</a></li>
										<li><a href="#pills-tab4" data-toggle="tab" style="font-size: 16px; display: none;">4. Departments</a></li>
										<li><a href="#pills-tab5" data-toggle="tab" style="font-size: 16px; display: none;">5. Profit Cost Centers</a></li>
										<li><a href="#pills-tab6" data-toggle="tab" style="font-size: 16px; display: none;">6. Products or Services</a></li>
										<li><a href="#pills-tab7" data-toggle="tab" style="font-size: 16px; display: none;">7. Business Partners</a></li>
										<li><a href="#pills-tab8" data-toggle="tab" style="font-size: 16px; display: none;">8. Types of Payments</a></li>
										<li><a href="#pills-tab9" data-toggle="tab" style="font-size: 16px; display: none;">9. Modes of Payments</a></li>
										<li><a href="#pills-tab10" data-toggle="tab" style="font-size: 16px; display: none;">10. Banks</a></li>
										<li><a href="#pills-tab11" data-toggle="tab" style="font-size: 16px; display: none;">11. Deductions</a></li>
									</ul>
									
									<div class="tab-content">
										<div class="tab-pane" id="pills-tab1">	
											<div>
												<div style='padding: 5px; background-color: #E8E8E8;'>
													<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; padding-top: 6px; text-align: center; color: #2C3E50; text-transform: uppercase; font-weight: bold; margin-top: 8px;">Type of Company</h4>
												</div>
												<div style='padding-left: 200px; padding-top: 25px;' class='form-group'>
													<input type="checkbox" class="css-checkbox sme" id='check-individual' name="company_type" value='Individual' />
													<label for="check-individual" class="css-label sme depressed">Individual</label>

													<input type="checkbox" class="css-checkbox sme" id='check-nonindividual' name="company_type" value='Non-individual' />
													<label for="check-nonindividual" class="css-label sme depressed" style='margin-left: 153px;' >Non-Individual</label>

													<input type="checkbox" class="css-checkbox sme" id='check-government' name='company_type' value='Government' disabled />
													<label for="check-government" class="css-label sme depressed" style='margin-left: 153px;' >Government</label>
												</div>

												<div class='individual' style='display: none;'>
													<div style='padding: 5px; background-color: #F3F3F3; margin-top: 35px;'>
														<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; padding-top: 6px; text-align: center; color: #2C3E50; text-transform: uppercase; font-weight: bold; margin-top: 8px;">Company Details</h4>
													</div>
													<div style='padding-left: 350px; padding-top: 25px;' class='form-group'>
														<table>
															<tr>
																<td style='padding-top: 10px; text-align: left; padding-right: 20px;'>
																	<label>Company Individual Name:</label>
																</td>
															</tr>
															<tr>
																<td>
																	<input id='companyindname' name='companyindname-company' class='form-control custom-input' type='text' style='width: 450px;'>
																</td>
															</tr>
															<tr>
																<td style='padding-top: 10px; text-align: left; padding-right: 20px;'>
																	<label>Address:</label>
																</td>
															</tr>
															<tr>
																<td>
																	<input id='companyaddress' name='companyaddress-company' class='form-control custom-input' type='text' style='width: 450px;'>
																</td>
															</tr>
															<tr>
																<td style='padding-top: 10px; text-align: left; padding-right: 20px;'>
																	<label>Company TIN:</label>
																</td>
															</tr>
															<tr>
																<td>
																	<input id='companytin' name='companytin-company' class='form-control custom-input' type='text' style='width: 450px;'>
																</td>
															</tr>
														</table>
														<input name='bpt' value='1' type='hidden'>
													</div>
												</div>

												<div class='non-individual' style='display: none;'>
													<div style='padding: 5px; background-color: #F3F3F3; margin-top: 35px;'>
														<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; padding-top: 6px; text-align: center; color: #2C3E50; text-transform: uppercase; font-weight: bold; margin-top: 8px;">Company Details</h4>
													</div>
													<div style=' padding-top: 10px; padding-left: 350px;' class='form-group'>
														<table>
															<tr>
																<td style='padding-top: 10px; text-align: left; padding-right: 20px;'>
																	<label>Company Name:</label>
																</td>
															</tr>
															<tr>
																<td>
																	 <input id='company-name' name='company-name-company' class='form-control custom-input' type='text' style='width: 450px; text-align: center;'>
																</td>
															</tr>
															<tr>
																<td style='padding-top: 10px; text-align: left; padding-right: 20px;'>
																	<label>Address:</label>
																</td>
															</tr>
															<tr>
																<td>
																	 <input id='mainbranchadd' name='mainbranchadd-company' class='form-control custom-input' type='text' style='width: 450px; text-align: center;'>
																</td>
															</tr>
															<tr>
																<td style='padding-top: 10px; text-align: left; padding-right: 20px;'>
																	<label>Company TIN:</label>
																</td>
															</tr>
															<tr>
																<td>
																	<input id='company-tin' name='company-tin-company' class='form-control custom-input' type='text' style='width: 450px; text-align: center;'>
																</td>
															</tr>
														</table>
													</div>
												</div>	
											</div>
										</div>
										<div class="tab-pane" id="pills-tab2">
											<div>
												<div style='padding: 5px; background-color: #e8e8e8;'>
													<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; padding-top: 6px; text-align: center; color: #2C3E50; text-transform: uppercase; font-weight: bold; margin-top: 8px;">Chart of Accounts</h4>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="pills-tab3">
											<div>
												<div style='padding: 5px; background-color: #e8e8e8;'>
													<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; padding-top: 6px; text-align: center; color: #2C3E50; text-transform: uppercase; font-weight: bold; margin-top: 8px;">Taxes</h4>
												</div>
												<div style='padding-left: 70px; padding-top: 25px;' class='form-group'>
													<table width='100%'>
														<tr>
															<td style='padding-bottom: 10px;'>
																<input type="checkbox" class="css-checkbox sme" id='it' name="taxes[]" value='income tax' checked />
																<label for="it" class="css-label sme depressed">Income Tax</label>
															</td>
															<td style='padding-bottom: 10px;'>
																<input type="checkbox" class="css-checkbox sme" id='vat' name="taxes[]" value='value added tax' checked />
																<label for="vat" class="css-label sme depressed">Value Added Tax</label>
															</td>
															<td style='padding-bottom: 10px;'>
																<input type="checkbox" class="css-checkbox sme" id='pt' name="taxes[]" value='percentage tax' checked />
																<label for="pt" class="css-label sme depressed">Percentage Tax</label>
															</td>
															<td style='padding-bottom: 10px;'>
																<input type="checkbox" class="css-checkbox sme" id='et' name="taxes[]" value='excise tax' checked />
																<label for="et" class="css-label sme depressed">Excise Tax</label>
															</td>
														</tr>
														<tr>
															<td style='padding-bottom: 10px;'>
																<input type="checkbox" class="css-checkbox sme" id='ewt' name="taxes[]" value='expanding withholding tax' checked />
																<label for="ewt" class="css-label sme depressed">Expanding Withholding Tax</label>
															</td>
															<td style='padding-bottom: 10px;'>
																<input type="checkbox" class="css-checkbox sme" id='fwt' name="taxes[]" value='final withholding tax' checked />
																<label for="fwt" class="css-label sme depressed">Final Withholding Tax</label>
															</td>
															<td style='padding-bottom: 10px;'>
																<input type="checkbox" class="css-checkbox sme" id='st' name="taxes[]" value='special tax' checked />
																<label for="st" class="css-label sme depressed">Special Tax</label>
															</td>
															<td style='padding-bottom: 10px;'>
																<input type="checkbox" class="css-checkbox sme" id='nvat' name="taxes[]" value='non-value added tax' checked />
																<label for="nvat" class="css-label sme depressed">Non-Value Added Tax</label>
															</td>
														</tr>	
													</table>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="pills-tab4">
											<div style='padding: 5px; background-color: #e8e8e8;'>
												<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; padding-top: 6px; text-align: center; color: #2C3E50; text-transform: uppercase; font-weight: bold; margin-top: 8px;">Departments</h4>
											</div>

											<div class='row' style='margin-top: 10px;'>
												<div class='col-md-12'>
													<!-- <button type='button' class='btn btn-primary btn-sm btn-input-add'>Add</button> -->
													<add-department-btn></add-department-btn>
													<table class='table table-bordered table-stripped table-input table-medium'>
														<thead>
															<th>Code</th>
															<th>Shortname</th>
															<th>Long Name</th>
															<th></th>
														</thead>
														<tbody id="department-data">
														</tbody>
													</table>
												</div>
											</div>	
										</div>
										<div class="tab-pane" id="pills-tab5">
											<div style='padding: 5px; background-color: #e8e8e8;'>
												<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; padding-top: 6px; text-align: center; color: #2C3E50; text-transform: uppercase; font-weight: bold; margin-top: 8px;">Profit Cost Centers</h4>
											</div>

											<div class='row' style='margin-top: 10px;'>
												<div class='col-md-12'>
													<!-- <button type='button' class='btn btn-primary btn-sm btn-input-add'>Add</button> -->
													<add-profit-cost-center-btn></add-profit-cost-center-btn>
													<table class='table table-bordered table-stripped table-input table-medium'>
														<thead>
															<th>Code</th>
															<th>Shortname</th>
															<th>Long Name</th>
															<th></th>
														</thead>
														<tbody id='profit-cost-center-data'>
														</tbody>
													</table>
												</div>
											</div>	
										</div>
										<div class="tab-pane" id="pills-tab6">
											<div class='col-md-12'>
												<div style='padding: 5px; background-color: #e8e8e8; margin-bottom: 20px;'>
													<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; padding-top: 6px; text-align: center; color: #2C3E50; text-transform: uppercase; font-weight: bold; margin-top: 8px;">Products</h4>
												</div>
												<!-- <button type='button' class='btn btn-primary btn-sm btn-input-add'>Add</button> -->
												<add-product-btn></add-product-btn>
												<table class='table table-bordered table-stripped table-input table-medium'>
													<thead>
														<th>Code</th>
														<th>Short Name</th>
														<th>Long Name</th>
														<th>Unit of Measurement</th>
														<th></th>
													</thead>
													<tbody id='product-data'>
													</tbody>
												</table>

												<div style='padding: 5px; background-color: #e8e8e8; margin-bottom: 20px;'>
													<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; padding-top: 6px; text-align: center; color: #2C3E50; text-transform: uppercase; font-weight: bold; margin-top: 8px;">Services</h4>
												</div>
												<!-- <button type='button' class='btn btn-primary btn-sm btn-input-add'>Add</button> -->
												<add-service-btn></add-service-btn>
												<table class='table table-bordered table-stripped table-input table-medium'>
													<thead>
														<th>Code</th>
														<th>Short Name</th>
														<th>Long Name</th>
														<th></th>
													</thead>
													<tbody id='service-data'>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane" id="pills-tab7">
											<div class="col-xs-12">
												<div style='padding: 5px; background-color: #e8e8e8; margin-bottom: 20px;'>
													<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; padding-top: 6px; text-align: center; color: #2C3E50; text-transform: uppercase; font-weight: bold; margin-top: 8px;">Non-Individual Business Partners</h4>
												</div>
												<div class='scrollable-div'>
													<!-- <button type='button' class='btn btn-primary btn-sm btn-input-add'>Add</button> -->
													<add-non-individual-bp-btn></add-non-individual-bp-btn>
													<table class='table table-bordered table-stripped table-input table-small table-responsive business-partner'>
														<thead>
															<th></th>
															<th>Business Partner Code</th>
															<th>Service Partner Classification</th>
															<th>Company Code</th>
															<th>Tax Code 1</th>
															<th>Tax Code 2</th>
															<th>Tax Code 3</th>
															<th>Business Partner Company Code</th>
															<th>Trade</th>
															<th>Address</th>
															<th>TIN</th>
														</thead>
														<tbody id='non-individual-bp-data'>
														</tbody>
													</table>
												</div>

												<div style='padding: 5px; background-color: #e8e8e8; margin-bottom: 20px; margin-top: 20px;'>
													<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; padding-top: 6px; text-align: center; color: #2C3E50; text-transform: uppercase; font-weight: bold; margin-top: 8px;">Individual Business Partners</h4>
												</div>
												<div class='scrollable-div'>
													<!-- <button type='button' class='btn btn-primary btn-sm btn-input-add'>Add</button> -->
													<add-individual-bp-btn></add-individual-bp-btn>
													<table class='table table-bordered table-stripped table-input table-small table-responsive business-partner'>
														<thead>
															<th></th>
															<th>Business Partner Code</th>
															<th>Service Partner Classification</th>
															<th>Company Code</th>
															<th>Tax Code 1</th>
															<th>Tax Code 2</th>
															<th>Tax Code 3</th>
															<th>Business Partner Individual Name</th>
															<th>Trade</th>
															<th>Address</th>
															<th>TIN</th>
														</thead>
														<tbody id='individual-bp-data'>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="pills-tab8">
											<div class="col-xs-12">
												<div style='padding: 5px; background-color: #e8e8e8; margin-bottom: 20px;'>
													<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; padding-top: 6px; text-align: center; color: #2C3E50; text-transform: uppercase; font-weight: bold; margin-top: 8px;">Types of Payment</h4>
												</div>
												<div class='scrollable-div'>
													<!-- <button type='button' class='btn btn-primary btn-sm btn-input-add'>Add</button> -->
													<add-types-of-payment-btn></add-types-of-payment-btn>
													<table class='table table-bordered table-stripped table-input table-medium table-responsive' id='payment-type'>
														<thead>
															<th style='width: 15%'>Payment Code</th>
															<th>Payment Name</th>
															<th style='width: 4%;'></th>
														</thead>
														<tbody id='types-of-payment-data'>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="pills-tab9">
											<div class="col-xs-12">
												<div style='padding: 5px; background-color: #e8e8e8; margin-bottom: 20px;'>
													<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; padding-top: 6px; text-align: center; color: #2C3E50; text-transform: uppercase; font-weight: bold; margin-top: 8px;">Modes of Payment</h4>
												</div>
												<div class='scrollable-div'>
													<!-- <button type='button' class='btn btn-primary btn-sm btn-input-add'>Add</button> -->
													<add-modes-of-payment-btn></add-modes-of-payment-btn>
													<table class='table table-bordered table-stripped table-input table-medium table-responsive' id='payment-type'>
														<thead>
															<th>Mode of Payment Code</th>
															<th>Mode of Payment</th>
															<th>Payment Code</th>
															<th>Account Code</th>
															<th style='width: 4%;'></th>
														</thead>
														<tbody id='modes-of-payment-data'>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="pills-tab10">
											<div class="col-xs-12">
												<div style='padding: 5px; background-color: #e8e8e8; margin-bottom: 20px;'>
													<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; padding-top: 6px; text-align: center; color: #2C3E50; text-transform: uppercase; font-weight: bold; margin-top: 8px;">Banks</h4>
												</div>
												<div class='scrollable-div'>
													<!-- <button type='button' class='btn btn-primary btn-sm btn-input-add'>Add</button> -->
													<add-banks-btn></add-banks-btn>
													<table class='table table-bordered table-stripped table-input table-medium table-responsive' id='payment-type'>
														<thead>
															<th>Bank Code</th>
															<th>Bank Name</th>
															<th>Bank Branch Name</th>
															<th>Bank Account Name</th>
															<th>Type of Bank Account</th>
															<th style='width: 4%;'></th>
														</thead>
														<tbody id='banks-data'>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="pills-tab11">
											<div class="col-xs-12">
												<div style='padding: 5px; background-color: #e8e8e8; margin-bottom: 20px;'>
													<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; padding-top: 6px; text-align: center; color: #2C3E50; text-transform: uppercase; font-weight: bold; margin-top: 8px;">Deductions</h4>
												</div>
												<div class='scrollable-div'>
													<!-- <button type='button' class='btn btn-primary btn-sm btn-input-add'>Add</button> -->
													<add-deduction-btn></add-deduction-btn>
													<table class='table table-bordered table-stripped table-input table-medium table-responsive' id='payment-type'>
														<thead>
															<th>Code</th>
															<th>Short Name</th>
															<th>Long Name</th>
															<th style='width: 4%;'></th>
														</thead>
														<tbody id='deduction-data'>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<ul class="pager wizard">
											<li class="previous first" style="display:none;"><a href="#">First</a></li>
											<li class="previous"><a href="#">Previous</a></li>
											<li class="next last" style="display:none;"><a href="#">Last</a></li>
											<li class="next"><a href="#">Next</a></li>
										</ul>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>

		<script src="<?php echo base_url(); ?>/libs/metro/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>/libs/metro/js/metro.js"></script>
		<script src="<?php echo base_url(); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>/libs/wizard-master/js/jquery.bootstrap.wizard.js"></script>
		<script src="<?php echo base_url(); ?>/libs/wizard-master/js/prettify.js"></script>
		<script src="<?php echo base_url(); ?>/libs/selectize/js/standalone/selectize.min.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/js/dataTables.bootstrap.min.js"></script>
		<script>
		$(document).ready(function() {
				$('#pills').bootstrapWizard({'tabClass': 'nav nav-pills', 'debug': false, onShow: function(tab, navigation, index) {
					console.log('onShow');
				}, onNext: function(tab, navigation, index) {
					console.log('onNext');
				}, onPrevious: function(tab, navigation, index) {
					console.log('onPrevious');
				}, onLast: function(tab, navigation, index) {
					console.log('onLast');
				}, onTabClick: function(tab, navigation, index) {
					console.log('onTabClick');
					//alert('on tab click disabled');
				}, onTabShow: function(tab, navigation, index) {
					console.log('onTabShow');
					var $total = navigation.find('li').length;
					var $current = index+1;
					var $percent = ($current/$total) * 100;
					$('#pills .progress-bar').css({width:$percent+'%'});
				}});

			});

		</script>

		<script>
			$('.options').selectize({
				create: true,
    			sortField: 'text'

			});

			

			$('#check-individual').change(function(){
				if($(this).is(':checked')){
						$('.individual').css('display', 'block');
						$('.non-individual').css('display', 'none');
						$('input[name=company_type]').removeAttr('disabled');
						$(this).attr('disabled', true);
						$('input[name=company_type]').not($(this)).css('display', 'none');
						$('input[name=company_type]').not($(this)).prop('checked', false);
					}else{
						
					}
			});
			$('#check-nonindividual').change(function(){
					if($(this).is(':checked')){
						$('.non-individual').css('display', 'block');
						$('.individual').css('display', 'none');
						$('input[name=company_type]').removeAttr('disabled');
						$(this).attr('disabled', true);
						$('input[name=company_type]').not($(this)).css('display', 'none');
						$('input[name=company_type]').not($(this)).prop('checked', false);
					}
			});

			$('#rbtn-products').change(function(){

				if($(this).is(':checked')){
						$('.products').css('display', 'block');
					}else{
						$('.products').css('display', 'none');
					}
			});

			$('#rbtn-services').change(function(){
				if($(this).is(':checked')){
						$('.services').css('display', 'block');
					}else{
						$('.services').css('display', 'none');
					}
			});

		</script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/angular/angular.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/apps/setup/app.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/apps/setup/controllers/controller.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/apps/setup/directives/directive.js"></script>
  </body>
</html>
