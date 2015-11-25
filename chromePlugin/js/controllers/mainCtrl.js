(function() {
    'use strict';

    angular.module('myApp')
        .controller('MainController', MainController);

    function MainController($timeout, Weather, UserService) {
        var vm = this;
        vm.user = UserService.user;
        vm.date = {};
        var updateTime = function() {
            vm.date.tz = new Date(new Date().toLocaleString(
                "en-US", {
                    timeZone: vm.user.timezone
                }
            ));
            vm.date.raw = new Date();
            $timeout(updateTime, 1000)
        }
        updateTime();
        vm.weather = {};
        Weather.getWeatherForecast(vm.user.location)
            .then(function(data) {
                vm.weather.forecast = data;
            })
    }
})();
