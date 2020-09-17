@extends('layouts.app2')
@section('content')
  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
          <div class="row">
          @if(count($article)>0)
          @foreach($article as $art)
            <div class="col-md-12 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch d-md-flex">
                <a href="/single.{{$art->id}}" class="block-20" style="background-image: url('blogImage/{{$art->thumb}}');">
                </a>
                <div class="text d-block pl-md-4">
                  <div class="meta mb-3">
                    <div><a href="#">{{$art->created_at}}</a></div>
                    <div><a href="#">Admin</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                  <h3 class="heading"><a href="/single.{{$art->id}}">{!!$art->postTitle!!}</a></h3>
                  <p><a href="/single.{{$art->id}}" class="btn btn-primary py-2 px-3">Read more</a></p>
                </div>
              </div>
            </div>
          @endforeach
            
          @endif
            
            <!-- <div class="col-md-12 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch d-md-flex">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                </a>
                <div class="text d-block pl-md-4">
                  <div class="meta mb-3">
                    <div><a href="#">Sept. 04, 2019</a></div>
                    <div><a href="#">Admin</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Mutual for: Genocide survivers</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-12 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch d-md-flex">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                </a>
                <div class="text d-block pl-md-4">
                  <div class="meta mb-3">
                    <div><a href="#">Sept. 04, 2019</a></div>
                    <div><a href="#">Admin</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Mutual for: Genocide survivers</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-12 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch d-md-flex">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
                </a>
                <div class="text d-block pl-md-4">
                  <div class="meta mb-3">
                    <div><a href="#">Sept. 04, 2019</a></div>
                    <div><a href="#">Admin</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Mutual for: Genocide survivers</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-12 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch d-md-flex">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_5.jpg');">
                </a>
                <div class="text d-block pl-md-4">
                  <div class="meta mb-3">
                    <div><a href="#">Sept. 04, 2019</a></div>
                    <div><a href="#">Admin</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Mutual for: Genocide survivers</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-12 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch d-md-flex">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_6.jpg');">
                </a>
                <div class="text d-block pl-md-4">
                  <div class="meta mb-3">
                    <div><a href="#">Sept. 04, 2019</a></div>
                    <div><a href="#">Admin</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Mutual for: Genocide survivers</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                </div>
              </div>
            </div> -->
          </div>
          <div class="row mt-5">
            <div class="col">
              {{$article->links()}}
            </div>
          </div>
        </div> <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar ftco-animate">
          <div class="sidebar-box">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon ion-ios-search"></span>
                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
              </div>
            </form>
          </div>
          <!-- <div class="sidebar-box ftco-animate">
            <h3 class="heading-2">Categories</h3>
            <ul class="categories">
              <li><a href="#">Bags <span>(12)</span></a></li>
              <li><a href="#">Shoes <span>(22)</span></a></li>
              <li><a href="#">Dress <span>(37)</span></a></li>
              <li><a href="#">Accessories <span>(42)</span></a></li>
              <li><a href="#">Makeup <span>(14)</span></a></li>
              <li><a href="#">Beauty <span>(140)</span></a></li>
            </ul>
          </div> -->
          
            <div class="sidebar-box ftco-animate">
              <h3 class="heading-2">Recent Blog</h3>
              @if(count($recent)>0)
              @foreach($recent as $re)
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('blogImage/{{$re->thumb}}');"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="/single.{!!$re->id!!}">{{$re->postTitle}}</a></h3>
                  <div class="meta">
                    <div><a href="/single.{!!$re->id!!}"><span class="icon-calendar"></span> {{$re->created_at}}</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
                
              </div>
              @endforeach
              @endif
              <!-- <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div> -->
            </div>
          
          
          <!-- <div class="sidebar-box ftco-animate">
            <h3 class="heading-2">Tag Cloud</h3>
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">donate</a>
              <a href="#" class="tag-cloud-link">charity</a>
              <a href="#" class="tag-cloud-link">non-profit</a>
              <a href="#" class="tag-cloud-link">organization</a>
              <a href="#" class="tag-cloud-link">child</a>
              <a href="#" class="tag-cloud-link">abuse</a>
              <a href="#" class="tag-cloud-link">help</a>
              <a href="#" class="tag-cloud-link">volunteer</a>
            </div>
          </div> -->

          <!-- <div class="sidebar-box ftco-animate">
            <h3 class="heading-2">Paragraph</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
          </div> -->
        </div>

      </div>
    </div>
  </section> <!-- .section -->
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript">
    $(function(){
      $("#blog").addClass("active");
    });
  </script>
@endsection