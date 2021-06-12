<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ $setting->website_title }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{  asset('assets/front/img/'.$setting->fav_icon) }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
  @includeif('admin.partials.styles')
  @yield('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
  
<div class="wrapper">

    @include('admin.partials.top-navbar')
    
    @include('admin.partials.side-navbar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      @yield('content')
  </div>
  <!-- /.content-wrapper -->

  @include('admin.partials.footer')

</div>
<!-- ./wrapper -->

@includeif('admin.partials.scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
@yield('scripts')
</body>
</html>
