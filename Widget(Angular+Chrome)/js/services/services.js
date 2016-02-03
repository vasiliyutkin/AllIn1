(function() {
    'use strict';

    angular.module('myApp')
        .factory('UserService', UserService)
        .provider('Weather', Weather);


    function UserService() {
        var defaults = {
            location: 'autoip'
        };
        var service = {
            user: {},
            save: function() {
                sessionStorage.presently =
                    angular.toJson(service.user);
            },
            restore: function() {
                service.user =
                    angular.fromJson(sessionStorage.presently) || defaults;
                return service.user;
            }
        };
        service.restore();
        return service;
    }


    function Weather() {
        var apiKey = '';
        this.getUrl = function(type, ext) {
            return 'http://api.wunderground.com/api/' +
                this.apiKey + '/' + type + "/q/" +
                ext + '.json';
        };
        this.setApiKey = function(key) {
            if (key) {
                this.apiKey = key;
            }
        };
        this.$get = function($q, $http) {
            var self = this;
            return {
                getWeatherForecast: function(city) {
                    var d = $q.defer();
                    $http({
                        method: 'GET',
                        url: self.getUrl("forecast", city),
                        cache: true
                    }).success(function(data) {
                        d.resolve(data.forecast.simpleforecast);
                    }).error(function(err) {
                        d.reject(err);
                    });
                    return d.promise;
                },
                getCityDetails: function(query) {
                    var d = $q.defer();
                    $http({
                        method: 'GET',
                        url: "http://autocomplete.wunderground.com/' + 'aq?query=" +
                            query
                    }).success(function(data) {
                        d.resolve(data.RESULTS);
                    }).error(function(err) {
                        d.reject(err);
                    });
                    return d.promise;
                }
            }
        }
    };
})();
