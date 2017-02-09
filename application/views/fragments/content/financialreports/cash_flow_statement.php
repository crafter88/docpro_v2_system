
<div class='side-body padding-top' id="content-responsive">
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Cash Flow Statement</div>
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
								<th>Account Code</th>
								<th>Account Name</th>
								<th>Cash Flow Activity Code</th>
								<th>Cash Flow Activity</th>
								<th>Cash Flow Category Code</th>
								<th>Cash Flow Category</th>
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
								<th>Account Code</th>
								<th>Account Name</th>
								<th>Cash Flow Activity Code</th>
								<th>Cash Flow Activity</th>
								<th>Cash Flow Category Code</th>
								<th>Cash Flow Category</th>
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

<!-- Trial Balance Modal -->
<div id='report-modal' class='modal fade' role='dialog'>
	<div class='modal-dialog'>
		<div class='modal-content' style="width:50%;">
			<div class='modal-header'>
				<button class='close' type='button' data-dismiss='modal'>
					<span aria-hidden='true'>&times;</span>
				</button>
				<h4 class='modal-title'>
					Cash Flow Statement Report
				</h4>
			</div>
			<form action='#' method='post'>
				<!-- MAIN FILTER -->
				<div class='modal-body'>
					<div class='alert fresh-color alert-success' id='mainFilter'>
						Main Filter
					</div>
					<div class="checkbox3 checkbox-round" id='mainPanel'>
						<input type="checkbox" id="docYr">
						<label for="docYr">
								Document Year
						</label>
					</div>
					<!-- ROW FILTER -->
				<div class='alert fresh-color alert-info' id='rowFilter'>
						Row Filter
					</div>
					<div class="checkbox3 checkbox-round" id='rowPanel'>
						<input type="checkbox" id="cashFlowActivityCode">
						<label for="cashFlowActivityCode">
								Cashflow Activity Code
						</label>
						<input type="checkbox" id="cashFlowActivity">
						<label for="cashFlowActivity">
								Cashflow Activity
						</label>
						<input type="checkbox" id="cashFlowCategCode">
						<label for="cashFlowCategCode">
								Cashflow Category Code
						</label>
						<input type="checkbox" id="cashflowCateg">
						<label for="cashFlowCateg">
								Cashflow Category
						</label>
						<input type="checkbox" id="acntCode">
						<label for="acntCode">
								Account Code
						</label>
						<input type="checkbox" id="acntName">
						<label for="acntName">
								Account Name
						</label>
					</div>
					<!-- COLUMN FILTER -->
				<div class='alert fresh-color alert-danger' id='colFilter'>
						Column Filter
					</div>
					<div class="checkbox3 checkbox-round" id='colPanel'>
						<input type="checkbox" id="transMonth">
						<label for="transMonth">
								Transaction Month
						</label>
					</div>
					<!-- VALUES FILTER -->
				<div class='alert fresh-color alert-warning' id='valueFilter'>
						Values Filter
					</div>
					<div class="checkbox3 checkbox-round" id='valuePanel'>
						<input type="checkbox" id="sumDebitCredit">
						<label for="sumDebitCredit">
								Sum Debit(credit) Amount
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

