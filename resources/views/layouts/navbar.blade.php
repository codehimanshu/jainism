
<nav class="navbar navbar-fixed-top" style="height: 75px;">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<span class="navbar-brand logo">
				<a class="a1" href="#home"><img src="/images/jainorange.png" class="logo-image"></a>
			</span>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/">Home</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" >About Us
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="{{ route('aboutDarshanmala') }}">About Jain Darshanamala</a></li>
						<li><a href="{{ route('aboutJainism') }}">About Jainism</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" >Teerth
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Country</a></li>
						<li><a href="#">State</a></li>
						<li><a href="#">City</a></li>
						<li><a href="#">Teerth</a></li>

					</ul>
				</li>
				<li><a href="{{ route('pathshala') }}">Paathshala</a></li>
				<li><a href="{{ route('gallery') }}">Gallery</a></li>
				<li><a href="{{ route('blog.index') }}">Blog</a></li>
				<li><a href="{{ route('contact') }}">Contact us</a></li>

			</ul>
		</div>
	</div>
</nav>
