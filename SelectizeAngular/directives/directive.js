app.directive('myDirective', ['Selectize', function(Selectize) {
        return {
            restrict: 'E',
            require: '^ngModel',
            scope: { ngModel: '=', config: '=?', options: '=?', ngDisabled: '=', ngRequired: '&' },
            link: function (scope, element, attrs, modelCtrl) {
                var selectize, toggle, setOptions, setSelectizeValue,
                    settings = angular.extend({}, Selectize.defaults, scope.config);
                scope.options = scope.options || [];
                scope.config = scope.config || {};
                toggle = function(disabled) {
                    if(disabled) {
                        selectize.disable();
                    } else {
                        selectize.enable();
                    }
                };
                setOptions = function(newCol, oldCol) {
                    angular.forEach(oldCol, function(opt){
                        if (newCol.indexOf(opt) === -1) {
                            var value = opt[settings.valueField];
                            selectize.removeOption(value, true);
                        }
                    });
                    selectize.addOption(newCol, true);
                    setSelectizeValue();
                };
                setSelectizeValue = function() {
                    if (!angular.equals(selectize.items, scope.ngModel)) {
                        selectize.setValue(scope.ngModel, true);
                    }
                };
                settings.onChange = function(value) {
                    value = angular.copy(selectize.items);
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
