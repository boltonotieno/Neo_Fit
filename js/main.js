$(function() {
    var header = $(".nav-bar");
  
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("scrolled-bar");
        } else {
            header.removeClass("scrolled-bar");
        }
    });
});
   
