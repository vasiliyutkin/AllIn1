function reqListner(){if(this.responseXML){var t=this.responseXML.getElementsByTagName("element");state=[];for(var e=0;e<t.length;e++)state.push(t[e].childNodes[0].nodeValue)}else state=JSON.parse(this.responseText).products}function toSuggest(){var t,e,a;suggest="",a=this,a===enterJSON&&(t=res1,e=enterJSON.value,http.addEventListener("load",reqListner,!0),http.open("get","products.json",!0),http.send());for(var n=0;n<state.length;n++)e.toLowerCase()===state[n].toLowerCase().substring(0,e.length)&&(""===suggest?suggest="<ul id='suggest'><li>"+state[n]+"</li>":suggest+="<li>"+state[n]+"</li>");""===suggest?(t.style.display="block",t.innerHTML="no result"):enterJSON.value?(suggest+="</ul>",t.style.display="block",t.innerHTML=suggest):t.style.display="none"}function toSubmit(){return document.getElementById("form2").style.display="none",document.getElementById("login").addEventListener("click",function(){document.getElementById("form2").style.display="none"},!0),!1}var shoppingCart=function(){function t(t,e,a){this.name=t,this.price=e,this.count=a}function e(){cart=JSON.parse(localStorage.getItem("shoppingCart"))}e();var a={};return a.saveCart=function(){localStorage.setItem("shoppingCart",JSON.stringify(cart))},a.addItemToCart=function(e,n,r){for(var o in cart)if(cart[o].name===e)return cart[o].count+=r,void a.saveCart();var i=new t(e,n,r);cart.push(i),a.saveCart()},a.removeItemFromCart=function(t){for(var e in cart)if(cart[e].name==t){cart[e].count--,0==cart[e].count&&cart.splice(e,1);break}a.saveCart()},a.discount=function(){return"JS"+parseInt([].slice.call(Math.random().toFixed(4),2).join(""))},a.removeItemFromCartAll=function(t){for(var e in cart)if(cart[e].name==t){cart.splice(e,1);break}a.saveCart()},a.clearCart=function(){cart=[],a.saveCart()},a.countCart=function(){var t=0;for(var e in cart)t+=cart[e].count;return t},a.totalCart=function(){var t=0,e=document.getElementById("ship"),a=Number(e.options[e.selectedIndex].getAttribute("data-price"));for(var n in cart)t+=cart[n].price*cart[n].count;return(t+a).toFixed(2)},a.totalCartPromo=function(){var t=0,e=document.getElementById("ship"),a=Number(e.options[e.selectedIndex].getAttribute("data-price"));for(var n in cart)t+=cart[n].price*cart[n].count*.85;return(t+a).toFixed(2)},a.listCart=function(){var t=[];for(var e in cart){var a=cart[e],n={};for(var r in a)n[r]=a[r];n.total=(a.price*a.count).toFixed(2),t.push(n)}return t},a}();if(0==Number(shoppingCart.totalCart()))var cart=[];promo.addEventListener("click",function(){forPromo.innerHTML=shoppingCart.discount()}),codeEnt.addEventListener("click",function(){code.value.toLowerCase()==forPromo.innerHTML.toLowerCase()?0==shoppingCart.totalCart()?humane.log("nothing to buy man! add something whatever you need..."):""==code.value.toLowerCase()&&""==forPromo.innerHTML.toLowerCase()&&shoppingCart.totalCart()>0?humane.log("codes didn't match, check it out"):(humane.log("you have your discount!".toUpperCase()),document.getElementById("total-cart").innerHTML=shoppingCart.totalCartPromo()):humane.log("codes didn't match, check it out".toUpperCase())});var http=new XMLHttpRequest,state=[],suggest="";enterJSON.addEventListener("keyup",toSuggest,!0),document.getElementById("form").addEventListener("submit",function(){var t,e,a,n;n=document.getElementById("nick").value,a=document.getElementById("email").value,t=document.getElementById("pass1").value,e=document.getElementById("pass2").value,t==e?(localStorage.setItem("email",a),localStorage.setItem("password",t),localStorage.setItem("nick",n)):humane.log("Passwords are wrong! Check it out!")},!0),document.getElementById("form2").addEventListener("submit",function(){var t=document.getElementById("enterEmail").value,e=document.getElementById("enterPassword").value;localStorage.email==t&&localStorage.password==e?(document.getElementById("sign").style.display="none",document.getElementById("login").innerHTML="Welcome "+localStorage.nick+"!",document.getElementById("card").style.display="inline-block",document.getElementById("wrap-promo").style.display="flex"):humane.log("Password are wrong, please type another valid one...)")},!0),document.getElementById("emailUs").addEventListener("submit",function(){document.getElementById("emailUs").style.display="none",humane.log("Thank you! Our operator will contact you later! Have a nice day!")}),document.getElementsByClassName("close")[0].addEventListener("click",function(){document.getElementsByClassName("wrap-cart")[0].style.display="none"}),document.getElementsByClassName("closeUs")[0].addEventListener("click",function(){document.getElementsByTagName("form")[0].style.display="none"});var count=localStorage.getItem("likes");$(document).ready(function(){function t(){var t=shoppingCart.listCart(),e="";for(var a in t)e+="<li>"+t[a].name+" "+t[a].count+" x "+t[a].price+"$ = "+t[a].total+"<a href='#' class='substract-item' data-name='"+t[a].name+"'>-</a> <a class='plus-item' href='#' data-name='"+t[a].name+"'>+</a> <a class='delete-item' href='#' data-name='"+t[a].name+"'>x</a></li>";$("#forMainLike").html(count),$("#show-cart").html(e),$("#count-cart").html(shoppingCart.countCart()),$("#total-cart").html(shoppingCart.totalCart()),$("#cart-count").html(shoppingCart.countCart())}$(".add-to-cart").click(function(e){e.preventDefault();var a=$(this).attr("data-name"),n=Number($(this).attr("data-price"));shoppingCart.addItemToCart(a,n,1),humane.log("Item: "+a+" added to cart, your total bill is: "+shoppingCart.totalCart()+"$"),t()}),$("#clear-cart").click(function(){shoppingCart.clearCart(),t(),shoppingCart.saveCart()}),$("#show-cart").on("click",".delete-item",function(e){e.preventDefault();var a=$(this).attr("data-name");shoppingCart.removeItemFromCartAll(a),t()}),$("#show-cart").on("click",".substract-item",function(e){e.preventDefault();var a=$(this).attr("data-name");shoppingCart.removeItemFromCart(a),t()}),$("#show-cart").on("click",".plus-item",function(e){e.preventDefault();var a=$(this).attr("data-name");shoppingCart.addItemToCart(a,0,1),t()}),$("#bill").click(function(e){e.preventDefault(),0==Number(shoppingCart.totalCart())||7==Number(shoppingCart.totalCart())||12==Number(shoppingCart.totalCart())||26==Number(shoppingCart.totalCart())||40==Number(shoppingCart.totalCart())||0==Number(shoppingCart.totalCartPromo())||7==Number(shoppingCart.totalCartPromo())||12==Number(shoppingCart.totalCartPromo())||26==Number(shoppingCart.totalCartPromo())||40==Number(shoppingCart.totalCartPromo())?(humane.log("we couldn't deliver nothing to you, cart is empty =("),t()):""==code.value.toLowerCase()&&""==forPromo.innerHTML.toLowerCase()&&0==shoppingCart.totalCart()?humane.log("Please add something to your basket..."):code.value.toLowerCase()==forPromo.innerHTML.toLowerCase()&&0==shoppingCart.totalCart()?humane.log("Please add something to your basket..."):""==code.value.toLowerCase()&&""==forPromo.innerHTML.toLowerCase()?(humane.log("<strong>Your total bill is: "+shoppingCart.totalCart()+"$! Thank you for your purchase! See you around =_)</strong>"),shoppingCart.clearCart(),shoppingCart.saveCart(),t()):code.value.toLowerCase()==forPromo.innerHTML.toLowerCase()?(humane.log("<strong>Your total bill is: "+shoppingCart.totalCartPromo()+"$! Thank you for your purchase! See you around =_)</strong>"),shoppingCart.clearCart(),shoppingCart.saveCart(),t()):(humane.log("<strong>Your total bill is: "+shoppingCart.totalCart()+"$! Thank you for your purchase! See you around =_)</strong>"),shoppingCart.clearCart(),shoppingCart.saveCart(),t())}),t(),$("#form").validity(function(){$("#pass1").require("Type your password please"),$("#pass2").require("repeat your password please").match("#pass1"),$("#email").require("Your email is required to proceed"),$("#0").require("please add your card").match(number)}),$("#pass1").keyup(function(t){var e=new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$","g"),a=new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$","g"),n=new RegExp("(?=.{6,}).*","g");return 0==n.test($(this).val())?$("#passstrength").html("More Characters*"):e.test($(this).val())?($("#passstrength").className="ok",$("#passstrength").html("Strong!*")):a.test($(this).val())?($("#passstrength").className="alert",$("#passstrength").html("Medium!*")):($("#passstrength").className="error",$("#passstrength").html("Weak!*")),!0}),$("#menu").click(function(){$(".articles").toggle()}),$("#card").click(function(){$(".wrap-cart").toggle()}),$("i").hover(function(){$(this).animate({opacity:.6},300)},function(){$(this).animate({opacity:1},300)}),$("#sign").click(function(){$("#form").toggle()}),$("#login").click(function(){$("#form2").toggle()}),$("#search").click(function(){$(".search").toggle()}),$(".btn1").click(function(){$(".wrap:nth-child(1) .img, .wrap:nth-child(1) .text").css("display","none"),$(".wrap:nth-child(1) .container").css("display","flex")}),$("#close1").click(function(){$(".wrap:nth-child(1) .img, .wrap:nth-child(1) .text").css("display","block"),$(".wrap:nth-child(1) .container").css("display","none")}),$(".btn2").click(function(){$(".wrap:nth-child(2) .img, .wrap:nth-child(2) .text").css("display","none"),$(".wrap:nth-child(2) .container").css("display","flex")}),$("#close2").click(function(){$(".wrap:nth-child(2) .img, .wrap:nth-child(2) .text").css("display","block"),$(".wrap:nth-child(2) .container").css("display","none")}),$(".btn3").click(function(){$(".wrap:nth-child(3) .img, .wrap:nth-child(3) .text").css("display","none"),$(".wrap:nth-child(3) .container").css("display","flex")}),$("#close3").click(function(){$(".wrap:nth-child(3) .img, .wrap:nth-child(3) .text").css("display","block"),$(".wrap:nth-child(3) .container").css("display","none")}),$(".btn4").click(function(){$(".wrap:nth-child(4) .img, .wrap:nth-child(4) .text").css("display","none"),$(".wrap:nth-child(4) .container").css("display","flex")}),$("#close4").click(function(){$(".wrap:nth-child(4) .img, .wrap:nth-child(4) .text").css("display","block"),$(".wrap:nth-child(4) .container").css("display","none")}),$(".btn5").click(function(){$(".wrap:nth-child(5) .img, .wrap:nth-child(5) .text").css("display","none"),$(".wrap:nth-child(5) .container").css("display","flex")}),$("#close5").click(function(){$(".wrap:nth-child(5) .img, .wrap:nth-child(5) .text").css("display","block"),$(".wrap:nth-child(5) .container").css("display","none")}),$(".btn6").click(function(){$(".wrap:nth-child(6) .img, .wrap:nth-child(6) .text").css("display","none"),$(".wrap:nth-child(6) .container").css("display","flex")}),$("#close6").click(function(){$(".wrap:nth-child(6) .img, .wrap:nth-child(6) .text").css("display","block"),$(".wrap:nth-child(6) .container").css("display","none")}),$(".thumb").click(function(){$(this).children(".wrapper").hide(600)}),$(".thumb").dblclick(function(){$(this).children(".wrapper").show(600)}),$(function(){$(".wrapper").hover(function(){$(this).children().stop().animate({marginTop:"80%",opacity:0},600)},function(){$(this).children().stop().animate({marginTop:"0%",opacity:1},600)})}),$("#chat").click(function(){$("#emailUs").toggle()}),function(t){function e(e,a){var n=t("<form>").attr({"class":"filterform",action:"#"}),r=t("<input>").attr({"class":"filterinput",type:"text"});t(n).append(r).appendTo(e),t(r).change(function(){var e=t(this).val();return e?(t(a).find("a:not(:Contains("+e+"))").parent().slideUp(),t(a).find("a:Contains("+e+")").parent().slideDown()):t(a).find("li").slideDown(),!1}).keyup(function(){t(this).change()})}jQuery.expr[":"].Contains=function(t,e,a){return(t.textContent||t.innerText||"").toUpperCase().indexOf(a[3].toUpperCase())>=0},t(function(){e(t("#header"),t("#list"))})}(jQuery),$(".icon-menu").click(function(){$("#wrap-list").css({display:"flex"})}),$(".icon-close").click(function(){$("#wrap-list").css({display:"none"})}),$(".main a").click(function(t){t.preventDefault()})}),$(document).ready(function(){$("#priceFilter1").change(function(){var t=parseInt($("#priceFilter1").val()),e=$("a[data-price]");e.each(function(){$(this).attr("data-price")<t?$(this).parent().parent().hide(500):$(this).parent().parent().show(500)})}),$("#priceFilter2").change(function(){var t=parseInt($("#priceFilter2").val()),e=$("a[data-price]");e.each(function(){$(this).attr("data-price")>t?$(this).parent().parent().hide(500):$(this).parent().parent().show(500)})}),$("#nameFilter").change(function(){var t=String($("#nameFilter").val()).toLowerCase(),e=$("a[data-name]");e.each(function(){t?String($(this).attr("data-name")).toLowerCase()!=t?$(this).parent().parent().hide(500):String($(this).attr("data-name")).toLowerCase()==t&&$(this).parent().parent().show(500):$(this).parent().parent().show(500)})}),$("#nameFilter").change(function(){jQuery.expr[":"].Contains=function(t,e,a){return(t.textContent||t.innerText||"").toUpperCase().indexOf(a[3].toUpperCase())>=0};var t=$(this).val(),e=$("a[data-name]").attr("data-name");return t?($(e).find("a:not(:Contains("+t+"))").parent().hide(500),$(e).find("a:Contains("+t+")").parent().show(500)):$(list).find("a").parent().parent().show(),!1}),localStorage.getItem("likes")>0&&(localStorage.getItem("likes")>1&&localStorage.setItem("likes",1),$(".mainLike").addClass("liked2")),$(".mainLike").click(function(){count++,count>1&&(count=1),$(this).addClass("liked2"),$("#forMainLike").html(count),localStorage.setItem("likes",count)}),$(".no-like").click(function(){$(this).toggleClass("liked")});var t=function(){$(".article").click(function(){$(this).children(".description").toggle(),$(".current").removeClass("current"),$(this).addClass("current")}),$(document).keyup(function(t){var e=$(".current");if(79===t.which)$(".current").children(".description").toggle();else if(78===t.which){var a=e.next();e.removeClass("current"),a.addClass("current")}else if(80===t.which){var n=e.prev();e.removeClass("current"),n.addClass("current")}})};$(document).ready(t)});