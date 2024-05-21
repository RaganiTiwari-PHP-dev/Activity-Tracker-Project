@extends('master')

@section('site-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        h2 {
            color: #333;
            text-align: center;
        }
        input[type="text"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"] :hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Task Name</h2>
    <input type="text" name="name" id=""><br>
    <input type="submit" name="submit" value="Submit">
</body>
</html>

@endsection