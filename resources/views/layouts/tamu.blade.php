<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ isset($title) ? $title.' | '.config('app.name') : '' }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
 

  <link rel="stylesheet" href="/css/style.css">
</head>
<body class="hold-transition">
<!-- As a link -->
<!-- navbar -->
@include('layouts.inc_tamu.navbar')
<!-- end navbar -->

<div class="container-fluid p-0">
    <img src="images/banner.png" class="img-fluid w-100">
</div>

<div class="container content">
    @yield('content')
</div>

<footer class="footer">
    <div class="container">
        <span class="text-muted"><strong>Copyright &copy; 2023 Rina Agustisya.</strong> All rights reserved.</span>
    </div>
</footer>



<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>
 <!-- jquery -->
 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@include('sweetalert::alert')
@stack('js1')
</body>
</html>
