<input id='mc_id' type="hidden" name="mc_id" value="<?php echo $user->main_company->cb_id; ?>">
<input id='bc_id' type="hidden" name="bc_id" value="<?php echo $user->cb_id; ?>">
<div class='side-body padding-top hide-table-setting'>
	<div class='card custom-card col-md-9 main-table-panel'>
		<div class='card-body hide-table-setting' style='padding: 0;'>
			<div id='custom-card-title' class='row' style="margin: 30px 0 0 0; text-align: center;">
				<div class='panel panel-default' style="border: none; border-bottom: 2px solid #000">
					<div class='panel-body'>
						<p style="font-size: 24px; margin: 0;">Users</p>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-12'>
					<div class='col-md-12' id='users-table-row' style="padding: 0;">
						<button id='add' type='button' class='btn btn-info btn-sm btn-raised ripple-effect' <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?>><i class='fa fa-plus'></i></button>
						<table id='users-table' class='table table-hovered table-bordered' style='min-width: 100%;'>
							<thead>
								<th>Options</th>
								<th>Seq</th>
								<th>First Name</th>
								<th>Middle Name</th>
								<th>Last Name</th>
								<th>Address</th>
								<th>Contact Number</th>
								<th>Email</th>
								<th>Branch</th>
								<th>Access Level</th>
								<th>Username</th>
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
<div id='u-company-select' style='display: none;'>
	<?php foreach($company_branches as $cb){ ?>
	<button class='btn btn-default select-option-company ripple-effect' cb-id='<?php echo $cb->cb_id; ?>' type='button' style='width: 100%'><h6><?php echo $cb->cb_name;?></h6></button>
	<?php }?>
</div>
<div id='u-user-type-select' style='display: none;'>
	<button class='btn btn-default select-option-user-type' type='button' style='width: 100%'>Super Admin</button>
	<button class='btn btn-default select-option-user-type' type='button' style='width: 100%'>Admin</button>
	<button class='btn btn-default select-option-user-type' type='button' style='width: 100%'>User</button>
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
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
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
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
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