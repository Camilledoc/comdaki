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
})(jQuery);