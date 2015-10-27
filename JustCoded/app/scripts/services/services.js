(function() {
    'use strict';

    angular.module('serviceMod')
        .factory('counter', counter);

    /****************************************************
    									counter function
    *****************************************************/
    function counter() {
        return {
            super: function() {
                var counter = 0;
                for (var i = 0; i < this.data.length; i++) {
                    if (this.data[i].superpower === true) {
                        counter++;
                    };
                }
                return counter;
            },
            rich: function() {
                var counter = 0;
                for (var i = 0; i < this.data.length; i++) {
                    if (this.data[i].rich === true) {
                        counter++;
                    };
                }
                return counter;
            },
            genious: function() {
                var counter = 0;
                for (var i = 0; i < this.data.length; i++) {
                    if (this.data[i].genious === true) {
                        counter++;
                    };
                }
                return counter;
            }
        }
    };



})()
