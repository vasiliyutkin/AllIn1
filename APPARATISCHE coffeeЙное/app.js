//creating a self-invoking function
(function () {
    var utils = {
            addListener: null,
            removeListener: null,
            preventStop: null,
            prevent: null,
            stop: null
        },
        coffeeMachine = {
            displPanel: {
                display: {
                    self: document.querySelector('.display'),
                    runLine: document.querySelector('pre'),
                    type: document.querySelector('.display li:nth-child(2)'),
                    price: document.querySelector('.display li:nth-child(3)'),
                    status: document.querySelector('.display li:nth-child(4)'),
                    sugar: document.querySelectorAll('.sweets'),
                    money: document.querySelector('.currency')
                },
                buttons: {
                    add: document.querySelector('.add'),
                    undo: document.querySelector('.undo'),
                    mouseDownDispPanel: function (e) {
                        switch (e.target) {
                            case coffeeMachine.displPanel.buttons.add:
                            {
                                coffeeMachine.displPanel.buttons.add.className = 'add clicked';
                                break;
                            }
                            case coffeeMachine.displPanel.buttons.undo:
                            {
                                coffeeMachine.displPanel.buttons.undo.className = 'undo clicked';
                                break;
                            }
                        }
                    },
                    mouseUpDispPanel: function (e) {
                        switch (e.target) {
                            case coffeeMachine.displPanel.buttons.add:
                            {
                                coffeeMachine.displPanel.buttons.add.className = 'add';
                                break;
                            }
                            case coffeeMachine.displPanel.buttons.undo:
                            {
                                coffeeMachine.displPanel.buttons.undo.className = 'undo';
                                break;
                            }
                        }
                    }
                },
                animationReferences: {
                    scum: document.querySelector('.scum'),
                    cup: document.querySelector('.cup'),
                    cups: document.querySelector('.cups'),
                    coffee: document.querySelector('.coffee'),
                    liquid: document.querySelector('.liquid')
                }
            },
            pickPanel: {
                buttons: document.querySelectorAll('.coffee-button'),
                pushCount: [0, 0, 0, 0]

            },
            money: {

                yourMoney: 0,

                change: {
                    hundred: 0,
                    fifty: 0,
                    twenty: 0,
                    ten: 0
                },

                replenishBalance: function (money) {
                    if (this.yourMoney < 1000) {
                        this.yourMoney += money;
                        return true;
                    } else {
                        return false;
                    }
                },

                buyCoffe: function (cost) {
                    this.yourMoney -= cost;
                    return this.yourMoney;
                },

                drugMoney: function (e) {
                    var fontSize = parseFloat(window.getComputedStyle(document.body, null).getPropertyValue('font-size'));
                    e.target.style.transform = 'rotate(90deg)';
                    e.target.style.border = '2px solid black';
                    e.target.style.borderRadius = '2em';
                    if (e.pageX >= 48 * fontSize &&
                        e.pageX <= 54 * fontSize &&
                        e.pageY >= 26 * fontSize &&
                        e.pageY <= 35 * fontSize) {
                        e.target.style.opacity = '0';
                        setTimeout(function () {
                            switch (e.target) {
                                case document.querySelector('[data-val="10"]'):
                                {
                                    coffeeMachine.money.resiveMoney(10, e.target);
                                    break;
                                }
                                case document.querySelector('[data-val="20"]'):
                                {
                                    coffeeMachine.money.resiveMoney(20, e.target);
                                    break;
                                }
                                case document.querySelector('[data-val="50"]'):
                                {
                                    coffeeMachine.money.resiveMoney(50, e.target);
                                    break;
                                }
                                case document.querySelector('[data-val="100"]'):
                                {
                                    coffeeMachine.money.resiveMoney(100, e.target);
                                    break;
                                }
                            }
                        }, 500);
                    }
                    e.target.style.top = e.pageY - e.target.offsetHeight / 2 + "px";
                    e.target.style.left = e.pageX - e.target.offsetWidth / 2 + "px";
                },

                resiveMoney: function (val, e) {
                    if (e !== undefined) {
                        coffeeMachine.money.replenishBalance(val);
                        coffeeMachine.displPanel.display.money.innerHTML = coffeeMachine.money.yourMoney + '';
                        coffeeMachine.methods.allowToBuy();
                        e.onmousemove = null;
                        e.parentNode.removeChild(e);
                    }

                },

                references: {
                    ten: document.querySelector('[alt~="10"]'),
                    twenty: document.querySelector('[alt~="20"]'),
                    fifty: document.querySelector('[alt~="50"]'),
                    hundred: document.querySelector('[alt~="100"]')
                }

            },
            coffee: {
                sugar: 0,
                espresso: {
                    type: 'Espresso',
                    price: 8
                },
                americano: {
                    type: 'Americano',
                    price: 11
                },
                withMilk: {
                    type: 'Coffee + Milk',
                    price: 16
                },
                capuccino: {
                    type: 'Capuccino',
                    price: 21
                }
            },
            methods: {
                addOrChange: function (e) {
                    switch (e.target) {
                        case coffeeMachine.displPanel.buttons.add:
                        {
                            if (coffeeMachine.coffee.sugar < 3) {
                                coffeeMachine.coffee.sugar += 1;
                                coffeeMachine.displPanel.display.sugar[coffeeMachine.coffee.sugar - 1].className = 'sweets enable';
                            }
                            break;
                        }
                        case coffeeMachine.displPanel.buttons.undo:
                        {
                            if (coffeeMachine.coffee.sugar > 0) {
                                coffeeMachine.coffee.sugar -= 1;
                                coffeeMachine.displPanel.display.sugar[coffeeMachine.coffee.sugar].className = 'sweets';
                            }
                            break;
                        }
                    }
                },

                chooseDrink: function (e) {
                    if (disableChecker(e.target.classList) && coffeeMachine.displPanel.display.self.classList[1]) {
                        switch (e.target) {
                            case coffeeMachine.pickPanel.buttons[0]:
                            {
                                coffeeMachine.methods.makeCoffee(coffeeMachine.coffee.espresso, 'Esspresso');
                                break;
                            }
                            case coffeeMachine.pickPanel.buttons[1]:
                            {
                                coffeeMachine.methods.makeCoffee(coffeeMachine.coffee.americano, 'Americano');
                                break;
                            }
                            case coffeeMachine.pickPanel.buttons[2]:
                            {
                                coffeeMachine.methods.makeCoffee(coffeeMachine.coffee.withMilk, 'Coffee + milk');
                                break;
                            }
                            case coffeeMachine.pickPanel.buttons[3]:
                            {
                                coffeeMachine.methods.makeCoffee(coffeeMachine.coffee.capuccino, 'Capuccino');
                                break;
                            }
                        }
                    } else {

                        if (!disableChecker(e.target.classList)) {
                            switch (e.target) {
                                case coffeeMachine.pickPanel.buttons[0]:
                                {
                                    coffeeMachine.methods.crackButton(0, e);
                                    break;
                                }
                                case coffeeMachine.pickPanel.buttons[1]:
                                {
                                    coffeeMachine.methods.crackButton(1, e);
                                    break;
                                }
                                case coffeeMachine.pickPanel.buttons[2]:
                                {
                                    coffeeMachine.methods.crackButton(2, e);
                                    break;
                                }
                                case coffeeMachine.pickPanel.buttons[3]:
                                {
                                    coffeeMachine.methods.crackButton(3, e);
                                    break;
                                }
                            }
                        }
                    }
                },

                inputMoney: function (e) {
                    var obj;
                    switch (e.target) {
                        case coffeeMachine.money.references.ten:
                        {
                            obj = replicate(e.target.offsetLeft, e.target.offsetTop, "currency/10.jpg", 10);
                            break;
                        }
                        case coffeeMachine.money.references.twenty:
                        {
                            obj = replicate(e.target.offsetLeft, e.target.offsetTop, "currency/20.jpg", 20);
                            break;
                        }
                        case coffeeMachine.money.references.fifty:
                        {
                            obj = replicate(e.target.offsetLeft, e.target.offsetTop, "currency/50.jpg", 50);
                            break;
                        }
                        case coffeeMachine.money.references.hundred:
                        {
                            obj = replicate(e.target.offsetLeft, e.target.offsetTop, "currency/100.jpg", 100);
                            break;
                        }
                        default:
                        {
                            break;
                        }
                    }
                    obj.onmousemove = coffeeMachine.money.drugMoney;
                    e.preventDefault();
                    e.stopImmediatePropagation();
                },

                allowToBuy: function () {
                    if (coffeeMachine.money.yourMoney < 8) {
                        coffeeMachine.pickPanel.buttons[0].className = 'coffee-button disable';
                        coffeeMachine.pickPanel.buttons[1].className = 'coffee-button disable';
                        coffeeMachine.pickPanel.buttons[2].className = 'coffee-button disable';
                        coffeeMachine.pickPanel.buttons[3].className = 'coffee-button disable';
                    }
                    if (coffeeMachine.money.yourMoney >= 8 && coffeeMachine.money.yourMoney < 11) {
                        coffeeMachine.pickPanel.buttons[0].className = 'coffee-button canbuy';
                        coffeeMachine.pickPanel.buttons[1].className = 'coffee-button disable';
                        coffeeMachine.pickPanel.buttons[2].className = 'coffee-button disable';
                        coffeeMachine.pickPanel.buttons[3].className = 'coffee-button disable';
                    }
                    if (coffeeMachine.money.yourMoney >= 11 && coffeeMachine.money.yourMoney < 16) {
                        coffeeMachine.pickPanel.buttons[0].className = 'coffee-button canbuy';
                        coffeeMachine.pickPanel.buttons[1].className = 'coffee-button canbuy';
                        coffeeMachine.pickPanel.buttons[2].className = 'coffee-button disable';
                        coffeeMachine.pickPanel.buttons[3].className = 'coffee-button disable';
                    }
                    if (coffeeMachine.money.yourMoney >= 16 && coffeeMachine.money.yourMoney < 21) {
                        coffeeMachine.pickPanel.buttons[0].className = 'coffee-button canbuy';
                        coffeeMachine.pickPanel.buttons[1].className = 'coffee-button canbuy';
                        coffeeMachine.pickPanel.buttons[2].className = 'coffee-button canbuy';
                        coffeeMachine.pickPanel.buttons[3].className = 'coffee-button disable';
                    }
                    if (coffeeMachine.money.yourMoney >= 21) {
                        coffeeMachine.pickPanel.buttons[0].className = 'coffee-button canbuy';
                        coffeeMachine.pickPanel.buttons[1].className = 'coffee-button canbuy';
                        coffeeMachine.pickPanel.buttons[2].className = 'coffee-button canbuy';
                        coffeeMachine.pickPanel.buttons[3].className = 'coffee-button canbuy';
                    }
                },

                makeCoffee: function (drink, str) {
                    coffeeMachine.coffee.sugar = 0;
                    coffeeMachine.displPanel.animationReferences.cup.className = "cup ".concat(str);
                    coffeeMachine.displPanel.animationReferences.coffee.className = "coffee ".concat(str);
                    Array.prototype.forEach.call(coffeeMachine.displPanel.display.sugar, function (el) {
                        el.className = 'sweets';
                    });
                    coffeeMachine.money.buyCoffe(drink.price);
                    coffeeMachine.displPanel.display.money.innerHTML = coffeeMachine.money.yourMoney + '';

                    setTimeout(function () {
                        coffeeMachine.displPanel.display.self.className = 'display';
                        coffeeMachine.methods.allowToBuy();
                        coffeeMachine.displPanel.display.runLine.innerHTML = "Thank's Dude";
                        coffeeMachine.displPanel.display.status.innerHTML = "Status: Making..";
                        coffeeMachine.displPanel.display.type.innerHTML = "Type: " + drink.type;
                        coffeeMachine.displPanel.display.price.innerHTML = "Price:  " + drink.price;
                        coffeeMachine.displPanel.animationReferences.coffee.className = 'coffee '.concat(str, ' animated');
                        coffeeMachine.displPanel.animationReferences.liquid.className = 'liquid animated';
                        if (drink === coffeeMachine.coffee.capuccino) {
                            coffeeMachine.displPanel.animationReferences.scum.className = 'scum animated';
                        }
                    }, 0);
                    setTimeout(function () {
                        coffeeMachine.displPanel.display.runLine.innerHTML = "Take it!";
                        coffeeMachine.displPanel.display.status.innerHTML = "Status: Done";
                    }, 3500);
                    setTimeout(function () {
                        coffeeMachine.displPanel.animationReferences.cups.className = 'cups animated';
                        coffeeMachine.displPanel.animationReferences.coffee.className = 'coffee';
                        coffeeMachine.displPanel.animationReferences.liquid.className = 'liquid';
                        if (drink === coffeeMachine.coffee.capuccino) {
                            coffeeMachine.displPanel.animationReferences.scum.className = 'scum';
                        }
                    }, 6500);
                    setTimeout(function () {
                        // Start runLine animation.
                        coffeeMachine.displPanel.display.self.className = 'display animated';
                        coffeeMachine.displPanel.animationReferences.cups.className = 'cups';

                        coffeeMachine.displPanel.display.runLine.innerHTML = "Choose your drink.";
                        coffeeMachine.displPanel.display.type.innerHTML = "Type:";
                        coffeeMachine.displPanel.display.price.innerHTML = "Price:";
                        coffeeMachine.displPanel.display.status.innerHTML = "Status:";
                    }, 6500);
                }
            }
        };
    (function () {
        // utils.addLitener, utils.removeListener.
        if (typeof window.addEventListener === 'function') {
            utils.addListener = function (el, type, fn) {
                el.addEventListener(type, fn, false);
            };
            utils.removeListener = function (el, type, fn) {
                el.removeEventListener(type, fn, false);
            };
        } else if (typeof document.attachEvent === 'function') {
            // IE
            utils.addListener = function (el, type, fn) {
                el.attachEvent('on' + type, fn);
            };
            utils.removeListener = function (el, type, fn) {
                el.detachEvent('on' + type, fn);
            };
        } else { // Old Browsers
            utils.addListener = function (el, type, fn) {
                el['on' + type] = fn;
            };
            utils.removeListener = function (el, type) {
                el['on' + type] = null;
            };
        }
        if (typeof Event.prototype.preventDefault === 'function') {
            utils.prevent = function (e) {
                e.preventDefault();
            };
            if (typeof Event.prototype.stopPropagation === 'function') {
                utils.stop = function (e) {
                    e.stopPropagation();
                };
                utils.preventStop = function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                }
            }
        } else {
            if (typeof Event.prototype.returnValue === 'boolean') {
                utils.prevent = function (e) {
                    e.preventDefault();
                };
                if (typeof Event.prototype.cancelBubble === 'boolean') {
                    utils.stop = function (e) {
                        e.stopPropagation();
                    };
                    utils.preventStop = function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                    }
                }
            }
        }

    }());
//self-invokig function ending

    function disableChecker(classList) {
        for (var i = 0; i < classList.length; i += 1) {
            if (classList[i] === 'disable') {
                return false;
            }
        }
        return true;
    }
    function replicate(x, y, src, data) {
        var newDiv = document.createElement('currency');
        newDiv.className = 'move';
        newDiv.src = src;
        newDiv.dataset.val = data;
        newDiv.style.left = x + 'px';
        newDiv.style.top = y + 'px';
        document.body.appendChild(newDiv);
        return newDiv;
    }
    coffeeMachine.methods.allowToBuy();
    coffeeMachine.displPanel.display.money.innerHTML = coffeeMachine.money.yourMoney + '';
    utils.addListener(document.querySelector('.pickPanel'), 'click', coffeeMachine.methods.chooseDrink, false);
    utils.addListener(document.querySelector('.displPanel'), 'click', coffeeMachine.methods.addOrChange, false);
    utils.addListener(document.querySelector('.uah'), 'mousedown', coffeeMachine.methods.inputMoney, false);
    utils.addListener(document.querySelector('.money'), 'click', coffeeMachine.money.resiveMoney, false);
    utils.addListener(document.querySelector('.displPanel'), 'mousedown', coffeeMachine.displPanel.buttons.mouseDownDispPanel, false);
    utils.addListener(document.querySelector('.displPanel'), 'mouseup', coffeeMachine.displPanel.buttons.mouseUpDispPanel, false);
}());