(function() {
    'use strict';

    angular.module('app.controllers')
        .controller('MainController', function($scope, $log, $location, $localStorage, $rootScope, productListPageCount, productListActiveClass, Products, Restangular) {
            $scope.$storage = $localStorage;
            $scope.users = $scope.$storage.users || [];
            $scope.currentUser = $scope.$storage.currentUser || {};
            if (!$scope.currentUser.email) $location.path('/login');

            // authorize function
            $scope.authorize = function(user) {
                var user = user;

                if (user.remember) {
                    for (var i = 0; i < $scope.users.length; i++) {
                        if ($scope.users[i].email.toLowerCase() === user.email.toLowerCase() && $scope.users[i].pwd === user.pwd) {
                            $scope.users.splice($scope.users.indexOf(user), 1);
                            $scope.currentUser = user;
                            $scope.$storage.currentUser = $scope.currentUser;
                            $scope.$storage.users = $scope.users;
                            $location.path('/home');
                        }
                    }
                    $scope.users.push(user);
                    $scope.currentUser = user;
                    $scope.$storage.currentUser = $scope.currentUser;
                    $scope.$storage.users = $scope.users;
                    $location.path('/home');
                } else {
                    alert('Your data won\'t be saved!');
                    $scope.currentUser = user;
                    $scope.$storage.currentUser = $scope.currentUser;
                    $location.path('/home');
                }
            };
            $scope.logout = function() {
                $scope.currentUser = {};
                $scope.$storage.currentUser = $scope.currentUser;
            };

            /***************************************
                    Experimental data
            ***************************************/
            $scope.data = $scope.$storage.data || Products.get().then(function(data) {
                    $scope.data = data;
                },
                function(err) {
                    $log.log(err);
                });

            $scope.toggle = function(index) {
                for (var i = 0; i < $scope.data.length; i++) {
                    $scope.data[i].show = !$scope.data[i].show;
                    if (i !== index) {
                        $scope.data[i].show = false;
                    }
                }
            };


            var selectedCategory = null;
            $scope.selectedPage = 1;
            $scope.pageSize = productListPageCount;
            $scope.selectCategory = selectCategory;
            $scope.selectPage = selectPage;
            $scope.categoryFilterFn = categoryFilterFn;
            $scope.getCategoryClass = getCategoryClass;
            $scope.getPageClass = getPageClass;

            function selectCategory(newCategory) {
                selectedCategory = newCategory;
                $scope.selectedPage = 1;
            }

            function selectPage(newPage) {
                $scope.selectedPage = newPage;
            }

            function categoryFilterFn(product) {
                return selectedCategory == null ||
                    product.category == selectedCategory;
            }

            function getCategoryClass(category) {
                return selectedCategory == category ? productListActiveClass : "";
            }

            function getPageClass(page) {
                return $scope.selectedPage == page ? productListActiveClass : "";
            }
            /*******************************************************************
                            Create edit delete products FNs
            *******************************************************************/

            $scope.deleteProduct = deleteProduct;
            $scope.createProduct = createProduct;
            $scope.updateProduct = updateProduct;
            $scope.startEdit = startEdit;
            $scope.cancelEdit = cancelEdit;

            function deleteProduct(item) {
                $scope.data.splice($scope.data.indexOf(item), 1);
                $scope.$storage.data = $scope.data;
            }

            function createProduct(item) {
                if (!item.id) {
                    item.id = $scope.data.length;
                };

                $scope.data.push(item);
                $scope.editedProduct = null;
                $scope.$storage.data = $scope.data;
            }

            function updateProduct(item) {
                $scope.data.splice($scope.data.indexOf(item), 1, item);
                $scope.editedProduct = null;
                $scope.$storage.data = $scope.data;
            }

            function startEdit(product) {
                $scope.editedProduct = product;
            }

            function cancelEdit() {
                $scope.editedProduct = null;
            }

            /**********************************************
                            Dashboard FNs
            **********************************************/
            $scope.editUser = false;
            $scope.editPwd = false;

            $scope.saveUserPassword = function() {
                $scope.editPwd = false;
                $scope.$storage.currentUser = $scope.currentUser;
            };
            $scope.saveUserSettings = function() {
                $scope.editUser = false;
                $scope.$storage.currentUser = $scope.currentUser;
            };
            $scope.editUserSettings = function() {
                $scope.editUser = true;
            };
            $scope.changePwd = function() {
                $scope.editPwd = true;
            };


            //Delete all items with checkbox true
            $scope.deleteSelected = function() {
                $scope.data.forEach(function(item) {
                    if (item.forDelete) {
                        $scope.data.splice($scope.data.indexOf(item), 1);
                    }
                })
                $scope.$storage.data = $scope.data;
            };
            $scope.countSelected = function() {
                var counter = 0;
                $scope.data.forEach(function(item) {
                    if (item.forDelete) {
                        counter++;
                    }
                })
                return counter;
            };

        });


})();
