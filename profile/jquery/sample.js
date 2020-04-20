$(function () {
  //--------------------serviceBox非表示------------------

  var serviceBox = $(".service-box");
  serviceBox.hide();

  $(window).scroll(function () {
    serviceBox.fadeIn(6000);
    // if ($(window).scrollTop() < 380) {
    //   serviceBox.fadeOut();
    // }
  });

  // var ptop = $(".career-wrapper").offset().top;
  // var pbottom = ptop + $(".career-wrapper").outerHeight();
  // $(".sb-txt-1").html("<p>ptop</p>");

  /*要素移動アニメーション*/
  
  // $("#button1").on("load".function() { //読み込み、更新したら
	// 	$("#move-tab-article").animate({
	// 		marginLeft:'200px'//margin-leftをキャメルケースで書く
  //   })
    
	});




});

//   $(".service-box").animate({ opacity: 0 }, 2000);
// });
