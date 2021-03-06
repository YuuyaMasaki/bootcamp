<?php ?><!DOCTYPE html>
<html>
	<head>
	    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">			
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" 	crossorigin="anonymous">
		<link rel="stylesheet"  type="text/css" href="style-pc.css">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	    <title>MERY</title>
	</head>
	<body>
		<header>
			<a class="title">MERY</a>
			<div class="header-left">
				<input type="text" name="search"" value="気になるワードを入力">
				<a class="fas fa-search"></a>
			</div>
			<div class="header-right">
				<a>無料会員登録</a>
				<a>ログイン</a>
			</div>
		</header>
		<div class="top-container long">
			<div class="top-wrapper">
				<div class="top-contents-wrapper">					
					<div class="top-contents">
						<img src="https://cdn.pixabay.com/photo/2019/02/24/16/25/goose-4017943_960_720.jpg">
						<h2>
							3COINSで見つけた♡スマートフォンライフを快適に送るためのアイテム...
							<h3>『3COINS(スリーコインズ)』で見つけたスマホグッズをご紹介します。かわいいケースやしっかりとした...
								<h4 class="top-name">moepamyu<i class="far fa-star"></i>
								</h4>
								<h4 class="top-viewer">6074view</h4>
							</h3>
						</h2>
					</div>
					<div class="top-contents">
						<img src="https://cdn.pixabay.com/photo/2019/02/24/16/25/goose-4017943_960_720.jpg">
						<h2>
							カワイイよりお洒落が支持される時代。雰囲気バツグンのvintageガー...
							<h3>今って、「モテ」よりも、自分らしいお洒落が支持される時代だと思う。この記事では、おしゃれな雰囲気バ...
								<h4 class="top-name">hota<i class="far fa-star"></i></h4>
								<h4 class="top-viewer">8907view</h4>
							</h3>
						</h2>
					</div>
				</div>
				<div class="top-movie">
					<img src="https://cdn.pixabay.com/photo/2017/08/25/15/16/dove-2680487_960_720.jpg">
					<h2>一緒にかわいくなろう♡休みの日を彩る女の子デートプラン
						<h3>MERYはファッション・ヘアスタイル・美容・コスメ・おでかけ・恋愛などの「好き」に出会える情報を毎日お届けしていきいます。</h3>
					</h2>
				</div>
			</div>
        </div>
		<div class="main">
			<div class="main-left">
				<h2>記事
					<h3>
					<?php
					$categories = array('ホーム','ファッション','メイク・コスメ','ヘアスタイル','ネイル','美容','ライフスタイル','恋愛','グルメ','旅行・おでかけ');
					 foreach($categories as $category): ?>
						<h3 class="side">
							<img src="http://pictogram2.com/p/p0668/i/m.png" class="side-img">
							<?php echo $category ?>
						</h3>
					<?php endforeach ?> 
				</h2>
			</div>
			<div class="contents">
				<h2>
					<div class="date">
					02月01日のピックアップ
						<a>今日のピックアップ記事</a>
					</div>
					<div class="content">
						<img src="http://pictogram2.com/p/p0406/i/m.png">
						<a class="top">天使のようにハネを纏う系Gril?フェザーバングで叶える、ガーリー度100%前髪
							<a class="explain">
							天使のようなハネを纏える、「フェザーバング」という前髪のスタイルを知っていま...
							</a>
							<div class="detail">
								<a class="name">yoyo<i class="far fa-star"></i></a>
								<a class="viewer">1695view</a>
							</div>
						</a>	
					</div>
					<div class="content">
						<img src="http://pictogram2.com/p/p0406/i/m.png">
						<a class="top">クローゼットにあると安心感が違う。イロチ持ちしたいユニクロニットを特集します
							<a class="explain">
							「ユニクロのニットがクローゼットにある」という安心感。だってシンプルでベーシ...
							</a>
							
							<div class="detail">
								<a class="name">鈴<i class="far fa-star"></i></a>
								<a class="viewer">18230view</a>
							</div>	
						</a>	
					</div>
					<div class="content">
						<img src="http://pictogram2.com/p/p0406/i/m.png">
						<a class="top">〈2月前半〉バスガールにビートルズ？寒さも吹き飛ぶ「今日日何の日」コーデ	
							<a class="explain">
							毎日何かしらの記念日があるもの。2月前半もそんな楽し気な「今日は何の日？」が...
							</a>	
							<div class="detail">
								<a class="name">もこ<i class="far fa-star"></i></a>
								<a class="viewer">4702view</a>
							</div>
						</a>		
					</div>
					<div class="content">
						<img src="http://pictogram2.com/p/p0406/i/m.png">
						<a class="top">
						式典のママだけが使う時代はもう終わった？最先端ちっくなブローチ使いに注目
							<a class="explain">
							式典でママが使っていたイメージがあるかもしれないブローチだけど、普段のコーデ...
							</a>		
							<div class="detail">
								<a class="name">yoko<i class="far fa-star"></i></a>
								<a class="viewer">2964view</a>
							</div>	
						</a>		
					</div>
					<div class="content">
						<img src="http://pictogram2.com/p/p0406/i/m.png">
						<a class="top">
						アパレル定員みんな指先までおしゃれ説。IGから探す'こだわり'ネイルカタログ
							<a class="explain">お洋服を選んでいるとき、接客してくれる店員さんの指先を見ておしゃれだなあと感じ...
							</a>	
							<div class="detail">
								<a class="name">moepi<i class="far fa-star"></i></a>
								<a class="viewer">4568view</a>
							</div>
						</a>		
					</div>
					<div class="content">
						<img src="http://pictogram2.com/p/p0406/i/m.png">
						<a class="top">
						「キャラじゃないんで」は卒業しよ？ツインテールの日を狙って可愛い私でいる方法
							<a class="explain">
							2月2日。ツインテールの日というのを口実に、いつもよりちょっとかわいい私でいる...
							</a>	
							<div class="detail">
								<a class="name">omkchan<i class="far fa-star"></i></a>
								<a class="viewer">7411view</a>
							</div>
						</a>		
					</div>
					<div class="content">
						<img src="http://pictogram2.com/p/p0406/i/m.png">
						<a class="top">シンプルだけど無難じゃない。Nextトートバッグはメタリックカラーが気になる
						
						    <a class="explain">
							合わせやすく、使いやすいトートバッグ。定番でベーシックなアイテムだからこそ、...
							</a>	
							<div class="detail">
								<a class="name">yoko<i class="far fa-star"></i></a>
								<a class="viewer">7331view</a>
							</div>
						</a>	
					</div>
					<div class="content">
						<img src="http://pictogram2.com/p/p0406/i/m.png">
						<a class="top">結局してないや、年末大掃除。今からでも出来る、断捨離しながら体重グッバイ計画
							<a class="explain">
							年末の大掃除、忙しくて出来なかったという方も多いのでは？っ今回は、断捨離の方法...
							</a>
							<div class="detail">
								<a class="name">erin@<i class="far fa-star"></i></a>
								<a class="viewer">110477view</a>
							</div>	
						</a>	
					</div>
				</h2>
				<div class="index">
					<ul>
						<li>1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
						<span>...</span>
						<li>20</li>
						<span>...</span>
						<li>40</li>
				</div>
			</div>
			<div class="main-right">
				<div class="ranking-wrapper">
					<h2>
						<div class="ranking-head">
							アクセスランキング
							<p>人気の記事ランキング</p>
						</div>
						<div class="ranking">
							<img src="http://pictogram2.com/p/p0299/i/m.png" class="ranking-img">
							<a class="ranking-top">365日、それぞれにあるんだって。バースデーメイクはあなたの誕生花1をモ...
							</a>	
							<a class="ranking-name">yoko<i class="far fa-star"></i></a>
						</div>
						<div class="ranking">
							<img src="http://pictogram2.com/p/p0299/i/m.png" class="ranking-img">
							<a class="ranking-top">
							制服を強いられたわたっしたちが一番個性を表せるモノ。ハイセンスなペンケース...
							</a>
							<a class="ranking-name">miera<i class="far fa-star"></i></a>
						</div>
						<div class="ranking">
							<img src="http://pictogram2.com/p/p0299/i/m.png" class="ranking-img">
							<a class="ranking-top">
						    インスタの投稿で太めのローマ字が流行中らしい。イマドキ加...	
							</a>
							<a class="ranking-name">furamau<i class="far fa-star"></i></a>
						</div>
						<div class="ranking">
							<img src="http://pictogram2.com/p/p0299/i/m.png" class="ranking-img">
							<a class="ranking-top">
							こんなポーズ日頃の私は出来ないけど・・・♡ZEPED(ゼペット)の5つの遊び...	
							</a>
							<a class="ranking-name">みやのん<i class="far fa-star"></i></a>
						</div>
						<div class="ranking">
							<img src="http://pictogram2.com/p/p0299/i/m.png" class="ranking-img">
							<a class="ranking-top">
							「もっと早く買えば良かった泣」良い意味で後悔した声から見つけた神コ...
							</a>
							<a class="ranking-name">aiai<i class="far fa-star"></i></a>
						</div>
					</h2>
					<div class="more-ranking"><a>ランキング20位までみる</a></div>
				</div>
				<div class="attention-wrapper">
					<h2>
						<div class="attention-head">
							おすすめの記事
							<p>いまMERYで注目の記事</p>
						</div>
						<div class="attention">
							<img src="http://pictogram2.com/p/p0598/i/m.png">
							<a class="attention-top">365日、それぞれにあるんだって。バースデーメイクはあなたの誕生花をモ...
							</a>
							<a class="attention-name">yoko<i class="far fa-star"></i></a>
						</div>
						<div class="attention">
							<img src="http://pictogram2.com/p/p0598/i/m.png">
							<a class="attention-top">制服を強いられた私達が一番個性を表せるモノ。ハイセンスなペンケース...
							</a>
							<a class="attention-name">miera<i class="far fa-star"></i></a>
						</div>
						<div class="attention">
							<img src="http://pictogram2.com/p/p0598/i/m.png">
							<a class="attention-top">【バレンタイン変身計画vol.1】ワンポイントでもっとかわいく♡恋メイクLe...
							</a>
							<a class="attention-name">MERYEDITORS<i class="far fa-star"></i></a>
						</div>
						<div class="attention">
							<img src="http://pictogram2.com/p/p0598/i/m.png">
							<a class="attention-top">インスタの投稿で太めローマ字が流行中らしい。女の子たちのイマドキ加...
							</a>
							<a class="attention-name">furamau<i class="far fa-star"></i></a>
						</div>
						<div class="attention">
							<img src="http://pictogram2.com/p/p0598/i/m.png">
							<a class="attention-top">お値段以上の満足感があるはず♡自分へのご褒美に欲しい、おすすめの美...
							</a>
							<a class="attention-name">りょんぐ<i class="far fa-star"></i></a>
						</div>
					</h2>
				</div>
				<div class="arrival-wrapper">
					<h2>
						<div class="arrival-head">
							新着の記事
							<p>最新のトレンドを知るなら、ここをチェック</p>
						</div>
						<div class="arrival">
							<img src="http://pictogram2.com/p/p0082/i/m.png">
							<a class="arrival-top">個性派に片足だけ突っ込んでみる。"カラーメイク"で今日のワタシは一...
							</a>
							<a class="arrival-name">my<i class="far fa-star"></i></a>
						</div>
						<div class="arrival">
							<img src="http://pictogram2.com/p/p0082/i/m.png">
							<a class="arrival-top">今日だけのセルフネイルはプチプラで。納得のCANMAKEカラフルネイルズ品...
							</a>
							<a class="arrival-name">sayamaru<i class="far fa-star"></i></a>
						</div>
						<div class="arrival">
							<img src="http://pictogram2.com/p/p0082/i/m.png">
							<a class="arrival-top">今夜の晩酌のお供にいかが？さっと作れてお酒が進む、簡単おつまみレシ...
							</a>
							<a class="arrival-name">ha<i class="far fa-star"></i></a>
						</div>
						<div class="more-arrival"><a>新着記事一覧</a></div>
					</h2>
				</div>
			</div>
		</div>
		<div class="advertisement-wrapper long">
			<div class="advertisement">
				<img src="https://cdn.pixabay.com/photo/2014/05/06/12/27/grey-crowned-crane-338834_960_720.jpg" class="advertisement-img">
				<h2>アプリで、MERYがもっと便利に。
					<h3>電車の中でもサクサク快適。かわいい!欲しい!がどんどんみつかる。ちょっとした時間で、毎日がオシャレになるアプリ。
					</h3>
				</h2>
			</div>
		</div>
		<footer>
			<div class="footer-logo">
				<a>MERY</a>
			</div>
			<div class="footer-main">
				<div class="category">
					<a>カテゴリ一覧</a>
					<ul>
						<li>ファッション</li>
						<li>メイク・コスメ</li>
						<li>ヘアスタイル</li>
					</ul>
					<ul>
						<li>ネイル</li>
						<li>美容</li>
						<li>ライフスタイル</li>	
					</ul>
				</div>
				
				<div class="about">
					<a>MERYについて</a>
					<ul>
						<li>記事一覧</li>
						<li>キーワード一覧</li>
						<li>お問い合わせ</li>
					</ul>
					<ul>	
						<li>運営会社</li>
						<li>よくある質問</li>
						<li>利用規約</li>
						<li>プライバシーポリシー</li>
					</ul>
					<ul>	
						<li>リリースの送付はこちら</li>	
					</ul>
				</div>
			</div>
		</footer>
		<div class="add">
				<div class="add-logo">
					<a class="add-title">MERY[メリー]</a>
					<a class="add-sub">女の子の毎日をかわいく。</a>
				</div>	
					<div class="tw-button">
						<a class="fab fa-twitter"></a>
						<a>ツイート</a>
					</div>
					<div class="fb-button">
						<a class="fas fa-thumbs-up"></a>
						<a>いいね！　20万</a>
					</div>
					<div class="end-logo">&copy;2017 MERY Co.,Ltd.</div>
				</div>
			</div>
	</body>
</html>