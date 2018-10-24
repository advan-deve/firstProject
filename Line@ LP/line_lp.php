<?php

?>


<!DOCTYPE html>
<head>
	<meta charset="UTF-8">

	<script async="" src="https://www.google-analytics.com/analytics.js"></script><script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="./jquery.inview.min.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-63390857-18', 'auto');
	  ga('send', 'pageview');

	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/renew.css" type="text/css">
	<title>【画面】取引のコツを週1回配信！</title>
	<style>
	body{font:normal 15px/1.6em Meiryo,"MS PGothic",arial,sans-serif;color:#333;margin:0;background:#;}
	ul,li{margin:0;padding:0;list-style:none;}
	a{color:#00a9c7;}
	article,aside,details,figcaption,figure,footer,header,menu,nav,section{display:block;}
	body{width:100%;}
	img{max-width:100%;height:auto;}
	h1{padding:5px 15px;color:#;font-size:18px;font-weight:;}
	.content,.adwrap{padding:10px 15px;background:#fff;margin:0 7px 15px;border-radius:5px;}
	ul li a{display:block;border-top:1px solid #aaa;padding:8px;text-decoration:none;}
	h3,h2{margin:15px 0 15px;padding:0 5px ;background:#;border-left:5px solid #999;font-size:14px;}
	h4{margin:20px 0 0;padding:5px ;background:#F0F0F0;border-bottom:1px dotted #2F67EB;}
	table{border-collapse:collapse;border:0;}
	tr:nth-child(2n){background:#eee;}
	th{font-weight:bold;background:#2F67EB;color:#fff;}
	th,td{border:1px solid #ddd;padding:5px 10px;}
	.bgylw{background:#FFE566;}
	.red{color:red;}
	.backlink{margin:0 15px 45px;display:block;padding:15px 0;text-align:center;color:#fff;background:#515d78;text-decoration:none;}
	.mark{border: 2px solid #aaa;border-radius: 15px;color: #999;margin: 15px auto 10px;padding: 7px 0;width: 95%;text-decoration:none;display:block;text-align:center;}
	.mada{border: 2px solid #38b3e7;color: #25a7de;}

	.adwrap h2,.adwrap h3{border-color:#6ED14D;}

	.nii {
	    border: 1px solid #aaa;
	    border-radius: 3px;
	    box-shadow: 1px 1px #aaa;
	    box-sizing: border-box;
	    color: #666;
	    display: block;
	    height: 85px;
	    margin: 10px;
	    padding: 5px;
	    position: relative;
		font-size:12px;
		text-decoration:none;
		line-height:1.2em;
	}
	.nii img {
	    border-radius: 10px;
	    float: left;
	    margin: 0 10px 8px 0;
	    width: 70px;
	}
	.nii strong {
	    color: #333;
	    display: inline-block;
	    font-size: 16px;
	    font-weight: bold;
	    margin: 5px 0;
	}

	.nii span {
	    bottom: 7px;
	    color: #309300;
	    font-size: 12px;
	    position: absolute;
	    right: 7px;
	}
	#page-top {
	    position: fixed;
	    bottom: 0px;
	    right: 0px;
	    font-size: 77%;
	}
	#page-top a {
	    text-decoration: none;
	    color: #fff;
	    width: 50px;
	    padding: 5px 0;
	    text-align: center;
	    display: block;
	    border-radius: 5px;
	}
	#page-top a:hover {
	    text-decoration: none;
	}
	.tes img{width: 128px;}
	.tes{position: absolute;left:50%;top:50%;margin-left: -64px;margin-top: -64px;}
	.tes span{color:#fff;font-size:32px;}
	.test.tes{position: fixed;}
	.shi{position: absolute;top:32px;left:39px;}
	.bo{position: absolute;bottom:41px;left:70px;}
	</style>

	<script>
	$(function() {
		var startPos = 0,winScrollTop = 0;
		$(window).on('scroll',function(){
		    winScrollTop = $(this).scrollTop();
		    if (winScrollTop >= startPos) {
		    	$('.test').hide();
		    	$('.test2').hide();
		    } else {
		    	$('.test').show();
		    }

		    startPos = winScrollTop;
		});
		var startPos = 0,winScrollTop = 0;
		$(window).on('scroll',function(){
		    winScrollTop = $(this).scrollTop();
		    if (winScrollTop >= startPos) {
		        $('.site-header').addClass('hide');
		    } else {
		        $('.site-header').removeClass('hide');
		    }
		    startPos = winScrollTop;
		});
		$(".cv").click(function () {
			var fx = $(this).attr("title");
			//googleanalyticsイベント
			ga('send', 'event', 'adclick', fx,1);
			if(AndroidJS)AndroidJS._AdClick(fx);
		});
		$('#inviewTest').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
	            if (isInView) {
	              //要素が見えたときに実行する処理
	              <!--alert("");-->
				Android.kidoku();
	            } else {
	              //要素が見えなくなったときに実行する処理

	            }
	    });
	   var topBtn = $('#page-top');
	    topBtn.hide();
	    //スクロールが100に達したらボタン表示
	    $(window).scroll(function () {
	        if ($(this).scrollTop() > 100) {
	            topBtn.fadeIn();
	        } else {
	            topBtn.fadeOut();
	        }
	    });
	    //スクロールしてトップ
	    topBtn.click(function () {
	        $('body,html').animate({
	            scrollTop: 0
	        }, 500);
	        return false;
	    });
	});
	</script>

	</head>
  <body style="">
  		<h1>取引のコツを週1回配信！</h1>
  			<div class="content"><img class="alignnone size-full wp-image-2511" src="http://imakita-sangyou.com/wp/wp-content/uploads/2018/10/LP_head.jpg" alt=""><br>
  <div style="text-align: center;">※おかげさまで相談者急増中のため、当社の判断により募集を一旦締め切る可能性がございます。気になる方はお早めにご相談ください！</div><br>
  <center><a href="https://line.me/R/ti/p/%40geo8291c"><img class=" wp-image-1399 aligncenter" src="http://imakita-sangyou.com/wp/wp-content/uploads/2018/05/line.png" alt="" width="219" height="164"></a></center>&nbsp;<br>
  <div><br>
  <h2>みんなの疑問を即日解決</h2><br>
  <img class="alignnone wp-image-2452" src="http://imakita-sangyou.com/wp/wp-content/uploads/2018/10/iOS-の画像-1.jpg" alt="" width="272" height="479"><br>
  <br>
  平日10時～19時までは専門家が迅速に対応。疑問も即解決！<br>
  <h2>気軽にチャットできる！</h2><br>
  <img class="alignnone wp-image-2451" src="http://imakita-sangyou.com/wp/wp-content/uploads/2018/10/famIMGL1350_TP_V4.jpg" alt="" width="315" height="210"><br>
  <br>
  LINEでチャットならめんどくさいインストールもブックマークする必要もなし！<br>
  <h2>こんな人におすすめ！</h2><br>
  ・ググり方（調べ方）がよくわからない。<br>
  <br>
  ・文字を読み進めていくのが苦手だが、チャットは得意。<br>
  <br>
  ・計算式を連発されるとよく分からなくなる。<br>
  <br>
  <a href="https://line.me/R/ti/p/%40geo8291c"><img class="alignnone wp-image-1820" src="http://imakita-sangyou.com/wp/wp-content/uploads/2018/07/linetop.jpg" alt="" width="404" height="207"></a><br>
  <h2>累計6000人以上をFX市場に送り出したアドバンの「FX初心者ガイド」編集部によるLINEサポート！</h2><br>
  ・初心者でもわかりやすいサービス　第１位<br>
  ・実際に始められたFX学習サービス　第１位<br>
  ・疑問が解決できたFX学習サービス　第１位<br>
  「実査委託先：ゼネラルリサーチ」<br>
  <br>
  <img class="alignnone wp-image-2453" src="http://imakita-sangyou.com/wp/wp-content/uploads/2018/10/ss960x640_1.png" alt="" width="473" height="315"><br>
  <br>
  日々進化していくIT業界の中で、ユーザーさんの視点に立って、何が一番学びやすいのかを考えに考えました。<br>
  アプリは確かに「<strong>手軽に勉強できる</strong>」という点においてはいいのですが、それでは不完全だと気が付きました。<br>
  そもそもアプリで取引を開始したユーザーさんのすべてが、持っている疑問をすべて解決できたわけではないということに、気が付いたからです。<br>
  そこで<strong>「初心者のFX教室」のLINEを立ち上げました。</strong><br>
  <br>
  ここではユーザーのみなさんのちょっとした疑問にお答えすることが出来ます！<br>
  「バカみたいな質問だから」なんて思わないでください。<br>
  FXは普段使わない用語も多く、時には計算も必要なため、慣れるまでは難しいです。が、<strong>僕たちはみなさんの勝率が１％でも上がるように全力でサポートします！</strong><br>
  <br>
  みなさんのサポートの一環として、10月末まで「アンケートに答えてFX初心者向けの本がもらえる」キャンペーンを開催しています。<br>
  <br>
  LINEで皆さんのお声をお待ちしております！<br>
  <br>
  <a href="https://line.me/R/ti/p/%40geo8291c"><img class="alignnone wp-image-2454" src="http://imakita-sangyou.com/wp/wp-content/uploads/2018/10/アンケート2.jpg" alt="" width="370" height="185"></a><br>
  <br>
  </div>
  	<!--		<div id="change"></div>-->
  			<!-- <p id="page-top"><img width="50" height="50" src="http://imakita-sangyou.com/fx_saru/images/up.png"></p>-->
  			</div>	<!--
  	<div class="adwrap">
  	<h2>知っておくとお得！</h2>

  	FX取扱会社のなかには、オンラインで利用できる「デモトレード」を用意していることもあります。これは、実際の取引画面と同じものを使用し、仮想マネーで取引を行うというもの。<br><br>

  	ひと言で「FX取引」といっても、FX取扱会社ごとに、オンライン画面は違います。<br>
  	注文のしかたや決済のしかたのほか、チャートなどの相場を知るための画面の見方も、FX取扱会社によって、大きく異なっています。
  	<h5>バーチャルでFXは必須</h5>
  	そのため、新しく口座を開設しようとしている人たちに、まずは自社の取引を体験してもらおうというのがデモトレードの目的です。<br><br>

  	初心者の方は、まずデモを利用して見て、FX取引のコツを学ぶことをおすすめします。
  	<h3>バーチャル取引ができるFX口座</h3>
  	<a class="cv nii" title="DMM FX" target="_blank" href="http://princess-tv.com/c.php?c=kiwami_ios_dmmact">
  		<img border="0" src="http://imakita-sangyou.com/ios_fx3/img/dmmfx_icon.png">
  		<strong>DMM FX</strong><br>
  		バーチャルトレードがお試しいただけます
  		<span>口座開設無料</span>
  	</a>
  	<a class="nii cv" href="http://princess-tv.com/c.php?c=kiwami_ios_gaion" title="Gaitame Online" target="_blank">
  		<img src="img/onlineicon.jpg">
  		<strong>外為オンライン</strong><br>
  		バーチャルトレードがお試しいただけます
  		<span>口座開設無料</span>
  	</a>

  	</div>
  	-->

  	<!--<a href="1.php?back=1" class="backlink"><img src="img/backicon.png" style="margin:0 7px;vertical-align:middle;width:15px;">戻る</a>-->
  	<!--
  	<ul>
  	<li><a href="/ios_fx3/article.php?postid=2552">みんなの疑問もチャットで即日解決！</a></li><li><a href="/ios_fx3/article.php?postid=2509">トルコリラ大暴落事件とリスク管理</a></li><li><a href="/ios_fx3/article.php?postid=2449">取引のコツを週1回配信！</a></li><li><a href="/ios_fx3/article.php?postid=2436">SBIFXが新規サービスをリリース！</a></li><li><a href="/ios_fx3/article.php?postid=2430">SBIFXが新規サービスをリリース</a></li><li><a href="/ios_fx3/article.php?postid=2361">FXの本プレゼントキャンペーン開催中！</a></li><li><a href="/ios_fx3/article.php?postid=2418">キャッシュバック、しっかり見てる？</a></li><li><a href="/ios_fx3/article.php?postid=2405">誰でもプロのようなトレードが！？</a></li><li><a href="/ios_fx3/article.php?postid=2400">FX会社ってどんな基準で選ぶ？</a></li><li><a href="/ios_fx3/article.php?postid=2384">FXの本プレゼントキャンペーン開催中！</a></li><li><a href="/ios_fx3/article.php?postid=2352">トレードスタイル</a></li><li><a href="/ios_fx3/article.php?postid=2344">誰でもプロのようなトレードが！？</a></li><li><a href="/ios_fx3/article.php?postid=2320">超短期間で利益を積み重ねる！</a></li><li><a href="/ios_fx3/article.php?postid=2307">人気のバイナリーオプションとは？</a></li><li><a href="/ios_fx3/article.php?postid=2219">YJFX口座開設手順</a></li><li><a href="/ios_fx3/article.php?postid=2203">Test</a></li><li><a href="/ios_fx3/article.php?postid=1977">【保存版】FXの証拠金と始められる額</a></li><li><a href="/ios_fx3/article.php?postid=1948">FXの戦い方について</a></li><li><a href="/ios_fx3/article.php?postid=1946">取引ルールを決めよう</a></li><li><a href="/ios_fx3/article.php?postid=1943">FXで負ける人の特徴</a></li><li><a href="/ios_fx3/article.php?postid=1936">FXで勝つにはどうしたらいいの？</a></li><li><a href="/ios_fx3/article.php?postid=1919">FX会社ってどんな基準で選ぶ？</a></li><li><a href="/ios_fx3/article.php?postid=1915">値動きの大きい時間帯について</a></li><li><a href="/ios_fx3/article.php?postid=1910">オシレーターの設定をしてみましょう</a></li><li><a href="/ios_fx3/article.php?postid=1905">編集部員のFX取引ルーティーン紹介</a></li><li><a href="/ios_fx3/article.php?postid=1887">3日でできる！FXの始め方</a></li><li><a href="/ios_fx3/article.php?postid=1855">3日でできる！FXの始め方</a></li><li><a href="/ios_fx3/article.php?postid=1742">DMMFX vs GMOクリック証券口座徹底比較</a></li><li><a href="/ios_fx3/article.php?postid=1738">約80%の人が一つの手法で稼いでいる事実</a></li><li><a href="/ios_fx3/article.php?postid=1730">５円玉があればFXが出来る！</a></li><li><a href="/ios_fx3/article.php?postid=2334">超短期間で利益を積み重ねる！</a></li><li><a href="/ios_fx3/article.php?postid=1608">DMMFX vs GMOクリック証券口座徹底比較</a></li><li><a href="/ios_fx3/article.php?postid=1283">ドル絡みのあれこれ</a></li><li><a href="/ios_fx3/article.php?postid=1281">気になる時間帯のはなし</a></li><li><a href="/ios_fx3/article.php?postid=1279">オシレーターの設定してみよう</a></li><li><a href="/ios_fx3/article.php?postid=1276">ペン太のおすすめFXの取引ルーティーン</a></li><li><a href="/ios_fx3/article.php?postid=1274">ダウ平均、300ドル超の上げ続き</a></li><li><a href="/ios_fx3/article.php?postid=1272">ドルに買い要因があるとしたら＠6月</a></li><li><a href="/ios_fx3/article.php?postid=1267">米中貿易あれこれ</a></li><li><a href="/ios_fx3/article.php?postid=1252">円安どこまで行くんだろう</a></li><li><a href="/ios_fx3/article.php?postid=1248">日経先物を考えてみた</a></li><li><a href="/ios_fx3/article.php?postid=1208">さるFX　基礎・実践クイズ失敗パターン</a></li><li><a href="/ios_fx3/article.php?postid=995">FXってなに？</a></li><li><a href="/ios_fx3/article.php?postid=1196">さるFX　基礎・実践クイズ正解パターン　Android用</a></li><li><a href="/ios_fx3/article.php?postid=1193">さるFX　基礎・実践クイズ正解パターン　IOS用</a></li><li><a href="/ios_fx3/article.php?postid=1186">さるFX　クイズ　実践編②　問３解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1184">さるFX　クイズ　実践編②　問３問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1182">さるFX　クイズ　実践編②　問２解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1180">さるFX　クイズ　実践編②　問２問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1178">さるFX　クイズ　実践編②　問１解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1176">さるFX　クイズ　実践編②　問１問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1173">さるFX　クイズ　実践編①　問３解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1171">さるFX　クイズ　実践編①　問３問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1169">さるFX　クイズ　実践編①　問２解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1167">さるFX　クイズ　実践編①　問２問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1165">さるFX　クイズ　実践編①　問１解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1163">さるFX　クイズ　実践編①　問１問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1161">さるFX　クイズ　基礎編②　問３解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1159">さるFX　クイズ　基礎編②　問３問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1157">さるFX　クイズ　基礎編②　問２解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1155">さるFX　クイズ　基礎編②　問２問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1149">さるFX　クイズ　基礎編②　問１解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1147">さるFX　クイズ　基礎編②　問１問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1144">さるFX　クイズ　基礎編①　問３解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1142">さるFX　クイズ　基礎編①　問３問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1140">さるFX　クイズ　基礎編①　問２解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1138">さるFX　クイズ　基礎編①　問２問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1136">さるFX　クイズ　基礎編①　問１解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1133">さるFX　クイズ　基礎編①　問１問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1012">ローソク足ってなに？</a></li><li><a href="/ios_fx3/article.php?postid=1002">通貨ペアの売り買い</a></li><li><a href="/ios_fx3/article.php?postid=2299">指値・逆指値注文</a></li><li><a href="/ios_fx3/article.php?postid=1027">スキャルピングとデイトレについて</a></li><li><a href="/ios_fx3/article.php?postid=1029">スイングトレードについて</a></li><li><a href="/ios_fx3/article.php?postid=998">相場の決まり方って？</a></li><li><a href="/ios_fx3/article.php?postid=1106">注文方法の応用編</a></li><li><a href="/ios_fx3/article.php?postid=1101">レバレッジって？</a></li><li><a href="/ios_fx3/article.php?postid=1095">勝率９０%以上の秘密！</a></li><li><a href="/ios_fx3/article.php?postid=1091">負けないように戦う方法</a></li><li><a href="/ios_fx3/article.php?postid=1087">２つの戦い方　金利編</a></li><li><a href="/ios_fx3/article.php?postid=1085">２つの戦い方　売買編</a></li><li><a href="/ios_fx3/article.php?postid=1083">実際に注文してみよう！</a></li><li><a href="/ios_fx3/article.php?postid=1031">スワップ運用について</a></li><li><a href="/ios_fx3/article.php?postid=1079">戦い方について</a></li><li><a href="/ios_fx3/article.php?postid=1071">ローソク足を覚えよう！</a></li><li><a href="/ios_fx3/article.php?postid=1000">どんなニュースが為替相場に影響を与えるの？</a></li><li><a href="/ios_fx3/article.php?postid=1069">取引するときの手数料について</a></li><li><a href="/ios_fx3/article.php?postid=1066">通貨を取引するときの組み合わせ(ペア)</a></li><li><a href="/ios_fx3/article.php?postid=1061">円高・円安って？</a></li><li><a href="/ios_fx3/article.php?postid=1059">FXってどういうもの？</a></li><li><a href="/ios_fx3/article.php?postid=1035">取引ルールを決めよう</a></li><li><a href="/ios_fx3/article.php?postid=1004">レバレッジってなに？</a></li><li><a href="/ios_fx3/article.php?postid=1043">ロスカットってなに？</a></li><li><a href="/ios_fx3/article.php?postid=1008">外貨を買うには手数料がかかる！？</a></li><li><a href="/ios_fx3/article.php?postid=1819">いつでもLINEで質問できる！？</a></li><li><a href="/ios_fx3/article.php?postid=1023">FXで負けたら借金の可能性もある？</a></li><li><a href="/ios_fx3/article.php?postid=1596">FX取引に必要なモノ</a></li><li><a href="/ios_fx3/article.php?postid=1037">大損する人の共通点は？</a></li><li><a href="/ios_fx3/article.php?postid=1041">マージンコールってなに？</a></li><li><a href="/ios_fx3/article.php?postid=1039">勝率90％以上の秘密！</a></li><li><a href="/ios_fx3/article.php?postid=1025">約定力とスリッページも大事！</a></li><li><a href="/ios_fx3/article.php?postid=1021">スワップ金利も業者によって違う！</a></li><li><a href="/ios_fx3/article.php?postid=1018">取引できる通貨ペアは業者ごとに違う！</a></li><li><a href="/ios_fx3/article.php?postid=1016">誰かが儲かると誰かが損してる？</a></li><li><a href="/ios_fx3/article.php?postid=1014">FXの注文方法ってどういうものがあるの？</a></li><li><a href="/ios_fx3/article.php?postid=1010">スワップ金利ってどうやって決まるの？</a></li><li><a href="/ios_fx3/article.php?postid=1006">為替レートは必ずチェック！</a></li><li><a href="/ios_fx3/article.php?postid=940">coincheckって何が問題だったの？</a></li><li><a href="/ios_fx3/article.php?postid=938">bitFlyer口座開設手順(未実装)</a></li><li><a href="/ios_fx3/article.php?postid=936">Zaif口座開設手順(未実装)</a></li><li><a href="/ios_fx3/article.php?postid=915">初心者90％以上が実践</a></li><li><a href="/ios_fx3/article.php?postid=913">取引できる通貨ペアは業者ごとに違う！</a></li><li><a href="/ios_fx3/article.php?postid=911">FXの注文方法ってどんな種類があるの？</a></li><li><a href="/ios_fx3/article.php?postid=909">大損する人の共通点</a></li><li><a href="/ios_fx3/article.php?postid=907">取引ルールを決めよう</a></li><li><a href="/ios_fx3/article.php?postid=905">負けないためのテクニック</a></li><li><a href="/ios_fx3/article.php?postid=903">スキャルピングとデイトレについて</a></li><li><a href="/ios_fx3/article.php?postid=901">スワップ金利も業者によって違います！</a></li><li><a href="/ios_fx3/article.php?postid=899">為替差益とスワップポイント</a></li><li><a href="/ios_fx3/article.php?postid=897">ロスカットってなに？</a></li><li><a href="/ios_fx3/article.php?postid=895">マージンコールってなに？</a></li><li><a href="/ios_fx3/article.php?postid=893">約定力とスリッページも大事！</a></li><li><a href="/ios_fx3/article.php?postid=891">レバレッジとは？</a></li><li><a href="/ios_fx3/article.php?postid=889">スワップってなに？</a></li><li><a href="/ios_fx3/article.php?postid=887">スプレッドって何？</a></li><li><a href="/ios_fx3/article.php?postid=885">FXってなに？</a></li><li><a href="/ios_fx3/article.php?postid=882">分散投資</a></li><li><a href="/ios_fx3/article.php?postid=878">取引スタイルの使い分け</a></li><li><a href="/ios_fx3/article.php?postid=876">ビットコインでFX</a></li><li><a href="/ios_fx3/article.php?postid=861">GMOコイン　口座開設手順</a></li><li><a href="/ios_fx3/article.php?postid=839">DMMBitcoin口座開設手順</a></li><li><a href="/ios_fx3/article.php?postid=835">ビットコインの税制</a></li><li><a href="/ios_fx3/article.php?postid=833">ビットコインの保管方法</a></li><li><a href="/ios_fx3/article.php?postid=829">ビットコインでできること</a></li><li><a href="/ios_fx3/article.php?postid=822">マウントゴックス事件って？</a></li><li><a href="/ios_fx3/article.php?postid=729">ビットコインの入手方法</a></li><li><a href="/ios_fx3/article.php?postid=629">ビットコインの入手方法（旧）</a></li><li><a href="/ios_fx3/article.php?postid=627">ビットコインの将来性</a></li><li><a href="/ios_fx3/article.php?postid=625">ビットコインのデメリット・リスク</a></li><li><a href="/ios_fx3/article.php?postid=623">ビットコインのメリット</a></li><li><a href="/ios_fx3/article.php?postid=619">ビットコインの特徴</a></li><li><a href="/ios_fx3/article.php?postid=616">ビットコインってどうやってできたの？</a></li><li><a href="/ios_fx3/article.php?postid=611">ビットコインは儲かるのか？</a></li><li><a href="/ios_fx3/article.php?postid=596">FXで負ける人</a></li><li><a href="/ios_fx3/article.php?postid=582">ビットコインとは？</a></li><li><a href="/ios_fx3/article.php?postid=577">勝率90%以上の秘密！</a></li><li><a href="/ios_fx3/article.php?postid=573">大損する人の共通点とは？</a></li><li><a href="/ios_fx3/article.php?postid=571">取引ルールを決めよう</a></li><li><a href="/ios_fx3/article.php?postid=569">負けないためのテクニック</a></li><li><a href="/ios_fx3/article.php?postid=178">FXで負けたら借金の可能性もある？</a></li><li><a href="/ios_fx3/article.php?postid=176">スワップ運用について</a></li><li><a href="/ios_fx3/article.php?postid=260">スイングトレードについて</a></li><li><a href="/ios_fx3/article.php?postid=256">スキャルピングとデイトレについて</a></li><li><a href="/ios_fx3/article.php?postid=253">約定力とスリッページも大事！</a></li><li><a href="/ios_fx3/article.php?postid=174">スワップ金利も業者によって違います！</a></li><li><a href="/ios_fx3/article.php?postid=171">取引できる通貨ペアは業者ごとに違う！</a></li><li><a href="/ios_fx3/article.php?postid=250">FXには売買単位がある！</a></li><li><a href="/ios_fx3/article.php?postid=245">誰かが儲かると誰かが損してる？</a></li><li><a href="/ios_fx3/article.php?postid=168">FXの注文方法ってどんな種類があるの？</a></li><li><a href="/ios_fx3/article.php?postid=234">ローソク足ってなに？</a></li><li><a href="/ios_fx3/article.php?postid=231">レバレッジってなに？</a></li><li><a href="/ios_fx3/article.php?postid=166">ロスカットされるレートを計算する方法</a></li><li><a href="/ios_fx3/article.php?postid=164">ロスカットってなに？</a></li><li><a href="/ios_fx3/article.php?postid=162">FXにおける通貨ペアとは？</a></li><li><a href="/ios_fx3/article.php?postid=160">スワップ金利はどうやって決まるの？</a></li><li><a href="/ios_fx3/article.php?postid=1">FXってどうなったら儲かるの？</a></li><li><a href="/ios_fx3/article.php?postid=225">外貨を買うには手数料がかかる！？</a></li><li><a href="/ios_fx3/article.php?postid=222">為替レートはFX業者によって違う！？</a></li><li><a href="/ios_fx3/article.php?postid=9">為替レートをチェックするなら「Yahoo!ファイナンス」</a></li><li><a href="/ios_fx3/article.php?postid=80">通貨の人気ってどうやって決まるの？</a></li><li><a href="/ios_fx3/article.php?postid=76">為替相場ってどうやって決まるの？</a></li><li><a href="/ios_fx3/article.php?postid=41">これって円安？円高？</a></li><li><a href="/ios_fx3/article.php?postid=15">じゃあ、FXってなに？？</a></li><li><a href="/ios_fx3/article.php?postid=45">為替ってなに？？？</a></li><li><a href="/ios_fx3/article.php?postid=2133">応用編お疲れ様~~~！！</a></li><li><a href="/ios_fx3/article.php?postid=2128">実践編お疲れ様！</a></li><li><a href="/ios_fx3/article.php?postid=2109">基礎編お疲れ様！</a></li>	</ul>
  	-->

  	<div class="content">

  <style media="screen">
  .lineat{margin: 10px;}
  .lineat h4{background: #00BB00;color: #fff;margin:10px 0;padding: 10px;font-weight: bold;border-radius: 2px;border-bottom: 3px solid #097c25;}
  .lineat p{margin: 8px 10px;}
  a.gplay{border: 1px solid #ddd;border-radius: 5px;padding: 10px;margin: 10px 0;display: block;text-decoration: none;color: #333;font-size: 11px;background: url(img/line@.png) 95% center no-repeat;background-size: 95px auto;}
  .gplay img{width: 50px;border-radius: 5px;float:left;margin-right: 8px;}
  .gplay span{font-weight: bold;font-size: 14px;margin-top: 8px;display: inline-block;}

  .atlogowrap{text-align: center;}
  .atlogowrap img{width: 40px;}
  .greenwaku{background:#3EB13A;color: #fff;font-size:11px;border-radius: 5px;padding: 10px 8px;}
  .greenwaku p strong{font-weight: bold;font-size:14px;}
  footer{padding: 10px;text-align: center;font-size: 10px;border-top: 1px solid #aaa;margin-top: 9px;}
  footer a{text-decoration: none;color: #999;}
  .iosline{text-align: right;}
  .iosline img{width: 120px;}
  .disclaimer{display: none;}
  .clear{clear: both;}
  </style>
      <!--
      <div class="iosline">
      <a href="https://line.me/R/ti/p/%40geo8291c" class="">
          <img src="/fx/img/lineme.png" alt="">
      </a>
      </div>


      <a href="http://imakita-sangyou.com/fx/29.php?flag=1">
      <img src="/fx/img/top_bn.gif" alt="">
      </a> -->

      <div class="lineat">
          <!-- <h4>LINEでサポートを始めました</h4> -->
          <img src="img/linetop.jpg" alt="">
          <!-- <p>口座開設や、ＦＸに関する疑問ありませんか？ <br>
          公式ＬＩＮＥアカウントを友だち追加をしよう！</p> -->
          <a href="https://line.me/R/ti/p/%40geo8291c" class="gplay">
              <img src="img/lineaticon.png" alt=""><br>
              <span>初心者のFX教室</span><br>
              <div class="clear"></div>
          </a>
          <div class="greenwaku">
              <div class="atlogowrap">
                  <img src="img/lineatlogo.png" alt="">
              </div>
              <p><strong>①ＦＸに関する素朴な疑問にお答えします</strong> <br>
              どのＦＸ会社がオススメか、口座開設時の疑問点などのご質問に可能な限りお答えします</p>
              <p> <strong>②ＦＸ以外の投資関連の情報をお届けします</strong> <br>
              ＦＸだけでなく、その他投資に関する情報を不定期でお届けします。</p>
              <p><strong>③お得なキャンペーン</strong> <br>
              現在「FX初心者向けの本」をプレゼントするキャンペーンを開催中です♪　詳しくは友達追加時のウェルカムメッセージにて！</p>
          </div>
      </div>






  <!-- ビットコインLINE＠
  <div class="lineat">
      <a href="http://facebookpp.com/c.php?c=guidebit_line" class="gplay">
          <img src="img/bitcoinicon.png" alt=""><br>
          <span>ビットコイン研究所</span><br>

      <div class="clear"></div>
      </a>
      <style media="screen">
          .greenwaku.bluewaku{background:#D6E6FF;color:#0677BB;border: 2px dashed #0677BB;}
      </style>
      <div class="greenwaku bluewaku">
      <p><strong>ビットコインに関する素朴な疑問にお答えします</strong> <br>
      疑問点などのご質問に可能な限りお答えします</p>
      <p> <strong> 億万長者も夢ではない！生涯に一度のチャンスを逃すな！</strong> <br>
       最強のビットコイン投資術説明会開催　※LINE＠を読み終わった後、人生が変わる！</p>
      </div>
  </div>
  -->
  	</div>
  	<!--<button onClick="aaa();">Toastを表示</button></body>-->
  	<footer id="inviewTest">　</footer>


  </body>
  <html><head>
	<meta charset="UTF-8">

	<script async="" src="https://www.google-analytics.com/analytics.js"></script><script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="./jquery.inview.min.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-63390857-18', 'auto');
	  ga('send', 'pageview');

	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/renew.css" type="text/css">
	<title>【画面】取引のコツを週1回配信！</title>
	<style>
	body{font:normal 15px/1.6em Meiryo,"MS PGothic",arial,sans-serif;color:#333;margin:0;background:#;}
	ul,li{margin:0;padding:0;list-style:none;}
	a{color:#00a9c7;}
	article,aside,details,figcaption,figure,footer,header,menu,nav,section{display:block;}
	body{width:100%;}
	img{max-width:100%;height:auto;}
	h1{padding:5px 15px;color:#;font-size:18px;font-weight:;}
	.content,.adwrap{padding:10px 15px;background:#fff;margin:0 7px 15px;border-radius:5px;}
	ul li a{display:block;border-top:1px solid #aaa;padding:8px;text-decoration:none;}
	h3,h2{margin:15px 0 15px;padding:0 5px ;background:#;border-left:5px solid #999;font-size:14px;}
	h4{margin:20px 0 0;padding:5px ;background:#F0F0F0;border-bottom:1px dotted #2F67EB;}
	table{border-collapse:collapse;border:0;}
	tr:nth-child(2n){background:#eee;}
	th{font-weight:bold;background:#2F67EB;color:#fff;}
	th,td{border:1px solid #ddd;padding:5px 10px;}
	.bgylw{background:#FFE566;}
	.red{color:red;}
	.backlink{margin:0 15px 45px;display:block;padding:15px 0;text-align:center;color:#fff;background:#515d78;text-decoration:none;}
	.mark{border: 2px solid #aaa;border-radius: 15px;color: #999;margin: 15px auto 10px;padding: 7px 0;width: 95%;text-decoration:none;display:block;text-align:center;}
	.mada{border: 2px solid #38b3e7;color: #25a7de;}

	.adwrap h2,.adwrap h3{border-color:#6ED14D;}

	.nii {
	    border: 1px solid #aaa;
	    border-radius: 3px;
	    box-shadow: 1px 1px #aaa;
	    box-sizing: border-box;
	    color: #666;
	    display: block;
	    height: 85px;
	    margin: 10px;
	    padding: 5px;
	    position: relative;
		font-size:12px;
		text-decoration:none;
		line-height:1.2em;
	}
	.nii img {
	    border-radius: 10px;
	    float: left;
	    margin: 0 10px 8px 0;
	    width: 70px;
	}
	.nii strong {
	    color: #333;
	    display: inline-block;
	    font-size: 16px;
	    font-weight: bold;
	    margin: 5px 0;
	}

	.nii span {
	    bottom: 7px;
	    color: #309300;
	    font-size: 12px;
	    position: absolute;
	    right: 7px;
	}
	#page-top {
	    position: fixed;
	    bottom: 0px;
	    right: 0px;
	    font-size: 77%;
	}
	#page-top a {
	    text-decoration: none;
	    color: #fff;
	    width: 50px;
	    padding: 5px 0;
	    text-align: center;
	    display: block;
	    border-radius: 5px;
	}
	#page-top a:hover {
	    text-decoration: none;
	}
	.tes img{width: 128px;}
	.tes{position: absolute;left:50%;top:50%;margin-left: -64px;margin-top: -64px;}
	.tes span{color:#fff;font-size:32px;}
	.test.tes{position: fixed;}
	.shi{position: absolute;top:32px;left:39px;}
	.bo{position: absolute;bottom:41px;left:70px;}
	</style>

	<script>
	$(function() {
		var startPos = 0,winScrollTop = 0;
		$(window).on('scroll',function(){
		    winScrollTop = $(this).scrollTop();
		    if (winScrollTop >= startPos) {
		    	$('.test').hide();
		    	$('.test2').hide();
		    } else {
		    	$('.test').show();
		    }

		    startPos = winScrollTop;
		});
		var startPos = 0,winScrollTop = 0;
		$(window).on('scroll',function(){
		    winScrollTop = $(this).scrollTop();
		    if (winScrollTop >= startPos) {
		        $('.site-header').addClass('hide');
		    } else {
		        $('.site-header').removeClass('hide');
		    }
		    startPos = winScrollTop;
		});
		$(".cv").click(function () {
			var fx = $(this).attr("title");
			//googleanalyticsイベント
			ga('send', 'event', 'adclick', fx,1);
			if(AndroidJS)AndroidJS._AdClick(fx);
		});
		$('#inviewTest').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
	            if (isInView) {
	              //要素が見えたときに実行する処理
	              <!--alert("");-->
				Android.kidoku();
	            } else {
	              //要素が見えなくなったときに実行する処理

	            }
	    });
	   var topBtn = $('#page-top');
	    topBtn.hide();
	    //スクロールが100に達したらボタン表示
	    $(window).scroll(function () {
	        if ($(this).scrollTop() > 100) {
	            topBtn.fadeIn();
	        } else {
	            topBtn.fadeOut();
	        }
	    });
	    //スクロールしてトップ
	    topBtn.click(function () {
	        $('body,html').animate({
	            scrollTop: 0
	        }, 500);
	        return false;
	    });
	});
	</script>

	</head>
	<body style="">
		<h1>取引のコツを週1回配信！</h1>
			<div class="content"><img class="alignnone size-full wp-image-2511" src="http://imakita-sangyou.com/wp/wp-content/uploads/2018/10/LP_head.jpg" alt=""><br>
<div style="text-align: center;">※おかげさまで相談者急増中のため、当社の判断により募集を一旦締め切る可能性がございます。気になる方はお早めにご相談ください！</div><br>
<center><a href="https://line.me/R/ti/p/%40geo8291c"><img class=" wp-image-1399 aligncenter" src="http://imakita-sangyou.com/wp/wp-content/uploads/2018/05/line.png" alt="" width="219" height="164"></a></center>&nbsp;<br>
<div><br>
<h2>みんなの疑問を即日解決</h2><br>
<img class="alignnone wp-image-2452" src="http://imakita-sangyou.com/wp/wp-content/uploads/2018/10/iOS-の画像-1.jpg" alt="" width="272" height="479"><br>
<br>
平日10時～19時までは専門家が迅速に対応。疑問も即解決！<br>
<h2>気軽にチャットできる！</h2><br>
<img class="alignnone wp-image-2451" src="http://imakita-sangyou.com/wp/wp-content/uploads/2018/10/famIMGL1350_TP_V4.jpg" alt="" width="315" height="210"><br>
<br>
LINEでチャットならめんどくさいインストールもブックマークする必要もなし！<br>
<h2>こんな人におすすめ！</h2><br>
・ググり方（調べ方）がよくわからない。<br>
<br>
・文字を読み進めていくのが苦手だが、チャットは得意。<br>
<br>
・計算式を連発されるとよく分からなくなる。<br>
<br>
<a href="https://line.me/R/ti/p/%40geo8291c"><img class="alignnone wp-image-1820" src="http://imakita-sangyou.com/wp/wp-content/uploads/2018/07/linetop.jpg" alt="" width="404" height="207"></a><br>
<h2>累計6000人以上をFX市場に送り出したアドバンの「FX初心者ガイド」編集部によるLINEサポート！</h2><br>
・初心者でもわかりやすいサービス　第１位<br>
・実際に始められたFX学習サービス　第１位<br>
・疑問が解決できたFX学習サービス　第１位<br>
「実査委託先：ゼネラルリサーチ」<br>
<br>
<img class="alignnone wp-image-2453" src="http://imakita-sangyou.com/wp/wp-content/uploads/2018/10/ss960x640_1.png" alt="" width="473" height="315"><br>
<br>
日々進化していくIT業界の中で、ユーザーさんの視点に立って、何が一番学びやすいのかを考えに考えました。<br>
アプリは確かに「<strong>手軽に勉強できる</strong>」という点においてはいいのですが、それでは不完全だと気が付きました。<br>
そもそもアプリで取引を開始したユーザーさんのすべてが、持っている疑問をすべて解決できたわけではないということに、気が付いたからです。<br>
そこで<strong>「初心者のFX教室」のLINEを立ち上げました。</strong><br>
<br>
ここではユーザーのみなさんのちょっとした疑問にお答えすることが出来ます！<br>
「バカみたいな質問だから」なんて思わないでください。<br>
FXは普段使わない用語も多く、時には計算も必要なため、慣れるまでは難しいです。が、<strong>僕たちはみなさんの勝率が１％でも上がるように全力でサポートします！</strong><br>
<br>
みなさんのサポートの一環として、10月末まで「アンケートに答えてFX初心者向けの本がもらえる」キャンペーンを開催しています。<br>
<br>
LINEで皆さんのお声をお待ちしております！<br>
<br>
<a href="https://line.me/R/ti/p/%40geo8291c"><img class="alignnone wp-image-2454" src="http://imakita-sangyou.com/wp/wp-content/uploads/2018/10/アンケート2.jpg" alt="" width="370" height="185"></a><br>
<br>
</div>
	<!--		<div id="change"></div>-->
			<!-- <p id="page-top"><img width="50" height="50" src="http://imakita-sangyou.com/fx_saru/images/up.png"></p>-->
			</div>	<!--
	<div class="adwrap">
	<h2>知っておくとお得！</h2>

	FX取扱会社のなかには、オンラインで利用できる「デモトレード」を用意していることもあります。これは、実際の取引画面と同じものを使用し、仮想マネーで取引を行うというもの。<br><br>

	ひと言で「FX取引」といっても、FX取扱会社ごとに、オンライン画面は違います。<br>
	注文のしかたや決済のしかたのほか、チャートなどの相場を知るための画面の見方も、FX取扱会社によって、大きく異なっています。
	<h5>バーチャルでFXは必須</h5>
	そのため、新しく口座を開設しようとしている人たちに、まずは自社の取引を体験してもらおうというのがデモトレードの目的です。<br><br>

	初心者の方は、まずデモを利用して見て、FX取引のコツを学ぶことをおすすめします。
	<h3>バーチャル取引ができるFX口座</h3>
	<a class="cv nii" title="DMM FX" target="_blank" href="http://princess-tv.com/c.php?c=kiwami_ios_dmmact">
		<img border="0" src="http://imakita-sangyou.com/ios_fx3/img/dmmfx_icon.png">
		<strong>DMM FX</strong><br>
		バーチャルトレードがお試しいただけます
		<span>口座開設無料</span>
	</a>
	<a class="nii cv" href="http://princess-tv.com/c.php?c=kiwami_ios_gaion" title="Gaitame Online" target="_blank">
		<img src="img/onlineicon.jpg">
		<strong>外為オンライン</strong><br>
		バーチャルトレードがお試しいただけます
		<span>口座開設無料</span>
	</a>

	</div>
	-->

	<!--<a href="1.php?back=1" class="backlink"><img src="img/backicon.png" style="margin:0 7px;vertical-align:middle;width:15px;">戻る</a>-->
	<!--
	<ul>
	<li><a href="/ios_fx3/article.php?postid=2552">みんなの疑問もチャットで即日解決！</a></li><li><a href="/ios_fx3/article.php?postid=2509">トルコリラ大暴落事件とリスク管理</a></li><li><a href="/ios_fx3/article.php?postid=2449">取引のコツを週1回配信！</a></li><li><a href="/ios_fx3/article.php?postid=2436">SBIFXが新規サービスをリリース！</a></li><li><a href="/ios_fx3/article.php?postid=2430">SBIFXが新規サービスをリリース</a></li><li><a href="/ios_fx3/article.php?postid=2361">FXの本プレゼントキャンペーン開催中！</a></li><li><a href="/ios_fx3/article.php?postid=2418">キャッシュバック、しっかり見てる？</a></li><li><a href="/ios_fx3/article.php?postid=2405">誰でもプロのようなトレードが！？</a></li><li><a href="/ios_fx3/article.php?postid=2400">FX会社ってどんな基準で選ぶ？</a></li><li><a href="/ios_fx3/article.php?postid=2384">FXの本プレゼントキャンペーン開催中！</a></li><li><a href="/ios_fx3/article.php?postid=2352">トレードスタイル</a></li><li><a href="/ios_fx3/article.php?postid=2344">誰でもプロのようなトレードが！？</a></li><li><a href="/ios_fx3/article.php?postid=2320">超短期間で利益を積み重ねる！</a></li><li><a href="/ios_fx3/article.php?postid=2307">人気のバイナリーオプションとは？</a></li><li><a href="/ios_fx3/article.php?postid=2219">YJFX口座開設手順</a></li><li><a href="/ios_fx3/article.php?postid=2203">Test</a></li><li><a href="/ios_fx3/article.php?postid=1977">【保存版】FXの証拠金と始められる額</a></li><li><a href="/ios_fx3/article.php?postid=1948">FXの戦い方について</a></li><li><a href="/ios_fx3/article.php?postid=1946">取引ルールを決めよう</a></li><li><a href="/ios_fx3/article.php?postid=1943">FXで負ける人の特徴</a></li><li><a href="/ios_fx3/article.php?postid=1936">FXで勝つにはどうしたらいいの？</a></li><li><a href="/ios_fx3/article.php?postid=1919">FX会社ってどんな基準で選ぶ？</a></li><li><a href="/ios_fx3/article.php?postid=1915">値動きの大きい時間帯について</a></li><li><a href="/ios_fx3/article.php?postid=1910">オシレーターの設定をしてみましょう</a></li><li><a href="/ios_fx3/article.php?postid=1905">編集部員のFX取引ルーティーン紹介</a></li><li><a href="/ios_fx3/article.php?postid=1887">3日でできる！FXの始め方</a></li><li><a href="/ios_fx3/article.php?postid=1855">3日でできる！FXの始め方</a></li><li><a href="/ios_fx3/article.php?postid=1742">DMMFX vs GMOクリック証券口座徹底比較</a></li><li><a href="/ios_fx3/article.php?postid=1738">約80%の人が一つの手法で稼いでいる事実</a></li><li><a href="/ios_fx3/article.php?postid=1730">５円玉があればFXが出来る！</a></li><li><a href="/ios_fx3/article.php?postid=2334">超短期間で利益を積み重ねる！</a></li><li><a href="/ios_fx3/article.php?postid=1608">DMMFX vs GMOクリック証券口座徹底比較</a></li><li><a href="/ios_fx3/article.php?postid=1283">ドル絡みのあれこれ</a></li><li><a href="/ios_fx3/article.php?postid=1281">気になる時間帯のはなし</a></li><li><a href="/ios_fx3/article.php?postid=1279">オシレーターの設定してみよう</a></li><li><a href="/ios_fx3/article.php?postid=1276">ペン太のおすすめFXの取引ルーティーン</a></li><li><a href="/ios_fx3/article.php?postid=1274">ダウ平均、300ドル超の上げ続き</a></li><li><a href="/ios_fx3/article.php?postid=1272">ドルに買い要因があるとしたら＠6月</a></li><li><a href="/ios_fx3/article.php?postid=1267">米中貿易あれこれ</a></li><li><a href="/ios_fx3/article.php?postid=1252">円安どこまで行くんだろう</a></li><li><a href="/ios_fx3/article.php?postid=1248">日経先物を考えてみた</a></li><li><a href="/ios_fx3/article.php?postid=1208">さるFX　基礎・実践クイズ失敗パターン</a></li><li><a href="/ios_fx3/article.php?postid=995">FXってなに？</a></li><li><a href="/ios_fx3/article.php?postid=1196">さるFX　基礎・実践クイズ正解パターン　Android用</a></li><li><a href="/ios_fx3/article.php?postid=1193">さるFX　基礎・実践クイズ正解パターン　IOS用</a></li><li><a href="/ios_fx3/article.php?postid=1186">さるFX　クイズ　実践編②　問３解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1184">さるFX　クイズ　実践編②　問３問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1182">さるFX　クイズ　実践編②　問２解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1180">さるFX　クイズ　実践編②　問２問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1178">さるFX　クイズ　実践編②　問１解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1176">さるFX　クイズ　実践編②　問１問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1173">さるFX　クイズ　実践編①　問３解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1171">さるFX　クイズ　実践編①　問３問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1169">さるFX　クイズ　実践編①　問２解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1167">さるFX　クイズ　実践編①　問２問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1165">さるFX　クイズ　実践編①　問１解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1163">さるFX　クイズ　実践編①　問１問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1161">さるFX　クイズ　基礎編②　問３解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1159">さるFX　クイズ　基礎編②　問３問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1157">さるFX　クイズ　基礎編②　問２解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1155">さるFX　クイズ　基礎編②　問２問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1149">さるFX　クイズ　基礎編②　問１解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1147">さるFX　クイズ　基礎編②　問１問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1144">さるFX　クイズ　基礎編①　問３解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1142">さるFX　クイズ　基礎編①　問３問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1140">さるFX　クイズ　基礎編①　問２解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1138">さるFX　クイズ　基礎編①　問２問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1136">さるFX　クイズ　基礎編①　問１解答部分</a></li><li><a href="/ios_fx3/article.php?postid=1133">さるFX　クイズ　基礎編①　問１問題部分</a></li><li><a href="/ios_fx3/article.php?postid=1012">ローソク足ってなに？</a></li><li><a href="/ios_fx3/article.php?postid=1002">通貨ペアの売り買い</a></li><li><a href="/ios_fx3/article.php?postid=2299">指値・逆指値注文</a></li><li><a href="/ios_fx3/article.php?postid=1027">スキャルピングとデイトレについて</a></li><li><a href="/ios_fx3/article.php?postid=1029">スイングトレードについて</a></li><li><a href="/ios_fx3/article.php?postid=998">相場の決まり方って？</a></li><li><a href="/ios_fx3/article.php?postid=1106">注文方法の応用編</a></li><li><a href="/ios_fx3/article.php?postid=1101">レバレッジって？</a></li><li><a href="/ios_fx3/article.php?postid=1095">勝率９０%以上の秘密！</a></li><li><a href="/ios_fx3/article.php?postid=1091">負けないように戦う方法</a></li><li><a href="/ios_fx3/article.php?postid=1087">２つの戦い方　金利編</a></li><li><a href="/ios_fx3/article.php?postid=1085">２つの戦い方　売買編</a></li><li><a href="/ios_fx3/article.php?postid=1083">実際に注文してみよう！</a></li><li><a href="/ios_fx3/article.php?postid=1031">スワップ運用について</a></li><li><a href="/ios_fx3/article.php?postid=1079">戦い方について</a></li><li><a href="/ios_fx3/article.php?postid=1071">ローソク足を覚えよう！</a></li><li><a href="/ios_fx3/article.php?postid=1000">どんなニュースが為替相場に影響を与えるの？</a></li><li><a href="/ios_fx3/article.php?postid=1069">取引するときの手数料について</a></li><li><a href="/ios_fx3/article.php?postid=1066">通貨を取引するときの組み合わせ(ペア)</a></li><li><a href="/ios_fx3/article.php?postid=1061">円高・円安って？</a></li><li><a href="/ios_fx3/article.php?postid=1059">FXってどういうもの？</a></li><li><a href="/ios_fx3/article.php?postid=1035">取引ルールを決めよう</a></li><li><a href="/ios_fx3/article.php?postid=1004">レバレッジってなに？</a></li><li><a href="/ios_fx3/article.php?postid=1043">ロスカットってなに？</a></li><li><a href="/ios_fx3/article.php?postid=1008">外貨を買うには手数料がかかる！？</a></li><li><a href="/ios_fx3/article.php?postid=1819">いつでもLINEで質問できる！？</a></li><li><a href="/ios_fx3/article.php?postid=1023">FXで負けたら借金の可能性もある？</a></li><li><a href="/ios_fx3/article.php?postid=1596">FX取引に必要なモノ</a></li><li><a href="/ios_fx3/article.php?postid=1037">大損する人の共通点は？</a></li><li><a href="/ios_fx3/article.php?postid=1041">マージンコールってなに？</a></li><li><a href="/ios_fx3/article.php?postid=1039">勝率90％以上の秘密！</a></li><li><a href="/ios_fx3/article.php?postid=1025">約定力とスリッページも大事！</a></li><li><a href="/ios_fx3/article.php?postid=1021">スワップ金利も業者によって違う！</a></li><li><a href="/ios_fx3/article.php?postid=1018">取引できる通貨ペアは業者ごとに違う！</a></li><li><a href="/ios_fx3/article.php?postid=1016">誰かが儲かると誰かが損してる？</a></li><li><a href="/ios_fx3/article.php?postid=1014">FXの注文方法ってどういうものがあるの？</a></li><li><a href="/ios_fx3/article.php?postid=1010">スワップ金利ってどうやって決まるの？</a></li><li><a href="/ios_fx3/article.php?postid=1006">為替レートは必ずチェック！</a></li><li><a href="/ios_fx3/article.php?postid=940">coincheckって何が問題だったの？</a></li><li><a href="/ios_fx3/article.php?postid=938">bitFlyer口座開設手順(未実装)</a></li><li><a href="/ios_fx3/article.php?postid=936">Zaif口座開設手順(未実装)</a></li><li><a href="/ios_fx3/article.php?postid=915">初心者90％以上が実践</a></li><li><a href="/ios_fx3/article.php?postid=913">取引できる通貨ペアは業者ごとに違う！</a></li><li><a href="/ios_fx3/article.php?postid=911">FXの注文方法ってどんな種類があるの？</a></li><li><a href="/ios_fx3/article.php?postid=909">大損する人の共通点</a></li><li><a href="/ios_fx3/article.php?postid=907">取引ルールを決めよう</a></li><li><a href="/ios_fx3/article.php?postid=905">負けないためのテクニック</a></li><li><a href="/ios_fx3/article.php?postid=903">スキャルピングとデイトレについて</a></li><li><a href="/ios_fx3/article.php?postid=901">スワップ金利も業者によって違います！</a></li><li><a href="/ios_fx3/article.php?postid=899">為替差益とスワップポイント</a></li><li><a href="/ios_fx3/article.php?postid=897">ロスカットってなに？</a></li><li><a href="/ios_fx3/article.php?postid=895">マージンコールってなに？</a></li><li><a href="/ios_fx3/article.php?postid=893">約定力とスリッページも大事！</a></li><li><a href="/ios_fx3/article.php?postid=891">レバレッジとは？</a></li><li><a href="/ios_fx3/article.php?postid=889">スワップってなに？</a></li><li><a href="/ios_fx3/article.php?postid=887">スプレッドって何？</a></li><li><a href="/ios_fx3/article.php?postid=885">FXってなに？</a></li><li><a href="/ios_fx3/article.php?postid=882">分散投資</a></li><li><a href="/ios_fx3/article.php?postid=878">取引スタイルの使い分け</a></li><li><a href="/ios_fx3/article.php?postid=876">ビットコインでFX</a></li><li><a href="/ios_fx3/article.php?postid=861">GMOコイン　口座開設手順</a></li><li><a href="/ios_fx3/article.php?postid=839">DMMBitcoin口座開設手順</a></li><li><a href="/ios_fx3/article.php?postid=835">ビットコインの税制</a></li><li><a href="/ios_fx3/article.php?postid=833">ビットコインの保管方法</a></li><li><a href="/ios_fx3/article.php?postid=829">ビットコインでできること</a></li><li><a href="/ios_fx3/article.php?postid=822">マウントゴックス事件って？</a></li><li><a href="/ios_fx3/article.php?postid=729">ビットコインの入手方法</a></li><li><a href="/ios_fx3/article.php?postid=629">ビットコインの入手方法（旧）</a></li><li><a href="/ios_fx3/article.php?postid=627">ビットコインの将来性</a></li><li><a href="/ios_fx3/article.php?postid=625">ビットコインのデメリット・リスク</a></li><li><a href="/ios_fx3/article.php?postid=623">ビットコインのメリット</a></li><li><a href="/ios_fx3/article.php?postid=619">ビットコインの特徴</a></li><li><a href="/ios_fx3/article.php?postid=616">ビットコインってどうやってできたの？</a></li><li><a href="/ios_fx3/article.php?postid=611">ビットコインは儲かるのか？</a></li><li><a href="/ios_fx3/article.php?postid=596">FXで負ける人</a></li><li><a href="/ios_fx3/article.php?postid=582">ビットコインとは？</a></li><li><a href="/ios_fx3/article.php?postid=577">勝率90%以上の秘密！</a></li><li><a href="/ios_fx3/article.php?postid=573">大損する人の共通点とは？</a></li><li><a href="/ios_fx3/article.php?postid=571">取引ルールを決めよう</a></li><li><a href="/ios_fx3/article.php?postid=569">負けないためのテクニック</a></li><li><a href="/ios_fx3/article.php?postid=178">FXで負けたら借金の可能性もある？</a></li><li><a href="/ios_fx3/article.php?postid=176">スワップ運用について</a></li><li><a href="/ios_fx3/article.php?postid=260">スイングトレードについて</a></li><li><a href="/ios_fx3/article.php?postid=256">スキャルピングとデイトレについて</a></li><li><a href="/ios_fx3/article.php?postid=253">約定力とスリッページも大事！</a></li><li><a href="/ios_fx3/article.php?postid=174">スワップ金利も業者によって違います！</a></li><li><a href="/ios_fx3/article.php?postid=171">取引できる通貨ペアは業者ごとに違う！</a></li><li><a href="/ios_fx3/article.php?postid=250">FXには売買単位がある！</a></li><li><a href="/ios_fx3/article.php?postid=245">誰かが儲かると誰かが損してる？</a></li><li><a href="/ios_fx3/article.php?postid=168">FXの注文方法ってどんな種類があるの？</a></li><li><a href="/ios_fx3/article.php?postid=234">ローソク足ってなに？</a></li><li><a href="/ios_fx3/article.php?postid=231">レバレッジってなに？</a></li><li><a href="/ios_fx3/article.php?postid=166">ロスカットされるレートを計算する方法</a></li><li><a href="/ios_fx3/article.php?postid=164">ロスカットってなに？</a></li><li><a href="/ios_fx3/article.php?postid=162">FXにおける通貨ペアとは？</a></li><li><a href="/ios_fx3/article.php?postid=160">スワップ金利はどうやって決まるの？</a></li><li><a href="/ios_fx3/article.php?postid=1">FXってどうなったら儲かるの？</a></li><li><a href="/ios_fx3/article.php?postid=225">外貨を買うには手数料がかかる！？</a></li><li><a href="/ios_fx3/article.php?postid=222">為替レートはFX業者によって違う！？</a></li><li><a href="/ios_fx3/article.php?postid=9">為替レートをチェックするなら「Yahoo!ファイナンス」</a></li><li><a href="/ios_fx3/article.php?postid=80">通貨の人気ってどうやって決まるの？</a></li><li><a href="/ios_fx3/article.php?postid=76">為替相場ってどうやって決まるの？</a></li><li><a href="/ios_fx3/article.php?postid=41">これって円安？円高？</a></li><li><a href="/ios_fx3/article.php?postid=15">じゃあ、FXってなに？？</a></li><li><a href="/ios_fx3/article.php?postid=45">為替ってなに？？？</a></li><li><a href="/ios_fx3/article.php?postid=2133">応用編お疲れ様~~~！！</a></li><li><a href="/ios_fx3/article.php?postid=2128">実践編お疲れ様！</a></li><li><a href="/ios_fx3/article.php?postid=2109">基礎編お疲れ様！</a></li>	</ul>
	-->

	<div class="content">

<style media="screen">
.lineat{margin: 10px;}
.lineat h4{background: #00BB00;color: #fff;margin:10px 0;padding: 10px;font-weight: bold;border-radius: 2px;border-bottom: 3px solid #097c25;}
.lineat p{margin: 8px 10px;}
a.gplay{border: 1px solid #ddd;border-radius: 5px;padding: 10px;margin: 10px 0;display: block;text-decoration: none;color: #333;font-size: 11px;background: url(img/line@.png) 95% center no-repeat;background-size: 95px auto;}
.gplay img{width: 50px;border-radius: 5px;float:left;margin-right: 8px;}
.gplay span{font-weight: bold;font-size: 14px;margin-top: 8px;display: inline-block;}

.atlogowrap{text-align: center;}
.atlogowrap img{width: 40px;}
.greenwaku{background:#3EB13A;color: #fff;font-size:11px;border-radius: 5px;padding: 10px 8px;}
.greenwaku p strong{font-weight: bold;font-size:14px;}
footer{padding: 10px;text-align: center;font-size: 10px;border-top: 1px solid #aaa;margin-top: 9px;}
footer a{text-decoration: none;color: #999;}
.iosline{text-align: right;}
.iosline img{width: 120px;}
.disclaimer{display: none;}
.clear{clear: both;}
</style>
    <!--
    <div class="iosline">
    <a href="https://line.me/R/ti/p/%40geo8291c" class="">
        <img src="/fx/img/lineme.png" alt="">
    </a>
    </div>


    <a href="http://imakita-sangyou.com/fx/29.php?flag=1">
    <img src="/fx/img/top_bn.gif" alt="">
    </a> -->

    <div class="lineat">
        <!-- <h4>LINEでサポートを始めました</h4> -->
        <img src="img/linetop.jpg" alt="">
        <!-- <p>口座開設や、ＦＸに関する疑問ありませんか？ <br>
        公式ＬＩＮＥアカウントを友だち追加をしよう！</p> -->
        <a href="https://line.me/R/ti/p/%40geo8291c" class="gplay">
            <img src="img/lineaticon.png" alt=""><br>
            <span>初心者のFX教室</span><br>
            <div class="clear"></div>
        </a>
        <div class="greenwaku">
            <div class="atlogowrap">
                <img src="img/lineatlogo.png" alt="">
            </div>
            <p><strong>①ＦＸに関する素朴な疑問にお答えします</strong> <br>
            どのＦＸ会社がオススメか、口座開設時の疑問点などのご質問に可能な限りお答えします</p>
            <p> <strong>②ＦＸ以外の投資関連の情報をお届けします</strong> <br>
            ＦＸだけでなく、その他投資に関する情報を不定期でお届けします。</p>
            <p><strong>③お得なキャンペーン</strong> <br>
            現在「FX初心者向けの本」をプレゼントするキャンペーンを開催中です♪　詳しくは友達追加時のウェルカムメッセージにて！</p>
        </div>
    </div>






<!-- ビットコインLINE＠
<div class="lineat">
    <a href="http://facebookpp.com/c.php?c=guidebit_line" class="gplay">
        <img src="img/bitcoinicon.png" alt=""><br>
        <span>ビットコイン研究所</span><br>

    <div class="clear"></div>
    </a>
    <style media="screen">
        .greenwaku.bluewaku{background:#D6E6FF;color:#0677BB;border: 2px dashed #0677BB;}
    </style>
    <div class="greenwaku bluewaku">
    <p><strong>ビットコインに関する素朴な疑問にお答えします</strong> <br>
    疑問点などのご質問に可能な限りお答えします</p>
    <p> <strong> 億万長者も夢ではない！生涯に一度のチャンスを逃すな！</strong> <br>
     最強のビットコイン投資術説明会開催　※LINE＠を読み終わった後、人生が変わる！</p>
    </div>
</div>
-->
	</div>
	<!--<button onClick="aaa();">Toastを表示</button></body>-->
	<footer id="inviewTest">　</footer>


</body>
</html>
