var express = require("express"),
    bodyParser = require('body-parser'),
    app = express(),
    server;

//setting default view template engine
app.set('view engine', 'jade');


//setting static(files) sender
app.use(express.static(__dirname + "/public"));

//adding data obj with variables to view
var store = {
    main: {
        page: 'My super Awesome App!',
        content: 'Some cool stuff might be here soon'
    },
    about: {
        page: 'About page',
        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et fugit iusto quos in pariatur, voluptas saepe fugiat, repudiandae, earum aspernatur ratione dignissimos quae neque hic similique magni eos impedit error!'
    },
    description: {
        page: 'Description page',
        content: 'Its page about me =)'
    },
    profile: {
        page: 'Profile page',
        content: 'Look my profile under this line ____________'
    }
}

//configuring bodyParser
app.use(bodyParser.urlencoded({
    extended: true
}));
//palce where we storing our keys
var storeKeys = Object.keys(store);

//making a route here
app.route('/new')
    .get(function(req, res) {
        res.render('new', {
            page: 'Add New',
            links: storeKeys
        })
    })
    .post(function(req, res) {
        var data = req.body;
        if (data.pageurl && data.pagename && data.pagecontent) {
            store[data.pageurl] = {
                page: data.pagename,
                content: data.pagecontent
            };
            storeKeys = Object.keys(store);
        }
        res.redirect('/');
    });

//setting our render function
app.get('/:page?', function(req, res) {
    var page = req.params.page,
        data;
    if (!page) page = 'main';
    data = store[page];
    if (!data) {
        res.redirect('/');
        return
    }
    data.links = storeKeys;
    data.query = req.query;
    res.render('main', data);
});

//setting listen port statut
server = app.listen(8000, function() {
    console.log("Listening on port 8000")
})
