(function() {
    'use strict';

    angular.module('superPowers')
        .directive('navigation', navigation);

    function navigation() {
        return {
            restrict: 'E',
            replace: false,
            controller: 'superCtrl',
            templateUrl: 'views/nav.html'
        }
    };

})()
