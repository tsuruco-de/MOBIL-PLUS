$(function () {
    /*=================================================
    スマホメニュー
===================================================*/
// ハンバーガーメニューのクリックイベント
$(".toggle_btn").on("click", function () {
    ($("#header").toggleClass("open"));
    });
    $("#mask").on("click", function () {
    // #maskをクリックしたときに実行する
    $("#header").toggleClass("open");
    });
    // リンクをクリックした時にメニューを閉じる
    $("#navi a").on("click", function () {
      // #navi aをクリックしたときに実行する
    $("#header").toggleClass("open");
    });

    // 以下のようにまとめてかくとコードが簡略化する
    // $(".toggle_btn , #mask , #navi a").on("click", function () {
    //     ($("#header").toggleClass("open"));
    // });
/*=================================================
スムーススクロール
===================================================*/
    // ページ内リンクのイベント
    $('a[href^="#"]').click(function () {
      // aタグのhref属性の値が#で始まる要素をクリックした時に実行する
      // 'a[href^=#]'：「aタグのhref属性で値が#で始まる要素だったとき」
      // リンクを取得 クリックされたaタグのhref属性の中身をhrefという変数に代入する （#menuなど）をhrefという変数に代入する
    let href = $(this).attr("href");
      // this: クリックされたaタグ $('a[href^=#]')
      // .attr()は、要素の属性の値を取得する

      // ジャンプ先のid名をセット href == "#" 】 変数hrefの値が"#"【 || 】 または【href == ""】  であれば（【？】）
      // 【 $('html'); 】 へのリンク（≒ページトップ）,そうでなければ（【:】）【 $(href); 】 変数hrefの中身が到着地点になる
    let target = $(href == "#" || href == "" ? "html" : href);

      // トップからジャンプ先の要素までの距離を取得 （id=menuなどがページの一番上から何pxかを取得）
    let position = target.offset().top;
      // offset()は表示位置を取得する offset().topでページの一番上から何pxかを取得

      // animateでスムーススクロールを行う ページトップからpositionだけスクロールする
      // 600はスクロール速度で単位はミリ秒 swingはイージングのひとつ
    $("html, body").animate({ scrollTop: position }, 600, "swing");
    return false;
    });
    // {scrollTop:position}で、ページトップからposition分だけスクロールするという指定をしているいる。
    // linear：常に同じ速さで動く swing：始めはゆっくり動いて、途中はちょっと速め、最後はゆっくりと動く
    // 出発地点をクリックすると、URLの末尾にIDタグ(例.https://coffee.com#menu)が付与されてしまう。
    // これを防ぐために、最後に１文return falseを追加します。
});