(function() {
    //declaring variables
    var i = 0;
    var CColor = "#fff";
    var CBackground = "#d3f3c8";
    var CSeconds = "#fff";
    var CSize = 400;
    var CCenter = CSize / 2;
    var CTSize = CCenter - 10;
    var CMSize = CTSize * 0.6;
    var CSSize = CTSize;
    var canv;

    function ctxline(x1, y1, len, angle, color, wid) {
        var x2 = (CCenter + (len * Math.cos(angle)));
        var y2 = (CCenter + (len * Math.sin(angle)));
        ctx.beginPath();
        ctx.strokeStyle = color;
        ctx.lineWidth = 12;
        ctx.moveTo(x1, y1);
        ctx.lineTo(x2, y2);
        ctx.stroke();
    }

    function ctxcircle(x, y, rd, color) {
        ctx.beginPath();
        ctx.arc(x, y, rd, 0, 2 * Math.PI, false);
        ctx.fillStyle = color;
        ctx.fill();
        ctx.lineWidth = 11;
        ctx.strokeStyle = color;
        ctx.stroke();
    }

    function tick() {
            ctxcircle(CCenter, CCenter, CSSize, CBackground);
            i = 360 / 3600 * ((new Date(0,0,0,0,0,0,0).getMinutes() * 60) + new Date(0,0,0,0,0,0,0).getSeconds());
            ctxline(CCenter, CCenter, CMSize, ((i - 90) / 180 * Math.PI), CColor, 4);
            i = 360 / (60 * 1000) * ((new Date().getSeconds() * 1000) + new Date().getMilliseconds());
            ctxline(CCenter, CCenter, CSSize, ((i - 90) / 180 * Math.PI), CSeconds, 4);
            ctxcircle(CCenter, CCenter, 1, CSeconds);
    }
    //getting 2 buttons by id's
    var start, pause, timerID;
    start = document.getElementById('btn1');
    pause = document.getElementById('btn2');
    //attaching event listeners on them
    var a, b;
    start.addEventListener('click', function() {
        a = new Date();
        canvas.style.visibility = 'visible';
        pause.style.visibility = 'visible';
        start.style.transform = 'rotate(360deg)';
        start.style.visibility = 'hidden';
        canv = document.getElementById("canv");
        ctx = canv.getContext('2d');
        ctx.fillStyle = CBackground;
        ctx.fillRect(0, 0, canv.width, canv.height);
        timerID = setInterval(function() {
            tick();
        }, 10);
    }, true);

    pause.addEventListener('click', function() {
        b = new Date();
        humane.log(Math.round((b - a) / 1000) + ' sec\'s passed!');
        clearInterval(timerID);
        canvas.style.visibility = 'hidden';
        pause.style.visibility = 'hidden';
        pause.style.transform = 'rotate(360deg)';
        canvas.style.transform = 'rotate(360deg)';
        start.style.visibility = 'visible';
    }, true);

    var canvas = document.getElementById('canv');
    canvas.addEventListener('click', function() {
        var c = new Date();
        humane.log('Now is ' + c.getHours() + ' : ' + c.getMinutes() + ' : ' + c.getSeconds() + ' o\'clock!');
    }, true);
})();