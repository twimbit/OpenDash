
/* Insight section loader hide */
window.onload = function() {
  $(".pace-activity").hide();
};

/* Fullscreen logic */
function toggleFullScreen(elem) {
  // ## The below if statement seems to work better ## if ((document.fullScreenElement && document.fullScreenElement !== null) || (document.msfullscreenElement && document.msfullscreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)) {
  if (
    (document.fullScreenElement !== undefined &&
      document.fullScreenElement === null) ||
    (document.msFullscreenElement !== undefined &&
      document.msFullscreenElement === null) ||
    (document.mozFullScreen !== undefined && !document.mozFullScreen) ||
    (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)
  ) {
    if (elem.requestFullScreen) {
      elem.requestFullScreen();
    } else if (elem.mozRequestFullScreen) {
      elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullScreen) {
      elem.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
    } else if (elem.msRequestFullscreen) {
      elem.msRequestFullscreen();
    }
  } else {
    if (document.cancelFullScreen) {
      document.cancelFullScreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitCancelFullScreen) {
      document.webkitCancelFullScreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    }
  }
}

/* Charts container mousewheel scroll */
$(".m-container").mousewheel(function(event, delta) {
  this.scrollLeft -= delta * 30;
  // event.preventDefault();
});

/* Charts container mousewheel scroll */
$("#dialog_window_minimized_container").mousewheel(function(event, delta) {
  this.scrollLeft -= delta * 30;
  event.preventDefault();
});

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

  $(".ui-dialog").css({
    "margin-right": "auto",
    "margin-left": "auto"
  });
}

/* Insight section loader hide */
window.onload = function() {
  $(".in-pace-activity").hide();
};

/* Insight section scrolling next and previous buttons */
$(".in-next").click(function() {
  var leftPos = $(".charts-container").scrollLeft();
  $(".charts-container").animate({ scrollLeft: leftPos + 200 }, 400);
});

$(".in-prev").click(function() {
  var leftPos = $(".charts-container").scrollLeft();
  $(".charts-container").animate({ scrollLeft: leftPos - 200 }, 400);
});

/* Create modals for widgets*/
function openModalMetro(id, title, cat_id) {
  /* if modal exist maximize */
  if ($("#dialog-" + id).length) {
    $("#dialog-" + id).dialog("open");
  } else {
    /* else create modal */
    createModel(id, title);
    // Ajax call
    loadArticle(id, cat_id);
  }
}

let site_url = window.location.origin + "/ds/wp-admin/admin-ajax.php";
// Ajax calling method for modals
function loadArticle(id, cat_id) {
  $(".pace-activity").show("fast");
  $.ajax({
    url: site_url,
    type: "POST",
    data: "action=metroModal&id=" + id + "&cat_id=" + cat_id,
    success: function(data) {
      $(".pace-activity").hide("1000");
      $("#" + id).append(data);
    }
  });
  return false;
}

// Ajax calling method for modals
function mdModalPosts(type, id, title) {
  $(".ui-dialog-title").text(title);
  $(".md-container").empty();
  $(".pace-activity").show("fast");
  if (type == "prev") {
    $.ajax({
      url: site_url,
      type: "POST",
      data: "action=metroModalNextPrev&id=" + id,
      success: function(data) {
        $(".pace-activity").hide("1000");
        $(".md-container").append(data);
      }
    });
  } else {
    $.ajax({
      url: site_url,
      type: "POST",
      data: "action=metroModalNextPrev&id=" + id,
      success: function(data) {
        $(".pace-activity").hide("1000");
        $(".md-container").append(data);
      }
    });
  }
}
