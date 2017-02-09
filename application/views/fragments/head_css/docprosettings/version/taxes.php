<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/docpro_setup/tax_setup_seq.css">

<style>
	#taxes-table_wrapper .row > [class*="col-"]{
		margin-bottom: 0 !important;
	}
	.dataTables_filter{
		margin-bottom: 0;
	}
	.dataTables_filter label{
		margin: 0;
	}
	#taxes-table_wrapper .row:first-child{
		margin-bottom: 0;
	}
</style>
<style>
	.tab-content div:first-child{
		padding-top: 0;
	}
	.tab-content div:nth-child(2) .container{
		padding-left: 0; 
		min-height: 50vh; 
	}
	.tab-content div:nth-child(2) .container > .row > .col-md-12 > div:first-child button{
		width: 10%;
	}
	.tab-content div:nth-child(2) .container > .row > .col-md-12 > div:first-child button:last-child{
		float: right;
	}
	.tab-content div:nth-child(2) .container > .row > .col-md-12 > div:nth-child(2) > .col-md-4{
		border: 1px solid #DDD;
	}
	.tab-content div:nth-child(2) .container > .row > .col-md-12 > div:nth-child(2) > .col-md-4 > .row{
		margin-top: 10px;
	}
	.tab-content div:nth-child(2) .container > .row > .col-md-12 > div:nth-child(2) > .col-md-4 > .row > div:first-child{
		padding: 10px;
	}
	.tab-content div:nth-child(2) .container > .row > .col-md-12 > div:nth-child(2) > .col-md-4 > .row > div{
		margin: 0;
	}
	.card-body > div > ul{
		margin-left: 0;
	}
	
	#input-panel{
		display: none;
	}
	
	#input-panel > div{
		border: 1px solid #DDD;
	}
	#input-panel > div .row:first-child{
		margin-top: 10px;
	}
	#input-panel > div .row div:first-child{
		padding: 10px;
	}
	#input-panel > div .row div{
		margin: 0; 
	}
	.tab-content div:nth-child(2) .container > .row > .col-md-12 > div:nth-child(2) > .col-md-4 > .row:last-child{
		margin-bottom: 10px;
	}
</style>

<style>
	.popover{
		border-radius: 2px !important;
		z-index: 999999999999;
		max-width: 100%;
		background-color: #e8e8e8;
		box-shadow: 10px;
		width: 800px;

	}
	.app-container .popover-content > div:first-child{
		border-bottom: 1px solid #C1C1C1 !important;
	}
	.app-container .modal-footer{
		border-top: 1px solid #C1C1C1 !important;
	}

	.view-popover{
		width: 700px;
	}

	.popover-content{

		padding-left: 0px;
		padding-right: 0px;
	}

	.modal-title{
		padding-left: 10px;

	}
	.body{
		background-color: white;
	}

	.view-body{
		background-color: white;
		height: 320px;
	}

	.modal-footer{
		background-color: #e8e8e8;
		width: 154%;
	}

	.modal-body, .col-md-4{
		height: 250px;
	}

	.edit-modal-body .modal-body, .update-modal-body .modal-body, .edit-modal-body .col-md-4, .update-modal-body .col-md-4{
		height: 270px;
	}

	.modal-body{
   	    padding-right: 0px;
   	    padding-left: 0px;

	}

	.view-modal-body .tt-modal-body{
		height: 155px;
   	    padding-right: 0px;
   	    padding-left: 0px;
   	    padding-top: 7px;
	}

	.col-md-8{
		padding-left: 0px;
	}

	.col-md-4{
        width: 250px;
	}
</style>
<style>
	.form-group-sm select.form-control{
		line-height: 20px;
		padding-left: 36%;
	}
	select.input-sm{
		line-height: 20px !important;
		padding-left: 19% !important;
	}
</style>
<style type="text/css">
	@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,100);
	body {
		font-family: 'Roboto', sans-serif;
		background-color: #EF5350;
	}
	.dataTables_wrapper th{
		font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;
	}
</style>
<style>
	.popover .col-md-4 button.btn-default{
		font-size: 11px;
	}
</style>

<!-- TAX TYPES -->
<style>
	#tax-types-table_wrapper .row > [class*="col-"]{
		margin-bottom: 0 !important;
	}
	.dataTables_filter{
		margin-bottom: 0;
	}
	.dataTables_filter label{
		margin: 0;
	}
	#tax-types-table_wrapper .row:first-child{
		margin-bottom: 0;
	}

	.tt-view-modal-body{
		width: 550px;
	}
	.tt-modal-body{
		height: 145px;
		background-color: #FFF;
	}
	.tt-add-modal-body,
	.tt-edit-modal-body,
	.tt-update-modal-body
	{
		width: 495px;
	}
	.tt-add-modal-body .tt-modal-body{
		height: 103px;
	}
	.tt-modal-footer{
		padding-right: 18px;
	}
</style>

<!-- CUSTOM BUTTONS -->
<style>
	.setup-tab{
		float: left;
	}
	.btn-flat.btn-default
	.btn-flat.btn-primary:focus{
		color: #FFF !important;
	}
</style>

<style type="text/css">
	.btn-default .ink,
	.dropdown-toggle.btn-default .ink {
	  background-color: #FFF !important;
	}
</style>