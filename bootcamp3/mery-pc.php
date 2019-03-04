<?php 
$var="MERY"?><!DOCTYPE html>
<html>
	<head>
	    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">			
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" 	crossorigin="anonymous">
		<link rel="stylesheet"  type="text/css" href="style-pc.css">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	    <title>MERY</title>
	    <?php require_once('contents.php')?>
	</head>
	<body>
		<header class="wrap">
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
		<div class="top-container">
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
		<div class="main wrap">
			<div class="main-left">
				<h2>記事
					<h3>
					<?php
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
					<?php 
					foreach ($contents as $element):?>
					<div class="content">
						<img src="http://pictogram2.com/p/p0406/i/m.png">
						<a class="top"><?php echo $element[0]?>
							<a class="explain">
							<?php echo $element[1]?>
							</a>
							<div class="detail">
								<a class="name"><?php echo $element[2]?><i class="far fa-star"></i></a>
								<a class="viewer"><?php echo $element[3]?></a>
							</div>
						</a>	
					</div>	
					
					<?php endforeach ?>
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
						<?php
						foreach($rankingContents as $rankingElement =>$rankingName):
						?>
						<div class="ranking">
							<img src="http://pictogram2.com/p/p0299/i/m.png" class="ranking-img">
							<a class="ranking-top"><?php echo $rankingElement?>
							</a>	
							<a class="ranking-name"><?php echo $rankingName?><i class="far fa-star"></i></a>
						</div>
					<?php endforeach ?>
					</h2>
					<div class="more-ranking"><a>ランキング20位までみる</a></div>
				</div>
				<div class="attention-wrapper">
					<h2>
						<div class="attention-head">
							おすすめの記事
							<p>いまMERYで注目の記事</p>
						</div>
						<?php
				 		foreach ($attentionContents as $attentionElement =>$attentionName):?>
						<div class="attention">
							<img src="http://pictogram2.com/p/p0598/i/m.png">
							<a class="attention-top"><?php echo $attentionElement?></a>
							<a class="attention-name"><?php echo $attentionName?><i class="far fa-star"></i></a>
						</div>
						<?php endforeach ?>
					</h2>
				</div>
				<div class="arrival-wrapper">
					<h2>
						<div class="arrival-head">
							新着の記事
							<p>最新のトレンドを知るなら、ここをチェック</p>
						</div>
						<?php foreach ($arrivalContents as $arrivalElement => $arrivalName):?>
						<div class="arrival">
							<img src="http://pictogram2.com/p/p0082/i/m.png">
							<a class="arrival-top"><?php echo $arrivalElement ?>
							</a>
							<a class="arrival-name"><?php echo $arrivalName ?><i class="far fa-star"></i></a>
						</div>
					<?php endforeach ?>
						<div class="more-arrival"><a>新着記事一覧</a></div>
					</h2>
				</div>
			</div>
		</div>
		<div class="advertisement-wrapper">
			<div class="advertisement">
				<img src="https://cdn.pixabay.com/photo/2014/05/06/12/27/grey-crowned-crane-338834_960_720.jpg" class="advertisement-img">
				<h2>アプリで、MERYがもっと便利に。
					<h3>電車の中でもサクサク快適。かわいい!欲しい!がどんどんみつかる。ちょっとした時間で、毎日がオシャレになるアプリ。
					</h3>
				</h2>
			</div>
		</div>
		<footer class="wrap">
			<div class="footer-logo">
				<a>MERY</a>
			</div>
			<div class="footer-main">
				<div class="category">
					<a>カテゴリ一覧</a>
					<?php
					foreach($footerCategories as $footerCategory ):?>
					<ul>
						<li><?php
						echo $footerCategory[0]?></li>
						<li><?php
						echo $footerCategory[1]?></li>
						<li><?php
						echo $footerCategory[2]?></li>
					</ul>
					<?php endforeach?>
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
		<div class="add wrap">
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