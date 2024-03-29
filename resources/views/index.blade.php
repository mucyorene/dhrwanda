@extends('layouts.app1')
@section('title','DH | RWANDA')
@section('content')
  <div class="hero-wrap" style="background-image: url('images/image_5.jpg')" data-stellar-background-ratio="0.5">
      <!-- <div class="overlay"></div> -->
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-12 text ftco-animate mt-5 text-center" data-scrollax=" properties: { translateY: '70%' }">
              <div class="play-video d-flex align-items-center justify-content-center">
                <a href="/donate?dnt" class="popup-vimeo">
                  <span class="icon"><i class="ion-ios-play "></i></span>
                </a>
              </div>
          		<!-- <div class="play-video d-flex align-items-center justify-content-center"><button class="btn btn-warning popup-vimeo">Get Started</button></div>               -->
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Give A Hand To Make our Rwanda Great</h1>
            <button class="btn btn-warning btn-lg"><a href="/donate?dnt">Get Started</a></button>
          </div>
        </div>
      </div>
    </div>
  <!-- end -->
  <section class="ftco-section ftco-no-pt ftco-no-pb ftco-volunteer">
    <div class="container-fluid px-md-0">
      <div class="row no-gutters">
        <!-- <div class="col-md-6 img-volunteer" style="background-image: url(images/about.jpg);">
          <div class="row no-gutters justify-content-end">
            <div class="col-lg-7">
              <div class="text py-5 pl-md-4 pr-md-3">
                <h2 class="mb-4">Aspiration Charity</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                <p><a href="#" class="btn btn-success py-3 px-4">Join now</a></p>
              </div>
            </div>
          </div>
        </div> -->
        <div class="col-md-3 d-flex align-items-center bg-success"></div>
        <div class="col-md-6 d-flex align-items-center bg-success">
          <div class="about-text px-3 py-5 pl-md-5 pr-md-5">
            <h2>Donation so far <br><span>$</span><strong class="number" data-number="380000">0</strong></h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
            <p><a href="/donate?dnt" class="btn btn-black py-3 px-4">Donate now</a></p>
          </div>
        </div>
        <div class="col-md-3 d-flex align-items-center bg-success"></div>
      </div>
    </div>
  </section>

  <section class="services-section py-5 py-md-0">
      <div class="container">
        <div class="row no-gutters d-flex">
          <div class="col-md-12 col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate" id="service1">
            <div class="media block-6 text-center services d-block" id="media1">
              <div class="icon"><span class="flaticon-charity"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Collecting donations</h3>
                <p>A small river named Duden flows by their place and supplies.
                    A small river named Duden flows by their place and supplies.
                    A small river named Duden flows by their place and supplies.
                    A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate" id="service2">
            <div class="media block-6 text-center services d-block" id="media2">
              <div class="icon"><span class="flaticon-adoption"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Identifying needy families</h3>
                <p>A small river named Duden flows by their place and supplies.
                    A small river named Duden flows by their place and supplies.
                    A small river named Duden flows by their place and supplies.
                    A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate" id="service3">
            <div class="media block-6 text-center services d-block" id="media3">
              <div class="icon"><span class="flaticon-volunteer"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Providing donations to dedicated families</h3>
                <p>A small river named Duden flows by their place and supplies.
                    A small river named Duden flows by their place and supplies.
                    A small river named Duden flows by their place and supplies.
                    A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate" id="service4">
            <div class="media block-6 text-center services d-block" id="media4">
              <div class="icon"><span class="flaticon-open-book"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Listing and working with <b class="text-warning">RSSB</b></h3>
                <p>A small river named Duden flows by their place and supplies.
                  A small river named Duden flows by their place and supplies.
                  A small river named Duden flows by their place and supplies.
                  A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
  </section>
    <!-- END -->
  <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Foundation Grants Projects</span>
            <h2 class="mb-4">Gifts into Supporting Project that Change RWANDAN WELFARE</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row justify-content-center ftco-animate">
          <div class="col-md-8">
            <div class="featured-causes">
              <div class="progress" style="height:50px">
                <div class="progress-bar progress-bar-striped" style="width:65%; height:50px"></div>
              </div>
              <div class="text mt-4 d-md-flex">
                <div class="one d-flex">
                  <div class="mr-4">
                    <h2>65%</h2>
                  </div>
                  <div class="goal">
                    <p class="d-flex"><span>Collected:</span><span>$380,000</span></p>
                    <p class="d-flex"><span>Goal:</span><span>$600,000</span></p>
                  </div>
                </div>
                <div class="one text-md-right">
                  <p><a href="/donate?dnt" class="btn btn-primary">Donate now</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- <section class="ftco-section ftco-vol img" style="background-image: url(images/bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 heading-section text-center ftco-animate">
          <h2 class="mb-0"><a href="#">Become a Volunteer</a></h2>
        </div>
      </div>
    </div>
  </section> -->

  <section class="ftco-section ftco-causes">
    <div class="container">
      <div class="row justify-content-center pb-4">
        <div class="col-md-10 heading-section text-center ftco-animate">
          <h2 class="mb-4">Our Priorities</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="causes causes-2 text-center ftco-animate">
            <div class="img" style="background-image: url(images/causes-1.jpg);"></div>
            <h2>Mutual for: Genocide survivers</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="goal">
              <p><span>$3,800</span> to go</p>
              <div class="progress" style="height:20px">
                <div class="progress-bar progress-bar-striped" style="width:70%; height:20px">70%</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="causes causes-2 text-center ftco-animate">
            <div class="img" style="background-image: url(images/causes-2.jpg);"></div>
            <h2>Mutual for: Street Children's families</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="goal">
              <p><span>$3,800</span> to go</p>
              <div class="progress" style="height:20px">
                <div class="progress-bar progress-bar-striped" style="width:75%; height:20px">75%</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="causes causes-2 text-center ftco-animate">
            <div class="img" style="background-image: url(images/causes-3.jpg);"></div>
            <h2>Mutual for: Other needy families</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="goal">
              <p><span>$3,800</span> to go</p>
              <div class="progress" style="height:20px">
                <div class="progress-bar progress-bar-striped" style="width:40%; height:20px">40%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row intro mt-5 pt-md-4">
        <div class="col-md-4 ftco-animate">
          <h2><strong class="number" data-number="380000">0</strong></h2>
          <span>Waterless Drinking in Africa</span>
          <p class="mt-2"><a href="/donate?dnt" class="btn btn-primary">Start Donation</a></p>
        </div>
        <div class="col-md-8 ftco-animate">
          <div class="border-r">
            <h4>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-counter ftco-section img" id="section-counter" style="background-image: url(images/bg_2.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row d-md-flex align-items-center">
        <div class="wrapper">
          <div class="row">
            <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="705">0</strong>
                  <span>Days in Campaign</span>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="<?php echo "809"?>">0s</strong>
                  <span>Dedicated Donors (Legal Institution)</span>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="335">0</strong>
                  <span>Dedicated Donors (Personal)</span>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="35">0</strong>
                  <span>Fun Raised</span>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section><br>
  <!-- <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center pb-5">
        <div class="col-md-10 heading-section text-center ftco-animate">
          <h2 class="mb-4">Recent Blog</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="blog-entry align-self-stretch ftco-animate">
            <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_1.jpg');">
            </a>
            <div class="text text-2 bg-light">
              <h3 class="heading mb-2"><a href="#">Advocating on behalf of abused and neglected</a></h3>
              <div class="meta mb-2">
                <div><a href="#">Sept. 04, 2019</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="blog-entry align-self-stretch d-md-flex bg-light p-3 align-items-center d-flex ftco-animate">
            <a href="blog-single.html" class="block-20 thumb" style="background-image: url('images/image_2.jpg');">
            </a>
            <div class="text text-thumb d-block pl-2 pl-md-4">
              <h3 class="heading mb-2"><a href="#">Gathering Books for Children</a></h3>
              <div class="meta">
                <div><a href="#">Sept. 04, 2019</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
            </div>
          </div>

          <div class="blog-entry align-self-stretch d-md-flex bg-light p-3 align-items-center d-flex ftco-animate">
            <a href="blog-single.html" class="block-20 thumb" style="background-image: url('images/image_3.jpg');">
            </a>
            <div class="text text-thumb d-block pl-2 pl-md-4">
              <h3 class="heading mb-2"><a href="#">Access to Clean Water</a></h3>
              <div class="meta">
                <div><a href="#">Sept. 04, 2019</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
            </div>
          </div>

          <div class="blog-entry align-self-stretch d-md-flex bg-light p-3 align-items-center d-flex ftco-animate">
            <a href="blog-single.html" class="block-20 thumb" style="background-image: url('images/image_4.jpg');">
            </a>
            <div class="text text-thumb d-block pl-2 pl-md-4">
              <h3 class="heading mb-2"><a href="#">Super typhoon Haiyan Disaster Relief</a></h3>
              <div class="meta">
                <div><a href="#">Sept. 04, 2019</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center intro pt-4 pt-md-5">
        <div class="col-md-8 text-center">
          <h1 class="heading">Sponsorship <span>Scheme,</span> <span>Individual</span> and Corporate Entities Undertake</h1>
        </div>
      </div>
    </div>
  </section> -->
  
  <!-- <section class="testimony-section bg-light">
    <div class="container">
      <div class="row ftco-animate justify-content-center">
        <div class="col-md-6 d-flex">
          <div class="testimony-img" style="background-image: url(images/testimony-img.jpg);"></div>
        </div>
        <div class="col-md-6 py-5">
          <div class="heading-section pb-4 pt-md-4 ftco-animate">
            <h2 class="mb-0">Success Stories</h2>
          </div>
          <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
              <div class="testimony-wrap">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="pos ml-3">
                    <p class="name">Fernando Obiga</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="pos ml-3">
                    <p class="name">Jeffrey Blatch</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="pos ml-3">
                    <p class="name">Henry Ford</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="pos ml-3">
                    <p class="name">Jeff Chan</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="pos ml-3">
                    <p class="name">Michael Bubble</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
  </div>
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript">
    $(function(){
      $("#home").addClass("active");
    });
  </script>
@endsection