angular.module('app', ['mainMod', 'ui.router', 'ngResource'])
    .run(function($log) {
        $log.log('Run ended!');
    })
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
            })
            .state('team', {
                url: '/team',
                templateUrl: '/views/team.html'
            })
            .state('favs', {
                url: '/favs',
                templateUrl: '/views/favs.html'
            });
        $urlRouterProvider.otherwise('/');
    });
angular.module('mainMod', []);
angular.module('mainMod')
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
    $scope.team = [];
    $scope.favs = [];
    $scope.addToSquad = function(index) {
        $scope.team.push($scope.data[index]);
        $location.path('/team');
    };
    $scope.addToFavorites = function(index) {
        $scope.favs.push($scope.data[index]);
        $location.path('/favs');
    }
};
