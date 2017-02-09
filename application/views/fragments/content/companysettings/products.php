<input id='mc_id' type="hidden" name="mc_id" value="<?php echo $user->main_company->cb_id; ?>">
<input id='bc_id' type="hidden" name="bc_id" value="<?php echo $user->cb_id; ?>">
<div class='side-body padding-top hide-table-setting'>
	<div class='card custom-card col-md-9 main-table-panel'>
		<div class='card-body hide-table-setting' style='padding: 0;'>
			<div id='custom-card-title' class='row' style="margin: 30px 0 0 0; text-align: center;">
				<div class='panel panel-default' style="border: none; border-bottom: 2px solid #000">
					<div class='panel-body'>
						<p style="font-size: 24px; margin: 0;">Products</p>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-12'>
					<div class='col-md-12' id='products-table-row' style="padding: 0;">
						<button id='add' type='button' class='btn btn-info btn-sm btn-raised ripple-effect' <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?>><i class='fa fa-plus'></i></button>
						<table id='products-table' class='table table-hovered table-bordered' style='min-width: 100%;'>
							<thead>
								<th>Options</th>
								<th>Sequence</th>
								<th>Code</th>
								<th>Name</th>
								<th>Shortname</th>
								<th>Description</th>
								<th>Profit Cost Center</th>
								<th>Department</th>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class='col-md-1' style="width: 1px; padding: 0;">
		<button type='button' class='btn btn-dark btn-sm ripple-effect table-setting-toggle'>Table Setting</button>
	</div>
	<div class='col-md-2 table-setting-panel'>
		<div class='col-md-12' style="padding: 0;">
			<div class='col-md-12' style="padding: 0; height: 60px;">
				<button type='button' class='btn btn-default btn-sm ripple-effect close-table-option' style="float: left; margin: 0; height: 100%;">X</button>
				<h3 class='option-title' style="margin-left: 65px;">Table Setting</h3>
			</div>
			<div class='col-md-12'>
				<table class='table option-table'>
					<tr>
						<td><p>Search</p></td>
						<td><input type="text" class='form-control search'></td>
					</tr>
					<tr>
						<td><p>Entries</p></td>
						<td>
							<select type="text" class='form-control entry'>
								<option value='10'>10</option>
								<option value='25'>25</option>
								<option value='50'>50</option>
								<option value='100'>100</option>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan='2' style="padding-bottom: 0;"><p>Show Action Buttons</p></td>
					</tr>
					<tr>
						<td colspan='2' style="padding-top: 0;"><input id="switch-state" class='bootstrap-switch' type="checkbox" checked data-on-text="Yes" data-off-text="No"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div id='add-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Product</h4>
	</div>
	<form action='<?php echo base_url(); ?>company_settings/products/add' method='post' class='body'>
		<div class='modal-body'>
			<table width='90%'>
				<tr  class='add-department'>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Department</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select name='add-department' class='v-select-required' title="Please fill out this field" placeholder='Select...'></select>
					</td>
				</tr>
				<tr class='add-profit-cost-center'>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Profit Cost Center</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select name='add-pcc' class='v-select-required' title="Please fill out this field" placeholder='Select...'></select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='add-name'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='add-shortname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Description</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='add-description'></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
		</div>
	</form>
</div>
<div id='view-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Product</h4>
	</div>
	<div class='modal-body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-seq' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-code' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Department</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-department' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Profit Cost Center</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-pcc' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-name' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-shortname' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Description</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-description' class='form-control' type='text' readonly></td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 497px;'>
		<button class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='button' data-dismiss='modal' style='float: right;'>Close</button>
	</div>
</div>
<div id='edit-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Product</h4>
	</div>
	<form action='<?php echo base_url(); ?>company_settings/products/edit' method='post' class='body'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='edit-seq' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='edit-code' class='form-control v-required v-number' title="Please fill out this field" type='text'></td>
				</tr>
				<tr class='add-department'>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Department</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select name='edit-department' class='v-select-required' title="Please fill out this field" placeholder='Select...'></select>
					</td>
				</tr>
				<tr class='add-profit-cost-center'>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Profit Cost Center</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select name='edit-pcc' class='v-select-required' title="Please fill out this field" placeholder='Select...'></select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='edit-name' class='form-control v-required' title="Please fill out this field" type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='edit-shortname' class='form-control' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Description</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='edit-description' class='form-control' type='text'></td>
				</tr>
			</table>
		</div>
		<input type='hidden' name='edit-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
		</div>
	</form>
</div>
<div id='update-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update Product</h4>
	</div>
	<form action='<?php echo base_url(); ?>company_settings/products/update' method='post' class='body'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='update-seq' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='update-code' class='form-control v-required v-number' type='text'></td>
				</tr>
				<tr class='add-department'>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Department</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select name='update-department' class='v-select-required' title="Please fill out this field" placeholder='Select...'></select>
					</td>
				</tr>
				<tr class='add-profit-cost-center'>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Profit Cost Center</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select name='update-pcc' class='v-select-required' title="Please fill out this field" placeholder='Select...'></select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='update-name' class='form-control v-required' title="Please fill out this field" type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='update-shortname' class='form-control' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Description</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='update-description' class='form-control' type='text'></td>
				</tr>
			</table>
		</div>
		<input type='hidden' name='update-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
		</div>
	</form>	
</div>

<!-- MODALS -->
<div id='add-department-modal' class='modal fade-scale' tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class='modal-content'>
			<div class='modal-header'>
				<button type="button" class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4>Add Department</h4>
			</div>
			<form action='<?php echo base_url(); ?>company_settings/products/add_department' method='post'>
				<div class='modal-body'>
					<table style="width: 90%">
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
							<td colspan='3' style='padding-top: 5px;'><input name='add-name' class='form-control v-required' title='Please fill out this field' type='text'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
							<td colspan='3' style='padding-top: 5px;'><input name='add-shortname' class='form-control' type='text'></td>
						</tr>
					</table>
				</div>
				<div class='modal-footer'>
					<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div id='add-pcc-modal' class='modal fade-scale' tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class='modal-content'>
			<div class='modal-header'>
				<button type="button" class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4>Add Profit Cost Center</h4>
			</div>
			<form action='<?php echo base_url(); ?>company_settings/products/add_pcc' method='post' class='body'>
				<div class='modal-body'>
					<table width='90%'>
						<tr class='add-department'>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Department</label></td>
							<td colspan='3' style='padding-top: 5px;'>
								<select name='add-department' class='v-select-required' title='Please fill out this field' placeholder='Select...'></select>
							</td>
						</tr>
						<tr>
							<td style='width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
							<td colspan='3'><input class='form-control v-required' title='Please fill out this field' type='text' name='add-name'></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
							<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='add-shortname'></td>
						</tr>
					</table>
				</div>
				<div class='modal-footer'>
					<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
				</div>
			</form>
		</div>
	</div>
</div>