@include('layouts.header')

<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span class="navbar-brand logo">
        <a class="a1" href="#home"><img src="images/logo.png" class="logo-image"></a>
      </span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/" style="color: black;">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" style="color: black;" >About Us
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('aboutDarshanmala') }}" >About Jain Darshanmala</a></li>
            <li><a href="{{ route('aboutJainism') }}">About Jainism</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" style="color: black;" >Teerth
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#" >Country</a></li>
            <li><a href="#">State</a></li>
            <li><a href="#">City</a></li>
            <li><a href="#">Teerth</a></li>

          </ul>
        </li>
        <li><a href="#speakers" style="color: black;">Paathshala</a></li>
        <li><a href="{{ route('gallery') }}" style="color: black;">Gallery</a></li>
        <li><a href="#team" style="color: black;">Blog</a></li>
        <li><a href="{{ route('contact') }}" style="color: black;">Contact us</a></li>

      </ul>
    </div>
  </div>
</nav>

<section style="padding-top: 100px;">
  <h1 class="text-center" >Jainism</h1>
  <hr style="border-bottom: 2px solid black; width: 10%;">
  <div class="container-fluid" style="padding-right: 0; padding-left: 0; padding-top: 30px;">
    <div class="row">
      <div class="col-md-6" style="padding-right: 0; padding-left: 0;">
        <div style="direction: flex; justify-content: center; align-items: center; height: 400px;">
          <img src="images/slider1.jpg" width="100%" height="400px">
        </div>
      </div>
      <div class="col-md-6">
        <div style="display: flex; justify-content: center; align-items: center; height: 400px; flex-direction: column;">
          <h2 style="color: rgb(244,152,66);" > Topic-1</h2>
          <p style="width: 70%; line-height: 3rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt rem, molestias adipisci enim, obcaecati error ex fuga modi dolore vero porro at eum sunt sapiente. Dicta facilis earum quo rerumLorem  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto sapiente amet soluta rerum porro suscipit, reprehenderit numquam odio, recusandae nisi aut repellendus voluptatem molestiae impedit rem voluptates dignissimos nihil necessitatibus.</p>
      </div>
    </div>
  </div>
     <div class="row">
      <div class="col-md-6">
        <div style="display: flex; justify-content: center; align-items: center; height: 400px; flex-direction: column;">
          <h2 style="color: rgb(244,152,66);"> Topic-2</h2>
          <p style="width: 70%; line-height: 3rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt rem, molestias adipisci enim, obcaecati error ex fuga modi dolore vero porro at eum sunt sapiente. Dicta facilis earum quo rerumLorem  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto sapiente amet soluta rerum porro suscipit, reprehenderit numquam odio, recusandae nisi aut repellendus voluptatem molestiae impedit rem voluptates dignissimos nihil necessitatibus.</p>
      </div>
    </div>
    <div class="col-md-6" style="padding-right: 0; padding-left: 0;">
        <div style="direction: flex; justify-content: center; align-items: center; height: 400px;">
          <img src="images/slider2.jpg" width="100%" height="400px">
        </div>
      </div>
  </div>
   <div class="row">
      <div class="col-md-6" style="padding-right: 0; padding-left: 0;">
        <div style="direction: flex; justify-content: center; align-items: center; height: 400px;">
          <img src="images/slider3.jpg" width="100%" height="400px">
        </div>
      </div>
      <div class="col-md-6">
        <div style="display: flex; justify-content: center; align-items: center; height: 400px; flex-direction: column;">
          <h2 style="color: rgb(244,152,66);"> Topic-3</h2>
          <p style="width: 70%; line-height: 3rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt rem, molestias adipisci enim, obcaecati error ex fuga modi dolore vero porro at eum sunt sapiente. Dicta facilis earum quo rerumLorem  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto sapiente amet soluta rerum porro suscipit, reprehenderit numquam odio, recusandae nisi aut repellendus voluptatem molestiae impedit rem voluptates dignissimos nihil necessitatibus.</p>
      </div>
    </div>
  </div>
</div>
</section>
@include('layouts.footer')
