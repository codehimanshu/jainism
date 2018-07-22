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
        <li><a href="#speakers" style="color: black;">Paathshala</a></li>
        <li><a href="{{ route('gallery') }}" style="color: black;">Gallery</a></li>
        <li><a href="#team" style="color: black;">Blog</a></li>
        <li><a href="{{ route('contact') }}" style="color: black;">Contact us</a></li>

      </ul>
    </div>
  </div>
</nav>

<section style="padding-top: 70px;">
   <h1 class="text-center" style="margin-top: 0; margin-bottom: 0; background-color: #fafafa; padding-bottom: 50px; padding-top: 30px; font-size: 40px; font-family: 'Shrikhand' , serif; font-weight: normal; opacity: 0.8;">Jainism</h1>
  <div class="container-fluid" style="padding-right: 0; padding-left: 0;">
    <div class="row">
      <div class="col-md-6" style="padding-right: 0; padding-left: 0;">
        <div style="direction: flex; justify-content: center; align-items: center; min-height: 600px;">
          <img src="images/slider1.jpg" width="100%" height="600px">
        </div>
      </div>
      <div class="col-md-6">
        <div style="display: flex; justify-content: center; align-items: center; min-height: 600px; flex-direction: column;">
          <h2 style="color: rgb(244,152,66);" >Jain Dharma</h2>
          <p style="width: 70%; line-height: 3rem; font-size: 20px;">Jainism traditionally known as Jain Dharma, is an ancient Indian religion. Followers of Jainism are called "Jains", a word derived from the Sanskrit word jina (victor) and connoting the path of victory in crossing over life's stream of rebirths through an ethical and spiritual life. Jains trace their history through a succession of twenty-four victorious saviours and teachers known as tirthankaras, with the first being Rishabhanatha, who is believed to have lived millions of years ago in Jain tradition, and twenty-fourth being the Mahāvīra around 500 BCE. Jains believe that Jainism is an eternal dharma with the tirthankaras guiding every cycle of the Jain cosmology.</p>
      </div>
    </div>
  </div>
     <div class="row">
      <div class="col-md-6">
        <div style="display: flex; justify-content: center; align-items: center; min-height: 600px; flex-direction: column;">
          <h2 style="color: rgb(244,152,66);">Jain Religion</h2>
          <p style="width: 70%; line-height: 3rem; font-size: 20px;">The main religious premises of Jainism are ahiṃsā ("non-violence"), anekāntavāda ("many-sidedness"), aparigraha ("non-attachment") and asceticism. Jain monastics, renunciants, and devout householders take five main vows known as vratas, outlined in their oldest surviving text, the Acaranga Sūtra: ahiṃsā ("non-violence"), satya ("truth"), asteya ("not stealing"), brahmacharya ("celibacy or chastity"), and aparigraha("non-attachment"). These principles have impacted Jain culture in many ways, such as leading to a predominantly vegetarian lifestyle that avoids harm to animals and their life cycles. Parasparopagraho Jīvānām ("the function of souls is to help one another") is the motto of Jainism. Ṇamōkāra mantra is the most common and basic prayer in Jainism.
          </p>
      </div>
    </div>
    <div class="col-md-6" style="padding-right: 0; padding-left: 0;">
        <div style="direction: flex; justify-content: center; align-items: center; min-height: 600px;">
          <img src="images/slider2.jpg" width="100%" height="600px">
        </div>
      </div>
  </div>
   <div class="row">
      <div class="col-md-6" style="padding-right: 0; padding-left: 0;">
        <div style="direction: flex; justify-content: center; align-items: center; min-height: 600px;">
          <img src="images/slider3.jpg" width="100%" height="600px">
        </div>
      </div>
      <div class="col-md-6">
        <div style="display: flex; justify-content: center; align-items: center; min-height: 600px; flex-direction: column;">
          <h2 style="color: rgb(244,152,66);">Jain Followers</h2>
          <p style="width: 70%; line-height: 3rem; font-size: 20px;">Jainism has between four and five million followers, with most Jains residing in India.Outside India, some of the largest Jain communities are present in Canada, Europe, Kenya, the United Kingdom, Hong Kong, Suriname, Fiji, and the United States. Major Jain festivals include Paryushanaand Daslakshana, Mahavir Jayanti, and Diwali.</p>
      </div>
    </div>
  </div>
</div>
</section>
@include('layouts.footer')
