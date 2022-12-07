<!DOCTYPE html>
<html lang="en">

<head>
   <title>Sistem Absensi | @yield('title')</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicon/favicon.ico') }}" />

   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

   <link rel="stylesheet" href="{{ asset('users/assets/css/open-iconic-bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('users/assets/css/animate.css') }}">

   <link rel="stylesheet" href="{{ asset('users/assets/css/owl.carousel.min.css') }}">
   <link rel="stylesheet" href="{{ asset('users/assets/css/owl.theme.default.min.css') }}">
   <link rel="stylesheet" href="{{ asset('users/assets/css/magnific-popup.css') }}">

   <link rel="stylesheet" href="{{ asset('admin\assets\css\dataTables.bootstrap4.css') }}">

   <link rel="stylesheet" href="{{ asset('users/assets/css/aos.css') }}">

   <link rel="stylesheet" href="{{ asset('users/assets/css/ionicons.min.css') }}">

   <link rel="stylesheet" href="{{ asset('users/assets/css/bootstrap-datepicker.css') }}">
   <link rel="stylesheet" href="{{ asset('users/assets/css/jquery.timepicker.css') }}">


   <link rel="stylesheet" href="{{ asset('users/assets/css/flaticon.css') }}">
   <link rel="stylesheet" href="{{ asset('users/assets/css/icomoon.css') }}">
   <link rel="stylesheet" href="{{ asset('users/assets/css/style.css') }}">
</head>

<body>

   <div id="colorlib-page">
      <!-- END COLORLIB-ASIDE -->
      <div id="colorlib-main">
         @include('layouts.partials.users.sidebar')
         <div class="container mt-5">
            <div class="d-flex justify-content-between">
               <h1>@yield('content2')</h1>
               @yield('btnDownload')
            </div>
         </div>
            <div class="container mb-5">
               <div class="container">
                  @yield('content')
               </div>
            </div>
         @include('layouts.partials.users.footer')
      </div><!-- END COLORLIB-MAIN -->
   </div><!-- END COLORLIB-PAGE -->

   <!-- loader -->
   <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
         <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
         <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
      </svg></div>


   <script src="{{ asset('users/assets/js/jquery.min.js') }}"></script>
   <script src="{{ asset('users/assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
   <script src="{{ asset('users/assets/js/popper.min.js') }}"></script>
   <script src="{{ asset('users/assets/js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('users/assets/js/jquery.easing.1.3.js') }}"></script>
   <script src="{{ asset('users/assets/js/jquery.waypoints.min.js') }}"></script>
   <script src="{{ asset('users/assets/js/jquery.stellar.min.js') }}"></script>
   <script src="{{ asset('users/assets/js/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('users/assets/js/jquery.magnific-popup.min.js') }}"></script>
   <script src="{{ asset('users/assets/js/aos.js') }}"></script>
   <script src="{{ asset('users/assets/js/jquery.animateNumber.min.js') }}"></script>
   <script src="{{ asset('users/assets/js/bootstrap-datepicker.js') }}"></script>
   <script src="{{ asset('users/assets/js/jquery.timepicker.min.js') }}"></script>
   <script src="{{ asset('users/assets/js/scrollax.min.js') }}"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
   </script>
   <script src="{{ asset('users/assets/js/google-map.js') }}"></script>
   <script src="{{ asset('users/assets/js/main.js') }}"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src='{{ asset('admin/assets/js/jquery.dataTables.min.js') }}'></script>
   <script src='{{ asset('admin/assets/js/dataTables.bootstrap4.min.js') }}'></script>
   <script>
       $('#dataTable-1').DataTable({
       autoWidth: true,
       "lengthMenu": [
         [3, 10, 20, -1],
         [3, 10, 20, "All"]
       ]
     });
   </script>
@stack('scripts')
</body>

</html>