<div class='side-body padding-top hide-table-setting'>
	<div class='card custom-card col-md-9 main-table-panel'>
		<div class='card-body' style='padding: 10px 0 0 0;'>
			<input type="hidden" name="default_tt_id" value="<?php echo isset($tt_id) && strlen($tt_id) > 0 ? $tt_id : '0'; ?>">
			<input type="hidden" name="default_tt_name" value="<?php echo isset($tt_name) && strlen($tt_name) > 0 ? $tt_name : ''; ?>">
			<div id='custom-card-title' class='row' style="margin: 30px 0 0 0; text-align: center;">
				<div class='panel panel-default' style="border: none; border-bottom: 2px solid #000">
					<div class='panel-body'>
						<p style="font-size: 24px; margin: 0;">Taxes</p>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-12'>
					<div id='setup-tab-1' class='setup-tab active col-md-6'>
						<span class='tax-no'>1</span>
						<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq <?php if($seq_active === '1'){ echo 'seq-selected'; } ?>' style='margin: 0;'>
							<span>Tax Types</span>
						</button>
					</div>
					<div id='setup-tab-2' class='setup-tab col-md-6'>
						<span class='tax-no'>2</span>
						<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq <?php if($seq_active === '2'){ echo 'seq-selected'; } ?>' style='margin: 0;'>
							<span>Taxes</span>
						</button>
					</div>
				</div>
				<div style="float: left; margin-bottom: 10px; border-left: 4px solid #000; margin-left: 16px;">
					<ol id='tax_breadcrumb' class="breadcrumb" style="margin-left: 0;"></ol>
				</div>
				<input type="hidden" id='seq-active' name="seq-active" value="<?php echo $seq_active; ?>">
			</div>
			<div class='row' style="margin-right: 0; margin-left: 0;">
				<div id='tax-seq'>
					<ul class='seq-canvas'>
						<li>
							<div class='col-md-12' id='top-table-row' style="padding: 0;">
								<button type='button' id='add-tt' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add' <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?>><i class='fa fa-plus'></i></button>
								<table id='tax-types-table' class='table table-hovered table-bordered' style="min-width: 100%;">
									<thead>
										<th></th>
										<th>Seq</th>
										<th>Code</th>
										<th>Name</th>
										<th>Short Name</th>
									</thead>
								</table>
							</div>
						</li>
						<li>
							<div class='col-md-12' id='taxes-table-row' style="padding: 0;">
								<div id='tax-alert' class='col-md-12' style="padding: 0;">
										<div class='alert alert-danger tax-alert'>Please select tax type</div>
									</div>
								<button id='add' type='button' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add' disabled><i class='fa fa-plus'></i></button>
								<table id='taxes-table' class='table table-hovered table-bordered' style="min-width: 99.9%;">
									<thead>
										<th></th>
										<th>Sequence</th>
										<th>Code</th>
										<th>ATC</th>
										<th>Type</th>
										<th>Name</th>
										<th>Shortname</th>
										<th>Rate</th>
										<th>Base</th>
									</thead>
								</table>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class='col-md-1' style="width: 1px; padding: 0; display: none;">
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
<!-- TAX TYPES -->
<div id='tt-view-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px solid #C1C1C1; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Tax Types</h4>
	</div>
	<div class='modal-body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='tt-view-code' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='tt-view-name' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Short Name</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='tt-view-shortname' class='form-control' type='text' readonly></td>
			</tr>
		</table>
	</div>
	<div class='tt-modal-footer' style='border-top: 1px solid #C1C1C1; padding-top: 5px; padding-bottom: 0px;'>
		<button id='close-btn' class='btn btn-info btn-sm btn-raised ripple-effect' type='button' style='float: right;'>Close</button>
	</div>
</div>
<div id='tt-add-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px solid #C1C1C1; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Tax Types</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/taxtypes/add" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='tt-add-name' class='form-control no-space v-required' title='Please fill out this field' type='text' spellcheck="true"></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Short Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='tt-add-shortname' class='form-control no-space v-required' title='Please fill out this field' type='text' spellcheck="true"></td>
				</tr>
			</table>
		</div>
		<div class='tt-modal-footer' style='border-top: 1px solid #C1C1C1; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='tt-edit-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px solid #C1C1C1; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Tax Types</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/taxtypes/edit" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='tt-edit-code' class='form-control number v-required v-number' title='Please fill out this field' type='text' required></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='tt-edit-name' class='form-control v-required' title='Please fill out this field' type='text' spellcheck="true"></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Short Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='tt-edit-shortname' class='form-control v-required' title='Please fill out this field' type='text' spellcheck="true"></td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="tt-edit-id">
		<div class='tt-modal-footer' style='border-top: 1px solid #C1C1C1; padding-top: 5px; padding-bottom: 0px; padding-right: 18px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='tt-update-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px solid #C1C1C1; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update Tax Types</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/taxtypes/update" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='tt-update-code' class='form-control number v-required v-number' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='tt-update-name' class='form-control v-required' title='Please fill out this field' type='text' spellcheck="true"></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Short Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='tt-update-shortname' class='form-control v-required' title='Please fill out this field' type='text' spellcheck="true"></td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="tt-update-id">
		<div class='tt-modal-footer' style='border-top: 1px solid #C1C1C1; padding-top: 5px; padding-bottom: 0px; padding-right: 18px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='tt-delete-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px solid #C1C1C1; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete Tax Types</h4>
	</div>
	<div>
		<form action="<?php echo base_url(); ?>company_settings/taxtypes/delete" method='post'>
			<div class='tt-body'>
				<div class='tt-modal-body'>
					<table width='90%'>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='tt-delete-code' name='tt-delete-code' class='form-control number no-space' type='text' readonly></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
							<td colspan='3' style='padding-top: 5px;'><input id='tt-delete-name' name='tt-delete-name' class='form-control no-space' type='text' required readonly></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Short Name</label></td>
							<td colspan='3' style='padding-top: 5px;'><input id='tt-delete-shortname' name='tt-delete-shortname' class='form-control no-space' type='text' required readonly></td>
						</tr>
					</table>
				</div>
				<input type="hidden" id='tt-delete-id' name="tt-delete-id">
				<div class='tt-modal-footer' style='border-top: 1px solid #C1C1C1; padding-top: 5px; padding-bottom: 0px; padding-right: 18px;'>
					<button class='btn btn-danger btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>Ok</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- TAXES -->
<div id='add-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Tax</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/taxes/add" method='post' class='body'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<input id='add-type-id' type='hidden' name='add-type-id'>
					<input id='add-type-code' type='hidden' name='add-type-code'>
					<input id='add-type-name' type='hidden' name='add-type-name'>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='add-type-select' type='text' name='add-type-select' placeholder='Select...' disabled>
						</select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>ATC</label></td>
					<td colspan='3' style="padding-top: 5px;"><input name='add-atc' class='form-control no-space' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style="padding-top: 5px;"><input name='add-name' class='form-control v-required' title='Please fill out this field' type='text' spellcheck="true"></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='add-shortname' class='form-control' type='text' spellcheck="true"></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Rate</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='add-rate' class='form-control decimal v-decimal v-required' f='^[0-9]+\.?[0-9]*$' title="Please fill out this field" type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Base</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='add-base' class='form-control decimal v-decimal v-required' f='^[0-9]+\.?[0-9]*$' title="Please fill out this field" type='text'></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='view-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Tax</h4>
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
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>ATC</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-atc' class='form-control' type='text' readonly>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-type' class='form-control' type='text' placeholder='Select...' readonly>
				</td>
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
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Rate</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-rate' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Base</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-base' class='form-control' type='text' readonly></td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
		<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='button' data-dismiss='modal' style='float: right;'>Close</button>
	</div>
</div>
<div id='edit-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Tax</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/taxes/edit" method='post' class='body'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
					<td colspan='3' style="padding-top: 5px;"><input class='form-control no-space' type='text' name='edit-seq' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style="padding-top: 5px;"><input name='edit-code' class='form-control v-required' title="Please fill out this field" type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>ATC</label></td>
					<td colspan='3' style="padding-top: 5px;"><input name='edit-atc' class='form-control' type='text'></td>
				</tr>
				<tr>
					<input id='edit-type-id' type='hidden' name='edit-type-id'>
					<input id='edit-type-code' type='hidden' name='edit-type-code'>
					<input id='edit-type-name' type='hidden' name='edit-type-name'>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select type='text' name='edit-type-select' placeholder='Select...' disabled>
						</select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style="padding-top: 5px;"><input name='edit-name' class='form-control v-required' title="Please fill out this field" type='text' spellcheck="true"></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='edit-shortname' class='form-control' type='text' spellcheck="true"></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Rate</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='edit-rate' class='form-control decimal v-decimal v-required' f='^[0-9]+\.?[0-9]*$' title="Please fill out this field" type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Base</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='edit-base' class='form-control decimal v-decimal v-required' f='^[0-9]+\.?[0-9]*$' title="Please fill out this field" type='text'></td>
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
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update Tax</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/taxes/update" method='post' class='body'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
					<td colspan='3' style="padding-top: 5px;"><input class='form-control no-space' type='text' name='update-seq' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style="padding-top: 5px;"><input name='update-code' class='form-control v-required' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>ATC</label></td>
					<td colspan='3' style="padding-top: 5px;"><input name='update-atc' class='form-control no-space' type='text'></td>
				</tr>
				<tr>
					<input id='update-type-id' type='hidden' name='update-type-id'>
					<input id='update-type-code' type='hidden' name='update-type-code'>
					<input id='update-type-name' type='hidden' name='update-type-name'>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select type='text' name='update-type-select' placeholder='Select...' disabled>
						</select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='update-name' class='form-control v-required' title="Please fill out this field" type='text' spellcheck="true"></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='update-shortname' class='form-control' type='text' spellcheck="true"></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Rate</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='update-rate' class='form-control decimal v-decimal v-required' title="Please fill out this field" type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Base</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='update-base' class='form-control decimal v-decimal v-required' title="Please fill out this field" type='text'></td>
				</tr>
			</table>
		</div>
		<input name='update-id' type='hidden'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
		</div>
	</form>
</div>
<div id='delete-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete Tax</h4>
	</div>
	<div class='col-md-12' style="padding: 0;">
		<form action="<?php echo base_url(); ?>company_settings/taxes/delete" method='post' class='body'>
			<div class='modal-body'>
				<table width='90%'>
					<tr>
						<input id='delete-type-id' type='hidden' name='delete-type-id'>
						<input id='delete-type-code' type='hidden' name='delete-type-code'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='delete-type' class='form-control' type='text' name='delete-type' placeholder='Select...' readonly readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
						<td colspan='3' style="padding-top: 5px;"><input id='delete-code' class='form-control no-space' type='text' name='delete-code' required readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>ATC</label></td>
						<td colspan='3' style="padding-top: 5px;"><input id='delete-code' class='form-control no-space' type='text' name='delete-atc' required readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 5px;'><input id='delete-name' class='form-control no-space' type='text' name='delete-name' required readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
						<td colspan='3' style='padding-top: 5px;'><input id='delete-shortname' class='form-control no-space' type='text' name='delete-shortname' required readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Rate</label></td>
						<td colspan='3' style='padding-top: 5px;'><input id='delete-rate' class='form-control decimal' type='text' name='delete-rate' required readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Base</label></td>
						<td colspan='3' style='padding-top: 5px;'><input id='delete-base' class='form-control decimal' type='text' name='delete-base' required readonly></td>
					</tr>
				</table>
			</div>
			<input id='delete-id' name='delete-id' type='hidden'>
			<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
				<button class='btn btn-danger btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>OK</button>
			</div>
		</form>
	</div>
</div>