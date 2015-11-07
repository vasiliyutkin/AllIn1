describe('controller test', function() {
    var mockScope,
        controller,
        backend,
        mockInterval,
        mockTimeout,
        mockLog;

    beforeEach(angular.mock.module('exampleApp'));
    beforeEach(angular.mock.inject(function($httpBackend) {
        backend = $httpBackend;
        backend.expect('GET', 'data.json').respond(
            [{
                "name": "Banana",
                "price": "1"
            }, {
                "name": "Apple",
                "price": "1.5"
            }, {
                "name": "Ananas",
                "price": "6"
            }]
        )
    }));
    beforeEach(angular.mock.inject(function($controller, $rootScope, $http, $interval, $timeout, $log) {
        mockScope = $rootScope.$new();
        mockInterval = $interval;
        mockTimeout = $timeout;
        mockLog = $log;
        controller = $controller('defaultCtrl', {
            $scope: mockScope,
            $http: $http,
            $timeout: mockTimeout,
            $interval: mockInterval,
            $log: mockLog
        });
        backend.flush();
    }));
    it('creates variable', function() {
        expect(mockScope.counter).toEqual(0);
    });
    it('increments counter', function() {
        mockScope.incrementCounter();
        expect(mockScope.counter).toEqual(1);
    });

    it('makes an AJAX request', function() {
        backend.verifyNoOutstandingExpectation();
    });
    it('Processes the data', function() {
        expect(mockScope.products).toBeDefined();
        expect(mockScope.products.length).toEqual(3);
    });
    it('preserves the data order', function() {
        expect(mockScope.products[0].name).toEqual('Banana');
        expect(mockScope.products[1].name).toEqual('Apple');
        expect(mockScope.products[2].name).toEqual('Ananas');
    });
    it('limits interval count to 10 updates', function() {
        for (i = 0; i < 11; i++) {
            mockInterval.flush(5000);
        }
        expect(mockScope.intervalCounter).toEqual(10);
    });
    it('limits interval count to 10 updates', function() {
        mockTimeout.flush(5000);
        expect(mockScope.timerCounter).toEqual(1);
    });
    it('Writes log messages', function() {
        expect(mockLog.log.logs.length).toEqual(1);
    })
})
