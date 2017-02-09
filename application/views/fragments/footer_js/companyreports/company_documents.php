<script>
	angular.module('sortApp', [])

	.controller('mainController', function($scope) {
  		$scope.sortType     = 'code'; // set the default sort type
  		$scope.sortReverse  = false;  // set the default sort order
  		$scope.searchDate   = '';     // set the default search/filter term
  
  		// create the list of sushi rolls 
  		$scope.reports = [
		    { code: '1', classification: 'Class1', name: 'Volvo', shortname: 'DP1', journalname: 'DocproJournal1', journalshortname: 'DPJ1'},
		    { code: '2', classification: 'Class2', name: 'Docpro2', shortname: 'DP2', journalname: 'DocproJournal2', journalshortname: 'DPJ2'},
		    { code: '3', classification: 'Class3', name: 'Docpro3', shortname: 'DP3', journalname: 'DocproJournal3', journalshortname: 'DPJ3'},
		    { code: '4', classification: 'Class4', name: 'Docpro4', shortname: 'DP4', journalname: 'DocproJournal4', journalshortname: 'DPJ4'},
		  ];
		  
		});
</script>