<link href='<?php echo base_url(); ?>/assets/css/purchase_journal.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>/assets/css/business_partner.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>/assets/css/new_transaction.css' rel='stylesheet' type='text/css'>
<style>
	.tab-content > div {
		padding: 0 !important;
	}
</style>
<style>
	@media screen and (max-width: 992px){
		#journal-navs{
			margin-top: 60px !important;
		}
		
	}
	@media screen and (min-width: 992px){
		.col-custom{
			 width: 10% !important;
		}
		.col-input-custom{
			 padding: 0 2px;
		}
		.col-md-3 {
			width: 29%;
		}
		.col-md-2 {
			width: 17.4%;
		}
	}
	@media screen and (max-width: 768px){
		#journal-navs a{
			width: 100% !important;
		}
	}
	
	@media screen and (min-width: 992px){
		/**#card-2 .col-md-12 div:first-child label, #card-4 .col-md-12 div:first-child label{
			float: right;
		}**/
		#documents > .row:first-child > .col-md-12:first-child .card-body > .row .col-md-12 > div:first-child label{
			float: right;
		}
		#card-4 .col-md-12 div.sc-discount-col label{
			float: left ;
		}
		#custom-col .col-md-8{
			width: 61%;
		}
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
<style>
	input, select{
		font-size: 11.5px !important;
		padding: 6px 5px !important;
	}
	.select2-selection__rendered{
		font-size: 11px !important;
	}
</style>
<style>

	
/** sales **/	
	select[name=transactions-journal-summary-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#transactions-journal-summary-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#transactions-journal-summary-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#transactions-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#transactions-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#transactions-journal-summary-table_wrapper{
		margin: 0 !important;
	}
	#transactions-journal-summary-table{
		margin-top: 0 !important;
	}
	#transactions-journal-summary-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** BP	**/
	select[name=transactions-bp-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#transactions-bp-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#transactions-bp-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#transactions-bp-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#transactions-bp-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#transactions-bp-table_wrapper{
		margin: 0 !important;
	}
	#transactions-bp-table{
		margin-top: 0 !important;
	}
	#transactions-bp-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	
	select[name=transactions-transaction-details-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#transactions-transaction-details-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#transactions-transaction-details-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#transactions-transaction-details-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#transactions-transaction-details-table_wrapper{
		margin: 0 !important;
	}
	#transactions-transaction-details-table{
		margin-top: 0 !important;
	}
	#transactions-transaction-details-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
</style>


<style>
	/* SELECT 2 */

	.select2 > .select2-choice.ui-select-match {
		height: 29px;
	}
	.selectize-control > .selectize-dropdown {
		top: 36px;
	}
	/* Some additional styling to demonstrate that append-to-body helps achieve the proper z-index layering. */
	.select-box {
	  background: #fff;
	  position: relative;
	  z-index: 1;
	}
	.alert-info.positioned {
	  margin-top: 1em;
	  position: relative;
	  z-index: 10000; /* The select2 dropdown has a z-index of 9999 */
	}
	.selectize-control.single .selectize-input {
		background: transparent;
		border: none;
		background-image: none;
	}
	.ui-select-container{
		padding: 0;
	}
</style>


<!-- BOOTSTRAP MATERIAL -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/bootstrap_material/css/bootstrap-material-design.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/bootstrap_material/css/ripples.min.css">

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
	#documents .form-group, #documents .form-control,
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
</style>
<style type="text/css">
	.form-group.label-floating label.control-label{
		top: -30px !important;
	}
	.form-group.label-floating input, 
	.form-group.label-floating select,
	.form-group.label-floating .selectize-input{
		border: 1px solid #E8E8E8;
		border-bottom: none;
	}
	.selectize-control.multi .selectize-input.input-active:after, 
	.selectize-control.multi .selectize-input:after, 
	.selectize-control.single .selectize-input.input-active:after, 
	.selectize-control.single .selectize-input:after {
		content: '' !important;
	}

	button:focus, .nav-tabs > li:focus, .nav-tabs > li > a:focus{
	  outline: none !important;
	}

	.cash-credit:focus{
		background-color: #353d47 !important;
	}

	.nav-tabs > li > a:hover, .nav-tabs > li > a:focus{
		background-color: #ECECEC !important;
		color: #363c46 !important;
		font-weight: bold;
    	border-bottom: 2px solid #A7A7A7 !important;
	}

	.form-group.label-floating .selectize-focus{
	    border: 1px solid #E8E8E8 !important;
	}

	.selectize-control>.selectize-dropdown, .selectize-control>.selectize-input>input {
		width: 100% !important;
		padding: 6px 12px !important;
	}
</style>

<style type="text/css">
	#transactions-journal-summary-table_wrapper table tbody tr,
	#transactions-bp-table_wrapper table tbody tr,
	#transactions-transaction-details-table_wrapper table tbody tr,
	#receipts-journal-summary-table_wrapper table tbody tr,
	#receipts-bp-table_wrapper table tbody tr,
	#receipts-transaction-details-table_wrapper table tbody tr,
	#collections-journal-summary-table_wrapper table tbody tr,
	#collections-bp-table_wrapper table tbody tr,
	#collections-transaction-details-table_wrapper table tbody tr,
	#purchases-journal-summary-table_wrapper table tbody tr,
	#purchases-bp-table_wrapper table tbody tr,
	#purchases-transaction-details-table_wrapper table tbody tr,
	#disbursements-journal-summary-table_wrapper table tbody tr,
	#disbursements-bp-table_wrapper table tbody tr,
	#disbursements-transaction-details-table_wrapper table tbody tr,
	#adjustments-journal-summary-table_wrapper table tbody tr,
	#adjustments-bp-table_wrapper table tbody tr,
	#adjustments-transaction-details-table_wrapper table tbody tr,
	#specials-journal-summary-table_wrapper table tbody tr,
	#specials-bp-table_wrapper table tbody tr,
	#specials-transaction-details-table_wrapper table tbody tr{
		cursor: hand;
		cursor: pointer;
	}
	#transactions-journal-summary-table_wrapper table tbody tr:hover,
	#transactions-bp-table_wrapper table tbody tr:hover,
	#transactions-transaction-details-table_wrapper table tbody tr:hover,
	#receipts-journal-summary-table_wrapper table tbody tr:hover,
	#receipts-bp-table_wrapper table tbody tr:hover,
	#receipts-transaction-details-table_wrapper table tbody tr:hover,
	#collections-journal-summary-table_wrapper table tbody tr:hover,
	#collections-bp-table_wrapper table tbody tr:hover,
	#collections-transaction-details-table_wrapper table tbody tr:hover,
	#purchases-journal-summary-table_wrapper table tbody tr:hover,
	#purchases-bp-table_wrapper table tbody tr:hover,
	#purchases-transaction-details-table_wrapper table tbody tr:hover,
	#disbursements-journal-summary-table_wrapper table tbody tr:hover,
	#disbursements-bp-table_wrapper table tbody tr:hover,
	#disbursements-transaction-details-table_wrapper table tbody tr:hover,
	#adjustments-journal-summary-table_wrapper table tbody tr:hover,
	#adjustments-bp-table_wrapper table tbody tr:hover,
	#adjustments-transaction-details-table_wrapper table tbody tr:hover,
	#specials-journal-summary-table_wrapper table tbody tr:hover,
	#specials-bp-table_wrapper table tbody tr:hover,
	#specials-transaction-details-table_wrapper table tbody tr:hover{
		background-color: #E8E8E8 !important;
		color: #000 !important;
	}

	#summary-prod-serv input,
	#summary-vat input,
	#summary-discount input,
	#summary-ewt input,
	#summary-fwt input,
	#summary-doc-ref input,
	#summary-bank input,
	#summary-other input,
	#bp-trans-prod-serv input,
	#bp-trans-vat input,
	#bp-trans-discount input,
	#bp-trans-ewt input,
	#bp-trans-fwt input,
	#bp-trans-doc-ref input,
	#bp-trans-bank input,
	#bp-trans-other input
	{
		margin: 0 !important;
		padding: 0 !important;
		text-align: center;
	}

	#summary-prod-serv tr,
	#summary-vat tr,
	#summary-discount tr,
	#summary-ewt tr,
	#summary-fwt tr,
	#summary-doc-ref tr,
	#summary-bank tr,
	#summary-other tr,
	#bp-trans-prod-serv tr,
	#bp-trans-vat tr,
	#bp-trans-discount tr,
	#bp-trans-ewt tr,
	#bp-trans-fwt tr,
	#bp-trans-doc-ref tr,
	#bp-trans-bank tr,
	#bp-trans-other tr
	{
		background-color: #FFF !important;
	}

	#summary-document-details-card input{
		background-image: none !important;
	}

	#bp-document-details input{
		background-image: none !important;
	}
	.journal-entry input{
		margin: 0;
		background-image: none;
	}
	.journal-entry-th{
		background-color: #D4D4D4;
		font-size: 11px;
	}
</style>
<style>
	#product-services-table tr,
	#vat-table tr,
	#discounts-table tr,
	#expanded-tax-table tr,
	#final-withholding-tax-table tr,
	#document-reference-table tr,
	#bank-details-table tr,
	#other-details-table tr{
		background-color: #FFF;
	}
</style>

<style>
	.dataTables_filter .form-group,
	.row .col-sm-12,
	.dataTables_filter,
	.col-sm-6 label,
	.dataTables_length{
		margin: 0 !important;
	}
	.dataTables_length .form-group{
		margin-top: 6px !important;
	}
	table.dataTable thead .sorting:after{
		opacity: 0;
	}
	.dataTables_wrapper .form-group input[type=search],
	.dataTables_wrapper .dataTables_length select{
		border: 1px #d9d9d9 solid;
		background-image: none;
		border-radius: 3px;
	}
	table.dataTable
	{
		font-size: 12px !important;
		font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;
	}
	body .side-body
	{
		font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	}
</style>
