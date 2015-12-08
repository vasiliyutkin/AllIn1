describe('isPolindrome', function() {
    it('should check value on polindrome', function() {
        expect(isPolindrome('101')).toEqual(true);
    });
    it('should check value on not a polindrome', function() {
        expect(isPolindrome('102')).not.toEqual(true);
    });
});
