	<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li><a href="#">Subscribe</a><i class="icon-angle-right"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class='col-md-12'>
					
						<!-- multistep form -->
						<form name='free_subscription' id="msform" action="<?php echo base_url(); ?>save/free" method="post" role="form" style='width: 700px'>
							<!-- progressbar -->
							<ul id="progressbar">
								<li class="active">Company Details</li>
								<li style='display: none;'>Personal Details</li>
								<li style='display: none;'>User Credential</li>
							</ul>
							<!-- fieldsets -->
							<div class='fieldset' style='position: relative;'>
								<h2 class="fs-title">Company Details</h2>
								<h3 class="fs-subtitle">This is step 1</h3>
								<input type="text" name="company" placeholder="Company Name" required />
								<textarea type="text" name="cAddress" placeholder="Company Address" required ></textarea>
								<input type="button" name="next" class="next action-button" value="Next" />
							</div>
							<div class='fieldset' style='position: relative;'>
								<h2 class="fs-title">Personal Details</h2>
								<h3 class="fs-subtitle">Step 2</h3>
								<input type="text" name="fName" placeholder="First Name" required />
								<input type="text" name="lName" placeholder="Last Name" required />
								<textarea type="address" name="address" placeholder="Address" required ></textarea>
								<input type="email" name="email" placeholder="Email Address" required />
								<input type="number" name="contact" placeholder="Contact Number" required />
								<input type="button" name="previous" class="previous action-button" value="Previous" style="background:red;" required />
								<input type="button" name="next" class="next action-button" value="Next" required />
							</div>
							<div class='fieldset' style='position: relative;'>
								<h2 class="fs-title">User Credentials</h2>
								<h3 class="fs-subtitle">Final step</h3>
								<input type="text" name="user" placeholder="Username" required />
								<input type="password" name="pass" placeholder="Password" required />
								<input type="password" name="cpass" placeholder="Confirm Password" required />
								<input type="button" name="previous" class="previous action-button" value="Previous" style="background:red;" required />
								<input type="submit"  class=" action-button" />
							</div>
						</form>
						
					</div>
				</div>
			</div>
			<!-- end divider -->
		</section>
	</section>