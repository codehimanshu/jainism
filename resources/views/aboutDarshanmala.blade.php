@include('layouts.header')

<nav class="navbar navbar-fixed-top" style="background-color: #fafafa; padding-bottom: 0; margin-bottom: 0; height: 75px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span class="navbar-brand logo">
        <a class="a1" href="#home"><img src="images/jainorange.png" class="logo-image"></a>
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
        <li><a href="{{ route('pathshala.index') }}" style="color: black;">Paathshala</a></li>
        <li><a href="{{ route('gallery.index') }}" style="color: black;">Gallery</a></li>
        <li><a href="{{ route('blog.index') }}" style="color: black;">Blog</a></li>
        <li><a href="{{ route('contact') }}" style="color: black;">Contact us</a></li>

      </ul>
    </div>
  </div>
</nav>

<section style="padding-top: 70px;">
  <h1 class="text-center" style="margin-top: 0; margin-bottom: 0; background-color: #fafafa; padding-bottom: 50px; padding-top: 30px; font-size: 40px; font-family: 'Shrikhand' , serif; font-weight: normal; opacity: 0.8;">Jain Darshanmala</h1>
  <div class="container-fluid" style="padding-right: 0; padding-left: 0; padding-top: 0;">
    <div class="row">
      <div class="col-md-6" style="padding-right: 0; padding-left: 0;">
        <div style="direction: flex; justify-content: center; align-items: center; min-height: 400px;">
          <img src="images/slider1.jpg" width="100%" height="400px">
        </div>
      </div>
      <div class="col-md-6">
        <div style="display: flex; justify-content: center; align-items: center; min-height: 400px; flex-direction: column;">
          <h2 style="color: rgb(244,152,66);" >From Founder's Pen</h2>
          <br>
          <p style="width: 70%; line-height: 3rem; font-size: 20px;">"Jain Darshanmala was a dream of My Father Late Shri Kali Charan Jharchoor with a vision of bringing people closer to the religion. 
            <br/>
This website is an extension of his vision and dream which will not only bring the people closer to the religion but also will try to urbanize and inculcate new thoughts to spread awareness and positivity of beautiful world of Jainism</p>
      </div>
    </div>
  </div>
     <div class="row">
      <div class="col-md-6">
        <div style="display: flex; justify-content: center; align-items: center; min-height: 400px; flex-direction: column;">
          <p style="width: 70%; line-height: 3rem; font-size: 20px;">I present to you the platform which will help you engage in religious activities, help you getting closer to the religious community. 
            <br/>
This website will give you the insight and access to the beautiful jain teerth across the globe with their complete detailed information where you would be able to donate, do live Darshan, book dharamshala online and many more.</p>
      </div>
    </div>
    <div class="col-md-6" style="padding-right: 0; padding-left: 0;">
        <div style="direction: flex; justify-content: center; align-items: center; min-height: 400px;">
          <img src="images/slider2.jpg" width="100%" height="400px">
        </div>
      </div>
  </div>
   <div class="row">
      <div class="col-md-6" style="padding-right: 0; padding-left: 0;">
        <div style="direction: flex; justify-content: center; align-items: center; min-height: 450px;">
          <img src="images/slider3.jpg" width="100%" height="450px">
        </div>
      </div>
      <div class="col-md-6">
        <div style="display: flex; justify-content: center; align-items: center; min-height: 450px; flex-direction: column;">
          <p style="width: 70%; line-height: 3rem; font-size: 20px;">It will also feature Jain Paathshala where you would get an opportunity to learn about jainism its culture and get an insights to all the paath and mantras of jainism.
            <br/>
Jain Darshanmala will allow you to share your experience and religious moments that you create while vising any jain teerth on Jain Darshamala's live Blog.
On this website you would be able to access all the new News and updates related to the Jain Community across the Globe.
So come and join us on this religious journey of beautiful world of Jainism and enlighten yourself with its vibrant colors."
<br/>
<span style="color: rgb(244,152,66);">-Alok Jain (Founder)</span>
</p>
      </div>
    </div>
  </div>
</div>
</section>
@include('layouts.footer')
