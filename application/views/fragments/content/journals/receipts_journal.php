				<div class="side-body padding-top" id='journal-navs' ng-app='journals' ng-controller='transaction'>
					<div id='animated-container' class='row' style='-webkit-animation-duration: 0.5s; margin-top: 20px;'>
						
						<div class='col-md-12'>
							<div role="tabpanel">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a class='text-black' href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Summary</a></li>
									<li role="presentation"><a class='text-black' href="#business-partners" aria-controls="business-partners" role="tab" data-toggle="tab">Business Partners</a></li>
									<li role="presentation"><a class='text-black' href="#new-transactions" aria-controls="new-transactions" role="tab" data-toggle="tab">New Transactions</a></li>
									<li role="presentation"><a class='text-black' href="#documents" aria-controls="documents" role="tab" data-toggle="tab">Official Receipts</a></li>
									<!-- <li role="presentation" style="float: right;"><a class='text-black title' href="#csv-upload" aria-controls="csv-upload" role="tab" data-toggle="tab" custom-title='Upload'><i class='fa fa-upload' style="color: #009688;"></i></a></li> -->
								</ul>
								
								<!-- Tab panes -->
								<div class="tab-content">
									<input id='journal_type' type="hidden" name="journal_type" value="<?php if(isset($journal_type)){ echo $journal_type; } ?>">
									<?php if(isset($summary)){ $this->load->view($summary); } ?>
									<?php if(isset($business_partners)){ $this->load->view($business_partners); } ?>
									<?php if(isset($transaction)){ $this->load->view($transaction); } ?>
									<?php if(isset($document)){ $this->load->view($document); } ?>
								</div>

							</div>

						</div>
					</div>
				</div>