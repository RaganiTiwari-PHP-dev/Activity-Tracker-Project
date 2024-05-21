@extends('dashboard.admin')

@section('admin-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        h1 {
            font-size: 2rem;
            color: #333;
            margin: 1rem 0;
            text-align: center;
        }

        p {
            font-size: 1rem;
            color: #333;
            margin: 0 0 1rem 0;
            text-align: justify;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin: 0 0 0.5rem 0;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 0.5rem;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        button {
            padding: 0.5rem 1rem;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Project List</h2><hr>
            <a href="{{url('task/add')}}">
                <button>
                    Add Project
                </button>
            </a>
        </p>
        <table border="1" rules="all">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Team Name</th>
                    <th>Status</th>
                    <th>Manager Name</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Task 1</td>
                    <td>Pending</td>
                    <td>xyz</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

@endsection
