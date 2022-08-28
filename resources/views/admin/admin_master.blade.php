<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('frontend/images/logo/favicon.ico')}}" type="image/x-icon">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dream Travel Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
         <link href="{{ url('backend/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">
     <script src="https://cdn.tiny.cloud/1/j0fo0z3pp2mbw21gjxqteavuxcsd7os6f1ufixbeunib4gis/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Custom styles for this template-->
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       @include('admin.body.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

              @include('admin.body.top')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('admin')
                   
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          
        @include('admin.body.footer')
</body>

</html>