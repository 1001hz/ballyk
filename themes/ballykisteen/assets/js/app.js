(function($, window, document) {
  "use strict";


  /**
   * Dom Ready
   */
  $(document).ready(function(){

      $('.accordion').bind('click', function() {
          $(this).toggleClass('open');
          $(this).next().toggleClass('open');
      });

  });

}(window.jQuery, window, document));
(function($, window, document) {
  "use strict";


  /**
   * Dom Ready
   */
  $(document).ready(function(){

      $('.nav__hamburger').bind('click', function() {
          $(this).toggleClass('open');
          $('.nav__items').toggleClass('open');
      });

  });

}(window.jQuery, window, document));
(function($, window, document) {
  "use strict";


  /**
   * Dom Ready
   */
  $.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
    };

  $(document).ready(function(){

      $(window).scroll(function() {
        var aTop = $('.banner__logo').height();
        if($(this).scrollTop()>=aTop){
          $('.banner__image').removeClass('entering');
           $('.banner__image').addClass('leaving');
        }
        else if($('.banner__image').hasClass('leaving')){
          $('.banner__image').removeClass('leaving');
          $('.banner__image').addClass('entering');
        }

        var elem = $('.appear');
        elem.each(function(){
          if($(this).isInViewport()) {
            $(this).delay(400).addClass('visible');
          }
        })
        

      });

  });

}(window.jQuery, window, document));