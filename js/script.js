
$(function(){

$(".btn-play").click(function(){
    $(".timespace").animate({width: "100%"},10000);

});
});

jQuery(document).ready(function($) {
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if ($(window).scrollTop() >= 20) {
           $('.nav').addClass('back');
        }else{
            $('.nav').removeClass('back');
        }
    });
});

    // Semicolon (;) to ensure closing of earlier scripting
    // Encapsulation
    // $ is assigned to jQuery
    ;(function($) {

         // DOM Ready
        $(function() {

            // Binding a click event
            // From jQuery v.1.7.0 use .on() instead of .bind()
            $('.ion-ios-settings').bind('click', function(e) {

                // Prevents the default action to be triggered. 
                e.preventDefault();

                // Triggering bPopup when click event is fired
                $('#tutoriais').bPopup();

            });

        });

    })(jQuery);



    // Semicolon (;) to ensure closing of earlier scripting
    // Encapsulation
    // $ is assigned to jQuery
    ;(function($) {

         // DOM Ready
        $(function() {

            // Binding a click event
            // From jQuery v.1.7.0 use .on() instead of .bind()
            $('.ion-ios-paper-outline').bind('click', function(e) {

                // Prevents the default action to be triggered. 
                e.preventDefault();

                // Triggering bPopup when click event is fired
                $('#folha-ponto').bPopup();

            });

        });

    })(jQuery);

// Semicolon (;) to ensure closing of earlier scripting
    // Encapsulation
    // $ is assigned to jQuery
    ;(function($) {

         // DOM Ready
        $(function() {

            // Binding a click event
            // From jQuery v.1.7.0 use .on() instead of .bind()
            $('.ion-ios-football-outline').bind('click', function(e) {

                // Prevents the default action to be triggered. 
                e.preventDefault();

                // Triggering bPopup when click event is fired
                $('#esporte-escala').bPopup();

            });

        });

    })(jQuery);


// Semicolon (;) to ensure closing of earlier scripting
    // Encapsulation
    // $ is assigned to jQuery
    ;(function($) {

         // DOM Ready
        $(function() {

            // Binding a click event
            // From jQuery v.1.7.0 use .on() instead of .bind()
            $('.ion-ios-speedometer-outline').bind('click', function(e) {

                // Prevents the default action to be triggered. 
                e.preventDefault();

                // Triggering bPopup when click event is fired
                $('#motorista-escala').bPopup();

            });

        });

    })(jQuery);

// Semicolon (;) to ensure closing of earlier scripting
    // Encapsulation
    // $ is assigned to jQuery
    ;(function($) {

         // DOM Ready
        $(function() {

            // Binding a click event
            // From jQuery v.1.7.0 use .on() instead of .bind()
            $('.ion-ios-mic-outline').bind('click', function(e) {

                // Prevents the default action to be triggered. 
                e.preventDefault();

                // Triggering bPopup when click event is fired
                $('#operadores-escala').bPopup();

            });

        });

    })(jQuery);






$(document).ready(function() {
    $('#example').DataTable();
} );


 $(document).ready(function(){

         $("#theTarget").skippr({
            transition: 'slide',
            speed: 1000,
            easing: 'easeOutQuart',
            navType: 'block',
            childrenElementType: 'div',
            arrows: true,
            autoPlay: true,
            autoPlayDuration: 5000,
            keyboardOnAlways: true,
            hidePrevious: false

        });
      });
             

    (function($){
        $(window).on("load",function(){
            $(".box-informativos-en").mCustomScrollbar();
        });
    })(jQuery);




$(function(){
    $('.dep').hover(function(){
        $(this).find(".depart-itens").show();
        },function(){
        $(this).find(".depart-itens").hide();
    });
    });




 $(document).ready(function(){

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    autoplay:true,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:5
        },
        1000:{
            items:8
        }
    }
});
 
});


$(function(){
    
    $(".chamado").hover(function(){
        $(".info-chamado").fadeToggle(200);
    });
});



jQuery(document).ready(function($) { 
    $(".scroll").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
   });
});


function printDocument(documentId) {
    var doc = document.getElementById(documentId);

    //Wait until PDF is ready to print    
    if (typeof doc.print === 'undefined') {    
        setTimeout(function(){printDocument(documentId);}, 1000);
    } else {
        doc.print();
    }
}

$(function()
  {
    $(".aba-player").click(function(){
        $(".player").slideToggle(200);
    });    
});

