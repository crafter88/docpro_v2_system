<div class='side-body padding-top hide-table-setting'>
	<div class='card custom-card col-md-9 main-table-panel'>
		<div class='card-body' style='padding: 0;'>
			<div id='custom-card-title' class='row' style="margin: 30px 0 0 0; text-align: center;">
				<div class='panel panel-default' style="border: none; border-bottom: 2px solid #000">
					<div class='panel-body'>
						<p style="font-size: 24px; margin: 0;">Chart of Accounts</p>
					</div>
				</div>
			</div>
			<?php 
				if(count($acc_elements) > 0){ ?>
					<div class='row'>
						<div class='col-md-12' id='banks-table-row'>
							<button id='add-coa' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add'><i class='fa fa-plus'></i></button>
							<table id='create-table' class='table table-bordered' style='min-width: 99.9%'>
								<thead>
									<th></th>
									<th>Element</th>
									<th>Classification</th>
									<th>Linet Item</th>
									<th>Subclassification</th>
									<th>Subsidiary</th>
									<th>Code</th>
									<th>Name</th>
									<th>BIR Classification</th>
								</thead>
							</table>
						</div>
					</div>
			<?php	
				}else{ ?>
					<div class='col-md-5 col-md-offset-3' style='margin-top: 20px; margin-bottom: 20px; border: 1px solid #e5e5e5; padding: 20px; text-align: center;'>
						<p>
							<i class='fa fa-warning' style='font-size: 30px; color: #000;'></i>
						</p>
						<label>Please setup the levels of your chart of accounts</label>
						<p>
							<a href='<?php echo base_url(); ?>docpro_setup/chart_of_accounts' style='text-decoration: underline;'>Setup my chart of account levels</a>
						</p>
					</div>
			<?php	
				}
			?>
			
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

<!-- NEW MODALS -->
<div id='add-coa-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add COA</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_settings/chart_of_accounts/coa_add" method="post">
		<div class='modal-body'>
			<div style="padding-bottom: 5px;">
				<table width='90%'>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="add-element-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;">
						</td>
						<td style='padding-top: 5px;'>
							<select id='add-element' name='add-element' class="demo-default v-select-required" title="Please fill out this field" placeholder="Select..." style="z-index: 9999999999;">
							</select>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="add-classification-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;">
						</td>
						<td style='padding-top: 5px;'>
							<select id='add-classification' name='add-classification' class="demo-default v-select-required" title="Please fill out this field" placeholder="Select..." style="z-index: 9999999999;">
							</select>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="add-line-item-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;">
						</td>
						<td style='padding-top: 5px;'>
							<select id='add-line-item' name='add-line-item' class="demo-default v-select-required" title="Please fill out this field" placeholder="Select..." style="z-index: 9999999999;">
							</select>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Subclassification</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="add-subclassification-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;">
						</td>
						<td style='padding-top: 5px;'>
							<select id='add-subclassification' name='add-subclassification' class="demo-default v-select-required" title="Please fill out this field" placeholder="Select..." style="z-index: 9999999999;">
							</select>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Subsidiary Name</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="add-lvl-5-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;">
						</td>
						<td colspan='2' style="padding-top: 5px;"><input name='add-name' class='form-control v-required' title="Please fill out this field" type='text'>
						</td>
					</tr>
					<!-- <tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 6</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="add-lvl-6-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;" required>
						</td>
						<td colspan='2' style="padding-top: 5px;"><input name='add-name' class='form-control no-space' type='text' required>
						</td>
					</tr> -->
				</table>
			</div>
			<div style="padding-top: 10px; padding-bottom: 10px; background-color: #F3F3F3; border-top: 1px solid #C1C1C1;">
				<table width="90%">
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
						<td colspan='2' style="padding-top: 5px;"><input name='add-code' class='form-control no-space' type='text' readonly>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='2' style="padding-top: 5px;"><input name='add-name-display' class='form-control no-space' type='text' readonly>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR</label></td>
						<td colspan='2' style="padding-top: 5px;"><input name='add-bir' class='form-control no-space' type='text' readonly>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
		</div>
	</form>
</div>

<div id='view-coa-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View COA</h4>
	</div>
	<div class='modal-body'>
		<div style="padding-bottom: 5px;">
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
					<td style="padding-top: 5px; width: 50px;">
						<input type="text" name="view-element-code" class='form-control no-space' placeholder="code" style="text-align: center; height: 34px;" readonly>
					</td>
					<td style='padding-top: 5px;'>
						<input name='view-element' class="form-control" readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td style="padding-top: 5px; width: 50px;">
						<input type="text" name="view-classification-code" class='form-control no-space' placeholder="code" style="text-align: center; height: 34px;" readonly>
					</td>
					<td style='padding-top: 5px;'>
						<input name='view-classification' class="form-control" readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
					<td style="padding-top: 5px; width: 50px;">
						<input type="text" name="view-line-item-code" class='form-control no-space' placeholder="code" style="text-align: center; height: 34px;" readonly>
					</td>
					<td style='padding-top: 5px;'>
						<input name='view-line-item' class="form-control" readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Subclassification</label></td>
					<td style="padding-top: 5px; width: 50px;">
						<input type="text" name="view-subclassification-code" class='form-control no-space' placeholder="code" style="text-align: center; height: 34px;" readonly>
					</td>
					<td style='padding-top: 5px;'>
						<input name='view-subclassification' class="form-control" readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Subsidiary Name</label></td>
					<td style="padding-top: 5px; width: 50px;">
						<input type="text" name="view-lvl-5-code" class='form-control no-space' placeholder="code" style="text-align: center; height: 34px;" readonly>
					</td>
					<td style='padding-top: 5px;'>
						<input name='view-coa-lvl-5' class="form-control" readonly>
					</td>
				</tr>
			</table>
		</div>
		<div style="padding-bottom: 10px; padding-top: 10px; background-color: #F3F3F3; border-top: 1px solid #C1C1C1;">
			<table width="90%">
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='2' style="padding-top: 5px;"><input name='view-code' class='form-control no-space' type='text' readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='2' style="padding-top: 5px;"><input name='view-name-display' class='form-control no-space' type='text' readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR</label></td>
					<td colspan='2' style="padding-top: 5px;"><input name='view-bir' class='form-control no-space' type='text' readonly>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
		<button class='btn btn-info btn-sm btn-raised ripple-effect close-popover' type='button' style='float: right;'>Ok</button>
	</div>
</div>

<div id='edit-coa-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit COA</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_settings/chart_of_accounts/coa_edit" method="post">
		<div class='modal-body'>
			<div style="padding-bottom: 5px;">
				<table width='90%'>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="edit-element-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;">
						</td>
						<td style='padding-top: 5px;'>
							<select id='edit-element' name='edit-element' class="demo-default v-select-required" title="Please fill out field" placeholder="Select..." style="z-index: 9999999999;">
							</select>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="edit-classification-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;">
						</td>
						<td style='padding-top: 5px;'>
							<select id='edit-classification' name='edit-classification' class="demo-default v-select-required" title="Please fill out this field" placeholder="Select..." style="z-index: 9999999999;">
							</select>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="edit-line-item-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;">
						</td>
						<td style='padding-top: 5px;'>
							<select id='edit-line-item' name='edit-line-item' class="demo-default v-select-required" title="Please fill out this field" placeholder="Select..." style="z-index: 9999999999;">
							</select>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Subclassification</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="edit-subclassification-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;">
						</td>
						<td style='padding-top: 5px;'>
							<select id='edit-subclassification' name='edit-subclassification' class="demo-default v-select-required" title="Please fill out this field" placeholder="Select..." style="z-index: 9999999999;">
							</select>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 5</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="edit-lvl-5-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;">
						</td>
						<td colspan='2' style="padding-top: 5px;"><input name='edit-name' class='form-control v-required' title="Please fill out this field" type='text'>
						</td>
					</tr>
				</table>
			</div>
			<div style="padding-bottom: 5px; background-color: #F3F3F3; border-top: 1px solid #C1C1C1;">
				<table width="90%">
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
						<td colspan='2' style="padding-top: 5px;"><input name='edit-code' class='form-control no-space' type='text' readonly>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='2' style="padding-top: 5px;"><input name='edit-name-display' class='form-control no-space' type='text' readonly>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR</label></td>
						<td colspan='2' style="padding-top: 5px;"><input name='edit-bir' class='form-control no-space' type='text' readonly>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<input type="hidden" name="edit-coa-lvl-5">
		<input type="hidden" name="o_lvl5_id">
		<input type="hidden" name="o_lvl4_id">
		<input type="hidden" name="o_coa_name">
		<input type="hidden" name="edit-id">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='delete-coa-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete COA</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_settings/chart_of_accounts/coa_delete" method="post">
		<div class='modal-body'>
			<div style="padding-bottom: 5px;">
				<table width='90%'>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="delete-element-code" class='form-control no-space' placeholder="code" style="text-align: center; height: 34px;" readonly>
						</td>
						<td style='padding-top: 5px;'>
							<input name='delete-element' class="form-control" readonly>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="delete-classification-code" class='form-control no-space' placeholder="code" style="text-align: center; height: 34px;" readonly>
						</td>
						<td style='padding-top: 5px;'>
							<input name='delete-classification' class="form-control" readonly>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="delete-line-item-code" class='form-control no-space' placeholder="code" style="text-align: center; height: 34px;" readonly>
						</td>
						<td style='padding-top: 5px;'>
							<input name='delete-line-item' class="form-control" readonly>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Subclassification</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="delete-subclassification-code" class='form-control no-space' placeholder="code" style="text-align: center; height: 34px;" readonly>
						</td>
						<td style='padding-top: 5px;'>
							<input name='delete-subclassification' class="form-control" readonly>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 5</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="delete-lvl-5-code" class='form-control no-space' placeholder="code" style="text-align: center; height: 34px;" readonly>
						</td>
						<td colspan='2' style="padding-top: 5px;"><input name='delete-name' class='form-control' type='text' readonly>
						</td>
					</tr>
				</table>
			</div>
			<div style="padding-bottom: 10px; padding-top: 10px; background-color: #F3F3F3; border-top: 1px solid #C1C1C1;">
				<table width="90%">
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
						<td colspan='2' style="padding-top: 5px;"><input name='delete-code' class='form-control no-space' type='text' readonly>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='2' style="padding-top: 5px;"><input name='delete-name-display' class='form-control no-space' type='text' readonly>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR</label></td>
						<td colspan='2' style="padding-top: 5px;"><input name='delete-bir' class='form-control no-space' type='text' readonly>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<input type="hidden" name="o_lvl5_id">
		<input type="hidden" name="delete-id">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button class='btn btn-danger btn-sm btn-raised ripple-effect close-popover' type='submit' style='float: right;'>Ok</button>
		</div>
	</form>
</div>