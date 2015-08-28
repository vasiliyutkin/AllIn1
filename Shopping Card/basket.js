$(document).ready(function () {
    //***********************************************************************
    //modifying a DOM tree
    $('.add-to-cart').click(function (event) {
        event.preventDefault();
        var name = $(this).attr('data-name');
        var price = Number($(this).attr('data-price'));
        shoppingCart.addItemToCart(name, price, 1);
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
            output += "<li>" + cartArray[i].name + " " + cartArray[i].count + " x " + cartArray[i].price + "$ = " + cartArray[i].total + "<a href='#' class='substract-item' data-name='" + cartArray[i].name + "'>    -</a>" + " <a class='plus-item' href='#' data-name='" + cartArray[i].name + "'>+</a>" + " <a class='delete-item' href='#' data-name='" + cartArray[i].name + "'>x</a>" + "</li>"
        };
        $('#show-cart').html(output);
        $('#count-cart').html(shoppingCart.countCart());
        $('#total-cart').html(shoppingCart.totalCart());
    };
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
        humane.log('<strong>Your total bill is: ' + shoppingCart.totalCart() + '$! Thank you for your support! =)</strong>');
        shoppingCart.clearCart();
        shoppingCart.saveCart();
        displayCart();
    });

    displayCart();
});


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

//Shopping cart functions
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
    var cart = [];

    function Item(name, price, count) {
        this.name = name;
        this.price = price;
        this.count = count;
    };


    function loadCart() {
        cart = JSON.parse(localStorage.getItem('shoppingCart'));
    };
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

    obj.removeItemFromCartAll = function (name) {
        for (var i in cart) {
            if (cart[i].name == name) {
                cart.splice(i, 1)
                break;
            }
        }
        obj.saveCart();
    };

    obj.clearCart = function () {
        cart = [];
        obj.saveCart;
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
        for (var i in cart) {
            totalCost += cart[i].price * cart[i].count;
        }
        return totalCost.toFixed(2);
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

    //--------------------------------------------------------------------
    return obj;
})();