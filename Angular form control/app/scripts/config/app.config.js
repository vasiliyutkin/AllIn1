(function() {
    'use strict';

    angular.module('configMod')
        .config(function($routeProvider) {
            $routeProvider
                .when("/", {
                    templateUrl: "views/home.html"
                })
                .when("/super", {
                    templateUrl: "views/superpower.html"
                })
                .when("/rich", {
                    templateUrl: "views/rich.html"
                })
                .when("/genious", {
                    templateUrl: "views/genious.html"
                })
                .otherwise({
                    templateUrl: "views/home.html"
                })
        });
})()
