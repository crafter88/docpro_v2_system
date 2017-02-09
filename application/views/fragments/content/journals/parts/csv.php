<div role="tabpanel" class="tab-pane" id="csv-upload">
	<div class='card'>
		<div class='card-body' style='padding-top: 10px; min-height: 300px;'>
			<form id="upload" method="post" action="<?php echo base_url(); ?>journals/save_sale_trans_upload" enctype="multipart/form-data">
				<div id="drop">

					<p>Drop Here</p>

					<a class='btn btn-info btn-raised ripple-effect' style="margin-left: -15px;">Browse</a>
					<input type="file" name="file" multiple accept='.csv' />
				</div>

				<ul>
					<!-- The file uploads will be shown here -->
				</ul>

			</form>

			<div id='upload-success' class='panel panel-default col-md-4 col-md-offset-4' style="margin-top: 45px; display: none;">
				<div class='panel-body'>
					<p style="font-size: 24px; color: #2196f3; text-align: center;">
						<i class='fa fa-check' style="font-size: 30px; margin-right: 14px"></i>SUCCESS!
					</p>
					<div class='row'>
						<div class='col-md-6' style="text-align: right;">
							<a href="#" class='upload-again' style="text-decoration: underline;">Upload again</a>
						</div>
						<div class='col-md-6'>
							<a href="<?php echo base_url(); ?>journals/sales" style="text-decoration: underline;"> View transaction</a>
						</div>
					</div>
				</div>
			</div>

			<div id='upload-error' class='panel panel-default col-md-4 col-md-offset-4' style="margin-top: 45px; display: none;">
				<div class='panel-body'>
					<p style="font-size: 24px; color: #F44336; text-align: center;">
						<i class='fa fa-check' style="font-size: 30px; margin-right: 14px"></i>ERROR!
					</p>
					<div class='row'>
						<div class='col-md-12' style="margin: 0;">
							<label style="font-weight: bold; color: #fd0202;">Message: </label>
							<p id='error-message'></p>
						</div>
					</div>
					<div class='row'>
						<div class='col-md-12' style="text-align: center;">
							<a href='#' class='upload-again' style="text-decoration: underline;">Upload again</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>