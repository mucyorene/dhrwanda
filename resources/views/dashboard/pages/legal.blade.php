@extends('dashboard/layout.layouts');
@section('title','Dashboard | Legal Entities donations')
@section('content')
@extends('dashboard.inc.nav')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Legal Entities Donation</h1>
                </div>
                <!-- /.col-lg-12 -->
                <!--col-lg-12 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of donators
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <!-- <th>N<sup><u>o</u></sup></th> -->
                                        <th>Starting date</th>
                                        <th>Ending date</th>
                                        <th>Institution Name</th>
                                        <th>Email</th>
                                        <th>Amount</th>
                                        <th>Country</th>  
                                        <th>Message</th>                                                                                                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($donationsLegal)>0)
                                        @foreach($donationsLegal as $donations)
                                            <tr class="odd gradeX">
                                                <!-- <td></td> -->
                                                <td>{{$donations->startAt}}</td>
                                                <td>{{$donations->endAt}}</td>
                                                <td>{{$donations->institutionName}}</td>
                                                <td>{{$donations->email}}</td>
                                                <td>{{$donations->amount}}</td>
                                                <td>{{$donations->country}}</td>
                                                <td>{{$donations->message}}</td>
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
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection
