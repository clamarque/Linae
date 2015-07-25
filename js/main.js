

  /*-- Scroll To JavaScript
    ================================================== --*/
$(function () {
    $('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});
  /*-- Scroll CSS JavaScript
    ================================================== --*/
/*
 $(document).ready(function(){
    $(window).scroll(function(){
        var y = $(window).scrollTop();
 
        if( y > 500 )
        {
            $(".navbar-default").css({'background-color':'#009688'});
            $(".navbar-default .navbar-nav > li > a").css({'color':'#FFF'});
            //$('#navbar').animate({ 'height': '60'}, {duration : 200, queue : false});
        } else {
            $(".navbar-default").css({'background-color':'transparent'});
            $(".navbar-default .navbar-nav > li > a").css({'color':'#FFF'});
            //$('#navbar').animate({ 'height': '51'}, {duration : 200, queue : false});

        }
 
        $('#result').html(y);
    });
})
*/