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