function isPolindrome(val) {
    if (val === val.split('').reverse().join('')) {
        return true;
    } else {
        return false;
    }
};
