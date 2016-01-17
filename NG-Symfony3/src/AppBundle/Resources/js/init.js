var app = angular.module('App', ['ngRoute']);

app.run(function($log) {
  $log.debug('application loaded')
});

app.config(['$interpolateProvider', '$routeProvider', function($interpolateProvider, $routeProvider) {
	$interpolateProvider.startSymbol('[[');
	$interpolateProvider.endSymbol(']]');

	$routeProvider
    .when('/home/a', {
  		templateUrl: '/modules/slideA.html',
  		controller: 'homeSlideAController'
  	})
    .when('/home/b', {
  		templateUrl: '/modules/slideB.html',
  		controller: 'homeSlideBController'
  	})
    .when('/home/c', {
  		templateUrl: '/modules/slideC.html',
  		controller: 'homeSlideCController'
  	})
    .when('/home/d', {
  		templateUrl: '/modules/slideD.html',
  		controller: 'homeSlideDController'
  	})
    .otherwise({
  		redirectTo: '/home/a'
  	});
}]);


app.controller('appController', function($scope, $location, $log) {
	$scope.gotoView = function(view) {
		$location.path(view);
	};
});
app.controller('homeSlideAController', function($scope, $log) {
  $log.log('A controller is on the headlines');
});
app.controller('homeSlideBController', function($scope, $log) {
  $log.log('B controller is on the headlines');
});
app.controller('homeSlideCController', function($scope, $log) {
  $log.log('C controller is on the headlines');
});
app.controller('homeSlideDController', function($scope, $log) {
  $log.log('D controller is on the headlines');
});
