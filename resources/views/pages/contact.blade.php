@extends('layouts.app')
@section('content')
  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/rw4.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h2 class="mb-3 bread">Contact</h2>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-section bg-primary">
    <div class="container">
      <div class="row no-gutters d-flex contact-info">
        <div class="col-md-3 d-flex">
          <div class="align-self-stretch box p-4 py-md-5 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="icon-map-signs"></span>
            </div>
            <h3>Address</h3>
            <p>203 AV PAUL VI, KIGALI-NYARUGENGE, Gitarama, Rwanda</p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="align-self-stretch box p-4 py-md-5 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="icon-phone2"></span>
            </div>
            <h3>Contact Number</h3>
            <p><a href="tel://1234567920">+ 250 788 890 071</a></p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="align-self-stretch box p-4 py-md-5 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="icon-paper-plane"></span>
            </div>
            <h3>Email Address</h3>
            <p><a href="mailto:info@yoursite.com">info@dhrwanda.rw</a></p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="align-self-stretch box p-4 py-md-5 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="icon-globe"></span>
            </div>
            <h3>Website</h3>
            <p><a href="www.dhrwanda.rw">www.dhrwanda.rw</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
    
  <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container-fluid px-0">
      <div class="row no-gutters block-9">
        <div class="col-md-6 order-md-last d-flex">
          <form action="#" class="bg-light p-5 contact-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>
        <div class="col-md-6 d-flex">
          <div id="map" class="bg-white"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
@endsection