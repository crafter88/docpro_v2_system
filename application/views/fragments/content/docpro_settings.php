<div id='m_c_d' class='appear'>
    <div class='n_cp_n_cm' class='container' style="margin: 0;">
		<div class='card-body button-group-custom'>
			<div class='row'>
<!-- 				<a href='<?php echo base_url(); ?>docpro_settings/chart_of_accounts' class="col-md-3 col-xs-3 col-sm-3 ripple-effect <?php echo (floatval($coa_setting_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'?>">
					<span class="tile-number">1</span>
					<h4 style="text-align: center; margin: 0;">Docpro</h4>
					<h4 style="text-align: center; font-weight: bold;">Chart of Accounts</h4>
				</a>
				<a href='<?php echo base_url(); ?>docpro_settings/modes_of_payment' class="col-md-3 col-xs-3 col-sm-3 ripple-effect <?php echo (floatval($mop_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'?>">
					<span class="tile-number">2</span>
					<h4 style="text-align: center; margin: 0;">Docpro</h4>
					<h4 style="text-align: center; font-weight: bold;">Modes of Payment</h4>
				</a>
				<a href='<?php echo base_url(); ?>docpro_settings/banks' class="col-md-3 col-xs-3 col-sm-3 ripple-effect <?php echo (floatval($bank_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'?>">
					<span class="tile-number">3</span>
					<h4 style="text-align: center; margin: 0;">Docpro</h4>
					<h4 style="text-align: center; font-weight: bold;">Banks</h4>
				</a>
				<a href='<?php echo base_url(); ?>docpro_settings/documents' class="col-md-3 col-xs-3 col-sm-3 ripple-effect <?php echo (floatval($documents_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'?>">
					<span class="tile-number">4</span>
					<h4 style="text-align: center; margin: 0;">Docpro</h4>
					<h4 style="text-align: center; font-weight: bold;">Documents</h4>
				</a> -->


				<a href='<?php echo base_url(); ?>docpro_settings/chart_of_accounts' class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($coa_setting_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">DocPro</h4>
						<h4 style="text-align: center; font-weight: bold;">Chart of Accounts</h4>
					</span>
				</a>
				<a href='<?php echo base_url(); ?>docpro_settings/modes_of_payment' class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($mop_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">DocPro</h4>
						<h4 style="text-align: center; font-weight: bold;">Modes of Payment</h4>
					</span>
				</a>
				<a href='<?php echo base_url(); ?>docpro_settings/banks' class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($bank_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">DocPro</h4>
						<h4 style="text-align: center; font-weight: bold;">Banks</h4>
					</span>
				</a>
				<a href='<?php echo base_url(); ?>docpro_settings/documents' class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($documents_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">DocPro</h4>
						<h4 style="text-align: center; font-weight: bold;">Documents</h4>
					</span>
				</a>
				<a href='<?php echo base_url(); ?>docpro_settings/transactions' class="col-md-2 col-xs-2 col-sm-2 title-hover dp-tiles">
					<span>
						<h4 style="text-align: center; margin: 0;">DocPro</h4>
						<h4 style="text-align: center; font-weight: bold;">Transactions</h4>
					</span>
				</a>
				<a href='<?php echo base_url(); ?>docpro_settings/journals' class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($journal_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">DocPro</h4>
						<h4 style="text-align: center; font-weight: bold;">Journals</h4>
					</span>
				</a>
			</div>
			<div class='row'>
<!-- 				<a href='<?php echo base_url(); ?>docpro_settings/transactions' class='col-md-3 col-xs-3 col-sm-3 ripple-effect dp-tiles'>
					<span class="tile-number">5</span>
					<h4 style="text-align: center; margin: 0;">Docpro</h4>
					<h4 style="text-align: center; font-weight: bold;">Transactions</h4>
				</a>
				
				<a href='<?php echo base_url(); ?>docpro_settings/journals' class="col-md-3 col-xs-3 col-sm-3 ripple-effect <?php echo (floatval($journal_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'?>">
					<span class="tile-number">6</span>
					<h4 style="text-align: center; margin: 0;">Docpro</h4>
					<h4 style="text-align: center; font-weight: bold;">Journals</h4>
				</a>
				<a href='<?php echo base_url(); ?>docpro_settings/company' class="col-md-3 col-xs-3 col-sm-3 ripple-effect <?php echo (floatval($company_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'?>">
					<span class="tile-number">7</span>
					<h4 style="text-align: center; margin: 0;">Docpro</h4>
					<h4 style="text-align: center; font-weight: bold;">Companies</h4>
				</a>
				<a href='<?php echo base_url(); ?>docpro_settings/users' class="col-md-3 col-xs-3 col-sm-3 ripple-effect <?php echo (floatval($users_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'?>">
					<span class="tile-number">8</span>
					<h4 style="text-align: center; margin: 0;">Docpro</h4>
					<h4 style="text-align: center; font-weight: bold;">Users</h4>
				</a> -->

				<a href='<?php echo base_url(); ?>docpro_settings/company' class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($users_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">DocPro</h4>
						<h4 style="text-align: center; font-weight: bold;">Companies</h4>
					</span>
				</a>
				<a href='<?php echo base_url(); ?>docpro_settings/users' class="col-md-2 col-xs-2 col-sm-2 title-hover <?php echo (floatval($users_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?>">
					<span>
						<h4 style="text-align: center; margin: 0;">DocPro</h4>
						<h4 style="text-align: center; font-weight: bold;">Users</h4>
					</span>
				</a>
			</div>
		</div>
	</div>
</div>