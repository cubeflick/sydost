(function($) {

  Drupal.videoEmbedFieldOverlay = Drupal.videoEmbedFieldOverlay || {};

  /**
   * Finds the links to the videos and attaches the overlay behavior
   */
  Drupal.behaviors.videoEmbedFieldOverlay = {
    attach: function (context, settings) {
      $(document).ready(function() {
        // Check if domWindow exists
        if ($.isFunction($.openDOMWindow)) {
          // Find video overlay links
          // @TODO: use .once instead of :not
          // @see http://drupal.org/node/756722
          $('.video-overlay:not(.processed)', context).each(function (i) {
            var source = $(this).find('.video-overlay-source');
            $(source).hide();

            $(this).children('.video-overlay-thumbnail').children('a.overlay').click(function(){
              // Setup the DOM Window
              $.openDOMWindow({
                loader:1,
                loaderImagePath: Drupal.settings.basePath + Drupal.settings.video_embed_field_overlay.path + '/images/loading_128.png',
                loaderHeight:128,
                loaderWidth:128,
                width:640,
                height:360,
                windowSourceID:source
              });
              return false;
            });

            $(this).addClass('processed');
          });
        }
      });
    }
  }

})(jQuery);
