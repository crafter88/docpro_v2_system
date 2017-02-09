                    <div class="navbar-header">
                        <button id='expand-sidebar-button' type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                    </div>
					
					<div class='navbar-body' id='home-navbar'>
						<button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
							<i class="fa fa-th icon"></i>
						</button>

						<ul id='top-navbar' class="nav navbar-nav navbar-right" style='display: none;'>
							<button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
								<i class="fa fa-times icon"></i>
							</button>
							<li class="dropdown" id='logout-btn' style='float: right;'>
								<a href='<?php echo base_url(); ?>/logout' id='label-logout'>
									<span class="hint--bottom" data-hint="Logout"><i class='fa fa-power-off'></i></span>
								</a>
							</li>
							<li class="dropdown profile" style='float: right;'>
								<a href="<?php echo base_url(); ?>profile" style='padding-right: 0;'>
									<span><i class='fa fa-user'></i> &nbsp;  <?php echo $this->session->userdata('user')->p_fname.' '.$this->session->userdata('user')->p_mname.' '.$this->session->userdata('user')->p_lname; ?>
									</span>
								</a>
							</li>
							<li class="dropdown" style='float: right;'>
								<a id='label-time' style='padding-right: 0;'>
									<i class='fa fa-clock-o'></i><span id='time'></span>
								</a>
							</li>
							<li class="dropdown" style='float: right;'>
								<a style='padding-right: 0;'>
									<i class='fa fa-calendar'></i><span id='date'></span>
								</a>
							</li>
							<li class='dropdown' style='float: left; text-align: right; border-right: 1px solid #E8E8E8;'>
								<h4 id='company-name' style='font-size: 10px; font-weight: bold; word-wrap: break-word; margin-right: 20px; height: 25px;'>
									<?php 
										if(isset($this->session->userdata('user')->company_name)){
											echo "<a class='company-profile' href='<base_url()/company_profile/view' title='View Company Profile'>".$this->session->userdata('user')->company_name."</a>";
										}else{
											echo "<a class='company-profile' href='"; echo base_url(); echo "company_profile/view' title='View Company Profile'>".$this->session->userdata('user')->name."</a>";
										}
									?>
								</h4>
							</li>
							<?php
								if(isset($this->session->userdata('user')->company_name)){
									echo "<li class='dropdown' style='float: left; text-align: right;'>";
									echo "<h4 id='company-branch' style='font-size: 14px; font-weight: bold; word-wrap: break-word; margin-left: 20px; height: 25px; margin-top: 24%;'>";
									echo $this->session->userdata('user')->name;
									echo "</h4>";
									echo "</li>";
								}else{
									echo "<li class='dropdown' style='float: left; text-align: right;'>";
									echo "<h4 id='company-branch' style='font-size: 14px; font-weight: bold; word-wrap: break-word; margin-left: 20px; height: 25px; margin-top: 24%;'>";
									echo "Main";
									echo "</h4>";
									echo "</li>";
								}
							?>
						</ul>
					</div>