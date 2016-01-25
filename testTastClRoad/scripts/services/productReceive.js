(function() {
    'use strict';

    angular.module('app.services')
        .constant('prodLocation', '/assets/products.json')
        .factory('Products', function(prodLocation, Restangular) {
            return {
                get: function() {
                    var Products = Restangular.all(prodLocation);
                    return Products.getList();
                }
            }
        });


})();
