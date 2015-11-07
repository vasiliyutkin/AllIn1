angular.module('app', ['mainEvents', 'ngRoute', 'ngResource'])
    .config(function($locationProvider, $routeProvider) {
        $locationProvider.html5Mode(true);
        $routeProvider
            .when('/', {
                templateUrl: '/views/start.html'
            })
            .when('/squad', {
                templateUrl: '/views/squad.html'
            })
            .when('/add', {
                templateUrl: '/views/add.html'
            })
            .otherwise({
                redirectTo: '/'
            });
    });
angular.module('mainEvents', []);
angular.module('mainEvents')
    .factory('photos', photos)
    .factory('loadData', loadData)
    .controller('moduleCtrl', moduleCtrl);

function loadData($http) {
    return $http.get('avengers.json')
};

function photos() {
    return {
        data: [{
            src: 'http://wallpapercave.com/wp/UuROMDg.jpg'
        }, {
            src: 'http://thelibertarianrepublic.com/wp-content/uploads/2015/04/the-avengers-collection-512951e49d95a.jpg'
        }, {
            src: 'http://syndromemag.com/wp-content/uploads/2015/03/Avengers_live_banner.jpg'
        }, {
            src: 'http://images4.fanpop.com/image/photos/21400000/The-Avengers-Assemble-the-avengers-21474271-1920-1080.jpg'
        }, {
            src: 'http://img06.deviantart.net/7c45/i/2012/184/d/b/the_avengers_by_thedurrrrian-d55trk8.jpg'
        }, {
            src: 'http://cdn1-www.comingsoon.net/assets/uploads/gallery/avengers-age-of-ultron-concept-art/10968501_724429027678174_8666481107557013905_n.jpg'
        }]
    }
};

function moduleCtrl($log, $scope, photos, loadData, $location) {
    $scope.imgSource = photos.data;
    $scope.loadData = function() {
        loadData.then(function(response) {
                for (i = 0; i < response.data.length; i++) {
                  //  if ($scope.data[i] === response.data[i]) {
                  //      response.data[i] = {}
                  //  }
                    $scope.data.push(response.data[i]);
                }
            },
            function(err) {
                $log.log(err);
            });
    }
    $scope.reset = function() {
        $scope.data = [];
    }
    $scope.deleteItem = function(index) {
        $scope.data.splice(index, 1);
    }
    $scope.addItem = function(hero) {
        if (hero) {
            $scope.data.push(hero)
            $location.path('/squad')
        }
    }
    $scope.sayName = function(name) {
        $log.log('I\'m  ' + name);
    };
}

angular.module('app')
    .run(function($log) {
        $log.log('Run ended!');
    })
    .controller('mainCtrl', mainCtrl);

function mainCtrl($resource, $scope, $location) {};
