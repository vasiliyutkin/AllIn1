(function() {
    'use strict';

    angular.module('superPowers', [
    				'configMod',
    				'serviceMod'
    	]);
    angular.module('serviceMod', [
    				'ngStorage'
    	]);
    angular.module('configMod', [
    				'ngRoute'
    	]);

})()
