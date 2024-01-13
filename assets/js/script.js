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

let theToggle = $('#nav-buger');
theToggle.on('click', function() {
    toggleClass($(this), 'open');
    return false;
});

//fermeture menu quand clic en dehors de la fenêtre
$(window).on('click', function(event){
    if(event.target == $(".menu-menu-principal-container")) {
       $(".#menu-toggle").css('display','none'); 
    }
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

//modale contact 

   // Clic sur le bouton contact dans le menu 
   $("#menu-item-16").on('click',function(event){
    event.preventDefault();
    $(".popup-overlay").css('display','flex');
    $("#menu-toggle").hide();
});

$("#contact").on('click',function(event){
    event.preventDefault();
    $(".popup-overlay").css('display','flex');
    $("#menu-toggle").hide();
});

$("#contact-a-propos").on('click',function(event){
    event.preventDefault();
    $(".popup-overlay").css('display','flex');
    $("#menu-toggle").hide();
});

//fermeture modale quand clic en dehors de la fenêtre
$(window).on('click', function(event){
    if(event.target == $(".popup-overlay")[0]) {
        $(".popup-overlay").css('display','none'); 
        $("#menu-toggle").show(); 
    }
});

//flèche scroll 
let arrow = $('#arrow');
  
$(window).scroll(function() {
  if ($(this).scrollTop() > 20) {
    arrow.fadeIn();
  } else {
    arrow.fadeOut();
  }
});

arrow.click(function() {
  $('body,html').animate({scrollTop : 0}, 500);
  return false;
});

})(jQuery);