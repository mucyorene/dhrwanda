@extends('dashboard/layout.layouts')
@section('title','Dashboard')
@section('content')
@extends('dashboard.inc.nav')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Users</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row justify-content-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            @include('dashboard.inc.message')
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <a href="{{ route('register') }}" class="btn btn-primary" style="float:right;">Add User</a><br><br>
                        <div class="panel-heading">
                            List of donators
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <!-- <th>N<sup><u>o</u></sup></th> -->
                                        <th>Names</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Remove</th>                                                                                                                    
                                    </tr>
                                </thead>
                                <tbody>
                                @if(count($users)>0)
                                    @foreach($users as $user)
                                        <tr class="odd gradeX">
                                            <!-- <td></td> -->
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>Admin</td>
                                            <td><a id="idUser" onclick="getId({{$user->id}})" class="btn btn-danger btn-flat btn-sm">Remove</a></td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
        </div>
</html>
<script type="text/javascript">
    function getId(ids){
       var really = confirm('Do you really want to remove this user?');
       if (really == true) {
           window.location = '{{URL::to('/removeUser/')}}.'+ids;
       }
    }
</script>
@endsection