<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
<head>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<link rel="icon" href="{{asset('/')}}/images/admin_dpj.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Management</title>
    @include('frontend.layout.css')
      @yield('css')
    <!-- Favicon -->
</head>
<body>
   
    <!-- Navigation Bar -->
    @include('frontend.layout.main_navigation')
    <!-- Navigation Bar Ends -->
 @yield('content')
    <!-- Footer -->
  @include('frontend.layout.footer')
    <!-- Footer Ends --> 
    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->
    <!-- *Scripts* -->
@include('frontend.layout.js')
 @yield('js')
</body>
</html>
