$(".hover").mouseleave(function () {
  $(this).removeClass("hover");
});

$(function () {
  function reposition() {
    var modal = $(this),
      dialog = modal.find(".modal-dialog");
    modal.css("display", "block");

    dialog.css(
      "margin-top",
      Math.max(0, ($(window).height() - dialog.height()) / 2)
    );
    dialog.css(
      "margin-left",
      Math.max(0, ($(window).width() - dialog.width()) / 2)
    );
  }
  $(".modal").on("show.bs.modal", reposition);
  $(window).on("resize", function () {
    $(".modal:visible").each(reposition);
  });
});

$("#myModal").on("shown.bs.modal", function () {
  $("#myInput").trigger("focus");
});

document.onreadystatechange = function () {
  $("body").css("overflow", "hidden");
  var state = document.readyState;
  if (state == "interactive") {
    document.getElementById("contents").style.visibility = "hidden";
  } else if (state == "complete") {
    setTimeout(function () {
      $("body").css("overflow", "visible");
      document.getElementById("interactive");
      document.getElementById("load").style.visibility = "hidden";
      document.getElementById("contents").style.visibility = "visible";
    }, 100);
  }
};

$(document).on('click', '.toggle-password', function () {

  $(this).toggleClass("fa-eye fa-eye-slash");

  var input = $("#pass_log_id1");
  input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')

  var input = $("#pass_log_id2");
  input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')

  var input = $("#pass_log_id3");
  input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
});