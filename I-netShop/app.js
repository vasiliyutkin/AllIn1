                                    //*****************JAVASCRIPT**********************//
                                    //************************************************************************
   // addItemToCart(name, price, count)
   // removeItemFromCart(name) -> remove 1 item from cart
   // removeItemFromCartAll() -> remove all items from cart
   // clearCart()
   // countCart() -> return total count
   // totalCart() -> return total cost
   //listCart() -> array of Items
   //saveCart() -> save data to localStorage
   //loadCart()
   //cart : Array
   //Item : Object/Class
   // addItemToCart : Function
   // removeItemFromCart : Function
   // removeItemFromCartAll : Function
   // clearCart : Function
   // countCart : Function
   // totalCart : Function
   // saveCart : Function
   // loadCart : Function
var shoppingCart = (function () {
    //private methods and properties

    function Item(name, price, count) {
        this.name = name;
        this.price = price;
        this.count = count;
    }

    function loadCart() {
        cart = JSON.parse(localStorage.getItem('shoppingCart'));
    }
    loadCart();

    //public methods and properties

    var obj = {};

    obj.saveCart = function () {
        localStorage.setItem('shoppingCart', JSON.stringify(cart));
    };
    obj.addItemToCart = function (name, price, count) {
        for (var i in cart) {
            if (cart[i].name === name) {
                cart[i].count += count;
                obj.saveCart();
                return;
            }
        }
        var item = new Item(name, price, count);
        cart.push(item);
        obj.saveCart();
    };

    obj.removeItemFromCart = function (name) {
        for (var i in cart) {
            if (cart[i].name == name) {
                cart[i].count--;
                if (cart[i].count == 0) {
                    cart.splice(i, 1)
                }
                break;
            }
        }
        obj.saveCart();
    };

    obj.discount = function () {
        return 'JS' + parseInt(([].slice.call((Math.random().toFixed(4)), 2)).join(''))
    };

    obj.removeItemFromCartAll = function (name) {
        for (var i in cart) {
            if (cart[i].name == name) {
                cart.splice(i, 1);
                break;
            }
        }
        obj.saveCart();
    };

    obj.clearCart = function () {
        cart = [];
        obj.saveCart();
    };

    obj.countCart = function () {
        var totalCount = 0;
        for (var i in cart) {
            totalCount += cart[i].count;
        }
        return totalCount;
    };

    obj.totalCart = function () {
        var totalCost = 0;
        var e = document.getElementById('ship');
        var shipPrice = Number(e.options[e.selectedIndex].getAttribute('data-price'));
        for (var i in cart) {
            totalCost += cart[i].price * cart[i].count;
        }
        return (totalCost + shipPrice).toFixed(2);
    };
    obj.totalCartPromo = function () {
        var totalCost = 0;
        var e = document.getElementById('ship');
        var shipPrice = Number(e.options[e.selectedIndex].getAttribute('data-price'));
        for (var i in cart) {
            totalCost += cart[i].price * cart[i].count * 0.85;
        }
        return (totalCost + shipPrice).toFixed(2);
    };

    obj.listCart = function () {
        var cartCopy = [];
        for (var i in cart) {
            var item = cart[i],
                itemCopy = {};
            for (var prop in item) {
                itemCopy[prop] = item[prop];
            }
            itemCopy.total = (item.price * item.count).toFixed(2);
            cartCopy.push(itemCopy);
        }
        return cartCopy;
    };
    return obj;
})();
if(Number(shoppingCart.totalCart()) == 0) {
    var cart = [];
}
//*************************************************************************
//shoppingCart Promo code listeners
promo.addEventListener('click', function () {
    forPromo.innerHTML = shoppingCart.discount();
});
codeEnt.addEventListener('click', function () {
    if (code.value.toLowerCase() == forPromo.innerHTML.toLowerCase()) {
        if (shoppingCart.totalCart() == 0) {
            humane.log('nothing to buy man! add something whatever you need...')
        } else if (code.value.toLowerCase() == '' && forPromo.innerHTML.toLowerCase() == '' && shoppingCart.totalCart() > 0) {
            humane.log('codes didn\'t match, check it out')
        } else {
            humane.log('you have your discount!'.toUpperCase());
            document.getElementById('total-cart').innerHTML = shoppingCart.totalCartPromo();
        }
    } else {
        humane.log('codes didn\'t match, check it out'.toUpperCase())
    }
});
//***********************************************************************
//search by AJAX via JSON getting from server
var http = new XMLHttpRequest(),
    state = [],
    suggest = '';
enterJSON.addEventListener('keyup', toSuggest, true);

function reqListner() {
    if (this.responseXML) {
        var products = this.responseXML.getElementsByTagName('element');
        state = [];
        for (var i = 0; i < products.length; i++) {
            state.push(products[i].childNodes[0].nodeValue);
        }
    } else {
        state = JSON.parse(this.responseText)['products'];
    }
}
//suggestions function
function toSuggest() {
    var result,
        word,
        target;
    suggest = '';
    target = this;
    if (target === enterJSON) {
        result = res1;
        word = enterJSON.value;
        http.addEventListener('load', reqListner, true);
        http.open('get', 'products.json', true);
        http.send();
    }
    for (var i = 0; i < state.length; i++) {
        if (word.toLowerCase() === state[i].toLowerCase().substring(0, word.length)) {
            if (suggest === '') {
                suggest = "<ul id='suggest'><li>" + state[i] + "</li>";
            } else {
                suggest += "<li>" + state[i] + "</li>";
            }
        }
    }
    if (suggest === '') {
        result.style.display = 'block';
        result.innerHTML = 'no result';
    } else if (!enterJSON.value) {
        result.style.display = 'none';
    } else {
        suggest += '</ul>';
        result.style.display = 'block';
        result.innerHTML = suggest;
    }
}
//end of AJAX request code
//form validation
document.getElementById('form').addEventListener('submit', function () {
    var pass1, pass2, email, nick;
    nick = document.getElementById('nick').value;
    email = document.getElementById('email').value;
    pass1 = document.getElementById('pass1').value;
    pass2 = document.getElementById('pass2').value;
    if (pass1 == pass2) {
        localStorage.setItem('email', email);
        localStorage.setItem('password', pass1);
        localStorage.setItem('nick', nick);
    } else {
        humane.log('Passwords are wrong! Check it out!');
    }
}, true);
//login validation
document.getElementById('form2').addEventListener('submit', function () {
    var enterEmail = document.getElementById('enterEmail').value;
    var enterPassword = document.getElementById('enterPassword').value;
    if (localStorage.email == enterEmail && localStorage.password == enterPassword) {
        document.getElementById('sign').style.display = 'none';
        document.getElementById('login').innerHTML = 'Welcome ' + localStorage.nick + '!';
        document.getElementById('card').style.display = "inline-block";
        document.getElementById('wrap-promo').style.display = "flex";
    } else {
        humane.log('Password are wrong, please type another valid one...)')
    }
}, true);
//prevent form from submitting
function toSubmit() {
    document.getElementById('form2').style.display = "none";
    document.getElementById('login').addEventListener('click', function () {
        document.getElementById('form2').style.display = "none";
    }, true);
    return false;
}

document.getElementById('emailUs').addEventListener('submit', function () {
    document.getElementById('emailUs').style.display = 'none';
    humane.log('Thank you! Our operator will contact you later! Have a nice day!');
});

document.getElementsByClassName('close')[0].addEventListener('click', function () {
    document.getElementsByClassName('wrap-cart')[0].style.display = 'none';
});
document.getElementsByClassName('closeUs')[0].addEventListener('click', function () {
    document.getElementsByTagName('form')[0].style.display = 'none';
});
//******************************************************************************************************************

//******************************************************
var count = localStorage.getItem('likes');

                                    //*****************JQuery**********************//
$(document).ready(function() {

    //shoppingCart functions
    $('.add-to-cart').click(function (event) {
        event.preventDefault();
        var name = $(this).attr('data-name');
        var price = Number($(this).attr('data-price'));
        shoppingCart.addItemToCart(name, price, 1);
        humane.log('Item: ' + name + ' added to cart, your total bill is: ' + shoppingCart.totalCart() + '$');
        displayCart();
    });
    $('#clear-cart').click(function () {
        shoppingCart.clearCart();
        displayCart();
        shoppingCart.saveCart();
    });

    function displayCart() {
        var cartArray = shoppingCart.listCart();
        var output = '';
        for (var i in cartArray) {
            output += "<li>" + cartArray[i].name + " " + cartArray[i].count + " x " + cartArray[i].price + "$ = " + cartArray[i].total + "<a href='#' class='substract-item' data-name='" + cartArray[i].name + "'>-</a> <a class='plus-item' href='#' data-name='" + cartArray[i].name + "'>+</a>" + " <a class='delete-item' href='#' data-name='" + cartArray[i].name + "'>x</a>" + "</li>"
        }
        $('#forMainLike').html(count);
        $('#show-cart').html(output);
        $('#count-cart').html(shoppingCart.countCart());
        $('#total-cart').html(shoppingCart.totalCart());
        $('#cart-count').html(shoppingCart.countCart());
    }

    $('#show-cart').on('click', '.delete-item', function (event) {
        event.preventDefault();
        var name = $(this).attr('data-name');
        shoppingCart.removeItemFromCartAll(name);
        displayCart();
    });
    $('#show-cart').on('click', '.substract-item', function (event) {
        event.preventDefault();
        var name = $(this).attr('data-name');
        shoppingCart.removeItemFromCart(name);
        displayCart();
    });
    $('#show-cart').on('click', '.plus-item', function (event) {
        event.preventDefault();
        var name = $(this).attr('data-name');
        shoppingCart.addItemToCart(name, 0, 1);
        displayCart();
    });
    $('#bill').click(function (e) {
        e.preventDefault();
        if (Number(shoppingCart.totalCart()) == 0 || Number(shoppingCart.totalCart()) == 7 || Number(shoppingCart.totalCart()) == 12 || Number(shoppingCart.totalCart()) == 26 || Number(shoppingCart.totalCart()) == 40 || Number(shoppingCart.totalCartPromo()) == 0 || Number(shoppingCart.totalCartPromo()) == 7 || Number(shoppingCart.totalCartPromo()) == 12 || Number(shoppingCart.totalCartPromo()) == 26 || Number(shoppingCart.totalCartPromo()) == 40) {
            humane.log('we couldn\'t deliver nothing to you, cart is empty =(');
            displayCart();
        } else if (code.value.toLowerCase() == '' && forPromo.innerHTML.toLowerCase() == '' && shoppingCart.totalCart() == 0) {
            humane.log('Please add something to your basket...')
        } else if (code.value.toLowerCase() == forPromo.innerHTML.toLowerCase() && shoppingCart.totalCart() == 0) {
            humane.log('Please add something to your basket...')
        } else if (code.value.toLowerCase() == '' && forPromo.innerHTML.toLowerCase() == '') {
            humane.log('<strong>Your total bill is: ' + shoppingCart.totalCart() + '$! Thank you for your purchase! See you around =_)</strong>');
            shoppingCart.clearCart();
            shoppingCart.saveCart();
            displayCart();
        } else if (code.value.toLowerCase() == forPromo.innerHTML.toLowerCase()) {
            humane.log('<strong>Your total bill is: ' + shoppingCart.totalCartPromo() + '$! Thank you for your purchase! See you around =_)</strong>');
            shoppingCart.clearCart();
            shoppingCart.saveCart();
            displayCart();
        } else {
            humane.log('<strong>Your total bill is: ' + shoppingCart.totalCart() + '$! Thank you for your purchase! See you around =_)</strong>');
            shoppingCart.clearCart();
            shoppingCart.saveCart();
            displayCart();
        }
    });
    displayCart();
//*****************************************************************************

//jquery validity form validation
    $('#form').validity(function () {
        $('#pass1').require('Type your password please');
        $('#pass2').require('repeat your password please').match('#pass1');
        $('#email').require('Your email is required to proceed');
        $('#0').require('please add your card').match(number);
    });
//***********************************************************************
//password cheking
    $('#pass1').keyup(function (e) {
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{6,}).*", "g");
        if (false == enoughRegex.test($(this).val())) {
            $('#passstrength').html('More Characters*');
        } else if (strongRegex.test($(this).val())) {
            $('#passstrength').className = 'ok';
            $('#passstrength').html('Strong!*');
        } else if (mediumRegex.test($(this).val())) {
            $('#passstrength').className = 'alert';
            $('#passstrength').html('Medium!*');
        } else {
            $('#passstrength').className = 'error';
            $('#passstrength').html('Weak!*');
        }
        return true;
    });
//*************************************************************************************************************
//articles menu
    $('#menu').click(function () {
        $('.articles').toggle();
    });
//************************************************************************************************************
    $('#card').click(function () {
        $('.wrap-cart').toggle();
    });

//-----------------------------------------------------------------------------
    $('i').hover(function () {
        $(this).animate({
            opacity: .6
        }, 300);
    }, function () {
        $(this).animate({
            opacity: 1
        }, 300);
    });
// form script
    $('#sign').click(function () {
        $('#form').toggle();
    });
// form2 script
    $('#login').click(function () {
        $('#form2').toggle();
    });
//search
    $('#search').click(function () {
        $('.search').toggle();
    });
//add click events to anchors
    $('.btn1').click(function () {
        $(".wrap:nth-child(1) .img, .wrap:nth-child(1) .text").css('display', 'none');
        $(".wrap:nth-child(1) .container").css('display', 'flex');
    });
    $('#close1').click(function () {
        $(".wrap:nth-child(1) .img, .wrap:nth-child(1) .text").css('display', 'block');
        $(".wrap:nth-child(1) .container").css('display', 'none');
    });
    $('.btn2').click(function () {
        $(".wrap:nth-child(2) .img, .wrap:nth-child(2) .text").css('display', 'none');
        $(".wrap:nth-child(2) .container").css('display', 'flex');
    });
    $('#close2').click(function () {
        $(".wrap:nth-child(2) .img, .wrap:nth-child(2) .text").css('display', 'block');
        $(".wrap:nth-child(2) .container").css('display', 'none');
    });
    $('.btn3').click(function () {
        $(".wrap:nth-child(3) .img, .wrap:nth-child(3) .text").css('display', 'none');
        $(".wrap:nth-child(3) .container").css('display', 'flex');
    });
    $('#close3').click(function () {
        $(".wrap:nth-child(3) .img, .wrap:nth-child(3) .text").css('display', 'block');
        $(".wrap:nth-child(3) .container").css('display', 'none');
    });
    $('.btn4').click(function () {
        $(".wrap:nth-child(4) .img, .wrap:nth-child(4) .text").css('display', 'none');
        $(".wrap:nth-child(4) .container").css('display', 'flex');
    });
    $('#close4').click(function () {
        $(".wrap:nth-child(4) .img, .wrap:nth-child(4) .text").css('display', 'block');
        $(".wrap:nth-child(4) .container").css('display', 'none');
    });
    $('.btn5').click(function () {
        $(".wrap:nth-child(5) .img, .wrap:nth-child(5) .text").css('display', 'none');
        $(".wrap:nth-child(5) .container").css('display', 'flex');
    });
    $('#close5').click(function () {
        $(".wrap:nth-child(5) .img, .wrap:nth-child(5) .text").css('display', 'block');
        $(".wrap:nth-child(5) .container").css('display', 'none');
    });
    $('.btn6').click(function () {
        $(".wrap:nth-child(6) .img, .wrap:nth-child(6) .text").css('display', 'none');
        $(".wrap:nth-child(6) .container").css('display', 'flex');
    });
    $('#close6').click(function () {
        $(".wrap:nth-child(6) .img, .wrap:nth-child(6) .text").css('display', 'block');
        $(".wrap:nth-child(6) .container").css('display', 'none');
    });
//***************************************************************************************
//wrapper show/hide
    $('.thumb').click(function () {
        $(this).children('.wrapper').hide(600);
    });
    $('.thumb').dblclick(function () {
        $(this).children('.wrapper').show(600);
    });
//animation
    $(function () {
        $('.wrapper').hover(function () {
            $(this).children().stop().animate({
                marginTop: '80%',
                opacity: 0
            }, 600);
        }, function () {
            $(this).children().stop().animate({
                marginTop: '0%',
                opacity: 1
            }, 600);
        });
    });
//**************************************************************************************************
//emailUs form
    $('#chat').click(function () {
        $('#emailUs').toggle();
    });
//filter form code
//***************************************************************************************************
    (function ($) {
        // custom css expression for a case-insensitive contains()
        jQuery.expr[':'].Contains = function (a, i, m) {
            return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
        };

        function listFilter(head, list) { // head is any element, list is an unordered list
            // create and add the filter form to the head
            var form = $("<form>").attr({
                    "class": "filterform",
                    "action": "#"
                }),
                input = $("<input>").attr({
                    "class": "filterinput",
                    "type": "text"
                });
            $(form).append(input).appendTo(head);

            $(input)
                .change(function () {
                    var filter = $(this).val();
                    if (filter) {
                        // this finds all links in a list that contain the input,
                        // and hide the ones not containing the input while showing the ones that do
                        $(list).find("a:not(:Contains(" + filter + "))").parent().slideUp();
                        $(list).find("a:Contains(" + filter + ")").parent().slideDown();
                    } else {
                        $(list).find("li").slideDown();
                    }
                    return false;
                })
                .keyup(function () {
                    // fire the above change event after every letter
                    $(this).change();
                });
        }
        //ondomready
        $(function () {
            listFilter($("#header"), $("#list"));
        });
    }(jQuery));
//end of filter form


//hiding filter menu
//*************************************************
    $('.icon-menu').click(function () {
        $('#wrap-list').css({
            'display': 'flex'
        });
    });
    $('.icon-close').click(function () {
        $('#wrap-list').css({
            'display': 'none'
        });
    });
    $('.main a').click(function (e) {
        e.preventDefault();
    });
})

$(document).ready(function () {
    //**************************************************************************************************************
    //filtering elements by price
    //lower than
    $('#priceFilter1').change(function () {
        var price = parseInt($('#priceFilter1').val());
        var elems = $('a[data-price]');
        (elems).each(function () {
            if ($(this).attr('data-price') < price) {
                $(this).parent().parent().hide(500);
            } else {
                $(this).parent().parent().show(500);
            }
        });
    });
    //more than
    $('#priceFilter2').change(function () {
        var price = parseInt($('#priceFilter2').val());
        var elems = $('a[data-price]');
        (elems).each(function () {
            if ($(this).attr('data-price') > price) {
                $(this).parent().parent().hide(500);
            } else {
                $(this).parent().parent().show(500);
            }
        });
    });
    //name
    $('#nameFilter').change(function () {
        var name = String($('#nameFilter').val()).toLowerCase();
        var elems = $('a[data-name]');
        elems.each(function () {
            if (name) {
                if (String($(this).attr('data-name')).toLowerCase() != name) {
                    $(this).parent().parent().hide(500);
                } else if (String($(this).attr('data-name')).toLowerCase() == name) {
                    $(this).parent().parent().show(500);
                }
            } else {
                $(this).parent().parent().show(500);
            }
        });
    });
    //****************************************
    $('#nameFilter').change(function () {
        jQuery.expr[':'].Contains = function (a, i, m) {
            return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
        };
            var filter = $(this).val();
            var elems = $('a[data-name]').attr('data-name');
        if (filter) {
                $(elems).find("a:not(:Contains(" + filter + "))").parent().hide(500);
                $(elems).find("a:Contains(" + filter + ")").parent().show(500);
            } else {
                $(list).find("a").parent().parent().show();
            }
            return false;
        });
    //****************************************
    //******************************************************************************************************************
    //localStorage.setItem('likes', 0);
    if (localStorage.getItem('likes') > 0) {
        if (localStorage.getItem('likes') > 1) {
            localStorage.setItem('likes', 1);
        }
        $('.mainLike').addClass('liked2');
    }
    $('.mainLike').click(function () {
        count++;
        if (count > 1) {
            count = 1
        }
        $(this).addClass('liked2');
        $('#forMainLike').html(count);
        localStorage.setItem('likes', count);
    });
    //*********************************
    //likes toggling
    $('.no-like').click(function () {
        $(this).toggleClass('liked');
    });
    //****************************************************************************************
    //articles code
    var main = function () {
        $('.article').click(function () {
            $(this).children('.description').toggle();
            $('.current').removeClass('current');
            $(this).addClass('current');
        });
        $(document).keyup(function (e) {
            var currentArticle = $('.current');
            if (e.which === 79) {
                $('.current').children('.description').toggle();
            } else if (e.which === 78) {
                var nextArticle = currentArticle.next();
                currentArticle.removeClass('current');
                nextArticle.addClass('current');
            } else if (e.which === 80) {
                var prevArticle = currentArticle.prev();
                currentArticle.removeClass('current');
                prevArticle.addClass('current');
            }
        })
    };
    $(document).ready(main);
    //************************************************************************************************************

});