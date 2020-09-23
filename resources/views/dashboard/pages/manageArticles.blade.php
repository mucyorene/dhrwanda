@extends('dashboard/layout.layouts')
@section('title','Dashboard | Individuals Donations')
@section('content')
@extends('dashboard.inc.nav')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Articles Management panel</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            @include('dashboard.inc.message')
                        </div>
                    </div>
                    @if(count($article)>0)
                        @foreach($article as $art)
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-lg-8 col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-6" style="background-image:url('blogImage/{{$art->thumb}}');height:200px;">
                                            
                                        </div>
                                        <div class="col-sm-6">
                                                {{$art->postTitle}}<br>
                                                <div class="mb-5" style="padding-top:40%;">
                                                   <a href="/show.{!!$art->id!!}" class="text-success"><u>Edit</u></a>
                                                    &nbsp &nbsp
                                                    <a href="/pubStatus.{{$art->id}}"><u>{{$art->postStatus}}</u></a>
                                                    &nbsp &nbsp
                                                    <a href="/pr.{{$art->id}}" class="text-warning"><u>Preview</u></a>
                                                    &nbsp &nbsp
                                                    <a href="#"onclick="removeArticle({{$art->id}});" class="text-danger"><u>Remove</u></a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    
                                </div>
                            </div>
                            <br>
                        </div>
                        @endforeach
                        {{$article->links()}}
                    @endif

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <script type="text/javascript">
        function removeArticle(ids){
            var ask = confirm("Do you really want to remove this article?");
            if (ask == true) {
                window.location = '{{URL::to('/removeArt/')}}.'+ids;
            }
        }
    </script>
    <!-- /#page-wrapper -->
@endsection
