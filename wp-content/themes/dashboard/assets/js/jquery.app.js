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

    /* Charts container mousewheel scroll */
    $(".charts-container").mousewheel(function(event, delta) {
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
    // $.dragScroll = function(options) {
    //   var settings = $.extend(
    //     {
    //       scrollVertical: true,
    //       scrollHorizontal: true,
    //       cursor: null
    //     },
    //     options
    //   );

    //   var clicked = false,
    //     clickY,
    //     clickX;

    //   var getCursor = function() {
    //     if (settings.cursor) return settings.cursor;
    //     if (settings.scrollVertical && settings.scrollHorizontal) return "move";
    //     if (settings.scrollVertical) return "row-resize";
    //     if (settings.scrollHorizontal) return "col-resize";
    //   };

    //   var updateScrollPos = function(e, el) {
    //     $(".dashboard").css("cursor", getCursor());
    //     var $el = $(el);
    //     /* Code for scroll vertically */
    //     settings.scrollVertical &&
    //       $el.scrollTop($el.scrollTop() + (clickY - e.pageY));

    //     /* Code for scroll horizontal */
    //     settings.scrollHorizontal &&
    //       $el.scrollLeft($el.scrollLeft() + (clickX - e.pageX));
    //   };

    //   $(".dashboard").on({
    //     mousemove: function(e) {
    //       clicked && updateScrollPos(e, this);
    //     },
    //     mousedown: function(e) {
    //       clicked = true;
    //       clickY = e.pageY;
    //       clickX = e.pageX;
    //     },
    //     mouseup: function() {
    //       clicked = false;
    //       $(".dashboard").css("cursor", "auto");
    //     }
    //   });
    // };
    // $.dragScroll();

    // $("#dismiss, .overlay").on("click", function() {
    //   $("#sidebar").removeClass("active");
    //   $(".overlay").removeClass("active");
    // });

    // $("#sidebarCollapse").on("click", function() {
    //   $("#sidebar").addClass("active");
    //   $("#sidebar").css("overflow", "visible");
    //   $(".overlay").addClass("active");
    //   $(".collapse.in").toggleClass("in");
    //   $("a[aria-expanded=true]").attr("aria-expanded", "false");
    // });

    $(".dashboard").animate({ scrollLeft: 600 }, 1000);

    // $(".analytics-charts, .charts-container").dragscrollable({
    //   dragSelector: "a",
    //   acceptPropagatedEvent: false
    // });

    document.onreadystatechange = function() {
      let state = document.readyState;
      if (state == "interactive") {
        // $('#loader').hide();
      }
    };

    function createModel(model_id, title) {
      //get the total number of existing dialog windows plus one (1)
      var div_count = $(".dialog_window").length + 1;

      //generate a unique id based on the total number
      var div_id = "dialog-" + model_id;

      //get the title of the new window from our form, as well as the content
      // var div_title = $('#new_window_title').val();
      // var div_content = $('#new_window_content').val();

      //append the dialog window HTML to the body
      $("body").append(
        '<div class="dialog_window" id="' +
          div_id +
          '" title="' +
          title +
          '"><div class="infinite"><div class="pace pace-active"><div class="pace-activity" style="display:none"></div> </div> </div><div class="vc-main" id="' +
          model_id +
          '"></div></div>'
      );

      //initialize our new dialog
      var dialog = $("#" + div_id).dialog({
        width: "auto",
        height: "auto",
        "min-height": "100px",
        "max-height": "250px",
        "z-index": "10",
        autoOpen: true
      });
    }

    /* Gallery logic */
    gallery = $(".gl");
    for (i = 0; i < gallery.length; i++) {
      gallery[i].addEventListener("click", function() {
        g_id = $(this).attr("g-id");
        g_title = $(this).attr("g-title");
        /* Create model */
        if ($("#" + "gallery-" + g_id).length) {
          $("#dialog-" + "gallery-" + g_id).dialog("open");
        } else {
          createModel("gallery-" + g_id, g_title);
          // Ajax call
          loadArticle(g_id, "gallery");
        }
      });
    }

    // Podcast player logic
    pd_player = $(".pd-player");
    for (i = 0; i < pd_player.length; i++) {
      pd_player[i].addEventListener("click", function() {
        pd_title = $(this).attr("pd-title");
        pd_id = $(this).attr("pd-id");
        /* Create model */
        if ($("#" + "podcast-" + pd_id).length) {
          $("#dialog-" + "podcast-" + pd_id).dialog("open");
        } else {
          createModel("podcast-" + pd_id, pd_title);
          // Ajax call
          loadArticle(pd_id, "podcast");
        }
      });
    }

    /* Video carousel logic */
    v_player = $(".v-player");
    for (i = 0; i < v_player.length; i++) {
      v_player[i].addEventListener("click", function() {
        v_title = $(this).attr("v-title");
        v_id = $(this).attr("v-id");
        /* Create model */
        if ($("#" + "video-" + v_id).length) {
          $("#dialog-" + "video-" + v_id).dialog("open");
        } else {
          createModel("video-" + v_id, v_title);
          // Ajax call
          loadArticle(v_id, "video");
        }
      });
    }

    /* insight logic */
    insight = $(".insight");
    for (i = 0; i < insight.length; i++) {
      insight[i].addEventListener("click", function() {
        in_title = $(this).attr("in-title");
        in_id = $(this).attr("in-id");
        /* Create model */
        if ($("#" + "insight-" + in_id).length) {
          $("#dialog-" + "insight-" + in_id).dialog("open");
        } else {
          createModel("insight-" + in_id, in_title);
          // Ajax call
          loadArticle(in_id, "insight");
        }
      });
    }

    /* archive login */
    archive = $(".archive-f");
    for (i = 0; i < archive.length; i++) {
      archive[i].addEventListener("click", function() {
        a_title = $(this).attr("a-title");
        a_id = $(this).attr("a-id");
        /* Create model */
        if ($("#" + "archive-" + a_id).length) {
          $("#dialog-" + "archive-" + a_id).dialog("open");
        } else {
          createModel("archive-" + a_id, a_title);
          // Ajax call
          loadArticle(a_id, "archive");
        }
      });
    }

    // Ajax calling method
    function loadArticle(id, type) {
      $(".pace-activity").show("fast");
      $.ajax({
        url: "/ds/wp-admin/admin-ajax.php",
        type: "POST",
        data: "action=infinite_scroll&id=" + id + "&type=" + type,
        success: function(data) {
          $(".pace-activity").hide("1000");
          $("#" + type + "-" + id).append(data);
        }
      });
      return false;
    }
  });

  // init();
})(jQuery);
