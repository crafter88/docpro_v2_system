<script>
	$(document).ready(function(){
		$('#transactions-table').DataTable({
			columnDefs: [{targets: [0, 1, 2, 5, 7], width: '1px'}, {targets: [6, 8], width: '100px'}]
		});
	});

</script>
