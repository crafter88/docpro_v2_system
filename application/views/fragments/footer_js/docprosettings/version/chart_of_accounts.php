<script type="text/javascript" src="<?php echo base_url(); ?>libs/selectize_2/js/standalone/selectize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/docpro_setup/coa_setup_seq.js"></script>
<script>
	$(document).ready(function(){
		var acc_elements = $('#account-elements').DataTable({
			ajax: window.location.origin+'/docpro_settings/chart_of_accounts/acc_elements_get',
			columns: [
                        {
                            mData: null, bSortable: false, bSearchable: false,
                            mRender: function(data, type, full){
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised view' data-hint='View'><i class='fa fa-eye'></i></button>";
                            }
                        },
						{'data': 'lvl_1_code'},
						{'data': 'lvl_1_name'},
					],
			columnDefs: [{targets: 0, width: '40px'}, {targets: 1, width: '100px'}],
			order: [['1', 'asc']],
			initComplete: function(){
				initRipple();
			}
		});
		var acc_classification = $('#account-classification').DataTable({
			ajax: window.location.origin+'/docpro_settings/chart_of_accounts/acc_classification_get',
			columns: [
                        {
                            mData: null, bSortable: false, bSearchable: false,
                            mRender: function(data, type, full){
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised view' data-hint='View'><i class='fa fa-eye'></i></button>";
                            }
                        },
						{'data': 'lvl_2_code'},
						{'data': 'lvl_2_name'},
					],
			columnDefs: [{targets: 0, width: '40px'}, {targets: 1, width: '100px'}],
			order: [['1', 'asc']],
			initComplete: function(){
				initRipple();
			}
		});
		var line_items = $('#line-items').DataTable({
			ajax: window.location.origin+'/docpro_settings/chart_of_accounts/line_items_get',
			columns: [
                        {
                            mData: null, bSortable: false, bSearchable: false,
                            mRender: function(data, type, full){
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised view' data-hint='View'><i class='fa fa-eye'></i></button>";
                            }
                        },
						{'data': 'lvl_3_code'},
						{'data': 'lvl_3_name'},
					],
			columnDefs: [{targets: 0, width: '40px'}, {targets: 1, width: '100px'}],
			order: [['1', 'asc']],
			initComplete: function(){
				initRipple();
			}
		});
		var account_subclassification = $('#account-subclassification').DataTable({
			ajax: window.location.origin+'/docpro_settings/chart_of_accounts/acc_sub_get',
			columns: [
                        {
                            mData: null, bSortable: false, bSearchable: false,
                            mRender: function(data, type, full){
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised view' data-hint='View'><i class='fa fa-eye'></i></button>";
                            }
                        },
						{'data': 'lvl_4_code'},
						{'data': 'lvl_4_name'},
					],
			columnDefs: [{targets: 0, width: '40px'}, {targets: 1, width: '100px'}],
			order: [['1', 'asc']],
			initComplete: function(){
				initRipple();
			}
		});
		var bir_classification = $('#bir-classification').DataTable({
			ajax: window.location.origin+'/docpro_settings/chart_of_accounts/bir_get',
			columns: [
                        {
                            mData: null, bSortable: false,
                            mRender: function(data, type, full){
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised view' data-hint='View'><i class='fa fa-eye'></i></button>";
                            }
                        },
						{'data': 'bir_code'},
						{'data': 'bir_classification'},
					],
			columnDefs: [{targets: 0, width: '40px'},{targets: 1, width: '100px'}],
			order: [['1', 'asc']],
			initComplete: function(){
				initRipple();
			}
		});
		var coa = $('#coa').DataTable({
			ajax: window.location.origin+'/docpro_settings/chart_of_accounts/coa_get',
			columns: [
                        {
                            mData: null, bSortable: false,
                            mRender: function(data, type, full){
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised view' data-hint='View'><i class='fa fa-eye'></i></button>";
                            }
                        },
						{'data': 'coa_code'},
						{'data': 'coa_name'},
						{'data': 'bir_classification'},
					],
			columnDefs: [{targets: 0, width: '40px'}, {targets: 1, width: '100px'}, {targets: 3, width: '35%'}],
			order: [['1', 'asc']],
			initComplete: function(){
				initRipple();
			}
		});

// ACCOUNT ELEMENTS POPOVER
		$('#add-acc-elements').click(function(){
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('acc-elements-add');
					return 'right';
				},
				content: function(){
					return $('#add-acc-elements-popover').html();
				},
				callback: function(){},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
		});
		$('#account-elements').on('click', '.view', function(){
			var data = acc_elements.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('acc-elements-view');
					return 'right';
				},
				content: function(){
					return $('#view-acc-elements-popover').html();
				},
				callback: function(){
					$('#acc-elements-view-code').val(data.lvl_1_code);
					$('#acc-elements-view-name').val(data.lvl_1_name);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
		});
		$('#account-elements').on('click', '.edit', function(){
			var data = acc_elements.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('acc-elements-edit');
					return 'right';
				},
				content: function(){
					return $('#edit-acc-elements-popover').html();
				},
				callback: function(){
					$('#acc-elements-edit-code').val(data.lvl_1_code);
					$('#acc-elements-edit-name').val(data.lvl_1_name);
					$('#acc-elements-edit-id').val(data.lvl_1_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
		});
		$('#account-elements').on('click', '.update', function(){
			var data = acc_elements.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('acc-elements-update');
					return 'right';
				},
				content: function(){
					return $('#update-acc-elements-popover').html();
				},
				callback: function(){
					$('#acc-elements-update-code').val(data.lvl_1_code);
					$('#acc-elements-update-name').val(data.lvl_1_name);
					$('#acc-elements-update-id').val(data.lvl_1_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
		});
		$('#account-elements').on('click', '.delete', function(){
			var data = acc_elements.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('acc-elements-delete');
					return 'right';
				},
				content: function(){
					return $('#delete-acc-elements-popover').html();
				},
				callback: function(){
					$('#acc-elements-delete-code').val(data.lvl_1_code);
					$('#acc-elements-delete-name').val(data.lvl_1_name);
					$('#acc-elements-delete-id').val(data.lvl_1_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
		});
// ACCOUNT CLASSIFICATION POPOVER
		$('#add-acc-classification').click(function(){
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('acc-classification-add');
					return 'right';
				},
				content: function(){
					return $('#add-acc-classification-popover').html();
				},
				callback: function(){},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();

			$('#acc-classification-add-elements').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});
		});
		$('#account-classification').on('click', '.view', function(){
			var data = acc_classification.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('acc-classification-view');
					return 'right';
				},
				content: function(){
					return $('#view-acc-classification-popover').html();
				},
				callback: function(){
					$('#acc-classification-view-code').val(data.lvl_2_code);
					$('#acc-classification-view-name').val(data.lvl_2_name);
					$('#acc-classification-view-elements').val(data.lvl_1_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
			$('#acc-classification-view-elements').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});
		});
		$('#account-classification').on('click', '.edit', function(){
			var data = acc_classification.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('acc-classification-edit');
					return 'right';
				},
				content: function(){
					return $('#edit-acc-classification-popover').html();
				},
				callback: function(){
					$('#acc-classification-edit-code').val(data.lvl_2_code);
					$('#acc-classification-edit-name').val(data.lvl_2_name);
					$('#acc-classification-edit-id').val(data.lvl_2_id);
					$('#acc-classification-edit-join-id').val(data.coalvl12_id);
					$('#acc-classification-edit-elements').val(data.lvl_1_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
			$('#acc-classification-edit-elements').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});
		});
		$('#account-classification').on('click', '.update', function(){
			var data = acc_classification.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('acc-classification-update');
					return 'right';
				},
				content: function(){
					return $('#update-acc-classification-popover').html();
				},
				callback: function(){
					console.log(data);
					$('#acc-classification-update-code').val(data.lvl_2_code);
					$('#acc-classification-update-name').val(data.lvl_2_name);
					$('#acc-classification-update-id').val(data.lvl_2_id);
					$('#acc-classification-update-join-id').val(data.coalvl12_id);
					$('#acc-classification-update-elements').val(data.lvl_1_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
			$('#acc-classification-update-elements').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});
		});
		$('#account-classification').on('click', '.delete', function(){
			var data = acc_classification.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('acc-classification-delete');
					return 'right';
				},
				content: function(){
					return $('#delete-acc-classification-popover').html();
				},
				callback: function(){
					console.log(data);
					$('#acc-classification-delete-code').val(data.lvl_2_code);
					$('#acc-classification-delete-name').val(data.lvl_2_name);
					$('#acc-classification-delete-id').val(data.lvl_2_id);
					$('#acc-classification-delete-join-id').val(data.coalvl12_id);
					$('#acc-classification-delete-elements').val(data.lvl_1_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
			$('#acc-classification-delete-elements').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});
		});
// LINE ITEMS POPOVER
		$('#add-line-items').click(function(){
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('line-items-add');
					return 'right';
				},
				content: function(){
					return $('#add-line-items-popover').html();
				},
				callback: function(){},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
			$('#line-items-add-classfication').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});
		});
		$('#line-items').on('click', '.view', function(){
			var data = line_items.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('line-items-view');
					return 'right';
				},
				content: function(){
					return $('#view-line-items-popover').html();
				},
				callback: function(){
					$('#line-items-view-code').val(data.lvl_3_code);
					$('#line-items-view-name').val(data.lvl_3_name);
					$('#line-items-view-classfication').val(data.lvl_2_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
			$('#line-items-view-classfication').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});
		});
		$('#line-items').on('click', '.edit', function(){
			var data = line_items.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('line-items-edit');
					return 'right';
				},
				content: function(){
					return $('#edit-line-items-popover').html();
				},
				callback: function(){
					$('#line-items-edit-code').val(data.lvl_3_code);
					$('#line-items-edit-name').val(data.lvl_3_name);
					$('#line-items-edit-id').val(data.lvl_3_id);
					$('#line-items-edit-join-id').val(data.coalvl23_id);
					$('#line-items-edit-classfication').val(data.lvl_2_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
			$('#line-items-edit-classfication').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});
		});
		$('#line-items').on('click', '.update', function(){
			var data = line_items.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('line-items-update');
					return 'right';
				},
				content: function(){
					return $('#update-line-items-popover').html();
				},
				callback: function(){
					$('#line-items-update-code').val(data.lvl_3_code);
					$('#line-items-update-name').val(data.lvl_3_name);
					$('#line-items-update-id').val(data.lvl_3_id);
					$('#line-items-update-join-id').val(data.coalvl23_id);
					$('#line-items-update-classfication').val(data.lvl_2_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
			$('#line-items-update-classfication').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});
		});
		$('#line-items').on('click', '.delete', function(){
			var data = line_items.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('line-items-delete');
					return 'right';
				},
				content: function(){
					return $('#delete-line-items-popover').html();
				},
				callback: function(){
					$('#line-items-delete-code').val(data.lvl_3_code);
					$('#line-items-delete-name').val(data.lvl_3_name);
					$('#line-items-delete-id').val(data.lvl_3_id);
					$('#line-items-delete-join-id').val(data.coalvl23_id);
					$('#line-items-delete-classfication').val(data.lvl_2_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
			$('#line-items-delete-classfication').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});
		});
// Account Subclassification POPOVER
		$('#add-acc-sub').click(function(){
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('acc-sub-add');
					return 'right';
				},
				content: function(){
					return $('#add-acc-sub-popover').html();
				},
				callback: function(){},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
			$('#acc-sub-add-line-item').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});
		});
		$('#account-subclassification').on('click', '.view', function(){
			var data = account_subclassification.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('acc-sub-view');
					return 'right';
				},
				content: function(){
					return $('#view-acc-sub-popover').html();
				},
				callback: function(){
					$('#acc-sub-view-code').val(data.lvl_4_code);
					$('#acc-sub-view-name').val(data.lvl_4_name);
					$('#acc-sub-view-line-item').val(data.lvl_3_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
			$('#acc-sub-view-line-item').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});
		});
		$('#account-subclassification').on('click', '.edit', function(){
			var data = account_subclassification.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('acc-sub-edit');
					return 'right';
				},
				content: function(){
					return $('#edit-acc-sub-popover').html();
				},
				callback: function(){
					$('#acc-sub-edit-code').val(data.lvl_4_code);
					$('#acc-sub-edit-name').val(data.lvl_4_name);
					$('#acc-sub-edit-id').val(data.lvl_4_id);
					$('#acc-sub-edit-join-id').val(data.coalvl34_id);
					$('#acc-sub-edit-line-item').val(data.lvl_3_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
			$('#acc-sub-edit-line-item').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});
		});
		$('#account-subclassification').on('click', '.update', function(){
			var data = account_subclassification.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('acc-sub-update');
					return 'right';
				},
				content: function(){
					return $('#update-acc-sub-popover').html();
				},
				callback: function(){
					$('#acc-sub-update-code').val(data.lvl_4_code);
					$('#acc-sub-update-name').val(data.lvl_4_name);
					$('#acc-sub-update-id').val(data.lvl_4_id);
					$('#acc-sub-update-join-id').val(data.coalvl34_id);
					$('#acc-sub-update-line-item').val(data.lvl_3_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
			$('#acc-sub-update-line-item').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});
		});
		$('#account-subclassification').on('click', '.delete', function(){
			var data = account_subclassification.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('acc-sub-delete');
					return 'right';
				},
				content: function(){
					return $('#delete-acc-sub-popover').html();
				},
				callback: function(){
					$('#acc-sub-delete-code').val(data.lvl_4_code);
					$('#acc-sub-delete-name').val(data.lvl_4_name);
					$('#acc-sub-delete-id').val(data.lvl_4_id);
					$('#acc-sub-delete-join-id').val(data.coalvl34_id);
					$('#acc-sub-delete-line-item').val(data.lvl_3_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
			$('#acc-sub-delete-line-item').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});
		});
// BIR CLASSIFICATION POPOVER
		$('#add-bir').click(function(){
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('bir-add');
					return 'right';
				},
				content: function(){
					return $('#add-bir-popover').html();
					return 'right';
				},
				callback: function(){},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
		});
		$('#bir-classification').on('click', '.view', function(){
			var data = bir_classification.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('bir-view');
					return 'right';
				},
				content: function(){
					return $('#view-bir-popover').html();
				},
				callback: function(){
					$('#bir-view-code').val(data.bir_code);
					$('#bir-view-name').val(data.bir_classification);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
		});
		$('#bir-classification').on('click', '.edit', function(){
			var data = bir_classification.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('bir-edit');
					return 'right';
				},
				content: function(){
					return $('#edit-bir-popover').html();
				},
				callback: function(){
					$('#bir-edit-code').val(data.bir_code);
					$('#bir-edit-name').val(data.bir_classification);
					$('#bir-edit-id').val(data.bir_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
		});
		$('#bir-classification').on('click', '.update', function(){
			var data = bir_classification.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('bir-update');
					return 'right';
				},
				content: function(){
					return $('#update-bir-popover').html();
				},
				callback: function(){
					$('#bir-update-code').val(data.bir_code);
					$('#bir-update-name').val(data.bir_classification);
					$('#bir-update-id').val(data.bir_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
		});
		$('#bir-classification').on('click', '.delete', function(){
			var data = bir_classification.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('bir-delete');
					return 'right';
				},
				content: function(){
					return $('#delete-bir-popover').html();
				},
				callback: function(){
					$('#bir-delete-code').val(data.bir_code);
					$('#bir-delete-name').val(data.bir_classification);
					$('#bir-delete-id').val(data.bir_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
		});
// CHART OF ACCOUNTS
		$('#add-coa').click(function(){
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('coa-add');
					return 'right';
				},
				content: function(){
					return $('#add-coa-popover').html();
					return 'right';
				},
				callback: function(){},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();

			$('#coa-add-bir').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});

			$('#coa-add-acc-sub').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});

			$('#coa-add-acc-sub').change(function(){
				$('#coa-add-code').val($('#coa_add_acc_sub_'+$(this).val()).attr('final-code'));
				$('#coa-add-lvl-1').val($('#coa_add_acc_sub_'+$(this).val()).attr('lvl1'));
				$('#coa-add-lvl-2').val($('#coa_add_acc_sub_'+$(this).val()).attr('lvl2'));
				$('#coa-add-lvl-3').val($('#coa_add_acc_sub_'+$(this).val()).attr('lvl3'));
				$('#coa-add-lvl-4').val($('#coa_add_acc_sub_'+$(this).val()).attr('lvl4'));
			});
		});
		$('#coa').on('click', '.view', function(){
			var data = coa.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('coa-view');
					return 'right';
				},
				content: function(){
					return $('#view-coa-popover').html();
				},
				callback: function(){
					$('#coa-view-name').val(data.coa_name);
					$('#coa-view-acc-sub').val(data.lvl_4_id);
					$('#coa-view-code').val(data.lvl_1_code+''+data.lvl_2_code+''+data.lvl_3_code+''+data.lvl_4_code);
					$('#coa-view-bir').val(data.bir_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();
		});
		$('#coa').on('click', '.edit', function(){
			var data = coa.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('coa-edit');
					return 'right';
				},
				content: function(){
					return $('#edit-coa-popover').html();
				},
				callback: function(){
					$('#coa-edit-name').val(data.coa_name);
					$('#coa-edit-acc-sub').val(data.lvl_4_id);
					$('#coa-edit-code').val(data.lvl_1_code+''+data.lvl_2_code+''+data.lvl_3_code+''+data.lvl_4_code);
					$('#coa-edit-bir').val(data.bir_id);
					$('#coa-edit-id').val(data.coa_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();

			$('#coa-edit-bir').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});

			$('#coa-edit-acc-sub').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});

			$('#coa-edit-acc-sub').change(function(){
				$('#coa-edit-code').val($('#coa_edit_acc_sub_'+$(this).val()).attr('final-code'));
				$('#coa-edit-lvl-1').val($('#coa_edit_acc_sub_'+$(this).val()).attr('lvl1'));
				$('#coa-edit-lvl-2').val($('#coa_edit_acc_sub_'+$(this).val()).attr('lvl2'));
				$('#coa-edit-lvl-3').val($('#coa_edit_acc_sub_'+$(this).val()).attr('lvl3'));
				$('#coa-edit-lvl-4').val($('#coa_edit_acc_sub_'+$(this).val()).attr('lvl4'));
			});
		});
		$('#coa').on('click', '.update', function(){
			var data = coa.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('coa-update');
					return 'right';
				},
				content: function(){
					return $('#update-coa-popover').html();
				},
				callback: function(){
					$('#coa-update-name').val(data.coa_name);
					$('#coa-update-acc-sub').val(data.lvl_4_id);
					$('#coa-update-code').val(data.lvl_1_code+''+data.lvl_2_code+''+data.lvl_3_code+''+data.lvl_4_code);
					$('#coa-update-bir').val(data.bir_id);
					$('#coa-update-id').val(data.coa_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();

			$('#coa-update-bir').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});

			$('#coa-update-acc-sub').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});

			$('#coa-update-acc-sub').change(function(){
				$('#coa-update-code').val($('#coa_update_acc_sub_'+$(this).val()).attr('final-code'));
				$('#coa-update-lvl-1').val($('#coa_update_acc_sub_'+$(this).val()).attr('lvl1'));
				$('#coa-update-lvl-2').val($('#coa_update_acc_sub_'+$(this).val()).attr('lvl2'));
				$('#coa-update-lvl-3').val($('#coa_update_acc_sub_'+$(this).val()).attr('lvl3'));
				$('#coa-update-lvl-4').val($('#coa_update_acc_sub_'+$(this).val()).attr('lvl4'));
			});
		});
		$('#coa').on('click', '.delete', function(){
			var data = coa.row(this.closest('tr')).data();
			$(this).popover({
				animation: true,
				html: true,
				placement: function(context, src){
					$(context).addClass('coa-delete');
					return 'right';
				},
				content: function(){
					return $('#delete-coa-popover').html();
				},
				callback: function(){
					$('#coa-delete-name').val(data.coa_name);
					$('#coa-delete-acc-sub').val(data.lvl_4_id);
					$('#coa-delete-code').val(data.lvl_1_code+''+data.lvl_2_code+''+data.lvl_3_code+''+data.lvl_4_code);
					$('#coa-delete-bir').val(data.bir_id);
					$('#coa-delete-id').val(data.coa_id);
				},
				container: '.navbar-body'
			});
			$(this).popover('toggle');
			initRipple();
			initValidation();

			$('#coa-delete-bir').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});

			$('#coa-delete-acc-sub').selectize({
				create: true,
				sortField: {
					field: 'text',
					direction: 'asc'
				},
				dropdownParent: 'body'
			});
		});
// CLOSE BTN
		$('div').on('click', '.close-popover', function(){
	        $('.popover').popover('hide');
	    });

	});
</script>