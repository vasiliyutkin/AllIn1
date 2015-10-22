angular.module('superPowers')
    .directive('sidebar', function() {
        return {
            restrict: 'E',
            controller: 'superCtrl',
            templateUrl: 'views/sidebar.html'
        }
    });