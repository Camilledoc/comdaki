(function($){
 //menu burger
 // hasClass
function hasClass(elem, className) {
    return elem.hasClass(className);
}

// addClass
function addClass(elem, className) {
    elem.addClass(className);
}

// removeClass
function removeClass(elem, className) {
    elem.removeClass(className);
}

// toggleClass
function toggleClass(elem, className) {
    elem.toggleClass(className);
}       

var theToggle = $('#nav-buger');
theToggle.on('click', function() {
    toggleClass($(this), 'open');
    return false;
});


//animation vague 
const $vague1 = $('.vague-1');
const initialPositionVague1 = 34.953125

// Obtenir la position horizontale de l'élément 
const positionXVague1 = $vague1.offset().left;
  
// Utilisation de la position horizontale obtenue
console.log(positionXVague1); //

$(document).scroll(function() {
    let scrollPercent = ($(window).scrollTop() / ($(document).height() - $(window).height())) * 100;
    //console.log(scrollPercent);
    if (scrollPercent > 0.11) {
        $vague1.css('left', (initialPositionVague1 + ((scrollPercent - 0.11) * 14)) + 'px');
      }
      if (scrollPercent > 33) {
        $vague1.css('left', '500px');
      }
});
})(jQuery);