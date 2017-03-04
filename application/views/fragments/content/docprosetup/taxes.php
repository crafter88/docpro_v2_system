<input type="hidden" name="default_tt_id" value="<?php echo isset($tt_id) && strlen($tt_id) > 0 ? $tt_id : '0'; ?>">
<input type="hidden" name="default_tt_name" value="<?php echo isset($tt_name) && strlen($tt_name) > 0 ? $tt_name : ''; ?>">
<div id='m_c_d' class='appear'>
    <div class='n_cp_n_cm' class='container' style="margin: 0;">
    	<div class="box">
            <div class="box-header with-border box-normal">
                <h3 class="box-title"> </h3>
                <div class="box-tools pull-right">
                	<div class="btn-group">
                  		<button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    		<i class="fa fa-wrench"></i> Settings
                    	</button>
                  		<ul class="dropdown-menu" role="menu">
                    		<li><span id='show-filters' class='disable-setting' data-status='0'>Show Filters</span></li>
                    		<li><span id='advance-search' data-status='0'>Advance Search</span></li>
                    		<li class="divider"></li>
                    		<li><span id='show-all-col' data-status='0'>Show All Columns</span></li>
                  		</ul>
                	</div>
              	</div>
            </div>
    		<div class='box-body hide-table-setting'>
				<div class='row'>
					<div id="sequence-selector" class="col-md-12" style="margin-bottom: 12px;">
						<div id='setup-tab-1' class='setup-tab active col-md-6'>
							<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq <?php if($seq_active === '1'){ echo 'seq-selected'; } ?>' style='margin: 0; font-size: 14px;'>
								<span>Tax Types</span>
							</button>
						</div>
						<div id='setup-tab-2' class='setup-tab col-md-6'>
							<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq <?php if($seq_active === '2'){ echo 'seq-selected'; } ?>' style='margin: 0; font-size: 14px;'>
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
								<div class='col-md-12' id='top-table-row' style="padding: 0 15px 0 0 !important;">
									<div class='row'>
			    						<div class='col-md-1' style="margin-bottom: 10px;">
			    							<button id='add-tt' type='button' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add New' <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?> style='height: 34px; margin: 0;'><i class='fa fa-plus'></i> Add New</button>
			    						</div>
			    						<div class='col-md-11' style="margin-bottom: 10px;">
			    							<div class="input-group table-search">
											  <span class="input-group-addon" id="basic-addon1"><i class='fa fa-search'></i></span>
											  <input type="text" class="form-control general-search-tax-type" placeholder="General Search..." aria-describedby="basic-addon1">
											</div>
			    						</div>
			    					</div>
									<table id='tax-types-table' class='table table-hovered table-bordered' style="width: 100%;">
										<thead>
											<tr>
												<th></th>
												<th>Seq</th>
												<th>Code</th>
												<th>Name</th>
												<th>Short Name</th>
											</tr>
											<tr class='hide-searchfilter searchfilterrow'>
												<th></th>
												<th></th>
												<th></th>
												<th></th>
												<th></th>
											</tr>
										</thead>
									</table>
								</div>
							</li>
							<li>
								<div class='col-md-12' id='taxes-table-row' style="padding: 0 15px 0 0 !important;">
									<div id='tax-alert' class='col-md-12' style="padding: 0;">
										<div class='alert alert-danger tax-alert'>Please select tax type</div>
									</div>
									<div class='row'>
			    						<div class='col-md-1' style="margin-bottom: 10px;">
			    							<button id='add' type='button' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add New' <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?> style='height: 34px; margin: 0;'><i class='fa fa-plus'></i> Add New</button>
			    						</div>
			    						<div class='col-md-11' style="margin-bottom: 10px;">
			    							<div class="input-group table-search">
											  <span class="input-group-addon" id="basic-addon1"><i class='fa fa-search'></i></span>
											  <input type="text" class="form-control general-search-tax" placeholder="General Search..." aria-describedby="basic-addon1">
											</div>
			    						</div>
			    					</div>
									<table id='taxes-table' class='table table-hovered table-bordered' style="width: 100%;">
										<thead>
											<tr>
												<th></th>
												<th>Seq</th>
												<th>Code</th>
												<th>ATC</th>
												<th>Type</th>
												<th>Name</th>
												<th>Shortname</th>
												<th>Rate</th>
												<th>Base</th>
											</tr>
											<tr class='hide-searchfilter searchfilterrow'>
												<th></th>
												<th></th>
												<th></th>
												<th></th>
												<th></th>
												<th></th>
												<th></th>
												<th></th>
												<th></th>
											</tr>
										</thead>
									</table>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- TAX TYPES -->
<div id='tt-add-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px solid #C1C1C1; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Tax Types</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/taxtypes/add" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input id='tt-add-name' name='tt-add-name' class='form-control no-space v-required' title='Please fill out this field' type='text' spellcheck="true"></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Short Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input id='tt-add-shortname' name='tt-add-shortname' class='form-control no-space v-required' title='Please fill out this field' type='text' spellcheck="true"></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px solid #C1C1C1; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Done</button>
		</div>
	</form>
</div>
<div id='tt-view-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px solid #C1C1C1; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Tax Types</h4>
	</div>
	<div class='modal-body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='tt-view-seq' class='form-control' type='text' disabled></td>
			</tr>
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
	<div class='modal-footer' style='border-top: 1px solid #C1C1C1; padding-top: 5px; padding-bottom: 0px;'>
		<button class='btn btn-info btn-sm btn-raised ripple-effect close-popover' type='button' style='float: right;'>Close</button>
	</div>
</div>
<div id='tt-edit-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px solid #C1C1C1; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Tax Types</h4>
	</div>
	<div>
		<form action="<?php echo base_url(); ?>docpro_setup/taxtypes/edit" method='post'>
			<div class='modal-body'>
				<table width='90%'>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
						<td colspan='3' style='padding-top: 5px;'><input name='tt-edit-seq' class='form-control number no-space' type='text' disabled></td>
					</tr>
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
			<div class='modal-footer' style='border-top: 1px solid #C1C1C1; padding-top: 5px; padding-bottom: 0px; padding-right: 18px;'>
				<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Save Changes</button>
			</div>
		</form>
	</div>
</div>
<div id='tt-update-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px solid #C1C1C1; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update Tax Types</h4>
	</div>
	<div>
		<form action="<?php echo base_url(); ?>docpro_setup/taxtypes/update" method='post'>
			<div class='tt-body'>
				<div class='tt-modal-body'>
					<table width='90%'>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='tt-update-code' name='tt-update-code' class='form-control number v-required v-number' type='text' readonly></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
							<td colspan='3' style='padding-top: 5px;'><input id='tt-update-name' name='tt-update-name' class='form-control v-required' title='Please fill out this field' type='text' spellcheck="true"></td>
						</tr>
						<tr>
							<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Short Name</label></td>
							<td colspan='3' style='padding-top: 5px;'><input id='tt-update-shortname' name='tt-update-shortname' class='form-control v-required' title='Please fill out this field' type='text' spellcheck="true"></td>
						</tr>
					</table>
				</div>
				<input type="hidden" id='tt-update-id' name="tt-update-id">
				<div class='tt-modal-footer' style='border-top: 1px solid #C1C1C1; padding-top: 5px; padding-bottom: 0px; padding-right: 18px;'>
					<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Save Changes</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div id='tt-delete-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px solid #C1C1C1; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete Tax Types</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/taxtypes/delete" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='tt-delete-seq' class='form-control number no-space' type='text' disabled></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='tt-delete-code' class='form-control number no-space' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='tt-delete-name' class='form-control no-space' type='text' required readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Short Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input name='tt-delete-shortname' class='form-control no-space' type='text' required readonly></td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="tt-delete-id">
		<div class='modal-footer' style='border-top: 1px solid #C1C1C1; padding-top: 5px; padding-bottom: 0px; padding-right: 18px;'>
			<button class='btn btn-danger btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>Ok</button>
		</div>
	</form>
</div>

<!-- TAXES -->
<div id='add-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Tax</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/taxes/add" method='post' class='body'>
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
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='add-atc'></td>
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
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Done</button>
		</div>
	</form>
</div>
<div id='view-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Tax</h4>
	</div>
	<div class='modal-body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-seq' class='form-control' type='text' disabled></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-code' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>ATC</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-atc' class='form-control' type='text' placeholder='Select...' readonly>
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
		<button class='btn btn-info btn-sm close-popover btn-raised ripple-effect close-popover' type='button' data-dismiss='modal' style='float: right;'>Close</button>
	</div>
</div>
<div id='edit-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Tax</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/taxes/edit" method='post' class='body'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
					<td colspan='3' style="padding-top: 5px;"><input class='form-control no-space' type='text' name='edit-seq' disabled></td>
				</tr>
				<tr>
					<input id='edit-type-id' type='hidden' name='edit-type-id'>
					<input id='edit-type-code' type='hidden' name='edit-type-code'>
					<input id='edit-type-name' type='hidden' name='edit-type-name'>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='edit-type-select' type='text' name='edit-type-select' placeholder='Select...' disabled>
						</select>
					</td>
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
		<input type='hidden' name='edit-id' value=''>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Save Changes</button>
		</div>
	</form>
</div>
<div id='update-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update Tax</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_setup/taxes/update" method='post' class='body'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<input id='update-type-id' type='hidden' name='update-type-id'>
					<input id='update-type-code' type='hidden' name='update-type-code'>
					<input id='update-type-name' type='hidden' name='update-type-name'>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
					<td colspan='3' style='padding-top: 10px;'>
						<select id='update-type-select' type='text' name='update-type-select' placeholder='Select...' disabled>
						</select>
					</td>
				</tr>
				<tr>
					<td style='width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3'><input id='update-code' name='update-code' class='form-control v-required' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input id='update-name' name='update-name' class='form-control v-required' title="Please fill out this field" type='text' spellcheck="true"></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
					<td colspan='3' style='padding-top: 5px;'><input id='update-shortname' name='update-shortname' class='form-control' type='text' spellcheck="true"></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>ATC</label></td>
					<td colspan='3' style='padding-top: 5px;'><input id='update-atc' name='update-atc' class='form-control' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Rate</label></td>
					<td colspan='3' style='padding-top: 5px;'><input id='update-rate' name='update-rate' class='form-control decimal v-decimal v-required' title="Please fill out this field" type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Base</label></td>
					<td colspan='3' style='padding-top: 5px;'><input id='update-base' name='update-base' class='form-control decimal v-decimal v-required' title="Please fill out this field" type='text'></td>
				</tr>
			</table>
		</div>
		<input id='update-id' name='update-id' type='hidden'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Save Changes</button>
		</div>
	</form>
</div>
<div id='delete-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete Tax</h4>
	</div>
	<div class='col-md-12' style="padding: 0;">
		<form action="<?php echo base_url(); ?>docpro_setup/taxes/delete" method='post' class='body'>
			<div class='modal-body'>
				<table width='90%'>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
						<td colspan='3' style="padding-top: 5px;"><input class='form-control no-space' type='text' name='delete-seq' disabled></td>
					</tr>
					<tr>
						<input id='delete-type-id' type='hidden' name='delete-type-id'>
						<input id='delete-type-code' type='hidden' name='delete-type-code'>
						<input id='delete-type-name' type='hidden' name='delete-type-name'>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
						<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='delete-type' placeholder='Select...' readonly readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
						<td colspan='3' style="padding-top: 5px;"><input class='form-control no-space' type='text' name='delete-code' required readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>ATC</label></td>
						<td colspan='3' style="padding-top: 5px;"><input class='form-control no-space' type='text' name='delete-atc' required readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 5px;'><input class='form-control no-space' type='text' name='delete-name' required readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
						<td colspan='3' style='padding-top: 5px;'><input class='form-control no-space' type='text' name='delete-shortname' required readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Rate</label></td>
						<td colspan='3' style='padding-top: 5px;'><input class='form-control decimal' type='text' name='delete-rate' required readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Base</label></td>
						<td colspan='3' style='padding-top: 5px;'><input class='form-control decimal' type='text' name='delete-base' required readonly></td>
					</tr>
				</table>
			</div>
			<input name='delete-id' type='hidden'>
			<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
				<button class='btn btn-danger btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>OK</button>
			</div>
		</form>
	</div>
</div>