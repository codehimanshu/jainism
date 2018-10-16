@include('layouts.header')
@include('layouts.navbar')

<section id="home">
	<div style="position: fixed; right: 10px; bottom: 10px; z-index: 1;">
		<button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal">
			<i style="font-size: 35px; border-radius: 50%; padding: 20px; color: red; background-color: #fff;" class="fas fa-hand-holding-heart"></i>
		</button>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title text-center">Donate</h4>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, libero optio aperiam quos eveniet quisquam similique nisi eligendi perferendis blanditiis, nostrum asperiores, tempore id officia. Fugiat placeat officia nam et!.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
			</div>
			
		</div>
	</div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="overlay"></div>
				<img src="images/slider1.jpg" alt="Image">
				<div class="carousel-caption">
					<h3 class="carousel-caption-heading shrikhand">Perfect Jain Teerth Guide</h3>
					<hr width="20%">
				</div>
			</div>
			<div class="item">
				<div class="overlay"></div>
				<img src="images/slider4.jpg" alt="Image">
				<div class="carousel-caption">
					<h2 class="carousel-caption-heading shrikhand">Live And Let Live</h2>
					<hr width="20%">
				</div>
			</div>
			<div class="item">
				<div class="overlay"></div>
				<img src="images/slider5.png" alt="Image">
				<div class="carousel-caption">
					<h2 class="carousel-caption-heading shrikhand">Perfect Jain Teerth Guide</h2>
					<hr width="20%">
				</div>
			</div>
		</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>
<section id="about">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6" style=" min-height: 500px; display: flex; justify-content: center; align-items: center;">
				<img src="images/slider1.jpg" class="about_image">
			</div>
			<div class="col-md-6" style=" min-height: 500px; display: flex;  justify-content: center; flex-direction: column;">
				<h4 style="color: #f49842;" class="shrikhand">Shortly About Us</h4>
				<h1><i>Welcome To Jain Guide</i></h1>
				<p style="font-size: 20px; width: 85%;">	Jain Darshanmala will allow you to share your experience and religious moments that you create while vising any jain teerth on Jain Darshamala's live Blog. On this website you would be able to access all the new News and updates related to the Jain Community across the Globe. So come and join us on this religious journey of beautiful world of Jainism and enlighten yourself with its vibrant colors.</p>
			</div>
		</div>
	</div>
</section>
<section id="news">
	<div class="container-fluid" style="padding: 0;">
		<div class="row">
			<div class="col-md-3 text-center" style="margin-top: 5px;">
				<div>
					<img src="images/3333.png" width="200px">
					<h1 style="margin-bottom: 0;" class="shrikhand text-center">Teerth</h1>
					<p>Explore the amazingreligious gateway</p>
				</div>
			</div>
			<div class="col-md-3 text-center" style="margin-top: 5px;">
				<div>
					<img src="images/2222.png" width="200px">
					<h1 style="margin-bottom: 0;" class="shrikhand text-center">Blog</h1>
					<p>Share your memory with the jain world</p>
				</div>
			</div>
			<div class="col-md-3 text-center" style="margin-top: 5px;">
				<div>
					<img src="images/dddd.png" width="200px">
					<h1 style="margin-bottom: 0;" class="shrikhand text-center">Paathshala</h1>
					<p>Learn the Path of enlightment that jainism has to offer</p>
				</div>
			</div>
			<div class="col-md-3 text-center" style=" margin-top: 5px;">
				<div>
					<img src="images/1111.png" width="200px">
					<h1 style="margin-bottom: 0;" class="shrikhand text-center">Gallery</h1>
					<p>Browse videos bhajans &amp; wallpapers</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="stories" style="padding-top: 50px;">
	<div class="container-fluid">
		<h1 class="text-center shrikhand" style="font-size: 48px; font-weight: normal;">Recent Stories</h1>
		<hr style="border-bottom: 2px solid black;" width="15%">
		<div class="row" style="padding-top: 50px;">
			<div class="col-md-4">
				<img src="images/bg1.jpg" style="width: 100%">
				<h2>I Believe God is Grecious</h2>
				<p>On <b>July 3, 2018</b> by <b> Naman Jain</b></p>
				<p style="font-size: 18px; padding-top: 10px; color: #6c757d;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nisi odio modi quidem quo dolorem quia minus consectetur cupiditate! Animi ipsa enim dolor, debitis sapiente aliquid cupiditate quae minus error. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore voluptate, est? Architecto perspiciatis, nesciunt cumque pariatur rerum adipisci.</p>
			</div>
			<div class="col-md-4">
				<img src="images/bg1.jpg" style="width: 100%">
				<h2>I Believe God is Grecious</h2>
				<p>On <b>July 3, 2018</b> by <b> Naman Jain</b></p>
				<p style="font-size: 18px; padding-top: 10px; color: #6c757d;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nisi odio modi quidem quo dolorem quia minus consectetur cupiditate! Animi ipsa enim dolor, debitis sapiente aliquid cupiditate quae minus error. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore voluptate, est? Architecto perspiciatis, nesciunt cumque pariatur rerum adipisci.</p>
			</div>
			<div class="col-md-4">
				<img src="images/bg1.jpg" style="width: 100%">
				<h2>I Believe God is Grecious</h2>
				<p>On <b>July 3, 2018</b> by <b> Naman Jain</b></p>
				<p style="font-size: 18px; padding-top: 10px; color: #6c757d;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nisi odio modi quidem quo dolorem quia minus consectetur cupiditate! Animi ipsa enim dolor, debitis sapiente aliquid cupiditate quae minus error. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore voluptate, est? Architecto perspiciatis, nesciunt cumque pariatur rerum adipisci.</p>
			</div>
		</div>
	</div>
</section>
<section id="quotes">
	<img src="images/quote.png" width="60px">
	<p class="quote"><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolorem ad magni odio, ullam eveniet. Tempore et iste, explicabo numquam, quo vel, distinctio officiis voluptatibus repudiandae quae mollitia, vero asperiores. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto ducimus delectus eum debitis dolor praesentium voluptas odio adipisci accusantium explicabo porro, maiores quidem corporis atque, sapiente perspiciatis quos voluptate voluptatum!</i></p>
	<br/>
	<h4>Lorem Ipsum</h4>
	<h5 style="color: #6c757d;">XYZ</h5>
	<img src="images/closequote.png" width="60px">
</section>
<section id="last">
	<div class="container-fluid" style="padding: 0;">
		<div class="row">
			<div class="col-md-6 prayer">
				<h1 style="font-size: 40px; z-index: 1; " class="shrikhand">
					Need Prayer ?
				</h1>
				<p style="font-size: 20px; z-index: 1; color: #c9c9c9;">No matter what you're facing, we'd love to pray with you!</p>
				<button style="z-index: 1;" class="btn btn-default">ASK FOR PRAYER</button>
			</div>
			<div class="col-md-6 prayer">
				<h1 style="font-size: 40px; z-index: 1;" class="shrikhand">
					Want Help ?
				</h1>
				<p style="font-size: 20px; z-index: 1; color: #c9c9c9;">Your financial support is very important for our global projects.</p>
				<button style="z-index: 1;" class="btn btn-default">GIVE ONLINE</button>
			</div>
		</div>
	</div>
</section>
		<!-- <div id="fh5co-services" class="fh5co-bg-section">
									<div class="container">
																<div class="row">
																							<div class="col-md-4 col-sm-4">
																														<div class="feature-center animate-box" data-animate-effect="fadeIn">
																																					<span class="icon">
																																												<i class="icon-eye"></i>
																																					</span>
																																					<h3>Retina Ready</h3>
																																					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
																														</div>
																							</div>
																							<div class="col-md-4 col-sm-4">
																														<div class="feature-center animate-box" data-animate-effect="fadeIn">
																																					<span class="icon">
																																												<i class="icon-command"></i>
																																					</span>
																																					<h3>Fully Responsive</h3>
																																					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
																														</div>
																							</div>
																							<div class="col-md-4 col-sm-4">
																														<div class="feature-center animate-box" data-animate-effect="fadeIn">
																																					<span class="icon">
																																												<i class="icon-mouse"></i>
																																					</span>
																																					<h3>Web Starter</h3>
																																					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
																														</div>
																							</div>
																</div>
									</div>
		</div>
		
		<div id="fh5co-project">
									<div class="container">
																<div class="row animate-box">
																							<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
																														<h2>Our Project</h2>
																														<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
																							</div>
																</div>
																<div class="row">
																							<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
																														<a href="#"><img src="images/work-1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
																																					<h3>Sea</h3>
																																					<span>Web Design</span>
																														</a>
																							</div>
																							<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
																														<a href="#"><img src="images/work-2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
																																					<h3>Nature</h3>
																																					<span>Application</span>
																														</a>
																							</div>
																							<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
																														<a href="#"><img src="images/work-3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
																																					<h3>Green Island</h3>
																																					<span>Branding</span>
																														</a>
																							</div>
																							<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
																														<a href="#"><img src="images/work-4.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
																																					<h3>Workspace</h3>
																																					<span>Web Design</span>
																														</a>
																							</div>
																							<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
																														<a href="#"><img src="images/work-5.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
																																					<h3>Nature</h3>
																																					<span>Application</span>
																														</a>
																							</div>
																							<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
																														<a href="#"><img src="images/work-6.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
																																					<h3>Green Island</h3>
																																					<span>Branding</span>
																														</a>
																							</div>
																</div>
									</div>
		</div>
		<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
									<div class="overlay"></div>
									<div class="container">
																<div class="row animate-box">
																							<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
																														<h2>Happy Clients</h2>
																							</div>
																</div>
																<div class="row">
																							<div class="col-md-4">
																														<div class="box-testimony animate-box">
																																					<blockquote>
																																												<span class="quote"><span><i class="icon-quote"></i></span></span>
																																												<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
																																					</blockquote>
																																					<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
																														</div>
																														
																							</div>
																							<div class="col-md-4">
																														<div class="box-testimony animate-box">
																																					<blockquote>
																																												<span class="quote"><span><i class="icon-quote"></i></span></span>
																																												<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
																																					</blockquote>
																																					<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
																														</div>
																														
																														
																							</div>
																							<div class="col-md-4">
																														<div class="box-testimony animate-box">
																																					<blockquote>
																																												<span class="quote"><span><i class="icon-quote"></i></span></span>
																																												<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
																																					</blockquote>
																																					<p class="author">John Doe, Founder <a href="#">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
																														</div>
																														
																							</div>
																</div>
									</div>
		</div>
		<div id="fh5co-blog" class="fh5co-bg-section">
									<div class="container">
																<div class="row animate-box">
																							<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
																														<h2>Recent Blog</h2>
																														<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
																							</div>
																</div>
																<div class="row">
																							<div class="col-lg-4 col-md-4">
																														<div class="fh5co-blog animate-box">
																																					<a href="#"><img class="img-responsive" src="images/work-4.jpg" alt=""></a>
																																					<div class="blog-text">
																																												<h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
																																												<span class="posted_on">Nov. 15th</span>
																																												<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
																																												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
																																												<a href="#" class="btn btn-primary">Read More</a>
																																					</div>
																														</div>
																							</div>
																							<div class="col-lg-4 col-md-4">
																														<div class="fh5co-blog animate-box">
																																					<a href="#"><img class="img-responsive" src="images/work-2.jpg" alt=""></a>
																																					<div class="blog-text">
																																												<h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
																																												<span class="posted_on">Nov. 15th</span>
																																												<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
																																												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
																																												<a href="#" class="btn btn-primary">Read More</a>
																																					</div>
																														</div>
																							</div>
																							<div class="col-lg-4 col-md-4">
																														<div class="fh5co-blog animate-box">
																																					<a href="#"><img class="img-responsive" src="images/work-3.jpg" alt=""></a>
																																					<div class="blog-text">
																																												<h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
																																												<span class="posted_on">Nov. 15th</span>
																																												<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
																																												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
																																												<a href="#" class="btn btn-primary">Read More</a>
																																					</div>
																														</div>
																							</div>
																</div>
									</div>
		</div>
		<div id="fh5co-started">
									<div class="container">
																<div class="row animate-box">
																							<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
																														<h2>Lets Get Started</h2>
																														<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
																							</div>
																</div>
																<div class="row animate-box">
																							<div class="col-md-8 col-md-offset-2">
																														<form class="form-inline">
																																					<div class="col-md-6 col-md-offset-3 col-sm-6">
																																												<button type="submit" class="btn btn-default btn-block">Get In Touch</button>
																																					</div>
																														</form>
																							</div>
																</div>
									</div>
								</div> -->
								@include('layouts.footer')
