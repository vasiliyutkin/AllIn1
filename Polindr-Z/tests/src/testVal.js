    var polindroms = [];

    function testVal(val) {
        if (val) {
            for (var i = 0; i < val.length; i++) {
                if (isPolindrome(val) && val.length !== 1) {
                    polindroms.push(val);
                }
                val = val.slice(1, -1);
            };
        } else {
            return
        }
    }
