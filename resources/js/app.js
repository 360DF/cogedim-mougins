
require('./bootstrap');

$(document).ready(function(){
    
    $("#stickier").sticky({topSpacing:0, bottomSpacing: 0});
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
    $('body').append('<a href="#contact" id="contact-mobile" class="link_sticky mx-auto text-light contact-sticky js-scrollTo">Contactez-nous<img src="/img/icon-timer.png"></a>');
    $('.link_sticky').css({
    	'position'				:	'fixed',
    	'right'					:	'0',
    	'left'					:	'0',
    	'margin'				:	'0 auto',
    	//'padding'       : '0 20%',
    	'bottom'				:	'0',
    	'display'				:	'none',
    	'opacity'				:	'1',
    	'z-index'				:	'1500',
    	'width' : '100%',
      'height': '60px',
      'background-color' : '#1c1e1c',
      'color' : 'white',
      'text-decoration' : 'none',
      'text-transform' : 'uppercase',
      'line-height' : '60px',
    });
    
    $('#contact-mobile').click(function(e) {
      var page = $(this).attr('href'); 
        var speed = 750; 
        var offset = 100;
        $('html, body').animate( { scrollTop: $(page).offset().top - offset}, speed ); 
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
    $('.top_link').css({
    	'position'				:	'fixed',
    	'right'					:	'0',
    	'bottom'				:	'0',
    	'display'				:	'none',
    	'opacity'				:	'0.5',
    	'z-index'				:	'2000',
    	'width' : '60px',
      'height': '60px',
      'background-image': 'url(/img/arrow-white.svg)',
      'background-repeat' : 'no-repeat',
      'background-position' : '50% 50%',
      'background-color' : '$dark-grey',
    });
    
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
