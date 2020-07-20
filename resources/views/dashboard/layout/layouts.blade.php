<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="dashboard/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dashboard/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="dashboard/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="dashboard/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- CKEDITOR -->
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckeditor/vendor/promise.js"></script>    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">
        @yield('content')
    </div>
</body>
</html>
    <!-- jQuery -->
    <script src="dashboard/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="dashboard/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="dashboard/vendor/raphael/raphael.min.js"></script>
    <script src="dashboard/vendor/morrisjs/morris.min.js"></script>
    <script src="dashboard/data/morris-data.js"></script>

    <!-- DataTables JavaScript -->
    <script src="dashboard/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="dashboard/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="dashboard/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dashboard/dist/js/sb-admin-2.js"></script>
    <!-- CK Editor -->
    
    
    
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
    <script type="text/javascript">
       CKEDITOR.replace('textArea',{
           filebrowserUploadUrl:"{{route('uploads',['_token'=>csrf_token()])}}",
           filebrowserUploadMethod:'form',
        //    extraPlugins: 'imageuploader'
       });
    </script>