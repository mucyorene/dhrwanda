@extends('dashboard/layout.layouts')
@section('title','Dashboard | Individuals Donations')
@section('content')
@extends('dashboard.inc.nav')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Individual's Donations</h1>
                </div>
                <!-- /.col-lg-12 -->
                <!-- Col-lg-12 -->
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            List of donators
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <!-- <th>N<sup><u>o</u></sup></th> -->
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Country</th>  
                                        <th>Phone Number</th>
                                        <th>Amount</th>  
                                        <th>Message</th>                                                                                                                                                          
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($individuals)>0)
                                        @foreach($individuals as $donations)
                                            <tr class="odd gradeX">
                                                <!-- <td></td> -->
                                                <td>{{$donations->firstName}}</td>
                                                <td>{{$donations->lastName}}</td>
                                                <td>{{$donations->email}}</td>
                                                <td>{{$donations->country}}</td>
                                                <td>{{$donations->phoneNumber}}</td>
                                                <td>{{$donations->amount}}</td>
                                                <td>{{$donations->message}}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                    No data found
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
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection
