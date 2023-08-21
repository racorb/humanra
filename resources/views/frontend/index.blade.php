@extends('frontend.layouts.app')

@section('content')
<div class="site-section hero" id="home-section">
    <div class="container text-center">
        <div class="row justify-content-center text-center">
        <div class="col-lg-10">
            <div class="mb-5">
            <h1 class="hero-heading">Boost Productivity with <strong>WebApp</strong></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <a href="#" class="btn btn-primary">Try it for free</a>
            </div>
            <img src="{{asset('/')}}frontend/images/untree.co_dashboard_mocklayout_laptop.png" alt="image" class="img-fluid">
        </div>
        </div>
    </div>
</div>
<div class="site-section pt-0" id="features-section">
    <div class="container">
        <div class="row">
        <div class="col-12 text-center mb-5">
            <span class="subtitle-1">Features</span>
            <h2 class="section-title-1 font-weight-bold">The Features</h2>
        </div>
        </div>
        <div class="row align-items-center mb-5">
        <div class="col-lg-6 mb-5 order-lg-2 mb-lg-0" data-aos="fade-right">
            <img src="{{asset('/')}}frontend/images/untree.co_dashboard_mocklayout.jpg" alt="Image" class="img-fluid img-shadow">
        </div>
        <div class="col-lg-5 mr-auto">
            <div class="mb-4">
            <h2 class="section-title-2">Powerful Apps</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi facere sequi excepturi pariatur quos itaque magni, impedit a quas qui?</p>
            </div>

            <div class="d-flex feature-v1">
            <span class="wrap-icon icon-users"></span>
            <div>
                <h3>Strategic Partners</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            </div>

            <div class="d-flex feature-v1">
            <span class="wrap-icon icon-layers"></span>
            <div>
                <h3>Business in Mind</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            </div>

        </div>
        </div>

        <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-left">
            <img src="{{asset('/')}}frontend/images/untree.co_dashboard_mocklayout.jpg" alt="Image" class="img-fluid img-shadow">
        </div>
        <div class="col-lg-5 order-lg-1 ml-auto">
            <div class="mb-4">
            <h2 class="section-title-2">Innovative Technologies</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi facere sequi excepturi pariatur quos itaque magni, impedit a quas qui?</p>
            </div>

            <div class="d-flex feature-v1">
            <span class="wrap-icon icon-cog"></span>
            <div>
                <h3>Many Features</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            </div>

            <div class="d-flex feature-v1">
            <span class="wrap-icon icon-bolt"></span>
            <div>
                <h3>Easy to use</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            </div>

        </div>
        </div>

        <div class="row align-items-center mb-5">
        <div class="col-lg-6 mb-5 order-lg-2 mb-lg-0" data-aos="fade-right">
            <img src="{{asset('/')}}frontend/images/untree.co_dashboard_mocklayout.jpg" alt="Image" class="img-fluid img-shadow">
        </div>
        <div class="col-lg-5 mr-auto">
            <div class="mb-4">
            <h2 class="section-title-2">Safe secure and reliable</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi facere sequi excepturi pariatur quos itaque magni, impedit a quas qui?</p>
            </div>

            <div class="d-flex feature-v1">
            <span class="wrap-icon icon-users"></span>
            <div>
                <h3>Strategic Partners</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            </div>

            <div class="d-flex feature-v1">
            <span class="wrap-icon icon-layers"></span>
            <div>
                <h3>Business in Mind</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            </div>

        </div>
        </div>

    </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
            <div class="col-md-7 text-center mb-5 mx-auto">
                <span class="subtitle-1">More Features</span>
                <h2 class="section-title-1 font-weight-bold">What People Says</h2>
            </div>
            </div>

            <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
                <div class="feature-v2">
                <span class="icon-people_outline"></span>
                <h3>User Collaboration</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem saepe aut, vel. Nemo.</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-v2">
                <span class="icon-phone_android"></span>
                <h3>Mobile Integration</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem saepe aut, vel. Nemo.</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-v2">
                <span class="icon-pie_chart"></span>
                <h3>Smart Analytics</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem saepe aut, vel. Nemo.</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-v2">
                <span class="icon-public"></span>
                <h3>Geolocation</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem saepe aut, vel. Nemo.</p>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
                <div class="feature-v2">
                <span class=" icon-search2"></span>
                <h3>Easy to find</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem saepe aut, vel. Nemo.</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-v2">
                <span class=" icon-security"></span>
                <h3>Good Security</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem saepe aut, vel. Nemo.</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-v2">
                <span class="icon-visibility"></span>
                <h3>Aesthetic</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem saepe aut, vel. Nemo.</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-v2">
                <span class="icon-settings"></span>
                <h3>Dashboard</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem saepe aut, vel. Nemo.</p>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light testimonial-wrap" id="testimonials-section">
    <div class="container">
        <div class="row">
        <div class="col-12 text-center mb-5">
            <span class="subtitle-1">Testimonials</span>
            <h2 class="section-title-1 font-weight-bold">What People Says</h2>
        </div>
        </div>
    </div>
    <div class="slide-one-item home-slider owl-carousel">
        <div>
        <div class="testimonial">

            <blockquote class="mb-5">
            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
            </blockquote>

            <figure class="mb-4 d-flex align-items-center justify-content-center">
            <div><img src="{{asset('/')}}frontend/images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
            <p>John Smith</p>
            </figure>
        </div>
        </div>
        <div>
        <div class="testimonial">

            <blockquote class="mb-5">
            <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
            <div><img src="{{asset('/')}}frontend/images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
            <p>Christine Aguilar</p>
            </figure>

        </div>
        </div>

        <div>
        <div class="testimonial">

            <blockquote class="mb-5">
            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
            <div><img src="{{asset('/')}}frontend/images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
            <p>Robert Spears</p>
            </figure>


        </div>
        </div>

        <div>
        <div class="testimonial">

            <blockquote class="mb-5">
            <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
            <div><img src="{{asset('/')}}frontend/images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
            <p>Bruce Rogers</p>
            </figure>

        </div>
        </div>

    </div>
    </div>

    <div class="site-section" id="pricing-section">
    <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
            <span class="subtitle-1">Pricing</span>
            <h2 class="section-title-1 font-weight-bold">Pricing for All</h2>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 pricing">
            <div class="border p-5 text-center rounded">
            <h3>Starter</h3>
            <div class="price mb-3"><sup class="currency">$</sup><span class="number">30</span> <span class="per">/year</span></div>
            <p class="text-muted mb-4">* Billed annualy or $10 per month</p>
            <ul class="list-unstyled ul-check text-left success mb-5">
                <li>Max 5 users</li>
                <li>29 local security</li>
                <li class="text-muted"><del>Desktop App</del></li>
                <li class="text-muted"><del>Email Support</del></li>
                <li class="text-muted"><del>Phone Support 24/7</del></li>
            </ul>
            <p><a href="#" class="btn btn-lg btn-secondary rounded-0 btn-block">Buy Now</a></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 pricing">
            <div class="border p-5 text-center rounded">
            <h3>Professional</h3>
            <div class="price mb-3"><sup class="currency">$</sup><span class="number">72</span> <span class="per">/year</span></div>
            <p class="text-muted mb-4">* Billed annualy or $30 per month</p>
            <ul class="list-unstyled ul-check text-left success mb-5">
                <li>Max 10 users</li>
                <li>29 local security</li>
                <li>Desktop App</li>
                <li>Email Support</li>
                <li class="text-muted"><del>Phone Support 24/7</del></li>
            </ul>
            <p><a href="#" class="btn btn-lg btn-primary rounded-0 btn-block">Buy Now</a></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 pricing">
            <div class="border p-5 text-center rounded">
            <h3>Enterprise</h3>
            <div class="price mb-3"><sup class="currency">$</sup><span class="number">130</span> <span class="per">/year</span></div>
            <p class="text-muted mb-4">* Billed annualy or $10 per month</p>
            <ul class="list-unstyled ul-check text-left success mb-5">
                <li>Unlimitted users</li>
                <li>29 local security</li>
                <li>Desktop App</li>
                <li>Email Support</li>
                <li>Phone Support 24/7</li>
            </ul>
            <p><a href="#" class="btn btn-lg btn-secondary rounded-0 btn-block">Buy Now</a></p>
            </div>
        </div>

        </div>
    </div>
    </div>

    <div class="site-section pb-0 bg-light" id="contact-section">
    <div class="container">

        <div class="row justify-content-center">
        <div class="col-md-7 text-center">
            <span class="sub-title">Contact</span>
            <h2 class="font-weight-bold text-black">Get In Touch</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, explicabo, quasi. Magni deserunt sunt labore.</p>
        </div>
        </div>

        <div class="row mb-5">



        <div class="col-md-4 text-center">
            <p class="mb-4">
            <span class="icon-room d-block h2 text-primary"></span>
            <span>203 Fake St. Mountain View, San Francisco, California, USA</span>
            </p>
        </div>
        <div class="col-md-4 text-center">
            <p class="mb-4">
            <span class="icon-phone d-block h2 text-primary"></span>
            <a href="#">+1 232 3235 324</a>
            </p>
        </div>
        <div class="col-md-4 text-center">
            <p class="mb-0">
            <span class="icon-mail_outline d-block h2 text-primary"></span>
            <a href="#">youremail@domain.com</a>
            </p>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12 mb-5">



            <form action="#" class="p-5 bg-white">

            <h2 class="h4 text-black mb-5">Contact Form</h2> 

            <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="fname">First Name</label>
                <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                <label class="text-black" for="lname">Last Name</label>
                <input type="text" id="lname" class="form-control">
                </div>
            </div>

            <div class="row form-group">

                <div class="col-md-12">
                <label class="text-black" for="email">Email</label> 
                <input type="email" id="email" class="form-control">
                </div>
            </div>

            <div class="row form-group">

                <div class="col-md-12">
                <label class="text-black" for="subject">Subject</label> 
                <input type="subject" id="subject" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                <label class="text-black" for="message">Message</label> 
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
            </div>


            </form>
        </div>
        
        </div>
    </div>
    </div> 
@endsection