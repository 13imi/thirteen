$(window).on('load',function(){
    $(window).scroll(function (){
        $('.scroll-fade-in').each(function(){
            var scroll = $(window).scrollTop();

            if (scroll > 150){
                $(this).css("opacity","1" );
            } else {
                $(this).css("opacity","0" );
            }
        });
    });
});
