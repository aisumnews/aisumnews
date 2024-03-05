$(document).ready(function () {

  // Check for click events on the navbar burger icon
  $(".navbar-burger").click(function () {

    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    $(".navbar-burger").toggleClass("is-active");
    $(".navbar-menu").toggleClass("is-active");

  });
  $(document).keydown(function(e) {
    console.log(e.keyCode);
    if (e.keyCode == 37) {
      //left arrow
      var href = $("#prev").attr('href');
      window.location.replace(href);
    }
    if (e.keyCode == 39) {
      //right arrow
      var href = $("#next").attr('href');
      window.location.replace(href);

    }
});
});