<input id='mc_id' type="hidden" name="mc_id" value="<?php echo $user->main_company->cb_id; ?>">
<input id='bc_id' type="hidden" name="bc_id" value="<?php echo $user->cb_id; ?>">
<div id='m_c_d' class='appear'>
    <div class='n_cp_n_cm' class='container' style="margin: 0;">
    	<div class="box">
            <div class="box-header with-border box-normal">
                <h3 class="box-title"> </h3>
                <div class="box-tools pull-right">
                	<div class="btn-group">
                  		<button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    		<i class="fa fa-wrench"></i> Settings
                    	</button>
                  		<ul class="dropdown-menu" role="menu">
                    		<li><span id='show-filters' class='disable-setting' data-status='0'>Show Filters</span></li>
                    		<li><span id='advance-search' class='disable-setting' data-status='0'>Advance Search</span></li>
                    		<li class="divider"></li>
                    		<li><span id='show-all-col' class='disable-setting' data-status='0'>Show All Columns</span></li>
                  		</ul>
                	</div>
              	</div>
            </div>
    		<div class='box-body hide-table-setting'>
    			<div class='row'>
    				<div class='col-md-12' id='company-table-row' style="padding-right: 20px;">
    					<div class='row hide-filter'>
    						<div class='col-md-12' style="margin: 0;">
    							<h3 class='filter-title'>FILTERS</h3>
    						</div>
    					</div>
    					<div class='row hide-filter'>
							<div class='col-md-6'>
								<div class="input-group">
								  <span class="input-group-addon filter-subtitle">Classification</span>
								  <select id='filter1' class='form-control' placeholder='--- SELECT ---'></select>
								</div>
							</div>
							<div class='col-md-6'>
								<div class="input-group">
								  <span class="input-group-addon filter-subtitle">Journals</span>
								  <select id='filter2' class='form-control' placeholder='--- SELECT ---'></select>
								</div>
							</div>
    					</div>
    					<div class='row'>
    						<div class='col-md-1' style="margin-bottom: 10px;">
    							<button id='add' type='button' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add New' disabled <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?> style='height: 34px; margin: 0;'><i class='fa fa-plus'></i> Add New</button>
    						</div>
    						<div class='col-md-11' style="margin-bottom: 10px;">
    							<div class="input-group table-search">
								  <span class="input-group-addon" id="basic-addon1"><i class='fa fa-search'></i></span>
								  <input type="text" class="form-control general-search" placeholder="General Search..." aria-describedby="basic-addon1">
								</div>
    						</div>
    					</div>
					<table id='transactions-table' class='table table-hovered table-bordered' width='100%'>
						<thead>
							<th>Options</th>
							<th>Code</th>
							<th>Journal Short Name</th>
							<th>Category</th>
							<th>Nature</th>
							<th>Sequence</th>
							<th>Account Name</th>
							<th>Factor</th>
							<th>Basis</th>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>