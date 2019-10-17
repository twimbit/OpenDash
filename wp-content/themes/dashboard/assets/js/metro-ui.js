/* Charts container mousewheel scroll */
$(".m-container").mousewheel(function(event, delta) {
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
function openModal(modal, id, title) {
  modalClass = $(modal);
  /* Create model */
  if ($("#" + modal + "-" + id).length) {
    $("#dialog-" + modal + "-" + id).dialog("open");
  } else {
    createModel(modal + "-" + id, title);
    // Ajax call
    loadArticle(id, modal);
  }
}

// Ajax calling method for modals
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
