<input id='mc_id' type="hidden" name="mc_id" value="<?php echo $user->main_company->cb_id; ?>">
<input id='bc_id' type="hidden" name="bc_id" value="<?php echo $user->cb_id; ?>">
<div class='side-body padding-top hide-table-setting'>
	<div class='card custom-card col-md-9 main-table-panel'>
		<div class='card-body hide-table-setting' style='padding: 0;'>
			<div id='custom-card-title' class='row' style="margin: 30px 0 0 0; text-align: center;">
				<div class='panel panel-default' style="border: none; border-bottom: 2px solid #000">
					<div class='panel-body'>
						<p style="font-size: 24px; margin: 0;">Business Partners</p>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-12'>
					<div class='col-md-12' id='business-partners-table-row' style="padding: 0;">
						<button id='add' type='button' class='btn btn-info btn-sm btn-raised ripple-effect' <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?>><i class='fa fa-plus'></i></button>
						<table id='business-partners-table' class='table table-hovered table-bordered' style='width: 100%'>
							<thead>
								<th></th>
								<th>Sequence</th>
								<th>Code</th>
								<th>Name</th>
								<th>Shortname</th>
								<th>Style</th>
								<th>Address</th>
								<th>TIN</th>
								<th>Particulars</th>
								<th>Class</th>
								<th>Type</th>
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
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Business Partner</h4>
	</div>
	<form action='<?php echo base_url(); ?>company_settings/business_partners/add' method='post' class='body'>
		<div class='modal-body' style="overflow-y: auto;">
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px; padding-left: 20px;'><label>Corporate or Individual Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='add-name'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Trade Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='add-trade-name'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='add-shortname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Style</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='add-style'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='add-address'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required v-format v-tin' f='^([0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4})$' title='TIN Format: xxx-xxx-xxx-xxxx' type='text' name='add-tin'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Particulars</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='add-particulars'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='add-class' name='add-class' class='v-select-required' title="Please fill out this field" placeholder='Select...'></select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'></td>
					<td colspan='3' style='padding-top: 5px;'>
						<input class='form-control' name='new-class' readonly></select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='add-type' name='add-type' class='v-select-required' title="Please fill out this field" placeholder='Select...'></select>
					</td>
				</tr>
			</table>
			<table width='100%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Value Added Tax'><label>VAT</label></td>
					<td style='padding-top: 5px;'>
						<select id='add-tax-1' name='add-tax-1[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-vat-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-vat-row-plate' width='100%'>
			</table>
			<table width='100%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Expanded Withholding Tax'><label>EWT</label></td>
					<td style='padding-top: 5px;'>
						<select id='add-tax-2' name='add-tax-2[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-ewt-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-ewt-row-plate' width='100%'>
			</table>
			<table width="100%">
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Final Withholding Tax'><label>FWT</label></td>
					<td style='padding-top: 5px;'>
						<select id='add-tax-3' name='add-tax-3[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-fwt-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-fwt-row-plate' width='100%'>
			</table>
		</div>
		<input type="hidden" name="bpc_code">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='view-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Business Partner</h4>
	</div>
	<div class='modal-body' style="overflow-y: auto;">
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
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px; padding-left: 20px;'><label>Corporate or Individual Name</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-name' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Trade Name</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-trade-name' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-shortname' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Style</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-style' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-address' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-tin' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Particulars</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-particulars' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Class</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-class' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-type' class='form-control' type='text' readonly>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>VAT</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-tax-1' class='form-control' type='text' readonly>
				</td>
			</tr>
		</table>
		<table class='add-vat-row-plate' width='100%'>
		</table>
		<table width="90%">
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>EWT</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-tax-2' class='form-control' type='text' readonly>
				</td>
			</tr>
		</table>
		<table class='add-ewt-row-plate' width='100%'>
		</table>
		<table width="90%">
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>FWT</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-tax-3' class='form-control' type='text' readonly>
				</td>
			</tr>
		</table>
		<table class='add-fwt-row-plate' width='100%'>
		</table>
	</div>
	<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
		<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='button' data-dismiss='modal' style='float: right;'>Close</button>
	</div>
</div>
<div id='edit-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Business Partner</h4>
	</div>
	<form action='<?php echo base_url(); ?>company_settings/business_partners/edit' method='post' class='body'>
		<div class='modal-body' style="overflow-y: auto;">
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='edit-seq' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required v-number' title="Please fill out this field" type='text' name='edit-code'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px; padding-left: 20px;'><label>Corporate or Individual Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='edit-name'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Trade Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='edit-trade-name'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='edit-shortname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Style</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='edit-style'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='edit-address'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required v-format v-tin' f='^([0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4})$' title='TIN Format: xxx-xxx-xxx-xxxx' type='text' name='edit-tin'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Particulars</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='edit-particulars'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='edit-class' name='edit-class' class='v-select-required' title="Please fill out this field" placeholder='Select...' required></select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'></td>
					<td colspan='3' style='padding-top: 5px;'>
						<input class='form-control' name='new-class' readonly></select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='edit-type' name='edit-type' class='v-select-required' title="Please fill out this field" placeholder='Select...' required></select>
					</td>
				</tr>
			</table>
			<table width='100%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Value Added Tax'><label>VAT</label></td>
					<td style='padding-top: 5px;'>
						<select id='edit-tax-1' name='add-tax-1[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-vat-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-vat-row-plate' width='100%'>
			</table>
			<table width='100%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Expanded Withholding Tax'><label>EWT</label></td>
					<td style='padding-top: 5px;'>
						<select id='edit-tax-2' name='add-tax-2[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-ewt-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-ewt-row-plate' width='100%'>
			</table>
			<table width="100%">
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Final Withholding Tax'><label>FWT</label></td>
					<td style='padding-top: 5px;'>
						<select id='edit-tax-3' name='add-tax-3[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-fwt-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-fwt-row-plate' width='100%'>
			</table>
		</div>
		<input type="hidden" name="bpc_code">
		<input type='hidden' name='edit-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
		</div>
	</form>
</div>
<div id='update-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update Business Partner</h4>
	</div>
	<form action='<?php echo base_url(); ?>company_settings/business_partners/update' method='post' class='body'>
		<div class='modal-body' style="overflow-y: auto;">
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='update-seq' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='update-code'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px; padding-left: 20px;'><label>Corporate or Individual Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='update-name'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Trade Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='update-trade-name'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='update-shortname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Style</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='update-style'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='update-address'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required v-format v-tin' f='^([0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4})$' title='TIN Format: xxx-xxx-xxx-xxxx' type='text' name='update-tin'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Particulars</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='update-particulars'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='update-class' name='update-class' class='v-select-required' title="Please fill out this field" placeholder='Select...' required></select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'></td>
					<td colspan='3' style='padding-top: 5px;'>
						<input class='form-control' name='new-class' readonly></select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='update-type' name='update-type' class="v-select-required" title="Please fill out this field" placeholder='Select...' required></select>
					</td>
				</tr>
			</table>
			<table width="100%">
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>VAT</label></td>
					<td style='padding-top: 5px;'>
						<select id='update-tax-1' name='add-tax-1[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-vat-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-vat-row-plate' width='100%'>
			</table>
			<table width="100%">
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>EWT</label></td>
					<td style='padding-top: 5px;'>
						<select id='update-tax-2' name='add-tax-2[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-ewt-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-ewt-row-plate' width='100%'>
			</table>
			<table width="100%">
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>FWT</label></td>
					<td style='padding-top: 5px;'>
						<select id='update-tax-3' name='add-tax-3[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-fwt-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-fwt-row-plate' width='100%'>
			</table>
		</div>
		<input type="hidden" name="bpc_code">
		<input type='hidden' name='update-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
		</div>
	</form>
</div>