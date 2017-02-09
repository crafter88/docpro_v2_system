
<div class='side-body padding-top' id="content-responsive">
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Income Statement</div>
			</div>
		</div>
		<div class='card-body' style='padding: 0;'>
			<div role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a aria-controls="report" role="tab" data-toggle="modal" data-target="#report-modal">Report</a></li>
                    <li role="presentation"><a href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Summary</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id='report' role="tabpanel" class="tab-pane active">
						<table class='table table-hover table-bordered table-striped'>
							<thead>
								<th>Transaction ID</th>
								<th>Account Category Code 1</th>
								<th>Account Category 1</th>
								<th>Account Category Code 2</th>
								<th>Account Category 2</th>
								<th>Account Category Code 3</th>
								<th>Account Category 3</th>
								<th>Account Category Code 4</th>
								<th>Account Category 4</th>
								<th>Account Code</th>
								<th>Account Name</th>
								<th>Cash Flow Activity Code</th>
								<th>Cash Flow Activity</th>
								<th>Cash Flow Category Code</th>
								<th>Cash Flow Category</th>
								<th>BIR Code</th>
								<th>Year</th>
								<th>Month</th>
								<th>Date</th>
							</thead>
						</table>
					</div>
                    <div role="tabpanel" class="tab-pane" id="summary">
						<table class='table table-hover table-bordered table-striped'>
							<thead>
								<th>Transaction ID</th>
								<th>Account Category Code 1</th>
								<th>Account Category 1</th>
								<th>Account Category Code 2</th>
								<th>Account Category 2</th>
								<th>Account Category Code 3</th>
								<th>Account Category 3</th>
								<th>Account Category Code 4</th>
								<th>Account Category 4</th>
								<th>Account Code</th>
								<th>Account Name</th>
								<th>Cash Flow Activity Code</th>
								<th>Cash Flow Activity</th>
								<th>Cash Flow Category Code</th>
								<th>Cash Flow Category</th>
								<th>BIR Code</th>
								<th>Year</th>
								<th>Month</th>
								<th>Date</th>
							</thead>
						</table>
					</div>
                </div>
            </div>
		</div>
	</div>
</div>
<!-- Income Statement Filter -->
<div id='report-modal' class='modal fade' role='dialog'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button class='close' type='button' data-dismiss='modal'>
					<span aria-hidden='true'>&times;</span>
				</button>
				<h4 class='modal-title'>
					Income Statement Report
				</h4>
			</div>
			<form action='#' method='post'>
				<!-- MAIN FILTER -->
				<div class='modal-body'>
					<div class='alert fresh-color alert-success'>
						Main Filter
					</div>
					<div class="checkbox3 checkbox-round">
						<input type="checkbox" id="docYr">
						<label for="docYr">
								Document Year
						</label>
					</div>
					<!-- ROW FILTER -->
				<div class='alert fresh-color alert-info'>
						Row Filter
					</div>
					<div class="checkbox3 checkbox-round">
						<input type="checkbox" id="acntCat1">
						<label for="acntCat1">
								Account Category 1
						</label>
						<input type="checkbox" id="acntCatCode1">
						<label for="acntCatCode1">
								Account Category Code 1
						</label>
						<input type="checkbox" id="acntCat2">
						<label for="acntCat2">
								Account Category 2
						</label>
						<input type="checkbox" id="acntCatCode2">
						<label for="acntCatCode2">
								Account Category Code 2
						</label>
						<input type="checkbox" id="acntCat3">
						<label for="acntCat3">
								Account Category 3
						</label>
						<input type="checkbox" id="acntCatCode3">
						<label for="acntCatCode3">
								Account Category Code 3
						</label>
					</div>
					<!-- COLUMN FILTER -->
				<div class='alert fresh-color alert-danger'>
						Row Filter
					</div>
					<div class="checkbox3 checkbox-round">
						<input type="checkbox" id="transMonth">
						<label for="transMonth">
								Transaction Month
						</label>
					</div>
					<!-- VALUES FILTER -->
				<div class='alert fresh-color alert-warning'>
						Row Filter
					</div>
					<div class="checkbox3 checkbox-round">
						<input type="checkbox" id="sumDebit">
						<label for="sumDebit">
								Sum Debit Amount
						</label>
						<input type="checkbox" id="sumCredit">
						<label for="sumCredit">
								Sum Credit Amount
						</label>
					</div>
				</div>
				<div class='modal-footer'>
					<button class='btn btn-primary btn-sm' type='submit'>
						OK
					</button>
					<button class='btn btn-danger btn-sm pull-left' type='button' data-dismiss='modal'>
						Cancel
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
