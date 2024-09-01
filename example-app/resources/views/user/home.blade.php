<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Medion</title>
  @include('user.css')
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('user.header')
    <!-- end header section -->
    <!-- slider section -->
    @include('user.start')
    <!-- end slider section -->
  </div>



  @include('user.middle')
  @include('user.health')

  @include('user.client')

  @include('user.requests')

  @include('user.footer')
  <!-- end footer section -->
  @include('user.script')
</body>

</html>