<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Sales</div>
			</div>
		</div>
		<div class='card-body'>
			<div class='row'>
				<div class='col-md-12' id='user-table-row'>
					<table id='sales-table' class='table table-hover table-bordered table-striped' width='1400px'>
						<thead>
							<th>Options</th>
							<th>ID</th>
							<th>Journal</th>
							<th>Document Year</th>
							<th>Document Month</th>
							<th>Document Date</th>
							<th>Account Code</th>
							<th>Account Name</th>
							<th>Account Category Code 1</th>
							<th>Account Category 1</th>
							<th>Debit Amount</th>
							<th>Credit Amount</th>

						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" role="dialog" id="modal">
	<div>
		<div>
			<div  style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
				<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'><span>&times;</span></button>
				<h4 class="modal-title" style="font-family: 'Roboto Condensed', sans-serif;">Sales</h4>
			</div>
			<form action="#" method='post' class='body'>
				<div class="modal-body">
					<input id='input-id' type='hidden' name='id' />
					<div class='row'>
						<div class='col-md-1' style="text-align: right; margin-bottom: 5px;"><label>ID: </label></div>
						<div class='col-md-7' style="padding-left: 0; margin-bottom: 5px;"><label id='modal-id' style='text-decoration: underline;'></label></div>
					</div>
					<div class='row'>
						<div class='col-md-2 col-md-offset-2' style="text-align: right; margin-bottom: 0; margin-top: 5px;"><label>Journal</label></div>
						<div class='col-md-4' style='padding-left: 0;'><input id='modal-journal' class='form-control' type='text' style='text-align: center' readonly /></div>
					</div>
					<div class='row'>
						<div class='col-md-4' style='margin-bottom: 5px;'>
							<label style='font-size: 11px;'>Document Year</label>
							<input id='modal-doc-yr' class='form-control' type='text' style='text-align: center' readonly />
						</div>
						<div class='col-md-4' style='margin-bottom: 5px;'>
							<label style='font-size: 11px;'>Document Month</label>
							<input id='modal-doc-month' class='form-control' type='text' style='text-align: center' readonly />
						</div>
						<div class='col-md-4' style='margin-bottom: 5px;'>
							<label style='font-size: 11px;'>Document Date</label>
							<input id='modal-doc-date' class='form-control' type='text' style='text-align: center' readonly />
						</div>
					</div>
					<div class='row'>
						<div class='col-md-3' style='padding-right: 0; margin-bottom: 5px;'>
							<label style='font-size: 11px;'>Account Code</label>
							<input id='modal-acc-code' class='form-control' type='text' style='text-align: center' readonly />
						</div>
						<div class='col-md-9' style=' margin-bottom: 5px;'>
							<label style='font-size: 11px;'>Account Name</label>
							<input id='modal-acc-name' class='form-control' type='text' style='text-align: center' readonly />
						</div>
					</div>
					<div class='row'>
						<div class='col-md-3' style='padding-right: 0; margin-bottom: 10px;'>
							<label style='font-size: 11px;'>Account Category Code</label>
							<input id='modal-acc-cat-code' class='form-control' type='text' style='text-align: center' readonly />
						</div>
						<div class='col-md-9' style='margin-bottom: 10px;'>
							<label style='font-size: 11px;'>Account Category Name</label>
							<input id='modal-acc-cat-name' class='form-control' type='text' style='text-align: center' readonly />
						</div>
					</div>
					<div class='row'>
						<div class='col-md-6' style='padding-right: 0; margin-bottom: 0;'>
							<label style='font-size: 11px;'>Debit Ammount</label>
							<input id='modal-debit-ammount' class='form-control' type='text' style='text-align: center' readonly />
						</div>
						<div class='col-md-6' style='margin-bottom: 0;'>
							<label style='font-size: 11px;'>Credit Ammount</label>
							<input id='modal-credit-ammount' class='form-control' type='text' style='text-align: center' readonly />
						</div>
					</div>
				</div>
			
				<div class="modal-footer" style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<input id='modal-submit' class='btn btn-success btn-lg' type='submit' value='Update' style='display: none; padding: 10px 20px 20px 20px; font-size: 12px;'/>
					<button id='modal-close' type="button" class="btn btn-info" data-dismiss='modal'>Close</button>
				</div>
			</form>
		</div>
	</div>
</div>