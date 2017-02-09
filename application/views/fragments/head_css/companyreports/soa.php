<link href='<?php echo base_url(); ?>/assets/css/purchase_journal.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>/assets/css/business_partner.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>/assets/css/new_transaction.css' rel='stylesheet' type='text/css'>
<style type="text/css">
	label{
		color: #000;
		font-size: 13px;
	}
	.docu_top label{
		color: #FFF;
	}
	.nav-tabs>li>a.text-black,
	.form-group label.text-black{
		color: #363c46 !important;
	}
	.text-sm{
		font-size: 12px !important;
	}
	.text-green{
		/*color: #009688 !important;*/
		color: #000 !important;
	}
	.form-group.has-primary label.control-label, .form-group.has-primary .help-block {
		/*color: #009688;*/
		color: #000;
	}
	.disabled-form-group label{
		top: -30px !important;
	}
	.disabled-form-group input{
		background-color: #EEE !important;
	}
	.trans-select .selectize-input, .trans-select select{
		font-size: 11.5px !important;
		color: #000C98 !important;
		text-align: center !important;
	}
	.form-group{
		margin-top: 15px !important;
	}
	.form-group.no-margin, 
	.form-group.no-margin input, 
	.form-group.no-margin .selectize-input, 
	.form-group.no-margin .selectize-control,  
	.form-group.no-margin select{
		margin: 0 !important;
		padding: 0 !important;
	}
	table.no-margin td{
		padding: 0 !important;
		margin: 0 !important;
	}
	table.no-padding td{
		padding: 0 !important;
	}

	.btn:not(.btn-raised).btn-primary, .btn:not(.btn-raised).btn-info, .btn:not(.btn-raised).btn-danger{
		color: #FFF !important;
	}

	.navbar .navbar-nav>li>a {
		padding-top: 0 !important;
		padding-bottom: 0 !important;
	}
	.dataTables_wrapper  label{
		color: #000 !important;
		font-size: 13px;
	}
	#soa .form-group, #soa .form-control,
	#summary-document .form-group, #summary-document .form-control,
	#bp-document .form-group, #bp-document .form-control{
		margin: 0 !important;
		background-image: none !important;
	}
	.docu_top .form-group{
		padding: 0 !important;
	}
	#new-transactions .table-bordered td{
		border-bottom: 0;
		border-top: 0;
	}
	#new-transactions .table-bordered{
		border-bottom: 0;
	}
	#soa label{
		font-weight: normal !important;
	}
</style>
<style>
	.side-body li.active a, .side-body li.active a:after{
		background-color: #ECECEC !important;
		color: #000 !important;
		font-weight: bold;
		border-bottom: 2px solid #A7A7A7 !important;
	}
	
	.flat-blue .step.tabs-left .nav-tabs > li:hover:after, .flat-blue .step.tabs-left .nav-tabs > li.active:after{
		border-left: 15px solid #000 !important;
	}
</style>