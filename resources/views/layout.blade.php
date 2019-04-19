<!doctype html>
<html class="no-js" lang="en">

<head>
   @include('layouts.partials.head')
</head>

<body>
     <!--[if lt IE 8]>
73	
               <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
74	
       <![endif]-->

    <!-- Start Left menu area -->
    
    @include('layouts.partials.left-menu')
    <!-- End Left menu area -->

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
      @include('layouts.partials.header')
      @include('layouts.partials.header-mobile')
      @yield('content') 
      @include('layouts.partials.footer')
      @include('layouts.partials.footer-scripts')
    </div>
</body>

</html>