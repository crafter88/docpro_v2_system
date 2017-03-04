<input id='mc_id' type="hidden" name="mc_id" value="<?php echo $user->main_company->cb_id; ?>">
<input id='bc_id' type="hidden" name="bc_id" value="<?php echo $user->cb_id; ?>">
<input type="hidden" id='seq-active' name="seq-active" value='<?php echo $seq_active; ?>'>
<!-- <div class='side-body padding-top'>
	<div class='card custom-card'>
		<div class='card-body' style='padding: 10px 20px 0px 20px;'>
			<input type="hidden" id='seq-active' name="seq-active" value='<?php echo $seq_active; ?>'>
			<div id='custom-card-title' class='row' style="margin: 30px 0 0 0; text-align: center;">
				<div class='panel panel-default' style="border: none; border-bottom: 2px solid #000">
					<div class='panel-body'>
						<p style="font-size: 24px; margin: 0;">Chart of Accounts 
							<a href='<?php echo base_url(); ?>company_settings/chart_of_accounts/coa_summary' style='float: right; font-size: 14px; width: 11px; margin-left: 10px;' title='Summary COA'><i class='fa fa-file-text-o'></i></a>
							<a href='<?php echo base_url(); ?>company_settings/chart_of_accounts/coa_category_summary' style='float: right; font-size: 14px; width: 11px;' title='Summary Category'><i class='fa fa-file-text'></i></a>
						</p>
					</div>
				</div>
			</div> -->
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
					<div class='col-md-12' id='chart-of-accounts-table-row'>
						<div class='row' style='margin: 0; margin-right: 13px;'>
							<div id='setup-tab-1' class='setup-tab btn-seq-wrapper <?php if($seq_active === '1') echo 'active'; ?>'>
								<!-- <span class='coa-no'>1</span> -->
								<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq seq-selected set-1'>
									<span>Elements</span>
								</button>
							</div>
							<div id='setup-tab-2' class='setup-tab btn-seq-wrapper <?php if($seq_active === '2') echo 'active'; ?>'>
								<!-- <span class='coa-no'>2</span> -->
								<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-2'>
									<span>Classification</span>
								</button>
							</div>
							<div id='setup-tab-3' class='setup-tab btn-seq-wrapper <?php if($seq_active === '3') echo 'active'; ?>'>
								<!-- <span class='coa-no'>3</span> -->
								<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-3'>
									<span>Line Items</span>
								</button>
							</div>
							<div id='setup-tab-4' class='setup-tab btn-seq-wrapper <?php if($seq_active === '4') echo 'active'; ?>'>
								<!-- <span class='coa-no'>4</span> -->
								<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-4'>
									<span>Subclassification</span>
								</button>
							</div>
							<div id='setup-tab-5' class='setup-tab btn-seq-wrapper <?php if($seq_active === '5') echo 'active'; ?>' style='display: none;'>
								<!-- <span class='coa-no'>5</span> -->
								<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-5'>
									<span>Level 5</span>
								</button>
							</div>
							<div id='setup-tab-6' class='setup-tab btn-seq-wrapper <?php if($seq_active === '6') echo 'active'; ?>'>
								<button type='button' class='btn btn-default btn-sm btn-flat ripple-effect btn-seq set-6' style="padding-top: 7px !important; padding-bottom: 7px !important; background-color: #e0e0e0;">
									<span style="display: block;">Create</span>
									<span>Chart of Accounts</span>
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
							<input type="hidden" name="default_lvl_4_id" value="<?php echo isset($lvl_4_id) && strlen($lvl_4_id) > 0 ? $lvl_4_id : '0'; ?>">
							<input type="hidden" name="default_lvl_1_code" value="<?php echo isset($lvl_1_code) ? $lvl_1_code : '0'; ?>">
							<input type="hidden" name="default_lvl_2_code" value="<?php echo isset($lvl_2_code) ? $lvl_2_code : '0'; ?>">
							<input type="hidden" name="default_lvl_3_code" value="<?php echo isset($lvl_3_code) ? $lvl_3_code : '0'; ?>">
							<input type="hidden" name="default_lvl_4_code" value="<?php echo isset($lvl_4_code) ? $lvl_4_code : '0'; ?>">
							<input type="hidden" name="default_lvl_1_name" value="<?php echo isset($lvl_1_name) ? $lvl_1_name : ''; ?>">
							<input type="hidden" name="default_lvl_2_name" value="<?php echo isset($lvl_2_name) ? $lvl_2_name : ''; ?>">
							<input type="hidden" name="default_lvl_3_name" value="<?php echo isset($lvl_3_name) ? $lvl_3_name : ''; ?>">
							<input type="hidden" name="default_lvl_4_name" value="<?php echo isset($lvl_4_name) ? $lvl_4_name : ''; ?>">
							<div id='coa-seq'>
								<ul class='seq-canvas'>
									<li class="<?php if($seq_active === '1') echo $seq_active; ?>">
										<div class="col-md-12" style="padding: 0px 30px 0px 13px !important;">
											<!-- <button id='add-acc-elements' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add' <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?>><i class='fa fa-plus'></i></button> -->
											<div class='row'>
					    						<div class='col-md-1' style="margin-bottom: 10px;">
					    							<button id='add-acc-elements' type='button' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add New' <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?> style='height: 34px; margin: 0;'><i class='fa fa-plus'></i> Add New</button>
					    						</div>
					    						<div class='col-md-11' style="margin-bottom: 10px;">
					    							<div class="input-group table-search">
													  <span class="input-group-addon" id="basic-addon1"><i class='fa fa-search'></i></span>
													  <input type="text" class="form-control general-search-lvl1" placeholder="General Search..." aria-describedby="basic-addon1">
													</div>
					    						</div>
					    					</div>
											<table id='account-elements' class='table table-bordered' style="width: 100%">
												<thead>
													<tr>
														<th></th>
														<th>Seq</th>
														<th>Element Code</th>
														<th>Name</th>
													</tr>
													<tr class='hide-searchfilter searchfilterrow'>
														<th></th>
														<th>Seq</th>
														<th>Element Code</th>
														<th>Name</th>
													</tr>
												</thead>
											</table>
										</div>
									</li>
									<li class="<?php if($seq_active === '2') echo $seq_active; ?>">
										<div class="col-md-12" id="top-table-row" style="padding: 0px 30px 0px 13px !important;">
											<div id='lvl-2-alert' class='col-md-12' style="padding: 0;">
												<div class='alert alert-danger coa-alert'>Please select level 1</div>
											</div>
											<div id='lvl-2-plate' class='col-md-12' style="padding: 0; opacity: 0; padding-left: 3px;">
												<!-- <button id='add-acc-classification' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add' style="float: left;" disabled><i class='fa fa-plus'></i></button> -->
												<div class='row'>
						    						<div class='col-md-1' style="margin-bottom: 10px;">
						    							<button id='add-acc-classification' type='button' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add New' <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?> style='height: 34px; margin: 0;'><i class='fa fa-plus'></i> Add New</button>
						    						</div>
						    						<div class='col-md-11' style="margin-bottom: 10px;">
						    							<div class="input-group table-search">
														  <span class="input-group-addon" id="basic-addon1"><i class='fa fa-search'></i></span>
														  <input type="text" class="form-control general-search-lvl2" placeholder="General Search..." aria-describedby="basic-addon1">
														</div>
						    						</div>
						    					</div>
												<table id='account-classification' class='table table-bordered' style="width: 100%">
													<thead>
														<tr>
															<th></th>
															<th>Seq</th>
															<th>Element Code</th>
															<th>Classification Code</th>
															<th>Name</th>
														</tr>
														<tr class='hide-searchfilter searchfilterrow'>
															<th></th>
															<th>Seq</th>
															<th>Element Code</th>
															<th>Classification Code</th>
															<th>Name</th>
														</tr>
													</thead>
												</table>
											</div>
										</div>
									</li>
									<li class="<?php if($seq_active === '3') echo 'seq-in'; ?>">
										<div class="col-md-12" id="top-table-row" style="padding: 0px 30px 0px 13px !important;">
											<div id='lvl-3-alert' class='col-md-12' style="padding: 0;">
												<div class='alert alert-danger coa-alert'>Please select level 2</div>
											</div>
											<div id='lvl-3-plate' class='col-md-12' style="padding: 0; opacity: 0; padding-left: 3px;">
												<!-- <button id='add-line-items' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add' style="float: left;" disabled><i class='fa fa-plus'></i></button> -->
												<div class='row'>
						    						<div class='col-md-1' style="margin-bottom: 10px;">
						    							<button id='add-line-items' type='button' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add New' <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?> style='height: 34px; margin: 0;'><i class='fa fa-plus'></i> Add New</button>
						    						</div>
						    						<div class='col-md-11' style="margin-bottom: 10px;">
						    							<div class="input-group table-search">
														  <span class="input-group-addon" id="basic-addon1"><i class='fa fa-search'></i></span>
														  <input type="text" class="form-control general-search-lvl3" placeholder="General Search..." aria-describedby="basic-addon1">
														</div>
						    						</div>
						    					</div>
												<table id='line-items' class='table table-bordered' style="width: 100%">
													<thead>
														<tr>
															<th></th>
															<th>Seq</th>
															<th>Element Code</th>
															<th>Classification Code</th>
															<th>Line Item Code</th>
															<th>Name</th>
														</tr>
														<tr class='hide-searchfilter searchfilterrow'>
															<th></th>
															<th>Seq</th>
															<th>Element Code</th>
															<th>Classification Code</th>
															<th>Line Item Code</th>
															<th>Name</th>
														</tr>
													</thead>
												</table>
											</div>
										</div>
									</li>
									<li class="<?php if($seq_active === '4') echo 'seq-in'; ?>">
										<div class="col-md-12" id="top-table-row" style="padding: 0px 30px 0px 13px !important;">
											<div id='lvl-4-alert' class='col-md-12' style="padding: 0;">
												<div class='alert alert-danger coa-alert'>Please select level 3</div>
											</div>
											<div id='lvl-4-plate' class='col-md-12' style="padding: 0; opacity: 0; padding-left: 3px;">
												<!-- <button id='add-acc-sub' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add' style="float: left;" disabled><i class='fa fa-plus'></i></button> -->
												<div class='row'>
						    						<div class='col-md-1' style="margin-bottom: 10px;">
						    							<button id='add-acc-sub' type='button' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add New' <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?> style='height: 34px; margin: 0;'><i class='fa fa-plus'></i> Add New</button>
						    						</div>
						    						<div class='col-md-11' style="margin-bottom: 10px;">
						    							<div class="input-group table-search">
														  <span class="input-group-addon" id="basic-addon1"><i class='fa fa-search'></i></span>
														  <input type="text" class="form-control general-search-lvl4" placeholder="General Search..." aria-describedby="basic-addon1">
														</div>
						    						</div>
						    					</div>
												<table id='account-subclassification' class='table table-bordered' style="width: 100%">
													<thead>
														<tr>
															<th></th>
															<th>Seq</th>
															<th>Element Code</th>
															<th>Classification Code</th>
															<th>Line Item Code</th>
															<th>Subclassification Code</th>
															<th>Name</th>
															<th>BIR</th>
														</tr>
														<tr class='hide-searchfilter searchfilterrow'>
															<th></th>
															<th>Seq</th>
															<th>Element Code</th>
															<th>Classification Code</th>
															<th>Line Item Code</th>
															<th>Subclassification Code</th>
															<th>Name</th>
															<th>BIR</th>
														</tr>
													</thead>
												</table>
											</div>
										</div>
									</li>
									<li class="<?php if($seq_active === '5') echo 'seq-in'; ?>" style='display: none;'>
										<div class="col-md-12" id="top-table-row" style="padding: 0px 30px 0px 13px !important;">
											<div id='lvl-5-alert' class='col-md-12' style="padding: 0;">
												<div class='alert alert-danger coa-alert'>Please select level 4</div>
											</div>
											<div id='lvl-5-plate' class='col-md-12' style="padding: 0; opacity: 0; padding-left: 3px;">
												<!-- <button id='add-lvl-5' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add' style="float: left;" disabled><i class='fa fa-plus'></i></button> -->
												<div class='row'>
						    						<div class='col-md-1' style="margin-bottom: 10px;">
						    							<button id='add-lvl-5' type='button' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add New' <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?> style='height: 34px; margin: 0;'><i class='fa fa-plus'></i> Add New</button>
						    						</div>
						    						<div class='col-md-11' style="margin-bottom: 10px;">
						    							<div class="input-group table-search">
														  <span class="input-group-addon" id="basic-addon1"><i class='fa fa-search'></i></span>
														  <input type="text" class="form-control general-search-lvl5" placeholder="General Search..." aria-describedby="basic-addon1">
														</div>
						    						</div>
						    					</div>
												<table id='lvl5-table' class='table table-bordered' style="width: 100%">
													<thead>
														<tr>
															<th></th>
															<th>Seq</th>
															<th>Element Code</th>
															<th>Classification Code</th>
															<th>Line Item Code</th>
															<th>Subclassification Code</th>
															<th>Level 5 Code</th>
															<th>Name</th>
														</tr>
														<tr class='hide-searchfilter searchfilterrow'>
															<th></th>
															<th>Seq</th>
															<th>Element Code</th>
															<th>Classification Code</th>
															<th>Line Item Code</th>
															<th>Subclassification Code</th>
															<th>Level 5 Code</th>
															<th>Name</th>
														</tr>
													</thead>
												</table>
											</div>
										</div>
									</li>
									<li class="<?php if($seq_active === '6') echo 'seq-in'; ?>">
										<div class='col-md-12' style="padding: 0px 30px 0px 13px !important;">
											<!-- <button id='add-coa' class='btn btn-info btn-sm btn-raised ripple-effect' style="float: left;" <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?>><i class='fa fa-plus'></i></button> -->
											<div class='row'>
						    						<div class='col-md-1' style="margin-bottom: 10px;">
						    							<button id='add-coa' type='button' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add New' <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?> style='height: 34px; margin: 0;'><i class='fa fa-plus'></i> Add New</button>
						    						</div>
						    						<div class='col-md-11' style="margin-bottom: 10px;">
						    							<div class="input-group table-search">
														  <span class="input-group-addon" id="basic-addon1"><i class='fa fa-search'></i></span>
														  <input type="text" class="form-control general-search-lvl6" placeholder="General Search..." aria-describedby="basic-addon1">
														</div>
						    						</div>
						    					</div>
											<table id='coa-table' class='table table-bordered' style="width: 100%">
												<thead>
													<tr>
														<th></th>
														<th>Element</th>
														<th>Classification</th>
														<th>Line Item</th>
														<th>Subclassification</th>
														<th>Subsidiary</th>
														<th>Code</th>
														<th>Name</th>
														<th>BIR Classification</th>
													</tr>
													<tr class='hide-searchfilter searchfilterrow'>
														<th></th>
														<th>Element</th>
														<th>Classification</th>
														<th>Line Item</th>
														<th>Subclassification</th>
														<th>Subsidiary</th>
														<th>Code</th>
														<th>Name</th>
														<th>BIR Classification</th>
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
	</div>
</div>

<!-- ACCOUNT ELEMENTS -->
<div id='add-acc-elements-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Account Element</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/acc_elements_add" method="post">
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
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Done</button>
		</div>
	</form>
</div>
<div id='view-acc-elements-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
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
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Account Element</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/acc_elements_edit" method='post'>
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
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Save Changes</button>
		</div>
	</form>
</div>
<div id='delete-acc-elements-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete Account Element</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/acc_elements_delete" method='post'>
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
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>

<!-- ACCOUNT CLASSIFICATION -->
<div id='add-acc-classification-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Account Classification</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/acc_classification_add" method="post">
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
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Done</button>
		</div>
	</form>
</div>
<div id='view-acc-classification-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
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
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Account Classification</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/acc_classification_edit" method='post'>
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
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Save Changes</button>
		</div>
	</form>
</div>
<div id='delete-acc-classification-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete Account Classification</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/acc_classification_delete" method='post'>
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
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>

<!-- LINE ITEMS -->
<div id='add-line-items-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Line Item</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/line_items_add" method="post">
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
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Done</button>
		</div>
	</form>
</div>
<div id='view-line-items-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
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
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Line Item</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/line_items_edit" method='post'>
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
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Save Changes</button>
		</div>
	</form>
</div>
<div id='delete-line-items-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete Line Item</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/line_items_delete" method='post'>
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
						<input type="text" name="delete-lvl3-lvl2-code" class='form-control no-space' placeholder="code" readonly style="width: 80px; text-align: center; height: 34.5px;" required>
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
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>

<!-- ACCOUNT SUBCLASSIFICATION -->
<div id='add-acc-sub-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Account Subclassification</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/acc_sub_add" method="post">
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
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Done</button>
		</div>
	</form>
</div>
<div id='view-acc-sub-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
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
				<td colspan='2' style='padding-top: 5px;'><input name='bir' class='form-control' type='text' readonly>
				</td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
		<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='button' data-dismiss='modal' style='float: right;'>Close</button>
	</div>
</div>
<div id='edit-acc-sub-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Account Subclassification</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/acc_sub_edit" method='post'>
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
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' data-dismiss='modal' style='float: right;'>Save Changes</button>
		</div>
	</form>
</div>
<div id='delete-acc-sub-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete Account Subclassification</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/acc_sub_delete" method='post'>
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
					<td colspan='2' style='padding-top: 5px;'><input name='bir' class='form-control' type='text' readonly>
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
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>

<!-- LEVEL 5 -->
<div id='add-lvl-5-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Level 5</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/lvl_5_add" method="post">
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Subclassification</label></td>
					<td style='padding-top: 5px;'>
						<input type="hidden" name="lvl-5-add-acc-sub">
						<select id="lvl-5-add-acc-sub" name='lvl-5-add-acc-sub-select' class="demo-default" placeholder="Select..." style="z-index: 9999999999;" required disabled>
							<option value="">Select...</option>
							<?php foreach ($acc_sub as $key => $value) { ?>
								<option code='<?php echo $value->lvl_4_code; ?>' value="<?php echo $value->lvl_4_id; ?>"><?php echo $value->lvl_4_name; ?></option>
							<?php } ?>
						</select>
					</td>
					<td style="padding-top: 5px; width: 80px;">
						<input type="text" name="add-lvl5-lvl4-code" class='form-control no-space' placeholder="code" readonly style="width: 80px; text-align: center; height: 34px;" required>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='2' style="padding-top: 5px;"><input name='lvl-5-add-name' class='form-control no-space v-required' title='Please fill out this field' type='text' spellcheck="true">
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="lvl_1_id">
		<input type="hidden" name="lvl_2_id">
		<input type="hidden" name="lvl_3_id">
		<input type="hidden" name="lvl_4_id">
		<input type="hidden" name="lvl_1_code">
		<input type="hidden" name="lvl_2_code">
		<input type="hidden" name="lvl_3_code">
		<input type="hidden" name="lvl_4_code">
		<input type="hidden" name="lvl_1_name">
		<input type="hidden" name="lvl_2_name">
		<input type="hidden" name="lvl_3_name">
		<input type="hidden" name="lvl_4_name">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Done</button>
		</div>
	</form>
</div>
<div id='view-lvl-5-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Level 5</h4>
	</div>
	<div class='modal-body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Subclassification</label></td>
				<td style='padding-top: 5px;'>
					<select id="lvl-5-view-acc-sub" class="demo-default" placeholder="Select..." style="z-index: 9999999999;" disabled>
						<option value="">Select...</option>
						<?php foreach ($acc_sub as $key => $value) { ?>
							<option code='<?php echo $value->lvl_4_code; ?>' value="<?php echo $value->lvl_4_id; ?>"><?php echo $value->lvl_4_name; ?></option>
						<?php } ?>
					</select>
				</td>
				<td style="padding-top: 5px; width: 80px;">
					<input type="text" name="view-lvl5-lvl4-code" class='form-control' placeholder="code" readonly style="width: 80px; text-align: center; height: 34px;">
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='2' style="padding-top: 5px;"><input name='lvl-5-view-code' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='2' style='padding-top: 5px;'><input name='lvl-5-view-name' class='form-control' type='text' readonly>
				</td>
			</tr>
		</table>
	</div>
	<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
		<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='button' data-dismiss='modal' style='float: right;'>Close</button>
	</div>
</div>
<div id='edit-lvl-5-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Level 5</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/lvl_5_edit" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Subclassification</label></td>
					<td style='padding-top: 5px;'>
						<input type="hidden" name="lvl-5-edit-acc-sub">
						<select id="lvl-5-edit-acc-sub" name='lvl-5-edit-acc-sub-select' class="demo-default" placeholder="Select..." style="z-index: 9999999999;" required disabled>
							<option value="">Select...</option>
							<?php foreach ($acc_sub as $key => $value) { ?>
								<option code='<?php echo $value->lvl_4_code; ?>' value="<?php echo $value->lvl_4_id; ?>"><?php echo $value->lvl_4_name; ?></option>
							<?php } ?>
						</select>
					</td>
					<td style="padding-top: 5px; width: 80px;">
						<input type="text" name="edit-lvl5-lvl4-code" class='form-control no-space' placeholder="code" readonly style="width: 80px; text-align: center; height: 34px;" required>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='2' style="padding-top: 5px;"><input name='lvl-5-edit-code' class='form-control number v-number v-required' title='Please fill out this field' type='text'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='2' style='padding-top: 5px;'><input name='lvl-5-edit-name' class='form-control v-required' title='Please fill out this field' type='text' spellcheck="true">
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="lvl-5-edit-id">
		<input type="hidden" name="lvl-5-edit-join-id">
		<input type="hidden" name="lvl_1_id">
		<input type="hidden" name="lvl_2_id">
		<input type="hidden" name="lvl_3_id">
		<input type="hidden" name="lvl_4_id">
		<input type="hidden" name="lvl_1_code">
		<input type="hidden" name="lvl_2_code">
		<input type="hidden" name="lvl_3_code">
		<input type="hidden" name="lvl_4_code">
		<input type="hidden" name="lvl_1_name">
		<input type="hidden" name="lvl_2_name">
		<input type="hidden" name="lvl_3_name">
		<input type="hidden" name="lvl_4_name">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' data-dismiss='modal' style='float: right;'>Save Changes</button>
		</div>
	</form>
</div>
<div id='delete-lvl-5-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete Level 5</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/lvl_5_delete" method='post'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Subclassification</label></td>
					<td style='padding-top: 5px;'>
						<select id="lvl-5-delete-acc-sub" name='lvl-5-delete-acc-sub' class="demo-default" placeholder="Select..." style="z-index: 9999999999;" disabled>
							<option value="">Select...</option>
							<?php foreach ($acc_sub as $key => $value) { ?>
								<option value="<?php echo $value->lvl_4_id; ?>"><?php echo $value->lvl_4_name; ?></option>
							<?php } ?>
						</select>
					</td>
					<td style="padding-top: 5px; width: 80px;">
						<input type="text" name="delete-lvl5-lvl4-code" class='form-control no-space' placeholder="code" readonly style="width: 80px; text-align: center; height: 34px;" required>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='2' style="padding-top: 5px;"><input name='lvl-5-delete-code' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Subclassification</label></td>
					<td colspan='2' style='padding-top: 5px;'><input name='lvl-5-delete-name' class='form-control' type='text' readonly>
					</td>
				</tr>
			</table>
		</div>
		<input type="hidden" name="lvl-5-delete-id">
		<input type="hidden" name="lvl-5-delete-join-id">
		<input type="hidden" name="lvl_1_id">
		<input type="hidden" name="lvl_2_id">
		<input type="hidden" name="lvl_3_id">
		<input type="hidden" name="lvl_4_id">
		<input type="hidden" name="lvl_1_code">
		<input type="hidden" name="lvl_2_code">
		<input type="hidden" name="lvl_3_code">
		<input type="hidden" name="lvl_4_code">
		<input type="hidden" name="lvl_1_name">
		<input type="hidden" name="lvl_2_name">
		<input type="hidden" name="lvl_3_name">
		<input type="hidden" name="lvl_4_name">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='submit' data-dismiss='modal' style='float: right;'>Ok</button>
		</div>
	</form>
</div>

<!-- COA -->
<div id='add-coa-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add COA</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/coa_add" method="post">
		<div class='modal-body'>
			<div style="padding-bottom: 5px;">
				<table width='90%'>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="add-element-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;" required>
						</td>
						<td style='padding-top: 5px;'>
							<select id='add-element' name='add-element' class="demo-default v-select-required" title="Please fill out this field" placeholder="Select..." style="z-index: 9999999999;">
							</select>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="add-classification-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;" required>
						</td>
						<td style='padding-top: 5px;'>
							<select id='add-classification' name='add-classification' class="demo-default v-select-required" title="Please fill out this field" placeholder="Select..." style="z-index: 9999999999;">
							</select>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="add-line-item-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;" required>
						</td>
						<td style='padding-top: 5px;'>
							<select id='add-line-item' name='add-line-item' class="demo-default v-select-required" title="Please fill out this field" placeholder="Select..." style="z-index: 9999999999;">
							</select>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Subclassification</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="add-subclassification-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;" required>
						</td>
						<td style='padding-top: 5px;'>
							<select id='add-subclassification' name='add-subclassification' class="demo-default v-select-required" title="Please fill out this field" placeholder="Select..." style="z-index: 9999999999;">
							</select>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Subsidiary Name</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="add-lvl-5-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;" required>
						</td>
						<td style='padding-top: 5px;'>
							<input name='add-name' class='form-control v-required' title="Please fill out this field" type='text'>
						</td>
					</tr>
					<!-- <tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 6</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="add-lvl-6-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;" required>
						</td>
						<td colspan='2' style="padding-top: 5px;"><input name='add-name' class='form-control v-required' title="Please fill out this field" type='text'>
						</td>
					</tr> -->
				</table>
			</div>
			<div style="padding-bottom: 5px; background-color: #F3F3F3; border-top: 1px solid #C1C1C1;">
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
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Done</button>
		</div>
	</form>
</div>
<div id='view-coa-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
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
				<!-- <tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 6</label></td>
					<td style="padding-top: 5px; width: 50px;">
						<input type="text" name="view-lvl-6-code" class='form-control no-space' placeholder="code" style="text-align: center; height: 34px;" readonly>
					</td>
					<td colspan='2' style="padding-top: 5px;"><input name='view-name' class='form-control' type='text' readonly>
					</td>
				</tr> -->
			</table>
		</div>
		<div style="padding-bottom: 5px; background-color: #F3F3F3; border-top: 1px solid #C1C1C1;">
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
		<button class='btn btn-info btn-sm btn-raised ripple-effect close-popover' type='button' style='float: right;'>Close</button>
	</div>
</div>
<div id='edit-coa-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit COA</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/coa_edit" method="post">
		<div class='modal-body'>
			<div style="padding-bottom: 5px;">
				<table width='90%'>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Element</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="edit-element-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;" required>
						</td>
						<td style='padding-top: 5px;'>
							<select id='edit-element' name='edit-element' class="demo-default v-select-required" title="Please fill out field" placeholder="Select..." style="z-index: 9999999999;">
							</select>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="edit-classification-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;" required>
						</td>
						<td style='padding-top: 5px;'>
							<select id='edit-classification' name='edit-classification' class="demo-default v-select-required" title="Please fill out field" placeholder="Select..." style="z-index: 9999999999;">
							</select>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Line Item</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="edit-line-item-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;" required>
						</td>
						<td style='padding-top: 5px;'>
							<select id='edit-line-item' name='edit-line-item' class="demo-default v-select-required" title="Please fill out field" placeholder="Select..." style="z-index: 9999999999;">
							</select>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Subclassification</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="edit-subclassification-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;" required>
						</td>
						<td style='padding-top: 5px;'>
							<select id='edit-subclassification' name='edit-subclassification' class="demo-default v-select-required" title="Please fill out field" placeholder="Select..." style="z-index: 9999999999;">
							</select>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Subsidiary Name</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="edit-lvl-5-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;" required>
						</td>
						<td style='padding-top: 5px;'>
							<input name='edit-name' class='form-control v-required' title="Please fill out this field" type='text'>
						</td>
					</tr>
					<!-- <tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 6</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="edit-lvl-6-code" class='form-control no-space' placeholder="code" readonly style="text-align: center; height: 34px;" required>
						</td>
						<td colspan='2' style="padding-top: 5px;"><input name='edit-name' class='form-control v-required' title="Please fill out this field" type='text'>
						</td>
					</tr> -->
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
		<input type="hidden" name="edit-coa-lvl-6">
		<input type="hidden" name="o_lvl6_id">
		<input type="hidden" name="o_lvl5_id">
		<input type="hidden" name="o_coa_name">
		<input type="hidden" name="edit-id">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Save Changes</button>
		</div>
	</form>
</div>
<div id='delete-coa-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete COA</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/chart_of_accounts/coa_delete" method="post">
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
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Subsidiary Name</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="delete-lvl-5-code" class='form-control no-space' placeholder="code" style="text-align: center; height: 34px;" readonly>
						</td>
						<td style='padding-top: 5px;'>
							<input name='delete-coa-lvl-5' class="form-control" readonly>
						</td>
					</tr>
					<!-- <tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Level 6</label></td>
						<td style="padding-top: 5px; width: 50px;">
							<input type="text" name="delete-lvl-6-code" class='form-control no-space' placeholder="code" style="text-align: center; height: 34px;" readonly>
						</td>
						<td colspan='2' style="padding-top: 5px;"><input name='delete-name' class='form-control' type='text' readonly>
						</td>
					</tr> -->
				</table>
			</div>
			<div style="padding-bottom: 5px; background-color: #F3F3F3; border-top: 1px solid #C1C1C1;">
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
		<input type="hidden" name="o_lvl6_id">
		<input type="hidden" name="delete-id">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect close-popover' type='submit' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
