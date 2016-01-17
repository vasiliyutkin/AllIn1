// Create Canvas context
var canvas = new fabric.Canvas('c', {
    width: 800,
    height: 140
});
////////////////////////////////
// Image sources
///////////////////////////////
var sources = ['/assets/1.gif', '/assets/2.gif', '/assets/3.gif', '/assets/4.gif', '/assets/5.gif', '/assets/6.gif', '/assets/7.gif', '/assets/8.gif', '/assets/9.gif', '/assets/10.gif', '/assets/11.gif', '/assets/12.gif', '/assets/13.gif'];
///////////////////////////////
//random integers func
///////////////////////////////
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
///////////////////////////////
// arra of images to rander
///////////////////////////////
var group = [];
///////////////////////////////////////
// render random images func
//////////////////////////////////////
function renderRandomImages(x) {
    fabric.Image.fromURL(sources[getRandomInt(1, 12)], function(img) {
        var img1 = img.set({
            left: 100,
            top: x
        });
        group.push(img1);

        fabric.Image.fromURL(sources[getRandomInt(1, 12)], function(img) {
            var img2 = img.set({
                left: 240,
                top: x
            });
            group.push(img2);
            fabric.Image.fromURL(sources[getRandomInt(1, 12)], function(img) {
                var img3 = img.set({
                    left: 380,
                    top: x
                });
                group.push(img3);
            });
        });
    });
};
///////////////////////////////////////
// render proper images func
//////////////////////////////////////
function renderProperImages(x) {
    fabric.Image.fromURL(sources[1], function(img) {
        var img1 = img.set({
            left: 100,
            top: x
        });
        group.push(img1);

        fabric.Image.fromURL(sources[1], function(img) {
            var img2 = img.set({
                left: 240,
                top: x
            });
            group.push(img2);
            fabric.Image.fromURL(sources[12], function(img) {
                var img3 = img.set({
                    left: 380,
                    top: x
                });
                group.push(img3);
            });
        });
    });
};
/////////////////////////////////
// Render images to canvas
/////////////////////////////////
renderRandomImages(10);
renderRandomImages(150);
renderRandomImages(300);
renderRandomImages(450);
renderRandomImages(600);
renderRandomImages(750);
renderRandomImages(900);
renderRandomImages(1050);
renderRandomImages(1200);
renderRandomImages(1350);
renderRandomImages(1500);
renderRandomImages(1750);
renderRandomImages(1900);
renderRandomImages(2050);
renderRandomImages(2200);
renderRandomImages(2350);
renderProperImages(2500);
/////////////////////////////////////////
// Create group of images and animate it
/////////////////////////////////////////
start.addEventListener('click', function() {
    canvas.add(new fabric.Group(group, {
        left: 210,
        top: 10
    }));
    canvas.item(0).animate('top', -2470, {
        onChange: canvas.renderAll.bind(canvas),
        duration: 5000,
        easing: fabric.util.ease.easeInOutExpo
    });
}, false);
