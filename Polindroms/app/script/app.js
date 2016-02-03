(function() {
    'use strict';

    /******************************************************
                fn for checking is our string is polindrome
    *****************************************************/
    function isPolindrome(val) {
        if (val === val.split('').reverse().join('')) {
            return true;
        } else {
            return false;
        }
    };
    /******************************************************
    fn for testing does our value had included polindroms
    *****************************************************/
    function testVal() {
        var val = document.getElementById('polindr').value;
        var polindroms = [];
        if (val) {
            for (var i = 0; i < val.length; i++) {
                if (isPolindrome(val) && val.length > 2) {
                    polindroms.push(val);
                }
                val = val.slice(1, -1);
            };
            if (!polindroms.length) {
                result.innerHTML = 'There are no polindromes in your string';
                total.innerHTML = '';
            } else {
                result.innerHTML = "";
                for (var i = 0; i < polindroms.length; i++) {
                    result.innerHTML += '<span>' + polindroms[i] + '</span>' + '<br />';
                }
                result.getElementsByTagName('span')[0].style.fontWeight = 'bold';
                result.getElementsByTagName('span')[0].style.textTransform = 'uppercase';
                total.innerHTML = 'Total: ' + polindroms.length + ' items founded';
            }
            document.getElementById('polindr').value = '';
        } else {
            return
        }
    }

    //Form eventListener for clickButton event
    document.getElementById('check')
        .addEventListener('click', testVal, false);
})();
