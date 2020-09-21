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
                            <br>
                            <h2><b>{{$pre->postTitle}}</b></h2>
                            <br><br>
                            {!!$pre->content!!}
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
