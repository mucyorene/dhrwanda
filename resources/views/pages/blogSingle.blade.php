@extends('layouts.app2')
@section('content')
   	<section class="ftco-section">
      <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 ftco-animate" style="overflow-x:scroll;">
            <h2 class="mb-3">{{$singles->postTitle}}</h2>
                  {!!$singles->content!!}
                  <!-- <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                      <a href="#" class="tag-cloud-link">child</a>
                      <a href="#" class="tag-cloud-link">help</a>
                      <a href="#" class="tag-cloud-link">give</a>
                      <a href="#" class="tag-cloud-link">charity</a>
                    </div>
                  </div> -->
                  <!-- <div class="about-author d-flex p-4 bg-light">
                    <div class="bio mr-5">
                      <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
                    </div>
                    <div class="desc">
                      <h3>George Washington</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia
                      delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                  </div> -->
                  <div class="pt-5 mt-5">
                    <h3 class="mb-5">
                      @if(count($comments)>0)
                        {{$var=count($comments)}} Comments
                      @else
                      
                      @endif
                    </h3>
                    <ul class="comment-list">
                      @if(count($comments)>0)
                        @foreach($comments as $comment)
                            <li class="comment">
                              <div class="vcard bio">
                                <img src="images/person_1.jpg" alt="Image placeholder">
                              </div>
                              <div class="comment-body">
                                <h3>{{$comment->name}}</h3>
                                <div class="meta">{{$comment->created_at}}</div>
                                <p>{{$comment->message}}</p>
                                <!-- <p><a href="#" class="reply">Reply</a></p> -->
                              </div>
                            </li>
                        @endforeach
                      @else
                        Be the first to comment
                      @endif
                      <!-- <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>John Doe</h3>
                          <div class="meta">Sep. 05, 2019 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit 
                          vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>
                        <ul class="children">
                          <li class="comment">
                            <div class="vcard bio">
                              <img src="images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                              <h3>John Doe</h3>
                              <div class="meta">Sep. 05, 2019 at 2:21pm</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit
                              vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, 
                              nihil?</p>
                              <p><a href="#" class="reply">Reply</a></p>
                            </div>
                            <ul class="children">
                              <li class="comment">
                                <div class="vcard bio">
                                  <img src="images/person_1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                  <h3>John Doe</h3>
                                  <div class="meta">Sep. 05, 2019 at 2:21pm</div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam 
                                  impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit 
                                  necessitatibus, nihil?</p>
                                  <p><a href="#" class="reply">Reply</a></p>
                                </div>

                                  <ul class="children">
                                    <li class="comment">
                                      <div class="vcard bio">
                                        <img src="images/person_1.jpg" alt="Image placeholder">
                                      </div>
                                      <div class="comment-body">
                                        <h3>John Doe</h3>
                                        <div class="meta">Sep. 05, 2019 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                        <p><a href="#" class="reply">Reply</a></p>
                                      </div>
                                    </li>
                                  </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li> -->

                      <!-- <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>John Doe</h3>
                          <div class="meta">Sep. 05, 2019 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>
                      </li> -->
                    </ul>
                    <div class="comment-form-wrap pt-5">
                      <h3 class="mb-5">Leave a comment</h3>
                      <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                          @include('dashboard.inc.message')
                        </div>
                      </div>
                      <form method="POST" action="/leaveComments.{{$singles->id}}" class="p-5 bg-light">
                      {{ csrf_field() }}
                        <div class="form-group">
                          <label for="name">Name <span class="text-danger">*</span></label>
                          <input type="text" required class="form-control" name="cNames" required id="name" placeholder="Names">
                        </div>
                        <div class="form-group">
                          <label for="email">Email <span class="text-danger">*</span></label>
                          <input type="email" class="form-control" name="cEmail" id="email" required placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="message">Message <span class="text-danger">*</span></label>
                          <textarea name="cMessage" id="message" placeholder="Type..." required cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                        </div>
                      </form>
                    </div>
                    
                  </div>
              
            </div>
           <!-- .col-md-8 -->
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
                @foreach($recent as $rec)
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(blogImage/{{$rec->thumb}});"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="/single.{{$rec->id}}">{{$rec->postTitle}}</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span>{{$rec->created_at}}</a></div>
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
                    <div><a href="#"><span class="icon-calendar"></span> Sept 04, 2019</a></div>
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
                    <div><a href="#"><span class="icon-calendar"></span> Sept 04, 2019</a></div>
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