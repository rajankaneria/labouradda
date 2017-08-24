$(function(){
  $(".login-cont").height($(window).height() - 280);
});


window.onresize = function() {
    $(".login-cont").height($(window).height() - 280);
};
