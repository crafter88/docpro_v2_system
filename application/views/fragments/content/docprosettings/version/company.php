<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Companies</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 10px;'>
			<div class='hint--right' data-hint='Add'>
				<button id='add' type='button' class='btn btn-info btn-sm btn-raised ripple-effect'><i class='fa fa-plus'></i></button>
			</div>
			<div class='row'>
				<div class='col-md-12' id='company-table-row'>
					<table id='company-table' class='table table-hovered table-bordered' style='min-width: 1400px;'>
						<thead>
							<th>Opts.</th>
							<th>Seq.</th>
							<th>Code</th>
							<th>Name</th>
							<th>Address</th>
							<th>TIN</th>
							<th>Classification</th>
							<th>Type</th>
							<th>Tax</th>
							<th>Contact Number</th>
							<th>Email</th>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div id='cb-class-select' style='display: none;'>
	<?php foreach($bpc_class as $bpc){if($bpc->bpc_code != 61){?>
	<button class='btn btn-default select-option-class ripple-effect' class-id='<?php echo $bpc->bpc_id;?>' class-code='<?php echo $bpc->bpc_code;?>' type='button' style='width: 100%'><?php echo $bpc->bpc_class;?></button>
	<?php }if($bpc->bpc_code == 61){?>
	<button class='btn btn-default select-option-class-others ripple-effect' class-id='<?php echo $bpc->bpc_id;?>' class-code='<?php echo $bpc->bpc_code;?>' type='button' style='width: 100%'><?php echo $bpc->bpc_class;?></button>
	<?php }}?>
</div>
<div id='cb-type-select' style='display: none;'>
	<?php foreach($bpt_type as $bpt){?>
	<button class='btn btn-default select-option-type ripple-effect' type-id='<?php echo $bpt->bpt_id;?>'  type-code='<?php echo $bpt->bpt_code;?>' type='button' style='width: 100%'><?php echo $bpt->bpt_type;?></button>
	<?php }?>
</div>
<div id='cb-tax-type-select' style='display: none;'>
	<?php foreach($tt_name as $tt){if($tt->tt_code == 2 || $tt->tt_code == 8){?>
	<button class='btn btn-default select-option-tax-type ripple-effect' tax-type-id='<?php echo $tt->tt_id;?>' tax-type-code='<?php echo $tt->tt_code;?>' type='button' style='width: 100%'><?php echo $tt->tt_name;?></button>
	<?php }}?>
</div>
<div id='add-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Company</h4>
	</div>
	<div class='col-md-8'>
		<form action="<?php echo base_url(); ?>docpro_settings/company/add" method='post' class='body'>
			<div class='modal-body'>
				<table width='90%'>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Individual Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-ind-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-address'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-tin'></td>
					</tr>
					<tr>
						<input type='hidden' name='add-class-id'>
						<input type='hidden' name='add-class-code'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%;'>
								<input class='form-control' type='text' name='add-class' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon add-class-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<input type='hidden' name='add-type-id'>
						<input type='hidden' name='add-type-code'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input class='form-control' type='text' name='add-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon add-type-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<input type='hidden' name='add-tax-type-id'>
						<input type='hidden' name='add-tax-type-code'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Tax</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input class='form-control' type='text' name='add-tax-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon add-tax-type-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Contact Number</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-cno'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Email</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-email'></td>
					</tr>
				</table>
			</div>
			<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
				<button class='btn btn-info btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>Ok</button>
			</div>
		</form>
	</div>
	<div class='col-md-4' id='add-options' style='background-color: white; overflow-y: scroll;'>
	</div>
</div>
<div id='view-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Company</h4>
	</div>
	<div class='view-body'>
		<div class='modal-body'>
			<input id='view-seq' type='text' style='border: none; float: right; width: 46px; padding-top: 2px; font-weight: bold; background-color: white; margin-right: 23px; padding-left: 3px;' disabled>
			<label style='float: right;'>Sequence: </label>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-code' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-name' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-address' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-tin' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-class' class='form-control' type='text' placeholder='Select...' readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-type' class='form-control' type='text' placeholder='Select...' readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Tax</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-tax-type' class='form-control' type='text' placeholder='Select...' readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Contact Number</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-cno' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Email</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-email' class='form-control' type='text' readonly></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 795px;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='button' data-dismiss='modal' style='float: right;'>Close</button>
		</div>
	</div>
</div>
<div id='edit-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Company</h4>
	</div>
	<div class='col-md-8'>
		<form action="<?php echo base_url(); ?>docpro_settings/company/edit" method='post' class='body'>
			<div class='modal-body'>
				<input id='edit-seq' type='text' style='border: none; float: right; width: 46px; padding-top: 2px; font-weight: bold; background-color: white; margin-right: 23px; padding-left: 3px;' disabled>
				<label style='float: right;'>Sequence: </label>
				<table width='90%'>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='edit-name' class='form-control' type='text' name='edit-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Individual Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='edit-ind-name' class='form-control' type='text' name='edit-ind-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='edit-address' class='form-control' type='text' name='edit-address'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='edit-tin' class='form-control' type='text' name='edit-tin'></td>
					</tr>
					<tr>
						<input id='edit-class-id' type='hidden' name='edit-class-id'>
						<input id='edit-class-code' type='hidden' name='edit-class-code'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='edit-class' class='form-control' type='text' name='edit-class' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon edit-class-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<input id='edit-type-id' type='hidden' name='edit-type-id'>
						<input id='edit-type-code' type='hidden' name='edit-type-code'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='edit-type' class='form-control' type='text' name='edit-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon edit-type-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<input id='edit-tax-type-id' type='hidden' name='edit-tax-type-id'>
						<input id='edit-tax-type-code' type='hidden' name='edit-tax-type-code'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Tax</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='edit-tax-type' class='form-control' type='text' name='edit-tax-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon edit-tax-type-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Contact Number</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='edit-cno' class='form-control' type='text' name='edit-cno'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Email</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='edit-email' class='form-control' type='text' name='edit-email'></td>
					</tr>
				</table>
			</div>
			<input type='hidden' id='edit-id' name='edit-id'>
			<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
				<button class='btn btn-info btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>OK</button>
			</div>
		</form>
	</div>
	<div class='col-md-4' id='edit-options' style='background-color: white; overflow-y: scroll;'>
	</div>
</div>
<div id='update-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update Company</h4>
	</div>
	<div class='col-md-8'>
		<form action="<?php echo base_url(); ?>docpro_settings/company/update" method='post' class='body'>
			<div class='modal-body'>
				<input id='update-seq' type='text' style='border: none; float: right; width: 46px; padding-top: 2px; font-weight: bold; background-color: white; margin-right: 23px; padding-left: 3px;' disabled>
				<label style='float: right;'>Sequence: </label>
				<table width='90%'>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='update-name' class='form-control' type='text' name='update-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Individual Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='update-ind-name' class='form-control' type='text' name='update-ind-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='update-address' class='form-control' type='text' name='update-address'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='update-tin' class='form-control' type='text' name='update-tin'></td>
					</tr>
					<tr>
						<input id='update-class-id' type='hidden' name='update-class-id'>
						<input id='update-class-code' type='hidden' name='update-class-code'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='update-class' class='form-control' type='text' name='update-class' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon update-class-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<input id='update-type-id' type='hidden' name='update-type-id'>
						<input id='update-type-code' type='hidden' name='update-type-code'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='update-type' class='form-control' type='text' name='update-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon update-type-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<input id='update-tax-type-id' type='hidden' name='update-tax-type-id'>
						<input id='update-tax-type-code' type='hidden' name='update-tax-type-code'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Tax</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='update-tax-type' class='form-control' type='text' name='update-tax-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon update-tax-type-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Contact Number</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='update-cno' class='form-control' type='text' name='update-cno'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Email</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='update-email' class='form-control' type='text' name='update-email'></td>
					</tr>
				</table>
			</div>
			<input type='hidden' id='update-id' name='update-id'>
			<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
				<button class='btn btn-info btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>OK</button>
			</div>
		</form>
	</div>
	<div class='col-md-4' id='update-options' style='background-color: white;  overflow-y: scroll;'>
	</div>
</div>