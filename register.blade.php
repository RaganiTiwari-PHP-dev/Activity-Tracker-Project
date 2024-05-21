@extends('master')

@section('site-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/register-style.css')}}" type="text/css">
</head>
<body>
    <div class="container">
    <form action="{{url('user/save')}}" method="POST" class="form-group">
        @csrf
        <h2>User Register</h2>
        <label>Enter Name :<input type="text" name="name" required></label>
        <label>Enter Email :<input type="email" name="email" required></label>
        <label>Enter Password :<input type="password" name="password" required></label>
        <label>Enter mobile :<input type="tel" name="mobile" required></label>
        <label>Select Designation :
            <select name="designation" required>
                <option value="">--select--</option>
                <option>Developer</option>
                <option>Tester</option>
                <option>Lead Engineer</option>
                <option>Team Leader</option>
                <option>Trainee</option>
            </select>
        </label>
        <input type="submit" name="submit" value="register" />
    </form>
    </div>
</body>
</html>
@endsection