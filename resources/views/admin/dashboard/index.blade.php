@extends('admin.dashboard.app')

@section('main')

<h1 style="text-align: center">Hi {{ Auth::user()->name }}</h1>
<div>
   <h3 style="text-align: center">Welcome to Venue Finder Admin Panel</h3> 
</div>

@endsection