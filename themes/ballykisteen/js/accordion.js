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