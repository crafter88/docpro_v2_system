<div id='m_c_d' class='appear'>
    <div class='n_cp_n_cm' class='container' style="margin: 0;">
		<div class='card-body button-group-custom'>
			<div class='row'>
				<a href="<?php echo base_url(); ?>company_settings/chart_of_accounts" class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($coa_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">Company</h4>
						<h4 style="text-align: center; font-weight: bold;">Chart of Accounts</h4>
					</span>
				</a>
				<a href="<?php echo base_url(); ?>company_settings/taxes" class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($tax_type_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">Company</h4>
						<h4 style="text-align: center; font-weight: bold;">Taxes</h4>
					</span>
				</a>
				<a href="<?php echo base_url(); ?>company_settings/business_partners" class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($business_partner_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">Company</h4>
						<h4 style="text-align: center; font-weight: bold;">Business Partners</h4>
					</span>
				</a>
				<a href="<?php echo base_url(); ?>company_settings/banks" class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($bank_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">Company</h4>
						<h4 style="text-align: center; font-weight: bold;">Banks</h4>
					</span>
				</a>
				<a href="<?php echo base_url(); ?>company_settings/departments" class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($department_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">Company</h4>
						<h4 style="text-align: center; font-weight: bold;">Departments</h4>
					</span>
				</a>
				<a href="<?php echo base_url(); ?>company_settings/profit_cost_centers" class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($pcc_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">Company</h4>
						<h4 style="text-align: center; font-weight: bold;">Profit Cost Centers</h4>		
					</span>
				</a>
			</div>
			<div class="row">
				<a href="<?php echo base_url(); ?>company_settings/products" class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($product_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">Company</h4>
						<h4 style="text-align: center; font-weight: bold;">Products</h4>
					</span>
				</a>
				<a href="<?php echo base_url(); ?>company_settings/services" class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($service_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">Company</h4>
						<h4 style="text-align: center; font-weight: bold;">Services</h4>
					</span>
				</a>
				<a href="<?php echo base_url(); ?>company_settings/documents" class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($document_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">Company</h4>
						<h4 style="text-align: center; font-weight: bold;">Documents</h4>
					</span>
				</a>
				<a href="<?php echo base_url(); ?>company_settings/discounts" class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($discount_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">Company</h4>
						<h4 style="text-align: center; font-weight: bold;">Discounts</h4>
					</span>
				</a>
				<a href="<?php echo base_url(); ?>company_settings/modes_of_payment" class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($mop_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">Company</h4>
						<h4 style="text-align: center; font-weight: bold;">Modes of Payment</h4>
					</span>
				</a>
				<a href="<?php echo base_url(); ?>company_settings/journals" class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($journal_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">Company</h4>
						<h4 style="text-align: center; font-weight: bold;">Journals</h4>
					</span>
				</a>
			</div>
			<div class="row">
				<a href="<?php echo base_url(); ?>company_settings/branches" class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($branch_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">Company</h4>
						<h4 style="text-align: center; font-weight: bold;">Branches</h4>
					</span>
				</a>
				<a href="<?php echo base_url(); ?>company_settings/users" class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($user_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">Company</h4>
						<h4 style="text-align: center; font-weight: bold;">Users</h4>
					</span>
				</a>
				
				<a href="<?php echo base_url(); ?>company_settings/transactions" class='col-md-2 col-xs-2 col-sm-2 title-hover dp-tiles'>
					<span>
						<h4 style="text-align: center; margin: 0;">Company</h4>
						<h4 style="text-align: center; font-weight: bold;">Transactions</h4>
					</span>
				</a>
				
				<a href="" class='col-md-2 col-xs-2 col-sm-2 title-hover dp-tiles'>
					<span>
						<h4 style="text-align: center; margin: 0;">Company</h4>
						<h4 style="text-align: center; font-weight: bold;">Journal Entries</h4>
					</span>
				</a>
				<a href="<?php echo base_url(); ?>company_settings/others" class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($other_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">Company</h4>
						<h4 style="text-align: center; font-weight: bold;">Others</h4>
					</span>
				</a>
			</div>
		</div>
	</div>
</div>