var http = new XMLHttpRequest(),
    array = [],
    SugState = '';
enterJSON.addEventListener('keyup', toSugState, true);
enterXML.addEventListener('keyup', toSugState, true);

function reqListener() {
    if (this.responseXML) {
        var countries = this.responseXML.getElementsByTagName('element');
        array = [];
        for (var i = 0; i < countries.length; i++) {
            array.push(countries[i].childNodes[0].nodeValue);
        }
    } else {
        array = JSON.parse(this.responseText)['countries'];
    }
}

function toSugState() {
    var result,
        word,
        target;
    SugState = '';
    target = this;
    if (target === enterJSON) {
        result = res1;
        word = enterJSON.value;
        http.addEventListener('load', reqListener, true);
        http.open('get', 'countries.json', true);
        http.send();
    } else {
        result = res2;
        word = enterXML.value;
        http.addEventListener('load', reqListener, true);
        http.open('get', 'countries.xml', true);
        http.send();
    }
    for (var i = 0; i < array.length; i += 1) {
        if (word.toLowerCase() === array[i].toLowerCase().substring(0, word.length)) {
            if (SugState === '') {
                SugState = "<ul id='SugState'><li onclick='autoComplete(this.innerHTML, this, result)'>" + array[i] + "</li>";
            } else {
                SugState += "<li onclick='autoComplete(this.innerHTML)'>" + array[i] + "</li>";
            }
        }
    }
    if (SugState === '') {
        result.style.display = 'block';
        result.innerHTML = 'no result';
    } else {
        SugState += '</ul>';
        result.style.display = 'block';
        result.innerHTML = SugState;
    }
}

function autoComplete(content, self, result) {
    self.val(content);
    result.style.display = 'none';
}
