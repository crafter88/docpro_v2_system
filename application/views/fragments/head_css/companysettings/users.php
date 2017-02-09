<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/company_settings/users_seq.css">
<style>
	#users-table_wrapper .row > [class*="col-"]{
		margin-bottom: 0 !important;
	}
	.dataTables_filter{
		margin-bottom: 0;
	}
	.dataTables_filter label{
		margin: 0;
	}
	#users-table_wrapper .row:first-child{
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

	.popover .modal-footer{
		background-color: #e8e8e8;
		width: 100%;
	}

	.popover .modal-body, .col-md-4{
		height: 300px;
	}

	.popover .modal-body{
   	    padding-right: 0px;
   	    padding-left: 0px;
   	    background-color: #FFF;
	}

	.edit-modal-body .modal-body, .edit-modal-body .col-md-4{
		height: 421px;
	}

	.view-modal-body{
		height: 446px;
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
	.popover.add-user-modal .modal-body{
		height: 388px;
	}
	.popover.view-user-modal .modal-body{
		height: 397px;
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
<!-- SELECTIZE -->
<style>
	.selectize-control.single .selectize-input, .selectize-dropdown.single{
		z-index: 999999999 !important;
   		border-radius: 0;
	}
	.selectize-input.items.has-options.full.has-items,
	.selectize-input.items.not-full.has-options,
	.selectize-input.items.not-full
	{
		background-color: #FFF !important;
		border-color: #CCC !important;
		background-image: none !important;
		text-align: center;
	}
	.selectize-dropdown-content .create.active,
	.selectize-dropdown-content .create
	{
		display: none !important;
	}
	.selectize-input.items.not-full.has-options.disabled.locked,
	.selectize-input.items.full.has-options.has-items.disabled.locked
	{
		opacity: 1 !important;
		background-color: #EEE !important;
	}
	.modal .selectize-input{
		padding: 5px;
		height: 30px;
	}
	.modal .selectize-input.not-full{
		padding: 0;
	}
	.modal .modal-content
	{
		margin-top: 10% !important;
	}
</style>