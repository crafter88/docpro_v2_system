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
                    		<li><span id='show-filters' data-status='0'>Show Filters</span></li>
                    		<li><span id='advance-search' data-status='0'>Advance Search</span></li>
                    		<li class="divider"></li>
                    		<li><span id='show-all-col' data-status='0'>Show All Columns</span></li>
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
								  <span class="input-group-addon filter-subtitle">Type</span>
								  <select id='filter2' class='form-control' placeholder='--- SELECT ---'></select>
								</div>
							</div>
    					</div>
    					<div class='row'>
    						<div class='col-md-1' style="margin-bottom: 10px;">
    							<button id='add' type='button' class='btn btn-info btn-sm btn-raised ripple-effect title' custom-title='Add New' <?php if($user->main_company->cb_id !== $user->cb_id){ echo 'disabled'; } ?> style='height: 34px; margin: 0;'><i class='fa fa-plus'></i> Add New</button>
    						</div>
    						<div class='col-md-11' style="margin-bottom: 10px;">
    							<div class="input-group table-search">
								  <span class="input-group-addon" id="basic-addon1"><i class='fa fa-search'></i></span>
								  <input type="text" class="form-control general-search" placeholder="General Search..." aria-describedby="basic-addon1">
								</div>
    						</div>
    					</div>
						<table id='business-partners-table' class='table table-hovered table-bordered' style='width: 100%'>
							<thead>
								<tr>
									<th></th>
									<th>Sequence</th>
									<th>Code</th>
									<th>Name</th>
									<th>Shortname</th>
									<th>Style</th>
									<th>Address</th>
									<th>TIN</th>
									<th>Particulars</th>
									<th>Class</th>
									<th>Type</th>
								</tr>
								<tr id="searchfilterrow" class='hide-searchfilter searchfilterrow'>
									<th></th>
									<th>Sequence</th>
									<th>Code</th>
									<th>Name</th>
									<th>Shortname</th>
									<th>Style</th>
									<th>Address</th>
									<th>TIN</th>
									<th>Particulars</th>
									<th>Class</th>
									<th>Type</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id='add-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Business Partner</h4>
	</div>
	<form action='<?php echo base_url(); ?>company_settings/business_partners/add' method='post' class='body'>
		<div class='modal-body' style="overflow-y: auto;">
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px; padding-left: 20px;'><label>Corporate or Individual Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='add-name'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Trade Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='add-trade-name'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='add-shortname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Style</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='add-style'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='add-address'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required v-format v-tin' f='^([0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4})$' title='TIN Format: xxx-xxx-xxx-xxxx' type='text' name='add-tin'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Particulars</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='add-particulars'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='add-class' name='add-class' class='v-select-required' title="Please fill out this field" placeholder='Select...'></select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'></td>
					<td colspan='3' style='padding-top: 5px;'>
						<input class='form-control' name='new-class' readonly></select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='add-type' name='add-type' class='v-select-required' title="Please fill out this field" placeholder='Select...'></select>
					</td>
				</tr>
			</table>
			<table width='100%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Value Added Tax'><label>VAT</label></td>
					<td style='padding-top: 5px;'>
						<select id='add-tax-1' name='add-tax-1[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-vat-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-vat-row-plate' width='100%'>
			</table>
			<table width='100%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Expanded Withholding Tax'><label>EWT</label></td>
					<td style='padding-top: 5px;'>
						<select id='add-tax-2' name='add-tax-2[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-ewt-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-ewt-row-plate' width='100%'>
			</table>
			<table width="100%">
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Final Withholding Tax'><label>FWT</label></td>
					<td style='padding-top: 5px;'>
						<select id='add-tax-3' name='add-tax-3[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-fwt-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-fwt-row-plate' width='100%'>
			</table>
		</div>
		<input type="hidden" name="bpc_code">
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Done</button>
		</div>
	</form>
</div>
<div id='view-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 9px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Business Partner</h4>
	</div>
	<div class='modal-body' style="overflow-y: auto;">
		<table width='90%'>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-seq' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-code' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px; padding-left: 20px;'><label>Corporate or Individual Name</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-name' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Trade Name</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-trade-name' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-shortname' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Style</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-style' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-address' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-tin' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Particulars</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-particulars' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Class</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-class' class='form-control' type='text' readonly></td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-type' class='form-control' type='text' readonly>
				</td>
			</tr>
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>VAT</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-tax-1' class='form-control' type='text' readonly>
				</td>
			</tr>
		</table>
		<table class='add-vat-row-plate' width='100%'>
		</table>
		<table width="90%">
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>EWT</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-tax-2' class='form-control' type='text' readonly>
				</td>
			</tr>
		</table>
		<table class='add-ewt-row-plate' width='100%'>
		</table>
		<table width="90%">
			<tr>
				<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>FWT</label></td>
				<td colspan='3' style='padding-top: 5px;'><input name='view-tax-3' class='form-control' type='text' readonly>
				</td>
			</tr>
		</table>
		<table class='add-fwt-row-plate' width='100%'>
		</table>
	</div>
	<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px; width: 100%;'>
		<button id='close-btn' class='btn btn-info btn-sm close-popover btn-raised ripple-effect' type='button' data-dismiss='modal' style='float: right;'>Close</button>
	</div>
</div>
<div id='edit-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Business Partner</h4>
	</div>
	<form action='<?php echo base_url(); ?>company_settings/business_partners/edit' method='post' class='body'>
		<div class='modal-body' style="overflow-y: auto;">
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='edit-seq' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required v-number' title="Please fill out this field" type='text' name='edit-code'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px; padding-left: 20px;'><label>Corporate or Individual Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='edit-name'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Trade Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='edit-trade-name'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='edit-shortname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Style</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='edit-style'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='edit-address'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required v-format v-tin' f='^([0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4})$' title='TIN Format: xxx-xxx-xxx-xxxx' type='text' name='edit-tin'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Particulars</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='edit-particulars'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='edit-class' name='edit-class' class='v-select-required' title="Please fill out this field" placeholder='Select...' required></select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'></td>
					<td colspan='3' style='padding-top: 5px;'>
						<input class='form-control' name='new-class' readonly></select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='edit-type' name='edit-type' class='v-select-required' title="Please fill out this field" placeholder='Select...' required></select>
					</td>
				</tr>
			</table>
			<table width='100%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Value Added Tax'><label>VAT</label></td>
					<td style='padding-top: 5px;'>
						<select id='edit-tax-1' name='add-tax-1[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-vat-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-vat-row-plate' width='100%'>
			</table>
			<table width='100%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Expanded Withholding Tax'><label>EWT</label></td>
					<td style='padding-top: 5px;'>
						<select id='edit-tax-2' name='add-tax-2[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-ewt-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-ewt-row-plate' width='100%'>
			</table>
			<table width="100%">
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Final Withholding Tax'><label>FWT</label></td>
					<td style='padding-top: 5px;'>
						<select id='edit-tax-3' name='add-tax-3[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-fwt-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-fwt-row-plate' width='100%'>
			</table>
		</div>
		<input type="hidden" name="bpc_code">
		<input type='hidden' name='edit-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Save Changes</button>
		</div>
	</form>
</div>
<div id='update-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update Business Partner</h4>
	</div>
	<form action='<?php echo base_url(); ?>company_settings/business_partners/update' method='post' class='body'>
		<div class='modal-body' style="overflow-y: auto;">
			<table width='90%'>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Sequence</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='update-seq' readonly></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='update-code'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px; padding-left: 20px;'><label>Corporate or Individual Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='update-name'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Trade Name</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='update-trade-name'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='update-shortname'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Style</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='update-style'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required' title="Please fill out this field" type='text' name='update-address'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control v-required v-format v-tin' f='^([0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4})$' title='TIN Format: xxx-xxx-xxx-xxxx' type='text' name='update-tin'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Particulars</label></td>
					<td colspan='3' style='padding-top: 5px;'><input class='form-control' type='text' name='update-particulars'></td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='update-class' name='update-class' class='v-select-required' title="Please fill out this field" placeholder='Select...' required></select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'></td>
					<td colspan='3' style='padding-top: 5px;'>
						<input class='form-control' name='new-class' readonly></select>
					</td>
				</tr>
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
					<td colspan='3' style='padding-top: 5px;'>
						<select id='update-type' name='update-type' class="v-select-required" title="Please fill out this field" placeholder='Select...' required></select>
					</td>
				</tr>
			</table>
			<table width="100%">
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>VAT</label></td>
					<td style='padding-top: 5px;'>
						<select id='update-tax-1' name='add-tax-1[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-vat-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-vat-row-plate' width='100%'>
			</table>
			<table width="100%">
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>EWT</label></td>
					<td style='padding-top: 5px;'>
						<select id='update-tax-2' name='add-tax-2[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-ewt-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-ewt-row-plate' width='100%'>
			</table>
			<table width="100%">
				<tr>
					<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;'><label>FWT</label></td>
					<td style='padding-top: 5px;'>
						<select id='update-tax-3' name='add-tax-3[]' placeholder='Select...'></select>
					</td>
					<td style="width: 50px;">
						<button id='add-fwt-row' class='btn btn-xs btn-default' title='add row' type='button' style="background-color: transparent; margin-top: 10px; text-align: left;"><i class='fa fa-plus'></i></button>
					</td>
				</tr>
			</table>
			<table class='add-fwt-row-plate' width='100%'>
			</table>
		</div>
		<input type="hidden" name="bpc_code">
		<input type='hidden' name='update-id'>
		<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
			<button class='btn btn-info btn-sm btn-raised ripple-effect v-submit' type='button' style='float: right;'>Save Changes</button>
		</div>
	</form>
</div>