<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Company</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 10px;'>
			<button id='add' type='button' class='btn btn-info btn-sm hint--right' data-hint='Add'><i class='fa fa-plus'></i></button>
			<div class='row'>
				<div class='col-md-12' id='company-table-row'>
					<table id='company-table' class='table table-hovered table-bordered' width='100%'>
						<thead>
							<th>Options</th>
							<th>Code</th>
							<th>Sequence</th>
							<th>Name</th>
							<th>Address</th>
							<th>TIN</th>
							<th>Tax Type</th>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div id='co-class-select' style='display: none;'>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Company</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Branch</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Customer</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Supplier Ordinary Goods</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Supplier Capital Goods</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Supplier Other Goods</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Supplier Services</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Related Party</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Stock Holder/Owner</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Employee</button>
</div>

<div id='add-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button class='close' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title'>Add</h4>
			</div>
			<form action='#' method='post'>
				<div class='modal-body'>
					<input type='text' style='border: none; float: right; width: 40px; margin-right: 50px;'>
					<label style='float: right;'>Sequence: </label>
					
					<table width='90%'>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
							<td colspan='3' style='padding-top: 10px;'>
								<div class='input-group' style='width: 100%'>
									<input class='form-control' type='text' name='classification' placeholder='Select...' readonly>
									<span type='button' class='input-group-addon classification-btn'><i class='fa fa-caret-right'></i></span>
								</div>
							</td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
							<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
							<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Tax Type</label></td>
							<td style='padding-top: 10px;'>
								<select class='form-control'>
									<option value='IT'>Income Tax</option>
									<option value='VAT'>Value Added Tax</option>
									<option value='PT'>Percentage Tax</option>
									<option value='ET'>Excise Tax</option>
									<option value='EWT'>Expanded Withholding Tax</option>
									<option value='FWT'>Final Withholding Tax</option>
									<option value='ST'>Special Tax</option>
								</select>
							</td>
							<td style='padding-top: 10px; padding-left: 10px; padding-right: 10px;'><label>TIN</label></td>
							<td style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
					</table>
				</div>
				<div class='modal-footer'>
					<button class='btn btn-primary btn-sm' type='submit' style='float: left;'>Ok</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div id='edit-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button class='close' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title'>Edit</h4>
			</div>
			<form action='#' method='post'>
				<div class='modal-body'>
					<input type='text' style='border: none; float: right; width: 40px;'>
					<label style='float: right;'>Sequence: </label>
					
					<table width='100%'>
						<tr>
							<td style='padding-top: 10px;'><label>Name</label></td>
							<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px;'><label>Address</label></td>
							<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px;'><label>Tax Type</label></td>
							<td style='padding-top: 10px;'>
								<select class='form-control'>
									<option value='IT'>Income Tax</option>
									<option value='VAT'>Value Added Tax</option>
									<option value='PT'>Percentage Tax</option>
									<option value='ET'>Excise Tax</option>
									<option value='EWT'>Expanded Withholding Tax</option>
									<option value='FWT'>Final Withholding Tax</option>
									<option value='ST'>Special Tax</option>
								</select>
							</td>
							<td style='padding-top: 10px; padding-left: 10px;'><label>TIN</label></td>
							<td style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
					</table>
				</div>
				<div class='modal-footer'>
					<button class='btn btn-primary btn-sm' type='submit'>Ok</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div id='update-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button class='close' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title'>Update</h4>
			</div>
			<form action='#' method='post'>
				<div class='modal-body'>
					<input type='text' style='border: none; float: right; width: 40px;'>
					<label style='float: right;'>Sequence: </label>
					
					<table width='100%'>
						<tr>
							<td style='padding-top: 10px;'><label>Name</label></td>
							<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px;'><label>Address</label></td>
							<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px;'><label>Tax Type</label></td>
							<td style='padding-top: 10px;'>
								<select class='form-control'>
									<option value='IT'>Income Tax</option>
									<option value='VAT'>Value Added Tax</option>
									<option value='PT'>Percentage Tax</option>
									<option value='ET'>Excise Tax</option>
									<option value='EWT'>Expanded Withholding Tax</option>
									<option value='FWT'>Final Withholding Tax</option>
									<option value='ST'>Special Tax</option>
								</select>
							</td>
							<td style='padding-top: 10px; padding-left: 10px;'><label>TIN</label></td>
							<td style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
					</table>
				</div>
				<div class='modal-footer'>
					<button class='btn btn-primary btn-sm' type='submit'>Ok</button>
				</div>
			</form>
		</div>
	</div>
</div>