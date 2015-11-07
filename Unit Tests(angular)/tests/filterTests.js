describe('Filter Test', function() {
    var filterInstance;

    beforeEach(angular.mock.module('exampleApp'));

    beforeEach(angular.mock.inject(function($filter) {
        filterInstance = $filter('labelCase');
    }));

    it('Change case', function() {
        var result = filterInstance('test phase');
        expect(result).toEqual('Test phase');
    })
    it('Reverse case', function() {
        var result = filterInstance('test phase', true);
        expect(result).toEqual('tEST PHASE');
    })
})
