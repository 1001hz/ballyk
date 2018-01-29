(function($, window, document) {
  "use strict";


  /**
   * Dom Ready
   */
  $(document).ready(function(){

      $('.nav__hamburger').bind('click', function() {
          $(this).toggleClass('open');
          $('.nav__items').toggleClass('open');
          $('body').toggleClass('menu-open');
      });

      $('.menu-item-has-children > a').bind('click', function(e){
        e.preventDefault();
        $(this).parent().toggleClass('open');
      })


  });

}(window.jQuery, window, document));