<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/docpro_settings/mop_setup_seq.css">

<style>
	#modes-of-payment-table_wrapper .row > [class*="col-"]{
		margin-bottom: 0 !important;
	}
	.dataTables_filter{
		margin-bottom: 0;
	}
	.dataTables_filter label{
		margin: 0;
	}
	#modes-of-payment-table_wrapper .row:first-child{
		margin-bottom: 0;
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

	.mop-view-body{
		background-color: white;
	}

	.modal-footer{
		background-color: #e8e8e8;
		width: 100%;
	}

	.mop-modal-body{
		height: 200px;
   	    padding-right: 0px;
   	    padding-left: 0px;
   	    background-color: #FFF;

	}
	.modal-body{
		width: 100%;
		height: 115px;
   	    padding-left: 24px;
        border-right: 1px solid #D5D5D5;
        background-color: #FFF;
	}
	.mop-view-modal-body{
		width: 400px;
	}

	.mop-view-modal-body .mop-modal-body{
		height: 203px;
   	    padding-right: 0px;
   	    padding-left: 0px;
   	    padding-top: 7px;
	}

	.popover.mop-add-modal-body,
	.popover.mop-edit-modal-body,
	.popover.mop-update-modal-body
	{
		width: 500px;
	}
	.mop-add-modal-body #mop-add-options,
	.mop-add-modal-body .modal-body
	{
		height: 157px;
	}
	.mop-edit-modal-body #mop-edit-options,
	.mop-edit-modal-body .modal-body,
	.mop-update-modal-body #mop-update-options,
	.mop-update-modal-body .modal-body
	{
		height: 177px;
	}
	.mop-add-modal-body .modal-footer,
	.mop-edit-modal-body .modal-footer,
	.mop-update-modal-body .modal-footer
	{
		width: 100% !important;
	}

	.col-md-8{
		padding-left: 0px;
	}

	.col-md-4{
        width: 250px;
   		height: 200px;
	}
	.popover.mop-view-modal-body .modal-body{
		height: 191px;
	}
	.popover.mop-add-modal-body .modal-body{
		height: 127px;
	}
	.popover.mop-edit-modal-body .modal-body,
	.popover.mop-update-modal-body .modal-body
	{
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


<!-- TYPES OF PAYMENT -->

<style>
	#top-table_wrapper .row > [class*="col-"]{
		margin-bottom: 0 !important;
	}
	.dataTables_filter{
		margin-bottom: 0;
	}
	.dataTables_filter label{
		margin: 0;
	}
	#top-table_wrapper .row:first-child{
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
	.modal-footer{
		background-color: #e8e8e8;
	}
	.top-modal-body{
		width: 100%;
		height: 100px;
   	    padding-right: 24px;
   	    padding-left: 0px;
        border-right: 1px solid #D5D5D5;
	}
	.top-view-modal-body .top-modal-body{
		height: 100px;
	}
	.top-add-modal-body .top-modal-body{
		height: 50px;
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