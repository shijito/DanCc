$(function () {
  $('.search_conditions').click(function () {
    $('.search_conditions_inner').slideToggle();
    $('.arrow').toggleClass("rotate");
  });

  $('.subject_edit_btn').click(function () {
    $('.subject_inner').slideToggle();
    $('.arrow').toggleClass("rotate");
  });

})