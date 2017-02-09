<script>
	$(document).ready(function(){
		$('#chart-of-accounts-table').DataTable({
			columnDefs: [{targets: [0, 1, 3, 5, 7, 9, 11, 13, 15], width: '1px'},
						 {targets: [2, 4, 6, 8, 10, 12, 14, 16], width: '200px'},
						],
			scrollX: true,
		});
	});
</script>
