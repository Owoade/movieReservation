<?php
$ip = $_SERVER['REMOTE_ADDR'];
$encrypt = md5($ip);

if(!isset($_COOKIE['hash'])){
	setcookie("hash", $encrypt, time()+60*60*24*365);
}
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>MOVIEPOINT CINEMA</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap"
		rel="stylesheet">
	<!-- Template CSS -->
</head>

<body>

	<!-- header -->
	<header id="site-header" class="w3l-header fixed-top">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1><a class="navbar-brand" href="index.php"><span class="fa fa-play icon-log"
							aria-hidden="true"></span>
						MoviePoint </a></h1>
				<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<!-- <span class="navbar-toggler-icon"></span> -->
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						
				<li class="nav-item">
								<a class="nav-link" href="genre.php">Top Movies</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="food.php">Foods & Drinks </a>
							</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./sign-up.php">Admin</a>
						</li>
					</ul>

					<!--/search-right-->
					<!--/search-right-->
					<div class="search-right">
						<a href="./payment.html" class="btn search-hny mr-lg-3 mt-lg-0 mt-4" title="search">Book Now</span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">
								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Search your Keyword" name="search"
										required="required" autofocus="">
									<button type="submit" class="btn"><span class="fa fa-search"
											aria-hidden="true"></span></button>
								</form>
								<div class="browse-items">
									<h3 class="hny-title two mt-md-5 mt-4">Browse all:</h3>
									<ul class="search-items">
										<li><a href="genre.html">Action</a></li>
										<li><a href="genre.html">Drama</a></li>
										<li><a href="genre.html">Family</a></li>
										<li><a href="genre.html">Thriller</a></li>
										<li><a href="genre.html">Commedy</a></li>
										<li><a href="genre.html">Romantic</a></li>
										<li><a href="genre.html">Tv-Series</a></li>
										<li><a href="genre.html">Horror</a></li>
										<li><a href="genre.html">Action</a></li>
										<li><a href="genre.html">Drama</a></li>
										<li><a href="genre.html">Family</a></li>
										<li><a href="genre.html">Thriller</a></li>
										<li><a href="genre.html">Commedy</a></li>
										<li><a href="genre.html">Romantic</a></li>
										<li><a href="genre.html">Tv-Series</a></li>
										<li><a href="genre.html">Horror</a></li>
									</ul>
								</div>
							</div>
							<a class="close" href="#close">×</a>
						</div>
						<!-- /search popup -->
						<!--/search-right-->
					</div>


				</div>
				<!-- toggle switch for light and dark theme -->
				<div class="mobile-position">
					<nav class="navigation">
						<div class="theme-switch-wrapper">
							<label class="theme-switch" for="checkbox">
								<input type="checkbox" id="checkbox">
								<div class="mode-container">
									<i class="gg-sun"></i>
									<i class="gg-moon"></i>
								</div>
							</label>
						</div>
					</nav>
				</div>
				<!-- //toggle switch for light and dark theme -->
			</div>
		</nav>
		<!--//nav-->
	</header>
	<!-- //header -->
	<!-- main-slider -->
	<section class="w3l-main-slider position-relative" id="home">
		<div class="companies20-content">
			<div class="owl-one owl-carousel owl-theme">
				<div class="item">
					<li>
						<div class="slider-info banner-view bg bg2">
							<div class="banner-info">
								<h3>Bad Boys For life</h3>
								<p>Detectives Mike Lowrey and Marcus Burnett join the Miami Police Department's special team AMMO to bring down the ruthless Armando,<span class="over-para"> who is on a mission to kill Mike at his mother Isabel's orders.</span></p>
								<a href="#small-dialog1" class="popup-with-zoom-anim play-view1">
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
									<h6>Watch Trailer</h6>
								</a>
								<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
								
								<div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
									<iframe width="729" height="410" src="https://www.youtube.com/embed/jKCj3XuPG8M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info  banner-view banner-top1 bg bg2">
							<div class="banner-info">
								<h3>The Influencer</h3>
								<p>A Story of an Influencer who faked her way to fame.<span class="over-para"> 
								</span></p>
								<a href="#small-dialog2" class="popup-with-zoom-anim play-view1">
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
									<h6>Watch Trailer</h6>
								</a>
								<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
								<div id="small-dialog2" class="zoom-anim-dialog mfp-hide">
									<iframe width="798" height="449" src="https://www.youtube.com/embed/OMxzncHb--s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top2 bg bg2">
							<div class="banner-info">
								<h3>The Long Night</h3>
								<p>While searching for the parents she's never known, Grace and her boyfriend return to her childhood stomping grounds in the South to investigate a promising lead on her family's whereabouts.<span class="over-para"> Upon arrival, the couple's weekend takes a bizarre, terrifying turn as a nightmarish cult and its maniacal leader terrorize the pair en route to fulfilling an ancient, apocalyptic prophecy.</span></p>
								<a href="#small-dialog3" class="popup-with-zoom-anim play-view1">
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
									<h6>Watch Trailer</h6>
								</a>
								<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
								<div id="small-dialog3" class="zoom-anim-dialog mfp-hide">
									<iframe width="798" height="449" src="https://www.youtube.com/embed/SjnlFjoQ6kM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top3 bg bg2">
							<div class="banner-info">
								<h3>Sing 2</h3>
								<p>Can-do koala Buster Moon and his all-star cast of animal performers prepare to launch a dazzling stage extravaganza in the glittering entertainment capital of the world. <span class="over-para">  There's just one hitch -- he has to find and persuade the world's most reclusive rock star to join them.</span></p>
								<a href="#small-dialog4" class="popup-with-zoom-anim play-view1">
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
									<h6>Watch Trailer</h6>
								</a>
								<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
								<div id="small-dialog4" class="zoom-anim-dialog mfp-hide">
									<iframe width="798" height="449" src="https://www.youtube.com/embed/6zEwGQ11pjA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
		</div>
	</section>
	<!-- //banner-slider-->
	<!-- main-slider -->
	<!--grids-sec1-->
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Popular Movies</h3>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="genre.html">Show all</a></h4>
						</div>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<div class="item vhny-grid">
						<div class="box16">
							<a href="https://www.youtube.com/embed/Zi4LMpSDccc">
								<figure>
									<img class="img-fluid" src="assets/images/m7.jpg" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Frozen 2</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 24mins

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="https://www.youtube.com/embed/xi-1NchUqMA" class="pop-up youtube">
								<figure>
									<img class="img-fluid" src="assets/images/m3.jpg" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Knives Out</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 57mins

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="https://www.youtube.com/embed/AST2-4db4ic">
								<figure>
									<img class="img-fluid" src="assets/images/m4.jpg" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Little Women</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 52mins

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="https://www.youtube.com/embed/10VphsyJhbU">
								<figure>
									<img class="img-fluid" src="assets/images/m5.jpg" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Jumanji</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 55mins

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//grids-sec1-->
	<!--grids-sec2-->
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Now Showing in Cinemas</h3>
						</div>
					</div>
				</div>
				<div class="owl-three owl-carousel owl-theme">
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="#small-dialog5" class="popup-with-zoom-anim play-view1">
								<figure>
									<img class="img-fluid" src="assets/images/n1.jpg" alt="">
								</figure>
								<div class="box-content">
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 36mins

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
							<div id="small-dialog5" class="zoom-anim-dialog mfp-hide">
								<iframe width="798" height="449" src="https://www.youtube.com/embed/BIhNsAtPbPI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>							
						</div>
						<h3> <a class="title-gd" href="genre.php">No Time to Die</a></h3>
						<p>James Bond is enjoying a tranquil life in Jamaica after leaving active service. However, his peace is short-lived as his old CIA friend, Felix Leiter, shows up and asks for help. <span class="over-para">The mission to rescue a kidnapped scientist turns out to be far more treacherous than expected, leading Bond on the trail of a mysterious villain who's armed with a dangerous new technology.</span></p>
						<div class="button-center text-center mt-4">
							<a href=""  class="btn watch-button">Book Now</a>
						</div>

					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="#small-dialog6" class="popup-with-zoom-anim play-view1">
								<figure>
									<img class="img-fluid" src="assets/images/Sing_2_poster.jpg" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 45mins

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
							<div id="small-dialog6" class="zoom-anim-dialog mfp-hide">
								<iframe width="798" height="449" src="https://www.youtube.com/embed/6zEwGQ11pjA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						<h3> <a class="title-gd" href="genre.php">Sing 2</a></h3>
						<p>Can-do koala Buster Moon and his all-star cast of animal performers prepare to launch a dazzling stage extravaganza in the glittering entertainment capital of the world. <span class="over-para"> What begins as Buster's dream of big-time success soon becomes an emotional reminder of the power of music to heal even the most broken heart.</span></p>
						<div class="button-center text-center mt-4">
						<a href="./booking.php" class="btn watch-button">Book Now</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="#small-dialog7" class="popup-with-zoom-anim play-view1">
								<figure>
									<img class="img-fluid" src="assets/images/n3.jpg" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 40mins

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
							<div id="small-dialog7" class="zoom-anim-dialog mfp-hide">
								<iframe width="798" height="449" src="https://www.youtube.com/embed/pDHSLL5DBcM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						<h3> <a class="title-gd" href="genre.html">Free Guy</a></h3>
						<p> When a bank teller discovers he's actually a background player in an open-world video game, he decides to become the hero of his own story -one that he can rewrite himself. <span class="over-para"> In a world where there's no limits,he's determined to save the day his way before it's too late, and maybe find a little romance with the coder who conceived him.</span></p>
						<div class="button-center text-center mt-4">
						<a href="./booking.php" class="btn watch-button">Book Now</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="#small-dialog8" class="popup-with-zoom-anim play-view1">
								<figure>
									<img class="img-fluid" src="assets/images/n4.jpg" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 20mins

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
							<div id="small-dialog8" class="zoom-anim-dialog mfp-hide">
								<iframe width="798" height="449" src="https://www.youtube.com/embed/pfAhQSz-j_o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						<h3> <a class="title-gd" href="genre.html">My Spy</a></h3>
						<p>JJ, a CIA operative, is tasked with spying on a single mother and her daughter with tenuous links to an arms dealer.<span class="over-para">But the young girl catches JJ forcing him to do her bidding or be exposed.                                                                                                                                                                                                                    </span></p>
						<div class="button-center text-center mt-4">
							<a href="./booking.php" class="btn watch-button">Book Now</a>
						</div>

					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="#small-dialog9" class="popup-with-zoom-anim play-view1">
								<figure>
									<img class="img-fluid" src="assets/images/n5.jpg" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 33mins

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
							<div id="small-dialog9" class="zoom-anim-dialog mfp-hide">
								<iframe width="798" height="449" src="https://www.youtube.com/embed/P9mSVDm1GeM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						<h3> <a class="title-gd" href="genre.php">Scoob</a></h3>
						<p>Shaggy and Scooby learn that Dick Dastardly, a villain, is out to capture Scooby. With the help of masked superhero Blue Falcon, the Mystery Inc gang sets out to thwart the supercriminal's evil plans.</p>
						<div class="button-center text-center mt-4">
						<a href="./booking.php" class="btn watch-button">Book Now</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="#small-dialog10" class="popup-with-zoom-anim play-view1">
								<figure>
									<img class="img-fluid" src="assets/images/the 3552.jpg" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 1min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
							<div id="small-dialog10" class="zoom-anim-dialog mfp-hide">
								<iframe width="1310" height="496" src="https://www.youtube.com/embed/SV0s2S9reT0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						<h3> <a class="title-gd" href="genre.php">The 355</a></h3>
						<p>CIA agent Mason "Mace" Brown joins forces with a rival German agent, a cutting-edge computer specialist and a Colombian psychologist when a top-secret weapon falls into the hands of a group of mercenaries.<span class="over-para">Together,the four women embark on a breakneck mission to save the world while staying one step ahead of a mysterious figure who's tracking their every move</span></p>
						<div class="button-center text-center mt-4">
						<a href="./booking.php" class="btn watch-button">Book Now</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!--grids-sec2-->
	<!--mid-slider -->
	<section class="w3l-mid-slider position-relative">
		<div class="companies20-content">
			<div class="owl-mid owl-carousel owl-theme">
				<div class="item">
					<li>
						<div class="slider-info mid-view bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text">Comedy</span>
									<h3>Jumanji: The Next Level</h3>
									<p>2019 ‧ Comedy/Action ‧ 1h 32mins</p>
									<a class="watch" href="https://www.youtube.com/embed/10VphsyJhbU"><span class="fa fa-play"
											aria-hidden="true"></span>
										Watch Trailer</a>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info mid-view mid-top1 bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text">Adventure</span>
									<h3>Dolittle</h3>
									<p>2020 ‧ Family/Adventure ‧ 2hrs 2mins</p>
									<a class="watch" href="https://www.youtube.com/embed/hej47fWFLQs"><span class="fa fa-play"
											aria-hidden="true"></span>
										Watch Trailer</a>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info mid-view mid-top2 bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text">Action</span>
									<h3>Bad Boys for Life</h3>
									<p>2020 ‧ Comedy/Action ‧ 1hr 32mins</p>
									<a class="watch" href="https://www.youtube.com/embed/jKCj3XuPG8M" ><span class="fa fa-play"
											aria-hidden="true"></span>
										Watch Trailer</a>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
		</div>
	</section>
	<!-- //mid-slider-->
	<!--/tabs-->
	<section class="w3l-albums py-5" id="projects">
		<div class="container py-lg-4">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<ul class="resp-tabs-list hor_1">
							<li>Recent Movies</li>
							<div class="clear"></div>
						</ul>
						<div class="resp-tabs-container hor_1">
							<div class="albums-content">
								<div class="row">
									<!--/set1-->
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="#small-dialog11" class="popup-with-zoom-anim play-view1">

													<img src="assets/images/Sing_2_poster.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
												<div id="small-dialog11" class="zoom-anim-dialog mfp-hide">
													<iframe width="798" height="449" src="https://www.youtube.com/embed/6zEwGQ11pjA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
											</div>
											<div class="message">
												<p>Animation</p>
												<a class="author-book-title" href="genre.html">Sing2</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1Hr 45mins

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="#small-dialog12" class="popup-with-zoom-anim play-view1">
													<img src="assets/images/n5.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
												<div id="small-dialog12" class="zoom-anim-dialog mfp-hide">
													<iframe width="798" height="449" src="https://www.youtube.com/embed/C9U_v_KuEb4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
											</div>
											<div class="message">
												<p>Animation</p>
												<a class="author-book-title" href="genre.html">Scoob</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1Hr 20mins

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="#small-dialog13" class="popup-with-zoom-anim play-view1">
													<img src="assets/images/m4.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
												<div id="small-dialog13" class="zoom-anim-dialog mfp-hide">
													<iframe width="1310" height="496" src="https://www.youtube.com/embed/AST2-4db4ic" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
											</div>
											<div class="message">
												<p>Comedy</p>
												<a class="author-book-title" href="genre.html">Little Women</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1Hr 52mins

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<!--//set1-->
									<!--/set1-->
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="#small-dialog14" class="popup-with-zoom-anim play-view1">
													<img src="assets/images/the 3552.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
												<div id="small-dialog14" class="zoom-anim-dialog mfp-hide">
													<iframe width="1310" height="496" src="https://www.youtube.com/embed/SV0s2S9reT0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
											</div>
											<div class="message">
												<p>Action</p>
												<a class="author-book-title" href="genre.html">The 355</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1Hr 1min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="#small-dialog15" class="popup-with-zoom-anim play-view1">
													<img src="assets/images/m2.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
												<div id="small-dialog15" class="zoom-anim-dialog mfp-hide">
													<iframe width="1310" height="496" src="https://www.youtube.com/embed/CDf_EnIhojk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
											</div>
											<div class="message">
												<p>Horror</p>
												<a class="author-book-title" href="genre.html">Doctor Sleep</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1Hr 55mins

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="#small-dialog16" class="popup-with-zoom-anim play-view1">
													<img src="assets/images/m3.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
												<div id="small-dialog16" class="zoom-anim-dialog mfp-hide">
													<iframe width="1310" height="496" src="https://www.youtube.com/embed/GM15Jx1qLx8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
											</div>
											<div class="message">
												<p>Crime|Drama</p>
												<a class="author-book-title" href="genre.html">Knives Out</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1Hr 57min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<!--//set1-->
									<!--/set1-->
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="#small-dialog17" class="popup-with-zoom-anim play-view1">
													<img src="assets/images/n1.jpg" class="img-fluid"
														alt="author image">
													<span class="fa fa-play video-icon" aria-hidden="true"></span>
												</a>
												<div id="small-dialog17" class="zoom-anim-dialog mfp-hide">
													<iframe width="1310" height="496" src="https://www.youtube.com/embed/BIhNsAtPbPI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
											</div>
											<div class="message">
												<p>Action</p>
												<a class="author-book-title" href="genre.html">No Time to Die</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1Hr 36mins

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="#small-dialog18" class="popup-with-zoom-anim play-view1">
													<img src="assets/images/n4.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
												<div id="small-dialog18" class="zoom-anim-dialog mfp-hide">
													<iframe width="1310" height="496" src="https://www.youtube.com/embed/dFGYK-iRMgw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
											</div>
											<div class="message">
												<p>Action|Comedy</p>
												<a class="author-book-title" href="genre.html">My Spy</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1Hr 20mins

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="#small-dialog19" class="popup-with-zoom-anim play-view1">
													<img src="assets/images/n3.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
												<div id="small-dialog18" class="zoom-anim-dialog mfp-hide">
													<iframe width="1310" height="496" src="https://www.youtube.com/embed/JORN2hkXLyM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
											</div>
											<div class="message">
												<p>Comedy|Sci-Fi</p>
												<a class="author-book-title" href="genre.html">Free Guy</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2Hr 2mins

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<!--//set1-->
								</div>
							</div>
							<div class="albums-content">
								<div class="row">
									<!--/set1-->
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m1.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Rocketman</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m2.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Doctor Sleep</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m3.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Knives Out</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<!--//set1-->
									<!--/set2-->
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m7.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Frozen 2</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m8.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Aladin</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m9.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Joker</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<!--//set2-->
								</div>
							</div>
							<div class="albums-content">
								<div class="row">
									<!--/set3-->
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m7.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Frozen 2</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m8.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Toy Story 4</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m9.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Joker</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<!--//set3-->
									<!--/set3-->
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m10.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Alita</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m11.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">The Lego</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m12.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">The Hustle</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<!--//set3-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //tabs-->
	<!-- footer-66 -->
	<footer class="w3l-footer">
		<section class="footer-inner-main">
			<div class="footer-hny-grids py-5">
				<div class="container py-lg-4">
					<div class="text-txt">
						<div class="right-side">
							<div class="row footer-about">
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="genre.html"><img class="img-fluid" src="assets/images/sidebar1.png"
											alt=""></a>
								</div>
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="genre.html"><img class="img-fluid" src="assets/images/sidebar2.png"
											alt=""></a>
								</div>
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="genre.html"><img class="img-fluid" src="assets/images/sidebar3.png"
											alt=""></a>
								</div>
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="genre.html"><img class="img-fluid" src="assets/images/sidebar4.png"
											alt=""></a>
								</div>
							</div>
							<div class="row footer-links">


								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Movies</h6>
									<ul>
										<li><a href="#">Movies</a></li>
										<li><a href="#">Videos</a></li>
										<li><a href="#">English Movies</a></li>
										<li><a href="#">Horror</a></li>
										<li><a href="#">Upcoming Movies</a></li>
										<li><a href="contact.html">Contact Us</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Information</h6>
									<ul>
										<li><a href="index.html">Home</a> </li>
										<li><a href="about.html">About</a> </li>
										<li><a href="#">Tv Series</a> </li>
										<li><a href="#">Blogs</a> </li>
										<li><a href="#">Login</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Locations</h6>
									<ul>
										<li><a href="genre.html">Nigeria</a></li>
										<li><a href="genre.html">France</a></li>
										<li><a href="genre.html">Taiwan</a></li>
										<li><a href="genre.html">United States</a></li>
										<li><a href="genre.html">Korea</a></li>
										<li><a href="genre.html">United Kingdom</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Newsletter</h6>
									<form action="#" class="subscribe mb-3" method="post">
										<input type="email" name="email" placeholder="Your Email Address" required="">
										<button><span class="fa fa-envelope-o"></span></button>
									</form>
									<p>Enter your email and receive the latest news, updates and special offers from us.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="below-section">
				<div class="container">
					<div class="copyright-footer">
						<div class="columns text-lg-left">
							<p>&copy; 2022 MoviePoint. All rights reserved | Designed by MoviePoint</p>
						</div>

						<ul class="social text-lg-right">
							<li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
							</li>
							<li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
							</li>
							<li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
							</li>
							<li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
							</li>

						</ul>
					</div>
				</div>
			</div>
			<!-- copyright -->
			<!-- move top -->
			<button onclick="topFunction()" id="movetop" title="Go to top">
				<span class="fa fa-arrow-up" aria-hidden="true"></span>
			</button>
			<script>
				// When the user scrolls down 20px from the top of the document, show the button
				window.onscroll = function () {
					scrollFunction()
				};

				function scrollFunction() {
					if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
						document.getElementById("movetop").style.display = "block";
					} else {
						document.getElementById("movetop").style.display = "none";
					}
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
				}
			</script>
			<!-- /move top -->

		</section>
	</footer>
	<!--//footer-66 -->
</body>

</html>
<!-- responsive tabs -->
<script src="assets/js/jquery-1.9.1.min.js"></script>
  <script src="assets/js/easyResponsiveTabs.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      //Horizontal Tab
      $('#parentHorizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        tabidentify: 'hor_1', // The tab groups identifier
        activate: function (event) { // Callback function if tab is switched
          var $tab = $(this);
          var $info = $('#nested-tabInfo');
          var $name = $('span', $info);
          $name.text($tab.text());
          $info.show();
        }
      });
    });
  </script>  
<!-- //responsive tabs -->
<!--/theme-change-->
<script src="assets/js/theme-change.js"></script>
<!-- //theme-change-->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-one').owlCarousel({
			stagePadding:280,
			loop: true,
			margin: 20,
			nav: true,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					stagePadding:40,
					nav: false
				},
				480: {
					items: 1,
					stagePadding:60,
					nav: true
				},
				667: {
					items: 1,
					stagePadding:80,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
<script>
	$(document).ready(function () {
		$('.owl-three').owlCarousel({
			loop: true,
			margin: 20,
			nav: false,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 2,
					nav: false
				},
				480: {
					items: 2,
					nav: true
				},
				667: {
					items: 3,
					nav: true
				},
				1000: {
					items: 5,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
<!-- /mid-script -->
<script>
	$(document).ready(function () {
		$('.owl-mid').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //mid-script -->

<!-- script for owlcarousel -->
<!-- Template JavaScript -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>
<!--//-->
<!-- disable body scroll which navbar is in active -->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
	$(window).on("scroll", function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 80) {
			$("#site-header").addClass("nav-fixed");
		} else {
			$("#site-header").removeClass("nav-fixed");
		}
	});

	//Main navigation Active Class Add Remove
	$(".navbar-toggler").on("click", function () {
		$("header").toggleClass("active");
	});
	$(document).on("ready", function () {
		if ($(window).width() > 991) {
			$("header").removeClass("active");
		}
		$(window).on("resize", function () {
			if ($(window).width() > 991) {
				$("header").removeClass("active");
			}
		});
	});
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script>