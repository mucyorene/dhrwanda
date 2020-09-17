@extends('dashboard/layout.layouts');
@section('title','Dashboard | Individuals Donations')
@section('content')
@extends('dashboard.inc.nav')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit article</h1>
                </div>
                <!-- /.col-lg-12 -->

                <!--col-lg-12-->
                <div class="col-lg-12">
                    <div class="row">
                        
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                        <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <a href="/manageArticles" class="btn btn-sm btn-info">
                                Back
                            </a>
                        </div>
                        </div>
                            <form method="POST" action="/edit.{{$shows->id}}" class="form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="Post Title" class="form-control-label">
                                        POST TITLE
                                    </label>
                                    <input type="text" name="postTitle" value="{{$shows->postTitle}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Post Title" class="form-control-label">
                                        POST THUMBNAIL
                                    </label>
                                    <input type="file" name="thumbnail" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Post Title" class="form-control-label">
                                        CONTENT
                                    </label>
                                    <textarea name="bodys" id="textArea" cols="30" rows="10" class="form-control">{{$shows->content}}</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-sm btn-primary" value="Publish">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-2"></div>                        
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection
