(function() {
    'use strict';

    angular.module('myApp')
        .controller('SettingsController', SettingsController);

    function SettingsController($location, UserService, Weather) {
        var vm = this;
        vm.fetchCities = Weather.getCityDetails;
        vm.user = UserService.user;
        vm.save = function() {
            UserService.save()
            $location.path('/');
        };
    }
})();
