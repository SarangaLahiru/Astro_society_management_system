

@extends('header')
@section('titl','Home Page');
@section('main')
   <h2>This is our home pages</h2>
   <h2>{{Session::get('name')}}</h2>
    <h2>{{Session::get('email')}}</h2>
    <h2>{{Session::get('otp')}}</h2>
@endsection
