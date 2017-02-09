<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/selectize_2/css/selectize.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/selectize_2/css/selectize.bootstrap3.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/docpro_setup/coa_setup_seq.css">

<style>
	#discounts-table_wrapper .row > [class*="col-"]{
		margin-bottom: 0 !important;
	}
	.dataTables_filter{
		margin-bottom: 0;
	}
	.dataTables_filter label{
		margin: 0;
	}
	#discounts-table_wrapper .row:first-child{
		margin-bottom: 0;
	}
	/*table th{
		font-size: 11px;
	}*/
	.row > [class*="col-"] {
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
<!-- OVERRIDE POPOVER -->
<style type="text/css">
	.popover.acc-elements-view,
	.popover.acc-elements-add,
	.popover.acc-elements-edit,
	.popover.acc-elements-update,
	.popover.acc-elements-delete,

	.popover.acc-classification-view,
	.popover.acc-classification-add,
	.popover.acc-classification-edit,
	.popover.acc-classification-update,
	.popover.acc-classification-delete,

	.popover.line-items-view,
	.popover.line-items-add,
	.popover.line-items-edit,
	.popover.line-items-update,
	.popover.line-items-delete,

	.popover.acc-sub-view,
	.popover.acc-sub-add,
	.popover.acc-sub-edit,
	.popover.acc-sub-update,
	.popover.acc-sub-delete,

	.popover.bir-view,
	.popover.bir-add,
	.popover.bir-edit,
	.popover.bir-update,
	.popover.bir-delete,

	.popover.coa-add,
	.popover.coa-view,
	.popover.coa-edit,
	.popover.coa-update,
	.popover.coa-delete
	{
		width: 550px;
	}
	.popover.acc-elements-view .modal-body,
	.popover.acc-elements-edit .modal-body,
	.popover.acc-elements-update .modal-body,
	.popover.acc-elements-delete .modal-body,
	
	.popover.bir-view .modal-body,
	.popover.bir-add .modal-body,
	.popover.bir-edit .modal-body,
	.popover.bir-update .modal-body,
	.popover.bir-delete .modal-body
	{
		height: 118px;
		background-color: #FFF;
	}
	.popover.acc-elements-add .modal-body
	{
		height: 75px;
		background-color: #FFF;
	}

	.popover.acc-classification-view .modal-body,
	.popover.acc-classification-edit .modal-body,
	.popover.acc-classification-update .modal-body,
	.popover.acc-classification-delete .modal-body,

	.popover.line-items-view .modal-body,
	.popover.line-items-edit .modal-body,
	.popover.line-items-update .modal-body,
	.popover.line-items-delete .modal-body,

	.popover.acc-sub-view .modal-body,
	.popover.acc-sub-edit .modal-body,
	.popover.acc-sub-update .modal-body,
	.popover.acc-sub-delete .modal-body
	{
		height: 170px;
		background-color: #FFF;
	}
	.popover.acc-classification-add .modal-body,
	.popover.line-items-add .modal-body,
	.popover.acc-sub-add .modal-body
	{
		height: 125px;
		background-color: #FFF;
	}
	.popover.coa-add .modal-body,
	.popover.coa-view .modal-body,
	.popover.coa-edit .modal-body,
	.popover.coa-update .modal-body,
	.popover.coa-delete .modal-body
	{
		height: 215px;
		background-color: #FFF;
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
	.btn-seq-wrapper{
		width: 16.6%;
		float: left;
		margin-bottom: 20px;
	}
	.btn-seq-wrapper.active button{
		background-color: #000 !important;
		color: #FFF !important;
	}
	.btn-seq{
		width: 100%;
		padding: 20px !important;
		text-transform: none !important;
	}
	.btn-seq-wrapper + .btn-seq-wrapper button{
		border-left: 1px solid #DDD !important;
	}
</style>
<style type="text/css">
	.btn-default .ink,
	.dropdown-toggle.btn-default .ink {
	  background-color: #FFF !important;
	}
</style>
<style type="text/css">
	select.input-sm{
		line-height: 22px !important;
		padding-left: 18%;
	}
	.dataTables_wrapper > .row{
		margin: 0;
	}
	.dataTables_wrapper > .row *{
		margin-bottom: 0;
	}
</style>

<!-- SELECTIZE -->
<style>
	.selectize-control.single .selectize-input, .selectize-dropdown.single{
		z-index: 999999999 !important;
   		border-radius: 0;
	}
	.selectize-input.items.has-options.full.has-items,
	.selectize-input.items.not-full.has-options
	{
		background-color: #FFF !important;
		border-color: #CCC !important;
		background-image: none !important;
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
</style>