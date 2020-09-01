@extends('layouts.app')
@section('content')
  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/rw7.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h2 class="mb-3 bread">About DH</h2>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About DH <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-6 col-lg-5 d-flex">
          <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about-1.jpg);">
          </div>
        </div>
        <div class="col-md-6 col-lg-7 pl-lg-5 py-5">
          <div class="py-md-5">
            <div class="row justify-content-start pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                <span class="subheading">A Few Words About Donate Health Rwanda</span>
                <h2 class="mb-4">We Voluntary Help for Almost <span class="number" data-number="3">0</span> Years</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-mission">
    <div class="container">
      <div class="row">
        <div class="col-md-4 py-4 py-md-5 ftco-animate">
          <div class="py-md-4 pb-md-5">
            <h3>Mission: To Change the Life of Those, Who Have no Hope!</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="col-md-4 py-4 py-md-5 ftco-animate">
          <div class="py-md-4 pb-md-5">
            <h3>Vision</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="col-md-4 py-4 py-md-5 img" style="background-image: url(images/bg_1.jpg)"></div>
      </div>
    </div>
  </section><br>
  <!-- loader -->
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript">
    $(function(){
      $("#about").addClass("active");
    });
  </script>
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
@endsection