angular.module('app', ['mainEvents', 'ui.router', 'ngResource'])
    .constant('baseUrl', 'http://localhost:5500/avengers')
    .constant('ImgUrl', 'http://localhost:5500/images')
    .config(function($locationProvider, $stateProvider, $urlRouterProvider) {
        $locationProvider.html5Mode(true);
        $stateProvider
            .state('home', {
                url: '/',
                templateUrl: '/views/start.html'
            })
            .state('squad', {
                url: '/squad',
                templateUrl: '/views/squad.html'
            })
            .state('add', {
                url: '/add',
                templateUrl: '/views/add.html'
            });
        $urlRouterProvider.otherwise('/');
    });
angular.module('mainEvents', []);
angular.module('mainEvents')
    .controller('moduleCtrl', moduleCtrl);

function moduleCtrl($log, $scope, $location, $resource, baseUrl, ImgUrl) {
    $scope.images = $resource(ImgUrl + ':id', {
        id: '@id'
    });
    $scope.avengers = $resource(baseUrl + ':id', {
        id: '@id'
    });
    $scope.imgSource = $scope.images.query();
    $scope.data = $scope.avengers.query();
    $scope.reset = function() {
        $scope.data = [];
    }
    $scope.deleteItem = function(index) {
        $scope.data.splice(index, 1);
    }
    $scope.addItem = function(hero) {
        if (hero) {
            $scope.data.push(hero)
            $location.path('/squad')
        }
    }
    $scope.sayName = function(name) {
        $log.log('I\'m  ' + name);
    };
}

angular.module('app')
    .run(function($log) {
        $log.log('Run ended!');
    })
    .controller('mainCtrl', mainCtrl);

function mainCtrl($resource, $scope, $location) {};
