<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Users</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 10px;'>
			<!-- <div class='hint--right' data-hint='Add'>
				<button id='add' type='button' class='btn btn-info btn-sm btn-raised ripple-effect'><i class='fa fa-plus'></i></button>
			</div> -->
			<div class='row'>
				<div class='col-md-12' id='users-table-row'>
					<table id='users-table' class='table table-hovered table-bordered' style='min-width: 100%;'>
						<thead>
							<th>Options</th>
							<th>Sequence</th>
							<th>Code</th>
							<th>Name</th>
							<th>Username</th>
							<th>Company</th>
							<th>Access Level</th>
						</thead>
					</table>
				</div>
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
	<div class='col-md-8'>
		<form action="<?php echo base_url(); ?>docpro_settings/users/add" method='post' class='body'>
			<div class='modal-body'>
				<table style="width: 90%; margin-left: 20px;">
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>First Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-fname'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Middle Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-mname'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Last Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-lname'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-address'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Contact Number</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-cno'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Email</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-email'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Username</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-username'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Password</label></td>
						<td colspan='3'style='padding-top: 10px;'><input class='form-control' type='password' name='add-password'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Re-Type Password</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='password' name='add-r-password'></td>
					</tr>
					<tr>
						<input type='hidden' name='add-cb-id'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Company</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input class='form-control' type='text' name='add-company' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon add-company-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Access Level</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input class='form-control' type='text' name='add-user-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon add-user-type-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
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
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View User</h4>
	</div>
	<div class='view-body'>
		<div class='modal-body'>
			<input id='view-seq' type='text' style='border: none; float: right; width: 46px; padding-top: 2px; font-weight: bold; background-color: white; margin-right: 23px; padding-left: 3px;' disabled>
			<label style='float: right;'>Sequence: </label>
			<table width='90%'>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>First Name</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-fname' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Middle Name</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-mname' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Last Name</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-lname' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-address' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Contact Number</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-cno' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Email</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-email' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Username</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-username' class='form-control' type='text' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Company</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-company' class='form-control' type='text' placeholder='Select...' readonly>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Access Level</label></td>
					<td colspan='3' style='padding-top: 10px;'><input id='view-user-type' class='form-control' type='text' placeholder='Select...' readonly>
					</td>
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
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit User</h4>
	</div>
	<div class='col-md-8'>
		<form action="<?php echo base_url(); ?>docpro_settings/users/edit" method='post' class='body'>
			<div class='modal-body'>
				<input id='edit-seq' type='text' style='border: none; float: right; width: 46px; padding-top: 2px; font-weight: bold; background-color: white; margin-right: 23px; padding-left: 3px;' disabled>
				<label style='float: right;'>Sequence: </label>
				<table width='90%'>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>First Name</label></td>
						<td style='padding-top: 10px; width: 270px;'><input id='edit-fname' class='form-control' type='text' name='edit-fname'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Middle Name</label></td>
						<td style='padding-top: 10px; width: 270px;'><input id='edit-mname' class='form-control' type='text' name='edit-mname'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Last Name</label></td>
						<td style='padding-top: 10px; width: 270px;'><input id='edit-lname' class='form-control' type='text' name='edit-lname'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Address</label></td>
						<td style='padding-top: 10px; width: 270px;'><input id='edit-address' class='form-control' type='text' name='edit-address'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Contact Number</label></td>
						<td style='padding-top: 10px; width: 270px;'><input id='edit-cno' class='form-control' type='text' name='edit-cno'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Email</label></td>
						<td style='padding-top: 10px; width: 270px;'><input id='edit-email' class='form-control' type='text' name='edit-email'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Username</label></td>
						<td style='padding-top: 10px; width: 270px;'><input id='edit-uname' class='form-control' type='text' name='edit-uname'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>New Password</label></td>
						<td style='padding-top: 10px;'><input id='edit-npass' class='form-control' type='password' name='edit-npass'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Re-Type Password</label></td>
						<td style='padding-top: 10px;'><input id='edit-rpass' class='form-control' type='password' name='edit-rpass'></td>
					</tr>
					<tr>
						<input id='edit-cb-id' type='hidden' name='edit-cb-id'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Company</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='edit-company' class='form-control' type='text' name='edit-company' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon edit-company-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>'
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Access Level</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='edit-user-type' class='form-control' type='text' name='edit-user-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon edit-user-type-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<input type='hidden' id='edit-id' name='edit-id'>
			<input type='hidden' id='p-id' name='p-id'>
			<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
				<button class='btn btn-info btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>OK</button>
			</div>
		</form>
	</div>
	<div class='col-md-4' id='edit-options' style='background-color: white; overflow-y: scroll;'>
	</div>
</div>