$(function () {
  //--------------------serviceBox非表示------------------

  var serviceBox = $(".service-box");
  serviceBox.hide();

  $(window).scroll(function () {
    serviceBox.fadeIn(4000);
    // if $(this).scrollTop()<100){
    // serviceBox.fadeOut();
    // }
  });
});

//   $(".service-box").animate({ opacity: 0 }, 2000);
// });
