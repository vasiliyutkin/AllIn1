angular.module('superPowers')
    .controller('superCtrl', function($scope, $localStorage, $location) {
        $scope.loadState = function() {
            $scope.data = $localStorage.data || [];
        };

        $scope.data = $localStorage.data || [];


        //Blocking state routing function
        $scope.handler = function() {
            $scope.$watch('$scope.data[i].superpower', function() {
                $scope.toggleS = 'disabled';
                for (var i = 0; i < $scope.data.length; i++) {
                    if ($scope.data[i].superpower === true) {
                        $scope.toggleS = 'enabled';
                    }
                }
            });

            $scope.$watch('$scope.data[i].superpower', function() {
                $scope.toggleR = 'disabled';
                for (var i = 0; i < $scope.data.length; i++) {
                    if ($scope.data[i].rich === true) {
                        $scope.toggleR = 'enabled';
                    }
                }
            });
            $scope.$watch('$scope.data[i].superpower', function() {
                $scope.toggleG = 'disabled';
                for (var i = 0; i < $scope.data.length; i++) {
                    if ($scope.data[i].genious === true) {
                        $scope.toggleG = 'enabled';
                    }
                }
            });
        };

        $scope.hideConfirm = function(index) {
            $scope.data[index].confirm = !$scope.data[index].confirm;
            for (var i = 0; i < $scope.data.length; i++) {
                if (i !== index) {
                    $scope.data[i].confirm = false;
                }
            }
        };

        $scope.changeRouteS = function() {
            $scope.superpower = true;
            $scope.rich = false;
            $scope.genious = false;
        };
        $scope.changeRouteR = function() {
            $scope.superpower = false;
            $scope.rich = true;
            $scope.genious = false;
        };
        $scope.changeRouteG = function() {
            $scope.superpower = false;
            $scope.rich = false;
            $scope.genious = true;
        };

        if ($location.path("/")) {
            $scope.superpower = false;
            $scope.rich = false;
            $scope.genious = false;
        } else if ($location.path("/super")) {
            $scope.superpower = true;
            $scope.rich = false;
            $scope.genious = false;
        } else if ($location.path("/rich")) {
            $scope.superpower = false;
            $scope.rich = true;
            $scope.genious = false;
        } else if ($location.path("/genious")) {
            $scope.superpower = false;
            $scope.rich = false;
            $scope.genious = true;
        }

        //location routing for superPower
        $scope.$watch('superpower', function() {
            if (!$scope.superpower) {
                return $location.path("/");
            }
        });
        //location routing for Rich
        $scope.$watch('rich', function() {
            if (!$scope.rich) {
                return $location.path("/");
            }
        });
        //location routing for Genious
        $scope.$watch('genious', function() {
            if (!$scope.genious) {
                return $location.path("/");
            }
        });



        $scope.predicate = 'name';
        $scope.reverse = true;
        $scope.order = function(predicate) {
            $scope.reverse = ($scope.predicate === predicate) ? !$scope.reverse : false;
            $scope.predicate = predicate;
        };

        $scope.byS = {
            superpower: true
        };
        $scope.byR = {
            rich: true
        };
        $scope.byG = {
            genious: true
        };

        $scope.addPerson = function() {
            if (!$scope.name) {
                return false;
            } else if ($scope.name) {
                for (var i = 0; i < $scope.data.length; i++) {
                    if ($scope.data[i].name.toLowerCase() === $scope.name.toLowerCase()) {
                        return false;
                    }
                }
            }
            $scope.data.push({
                name: $scope.name,
                superpower: $scope.superpower,
                rich: $scope.rich,
                genious: $scope.genious,
                confirm: false
            });
            $scope.name = '';
            $scope.superpower = false;
            $scope.rich = false;
            $scope.genious = false;
        };

        $scope.deletePerson = function(index) {
            $scope.data.splice(index, 1);
        };

        $scope.countSuper = function() {
            var counter = 0;
            for (var i = 0; i < $scope.data.length; i++) {
                if ($scope.data[i].superpower === true) {
                    counter++;
                }
            }
            return counter;
        };

        $scope.countRich = function() {
            var counter = 0;
            for (var i = 0; i < $scope.data.length; i++) {
                if ($scope.data[i].rich === true) {
                    counter++;
                }
            }
            return counter;
        };

        $scope.countGenious = function() {
            var counter = 0;
            for (var i = 0; i < $scope.data.length; i++) {
                if ($scope.data[i].genious === true) {
                    counter++;
                }
            }
            return counter;
        };

        $scope.saveState = function() {
            $localStorage.data = $scope.data;
        };

    });
