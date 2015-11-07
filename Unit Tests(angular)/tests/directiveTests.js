describe('Directive Tests', function() {
    var mockScope,
        compileService;

    beforeEach(angular.mock.module("exampleApp"));

    beforeEach(angular.mock.inject(function($rootScope, $compile) {
        mockScope = $rootScope.$new();
        compileService = $compile;
        mockScope.dateArray = [{
            name: 'Today'
        }, {
            name: 'Tomorrow'
        }, {
            name: 'The Day After Tomorrow'
        }]
    }));
    it('Generates list elements', function() {
        var compileFn = compileService('<div unordered-list="dateArray"></div>');
        var elem = compileFn(mockScope);

        expect(elem.children('ul').length).toEqual(1);
        expect(elem.find('li').length).toEqual(3);
        expect(elem.find('li').eq(0).text()).toEqual('Today');
        expect(elem.find('li').eq(1).text()).toEqual('Tomorrow');
        expect(elem.find('li').eq(2).text()).toEqual('The Day After Tomorrow');
    });
})
