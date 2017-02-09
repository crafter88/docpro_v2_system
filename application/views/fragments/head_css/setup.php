<link href="<?php echo base_url(); ?>libs/wizard-master/css/prettify.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/checkbox/style.css">
<link href='<?php echo base_url(); ?>/assets/css/setup.css' rel='stylesheet' type='text/css'>


<style>
	.setup-tab{
		width: 38px; 
		height: 38px; 
		border-radius: 50%;
		display: inline-block;
		float: left;
	 	background-color: #009688;
	 	margin-bottom: 35px;
	 	transition: background-color 0.5s ease;
	 	-webkit-transition: background-color 0.5s ease;
	}

	.setup-tab .btn{
		margin-top: -25px;
	    margin-left: auto;
	    margin-right: auto;
	    width: 100% !important;
	    height: 100% !important;
	    background-color: transparent !important;
	}
	
	.setup-tab .btn span{
		text-align: center;
		margin: 0 auto;
	    display: block;
	    font-weight: bold;
	    font-size: 18px;
	    margin-top: -18px;
	    line-height: 75px !important;
	}
	
	.setup-tab:before{
		content: ' ';
	    width: 65px;
	    line-height: 20px;
	    display: block;
	    font-size: 10px;
	    /*border-radius: 3px;*/
	    margin: 15px auto 5px auto;
        background: #BDBDBD;
   		color: white;
   		padding: 2px;
   		margin-left: 38px;
	}
	.setup-tab:last-child{
		line-height: 35px;
	}
	.setup-tab:last-child p{
		line-height: 14px;
		margin-top: -7px;
	}
	.setup-tab:last-child:before, .setup-tab:last-child:after{
		width: 0px;
		padding: 0px;
	}
	.setup-tab + .setup-tab{
		margin-left: 65px;
	}

	.setup-tab .title{
		font-size: 11px;
		text-align: center;
	}

	.setup-tab.done button.btn.btn-success.setup-btn-circle{
	  background-color: #009688 !important;
	}
	.setup-tab.done span{
		color: #FFF !important;
	}
	.setup-tab.done:before{
		background-color: #009688 !important;
	}
	.setup-tab.active span{
		color: #FFF;
	}
	.setup-tab.active .title{
		font-weight: bold;
	}
	.setup-tab{
		background-color: #FFF !important;
	}
	.setup-tab span{
		color: #000;
	}
	.setup-tab .title{
		font-weight: bold;
	}
</style>

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
	/*.invalid-input, .invalid-tin-input{
		border: 1px solid red !important;
	}*/
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
	/*.table-input thead{
		border-color: #000;
	}*/
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
	.popover{
		opacity: 0;
		width: 0px;
		-webkit-transition: width 0.1s, opacity 0.15s;
		transition: width 0.1s, opacity 0.15s;
	}
	.popover *{
		opacity: 0;
		transition: opacity 0.8s;
		-webkit-transition: opacity 0.8s;
	}
	.popover.animate{
		width: 500px;
		opacity: 1;
	}
	.popover.animate *{
		opacity: 1;
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
	}

	.popover .modal-body, 
	.popover .col-md-4
	{
		height: 230px;
	}
	.popover.add-employee-modal .modal-body,
	.popover.edit-employee-modal .modal-body
	{
		height: 260px;
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
		height: 215px;
	}
	.popover.edit-tax-modal .modal-body
	{
		height: 250px;
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

<!-- COA TAB -->
<style>
	.coa-tab{
		float: left;
		width: 16.5%;
	}
	.coa-tab button{
		width: 100%;
		padding: 20px 0;
		font-size: 11px;
	}
	.coa-tab.active button{
		color: #FFF !important;
		background-color: #000 !important;
	}
	#coa-seq{
		min-height: 515px;
	}
</style>

<style>
	.dataTable thead th, .dataTable thead td{
		color: #000;
	}
</style>