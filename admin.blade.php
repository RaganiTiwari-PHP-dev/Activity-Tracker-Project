@extends('master')
<!-- Main.blade.php -->

@section('site-content')
<p style="text-align:center;">Welcome Admin, </p>
    <center>

        @if (session()->has('userdata'))
            <b>{{ucfirst(session()->get('userdata')->name)}}</b>
            (
            <b>{{session()->get('userdata')->email}}</b>
            )
        @endif
        </center>
        <hr />
   
    @include('dashboard.layouts.nav')
    @yield('admin-content')
@endsection
