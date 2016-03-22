(function() {
    'use strict';

    angular.module('shoppingApp')
        .config(function($stateProvider, $urlRouterProvider) {
            $urlRouterProvider.otherwise('/404');

            $stateProvider
                .state('home', {
                    url: '/home',
                    templateUrl: 'views/home.html',
                    controller: 'MainController'
                })
                .state('login', {
                    url: '/login',
                    template: '<login-form />'
                })
                .state('edit-item', {
                    url: '/item/edit',
                    templateUrl: 'views/productsList.html',
                    controller: 'MainController'
                })
                .state('dashboard', {
                    url: '/dashboard',
                    templateUrl: 'views/dashboard.html',
                    controller: 'MainController'
                })
                .state('error', {
                    url: '/404',
                    templateUrl: 'views/404.html'
                });
        })
        .run(function() {
            $.material.init();
        })


})();
