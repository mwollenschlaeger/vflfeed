// Infinite Social Wall
// 7.29.2012
//
// Philip Bjorge
// https://github.com/philipbjorge/Infinite-Social-Wall
// Dual MIT/BSD License
// http://modernizr.com/license/
//
//
(function(e){var t=e("section");e("time").length&&e("time").timeago();t.infinitescroll({loading:{img:"/images/loading.gif"},navSelector:"#social-nav",nextSelector:"#social-nav a",itemSelector:".social-item",bufferPx:0},function(t){var n=e(t).css({opacity:0});e("time").timeago();n.animate({opacity:1},1500)})})(jQuery);