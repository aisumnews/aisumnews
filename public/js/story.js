$(document).ready(function () {
  // Check for click events on the navbar burger icon
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