$(document).ready(function () {
  $('.dropdown .trigger-drop i').on('click', function () {
    $(this).toggleClass('fa-flip-vertical');
    $(this).parent().toggleClass('active');
    $('.dropdown .drop').toggle();
    $('.dropdown .drop .trigger-sub i').removeClass('fa-flip-vertical').parent().removeClass('active');
    $('.dropdown .drop .drop-sub').slideUp();
    return false;
  });
  $('.dropdown .drop .trigger-sub i').on('click', function () {
    $(this).toggleClass('fa-flip-vertical');
    $(this).parent().toggleClass('active');
    $('.dropdown .drop .drop-sub').slideToggle(150);
    return false;
  });
});
