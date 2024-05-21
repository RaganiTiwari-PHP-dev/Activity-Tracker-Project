@extends('master')

@section('site-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="{{ asset('assets/css/login-style.css')}}" type="text/css">

<body>
    <div class="container">
    <form action="{{url('user/login')}}" method="POST" class="form-group">
        @csrf
        <h2>User Login</h2>
        <label>Enter Email :<input type="email" name="email" required></label>
        <label>Enter Password :<input type="password" name="password" required></label><br>
        <input type="submit" name="submit" value="Login" />
    </form>
    </div>
</body>
</html>
    

@endsection