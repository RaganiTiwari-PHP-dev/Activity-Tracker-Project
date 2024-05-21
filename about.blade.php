@extends('master')

@section('site-content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Activity Tracker</title>
    <link rel="stylesheet" href="{{ asset('assets/css/about-style.css')}}" type="text/css">
    
</head>
<body>

<header>
    <h1>About Activity Tracker</h1>
</header>

<div class="container">
    <h2>Welcome to Activity Tracker</h2>
    <p>Activity Tracker is your ultimate companion on your journey to a healthier lifestyle. We believe that staying active is the key to a happy and fulfilling life, and our mission is to make it easier for you to track and achieve your fitness goals.</p>
    
    <h2>Discover Beautiful Quests</h2>
    <p>Embark on exciting quests that will take you on adventures while keeping you active. Whether it's hiking through majestic mountains, cycling along scenic trails, or running through vibrant city streets, our quests are designed to make exercise fun and rewarding.</p>
    
    <h2>Image Gallery</h2>
    <div class="image-gallery">
        <img src="{{ asset('assets/images/1.jpg') }}" alt="Quest 1">
        <img src="{{ asset('assets/images/2.jpg') }}" alt="Quest 2">
        <img src="{{ asset('assets/images/3.jpg') }}" alt="Quest 3">
        <!-- Add more images as needed -->
    </div>
</div>

</body>
</html>

@endsection