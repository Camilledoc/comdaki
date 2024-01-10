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

//animation + page prestation 
$(".plus-1").click(function(){
    $(".paragraphe-plus-1").slideToggle();
  });

  $(".plus-2").click(function(){
    $(".paragraphe-plus-2").slideToggle();
  });

  $(".plus-3").click(function(){
    $(".paragraphe-plus-3").slideToggle();
  });

  $(".plus-4").click(function(){
    $(".paragraphe-plus-4").slideToggle();
  });



// Filtres en AJAX 
$(".taxonomy-categorie_item").on('change', function(event){
    event.preventDefault();
    ajaxRequest();
});

$(".taxonomy-order_item").on('change', function(event){
    event.preventDefault();
    ajaxRequest();
});

function ajaxRequest(){
    // Récupère la valeur sélectionnée dans le menu déroulant des catégories
    let selectedCategorie = $('.taxonomy-categorie_item').val();
    let selectedOrder = $('.taxonomy-order_item').val();

    $.ajax({
        type:'POST', 
        url: comdaki_js.ajax_url,
        data:{
            action:'request_projet_portofolio', 
            categorie: selectedCategorie, // Envoie la catégorie sélectionnée au serveur
            order : selectedOrder, // Envoie l'ordre sélectionné au serveur
        }, 
        success:function(response){
            $('.portefolio_catalogue').html(response);
        },
    });
}







//animation cercle page d'accueil  
const $cercle1 = $('.vague-conteneur-a-propos');
const initialPositionCercle1 = 2124

// Obtenir la position verticale de l'élément 
const positionYcercle1 = $cercle1.offset().top;
//console.log(positionYcercle1); 
/*
$(document).scroll(function() {
    let scrollPercent = ($(window).scrollTop() / ($(document).height() - $(window).height())) * 100;
    //console.log(scrollPercent);
    if (scrollPercent > 76.5) {
        $cercle1.css('top', (initialPositionCercle1 - ((scrollPercent - 76.5) * 0.2)) + 'px');
      }
     /*if (scrollPercent > 100) {
        $cercle1.css('top', '1145px');
      }*/
//});

/*
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
});*/
})(jQuery);