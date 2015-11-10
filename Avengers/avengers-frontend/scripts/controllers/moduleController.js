(function() {
    "use strict";

    angular.module('mainMod')
        .controller('moduleCtrl', moduleCtrl);

    function moduleCtrl(avengersUrl, ImgUrl, teamUrl, favsUrl, $scope, $location, $resource) {
        $scope.imagesResource = $resource(ImgUrl + ':id', {
            id: '@id'
        });
        $scope.avengersResource = $resource(avengersUrl + ':id', {
            id: '@id'
        });
        $scope.teamResource = $resource(teamUrl + ':id', {
            id: '@id'
        });
        $scope.favsResource = $resource(favsUrl + ':id', {
            id: '@id'
        });

        /**************************************************
                    Data arrays from REST
        **************************************************/

        $scope.imgSource = $scope.imagesResource.query();
        $scope.avengers = $scope.avengersResource.query();
        $scope.team = $scope.teamResource.query();
        $scope.favs = $scope.favsResource.query();

        /******************************************************
                            App's functions section
        ******************************************************/

        $scope.resetTeam = resetTeam;
        $scope.resetFavs = resetFavs;
        $scope.addItem = addItem;
        $scope.addToSquad = addToSquad;
        $scope.addToFavorites = addToFavorites;
        $scope.deleteFromTeam = deleteFromTeam;
        $scope.deleteFromFavs = deleteFromFavs;

        /*********************************************
                        Func Declarations
        *********************************************/

        function resetTeam() {
            for (var i = 0; i < $scope.team.length; i++) {
                $scope.team[i].$delete()
                    .then(function() {
                        $scope.team = [];
                        $location.path('/');
                    })
            }
        };

        function resetFavs() {
            for (var i = 0; i < $scope.favs.length; i++) {
                $scope.favs[i].$delete()
                    .then(function() {
                        $scope.favs = [];
                        $location.path('/');
                    })
            }
        };

        function addItem(hero) {
            for (var i = 0; i < $scope.team.length; i++) {
                if (hero.name.toLowerCase() === $scope.team[i].name.toLowerCase() && hero.nickname.toLowerCase() === $scope.team[i].nickname.toLowerCase()) {
                    humane.log('You have already ' + $scope.team[i].nickname + ' in your squad, pay more attentiveness')
                    return false;
                }
            }
            new $scope.teamResource(hero).$save().then(function(newHero) {
                $scope.team.push(newHero);
                $location.path('/team')
            })
        };

        function addToSquad(index) {
            delete $scope.avengers[index].id;
            for (var i = 0; i < $scope.team.length; i++) {
                if ($scope.avengers[index].name.toLowerCase() === $scope.team[i].name.toLowerCase()) {
                    humane.log('You have already ' + $scope.team[i].nickname + ' in your squad, pay more attentiveness')
                    return false;
                }
            }
            new $scope.teamResource($scope.avengers[index]).$save()
                .then(function(newHero) {
                    $scope.team.push(newHero);
                    $location.path('/team');
                })
        };

        function addToFavorites(index) {
            delete $scope.avengers[index].id;
            for (var i = 0; i < $scope.favs.length; i++) {
                if ($scope.avengers[index].name.toLowerCase() === $scope.favs[i].name.toLowerCase()) {
                    humane.log($scope.team[i].nickname + ' already in your Favourites, check it out!')
                    return false;
                }
            }
            new $scope.favsResource($scope.avengers[index]).$save()
                .then(function(newHero) {
                    $scope.favs.push(newHero);
                    $location.path('/favs');
                })
        };

        function deleteFromTeam(index) {
            $scope.team[index].$delete()
                .then(function() {
                    $scope.team.splice(index, 1);
                })
        };

        function deleteFromFavs(index) {
            $scope.favs[index].$delete()
                .then(function() {
                    $scope.favs.splice(index, 1);
                })
        };
    };
})();
