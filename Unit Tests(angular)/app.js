angular.module('exampleApp', [])
    .controller('defaultCtrl', defaultCtrl)
    .filter('labelCase', labelCase)
    .directive('unorderedList', unorderedList)
    .factory('counterService', counterService);

function defaultCtrl($scope, $log, $http, $interval, $timeout) {
    $scope.intervalCounter = 0;
    $scope.timerCounter = 0;
    $scope.dateArray = [{
        name: 'Today'
    }, {
        name: 'Tomorrow'
    }, {
        name: 'The Day After Tomorrow'
    }];
    $interval(function() {
        $scope.intervalCounter++;
    }, 5000, 10);

    $timeout(function() {
        $scope.timerCounter++;
    }, 5000);

    $http.get('data.json').success(function(data) {
        $scope.products = data;
        $log.log('There are ' + data.length + ' items');
    });
    $scope.counter = 0;
    $scope.incrementCounter = function() {
        $scope.counter++;
    };
};

function labelCase() {
    return function(value, reverse) {
        if (angular.isString(value)) {
            var intermediate = reverse ? value.toUpperCase() : value.toLowerCase();
            return (reverse ? intermediate[0].toLowerCase() : intermediate[0].toUpperCase()) + intermediate.substr(1)
        } else {
            return value
        }
    }
};

function unorderedList() {
    return function(scope, element, attrs) {
        var data = scope[attrs['unorderedList']];
        if (angular.isArray(data)) {
            var listItem = angular.element('<ul>');
            element.append(listItem);
            for (var i = 0; i < data.length; i++) {
                listItem.append(angular.element('<li>').text(data[i].name));
            }
        }
    }
};

function counterService() {
    var counter = 0;
    return {
        incrementCounter: function() {
            counter++;
        },
        getCounter: function() {
            return counter;
        }
    }
};
