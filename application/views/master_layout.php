<!DOCTYPE html>
<html>

	<head>
		<title>DOCPro Business Solutions</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.ico" />
		
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

		<!-- ADMIN LTE -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>libs/admin_lte/dist/css/AdminLTE.min.css">
		<!-- METRO Libs -->
		<link href="<?php echo base_url(); ?>libs/metro/css/metro.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/metro/css/metro-icons.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/metro/css/metro-responsive.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/metro/css/metro-schemes.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/metro/css/docs.css" rel="stylesheet">
		
		<!-- CSS Libs -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/animate.css/animate.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/checkbox3/dist/checkbox3.min.css">
		<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/css/jquery.dataTables.min.css">-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/css/dataTables.bootstrap.min.css">
		<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/select2/dist/css/select2.min.css">
		-->

		<!-- Bootsrap Switch -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/bootstrap-switch/css/bootstrap3/bootstrap-switch.min.css">

		<!-- Angular Select -->
		<link href="<?php echo base_url(); ?>libs/angular_select/select2.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/angular_select/selectize.default.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/angular_select/select.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/selectize/css/normalize.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/selectize/css/selectize.css" rel="stylesheet">

		<!-- CSS App -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/css/themes/flat-blue.css">
		
		<link href='<?php echo base_url(); ?>libs/hint.min.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>libs/hover.css' rel='stylesheet' type='text/css'>

		<!-- PIVOT CSS -->
		<link href='<?php echo base_url(); ?>libs/pivotTable/pivot.css' rel='stylesheet' type='text/css'>

		<!-- UPLOAD FORM -->
		<link href="<?php echo base_url(); ?>libs/mini-upload-form/assets/css/style.css" rel="stylesheet" />

		<?php if(isset($head_css)){ $this->load->view($head_css); } ?>

		<link href="<?php echo base_url(); ?>assets/css/mobile-style.css" rel="stylesheet">

		<!-- Styles of Puerto Responsive Flat Buttons -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/angular_select/select.min.css">
		
		<link href="<?php echo base_url(); ?>assets/css/modals.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/master_layout.css" rel="stylesheet">

		<link type="text/css" rel='stylesheet' href="<?php echo base_url(); ?>libs/material-button/index.css" />

		<!-- CUSTOM CSS -->
		<link href='<?php echo base_url(); ?>assets/css/blank.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/navbar-sidebar.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/custom-button.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/custom-button-setup.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/loader.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/custom-datatable.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/custom-theme.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/custom-color.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/background_img.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/popover_adjustment.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/minify-ui.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/invoice.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/journals-custom.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/transaction-selectize.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/popover.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/v_validation.css' rel='stylesheet' type='text/css'>
		<script>var window_location = window.location.origin</script>
	</head>

	<body class="flat-blue" id='document-body'>
		<div id='app-container' class="app-container">
			<div class="row content-container">
				<nav class="navbar navbar-default navbar-fixed-top navbar-top">
					<div class="container-fluid">
						<?php if(isset($top_navbar)){$this->load->view($top_navbar);} ?>
					</div>
				</nav>
				<div class="side-menu sidebar-inverse" id='costum-sidebar-close'>
					<nav class="navbar navbar-default" role="navigation">
						<div class="side-menu-container">
							<ul class="nav navbar-nav" id='sidebar-container'>

<!-- COMPANY -->
								<?php 
									if($this->session->userdata('user')->u_company === 'company' && $this->session->userdata('user')->setup === '0'){ ?>
											<li class="<?php if($active_nav === 'home'){echo 'active';}?>">
												<a href='<?php echo base_url(); ?>home' custom-title='Home'>
													<span class="icon fa fa-home">
														<span class='sidebar-charm home'></span>
													</span>
													<span class="title">Home</span>
												</a>
											</li>
											<li class="<?php if($active_nav === 'transaction'){echo 'active';}?>">
												<a href="<?php echo base_url(); ?>transactions" custom-title='Transactions'>
												   <span class="icon fa fa-money">
												   		<span class='sidebar-charm trans'></span>
												   </span>
												   <span class="title">Transactions</span>
												</a>
											</li>
											<li class="panel panel-default dropdown <?php if($active_nav === 'journals'){echo 'active';}?>">
												<a id='journals-nav' href='#dropdown-journals' custom-title='Journals'>
													<span class="icon fa fa-file-text-o">
														<span class='sidebar-charm journ'></span>
													</span>
													<span class="title">Journals</span>
												</a>
												<!-- Dropdown level 1 -->
												<div id="dropdown-journals" class="panel-collapse collapse">
													<div class="panel-body" style='padding: 0;'>
														<ul class="nav navbar-nav">
															<li>
																<a href="<?php echo base_url(); ?>journals/sales" id='popover-sales-invisible'>Sales</a>
															</li>
															<li>
																<a href="<?php echo base_url(); ?>journals/receipts" id='popover-receipts-invisible'>Receipts</a>
															</li>
															<li>
																<a href="<?php echo base_url(); ?>journals/collections" id='popover-collections-invisible'>Collections</a>
															</li>
															<li>
																<a href="<?php echo base_url(); ?>journals/purchases" id='popover-purchases-invisible'>Purchases</a>
															</li>
															<li>
																<a href="<?php echo base_url(); ?>journals/disbursements" id='popover-disbursements-invisible'>Disbursements</a>
															</li>
															<li>
																<a href="<?php echo base_url(); ?>journals/general" id='popover-adjustments-invisible'>General</a>
															</li>
															<li>
																<a href="<?php echo base_url(); ?>journals/specials" id='popover-specials-invisible'>Specials</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
											<li class='<?php if($active_nav === 'financialreports'){echo 'active';}?>'>
												<a id='financial-reports-nav' href="<?php echo base_url(); ?>financial_reports" custom-title='Financial Reports'>
													<span class="icon fa fa-folder-open">
														<span class='sidebar-charm fr'></span>
													</span>
													<span class="title">Financial Reports</span>
												</a>
											</li>
											<!-- Dropdown-->
											<li class='<?php if($active_nav === 'companyreports'){echo 'active';}?>'>
												<a id='company-reports-nav' href="<?php echo base_url(); ?>company_reports" custom-title='Company Reports'>
													<span class="icon fa fa-building">
														<span class='sidebar-charm cr'></span>
													</span>
													<span class="title">Company Reports</span>
												</a>
											</li>
											<!-- Dropdown-->
											<li class='<?php if($active_nav === 'bookofaccounts'){echo 'active';}?>'>
												<a id='book-of-accounts-nav' href="<?php echo base_url(); ?>book_of_accounts" custom-title='Book of Accounts'>
													<span class="icon fa fa-book">
														<span class='sidebar-charm boa'></span>
													</span>
													<span class="title">Book of Accounts</span>
												</a>
											</li>
											<li class='<?php if($active_nav === 'companysettings'){echo 'active';}?>'>
												<a id='company-settings-nav' href="<?php echo base_url(); ?>company_settings" custom-title='Company Settings'>
													<span class="icon fa fa-gear">
														<span class='sidebar-charm compsetting'></span>
													</span>
													<span class="title">Company Settings</span>
												</a>
											</li>
											<!-- Dropdown-->
											<li class='<?php if($active_nav === 'tables'){echo 'active';}?>'>
												<a id='tables-nav' href="<?php echo base_url(); ?>tables" custom-title='Tables'>
													<span class="icon fa fa-table">
														<span class='sidebar-charm tables'></span>
													</span>
													<span class="title">Tables</span>
												</a>
											</li>
									
									<?php }
									
								?>

<!-- Company Setup -->
<!-- 								<?php
									if($this->session->userdata('user')->u_company === 'company' && $this->session->userdata('user')->setup === '1'){ ?>
										<li>
											<a href='#'>
												<span class="icon fa fa-home">
													<span class='sidebar-charm home'></span>
												</span>
												<span class="title">Home</span>
											</a>
										</li>
										<li>
											<a href='#' custom-title='Transactions'>
											   <span class="icon fa fa-money">
											   		<span class='sidebar-charm trans'></span>
											   </span>
											   <span class="title">Transactions</span>
											</a>
										</li>
										<li class="panel panel-default dropdown">
											<a href='#dropdown-journals' custom-title='Journals'>
												<span class="icon fa fa-file-text-o">
													<span class='sidebar-charm journ'></span>
												</span>
												<span class="title">Journals</span>
											</a>
											<div id="dropdown-journals" class="panel-collapse collapse">
												<div class="panel-body" style='padding: 0;'>
													<ul class="nav navbar-nav">
														<li>
															<a href="#" id='popover-sales-invisible'>Sales</a>
														</li>
														<li>
															<a href="#" id='popover-receipts-invisible'>Receipts</a>
														</li>
														<li>
															<a href="#" id='popover-collections-invisible'>Collections</a>
														</li>
														<li>
															<a href="#" id='popover-purchases-invisible'>Purchases</a>
														</li>
														<li>
															<a href="#" id='popover-disbursements-invisible'>Disbursements</a>
														</li>
														<li>
															<a href="#" id='popover-adjustments-invisible'>Adjustments</a>
														</li>
														<li>
															<a href="#" id='popover-specials-invisible'>Specials</a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li>
											<a href="#" custom-title='Financial Reports'>
												<span class="icon fa fa-folder-open">
													<span class='sidebar-charm fr'></span>
												</span>
												<span class="title">Financial Reports</span>
											</a>
										</li>
										<li>
											<a href="#" custom-title='Company Reports'>
												<span class="icon fa fa-building">
													<span class='sidebar-charm cr'></span>
												</span>
												<span class="title">Company Reports</span>
											</a>
										</li>
										<li>
											<a href="#" custom-title='Book of Accounts'>
												<span class="icon fa fa-book">
													<span class='sidebar-charm boa'></span>
												</span>
												<span class="title">Book of Accounts</span>
											</a>
										</li>
										<li>
											<a href="#" custom-title='Tables'>
												<span class="icon fa fa-table">
													<span class='sidebar-charm tables'></span>
												</span>
												<span class="title">Tables</span>
											</a>
										</li>
										<li>
											<a href="<?php echo base_url(); ?>company_settings" custom-title='Company Settings'>
												<span class="icon fa fa-gear">
													<span class='sidebar-charm compsetting'></span>
												</span>
												<span class="title">Company Settings</span>
											</a>
										</li>
										<li class='active'>
											<a href="<?php echo base_url(); ?>setup" custom-title='Company Setup'>
												<span class="icon fa fa-wrench">
													<span class='sidebar-charm tables'></span>
												</span>
												<span class="title">Setup</span>
											</a>
										</li>

									<?php }
								?> -->

<!-- DOCPRO -->
								<?php
									if($this->session->userdata('user')->u_type === 'Super Admin' && $this->session->userdata('user')->u_company === 'docpro'){ ?>

										<li>
											<a href='#'>
												<span class="icon fa fa-home">
													<span class='sidebar-charm home'></span>
												</span>
												<span class="title">Home</span>
											</a>
										</li>
										<li>
											<a href='#' custom-title='Transactions'>
											   <span class="icon fa fa-money">
											   		<span class='sidebar-charm trans'></span>
											   </span>
											   <span class="title">Transactions</span>
											</a>
										</li>
										<li class="panel panel-default dropdown">
											<a href='#dropdown-journals' custom-title='Journals'>
												<span class="icon fa fa-file-text-o">
													<span class='sidebar-charm journ'></span>
												</span>
												<span class="title">Journals</span>
											</a>
											<div id="dropdown-journals" class="panel-collapse collapse">
												<div class="panel-body" style='padding: 0;'>
													<ul class="nav navbar-nav">
														<li>
															<a href="#" id='popover-sales-invisible'>Sales</a>
														</li>
														<li>
															<a href="#" id='popover-receipts-invisible'>Receipts</a>
														</li>
														<li>
															<a href="#" id='popover-collections-invisible'>Collections</a>
														</li>
														<li>
															<a href="#" id='popover-purchases-invisible'>Purchases</a>
														</li>
														<li>
															<a href="#" id='popover-disbursements-invisible'>Disbursements</a>
														</li>
														<li>
															<a href="#" id='popover-adjustments-invisible'>General</a>
														</li>
														<li>
															<a href="#" id='popover-specials-invisible'>Specials</a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li>
											<a href="#" custom-title='Financial Reports'>
												<span class="icon fa fa-folder-open">
													<span class='sidebar-charm fr'></span>
												</span>
												<span class="title">Financial Reports</span>
											</a>
										</li>
										<li>
											<a href="#" custom-title='Company Reports'>
												<span class="icon fa fa-building">
													<span class='sidebar-charm cr'></span>
												</span>
												<span class="title">Company Reports</span>
											</a>
										</li>
										<li>
											<a href="#" custom-title='Book of Accounts'>
												<span class="icon fa fa-book">
													<span class='sidebar-charm boa'></span>
												</span>
												<span class="title">Book of Accounts</span>
											</a>
										</li>
										<li>
											<a href="#" custom-title='Tables'>
												<span class="icon fa fa-table">
													<span class='sidebar-charm tables'></span>
												</span>
												<span class="title">Tables</span>
											</a>
										</li>
										<li class='<?php if($active_nav === 'docprosettings' | !isset($active_nav)){echo 'active';}?>'>
											<a id='docpro-admin-settings-nav' href="<?php echo base_url(); ?>docpro_settings" custom-title='Docpro Settings'>
												<span class='icon fa fa-gears'>
													<span class='sidebar-charm docprosetting'></span>
												</span>
												<span class='title'>DOCPro Settings</span>
											</a>
										</li>

										<li class='<?php if($active_nav === 'docpro-setup'){echo 'active';}?>'>
											<a id='docpro-admin-setup-nav' href="<?php echo base_url(); ?>docpro_setup" custom-title='Docpro Setup'>
												<span class="icon fa fa-wrench">
													<span class='sidebar-charm tables'></span>
												</span>
												<span class="title">Setup</span>
											</a>
										</li>
									<?php }
								?>
							</ul>
						</div>
						<!-- /.navbar-collapse -->
					</nav>
				</div>
				<!-- Main Content -->
				<div id='main-content' class="container-fluid">
					<?php if(isset($content)){ $this->load->view($content); } ?>
				</div>
			</div>
		</div>
		
		<!-- SIDEBAR POPOVER -->
		<div id='journals-popover' style='display: none;'>
			<div class='sidebar-popover-content'>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/sales" style='padding-right: 114px;'><i class='fa fa-file'></i>&nbsp; Sales</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/receipts" style='padding-right: 96px;'><i class='fa fa-file'></i>&nbsp; Receipts</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/collections" style='padding-right: 83px;'><i class='fa fa-file'></i>&nbsp; Collections</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/purchases" style='padding-right: 85px;'><i class='fa fa-file'></i>&nbsp; Purchases</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/disbursements" style='padding-right: 60px;'><i class='fa fa-file'></i>&nbsp; Disbursements</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/general" style='padding-right: 74px;'><i class='fa fa-file'></i>&nbsp; General</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/specials" style='padding-right: 95px;'><i class='fa fa-file'></i>&nbsp; Specials</a>
				</div>
			</div>
		</div>
		
		<div id='financial-reports-popover' style='display: none;'>
			<div class='sidebar-popover-content'>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>financial_reports/trial_balance' style='padding-right: 72px;'><i class='fa fa-file'></i>&nbsp; Trial Balance</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>financial_reports/balance_sheet' style='padding-right: 62px;'><i class='fa fa-file'></i>&nbsp; Balance Sheet</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>financial_reports/income_statement' style='padding-right: 41px;'><i class='fa fa-file'></i>&nbsp; Income Statement</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>financial_reports/equity_statement' style='padding-right: 46px;'><i class='fa fa-file'></i>&nbsp; Equity Statement</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>financial_reports/cash_flow_statement' style='padding-right: 31px;'><i class='fa fa-file'></i>&nbsp; Cashflow Statement</a>
				</div>
			</div>
		</div>
		
		<div id='company-reports-popover' style='display: none;'>
			<div class='sidebar-popover-content'>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_reports/statement_of_accounts" style='padding-right: 14px;'><i class='fa fa-file'></i>&nbsp; Statement of Accounts</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_reports/company_documents" style='padding-right: 22px;'><i class='fa fa-file'></i>&nbsp; Company Documents</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_reports/bank_statements" style='padding-right: 46px;'><i class='fa fa-file'></i>&nbsp; Bank Statements</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_reports/fixed_assets" style='padding-right: 70px;'><i class='fa fa-file'></i>&nbsp; Fixed Assets</a>
				</div>
			</div>
		</div>
		
		<div id='book-of-accounts-popover' style='display: none;'>
			<div class='sidebar-popover-content'>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/general_ledger' style='padding-right: 42px;'><i class='fa fa-file'></i>&nbsp; General Ledger</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/subsidiary_ledger' style='padding-right: 26px;'><i class='fa fa-file'></i>&nbsp; Subsidiary Ledger</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/sales' style='padding-right: 97px;'><i class='fa fa-file'></i>&nbsp; Sales</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/receipts' style='padding-right: 79px;'><i class='fa fa-file'></i>&nbsp; Receipts</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/collections' style='padding-right: 66px;'><i class='fa fa-file'></i>&nbsp; Collections</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/purchases' style='padding-right: 68px;'><i class='fa fa-file'></i>&nbsp; Purchases</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/disbursements' style='padding-right: 43px;'><i class='fa fa-file'></i>&nbsp; Disbursements</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/adjustments' style='padding-right: 74px;'><i class='fa fa-file'></i>&nbsp; Adjustments</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/others' style='padding-right: 91px;'><i class='fa fa-file'></i>&nbsp; Others</a>
				</div>
			</div>
		</div>
		
		<div id='company-settings-popover' style='display: none;'>
			<div class='sidebar-popover-content'>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/branches" style='padding-right: 75px;'><i class='fa fa-file'></i>&nbsp; Branches</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/users" style='padding-right: 96px;'><i class='fa fa-file'></i>&nbsp; Users</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/journals" style='padding-right: 56px;'><i class='fa fa-file'></i>&nbsp; Journals</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/transactions" style='padding-right: 56px;'><i class='fa fa-file'></i>&nbsp; Transactions</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/documents" style='padding-right: 64px;'><i class='fa fa-file'></i>&nbsp; Documents</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/modes_of_payment" style='padding-right: 21px;'><i class='fa fa-file'></i>&nbsp; Modes of Payment</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/taxes" style='padding-right: 96px;'><i class='fa fa-file'></i>&nbsp; Taxes</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/business_partners" style='padding-right: 23px;'><i class='fa fa-file'></i>&nbsp; Business Partners</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/departments" style='padding-right: 56px;'><i class='fa fa-file'></i>&nbsp; Departments</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/profit_cost_centers" style='padding-right: 20px;'><i class='fa fa-file'></i>&nbsp; Profit Cost Centers</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/products" style='padding-right: 78px;'><i class='fa fa-file'></i>&nbsp; Products</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/services" style='padding-right: 81px;'><i class='fa fa-file'></i>&nbsp; Services</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/trade_discounts" style='padding-right: 36px;'><i class='fa fa-file'></i>&nbsp; Discounts</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/chart_of_accounts" style='padding-right: 26px;'><i class='fa fa-file'></i>&nbsp; Chart of Accounts</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/banks" style='padding-right: 93px;'><i class='fa fa-file'></i>&nbsp; Banks</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="#" style='padding-right: 20px;'><i class='fa fa-file'></i>&nbsp; Journal Entries</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/others" style='padding-right: 91px;'><i class='fa fa-file'></i>&nbsp; Others</a>
				</div>
			</div>
		</div>
		
		<div id='tables-popover' style='display: none;'>
			<div class='sidebar-popover-content'>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>tables/value_added_tax' style='padding-right: 50px;'><i class='fa fa-file'></i>&nbsp; Value Added Tax</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>tables/withholding_tax' style='padding-right: 55px;'><i class='fa fa-file'></i>&nbsp; Withholding Tax</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>tables/accumulator'  style='padding-right: 74px;'><i class='fa fa-file'></i>&nbsp; Accumulator</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>tables/financial_statements' style='padding-right: 24px;'><i class='fa fa-file'></i>&nbsp; Financial Statements</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>tables/trial_balance' style='padding-right: 72px;'><i class='fa fa-file'></i>&nbsp; Trial Balance</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>tables/general_ledger' style='padding-right: 59px;'><i class='fa fa-file'></i>&nbsp; General Ledger</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>tables/subsidiary_ledger' style='padding-right: 43px;'><i class='fa fa-file'></i>&nbsp; Subsidiary Ledger</a>
				</div>
			</div>
		</div>

		<div id='docpro-admin-settings-popover' style='display: none;'>
			<div class='sidebar-popover-content'>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>docpro_settings/company' style='padding-right: 75px;'><i class='fa fa-file'></i>&nbsp; Companies</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_settings/users" style='padding-right: 96px;'><i class='fa fa-file'></i>&nbsp; Users</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_settings/transactions" style='padding-right: 56px;'><i class='fa fa-file'></i>&nbsp; Transactions</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_settings/documents" style='padding-right: 64px;'><i class='fa fa-file'></i>&nbsp; Documents</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_settings/modes_of_payment" style='padding-right: 21px;'><i class='fa fa-file'></i>&nbsp; Modes of Payment</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_settings/chart_of_accounts" style='padding-right: 43px;'><i class='fa fa-file'></i>&nbsp; Chart of Accounts</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_settings/banks" style='padding-right: 110px;'><i class='fa fa-file'></i>&nbsp; Banks</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_settings/journals" style='padding-right: 110px;'><i class='fa fa-file'></i>&nbsp; Journals</a>
				</div>
			</div>
		</div>

		<div id='docpro-admin-setup-popover' style='display: none;'>
			<div class='sidebar-popover-content'>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_setup/chart_of_accounts" style='padding-right: 43px;'><i class='fa fa-file'></i>&nbsp; Chart of Accounts</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_setup/taxes" style='padding-right: 96px;'><i class='fa fa-file'></i>&nbsp; Tax Types</a>
				</div>
				<!-- <div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_setup/payment" style='padding-right: 56px;'><i class='fa fa-file'></i>&nbsp; Types of Payment</a>
				</div> -->
			</div>
		</div>
		
		
		<!-- METRO Libs -->
		<script src='<?php echo base_url(); ?>libs/js/jquery.min.js'></script>
		<script src="<?php echo base_url(); ?>libs/metro/js/metro.js"></script>
		<script src="<?php echo base_url(); ?>libs/metro/js/docs.js"></script>
		<!--<script src="<?php echo base_url(); ?>docpro/libs/metro/js/prettify/run_prettify.js"></script>-->
		<script src="<?php echo base_url(); ?>libs/metro/js/ga.js"></script>
		
		<!-- Javascript Libs -->
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/Chart.js/Chart.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/matchHeight/jquery.matchHeight-min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/js/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/select2/dist/js/select2.full.min.js"></script>
		<!-- Javascript -->
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/js/app.js"></script>
		
		<!-- Slimscroll -->
		<script src="<?php echo base_url(); ?>libs/admin_lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<!-- FastClick -->
		<script src="<?php echo base_url(); ?>libs/admin_lte/plugins/fastclick/fastclick.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo base_url(); ?>libs/admin_lte/dist/js/app.min.js"></script>
		
		<!-- DATE JS -->
		<script src="<?php echo base_url(); ?>libs/datejs/date.js"></script>
		
		<!-- ANGULAR -->
		<script src="<?php echo base_url(); ?>libs/angular/angular.min.js"></script>
		<script src="<?php echo base_url(); ?>libs/angular/angular-sanitize.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/angular_select/select.min.js"></script>
		
		<!--- PIVOT TABLE -->
		<!-- <script src='<?php echo base_url(); ?>libs/pivotTable/jquery-ui.min.js'></script> -->
		<!-- <script src='<?php echo base_url(); ?>libs/pivotTable/jquery.ui.touch-punch.min.js'></script> -->
		<script src='<?php echo base_url(); ?>libs/pivotTable/pivot.js'></script>
		
		<!-- SELECTIZE -->
		<script type='text/javascript' src='<?php echo base_url(); ?>libs/selectize/js/standalone/selectize.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>libs/selectize/js/selectize.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/company_settings/selectize_no_result.js'></script>
		
		<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/validation.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/num_to_words.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/master_layout.js'></script>

		<!-- BOOTSTRAP MATERIAL -->
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/bootstrap_material/js/material.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/bootstrap_material/js/ripples.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url(); ?>libs/material-button/index.js"></script>

		<!-- UPLOAD FORM -->
		<script src="<?php echo base_url(); ?>libs/mini-upload-form/assets/js/jquery.knob.js"></script>
		<script src="<?php echo base_url(); ?>libs/mini-upload-form/assets/js/jquery.ui.widget.js"></script>
		<script src="<?php echo base_url(); ?>libs/mini-upload-form/assets/js/jquery.iframe-transport.js"></script>
		<script src="<?php echo base_url(); ?>libs/mini-upload-form/assets/js/jquery.fileupload.js"></script>
		<script src="<?php echo base_url(); ?>libs/mini-upload-form/assets/js/script.js"></script>
		<script src="<?php echo base_url(); ?>libs/docpro_validation.js" type="text/javascript"></script>

		<!-- SEQUENCE JS -->
		<script src="<?php echo base_url(); ?>/libs/wizard-master/js/jquery.bootstrap.wizard.js"></script>
		<script src="<?php echo base_url(); ?>/libs/wizard-master/js/prettify.js"></script>
		<script src="<?php echo base_url(); ?>/libs/notify/bootstrap-notify.min.js"></script>

		<script src="<?php echo base_url(); ?>/libs/sequence/scripts/imagesloaded.pkgd.min.js"></script>
		<script src="<?php echo base_url(); ?>/libs/sequence/scripts/hammer.min.js"></script>
		<script src="<?php echo base_url(); ?>/libs/sequence/scripts/sequence.min.js"></script>

		<!-- Bootsrap Switch -->
		<script src="<?php echo base_url(); ?>libs/bootstrap-switch/js/bootstrap-switch.min.js"></script>

		<!-- CUSTOM -->
		<script src="<?php echo base_url(); ?>/assets/js/table_option.js"></script>
		<script src="<?php echo base_url(); ?>/assets/js/v_validation.js"></script>

		<script type="text/javascript">
			var init_tooltip = function(){
				$('.side-menu a').mouseover(function(){
					var _this = $(this);
					setTimeout(function() {
						_this.attr('title', _this.attr('custom-title'));
					}, 50);
				});

				$('.title').mouseover(function(){
					var _this = $(this);
					setTimeout(function() {
						_this.attr('title', _this.attr('custom-title'));
					}, 50);
				});

				$('#back-button').mouseover(function(){
					var _this = $(this);
					setTimeout(function() {
						_this.attr('title', _this.attr('custom-title'));
						_this.find('i').attr('title', _this.attr('custom-title'));
					}, 50);
				});

				$('#coa-setup').mouseover(function(){
					var _this = $(this);
					setTimeout(function() {
						_this.attr('title', _this.attr('custom-title'));
						_this.find('i').attr('title', _this.attr('custom-title'));
					}, 50);
				});
				$('#coa-setup').find('i').mouseover(function(){
					var _this = $(this);
					setTimeout(function() {
						_this.attr('title', _this.attr('custom-title'));
						_this.find('i').attr('title', _this.attr('custom-title'));
					}, 50);
				});
			}
			$(document).ready(function(){
				$.material.init();
				init_tooltip();

				$('body').on('click', '.selectize-input', function(){
	                var e = jQuery.Event("keydown", { keyCode: 8 });
	                $(this).find('input').trigger(e);
	            });

	            $('.modal').on('shown.bs.modal', function (e) {
				  	$('body').find('.modal.in').data('bs.modal').$backdrop.css('background-color','transparent');
				});

				$('.modal').on('hidden.bs.modal', function(){
		            $(this).find('input').val('');
		            $(this).find('select').val('');
		            $(this).find('input').removeClass('v-invalid');
		            $(this).find('select').removeClass('v-invalid');
		            $(this).find('div').removeClass('v-invalid');
		        });
			});
		</script>

		<?php if(isset($footer_js)){ $this->load->view($footer_js); } ?>

		<!-- ZOOM -->
		<!-- <script src="<?php echo base_url(); ?>/assets/js/zoom.js"></script> -->
	</body>

</html>
