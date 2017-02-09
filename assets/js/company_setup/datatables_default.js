// SETUP 1
var profile_table = $('#profile-table').DataTable({
	ajax: window_location+'/setup/setup1/get_profile',
	columns: [
				{
					bSortable: false, bSearchable: false,
					mRender: function(row, setting, full){
						return "<button class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit'><i class='fa fa-pencil'></i></button>";
					}
				},
				{'data': 'ch_name'},
				{'data': 'ch_cb_trade_name'},
				{
					mRender: function(row, setting, full){
						if(full.ch_cb_address && full.ch_cb_address.length > 0){
							return full.ch_cb_address.split(';').join(' ');
						}
						return '';
					}
				},
				{'data': 'ch_cb_tax_type'},
				{'data': 'ch_cb_tin'},
				{'data': 'ch_cb_cno'},
				{'data': 'ch_cb_email'}
			],
	dom: 't',
	order: [['1', 'asc']],
	columnDefs: [{targets: [0,4], width: '40px'}, {targets: 3, width: '273px'}, {targets: [6,7], width: '150px'}],
	scrollX: true,
	bSort: false,
	initComplete: function(){
		init_tooltip();
		initRipple();
	}

});

var branch_table = $('#branch-table').DataTable({
	ajax: window_location+'/setup/setup1/get_branches',
	columns: [
				{
					bSortable: false, bSearchable: false,
					mRender: function(row, setting, full){
						return "<button type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit'><i class='fa fa-pencil'></i></button>"+
							"<button type='button' class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete'><i class='fa fa-times'></i></button>";
					}
				},
				{'data': 'ch_name'},
				{
					mRender: function(row, setting, full){
						if(full.ch_cb_address && full.ch_cb_address.length > 0){
							return full.ch_cb_address.split(';').join(' ');
						}
						return '';
					}
				},
				{'data': 'ch_cb_tax_type'},
				{'data': 'ch_cb_tin'},
				{'data': 'ch_cb_cno'},
				{'data': 'ch_cb_email'},
			],
	dom: 'frtip',
	order: [['1', 'asc']],
	columnDefs: [{targets: [0,3], width: '40px'}, {targets: 2, width: '273px'}, {targets: [5,6], width: '150px'}],
	scrollX: true,
	bSort: false,
	initComplete: function(){
		init_tooltip();
		initRipple();
	}
});
$('#s_branch').on('keyup', function(){
	branch_table.search(this.value).draw();
});

// SETUP 2
var users_table = $('#users-table').DataTable({
	ajax: window_location+'/setup/setup1/get_users',
	columns: [
				{
					bSortable: false, bSearchable: false,
					mRender: function(row, setting, full){
						return "<button type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit'><i class='fa fa-pencil'></i></button>"+
							"<button type='button' class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete'><i class='fa fa-times'></i></button>";
					}
				},
				{'data': 'u_seq'},
				{
					mRender: function(row, setting, full){
						return full.p_fname+' '+full.p_mname+' '+full.p_lname;
					}
				},
				{'data': 'p_address'},
				{'data': 'p_cno'},
				{'data': 'p_email'},
				{'data': 'b_name'},
				{'data': 'u_name'},
				{'data': 'u_type'},
				{
					mRender: function(row, setting, full){
						if(full.u_validity_date && full.u_validity_date !== '0000-00-00 00:00:00'){
							var date = Date.parse(full.u_validity_date);
							return date.toString('MMM d, yyyy');
						}
						return '';
					}
				},
			],
	dom: 'frtip',
	order: [['1', 'asc']],
	columnDefs: [{targets: 0, width: '50px'}, {targets: 1, width: '20px'}],
	scrollX: true,
	bSort: false,
	initComplete: function(){
		init_tooltip();
		initRipple();
	}
});
$('#s_user').on('keyup', function(){
	users_table.search(this.value).draw();
});

// COA
var lvl_1_id = 0;
var lvl_2_id = 0;
var lvl_3_id = 0;
var lvl_4_id = 0;
var lvl_1_status = 0;
var lvl_2_status = 0;
var lvl_3_status = 0;
var lvl_4_status = 0;
var lvl_1_name = '...';
var lvl_2_name = '...';
var lvl_3_name = '...';
var lvl_4_name = '...';

var lvl1 = $('#coa-lvl1').DataTable({
	ajax: window_location+'/setup/setup3/get_coa_lvl1',
	columns: [
				{
					mRender: function(row, setting, full){
						return "<button type='button' class='btn btn-success btn-xs btn-raised edit'><i class='fa fa-pencil'></i></button>";
							// "<button type='button' class='btn btn-danger btn-xs btn-raised delete'><i class='fa fa-times'></i></button>";
						
					}
				},
				{
					mRender: function(row, setting, full){
						if(full.status === '1'){
							return full.lvl_1_name + "<button type='button' class='btn btn-raised btn-default btn-xs next-level show-lvl-2' title='Show Classification'><i class='fa fa-angle-right'></i></button>";
						}
						return full.lvl_1_name + "<button type='button' class='btn btn-raised btn-default btn-xs next-level' title='Show Classification'><i class='fa fa-angle-right'></i></button>";
					}
				},
				{
					mRender: function(row, setting, full){
						if(full.status === '1'){
							return "<input class='disable_lvl_1' type='checkbox' checked title='Enable or Disable'>";
						}
						return "<input class='disable_lvl_1' type='checkbox' title='Enable or Disable'>";
					}
				},
			],
	columnDefs: [{targets: 0, width: '40px'}, {targets: 2, width: '20px'}],
	scrollX: true,
	sDom: '<"top"f>rt<"bottom"p><"clear">',
	bSort: false
});
$('#s_coa_1').on('keyup', function(){
	lvl1.search(this.value).draw();
});
var lvl2 = $('#coa-lvl2').DataTable({
	ajax: window_location+'/setup/setup3/get_coa_lvl2/'+lvl_1_id,
	columns: [
				{
					mRender: function(row, setting, full){
						if(full.lvl_2_code === '0'){
							return "<span type='button' class='btn btn-success btn-xs btn-raised' disabled><i class='fa fa-pencil'></i></span>";
							// "<span type='button' class='btn btn-danger btn-xs btn-raised' disabled><i class='fa fa-times'></i></span>";
						}
						return "<button type='button' class='btn btn-success btn-xs btn-raised edit'><i class='fa fa-pencil'></i></button>";
							// "<button type='button' class='btn btn-danger btn-xs btn-raised delete'><i class='fa fa-times'></i></button>";
					}
				},
				{
					mRender: function(row, setting, full){
						if(full.lvl_2_status === '1'){
							return "<button type='button' class='btn btn-raised btn-default btn-xs prev-level show-lvl-1' title='Show Element'><i class='fa fa-angle-left'></i></button>" + full.lvl_2_name + "<button type='button' class='btn btn-raised btn-default btn-xs next-level show-lvl-3' title='Show Line Items'><i class='fa fa-angle-right'></i></button>";
						}
						return "<button type='button' class='btn btn-raised btn-default btn-xs prev-level show-lvl-1' title='Show Element'><i class='fa fa-angle-left'></i></button>" + full.lvl_2_name + "<button type='button' class='btn btn-raised btn-default btn-xs next-level' title='Show Line Items'><i class='fa fa-angle-right'></i></button>";
					}
				},
				{
					mRender: function(row, setting, full){
						if(full.lvl_2_code === '0'){
							return "<input type='checkbox' checked disabled>";
						}
						if(full.lvl_2_status === '1'){
							return "<input class='disable_lvl_2' type='checkbox' checked title='Enable or Disable'>";
						}
						return "<input class='disable_lvl_2' type='checkbox' title='Enable or Disable'>";
					}
				}
			],
	columnDefs: [{targets: 0, width: '40px'}, {targets: 2, width: '20px'}],
	scrollX: true,
	sDom: '<"top"f>rt<"bottom"p><"clear">',
	bSort: false
});
$('#s_coa_2').on('keyup', function(){
	lvl2.search(this.value).draw();
});
var lvl3 = $('#coa-lvl3').DataTable({
	ajax: window_location+'/setup/setup3/get_coa_lvl3/'+lvl_2_id,
	columns: [
				{
					mRender: function(row, setting, full){
						if(full.lvl_3_code_int === '0'){
							return "<span type='button' class='btn btn-success btn-xs btn-raised' disabled><i class='fa fa-pencil'></i></span>";
							// "<span type='button' class='btn btn-danger btn-xs btn-raised' disabled><i class='fa fa-times'></i></span>";
						}
						return "<button type='button' class='btn btn-success btn-xs btn-raised edit'><i class='fa fa-pencil'></i></button>";
							// "<button type='button' class='btn btn-danger btn-xs btn-raised delete'><i class='fa fa-times'></i></button>";
					}
				},
				{
					mRender: function(row, setting, full){
						if(full.lvl_3_status === '1'){
							return "<button type='button' class='btn btn-raised btn-default btn-xs prev-level show-lvl-2' title='Show Classification'><i class='fa fa-angle-left'></i></button>" + full.lvl_3_name + "<button type='button' class='btn btn-raised btn-default btn-xs next-level show-lvl-4' title='Show SubClassification'><i class='fa fa-angle-right'></i></button>";
						}
						return "<button type='button' class='btn btn-raised btn-default btn-xs prev-level show-lvl-2' title='Show Classification'><i class='fa fa-angle-left'></i></button>" + full.lvl_3_name + "<button type='button' class='btn btn-raised btn-default btn-xs next-level' title='Show SubClassification'><i class='fa fa-angle-right'></i></button>";
					}
				},
				{
					mRender: function(row, setting, full){
						if(full.lvl_3_code_int === '0'){
							return "<input type='checkbox' checked disabled>";
						}
						if(full.lvl_3_status === '1'){
							return "<input class='disable_lvl_3' type='checkbox' checked title='Enable or Disable'>";
						}
						return "<input class='disable_lvl_3' type='checkbox' title='Enable or Disable'>";
					}
				},
			],
	columnDefs: [{targets: 0, width: '40px'}, {targets: 2, width: '20px'}],
	scrollX: true,
	sDom: '<"top"f>rt<"bottom"p><"clear">',
	bSort: false
});
$('#s_coa_3').on('keyup', function(){
	lvl3.search(this.value).draw();
});
var lvl4 = $('#coa-lvl4').DataTable({
	ajax: window_location+'/setup/setup3/get_coa_lvl4/'+lvl_3_id,
	columns: [
				{
					mRender: function(row, setting, full){
						if(full.lvl_4_code === '0'){
							return "<span type='button' class='btn btn-success btn-xs btn-raised' disabled><i class='fa fa-pencil'></i></span>";
							// "<span type='button' class='btn btn-danger btn-xs btn-raised' disabled><i class='fa fa-times'></i></span>";
						}
						return "<button type='button' class='btn btn-success btn-xs btn-raised edit'><i class='fa fa-pencil'></i></button>";
							// "<button type='button' class='btn btn-danger btn-xs btn-raised delete'><i class='fa fa-times'></i></button>";
					}
				},
				{
					mRender: function(row, setting, full){
						if(full.lvl_4_status === '1'){
							return "<button type='button' class='btn btn-raised btn-default btn-xs prev-level show-lvl-3' title='Show Line Item'><i class='fa fa-angle-left'></i></button>" + full.lvl_4_name;
								// + "<button type='button' class='btn btn-raised btn-default btn-xs next-level show-lvl-5' title='Show Subsidiary Name'><i class='fa fa-angle-right'></i></button>";
						}
						return "<button type='button' class='btn btn-raised btn-default btn-xs prev-level show-lvl-3' title='Show Line Item'><i class='fa fa-angle-left'></i></button>" + full.lvl_4_name;
							// + "<button type='button' class='btn btn-raised btn-default btn-xs next-level' title='Show Subsidiary Name'><i class='fa fa-angle-right'></i></button>";
					}
				},
				{data: 'bir'},
				{
					mRender: function(row, setting, full){
						if(full.lvl_4_code === '0'){
							return "<input type='checkbox' checked disabled>";
						}
						if(full.lvl_4_status === '1'){
							return "<input class='disable_lvl_4' type='checkbox' checked title='Enable or Disable'>";
						}
						return "<input class='disable_lvl_4' type='checkbox' title='Enable or Disable'>";
					}
				},
			],
	columnDefs: [{targets: 0, width: '40px'}, {targets: 3, width: '20px'}],
	scrollX: true,
	sDom: '<"top"f>rt<"bottom"p><"clear">',
	bSort: false
});
$('#s_coa_4').on('keyup', function(){
	lvl4.search(this.value).draw();
});
var lvl5 = $('#coa-lvl5').DataTable({
	ajax: window_location+'/setup/setup3/get_coa_lvl5/'+lvl_4_id,
	columns: [
				{
					mRender: function(row, setting, full){
						return "<button type='button' class='btn btn-raised btn-default btn-xs prev-level show-lvl-4' title='Show SubClassification'><i class='fa fa-angle-left'></i></button>" + full.lvl_5_name;
					}
				},
			],
	scrollX: true,
	sDom: '<"top"f>rt<"bottom"p><"clear">',
	bSort: false
});
$('#s_coa_5').on('keyup', function(){
	lvl5.search(this.value).draw();
});
$('#coa-lvl1').on('click', 'tr', function(){
	var data = lvl1.row(this).data();
	lvl_1_id = 0;
	lvl_2_id = 0;
	lvl_3_id = 0;
	lvl_4_id = 0;
	lvl_1_status = 0;
	lvl_2_status = 0;
	lvl_3_status = 0;
	lvl_4_status = 0;
	lvl_1_name = '';
	lvl_2_name = '...';
	lvl_3_name = '...';
	lvl_4_name = '...';
	if(data.status === '1'){
		lvl_1_id = data.lvl_1_id ? data.lvl_1_id : 0;
		lvl_1_status = data.status;
		lvl_1_name = data.lvl_1_name ? data.lvl_1_name : '';
	}
	$('#coa-lvl1 tr').removeClass('selected');
	$(this).addClass('selected');
	$('#coa-breadcrumb').html('');
	$('#coa-breadcrumb').html("<li><a href='#'>"+lvl_1_name+"</a></li>"+
								"<li><a href='#'>"+lvl_2_name+"</a></li>"+
								"<li><a href='#'>"+lvl_3_name+"</a></li>"+
								"<li><a href='#'>"+lvl_4_name+"</a></li>");
	lvl2.ajax.url(window_location+'/setup/setup3/get_coa_lvl2/'+lvl_1_id).load(function(json){});		
	lvl3.ajax.url(window_location+'/setup/setup3/get_coa_lvl3/'+lvl_2_id).load(function(json){});		
	lvl4.ajax.url(window_location+'/setup/setup3/get_coa_lvl4/'+lvl_3_id).load(function(json){});				
	lvl5.ajax.url(window_location+'/setup/setup3/get_coa_lvl5/'+lvl_4_id).load(function(json){});
});
$('#coa-lvl2').on('click', 'tr', function(){
		var data = lvl2.row(this).data();
		lvl_2_id = 0;
		lvl_3_id = 0;
		lvl_4_id = 0;
		lvl_2_status = 0;
		lvl_3_status = 0;
		lvl_4_status = 0;
		lvl_2_name = '';
		lvl_3_name = '...';
		lvl_4_name = '...';
		if(data.lvl_2_status === '1'){
			lvl_2_id = data.lvl_2_id ? data.lvl_2_id : 0;
			lvl_2_status = data.lvl_2_status;
			lvl_2_name = data.lvl_2_name ? data.lvl_2_name : '';
		}
		$('#coa-lvl2 tr').removeClass('selected');
		$(this).addClass('selected');
		$('#coa-breadcrumb').html('');
		$('#coa-breadcrumb').html("<li><a href='#'>"+lvl_1_name+"</a></li>"+
									"<li><a href='#'>"+lvl_2_name+"</a></li>"+
									"<li><a href='#'>"+lvl_3_name+"</a></li>"+
									"<li><a href='#'>"+lvl_4_name+"</a></li>");
		$('#coa-lvl3').closest('li > div').css('opacity', '0');
		$('#coa-lvl4').closest('li > div').css('opacity', '0');
		$('#coa-lvl5').closest('li > div').css('opacity', '0');
		lvl3.ajax.url(window_location+'/setup/setup3/get_coa_lvl3/'+lvl_2_id).load(function(json){});				
		lvl4.ajax.url(window_location+'/setup/setup3/get_coa_lvl4/'+lvl_3_id).load(function(json){});					
		lvl5.ajax.url(window_location+'/setup/setup3/get_coa_lvl5/'+lvl_4_id).load(function(json){});			
});
$('#coa-lvl3').on('click', 'tr', function(){
		var data = lvl3.row(this).data();
		lvl_3_id = 0;
		lvl_4_id = 0;
		lvl_3_status = 0;
		lvl_4_status = 0;
		lvl_3_name = '';
		lvl_4_name = '...';
		if(data.lvl_3_status === '1'){
			lvl_3_id = data.lvl_3_id ? data.lvl_3_id : 0;
			lvl_3_status = data.lvl_3_status;
			lvl_3_name = data.lvl_3_name ? data.lvl_3_name : '';
		}
		$('#coa-lvl3 tr').removeClass('selected');
		$(this).addClass('selected');
		$('#coa-breadcrumb').html('');
		$('#coa-breadcrumb').html("<li><a href='#'>"+lvl_1_name+"</a></li>"+
									"<li><a href='#'>"+lvl_2_name+"</a></li>"+
									"<li><a href='#'>"+lvl_3_name+"</a></li>"+
									"<li><a href='#'>"+lvl_4_name+"</a></li>");	
		$('#coa-lvl4').closest('li > div').css('opacity', '0');
		$('#coa-lvl5').closest('li > div').css('opacity', '0');
		lvl4.ajax.url(window_location+'/setup/setup3/get_coa_lvl4/'+lvl_3_id).load(function(json){});					
		lvl5.ajax.url(window_location+'/setup/setup3/get_coa_lvl5/'+lvl_4_id).load(function(json){});				
});
$('#coa-lvl4').on('click', 'tr', function(){
		var data = lvl4.row(this).data();
		lvl_4_id = 0;
		lvl_4_status = 0;
		lvl_4_name = '';
		if(data.lvl_4_status === '1'){
			lvl_4_id = data.lvl_4_id ? data.lvl_4_id : 0;
			lvl_4_status = data.status;
			lvl_4_name = data.lvl_4_name ? data.lvl_4_name : '';
		}
		$('#coa-lvl4 tr').removeClass('selected');
		$(this).addClass('selected');
		$('#coa-breadcrumb').html('');
		$('#coa-breadcrumb').html("<li><a href='#'>"+lvl_1_name+"</a></li>"+
									"<li><a href='#'>"+lvl_2_name+"</a></li>"+
									"<li><a href='#'>"+lvl_3_name+"</a></li>"+
									"<li><a href='#'>"+lvl_4_name+"</a></li>");	
		$('#coa-lvl5').closest('li > div').css('opacity', '0');
		lvl5.ajax.url(window_location+'/setup/setup3/get_coa_lvl5/'+lvl_4_id).load(function(json){});			
});

// TAX TYPES N' TAX
var tt_id = 0;
var tt_code = 0;
var tax_types = $('#tax-types').DataTable({
	ajax: window_location+'/setup/setup4/get_tax_types',
	columns: [
				{
					bSortable: false, bSearchable: false,
					mRender: function(row, setting, full){
						return "<button type='button' class='btn btn-success btn-xs btn-raised edit'><i class='fa fa-pencil'></i></button>";
							// "<button type='button' class='btn btn-danger btn-xs btn-raised delete'><i class='fa fa-times'></i></button>";
					}
				},
				{'data': 'tt_seq'},
				{'data': 'tt_code'},
				{
					mRender: function(row, setting, full){
						if(full.status === '1'){
							return full.tt_name + "<button class='btn btn-raised btn-default btn-xs next-level show-tax' title='Show SubClassification'><i class='fa fa-angle-right'></i></button>";
						}
						return full.tt_name + "<button class='btn btn-raised btn-default btn-xs next-level' title='Show SubClassification'><i class='fa fa-angle-right'></i></button>";
					}
				},
				{'data': 'tt_shortname'},
				{
					bSortable: false, bSearchable: false,
					mRender: function(row, setting, full){
						if(full.status === '1'){
							return "<input type='checkbox' checked title='Enable or Disable' class='disable_tax_type'>";
						}
						return "<input type='checkbox' title='Enable or Disable' class='disable_tax_type'>";
					}
				},
			],
	order: [['0', 'asc']],
	columnDefs: [{targets: [1,2], width: '40px'}, {targets: 0, width: '40px'}, {targets: 5, width: '20px'}],
	sDom: '<"top"f>rt<"bottom"p><"clear">',
	scrollX: true,
	bSort: false,
});
$('#s_tax_type').on('keyup', function(){
	tax_types.search(this.value).draw();
});
var tax = $('#tax').DataTable({
	ajax: window_location+'/setup/setup4/get_tax/'+tt_id,
	columns: [
				{
					bSortable: false, bSearchable: false,
					mRender: function(row, setting, full){
						return "<button type='button' class='btn btn-success btn-xs btn-raised edit'><i class='fa fa-pencil'></i></button>";
							// "<button type='button' class='btn btn-danger btn-xs btn-raised delete'><i class='fa fa-times'></i></button>";
					}
				},
				{'data': 't_seq'},
				{'data': 't_code'},
				{'data': 't_atc'},
				{
					mRender: function(row, setting, full){
						return "<button class='btn btn-raised btn-default btn-xs prev-level show-tax-type' title='Show SubClassification'><i class='fa fa-angle-left'></i></button>" + full.t_name;
					}
				},
				{'data': 't_shortname'},
				{'data': 't_rate'},
				{'data': 't_base'},
				{
					bSortable: false, bSearchable: false,
					mRender: function(row, setting, full){
						if(full.tax_status === '1'){
							return "<input type='checkbox' checked title='Enable or Disable' class='disable_tax'>";
						}
						return "<input type='checkbox' title='Enable or Disable' class='disable_tax'>";
					}
				}
			],
	order: [['0', 'asc']],
	columnDefs: [{targets: 3, width: '70px'},{targets: [1,2], width: '40px'},{targets: 5, width: '150px'},{targets: [6,7], width: '80px'}, {targets: 0, width: '40px'}, {targets: 8, width: '20px'}],
	sDom: '<"top"f>rt<"bottom"p><"clear">',
	scrollX: true,
	bSort: false,
	initComplete: function(){
		$('#tax').closest('li > div').css('opacity', '1');
	}
});
$('#s_tax').on('keyup', function(){
	tax.search(this.value).draw();
});

$('#tax-types').on('click', 'tr', function(){
	var data = tax_types.row($(this)).data();
	tt_id = 0;
	tt_code = 0;
	if(data.status === '1'){
		tt_id = data.tt_id;
		tt_code = data.tt_code;
	}
	tax.ajax.url(window_location+'/setup/setup4/get_tax/'+tt_id).load(function(json){});
	$('#tax-breadcrumb').html("<li><a href='#'>"+data.tt_name+"</a></li>"+
								"<li><a href='#'>...</a></li>");
	$(this).closest('table').find('tr').removeClass('selected');
	$(this).addClass('selected');
});

$('body').on('click', '.disable_lvl_1', function(){
	let id = lvl1.row($(this).closest('tr')).data().lvl_1_id;
	if($(this).is(':checked')){
		$.get(window_location+'/setup/setup3/enable_coa_lvl1', {id: id}, function(response){
			lvl1.ajax.reload(function(){}, false);
			lvl2.ajax.url(window_location+'/setup/setup3/get_coa_lvl2/0').load(function(json){});		
			lvl3.ajax.url(window_location+'/setup/setup3/get_coa_lvl3/0').load(function(json){});		
			lvl4.ajax.url(window_location+'/setup/setup3/get_coa_lvl4/0').load(function(json){});				
			lvl5.ajax.url(window_location+'/setup/setup3/get_coa_lvl5/0').load(function(json){});
		});
	}
	if(!$(this).is(':checked')){
		$.get(window_location+'/setup/setup3/disable_coa_lvl1', {id: id}, function(response){
			lvl1.ajax.reload(function(){}, false);
			lvl2.ajax.url(window_location+'/setup/setup3/get_coa_lvl2/0').load(function(json){});		
			lvl3.ajax.url(window_location+'/setup/setup3/get_coa_lvl3/0').load(function(json){});		
			lvl4.ajax.url(window_location+'/setup/setup3/get_coa_lvl4/0').load(function(json){});				
			lvl5.ajax.url(window_location+'/setup/setup3/get_coa_lvl5/0').load(function(json){});
		});
	}
	$(document).ajaxComplete(function(){
		lvl_1_id = 0;
		lvl_2_id = 0;
		lvl_3_id = 0;
		lvl_4_id = 0;
		lvl_1_status = 0;
		lvl_2_status = 0;
		lvl_3_status = 0;
		lvl_4_status = 0;
		lvl_1_name = '';
		lvl_2_name = '...';
		lvl_3_name = '...';
		lvl_4_name = '...';
		$('#coa-lvl1 tr').removeClass('selected');
		$(this).addClass('selected');
		$('#coa-breadcrumb').html('');
		$('#coa-breadcrumb').html("<li><a href='#'>"+lvl_1_name+"</a></li>"+
									"<li><a href='#'>"+lvl_2_name+"</a></li>"+
									"<li><a href='#'>"+lvl_3_name+"</a></li>"+
									"<li><a href='#'>"+lvl_4_name+"</a></li>");
		$(document).unbind('ajaxComplete');
	});
});
$('body').on('click', '.disable_lvl_2', function(){
	let id = lvl2.row($(this).closest('tr')).data().lvl_2_id;
	if($(this).is(':checked')){
		$.get(window_location+'/setup/setup3/enable_coa_lvl2', {id: id}, function(response){
			lvl2.ajax.reload(function(){}, false);
			lvl3.ajax.url(window_location+'/setup/setup3/get_coa_lvl3/0').load(function(json){});		
			lvl4.ajax.url(window_location+'/setup/setup3/get_coa_lvl4/0').load(function(json){});				
			lvl5.ajax.url(window_location+'/setup/setup3/get_coa_lvl5/0').load(function(json){});
		});
	}
	if(!$(this).is(':checked')){
		$.get(window_location+'/setup/setup3/disable_coa_lvl2', {id: id}, function(response){
			lvl2.ajax.reload(function(){}, false);
			lvl3.ajax.url(window_location+'/setup/setup3/get_coa_lvl3/0').load(function(json){});		
			lvl4.ajax.url(window_location+'/setup/setup3/get_coa_lvl4/0').load(function(json){});				
			lvl5.ajax.url(window_location+'/setup/setup3/get_coa_lvl5/0').load(function(json){});
		});
	}
	$(document).ajaxComplete(function(){
		lvl_2_id = 0;
		lvl_3_id = 0;
		lvl_4_id = 0;
		lvl_2_status = 0;
		lvl_3_status = 0;
		lvl_4_status = 0;
		lvl_2_name = '...';
		lvl_3_name = '...';
		lvl_4_name = '...';
		$('#coa-lvl1 tr').removeClass('selected');
		$(this).addClass('selected');
		$('#coa-breadcrumb').html('');
		$('#coa-breadcrumb').html("<li><a href='#'>"+lvl_1_name+"</a></li>"+
									"<li><a href='#'>"+lvl_2_name+"</a></li>"+
									"<li><a href='#'>"+lvl_3_name+"</a></li>"+
									"<li><a href='#'>"+lvl_4_name+"</a></li>");
		$(document).unbind('ajaxComplete');
	});
});
$('body').on('click', '.disable_lvl_3', function(){
	let id = lvl3.row($(this).closest('tr')).data().lvl_3_id;
	if($(this).is(':checked')){
		$.get(window_location+'/setup/setup3/enable_coa_lvl3', {id: id}, function(response){
			lvl3.ajax.reload(function(){}, false);
			lvl4.ajax.url(window_location+'/setup/setup3/get_coa_lvl4/0').load(function(json){});				
			lvl5.ajax.url(window_location+'/setup/setup3/get_coa_lvl5/0').load(function(json){});
		});
	}
	if(!$(this).is(':checked')){
		$.get(window_location+'/setup/setup3/disable_coa_lvl3', {id: id}, function(response){
			lvl3.ajax.reload(function(){}, false);
			lvl4.ajax.url(window_location+'/setup/setup3/get_coa_lvl4/0').load(function(json){});				
			lvl5.ajax.url(window_location+'/setup/setup3/get_coa_lvl5/0').load(function(json){});
		});
	}
	$(document).ajaxComplete(function(){
		lvl_3_id = 0;
		lvl_4_id = 0;
		lvl_3_status = 0;
		lvl_4_status = 0;
		lvl_3_name = '...';
		lvl_4_name = '...';
		$('#coa-lvl1 tr').removeClass('selected');
		$(this).addClass('selected');
		$('#coa-breadcrumb').html('');
		$('#coa-breadcrumb').html("<li><a href='#'>"+lvl_1_name+"</a></li>"+
									"<li><a href='#'>"+lvl_2_name+"</a></li>"+
									"<li><a href='#'>"+lvl_3_name+"</a></li>"+
									"<li><a href='#'>"+lvl_4_name+"</a></li>");
		$(document).unbind('ajaxComplete');
	});
});
$('body').on('click', '.disable_lvl_4', function(){
	let id = lvl4.row($(this).closest('tr')).data().lvl_4_id;
	if($(this).is(':checked')){
		$.get(window_location+'/setup/setup3/enable_coa_lvl4', {id: id}, function(response){
			lvl4.ajax.reload(function(){}, false);	
			lvl5.ajax.url(window_location+'/setup/setup3/get_coa_lvl5/0').load(function(json){});
		});
	}
	if(!$(this).is(':checked')){
		$.get(window_location+'/setup/setup3/disable_coa_lvl4', {id: id}, function(response){
			lvl4.ajax.reload(function(){}, false);	
			lvl5.ajax.url(window_location+'/setup/setup3/get_coa_lvl5/0').load(function(json){});
		});
	}
	$(document).ajaxComplete(function(){
		lvl_4_id = 0;
		lvl_4_status = 0;
		lvl_4_name = '...';
		$('#coa-lvl1 tr').removeClass('selected');
		$(this).addClass('selected');
		$('#coa-breadcrumb').html('');
		$('#coa-breadcrumb').html("<li><a href='#'>"+lvl_1_name+"</a></li>"+
									"<li><a href='#'>"+lvl_2_name+"</a></li>"+
									"<li><a href='#'>"+lvl_3_name+"</a></li>"+
									"<li><a href='#'>"+lvl_4_name+"</a></li>");
		$(document).unbind('ajaxComplete');
	});
});
$('body').on('click', '.disable_lvl_5', function(){
	let id = lvl5.row($(this).closest('tr')).data().lvl_5_id;
	if($(this).is(':checked')){	
		$.get(window_location+'/setup/setup3/enable_coa_lvl5', {id: id}, function(response){
			lvl5.ajax.reload(function(){}, false);
		});
	}
	if(!$(this).is(':checked')){
		$.get(window_location+'/setup/setup3/disable_coa_lvl5', {id: id}, function(response){
			lvl5.ajax.reload(function(){}, false);
		});
	}
});

$('body').on('click', '.disable_tax_type', function(){
	let id = tax_types.row($(this).closest('tr')).data().tt_id;
	if($(this).is(':checked')){
		$.get(window_location+'/setup/setup4/enable_tax_type', {id: id}, function(response){});
	}
	if(!$(this).is(':checked')){
		$.get(window_location+'/setup/setup4/disable_tax_type', {id: id}, function(response){});
	}
	$(document).ajaxComplete(function(){
		tt_id = 0;
		tt_code = 0;
		$('#tax-breadcrumb').html("<li><a href='#'>...</a></li>"+
									"<li><a href='#'>...</a></li>");
		$(this).closest('table').find('tr').removeClass('selected');
		$(this).addClass('selected');
		tax_types.ajax.reload(function(){}, false);
		tax.ajax.url(window_location+'/setup/setup4/get_tax/0').load(function(){});
		$(document).unbind('ajaxComplete');
	});
});
$('body').on('click', '.disable_tax', function(){
	let id = tax.row($(this).closest('tr')).data().t_id;
	if($(this).is(':checked')){
		$.get(window_location+'/setup/setup4/enable_tax', {id: id}, function(){});
	}
	if(!$(this).is(':checked')){
		$.get(window_location+'/setup/setup4/disable_tax', {id: id}, function(){});
	}
	$(document).ajaxComplete(function(){
		tax.ajax.reload(function(){}, false);
		$(document).unbind('ajaxComplete');
	});
});

coaSequence.currentPhaseStarted = function(id, sequence){
	if(lvl_1_id === 0){
		$('#lvl-2-alert').css('display', 'block');		
		$('#lvl-3-alert').css('display', 'block');		
		$('#lvl-4-alert').css('display', 'block');		
		$('#lvl-5-alert').css('display', 'block');
		$('#add-lvl-2-btn').attr('disabled', true);
		$('#add-lvl-3-btn').attr('disabled', true);
		$('#add-lvl-4-btn').attr('disabled', true);
		$('#add-lvl-5-btn').attr('disabled', true);
	}else{
		$('#lvl-2-alert').css('display', 'none');		
		$('#lvl-3-alert').css('display', 'block');		
		$('#lvl-4-alert').css('display', 'block');		
		$('#lvl-5-alert').css('display', 'block');
		$('#add-lvl-2-btn').removeAttr('disabled');
		$('#add-lvl-3-btn').attr('disabled', true);
		$('#add-lvl-4-btn').attr('disabled', true);
		$('#add-lvl-5-btn').attr('disabled', true);
	}
	if(lvl_2_id === 0){
		$('#lvl-3-alert').css('display', 'block');		
		$('#lvl-4-alert').css('display', 'block');		
		$('#lvl-5-alert').css('display', 'block');
		$('#add-lvl-3-btn').attr('disabled', true);
		$('#add-lvl-4-btn').attr('disabled', true);
		$('#add-lvl-5-btn').attr('disabled', true);
	}else{
		$('#lvl-3-alert').css('display', 'none');		
		$('#lvl-4-alert').css('display', 'block');		
		$('#lvl-5-alert').css('display', 'block');
		$('#add-lvl-3-btn').removeAttr('disabled');
		$('#add-lvl-4-btn').attr('disabled', true);
		$('#add-lvl-5-btn').attr('disabled', true);
	}
	if(lvl_3_id === 0){	
		$('#lvl-4-alert').css('display', 'block');		
		$('#lvl-5-alert').css('display', 'block');
		$('#add-lvl-4-btn').attr('disabled', true);
		$('#add-lvl-5-btn').attr('disabled', true);
	}else{	
		$('#lvl-4-alert').css('display', 'none');		
		$('#lvl-5-alert').css('display', 'block');
		$('#add-lvl-4-btn').removeAttr('disabled');
		$('#add-lvl-5-btn').attr('disabled', true);
	}
	if(lvl_4_id === 0){
		$('#lvl-5-alert').css('display', 'block');
		$('#add-lvl-5-btn').attr('disabled', true);
	}else{
		$('#lvl-5-alert').css('display', 'none');
		$('#add-lvl-5-btn').removeAttr('disabled');
	}
	if(!$.active){
		$('#coa-lvl1').closest('li > div').css('opacity', '1');
		$('#coa-lvl2').closest('li > div').css('opacity', '1');
		$('#coa-lvl3').closest('li > div').css('opacity', '1');
		$('#coa-lvl4').closest('li > div').css('opacity', '1');
		$('#coa-lvl5').closest('li > div').css('opacity', '1');
	}else{
		$('#coa-lvl1').closest('li > div').css('opacity', '0');
		$('#coa-lvl2').closest('li > div').css('opacity', '0');
		$('#coa-lvl3').closest('li > div').css('opacity', '0');
		$('#coa-lvl4').closest('li > div').css('opacity', '0');
		$('#coa-lvl5').closest('li > div').css('opacity', '0');
	}
	$(document).ajaxComplete(function(){
		$('#coa-lvl1').closest('li > div').css('opacity', '1');
		$('#coa-lvl2').closest('li > div').css('opacity', '1');
		$('#coa-lvl3').closest('li > div').css('opacity', '1');
		$('#coa-lvl4').closest('li > div').css('opacity', '1');
		$('#coa-lvl5').closest('li > div').css('opacity', '1');
		$(document).unbind('ajaxComplete');
	});
}

taxSequence.currentPhaseStarted = function(id, sequence){
	$('#tax-types').closest('li > div').css('opacity', '0');
	$('#tax').closest('li > div').css('opacity', '0');
	if(tt_id === 0){
		$('#tax-alert').css('display', 'block');
		$('#add-tax-btn').attr('disabled', true);
	}else{
		$('#tax-alert').css('display', 'none');
		$('#add-tax-btn').removeAttr('disabled');
	}
	if(!$.active){
		$('#tax-types').closest('li > div').css('opacity', '1');
		$('#tax').closest('li > div').css('opacity', '1');
	}
	$(document).ajaxComplete(function(){
		$('#tax-types').closest('li > div').css('opacity', '1');
		$('#tax').closest('li > div').css('opacity', '1');
		$(document).unbind('ajaxComplete');
	});
}