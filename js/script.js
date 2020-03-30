$(document).ready(function(){
    $('.container p').hide();

$("h1").click(function(){
    $(this).next("p").slideToggle("slow").siblings("p:visible").slideUp("slow");
})
})

$(document).ready(function(){
    $('.button ul li ul').hide();
    $('.button ul li ').hover(
        function(){
            $(this).children('ul').slideDown(400);
        },
        function(){
            $(this).children('ul').slideUp(400);
        }
    )




  })