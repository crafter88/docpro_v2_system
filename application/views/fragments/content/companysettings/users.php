<input id='mc_id' type="hidden" name="mc_id" value="<?php echo $user->main_company->cb_id; ?>">
<input id='bc_id' type="hidden" name="bc_id" value="<?php echo $user->cb_id; ?>">
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
								  <span class="input-group-addon filter-subtitle">Access Level</span>
								  <select id='filter1' class='form-control' placeholder='--- SELECT ---'></select>
								</div>
							</div>
    					</div>
    					<div class='row'>
    						<div class='col-md-1' style="margin-bottom: 10px;">
    							<button id='add' type='button' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add New' <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?> style='height: 34px; margin: 0;'><i class='fa fa-plus'></i> Add New</button>
    						</div>
    						<div class='col-md-11' style="margin-bottom: 10px;">
    							<div class="input-group table-search">
								  <span class="input-group-addon" id="basic-addon1"><i class='fa fa-search'></i></span>
								  <input type="text" class="form-control general-search" placeholder="General Search..." aria-describedby="basic-addon1">
								</div>
    						</div>
    					</div>
						<table id='users-table' class='table table-hovered table-bordered' style='min-width: 100%;'>
							<thead>
								<tr>
									<th></th>
									<th>Seq</th>
									<th>Name</th>
									<th>Address</th>
									<th>Contact Number</th>
									<th>Email</th>
									<th>Branch</th>
									<th>Access Level</th>
									<th>Username</th>
								</tr>
								<tr id="searchfilterrow" class='hide-searchfilter searchfilterrow'>
									<th></th>
									<th>Seq</th>
									<th>Name</th>
									<th>Address</th>
									<th>Contact Number</th>
									<th>Email</th>
									<th>Branch</th>
									<th>Access Level</th>
									<th>Username</th>
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
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add User</h4>
	</div>
	<form action="<?php echo base_url(); ?>company_settings/users/add" method='post' class='body'>
		<div class='modal-body'>
			<table style="width: 90%; margin-left: 20px;">
				<tr>
					<td style='width: 130px; text-align: right; padding-right: 20px;'><label>First Name</label></td>
					<td colspan='3'><input class='form-control v-required' title='Please fill out this field' type='text' name='add-fname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Middle Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='add-mname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Last Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='add-lname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Address</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='add-address'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Mobile No.</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-number v-format' f='^[0-9]{11}$' title='Mobile number format: 09xxxxxxxxx' type='text' name='add-cno'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Email</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-format' f='@{1}' title="Email address requires '@'" type='text' name='add-email'></td>
				</tr>
				<tr class='add-branch'>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Branch</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select name='add-branch' class='v-select-required' title="Please fill out this field" placeholder='Select...'>
						</select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Access Level</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select name='add-user-access-level' class='v-select-required' title="Please fill out this field" placeholder='Select...'>
						</select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Username</label></td>
					<td colspan='3' style='padding-top: 5px;'><input type='text' class='form-control v-required v-format v-unique' u='/setup/setup2/check_username' f="^\S{6,}$" title='Minimum of 6 characters and must be unique' o_title='Minimum of 6 characters and must be unique' name='add-username'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Password</label></td>
					<td colspan='3' style='padding-top: 5px;'><input type='password' class='form-control' name='add-password' disabled></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Validity Date</label></td>
					<td colspan='3' style='padding-top: 5px;'><input type='date' class='form-control v-required' title="Please fill out this field" name='add-validity-date'></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Done</button>
		</div>
	</form>
</div>
<div id='view-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View User</h4>
	</div>
	<div class='modal-body'>
		<table style="width: 90%; margin-left: 20px;">
			<tr>
				<td style='padding-top: 10px; width: 130px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
				<td colspan='3' style="padding-top: 10px;"><input class='form-control' type='text' name='view-sequence' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>First Name</label></td>
				<td colspan='3' style="padding-top: 5px;"><input class='form-control' type='text' name='view-fname' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Middle Name</label></td>
				<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='view-mname' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Last Name</label></td>
				<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='view-lname' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Address</label></td>
				<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='view-address' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Mobile No.</label></td>
				<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='view-cno' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Email</label></td>
				<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='view-email' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Branch</label></td>
				<td colspan='3' style='padding-top: 5px;'><input class='form-control' type="text" name="view-branch" readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Access Level</label></td>
				<td colspan='3' style='padding-top: 5px;'><input class='form-control' type="text" name="view-user-access-lvl" readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Username</label></td>
				<td colspan='3' style='padding-top: 5px;'><input type='text' class='form-control' name='view-username' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Validity Date</label></td>
				<td colspan='3' style='padding-top: 5px;'><input type='text' class='form-control' name='view-validity-date' readonly></td>
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
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit User</h4>
	</div>
	<form action='<?php echo base_url(); ?>company_settings/users/edit' method='post' class='body'>
		<div class='modal-body'>
			<table style="width: 90%; margin-left: 20px;">
				<tr>
					<td style='width: 130px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
					<td colspan='3'><input class='form-control' type='text' name='edit-sequence' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>First Name</label></td>
					<td colspan='3' style="padding-top: 5px;"><input class='form-control v-required' title='Please fill out this field' type='text' name='edit-fname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Middle Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='edit-mname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Last Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='edit-lname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Address</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' name='edit-address'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Mobile No.</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-number v-format' f='^[0-9]{11}$' title='Mobile number format: 09xxxxxxxxx' type='text' name='edit-cno'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Email</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-format' f='@{1}' title="Email address requires '@'" type='text' name='edit-email'></td>
				</tr>
				<tr class='add-branch'>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Branch</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select name='edit-branch' class='v-select-required' title="Please fill out this field" placeholder='Select...'>
						</select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Access Level</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select name='edit-user-access-level' class='v-select-required' title='Please fill out this field' placeholder='Select...'>
						</select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Username</label></td>
					<td colspan='3' style='padding-top: 5px;'><input type='text' class='form-control v-required v-format v-unique' u='/setup/setup2/check_username' f="^\S{6,}$" title='Minimum of 6 characters and must be unique' o_title='Minimum of 6 characters and must be unique' name='edit-username'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Password</label></td>
					<td colspan='3' style='padding-top: 5px;'><input type='password' class='form-control' title='Password is equal to the username by default' name='edit-password' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 130px; text-align: right; padding-right: 20px;'><label>Validity Date</label></td>
					<td colspan='3' style='padding-top: 5px;'><input type='date' class='form-control v-required' type='date' name='edit-validity-date'></td>
				</tr>
			</table>
		</div>
		<input type='hidden' name='u-id'>
		<input type='hidden' name='p-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Save Changes</button>
		</div>
	</form>
</div>

<!-- MODALS -->
<div id='add-branch-modal' class='modal fade-scale' tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class='modal-content'>
			<div class='modal-header'>
				<button type="button" class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4>Add Branch</h4>
			</div>
			<form action='<?php echo base_url(); ?>/company_settings/users/add_branch' method='post' class='body'>
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
				<div class='modal-footer'>
					<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
				</div>
			</form>
		</div>
	</div>
</div>