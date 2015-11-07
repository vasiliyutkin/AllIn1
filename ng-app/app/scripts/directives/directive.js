app.directive('myApp', function(){
	return {
		scope: {}, 
		controller: 'myCtrl',
		restrict: 'E',
		templateUrl: 'views/directive.html'		
		}
});