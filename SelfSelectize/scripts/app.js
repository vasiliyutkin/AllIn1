angular.module('myApp', [])
    .controller('myCtrl', ['$scope', '$http',
        function($scope, $http) {
            $scope.list = [
                {type: 'Яблоко', price: 30},
                {type: 'Ягода Арбуз', price: 10},
                {type: 'Апельсин', price: 20},
                {type: 'Персик', price: 31},
                {type: 'не Персик', price: 23},
                {type: 'свежие Яблоки', price: 73}
            ];
            $scope.upgrade = function() {
                $http.get('fruits.json')
                    .success(function(response) {
                        $scope.myData = response;
                        for(var i=0; i < $scope.myData.fruits.length; i++) {
                            $scope.list.push($scope.myData.fruits[i]);
                            $scope.list = $scope.list.slice(0, 19);
                        }
                    })
            };
        }
    ])
    .directive('selectize', function() {
        return {
            restrict: 'E',
            templateUrl: 'templates/selectize.html',
            replace: true,
            scope: false,
            controller: 'myCtrl'
        };
    });
