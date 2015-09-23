var select = angular.module('selectize', []);
select.factory('Selectize', function($window) {
    return $window.Selectize;  });
var app = angular.module('myApp', ['selectize']);


app.controller('myCtrl', ['$scope','$timeout', '$http',
    function($scope, $timeout, $http) {


        $http.get('js/package.json').
            then(function(response) {
                console.log(response);
                angular.extend($scope.myOptions, response.data);
            }, function(response) {
                //
            });
        $scope.disable = false;

        $scope.myModel = [];

        //$scope.myOptions = [{value: '1', text: 'Jordy'}];
        //
        //$scope.changeOptions = function(){
        //    $scope.myOptions = [{value: '1', text: 'Kirk'}];
        //};

        $scope.changeValue = function(){
            $scope.myModel = '2';
        };

        $scope.myConfig = {
            create: true,
            onChange: function(value){
                console.log('onChange', value)
            }
            // maxItems: 1,
            // required: true,
        };

        //simulate async option loading
        $timeout(function(){
            $scope.myOptions.push({value: '2', text: 'Crusher'})
        }, 1000)


    }
]);

app.directive('selectize', ['Selectize', function(Selectize) {
    return {
        restrict: 'EA',
        require: '^ngModel',
        replace: true,
        scope: { ngModel: '=', config: '=?', options: '=?', ngDisabled: '=', ngRequired: '&' },
        link: function (scope, element, attrs, modelCtrl) {
            var selectize,
                settings = angular.extend({}, Selectize.defaults, scope.config);
            scope.options = scope.options || [];
            scope.config = scope.config || {};

            //hz
            var toggle = function(disabled) {
                disabled ? selectize.disable() : selectize.enable();
            };
            var setOptions = function(newCol, oldCol) {
                angular.forEach(oldCol, function(opt){
                    // if option is not exist in newCol, remove option from selectize
                    if (newCol.indexOf(opt) === -1) {
                        var value = opt[settings.valueField];
                        selectize.removeOption(value, true);
                    }
                });
                // add new options in selectize
                selectize.addOption(newCol, true);
                setSelectizeValue();
            };

            var setSelectizeValue = function() {
                if (!angular.equals(selectize.items, scope.ngModel)) {
                    console.log(scope.ngModel);
                    selectize.setValue(scope.ngModel, true);
                }
            };
            settings.onChange = function(value) {
                var value = angular.copy(selectize.items);
                modelCtrl.$setViewValue(value);

                if (scope.config.onChange) {
                    scope.config.onChange.apply(this, arguments);
                }
            };
            settings.onOptionAdd = function(value, data) {
                if (scope.options.indexOf(data) === -1) {
                    scope.options.push(data);
                    if (scope.config.onOptionAdd) {
                        scope.config.onOptionAdd.apply(this, arguments);
                    }
                }
            };
            settings.onInitialize = function() {
                selectize = element[0].selectize;
                if (scope.config.onInitialize) {
                    scope.config.onInitialize(selectize);
                }
                scope.$watchCollection('options', setOptions);
                scope.$watch('ngModel', setSelectizeValue);
                scope.$watch('ngDisabled', toggle);
            };


            element.selectize(settings);
            element.on('$destroy', function() {
                if (selectize) {
                    selectize.destroy();
                    element = null;
                }
            });
        }
    };
}]);

