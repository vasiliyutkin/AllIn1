angular.module('app', ['mainMod'])
    .run(function($log) {
        $log.log('Run ended!');
    })
    .constant('avengersUrl', 'http://localhost:5500/avengers/')
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
angular.module('mainMod', ['ui.router', 'ngResource', 'ngAnimate'])
    .controller('moduleCtrl', moduleCtrl);

function moduleCtrl($log, $scope, $location, $resource, avengersUrl, ImgUrl, teamUrl, favsUrl) {
    $scope.imagesResource = $resource(ImgUrl + ':id', {
        id: '@id'
    });
    $scope.avengersResource = $resource(avengersUrl + ':id', {
        id: '@id'
    });
    $scope.imgSource = $scope.imagesResource.query();
    $scope.avengers = $scope.avengersResource.query();

    $scope.resetTeam = function() {
        for (var i = 0; i < $scope.team.length; i++) {
            $scope.team[i].$delete()
                .then(function() {
                    $scope.team = [];
                    $location.path('/');
                })
        }
    }

    $scope.resetFavs = function() {
        for (var i = 0; i < $scope.favs.length; i++) {
            $scope.favs[i].$delete()
                .then(function() {
                    $scope.favs = [];
                    $location.path('/');
                })
        }
    }

    $scope.addItem = function(hero) {
        new $scope.teamResource(hero).$save().then(function(newHero) {
            $scope.team.push(newHero);
            $location.path('/team')
        })
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
        delete $scope.avengers[index].id;
        new $scope.teamResource($scope.avengers[index]).$save()
            .then(function(newHero) {
                $scope.team.push(newHero);
                $location.path('/team');
            })
    };

    $scope.addToFavorites = function(index) {
        delete $scope.avengers[index].id;
        new $scope.favsResource($scope.avengers[index]).$save()
            .then(function(newHero) {
                $scope.favs.push(newHero);
                $location.path('/favs');
            })
    };

    $scope.deleteFromTeam = function(index) {
        $scope.team[index].$delete()
            .then(function() {
                $scope.team.splice(index, 1);
            })
    };
    $scope.deleteFromFavs = function(index) {
        $scope.favs[index].$delete()
            .then(function() {
                $scope.favs.splice(index, 1);
            })
    };
}
