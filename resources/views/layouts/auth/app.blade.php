<!-- =========================================================
* Argon Dashboard PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->
 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
   <meta name="author" content="Creative Tim">
   <title>{{ config('app.name', 'Laravel') }}</title>
   <!-- Favicon -->
   <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
   <!-- Fonts -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
   <!-- Icons -->
   <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
   <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
   <!-- Argon CSS -->
   <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.1.0') }}" type="text/css">
 </head>
 
 <body class="bg-default">
   <!-- Navbar -->
   @include('layouts.auth.topbar')
   <!-- Main content -->
   <div class="main-content">
     <!-- Header -->
     <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
       @yield('greeting')
       <div class="separator separator-bottom separator-skew zindex-100">
         <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
           <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
         </svg>
       </div>
     </div>
     <!-- Page content -->
     <div class="container mt--8 pb-5">
       <div class="row justify-content-center">
         @yield('content')
       </div>
     </div>
   </div>
   <!-- Footer -->
   <footer class="py-5" id="footer-main">
     <div class="container">
       <div class="row align-items-center justify-content-xl-between">
         <div class="col-xl-6">
           <div class="copyright text-center text-xl-left text-muted">
             &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
           </div>
         </div>
         <div class="col-xl-6">
           <ul class="nav nav-footer justify-content-center justify-content-xl-end">
             <li class="nav-item">
               <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
             </li>
             <li class="nav-item">
               <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
             </li>
             <li class="nav-item">
               <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
             </li>
             <li class="nav-item">
               <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
             </li>
           </ul>
         </div>
       </div>
     </div>
   </footer>
   <!-- Argon Scripts -->
   <!-- Core -->
   <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
   <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
   <!-- Argon JS -->
   <script src="{{ asset('assets/js/argon.js?v=1.1.0') }}"></script>
 </body>
 
 </html>