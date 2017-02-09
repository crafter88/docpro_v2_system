<div class="side-body padding-top">
	<div class='card menu'>
		<div class='card-body button-group-custom'>
			<div id='custom-card-title' class='row' style="margin: 30px 0 30px 0; text-align: center;">
				<div class='panel panel-default' style="border: none; border-bottom: 2px solid #000">
					<div class='panel-body'>
						<p style="font-size: 24px; margin: 0;">Docpro Setup</p>
					</div>
				</div>
			</div>
			<div class='row'>
				<a href='<?php echo base_url(); ?>docpro_setup/chart_of_accounts' class="col-md-3 col-xs-3 col-sm-3 <?php echo (floatval($coa_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?> ripple-effect">
					<span class="tile-number">1</span>
					<h4 style="text-align: center; margin: 0;">Docpro</h4>
					<h4 style="text-align: center; font-weight: bold;">Chart of Accounts</h4>
				</a>
				<a href='<?php echo base_url(); ?>docpro_setup/taxes' class='col-md-3 col-xs-3 col-sm-3 <?php echo (floatval($tax_types_count) > 0) ? 'dp-tiles-full' : 'dp-tiles'; ?> ripple-effect'>
					<span class="tile-number">2</span>
					<h4 style="text-align: center; margin: 0;">Docpro</h4>
					<h4 style="text-align: center; font-weight: bold;">Taxes</h4>
				</a>
			</div>
		</div>
	</div>
</div>