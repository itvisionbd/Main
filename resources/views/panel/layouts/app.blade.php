<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard-Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('')}}/assets/backend//img/favicon.png" rel="icon">
  <link href="{{ url('')}}/assets/backend//img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('')}}/assets/backend//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ url('')}}/assets/backend//vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ url('')}}/assets/backend//vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ url('')}}/assets/backend//vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{ url('')}}/assets/backend//vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{ url('')}}/assets/backend//vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ url('')}}/assets/backend//vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('')}}/assets/backend//css/style.css" rel="stylesheet">
  <link href="{{ url('')}}/assets/backend//css/font.css" rel="stylesheet">
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
 @yield('style')

</head>

<body>

  <!-- ======= Header ======= -->
  @include('panel.layouts.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('panel.layouts.sidebar')
  <!-- End Sidebar-->
<main id="main" class="main" style="min-height: 80vh;">
  @yield('content')
</main>

  <!-- ======= Footer ======= -->
  @include('panel.layouts.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('')}}/assets/backend//vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ url('')}}/assets/backend//vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ url('')}}/assets/backend//vendor/chart.js/chart.umd.js"></script>
  <script src="{{ url('')}}/assets/backend//vendor/echarts/echarts.min.js"></script>
  <script src="{{ url('')}}/assets/backend//vendor/quill/quill.js"></script>
  <script src="{{ url('')}}/assets/backend//vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ url('')}}/assets/backend//vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ url('')}}/assets/backend//vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('')}}/assets/backend//js/main.js"></script>
   @yield('script')

</body>

</html>