/**
 * Theme: Adminox Admin Template
 * Author: Coderthemes
 * Module/App: Main Js
 */

(function($) {
  $(function() {
    /* gallery horizontal scroll */
    // let mainScroll = 30,
    vgScroll = 30;
    // let mainBoard = $("#main-board");
    // mainBoard.mouseover(function() {
    //   mainScroll = 30;
    // });

    $(".gallery-carousel").mousewheel(function(event, delta) {
      mainScroll = 0;
      this.scrollLeft -= delta * vgScroll;
      event.preventDefault();
    });

    /* Main board horizontal scroll */
    // mainBoard.mousewheel(function(event, delta) {
    //   this.scrollLeft -= delta * mainScroll;

    //   event.preventDefault();
    // });

    /* vsl horizontal scroll */
    $(".video-slider").mousewheel(function(event, delta) {
      mainScroll = 0;
      this.scrollLeft -= delta * vgScroll;
      event.preventDefault();
    });

    /* Timeline vertical scroll */
    // $(".timeline-vertical-scroll").mousewheel(function(
    //   event,
    //   delta,
    //   deltaX,
    //   deltaY
    // ) {
    //   if (delta < 0)
    //     $(".timeline-vertical-scroll").scrollTop(
    //       $(".timeline-vertical-scroll").scrollTop() + 65
    //     );
    //   else if (delta > 0)
    //     $(".timeline-vertical-scroll").scrollTop(
    //       $(".timeline-vertical-scroll").scrollTop() - 65
    //     );
    //   return false;
    // });

    /* Notification vertical scroll */
    // $(".notification-vertical-scroll").mousewheel(function(
    //   event,
    //   delta,
    //   deltaX,
    //   deltaY
    // ) {
    //   if (delta < 0)
    //     $(".notification-vertical-scroll").scrollTop(
    //       $(".notification-vertical-scroll").scrollTop() + 65
    //     );
    //   else if (delta > 0)
    //     $(".notification-vertical-scroll").scrollTop(
    //       $(".notification-vertical-scroll").scrollTop() - 65
    //     );
    //   return false;
    // });

    /* Podcast vertical scroll */
    // $(".podcast-vertical-scroll").mousewheel(function(
    //   event,
    //   delta,
    //   deltaX,
    //   deltaY
    // ) {
    //   if (delta < 0)
    //     $(".podcast-vertical-scroll").scrollTop(
    //       $(".podcast-vertical-scroll").scrollTop() + 65
    //     );
    //   else if (delta > 0)
    //     $(".podcast-vertical-scroll").scrollTop(
    //       $(".podcast-vertical-scroll").scrollTop() - 65
    //     );
    //   return false;
    // });

    /* Archive vertical scroll */
    // $(".archive-vertical-scroll").mousewheel(function(
    //   event,
    //   delta,
    //   deltaX,
    //   deltaY
    // ) {
    //   if (delta < 0)
    //     $(".archive-vertical-scroll").scrollTop(
    //       $(".archive-vertical-scroll").scrollTop() + 65
    //     );
    //   else if (delta > 0)
    //     $(".archive-vertical-scroll").scrollTop(
    //       $(".archive-vertical-scroll").scrollTop() - 65
    //     );
    //   return false;
    // });

    /* Right tools hiding effect */
    //   $(".gallery")
    //     .mouseenter(function() {
    //       $(".right-tools").css("z-index", "0");
    //       $(".right-tools").css("opacity", "0.3");
    //     })
    //     .mouseleave(function() {
    //       $(".right-tools").css("z-index", "99");
    //       $(".right-tools").css("opacity", "1");
    //     });

    /* Zoom and zoom out main container */
    // let currentZoom = 1;
    // $(".zoom-in").click(function() {
    //   mainBoard.animate({ zoom: (currentZoom += 0.1) }, "slow");
    // });
    // $(".zoom-out").click(function() {
    //   if (currentZoom > 1) {
    //     mainBoard.animate({ zoom: (currentZoom -= 0.1) }, "slow");
    //   }
    // });
    // $("#btn_ZoomReset").click(function() {
    //   currentZoom = 1.0;
    //   mainBoard.animate({ zoom: 1 }, "slow");
    // });

    /* Drag scroll screen */
    $.dragScroll = function(options) {
      var settings = $.extend(
        {
          scrollVertical: true,
          scrollHorizontal: true,
          cursor: null
        },
        options
      );

      var clicked = false,
        clickY,
        clickX;

      var getCursor = function() {
        if (settings.cursor) return settings.cursor;
        if (settings.scrollVertical && settings.scrollHorizontal) return "move";
        if (settings.scrollVertical) return "row-resize";
        if (settings.scrollHorizontal) return "col-resize";
      };

      var updateScrollPos = function(e, el) {
        $(".dashboard").css("cursor", getCursor());
        var $el = $(el);
        /* Code for scroll vertically */
        settings.scrollVertical &&
          $el.scrollTop($el.scrollTop() + (clickY - e.pageY));

        /* Code for scroll horizontal */
        settings.scrollHorizontal &&
          $el.scrollLeft($el.scrollLeft() + (clickX - e.pageX));
      };

      $(".dashboard").on({
        mousemove: function(e) {
          clicked && updateScrollPos(e, this);
        },
        mousedown: function(e) {
          clicked = true;
          clickY = e.pageY;
          clickX = e.pageX;
        },
        mouseup: function() {
          clicked = false;
          $(".dashboard").css("cursor", "auto");
        }
      });
    };
    $.dragScroll();

    $("#dismiss, .overlay").on("click", function() {
      $("#sidebar").removeClass("active");
      $(".overlay").removeClass("active");
    });

    $("#sidebarCollapse").on("click", function() {
      $("#sidebar").addClass("active");
      $("#sidebar").css("overflow", "visible");
      $(".overlay").addClass("active");
      $(".collapse.in").toggleClass("in");
      $("a[aria-expanded=true]").attr("aria-expanded", "false");
    });

    $(".dashboard").animate({ scrollLeft: 500 }, 1000);
  });

  // init();
})(jQuery);
