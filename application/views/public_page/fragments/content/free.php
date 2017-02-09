	<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li><a href="#">FREE Subscription</a><i class="icon-angle-right"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class='col-md-12'>
					
						<!-- multistep form -->
						<form name='free_subscription' id="msform" action="<?php echo base_url(); ?>save/free" method="post" role="form" style='width: 700px; margin-top: 0;'>
							<div class='fieldset' style='position: relative;'>
								<label class='alert alert-info' style='width: 100%;'>FREE Subscription</label>
								<h2 class="fs-title" style='margin-bottom: 20px;'>Company</h2>
								<p style='color: red; font-size: 13px;'>Note: Click N/A if not applicable</p>
								<label style="text-align: left; width: 100%;">Company Name</label>
								<div class='input-group' style="margin-bottom: 15px;">
									<input type="text" name="company" style='margin-bottom: 0; border-top-right-radius: 0; border-bottom-right-radius: 0;' placeholder='For Non-individual' required />
									<span class='input-group-addon' style='border-radius: 0; padding: 0;'>
										<button type='button' class='btn btn-default n_a' token='n_a' style='background-color: transparent; border: none;'>N/A</button>
									</span>
								</div>
								<label style="text-align: left; width: 100%;">Owner's Name</label>
								<input type="text" name="ind_name" placeholder='Ex:     Juan D. Cruz' required />
								<label style="text-align: left; width: 100%;">Address</label>
								<textarea type="text" name="cAddress" placeholder='Ex:     #187 Mabini Street Baguio City, Benguet' required ></textarea>
								<!-- <label style="text-align: left; width: 100%;">TIN-VAT</label>
								<div class='input-group' style="margin-bottom: 15px;">
									<input type="text" name="tin_vat" placeholder='Ex:     123456789-000' style='margin-bottom: 0; border-top-right-radius: 0; border-bottom-right-radius: 0;' required />
									<span class='input-group-addon' style='border-radius: 0; padding: 0;'>
										<button type='button' class='btn btn-default n_a' token='n_a' style='background-color: transparent; border: none;'>N/A</button>
									</span>
								</div>
								<label style="text-align: left; width: 100%;">TIN-Non-VAT</label>
								<div class='input-group' style="margin-bottom: 15px;">
									<input type="text" name="tin_non_vat" placeholder='Ex:     123456789-000' style='margin-bottom: 0; border-top-right-radius: 0; border-bottom-right-radius: 0;' required />
									<span class='input-group-addon' style='border-radius: 0; padding: 0;'>
										<button type='button' class='btn btn-default n_a' token='n_a' style='background-color: transparent; border: none;'>N/A</button>
									</span>
								</div> -->
								<label style="text-align: left; width: 100%;">Mobile Number</label>
								<input class='number' type="text" name="cp_no" placeholder='Ex:     09123456789' required />
								<label style="text-align: left; width: 100%;">Email Address</label>
								<input type="text" name="email" placeholder='Ex:     juandelacruz@docpro.com' required />

								<!-- <h2 class="fs-title">User Credentials</h2>
								<input type="text" name="username" placeholder="Username" required />
								<input id='password' type="password" name="password" placeholder="Password" required />
								<input id='confirm_password' type="password" name="cpassword" placeholder="Confirm Password" required /> -->
								<input type="submit"  value='Ok' class="action-button" />
							</div>
						</form>
						
					</div>
				</div>
			</div>
			<!-- end divider -->
		</section>
	</section>