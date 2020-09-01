@extends('layouts.app2')
@section('content')
	<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
      <div class="container-fluid px-0">
        <div class="row no-gutters block-9">
          <div class="col-md-6 col-lg-6 col-sm-6 order-md-last">
            <fieldset>
                <legend class="legend text-primary px-5">Personal donating Part</legend>
                <form method="POST" action="/per" class="bg-light p-5 contact-form">
                {{ csrf_field() }}
                    <div class="form-group row">
                        <div class="col-md-5">
                            <b>Start at:</b>
                            <input type="date" class="form-control" name="start" id="">
                        </div>
                        <div class="col-md-2">
                            <div class="container">
                                <b class="text-danger">To</b>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <b>End on:</b>
                            <input type="date" class="form-control" name="end" id="">
                        </div>                     
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <input type="text" class="form-control" name="firstName" placeholder="First Name">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <input type="text" class="form-control" name="lastName" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <select name="country" id="" class="form-control">
                                <option value="">COUNTRY</option>
                                <option value="Rwanda">Rwanda</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <input type="text" name="phoneNumber" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <input type="number" class="form-control" placeholder="Amount" name="amount">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <select name="" id="">
                                <option value="">CATEGORY</option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Any message?"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Donate" class="btn btn-primary btn-sm">
                    </div>
                </form>
            </fieldset>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-6 bg-white">
            <div class="container-fluid px-1">
                <fieldset class="fieldset">
                    <legend class="legend text-primary px-5">Legal Institution Donating Part</legend>
                    <form method="POST" action="/donateReq" class="bg-light p-5 contact-form">
                    {{ csrf_field() }}
                        <div class="form-group row">
                           <div class="col-md-5">
                               <b>Start at:</b>
                               <input type="date" class="form-control" name="start1" id="">
                           </div>
                           <div class="col-md-2">
                               <div class="container">
                                   <b class="text-danger">To</b>
                               </div>
                           </div>
                           <div class="col-md-5">
                               <b>End on:</b>
                                <input type="date" class="form-control" name="end1" id="">
                            </div>                     
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="institutionName" placeholder="Institution Name">
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                              <input type="email" name="email1" class="form-control" placeholder="Email">  
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-5">
                                <input type="number" name="amount1" class="form-control" placeholder="Amount">
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-5">
                                <select name="country1" id="" class="form-control">
                                    <option value="">SELECT COUNTRY</option>
                                    <option value="Rwanda">Rwanda</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="message1" id="" cols="30" rows="7" class="form-control" placeholder="About Donating Institution"></textarea>
                        </div>
                        <div class="form-group">
                            <!-- Identify your business so that you can collect the payments. -->
                                <!-- <input type="hidden" name="business"
                                    value="YOUR_PAYPAL_EMAIL_ADDRESS"> -->
                            
                                <!-- Specify a Donate button. -->
                                <!-- <input type="hidden" name="cmd" value="_donations"> -->
                            
                                <!-- Specify details about the contribution -->
                                <!-- <input type="hidden" name="item_name" value="Mutual donation for Rwandan people from our diaspora">
                                <input type="hidden" name="currency_code" value="USD"> -->
                            
                                <!-- Display the payment button. -->
                                <!-- <input type="image" name="submit"
                                src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif"
                                alt="Donate">
                                <img alt="" width="1" height="1"
                                src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" > -->
                                <input type="submit" value="Donate" class="btn btn-primary btn-sm">
                        </div>
                    </form>
                </fieldset>
              <!-- <div id="map" class="bg-white">Rwanda</div> -->
          </div>
        </div>
      </div>
    </section>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript">
    $(function(){
      $("#donate").addClass("active");
    });
  </script>
@endsection