<!doctype html>
<html lang="en">
  @include('admin.parcials.head')
  <body class="vertical  light  ">
    <div class="wrapper">
     @include('admin.parcials.navbar')
     @include('admin.parcials.sidebar')
       <!-- main -->

       @yield('content')
    </div> <!-- .wrapper -->
  @include('admin.parcials.script')
  </body>
</html>
