// Infinite Social Wall
// 7.29.2012
//
// Philip Bjorge
// https://github.com/philipbjorge/Infinite-Social-Wall
// Dual MIT/BSD License
// http://modernizr.com/license/
//
//
(function($){
  var $container = $('section');

  if ($("time").length)
    $("time").timeago();
      
  $container.infinitescroll({
      loading: {
        img: "/images/loading.gif"
      },
      navSelector  : '#social-nav',    // selector for the paged navigation 
      nextSelector : '#social-nav a',  // selector for the NEXT link (to page 2)
      itemSelector : '.social-item',    // selector for all items you'll retrieve
      bufferPx     : 0
    },

    function( newElements ) {
      var $newElems = $( newElements ).css({ opacity: 0 });
        $("time").timeago();
        $newElems.animate({opacity: 1.0}, 1500);
    }
  );
})(jQuery);