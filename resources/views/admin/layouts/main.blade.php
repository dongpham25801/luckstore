<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LuckShop Admin</title>
    <base href="{{ url('/') . '/DarkAdmin/' }}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="template/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="template/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="template/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="template/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="template/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="template/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="template/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="template/assets/images/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="template/toastr/toastr.css">
    <style>
        .card-title{
            font-family: Tahoma;
        }
    </style>
</head>
<body>
{{--    <div class="wrapper">--}}
    <div class="container-scroller">

        <!-- Sidebar Container -->
        @include('admin.layouts.sidebar')
        <div class="container-fluid page-body-wrapper">
            {{--Nar bar--}}
            @include('admin.layouts.navbar')
            {{--Main-Content--}}
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                {{--footer--}}
            </div>
        </div>
    </div>
    @include('admin.layouts.footer')

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="template/assets/jquery/jquery.min.js"></script>
    <!-- plugins:js -->
    <script src="template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="template/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="template/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="template/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="template/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="template/assets/js/off-canvas.js"></script>
    <script src="template/assets/js/hoverable-collapse.js"></script>
    <script src="template/assets/js/misc.js"></script>
    <script src="template/assets/js/settings.js"></script>
    <script src="template/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="template/assets/js/dashboard.js"></script>
{{--    <script src="template/assets/js/select2.js"></script>--}}
    <!-- End custom js for this page -->
    <script src="template/toastr/toastr.min.js"></script>
    <script src="template/admin-js/crud-cate.js"></script>
    <script src="template/admin-js/crud-product-type.js"></script>
    <script src="template/admin-js/crud-products.js"></script>
    <script src="template/admin-js/crud-brand.js"></script>
    <script src="template/admin-js/crud-member.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" charset="utf-8">
        CKEDITOR.replace('descript');
        // $('.discountPro').hide();

    </script>
    @if(session('error'))
        <script type="text/javascript">
            toastr.error('{{ session('error') }}', 'Thông báo', {timeOut:3500});
        </script>
    @endif
    @if(session('success'))
        <script type="text/javascript">
            toastr.success('{{ session('success') }}', 'Thông báo', {timeOut:3500});
        </script>
    @endif
</body>
</html>
