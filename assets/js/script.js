$(function() {
  $('.card').mouseenter(function() {
    $(this).css({'transition': '0.5s', 'transform': 'scale(1.05)'});
  })
  $('.card').mouseleave(function() {
    $(this).css({'transition': '0.5s', 'transform': 'scale(1)'});
  })
});