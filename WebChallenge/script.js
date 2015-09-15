// adding variables to project
var trs, res, calc, pat;
pat = /[^0-9]/; //set pattern regExp for testing inputs
trs = document.getElementsByClassName('table-tr');
function toCalc() {
    return (parseInt(weight.value)/(parseInt(height.value)*parseInt(height.value))*10000).toFixed(2);
}
res = document.getElementById('result');
calc = document.getElementById('calc');

weight.addEventListener('keyup', function() { //adding listener for weight input
    if(parseInt(weight.value) > 500) {
        weight.value = 500;
    } else if(pat.test(weight.value) || parseInt(weight.value) == 0) {
        weight.value = '';
    }
});

height.addEventListener('keyup', function() { //adding listener for height input
    if(parseInt(height.value) > 270) {
        height.value = 270;
    } else if(pat.test(height.value) || parseInt(height.value) == 0) {
        height.value = '';
    }
});
// add listeners and styles for calculation button
calc.addEventListener('click', function() {
    res.innerHTML = toCalc();
    res.style.borderBottom = '1px solid #2a2025';
    res.style.color = '#ba7d';
    if (toCalc() < 18.5) {
        trs[0].style.backgroundColor = '#ccc';
        trs[1].style.backgroundColor = '#fff';
        trs[2].style.backgroundColor = '#fff';
        trs[3].style.backgroundColor = '#fff';
        trs[4].style.backgroundColor = '#fff';
        trs[5].style.backgroundColor = '#fff';
    } else if (toCalc() >= 18.5 && toCalc() < 24.9) {
        trs[0].style.backgroundColor = '#fff';
        trs[1].style.backgroundColor = '#ccc';
        trs[2].style.backgroundColor = '#fff';
        trs[3].style.backgroundColor = '#fff';
        trs[4].style.backgroundColor = '#fff';
        trs[5].style.backgroundColor = '#fff';
    } else if (toCalc() >= 25 && toCalc() < 29.9) {
        trs[0].style.backgroundColor = '#fff';
        trs[1].style.backgroundColor = '#fff';
        trs[2].style.backgroundColor = '#ccc';
        trs[3].style.backgroundColor = '#fff';
        trs[4].style.backgroundColor = '#fff';
        trs[5].style.backgroundColor = '#fff';
    } else if (toCalc() >= 30 && toCalc() < 34.9) {
        trs[0].style.backgroundColor = '#fff';
        trs[1].style.backgroundColor = '#fff';
        trs[2].style.backgroundColor = '#fff';
        trs[3].style.backgroundColor = '#ccc';
        trs[4].style.backgroundColor = '#fff';
        trs[5].style.backgroundColor = '#fff';
    } else if (toCalc() >= 35 && toCalc() < 39.9) {
        trs[0].style.backgroundColor = '#fff';
        trs[1].style.backgroundColor = '#fff';
        trs[2].style.backgroundColor = '#fff';
        trs[3].style.backgroundColor = '#fff';
        trs[4].style.backgroundColor = '#ccc';
        trs[5].style.backgroundColor = '#fff';
    } else if (toCalc() > 40) {
        trs[0].style.backgroundColor = '#fff';
        trs[1].style.backgroundColor = '#fff';
        trs[2].style.backgroundColor = '#fff';
        trs[3].style.backgroundColor = '#fff';
        trs[4].style.backgroundColor = '#fff';
        trs[5].style.backgroundColor = '#ccc';
    } else {
        trs[0].style.backgroundColor = '#fff';
        trs[1].style.backgroundColor = '#fff';
        trs[2].style.backgroundColor = '#fff';
        trs[3].style.backgroundColor = '#fff';
        trs[4].style.backgroundColor = '#fff';
        trs[5].style.backgroundColor = '#fff';
    }
}, true);