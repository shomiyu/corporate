jQuery(function ($) {
  $("#js-button").on("click", function () {
    if ($(this).hasClass("is-active")) {
      // is-activeがついていたら
      $(this).removeClass("is-active");
      $("#js-menu").removeClass("is-active");
    } else {
      // is-activeがついていなかったら
      $(this).addClass("is-active");
      $("#js-menu").addClass("is-active");
    }
  });
});
