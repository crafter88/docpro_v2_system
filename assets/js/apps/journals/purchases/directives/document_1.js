angular.module('journals')
		.directive('addDetailsBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-details-btn-function class='btn btn-info btn-sm'>add row</button>"
			}
		})
		.directive('addDetailsBtnFunction', function($compile){
			return{
				restrict: 'A',
				scope: {},
				controller: function($scope){
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('document-details')).append($compile(
							"<tr>"+
								"<td><input class='form-control' type='text' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' style='text-align: center;'></td>"+
								"<td><button ng-click='delete_row($event)' class='btn btn-danger btn-xs'><i class='fa fa-times'></i></button></td>"+
							"</tr>"
						)(scope))
					})
				}
			}
		})
		.directive('addDocRefBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-doc-ref-function class='btn btn-info btn-sm'>add row</button>"
			}
		})
		.directive('addDocRefFunction', function($compile){
			return{
				restrict: 'A',
				scope: {},
				controller: function($scope){
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('doc-ref-table')).append($compile(
							"<tr>"+
							"<td><input type='text' class='form-control'></td>"+
							"<td><input type='text' class='form-control'></td>"+
							"<td><button ng-click='delete_row($event)' type='button' class='btn btn-danger btn-xs'><i class='fa fa-times'></i></button></td>"+
							"</tr>"
						)(scope))
					})
				}
			}
		})