<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Types of Payment</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 10px;'>
			<div class='row'>
				<div class='col-md-12' id='top-table-row' style="padding: 0;">
					<button type='button' id='add-top' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add'><i class='fa fa-plus'></i></button>
					<table id='top-table' class='table table-hovered table-bordered' style="min-width: 100%;">
						<thead>
							<th>Option</th>
							<th>Code</th>
							<th>Payment Type</th>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div id='top-view-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Types of Payment</h4>
	</div>
	<div>
		<div class='body'>
			<div class='top-modal-body'>
				<table width='90%'>
					<tr>
						<td style='padding-top: 10px; width: 100px; text-align: right; padding-right: 20px;'><label>Code</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='top-view-code' class='form-control' type='text' readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 100px; text-align: right; padding-right: 20px;'><label>Type</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='top-view-type' class='form-control' type='text' readonly></td>
					</tr>
				</table>
			</div>
			<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
				<button id='close-btn' class='btn btn-info btn-sm btn-raised ripple-effect' type='button' style='float: right;'>Close</button>
			</div>
		</div>
	</div>
</div>
<div id='top-add-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Types of Payment</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/top/add" method="post">
		<div>
			<div class='body'>
				<div class='top-modal-body'>
					<table width='90%'>
						<tr>
							<td style='padding-top: 10px; width: 100px; text-align: right; padding-right: 20px;'><label>Type</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='top-add-type' name='top-add-type' class='form-control no-space' type='text' required></td>
						</tr>
					</table>
				</div>
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>Ok</button>
				</div>
			</div>
		</div>
	</form>
</div>
<div id='top-edit-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Types of Payment</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/top/edit" method='post'>
		<div>
			<div class='body'>
				<div class='top-modal-body'>
					<table width='90%'>
						<tr>
							<td style='padding-top: 10px; width: 100px; text-align: right; padding-right: 20px;'><label>Code</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='top-edit-code' class='form-control no-space' type='text' readonly></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 100px; text-align: right; padding-right: 20px;'><label>Type</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='top-edit-type' name='top-edit-type' class='form-control no-space' type='text' required></td>
						</tr>
					</table>
				</div>
				<input type="hidden" id='top-edit-id' name="top-edit-id">
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>Ok</button>
				</div>
			</div>
		</div>
	</form>
</div>
<div id='top-update-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update Types of Payment</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/top/update" method='post'>
		<div>
			<div class='body'>
				<div class='top-modal-body'>
					<table width='90%'>
						<tr>
							<td style='padding-top: 10px; width: 100px; text-align: right; padding-right: 20px;'><label>Code</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='top-update-code' class='form-control no-space' type='text' readonly></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 100px; text-align: right; padding-right: 20px;'><label>Type</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='top-update-type' name='top-update-type' class='form-control no-space' type='text' required></td>
						</tr>
					</table>
				</div>
				<input type="hidden" id='top-update-id' name="top-update-id">
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>Ok</button>
				</div>
			</div>
		</div>
	</form>
</div>