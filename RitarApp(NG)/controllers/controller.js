app.controller('directoryCtrl', ['$scope','loadJSON', '$timeout', function($scope, loadJSON, $timeout) {
        $timeout(function() {
            loadJSON.success(function(data) {
                angular.extend($scope.myOptions, data);
            });
            alert('Data have successfuly uploaded')
        }, 2000);
    $scope.disable = false;
    $scope.myModel = [];
}]);