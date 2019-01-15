require('./bootstrap');
require('./sticky-kit');

$(document).ready(function(){
   /// STICKER   
  $("#sticker").stick_in_parent()
});

$(document).ready(function(){
  
/// SCROLLto  
  $('.js-scrollTo').on('click', function() { 
      var page = $(this).attr('href'); 
      var speed = 750; 
      var offset = page == '#contact' ? 100 : 0;
      $('html, body').animate( { scrollTop: $(page).offset().top - offset}, speed ); 
      return false;
  });
    
/// FORM
  $('.action').click(function(e) {
    e.preventDefault();
    $('.action').toggleClass('checked');
    $(this).find('input').attr('checked', 'checked');
  })

/// CONTACT US
  $('body').append('<a href="#form-contact" id="contact-mobile" class="link_sticky mx-auto text-light contact-sticky js-scrollTo">Contactez-nous</a>');
  $('#contact-mobile').click(function(e) {
    var page = $(this).attr('href'); 
      var speed = 750; 
      var offset = 100;
      $('html, body').animate( { scrollTop: $(page).offset().top - 0}, speed ); 
      return false;
  });
  $(window).scroll(function(){
  	posScroll = $(document).scrollTop();
  	if(posScroll >=350) 
  		$('.link_sticky').fadeIn(600);
  	else
  		$('.link_sticky').fadeOut(600);
  });

/// RETURN TOP
  $('body').append('<a href="#top" class="top_link retour-top" title="Revenir en haut de page"></a>');
  $('.retour-top').click(function(e) {
    e.preventDefault();
    $('html, body').animate( { scrollTop: $('#top').offset().top}, 750 ); 
    
  })
  $(window).scroll(function(){
  	posScroll = $(document).scrollTop();
  	if(posScroll >=550) 
  		$('.top_link').fadeIn(600);
  	else
  		$('.top_link').fadeOut(600);
  });
    
// CHECK AND SET COOKIES
    var cookies = checkCookie();
    if(cookies == true) {
      $('.alert-cookies').removeClass('d-flex');
      $('.alert-cookies').addClass('d-none');
      //$('alert-cookies').addClass('d-flex');
    }
    
    $('#accept-cookies').click(function(e) {
      if(!checkCookie()) {
        setCookie('accept-cookies', true, 1000);
        $('.alert-cookies').removeClass('d-flex');
        $('.alert-cookies').addClass('d-none');
      }
    });
    
    function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
      var expires = "expires="+d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
  
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    
    function checkCookie() {
        var isAccepted = getCookie("accept-cookies");
        if (isAccepted != "") {
            return true;
        } else {
            return false;
        }
    }
});
