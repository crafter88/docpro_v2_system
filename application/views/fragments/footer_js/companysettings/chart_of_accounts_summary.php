<script type="text/javascript" src="<?php echo base_url(); ?>libs/datatable-report/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>libs/datatable-report/buttons.flash.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>libs/datatable-report/jszip.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>libs/datatable-report/pdfmake.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>libs/datatable-report/vfs_fonts.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>libs/datatable-report/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>libs/datatable-report/buttons.print.min.js"></script>
<script>
	$('#summary-coa').DataTable({
		ajax: window_location+'/company_settings/chart_of_accounts/coa_summary_list',
		columns: [
					{data: 'lvl_1_code'},
					{data: 'lvl_1_name'},
					{data: 'lvl_2_code'},
					{data: 'lvl_2_name'},
					{data: 'lvl_3_code'},
					{data: 'lvl_3_name'},
					{data: 'lvl_4_code'},
					{data: 'lvl_4_name'},
					{data: 'lvl_5_code'},
					{data: 'lvl_5_name'},
					// {data: 'lvl_6_code'},
					// {data: 'lvl_6_name'},
					{data: 'coa_code'},
					{data: 'coa_name'},
					{data: 'bir'},
				],
		dom: 'Bfrt',
		buttons: ['excel', 'print'],
		scrollX: true,
		pageLength: 1000
	});
	// function addCommas(num) {
	//    return num.split(',').join('').toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	// }
</script>