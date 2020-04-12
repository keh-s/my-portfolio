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

  var ptop = $(".career-wrapper").offset().top;
  var pbottom = ptop + $(".career-wrapper").outerHeight();
  $(".sb-txt-1").html(<p>ptop</p>);
});

//   $(".service-box").animate({ opacity: 0 }, 2000);
// });
