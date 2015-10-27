(function() {
    'use strict';

    angular.module('superPowers')
        .controller('superCtrl', superCtrl);

    function superCtrl($scope, $location, $localStorage, counter) {
        /**********************************************
        local methods to work with localStorage service
        ***********************************************/
        $scope.saveState = saveState;
        $scope.loadState = loadState;
        $scope.loadState();

        function saveState() {
            return $localStorage.data = $scope.data;
        };

        function loadState() {
            return $scope.data = $localStorage.data || [];
        };

        /********************************************
                   our apps CRUD operations
        ********************************************/
        $scope.addPerson = addPerson;
        $scope.deletePerson = deletePerson;

        function addPerson() {
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

        function deletePerson(index) {
            $scope.data.splice(index, 1);
        };

        /******************************************
                      count functions
        *******************************************/
        $scope.countSuper = counter.super;
        $scope.countRich = counter.rich;
        $scope.countGenious = counter.genious;

        /************************************
            Blocking state routing function
        *************************************/
        $scope.handler = handler;

        function handler() {
            $scope.$watch('data[i].superpower', function() {
                $scope.toggleS = 'disabled';
                for (var i = 0; i < $scope.data.length; i++) {
                    if ($scope.data[i].superpower === true) {
                        $scope.toggleS = 'enabled';
                    }
                }
            });
            $scope.$watch('data[i].rich', function() {
                $scope.toggleR = 'disabled';
                for (var i = 0; i < $scope.data.length; i++) {
                    if ($scope.data[i].rich === true) {
                        $scope.toggleR = 'enabled';
                    }
                }
            });
            $scope.$watch('data[i].genious', function() {
                $scope.toggleG = 'disabled';
                for (var i = 0; i < $scope.data.length; i++) {
                    if ($scope.data[i].genious === true) {
                        $scope.toggleG = 'enabled';
                    }
                }
            });
        };

        /********************************************************
                    deletion popUp message toggler
        *********************************************************/
        $scope.hideConfirm = hideConfirm;

        function hideConfirm(index) {
            for (var i = 0; i < $scope.data.length; i++) {
                $scope.data[i].confirm = !$scope.data[i].confirm;
                if (i !== index) {
                    $scope.data[i].confirm = false;
                }
            }
        };

        /**************************************************
                        routing on filters
        ***************************************************/
        $scope.changeRouteS = changeS;
        $scope.changeRouteR = changeR;
        $scope.changeRouteG = changeG;

        function changeS() {
            $scope.superpower = true;
            $scope.rich = false;
            $scope.genious = false;
        };

        function changeR() {
            $scope.superpower = false;
            $scope.rich = true;
            $scope.genious = false;
        };

        function changeG() {
            $scope.superpower = false;
            $scope.rich = false;
            $scope.genious = true;
        };

        /*****************************************************
                       Collection watcher function
        *****************************************************/
        $scope.$watchCollection('[superpower, rich, genious]', function(collection) {
            for (var i = 0; i < collection.length; i++) {
                if (!collection[i]) {
                    $location.path('/')
                }
            }
        });

        /*******************************************
                        routes filter options
        ********************************************/
        $scope.predicate = '';
        $scope.reverse = false;
        $scope.order = function(pred) {
            $scope.reverse = !$scope.reverse;
            $scope.predicate = pred;
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

    }

})()
