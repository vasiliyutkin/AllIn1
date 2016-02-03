(function() {
    'use strict';

    angular.module('myApp')
        .config(function($routeProvider) {
            $routeProvider
                .when('/', {
                    templateUrl: 'templates/home.html',
                    controller: 'MainController',
                    controllerAs: 'vm'
                })
                .when('/settings', {
                    templateUrl: 'templates/settings.html',
                    controller: 'SettingsController',
                    controllerAs: 'vm'
                })
                .otherwise({
                    redirectTo: '/'
                })
        })
        .config(function(WeatherProvider) {
            WeatherProvider.setApiKey('eace48c9f5ba4d48');
        })
})();
