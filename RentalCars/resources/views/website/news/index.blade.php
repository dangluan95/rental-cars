@extends('layouts.frontend.common')
@section('content')
<section class="b-pageHeader">
	<div class="container">
		<h1 class=" wow zoomInLeft" data-wow-delay="0.5s">Retal Cars - News</h1>
		<div class="b-pageHeader__search wow zoomInRight"
			data-wow-delay="0.5s">
			<h3>Read Latest Auto News &amp; Reviews</h3>
		</div>
	</div>
</section>
<!--b-pageHeader-->

<div class="b-breadCumbs s-shadow">
	<div class="container wow zoomInUp" data-wow-delay="0.5s">
		<a href="{{route('home')}}" class="b-breadCumbs__page">Home</a><span
			class="fa fa-angle-right"></span><a href="{{route('news')}}"
			class="b-breadCumbs__page m-active">News</a>
	</div>
</div>
<!--b-breadCumbs-->

<section class="b-blog s-shadow">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-xs-12">
				<div class="b-blog__posts">
					
					
					<div class="b-blog__posts-one wow zoomInUp" data-wow-delay="0.3s">
						<div class="row m-noBlockPadding">
							<div class="col-sm-1 col-xs-2">
								<div class="b-blog__posts-one-author">
									<div class="b-blog__posts-one-author-img"></div>
									<div class="b-blog__posts-one-share s-lineDownCenter">SHARE
										THIS</div>
									<div class="b-blog__posts-one-social">
										<a href="#"><span class="fa  fa-facebook-square" style="color: #6699FF"></span></a>
									</div>
								</div>
							</div>
							<div class="col-sm-11 col-xs-10">
								<div class="b-blog__posts-one-body">
									<header class="b-blog__posts-one-body-head">
										<h2 class="s-titleDet">2015 Chrysler 300: 7 Things You Need to
											Know</h2>
										<div class="b-blog__posts-one-body-head-notes">
											<span class="b-blog__posts-one-body-head-notes-note">
													<span class="fa fa-tags"></span>AutoMarket
												</span>
											<span class="b-blog__posts-one-body-head-notes-note"><span
												class="fa fa-user"></span>Our Admin</span> <span
												class="b-blog__posts-one-body-head-notes-note"><span
												class="fa fa-calendar-o"></span>20th May 2015</span> <span
												class="b-blog__posts-one-body-head-notes-note"><span
												class="fa fa-thumbs-up"></span>5 Likes</span>
												<span
												class="b-blog__posts-one-body-head-notes-note"><span class="fa fa-comment"></span>5 Comments</span> 
												<span
												class="b-blog__posts-one-body-head-notes-note"><span
												class="fa fa-eye"></span>5 Views</span>
												
										</div>
									</header>
									<div class="b-blog__posts-one-body-main">
										<div class="b-blog__posts-one-body-main-img">
											<img class="img-responsive" src="media/blog/chrysler.jpg"
												alt="chrysler" />
										</div>
										<p>Curabitur libero. Donec facilisis velit eu est. Phasellus
											cons quat. Aenean vitae quam. Vivamus nunc. Nunc conseq
											usemdw veld metus imperdiet lacinia. In viverra dolor non
											justo. Proin molest erat inder rhoncus posuere de nibh quam
											onsectet uer lectus acwl vulputate ligula lorem dolor. Donec
											nunc. Suspendisse potent. Integer blandit massa sit amet
											condimentum laoreet, diam elementum urna sed tincidunt lacus
											sapien pulvinar erat. Mauris vulputate mivitae lobortis.
											Lorem ipsum dolor sit amet consec etur adipisicing elit, sed
											do eiusmod tempor incididunt ut labore.</p>
										<a href="article.html" class="btn m-btn m-readMore">READ MORE<span
											class="fa fa-angle-right"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="b-blog__posts-one wow zoomInUp" data-wow-delay="0.3s">
						<div class="row m-noBlockPadding">
							<div class="col-sm-1 col-xs-2">
								<div class="b-blog__posts-one-author">
									<div class="b-blog__posts-one-author-img"></div>
									<div class="b-blog__posts-one-share s-lineDownCenter">SHARE
										THIS</div>
									<div class="b-blog__posts-one-social">
										<div>
											<a href="#"><span class="fa fa-google-plus-square "></span></a>
											<a href="#"><span class="fa  fa-facebook-square"></span></a>
										</div>
										<div>
											<a href="#"><span class="fa fa-twitter-square "></span></a> <a
												href="#"><span class="fa fa-pinterest-square"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-10 col-sm-11">
								<div class="b-blog__posts-one-body">
									<header class="b-blog__posts-one-body-head">
										<h2 class="s-titleDet">BMW M4 vs Jaguar F-Type Coupe
											Comparison Test</h2>
										<div class="b-blog__posts-one-body-head-notes">
											<span class="b-blog__posts-one-body-head-notes-note"><span
												class="fa fa-user"></span>Our Admin</span> <span
												class="b-blog__posts-one-body-head-notes-note"><span
												class="fa fa-calendar-o"></span>20th May 2015</span> <span
												class="b-blog__posts-one-body-head-notes-note"><span
												class="fa fa-comment"></span>5 Comments</span> <span
												class="b-blog__posts-one-body-head-notes-note"><span
												class="fa fa-tags"></span>AutoMarket, Tips &amp; Advice</span>
										</div>
									</header>
									<div class="b-blog__posts-one-body-main">
										<div class="b-blog__posts-one-body-main-img">
											<img class="img-responsive" src="media/blog/bmwBlog.jpg"
												alt="bmw" />
										</div>
										<p>Curabitur libero. Donec facilisis velit eu est. Phasellus
											cons quat. Aenean vitae quam. Vivamus nunc. Nunc conseq
											usemdw veld metus imperdiet lacinia. In viverra dolor non
											justo. Proin molest erat inder rhoncus posuere de nibh quam
											onsectet uer lectus acwl vulputate ligula lorem dolor. Donec
											nunc. Suspendisse potent. Integer blandit massa sit amet
											condimentum laoreet, diam elementum urna sed tincidunt lacus
											sapien pulvinar erat. Mauris vulputate mivitae lobortis.
											Lorem ipsum dolor sit amet consec etur adipisicing elit, sed
											do eiusmod tempor incididunt ut labore.</p>
										<a href="article.html" class="btn m-btn m-readMore">READ MORE<span
											class="fa fa-angle-right"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div
						class="b-items__pagination-main text-center pull-right wow zoomInUp"
						data-wow-delay="0.3s">
						<a href="#" class="m-left"><span class="fa fa-angle-left"></span></a>
						<span class="m-active"><a href="#">1</a></span> <span><a href="#">2</a></span>
						<span><a href="#">3</a></span> <span><a href="#">4</a></span> <a
							href="#" class="m-right"><span class="fa fa-angle-right"></span></a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-xs-12">
				<aside class="b-blog__aside">
					<form class="b-blog__aside-search wow zoomInUp"
						data-wow-delay="0.3s" action="/" method="post">
						<div>
							<input type="text" name="search" value="" placeholder="Search" />
							<button type="submit">
								<span class="fa fa-search"></span>
							</button>
						</div>
					</form>
					<div class="b-blog__aside-categories wow zoomInUp"
						data-wow-delay="0.3s">
						<header class="s-lineDownLeft">
							<h2 class="s-titleDet">CATEGORIES</h2>
						</header>
						<nav>
							<ul class="b-blog__aside-categories-list">
								<li><a href="#">Auto Buying Tips &amp; Advice</a></li>
								<li><a href="#">Latest Models News</a></li>
								<li class="m-active"><a href="#">Test Drives</a></li>
								<li><a href="#">Video Reviews</a></li>
								<li><a href="#">Analysis &amp; Features</a></li>
							</ul>
						</nav>
					</div>
					<div class="b-blog__aside-popular wow zoomInUp"
						data-wow-delay="0.3s">
						<header class="s-lineDownLeft">
							<h2 class="s-titleDet">POPULAR POSTS</h2>
						</header>
						<div class="b-blog__aside-popular-posts">
							<div class="b-blog__aside-popular-posts-one">
								<img class="img-responsive" src="media/270x150/mercBlog.png"
									alt="merc" />
								<h4>
									<a href="article.html">2016 Mercedes-Benz GLE-Class Debuts</a>
								</h4>
								<div class="b-blog__aside-popular-posts-one-date">
									<span class="fa fa-calendar-o"></span>20th May 2015
								</div>
							</div>
							<div class="b-blog__aside-popular-posts-one">
								<img class="img-responsive" src="media/270x150/outlander.png"
									alt="outlander" />
								<h4>
									<a href="article.html">Refreshed 2016 Mitsubishi Outlander</a>
								</h4>
								<div class="b-blog__aside-popular-posts-one-date">
									<span class="fa fa-calendar-o"></span>20th May 2015
								</div>
							</div>
						</div>
					</div>
					<div class="b-blog__aside-text wow zoomInUp" data-wow-delay="0.3s">
						<header class="s-lineDownLeft">
							<h2 class="s-titleDet">WHY CHOOSE US?</h2>
						</header>
						<p>Curabitur libero. Donec facilisis velit edu est Phasellus
							conside quat. Aenean vitae quam. Vivamus etdu nunc. Nunc conseq
							sem velde metus imperdiet lacinia. Cras ornare pretum tortor.
							Donec sed augue sed nunc rutru me egestas. Bulum ante ipsum
							primisn faucibus orci luctus et ultrices posuere.</p>
					</div>
					<div class="b-blog__aside-reviews wow zoomInUp"
						data-wow-delay="0.3s">
						<header class="s-lineDownLeft">
							<h2 class="s-titleDet">LATEST REVIEWS</h2>
						</header>
						<div class="b-blog__aside-reviews-posts">
							<div class="b-blog__aside-reviews-posts-one">
								<div class="row m-smallPadding">
									<div class="col-xs-5">
										<img src="media/100x80/audiRev.jpg" alt="audi"
											class="img-responsive pull-right" />
									</div>
									<div class="col-xs-7">
										<div class="b-blog__aside-reviews-posts-one-info">
											<p>
												First Drive:<br />2016 Audi Q3
											</p>
											<div class="b-world__item-val">
												<div class="b-world__item-val-circles">
													<span></span> <span></span> <span></span> <span></span> <span
														class="m-empty"></span>
												</div>
												<span class="b-world__item-num">4.1</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="b-blog__aside-reviews-posts-one">
								<div class="row m-smallPadding">
									<div class="col-xs-5">
										<img src="media/100x80/mercRev.jpg" alt="merc"
											class="img-responsive  pull-right" />
									</div>
									<div class="col-xs-7">
										<div class="b-blog__aside-reviews-posts-one-info">
											<p>Mercedes-Benz GLA 2015 Hottest Hatch</p>
											<div class="b-world__item-val">
												<div class="b-world__item-val-circles">
													<span></span> <span></span> <span></span> <span></span> <span
														class="m-empty"></span>
												</div>
												<span class="b-world__item-num">4.1</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="b-blog__aside-reviews-posts-one">
								<div class="row m-smallPadding">
									<div class="col-xs-5">
										<img src="media/100x80/mazdaRev.jpg" alt=""
											class="img-responsive  pull-right" />
									</div>
									<div class="col-xs-7">
										<div class="b-blog__aside-reviews-posts-one-info">
											<p>
												First Look: <br />2016 Mazda CX-3
											</p>
											<div class="b-world__item-val">
												<div class="b-world__item-val-circles">
													<span></span> <span></span> <span></span> <span></span> <span
														class="m-empty"></span>
												</div>
												<span class="b-world__item-num">4.1</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="b-items__aside-sell wow zoomInUp" data-wow-delay="0.3s">
						<div class="b-items__aside-sell-img">
							<h3>SELL YOUR CAR</h3>
						</div>
						<div class="b-items__aside-sell-info">
							<p>Nam tellus enimds eleifend dignis lsim biben edum tristique
								sed metus fusce Maecenas lobortis.</p>
							<a href="submit1.html" class="btn m-btn">SHOP NOW<span
								class="fa fa-angle-right"></span></a>
						</div>
					</div>
					<div class="b-detail__main-aside-about-call wow zoomInUp"
						data-wow-delay="0.3s">
						<span class="fa fa-phone"></span>
						<h4><b>(+84).975.783.635</b></h4>
						<p>QUESTIONS? CALL US 24/7</p>
					</div>
				</aside>
			</div>
		</div>
	</div>
</section>
<!--b-blog-->
@endsection