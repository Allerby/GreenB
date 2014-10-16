// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Prevent default action when clicking on userlogin link
$('a#userLogin').on('click', function(e) {
    e.preventDefault();
});

// add class of hover to nav items on mouseover
$(".navbar-default .nav li").mouseover(function() {
    $(this).addClass ('hover');
}).mouseleave(function() {
    $(this).removeClass ('hover');
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

// Toggle Search Bar
$('#toggleSearch').click(function(e) {
    e.preventDefault();
    $('.navbar > .container').fadeToggle("slow");
    $('#searchForm').fadeToggle("slow");
});

// Go back to main navigation
$('#searchClose').click(function(e) {
    e.preventDefault();
    $('#searchForm').fadeToggle("slow");
    $('.navbar > .container').fadeToggle("slow");
});

// Unleash ze Shopping Cart!
$(document).ready(function() {
    $('#shoppingCart').sidr({
        side: 'right'
    });
});

// Hide ze Cart...
$('#sidr #sidrClose').click(function(e) {
    e.preventDefault();
    $.sidr('close', 'sidr');
});

//Close shopping Cart on Checkout
$('#checkOut').click(function(e) {
    $.sidr('close', 'sidr');
});

//OrganicTabs
$(document).ready(function() {
    $("#tabWrap").organicTabs({
        "speed": 200
    });
});


$(document).ready(function() {

    var attr = $('.cartItem');
    var attrAftr = $('.cartItem:after');
    attrHeight = $('.cartItem').offset().top;


    //Give cart item a targetable before
    attr.addClass('change').attr('data-content',' ');
    attr.on('click', function() {
        alert('click');
    });

    console.log(attrHeight);

    $(attrAftr).css('top', attrHeight);
});
// .hover(function(){
//
// });

$('#tab-one .shop-link').on('click', function(e) {
    e.preventDefault();
    var shopItem = $(this);
    var itemBlock = shopItem.parent('.shop-item');
    var itemName = itemBlock.find('h4').text();
    console.log(itemName);

    if ($(itemBlock).children('li').length > 0) {
      $.sidr('open');
      var shopLi = itemBlock.find('li');
      setTimeout(function(){
        shopLi.appendTo('#sidrList');
      }, 1000)
    }
    else {
      alert('Sorry we are currently out of stock of ' + itemName);
    }
});

$()

// Credit to http://www.codrops.com for the idea
// Header animate on offset from top
var cbpAnimatedHeader = (function() {

  var docElem = document.documentElement,
    header = document.querySelector( '.navbar-default' ),
    didScroll = false,
    changeHeaderOn = 300;

  function init() {
    window.addEventListener( 'scroll', function( event ) {
      if( !didScroll ) {
        didScroll = true;
        setTimeout( scrollPage, 250 );
      }
    }, false );
  }

  function scrollPage() {
    var sy = scrollY();
    if ( sy >= changeHeaderOn ) {
      classie.add( header, 'navbar-shrink' );
    }
    else {
      classie.remove( header, 'navbar-shrink' );
    }
    didScroll = false;
  }

  function scrollY() {
    return window.pageYOffset || docElem.scrollTop;
  }

  init();

})();
