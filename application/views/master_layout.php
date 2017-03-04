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
      <!--   <link href="<?php echo base_url(); ?>libs/metro/css/metro.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>libs/metro/css/metro-icons.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>libs/metro/css/metro-responsive.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>libs/metro/css/metro-schemes.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>libs/metro/css/docs.css" rel="stylesheet"> -->
        
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

        <!-- <link href="<?php echo base_url(); ?>assets/css/mobile-style.css" rel="stylesheet"> -->

        <!-- Styles of Puerto Responsive Flat Buttons -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/angular_select/select.min.css">
        
        <link href="<?php echo base_url(); ?>assets/css/modals.css" rel="stylesheet">
        <!-- <link href="<?php echo base_url(); ?>assets/css/master_layout.css" rel="stylesheet"> -->

        <link type="text/css" rel='stylesheet' href="<?php echo base_url(); ?>libs/material-button/index.css" />

        <!-- CORLATE -->
        <link href="<?php echo base_url(); ?>/libs/corlate/css/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/libs/corlate/css/main.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/libs/corlate/css/responsive.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/css/new_master_layout.css" rel="stylesheet">

        <!-- CUSTOM CSS -->
        <link href='<?php echo base_url(); ?>assets/css/blank.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo base_url(); ?>assets/css/navbar-sidebar.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo base_url(); ?>assets/css/custom-button.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo base_url(); ?>assets/css/custom-button-setup.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo base_url(); ?>assets/css/loader.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo base_url(); ?>assets/css/new_datatable.css' rel='stylesheet' type='text/css'>
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
        <link href='<?php echo base_url(); ?>assets/css/new_design.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo base_url(); ?>assets/css/new_design_media.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo base_url(); ?>assets/css/new_admin_lte.css' rel='stylesheet' type='text/css'>
        <!-- <link href='<?php echo base_url(); ?>libs/bootstrap/css/equal-height-columns.css' rel='stylesheet' type='text/css'> -->
        <script>var window_location = window.location.origin</script>
    </head>

    <body class="flat-blue hold-transition skin-blue sidebar-mini sidebar-collapse" id='document-body'>
        <div id='app-container' class="app-container">
            <div class="wrapper">
                <header class="main-header">
                    <nav id='t_1' class="navbar navbar-static-top">
                        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                            <span class="sr-only">Toggle navigation</span>
                        </a>
                        <div id='n_c_m' class="navbar-custom-menu">
                            <img id='s_n' src="<?php echo base_url(); ?>assets/img/title.png">
                            <p id='n_u_i'>Welcome, <?php echo $this->session->userdata('user')->p_fname.' '.$this->session->userdata('user')->p_lname.' ['.$this->session->userdata('user')->u_type.']'; ?></p>
                        </div>
                    </nav>
                </header>
                <aside class="main-sidebar">
                    <section class="sidebar">
                        <?php 
                            if($this->session->userdata('user')->u_company === 'company' && $this->session->userdata('user')->setup === '0')
                            {
                        ?>
                            <ul class="sidebar-menu" id='main-nav'>
                                <li class="treeview" id='menu-icon'>
                                    <a href='#' class="sidebar-toggle" data-toggle="offcanvas" role="button">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                                <!-- <li class="header">MAIN NAVIGATION</li> -->
                                <li class="treeview <?php echo $active_nav === '1' ? 'active' : ''; ?>">
                                    <a href="#" url="<?php echo base_url(); ?>home">
                                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="<?php echo $active_nav === '2' ? 'active' : ''; ?>">
                                    <a href="#" url="<?php echo base_url(); ?>transactions">
                                        <i class="icon fa fa-money"></i> <span>Transaction</span>
                                    </a>
                                </li>
                                <li class="<?php echo $active_nav === '3' ? 'active' : ''; ?>">
                                    <a href="#">
                                        <i class="icon fa fa-file-text-o"></i> <span>Journals</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class="active"><a href="#"><i class="fa fa-file"></i> Sales</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Receipts</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Collections</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Purchases</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Disbursements</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> General</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Specials</a></li>
                                    </ul>
                                </li>
                                <li class="<?php echo $active_nav === '4' ? 'active' : ''; ?>">
                                    <a href="#" url="<?php echo base_url(); ?>financial_reports">
                                        <i class="icon fa fa-folder-open"></i>
                                        <span>Financial Reports</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class="active"><a href="#"><i class="fa fa-file"></i> Trial Balance</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Balance Sheet</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Income Statement</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Equity Statement</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Cashflow Statement</a></li>
                                    </ul>
                                </li>
                                <li class="<?php echo $active_nav === '5' ? 'active' : ''; ?>">
                                    <a href="#" url="<?php echo base_url(); ?>company_reports">
                                        <i class="icon fa fa-building"></i>
                                        <span>Company Reports</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class="active"><a href="#"><i class="fa fa-file"></i> Statement of Accounts</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Company Documents</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Bank Statements</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Fixed Assets</a></li>
                                    </ul>
                                </li>
                                <li class="<?php echo $active_nav === '6' ? 'active' : ''; ?>">
                                    <a href="#" url="<?php echo base_url(); ?>book_of_accounts">
                                        <i class="icon fa fa-book"></i>
                                        <span>Book of Accounts</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class="active"><a href="#"><i class="fa fa-file"></i> General Ledger</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Subsidiary Ledger</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Sales</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Receipts</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Collections</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Purchases</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Disbursements</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Adjustments</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Others</a></li>
                                    </ul>
                                </li>
                                <li class="<?php echo $active_nav === '7' ? 'active' : ''; ?>">
                                    <a href="#" url="<?php echo base_url(); ?>company_settings">
                                        <i class="icon fa fa-gear"></i>
                                        <span>Company Settings</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu" style="overflow: auto; max-height: 270px;">
                                        <li class="active"><a href="#"><i class="fa fa-file"></i> Branches</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Users</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Journals</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Transactions</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Documents</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Modes of Payment</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Taxes</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Business Partners</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Departments</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Profit Cost Centers</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Products</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Services</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Discounts</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Chart of Accounts</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Banks</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Journal Entries</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Others</a></li>
                                    </ul>
                                </li>
                                <li class="<?php echo $active_nav === '8' ? 'active' : ''; ?>">
                                    <a href="#" url="<?php echo base_url(); ?>tables">
                                        <i class="icon fa fa-table"></i>
                                        <span>Tables</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu" style="overflow: auto; max-height: 320px;">
                                        <li class="active"><a href="#"><i class="fa fa-file"></i> Value Added Tax</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Withholding Tax</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Accumulator</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Financial Statements</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Trial Balance</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> General Ledger</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Subsidiary Ledger</a></li>
                                    </ul>
                                </li>
                            </ul>
                        <?php

                            }
                            if($this->session->userdata('user')->u_type === 'Super Admin' && $this->session->userdata('user')->u_company === 'docpro')
                            {
                        ?>
                            <ul class="sidebar-menu" id='main-nav'>
                                <li class="treeview" id='menu-icon'>
                                    <a href='#' class="sidebar-toggle" data-toggle="offcanvas" role="button">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                                <!-- <li class="header">MAIN NAVIGATION</li> -->
                                <li class="treeview <?php echo $active_nav === '1' ? 'active' : ''; ?>">
                                    <a href="#" url="<?php echo base_url(); ?>home">
                                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="<?php echo $active_nav === '2' ? 'active' : ''; ?>">
                                    <a href="#" url="<?php echo base_url(); ?>transactions">
                                        <i class="icon fa fa-money"></i> <span>Transaction</span>
                                    </a>
                                </li>
                                <li class="<?php echo $active_nav === '3' ? 'active' : ''; ?>">
                                    <a href="#">
                                        <i class="icon fa fa-file-text-o"></i> <span>Journals</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class="active"><a href="#"><i class="fa fa-file"></i> Sales</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Receipts</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Collections</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Purchases</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Disbursements</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> General</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Specials</a></li>
                                    </ul>
                                </li>
                                <li class="<?php echo $active_nav === '4' ? 'active' : ''; ?>">
                                    <a href="#" url="<?php echo base_url(); ?>financial_reports">
                                        <i class="icon fa fa-folder-open"></i>
                                        <span>Financial Reports</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class="active"><a href="#"><i class="fa fa-file"></i> Trial Balance</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Balance Sheet</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Income Statement</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Equity Statement</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Cashflow Statement</a></li>
                                    </ul>
                                </li>
                                <li class="<?php echo $active_nav === '5' ? 'active' : ''; ?>">
                                    <a href="#" url="<?php echo base_url(); ?>company_reports">
                                        <i class="icon fa fa-building"></i>
                                        <span>Company Reports</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class="active"><a href="#"><i class="fa fa-file"></i> Statement of Accounts</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Company Documents</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Bank Statements</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Fixed Assets</a></li>
                                    </ul>
                                </li>
                                <li class="<?php echo $active_nav === '6' ? 'active' : ''; ?>">
                                    <a href="#" url="<?php echo base_url(); ?>book_of_accounts">
                                        <i class="icon fa fa-book"></i>
                                        <span>Book of Accounts</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class="active"><a href="#"><i class="fa fa-file"></i> General Ledger</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Subsidiary Ledger</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Sales</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Receipts</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Collections</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Purchases</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Disbursements</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Adjustments</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Others</a></li>
                                    </ul>
                                </li>
                                <li class="<?php echo $active_nav === '8' ? 'active' : ''; ?>">
                                    <a href="#" url="#">
                                        <i class="icon fa fa-table"></i>
                                        <span>Tables</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu" style="overflow: auto; max-height: 320px;">
                                        <li class="active"><a href="#"><i class="fa fa-file"></i> Value Added Tax</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Withholding Tax</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Accumulator</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Financial Statements</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Trial Balance</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> General Ledger</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Subsidiary Ledger</a></li>
                                    </ul>
                                </li>
                                <li class="<?php echo $active_nav === '7' ? 'active' : ''; ?>">
                                    <a href="#" url="<?php echo base_url(); ?>docpro_settings">
                                        <i class="icon fa fa-gear"></i>
                                        <span>DocPro Settings</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu" style="overflow: auto; max-height: 270px;">
                                        <li class="active"><a href="#"><i class="fa fa-file"></i> Branches</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Users</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Journals</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Transactions</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Documents</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Modes of Payment</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Taxes</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Business Partners</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Departments</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Profit Cost Centers</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Products</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Services</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Discounts</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Chart of Accounts</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Banks</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Journal Entries</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Others</a></li>
                                    </ul>
                                </li>
                                <li class="<?php echo $active_nav === '8' ? 'active' : ''; ?>">
                                    <a href="#" url="<?php echo base_url(); ?>docpro_setup">
                                        <i class="icon fa fa-wrench"></i>
                                        <span>DocPro Setup</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu" style="overflow: auto; max-height: 270px;">
                                        <li class="active"><a href="#"><i class="fa fa-file"></i> Chart of Accounts</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Taxes</a></li>
                                    </ul>
                                </li>
                            </ul>
                        <?php
                            }
                        ?>
                        

                    </section>
                </aside>
                <div id='t_2_s_1' style="position: fixed; z-index: 1001;">
                    <nav id="company-plate" class='big' role="banner">
                        <div id='t_2_c' class="container">
                            <div id='company-collapse-title'>
                                <div>
                                    <img id='t_2_c_l' src="<?php echo base_url(); ?>assets/img/s_a_l.png">
                                </div>
                                <div>
                                    <h1 id='t_2_c_n'><?php echo $this->session->userdata('user')->ch_name; ?></h1>
                                </div>
                            </div>
                            <div id='company-details' cass>
                                <div>
                                    <img id='c_d_c_l' src="<?php echo base_url(); ?>assets/img/s_a_l.png">
                                </div>
                                <div>
                                    <h1 id='c_d_c_n'><?php echo $this->session->userdata('user')->ch_name; ?></h1>
                                    <span><?php echo $this->session->userdata('user')->main_company->cb_id === $this->session->userdata('user')->branch_company->cb_id ? '' : 'Branch'; ?></span>
                                    <span>
                                    	<?php 
              								$address = $this->session->userdata('user')->ch_cb_address;
                                    		$building = strlen(trim(str_replace(';', ' ', explode(';', $address)[0]))) > 0 ? trim(str_replace(';', ' ', explode(';', $address)[0])).', ' : '';
                                    		$street = strlen(trim(str_replace(';', ' ', explode(';', $address)[1]))) > 0 ? trim(str_replace(';', ' ', explode(';', $address)[1])).', ' : '';
                                    		$barangay = strlen(trim(str_replace(';', ' ', explode(';', $address)[2]))) > 0 ? trim(str_replace(';', ' ', explode(';', $address)[2])).', ' : '';
                                    		$city = strlen(trim(str_replace(';', ' ', explode(';', $address)[3]))) > 0 ? trim(str_replace(';', ' ', explode(';', $address)[3])).', ' : '';
                                    		$province = strlen(trim(str_replace(';', ' ', explode(';', $address)[4]))) > 0 ? trim(str_replace(';', ' ', explode(';', $address)[4])).',' : '';

                                    		echo rtrim(($building.$street.$barangay.$city.$province), ',');
                                    	?>
                                    </span>
                                    <span><?php echo $this->session->userdata('user')->branch_company->ch_cb_tin; ?></span>
                                </div>
                            </div>
                            <ul id='t_2_ul' class="nav navbar-nav">
                                <li><a href="index.html"><i class='fa fa-exclamation-circle'></i>&nbsp; Company Profile</a></li>
                                <li><a href="about-us.html"><i class='fa fa-power-off'></i>&nbsp; Logout</a></li>                   
                            </ul>
                        </div>
                        <div id='title-bar' class='big'>
                            <div style="float: left;margin-right: 10px;padding-right: 1px;background-color: gray;">
                                <button class='btn btn-default btn-xs' style="margin: 0;height: 100%;color: #FFF;border-radius: 0;padding: 6px 20px;background-color: #FFF;"><i class='fa fa-arrow-left' style="color: #000; font-size: 13px;"></i></button>
                            </div>
                            <h4><?php if(isset($title)){ echo $title; } ?></h4>
                        </div>
                    </nav>
                </div>
                <div class='content-wrapper' style="margin-left: 50px;">
                    <?php if(isset($content)){ $this->load->view($content); } ?>
                </div>
                <div class="control-sidebar-bg"></div>
            </div>
        </div>

        
        
        <!-- METRO Libs -->
        <script src='<?php echo base_url(); ?>libs/js/jquery.min.js'></script>
        <!-- <script src="<?php echo base_url(); ?>libs/metro/js/metro.js"></script> -->
        <!-- <script src="<?php echo base_url(); ?>libs/metro/js/docs.js"></script> -->
        <!--<script src="<?php echo base_url(); ?>docpro/libs/metro/js/prettify/run_prettify.js"></script>-->
        <!-- <script src="<?php echo base_url(); ?>libs/metro/js/ga.js"></script> -->
        
        <!-- Javascript Libs -->
        <!-- <script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/jquery/dist/jquery.min.js"></script> -->
        <script type="text/javascript" src="<?php echo base_url(); ?>libs/datatable_with_columnsearch/jquery-1.12.4.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/Chart.js/Chart.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/matchHeight/jquery.matchHeight-min.js"></script>
        <!-- <script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/js/jquery.dataTables.min.js"></script> -->
        <script type="text/javascript" src="<?php echo base_url(); ?>libs/datatable_with_columnsearch/jquery.dataTables.min.js"></script>
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
        <!-- <script src='<?php echo base_url(); ?>libs/pivotTable/pivot.js'></script> -->
        
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
        <!-- <script src="<?php echo base_url(); ?>libs/mini-upload-form/assets/js/jquery.knob.js"></script>
        <script src="<?php echo base_url(); ?>libs/mini-upload-form/assets/js/jquery.ui.widget.js"></script>
        <script src="<?php echo base_url(); ?>libs/mini-upload-form/assets/js/jquery.iframe-transport.js"></script>
        <script src="<?php echo base_url(); ?>libs/mini-upload-form/assets/js/jquery.fileupload.js"></script>
        <script src="<?php echo base_url(); ?>libs/mini-upload-form/assets/js/script.js"></script>
        <script src="<?php echo base_url(); ?>libs/docpro_validation.js" type="text/javascript"></script> -->

        <!-- SEQUENCE JS -->
        <script src="<?php echo base_url(); ?>/libs/wizard-master/js/jquery.bootstrap.wizard.js"></script>
        <script src="<?php echo base_url(); ?>/libs/wizard-master/js/prettify.js"></script>
        <script src="<?php echo base_url(); ?>/libs/notify/bootstrap-notify.min.js"></script>

        <script src="<?php echo base_url(); ?>/libs/sequence/scripts/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>/libs/sequence/scripts/hammer.min.js"></script>
        <script src="<?php echo base_url(); ?>/libs/sequence/scripts/sequence.min.js"></script>

        <!-- Bootsrap Switch -->
        <!-- <script src="<?php echo base_url(); ?>libs/bootstrap-switch/js/bootstrap-switch.min.js"></script> -->

        <!-- Jquery Match -->
        <!-- <script src="<?php echo base_url(); ?>libs/jquery-match/jquery.matchHeight-min.js"></script> -->

        <!-- CORLATE -->
        <!-- <script src="<?php echo base_url(); ?>/libs/corlate/js/main.js"></script> -->

        <!-- CUSTOM -->
        <!-- <script src="<?php echo base_url(); ?>/assets/js/table_option.js"></script> -->
        <script src="<?php echo base_url(); ?>/assets/js/v_validation.js"></script>

        <!-- <script type="text/javascript">
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
        </script> -->
        <script>
            $(document).ready(function(){
                $('.content-wrapper').click(function(){
                    $('body').addClass('sidebar-collapse');
                });

                var height = $(window).scrollTop();
                setTimeout(function(){
                    var m_t = $('#title-bar').offset().top + $('#title-bar').outerHeight(true);
                    $('#m_c_d').css('margin-top', m_t);
                }, 300);

                $(window).unload(function(){
                    $(window).scrollTop(0, 0);
                    height = $(window).scrollTop();
                });

                $(window).scroll(function() {
                    var height = $(window).scrollTop();
                    if(height  > 1) {
                        $('#company-details').css('display', 'none');
                        $('#company-collapse-title').addClass('show');
                        $('#title-bar').removeClass('big');
                        $('#title-bar').addClass('small');
                        $('#company-plate').addClass('small');
                        $('#company-plate').removeClass('big');

                    }else{
                        $('#company-details').css('display', 'block');
                        $('#company-collapse-title').removeClass('show');
                        $('#title-bar').removeClass('small');
                        $('#title-bar').addClass('big');
                        $('#company-plate').removeClass('small');
                        $('#company-plate').addClass('big');
                    }
                    
                    if($('#title-bar').hasClass('big') && height > 1){
                        $('#m_c_d').removeClass('appear');
                        $('#m_c_d').addClass('disappear');
                        var m_t = $('#title-bar').offset().top + $('#title-bar').outerHeight(true);
                        $('#m_c_d').css('margin-top', m_t);
                        $('#m_c_d').removeClass('disappear');
                        $('#m_c_d').addClass('appear');
                    }
                    if($('#title-bar').hasClass('small') && height === 1){
                        setTimeout(function(){
                            var m_t = $('#title-bar').offset().top + $('#title-bar').outerHeight(true);
                            $('#m_c_d').css('margin-top', m_t);
                        }, 200);
                    }
                    
                });

                (function(){
                    if(($('body').hasClass('sidebar-collapse'))){
                        $('body #main-nav > li:not(:first-child) > a').click(function(){
                            var url = $(this).attr('url');
                            if(url){
                                window.location = url;
                            }
                        });
                    }else{
                        $('body #main-nav > li:not(:first-child) > a').unbind('click');
                    }
                })();
                $('.sidebar-toggle').click(function(){
                    if($('body').hasClass('sidebar-mini')){
                        if($('body').hasClass('sidebar-collapse') && !$('body').hasClass('sidebar-open')){
                            $('body #main-nav > li:not(:first-child) > a').click(function(){
                                var url = $(this).attr('url');
                                if(url){
                                    window.location = url;
                                }
                            });
                        }else{
                            $('body #main-nav > li:not(:first-child) > a').unbind('click');
                        }
                    }else{
                        if(($('body').hasClass('sidebar-collapse'))){
                            $('body #main-nav > li:not(:first-child) > a').click(function(){
                                var url = $(this).attr('url');
                                if(url){
                                    window.location = url;
                                }
                            });
                        }else{
                            $('body #main-nav > li:not(:first-child) > a').unbind('click');
                        }
                    }
                });
            });
        </script>
        <?php if(isset($footer_js)){ $this->load->view($footer_js); } ?>

    </body>

</html>
