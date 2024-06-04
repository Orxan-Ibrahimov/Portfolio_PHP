<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kelly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  @include('Client.partials.links')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('Client.partials.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <main id="main">
    @yield('content')
  </main>
  <!-- End Hero -->

  <!-- ======= Footer ======= -->
  @include('Client.partials.footer')
  <!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- JS Script Files -->
  @include('Client.partials.scripts')
</body>

</html>