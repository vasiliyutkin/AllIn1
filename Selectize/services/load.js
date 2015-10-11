app.service('loadJSON', ['$http', function($http) {
    return $http.get('server/package.json')
        .success(function(data) {
            return data;
        })
        .error(function(err) {
            return err;
        });
}]);