/**
 * Theme: Adminox Admin Template
 * Author: Coderthemes
 * Module/App: Main Js
 */

(function($) {
  "use strict";

  function initSlimscrollMenu() {
    $(".slimscroll-menu").slimscroll({
      height: "auto",
      position: "right",
      size: "5px",
      color: "#9ea5ab",
      wheelStep: 5
    });
  }

  function initSlimscroll() {
    $(".slimscroll").slimscroll({
      height: "auto",
      position: "right",
      size: "5px",
      color: "#9ea5ab"
    });
  }

  function initMetisMenu() {
    //metis menu
    $("#side-menu").metisMenu();
  }

  function initLeftMenuCollapse() {
    // Left menu collapse
    $(".button-menu-mobile").on("click", function(event) {
      event.preventDefault();
      $("body").toggleClass("enlarged");
    });
  }

  // function initEnlarge() {
  //     if ($(window).width() < 1025) {
  //         $('body').addClass('enlarged');
  //     } else {
  //         $('body').removeClass('enlarged');
  //     }
  // }

  function initActiveMenu() {
    // === following js will activate the menu in left side bar based on url ====
    $("#sidebar-menu a").each(function() {
      if (this.href == window.location.href) {
        $(this).addClass("active");
        $(this)
          .parent()
          .addClass("active"); // add active to li of the current link
        $(this)
          .parent()
          .parent()
          .addClass("in");
        $(this)
          .parent()
          .parent()
          .prev()
          .addClass("active"); // add active class to an anchor
        $(this)
          .parent()
          .parent()
          .parent()
          .addClass("active");
        $(this)
          .parent()
          .parent()
          .parent()
          .parent()
          .addClass("in"); // add active to li of the current link
        $(this)
          .parent()
          .parent()
          .parent()
          .parent()
          .parent()
          .addClass("active");
      }
    });
  }

  function init() {
    initSlimscrollMenu();
    initSlimscroll();
    initMetisMenu();
    initLeftMenuCollapse();
    // initEnlarge();
    initActiveMenu();
  }

  $(function() {
    /* gallery horizontal scroll */
    let mainScroll = 30,
      vgScroll = 30;
    let mainBoard = $("#main-board");
    mainBoard.mouseover(function() {
      mainScroll = 30;
    });

    $(".gallery-carousel").mousewheel(function(event, delta) {
      mainScroll = 0;
      this.scrollLeft -= delta * vgScroll;
      event.preventDefault();
    });

    /* Main board horizontal scroll */
    mainBoard.mousewheel(function(event, delta) {
      this.scrollLeft -= delta * mainScroll;

      event.preventDefault();
    });

    /* vsl horizontal scroll */
    $(".video-slider").mousewheel(function(event, delta) {
      mainScroll = 0;
      this.scrollLeft -= delta * vgScroll;
      event.preventDefault();
    });

    /* Timeline vertical scroll */
    $(".timeline-vertical-scroll").mousewheel(function(
      event,
      delta,
      deltaX,
      deltaY
    ) {
      if (delta < 0)
        $(".timeline-vertical-scroll").scrollTop(
          $(".timeline-vertical-scroll").scrollTop() + 65
        );
      else if (delta > 0)
        $(".timeline-vertical-scroll").scrollTop(
          $(".timeline-vertical-scroll").scrollTop() - 65
        );
      return false;
    });

    /* Notification vertical scroll */
    $(".notification-vertical-scroll").mousewheel(function(
      event,
      delta,
      deltaX,
      deltaY
    ) {
      if (delta < 0)
        $(".notification-vertical-scroll").scrollTop(
          $(".notification-vertical-scroll").scrollTop() + 65
        );
      else if (delta > 0)
        $(".notification-vertical-scroll").scrollTop(
          $(".notification-vertical-scroll").scrollTop() - 65
        );
      return false;
    });

    /* Podcast vertical scroll */
    $(".podcast-vertical-scroll").mousewheel(function(
      event,
      delta,
      deltaX,
      deltaY
    ) {
      if (delta < 0)
        $(".podcast-vertical-scroll").scrollTop(
          $(".podcast-vertical-scroll").scrollTop() + 65
        );
      else if (delta > 0)
        $(".podcast-vertical-scroll").scrollTop(
          $(".podcast-vertical-scroll").scrollTop() - 65
        );
      return false;
    });

    /* Archive vertical scroll */
    $(".archive-vertical-scroll").mousewheel(function(
      event,
      delta,
      deltaX,
      deltaY
    ) {
      if (delta < 0)
        $(".archive-vertical-scroll").scrollTop(
          $(".archive-vertical-scroll").scrollTop() + 65
        );
      else if (delta > 0)
        $(".archive-vertical-scroll").scrollTop(
          $(".archive-vertical-scroll").scrollTop() - 65
        );
      return false;
    });

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
    let currentZoom = 1;
    $(".zoom-in").click(function() {
      mainBoard.animate({ zoom: (currentZoom += 0.1) }, "slow");
    });
    $(".zoom-out").click(function() {
      if (currentZoom > 1) {
        mainBoard.animate({ zoom: (currentZoom -= 0.1) }, "slow");
      }
    });
    $("#btn_ZoomReset").click(function() {
      currentZoom = 1.0;
      mainBoard.animate({ zoom: 1 }, "slow");
    });

    

  });

  // init();
})(jQuery);
