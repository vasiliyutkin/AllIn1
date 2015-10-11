/******************************************************************
                                           NG Controller
******************************************************************/
app.controller('myCtrl', function($scope, getData) {
    getData.success(function(data) {
        $scope.todo.things = data;
    });
    $scope.list = [{
        name: 'Philipp',
        age: 32,
        status: 'Rich'
    }, {
        name: 'Sergio',
        age: 51,
        status: 'Rich'
    }, {
        name: 'Ramirez',
        age: 67,
        status: 'Poor'
    }, {
        name: 'Luigi',
        age: 37,
        status: 'A'
    }, {
        name: 'Andrew',
        age: 21,
        status: 'Actively searching'
    }, {
        name: 'Alexander',
        age: 18,
        status: 'Happy'
    }];
    $scope.todo = {
        user: 'User',
        items: [{
            action: 'Clean teeth',
            done: false
        }, {
            action: 'Shake ass',
            done: true
        }, {
            action: 'Dance',
            done: false
        }, {
            action: 'Sleep',
            done: true
        }]
    };
    $scope.incompleteCount = function() {
        var count = 0;
        angular.forEach($scope.todo.items, function(item) {
            if (!item.done) {
                count++
            }
        });
        return count;
    };
    $scope.warning = function() {
        if ($scope.incompleteCount() > 5) {
            return 'label-danger'
        }
        return $scope.incompleteCount() < 3 ? 'label-success' : 'label-warning';
    };
    $scope.add = function(actionText) {
        if (actionText === undefined || actionText === '') {
            return false;
        } else {
            $scope.todo.items.push({
                action: actionText,
                done: false
            });
            $scope.actionText = '';
        }
    };
});

/******************************************************************
                                           NG Routing
******************************************************************/
app.config(function($stateProvider, $urlRouterProvider) {
        $urlRouterProvider.otherwise('/');
        $stateProvider
            .state('default', {
                url: '/',
                template: '<div></div>',
                controller: 'myCtrl'

            })
            .state('home', {
                url: '/home',
                templateUrl: 'views/home.html',
                controller: 'myCtrl'

            })
            .state('deep', {
                url: '/deep',
                templateUrl: 'views/deep.html',
                controller: 'myCtrl'

            })
            .state('about', {
                url: '/about',
                templateUrl: 'views/about.html',
                controller: 'myCtrl'

            })
            .state('description', {
                url: '/description',
                templateUrl: 'views/description.html',
                controller: 'myCtrl'

            })
            .state('task', {
                url: '/task',
                templateUrl: 'views/taskList.html',
                controller: 'myCtrl'

            })
            .state('rest', {
                url: '/rest',
                templateUrl: 'views/rest.html',
                controller: 'myCtrl'

            })
    })
    /******************************************************************
                                               NG Filter
    ******************************************************************/
app.filter('checked', function() {
    return function(items, showComplete) {
        var resultArr = [];
        angular.forEach(items, function(item) {
            if (item.done === false || showComplete === true) {
                resultArr.push(item);
            }
        });
        return resultArr;
    }
});
