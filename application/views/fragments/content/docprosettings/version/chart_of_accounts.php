<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Chart of Accounts</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 10px;'>
			<input type="hidden" id='seq-active' name="seq-active" value='<?php echo $seq_active; ?>'>
			<div class='row'>
				<div class='col-md-12' id='chart-of-accounts-table-row'>
					<div class='row'>
						<div id='setup-tab-1' class='setup-tab btn-seq-wrapper <?php if($seq_active === '1') echo 'active'; ?>'>
							<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq seq-selected set-1'>
								<span>Account Elements</span>
							</button>
						</div>
						<div id='setup-tab-2' class='setup-tab btn-seq-wrapper <?php if($seq_active === '2') echo 'active'; ?>'>
							<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-2'>
								<span>Account Classification</span>
							</button>
						</div>
						<div id='setup-tab-3' class='setup-tab btn-seq-wrapper <?php if($seq_active === '3') echo 'active'; ?>'>
							<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-3'>
								<span>Line Items</span>
							</button>
						</div>
						<div id='setup-tab-4' class='setup-tab btn-seq-wrapper <?php if($seq_active === '4') echo 'active'; ?>'>
							<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-4'>
								<span>Account Subclassification</span>
							</button>
						</div>
						<div id='setup-tab-5' class='setup-tab btn-seq-wrapper <?php if($seq_active === '5') echo 'active'; ?>'>
							<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-5'>
								<span>BIR</span>
							</button>
						</div>
						<div id='setup-tab-6' class='setup-tab btn-seq-wrapper <?php if($seq_active === '6') echo 'active'; ?>'>
							<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-6'>
								<span>Chart of Accounts</span>
							</button>
						</div>
					</div>
					<div class='row'>
						<div id='coa-seq'>
							<ul class='seq-canvas'>
								<li class="<?php if($seq_active === '1') echo $seq_active; ?>">
									<!-- <button id='add-acc-elements' class='btn btn-info btn-sm btn-raised ripple-effect'><i class='fa fa-plus'></i></button> -->
									<table id='account-elements' class='table table-bordered' width="100%">
										<thead>
											<th>Option</th>
											<th>Code</th>
											<th>Account Element</th>
										</thead>
									</table>
									<button type="button" class='btn btn-default ripple-effect set-2' style="float: right; margin-right: 1.5%;">NEXT</button>
								</li>
								<li class="<?php if($seq_active === '2') echo $seq_active; ?>">
									<!-- <button id='add-acc-classification' class='btn btn-info btn-sm btn-raised ripple-effect'><i class='fa fa-plus'></i></button> -->
									<table id='account-classification' class='table table-bordered'>
										<thead>
											<th>Option</th>
											<th>Code</th>
											<th>Account Classification</th>
										</thead>
									</table>
									<button type="button" class='btn btn-default ripple-effect set-1' style="float: left; margin-left: 1.5%;">PREV</button>
									<button type="button" class='btn btn-default ripple-effect set-3' style="float: right; margin-right: 1.5%;">NEXT</button>
								</li>
								<li class="<?php if($seq_active === '3') echo 'seq-in'; ?>">
									<!-- <button id='add-line-items' class='btn btn-info btn-sm btn-raised ripple-effect'><i class='fa fa-plus'></i></button> -->
									<table id='line-items' class='table table-bordered'>
										<thead>
											<th>Option</th>
											<th>Code</th>
											<th>Line Items</th>
										</thead>
									</table>
									<button type="button" class='btn btn-default ripple-effect set-2' style="float: left; margin-left: 1.5%;">PREV</button>
									<button type="button" class='btn btn-default ripple-effect set-4' style="float: right; margin-right: 1.5%;">NEXT</button>
								</li>
								<li class="<?php if($seq_active === '4') echo 'seq-in'; ?>">
									<!-- <button id='add-acc-sub' class='btn btn-info btn-sm btn-raised ripple-effect'><i class='fa fa-plus'></i></button> -->
									<table id='account-subclassification' class='table table-bordered'>
										<thead>
											<th>Option</th>
											<th>Code</th>
											<th>Account Subclassification</th>
										</thead>
									</table>
									<button type="button" class='btn btn-default ripple-effect set-3' style="float: left; margin-left: 1.5%;">PREV</button>
									<button type="button" class='btn btn-default ripple-effect set-5' style="float: right; margin-right: 1.5%;">NEXT</button>
								</li>
								<li class="<?php if($seq_active === '5') echo 'seq-in'; ?>">
									<!-- <button id='add-bir' class='btn btn-info btn-sm btn-raised ripple-effect'><i class='fa fa-plus'></i></button> -->
									<table id='bir-classification' class='table table-bordered'>
										<thead>
											<th>Option</th>
											<th>Code</th>
											<th>BIR Classification</th>
										</thead>
									</table>
									<button type="button" class='btn btn-default ripple-effect set-4' style="float: left; margin-left: 1.5%;">PREV</button>
									<button type="button" class='btn btn-default ripple-effect set-6' style="float: right; margin-right: 1.5%;">NEXT</button>
								</li>
								<li class="<?php if($seq_active === '6') echo 'seq-in'; ?>">
									<!-- <button id='add-coa' class='btn btn-info btn-sm btn-raised ripple-effect'><i class='fa fa-plus'></i></button> -->
									<table id='coa' class='table table-bordered'>
										<thead>
											<th>Option</th>
											<th>Code</th>
											<th>Name</th>
											<th>BIR Classification</th>
										</thead>
									</table>
									<button type="button" class='btn btn-default ripple-effect set-5' style="float: left; margin-left: 1.5%;">PREV</button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ACCOUNT ELEMENTS -->
<div id='add-acc-elements-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Account Element</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/acc_elements_add" method="post">
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-elements-add-name' name='acc-elements-add-name' class='form-control' type='text'>
					</td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='view-acc-elements-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Account Element</h4>
	</div>
	<div class='modal-body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='3' style='padding-top: 10px;'><input id='acc-elements-view-code' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
				<td colspan='3' style='padding-top: 10px;'><input id='acc-elements-view-name' class='form-control' type='text' readonly>
				</td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
		<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='button' data-dismiss='modal' style='float: right;'>Close</button>
	</div>
</div>
<div id='edit-acc-elements-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Account Element</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/acc_elements_edit" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-elements-edit-code' name='acc-elements-edit-code' class='form-control number' type='text'></td>
				</tr>
					<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-elements-edit-name' name='acc-elements-edit-name' class='form-control' type='text'>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="acc-elements-edit-id" id='acc-elements-edit-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='update-acc-elements-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update Account Element</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/acc_elements_update" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-elements-update-code' name='acc-elements-update-code' class='form-control' type='text'>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-elements-update-name' name='acc-elements-update-name' class='form-control' type='text'>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="acc-elements-update-id" id='acc-elements-update-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='delete-acc-elements-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete Account Element</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/acc_elements_delete" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-elements-delete-code' name='acc-elements-delete-code' class='form-control' type='text' readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-elements-delete-name' name='acc-elements-delete-name' class='form-control' type='text' readonly>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="acc-elements-delete-id" id='acc-elements-delete-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-danger btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>

<!-- ACCOUNT CLASSIFICATION -->
<div id='add-acc-classification-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Account Classification</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/acc_classification_add" method="post">
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-classification-add-name' name='acc-classification-add-name' class='form-control' type='text'>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
					<td colspan='3' style='padding-top: 10px;'>
						<select id="acc-classification-add-elements" name='acc-classification-add-elements' class="demo-default" placeholder="Select..." style="z-index: 9999999999;">
							<option value="">Select...</option>
							<?php foreach ($acc_elements as $key => $value) { ?>
								<option value="<?php echo $value->lvl_1_id; ?>"><?php echo $value->lvl_1_name; ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='view-acc-classification-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Account Classification</h4>
	</div>
	<div class='modal-body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='3' style='padding-top: 10px;'><input id='acc-classification-view-code' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
				<td colspan='3' style='padding-top: 10px;'><input id='acc-classification-view-name' class='form-control' type='text' readonly>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
				<td colspan='3' style='padding-top: 10px;'>
					<select id="acc-classification-view-elements" class="demo-default" placeholder="Select..." style="z-index: 9999999999;" disabled>
						<option value="">Select...</option>
						<?php foreach ($acc_elements as $key => $value) { ?>
							<option value="<?php echo $value->lvl_1_id; ?>"><?php echo $value->lvl_1_name; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
		<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='button' data-dismiss='modal' style='float: right;'>Close</button>
	</div>
</div>
<div id='edit-acc-classification-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Account Classification</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/acc_classification_edit" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-classification-edit-code' name='acc-classification-edit-code' class='form-control' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-classification-edit-name' name='acc-classification-edit-name' class='form-control' type='text'>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
					<td colspan='3' style='padding-top: 10px;'>
						<select id="acc-classification-edit-elements" name='acc-classification-edit-elements' class="demo-default" placeholder="Select..." style="z-index: 9999999999;">
							<option value="">Select...</option>
							<?php foreach ($acc_elements as $key => $value) { ?>
								<option value="<?php echo $value->lvl_1_id; ?>"><?php echo $value->lvl_1_name; ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="acc-classification-edit-id" id='acc-classification-edit-id'>
		<input type="hidden" name="acc-classification-edit-join-id" id='acc-classification-edit-join-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='update-acc-classification-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update Account Classification</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/acc_classification_update" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 10px;'><input type='text' id='acc-classification-update-code' name='acc-classification-update-code' class='form-control'></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-classification-update-name' name='acc-classification-update-name' class='form-control' type='text'>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
					<td colspan='3' style='padding-top: 10px;'>
						<select id="acc-classification-update-elements" name='acc-classification-update-elements' class="demo-default" placeholder="Select..." style="z-index: 9999999999;">
							<option value="">Select...</option>
							<?php foreach ($acc_elements as $key => $value) { ?>
								<option value="<?php echo $value->lvl_1_id; ?>"><?php echo $value->lvl_1_name; ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="acc-classification-update-id" id='acc-classification-update-id'>
		<input type="hidden" name="acc-classification-update-join-id" id='acc-classification-update-join-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='delete-acc-classification-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete Account Classification</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/acc_classification_delete" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 10px;'><input type='text' id='acc-classification-delete-code' name='acc-classification-delete-code' class='form-control' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-classification-delete-name' name='acc-classification-delete-name' class='form-control' type='text' readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
					<td colspan='3' style='padding-top: 10px;'>
						<select id="acc-classification-delete-elements" name='acc-classification-delete-elements' class="demo-default" placeholder="Select..." style="z-index: 9999999999;" disabled>
							<option value="">Select...</option>
							<?php foreach ($acc_elements as $key => $value) { ?>
								<option value="<?php echo $value->lvl_1_id; ?>"><?php echo $value->lvl_1_name; ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="acc-classification-delete-id" id='acc-classification-delete-id'>
		<input type="hidden" name="acc-classification-delete-join-id" id='acc-classification-delete-join-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-danger btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>

<!-- LINE ITEMS -->
<div id='add-line-items-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Line Item</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/line_items_add" method="post">
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='line-items-add-name' name='line-items-add-name' class='form-control' type='text'>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td colspan='3' style='padding-top: 10px;'>
						<select id="line-items-add-classfication" name='line-items-add-classification' class="demo-default" placeholder="Select..." style="z-index: 9999999999;">
							<option value="">Select...</option>
							<?php foreach ($acc_classification as $key => $value) { ?>
								<option value="<?php echo $value->lvl_2_id; ?>"><?php echo $value->lvl_2_name; ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='view-line-items-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Line Item</h4>
	</div>
	<div class='modal-body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='3' style='padding-top: 10px;'><input id='line-items-view-code' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
				<td colspan='3' style='padding-top: 10px;'><input id='line-items-view-name' class='form-control' type='text' readonly>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
				<td colspan='3' style='padding-top: 10px;'>
					<select id="line-items-view-classfication" class="demo-default" placeholder="Select..." style="z-index: 9999999999;" disabled>
						<option value="">Select...</option>
						<?php foreach ($acc_classification as $key => $value) { ?>
							<option value="<?php echo $value->lvl_2_id; ?>"><?php echo $value->lvl_2_name; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
		<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='button' data-dismiss='modal' style='float: right;'>Close</button>
	</div>
</div>
<div id='edit-line-items-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Line Item</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/line_items_edit" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='line-items-edit-code' name='line-items-edit-code' class='form-control' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='line-items-edit-name' name='line-items-edit-name' class='form-control' type='text'>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td colspan='3' style='padding-top: 10px;'>
						<select id="line-items-edit-classfication" name='line-items-edit-classification' class="demo-default" placeholder="Select..." style="z-index: 9999999999;">
							<option value="">Select...</option>
							<?php foreach ($acc_classification as $key => $value) { ?>
								<option value="<?php echo $value->lvl_2_id; ?>"><?php echo $value->lvl_2_name; ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="line-items-edit-id" id='line-items-edit-id'>
		<input type="hidden" name="line-items-edit-join-id" id='line-items-edit-join-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='update-line-items-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update Line Item</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/line_items_update" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='line-items-update-code' name='line-items-update-code' class='form-control' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='line-items-update-name' name='line-items-update-name' class='form-control' type='text'>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td colspan='3' style='padding-top: 10px;'>
						<select id="line-items-update-classfication" name='line-items-update-classification' class="demo-default" placeholder="Select..." style="z-index: 9999999999;">
							<option value="">Select...</option>
							<?php foreach ($acc_classification as $key => $value) { ?>
								<option value="<?php echo $value->lvl_2_id; ?>"><?php echo $value->lvl_2_name; ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="line-items-update-id" id='line-items-update-id'>
		<input type="hidden" name="line-items-update-join-id" id='line-items-update-join-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='delete-line-items-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete Line Item</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/line_items_delete" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='line-items-delete-code' name='line-items-delete-code' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='line-items-delete-name' name='line-items-delete-name' class='form-control' type='text' readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td colspan='3' style='padding-top: 10px;'>
						<select id="line-items-delete-classfication" name='line-items-delete-classification' class="demo-default" placeholder="Select..." style="z-index: 9999999999;" disabled>
							<option value="">Select...</option>
							<?php foreach ($acc_classification as $key => $value) { ?>
								<option value="<?php echo $value->lvl_2_id; ?>"><?php echo $value->lvl_2_name; ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="line-items-delete-id" id='line-items-delete-id'>
		<input type="hidden" name="line-items-delete-join-id" id='line-items-delete-join-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-danger btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>

<!-- ACCOUNT SUBCLASSIFICATION -->
<div id='add-acc-sub-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Account Subclassification</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/acc_sub_add" method="post">
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Subclassification</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-sub-add-name' name='acc-sub-add-name' class='form-control' type='text'>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
					<td colspan='3' style='padding-top: 10px;'>
						<select id="acc-sub-add-line-item" name='acc-sub-add-line-item' class="demo-default" placeholder="Select..." style="z-index: 9999999999;">
							<option value="">Select...</option>
							<?php foreach ($line_items as $key => $value) { ?>
								<option value="<?php echo $value->lvl_3_id; ?>"><?php echo $value->lvl_3_name; ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='view-acc-sub-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Account Subclassification</h4>
	</div>
	<div class='modal-body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='3' style='padding-top: 10px;'><input id='acc-sub-view-code' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Subclassification</label></td>
				<td colspan='3' style='padding-top: 10px;'><input id='acc-sub-view-name' class='form-control' type='text' readonly>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
				<td colspan='3' style='padding-top: 10px;'>
					<select id="acc-sub-view-line-item" class="demo-default" placeholder="Select..." style="z-index: 9999999999;" disabled>
						<option value="">Select...</option>
						<?php foreach ($line_items as $key => $value) { ?>
							<option value="<?php echo $value->lvl_3_id; ?>"><?php echo $value->lvl_3_name; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
		<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='button' data-dismiss='modal' style='float: right;'>Close</button>
	</div>
</div>
<div id='edit-acc-sub-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Account Subclassification</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/acc_sub_edit" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-sub-edit-code' name='acc-sub-edit-code' class='form-control' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Subclassification</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-sub-edit-name' name='acc-sub-edit-name' class='form-control' type='text'>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
					<td colspan='3' style='padding-top: 10px;'>
						<select id="acc-sub-edit-line-item" name='acc-sub-edit-line-item' class="demo-default" placeholder="Select..." style="z-index: 9999999999;">
							<option value="">Select...</option>
							<?php foreach ($line_items as $key => $value) { ?>
								<option value="<?php echo $value->lvl_3_id; ?>"><?php echo $value->lvl_3_name; ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="acc-sub-edit-id" id='acc-sub-edit-id'>
		<input type="hidden" name="acc-sub-edit-join-id" id='acc-sub-edit-join-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='update-acc-sub-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update Account Subclassification</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/acc_sub_update" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-sub-update-code' name='acc-sub-update-code' class='form-control' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Subclassification</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-sub-update-name' name='acc-sub-update-name' class='form-control' type='text'>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
					<td colspan='3' style='padding-top: 10px;'>
						<select id="acc-sub-update-line-item" name='acc-sub-update-line-item' class="demo-default" placeholder="Select..." style="z-index: 9999999999;">
							<option value="">Select...</option>
							<?php foreach ($line_items as $key => $value) { ?>
								<option value="<?php echo $value->lvl_3_id; ?>"><?php echo $value->lvl_3_name; ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="acc-sub-update-id" id='acc-sub-update-id'>
		<input type="hidden" name="acc-sub-update-join-id" id='acc-sub-update-join-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='delete-acc-sub-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete Account Subclassification</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/acc_sub_delete" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-sub-delete-code' name='acc-sub-delete-code' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Subclassification</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='acc-sub-delete-name' name='acc-sub-delete-name' class='form-control' type='text' readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
					<td colspan='3' style='padding-top: 10px;'>
						<select id="acc-sub-delete-line-item" name='acc-sub-delete-line-item' class="demo-default" placeholder="Select..." style="z-index: 9999999999;" disabled>
							<option value="">Select...</option>
							<?php foreach ($line_items as $key => $value) { ?>
								<option value="<?php echo $value->lvl_3_id; ?>"><?php echo $value->lvl_3_name; ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="acc-sub-delete-id" id='acc-sub-delete-id'>
		<input type="hidden" name="acc-sub-delete-join-id" id='acc-sub-delete-join-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-danger btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>

<!-- BIR CLASSIFICATION -->
<div id='add-bir-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add BIR Classification</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/bir_add" method="post">
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='bir-add-code' name='bir-add-code' class='form-control number' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR Classification</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='bir-add-name' name='bir-add-name' class='form-control' type='text'>
					</td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='view-bir-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View BIR Classification</h4>
	</div>
	<div class='modal-body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='3' style='padding-top: 10px;'><input id='bir-view-code' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR Classification</label></td>
				<td colspan='3' style='padding-top: 10px;'><input id='bir-view-name' class='form-control' type='text' readonly>
				</td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
		<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='button' data-dismiss='modal' style='float: right;'>Close</button>
	</div>
</div>
<div id='edit-bir-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit BIR Classification</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/bir_edit" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='bir-edit-code' name='bir-edit-code' class='form-control' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR Classification</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='bir-edit-name' name='bir-edit-name' class='form-control' type='text'>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="bir-edit-id" id='bir-edit-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='update-bir-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update BIR Classification</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/bir_update" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='bir-update-code' name='bir-update-code' class='form-control' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR Classification</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='bir-update-name' name='bir-update-name' class='form-control' type='text'>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="bir-update-id" id='bir-update-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='delete-bir-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete BIR Classification</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/bir_delete" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='bir-delete-code' name='bir-delete-code' class='form-control' type='text' disabled></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR Classification</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='bir-delete-name' name='bir-delete-name' class='form-control' type='text' disabled>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="bir-delete-id" id='bir-delete-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-danger btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>

<!-- CHART OF ACCOUNTS -->
<div id='add-coa-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add COA</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/coa_add" method="post">
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='coa-add-name' name='coa-add-name' class='form-control' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Account Subclassification</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='coa-add-acc-sub' name='coa-add-acc-sub' class='form-control'>
							<option value="">Select...</option>
							<?php
								foreach ($acc_sub as $key => $value) { ?>
								 	<option id="coa_add_acc_sub_<?php echo $value->lvl_4_id; ?>" lvl1="<?php echo $value->lvl_1_id; ?>" lvl2="<?php echo $value->lvl_2_id; ?>" lvl3="<?php echo $value->lvl_3_id; ?>" lvl4="<?php echo $value->lvl_4_id; ?>" final-code="<?php echo $value->lvl_1_code.''.$value->lvl_2_code.''.$value->lvl_3_code.''.$value->lvl_4_code; ?>" value="<?php echo $value->lvl_4_id; ?>"><?php echo $value->lvl_4_name; ?></option>
								<?php } 
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 0px;'><input id='coa-add-code' name='coa-add-code' class='form-control' type='text' readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR Classification</label></td>
					<td colspan='3' style='padding-top: 10px;'>
						<select id='coa-add-bir' name='coa-add-bir' class='form-control'>
							<option value="">Select...</option>
							<?php
								foreach ($bir as $key => $value) { ?>
								 	<option value="<?php echo $value->bir_id; ?>"><?php echo $value->bir_classification; ?></option>
								<?php } 
							?>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" id='coa-add-lvl-1' name="coa-add-lvl-1">
		<input type="hidden" id='coa-add-lvl-2' name="coa-add-lvl-2">
		<input type="hidden" id='coa-add-lvl-3' name="coa-add-lvl-3">
		<input type="hidden" id='coa-add-lvl-4' name="coa-add-lvl-4">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='view-coa-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View COA</h4>
	</div>
	<div class='modal-body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='3' style='padding-top: 10px;'><input id='coa-view-name' name='coa-view-name' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Account Subclassification</label></td>
				<td colspan='3' style='padding-top: 5px;'>
					<select id='coa-view-acc-sub' name='coa-view-acc-sub' class='form-control' disabled>
						<option value="">Select...</option>
						<?php
							foreach ($acc_sub as $key => $value) { ?>
							 	<option id="acc_sub_<?php echo $value->lvl_4_id; ?>" lvl1="<?php echo $value->lvl_1_id; ?>" lvl2="<?php echo $value->lvl_2_id; ?>" lvl3="<?php echo $value->lvl_3_id; ?>" lvl4="<?php echo $value->lvl_4_id; ?>" final-code="<?php echo $value->lvl_1_code.''.$value->lvl_2_code.''.$value->lvl_3_code.''.$value->lvl_4_code; ?>" value="<?php echo $value->lvl_4_id; ?>"><?php echo $value->lvl_4_name; ?></option>
							<?php } 
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='3' style='padding-top: 0px;'><input id='coa-view-code' name='coa-view-code' class='form-control' type='text' readonly>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR Classification</label></td>
				<td colspan='3' style='padding-top: 10px;'>
					<select id='coa-view-bir' name='coa-view-bir' class='form-control' disabled>
						<option value="">Select...</option>
						<?php
							foreach ($bir as $key => $value) { ?>
							 	<option value="<?php echo $value->bir_id; ?>"><?php echo $value->bir_classification; ?></option>
							<?php } 
						?>
					</select>
				</td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
		<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect close-popover' type='button' data-dismiss='modal' style='float: right;'>Close</button>
	</div>
</div>
<div id='edit-coa-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit COA</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/coa_edit" method="post">
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='coa-edit-name' name='coa-edit-name' class='form-control' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Account Subclassification</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='coa-edit-acc-sub' name='coa-edit-acc-sub' class='form-control'>
							<option value="">Select...</option>
							<?php
								foreach ($acc_sub as $key => $value) { ?>
								 	<option id="coa_edit_acc_sub_<?php echo $value->lvl_4_id; ?>" lvl1="<?php echo $value->lvl_1_id; ?>" lvl2="<?php echo $value->lvl_2_id; ?>" lvl3="<?php echo $value->lvl_3_id; ?>" lvl4="<?php echo $value->lvl_4_id; ?>" final-code="<?php echo $value->lvl_1_code.''.$value->lvl_2_code.''.$value->lvl_3_code.''.$value->lvl_4_code; ?>" value="<?php echo $value->lvl_4_id; ?>"><?php echo $value->lvl_4_name; ?></option>
								<?php } 
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 0px;'><input id='coa-edit-code' name='coa-edit-code' class='form-control' type='text' readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR Classification</label></td>
					<td colspan='3' style='padding-top: 10px;'>
						<select id='coa-edit-bir' name='coa-edit-bir' class='form-control'>
							<option value="">Select...</option>
							<?php
								foreach ($bir as $key => $value) { ?>
								 	<option value="<?php echo $value->bir_id; ?>"><?php echo $value->bir_classification; ?></option>
								<?php } 
							?>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" id='coa-edit-lvl-1' name="coa-edit-lvl-1">
		<input type="hidden" id='coa-edit-lvl-2' name="coa-edit-lvl-2">
		<input type="hidden" id='coa-edit-lvl-3' name="coa-edit-lvl-3">
		<input type="hidden" id='coa-edit-lvl-4' name="coa-edit-lvl-4">
		<input type="hidden" id='coa-edit-id' name="coa-edit-id">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='update-coa-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update COA</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/coa_update" method="post">
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='coa-update-name' name='coa-update-name' class='form-control' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Account Subclassification</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='coa-update-acc-sub' name='coa-update-acc-sub' class='form-control'>
							<option value="">Select...</option>
							<?php
								foreach ($acc_sub as $key => $value) { ?>
								 	<option id="coa_update_acc_sub_<?php echo $value->lvl_4_id; ?>" lvl1="<?php echo $value->lvl_1_id; ?>" lvl2="<?php echo $value->lvl_2_id; ?>" lvl3="<?php echo $value->lvl_3_id; ?>" lvl4="<?php echo $value->lvl_4_id; ?>" final-code="<?php echo $value->lvl_1_code.''.$value->lvl_2_code.''.$value->lvl_3_code.''.$value->lvl_4_code; ?>" value="<?php echo $value->lvl_4_id; ?>"><?php echo $value->lvl_4_name; ?></option>
								<?php } 
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 0px;'><input id='coa-update-code' name='coa-update-code' class='form-control' type='text' readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR Classification</label></td>
					<td colspan='3' style='padding-top: 10px;'>
						<select id='coa-update-bir' name='coa-update-bir' class='form-control'>
							<option value="">Select...</option>
							<?php
								foreach ($bir as $key => $value) { ?>
								 	<option value="<?php echo $value->bir_id; ?>"><?php echo $value->bir_classification; ?></option>
								<?php } 
							?>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" id='coa-update-lvl-1' name="coa-update-lvl-1">
		<input type="hidden" id='coa-update-lvl-2' name="coa-update-lvl-2">
		<input type="hidden" id='coa-update-lvl-3' name="coa-update-lvl-3">
		<input type="hidden" id='coa-update-lvl-4' name="coa-update-lvl-4">
		<input type="hidden" id='coa-update-id' name="coa-update-id">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='delete-coa-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete COA</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/chart_of_accounts/coa_delete" method="post">
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='coa-delete-name' name='coa-delete-name' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Account Subclassification</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='coa-delete-acc-sub' name='coa-delete-acc-sub' class='form-control' disabled>
							<option value="">Select...</option>
							<?php
								foreach ($acc_sub as $key => $value) { ?>
								 	<option id="coa_delete_acc_sub_<?php echo $value->lvl_4_id; ?>" lvl1="<?php echo $value->lvl_1_id; ?>" lvl2="<?php echo $value->lvl_2_id; ?>" lvl3="<?php echo $value->lvl_3_id; ?>" lvl4="<?php echo $value->lvl_4_id; ?>" final-code="<?php echo $value->lvl_1_code.''.$value->lvl_2_code.''.$value->lvl_3_code.''.$value->lvl_4_code; ?>" value="<?php echo $value->lvl_4_id; ?>"><?php echo $value->lvl_4_name; ?></option>
								<?php } 
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 0px;'><input id='coa-delete-code' name='coa-delete-code' class='form-control' type='text' readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR Classification</label></td>
					<td colspan='3' style='padding-top: 10px;'>
						<select id='coa-delete-bir' name='coa-delete-bir' class='form-control' disabled>
							<option value="">Select...</option>
							<?php
								foreach ($bir as $key => $value) { ?>
								 	<option value="<?php echo $value->bir_id; ?>"><?php echo $value->bir_classification; ?></option>
								<?php } 
							?>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" id='coa-delete-lvl-1' name="coa-delete-lvl-1">
		<input type="hidden" id='coa-delete-lvl-2' name="coa-delete-lvl-2">
		<input type="hidden" id='coa-delete-lvl-3' name="coa-delete-lvl-3">
		<input type="hidden" id='coa-delete-lvl-4' name="coa-delete-lvl-4">
		<input type="hidden" id='coa-delete-id' name="coa-delete-id">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-danger btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>