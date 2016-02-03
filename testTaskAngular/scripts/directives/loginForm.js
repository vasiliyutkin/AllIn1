(function() {
    'use strict';

    angular.module('app.directives')
        .directive('loginForm', function() {
            return {
                restrict: 'EA',
                templateUrl: 'views/loginForm.html',
                controller: 'MainController'
            }
        });


})();
