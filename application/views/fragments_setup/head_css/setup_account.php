<link href="<?php echo base_url(); ?>libs/wizard-master/css/prettify.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/checkbox/style.css">
<link href='<?php echo base_url(); ?>/assets/css/setup.css' rel='stylesheet' type='text/css'>
 
<style type="text/css">
	.btn-success .ink,
	.dropdown-toggle.btn-success .ink {
	  background-color: #03ad9d !important;
	}
</style>

<style type="text/css">
	div[data-notify=container]{
		z-index: 999999999 !important;
	}
</style>


<!-- SLIDE PAGE CSS -->
<style type="text/css">
	#company-name{
		font-weight: bold;
	}
	#company-address{
		font-style: italic;
	}
	#profile-1{
		border-bottom: 1px solid #E8E8E8;
	}
	#profile-2, #profile-3{
		text-align: left;
	}
	#contact-details, #registrant-details{
		font-size: 16px;
		margin-top: 30px;
		margin-bottom: 20px;
	}
</style>

<!-- Override setup css -->
<style type="text/css">
	#sequence1 ul li > div.content .row:nth-child(1) > div, #sequence1 ul li > div.content .row:nth-child(1) > div div:nth-child(2){
		min-height: 0;
		margin-bottom: 0;
	}
	#sequence1 ul li > div.content .row:nth-child(1) > div div:nth-child(2){
		padding-top: 0;
	}
	.add-dynamic button{
		margin: 0;
	}
	.scrollable-div table{
		margin-top: 0;
	}
	.table-input .form-group{
		margin-bottom: 0;
	}
	.table-input button{
		min-width: 20px;
	}
	#sequence1 li{
		overflow: hidden;
	}
</style>

<style type="text/css">
	li .content{
		padding: 0;
	}
	input.required{
		border: 1px solid #ccc;
	}
	.invalid-input.color, .invalid-tin-input.color{
		border: 1px solid red !important;
	}
	.invalid-notice, .invalid-tin-notice, .error-notice{
		color: red; 
		font-size: 11px;
	}
	.error-notice{
		font-weight: bold;
	}
	.setup-next{
		float: right;
	}
	.setup-prev{
		float: left;
	}
	#go_to_users{
		cursor: hand;
		cursor: pointer;
		text-align: left; 
		color: blue; 
		font-size: 11px; 
		text-decoration: underline;
		margin-bottom: 15px;
	}
</style>
<style>
	.table-input{
		margin-bottom: 0;
	}
	.table-input td{
		padding: 0;
	}
	.table-input input{
		border: none;
	}
	.table-input .form-group{
		margin: 0;
	}
	.table-input th{
		text-align: center !important;
		color: #000 !important;
	}
	.table-input input{
		font-size: 13px !important;
	}
	p.n_a{
		font-size: 11px;
	}
	p.applicable{
		font-size: 11px;
		color: blue;
	}
</style>
<style>
	.dataTables_length select{
		line-height: 21px !important;
		padding-left: 37% !important;
		border-radius: 0 !important;
	}
	.dataTables_filter input{
		border-radius: 0 !important;
		text-align: center;
	}
	.dataTables_filter, 
	.dataTables_length
	{
		margin: 0;
	}
	.dataTables_wrapper .col-sm-6{
		padding: 0;
		margin: 0;
	}
	.dataTables_wrapper .col-sm-12{
		margin: 0 !important;
		padding: 0 !important;
	}
	.dataTables_wrapper .row:first-child{
		margin-bottom: 0;
	}
	.table-wrapper .top{
		margin: 0 !important;
	}
	.dataTables_filter .label{
		margin: 0 !important;
	}
	.dataTables_wrapper .top{
		margin: 0;
	}
	table.dataTable{
		margin-top: 0 !important;
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
		padding: 0 !important;
	}
	.popover{
		opacity: 0;
		width: 0px;
		-webkit-transition: width 0.1s, opacity 0.15s;
		transition: width 0.1s, opacity 0.15s;
	}
	.popover *{
		opacity: 0;
		transition: opacity 1.5s;
		-webkit-transition: opacity 1.5s;
	}
	.popover.animate{
		width: 500px;
		opacity: 1;
	}
	.popover.animate *{
		opacity: 1;
	}
	.popover-content > div:first-child{
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

	.popover .modal-title{
		padding-left: 10px;

	}
	.popover .body{
		background-color: white;
	}

	.popover .view-body{
		background-color: white;
	}

	.popover .modal-footer{
		background-color: #e8e8e8;
		width: 100%;
		border-top: 1px solid #C1C1C1 !important;
	}

	.popover .modal-body, 
	.popover .col-md-4
	{
		height: 197px;
	}
	.popover.add-user-modal .modal-body
	{
		height: 395px;
	}
	.popover.edit-user-modal .modal-body{
		height: 427px;
	}

	.popover.edit-profile-modal.animate{
		width: 500px;
	}
	.popover.edit-profile-modal .modal-body{
		height: 433px;
	}
	.popover.add-lvl-5-modal .modal-body,
	.popover.add-lvl-6-modal .modal-body
	{
		height: 110px;
	}
	.popover.edit-lvl-5-modal .modal-body,
	.popover.edit-lvl-6-modal .modal-body
	{
		height: 145px;
	}
	.popover.add-tax-modal .modal-body
	{
		height: 191px;
	}
	.popover.edit-tax-modal .modal-body
	{
		height: 223px;
	}

	.popover .modal-body{
   	    padding-right: 0px;
   	    padding-left: 0px;
        border-right: 1px solid #D5D5D5;
	}

	.popover .view-modal-body{
		background-color: #FFF;
	}

	.popover .view-modal-body .modal-body{
		height: 275px;
   	    padding-right: 0px;
   	    padding-left: 0px;
        border-right: 1px solid #D5D5D5;
	}

	.popover .col-md-8{
		padding-left: 0px;
	}

	.popover .col-md-4{
        width: 250px;
	}

	.popover .edit-modal-body .modal-body, 
	.popover .edit-modal-body .col-md-4, 
	.popover .update-modal-body .modal-body, 
	.popover .update-modal-body .modal-body, 
	.popover .update-modal-body .col-md-4
	{
		height: 190px;
	}

	.popover .col-md-4 button.btn-default{
		font-size: 11px;
	}
	.popover .selectize-input{
		border-radius: 0;
		text-align: center;
	}
	.selectize-control{
		padding: 0;
	}
	.selectize-input{
		border-radius: 0;
	}
	.selectize-dropdown-content{
		text-align: center;
	}
	.selectize-control .selectize-input.disabled{
		opacity: 1 !important;
		background-color: #EEE;
	}
	.popover.add-lvl-1-modal .modal-body{
		height: 70px;
	}
	.popover.edit-lvl-1-modal .modal-body{
		height: 99px;
	}
	.popover.add-lvl-2-modal .modal-body{
		height: 97px;
	}
	.popover.edit-lvl-2-modal .modal-body{
		height: 130px;
	}
	.popover.add-lvl-3-modal .modal-body{
		height: 130px;
	}
	.popover.edit-lvl-3-modal .modal-body{
		height: 162px;
	}
	.popover.add-lvl-4-modal .modal-body{
		height: 195px;
	}
	.popover.edit-lvl-4-modal .modal-body{
		height: 230px;
	}
	.popover.add-lvl-5-modal .modal-body{
		height: 197px;
	}
	.popover.edit-lvl-5-modal .modal-body{
		height: 230px;
	}
	.popover.add-tax-types-modal .modal-body{
		height: 97px;
	}
	.popover.edit-tax-types-modal .modal-body{
		height: 125px;
	}
	.popover.add-branch-modal .modal-body{
		height: 395px;
	}
	.popover.edit-branch-modal .modal-body
	{
		height: 395px;
	}
</style>
<style>
	::-webkit-input-placeholder {
	   font-size: 11px;
	}

	:-moz-placeholder {
	   font-size: 11px;  
	}

	::-moz-placeholder {
	   font-size: 11px; 
	}

	:-ms-input-placeholder {  
	   font-size: 11px;  
	}
</style>

<!-- COA N' TAX TAB -->
<style>
	#coa-seq{
		min-height: 610px;
	}
	#tax-seq{
		min-height: 610px;
	}
</style>

<style>
	.dataTable thead th, .dataTable thead td{
		color: #000;
	}
	.dataTable tr.selected{
		background-color: #E8E8E8 !important;
	}
	#coa-lvl1 tr,
	#coa-lvl2 tr,
	#coa-lvl3 tr,
	#coa-lvl4 tr
	{
		cursor: pointer;
		cursor: hand;
	}
	#coa-breadcrumb,
	#tax-breadcrumb
	{
		border-left: 3px solid #000;
		border-radius: 0;
		margin: 0;
	}
	.coa-alert{
		background-color: #f9e0e0 !important;
		border-left: 3px solid red !important;
		color: red !important;
		float: left;
	}
	.code-display .form-group{
		margin-top: -3px !important;
	}
</style>
<style>
	#tax-types tr{
		cursor: hand;
		cursor: pointer;
	}
</style>
<style>
	.selectize-input{
		text-align: left !important;
	}
	.popover button{
		padding-top: 4px !important;
	}
	table.dataTable button{
		padding-top: 2px !important;
	}
</style>
<!-- SELECTIZE -->
<style>
	.selectize-control.single .selectize-input, .selectize-dropdown.single{
		z-index: 999999999 !important;
   		border-radius: 0;
	}
	.popover .selectize-input.dropdown-active, .popover .selectize-dropdown{
		z-index: 99999999999999999999999 !important;
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
	.modal .modal-content
	{
		margin-top: 10% !important;
	}
</style>