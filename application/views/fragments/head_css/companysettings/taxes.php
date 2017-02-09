<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/company_settings/taxes_seq.css">

<style>
	.dataTables_wrapper .table>thead:first-child>tr:first-child>th{
		background-color: #009688;
	}
	.dataTables_wrapper .table>thead:first-child>tr:first-child>th.sorting_asc,
	.dataTables_wrapper .table>thead:first-child>tr:first-child>th.sorting_desc
	{
		background-color: #FFF;
	}
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
		height: 290px;
	}

	.modal-footer{
		background-color: #e8e8e8;
		width: 100%;
	}

	.modal-body, .col-md-4{
		height: 230px;
	}

	.edit-modal-body .modal-body, .update-modal-body .modal-body, .edit-modal-body .col-md-4, .update-modal-body .col-md-4{
		height: 295px;
	}

	.modal-body{
   	    padding-right: 0px;
   	    padding-left: 0px;
   	    background-color: #FFF;
	}

	.view-modal-body{
		width: 500px;
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

	.delete-modal-body{
		width: 500px;
	}

	.delete-modal-body .modal-body{
		height: 270px;
	}

	.delete-modal-body .modal-footer{
		width: 100%;
	}
	.tt-delete-modal-body{
		width: 500px;
	}
	.popover.tt-view-modal-body .modal-body,
	.popover.tt-edit-modal-body .modal-body,
	.popover.tt-update-modal-body .modal-body
	{
		height: 130px;
	}
	.popover.tt-add-modal-body .modal-body{
		height: 97px;
	}
	.popover.add-modal-body .modal-body{
		height: 230px;
	}
	.popover.view-modal-body .modal-body{
		height: 295px;
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
		width: 500px;
	}
	.tt-modal-body{
		height: 131px;
		background-color: #FFF;
	}
	.tt-add-modal-body,
	.tt-edit-modal-body,
	.tt-update-modal-body
	{
		width: 500px;
	}
	.tt-add-modal-body .tt-modal-body{
		height: 93px;
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
<style>
	.dataTables_wrapper .row:first-child{
		display: block !important;
	}
	.dataTables_wrapper .row:first-child .col-sm-6:last-child{
		float: right;
	}
	#add-tt,
	#add
	{
		float: left;
	}
	.dataTables_length{
		margin: 0;
	}
	/*.dataTables_wrapper .row:nth-child(2) > div{
		padding: 0;
	}
	.dataTables_wrapper .col-sm-6{
		padding: 0;
	}*/
</style>
<style>
	#tax-types-table tr:hover{
		cursor: hand;
		cursor: pointer;
	}
	.selectize-input{
		text-align: center;
	}
	.tax-alert{
		background-color: #f9e0e0 !important;
	    border-left: 3px solid red !important;
	    color: red !important;
	    float: left;
	}
</style>
<style>
	.tax-no{
	    position: absolute;
	    z-index: 999;
	    text-align: center;
	    margin-top: 13px;
	    margin-left: 10px;
	    padding: 8px 14px;
	    background-color: #FFF;
	    color: #000;
	    border-radius: 50%;
	    box-shadow: inset 0 2px 2px 0 rgba(0,0,0,0.14), inset 0 1px 5px 0 rgba(0,0,0,0.12), inset 0 3px 1px -2px rgba(0,0,0,0.2);
	}
	.setup-tab.active span.tax-no{
		background-color: #FFF;
		color: #000;
		border-radius: 50%;
		padding: 8px 14px;
		box-shadow: inset 0 2px 2px 0 rgba(0,0,0,0.14), inset 0 1px 5px 0 rgba(0,0,0,0.12), inset 0 3px 1px -2px rgba(0,0,0,0.2);
	}
</style>