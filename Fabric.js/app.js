/**
 * Created by and1 on 9/17/15.
 */
var canvas = new fabric.Canvas('c');
canvas.setHeight(65); //65
canvas.setWidth(245); //245
var imgEl1 = document.getElementById('img1');
var imgEl2 = document.getElementById('img2');
var imgEl3 = document.getElementById('img3');
var imgEl4 = document.getElementById('img4');
var imgEl5 = document.getElementById('img5');
var imgEl6 = document.getElementById('img6');
var imgEl7 = document.getElementById('img7');
var imgEl8 = document.getElementById('img8');
var imgEl9 = document.getElementById('img9');
var imgEl10 = document.getElementById('img10');
var imgEl11 = document.getElementById('img11');
var imgEl12 = document.getElementById('img12');
var imgEl13 = document.getElementById('img13');

var img1 = new fabric.Image(imgEl13, {
    left: 20,
    top: 10
});


var img2 = new fabric.Image(imgEl12, {
    left: 20,
    top: 70
});

var img3 = new fabric.Image(imgEl11, {
    left: 20,
    top: 130
});

var img4 = new fabric.Image(imgEl10, {
    left: 20,
    top: 190
});

var img5 = new fabric.Image(imgEl9, {
    left: 20,
    top: 250
});

var img6 = new fabric.Image(imgEl8, {
    left: 20,
    top: 310
});

var img7 = new fabric.Image(imgEl7, {
    left: 20,
    top: 370
});

var img8 = new fabric.Image(imgEl6, {
    left: 20,
    top: 430
});

var img9 = new fabric.Image(imgEl5, {
    left: 20,
    top: 490
});

var img10 = new fabric.Image(imgEl4, {
    left: 20,
    top: 550
});

var img11 = new fabric.Image(imgEl3, {
    left: 20,
    top: 610
});

var img12 = new fabric.Image(imgEl12, {
    left: 20,
    top: 670
});

var img13 = new fabric.Image(imgEl1, {
    left: 20,
    top: 730
});

//second line
var img_1 = new fabric.Image(imgEl9, {
    left: 100,
    top: 10
});


var img_2 = new fabric.Image(imgEl3, {
    left: 100,
    top: 70
});

var img_3 = new fabric.Image(imgEl1, {
    left: 100,
    top: 130
});

var img_4 = new fabric.Image(imgEl5, {
    left: 100,
    top: 190
});

var img_5 = new fabric.Image(imgEl6, {
    left: 100,
    top: 250
});

var img_6 = new fabric.Image(imgEl4, {
    left: 100,
    top: 310
});

var img_7 = new fabric.Image(imgEl8, {
    left: 100,
    top: 370
});

var img_8 = new fabric.Image(imgEl2, {
    left: 100,
    top: 430
});

var img_9 = new fabric.Image(imgEl10, {
    left: 100,
    top: 490
});

var img_10 = new fabric.Image(imgEl10, {
    left: 100,
    top: 550
});

var img_11 = new fabric.Image(imgEl1, {
    left: 100,
    top: 610
});

var img_12 = new fabric.Image(imgEl3, {
    left: 100,
    top: 670
});

var img_13 = new fabric.Image(imgEl1, {
    left: 100,
    top: 730
});

//third line
var _img1 = new fabric.Image(imgEl12, {
    left: 180,
    top: 10
});


var _img2 = new fabric.Image(imgEl2, {
    left: 180,
    top: 70
});

var _img3 = new fabric.Image(imgEl1, {
    left: 180,
    top: 130
});

var _img4 = new fabric.Image(imgEl7, {
    left: 180,
    top: 190
});

var _img5 = new fabric.Image(imgEl6, {
    left: 180,
    top: 250
});

var _img6 = new fabric.Image(imgEl8, {
    left: 180,
    top: 310
});

var _img7 = new fabric.Image(imgEl4, {
    left: 180,
    top: 370
});

var _img8 = new fabric.Image(imgEl5, {
    left: 180,
    top: 430
});

var _img9 = new fabric.Image(imgEl2, {
    left: 180,
    top: 490
});

var _img10 = new fabric.Image(imgEl3, {
    left: 180,
    top: 550
});

var _img11 = new fabric.Image(imgEl1, {
    left: 180,
    top: 610
});

var _img12 = new fabric.Image(imgEl13, {
    left: 180,
    top: 670
});

var _img13 = new fabric.Image(imgEl12, {
    left: 180,
    top: 730
});

canvas.add(img1, img2, img3,img4,img5,img6,img7,img8, img9, img10, img11, img12, img13);
canvas.add(img_1, img_2, img_3,img_4,img_5, img_6, img_7, img_8, img_9, img_10, img_11, img_12, img_13);
canvas.add(_img1, _img2, _img3, _img4, _img5, _img6, _img7, _img8, _img9, _img10, _img11, _img12, _img13);

spin.addEventListener('click', function() {
    //start animation
    img1.animate('top', -710, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img2.animate('top', -650, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img3.animate('top', -590, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img4.animate('top', -530, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img5.animate('top', -470, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img6.animate('top', -410, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img7.animate('top', -350, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img8.animate('top', -290, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img9.animate('top', -230, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img10.animate('top', -170, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img11.animate('top', -110, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img12.animate('top', -50, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img13.animate('top', 10, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });
    //2nd column animation
    img_1.animate('top', -710, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img_2.animate('top', -650, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img_3.animate('top', -590, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img_4.animate('top', -530, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img_5.animate('top', -470, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img_6.animate('top', -410, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img_7.animate('top', -350, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img_8.animate('top', -290, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img_9.animate('top', -230, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img_10.animate('top', -170, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img_11.animate('top', -110, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img_12.animate('top', -50, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    img_13.animate('top', 10, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });
    //3rd column animation
    _img1.animate('top', -710, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    _img2.animate('top', -650, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    _img3.animate('top', -590, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    _img4.animate('top', -530, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    _img5.animate('top', -470, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    _img6.animate('top', -410, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    _img7.animate('top', -350, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    _img8.animate('top', -290, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    _img9.animate('top', -230, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    _img10.animate('top', -170, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    _img11.animate('top', -110, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    _img12.animate('top', -50, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });

    _img13.animate('top', 10, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeOutQuad
    });
});