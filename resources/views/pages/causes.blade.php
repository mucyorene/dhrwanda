@extends('layouts.app1')
@section('content')
  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/rw6.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h2 class="mb-3 bread">GIFTS INTO SUPPORTING PROJECT THAT CHANGE RWANDAN WELFARE</h2>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Causes <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
  <!-- END HOME -->
  <section class="ftco-section ftco-causes">
    <div class="container">
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
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#" class="ion-ios-arrow-back"></a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#" class="ion-ios-arrow-forward"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<script src="js/jquery.min.js"></script>
  <script type="text/javascript">
    $(function(){
      $("#causes").addClass("active");
    });
  </script>
@endsection