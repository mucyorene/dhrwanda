@extends('dashboard/layout.layouts');
@section('title','Dashboard | Individuals Donations')
@section('content')
@extends('dashboard.inc.nav')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add articles</h1>
                </div>
                <!-- /.col-lg-12 -->

                <!--col-lg-12-->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <form method="POST" action="/ars" class="form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="Post Title" class="form-control-label">
                                        POST TITLE
                                    </label>
                                    <input type="text" name="postTitle" placeholder="Post title" class="form-control">
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
                                    <textarea name="bodys" id="textArea" cols="30" rows="10" class="form-control"></textarea>
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
