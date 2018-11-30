// ===== Navbar Scroll ====
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


// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});


// ===== Card Section Why choose us ==== 
$('.infos_left').click(function () {
	var focus = $(this).parent();
	focus.addClass('restaurant--active');	focus.find('.reservation_right').addClass('reservation_right--active');
	focus.find('.reservation_btn').addClass('reservation_btn--active');	
		focus.find('.reservation_btn').html('Détails');	
});

$('.reservation_btn').click(function () {
	var focus = $(this).parent();
	focus.addClass('restaurant--active');	focus.find('.reservation_right').addClass('reservation_right--active');
	focus.find('.reservation_btn').addClass('reservation_btn--active');	
		focus.find('.reservation_btn').html('Détails');	
});

$('.close_it').click(function () {
	var focus = $(this).parent();
	focus.removeClass('restaurant--active');	focus.find('.reservation_right').removeClass('reservation_right--active');
	focus.find('.reservation_btn').removeClass('reservation_btn--active');	
		focus.find('.reservation_btn').html('More...');	
});



// front Page Title
function init() {
    main.classList.add("loading");
    setTimeout(function() { main.classList.remove("loading"); }, 1800); 
  }

// service section load
function init_service() {
    var main_service = document.getElementById('main_service')
    main_service.classList.add("loading");
    setTimeout(function() { main_service.classList.remove("loading"); }, 2000); 
  }

  window.onload = function() {
    document.body.addEventListener('click', () => init());
    document.body.addEventListener('click', () => init_service());
      init();
      init_service();
  };

