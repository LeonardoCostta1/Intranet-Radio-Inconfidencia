

$(function(){
    
    alert("pegou");
});
$(function(){

$(".btn-play").click(function(){
    $(".timespace").animate({width: "100%"},10000);

});
});


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
             