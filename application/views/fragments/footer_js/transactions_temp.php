<script>
	var summary_table = $('#summary-table').DataTable({
						scrollX: true,				
						columnDefs: [{targets: [0,1,2,3,4,5,6,7,8], width: '80px'}, {targets: [9,10,11], width: '120px'}],
	});
	var journal_entries_table = $('#journal-entries-table').DataTable({
					scrollX: true,
					columnDefs: [{targets: [0,1,2,4], width: '70px'}, {targets: [3,5,6], width: '150px'}, {targets: [7,8], width: '180px'}],
	});
</script>