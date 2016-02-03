describe('testVal', function() {
    it('should check if polindromes isArray', function() {
        expect(polindroms).toEqual([]);
    });
    it('should check if entered value includes polindromes', function() {
        testVal('abababa');
        expect(polindroms).toEqual(['abababa', 'babab', 'aba']);
    });
});
