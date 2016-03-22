//adding module, which will be included in directive dependencies
angular.module('selectize', [])
    .service('Selectize', function($window) {
        return $window.Selectize;
    });
