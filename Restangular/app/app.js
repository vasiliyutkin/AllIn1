angular.module('myApp', ['restangular'])
    .config(function(RestangularProvider) {
        RestangularProvider.setBaseUrl('http://localhost:4000');
    })
    .controller('myController', function($log, $scope, Restangular) {
        var messages = Restangular.all('messages');
        var lads = Restangular.all('superpowers');
        messages.getList().then(function(data) {
            $scope.messages = data;
        });
        lads.getList().then(function(data) {
            $scope.lads = data;
        });
        $scope.writeNewMessage = function(newMessage) {
            messages.post(newMessage).then(function(mess) {
                $scope.messages.push(mess);
                $scope.newMessage.from = '';
                $scope.newMessage.to = '';
                $scope.newMessage.name = '';
                $scope.newMessage.nickname = '';
            })
        };
        $scope.addLad = function(newLad) {
            lads.post(newLad).then(function(lad) {
                $scope.lads.push(lad);
                $scope.newLad.whohasit = '';
                $scope.newLad.superpower = '';
            })
        };
        $scope.deleteMessage = function(index) {
            Restangular.one('messages', $scope.messages[index].id).remove().then(function() {
                $scope.messages.splice(index, 1);
                $log.log('removed');
            })
        };
        $scope.deleteLad = function(index) {
            Restangular.one('superpowers', $scope.lads[index].id).remove().then(function() {
                $scope.lads.splice(index, 1);
                $log.log('removed');
            })
        };
        $scope.clearAllMessages = function() {
            for (i = 0; i < $scope.messages.length; i++) {
                Restangular.one('messages', $scope.messages[i].id).remove().then(function() {
                    $scope.messages = [];
                });
            }
        };
        $scope.clearAllLads = function() {
            for (i = 0; i < $scope.lads.length; i++) {
                Restangular.one('superpowers', $scope.lads[i].id).remove().then(function() {
                    $scope.lads = [];
                });
            }
        };
    })
