
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Shapla Media | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  {{-- css link --}}
  @include('admin.layouts.csslink')
</head>
<body class="{{asset('assets/admin/hold-transition sidebar-mini layout-fixed')}}">
<div class="wrapper" id="app">
  <!-- Navbar -->
  @include('admin.layouts.nav')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  {{-- aside --}}
@include('admin.layouts.aside')
  <!-- Content Wrapper. Contains page content -->
@yield('content')  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://Shaplamedia.com">Shaplamedia</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">     
    </div>
  </footer>
  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
{{-- jslink --}}
@include('admin.layouts.jslink')
@stack('customjs')
</body>
</html>
