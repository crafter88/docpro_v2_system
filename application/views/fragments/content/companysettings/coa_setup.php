<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>COA Settings</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 0; padding-left: 0; padding-right: 0;'>
			<ol class="breadcrumb">
			  <li id='bc-cat1' class='active'>...</li>
			  <li id='bc-cat2' class='active'>...</li>
			  <li id='bc-cat3' class='active'>...</li>
			</ol>

			<div id='coa_sequence' style="height: 650px">
				<ul class='seq-canvas'>
					<li>
						<label class='category-label'>Category 1</label>
						<div class='content'>
							<div class='add-btn-container title' custom-title='Add'>
								<button id='add-level-1' type='button' class='btn btn-info btn-sm btn-raised ripple-effect' style="margin-bottom: -65px; z-index: 999999;"><i class='fa fa-plus'></i></button>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class='col-md-12'>
										<table id='lvl-1-table' class='table table-bordered table-hover' style="min-width: 100%;">
											<thead>
												<th>Option</th>
												<th>Code</th>
												<th>Name</th>
											</thead>
										</table>
									</div>
								</div>
							</div>
						</div>
					</li>															
					<li>
						<label class='category-label'>Category 2</label>
						<div class='content'>
							<div class='add-btn-container title' custom-title='Add'>
								<button id='add-level-2' type='button' class='btn btn-info btn-sm btn-raised ripple-effect' style="margin-bottom: -65px; z-index: 999999;"><i class='fa fa-plus'></i></button>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class='col-md-12'>
										<table id='lvl-2-table' class='table table-bordered table-hover' style="min-width: 100%;">
											<thead>
												<th>Option</th>
												<th>Code</th>
												<th>Name</th>
											</thead>
										</table>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<label class='category-label'>Category 3</label>
						<div class='content'>
							<div class='add-btn-container title' custom-title='Add'>
								<button id='add-level-3' type='button' class='btn btn-info btn-sm btn-raised ripple-effect' style="margin-bottom: -65px; z-index: 999999;"><i class='fa fa-plus'></i></button>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class='col-md-12'>
										<table id='lvl-3-table' class='table table-bordered table-hover' style="min-width: 100%;">
											<thead>
												<th>Option</th>
												<th>Code</th>
												<th>Name</th>
											</thead>
										</table>
									</div>
								</div>
							</div>
						</div>
					</li>		
					<li>
						<label class='category-label'>Category 4</label>
						<div class='content'>
							<div class='add-btn-container title' custom-title='Add'>
								<button id='add-level-4' type='button' class='btn btn-info btn-sm btn-raised ripple-effect' style="margin-bottom: -65px; z-index: 999999;"><i class='fa fa-plus'></i></button>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class='col-md-12'>
										<table id='lvl-4-table' class='table table-bordered' style="min-width: 100%;">
											<thead>
												<th>Option</th>
												<th>Code</th>
												<th>Name</th>
											</thead>
										</table>
									</div>
								</div>
							</div>
						</div>
					</li>	
				</ul>
				<!-- <button type="button" class="btn btn-default prev-button" aria-label="Previous" style="display: none;">
					<i class='fa fa-arrow-left'></i>
				</button>
				<button type="button" class="btn btn-default next-button" aria-label="Next">
					<i class='fa fa-arrow-right'></i>
				</button> -->
			</div>
		</div>
	</div>
</div>

<div id='add-popover-level-1' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Category 1</h4>
	</div>
	<div class='col-md-12'>
		<div class='modal-body'>
			<table width="95%" style="padding: 0 30px;">
				<tr>
					<td><label>Code</label></td>
					<td><input class='form-control' type="text" name="add-code-level-1"></td>
				</tr>
				<tr>
					<td><label>Name</label></td>
					<td><input class='form-control' type="text" name="add-name-level-1"></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button id='add-lvl-1-btn' class='btn btn-info btn-sm btn-raised ripple-effect' type='button' style='float: right;'>OK</button>
		</div>
	</div>
</div>

<div id='view-popover-level-1' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Category 1</h4>
	</div>
	<div class='col-md-12'>
		<div class='modal-body'>
			<table width="95%" style="padding: 0 30px;">
				<tr>
					<td><label>Code</label></td>
					<td><input class='form-control' type="text" name="view-code-level-1" disabled></td>
				</tr>
				<tr>
					<td><label>Name</label></td>
					<td><input class='form-control' type="text" name="view-name-level-1" disabled></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-primary btn-sm btn-raised ripple-effect close-popover' type='button' style='float: right;'>Close</button>
		</div>
	</div>
</div>

<div id='edit-popover-level-1' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Category 1</h4>
	</div>
	<div class='col-md-12'>
		<div class='modal-body'>
			<table width="95%" style="padding: 0 30px;">
				<input type="hidden" name="edit-lvl-1-id">
				<tr>
					<td><label>Code</label></td>
					<td><input class='form-control' type="text" name="edit-code-level-1"></td>
				</tr>
				<tr>
					<td><label>Name</label></td>
					<td><input class='form-control' type="text" name="edit-name-level-1"></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button id='edit-lvl-1-btn' class='btn btn-info btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>OK</button>
		</div>
	</div>
</div>

<div id='delete-popover-level-1' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete Category 1</h4>
	</div>
	<div class='col-md-12'>
		<div class='modal-body'>
			<table width="95%" style="padding: 0 30px;">
				<input type="hidden" name="co-coa-lvl1-id">
				<tr>
					<td><label>Code</label></td>
					<td><input class='form-control' type="text" name="delete-code-level-1" disabled></td>
				</tr>
				<tr>
					<td><label>Name</label></td>
					<td><input class='form-control' type="text" name="delete-name-level-1" disabled></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button id='delete-lvl-1-btn' class='btn btn-info btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>OK</button>
		</div>
	</div>
</div>

<div id='add-popover-level-2' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Category 2</h4>
	</div>
	<div class='col-md-12'>
		<div class='modal-body'>
			<table width="95%" style="padding: 0 30px;">
				<tr>
					<td><label>Code</label></td>
					<td><input class='form-control' type="text" name="add-code-level-2"></td>
				</tr>
				<tr>
					<td><label>Name</label></td>
					<td><input class='form-control' type="text" name="add-name-level-2"></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button id='add-lvl-2-btn' class='btn btn-info btn-sm btn-raised ripple-effect' type='button' style='float: right;'>OK</button>
		</div>
	</div>
</div>

<div id='view-popover-level-2' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Category 2</h4>
	</div>
	<div class='col-md-12'>
		<div class='modal-body'>
			<table width="95%" style="padding: 0 30px;">
				<tr>
					<td><label>Code</label></td>
					<td><input class='form-control' type="text" name="view-code-level-2" disabled></td>
				</tr>
				<tr>
					<td><label>Name</label></td>
					<td><input class='form-control' type="text" name="view-name-level-2" disabled></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-primary btn-sm btn-raised ripple-effect close-popover' type='button' style='float: right;'>Close</button>
		</div>
	</div>
</div>

<div id='edit-popover-level-2' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Category 2</h4>
	</div>
	<div class='col-md-12'>
		<div class='modal-body'>
			<table width="95%" style="padding: 0 30px;">
				<input type="hidden" name="edit-lvl-2-id">
				<tr>
					<td><label>Code</label></td>
					<td><input class='form-control' type="text" name="edit-code-level-2"></td>
				</tr>
				<tr>
					<td><label>Name</label></td>
					<td><input class='form-control' type="text" name="edit-name-level-2"></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button id='edit-lvl-2-btn' class='btn btn-info btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>OK</button>
		</div>
	</div>
</div>

<div id='delete-popover-level-2' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete Category 2</h4>
	</div>
	<div class='col-md-12'>
		<div class='modal-body'>
			<table width="95%" style="padding: 0 30px;">
				<input type="hidden" name="coalvl_1_2-id">
				<tr>
					<td><label>Code</label></td>
					<td><input class='form-control' type="text" name="delete-code-level-2" disabled></td>
				</tr>
				<tr>
					<td><label>Name</label></td>
					<td><input class='form-control' type="text" name="delete-name-level-2" disabled></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button id='delete-lvl-2-btn' class='btn btn-info btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>OK</button>
		</div>
	</div>
</div>

<div id='add-popover-level-3' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Category 3</h4>
	</div>
	<div class='col-md-12'>
		<div class='modal-body'>
			<table width="95%" style="padding: 0 30px;">
				<input type="hidden" name="add-level-2-id">
				<tr>
					<td><label>Code</label></td>
					<td><input class='form-control' type="text" name="add-code-level-3"></td>
				</tr>
				<tr>
					<td><label>Name</label></td>
					<td><input class='form-control' type="text" name="add-name-level-3"></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button id='add-lvl-3-btn' class='btn btn-info btn-sm btn-raised ripple-effect' type='button' style='float: right;'>OK</button>
		</div>
	</div>
</div>

<div id='view-popover-level-3' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Category 3</h4>
	</div>
	<div class='col-md-12'>
		<div class='modal-body'>
			<table width="95%" style="padding: 0 30px;">
				<tr>
					<td><label>Code</label></td>
					<td><input class='form-control' type="text" name="view-code-level-3" disabled></td>
				</tr>
				<tr>
					<td><label>Name</label></td>
					<td><input class='form-control' type="text" name="view-name-level-3" disabled></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-primary btn-sm btn-raised ripple-effect close-popover' type='button' style='float: right;'>Close</button>
		</div>
	</div>
</div>

<div id='edit-popover-level-3' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Category 3</h4>
	</div>
	<div class='col-md-12'>
		<div class='modal-body'>
			<table width="95%" style="padding: 0 30px;">
				<input type="hidden" name="edit-lvl-3-id">
				<tr>
					<td><label>Code</label></td>
					<td><input class='form-control' type="text" name="edit-code-level-3"></td>
				</tr>
				<tr>
					<td><label>Name</label></td>
					<td><input class='form-control' type="text" name="edit-name-level-3"></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button id='edit-lvl-3-btn' class='btn btn-info btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>OK</button>
		</div>
	</div>
</div>

<div id='delete-popover-level-3' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete Category 3</h4>
	</div>
	<div class='col-md-12'>
		<div class='modal-body'>
			<table width="95%" style="padding: 0 30px;">
				<input type="hidden" name="coalvl_2_3-id">
				<tr>
					<td><label>Code</label></td>
					<td><input class='form-control' type="text" name="delete-code-level-3" disabled></td>
				</tr>
				<tr>
					<td><label>Name</label></td>
					<td><input class='form-control' type="text" name="delete-name-level-3" disabled></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button id='delete-lvl-3-btn' class='btn btn-info btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>OK</button>
		</div>
	</div>
</div>

<div id='add-popover-level-4' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Category 4</h4>
	</div>
	<div class='col-md-12'>
		<div class='modal-body'>
			<table width="95%" style="padding: 0 30px;">
				<input type="hidden" name="add-level-3-id">
				<tr>
					<td><label>Code</label></td>
					<td><input class='form-control' type="text" name="add-code-level-4"></td>
				</tr>
				<tr>
					<td><label>Name</label></td>
					<td><input class='form-control' type="text" name="add-name-level-4"></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button id='add-lvl-4-btn' class='btn btn-info btn-sm btn-raised ripple-effect' type='button' style='float: right;'>OK</button>
		</div>
	</div>
</div>

<div id='view-popover-level-4' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Category 4</h4>
	</div>
	<div class='col-md-12'>
		<div class='modal-body'>
			<table width="95%" style="padding: 0 30px;">
				<tr>
					<td><label>Code</label></td>
					<td><input class='form-control' type="text" name="view-code-level-4" disabled></td>
				</tr>
				<tr>
					<td><label>Name</label></td>
					<td><input class='form-control' type="text" name="view-name-level-4" disabled></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-primary btn-sm btn-raised ripple-effect close-popover' type='button' style='float: right;'>Close</button>
		</div>
	</div>
</div>

<div id='edit-popover-level-4' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Category 4</h4>
	</div>
	<div class='col-md-12'>
		<div class='modal-body'>
			<table width="95%" style="padding: 0 30px;">
				<input type="hidden" name="edit-lvl-4-id">
				<tr>
					<td><label>Code</label></td>
					<td><input class='form-control' type="text" name="edit-code-level-4"></td>
				</tr>
				<tr>
					<td><label>Name</label></td>
					<td><input class='form-control' type="text" name="edit-name-level-4"></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button id='edit-lvl-4-btn' class='btn btn-info btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>OK</button>
		</div>
	</div>
</div>

<div id='delete-popover-level-4' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Delete Category 4</h4>
	</div>
	<div class='col-md-12'>
		<div class='modal-body'>
			<table width="95%" style="padding: 0 30px;">
				<input type="hidden" name="coalvl_3_4-id">
				<tr>
					<td><label>Code</label></td>
					<td><input class='form-control' type="text" name="delete-code-level-4" disabled></td>
				</tr>
				<tr>
					<td><label>Name</label></td>
					<td><input class='form-control' type="text" name="delete-name-level-4" disabled></td>
				</tr>
			</table>
		</div>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button id='delete-lvl-4-btn' class='btn btn-info btn-sm btn-raised ripple-effect' type='submit' style='float: right;'>OK</button>
		</div>
	</div>
</div>