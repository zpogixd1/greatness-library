<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Library System for QCU to help in monitoring and management of books and visitors.">
    <meta name="keywords" content="library, Quezon City University, QCU, Library System, System">
    <meta name="author" content="zyrusinso">
    <link rel="icon" href="{{asset('assets/img/Library.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/img/Library.png')}}" type="image/x-icon">
    <title>@yield('title')</title>

    <!-- Google font-->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet"> --}}
    @includeIf('app.layouts.partials.js-init')
    <!-- Font Awesome-->
    @includeIf('app.layouts.partials.css')
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-sidebar" id="pageWrapper">
      <!-- Page Header Start-->
      @includeIf('app.layouts.partials.header')
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        @includeIf('app.layouts.partials.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body" style="margin-top: 20px">
          <!-- Container-fluid starts-->
          @yield('content')
          <!-- Container-fluid Ends-->
        </div>
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 footer-copyright d-flex justify-content-center align-items-center">
                <p class="mb-0">Copyright {{date('Y')}}-{{date('y', strtotime('+1 year'))}} © <a href="#" target="_blank">Group 9 SBIT-1A</a> All rights reserved.</p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    @includeIf('app.layouts.partials.js')
  </body>
</html>