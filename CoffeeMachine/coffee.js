(function () {
    var
    // Utils used to initialise branches template.
        utils = {
            addListener: null,
            removeListener: null,
            preventStop: null,
            prevent: null,
            stop: null
        },
        audio,
        coffeeMachine = {
            displayingPanel: {
                display: {
                    self: document.querySelector('.display'),
                    runLine: document.querySelector('pre'),
                    type: document.querySelector('.display li:nth-child(2)'),
                    price: document.querySelector('.display li:nth-child(3)'),
                    status: document.querySelector('.display li:nth-child(4)'),
                    sugar: document.querySelectorAll('.sugarpieces'),
                    money: document.querySelector('.currency')
                },
                buttons: {
                    moreSugar: document.querySelector('.moreSugar'),
                    lessSugar: document.querySelector('.lessSugar'),
                    // Function callback for "sugar", "change" in displaying-panel for animation.
                    mouseDownDispPanel: function (e) {
                        switch (e.target) {
                            case coffeeMachine.displayingPanel.buttons.moreSugar:
                            {
                                coffeeMachine.displayingPanel.buttons.moreSugar.className = 'moreSugar clicked';
                                break;
                            }
                            case coffeeMachine.displayingPanel.buttons.lessSugar:
                            {
                                coffeeMachine.displayingPanel.buttons.lessSugar.className = 'lessSugar clicked';
                                break;
                            }
                        }
                    },
                    // Function callback for "sugar", "lessSugar" in displaying-panel for animation.
                    mouseUpDispPanel: function (e) {
                        switch (e.target) {
                            case coffeeMachine.displayingPanel.buttons.moreSugar:
                            {
                                coffeeMachine.displayingPanel.buttons.moreSugar.className = 'moreSugar';
                                break;
                            }
                            case coffeeMachine.displayingPanel.buttons.lessSugar:
                            {
                                coffeeMachine.displayingPanel.buttons.lessSugar.className = 'lessSugar';
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
            choosingPanel: {
                buttons: document.querySelectorAll('.coffee-button'),
                // Use for cracking buttons.
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

                // Function callback used for drugging <img> and check area of money input then execute "resiveMoney".
                drugMoney: function (e) {
                    var fontSize = parseFloat(window.getComputedStyle(document.body, null).getPropertyValue('font-size'));
                    // When start drugging use tyransition rotate.
                    e.target.style.transform = 'rotate(90deg)';
                    // Area to input money.
                    if (e.pageX >= 48 * fontSize &&
                        e.pageX <= 54 * fontSize &&
                        e.pageY >= 26 * fontSize &&
                        e.pageY <= 35 * fontSize) {
                        // In proper area disappear and after 0.5sec you het currency.
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
                    // Positioning drugging element in pinter center.
                    e.target.style.top = e.pageY - e.target.offsetHeight / 2 + "px";
                    e.target.style.left = e.pageX - e.target.offsetWidth / 2 + "px";
                },

                // Function used when you drugged money to cash-getter.
                resiveMoney: function (val, e) {
                    if (e !== undefined) {
                        coffeeMachine.money.replenishBalance(val);
                        coffeeMachine.displayingPanel.display.money.innerHTML = coffeeMachine.money.yourMoney + '';
                        coffeeMachine.methods.allowToBuy();
                        audio = new Audio('mp3/Cash.wav');
                        audio.play();
                        // Disable onmousemove Event and remove img element.

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
                    type: 'espresso',
                    price: 10
                },
                americano: {
                    type: 'americano',
                    price: 20
                },
                withMilk: {
                    type: 'withMilk',
                    price: 30
                },
                capuccino: {
                    type: 'capuccino',
                    price: 40
                }
            },
            methods: {
                moreSugarOrChange: function (e) {
                    audio;
                    switch (e.target) {
                        case coffeeMachine.displayingPanel.buttons.moreSugar:
                        {
                            if (coffeeMachine.coffee.sugar < 3) {
                                coffeeMachine.coffee.sugar += 1;
                                coffeeMachine.displayingPanel.display.sugar[coffeeMachine.coffee.sugar - 1].className = 'sugarpieces enable';
                                audio = new Audio('mp3/beep.mp3');
                                audio.play();
                            }
                            break;
                        }
                        case coffeeMachine.displayingPanel.buttons.lessSugar:
                        {
                            if (coffeeMachine.coffee.sugar > 0) {
                                coffeeMachine.coffee.sugar -= 1;
                                coffeeMachine.displayingPanel.display.sugar[coffeeMachine.coffee.sugar].className = 'sugarpieces';
                                audio = new Audio('mp3/beep.mp3');
                                audio.play();
                            }
                            break;
                        }
                    }
                },

                chooseDrink: function (e) {
                    audio = new Audio('mp3/click.wav');
                    // 1-4 catch onclick from '.coffee-button'.
                    if (disableChecker(e.target.classList) && coffeeMachine.displayingPanel.display.self.classList[1]) {
                        switch (e.target) {
                            case coffeeMachine.choosingPanel.buttons[0]:
                            {
                                audio.play();
                                coffeeMachine.methods.makeCoffee(coffeeMachine.coffee.espresso, 'esspresso');
                                break;
                            }
                            case coffeeMachine.choosingPanel.buttons[1]:
                            {
                                audio.play();
                                coffeeMachine.methods.makeCoffee(coffeeMachine.coffee.americano, 'americano');
                                break;
                            }
                            case coffeeMachine.choosingPanel.buttons[2]:
                            {
                                audio.play();
                                coffeeMachine.methods.makeCoffee(coffeeMachine.coffee.withMilk, 'withmilk');
                                break;
                            }
                            case coffeeMachine.choosingPanel.buttons[3]:
                            {
                                audio.play();
                                coffeeMachine.methods.makeCoffee(coffeeMachine.coffee.capuccino, 'americano');
                                break;
                            }
                        }
                    } else {

                        // 1-4 catch onclick from '.coffee-button-disabled'.
                        if (!disableChecker(e.target.classList)) {
                            switch (e.target) {
                                case coffeeMachine.choosingPanel.buttons[0]:
                                {
                                    audio.play();
                                    coffeeMachine.methods.crackButton(0, e);
                                    break;
                                }
                                case coffeeMachine.choosingPanel.buttons[1]:
                                {
                                    audio.play();
                                    coffeeMachine.methods.crackButton(1, e);
                                    break;
                                }
                                case coffeeMachine.choosingPanel.buttons[2]:
                                {
                                    audio.play();
                                    coffeeMachine.methods.crackButton(2, e);
                                    break;
                                }
                                case coffeeMachine.choosingPanel.buttons[3]:
                                {
                                    audio.play();
                                    coffeeMachine.methods.crackButton(3, e);
                                    break;
                                }
                            }
                        }
                    }
                },

                inputMoney: function (e) {
                    var obj;
                    // <img> fabric.
                    switch (e.target) {
                        case coffeeMachine.money.references.ten:
                        {
                            obj = replicate(e.target.offsetLeft, e.target.offsetTop, "img/10.jpg", 10);
                            break;
                        }
                        case coffeeMachine.money.references.twenty:
                        {
                            obj = replicate(e.target.offsetLeft, e.target.offsetTop, "img/20.jpg", 20);
                            break;
                        }
                        case coffeeMachine.money.references.fifty:
                        {
                            obj = replicate(e.target.offsetLeft, e.target.offsetTop, "img/50.jpg", 50);
                            break;
                        }
                        case coffeeMachine.money.references.hundred:
                        {
                            obj = replicate(e.target.offsetLeft, e.target.offsetTop, "img/100.jpg", 100);
                            break;
                        }
                        default:
                        {
                            break;
                        }
                    }
                    // Starts onmousemove Event.
                    obj.onmousemove = coffeeMachine.money.drugMoney;
                    e.preventDefault();
                    e.stopImmediatePropagation();
                },

                allowToBuy: function () {
                    if (coffeeMachine.money.yourMoney < 10) {
                        coffeeMachine.choosingPanel.buttons[0].className = 'coffee-button disable';
                        coffeeMachine.choosingPanel.buttons[1].className = 'coffee-button disable';
                        coffeeMachine.choosingPanel.buttons[2].className = 'coffee-button disable';
                        coffeeMachine.choosingPanel.buttons[3].className = 'coffee-button disable';
                    }
                    if (coffeeMachine.money.yourMoney >= 10 && coffeeMachine.money.yourMoney < 20) {
                        coffeeMachine.choosingPanel.buttons[0].className = 'coffee-button canbuy';
                        coffeeMachine.choosingPanel.buttons[1].className = 'coffee-button disable';
                        coffeeMachine.choosingPanel.buttons[2].className = 'coffee-button disable';
                        coffeeMachine.choosingPanel.buttons[3].className = 'coffee-button disable';
                    }
                    if (coffeeMachine.money.yourMoney >= 20 && coffeeMachine.money.yourMoney < 30) {
                        coffeeMachine.choosingPanel.buttons[0].className = 'coffee-button canbuy';
                        coffeeMachine.choosingPanel.buttons[1].className = 'coffee-button canbuy';
                        coffeeMachine.choosingPanel.buttons[2].className = 'coffee-button disable';
                        coffeeMachine.choosingPanel.buttons[3].className = 'coffee-button disable';
                    }
                    if (coffeeMachine.money.yourMoney >= 30 && coffeeMachine.money.yourMoney < 40) {
                        coffeeMachine.choosingPanel.buttons[0].className = 'coffee-button canbuy';
                        coffeeMachine.choosingPanel.buttons[1].className = 'coffee-button canbuy';
                        coffeeMachine.choosingPanel.buttons[2].className = 'coffee-button canbuy';
                        coffeeMachine.choosingPanel.buttons[3].className = 'coffee-button disable';
                    }
                    if (coffeeMachine.money.yourMoney >= 40) {
                        coffeeMachine.choosingPanel.buttons[0].className = 'coffee-button canbuy';
                        coffeeMachine.choosingPanel.buttons[1].className = 'coffee-button canbuy';
                        coffeeMachine.choosingPanel.buttons[2].className = 'coffee-button canbuy';
                        coffeeMachine.choosingPanel.buttons[3].className = 'coffee-button canbuy';
                    }
                },

                crackButton: function (i, e) {
                    coffeeMachine.choosingPanel.pushCount[i] += 1;
                    if (coffeeMachine.choosingPanel.pushCount[i] > 4) {
                        e.target.className = 'coffee-button disable crack';
                        coffeeMachine.choosingPanel.pushCount[i] = 0;
                        audio = new Audio('mp3/glass-crack.mp3');
                        audio.play();
                    }
                },

                makeCoffee: function (drink, str) {
                    audio = new Audio('mp3/coffee-grinder.mp3');
                    audio.play();
                    // Uses chosen sugar.
                    coffeeMachine.coffee.sugar = 0;
                    coffeeMachine.displayingPanel.animationReferences.cup.className = "cup ".concat(str);
                    coffeeMachine.displayingPanel.animationReferences.coffee.className = "coffee ".concat(str);
                    // Sets to default "sugar" className
                    Array.prototype.forEach.call(coffeeMachine.displayingPanel.display.sugar, function (el) {
                        el.className = 'sugarpieces';
                    });
                    coffeeMachine.money.buyCoffe(drink.price);
                    coffeeMachine.displayingPanel.display.money.innerHTML = coffeeMachine.money.yourMoney + '';

                    // Start runLine animation.
                    setTimeout(function () {
                        //Stop runline animation and check what drink you can buy.
                        coffeeMachine.displayingPanel.display.self.className = 'display';
                        coffeeMachine.methods.allowToBuy();

                        // Begin cooking and display info.
                        coffeeMachine.displayingPanel.display.runLine.innerHTML = "Thank you sweety. ";
                        coffeeMachine.displayingPanel.display.status.innerHTML = "Status: Cooking...";
                        coffeeMachine.displayingPanel.display.type.innerHTML = "Type: " + drink.type;
                        coffeeMachine.displayingPanel.display.price.innerHTML = "Price:  " + drink.price;

                        // Start coffee animation.
                        coffeeMachine.displayingPanel.animationReferences.coffee.className = 'coffee '.concat(str, ' animated');
                        coffeeMachine.displayingPanel.animationReferences.liquid.className = 'liquid animated';
                        if (drink === coffeeMachine.coffee.capuccino) {
                            coffeeMachine.displayingPanel.animationReferences.scum.className = 'scum animated';
                        }
                    }, 0);

                    // Waits 2.4sec when Cup is full.
                    setTimeout(function () {
                        coffeeMachine.displayingPanel.display.runLine.innerHTML = "Take your drink please. ";
                        coffeeMachine.displayingPanel.display.status.innerHTML = "Status: Done";
                    }, 3500);

                    // Waits 4.5 seconds to finish animation and cooking coffee.
                    setTimeout(function () {

                        // Finish coffee animation.
                        coffeeMachine.displayingPanel.animationReferences.cups.className = 'cups animated';
                        coffeeMachine.displayingPanel.animationReferences.coffee.className = 'coffee';
                        coffeeMachine.displayingPanel.animationReferences.liquid.className = 'liquid';
                        if (drink === coffeeMachine.coffee.capuccino) {
                            coffeeMachine.displayingPanel.animationReferences.scum.className = 'scum';
                        }
                    }, 6500);

                    // Wait more 1 seconds and set default innerHTML to coffee: type, price, status.
                    setTimeout(function () {
                        // Start runLine animation.
                        coffeeMachine.displayingPanel.display.self.className = 'display animated';
                        coffeeMachine.displayingPanel.animationReferences.cups.className = 'cups';

                        coffeeMachine.displayingPanel.display.runLine.innerHTML = "Choose your drink.";
                        coffeeMachine.displayingPanel.display.type.innerHTML = "Type:";
                        coffeeMachine.displayingPanel.display.price.innerHTML = "Price:";
                        coffeeMachine.displayingPanel.display.status.innerHTML = "Status:";
                    }, 6500);
                }
            }
        };

    // Initialise util properties.
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

        // Normal browsers: utils.stop, utils.prevent, utils.preventStop.
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

            // IE: utils.stop, utils.prevent, utils.preventStop.
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

    // Function finds in classList class "disable" used in "coffeeMachine.methods.chooseGrink" to catch proper e.target.
    function disableChecker(classList) {
        for (var i = 0; i < classList.length; i += 1) {
            if (classList[i] === 'disable') {
                return false;
            }
        }
        return true;
    }

    // Create fixed new <img>
    function replicate(x, y, src, data) {
        var newDiv = document.createElement('img');
        newDiv.className = 'move';
        newDiv.src = src;
        newDiv.dataset.val = data;
        newDiv.style.left = x + 'px';
        newDiv.style.top = y + 'px';
        document.body.appendChild(newDiv);
        return newDiv;
    }

    coffeeMachine.methods.allowToBuy();
    coffeeMachine.displayingPanel.display.money.innerHTML = coffeeMachine.money.yourMoney + '';

    // Subscribe event.
    utils.addListener(document.querySelector('.choosing-panel'), 'click', coffeeMachine.methods.chooseDrink, false);

    utils.addListener(document.querySelector('.displaying-panel'), 'click', coffeeMachine.methods.moreSugarOrChange, false);

    utils.addListener(document.querySelector('.gryvnas'), 'mousedown', coffeeMachine.methods.inputMoney, false);

    utils.addListener(document.querySelector('.money'), 'click', coffeeMachine.money.resiveMoney, false);

    utils.addListener(document.querySelector('.displaying-panel'), 'mousedown', coffeeMachine.displayingPanel.buttons.mouseDownDispPanel, false);

    utils.addListener(document.querySelector('.displaying-panel'), 'mouseup', coffeeMachine.displayingPanel.buttons.mouseUpDispPanel, false);

}());