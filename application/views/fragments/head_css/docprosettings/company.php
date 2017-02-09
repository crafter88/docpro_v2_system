<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/docpro_settings/company_seq.css">

<style>
	#company-table_wrapper .row > [class*="col-"]{
		margin-bottom: 0 !important;
	}
	.dataTables_filter{
		margin-bottom: 0;
	}
	.dataTables_filter label{
		margin: 0;
	}
	#company-table_wrapper .row:first-child{
		margin-bottom: 0;
	}
	
	#add-modal-tin:before, #add-modal-tin:after{
		content: ' ';
		display: table;
	}
	#add-modal-tin:after{
		clear: both;
	}
	#add-modal-tin *{
		float: left;
	}
	#add-modal-tin label{
		margin: 8px 10px 0 0;
	}
	#add-modal-tin p{
		margin: 8px 5px 0 5px;
	}
	.dataTables_wrapper .col-sm-6{
		margin: 0;
		padding: 0;
	}
	.dataTables_wrapper .row:first-child{
		margin: 0;
	}
	.dataTables_length{
		margin: 0;
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
		width: 500px;

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
	}

	.modal-footer{
		background-color: #e8e8e8;
		width: 100%;
	}
	.modal-body, .col-md-4{
		height: 382px;
	}

	.modal-body{
   	    padding-right: 0px;
   	    padding-left: 0px;	
   	    background-color: #FFF;
	}

	.view-modal-body .modal-body{
		height: 318px;
   	    padding-right: 0px;
   	    padding-left: 0px;
   	    padding-top: 7px;
	}

	.col-md-8{
		padding-left: 0px;
	}

	.update-modal-body .modal-body, .edit-modal-body .modal-body, .update-modal-body .col-md-4, .edit-modal-body .col-md-4{
		height: 193px;
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
<style>
	.btn-seq {
	    width: 100% !important;
	    padding: 6px 12px !important;
	    font-size: 11px !important;
	}
	#setup-tab-1, #setup-tab-2 {
	    padding: 0 !important;
	}
	.seq-selected {
	    background-color: #000 !important;
	    color: #FFF !important;
	}
</style>
<style>
	#company-summary-table tbody tr:hover,
	#company-table tbody tr:hover
	{
		cursor: pointer;
		cursor: hand;
	}

	#company-summary-table tbody tr.selected,
	#company-table tbody tr.selected
	{
		background-color: #e5e5e5;
	}
</style>