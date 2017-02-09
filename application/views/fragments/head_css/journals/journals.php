<link href='<?php echo base_url(); ?>/assets/css/purchase_journal.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>/assets/css/business_partner.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>/assets/css/new_transaction.css' rel='stylesheet' type='text/css'>
<style>
	.tab-content > div {
		padding: 0 !important;
	}
	#new-transactions table td button.btn-xs{
		margin-top: 3px !important;
		margin-left: 15px !important;
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
			 width: 11% !important;
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
/** specials **/	
	select[name=specials-journal-summary-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#specials-journal-summary-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#specials-journal-summary-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#specials-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#specials-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#specials-journal-summary-table_wrapper #summary-table_filter{
		margin: 0 !important;
	}
	#specials-journal-summary-table{
		margin-top: 0 !important;
	}
	#specials-journal-summary-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=specials-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	
	#specials-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#specials-journal-entries-table_wrapper > .row .col-sm-6 div:first-child{
		margin: 0 !important;
	}
	#specials-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** BP	**/

	select[name=specials-bp-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#specials-bp-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#specials-bp-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#specials-bp-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#specials-bp-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#specials-bp-table_wrapper{
		margin: 0 !important;
	}
	#specials-bp-table{
		margin-top: 0 !important;
	}
	#specials-bp-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	
	select[name=specials-transaction-details-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#specials-transaction-details-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#specials-transaction-details-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#specials-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#specials-transaction-details-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#specials-transaction-details-table_wrapper{
		margin: 0 !important;
	}
	#specials-transaction-details-table{
		margin-top: 0 !important;
	}
	#specials-transaction-details-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=specials-bp-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#specials-bp-journal-entries-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#specials-bp-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#specials-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#specials-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#specials-bp-journal-entries-table_wrapper{
		margin: 0 !important;
	}
	#specials-bp-journal-entries-table{
		margin-top: 0 !important;
	}
	#specials-bp-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** sales **/	
	select[name=sales-journal-summary-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#sales-journal-summary-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#sales-journal-summary-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#sales-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#sales-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#sales-journal-summary-table_wrapper{
		margin: 0 !important;
	}
	#sales-journal-summary-table{
		margin-top: 0 !important;
	}
	#sales-journal-summary-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=sales-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	
	#sales-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#sales-journal-entries-table_wrapper > .row .col-sm-6 div:first-child{
		margin: 0 !important;
	}
	#sales-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** BP	**/
	select[name=sales-bp-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#sales-bp-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#sales-bp-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#sales-bp-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#sales-bp-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#sales-bp-table_wrapper{
		margin: 0 !important;
	}
	#sales-bp-table{
		margin-top: 0 !important;
	}
	#sales-bp-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	
	select[name=sales-transaction-details-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#sales-transaction-details-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#sales-transaction-details-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#sales-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#sales-transaction-details-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#sales-transaction-details-table_wrapper{
		margin: 0 !important;
	}
	#sales-transaction-details-table{
		margin-top: 0 !important;
	}
	#sales-transaction-details-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=sales-bp-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#sales-bp-journal-entries-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#sales-bp-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#sales-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#sales-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#sales-bp-journal-entries-table_wrapper{
		margin: 0 !important;
	}
	#sales-bp-journal-entries-table{
		margin-top: 0 !important;
	}
	#sales-bp-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** receipts **/	
	select[name=receipts-journal-summary-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#receipts-journal-summary-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#receipts-journal-summary-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#receipts-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#receipts-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#receipts-journal-summary-table_wrapper #summary-table_filter{
		margin: 0 !important;
	}
	#receipts-journal-summary-table{
		margin-top: 0 !important;
	}
	#receipts-journal-summary-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=receipts-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	
	#receipts-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#receipts-journal-entries-table_wrapper > .row .col-sm-6 div:first-child{
		margin: 0 !important;
	}
	#receipts-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}

/** BP	**/
	select[name=receipts-bp-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#receipts-bp-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#receipts-bp-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#receipts-bp-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#receipts-bp-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#receipts-bp-table_wrapper{
		margin: 0 !important;
	}
	#receipts-bp-table{
		margin-top: 0 !important;
	}
	#receipts-bp-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	
	select[name=receipts-transaction-details-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#receipts-transaction-details-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#receipts-transaction-details-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#receipts-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#receipts-transaction-details-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#receipts-transaction-details-table_wrapper{
		margin: 0 !important;
	}
	#receipts-transaction-details-table{
		margin-top: 0 !important;
	}
	#receipts-transaction-details-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=receipts-bp-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#receipts-bp-journal-entries-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#receipts-bp-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#receipts-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#receipts-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#receipts-bp-journal-entries-table_wrapper{
		margin: 0 !important;
	}
	#receipts-bp-journal-entries-table{
		margin-top: 0 !important;
	}
	#receipts-bp-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** collections **/	
	select[name=collections-journal-summary-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#collections-journal-summary-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#collections-journal-summary-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#collections-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#collections-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#collections-journal-summary-table_wrapper #summary-table_filter{
		margin: 0 !important;
	}
	#collections-journal-summary-table{
		margin-top: 0 !important;
	}
	#collections-journal-summary-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=collections-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	
	#collections-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#collections-journal-entries-table_wrapper > .row .col-sm-6 div:first-child{
		margin: 0 !important;
	}
	#collections-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** BP	**/	
	select[name=collections-bp-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#collections-bp-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#collections-bp-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#collections-bp-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#collections-bp-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#collections-bp-table_wrapper{
		margin: 0 !important;
	}
	#collections-bp-table{
		margin-top: 0 !important;
	}
	#collections-bp-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	
	select[name=collections-transaction-details-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#collections-transaction-details-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#collections-transaction-details-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#collections-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#collections-transaction-details-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#collections-transaction-details-table_wrapper{
		margin: 0 !important;
	}
	#collections-transaction-details-table{
		margin-top: 0 !important;
	}
	#collections-transaction-details-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=collections-bp-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#collections-bp-journal-entries-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#collections-bp-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#collections-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#collections-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#collections-bp-journal-entries-table_wrapper{
		margin: 0 !important;
	}
	#collections-bp-journal-entries-table{
		margin-top: 0 !important;
	}
	#collections-bp-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}	

/** purchases **/	
	select[name=purchases-journal-summary-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#purchases-journal-summary-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#purchases-journal-summary-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#purchases-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#purchases-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#purchases-journal-summary-table_wrapper #summary-table_filter{
		margin: 0 !important;
	}
	#purchases-journal-summary-table{
		margin-top: 0 !important;
	}
	#purchases-journal-summary-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=purchases-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	
	#purchases-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#purchases-journal-entries-table_wrapper > .row .col-sm-6 div:first-child{
		margin: 0 !important;
	}
	#purchases-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** BP	**/	
	select[name=purchases-bp-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#purchases-bp-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#purchases-bp-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#purchases-bp-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#purchases-bp-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#purchases-bp-table_wrapper{
		margin: 0 !important;
	}
	#purchases-bp-table{
		margin-top: 0 !important;
	}
	#purchases-bp-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	
	select[name=purchases-transaction-details-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#purchases-transaction-details-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#purchases-transaction-details-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#purchases-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#purchases-transaction-details-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#purchases-transaction-details-table_wrapper{
		margin: 0 !important;
	}
	#purchases-transaction-details-table{
		margin-top: 0 !important;
	}
	#purchases-transaction-details-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=purchases-bp-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#purchases-bp-journal-entries-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#purchases-bp-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#purchases-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#purchases-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#purchases-bp-journal-entries-table_wrapper{
		margin: 0 !important;
	}
	#purchases-bp-journal-entries-table{
		margin-top: 0 !important;
	}
	#purchases-bp-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}		
	
/** disbursements **/	
	select[name=disbursements-journal-summary-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#disbursements-journal-summary-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#disbursements-journal-summary-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#disbursements-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#disbursements-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#disbursements-journal-summary-table_wrapper #summary-table_filter{
		margin: 0 !important;
	}
	#disbursements-journal-summary-table{
		margin-top: 0 !important;
	}
	#disbursements-journal-summary-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=disbursements-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	
	#disbursements-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#disbursements-journal-entries-table_wrapper > .row .col-sm-6 div:first-child{
		margin: 0 !important;
	}
	#disbursements-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** BP	**/	
	select[name=disbursements-bp-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#disbursements-bp-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#disbursements-bp-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#disbursements-bp-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#disbursements-bp-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#disbursements-bp-table_wrapper{
		margin: 0 !important;
	}
	#disbursements-bp-table{
		margin-top: 0 !important;
	}
	#disbursements-bp-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	
	select[name=disbursements-transaction-details-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#disbursements-transaction-details-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#disbursements-transaction-details-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#disbursements-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#disbursements-transaction-details-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#disbursements-transaction-details-table_wrapper{
		margin: 0 !important;
	}
	#disbursements-transaction-details-table{
		margin-top: 0 !important;
	}
	#disbursements-transaction-details-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=disbursements-bp-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#disbursements-bp-journal-entries-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#disbursements-bp-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#disbursements-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#disbursements-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#disbursements-bp-journal-entries-table_wrapper{
		margin: 0 !important;
	}
	#disbursements-bp-journal-entries-table{
		margin-top: 0 !important;
	}
	#disbursements-bp-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}			
	
/** adjustments **/	
	select[name=adjustments-journal-summary-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#adjustments-journal-summary-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#adjustments-journal-summary-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#adjustments-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#adjustments-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#adjustments-journal-summary-table_wrapper #summary-table_filter{
		margin: 0 !important;
	}
	#adjustments-journal-summary-table{
		margin-top: 0 !important;
	}
	#adjustments-journal-summary-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=adjustments-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	
	#adjustments-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#adjustments-journal-entries-table_wrapper > .row .col-sm-6 div:first-child{
		margin: 0 !important;
	}
	#adjustments-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** BP	**/	
	select[name=adjustments-bp-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#adjustments-bp-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#adjustments-bp-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#adjustments-bp-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#adjustments-bp-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#adjustments-bp-table_wrapper{
		margin: 0 !important;
	}
	#adjustments-bp-table{
		margin-top: 0 !important;
	}
	#adjustments-bp-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	
	select[name=adjustments-transaction-details-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#adjustments-transaction-details-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#adjustments-transaction-details-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#adjustments-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#adjustments-transaction-details-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#adjustments-transaction-details-table_wrapper{
		margin: 0 !important;
	}
	#adjustments-transaction-details-table{
		margin-top: 0 !important;
	}
	#adjustments-transaction-details-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=adjustments-bp-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#adjustments-bp-journal-entries-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#adjustments-bp-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#adjustments-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#adjustments-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
	}
	#adjustments-bp-journal-entries-table_wrapper{
		margin: 0 !important;
	}
	#adjustments-bp-journal-entries-table{
		margin-top: 0 !important;
	}
	#adjustments-bp-journal-entries-table_paginate li{
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

	.nav-tabs > li > a:hover{
		background-color: #ECECEC !important;
		color: #363c46 !important;
		/*font-weight: bold;*/
    	border-bottom: 2px solid #A7A7A7 !important;
	} 
	.nav-tabs > li > a:focus{
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
	#sales-journal-summary-table_wrapper table tbody tr,
	#sales-bp-table_wrapper table tbody tr,
	#sales-transaction-details-table_wrapper table tbody tr,
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
	#sales-journal-summary-table_wrapper table tbody tr:hover,
	#sales-bp-table_wrapper table tbody tr:hover,
	#sales-transaction-details-table_wrapper table tbody tr:hover,
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
</style>
<style>
	body{
	    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif
	}
	.ui-select-choices-group{
		max-height: 165px !important;
	}
</style>
<style>
	#transaction-document .form-group{
		margin-top: 8px !important;
	}
	#transaction-document .form-group .form-control{
		margin-bottom: 0px !important;
	}
	#card-2-form .col-md-12 div:first-child label{
		font-size: 13px !important;
	}
	div[role='tabpanel'] > .card{
		margin-top: 21px;
	}
	div[role='tabpanel'] > ul[role='tablist']{
		position: fixed; 
		z-index: 999; 
		top: 61px; 
		width: 96%;
	}
</style>
<style>
	.form-group.is-focused .form-control[readonly]{
		background-image: none !important;
	}
	input.invalid-input{
		border: 1px solid red !important;
	}
	input.has-focus{
		border: 1px solid #E8E8E8 !important;
	}
	label.error-msg{
		color: red;
		font-size: 11px;
		font-style: italic;
	}
</style>
<style>
	#new-transactions input,
	#new-transactions .form-control
	{
		height: 30px !important;
		font-size: 12px !important;
	}
</style>
<style>
	div.ui-select-choices.ui-select-dropdown.selectize-dropdown
	{
		top: 27px;
		background-color: #F9F9F9;
		border-top: 0;
		padding-right: 0 !important;
		padding-left: 0 !important;
	}
	div.ui-select-choices-row-inner:hover
	{
		background: #FFF !important;
		font-weight: bold;
		text-overflow: ellipsis;
		color: #000;
	}
	div.ui-select-no-choice.selectize-dropdown
	{
		top: 27px !important;
		z-index: 999999999 !important;
		border-top: 0 !important;
		padding-left: 0 !important;
		padding-right: 0 !important;
		background-color: #f9f9f9 !important;
		color: red !important;
		font-weight: bold;
		text-align: center;
	}
	div.ui-select-no-choice.selectize-dropdown .selectize-dropdown-content:hover
	{
		background-color: #FFF;
		font-weight: bold;
	}
	.modal.in
	{
		z-index: 9999999999 !important;
	}
	.modal .modal-content
	{
		margin-top: 0;
	}
	.modal .modal-content .modal-body label
	{
		font-weight: bold !important;
		font-size: 12px !important;
	}
	.modal .modal-content .modal-body input
	{
		border:	1px solid #ccc !important;
		margin: 0 !important;
		background-image: none !important;
		font-size: 12px !important;
	}
	.modal .modal-content .modal-body .form-control[readonly]
	{
		background-color: #EEE;
	}
	.modal .modal-content .modal-body .form-group
	{
		margin: 0 !important;
		padding: 0 !important;
	}
	.modal .modal-content .modal-body .selectize-input.has-items
	{
		border: 1px solid #CCC !important;
	}
	.modal .modal-content .modal-body input.v-invalid
	{
		border: 1px solid red !important;
	}
	.modal .modal-content .modal-body .selectize-input.v-invalid input
	{
		box-shadow: none !important;
		border: none !important;
	}
	div.modal div.selectize-input.items.not-full.v-invalid
	{
		box-shadow: none !important;
		border: none !important;
	}
</style>