<style>
	.side-menu, #expand-sidebar-button{
		display: none !important;
	}
	nav.navbar-top .navbar-body > a{
		margin-left: 0;
	}
	#main-content .side-body{
		margin-left: 0 !important;
	}
</style>
<link href='<?php echo base_url(); ?>/assets/css/coa_setup.css' rel='stylesheet' type='text/css'>


<!-- MODALS -->
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
	.app-container .popover-content .modal-footer{
		border-top: 1px solid #C1C1C1 !important;
	}

	.view-popover{
		width: 500px;
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
		height: 120px;
	}

	.modal-body{
   	    padding-right: 30px;
   	    padding-left: 30px;
        border-right: 1px solid #D5D5D5;
        background-color: #FFF;

	}

	.view-modal-body{
		background-color: #FFF;
	}

	.view-modal-body .modal-body{
		height: 120px;
   	    padding-right: 0px;
   	    padding-left: 0px;
        border-right: 1px solid #D5D5D5;
	}

	.col-md-8{
		padding-left: 0px;
	}

	.col-md-4{
        width: 250px;
	}

	.edit-modal-body .modal-body, .edit-modal-body .col-md-4, .update-modal-body .modal-body, .update-modal-body .modal-body, .update-modal-body .col-md-4{
		height: 190px;
	}

	.popover-content .col-md-12{
		padding: 0;
	}

	.modal-body td{
		padding-top: 10px;
	}

	#chart-of-accounts-table_length{
		line-height: 20px;
		padding-left: 30px;
	}

	.category-label{
		padding: 10px;
		background-color: #607D8B;
		width: 100%;
		color: #FFF;
		margin: 0;
	}
	#coa_sequence .seq-canvas > li:before{
		content: none;
	}

	.breadcrumb{
		margin: 0;
	}
</style>