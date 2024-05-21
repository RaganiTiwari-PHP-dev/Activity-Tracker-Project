<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Master Layout Nav</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  
  <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/master-style.css') }}" />
  
</head>
<body>
    <!-- Nav Includes start -->
    @include('layouts.nav')
    <!-- Nav Includes End -->

    <div class="container-wrapper">
    <!-- Content Section start-->
    @yield('site-content')
    <!-- Content Section End-->
    </div>
    <!-- Footer Includes start -->
    @include('layouts.footer')
    <!-- Footer Includes End -->
   

</body>
</html>
