angular.module('app', ['mainMod', 'ui.router', 'ngResource'])
    .run(function($log) {
        $log.log('Run ended!');
    })
    .constant('baseUrl', 'http://localhost:5500/avengers/')
    .constant('teamUrl', 'http://localhost:5500/team/')
    .constant('favsUrl', 'http://localhost:5500/favourites/')
    .constant('ImgUrl', 'http://localhost:5500/images/')
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
angular.module('mainMod', [])
    .controller('moduleCtrl', moduleCtrl);

function moduleCtrl($log, $scope, $location, $resource, baseUrl, ImgUrl, teamUrl, favsUrl) {
    $scope.imagesResource = $resource(ImgUrl + ':id', {
        id: '@id'
    });
    $scope.avengersResource = $resource(baseUrl + ':id', {
        id: '@id'
    });
    $scope.imgSource = $scope.imagesResource.query();
    $scope.data = $scope.avengersResource.query();
    $scope.resetTeam = function() {
        $scope.team = [];
    }
    $scope.resetFavs = function() {
        $scope.favs = [];
    }
    $scope.deleteItem = function(index) {
        $scope.data.splice(index, 1);
    }
    $scope.addItem = function(hero) {
        if (hero) {
            $scope.team.push(hero)
            $location.path('/team')
        }
    }

    $scope.teamResource = $resource(teamUrl + ':id', {
        id: '@id'
    });

    $scope.favsResource = $resource(favsUrl + ':id', {
        id: '@id'
    });

    $scope.team = $scope.teamResource.query();
    
    $scope.favs = $scope.favsResource.query();

    $scope.addToSquad = function(index) {
        $scope.team.push($scope.data[index]);
        $location.path('/team');
    };
    
    $scope.addToFavorites = function(index) {
        $scope.favs.push($scope.data[index]);
        $location.path('/favs');
    }
    
};
