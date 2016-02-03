(function() {
    'use strict';

    angular.module('app.controllers', [
            'ngStorage',
            'restangular'
        ])
        .constant("productListPageCount", 3)
        .constant("productListActiveClass", "btn-info btn-raised");


})();
