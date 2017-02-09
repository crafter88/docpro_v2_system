                    <div class="navbar-header">
                        <button id='expand-sidebar-button' type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                    </div>
					
					<div id='top-navbar-font' class='navbar-body'>
						<button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
							<i class="fa fa-th icon"></i>
						</button>
						
						<a href="javascript:window.history.go(-1);" class='btn btn-default ripple-effect' id='back-button' custom-title='Go Back'><i class='fa fa-arrow-left'></i></a>
						<span><?php if(isset($title)){ echo $title; }?></span>

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
							<li class='dropdown' style='float: left; text-align: right;'>
								<h4 id='company-name' style='font-size: 14px; font-weight: bold; word-wrap: break-word; margin-right: 20px; height: 25px;'>
									<!-- <?php echo $user->main_company->ch_cb_name; ?> -->
									<?php echo isset($title) ? $title : ''; ?>
								</h4>
							</li>
							<li class='dropdown' style='float: left; text-align: right;'>
								<h4 id='company-name' style='font-size: 14px; font-weight: bold; word-wrap: break-word; margin-right: 20px; height: 25px; margin-top: 20px;'>
									<?php 
										echo $this->session->userdata('user')->main_company->cb_id === $this->session->userdata('user')->cb_id ? '': $this->session->userdata('user')->branch_company->ch_cb_name; 
									?>
								</h4>
							</li>
							<!-- <?php
								if(isset($this->session->userdata('user')->company_name)){ ?>
									<li class='dropdown' style='float: left; text-align: right;'>
										<h4 id='company-branch' style='font-size: 14px; font-weight: bold; word-wrap: break-word; margin-left: 20px; height: 25px; margin-top: 23px;'>
											<?php echo $this->session->userdata('user')->branch_company->name; ?>
										</h4>
									</li>
							<?php }else{ ?>
									<li class='dropdown' style='float: left; text-align: right;'>
										<h4 id='company-branch' style='font-size: 14px; font-weight: bold; word-wrap: break-word; margin-left: 20px; height: 25px; margin-top: 23px;'>
											<?php
												if($this->session->userdata('user')->branch_company->cb_id === $this->session->userdata('user')->main_company->cb_id){
													echo 'Main';
												}else{
													echo $this->session->userdata('user')->main_company->name;
												}
											?>
										</h4>
									</li>
							<?php } ?> -->
						</ul>
					</div>