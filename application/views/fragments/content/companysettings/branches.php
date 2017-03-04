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
                    		<li><span id='show-filters' data-status='0'>Show Filters</span></li>
                    		<li><span id='advance-search' data-status='0'>Advance Search</span></li>
                    		<li class="divider"></li>
                    		<li><span id='show-all-col' data-status='0'>Show All Columns</span></li>
                  		</ul>
                	</div>
              	</div>
            </div>
    		<div class='box-body hide-table-setting'>
    			<div class='row'>
    				<div class='col-md-12' id='company-table-row' style="padding-right: 20px;">
    					<div class='row hide-filter'>
    						<div class='col-md-12' style="margin: 0;">
    							<h3 class='filter-title'>FILTERS</h3>
    						</div>
    					</div>
    					<div class='row hide-filter'>
							<div class='col-md-6'>
								<div class="input-group">
								  <span class="input-group-addon filter-subtitle">Tax Type</span>
								  <select id='filter1' class='form-control' placeholder='--- SELECT ---'></select>
								</div>
							</div>
    					</div>
    					<div class='row'>
    						<div class='col-md-1' style="margin-bottom: 10px;">
    							<button id='add' type='button' class='btn btn-info btn-sm btn-raised ripple-effect title' title='Add New' <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?> style='height: 34px; margin: 0;'><i class='fa fa-plus'></i> Add New</button>
    						</div>
    						<div class='col-md-11' style="margin-bottom: 10px;">
    							<div class="input-group table-search">
								  <span class="input-group-addon" id="basic-addon1"><i class='fa fa-search'></i></span>
								  <input type="text" class="form-control general-search" placeholder="General Search..." aria-describedby="basic-addon1">
								</div>
    						</div>
    					</div>
						<table id='branches-table' class='table table-bordered' style="width: 100%;">
							<thead>
								<tr>
									<th></th>
									<th>Sequence</th>
									<th>Code</th>
									<th>Name</th>
									<th>Address</th>
									<th>TIN</th>
									<th>Tax Type</th>
									<th>Contact Number</th>
									<th>Email</th>
								</tr>
								<tr id="searchfilterrow" class='hide-searchfilter searchfilterrow'>
									<th></th>
									<th>Sequence</th>
									<th>Code</th>
									<th>Name</th>
									<th>Address</th>
									<th>TIN</th>
									<th>Tax Type</th>
									<th>Contact Number</th>
									<th>Email</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id='add-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Branch</h4>
	</div>
	<form action='<?php echo base_url(); ?>/company_settings/branches/add' method='post' class='body'>
		<div class='modal-body'>
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Branch Name</label></td>
					<td style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='branch_name'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 154px; text-align: right; padding-right: 20px; padding-left: 20px;'><label>Business Address</label></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_number' placeholder="Room / Floor / Building Number / Building Name">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_street' placeholder="Street">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_barangay' placeholder="Barangay">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_city' placeholder="City or Municipality">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_province' placeholder="Province">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-number v-format v-required' title='Please fill out this field' f="^[0-9]{4}$" type='text' name='br_ba_zip' title='4 digit zip code' placeholder="ZIP Code">
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Tax Type</label></td>
					<td style='padding-top: 5px;'>
						<select id='add-tax-type' name='branch_tax_type' class="v-select-required" title='Please fill out this field'>
							<option value='VAT'>VAT</option>
							<option value='Non-VAT'>Non-VAT</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
					<td style='padding-top: 5px;'><input class='form-control v-required v-format v-tin' f='^([0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4})$' title='TIN Format: xxx-xxx-xxx-xxxx' type='text' name='branch_tin'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Contact Number</label></td>
					<td style='padding-top: 5px;'><input class='form-control v-required v-format' f='^([0-9]{3}\-[0-9]{3}\-[0-9]{4}|[0-9]{11})$' title='Landline (xxx-xxx-xxxx) OR Mobile (09xxxxxxxxx)' type='text' name='branch_cno'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Email</label></td>
					<td style='padding-top: 5px;'><input class='form-control v-required v-format' title='Please fill out this field' f='@{1}' type='text' name='branch_email'></td>
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
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Branch</h4>
	</div>
	<div class='modal-body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-seq' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-code' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Name</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-name' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 154px; text-align: right; padding-right: 20px; padding-left: 20px;'><label>Business Address</label></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_number' placeholder="Room / Floor / Building Number / Building Name" readonly>
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control' type='text' name='br_ba_street' placeholder="Street" readonly>
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_barangay' placeholder="Barangay" readonly>
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_city' placeholder="City or Municipality" readonly>
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control' type='text' name='br_ba_province' placeholder="Province" readonly>
				</td>
			</tr>
			<tr>
				<td></td>
				<td style='padding-top: 5px;'>
					<input class='form-control v-number v-format' f="^[0-9]{4}$" type='text' name='br_ba_zip' title='4 digit zip code' placeholder="ZIP Code" readonly>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-tin' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Tax Type</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-tax-type' class='form-control' type='text' readonly>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Contact Number</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-cno' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Email</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-email' class='form-control' type='text' readonly></td>
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
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Branch</h4>
	</div>
	<form action='branches/edit' method='post' class='body'>
		<div class='modal-body'>
			<table width='93%'>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='edit-seq' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required v-number' title='Please fill out this field' type='text' name='edit-code'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='edit-name'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 154px; text-align: right; padding-right: 20px; padding-left: 20px;'><label>Business Address</label></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_number' placeholder="Room / Floor / Building Number / Building Name">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_street' placeholder="Street">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_barangay' placeholder="Barangay">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_city' placeholder="City or Municipality">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_province' placeholder="Province">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-number v-format v-required' title='Please fill out this field' f="^[0-9]{4}$" type='text' name='br_ba_zip' title='4 digit zip code' placeholder="ZIP Code">
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Tax Type</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='edit-tax-type' name='edit-tax-type' class='v-select-required' title="Please fill out this field" placeholder='Select...'>
							<option value='VAT'>VAT</option>
							<option value='Non-VAT'>Non-VAT</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required v-format v-tin' f='^([0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4})$' title='TIN Format: xxx-xxx-xxx-xxxx' type='text' name='edit-tin'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Contact Number</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required v-format' f='^([0-9]{3}\-[0-9]{3}\-[0-9]{4}|[0-9]{11})$' title='Landline (xxx-xxx-xxxx) OR Mobile (09xxxxxxxxx)' type='text' name='edit-cno'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Email</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required v-format' title='Please fill out this field' f='@{1}' type='text' name='edit-email'></td>
				</tr>
			</table>
		</div>
		<input type='hidden' name='edit-id'>
		<input type='hidden' name='ch-cb-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Save Changes</button>
		</div>
	</form>
</div>
<div id='update-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update Branch</h4>
	</div>
	<form action='branches/update' method='post' class='body'>
		<div class='modal-body'>
			<table width='93%'>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='update-seq' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required v-number' title='Please fill out this field' type='text' name='update-code'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='update-name'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 154px; text-align: right; padding-right: 20px; padding-left: 20px;'><label>Business Address</label></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_number' placeholder="Room / Floor / Building Number / Building Name">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_street' placeholder="Street">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_barangay' placeholder="Barangay">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_city' placeholder="City or Municipality">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-required' title='Please fill out this field' type='text' name='br_ba_province' placeholder="Province">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style='padding-top: 5px;'>
						<input class='form-control v-number v-format v-required' title='Please fill out this field' f="^[0-9]{4}$" type='text' name='br_ba_zip' title='4 digit zip code' placeholder="ZIP Code">
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Tax Type</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='update-tax-type' name='update-tax-type' class='v-select-required' title="Please fill out this field" placeholder='Select...'>
							<option value='VAT'>VAT</option>
							<option value='Non-VAT'>Non-VAT</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required v-format v-tin' f='^([0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4})$' title='TIN Format: xxx-xxx-xxx-xxxx' type='text' name='update-tin'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Contact Number</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required v-format' f='^([0-9]{3}\-[0-9]{3}\-[0-9]{4}|[0-9]{11})$' title='Landline (xxx-xxx-xxxx) OR Mobile (09xxxxxxxxx)' type='text' name='update-cno'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Email</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required v-format' title='Please fill out this field' f='@{1}' type='text' name='update-email'></td>
				</tr>
			</table>
		</div>
		<input type='hidden' name='update-id'>
		<input type='hidden' name='ch-cb-id'>
		<input type='hidden' name='cbbr-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Save Changes</button>
		</div>
	</form>
</div>