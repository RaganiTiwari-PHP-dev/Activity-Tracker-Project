@extends('master')

@section('site-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/home-style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" type="text/css">
    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
</head>
<body>
<h1 style="text-align:center;font-size:40px;margin-top:25px;">Activity Tracker Management Tool</h1>
<!-- start slider -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousal">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-target="1000">
      <img src="{{asset('assets/images/4a.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-target="1000">
      <img src="{{asset('assets/images/1a.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-target="1000">
      <img src="{{asset('assets/images/2.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- end slider -->
<div class="content">
   
    <p>Modern Task Need Modern Solution</p>

</div>

</body>
</html>

   
@endsection