@extends('layouts.app')
@section('content')

<div class="container mt-5"> 
<h1 style="font-family:'Gill Sans'; text-align:center">Hi, Welcome to my Profile</h1>
<h5 >Name:{{$name}}</h5><br>
<h5 >ID:{{$id}}</h5><br>
<h5 >Date of Birth:{{$dob}}</h5><br>
<h3 style="font-family:'Gill Sans'; color:#A267AC">Some of my Friends</h3><br>
<ul>
    @foreach($names as $n)
    <li>
        {{$n}}
    </li>
    @endforeach
</ul>
</div>
@endsection