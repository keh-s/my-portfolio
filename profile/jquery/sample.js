$(function() {
  //--------------------スライドショー表示------------------


  
  

  // -------------------------モーダルウィンドウ-------------------
  $(".faq-fadeIn").click(function() {
    // faq-fadeInをclickすると
    $("body").append('<div id="faq-modal-bg"></div>'); //htmlのbody最後に"faq-modal-bg"(cssでプロパティ定義済みの黒い背景)を追加し

    modalResize(); //下で定義しているmodalResize関数を実行（modal-windowとブラウザの幅、高さを取得し、modal-windowが中央配置となる位置をcssに反映させる

    const target = "#" + $(this).attr("data-target"); // this（clickした対象）のdata-target属性の値（= modal1～)をattrで取得し、その頭に「#」を付与して、id="modal1"～と紐付けしてtargetに代入
    $(target).fadeIn("slow"); //id付与して個別に用意したモーダルウィンドウをゆっくり開く

    $("#faq-modal-bg").fadeIn("slow");

    // "faq-modal-wrapper"(モーダルウィンドウ）と"faq-modal-bg"(黒い背景)がゆっくりfadeIn

    $(".faq-modal,#faq-modal-bg").click(function() {
      //ウィンドウあるいは黒い背景（つまり画面のどこか）をクリックすると
      $(".faq-modal,#faq-modal-bg").fadeOut("slow", function() {
        //それらがゆっくりfadeOutし
        $("#faq-modal-bg").remove();
      }); //htmlのbodyの最後に追加したfaq-modal-bgを削除する
    });

    $(window).resize(modalResize); //①windowの幅、高さが変わった事を検知→引数にmodalResize（=関数）を受けて、以下を実行
    function modalResize() {
      //②modalResizeという名で関数定義、以下を実行
      var w = $(window).width(); //変更されたウィンドウ幅を取得し「w」に代入
      var h = $(window).height(); //変更されたウィンドウ高を取得し「h」に代入
      var cw = $(".faq-modal").outerWidth(); //モーダルウィンドウの幅を取得し「cw」に代入
      var ch = $(".faq-modal").outerHeight(); //モーダルウィンドウの高さを取得し「ch」に代入
      $(".faq-modal").css({
        //③モーダルウィンドウのcssにおいて以下の変更を行う
        left: (w - cw) / 2 + "px", //ウィンドウ幅からモーダルウィンドウ幅を引いて2で割った数値（=モーダルウィンドウが中央配置になる数値）をleft: pxに設定
        top: (h - ch) / 2 + "px" //ウィンドウ高さからモーダルウィンドウ高さを引いて2で割った数値（=モーダルウィンドウが中央配置になる数値）をtop: pxに設定
      });
    } //要するにここまでで「①window幅が変わったら、②windowのサイズを取得し、③modal-windowのサイズを元に中央配置となる位置を計算→modal-windowの配置位置をcssに反映」させる//
  });
});
