<div class='side-body padding-top'>
	<div class='card custom-card'>
		<div class='card-body' style='padding-top: 0px; padding-left: 18px; padding-right: 18px;'>
			<input type="hidden" id='seq-active' name="seq-active" value='<?php echo $seq_active; ?>'>
			<div id='custom-card-title' class='row' style="margin: 30px 0 0 0; text-align: center;">
				<div class='panel panel-default' style="border: none; border-bottom: 2px solid #000">
					<div class='panel-body'>
						<p style="font-size: 24px; margin: 0;">Chart of Accounts</p>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-12' id='chart-of-accounts-table-row'>
					<div class='row'>
						<div id='setup-tab-1' class='setup-tab btn-seq-wrapper <?php if($seq_active === '1') echo 'active'; ?>'>
							<span class='coa-no'>1</span>
							<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq seq-selected set-1'>
								<span>Elements</span>
							</button>
						</div>
						<div id='setup-tab-2' class='setup-tab btn-seq-wrapper <?php if($seq_active === '2') echo 'active'; ?>'>
							<span class='coa-no'>2</span>
							<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-2'>
								<span>Classification</span>
							</button>
						</div>
						<div id='setup-tab-3' class='setup-tab btn-seq-wrapper <?php if($seq_active === '3') echo 'active'; ?>'>
							<span class='coa-no'>3</span>
							<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-3'>
								<span>Line Items</span>
							</button>
						</div>
						<div id='setup-tab-4' class='setup-tab btn-seq-wrapper <?php if($seq_active === '4') echo 'active'; ?>'>
							<span class='coa-no'>4</span>
							<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-4'>
								<span>Subclassification</span>
							</button>
						</div>
						<div style="float: left; margin-bottom: 10px; border-left: 4px solid #000;">
							<ol id='coa_breadcrumb' class="breadcrumb" style="margin-left: 0;"></ol>
						</div>
					</div>
					<div class='row'>
						<input type="hidden" name="default_lvl_1_id" value="<?php echo isset($lvl_1_id) && strlen($lvl_1_id) > 0 ? $lvl_1_id : '0'; ?>">
						<input type="hidden" name="default_lvl_2_id" value="<?php echo isset($lvl_2_id) && strlen($lvl_2_id) > 0 ? $lvl_2_id : '0'; ?>">
						<input type="hidden" name="default_lvl_3_id" value="<?php echo isset($lvl_3_id) && strlen($lvl_3_id) > 0 ? $lvl_3_id : '0'; ?>">
						<input type="hidden" name="default_lvl_1_code" value="<?php echo isset($lvl_1_code) ? $lvl_1_code : '0'; ?>">
						<input type="hidden" name="default_lvl_2_code" value="<?php echo isset($lvl_2_code) ? $lvl_2_code : '0'; ?>">
						<input type="hidden" name="default_lvl_3_code" value="<?php echo isset($lvl_3_code) ? $lvl_3_code : '0'; ?>">
						<input type="hidden" name="default_lvl_1_name" value="<?php echo isset($lvl_1_name) ? $lvl_1_name : ''; ?>">
						<input type="hidden" name="default_lvl_2_name" value="<?php echo isset($lvl_2_name) ? $lvl_2_name : ''; ?>">
						<input type="hidden" name="default_lvl_3_name" value="<?php echo isset($lvl_3_name) ? $lvl_3_name : ''; ?>">
						<div id='coa-seq'>
							<ul class='seq-canvas'>
								<li class="<?php if($seq_active === '1') echo $seq_active; ?>">
									<button id='add-acc-elements' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add'><i class='fa fa-plus'></i></button>
									<table id='account-elements' class='table table-bordered' width="100%">
										<thead>
											<th></th>
											<th>Seq</th>
											<th>Element Code</th>
											<th>Name</th>
										</thead>
									</table>
									<button type="button" class='btn btn-default ripple-effect set-2' style="float: right;">NEXT</button>
								</li>
								<li class="<?php if($seq_active === '2') echo $seq_active; ?>">
									<div id='lvl-2-alert' class='col-md-12' style="padding: 0;">
										<div class='alert alert-danger coa-alert'>Please select level 1</div>
									</div>
									<div id='lvl-2-plate' class='col-md-12' style="padding: 0; opacity: 0; padding-left: 3px;">
										<button id='add-acc-classification' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add' style="float: left;" disabled><i class='fa fa-plus'></i></button>
										<table id='account-classification' class='table table-bordered'>
											<thead>
												<th></th>
												<th>Seq</th>
												<th>Element Code</th>
												<th>Classification Code</th>
												<th>Name</th>
											</thead>
										</table>
										<button type="button" class='btn btn-default ripple-effect set-1' style="float: left;">PREV</button>
										<button type="button" class='btn btn-default ripple-effect set-3' style="float: right;">NEXT</button>
									</div>
								</li>
								<li class="<?php if($seq_active === '3') echo 'seq-in'; ?>">
									<div id='lvl-3-alert' class='col-md-12' style="padding: 0;">
										<div class='alert alert-danger coa-alert'>Please select level 2</div>
									</div>
									<div id='lvl-3-plate' class='col-md-12' style="padding: 0; opacity: 0; padding-left: 3px;">
										<button id='add-line-items' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add' style="float: left;" disabled><i class='fa fa-plus'></i></button>
										<table id='line-items' class='table table-bordered'>
											<thead>
												<th></th>
												<th>Seq</th>
												<th>Element Code</th>
												<th>Classification Code</th>
												<th>Line Item Code</th>
												<th>Name</th>
											</thead>
										</table>
										<button type="button" class='btn btn-default ripple-effect set-2' style="float: left;">PREV</button>
										<button type="button" class='btn btn-default ripple-effect set-4' style="float: right;">NEXT</button>
									</div>
								</li>
								<li class="<?php if($seq_active === '4') echo 'seq-in'; ?>">
									<div id='lvl-4-alert' class='col-md-12' style="padding: 0;">
										<div class='alert alert-danger coa-alert'>Please select level 3</div>
									</div>
									<div id='lvl-4-plate' class='col-md-12' style="padding: 0; opacity: 0; padding-left: 3px;">
										<button id='add-acc-sub' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add' style="float: left;" disabled><i class='fa fa-plus'></i></button>
										<table id='account-subclassification' class='table table-bordered'>
											<thead>
												<th></th>
												<th>Seq</th>
												<th>Element Code</th>
												<th>Classification Code</th>
												<th>Line Item Code</th>
												<th>Subclassification Code</th>
												<th>Name</th>
												<th>BIR</th>
											</thead>
										</table>
										<button type="button" class='btn btn-default ripple-effect set-3' style="float: left;">PREV</button>
										<a href="<?php echo base_url(); ?>docpro_settings/chart_of_accounts" class='btn btn-default ripple-effect set-4' style="float: right; color: #FFF; background-color: #000; width: 10%;">CREATE COA</a>
									</div>
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
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='acc-elements-add-name' title='Please fill out this field' class='form-control v-required' type='text' spellcheck="true">
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="lvl_1_id">
		<input type="hidden" name="lvl_2_id">
		<input type="hidden" name="lvl_3_id">
		<input type="hidden" name="lvl_1_code">
		<input type="hidden" name="lvl_2_code">
		<input type="hidden" name="lvl_3_code">
		<input type="hidden" name="lvl_1_name">
		<input type="hidden" name="lvl_2_name">
		<input type="hidden" name="lvl_3_name">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
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
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='acc-elements-view-code' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='acc-elements-view-name' class='form-control' type='text' readonly>
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
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='acc-elements-edit-code' class='form-control number v-required v-number' title='Please fill out this field' type='text'></td>
				</tr>
					<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='acc-elements-edit-name' class='form-control v-required' title='Please fill out this field' type='text' spellcheck="true">
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="acc-elements-edit-id">
		<input type="hidden" name="lvl_1_id">
		<input type="hidden" name="lvl_2_id">
		<input type="hidden" name="lvl_3_id">
		<input type="hidden" name="lvl_1_code">
		<input type="hidden" name="lvl_2_code">
		<input type="hidden" name="lvl_3_code">
		<input type="hidden" name="lvl_1_name">
		<input type="hidden" name="lvl_2_name">
		<input type="hidden" name="lvl_3_name">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
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
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='acc-elements-delete-code' class='form-control' type='text' readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='acc-elements-delete-name' class='form-control' type='text' readonly>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="acc-elements-delete-id">
		<input type="hidden" name="lvl_1_id">
		<input type="hidden" name="lvl_2_id">
		<input type="hidden" name="lvl_3_id">
		<input type="hidden" name="lvl_1_code">
		<input type="hidden" name="lvl_2_code">
		<input type="hidden" name="lvl_3_code">
		<input type="hidden" name="lvl_1_name">
		<input type="hidden" name="lvl_2_name">
		<input type="hidden" name="lvl_3_name">
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
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
					<td style='padding-top: 5px;'>
						<input type="hidden" name="acc-classification-add-elements">
						<select id="acc-classification-add-elements" name='acc-classification-add-elements-select' class="demo-default" placeholder="Select..." style="z-index: 9999999999;" required disabled>
							<option value="">Select...</option>
							<?php foreach ($acc_elements as $key => $value) { ?>
								<option code='<?php echo $value->lvl_1_code; ?>' value="<?php echo $value->lvl_1_id; ?>"><?php echo $value->lvl_1_name; ?></option>
							<?php } ?>
						</select>
					</td>
					<td style="padding-top: 5px; width: 80px;">
						<input type="text" name="add-lvl2-lvl1-code" class='form-control no-space' placeholder="code" readonly style="width: 80px; text-align: center; height: 34px;" required>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='2' style="padding-top: 5px;"><input name='acc-classification-add-name' class='form-control v-required' title='Please fill out this field' type='text' spellcheck="true">
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="lvl_1_id">
		<input type="hidden" name="lvl_2_id">
		<input type="hidden" name="lvl_3_id">
		<input type="hidden" name="lvl_1_code">
		<input type="hidden" name="lvl_2_code">
		<input type="hidden" name="lvl_3_code">
		<input type="hidden" name="lvl_1_name">
		<input type="hidden" name="lvl_2_name">
		<input type="hidden" name="lvl_3_name">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
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
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
				<td style='padding-top: 5px;'>
					<select id="acc-classification-view-elements" class="demo-default" placeholder="Select..." style="z-index: 9999999999;" disabled>
						<option value="">Select...</option>
						<?php foreach ($acc_elements as $key => $value) { ?>
							<option value="<?php echo $value->lvl_1_id; ?>"><?php echo $value->lvl_1_name; ?></option>
						<?php } ?>
					</select>
				</td>
				<td style="padding-top: 5px; width: 80px;">
					<input type="text" name="view-lvl2-lvl1-code" class='form-control' placeholder="code" readonly style="width: 80px; text-align: center; height: 34px;">
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='2' style="padding-top: 5px;"><input name='acc-classification-view-code' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='2' style='padding-top: 5px;'><input name='acc-classification-view-name' class='form-control' type='text' readonly>
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
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
					<td style='padding-top: 5px;'>
						<input type="hidden" name="acc-classification-edit-elements">
						<select id="acc-classification-edit-elements" name='acc-classification-edit-elements-select' class="demo-default" placeholder="Select..." style="z-index: 9999999999;" required disabled>
							<option value="">Select...</option>
							<?php foreach ($acc_elements as $key => $value) { ?>
								<option code='<?php echo $value->lvl_1_code; ?>' value="<?php echo $value->lvl_1_id; ?>"><?php echo $value->lvl_1_name; ?></option>
							<?php } ?>
						</select>
					</td>
					<td style="padding-top: 5px; width: 80px;">
						<input type="text" name="edit-lvl2-lvl1-code" class='form-control no-space' placeholder="code" readonly style="width: 80px; text-align: center; height: 34px;" required>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='2' style="padding-top: 5px;"><input name='acc-classification-edit-code' class='form-control number v-number v-required' title='Please fill out this field' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='2' style='padding-top: 5px;'><input name='acc-classification-edit-name' class='form-control v-required' title='Please fill out this field' type='text' spellcheck="true">
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="acc-classification-edit-id">
		<input type="hidden" name="acc-classification-edit-join-id">
		<input type="hidden" name="lvl_1_id">
		<input type="hidden" name="lvl_2_id">
		<input type="hidden" name="lvl_3_id">
		<input type="hidden" name="lvl_1_code">
		<input type="hidden" name="lvl_2_code">
		<input type="hidden" name="lvl_3_code">
		<input type="hidden" name="lvl_1_name">
		<input type="hidden" name="lvl_2_name">
		<input type="hidden" name="lvl_3_name">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
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
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
					<td style='padding-top: 5px;'>
						<select id="acc-classification-delete-elements" name='acc-classification-delete-elements' class="demo-default" placeholder="Select..." style="z-index: 9999999999;" disabled>
							<option value="">Select...</option>
							<?php foreach ($acc_elements as $key => $value) { ?>
								<option value="<?php echo $value->lvl_1_id; ?>"><?php echo $value->lvl_1_name; ?></option>
							<?php } ?>
						</select>
					</td>
					<td style="padding-top: 5px; width: 80px;">
						<input type="text" name="delete-lvl2-lvl1-code" class='form-control no-space' placeholder="code" readonly style="width: 80px; text-align: center; height: 34px;" required>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='2' style="padding-top: 5px;"><input type='text' name='acc-classification-delete-code' class='form-control' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='2' style='padding-top: 5px;'><input name='acc-classification-delete-name' class='form-control' type='text' readonly>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="acc-classification-delete-id">
		<input type="hidden" name="acc-classification-delete-join-id">
		<input type="hidden" name="lvl_1_id">
		<input type="hidden" name="lvl_2_id">
		<input type="hidden" name="lvl_3_id">
		<input type="hidden" name="lvl_1_code">
		<input type="hidden" name="lvl_2_code">
		<input type="hidden" name="lvl_3_code">
		<input type="hidden" name="lvl_1_name">
		<input type="hidden" name="lvl_2_name">
		<input type="hidden" name="lvl_3_name">
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
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td style='padding-top: 5px;'>
						<input type="hidden" name="line-items-add-classification">
						<select id="line-items-add-classification" name='line-items-add-classification-select' class="demo-default" placeholder="Select..." style="z-index: 9999999999;" required disabled>
							<option value="">Select...</option>
							<?php foreach ($acc_classification as $key => $value) { ?>
								<option code='<?php echo $value->lvl_2_code; ?>' value="<?php echo $value->lvl_2_id; ?>"><?php echo $value->lvl_2_name; ?></option>
							<?php } ?>
						</select>
					</td>
					<td style="padding-top: 5px; width: 80px;">
						<input type="text" name="add-lvl3-lvl2-code" class='form-control no-space' placeholder="code" readonly style="width: 80px; text-align: center; height: 34.5px;" required>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='2' style="padding-top: 5px;"><input name='line-items-add-name' class='form-control no-space v-required' title='Please fill out this field' type='text' spellcheck="true">
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="lvl_1_id">
		<input type="hidden" name="lvl_2_id">
		<input type="hidden" name="lvl_3_id">
		<input type="hidden" name="lvl_1_code">
		<input type="hidden" name="lvl_2_code">
		<input type="hidden" name="lvl_3_code">
		<input type="hidden" name="lvl_1_name">
		<input type="hidden" name="lvl_2_name">
		<input type="hidden" name="lvl_3_name">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
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
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
				<td style='padding-top: 5px;'>
					<select id="line-items-view-classfication" class="demo-default" placeholder="Select..." style="z-index: 9999999999;" disabled>
						<option value="">Select...</option>
						<?php foreach ($acc_classification as $key => $value) { ?>
							<option code='<?php echo $value->lvl_2_code; ?>' value="<?php echo $value->lvl_2_id; ?>"><?php echo $value->lvl_2_name; ?></option>
						<?php } ?>
					</select>
				</td>
				<td style="padding-top: 5px; width: 80px;">
					<input type="text" name="view-lvl3-lvl2-code" class='form-control' placeholder="code" readonly style="width: 80px; text-align: center; height: 34.5px;">
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='2' style="padding-top: 5px;"><input name='line-items-view-code' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='2' style='padding-top: 5px;'><input name='line-items-view-name' class='form-control' type='text' readonly>
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
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td style='padding-top: 5px;'>
						<input type="hidden" name="line-items-edit-classification">
						<select id="line-items-edit-classification" name='line-items-edit-classification-select' class="demo-default" placeholder="Select..." style="z-index: 9999999999;" required disabled>
							<option value="">Select...</option>
							<?php foreach ($acc_classification as $key => $value) { ?>
								<option code='<?php echo $value->lvl_2_code; ?>' value="<?php echo $value->lvl_2_id; ?>"><?php echo $value->lvl_2_name; ?></option>
							<?php } ?>
						</select>
					</td>
					<td style="padding-top: 5px; width: 80px;">
						<input type="text" name="edit-lvl3-lvl2-code" class='form-control no-space' placeholder="code" readonly style="width: 80px; text-align: center; height: 34.5px;" required>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='2' style="padding-top: 5px;"><input name='line-items-edit-code' class='form-control number v-number v-required' title='Please fill out this field' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='2' style='padding-top: 5px;'><input name='line-items-edit-name' class='form-control v-required' title='Please fill out this field' type='text' spellcheck="true">
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="line-items-edit-id">
		<input type="hidden" name="line-items-edit-join-id">
		<input type="hidden" name="lvl_1_id">
		<input type="hidden" name="lvl_2_id">
		<input type="hidden" name="lvl_3_id">
		<input type="hidden" name="lvl_1_code">
		<input type="hidden" name="lvl_2_code">
		<input type="hidden" name="lvl_3_code">
		<input type="hidden" name="lvl_1_name">
		<input type="hidden" name="lvl_2_name">
		<input type="hidden" name="lvl_3_name">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
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
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td style='padding-top: 5px;'>
						<select id="line-items-delete-classification" name='line-items-delete-classification' class="demo-default" placeholder="Select..." style="z-index: 9999999999;" disabled>
							<option value="">Select...</option>
							<?php foreach ($acc_classification as $key => $value) { ?>
								<option value="<?php echo $value->lvl_2_id; ?>"><?php echo $value->lvl_2_name; ?></option>
							<?php } ?>
						</select>
					</td>
					<td style="padding-top: 5px; width: 80px;">
						<input type="text" name="edit-lvl3-lvl2-code" class='form-control no-space' placeholder="code" readonly style="width: 80px; text-align: center; height: 34.5px;" required>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='2' style="padding-top: 5px;"><input name='line-items-delete-code' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='2' style='padding-top: 5px;'><input name='line-items-delete-name' class='form-control' type='text' readonly>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="line-items-delete-id">
		<input type="hidden" name="line-items-delete-join-id">
		<input type="hidden" name="lvl_1_id">
		<input type="hidden" name="lvl_2_id">
		<input type="hidden" name="lvl_3_id">
		<input type="hidden" name="lvl_1_code">
		<input type="hidden" name="lvl_2_code">
		<input type="hidden" name="lvl_3_code">
		<input type="hidden" name="lvl_1_name">
		<input type="hidden" name="lvl_2_name">
		<input type="hidden" name="lvl_3_name">
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
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
					<td style='padding-top: 5px;'>
						<input type="hidden" name="acc-sub-add-line-item">
						<select id="acc-sub-add-line-item" name='acc-sub-add-line-item-select' class="demo-default" placeholder="Select..." style="z-index: 9999999999;" required disabled>
							<option value="">Select...</option>
							<?php foreach ($line_items as $key => $value) { ?>
								<option code='<?php echo $value->lvl_3_code; ?>' value="<?php echo $value->lvl_3_id; ?>"><?php echo $value->lvl_3_name; ?></option>
							<?php } ?>
						</select>
					</td>
					<td style="padding-top: 5px; width: 80px;">
						<input type="text" name="add-lvl4-lvl3-code" class='form-control no-space' placeholder="code" readonly style="width: 80px; text-align: center; height: 34px;" required>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='2' style="padding-top: 5px;"><input name='acc-sub-add-name' class='form-control no-space v-required' title='Please fill out this field' type='text' spellcheck="true">
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR</label></td>
					<td colspan='2' style="padding-top: 5px;"><input name='bir' class='form-control no-space' type='text' spellcheck="true">
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="lvl_1_id">
		<input type="hidden" name="lvl_2_id">
		<input type="hidden" name="lvl_3_id">
		<input type="hidden" name="lvl_1_code">
		<input type="hidden" name="lvl_2_code">
		<input type="hidden" name="lvl_3_code">
		<input type="hidden" name="lvl_1_name">
		<input type="hidden" name="lvl_2_name">
		<input type="hidden" name="lvl_3_name">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
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
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
				<td style='padding-top: 5px;'>
					<select id="acc-sub-view-line-item" class="demo-default" placeholder="Select..." style="z-index: 9999999999;" disabled>
						<option value="">Select...</option>
						<?php foreach ($line_items as $key => $value) { ?>
							<option code='<?php echo $value->lvl_3_code; ?>' value="<?php echo $value->lvl_3_id; ?>"><?php echo $value->lvl_3_name; ?></option>
						<?php } ?>
					</select>
				</td>
				<td style="padding-top: 5px; width: 80px;">
					<input type="text" name="view-lvl4-lvl3-code" class='form-control' placeholder="code" readonly style="width: 80px; text-align: center; height: 34px;">
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='2' style="padding-top: 5px;"><input name='acc-sub-view-code' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='2' style='padding-top: 5px;'><input name='acc-sub-view-name' class='form-control' type='text' readonly>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR</label></td>
				<td colspan='2' style="padding-top: 5px;"><input name='bir' class='form-control no-space' type='text' spellcheck="true" readonly>
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
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
					<td style='padding-top: 5px;'>
						<input type="hidden" name="acc-sub-edit-line-item">
						<select id="acc-sub-edit-line-item" name='acc-sub-edit-line-item-select' class="demo-default" placeholder="Select..." style="z-index: 9999999999;" required disabled>
							<option value="">Select...</option>
							<?php foreach ($line_items as $key => $value) { ?>
								<option code='<?php echo $value->lvl_3_code; ?>' value="<?php echo $value->lvl_3_id; ?>"><?php echo $value->lvl_3_name; ?></option>
							<?php } ?>
						</select>
					</td>
					<td style="padding-top: 5px; width: 80px;">
						<input type="text" name="edit-lvl4-lvl3-code" class='form-control no-space' placeholder="code" readonly style="width: 80px; text-align: center; height: 34px;" required>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='2' style="padding-top: 5px;"><input name='acc-sub-edit-code' class='form-control number v-number v-required' title='Please fill out this field' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='2' style='padding-top: 5px;'><input name='acc-sub-edit-name' class='form-control v-required' title='Please fill out this field' type='text' spellcheck="true">
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR</label></td>
					<td colspan='2' style="padding-top: 5px;"><input name='bir' class='form-control no-space' type='text' spellcheck="true">
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="acc-sub-edit-id">
		<input type="hidden" name="acc-sub-edit-join-id">
		<input type="hidden" name="lvl_1_id">
		<input type="hidden" name="lvl_2_id">
		<input type="hidden" name="lvl_3_id">
		<input type="hidden" name="lvl_1_code">
		<input type="hidden" name="lvl_2_code">
		<input type="hidden" name="lvl_3_code">
		<input type="hidden" name="lvl_1_name">
		<input type="hidden" name="lvl_2_name">
		<input type="hidden" name="lvl_3_name">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' data-dismiss='modal' style='float: right;'>Ok</button>
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
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
					<td style='padding-top: 5px;'>
						<select id="acc-sub-delete-line-item" name='acc-sub-delete-line-item' class="demo-default" placeholder="Select..." style="z-index: 9999999999;" disabled>
							<option value="">Select...</option>
							<?php foreach ($line_items as $key => $value) { ?>
								<option value="<?php echo $value->lvl_3_id; ?>"><?php echo $value->lvl_3_name; ?></option>
							<?php } ?>
						</select>
					</td>
					<td style="padding-top: 5px; width: 80px;">
						<input type="text" name="delete-lvl4-lvl3-code" class='form-control no-space' placeholder="code" readonly style="width: 80px; text-align: center; height: 34px;" required>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='2' style="padding-top: 5px;"><input name='acc-sub-delete-code' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='2' style='padding-top: 5px;'><input name='acc-sub-delete-name' class='form-control' type='text' readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>BIR</label></td>
					<td colspan='2' style="padding-top: 5px;"><input name='bir' class='form-control no-space' type='text' spellcheck="true" readonly>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="acc-sub-delete-id">
		<input type="hidden" name="acc-sub-delete-join-id">
		<input type="hidden" name="lvl_1_id">
		<input type="hidden" name="lvl_2_id">
		<input type="hidden" name="lvl_3_id">
		<input type="hidden" name="lvl_1_code">
		<input type="hidden" name="lvl_2_code">
		<input type="hidden" name="lvl_3_code">
		<input type="hidden" name="lvl_1_name">
		<input type="hidden" name="lvl_2_name">
		<input type="hidden" name="lvl_3_name">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-danger btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>