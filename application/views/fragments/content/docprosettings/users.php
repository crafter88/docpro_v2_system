<div class='side-body padding-top hide-table-setting'>
	<div class='card custom-card col-md-9 main-table-panel'>
		<div class='card-body' style='padding: 0;'>
			<div id='custom-card-title' class='row' style="margin: 30px 0 0 0; text-align: center;">
				<div class='panel panel-default' style="border: none; border-bottom: 2px solid #000">
					<div class='panel-body'>
						<p style="font-size: 24px; margin: 0;">Users</p>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-12' id='users-table-row'>
					<button id='add' type='button' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add'><i class='fa fa-plus'></i></button>
					<table id='users-table' class='table table-hovered table-bordered' style='min-width: 99.8%;'>
						<thead>
							<th></th>
							<th>Sequence</th>
							<th>Name</th>
							<th>Home Address</th>
							<th>Contact Number</th>
							<th>Email Address</th>
							<th>Username</th>
							<th>Access Level</th>
						</thead>
					</table>
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
<div id='u-user-type-select' style='display: none;'>
	<button class='btn btn-default select-option-user-type ripple-effect' type='button' style='width: 100%; margin-bottom: 0;'>Super Admin</button>
	<button class='btn btn-default select-option-user-type ripple-effect' type='button' style='width: 100%; margin-bottom: 0;'>Admin</button>
	<button class='btn btn-default select-option-user-type ripple-effect' type='button' style='width: 100%; margin-bottom: 0;'>User</button>
</div>
<div id='add-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add User</h4>
	</div>
	<form action="<?php echo base_url(); ?>docpro_settings/users/add" method='post' class='body'>
		<div class='modal-body'>
			<table style="width: 90%; margin-left: 20px;">
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>First Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' type='text' name='add-fname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Middle Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' type='text' name='add-mname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Last Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' type='text' name='add-lname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' type='text' name='add-address'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Mobile Number</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control number v-number v-format' f='^[0-9]{11}$' title='Mobile number format: 09xxxxxxxxx' type='text' name='add-cno'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Email</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-format' f='@{1}' title="Email address requires '@'" type='email' name='add-email'></td>
				</tr>
			</table>
			<div style="border-top: 1px solid #C1C1C1; margin-top: 15px; background-color: #F1F1F1; padding-bottom: 10px;">
				<table style="width: 90%; margin-left: 20px;">
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Username</label></td>
						<td colspan='3' style='padding-top: 10px;'>
						<span id='add-username-notif' style='font-size: 10px; color: red; display: none;'><i class='fa fa-warning'></i>&nbsp; Username already taken!</span>
						<input class='form-control add-username v-required v-format v-unique' u='/docpro_settings/users/check_username' f="^\S{6,}$" title='Minimum of 6 characters and must be unique' o_title='Minimum of 6 characters and must be unique' type='text' name='add-username'>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Password</label></td>
						<td colspan='3' style='padding-top: 5px;'><input class='form-control add-password1 v-required' title="Please fill out this field" type='password' name='add-password'></td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Re-Type Password</label></td>
						<td colspan='3' style='padding-top: 5px;'>
						<span id='add-password-match' style='color: red; font-size: 10px; display: none;'><i class='fa fa-warning'></i>&nbsp; Password doesn't match!</span>
						<input class='form-control add-password2 v-required' title="Please fill out this field" type='password' name='add-r-password'>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Access Level</label></td>
						<td colspan='3' style='padding-top: 5px;'>
							<select class='v-select-required' id='add-user-type' name='add-user-type' placeholder='Select...'>
								<option value='Super Admin'>Super Admin</option>
								<option value='Admin'>Admin</option>
								<option value='User'>User</option>
							</select>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button id='add-submit' class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Ok</button>
		</div>
	</form>
</div>
<div id='view-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View User</h4>
	</div>
	<div class='modal-body'>
		<table width='90%'>
			<tr>
				<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
				<td colspan='3' style='padding-top: 10px;'><input name='view-seq' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>First Name</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-fname' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Middle Name</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-mname' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Last Name</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-lname' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-address' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Contact Number</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-cno' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Email</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-email' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Username</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-username' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Access Level</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-user-type' class='form-control' type='text' placeholder='Select...' readonly>
				</td>
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
	<form action="<?php echo base_url(); ?>docpro_settings/users/edit" method='post' class='body'>
		<div class='modal-body'>
			<table style="width: 90%; margin-left: 20px;">
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
					<td style='padding-top: 5px;'><input class='form-control no-space' type='text' name='edit-seq' disabled></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>First Name</label></td>
					<td style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' type='text' name='edit-fname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Middle Name</label></td>
					<td style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' type='text' name='edit-mname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Last Name</label></td>
					<td style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' type='text' name='edit-lname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
					<td style='padding-top: 5px;'><input class='form-control v-required' title='Please fill out this field' type='text' type='text' name='edit-address'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Contact Number</label></td>
					<td style='padding-top: 5px;'><input class='form-control v-number v-format' f='^[0-9]{11}$' title='Mobile number format: 09xxxxxxxxx' type='text' name='edit-cno'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Email</label></td>
					<td style='padding-top: 5px;'><input class='form-control v-format' f='@{1}' title="Email address requires '@'" type='text' name='edit-email'></td>
				</tr>
			</table>
			<div style="border-top: 1px solid #C1C1C1; margin-top: 15px; background-color: #F1F1F1; padding-bottom: 10px;">
				<table style='width: 90%; margin-left: 20px;'>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Username</label></td>
						<td style='padding-top: 10px;'>
						<span id='edit-username-notif' style='font-size: 10px; color: red; display: none;'><i class='fa fa-warning'></i>&nbsp; Username already taken!</span>
						<input class='form-control edit-username v-required v-format v-unique' u='/setup/setup2/check_username' f="^\S{6,}$" title='Minimum of 6 characters and must be unique' o_title='Minimum of 6 characters and must be unique' type='text' name='edit-uname'>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>New Password</label></td>
						<td style='padding-top: 5px;'><input class='form-control edit-password1' type='password' name='edit-npass'></td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Re-Type Password</label></td>
						<td style='padding-top: 5px;'>
						<span id='edit-password-match' style='color: red; font-size: 10px; display: none;'><i class='fa fa-warning'></i>&nbsp; Password doesn't match!</span>
						<input class='form-control edit-password2' type='password' name='edit-rpass'>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Access Level</label></td>
						<td colspan='3' style='padding-top: 5px;'>
							<select class='v-select-required' id='edit-user-type' name='edit-user-type' placeholder='Select...'>
								<option value='Super Admin'>Super Admin</option>
								<option value='Admin'>Admin</option>
								<option value='User'>User</option>
							</select>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<input type='hidden' name='edit-id'>
		<input type='hidden' name='p-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button id='edit-submit' class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>OK</button>
		</div>
	</form>
</div>