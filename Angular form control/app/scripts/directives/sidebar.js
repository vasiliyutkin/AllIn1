(function() {
    'use strict';

    angular.module('superPowers')
        .directive('sidebar', sidebar);

    function sidebar() {
        return {
            restrict: 'E',
            replace: false,
            controller: 'superCtrl',
            templateUrl: 'views/sidebar.html'
        }
    };

})()
