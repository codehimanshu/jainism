@include('layouts.header')
@include('layouts.navbar')
	<section id="contact" style=" padding-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="about_our_company" style="margin-bottom: 20px;">
                    <h1 class="shrikhand">Write Your Message</h1>
                    <div class="titleline-icon"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <form name="sentMessage" method="post" id="contactForm" novalidate="" action="{{route('contact.store')}}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="font-size: 20px;">Name</label>
                                    <input type="text" class="form-control" id="name" required="" data-validation-required-message="Please enter your name." name="name">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 20px;">Email</label>
                                    <input type="email" class="form-control"  id="email" required="" data-validation-required-message="Please enter your email address." name="email">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 20px;">Mobile</label>
                                    <input type="tel" class="form-control"  id="phone" required="" data-validation-required-message="Please enter your phone number." name="phone">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="font-size: 20px;">Message</label>
                                    <textarea name="message" class="form-control" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <br/><br/>
                                <button type="submit" class="btn btn-warning">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <br/><br/>
                    <p style="color:#fff;">
                        <strong><i class="fa fa-map-marker"></i> Address</strong><br>
                        New Delhi gandhi nagar
                    </p>
                    <p style="color:#fff;"><strong><i class="fa fa-phone"></i> Phone Number</strong><br>
                    9999999999999</p>
                    <p style="color:#fff;">
                        <strong><i class="fa fa-envelope"></i>  Email Address</strong><br>
                    Email@info.com</p>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')

