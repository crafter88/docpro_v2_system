<script src='<?php echo base_url(); ?>/libs/angular/angular.min.js'></script>
<script>
	(function(){
		$.fn.extend({
			animateCss: function (animationName) {
				var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
				$(this).addClass('animated ' + animationName).one(animationEnd, function() {
					$(this).removeClass('animated ' + animationName);
				});
			}
		});

		var app = angular.module('journal_app', [])
					.factory('Journal', function(){
						return {
							type: 'Sales'
						}
					})
					.controller('summary_controller', ['$scope', 'Journal', function($scope, Journal){
						$scope.journal = Journal;
						$scope.select_sales = function(){
							Journal.type = 'Sales';
							btn_font_weight('sales');
						}
						$scope.select_purchases = function(){
							Journal.type = 'Purchases';
							btn_font_weight('purchases');
						}
						$scope.select_receipts = function(){
							Journal.type = 'Receipts';
							btn_font_weight('receipts');
						}
						$scope.select_collections = function(){
							Journal.type = 'Collections';
							btn_font_weight('collections');
						}
						$scope.select_disbursements = function(){
							Journal.type = 'Disbursements';
							btn_font_weight('disbursements');
						}
						$scope.select_general = function(){
							Journal.type = 'General';
							btn_font_weight('general');
						}
						
						var btn_font_weight = function(btn){
							var default_css = {'background-color': '#FFF', 'color': '#363c46'};
							var styled_css = {'background-color': '#000', 'color': '#FFF', 'margin-bottom': '0'};
							
							$('#btn-sales').css(default_css);
							$('#btn-purchases').css(default_css);
							$('#btn-receipts').css(default_css);
							$('#btn-collections').css(default_css);
							$('#btn-disbursements').css(default_css);
							$('#btn-general').css(default_css);
							
							switch(btn){
								case 'sales':
									$('#btn-sales').css(styled_css);	
									$('#btn-sales').animateCss('flipInY');	
									$('#animated-container').animateCss('zoomInLeft');	
									break;
								case 'purchases':
									$('#btn-purchases').css(styled_css);
									$('#btn-purchases').animateCss('flipInY');
									$('#animated-container').animateCss('zoomInLeft');	
									break;
								case 'receipts':
									$('#btn-receipts').css(styled_css);
									$('#btn-receipts').animateCss('flipInY');
									$('#animated-container').animateCss('zoomInLeft');	
									break;
								case 'collections':
									$('#btn-collections').css(styled_css);
									$('#btn-collections').animateCss('flipInY');
									$('#animated-container').animateCss('zoomInLeft');	
									break;
								case 'disbursements':
									$('#btn-disbursements').css(styled_css);
									$('#btn-disbursements').animateCss('flipInY');
									$('#animated-container').animateCss('zoomInLeft');	
									break;
								case 'general':
									$('#btn-general').css(styled_css);
									$('#btn-general').animateCss('flipInY');
									$('#animated-container').animateCss('zoomInLeft');	
									break;
							}
						}
					}]);
					
	})();
</script>